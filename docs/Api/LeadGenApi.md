# Zernio\LeadGenApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveLeadForm()**](LeadGenApi.md#archiveLeadForm) | **DELETE** /v1/ads/lead-forms/{formId} | Archive a lead form |
| [**createLeadForm()**](LeadGenApi.md#createLeadForm) | **POST** /v1/ads/lead-forms | Create a lead form |
| [**createTestLead()**](LeadGenApi.md#createTestLead) | **POST** /v1/ads/lead-forms/{formId}/test-leads | Create a test lead |
| [**getLeadForm()**](LeadGenApi.md#getLeadForm) | **GET** /v1/ads/lead-forms/{formId} | Get a lead form |
| [**listFormLeads()**](LeadGenApi.md#listFormLeads) | **GET** /v1/ads/lead-forms/{formId}/leads | List leads for a single form |
| [**listLeadForms()**](LeadGenApi.md#listLeadForms) | **GET** /v1/ads/lead-forms | List lead forms |
| [**listLeads()**](LeadGenApi.md#listLeads) | **GET** /v1/ads/leads | List submitted leads |


## `archiveLeadForm()`

```php
archiveLeadForm($form_id, $account_id): \Zernio\Model\ArchiveLeadForm200Response
```

Archive a lead form

Neither platform hard-deletes a form; this archives it (Meta status=ARCHIVED; LinkedIn state=ARCHIVED via PARTIAL_UPDATE).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LeadGenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 'form_id_example'; // string | Numeric form id (Meta leadgen_form id or LinkedIn leadForm id).
$account_id = 'account_id_example'; // string | Connected facebook or linkedin ads account id (selects the platform).

try {
    $result = $apiInstance->archiveLeadForm($form_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadGenApi->archiveLeadForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**| Numeric form id (Meta leadgen_form id or LinkedIn leadForm id). | |
| **account_id** | **string**| Connected facebook or linkedin ads account id (selects the platform). | |

### Return type

[**\Zernio\Model\ArchiveLeadForm200Response**](../Model/ArchiveLeadForm200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLeadForm()`

```php
createLeadForm($create_lead_form_request): \Zernio\Model\CreateLeadForm200Response
```

Create a lead form

Creates a Lead Gen form. The form content goes inside `platformSpecificData` for both platforms (the shape is selected by the accountId's platform). Meta: created on the connected Facebook Page (a facebook account or a metaads business-login account with a selected Page) (POST /{page-id}/leadgen_forms); the old top-level Meta fields (questions, thankYou*, contextCard, …) are DEPRECATED but still accepted while platformSpecificData is absent; mixing both shapes is a 400. LinkedIn: created on the ad account's Company Page. NOT idempotent: a retry creates a second form. Meta prefilled question types (EMAIL, PHONE, FULL_NAME, …) must omit label/key; CUSTOM questions require both. LinkedIn exposes only free-text and multiple-choice questions via API (prefilled-from-profile fields are Campaign Manager UI-only). Requires the Ads add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LeadGenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_lead_form_request = new \Zernio\Model\CreateLeadFormRequest(); // \Zernio\Model\CreateLeadFormRequest

try {
    $result = $apiInstance->createLeadForm($create_lead_form_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadGenApi->createLeadForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_lead_form_request** | [**\Zernio\Model\CreateLeadFormRequest**](../Model/CreateLeadFormRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateLeadForm200Response**](../Model/CreateLeadForm200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTestLead()`

```php
createTestLead($form_id, $create_test_lead_request): \Zernio\Model\CreateTestLead200Response
```

Create a test lead

Submits a test lead against the form (POST /{form-id}/test_leads) to exercise retrieval without waiting for real ad impressions. Meta allows one test lead per form at a time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LeadGenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 'form_id_example'; // string
$create_test_lead_request = new \Zernio\Model\CreateTestLeadRequest(); // \Zernio\Model\CreateTestLeadRequest

try {
    $result = $apiInstance->createTestLead($form_id, $create_test_lead_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadGenApi->createTestLead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**|  | |
| **create_test_lead_request** | [**\Zernio\Model\CreateTestLeadRequest**](../Model/CreateTestLeadRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateTestLead200Response**](../Model/CreateTestLead200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLeadForm()`

```php
getLeadForm($form_id, $account_id): \Zernio\Model\GetLeadForm200Response
```

Get a lead form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LeadGenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 'form_id_example'; // string | Numeric form id (Meta leadgen_form id or LinkedIn leadForm id).
$account_id = 'account_id_example'; // string | Connected facebook or linkedin ads account id (selects the platform).

try {
    $result = $apiInstance->getLeadForm($form_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadGenApi->getLeadForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**| Numeric form id (Meta leadgen_form id or LinkedIn leadForm id). | |
| **account_id** | **string**| Connected facebook or linkedin ads account id (selects the platform). | |

### Return type

[**\Zernio\Model\GetLeadForm200Response**](../Model/GetLeadForm200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFormLeads()`

```php
listFormLeads($form_id, $account_id, $limit, $cursor, $since): \Zernio\Model\ListFormLeads200Response
```

List leads for a single form

Returns leads for one form. Serves persisted leads (ingested via the leadgen webhook) when available, falling back to a live Graph read. Accepts a Facebook account or a metaads business-login account with leads_retrieval access to the form; the latter uses its system-user token without a posting parent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LeadGenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 'form_id_example'; // string
$account_id = 'account_id_example'; // string
$limit = 25; // int
$cursor = 'cursor_example'; // string
$since = 56; // int | Unix seconds.

try {
    $result = $apiInstance->listFormLeads($form_id, $account_id, $limit, $cursor, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadGenApi->listFormLeads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**|  | |
| **account_id** | **string**|  | |
| **limit** | **int**|  | [optional] [default to 25] |
| **cursor** | **string**|  | [optional] |
| **since** | **int**| Unix seconds. | [optional] |

### Return type

[**\Zernio\Model\ListFormLeads200Response**](../Model/ListFormLeads200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLeadForms()`

```php
listLeadForms($account_id, $ad_account_id, $limit, $cursor): \Zernio\Model\ListLeadForms200Response
```

List lead forms

Lists the Lead Gen forms owned by the account. Meta: forms on the connected Facebook Page, including a Page selected on a metaads business-login connection. LinkedIn: forms owned by the ad account's Company Page. Pass `adAccountId` (LinkedIn forms are org-owned). Requires the Ads add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LeadGenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Connected Facebook, Meta ads business-login or LinkedIn ads account ID.
$ad_account_id = 'ad_account_id_example'; // string | LinkedIn only: the LinkedIn ad account id (used to resolve the owning organization). Required for LinkedIn.
$limit = 25; // int
$cursor = 'cursor_example'; // string

try {
    $result = $apiInstance->listLeadForms($account_id, $ad_account_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadGenApi->listLeadForms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected Facebook, Meta ads business-login or LinkedIn ads account ID. | |
| **ad_account_id** | **string**| LinkedIn only: the LinkedIn ad account id (used to resolve the owning organization). Required for LinkedIn. | [optional] |
| **limit** | **int**|  | [optional] [default to 25] |
| **cursor** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\ListLeadForms200Response**](../Model/ListLeadForms200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLeads()`

```php
listLeads($form_id, $account_id, $ad_account_id, $limit, $since, $cursor): \Zernio\Model\ListLeads200Response
```

List submitted leads

Returns submitted Lead Gen leads for your team, newest-first, with keyset pagination on `cursor`. For Meta (default) leads are served from the persisted cache, ingested in real time from the `leadgen` webhook. When `accountId` is a LinkedIn ads account, leads are fetched live from LinkedIn's `leadFormResponses` (LinkedIn has no webhook and enforces 90-day retention, so nothing is persisted) and `adAccountId` is required. Reading LinkedIn responses needs the `r_marketing_leadgen_automation` permission; accounts connected before it was added must reconnect. Requires the Ads add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LeadGenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 'form_id_example'; // string | Filter to a single lead form.
$account_id = 'account_id_example'; // string | Filter to a single connected account. LinkedIn ads accounts switch to the live fetch.
$ad_account_id = 'ad_account_id_example'; // string | LinkedIn only: the LinkedIn ad account id whose responses to read (owner-scoped finder).
$limit = 25; // int
$since = 56; // int | Unix seconds; only leads created at/after this timestamp.
$cursor = 'cursor_example'; // string | Keyset cursor from a previous response's pagination.cursor (Meta: AdLead id; LinkedIn: numeric start offset).

try {
    $result = $apiInstance->listLeads($form_id, $account_id, $ad_account_id, $limit, $since, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadGenApi->listLeads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**| Filter to a single lead form. | [optional] |
| **account_id** | **string**| Filter to a single connected account. LinkedIn ads accounts switch to the live fetch. | [optional] |
| **ad_account_id** | **string**| LinkedIn only: the LinkedIn ad account id whose responses to read (owner-scoped finder). | [optional] |
| **limit** | **int**|  | [optional] [default to 25] |
| **since** | **int**| Unix seconds; only leads created at/after this timestamp. | [optional] |
| **cursor** | **string**| Keyset cursor from a previous response&#39;s pagination.cursor (Meta: AdLead id; LinkedIn: numeric start offset). | [optional] |

### Return type

[**\Zernio\Model\ListLeads200Response**](../Model/ListLeads200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
