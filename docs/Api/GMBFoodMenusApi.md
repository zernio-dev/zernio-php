# Late\GMBFoodMenusApi



All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGoogleBusinessFoodMenus()**](GMBFoodMenusApi.md#getGoogleBusinessFoodMenus) | **GET** /v1/accounts/{accountId}/gmb-food-menus | Get food menus |
| [**updateGoogleBusinessFoodMenus()**](GMBFoodMenusApi.md#updateGoogleBusinessFoodMenus) | **PUT** /v1/accounts/{accountId}/gmb-food-menus | Update food menus |


## `getGoogleBusinessFoodMenus()`

```php
getGoogleBusinessFoodMenus($account_id): \Late\Model\GetGoogleBusinessFoodMenus200Response
```

Get food menus

Fetches food menus for a connected Google Business Profile location.  Returns the full menu structure including: - Menu names and descriptions - Sections (e.g. Appetizers, Entrees, Drinks) - Items with labels, pricing, dietary info, and allergens - Item options/variants  Only available for locations with food menu support (restaurants, cafes, etc.).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\GMBFoodMenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Late account ID (from /v1/accounts)

try {
    $result = $apiInstance->getGoogleBusinessFoodMenus($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBFoodMenusApi->getGoogleBusinessFoodMenus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Late account ID (from /v1/accounts) | |

### Return type

[**\Late\Model\GetGoogleBusinessFoodMenus200Response**](../Model/GetGoogleBusinessFoodMenus200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGoogleBusinessFoodMenus()`

```php
updateGoogleBusinessFoodMenus($account_id, $update_google_business_food_menus_request): \Late\Model\UpdateGoogleBusinessFoodMenus200Response
```

Update food menus

Updates the food menus for a connected Google Business Profile location.  Send the full menus array. Use `updateMask` for partial updates (e.g. `\"menus\"` to only update the menus field).  Each menu can contain sections, and each section can contain items with pricing, dietary restrictions, allergens, and more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\GMBFoodMenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Late account ID (from /v1/accounts)
$update_google_business_food_menus_request = {"menus":[{"labels":[{"displayName":"Dinner Menu","languageCode":"en"}],"sections":[{"labels":[{"displayName":"Mains"}],"items":[{"labels":[{"displayName":"Grilled Salmon","description":"With seasonal vegetables"}],"attributes":{"price":{"currencyCode":"USD","units":"24"},"allergen":["FISH"]}}]}]}],"updateMask":"menus"}; // \Late\Model\UpdateGoogleBusinessFoodMenusRequest

try {
    $result = $apiInstance->updateGoogleBusinessFoodMenus($account_id, $update_google_business_food_menus_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBFoodMenusApi->updateGoogleBusinessFoodMenus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Late account ID (from /v1/accounts) | |
| **update_google_business_food_menus_request** | [**\Late\Model\UpdateGoogleBusinessFoodMenusRequest**](../Model/UpdateGoogleBusinessFoodMenusRequest.md)|  | |

### Return type

[**\Late\Model\UpdateGoogleBusinessFoodMenus200Response**](../Model/UpdateGoogleBusinessFoodMenus200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
