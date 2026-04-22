# Zernio\CustomFieldsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**clearContactFieldValue()**](CustomFieldsApi.md#clearContactFieldValue) | **DELETE** /v1/contacts/{contactId}/fields/{slug} | Clear custom field value |
| [**createCustomField()**](CustomFieldsApi.md#createCustomField) | **POST** /v1/custom-fields | Create custom field |
| [**deleteCustomField()**](CustomFieldsApi.md#deleteCustomField) | **DELETE** /v1/custom-fields/{fieldId} | Delete custom field |
| [**listCustomFields()**](CustomFieldsApi.md#listCustomFields) | **GET** /v1/custom-fields | List custom field definitions |
| [**setContactFieldValue()**](CustomFieldsApi.md#setContactFieldValue) | **PUT** /v1/contacts/{contactId}/fields/{slug} | Set custom field value |
| [**updateCustomField()**](CustomFieldsApi.md#updateCustomField) | **PATCH** /v1/custom-fields/{fieldId} | Update custom field |


## `clearContactFieldValue()`

```php
clearContactFieldValue($contact_id, $slug)
```

Clear custom field value

Remove a custom field value from a contact. The field definition is not affected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string
$slug = 'slug_example'; // string

try {
    $apiInstance->clearContactFieldValue($contact_id, $slug);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->clearContactFieldValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |
| **slug** | **string**|  | |

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

## `createCustomField()`

```php
createCustomField($create_custom_field_request): \Zernio\Model\CreateCustomField200Response
```

Create custom field

Create a new custom field definition. Supported types are text, number, date, boolean, and select.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_custom_field_request = new \Zernio\Model\CreateCustomFieldRequest(); // \Zernio\Model\CreateCustomFieldRequest

try {
    $result = $apiInstance->createCustomField($create_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->createCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_custom_field_request** | [**\Zernio\Model\CreateCustomFieldRequest**](../Model/CreateCustomFieldRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCustomField200Response**](../Model/CreateCustomField200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomField()`

```php
deleteCustomField($field_id)
```

Delete custom field

Delete a custom field definition and remove its values from all contacts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string

try {
    $apiInstance->deleteCustomField($field_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->deleteCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**|  | |

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

## `listCustomFields()`

```php
listCustomFields($profile_id): \Zernio\Model\ListCustomFields200Response
```

List custom field definitions

Returns all custom field definitions. Optionally filter by profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Filter by profile. Omit to list across all profiles

try {
    $result = $apiInstance->listCustomFields($profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->listCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Filter by profile. Omit to list across all profiles | [optional] |

### Return type

[**\Zernio\Model\ListCustomFields200Response**](../Model/ListCustomFields200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setContactFieldValue()`

```php
setContactFieldValue($contact_id, $slug, $set_contact_field_value_request)
```

Set custom field value

Set or overwrite a custom field value on a contact. The value type must match the field definition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string
$slug = 'slug_example'; // string
$set_contact_field_value_request = new \Zernio\Model\SetContactFieldValueRequest(); // \Zernio\Model\SetContactFieldValueRequest

try {
    $apiInstance->setContactFieldValue($contact_id, $slug, $set_contact_field_value_request);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->setContactFieldValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |
| **slug** | **string**|  | |
| **set_contact_field_value_request** | [**\Zernio\Model\SetContactFieldValueRequest**](../Model/SetContactFieldValueRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomField()`

```php
updateCustomField($field_id, $update_custom_field_request): \Zernio\Model\UpdateCustomField200Response
```

Update custom field

Update a custom field definition. The field type cannot be changed after creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string
$update_custom_field_request = new \Zernio\Model\UpdateCustomFieldRequest(); // \Zernio\Model\UpdateCustomFieldRequest

try {
    $result = $apiInstance->updateCustomField($field_id, $update_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->updateCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**|  | |
| **update_custom_field_request** | [**\Zernio\Model\UpdateCustomFieldRequest**](../Model/UpdateCustomFieldRequest.md)|  | [optional] |

### Return type

[**\Zernio\Model\UpdateCustomField200Response**](../Model/UpdateCustomField200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
