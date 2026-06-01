# Zernio\WhatsAppPhoneNumbersApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWhatsAppNumberInfo()**](WhatsAppPhoneNumbersApi.md#getWhatsAppNumberInfo) | **GET** /v1/whatsapp/number-info | Get number status |
| [**getWhatsAppNumberKycForm()**](WhatsAppPhoneNumbersApi.md#getWhatsAppNumberKycForm) | **GET** /v1/whatsapp/phone-numbers/kyc | Get regulated-number KYC form spec |
| [**getWhatsAppPhoneNumber()**](WhatsAppPhoneNumbersApi.md#getWhatsAppPhoneNumber) | **GET** /v1/whatsapp/phone-numbers/{phoneNumberId} | Get phone number |
| [**getWhatsAppPhoneNumbers()**](WhatsAppPhoneNumbersApi.md#getWhatsAppPhoneNumbers) | **GET** /v1/whatsapp/phone-numbers | List phone numbers |
| [**listWhatsAppNumberCountries()**](WhatsAppPhoneNumbersApi.md#listWhatsAppNumberCountries) | **GET** /v1/whatsapp/phone-numbers/countries | List offerable number countries |
| [**purchaseWhatsAppPhoneNumber()**](WhatsAppPhoneNumbersApi.md#purchaseWhatsAppPhoneNumber) | **POST** /v1/whatsapp/phone-numbers/purchase | Purchase phone number |
| [**releaseWhatsAppPhoneNumber()**](WhatsAppPhoneNumbersApi.md#releaseWhatsAppPhoneNumber) | **DELETE** /v1/whatsapp/phone-numbers/{phoneNumberId} | Release phone number |
| [**searchAvailableWhatsAppNumbers()**](WhatsAppPhoneNumbersApi.md#searchAvailableWhatsAppNumbers) | **GET** /v1/whatsapp/phone-numbers/available | Search available numbers to purchase |
| [**submitWhatsAppNumberKyc()**](WhatsAppPhoneNumbersApi.md#submitWhatsAppNumberKyc) | **POST** /v1/whatsapp/phone-numbers/kyc | Submit regulated-number KYC |


## `getWhatsAppNumberInfo()`

```php
getWhatsAppNumberInfo($account_id): \Zernio\Model\GetWhatsAppNumberInfo200Response
```

Get number status

Live snapshot of a connected number straight from Meta: the phone-number node (display number, display name + approval, quality rating, messaging-limit tier, throughput, official-business badge, connection status, health_status) and its owning WhatsApp Business Account (name, business verification, timezone, health_status). Fetched live because Meta updates quality/tier/name/health over time; the call also refreshes the cached values shown on the connection card.

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
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->getWhatsAppNumberInfo($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppPhoneNumbersApi->getWhatsAppNumberInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\GetWhatsAppNumberInfo200Response**](../Model/GetWhatsAppNumberInfo200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppNumberKycForm()`

```php
getWhatsAppNumberKycForm($country, $profile_id): \Zernio\Model\GetWhatsAppNumberKycForm200Response
```

Get regulated-number KYC form spec

For a Tier 3/4 country, the fields the end customer must provide (Telnyx regulatory requirements) before a number can be ordered: text, date, address, or file (document) per requirement.

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
$country = 'country_example'; // string
$profile_id = 'profile_id_example'; // string

try {
    $result = $apiInstance->getWhatsAppNumberKycForm($country, $profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppPhoneNumbersApi->getWhatsAppNumberKycForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**|  | |
| **profile_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetWhatsAppNumberKycForm200Response**](../Model/GetWhatsAppNumberKycForm200Response.md)

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
getWhatsAppPhoneNumber($phone_number_id): \Zernio\Model\GetWhatsAppPhoneNumber200Response
```

Get phone number

Retrieve the current status of a purchased phone number. Poll this to track Meta pre-verification (US sync path) and, for regulated (Tier 3/4) numbers, the async lifecycle: pending_regulatory → active (or regulatory_declined). When a regulated number has an Onfido ID step, `onfidoVerificationUrl` appears here once the order is placed — forward it to the end user. (Or subscribe to the whatsapp.number.* webhooks instead of polling.)

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

## `listWhatsAppNumberCountries()`

```php
listWhatsAppNumberCountries(): \Zernio\Model\ListWhatsAppNumberCountries200Response
```

List offerable number countries

The WhatsApp number countries available to purchase, each with its flat monthly price (cents), regulatory tier, whether it needs end-user KYC (Tier 3/4), and whether outbound calling is available (not BIC-blocked). Drives the country picker. Tier-4 countries appear only when enabled.

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

try {
    $result = $apiInstance->listWhatsAppNumberCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppPhoneNumbersApi->listWhatsAppNumberCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\ListWhatsAppNumberCountries200Response**](../Model/ListWhatsAppNumberCountries200Response.md)

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
$purchase_whats_app_phone_number_request = {"profileId":"507f1f77bcf86cd799439011","country":"DE"}; // \Zernio\Model\PurchaseWhatsAppPhoneNumberRequest

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

## `searchAvailableWhatsAppNumbers()`

```php
searchAvailableWhatsAppNumbers($country, $type, $prefix, $locality, $contains, $limit): \Zernio\Model\SearchAvailableWhatsAppNumbers200Response
```

Search available numbers to purchase

Search the provider's inventory for numbers available to purchase in a country (default US). Optional filters narrow the results. The country must be offerable (see GET /v1/whatsapp/phone-numbers/countries).

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
$country = 'US'; // string
$type = 'type_example'; // string | Number type; defaults to the country's WhatsApp-safe type
$prefix = 'prefix_example'; // string | Area code
$locality = 'locality_example'; // string | City
$contains = 'contains_example'; // string | Pattern to match within the number
$limit = 20; // int

try {
    $result = $apiInstance->searchAvailableWhatsAppNumbers($country, $type, $prefix, $locality, $contains, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppPhoneNumbersApi->searchAvailableWhatsAppNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**|  | [optional] [default to &#39;US&#39;] |
| **type** | **string**| Number type; defaults to the country&#39;s WhatsApp-safe type | [optional] |
| **prefix** | **string**| Area code | [optional] |
| **locality** | **string**| City | [optional] |
| **contains** | **string**| Pattern to match within the number | [optional] |
| **limit** | **int**|  | [optional] [default to 20] |

### Return type

[**\Zernio\Model\SearchAvailableWhatsAppNumbers200Response**](../Model/SearchAvailableWhatsAppNumbers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitWhatsAppNumberKyc()`

```php
submitWhatsAppNumberKyc($submit_whats_app_number_kyc_request): \Zernio\Model\SubmitWhatsAppNumberKyc200Response
```

Submit regulated-number KYC

Submit the end customer's KYC (textual values, uploaded documents, address) for a Tier 3/4 country. Documents are streamed straight to the number provider and are not stored by Zernio. Builds + submits a regulatory requirement group and claims a pending_regulatory slot; the number is ordered + activated once the provider approves (asynchronous). Idempotent per (owner, country).

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
$submit_whats_app_number_kyc_request = new \Zernio\Model\SubmitWhatsAppNumberKycRequest(); // \Zernio\Model\SubmitWhatsAppNumberKycRequest

try {
    $result = $apiInstance->submitWhatsAppNumberKyc($submit_whats_app_number_kyc_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppPhoneNumbersApi->submitWhatsAppNumberKyc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submit_whats_app_number_kyc_request** | [**\Zernio\Model\SubmitWhatsAppNumberKycRequest**](../Model/SubmitWhatsAppNumberKycRequest.md)|  | |

### Return type

[**\Zernio\Model\SubmitWhatsAppNumberKyc200Response**](../Model/SubmitWhatsAppNumberKyc200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
