# Zernio\WhatsAppTemplatesApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWhatsAppLibraryTemplate()**](WhatsAppTemplatesApi.md#getWhatsAppLibraryTemplate) | **GET** /v1/whatsapp/template-library | Look up a library template |


## `getWhatsAppLibraryTemplate()`

```php
getWhatsAppLibraryTemplate($account_id, $name): \Zernio\Model\GetWhatsAppLibraryTemplate200Response
```

Look up a library template

Look up a single pre-approved Template Library template by its exact name, to introspect its structure before importing it. Most importantly it returns the template's `buttons`: a library template with `URL` / `PHONE_NUMBER` buttons must be created with a matching `library_template_button_inputs` array (see Create Template), or Meta rejects it. Use this to discover which inputs to collect.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$name = 'name_example'; // string | Exact library template name

try {
    $result = $apiInstance->getWhatsAppLibraryTemplate($account_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppTemplatesApi->getWhatsAppLibraryTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |
| **name** | **string**| Exact library template name | |

### Return type

[**\Zernio\Model\GetWhatsAppLibraryTemplate200Response**](../Model/GetWhatsAppLibraryTemplate200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
