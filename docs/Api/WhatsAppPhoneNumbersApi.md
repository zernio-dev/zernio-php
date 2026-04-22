# Zernio\WhatsAppPhoneNumbersApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWhatsAppPhoneNumber()**](WhatsAppPhoneNumbersApi.md#getWhatsAppPhoneNumber) | **GET** /v1/whatsapp/phone-numbers/{phoneNumberId} | Get phone number |
| [**getWhatsAppPhoneNumbers()**](WhatsAppPhoneNumbersApi.md#getWhatsAppPhoneNumbers) | **GET** /v1/whatsapp/phone-numbers | List phone numbers |
| [**purchaseWhatsAppPhoneNumber()**](WhatsAppPhoneNumbersApi.md#purchaseWhatsAppPhoneNumber) | **POST** /v1/whatsapp/phone-numbers/purchase | Purchase phone number |
| [**releaseWhatsAppPhoneNumber()**](WhatsAppPhoneNumbersApi.md#releaseWhatsAppPhoneNumber) | **DELETE** /v1/whatsapp/phone-numbers/{phoneNumberId} | Release phone number |


## `getWhatsAppPhoneNumber()`

```php
getWhatsAppPhoneNumber($phone_number_id): \Zernio\Model\GetWhatsAppPhoneNumber200Response
```

Get phone number

Retrieve the current status of a purchased phone number. Used to poll for Meta pre-verification completion after purchase.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_number_id = 'phone_number_id_example'; // string | Phone number record ID

try {
    $result = $apiInstance->getWhatsAppPhoneNumber($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppPhoneNumbersApi->getWhatsAppPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**| Phone number record ID | |

### Return type

[**\Zernio\Model\GetWhatsAppPhoneNumber200Response**](../Model/GetWhatsAppPhoneNumber200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppPhoneNumbers()`

```php
getWhatsAppPhoneNumbers($status, $profile_id): \Zernio\Model\GetWhatsAppPhoneNumbers200Response
```

List phone numbers

List all WhatsApp phone numbers purchased by the authenticated user. By default, released numbers are excluded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string | Filter by status (by default excludes released numbers)
$profile_id = 'profile_id_example'; // string | Filter by profile

try {
    $result = $apiInstance->getWhatsAppPhoneNumbers($status, $profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppPhoneNumbersApi->getWhatsAppPhoneNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **string**| Filter by status (by default excludes released numbers) | [optional] |
| **profile_id** | **string**| Filter by profile | [optional] |

### Return type

[**\Zernio\Model\GetWhatsAppPhoneNumbers200Response**](../Model/GetWhatsAppPhoneNumbers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseWhatsAppPhoneNumber()`

```php
purchaseWhatsAppPhoneNumber($purchase_whats_app_phone_number_request): \Zernio\Model\PurchaseWhatsAppPhoneNumber200Response
```

Purchase phone number

Initiate purchasing a WhatsApp phone number. Payment-first flow: the user does not pick a specific number. The system either creates a Stripe Checkout Session (first number) or increments the existing subscription quantity and provisions inline (subsequent numbers).  Requires a paid plan. The maximum number of phone numbers is determined by the user's plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_whats_app_phone_number_request = {"profileId":"507f1f77bcf86cd799439011"}; // \Zernio\Model\PurchaseWhatsAppPhoneNumberRequest

try {
    $result = $apiInstance->purchaseWhatsAppPhoneNumber($purchase_whats_app_phone_number_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppPhoneNumbersApi->purchaseWhatsAppPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_whats_app_phone_number_request** | [**\Zernio\Model\PurchaseWhatsAppPhoneNumberRequest**](../Model/PurchaseWhatsAppPhoneNumberRequest.md)|  | |

### Return type

[**\Zernio\Model\PurchaseWhatsAppPhoneNumber200Response**](../Model/PurchaseWhatsAppPhoneNumber200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releaseWhatsAppPhoneNumber()`

```php
releaseWhatsAppPhoneNumber($phone_number_id): \Zernio\Model\ReleaseWhatsAppPhoneNumber200Response
```

Release phone number

Release a purchased phone number. This will: 1. Disconnect any linked WhatsApp social account 2. Decrement the Stripe subscription quantity (or cancel if last number) 3. Release the number from Telnyx 4. Mark the number as released

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_number_id = 'phone_number_id_example'; // string | Phone number record ID

try {
    $result = $apiInstance->releaseWhatsAppPhoneNumber($phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppPhoneNumbersApi->releaseWhatsAppPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**| Phone number record ID | |

### Return type

[**\Zernio\Model\ReleaseWhatsAppPhoneNumber200Response**](../Model/ReleaseWhatsAppPhoneNumber200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
