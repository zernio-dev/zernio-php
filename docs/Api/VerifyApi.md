# Zernio\VerifyApi

Managed one-time passcodes (OTP) for phone verification. Two calls handle the whole lifecycle: create a verification (we generate the code, deliver it by SMS from a phone number on your account, and store only its hash) and check the code the user typed. Usage-based billing only.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkVerification()**](VerifyApi.md#checkVerification) | **POST** /v1/verify/verifications/{verificationId}/check | Check a verification code |
| [**createVerification()**](VerifyApi.md#createVerification) | **POST** /v1/verify/verifications | Send a verification code |
| [**getVerification()**](VerifyApi.md#getVerification) | **GET** /v1/verify/verifications/{verificationId} | Get a verification |


## `checkVerification()`

```php
checkVerification($verification_id, $check_verification_request): \Zernio\Model\CheckVerification200Response
```

Check a verification code

Verify the code the user typed. Wrong, expired, and exhausted codes answer 200 with `valid: false` and the settled `status` — only an unknown id is a 404. A correct code consumes the verification (single-use, `status: approved`) and fires the `verification.approved` webhook; the 5th wrong attempt settles it as `max_attempts_reached` and fires `verification.failed`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\VerifyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verification_id = 'verification_id_example'; // string
$check_verification_request = new \Zernio\Model\CheckVerificationRequest(); // \Zernio\Model\CheckVerificationRequest

try {
    $result = $apiInstance->checkVerification($verification_id, $check_verification_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyApi->checkVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verification_id** | **string**|  | |
| **check_verification_request** | [**\Zernio\Model\CheckVerificationRequest**](../Model/CheckVerificationRequest.md)|  | |

### Return type

[**\Zernio\Model\CheckVerification200Response**](../Model/CheckVerification200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVerification()`

```php
createVerification($create_verification_request): \Zernio\Model\Verification
```

Send a verification code

Generate a one-time code, deliver it to the recipient, and store only its hash. Check the user-typed code with POST /v1/verify/verifications/{verificationId}/check.  Re-POSTing for the same (channel, to) while a verification is active RESENDS a fresh code on the existing verification (200 with `resend: true`) instead of creating a new one; resends are limited to one per 60 seconds (429 with `retryAfterSeconds` inside the cooldown). The stored brandName/codeLength/ttlMinutes win on a resend.  Codes deliver by SMS from a phone number on your account (`from` optional when you own exactly one SMS-enabled number) and the message uses a fixed template. Each accepted send bills one verification fee plus the standard message rate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\VerifyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_verification_request = new \Zernio\Model\CreateVerificationRequest(); // \Zernio\Model\CreateVerificationRequest

try {
    $result = $apiInstance->createVerification($create_verification_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyApi->createVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_verification_request** | [**\Zernio\Model\CreateVerificationRequest**](../Model/CreateVerificationRequest.md)|  | |

### Return type

[**\Zernio\Model\Verification**](../Model/Verification.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVerification()`

```php
getVerification($verification_id): \Zernio\Model\Verification
```

Get a verification

Current state of a verification. `status` is effective (a pending code past its expiry reads as `expired`). Verification records are deleted 24 hours after creation, after which this returns 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\VerifyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verification_id = 'verification_id_example'; // string

try {
    $result = $apiInstance->getVerification($verification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyApi->getVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verification_id** | **string**|  | |

### Return type

[**\Zernio\Model\Verification**](../Model/Verification.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
