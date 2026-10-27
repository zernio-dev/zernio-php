# Zernio\LeadGenApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveLeadForm()**](LeadGenApi.md#archiveLeadForm) | **DELETE** /v1/ads/lead-forms/{formId} | Archive a lead form |
| [**countLeads()**](LeadGenApi.md#countLeads) | **GET** /v1/ads/leads/counts | Count leads by status |
| [**createLeadForm()**](LeadGenApi.md#createLeadForm) | **POST** /v1/ads/lead-forms | Create a lead form |
| [**createTestLead()**](LeadGenApi.md#createTestLead) | **POST** /v1/ads/lead-forms/{formId}/test-leads | Create a test lead |
| [**deleteTestLead()**](LeadGenApi.md#deleteTestLead) | **DELETE** /v1/ads/lead-forms/{formId}/test-leads | Delete a test lead |
| [**getLeadForm()**](LeadGenApi.md#getLeadForm) | **GET** /v1/ads/lead-forms/{formId} | Get a lead form |
| [**listFormLeads()**](LeadGenApi.md#listFormLeads) | **GET** /v1/ads/lead-forms/{formId}/leads | List leads for a single form |
| [**listLeadForms()**](LeadGenApi.md#listLeadForms) | **GET** /v1/ads/lead-forms | List lead forms |
| [**listLeads()**](LeadGenApi.md#listLeads) | **GET** /v1/ads/leads | List submitted leads |
| [**updateLead()**](LeadGenApi.md#updateLead) | **PATCH** /v1/ads/leads/{id} | Update a lead&#39;s status |


## `archiveLeadForm()`

```php
archiveLeadForm($form_id, $account_id): \Zernio\Model\ArchiveLeadForm200Response
```

Archive a lead form

Archives a lead form so it can no longer be used (neither Meta nor LinkedIn allows deleting one).  Neither platform hard-deletes a form; this archives it (Meta status=ARCHIVED; LinkedIn state=ARCHIVED via PARTIAL_UPDATE). Meta forms must belong to the Page the accountId manages.

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
$account_id = 'account_id_example'; // string | Connected Meta ads, facebook, instagram or linkedin ads account id (selects the platform). A Meta ads connection resolves its Page through the Facebook account linked to the same profile; an Instagram account uses the Page its ads run under (its own linked Page, else the Facebook or business-login Meta ads account on the same profile).

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
| **account_id** | **string**| Connected Meta ads, facebook, instagram or linkedin ads account id (selects the platform). A Meta ads connection resolves its Page through the Facebook account linked to the same profile; an Instagram account uses the Page its ads run under (its own linked Page, else the Facebook or business-login Meta ads account on the same profile). | |

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

## `countLeads()`

```php
countLeads($account_id, $campaign_id): \Zernio\Model\CountLeads200Response
```

Count leads by status

Counts your team's stored Meta leads per status, for a status filter or a \"new leads\" badge.  Every status is present, with 0 when no lead has it. Requires the Ads add-on.

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
$account_id = 'account_id_example'; // string | Count one connected account only.
$campaign_id = 'campaign_id_example'; // string | The platform campaign id the leads came from.

try {
    $result = $apiInstance->countLeads($account_id, $campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadGenApi->countLeads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Count one connected account only. | [optional] |
| **campaign_id** | **string**| The platform campaign id the leads came from. | [optional] |

### Return type

[**\Zernio\Model\CountLeads200Response**](../Model/CountLeads200Response.md)

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

Creates a lead form on a Facebook Page or LinkedIn Company Page to collect contact details from ads.  The form content goes inside `platformSpecificData` for both platforms (the shape is selected by the accountId's platform). Meta: created on the connected Facebook Page (POST /{page-id}/leadgen_forms), where `accountId` may be the `metaads` ads connection (its Page comes from the Facebook account linked to the same profile), an Instagram account (the Page its ads run under: its own linked Page, else the Facebook or business-login Meta ads account on the same profile) or the Facebook account itself; the old top-level Meta fields (questions, thankYou*, contextCard, …) are DEPRECATED but still accepted while platformSpecificData is absent; mixing both shapes is a 400. thankYouEnableMessenger, isPhoneSmsVerifyEnabled and customDisclaimer are accepted only inside platformSpecificData (top-level is a 400). LinkedIn: created on the ad account's Company Page. NOT idempotent: a retry creates a second form. Meta prefilled question types (EMAIL, PHONE, FULL_NAME, …) must omit label/key; CUSTOM questions require both. LinkedIn exposes only free-text and multiple-choice questions via API (prefilled-from-profile fields are Campaign Manager UI-only). Requires the Ads add-on.

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

Submits a test lead to a Meta lead form so you can check your lead retrieval without running ads.  Submits a test lead against the form (POST /{form-id}/test_leads) to exercise retrieval without waiting for real ad impressions. Meta allows one test lead per form at a time.

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

## `deleteTestLead()`

```php
deleteTestLead($form_id, $account_id, $lead_id): \Zernio\Model\DeleteTestLead200Response
```

Delete a test lead

Deletes the test lead on a Meta lead form so you can submit a new one (Meta allows only one at a time).  Removes a test lead created for the form (DELETE /{leadgen_id}), so a new one can be submitted: Meta keeps one test lead per form and refuses a second until the first is gone. The same test lead appears in Meta's Lead Ads Testing Tool. Meta only deletes test leads; a real lead is refused.

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
$account_id = 'account_id_example'; // string | The facebook or metaads account whose Page owns the form.
$lead_id = 'lead_id_example'; // string | The test lead id returned by createTestLead (or shown in the Testing Tool). Omitted = the test lead currently on the form.

try {
    $result = $apiInstance->deleteTestLead($form_id, $account_id, $lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadGenApi->deleteTestLead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**|  | |
| **account_id** | **string**| The facebook or metaads account whose Page owns the form. | |
| **lead_id** | **string**| The test lead id returned by createTestLead (or shown in the Testing Tool). Omitted &#x3D; the test lead currently on the form. | [optional] |

### Return type

[**\Zernio\Model\DeleteTestLead200Response**](../Model/DeleteTestLead200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLeadForm()`

```php
getLeadForm($form_id, $account_id, $fields): \Zernio\Model\GetLeadForm200Response
```

Get a lead form

Shows a lead form in full, including its questions and thank-you page.  Returns the full form, including the thank-you page, so a form can be diffed against what was created. Meta forms are scoped to the Page the accountId manages: a form on any other Page is a 404, never a read.

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
$account_id = 'account_id_example'; // string | Connected Meta ads, facebook, instagram or linkedin ads account id (selects the platform). A Meta ads connection resolves its Page through the Facebook account linked to the same profile; an Instagram account uses the Page its ads run under (its own linked Page, else the Facebook or business-login Meta ads account on the same profile).
$fields = name,thank_you_page{title,body,button_type,website_url}; // string | Meta only. A Graph field selection passed through verbatim to GET /{form-id}, replacing the default projection, so fields Meta adds later are reachable without an API change. Field names, commas and {} expansion only; anything else (Graph field modifiers such as .limit(), or characters that could open another query parameter) is a 400. Ownership of the form is verified before the selection runs, so this cannot reach any Page but the one accountId manages. Unknown field names are rejected by Meta as a 400.

try {
    $result = $apiInstance->getLeadForm($form_id, $account_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadGenApi->getLeadForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**| Numeric form id (Meta leadgen_form id or LinkedIn leadForm id). | |
| **account_id** | **string**| Connected Meta ads, facebook, instagram or linkedin ads account id (selects the platform). A Meta ads connection resolves its Page through the Facebook account linked to the same profile; an Instagram account uses the Page its ads run under (its own linked Page, else the Facebook or business-login Meta ads account on the same profile). | |
| **fields** | **string**| Meta only. A Graph field selection passed through verbatim to GET /{form-id}, replacing the default projection, so fields Meta adds later are reachable without an API change. Field names, commas and {} expansion only; anything else (Graph field modifiers such as .limit(), or characters that could open another query parameter) is a 400. Ownership of the form is verified before the selection runs, so this cannot reach any Page but the one accountId manages. Unknown field names are rejected by Meta as a 400. | [optional] |

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

Lists the leads submitted through one Meta lead form.  Serves persisted leads (ingested via the leadgen webhook) when available, falling back to a live Graph read. Accepts a Facebook account or a metaads business-login account with leads_retrieval access to the form; the latter uses its system-user token without a posting parent.  Persisted leads arrive in real time through Meta's webhook, and a background pass re-reads every Page from Meta to catch the leads the webhook misses: every 15 minutes for Pages that received a lead in the last 7 days. `meta.lastCheckedAt` says when that pass last ran, so polling this endpoint faster than that returns nothing new; subscribe to the `lead.received` webhook instead. The live Graph read is cached for 5 minutes, and `meta.lastCheckedAt` is when it was read.

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

Lists the lead forms on a Facebook Page or LinkedIn Company Page.  Meta: forms on the connected Facebook Page. Pass either the `metaads` ads connection (the Page is taken from the Facebook account linked to it) or the Facebook account itself. LinkedIn: forms owned by the ad account's Company Page. Pass `adAccountId` (LinkedIn forms are org-owned). Requires the Ads add-on.

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
$account_id = 'account_id_example'; // string | Connected Meta ads, Facebook, Instagram or LinkedIn ads account ID. A Meta ads connection resolves its Page through the Facebook account linked to the same profile; an Instagram account uses the Page its ads run under (its own linked Page, else the Facebook or business-login Meta ads account on the same profile).
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
| **account_id** | **string**| Connected Meta ads, Facebook, Instagram or LinkedIn ads account ID. A Meta ads connection resolves its Page through the Facebook account linked to the same profile; an Instagram account uses the Page its ads run under (its own linked Page, else the Facebook or business-login Meta ads account on the same profile). | |
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
listLeads($form_id, $account_id, $account_ids, $status, $campaign_id, $platform, $q, $ad_account_id, $limit, $since, $cursor): \Zernio\Model\ListLeads200Response
```

List submitted leads

Lists the leads submitted through your Meta or LinkedIn lead forms, newest first.  Returns submitted Lead Gen leads for your team, newest-first, with keyset pagination on `cursor`. For Meta (default) leads are served from the persisted cache, ingested in real time from the `leadgen` webhook. When `accountId` is a LinkedIn ads account, leads are fetched live from LinkedIn's `leadFormResponses` (LinkedIn has no webhook and enforces 90-day retention, so nothing is persisted) and `adAccountId` is required. Reading LinkedIn responses needs the `r_marketing_leadgen_automation` permission; accounts connected before it was added must reconnect. Requires the Ads add-on.

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
$account_ids = 'account_ids_example'; // string | Meta only. Comma-separated connected account ids, to list several accounts at once. Without accountId or accountIds every account of the team is listed.
$status = new,contacted; // string | Meta only. Comma-separated lead statuses: new, contacted, unreachable, qualified, converted, disqualified.
$campaign_id = 'campaign_id_example'; // string | Meta only. The platform campaign id the lead came from.
$platform = 'platform_example'; // string | meta skips the LinkedIn live fetch; linkedin requires accountId to be a LinkedIn ads connection (400 otherwise).
$q = 'q_example'; // string | Meta only. Case-insensitive text search over the lead's answers and the form name.
$ad_account_id = 'ad_account_id_example'; // string | LinkedIn only: the LinkedIn ad account id whose responses to read (owner-scoped finder).
$limit = 25; // int
$since = 1757404800; // int | Unix seconds; only leads created at/after this timestamp. Millisecond timestamps return 400 with instructions to divide by 1000.
$cursor = 'cursor_example'; // string | Keyset cursor from a previous response's pagination.cursor (Meta: AdLead id; LinkedIn: numeric start offset).

try {
    $result = $apiInstance->listLeads($form_id, $account_id, $account_ids, $status, $campaign_id, $platform, $q, $ad_account_id, $limit, $since, $cursor);
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
| **account_ids** | **string**| Meta only. Comma-separated connected account ids, to list several accounts at once. Without accountId or accountIds every account of the team is listed. | [optional] |
| **status** | **string**| Meta only. Comma-separated lead statuses: new, contacted, unreachable, qualified, converted, disqualified. | [optional] |
| **campaign_id** | **string**| Meta only. The platform campaign id the lead came from. | [optional] |
| **platform** | **string**| meta skips the LinkedIn live fetch; linkedin requires accountId to be a LinkedIn ads connection (400 otherwise). | [optional] |
| **q** | **string**| Meta only. Case-insensitive text search over the lead&#39;s answers and the form name. | [optional] |
| **ad_account_id** | **string**| LinkedIn only: the LinkedIn ad account id whose responses to read (owner-scoped finder). | [optional] |
| **limit** | **int**|  | [optional] [default to 25] |
| **since** | **int**| Unix seconds; only leads created at/after this timestamp. Millisecond timestamps return 400 with instructions to divide by 1000. | [optional] |
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

## `updateLead()`

```php
updateLead($id, $update_lead_request): \Zernio\Model\UpdateLead200Response
```

Update a lead's status

Sets the status of a Meta lead (and optionally its value) so you can track it from lead to sale.  `{id}` is the Zernio lead id (`id` on `GET /v1/ads/leads`, `leadId` on `GET /v1/ads/lead-forms/{formId}/leads`) or the Meta `leadgenId` together with `accountId` in the body. Requires the Ads add-on.

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
$id = 'id_example'; // string | Zernio lead id, or the Meta leadgenId (then accountId is required).
$update_lead_request = new \Zernio\Model\UpdateLeadRequest(); // \Zernio\Model\UpdateLeadRequest

try {
    $result = $apiInstance->updateLead($id, $update_lead_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadGenApi->updateLead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Zernio lead id, or the Meta leadgenId (then accountId is required). | |
| **update_lead_request** | [**\Zernio\Model\UpdateLeadRequest**](../Model/UpdateLeadRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateLead200Response**](../Model/UpdateLead200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
