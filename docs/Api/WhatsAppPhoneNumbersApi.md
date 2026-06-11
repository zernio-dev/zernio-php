# Zernio\WhatsAppPhoneNumbersApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkWhatsAppNumberAvailability()**](WhatsAppPhoneNumbersApi.md#checkWhatsAppNumberAvailability) | **GET** /v1/whatsapp/phone-numbers/availability | Check a country&#39;s availability + address constraint |
| [**getWhatsAppNumberInfo()**](WhatsAppPhoneNumbersApi.md#getWhatsAppNumberInfo) | **GET** /v1/whatsapp/number-info | Get number status |
| [**getWhatsAppNumberKycForm()**](WhatsAppPhoneNumbersApi.md#getWhatsAppNumberKycForm) | **GET** /v1/whatsapp/phone-numbers/kyc | Get regulated-number KYC form spec |
| [**getWhatsAppNumberRemediation()**](WhatsAppPhoneNumbersApi.md#getWhatsAppNumberRemediation) | **GET** /v1/whatsapp/phone-numbers/{id}/remediate | Get the declined requirements to fix |
| [**getWhatsAppPhoneNumber()**](WhatsAppPhoneNumbersApi.md#getWhatsAppPhoneNumber) | **GET** /v1/whatsapp/phone-numbers/{phoneNumberId} | Get phone number |
| [**getWhatsAppPhoneNumbers()**](WhatsAppPhoneNumbersApi.md#getWhatsAppPhoneNumbers) | **GET** /v1/whatsapp/phone-numbers | List phone numbers |
| [**listWhatsAppNumberCountries()**](WhatsAppPhoneNumbersApi.md#listWhatsAppNumberCountries) | **GET** /v1/whatsapp/phone-numbers/countries | List offerable number countries |
| [**purchaseWhatsAppPhoneNumber()**](WhatsAppPhoneNumbersApi.md#purchaseWhatsAppPhoneNumber) | **POST** /v1/whatsapp/phone-numbers/purchase | Purchase phone number |
| [**releaseWhatsAppPhoneNumber()**](WhatsAppPhoneNumbersApi.md#releaseWhatsAppPhoneNumber) | **DELETE** /v1/whatsapp/phone-numbers/{phoneNumberId} | Release phone number |
| [**remediateWhatsAppNumber()**](WhatsAppPhoneNumbersApi.md#remediateWhatsAppNumber) | **POST** /v1/whatsapp/phone-numbers/{id}/remediate | Fix a declined number and re-submit |
| [**searchAvailableWhatsAppNumbers()**](WhatsAppPhoneNumbersApi.md#searchAvailableWhatsAppNumbers) | **GET** /v1/whatsapp/phone-numbers/available | Search available numbers to purchase |
| [**submitWhatsAppNumberKyc()**](WhatsAppPhoneNumbersApi.md#submitWhatsAppNumberKyc) | **POST** /v1/whatsapp/phone-numbers/kyc | Submit regulated-number KYC |
| [**uploadWhatsAppNumberKycDocument()**](WhatsAppPhoneNumbersApi.md#uploadWhatsAppNumberKycDocument) | **POST** /v1/whatsapp/phone-numbers/kyc/upload-document | Upload a single regulated-number KYC document |
| [**validateWhatsAppNumberKycAddress()**](WhatsAppPhoneNumbersApi.md#validateWhatsAppNumberKycAddress) | **POST** /v1/whatsapp/phone-numbers/kyc/validate-address | Pre-validate a regulated-number KYC address (Tier 4) |


## `checkWhatsAppNumberAvailability()`

```php
checkWhatsAppNumberAvailability($country): \Zernio\Model\CheckWhatsAppNumberAvailability200Response
```

Check a country's availability + address constraint

Pre-purchase check, so you can warn BEFORE a customer invests in KYC (regulated review is async, 1-3 days). Tells you whether we have deliverable inventory, and what address the customer needs:   - `addressConstraint: geo`  → the registered address MUST be in one of     the returned `areas` (the only place we have stock). A different-area     address passes pre-approval but the number can never be assigned.   - `addressConstraint: country` → any in-country address works.   - `addressConstraint: none` → field-only / instant country, no address. Call this before starting the KYC form for regulated countries.

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
$country = 'country_example'; // string | ISO-2 country code.

try {
    $result = $apiInstance->checkWhatsAppNumberAvailability($country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppPhoneNumbersApi->checkWhatsAppNumberAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**| ISO-2 country code. | |

### Return type

[**\Zernio\Model\CheckWhatsAppNumberAvailability200Response**](../Model/CheckWhatsAppNumberAvailability200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `getWhatsAppNumberRemediation()`

```php
getWhatsAppNumberRemediation($id): \Zernio\Model\GetWhatsAppNumberRemediation200Response
```

Get the declined requirements to fix

For a number in `regulatory_declined`, returns ONLY the requirements the reviewer flagged declined, as a form spec (same shape as the KYC form GET). The customer fixes just those — Telnyx supports correcting a declined requirement group and re-submitting it (no new number/group). Falls back to the full spec if the provider exposes no per-requirement flags.

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
$id = 'id_example'; // string | WhatsAppPhoneNumber id.

try {
    $result = $apiInstance->getWhatsAppNumberRemediation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppPhoneNumbersApi->getWhatsAppNumberRemediation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| WhatsAppPhoneNumber id. | |

### Return type

[**\Zernio\Model\GetWhatsAppNumberRemediation200Response**](../Model/GetWhatsAppNumberRemediation200Response.md)

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

List all WhatsApp phone numbers purchased by the authenticated user. By default, released numbers are excluded. Connected (bring-your-own) numbers are returned in the separate `connected` array — they are not billed and have no provisioning lifecycle.

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
$status = 'status_example'; // string | Filter by status (by default excludes released numbers). NOTE: `status=pending_regulatory` returns the \"provisioning\" view — numbers still in review PLUS recently-declined (last 30 days) ones, so a failed registration surfaces (with `regulatoryDeclineReason`) instead of silently disappearing. Declined numbers can be re-submitted via POST /v1/whatsapp/phone-numbers/{id}/remediate. `verifying` is the short-lived state after the number is provisioned on our side while WhatsApp confirms the activation code; the number is not billed until it reaches `active`.
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
| **status** | **string**| Filter by status (by default excludes released numbers). NOTE: &#x60;status&#x3D;pending_regulatory&#x60; returns the \&quot;provisioning\&quot; view — numbers still in review PLUS recently-declined (last 30 days) ones, so a failed registration surfaces (with &#x60;regulatoryDeclineReason&#x60;) instead of silently disappearing. Declined numbers can be re-submitted via POST /v1/whatsapp/phone-numbers/{id}/remediate. &#x60;verifying&#x60; is the short-lived state after the number is provisioned on our side while WhatsApp confirms the activation code; the number is not billed until it reaches &#x60;active&#x60;. | [optional] |
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

## `remediateWhatsAppNumber()`

```php
remediateWhatsAppNumber($id, $remediate_whats_app_number_request): \Zernio\Model\RemediateWhatsAppNumber200Response
```

Fix a declined number and re-submit

Submit corrected values/documents for the declined requirement(s). We PATCH them onto the SAME requirement group and re-submit it for approval; the number goes `regulatory_declined` → `pending_regulatory`. No new number and no new billing. Body shape matches the KYC submit (values / documents / address) — send only the corrected fields.

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
$id = 'id_example'; // string
$remediate_whats_app_number_request = new \Zernio\Model\RemediateWhatsAppNumberRequest(); // \Zernio\Model\RemediateWhatsAppNumberRequest

try {
    $result = $apiInstance->remediateWhatsAppNumber($id, $remediate_whats_app_number_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppPhoneNumbersApi->remediateWhatsAppNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **remediate_whats_app_number_request** | [**\Zernio\Model\RemediateWhatsAppNumberRequest**](../Model/RemediateWhatsAppNumberRequest.md)|  | |

### Return type

[**\Zernio\Model\RemediateWhatsAppNumber200Response**](../Model/RemediateWhatsAppNumber200Response.md)

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

Submit the end customer's KYC (textual values, uploaded documents, address) for a Tier 3/4 country. Documents are streamed straight to the number provider and are not stored by Zernio. Builds + submits a regulatory requirement group and claims a pending_regulatory slot; the number is ordered + activated once the provider approves (asynchronous). A customer may hold several same-country numbers in review at once; a double-submit of the SAME attempt is deduped via `submissionId`.  For an ID-card document requirement, carriers commonly require BOTH sides: combine the front and back into a single file before uploading (the dashboard does this automatically). A one-sided ID is a common decline reason; fix it via POST /v1/whatsapp/phone-numbers/{id}/remediate.  Before submitting, call GET /v1/whatsapp/phone-numbers/availability to check the country has deliverable inventory and, for geographic-match countries, which area the address must be in — otherwise the submission can pass review yet never be assignable a number.

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

## `uploadWhatsAppNumberKycDocument()`

```php
uploadWhatsAppNumberKycDocument($x_filename, $body): \Zernio\Model\UploadWhatsAppNumberKycDocument200Response
```

Upload a single regulated-number KYC document

Upload ONE document and get back its provider document id, to reference from POST /v1/whatsapp/phone-numbers/kyc via `documents[].documentId`. Send the RAW file bytes as the request body (not base64); put the filename in the `X-Filename` header. Uploading documents one-per-request keeps each request under the ~4.5MB body limit. The document streams straight to the number provider and is not stored by Zernio.

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
$x_filename = 'x_filename_example'; // string | URL-encoded original filename.
$body = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->uploadWhatsAppNumberKycDocument($x_filename, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppPhoneNumbersApi->uploadWhatsAppNumberKycDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_filename** | **string**| URL-encoded original filename. | |
| **body** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\Zernio\Model\UploadWhatsAppNumberKycDocument200Response**](../Model/UploadWhatsAppNumberKycDocument200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateWhatsAppNumberKycAddress()`

```php
validateWhatsAppNumberKycAddress($validate_whats_app_number_kyc_address_request): \Zernio\Model\ValidateWhatsAppNumberKycAddress200Response
```

Pre-validate a regulated-number KYC address (Tier 4)

Optional early check for the address step of a Tier 4 (end-user identity) registration: validates a postal address for deliverability BEFORE the full KYC submit, so it can be corrected before any documents are uploaded. The full submit (POST /v1/whatsapp/phone-numbers/kyc) re-validates the address, so this call is purely a fast feedback path and skipping it is safe. Only the postal address is sent (no documents, no gov-ID fields). A region (`administrative_area`) is required by the validator; when it is omitted the pre-check is skipped and `{ ok: true, skipped: true }` is returned (the final submit still validates).

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
$validate_whats_app_number_kyc_address_request = new \Zernio\Model\ValidateWhatsAppNumberKycAddressRequest(); // \Zernio\Model\ValidateWhatsAppNumberKycAddressRequest

try {
    $result = $apiInstance->validateWhatsAppNumberKycAddress($validate_whats_app_number_kyc_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppPhoneNumbersApi->validateWhatsAppNumberKycAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validate_whats_app_number_kyc_address_request** | [**\Zernio\Model\ValidateWhatsAppNumberKycAddressRequest**](../Model/ValidateWhatsAppNumberKycAddressRequest.md)|  | |

### Return type

[**\Zernio\Model\ValidateWhatsAppNumberKycAddress200Response**](../Model/ValidateWhatsAppNumberKycAddress200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
