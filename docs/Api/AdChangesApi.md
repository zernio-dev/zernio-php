# Zernio\AdChangesApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**confirmAdChange()**](AdChangesApi.md#confirmAdChange) | **POST** /v1/ads/changes/{changeId}/confirm | Confirm a staged ad change |
| [**discardAdChange()**](AdChangesApi.md#discardAdChange) | **DELETE** /v1/ads/changes/{changeId} | Discard a staged ad change |
| [**getAdChange()**](AdChangesApi.md#getAdChange) | **GET** /v1/ads/changes/{changeId} | Get a staged ad change |
| [**listAdChanges()**](AdChangesApi.md#listAdChanges) | **GET** /v1/ads/changes | List staged ad changes |
| [**restageAdChange()**](AdChangesApi.md#restageAdChange) | **POST** /v1/ads/changes/{changeId}/restage | Stage a failed ad change again |
| [**updateAdChange()**](AdChangesApi.md#updateAdChange) | **PATCH** /v1/ads/changes/{changeId} | Edit or refresh a staged ad change |


## `confirmAdChange()`

```php
confirmAdChange($change_id): array<string,mixed>
```

Confirm a staged ad change

Applies a staged change and returns what the direct write returns: the response body of the route the change was staged on.  The caller needs the same access to the object as for the direct write, and the checks of that write run here, including the live ads allowance.  ### Changed since staging  Before writing, the object is read from the ad network again and compared with what it held when the change was staged.  If it changed in between, nothing is written and the answer is `409` `change_target_changed` with the current values in `details.current`. The change stays `staged` and reads `stale: true`. Refresh it with PATCH /v1/ads/changes/{changeId}, or discard it and stage the change again from those values.  A change of type `operation` has no such check: its request is sent through its own route as it was stored.  After a confirm, the other staged changes on the same object are read again, so confirming one of two changes on an object does not refuse the other.  ### Retrying  A change is applied at most once. Confirming a change that is already `confirmed` returns its stored result again. A change that failed answers `409` `change_not_staged`: stage a new one.  A refusal before anything is written leaves the change `staged`, so the confirm can be sent again: `403` `ads_allowance_exceeded`, or on a one-field change a `429` from Zernio's own limits. Any other failed write ends the change as `failed`.  ### Creates  A staged create is sent once. The ad network checks at confirm whatever it did not check at staging, and media is fetched here. A create that fails ends as `failed` and is not retried: `error.details` keeps what the create reported about objects it had already made.

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

Returns one ad change with its before/after diff. A change is created by sending a supported ad write with `stage: true`.  Campaign, ad set and ad edits, status changes and creates stage with a live read and a diff against the current values.  Every other write listed under `request.operation` stages as its request. Send `stage: true` in its body, or `?stage=true` on a write without a body. The answer is `202` with the change.  A staged change does not expire. A confirmed or failed change stays readable for 7 days, a failed create for 30 days. Disconnecting the connection of a staged change deletes it.

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
listAdChanges($status, $account_id, $platform, $type, $created_by, $limit, $cursor): \Zernio\Model\ListAdChanges200Response
```

List staged ad changes

Lists the ad changes waiting to be confirmed or discarded, newest first. With `status=failed` it lists the changes a confirm could not apply, each with its error, until they are deleted (7 days, 30 for a failed create). A confirmed change is not listed; read it by id.  Each item is a summary without the diff. Read one change to get its before/after values.

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
$status = 'staged'; // string | Which changes to list.
$account_id = 'account_id_example'; // string | Only the changes of this connected account.
$platform = 'platform_example'; // string | Only the changes on this ad platform, as the change names it (for example `facebook` or `google`).
$type = 'type_example'; // string | Only the changes of this type.
$created_by = 'created_by_example'; // string | Only the changes this user staged.
$limit = 50; // int | How many changes to return.
$cursor = 'cursor_example'; // string | The `nextCursor` of the previous page, unchanged.

try {
    $result = $apiInstance->listAdChanges($status, $account_id, $platform, $type, $created_by, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdChangesApi->listAdChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **string**| Which changes to list. | [optional] [default to &#39;staged&#39;] |
| **account_id** | **string**| Only the changes of this connected account. | [optional] |
| **platform** | **string**| Only the changes on this ad platform, as the change names it (for example &#x60;facebook&#x60; or &#x60;google&#x60;). | [optional] |
| **type** | **string**| Only the changes of this type. | [optional] |
| **created_by** | **string**| Only the changes this user staged. | [optional] |
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

## `restageAdChange()`

```php
restageAdChange($change_id): \Zernio\Model\GetAdChange200Response
```

Stage a failed ad change again

Makes a new staged change from a change that failed at confirm. Nothing is written to the ad network.  The new change holds the same request. It is checked for the calling user, and an edit is read against the current values of its object. The failed change stays readable until it is deleted.  A failed create cannot be staged again (`409`): it may have made part of its objects on the ad network, which its `error.details` lists. Stage a new create instead. This covers every change with `creates: true`.  Also refused with `409`: a change that failed as `change_outcome_unknown`, and a change whose kept uploads were deleted or moved to an earlier restage.

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
$change_id = 'change_id_example'; // string | The id of the failed change.

try {
    $result = $apiInstance->restageAdChange($change_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdChangesApi->restageAdChange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **change_id** | **string**| The id of the failed change. | |

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

## `updateAdChange()`

```php
updateAdChange($change_id, $request_body): \Zernio\Model\GetAdChange200Response
```

Edit or refresh a staged ad change

Replaces the request body of a staged change, or reads its object again when no body is sent. The change keeps its id. Nothing is written to the ad network.  ### Edit  Send the new body: the same kind of body as the route the change was staged on, without `stage`. It passes the checks of staging again for the calling user. The object is read again, so the diff and the changed-since check start from its current values.  A change of type `operation` stores a whole request and cannot be edited in place (`409`): discard it and stage the request again.  ### Refresh  Send no body. The object is read again with the body the change already holds. Use it on a change that reads `stale: true` after a confirm answered `409` `change_target_changed`: once refreshed it can be confirmed.

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
$request_body = {"budget":{"amount":25,"type":"daily"}}; // array<string,mixed>

try {
    $result = $apiInstance->updateAdChange($change_id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdChangesApi->updateAdChange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **change_id** | **string**| The id of the staged change. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

### Return type

[**\Zernio\Model\GetAdChange200Response**](../Model/GetAdChange200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
