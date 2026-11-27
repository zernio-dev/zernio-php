# Zernio\LeadGenApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveLeadForm()**](LeadGenApi.md#archiveLeadForm) | **DELETE** /v1/ads/lead-forms/{formId} | Archive a lead form |
| [**countLeads()**](LeadGenApi.md#countLeads) | **GET** /v1/ads/leads/counts | Count leads by status |
| [**createLead()**](LeadGenApi.md#createLead) | **POST** /v1/leads | Create a lead from your own form |
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
$account_id = 'account_id_example'; // string | Connected Meta ads, facebook, instagram or linkedin ads account id (selects the platform).  - A Meta ads connection resolves its Page through the Facebook account linked to the same profile. - An Instagram account uses the Page its ads run under: its own linked Page, else the Facebook or business-login Meta ads account on the same profile.

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
| **account_id** | **string**| Connected Meta ads, facebook, instagram or linkedin ads account id (selects the platform).  - A Meta ads connection resolves its Page through the Facebook account linked to the same profile. - An Instagram account uses the Page its ads run under: its own linked Page, else the Facebook or business-login Meta ads account on the same profile. | |

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

## `createLead()`

```php
createLead($create_lead_request): \Zernio\Model\CreateLead200Response
```

Create a lead from your own form

Stores a lead from a form on your own site or app, posted by your backend. It joins the leads from ad networks: it is listed on `GET /v1/ads/leads` (`platform: web`), fires `lead.received`, starts lead workflows, and moves through statuses with `PATCH /v1/ads/leads/{id}`.  - **Lead event.** A `Lead` event is stored and sent through the profile's forwarding rules that take the `form_leads` source, like an event sent to `POST /v1/events`. - **Attribution.** Pass the ad click ids from the landing URL in `clickIds` (a raw `fbclid` becomes Meta's `fbc`) and the Zernio tag's visitor id (`_zid` cookie) in `visitorId`. - **Earlier visits.** Zernio adds the click ids it saw on that visitor's, email's or phone's earlier website visits. Qualifying or converting the lead later sends those ids with the stage event. - **Idempotent by `leadId`.** Posting the same `leadId` again returns the stored lead with `created: false` and sends nothing twice. Without `leadId`, every call creates a lead.  A tracked website can capture form leads without any code: turn on lead capture for the site. Requires the Ads add-on.

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
$create_lead_request = {"profileId":"6a0000000000000000000001","email":"ana@example.com","fields":{"full_name":"Ana Garcia","company":"Acme"},"formName":"Demo request","leadId":"crm_4821","sourceUrl":"https://example.com/demo?utm_source=facebook","clickIds":{"fbclid":"IwAR2xyz"}}; // \Zernio\Model\CreateLeadRequest

try {
    $result = $apiInstance->createLead($create_lead_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadGenApi->createLead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_lead_request** | [**\Zernio\Model\CreateLeadRequest**](../Model/CreateLeadRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateLead200Response**](../Model/CreateLead200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLeadForm()`

```php
createLeadForm($create_lead_form_request): \Zernio\Model\CreateLeadForm200Response
```

Create a lead form

Creates a lead form on a Facebook Page or LinkedIn Company Page to collect contact details from ads.  The form content goes inside `platformSpecificData` for both platforms (the shape is selected by the accountId's platform). Requires the Ads add-on.  NOT idempotent: a retry creates a second form.  ### Meta  Created on the connected Facebook Page (POST /{page-id}/leadgen_forms). `accountId` may be:  - the `metaads` ads connection (its Page comes from the Facebook account linked to the same profile) - an Instagram account (the Page its ads run under: its own linked Page, else the Facebook or business-login Meta ads account on the same profile) - the Facebook account itself  The old top-level Meta fields (questions, thankYou*, contextCard, …) are DEPRECATED but still accepted while platformSpecificData is absent. Mixing both shapes is a 400.  thankYouEnableMessenger, isPhoneSmsVerifyEnabled and customDisclaimer are accepted only inside platformSpecificData (top-level is a 400).  Meta prefilled question types (EMAIL, PHONE, FULL_NAME, …) must omit label/key; CUSTOM questions require both.  ### LinkedIn  Created on the ad account's Company Page. LinkedIn exposes only free-text and multiple-choice questions via API (prefilled-from-profile fields are Campaign Manager UI-only).

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

Deletes the test lead on a Meta lead form so you can submit a new one (Meta allows only one at a time).  Removes a test lead created for the form (DELETE /{leadgen_id}). Meta keeps one test lead per form and refuses a second until the first is gone.  - The same test lead appears in Meta's Lead Ads Testing Tool. - Meta only deletes test leads; a real lead is refused.

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
$account_id = 'account_id_example'; // string | Connected Meta ads, facebook, instagram or linkedin ads account id (selects the platform).  - Meta ads connection: resolves its Page through the Facebook account linked to the same profile. - Instagram account: uses the Page its ads run under (its own linked Page, else the Facebook or business-login Meta ads account on the same profile).
$fields = name,thank_you_page{title,body,button_type,website_url}; // string | Meta only. A Graph field selection passed through verbatim to GET /{form-id}, replacing the default projection, so fields Meta adds later are reachable without an API change.  - Field names, commas and {} expansion only. Anything else (Graph field modifiers such as .limit(), or characters that could open another query parameter) is a 400. - Unknown field names are rejected by Meta as a 400. - Ownership of the form is verified before the selection runs, so this cannot reach any Page but the one accountId manages.

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
| **account_id** | **string**| Connected Meta ads, facebook, instagram or linkedin ads account id (selects the platform).  - Meta ads connection: resolves its Page through the Facebook account linked to the same profile. - Instagram account: uses the Page its ads run under (its own linked Page, else the Facebook or business-login Meta ads account on the same profile). | |
| **fields** | **string**| Meta only. A Graph field selection passed through verbatim to GET /{form-id}, replacing the default projection, so fields Meta adds later are reachable without an API change.  - Field names, commas and {} expansion only. Anything else (Graph field modifiers such as .limit(), or characters that could open another query parameter) is a 400. - Unknown field names are rejected by Meta as a 400. - Ownership of the form is verified before the selection runs, so this cannot reach any Page but the one accountId manages. | [optional] |

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

Lists the leads submitted through one Meta lead form.  It serves the leads Zernio stored when the form has at least one stored lead matching `since`, newest stored first. Otherwise it reads them live from Meta. No parameter forces a live read, but a `since` later than every stored lead reads the first page live.  Stored reads are all or nothing per form: once a stored lead matches, a lead the webhook missed appears only after recovery stores it.  ### Accounts  Accepts either of these with leads_retrieval access to the form:  - a Facebook account - a metaads business-login account, which uses its system-user token without a posting parent  ### Freshness  Leads are stored within seconds through Meta's webhook. A recovery pass stores the leads the webhook missed and sends them as `lead.received` too.  Recovered leads usually arrive within 15 minutes for Pages with a lead in the last 7 days, up to 4 hours for Pages with forms but no recent lead, and up to 3 days for a Page's first lead form. Failing Meta reads add up to 24 hours.  Reading this endpoint does not trigger that pass. A live read that finds leads only moves the Page's next pass forward.  No mode guarantees that every lead submitted in the last few minutes is on a page. To close a recovery window, read again from the start after the Page's next pass and deduplicate on `id`.  ### What recovery skips  For a form with no stored lead, recovery reaches back 7 days. It reads only the first 200 forms Meta lists for a Page and skips archived or deleted forms. It stores at most 50 new leads per form per pass, leaving the rest for the next pass.  A form whose missed backlog is too deep to page through is skipped and logged, so recovery is not proof that every lead is stored.  ### meta.lastCheckedAt  For stored leads, it is when the recovery pass last ran for the Page. That includes a pass that failed, and one parked because the account or the Page token is missing, which reads no forms. A pass cut short by the recovery job's time budget is not recorded.  Passes can also skip forms, so the value can be recent while leads are missing, including on an empty page. It is `null` when the account has had no pass.  For live reads, it is when Meta was read. With content retained, that read is cached for 5 minutes. With zero content retention, every read is live and uncached.  ### Paging  Pass `pagination.cursor` back as `cursor` while `hasMore` is true. Pages are not a snapshot: leads stored after the first page, recovered ones included, sort first and appear only when you read from the start again. Deduplicate on `id`.  Stored pages walk Zernio's own ids, so a resumed cursor neither skips nor repeats leads that were stored when the walk started. `since` filters on Meta's created time.  Live pages follow Meta's cursor and each page is cached separately for up to 5 minutes, so one walk can mix moments.  A live cursor stays live even once leads are stored. A stored cursor does not survive a switch to zero content retention mid-walk: start again from the first page.  ### Zero content retention  Every page is read live from Meta, uncached, and nothing is stored. Completeness is what Meta returns. As on every live page, leads come without `leadId` and `status`, `createdTime` is Meta's and `lastCheckedAt` is the time of that read.  The 48-hour sweep in the leads docs is about `lead.received` webhook delivery, not this endpoint.  ### Limits  `limit` is 1 to 100 (default 25). The plan's per-minute API rate limit applies, and live reads also count against Meta's own limits.  The route needs the Ads add-on and has no per-request charge. Zernio does not expire stored leads on a schedule; live reads return what Meta still holds.

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
$cursor = 'cursor_example'; // string | The pagination.cursor of the previous page.
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
| **cursor** | **string**| The pagination.cursor of the previous page. | [optional] |
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
$account_id = 'account_id_example'; // string | Connected Meta ads, Facebook, Instagram or LinkedIn ads account ID.  - Meta ads connection: resolves its Page through the Facebook account linked to the same profile. - Instagram account: uses the Page its ads run under (its own linked Page, else the Facebook or business-login Meta ads account on the same profile).
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
| **account_id** | **string**| Connected Meta ads, Facebook, Instagram or LinkedIn ads account ID.  - Meta ads connection: resolves its Page through the Facebook account linked to the same profile. - Instagram account: uses the Page its ads run under (its own linked Page, else the Facebook or business-login Meta ads account on the same profile). | |
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

Lists the leads submitted through your Meta, Google or LinkedIn lead forms, newest first.  Returns submitted Lead Gen leads for your team, newest-first, with keyset pagination on `cursor`. Requires the Ads add-on.  ### Meta (default)  Leads are served from the persisted cache, ingested in real time from the `leadgen` webhook.  ### Google  Google lead form submissions are stored like Meta leads and listed with them, usually within 15 minutes of the submission.  - Each lead says its network in `platform` (`meta`, `google`, `linkedin`), and `platform=google` lists only Google leads. - `leadgenId` is the submission id and `formId` the lead form asset id. - Answers are keyed like Meta's (`email`, `phone_number`, `full_name`), custom questions by their text. - Statuses work as for Meta leads.  ### LinkedIn  LinkedIn lead form responses are also stored and listed with the other networks (`platform: linkedin`), usually within 15 minutes, once they reach Zernio. So are TikTok Instant Form leads (`platform: tiktok`), as TikTok sends them.  When `accountId` is a LinkedIn ads account, `adAccountId` is required. Leads are fetched live from LinkedIn's `leadFormResponses`: LinkedIn has no webhook and enforces 90-day retention, so nothing is persisted.  Reading LinkedIn responses needs the `r_marketing_leadgen_automation` permission. Accounts connected before it was added must reconnect.

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
$platform = 'platform_example'; // string | Only leads of this network.  - `web`: your own website and API forms. - `meta` and `google` list stored leads of that network (no LinkedIn live fetch). - `linkedin` requires accountId to be a LinkedIn ads connection (400 otherwise).  Without it, every stored network is listed, and an accountId that is a LinkedIn ads connection switches to the live fetch.
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
| **platform** | **string**| Only leads of this network.  - &#x60;web&#x60;: your own website and API forms. - &#x60;meta&#x60; and &#x60;google&#x60; list stored leads of that network (no LinkedIn live fetch). - &#x60;linkedin&#x60; requires accountId to be a LinkedIn ads connection (400 otherwise).  Without it, every stored network is listed, and an accountId that is a LinkedIn ads connection switches to the live fetch. | [optional] |
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

Sets the status of a lead (and optionally its value) so you can track it from lead to sale.  Moving a lead to `qualified` stores a `QualifiedLead` event, and to `converted` a `Purchase` with the lead's value. Moving away from a stage retracts its event.  Each stage event is also sent to the ad platforms, but only through the forwarding rules that list that event name in `eventNames`. A rule taking every event name never gets them, so a won lead is never counted as a second sale next to your store's or Stripe's own.  Meta leads are matched by their lead id. Website and API form leads (`platform: web`) are matched by the email, phone and ad click ids they arrived with, and are sent under the `form_leads` source.  `{id}` is the Zernio lead id (`id` on `GET /v1/ads/leads`, `leadId` on `GET /v1/ads/lead-forms/{formId}/leads`) or the Meta `leadgenId` together with `accountId` in the body. Requires the Ads add-on.

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
