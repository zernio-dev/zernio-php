# Late\WhatsAppPhoneNumbersApi



All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPreverifiedWhatsAppNumbers()**](WhatsAppPhoneNumbersApi.md#getPreverifiedWhatsAppNumbers) | **GET** /v1/whatsapp/phone-numbers/preverified | Get pre-verified numbers |
| [**getWhatsAppPhoneNumber()**](WhatsAppPhoneNumbersApi.md#getWhatsAppPhoneNumber) | **GET** /v1/whatsapp/phone-numbers/{phoneNumberId} | Get phone number |
| [**getWhatsAppPhoneNumbers()**](WhatsAppPhoneNumbersApi.md#getWhatsAppPhoneNumbers) | **GET** /v1/whatsapp/phone-numbers | List phone numbers |
| [**purchaseWhatsAppPhoneNumber()**](WhatsAppPhoneNumbersApi.md#purchaseWhatsAppPhoneNumber) | **POST** /v1/whatsapp/phone-numbers/purchase | Purchase phone number |
| [**releaseWhatsAppPhoneNumber()**](WhatsAppPhoneNumbersApi.md#releaseWhatsAppPhoneNumber) | **DELETE** /v1/whatsapp/phone-numbers/{phoneNumberId} | Release phone number |
| [**requestWhatsAppVerificationCode()**](WhatsAppPhoneNumbersApi.md#requestWhatsAppVerificationCode) | **POST** /v1/whatsapp/phone-numbers/{phoneNumberId}/request-code | Request OTP |
| [**searchAvailableWhatsAppNumbers()**](WhatsAppPhoneNumbersApi.md#searchAvailableWhatsAppNumbers) | **GET** /v1/whatsapp/phone-numbers/available | Search available numbers |
| [**verifyWhatsAppPhoneNumber()**](WhatsAppPhoneNumbersApi.md#verifyWhatsAppPhoneNumber) | **POST** /v1/whatsapp/phone-numbers/{phoneNumberId}/verify | Verify OTP |


## `getPreverifiedWhatsAppNumbers()`

```php
getPreverifiedWhatsAppNumbers($profile_id): \Late\Model\GetPreverifiedWhatsAppNumbers200Response
```

Get pre-verified numbers

Returns the user's pre-verified phone number IDs that are ready for OTP-free Embedded Signup. Only returns numbers with verified Meta status and non-expired verification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID to filter by

try {
    $result = $apiInstance->getPreverifiedWhatsAppNumbers($profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppPhoneNumbersApi->getPreverifiedWhatsAppNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID to filter by | |

### Return type

[**\Late\Model\GetPreverifiedWhatsAppNumbers200Response**](../Model/GetPreverifiedWhatsAppNumbers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppPhoneNumber()`

```php
getWhatsAppPhoneNumber($phone_number_id): \Late\Model\GetWhatsAppPhoneNumber200Response
```

Get phone number

Retrieve the current status of a purchased phone number. Used to poll for Meta pre-verification completion after purchase.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppPhoneNumbersApi(
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

[**\Late\Model\GetWhatsAppPhoneNumber200Response**](../Model/GetWhatsAppPhoneNumber200Response.md)

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
getWhatsAppPhoneNumbers($status, $profile_id): \Late\Model\GetWhatsAppPhoneNumbers200Response
```

List phone numbers

List all WhatsApp phone numbers purchased by the authenticated user. By default, released numbers are excluded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppPhoneNumbersApi(
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

[**\Late\Model\GetWhatsAppPhoneNumbers200Response**](../Model/GetWhatsAppPhoneNumbers200Response.md)

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
purchaseWhatsAppPhoneNumber($purchase_whats_app_phone_number_request): \Late\Model\PurchaseWhatsAppPhoneNumber200Response
```

Purchase phone number

Initiate purchasing a WhatsApp phone number. Payment-first flow: the user does not pick a specific number. The system either creates a Stripe Checkout Session (first number) or increments the existing subscription quantity and provisions inline (subsequent numbers).  Requires a paid plan. The maximum number of phone numbers is determined by the user's plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_whats_app_phone_number_request = {"profileId":"507f1f77bcf86cd799439011"}; // \Late\Model\PurchaseWhatsAppPhoneNumberRequest

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
| **purchase_whats_app_phone_number_request** | [**\Late\Model\PurchaseWhatsAppPhoneNumberRequest**](../Model/PurchaseWhatsAppPhoneNumberRequest.md)|  | |

### Return type

[**\Late\Model\PurchaseWhatsAppPhoneNumber200Response**](../Model/PurchaseWhatsAppPhoneNumber200Response.md)

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
releaseWhatsAppPhoneNumber($phone_number_id): \Late\Model\ReleaseWhatsAppPhoneNumber200Response
```

Release phone number

Release a purchased phone number. This will: 1. Disconnect any linked WhatsApp social account 2. Decrement the Stripe subscription quantity (or cancel if last number) 3. Release the number from Telnyx 4. Mark the number as released

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppPhoneNumbersApi(
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

[**\Late\Model\ReleaseWhatsAppPhoneNumber200Response**](../Model/ReleaseWhatsAppPhoneNumber200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestWhatsAppVerificationCode()`

```php
requestWhatsAppVerificationCode($phone_number_id, $request_whats_app_verification_code_request): \Late\Model\RequestWhatsAppVerificationCode200Response
```

Request OTP

Request a new OTP verification code from Meta for a pre-verified phone number. Useful when the initial SMS did not arrive or when re-verifying before the 90-day expiry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_number_id = 'phone_number_id_example'; // string | Phone number record ID
$request_whats_app_verification_code_request = {"method":"SMS"}; // \Late\Model\RequestWhatsAppVerificationCodeRequest

try {
    $result = $apiInstance->requestWhatsAppVerificationCode($phone_number_id, $request_whats_app_verification_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppPhoneNumbersApi->requestWhatsAppVerificationCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**| Phone number record ID | |
| **request_whats_app_verification_code_request** | [**\Late\Model\RequestWhatsAppVerificationCodeRequest**](../Model/RequestWhatsAppVerificationCodeRequest.md)|  | [optional] |

### Return type

[**\Late\Model\RequestWhatsAppVerificationCode200Response**](../Model/RequestWhatsAppVerificationCode200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAvailableWhatsAppNumbers()`

```php
searchAvailableWhatsAppNumbers($prefix, $locality, $contains, $limit): \Late\Model\SearchAvailableWhatsAppNumbers200Response
```

Search available numbers

Search for available US phone numbers that can be purchased for WhatsApp Business. Requires a paid plan. Numbers are sourced from Telnyx.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prefix = 'prefix_example'; // string | Area code to search (e.g., \"212\" for New York)
$locality = 'locality_example'; // string | City name (e.g., \"New York\")
$contains = 'contains_example'; // string | Pattern to match within the phone number
$limit = 20; // int | Maximum results (default 20, max 100)

try {
    $result = $apiInstance->searchAvailableWhatsAppNumbers($prefix, $locality, $contains, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppPhoneNumbersApi->searchAvailableWhatsAppNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **prefix** | **string**| Area code to search (e.g., \&quot;212\&quot; for New York) | [optional] |
| **locality** | **string**| City name (e.g., \&quot;New York\&quot;) | [optional] |
| **contains** | **string**| Pattern to match within the phone number | [optional] |
| **limit** | **int**| Maximum results (default 20, max 100) | [optional] [default to 20] |

### Return type

[**\Late\Model\SearchAvailableWhatsAppNumbers200Response**](../Model/SearchAvailableWhatsAppNumbers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyWhatsAppPhoneNumber()`

```php
verifyWhatsAppPhoneNumber($phone_number_id, $verify_whats_app_phone_number_request): \Late\Model\VerifyWhatsAppPhoneNumber200Response
```

Verify OTP

Manually verify a phone number by entering the OTP code received via SMS or voice call. This is a fallback for when the auto-verification webhook does not capture the code. Verification is valid for 90 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_number_id = 'phone_number_id_example'; // string | Phone number record ID
$verify_whats_app_phone_number_request = {"code":"123456"}; // \Late\Model\VerifyWhatsAppPhoneNumberRequest

try {
    $result = $apiInstance->verifyWhatsAppPhoneNumber($phone_number_id, $verify_whats_app_phone_number_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppPhoneNumbersApi->verifyWhatsAppPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number_id** | **string**| Phone number record ID | |
| **verify_whats_app_phone_number_request** | [**\Late\Model\VerifyWhatsAppPhoneNumberRequest**](../Model/VerifyWhatsAppPhoneNumberRequest.md)|  | |

### Return type

[**\Late\Model\VerifyWhatsAppPhoneNumber200Response**](../Model/VerifyWhatsAppPhoneNumber200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
