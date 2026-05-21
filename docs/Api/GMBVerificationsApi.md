# Zernio\GMBVerificationsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**completeGoogleBusinessVerification()**](GMBVerificationsApi.md#completeGoogleBusinessVerification) | **POST** /v1/accounts/{accountId}/gmb-verifications/{verificationId}/complete | Complete a verification |
| [**fetchGoogleBusinessVerificationOptions()**](GMBVerificationsApi.md#fetchGoogleBusinessVerificationOptions) | **POST** /v1/accounts/{accountId}/gmb-verifications/options | Fetch verification options |
| [**getGoogleBusinessVerifications()**](GMBVerificationsApi.md#getGoogleBusinessVerifications) | **GET** /v1/accounts/{accountId}/gmb-verifications | Get verification state |
| [**startGoogleBusinessVerification()**](GMBVerificationsApi.md#startGoogleBusinessVerification) | **POST** /v1/accounts/{accountId}/gmb-verifications | Start a verification |


## `completeGoogleBusinessVerification()`

```php
completeGoogleBusinessVerification($account_id, $verification_id, $complete_google_business_verification_request, $location_id): \Zernio\Model\StartGoogleBusinessVerification200Response
```

Complete a verification

Completes a PENDING verification by submitting the PIN/code Google sent the business (postcard code, SMS PIN, etc.). On success the verification moves to COMPLETED.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\GMBVerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio account ID (from /v1/accounts)
$verification_id = 'verification_id_example'; // string | The last segment of a verification `name` from GET /gmb-verifications.
$complete_google_business_verification_request = {"pin":"123456"}; // \Zernio\Model\CompleteGoogleBusinessVerificationRequest
$location_id = 'location_id_example'; // string | Override which location to target. If omitted, uses the account's selected location.

try {
    $result = $apiInstance->completeGoogleBusinessVerification($account_id, $verification_id, $complete_google_business_verification_request, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBVerificationsApi->completeGoogleBusinessVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio account ID (from /v1/accounts) | |
| **verification_id** | **string**| The last segment of a verification &#x60;name&#x60; from GET /gmb-verifications. | |
| **complete_google_business_verification_request** | [**\Zernio\Model\CompleteGoogleBusinessVerificationRequest**](../Model/CompleteGoogleBusinessVerificationRequest.md)|  | |
| **location_id** | **string**| Override which location to target. If omitted, uses the account&#39;s selected location. | [optional] |

### Return type

[**\Zernio\Model\StartGoogleBusinessVerification200Response**](../Model/StartGoogleBusinessVerification200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchGoogleBusinessVerificationOptions()`

```php
fetchGoogleBusinessVerificationOptions($account_id, $fetch_google_business_verification_options_request, $location_id): \Zernio\Model\FetchGoogleBusinessVerificationOptions200Response
```

Fetch verification options

Reports the verification methods Google currently offers for the location. Non-mutating (nothing is sent to the business). `languageCode` is required; service-area (\"CUSTOMER_LOCATION_ONLY\") businesses also require `context.address`, otherwise Google returns 400.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\GMBVerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio account ID (from /v1/accounts)
$fetch_google_business_verification_options_request = {"languageCode":"en-US"}; // \Zernio\Model\FetchGoogleBusinessVerificationOptionsRequest
$location_id = 'location_id_example'; // string | Override which location to query. If omitted, uses the account's selected location.

try {
    $result = $apiInstance->fetchGoogleBusinessVerificationOptions($account_id, $fetch_google_business_verification_options_request, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBVerificationsApi->fetchGoogleBusinessVerificationOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio account ID (from /v1/accounts) | |
| **fetch_google_business_verification_options_request** | [**\Zernio\Model\FetchGoogleBusinessVerificationOptionsRequest**](../Model/FetchGoogleBusinessVerificationOptionsRequest.md)|  | |
| **location_id** | **string**| Override which location to query. If omitted, uses the account&#39;s selected location. | [optional] |

### Return type

[**\Zernio\Model\FetchGoogleBusinessVerificationOptions200Response**](../Model/FetchGoogleBusinessVerificationOptions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGoogleBusinessVerifications()`

```php
getGoogleBusinessVerifications($account_id, $location_id): \Zernio\Model\GetGoogleBusinessVerifications200Response
```

Get verification state

Returns the location's Voice of Merchant state plus its verification history. `voiceOfMerchantState.hasVoiceOfMerchant` tells you whether the listing is verified and published; when it is false, `verify` reports whether a verification is already pending. Each entry in `verifications` has a `state` of PENDING, COMPLETED, or FAILED.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\GMBVerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio account ID (from /v1/accounts)
$location_id = 'location_id_example'; // string | Override which location to query. If omitted, uses the account's selected location. Use GET /gmb-locations to list valid IDs.

try {
    $result = $apiInstance->getGoogleBusinessVerifications($account_id, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBVerificationsApi->getGoogleBusinessVerifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio account ID (from /v1/accounts) | |
| **location_id** | **string**| Override which location to query. If omitted, uses the account&#39;s selected location. Use GET /gmb-locations to list valid IDs. | [optional] |

### Return type

[**\Zernio\Model\GetGoogleBusinessVerifications200Response**](../Model/GetGoogleBusinessVerifications200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startGoogleBusinessVerification()`

```php
startGoogleBusinessVerification($account_id, $start_google_business_verification_request, $location_id): \Zernio\Model\StartGoogleBusinessVerification200Response
```

Start a verification

Starts a verification for the location. This is a mutating action: depending on `method`, Google mails a postcard, places a call, or sends an SMS/email to the business. Submit the resulting code with POST /gmb-verifications/{verificationId}/complete. Use POST /gmb-verifications/options first to discover which methods are eligible.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\GMBVerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio account ID (from /v1/accounts)
$start_google_business_verification_request = {"method":"SMS","languageCode":"en-US","phoneNumber":"+14155550123"}; // \Zernio\Model\StartGoogleBusinessVerificationRequest
$location_id = 'location_id_example'; // string | Override which location to target. If omitted, uses the account's selected location.

try {
    $result = $apiInstance->startGoogleBusinessVerification($account_id, $start_google_business_verification_request, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBVerificationsApi->startGoogleBusinessVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio account ID (from /v1/accounts) | |
| **start_google_business_verification_request** | [**\Zernio\Model\StartGoogleBusinessVerificationRequest**](../Model/StartGoogleBusinessVerificationRequest.md)|  | |
| **location_id** | **string**| Override which location to target. If omitted, uses the account&#39;s selected location. | [optional] |

### Return type

[**\Zernio\Model\StartGoogleBusinessVerification200Response**](../Model/StartGoogleBusinessVerification200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
