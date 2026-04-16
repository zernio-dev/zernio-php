# Late\GMBPlaceActionsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createGoogleBusinessPlaceAction()**](GMBPlaceActionsApi.md#createGoogleBusinessPlaceAction) | **POST** /v1/accounts/{accountId}/gmb-place-actions | Create action link |
| [**deleteGoogleBusinessPlaceAction()**](GMBPlaceActionsApi.md#deleteGoogleBusinessPlaceAction) | **DELETE** /v1/accounts/{accountId}/gmb-place-actions | Delete action link |
| [**listGoogleBusinessPlaceActions()**](GMBPlaceActionsApi.md#listGoogleBusinessPlaceActions) | **GET** /v1/accounts/{accountId}/gmb-place-actions | List action links |
| [**updateGoogleBusinessPlaceAction()**](GMBPlaceActionsApi.md#updateGoogleBusinessPlaceAction) | **PATCH** /v1/accounts/{accountId}/gmb-place-actions | Update action link |


## `createGoogleBusinessPlaceAction()`

```php
createGoogleBusinessPlaceAction($account_id, $create_google_business_place_action_request, $location_id): \Late\Model\CreateGoogleBusinessPlaceAction200Response
```

Create action link

Creates a place action link for a location.  Available action types: APPOINTMENT, ONLINE_APPOINTMENT, DINING_RESERVATION, FOOD_ORDERING, FOOD_DELIVERY, FOOD_TAKEOUT, SHOP_ONLINE.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\GMBPlaceActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$create_google_business_place_action_request = {"uri":"https://order.ubereats.com/joespizza","placeActionType":"FOOD_ORDERING"}; // \Late\Model\CreateGoogleBusinessPlaceActionRequest
$location_id = 'location_id_example'; // string | Override which location to target. If omitted, uses the account's selected location. Use GET /gmb-locations to list valid IDs.

try {
    $result = $apiInstance->createGoogleBusinessPlaceAction($account_id, $create_google_business_place_action_request, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBPlaceActionsApi->createGoogleBusinessPlaceAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **create_google_business_place_action_request** | [**\Late\Model\CreateGoogleBusinessPlaceActionRequest**](../Model/CreateGoogleBusinessPlaceActionRequest.md)|  | |
| **location_id** | **string**| Override which location to target. If omitted, uses the account&#39;s selected location. Use GET /gmb-locations to list valid IDs. | [optional] |

### Return type

[**\Late\Model\CreateGoogleBusinessPlaceAction200Response**](../Model/CreateGoogleBusinessPlaceAction200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGoogleBusinessPlaceAction()`

```php
deleteGoogleBusinessPlaceAction($account_id, $name, $location_id): \Late\Model\DeleteGoogleBusinessPlaceAction200Response
```

Delete action link

Deletes a place action link (e.g. booking or ordering URL) from a GBP location.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\GMBPlaceActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$name = 'name_example'; // string | The resource name of the place action link (e.g. locations/123/placeActionLinks/456)
$location_id = 'location_id_example'; // string | Override which location to target. If omitted, uses the account's selected location. Use GET /gmb-locations to list valid IDs.

try {
    $result = $apiInstance->deleteGoogleBusinessPlaceAction($account_id, $name, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBPlaceActionsApi->deleteGoogleBusinessPlaceAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **name** | **string**| The resource name of the place action link (e.g. locations/123/placeActionLinks/456) | |
| **location_id** | **string**| Override which location to target. If omitted, uses the account&#39;s selected location. Use GET /gmb-locations to list valid IDs. | [optional] |

### Return type

[**\Late\Model\DeleteGoogleBusinessPlaceAction200Response**](../Model/DeleteGoogleBusinessPlaceAction200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGoogleBusinessPlaceActions()`

```php
listGoogleBusinessPlaceActions($account_id, $location_id, $page_size, $page_token): \Late\Model\ListGoogleBusinessPlaceActions200Response
```

List action links

Lists place action links for a Google Business Profile location.  Place actions are the booking, ordering, and reservation buttons that appear on your listing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\GMBPlaceActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$location_id = 'location_id_example'; // string | Override which location to query. If omitted, uses the account's selected location. Use GET /gmb-locations to list valid IDs.
$page_size = 100; // int
$page_token = 'page_token_example'; // string

try {
    $result = $apiInstance->listGoogleBusinessPlaceActions($account_id, $location_id, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBPlaceActionsApi->listGoogleBusinessPlaceActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **location_id** | **string**| Override which location to query. If omitted, uses the account&#39;s selected location. Use GET /gmb-locations to list valid IDs. | [optional] |
| **page_size** | **int**|  | [optional] [default to 100] |
| **page_token** | **string**|  | [optional] |

### Return type

[**\Late\Model\ListGoogleBusinessPlaceActions200Response**](../Model/ListGoogleBusinessPlaceActions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGoogleBusinessPlaceAction()`

```php
updateGoogleBusinessPlaceAction($account_id, $update_google_business_place_action_request, $location_id): \Late\Model\UpdateGoogleBusinessPlaceAction200Response
```

Update action link

Updates a place action link (change URL or action type). Only the fields included in the request body will be updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\GMBPlaceActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_google_business_place_action_request = {"name":"locations/123/placeActionLinks/456","uri":"https://order.doordash.com/joespizza"}; // \Late\Model\UpdateGoogleBusinessPlaceActionRequest
$location_id = 'location_id_example'; // string | Override which location to target. If omitted, uses the account's selected location.

try {
    $result = $apiInstance->updateGoogleBusinessPlaceAction($account_id, $update_google_business_place_action_request, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBPlaceActionsApi->updateGoogleBusinessPlaceAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **update_google_business_place_action_request** | [**\Late\Model\UpdateGoogleBusinessPlaceActionRequest**](../Model/UpdateGoogleBusinessPlaceActionRequest.md)|  | |
| **location_id** | **string**| Override which location to target. If omitted, uses the account&#39;s selected location. | [optional] |

### Return type

[**\Late\Model\UpdateGoogleBusinessPlaceAction200Response**](../Model/UpdateGoogleBusinessPlaceAction200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
