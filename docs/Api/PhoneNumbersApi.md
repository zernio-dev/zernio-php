# Zernio\PhoneNumbersApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelPhoneNumberPortIn()**](PhoneNumbersApi.md#cancelPhoneNumberPortIn) | **DELETE** /v1/phone-numbers/port-in/{id} | Cancel a port-in |
| [**checkPhoneNumberAvailability()**](PhoneNumbersApi.md#checkPhoneNumberAvailability) | **GET** /v1/phone-numbers/availability | Check country availability |
| [**checkPhoneNumberPortability()**](PhoneNumbersApi.md#checkPhoneNumberPortability) | **POST** /v1/phone-numbers/port-in/check | Check portability |
| [**createPhoneNumberKycLink()**](PhoneNumbersApi.md#createPhoneNumberKycLink) | **POST** /v1/phone-numbers/kyc/share | Create a hosted KYC link |
| [**createPhoneNumberPortIn()**](PhoneNumbersApi.md#createPhoneNumberPortIn) | **POST** /v1/phone-numbers/port-in | Port numbers in |
| [**getPhoneNumber()**](PhoneNumbersApi.md#getPhoneNumber) | **GET** /v1/phone-numbers/{id} | Get phone number |
| [**getPhoneNumberKycForm()**](PhoneNumbersApi.md#getPhoneNumberKycForm) | **GET** /v1/phone-numbers/kyc | Get KYC form spec |
| [**getPhoneNumberPortInOrderRequirements()**](PhoneNumbersApi.md#getPhoneNumberPortInOrderRequirements) | **GET** /v1/phone-numbers/port-in/{id}/requirements | A port-in order&#39;s pending requirements |
| [**getPhoneNumberPortInRequirements()**](PhoneNumbersApi.md#getPhoneNumberPortInRequirements) | **GET** /v1/phone-numbers/port-in/requirements | Country porting requirements |
| [**getPhoneNumberRemediation()**](PhoneNumbersApi.md#getPhoneNumberRemediation) | **GET** /v1/phone-numbers/{id}/remediate | Get declined requirements |
| [**listPhoneNumberCountries()**](PhoneNumbersApi.md#listPhoneNumberCountries) | **GET** /v1/phone-numbers/countries | List offerable number countries |
| [**listPhoneNumberPortIns()**](PhoneNumbersApi.md#listPhoneNumberPortIns) | **GET** /v1/phone-numbers/port-in | List port-in orders |
| [**listPhoneNumbers()**](PhoneNumbersApi.md#listPhoneNumbers) | **GET** /v1/phone-numbers | List phone numbers |
| [**purchasePhoneNumber()**](PhoneNumbersApi.md#purchasePhoneNumber) | **POST** /v1/phone-numbers/purchase | Purchase phone number |
| [**releasePhoneNumber()**](PhoneNumbersApi.md#releasePhoneNumber) | **DELETE** /v1/phone-numbers/{id} | Release phone number |
| [**remediatePhoneNumber()**](PhoneNumbersApi.md#remediatePhoneNumber) | **POST** /v1/phone-numbers/{id}/remediate | Resubmit a declined number |
| [**replyToPhoneNumberReviewer()**](PhoneNumbersApi.md#replyToPhoneNumberReviewer) | **POST** /v1/phone-numbers/{id}/remediate/reply | Reply to the regulatory reviewer |
| [**reviewPhoneNumberKycPacket()**](PhoneNumbersApi.md#reviewPhoneNumberKycPacket) | **POST** /v1/phone-numbers/kyc/review-packet | Pre-review a KYC packet |
| [**searchAvailablePhoneNumbers()**](PhoneNumbersApi.md#searchAvailablePhoneNumbers) | **GET** /v1/phone-numbers/available | Search available numbers |
| [**submitPhoneNumberKyc()**](PhoneNumbersApi.md#submitPhoneNumberKyc) | **POST** /v1/phone-numbers/kyc | Submit KYC |
| [**uploadPhoneNumberKycDocument()**](PhoneNumbersApi.md#uploadPhoneNumberKycDocument) | **POST** /v1/phone-numbers/kyc/upload-document | Upload a KYC document |
| [**uploadPhoneNumberPortInDocument()**](PhoneNumbersApi.md#uploadPhoneNumberPortInDocument) | **POST** /v1/phone-numbers/port-in/documents | Upload a porting document |
| [**validatePhoneNumberKycAddress()**](PhoneNumbersApi.md#validatePhoneNumberKycAddress) | **POST** /v1/phone-numbers/kyc/validate-address | Pre-validate KYC address |
| [**viewPhoneNumberKycDocument()**](PhoneNumbersApi.md#viewPhoneNumberKycDocument) | **GET** /v1/phone-numbers/kyc/document/{documentId} | View a KYC document on file |


## `cancelPhoneNumberPortIn()`

```php
cancelPhoneNumberPortIn($id): \Zernio\Model\CancelPhoneNumberPortIn200Response
```

Cancel a port-in

Cancel an in-flight port (wrong number, staying with the old carrier). Only orders that haven't ported can be cancelled; a completed port is a normal number release instead. The carrier may report `cancel-pending` briefly while the losing carrier acknowledges; it settles to `cancelled`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Porting order ID (from the port-in list).

try {
    $result = $apiInstance->cancelPhoneNumberPortIn($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->cancelPhoneNumberPortIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Porting order ID (from the port-in list). | |

### Return type

[**\Zernio\Model\CancelPhoneNumberPortIn200Response**](../Model/CancelPhoneNumberPortIn200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkPhoneNumberAvailability()`

```php
checkPhoneNumberAvailability($country, $number_type): \Zernio\Model\CheckPhoneNumberAvailability200Response
```

Check country availability

Pre-purchase check, so you can warn BEFORE a customer invests in KYC (regulated review is async, 1-3 days). Tells you whether we have deliverable inventory, and what address the customer needs:   - `addressConstraint: geo`  → the registered address MUST be in one of     the returned `areas` (the only place we have stock). A different-area     address passes pre-approval but the number can never be assigned.   - `addressConstraint: country` → any in-country address works.   - `addressConstraint: none` → field-only / instant country, no address. Call this before starting the KYC form for regulated countries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = 'country_example'; // string | ISO-2 country code.
$number_type = 'number_type_example'; // string | Check a specific offered type (stock and address constraints are per type). Omitted = the country's default type.

try {
    $result = $apiInstance->checkPhoneNumberAvailability($country, $number_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->checkPhoneNumberAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**| ISO-2 country code. | |
| **number_type** | **string**| Check a specific offered type (stock and address constraints are per type). Omitted &#x3D; the country&#39;s default type. | [optional] |

### Return type

[**\Zernio\Model\CheckPhoneNumberAvailability200Response**](../Model/CheckPhoneNumberAvailability200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkPhoneNumberPortability()`

```php
checkPhoneNumberPortability($check_phone_number_portability_request): \Zernio\Model\CheckPhoneNumberPortability200Response
```

Check portability

Pre-flight portability check: whether each number can be ported in and whether it qualifies for FastPort, BEFORE the user commits to a port order (LOA, invoice, service address). Read-only; creates no order and bills nothing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_phone_number_portability_request = new \Zernio\Model\CheckPhoneNumberPortabilityRequest(); // \Zernio\Model\CheckPhoneNumberPortabilityRequest

try {
    $result = $apiInstance->checkPhoneNumberPortability($check_phone_number_portability_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->checkPhoneNumberPortability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_phone_number_portability_request** | [**\Zernio\Model\CheckPhoneNumberPortabilityRequest**](../Model/CheckPhoneNumberPortabilityRequest.md)|  | |

### Return type

[**\Zernio\Model\CheckPhoneNumberPortability200Response**](../Model/CheckPhoneNumberPortability200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPhoneNumberKycLink()`

```php
createPhoneNumberKycLink($create_phone_number_kyc_link_request): \Zernio\Model\CreatePhoneNumberKycLink200Response
```

Create a hosted KYC link

Create a single-use, 7-day hosted KYC link that your end customer completes WITHOUT a Zernio login — useful when the person who holds the ID and address is not your team. They fill the regulated verification on a Zernio-hosted page; the number provisions under YOUR account once they submit. Only regulated (KYC) countries are valid: a country that does not require KYC returns 400.  White-label the page with `branding` (your company name, logo, brand color). Supply `redirect_url` to send the end customer back to your own site after a successful submit (completion params are appended — see below). Listen for the `whatsapp.number.kyc_submitted` webhook to react when the form is completed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_phone_number_kyc_link_request = new \Zernio\Model\CreatePhoneNumberKycLinkRequest(); // \Zernio\Model\CreatePhoneNumberKycLinkRequest

try {
    $result = $apiInstance->createPhoneNumberKycLink($create_phone_number_kyc_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->createPhoneNumberKycLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_phone_number_kyc_link_request** | [**\Zernio\Model\CreatePhoneNumberKycLinkRequest**](../Model/CreatePhoneNumberKycLinkRequest.md)|  | |

### Return type

[**\Zernio\Model\CreatePhoneNumberKycLink200Response**](../Model/CreatePhoneNumberKycLink200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPhoneNumberPortIn()`

```php
createPhoneNumberPortIn($create_phone_number_port_in_request): \Zernio\Model\CreatePhoneNumberPortIn201Response
```

Port numbers in

Submit a port-in for one or more existing numbers from another carrier. Creates the carrier order(s), attaches the end-user (current account) info plus the LOA and invoice documents, and submits to the losing carrier. The transfer PIN is forwarded to the carrier and never stored. Ported numbers arrive voice-ready (and SMS-ready where the order supports messaging).  Run the portability check (POST /v1/phone-numbers/port-in/check) and upload the two documents (POST /v1/phone-numbers/port-in/documents) first — uploaded documents must be attached to an order within 30 minutes or the carrier deletes them, so upload right before this call. The carrier may split the numbers into several orders (by country, number type, losing carrier); `orders` carries per-order results, and a partial failure still returns 201 with the failed orders' `error` set (they stay as cancellable drafts).  Non-US/CA numbers additionally need the country-specific values from GET /v1/phone-numbers/port-in/requirements, passed via `requirements`, and must be submitted one country per request. When required information is still missing after submission, the order is kept as a resumable draft whose `error` / `declineReason` names the gaps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_phone_number_port_in_request = new \Zernio\Model\CreatePhoneNumberPortInRequest(); // \Zernio\Model\CreatePhoneNumberPortInRequest

try {
    $result = $apiInstance->createPhoneNumberPortIn($create_phone_number_port_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->createPhoneNumberPortIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_phone_number_port_in_request** | [**\Zernio\Model\CreatePhoneNumberPortInRequest**](../Model/CreatePhoneNumberPortInRequest.md)|  | |

### Return type

[**\Zernio\Model\CreatePhoneNumberPortIn201Response**](../Model/CreatePhoneNumberPortIn201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPhoneNumber()`

```php
getPhoneNumber($id): \Zernio\Model\GetPhoneNumber200Response
```

Get phone number

Retrieve the current status of a purchased phone number. Poll this to track Meta pre-verification (US sync path) and, for regulated (Tier 3/4) numbers, the async lifecycle: pending_regulatory → active (or regulatory_declined). When a regulated number has an Onfido ID step, `onfidoVerificationUrl` appears here once the order is placed — forward it to the end user. (Or subscribe to the whatsapp.number.* webhooks instead of polling.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Phone number record ID

try {
    $result = $apiInstance->getPhoneNumber($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->getPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Phone number record ID | |

### Return type

[**\Zernio\Model\GetPhoneNumber200Response**](../Model/GetPhoneNumber200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPhoneNumberKycForm()`

```php
getPhoneNumberKycForm($country, $number_type): \Zernio\Model\GetPhoneNumberKycForm200Response
```

Get KYC form spec

For a Tier 3/4 country, the fields the end customer must provide (Telnyx regulatory requirements) before a number can be ordered: text, date, address, or file (document) per requirement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = 'country_example'; // string
$number_type = 'number_type_example'; // string | Requirements and reuse eligibility are per (country, type). Omitted = the country's default type. Pass the same value on the POST.

try {
    $result = $apiInstance->getPhoneNumberKycForm($country, $number_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->getPhoneNumberKycForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**|  | |
| **number_type** | **string**| Requirements and reuse eligibility are per (country, type). Omitted &#x3D; the country&#39;s default type. Pass the same value on the POST. | [optional] |

### Return type

[**\Zernio\Model\GetPhoneNumberKycForm200Response**](../Model/GetPhoneNumberKycForm200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPhoneNumberPortInOrderRequirements()`

```php
getPhoneNumberPortInOrderRequirements($id): \Zernio\Model\GetPhoneNumberPortInOrderRequirements200Response
```

A port-in order's pending requirements

The live requirements on an EXISTING porting order: which are filled, which are still pending, and which bounced on review (`requirement-info-exception`). Use it to fix and resubmit a rejected international port. Same field shape as the country-level requirements endpoint, plus per-requirement status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Porting order ID (from the port-in list).

try {
    $result = $apiInstance->getPhoneNumberPortInOrderRequirements($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->getPhoneNumberPortInOrderRequirements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Porting order ID (from the port-in list). | |

### Return type

[**\Zernio\Model\GetPhoneNumberPortInOrderRequirements200Response**](../Model/GetPhoneNumberPortInOrderRequirements200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPhoneNumberPortInRequirements()`

```php
getPhoneNumberPortInRequirements($country, $number_type): \Zernio\Model\GetPhoneNumberPortInRequirements200Response
```

Country porting requirements

The country-specific information a port-in needs BEYOND the LOA, invoice, and account/address details — e.g. an ID copy, proof of address, a tax id, or a porting code. Call it after the portability check (which returns each number's `countryCode` and `phoneNumberType`), render the fields, and pass the collected values as the create request's `requirements`. US/CA return an empty list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = 'country_example'; // string | ISO country of the numbers being ported (a supported port-in country).
$number_type = 'local'; // string | The portability check's phoneNumberType — requirements differ by type.

try {
    $result = $apiInstance->getPhoneNumberPortInRequirements($country, $number_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->getPhoneNumberPortInRequirements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**| ISO country of the numbers being ported (a supported port-in country). | |
| **number_type** | **string**| The portability check&#39;s phoneNumberType — requirements differ by type. | [optional] [default to &#39;local&#39;] |

### Return type

[**\Zernio\Model\GetPhoneNumberPortInRequirements200Response**](../Model/GetPhoneNumberPortInRequirements200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPhoneNumberRemediation()`

```php
getPhoneNumberRemediation($id): \Zernio\Model\GetPhoneNumberRemediation200Response
```

Get declined requirements

For a number in `regulatory_declined`, returns ONLY the requirements the reviewer flagged declined, as a form spec (same shape as the KYC form GET). The customer fixes just those — Telnyx supports correcting a declined requirement group and re-submitting it (no new number/group). Falls back to the full spec if the provider exposes no per-requirement flags.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Phone number record ID.

try {
    $result = $apiInstance->getPhoneNumberRemediation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->getPhoneNumberRemediation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Phone number record ID. | |

### Return type

[**\Zernio\Model\GetPhoneNumberRemediation200Response**](../Model/GetPhoneNumberRemediation200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPhoneNumberCountries()`

```php
listPhoneNumberCountries(): \Zernio\Model\ListPhoneNumberCountries200Response
```

List offerable number countries

The phone number countries available to purchase, each with its flat monthly price (cents), regulatory tier, whether it needs end-user KYC (Tier 3/4), and per-feature availability (PSTN calls, WhatsApp, SMS, and WhatsApp Business Calling outbound). Drives the country picker. Tier-4 countries appear only when enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listPhoneNumberCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->listPhoneNumberCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\ListPhoneNumberCountries200Response**](../Model/ListPhoneNumberCountries200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPhoneNumberPortIns()`

```php
listPhoneNumberPortIns(): \Zernio\Model\ListPhoneNumberPortIns200Response
```

List port-in orders

Your porting orders, newest first (max 50). Poll this for port progress: pending, confirmed FOC date, exception reason, or ported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listPhoneNumberPortIns();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->listPhoneNumberPortIns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\ListPhoneNumberPortIns200Response**](../Model/ListPhoneNumberPortIns200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPhoneNumbers()`

```php
listPhoneNumbers($status, $profile_id): \Zernio\Model\ListPhoneNumbers200Response
```

List phone numbers

List all phone numbers purchased by the authenticated user. By default, released numbers are excluded. Connected (bring-your-own) WhatsApp numbers are returned in the separate `connected` array; they are not billed and have no provisioning lifecycle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string | Filter by status (by default excludes released numbers). NOTE: `status=pending_regulatory` returns the \"provisioning\" view — numbers still in review PLUS recently-declined (last 30 days) ones, so a failed registration surfaces (with `regulatoryDeclineReason`) instead of silently disappearing. Declined numbers can be re-submitted via POST /v1/phone-numbers/{id}/remediate. `verifying` is the short-lived state after the number is provisioned on our side while WhatsApp confirms the activation code; the number is not billed until it reaches `active`.
$profile_id = 'profile_id_example'; // string | Filter by profile

try {
    $result = $apiInstance->listPhoneNumbers($status, $profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->listPhoneNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **string**| Filter by status (by default excludes released numbers). NOTE: &#x60;status&#x3D;pending_regulatory&#x60; returns the \&quot;provisioning\&quot; view — numbers still in review PLUS recently-declined (last 30 days) ones, so a failed registration surfaces (with &#x60;regulatoryDeclineReason&#x60;) instead of silently disappearing. Declined numbers can be re-submitted via POST /v1/phone-numbers/{id}/remediate. &#x60;verifying&#x60; is the short-lived state after the number is provisioned on our side while WhatsApp confirms the activation code; the number is not billed until it reaches &#x60;active&#x60;. | [optional] |
| **profile_id** | **string**| Filter by profile | [optional] |

### Return type

[**\Zernio\Model\ListPhoneNumbers200Response**](../Model/ListPhoneNumbers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchasePhoneNumber()`

```php
purchasePhoneNumber($purchase_phone_number_request): \Zernio\Model\PurchasePhoneNumber200Response
```

Purchase phone number

Payment-first: you do not pick a specific number, the system provisions one and auto-assigns it. With usage-based billing active and a payment method on file, the number provisions inline and bills per month on your usage-based invoice (there is no checkout redirect). No payment method on file returns `402 PAYMENT_REQUIRED`; a regulated country returns `202` with `status: \"kyc_required\"` and a `kycUrl`.  Requires usage-based billing (the Usage plan). The maximum number of phone numbers is determined by the user's plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_phone_number_request = {"profileId":"507f1f77bcf86cd799439011","country":"DE"}; // \Zernio\Model\PurchasePhoneNumberRequest

try {
    $result = $apiInstance->purchasePhoneNumber($purchase_phone_number_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->purchasePhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_phone_number_request** | [**\Zernio\Model\PurchasePhoneNumberRequest**](../Model/PurchasePhoneNumberRequest.md)|  | |

### Return type

[**\Zernio\Model\PurchasePhoneNumber200Response**](../Model/PurchasePhoneNumber200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releasePhoneNumber()`

```php
releasePhoneNumber($id): \Zernio\Model\ReleasePhoneNumber200Response
```

Release phone number

Release a purchased phone number. This will: 1. Disconnect any linked WhatsApp social account 2. Decrement the Stripe subscription quantity (or cancel if last number) 3. Release the number from Telnyx 4. Mark the number as released

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Phone number record ID

try {
    $result = $apiInstance->releasePhoneNumber($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->releasePhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Phone number record ID | |

### Return type

[**\Zernio\Model\ReleasePhoneNumber200Response**](../Model/ReleasePhoneNumber200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remediatePhoneNumber()`

```php
remediatePhoneNumber($id, $remediate_phone_number_request): \Zernio\Model\RemediatePhoneNumber200Response
```

Resubmit a declined number

Submit corrected values/documents for the declined requirement(s). We PATCH them onto the SAME requirement group and re-submit it for approval; the number goes `regulatory_declined` → `pending_regulatory`. No new number and no new billing. Body shape matches the KYC submit (values / documents / address) — send only the corrected fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$remediate_phone_number_request = new \Zernio\Model\RemediatePhoneNumberRequest(); // \Zernio\Model\RemediatePhoneNumberRequest

try {
    $result = $apiInstance->remediatePhoneNumber($id, $remediate_phone_number_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->remediatePhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **remediate_phone_number_request** | [**\Zernio\Model\RemediatePhoneNumberRequest**](../Model/RemediatePhoneNumberRequest.md)|  | |

### Return type

[**\Zernio\Model\RemediatePhoneNumber200Response**](../Model/RemediatePhoneNumber200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replyToPhoneNumberReviewer()`

```php
replyToPhoneNumberReviewer($id, $reply_to_phone_number_reviewer_request): \Zernio\Model\ReplyToPhoneNumberReviewer200Response
```

Reply to the regulatory reviewer

Post a free-text reply (with optional file attachments) to the reviewer on a number awaiting remediation — for asks the structured form can't express (e.g. \"is this personal or business?\"). Attachments are stored by us and their links are added to the reviewer's comment thread (the carrier's number order takes no loose files). A reply to a comment-style ask moves the number back to \"in review\"; a reply on a formal decline is supplementary and you must still resubmit the fix. Requires text or at least one attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$reply_to_phone_number_reviewer_request = new \Zernio\Model\ReplyToPhoneNumberReviewerRequest(); // \Zernio\Model\ReplyToPhoneNumberReviewerRequest

try {
    $result = $apiInstance->replyToPhoneNumberReviewer($id, $reply_to_phone_number_reviewer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->replyToPhoneNumberReviewer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **reply_to_phone_number_reviewer_request** | [**\Zernio\Model\ReplyToPhoneNumberReviewerRequest**](../Model/ReplyToPhoneNumberReviewerRequest.md)|  | |

### Return type

[**\Zernio\Model\ReplyToPhoneNumberReviewer200Response**](../Model/ReplyToPhoneNumberReviewer200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reviewPhoneNumberKycPacket()`

```php
reviewPhoneNumberKycPacket($review_phone_number_kyc_packet_request): \Zernio\Model\ReviewPhoneNumberKycPacket200Response
```

Pre-review a KYC packet

Advisory dry-run of a regulated-KYC packet before submitting: reviews the exact documents the regulator will see (referenced by the ids from POST /v1/phone-numbers/kyc/upload-document) against the declared values and address, and returns plain-language advisories for likely decline reasons (wrong document type, mismatched address, one-sided ID scans). Non-blocking: advisories are warnings, submitting anyway is always allowed, and any review failure degrades to an empty list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$review_phone_number_kyc_packet_request = new \Zernio\Model\ReviewPhoneNumberKycPacketRequest(); // \Zernio\Model\ReviewPhoneNumberKycPacketRequest

try {
    $result = $apiInstance->reviewPhoneNumberKycPacket($review_phone_number_kyc_packet_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->reviewPhoneNumberKycPacket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **review_phone_number_kyc_packet_request** | [**\Zernio\Model\ReviewPhoneNumberKycPacketRequest**](../Model/ReviewPhoneNumberKycPacketRequest.md)|  | |

### Return type

[**\Zernio\Model\ReviewPhoneNumberKycPacket200Response**](../Model/ReviewPhoneNumberKycPacket200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAvailablePhoneNumbers()`

```php
searchAvailablePhoneNumbers($country, $type, $prefix, $locality, $contains, $sms, $limit): \Zernio\Model\SearchAvailablePhoneNumbers200Response
```

Search available numbers

Search the provider's inventory for numbers available to purchase in a country (default US). Optional filters narrow the results. The country must be offerable (see GET /v1/phone-numbers/countries). Voice capability is always required; pass `sms=true` to only see numbers that can also text (SMS support is per-number, not per-country).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
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
$sms = True; // bool | true narrows the pool to SMS-capable numbers. Each result still carries its full `features` list for per-number capability badging.
$limit = 20; // int

try {
    $result = $apiInstance->searchAvailablePhoneNumbers($country, $type, $prefix, $locality, $contains, $sms, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->searchAvailablePhoneNumbers: ', $e->getMessage(), PHP_EOL;
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
| **sms** | **bool**| true narrows the pool to SMS-capable numbers. Each result still carries its full &#x60;features&#x60; list for per-number capability badging. | [optional] |
| **limit** | **int**|  | [optional] [default to 20] |

### Return type

[**\Zernio\Model\SearchAvailablePhoneNumbers200Response**](../Model/SearchAvailablePhoneNumbers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitPhoneNumberKyc()`

```php
submitPhoneNumberKyc($submit_phone_number_kyc_request): \Zernio\Model\SubmitPhoneNumberKyc200Response
```

Submit KYC

Submit the end customer's KYC (textual values, uploaded documents, address) for a Tier 3/4 country. Documents are streamed straight to the number provider and are not stored by Zernio. Builds + submits a regulatory requirement group and claims a pending_regulatory slot; the number is ordered + activated once the provider approves (asynchronous). A customer may hold several same-country numbers in review at once; a double-submit of the SAME attempt is deduped via `submissionId`.  For an ID-card document requirement, carriers commonly require BOTH sides: combine the front and back into a single file before uploading (the dashboard does this automatically). A one-sided ID is a common decline reason; fix it via POST /v1/phone-numbers/{id}/remediate.  Before submitting, call GET /v1/phone-numbers/availability to check the country has deliverable inventory and, for geographic-match countries, which area the address must be in — otherwise the submission can pass review yet never be assignable a number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submit_phone_number_kyc_request = new \Zernio\Model\SubmitPhoneNumberKycRequest(); // \Zernio\Model\SubmitPhoneNumberKycRequest

try {
    $result = $apiInstance->submitPhoneNumberKyc($submit_phone_number_kyc_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->submitPhoneNumberKyc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submit_phone_number_kyc_request** | [**\Zernio\Model\SubmitPhoneNumberKycRequest**](../Model/SubmitPhoneNumberKycRequest.md)|  | |

### Return type

[**\Zernio\Model\SubmitPhoneNumberKyc200Response**](../Model/SubmitPhoneNumberKyc200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadPhoneNumberKycDocument()`

```php
uploadPhoneNumberKycDocument($x_filename, $body): \Zernio\Model\UploadPhoneNumberKycDocument200Response
```

Upload a KYC document

Upload ONE document and get back its provider document id, to reference from POST /v1/phone-numbers/kyc via `documents[].documentId`. Send the RAW file bytes as the request body (not base64); put the filename in the `X-Filename` header. Uploading documents one-per-request keeps each request under the ~4.5MB body limit. The document streams straight to the number provider and is not stored by Zernio.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_filename = 'x_filename_example'; // string | URL-encoded original filename.
$body = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->uploadPhoneNumberKycDocument($x_filename, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->uploadPhoneNumberKycDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_filename** | **string**| URL-encoded original filename. | |
| **body** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\Zernio\Model\UploadPhoneNumberKycDocument200Response**](../Model/UploadPhoneNumberKycDocument200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadPhoneNumberPortInDocument()`

```php
uploadPhoneNumberPortInDocument($file, $kind): \Zernio\Model\UploadPhoneNumberPortInDocument200Response
```

Upload a porting document

Upload ONE porting document and get back its `documentId`. For the signed LOA / carrier invoice the id goes to `loaDocumentId` / `invoiceDocumentId`; for a country-specific document requirement (international ports) it becomes that requirement's `fieldValue`. Requirement documents are normalized to PDF automatically (regulators reject raw images). PDF, JPEG, or PNG, 10MB max. Uploads must be attached to an order within 30 minutes or the carrier deletes them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject | The document (PDF/JPEG/PNG, 10MB max).
$kind = 'kind_example'; // string | 'loa', 'invoice', or any short slug for requirement documents. Informational; used for the stored filename.

try {
    $result = $apiInstance->uploadPhoneNumberPortInDocument($file, $kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->uploadPhoneNumberPortInDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| The document (PDF/JPEG/PNG, 10MB max). | |
| **kind** | **string**| &#39;loa&#39;, &#39;invoice&#39;, or any short slug for requirement documents. Informational; used for the stored filename. | [optional] |

### Return type

[**\Zernio\Model\UploadPhoneNumberPortInDocument200Response**](../Model/UploadPhoneNumberPortInDocument200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validatePhoneNumberKycAddress()`

```php
validatePhoneNumberKycAddress($validate_phone_number_kyc_address_request): \Zernio\Model\ValidatePhoneNumberKycAddress200Response
```

Pre-validate KYC address

Optional early check for the address step of a Tier 4 (end-user identity) registration: validates a postal address for deliverability BEFORE the full KYC submit, so it can be corrected before any documents are uploaded. The full submit (POST /v1/phone-numbers/kyc) re-validates the address, so this call is purely a fast feedback path and skipping it is safe. Only the postal address is sent (no documents, no gov-ID fields). A region (`administrative_area`) is required by the validator; when it is omitted the pre-check is skipped and `{ ok: true, skipped: true }` is returned (the final submit still validates).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validate_phone_number_kyc_address_request = new \Zernio\Model\ValidatePhoneNumberKycAddressRequest(); // \Zernio\Model\ValidatePhoneNumberKycAddressRequest

try {
    $result = $apiInstance->validatePhoneNumberKycAddress($validate_phone_number_kyc_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->validatePhoneNumberKycAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validate_phone_number_kyc_address_request** | [**\Zernio\Model\ValidatePhoneNumberKycAddressRequest**](../Model/ValidatePhoneNumberKycAddressRequest.md)|  | |

### Return type

[**\Zernio\Model\ValidatePhoneNumberKycAddress200Response**](../Model/ValidatePhoneNumberKycAddress200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewPhoneNumberKycDocument()`

```php
viewPhoneNumberKycDocument($document_id): \SplFileObject
```

View a KYC document on file

Stream a document backing a reusable verification (the `documentId` values from GET /v1/phone-numbers/kyc `reusable.options[].details[]`), so the account holder can see what's on file before reusing it. Returned inline as `application/pdf` (uploads are normalized to PDF). Auth-scoped: a document is viewable only when its id is referenced by one of the caller's own numbers — otherwise `404`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = 'document_id_example'; // string | The Telnyx document id (from `reusable.options[].details[].documentId`).

try {
    $result = $apiInstance->viewPhoneNumberKycDocument($document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->viewPhoneNumberKycDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_id** | **string**| The Telnyx document id (from &#x60;reusable.options[].details[].documentId&#x60;). | |

### Return type

**\SplFileObject**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
