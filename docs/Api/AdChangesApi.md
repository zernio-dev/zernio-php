# Zernio\AdChangesApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**confirmAdChange()**](AdChangesApi.md#confirmAdChange) | **POST** /v1/ads/changes/{changeId}/confirm | Confirm a staged ad change |
| [**discardAdChange()**](AdChangesApi.md#discardAdChange) | **DELETE** /v1/ads/changes/{changeId} | Discard a staged ad change |
| [**getAdChange()**](AdChangesApi.md#getAdChange) | **GET** /v1/ads/changes/{changeId} | Get a staged ad change |
| [**listAdChanges()**](AdChangesApi.md#listAdChanges) | **GET** /v1/ads/changes | List staged ad changes |


## `confirmAdChange()`

```php
confirmAdChange($change_id): array<string,mixed>
```

Confirm a staged ad change

Applies a staged change and returns what the direct write returns: the response body of the route the change was staged on.  The caller needs the same access to the object as for the direct write, and the checks of that write run here, including the live ads allowance.  ### Changed since staging  Before writing, the object is read from the ad network again and compared with what it held when the change was staged.  If it changed in between, nothing is written and the answer is `409` `change_target_changed` with the current values in `details.current`. The change stays `staged` and reads `stale: true`. Discard it and stage the change again from those values.  After a confirm, the other staged changes on the same object are read again, so confirming one of two changes on an object does not refuse the other.  ### Retrying  A change is applied at most once. Confirming a change that is already `confirmed` returns its stored result again. A change that failed answers `409` `change_not_staged`: stage a new one.  A refusal before anything is written leaves the change `staged`, so the confirm can be sent again: `403` `ads_allowance_exceeded`, or on a one-field change a `429` from Zernio's own limits. Any other failed write ends the change as `failed`.  ### Creates  A staged create is sent once. The ad network checks at confirm whatever it did not check at staging, and media is fetched here. A create that fails ends as `failed` and is not retried: `error.details` keeps what the create reported about objects it had already made.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdChangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$change_id = 'change_id_example'; // string | The id of the staged change.

try {
    $result = $apiInstance->confirmAdChange($change_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdChangesApi->confirmAdChange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **change_id** | **string**| The id of the staged change. | |

### Return type

**array<string,mixed>**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `discardAdChange()`

```php
discardAdChange($change_id)
```

Discard a staged ad change

Deletes a change that is still staged. Nothing was written to the ad network, so there is nothing to undo.  A change that was already confirmed or has failed cannot be discarded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdChangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$change_id = 'change_id_example'; // string | The id of the staged change.

try {
    $apiInstance->discardAdChange($change_id);
} catch (Exception $e) {
    echo 'Exception when calling AdChangesApi->discardAdChange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **change_id** | **string**| The id of the staged change. | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdChange()`

```php
getAdChange($change_id): \Zernio\Model\GetAdChange200Response
```

Get a staged ad change

Returns one ad change with its before/after diff. A change is created by sending a supported ad write with `stage: true`.  A staged change does not expire. A confirmed or failed change stays readable for 7 days, a failed create for 30 days. Disconnecting the connection of a staged change deletes it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdChangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$change_id = 'change_id_example'; // string | The id of the staged change.

try {
    $result = $apiInstance->getAdChange($change_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdChangesApi->getAdChange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **change_id** | **string**| The id of the staged change. | |

### Return type

[**\Zernio\Model\GetAdChange200Response**](../Model/GetAdChange200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdChanges()`

```php
listAdChanges($limit, $cursor): \Zernio\Model\ListAdChanges200Response
```

List staged ad changes

Lists the ad changes waiting to be confirmed or discarded, newest first. A confirmed or failed change is not listed; read it by id.  Each item is a summary without the diff. Read one change to get its before/after values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdChangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | How many changes to return.
$cursor = 'cursor_example'; // string | The `nextCursor` of the previous page, unchanged.

try {
    $result = $apiInstance->listAdChanges($limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdChangesApi->listAdChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| How many changes to return. | [optional] [default to 50] |
| **cursor** | **string**| The &#x60;nextCursor&#x60; of the previous page, unchanged. | [optional] |

### Return type

[**\Zernio\Model\ListAdChanges200Response**](../Model/ListAdChanges200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
