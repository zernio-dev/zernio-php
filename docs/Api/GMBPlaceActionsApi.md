# Late\GMBPlaceActionsApi



All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createGoogleBusinessPlaceAction()**](GMBPlaceActionsApi.md#createGoogleBusinessPlaceAction) | **POST** /v1/accounts/{accountId}/gmb-place-actions | Create action link |
| [**deleteGoogleBusinessPlaceAction()**](GMBPlaceActionsApi.md#deleteGoogleBusinessPlaceAction) | **DELETE** /v1/accounts/{accountId}/gmb-place-actions | Delete action link |
| [**listGoogleBusinessPlaceActions()**](GMBPlaceActionsApi.md#listGoogleBusinessPlaceActions) | **GET** /v1/accounts/{accountId}/gmb-place-actions | List action links |


## `createGoogleBusinessPlaceAction()`

```php
createGoogleBusinessPlaceAction($account_id, $create_google_business_place_action_request): \Late\Model\CreateGoogleBusinessPlaceAction200Response
```

Create action link

Creates a place action link for a location.  Available action types: - `APPOINTMENT` - Booking an appointment - `ONLINE_APPOINTMENT` - Booking an online appointment - `DINING_RESERVATION` - Making a dining reservation (OpenTable, Resy, etc.) - `FOOD_ORDERING` - Ordering food for delivery and/or takeout (DoorDash, Uber Eats, etc.) - `FOOD_DELIVERY` - Ordering food for delivery only - `FOOD_TAKEOUT` - Ordering food for takeout only - `SHOP_ONLINE` - Shopping with delivery and/or pickup

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

try {
    $result = $apiInstance->createGoogleBusinessPlaceAction($account_id, $create_google_business_place_action_request);
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
deleteGoogleBusinessPlaceAction($account_id, $name): \Late\Model\DeleteGoogleBusinessPlaceAction200Response
```

Delete action link

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

try {
    $result = $apiInstance->deleteGoogleBusinessPlaceAction($account_id, $name);
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
listGoogleBusinessPlaceActions($account_id, $page_size, $page_token): \Late\Model\ListGoogleBusinessPlaceActions200Response
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
$page_size = 100; // int
$page_token = 'page_token_example'; // string

try {
    $result = $apiInstance->listGoogleBusinessPlaceActions($account_id, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBPlaceActionsApi->listGoogleBusinessPlaceActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
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
