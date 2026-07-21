# Zernio\SMSApi

SMS/MMS on your numbers: enable SMS on a number, send messages, validate recipient numbers, export STOP opt-outs, and complete the US carrier registration (10DLC or toll-free) required before US traffic delivers. Private beta: returns 404 unless your account is enrolled.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**appealSmsRegistration()**](SMSApi.md#appealSmsRegistration) | **POST** /v1/sms/registrations/{id}/appeal | Appeal a rejected campaign |
| [**createSmsSenderId()**](SMSApi.md#createSmsSenderId) | **POST** /v1/sms/sender-ids | Create an alphanumeric sender ID |
| [**deactivateSmsRegistration()**](SMSApi.md#deactivateSmsRegistration) | **DELETE** /v1/sms/registrations/{id} | Deactivate a brand/campaign registration |
| [**deleteSmsSenderId()**](SMSApi.md#deleteSmsSenderId) | **DELETE** /v1/sms/sender-ids/{id} | Delete an alphanumeric sender ID |
| [**disableSmsOnNumber()**](SMSApi.md#disableSmsOnNumber) | **DELETE** /v1/phone-numbers/{id}/sms | Disable SMS on a number |
| [**enableSmsOnNumber()**](SMSApi.md#enableSmsOnNumber) | **POST** /v1/phone-numbers/{id}/sms | Enable SMS on a number |
| [**getSmsRegistration()**](SMSApi.md#getSmsRegistration) | **GET** /v1/sms/registrations/{id} | Get a carrier registration |
| [**listSmsOptOuts()**](SMSApi.md#listSmsOptOuts) | **GET** /v1/sms/opt-outs | List SMS opt-outs |
| [**listSmsRegistrations()**](SMSApi.md#listSmsRegistrations) | **GET** /v1/sms/registrations | List carrier registrations |
| [**listSmsSenderIds()**](SMSApi.md#listSmsSenderIds) | **GET** /v1/sms/sender-ids | List alphanumeric sender IDs |
| [**lookupSmsNumber()**](SMSApi.md#lookupSmsNumber) | **GET** /v1/sms/lookup | Look up carrier + line type |
| [**requestSmsSenderIdLimitIncrease()**](SMSApi.md#requestSmsSenderIdLimitIncrease) | **POST** /v1/sms/sender-ids/limit-request | Request a higher sender ID daily limit |
| [**resendSmsRegistrationOtp()**](SMSApi.md#resendSmsRegistrationOtp) | **POST** /v1/sms/registrations/{id}/resend-otp | Re-send the sole-prop OTP |
| [**reuseSmsRegistrationForNumber()**](SMSApi.md#reuseSmsRegistrationForNumber) | **POST** /v1/phone-numbers/{id}/sms/reuse-registration | Add number to SMS registration |
| [**sendSms()**](SMSApi.md#sendSms) | **POST** /v1/sms/messages | Send an SMS/MMS |
| [**shareSmsRegistration()**](SMSApi.md#shareSmsRegistration) | **POST** /v1/sms/registrations/share | Create a registration share link |
| [**startSmsRegistration()**](SMSApi.md#startSmsRegistration) | **POST** /v1/sms/registrations | Start a carrier registration |
| [**uploadSmsOptInProof()**](SMSApi.md#uploadSmsOptInProof) | **POST** /v1/sms/registrations/{id}/opt-in-proof | Upload opt-in form proof for an appeal |
| [**uploadSmsOptInProofFile()**](SMSApi.md#uploadSmsOptInProofFile) | **POST** /v1/sms/opt-in-proof | Upload opt-in form proof |
| [**verifySmsRegistrationOtp()**](SMSApi.md#verifySmsRegistrationOtp) | **POST** /v1/sms/registrations/{id}/verify-otp | Submit the sole-prop OTP |


## `appealSmsRegistration()`

```php
appealSmsRegistration($id, $appeal_sms_registration_request): \Zernio\Model\AppealSmsRegistration200Response
```

Appeal a rejected campaign

Appeals a rejected 10DLC campaign with the carrier registry. Only a registration that reached campaign creation can be appealed; a brand-level rejection should be fixed and re-verified instead. On success the registration returns to `pending`.  Content rejections (e.g. an opt-in flow without a verifiable form link, or unrealistic samples) should be FIXED in the same call: pass the corrected `messageFlow` / `sample1` / `sample2` and the campaign is updated before the appeal is filed, so the reviewer sees the new content. The current content is on `GET /v1/sms/registrations/{id}` (`campaignContent`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$appeal_sms_registration_request = new \Zernio\Model\AppealSmsRegistrationRequest(); // \Zernio\Model\AppealSmsRegistrationRequest

try {
    $result = $apiInstance->appealSmsRegistration($id, $appeal_sms_registration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->appealSmsRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **appeal_sms_registration_request** | [**\Zernio\Model\AppealSmsRegistrationRequest**](../Model/AppealSmsRegistrationRequest.md)|  | |

### Return type

[**\Zernio\Model\AppealSmsRegistration200Response**](../Model/AppealSmsRegistration200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSmsSenderId()`

```php
createSmsSenderId($create_sms_sender_id_request): \Zernio\Model\CreateSmsSenderId200Response
```

Create an alphanumeric sender ID

Registers an alphanumeric sender ID (e.g. `ZERNIO`) — a branded `from` for one-way international SMS. No phone number purchase or carrier registration is needed; once created, pass it as `from` on `POST /v1/sms/messages`.  Constraints: 3-11 characters (letters, digits, spaces; at least one letter). Sends cannot reach the US, Canada, or Puerto Rico, are text-only, and recipients cannot reply. Sender IDs that impersonate well-known brands or institutions are rejected, and an ID already registered by another workspace returns 409 (active sender IDs are globally unique, first-come-first-served). Creating the same sender ID again is a no-op (re-activates it after a delete).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_sms_sender_id_request = new \Zernio\Model\CreateSmsSenderIdRequest(); // \Zernio\Model\CreateSmsSenderIdRequest

try {
    $result = $apiInstance->createSmsSenderId($create_sms_sender_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->createSmsSenderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_sms_sender_id_request** | [**\Zernio\Model\CreateSmsSenderIdRequest**](../Model/CreateSmsSenderIdRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateSmsSenderId200Response**](../Model/CreateSmsSenderId200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivateSmsRegistration()`

```php
deactivateSmsRegistration($id): \Zernio\Model\DeactivateSmsRegistration200Response
```

Deactivate a brand/campaign registration

Terminates the campaign with the carrier registry so the recurring monthly campaign fee stops (carriers bill the first 3 months of a campaign regardless). Numbers covered by it can no longer SEND texts — receiving is unaffected — until they're registered under a new brand. Irreversible: a deactivated campaign cannot be restored; texting again later requires a new registration (new one-time and review fees). Idempotent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deactivateSmsRegistration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->deactivateSmsRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Zernio\Model\DeactivateSmsRegistration200Response**](../Model/DeactivateSmsRegistration200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSmsSenderId()`

```php
deleteSmsSenderId($id): \Zernio\Model\DeleteSmsSenderId200Response
```

Delete an alphanumeric sender ID

Deactivates the sender ID so it can no longer send. Re-creating the same sender ID via `POST /v1/sms/sender-ids` re-activates it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Sender ID resource id.

try {
    $result = $apiInstance->deleteSmsSenderId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->deleteSmsSenderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Sender ID resource id. | |

### Return type

[**\Zernio\Model\DeleteSmsSenderId200Response**](../Model/DeleteSmsSenderId200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableSmsOnNumber()`

```php
disableSmsOnNumber($id): \Zernio\Model\DisableSmsOnNumber200Response
```

Disable SMS on a number

Turns off SMS for the number (deactivates its SMS account). The carrier registration is untouched, so re-enabling later just reactivates it, with no re-registration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->disableSmsOnNumber($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->disableSmsOnNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Zernio\Model\DisableSmsOnNumber200Response**](../Model/DisableSmsOnNumber200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableSmsOnNumber()`

```php
enableSmsOnNumber($id): \Zernio\Model\EnableSmsOnNumber200Response
```

Enable SMS on a number

Turns on SMS for one of your numbers. The number's real carrier capability is checked first: some number types can't do SMS at all (`smsCapable: false`), and a number still provisioning at the carrier returns `notReady: true` (try again once provisioning finishes).  US numbers additionally need a carrier registration before messages deliver; the response tells you which path applies: - `alreadyRegistered: true`: a prior registration still covers this   number; SMS was simply reactivated. - `reusable` set: you have an approved registration this number can   join in one click via   `POST /v1/phone-numbers/{id}/sms/reuse-registration`   (no new brand/campaign, no extra carrier fee). - `needsRegistration: true` and no `reusable`: start one via   `POST /v1/sms/registrations`.  Idempotent: re-running re-attempts any carrier-side setup that failed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Phone number record ID (from GET /v1/phone-numbers).

try {
    $result = $apiInstance->enableSmsOnNumber($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->enableSmsOnNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Phone number record ID (from GET /v1/phone-numbers). | |

### Return type

[**\Zernio\Model\EnableSmsOnNumber200Response**](../Model/EnableSmsOnNumber200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmsRegistration()`

```php
getSmsRegistration($id): \Zernio\Model\GetSmsRegistration200Response
```

Get a carrier registration

Poll this for approval progress after starting a registration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getSmsRegistration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->getSmsRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Zernio\Model\GetSmsRegistration200Response**](../Model/GetSmsRegistration200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSmsOptOuts()`

```php
listSmsOptOuts($format, $limit): \Zernio\Model\ListSmsOptOuts200Response
```

List SMS opt-outs

The recipients who opted out of SMS (replied STOP) across your numbers, most recent first. Compliance surface: you must be able to see and export your opt-out list. Read-only: a recipient is re-subscribed only by replying START. Pass `format=csv` to download a CSV instead of JSON.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = 'json'; // string
$limit = 500; // int

try {
    $result = $apiInstance->listSmsOptOuts($format, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->listSmsOptOuts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **format** | **string**|  | [optional] [default to &#39;json&#39;] |
| **limit** | **int**|  | [optional] [default to 500] |

### Return type

[**\Zernio\Model\ListSmsOptOuts200Response**](../Model/ListSmsOptOuts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSmsRegistrations()`

```php
listSmsRegistrations($include_deactivated): \Zernio\Model\ListSmsRegistrations200Response
```

List carrier registrations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_deactivated = True; // bool | Deactivated (terminated) registrations are hidden by default — pass true to include them.

try {
    $result = $apiInstance->listSmsRegistrations($include_deactivated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->listSmsRegistrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include_deactivated** | **bool**| Deactivated (terminated) registrations are hidden by default — pass true to include them. | [optional] |

### Return type

[**\Zernio\Model\ListSmsRegistrations200Response**](../Model/ListSmsRegistrations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSmsSenderIds()`

```php
listSmsSenderIds(): \Zernio\Model\ListSmsSenderIds200Response
```

List alphanumeric sender IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listSmsSenderIds();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->listSmsSenderIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\ListSmsSenderIds200Response**](../Model/ListSmsSenderIds200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lookupSmsNumber()`

```php
lookupSmsNumber($number): \Zernio\Model\LookupSmsNumber200Response
```

Look up carrier + line type

Carrier name and line type (mobile / landline / voip / toll-free) for a number, plus `smsReachable` (landlines can't receive SMS). Use it to validate recipients before sending. Each lookup is billed by the carrier-data provider, so call it explicitly (e.g. pre-validating an opt-in list), not on every send.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 'number_example'; // string | Number to look up (E.164; formatting is normalized).

try {
    $result = $apiInstance->lookupSmsNumber($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->lookupSmsNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number** | **string**| Number to look up (E.164; formatting is normalized). | |

### Return type

[**\Zernio\Model\LookupSmsNumber200Response**](../Model/LookupSmsNumber200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestSmsSenderIdLimitIncrease()`

```php
requestSmsSenderIdLimitIncrease($request_sms_sender_id_limit_increase_request): \Zernio\Model\RequestSmsSenderIdLimitIncrease200Response
```

Request a higher sender ID daily limit

Asks support to raise the workspace's daily sender-ID message cap. There is no self-serve raise: the request (desired cap + use case) is reviewed manually, usually within a business day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_sms_sender_id_limit_increase_request = new \Zernio\Model\RequestSmsSenderIdLimitIncreaseRequest(); // \Zernio\Model\RequestSmsSenderIdLimitIncreaseRequest

try {
    $result = $apiInstance->requestSmsSenderIdLimitIncrease($request_sms_sender_id_limit_increase_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->requestSmsSenderIdLimitIncrease: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_sms_sender_id_limit_increase_request** | [**\Zernio\Model\RequestSmsSenderIdLimitIncreaseRequest**](../Model/RequestSmsSenderIdLimitIncreaseRequest.md)|  | |

### Return type

[**\Zernio\Model\RequestSmsSenderIdLimitIncrease200Response**](../Model/RequestSmsSenderIdLimitIncrease200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendSmsRegistrationOtp()`

```php
resendSmsRegistrationOtp($id): \Zernio\Model\ResendSmsRegistrationOtp200Response
```

Re-send the sole-prop OTP

Re-sends the sole-proprietor verification PIN to the brand's mobile number — use it when the original code expired or never arrived. Only valid while the registration is pending and awaiting its OTP; rate limited to one send per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->resendSmsRegistrationOtp($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->resendSmsRegistrationOtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Zernio\Model\ResendSmsRegistrationOtp200Response**](../Model/ResendSmsRegistrationOtp200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reuseSmsRegistrationForNumber()`

```php
reuseSmsRegistrationForNumber($id): \Zernio\Model\ReuseSmsRegistrationForNumber200Response
```

Add number to SMS registration

Attaches this number to your existing approved 10DLC campaign instead of running a fresh registration: the number inherits the campaign's approval (no new brand or campaign, no extra carrier fee). Enable SMS on the number first (`POST /v1/phone-numbers/{id}/sms`; its response tells you whether a reusable registration exists).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->reuseSmsRegistrationForNumber($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->reuseSmsRegistrationForNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Zernio\Model\ReuseSmsRegistrationForNumber200Response**](../Model/ReuseSmsRegistrationForNumber200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendSms()`

```php
sendSms($send_sms_request, $idempotency_key): \Zernio\Model\SendSms200Response
```

Send an SMS/MMS

Sends an SMS (or MMS when `mediaUrls` is set) from one of your SMS-enabled numbers, or from an approved alphanumeric sender ID (`/v1/sms/sender-ids`). At least one of `text` / `mediaUrls` is required. Numbers are normalized to E.164, so `from` matches regardless of formatting and replies thread into the same inbox conversation.  US numbers must have an approved carrier registration (`/v1/sms/registrations`) before messages deliver.  **Alphanumeric sender IDs** are one-way and international only: they cannot reach the US, Canada, or Puerto Rico (403), are text-only (no MMS), and recipients cannot reply. Some destination countries substitute a numeric sender to ensure delivery.  **Idempotency:** send an `Idempotency-Key` header to make retries safe: same key + same body replays the original response instead of sending a second message; same key + different body returns 422; a key still in flight returns 409.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_sms_request = new \Zernio\Model\SendSmsRequest(); // \Zernio\Model\SendSmsRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes send retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409.

try {
    $result = $apiInstance->sendSms($send_sms_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->sendSms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_sms_request** | [**\Zernio\Model\SendSmsRequest**](../Model/SendSmsRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes send retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. | [optional] |

### Return type

[**\Zernio\Model\SendSms200Response**](../Model/SendSms200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shareSmsRegistration()`

```php
shareSmsRegistration($share_sms_registration_request): \Zernio\Model\ShareSmsRegistration200Response
```

Create a registration share link

Creates a single-use, expiring link (valid 7 days) that lets someone else (whoever has the legal business details) fill in the carrier registration form for one of your numbers, without a Zernio login. The registration is created under your account once the form is submitted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$share_sms_registration_request = new \Zernio\Model\ShareSmsRegistrationRequest(); // \Zernio\Model\ShareSmsRegistrationRequest

try {
    $result = $apiInstance->shareSmsRegistration($share_sms_registration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->shareSmsRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **share_sms_registration_request** | [**\Zernio\Model\ShareSmsRegistrationRequest**](../Model/ShareSmsRegistrationRequest.md)|  | |

### Return type

[**\Zernio\Model\ShareSmsRegistration200Response**](../Model/ShareSmsRegistration200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startSmsRegistration()`

```php
startSmsRegistration($start_sms_registration_request): \Zernio\Model\StartSmsRegistration200Response
```

Start a carrier registration

Starts the US carrier registration that a number needs before SMS delivers: 10DLC (standard company or sole-proprietor) or toll-free verification. 10DLC needs `brand` + `campaign`; toll-free needs `tollFree`. Approval is asynchronous; poll `GET /v1/sms/registrations/{id}` (sole-prop registrations first need the OTP step: a code is texted to the brand's mobile number, submit it via `/verify-otp`).  Already have an approved registration? Add another number to it with `POST /v1/phone-numbers/{id}/sms/reuse-registration` instead of registering (and paying the carrier brand fee) again.  Rather have your client fill in the legal business details? Create a share link with `POST /v1/sms/registrations/share`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_sms_registration_request = new \Zernio\Model\StartSmsRegistrationRequest(); // \Zernio\Model\StartSmsRegistrationRequest

try {
    $result = $apiInstance->startSmsRegistration($start_sms_registration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->startSmsRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_sms_registration_request** | [**\Zernio\Model\StartSmsRegistrationRequest**](../Model/StartSmsRegistrationRequest.md)|  | |

### Return type

[**\Zernio\Model\StartSmsRegistration200Response**](../Model/StartSmsRegistration200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadSmsOptInProof()`

```php
uploadSmsOptInProof($id, $file): \Zernio\Model\UploadSmsOptInProofFile200Response
```

Upload opt-in form proof for an appeal

Hosts a screenshot (or PDF) of your SMS opt-in form and returns its public URL. Carrier reviewers reject campaigns whose consent can't be verified and ask for a \"link/screenshot of the opt-in form\" — the registry has no attachment field, so include the returned URL inside the `messageFlow` you submit with the appeal (`POST /v1/sms/registrations/{id}/appeal`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$file = '/path/to/file.txt'; // \SplFileObject | PNG, JPG, WebP, GIF or PDF, max 4MB.

try {
    $result = $apiInstance->uploadSmsOptInProof($id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->uploadSmsOptInProof: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**| PNG, JPG, WebP, GIF or PDF, max 4MB. | |

### Return type

[**\Zernio\Model\UploadSmsOptInProofFile200Response**](../Model/UploadSmsOptInProofFile200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadSmsOptInProofFile()`

```php
uploadSmsOptInProofFile($file): \Zernio\Model\UploadSmsOptInProofFile200Response
```

Upload opt-in form proof

Hosts a screenshot (or PDF) of your SMS opt-in form and returns its public URL. Include that URL in the campaign's `messageFlow` (the opt-in workflow text) — the carrier registry has no attachment field, so reviewers verify consent by opening links in that answer. Works before a registration exists (use it when registering) and for appeals. `/v1/sms/registrations/{id}/opt-in-proof` is an alias.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject | PNG, JPG, WebP, GIF or PDF, max 4MB.

try {
    $result = $apiInstance->uploadSmsOptInProofFile($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->uploadSmsOptInProofFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| PNG, JPG, WebP, GIF or PDF, max 4MB. | |

### Return type

[**\Zernio\Model\UploadSmsOptInProofFile200Response**](../Model/UploadSmsOptInProofFile200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifySmsRegistrationOtp()`

```php
verifySmsRegistrationOtp($id, $verify_sms_registration_otp_request): \Zernio\Model\VerifySmsRegistrationOtp200Response
```

Submit the sole-prop OTP

Completes sole-proprietor 10DLC brand verification by submitting the one-time PIN texted to the brand's mobile number. On success the registration continues to campaign creation automatically.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$verify_sms_registration_otp_request = new \Zernio\Model\VerifySmsRegistrationOtpRequest(); // \Zernio\Model\VerifySmsRegistrationOtpRequest

try {
    $result = $apiInstance->verifySmsRegistrationOtp($id, $verify_sms_registration_otp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->verifySmsRegistrationOtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **verify_sms_registration_otp_request** | [**\Zernio\Model\VerifySmsRegistrationOtpRequest**](../Model/VerifySmsRegistrationOtpRequest.md)|  | |

### Return type

[**\Zernio\Model\VerifySmsRegistrationOtp200Response**](../Model/VerifySmsRegistrationOtp200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
