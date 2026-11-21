# Zernio\CRMApi

One API over the connected CRM: search, read, create and update people, log activities, list and update deals, and list owners. The same requests and objects work for HubSpot and Salesforce; each operation lists its platforms in &#x60;x-platforms&#x60;.  Pick the CRM with &#x60;accountId&#x60;, the connected HubSpot or Salesforce account. Every operation belongs to the &#x60;contacts&#x60; resource group.  **Conventions:**  - Objects carry &#x60;id&#x60; (the CRM&#39;s own), &#x60;objectType&#x60; (&#x60;contact&#x60;, &#x60;lead&#x60;, &#x60;deal&#x60;, &#x60;opportunity&#x60;), the unified fields, &#x60;url&#x60; (opens the record in the CRM) and &#x60;properties&#x60; (the native fields you ask for with &#x60;properties&#x3D;&#x60;). &#x60;includeRaw&#x3D;true&#x60; adds the CRM&#39;s own record as &#x60;raw&#x60;. - Writes take unified fields plus up to 50 native fields in &#x60;properties&#x60;. &#x60;null&#x60; clears a field. - Lists return &#x60;{ &lt;resource&gt;, nextCursor }&#x60; with an opaque cursor. - Refusals keep the CRM&#39;s own errors in &#x60;details.errors&#x60;: 422 &#x60;crm_validation_failed&#x60;, 409 &#x60;crm_duplicate_record&#x60;, 404 &#x60;crm_record_not_found&#x60;, 403 &#x60;crm_access_denied&#x60;. A scope the connection did not grant answers 403 &#x60;crm_scope_missing&#x60;: reconnect the CRM and approve it. - Calls share each connection&#39;s API budget with the conversation sync: 429 &#x60;rate_limited&#x60; carries &#x60;Retry-After&#x60;.  Nothing is stored in Zernio: every call reads or writes the CRM.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCrmActivity()**](CRMApi.md#createCrmActivity) | **POST** /v1/crm/{accountId}/contacts/{contactId}/activities | Log a CRM activity |
| [**createCrmContact()**](CRMApi.md#createCrmContact) | **POST** /v1/crm/{accountId}/contacts | Create a CRM contact |
| [**getCrmContact()**](CRMApi.md#getCrmContact) | **GET** /v1/crm/{accountId}/contacts/{contactId} | Get a CRM contact |
| [**getCrmDeal()**](CRMApi.md#getCrmDeal) | **GET** /v1/crm/{accountId}/deals/{dealId} | Get a CRM deal |
| [**listCrmDeals()**](CRMApi.md#listCrmDeals) | **GET** /v1/crm/{accountId}/deals | List CRM deals |
| [**listCrmOwners()**](CRMApi.md#listCrmOwners) | **GET** /v1/crm/{accountId}/owners | List CRM owners |
| [**searchCrmContacts()**](CRMApi.md#searchCrmContacts) | **GET** /v1/crm/{accountId}/contacts/search | Search CRM contacts |
| [**updateCrmContact()**](CRMApi.md#updateCrmContact) | **PATCH** /v1/crm/{accountId}/contacts/{contactId} | Update a CRM contact |
| [**updateCrmDeal()**](CRMApi.md#updateCrmDeal) | **PATCH** /v1/crm/{accountId}/deals/{dealId} | Update a CRM deal |


## `createCrmActivity()`

```php
createCrmActivity($account_id, $contact_id, $create_crm_activity_request): \Zernio\Model\CreateCrmActivity201Response
```

Log a CRM activity

Log something that happened with a person on their CRM record.  - HubSpot: a Communication on the contact's timeline for `channel` `whatsapp` or `sms`, otherwise a Note. The subject and direction lead the text. - Salesforce: a completed Task on the Contact or Lead (`WhoId`), dated `occurredAt`, with `body` as its comments. `channel: call` logs a call. - HighLevel: a plain-text note on the contact. HighLevel dates a note when it is logged, so the subject (or channel), direction and `occurredAt` lead its text.  To log inbox conversations automatically instead, turn on `logMessages` in the CRM settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The connected HubSpot, Salesforce or HighLevel account (`GET /v1/accounts?platform=hubspot`, `salesforce` or `gohighlevel`).
$contact_id = 'contact_id_example'; // string | The CRM's own id. HubSpot contact id, Salesforce Contact (`003...`) or Lead (`00Q...`) id, or HighLevel contact id.
$create_crm_activity_request = {"body":"Asked for the premium plan price. Sent the brochure.","channel":"whatsapp","direction":"inbound","occurredAt":"2026-11-17T09:30:00Z"}; // \Zernio\Model\CreateCrmActivityRequest

try {
    $result = $apiInstance->createCrmActivity($account_id, $contact_id, $create_crm_activity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->createCrmActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected HubSpot, Salesforce or HighLevel account (&#x60;GET /v1/accounts?platform&#x3D;hubspot&#x60;, &#x60;salesforce&#x60; or &#x60;gohighlevel&#x60;). | |
| **contact_id** | **string**| The CRM&#39;s own id. HubSpot contact id, Salesforce Contact (&#x60;003...&#x60;) or Lead (&#x60;00Q...&#x60;) id, or HighLevel contact id. | |
| **create_crm_activity_request** | [**\Zernio\Model\CreateCrmActivityRequest**](../Model/CreateCrmActivityRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCrmActivity201Response**](../Model/CreateCrmActivity201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCrmContact()`

```php
createCrmContact($account_id, $create_crm_contact_request): \Zernio\Model\CreateCrmContact201Response
```

Create a CRM contact

Create a person in the connected CRM. HubSpot creates a contact. Salesforce creates a Lead or a Contact: `createAs`, else the connection's `createAs` setting (default `lead`).  Salesforce requires `lastName` on both, and `company` on a Lead (`[not provided]` when you send none). A Contact takes its company from its Account: set `properties.AccountId` instead.  HighLevel creates a contact in the connected location. A location that does not allow duplicates answers 409 with the existing contact.  Anything the CRM refuses (a required field, a validation rule, a duplicate rule) comes back as 422 or 409 with the CRM's own errors in `details.errors`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The connected HubSpot, Salesforce or HighLevel account (`GET /v1/accounts?platform=hubspot`, `salesforce` or `gohighlevel`).
$create_crm_contact_request = {"firstName":"Maria","lastName":"Garcia","email":"maria@example.com","phone":"+34600123456","createAs":"lead","properties":{"LeadSource":"WhatsApp"}}; // \Zernio\Model\CreateCrmContactRequest

try {
    $result = $apiInstance->createCrmContact($account_id, $create_crm_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->createCrmContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected HubSpot, Salesforce or HighLevel account (&#x60;GET /v1/accounts?platform&#x3D;hubspot&#x60;, &#x60;salesforce&#x60; or &#x60;gohighlevel&#x60;). | |
| **create_crm_contact_request** | [**\Zernio\Model\CreateCrmContactRequest**](../Model/CreateCrmContactRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCrmContact201Response**](../Model/CreateCrmContact201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCrmContact()`

```php
getCrmContact($account_id, $contact_id, $properties, $include_raw): \Zernio\Model\CreateCrmContact201Response
```

Get a CRM contact

Read one person from the connected CRM. On Salesforce the id can be a Contact (`003...`) or a Lead (`00Q...`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The connected HubSpot, Salesforce or HighLevel account (`GET /v1/accounts?platform=hubspot`, `salesforce` or `gohighlevel`).
$contact_id = 'contact_id_example'; // string | The CRM's own id. HubSpot contact id, Salesforce Contact (`003...`) or Lead (`00Q...`) id, or HighLevel contact id.
$properties = 'properties_example'; // string | Comma-separated native field names to return in `properties` (at most 50), for example `lifecyclestage,hs_lead_status` or `LeadSource,Industry__c`. On HighLevel, a field of the record (`source`, `status`), or a custom field by id or key.
$include_raw = false; // bool | Also return the CRM's own record as `raw`.

try {
    $result = $apiInstance->getCrmContact($account_id, $contact_id, $properties, $include_raw);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->getCrmContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected HubSpot, Salesforce or HighLevel account (&#x60;GET /v1/accounts?platform&#x3D;hubspot&#x60;, &#x60;salesforce&#x60; or &#x60;gohighlevel&#x60;). | |
| **contact_id** | **string**| The CRM&#39;s own id. HubSpot contact id, Salesforce Contact (&#x60;003...&#x60;) or Lead (&#x60;00Q...&#x60;) id, or HighLevel contact id. | |
| **properties** | **string**| Comma-separated native field names to return in &#x60;properties&#x60; (at most 50), for example &#x60;lifecyclestage,hs_lead_status&#x60; or &#x60;LeadSource,Industry__c&#x60;. On HighLevel, a field of the record (&#x60;source&#x60;, &#x60;status&#x60;), or a custom field by id or key. | [optional] |
| **include_raw** | **bool**| Also return the CRM&#39;s own record as &#x60;raw&#x60;. | [optional] [default to false] |

### Return type

[**\Zernio\Model\CreateCrmContact201Response**](../Model/CreateCrmContact201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCrmDeal()`

```php
getCrmDeal($account_id, $deal_id, $properties, $include_raw): \Zernio\Model\GetCrmDeal200Response
```

Get a CRM deal

Read one deal (HubSpot), Opportunity (Salesforce) or opportunity (HighLevel) with its contacts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The connected HubSpot, Salesforce or HighLevel account (`GET /v1/accounts?platform=hubspot`, `salesforce` or `gohighlevel`).
$deal_id = 'deal_id_example'; // string | HubSpot deal id, Salesforce Opportunity id (`006...`) or HighLevel opportunity id.
$properties = 'properties_example'; // string | Comma-separated native field names to return in `properties` (at most 50), for example `lifecyclestage,hs_lead_status` or `LeadSource,Industry__c`. On HighLevel, a field of the record (`source`, `status`), or a custom field by id or key.
$include_raw = false; // bool | Also return the CRM's own record as `raw`.

try {
    $result = $apiInstance->getCrmDeal($account_id, $deal_id, $properties, $include_raw);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->getCrmDeal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected HubSpot, Salesforce or HighLevel account (&#x60;GET /v1/accounts?platform&#x3D;hubspot&#x60;, &#x60;salesforce&#x60; or &#x60;gohighlevel&#x60;). | |
| **deal_id** | **string**| HubSpot deal id, Salesforce Opportunity id (&#x60;006...&#x60;) or HighLevel opportunity id. | |
| **properties** | **string**| Comma-separated native field names to return in &#x60;properties&#x60; (at most 50), for example &#x60;lifecyclestage,hs_lead_status&#x60; or &#x60;LeadSource,Industry__c&#x60;. On HighLevel, a field of the record (&#x60;source&#x60;, &#x60;status&#x60;), or a custom field by id or key. | [optional] |
| **include_raw** | **bool**| Also return the CRM&#39;s own record as &#x60;raw&#x60;. | [optional] [default to false] |

### Return type

[**\Zernio\Model\GetCrmDeal200Response**](../Model/GetCrmDeal200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCrmDeals()`

```php
listCrmDeals($account_id, $stage, $updated_since, $properties, $include_raw, $limit, $cursor): \Zernio\Model\ListCrmDeals200Response
```

List CRM deals

List deals (HubSpot) or Opportunities (Salesforce), most recently changed first, or a HighLevel location's opportunities in HighLevel's own order.  HubSpot needs the portal to have granted `crm.objects.deals.read`; otherwise 403 `crm_scope_missing`. HighLevel cannot filter by update time: `updatedSince` answers 400 there.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The connected HubSpot, Salesforce or HighLevel account (`GET /v1/accounts?platform=hubspot`, `salesforce` or `gohighlevel`).
$stage = 'stage_example'; // string | Only deals in this stage. HubSpot takes the stage's internal id (`closedwon`, `appointmentscheduled`); Salesforce the `StageName` (`Closed Won`); HighLevel the pipeline stage id.
$updated_since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only deals changed at or after this time. HubSpot and Salesforce only.
$properties = 'properties_example'; // string | Comma-separated native field names to return in `properties` (at most 50), for example `lifecyclestage,hs_lead_status` or `LeadSource,Industry__c`. On HighLevel, a field of the record (`source`, `status`), or a custom field by id or key.
$include_raw = false; // bool | Also return the CRM's own record as `raw`.
$limit = 25; // int
$cursor = 'cursor_example'; // string | The `nextCursor` of the previous page, unchanged.

try {
    $result = $apiInstance->listCrmDeals($account_id, $stage, $updated_since, $properties, $include_raw, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->listCrmDeals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected HubSpot, Salesforce or HighLevel account (&#x60;GET /v1/accounts?platform&#x3D;hubspot&#x60;, &#x60;salesforce&#x60; or &#x60;gohighlevel&#x60;). | |
| **stage** | **string**| Only deals in this stage. HubSpot takes the stage&#39;s internal id (&#x60;closedwon&#x60;, &#x60;appointmentscheduled&#x60;); Salesforce the &#x60;StageName&#x60; (&#x60;Closed Won&#x60;); HighLevel the pipeline stage id. | [optional] |
| **updated_since** | **\DateTime**| Only deals changed at or after this time. HubSpot and Salesforce only. | [optional] |
| **properties** | **string**| Comma-separated native field names to return in &#x60;properties&#x60; (at most 50), for example &#x60;lifecyclestage,hs_lead_status&#x60; or &#x60;LeadSource,Industry__c&#x60;. On HighLevel, a field of the record (&#x60;source&#x60;, &#x60;status&#x60;), or a custom field by id or key. | [optional] |
| **include_raw** | **bool**| Also return the CRM&#39;s own record as &#x60;raw&#x60;. | [optional] [default to false] |
| **limit** | **int**|  | [optional] [default to 25] |
| **cursor** | **string**| The &#x60;nextCursor&#x60; of the previous page, unchanged. | [optional] |

### Return type

[**\Zernio\Model\ListCrmDeals200Response**](../Model/ListCrmDeals200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCrmOwners()`

```php
listCrmOwners($account_id, $include_raw, $limit, $cursor): \Zernio\Model\ListCrmOwners200Response
```

List CRM owners

List the users records can be assigned to: HubSpot owners, active standard Salesforce users, or the HighLevel location's users. Use an `id` as `ownerId` on contacts and deals.  HubSpot needs `crm.objects.owners.read`, an optional scope portals approve when they connect; without it, 403 `crm_scope_missing` asks to reconnect HubSpot. HighLevel needs `users.readonly`: a location installed before Zernio asked for it answers 403 `crm_scope_missing` until it reconnects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The connected HubSpot, Salesforce or HighLevel account (`GET /v1/accounts?platform=hubspot`, `salesforce` or `gohighlevel`).
$include_raw = false; // bool | Also return the CRM's own record as `raw`.
$limit = 25; // int
$cursor = 'cursor_example'; // string | The `nextCursor` of the previous page, unchanged.

try {
    $result = $apiInstance->listCrmOwners($account_id, $include_raw, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->listCrmOwners: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected HubSpot, Salesforce or HighLevel account (&#x60;GET /v1/accounts?platform&#x3D;hubspot&#x60;, &#x60;salesforce&#x60; or &#x60;gohighlevel&#x60;). | |
| **include_raw** | **bool**| Also return the CRM&#39;s own record as &#x60;raw&#x60;. | [optional] [default to false] |
| **limit** | **int**|  | [optional] [default to 25] |
| **cursor** | **string**| The &#x60;nextCursor&#x60; of the previous page, unchanged. | [optional] |

### Return type

[**\Zernio\Model\ListCrmOwners200Response**](../Model/ListCrmOwners200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchCrmContacts()`

```php
searchCrmContacts($account_id, $q, $email, $phone, $properties, $include_raw, $limit, $cursor): \Zernio\Model\SearchCrmContacts200Response
```

Search CRM contacts

Find people in the connected CRM by free text, email or phone. Send exactly one of `q`, `email` or `phone`.  HubSpot searches contacts. Salesforce searches Contacts and Leads that are not converted (`objectType` tells which), newest change first. HighLevel searches the location's contacts.  - `email` is an exact match. - `phone` takes an international number and matches it however the CRM stored it (\"+44 7911 123456\", \"07911 123456\"). - `q` searches names, emails, phones and company. On Salesforce, `q` and `phone` use the search index, so a record saved in the last few minutes may not show yet; `email` never lags. - On HighLevel, `email` and `phone` use the location's duplicate check: at most one contact, with no next page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The connected HubSpot, Salesforce or HighLevel account (`GET /v1/accounts?platform=hubspot`, `salesforce` or `gohighlevel`).
$q = 'q_example'; // string | Free text, at least 2 characters.
$email = 'email_example'; // string
$phone = 'phone_example'; // string | International number with its country code, for example `+14155550100`.
$properties = 'properties_example'; // string | Comma-separated native field names to return in `properties` (at most 50), for example `lifecyclestage,hs_lead_status` or `LeadSource,Industry__c`. On HighLevel, a field of the record (`source`, `status`), or a custom field by id or key.
$include_raw = false; // bool | Also return the CRM's own record as `raw`.
$limit = 25; // int
$cursor = 'cursor_example'; // string | The `nextCursor` of the previous page, unchanged.

try {
    $result = $apiInstance->searchCrmContacts($account_id, $q, $email, $phone, $properties, $include_raw, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->searchCrmContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected HubSpot, Salesforce or HighLevel account (&#x60;GET /v1/accounts?platform&#x3D;hubspot&#x60;, &#x60;salesforce&#x60; or &#x60;gohighlevel&#x60;). | |
| **q** | **string**| Free text, at least 2 characters. | [optional] |
| **email** | **string**|  | [optional] |
| **phone** | **string**| International number with its country code, for example &#x60;+14155550100&#x60;. | [optional] |
| **properties** | **string**| Comma-separated native field names to return in &#x60;properties&#x60; (at most 50), for example &#x60;lifecyclestage,hs_lead_status&#x60; or &#x60;LeadSource,Industry__c&#x60;. On HighLevel, a field of the record (&#x60;source&#x60;, &#x60;status&#x60;), or a custom field by id or key. | [optional] |
| **include_raw** | **bool**| Also return the CRM&#39;s own record as &#x60;raw&#x60;. | [optional] [default to false] |
| **limit** | **int**|  | [optional] [default to 25] |
| **cursor** | **string**| The &#x60;nextCursor&#x60; of the previous page, unchanged. | [optional] |

### Return type

[**\Zernio\Model\SearchCrmContacts200Response**](../Model/SearchCrmContacts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCrmContact()`

```php
updateCrmContact($account_id, $contact_id, $crm_contact_input): \Zernio\Model\CreateCrmContact201Response
```

Update a CRM contact

Change fields on a person in the connected CRM. Send only what changes; `null` clears a field. Native fields go in `properties`.  On Salesforce, `company` applies to Leads only (400 on a Contact).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The connected HubSpot, Salesforce or HighLevel account (`GET /v1/accounts?platform=hubspot`, `salesforce` or `gohighlevel`).
$contact_id = 'contact_id_example'; // string | The CRM's own id. HubSpot contact id, Salesforce Contact (`003...`) or Lead (`00Q...`) id, or HighLevel contact id.
$crm_contact_input = {"phone":"+34600123456","properties":{"hs_lead_status":"IN_PROGRESS"}}; // \Zernio\Model\CrmContactInput

try {
    $result = $apiInstance->updateCrmContact($account_id, $contact_id, $crm_contact_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->updateCrmContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected HubSpot, Salesforce or HighLevel account (&#x60;GET /v1/accounts?platform&#x3D;hubspot&#x60;, &#x60;salesforce&#x60; or &#x60;gohighlevel&#x60;). | |
| **contact_id** | **string**| The CRM&#39;s own id. HubSpot contact id, Salesforce Contact (&#x60;003...&#x60;) or Lead (&#x60;00Q...&#x60;) id, or HighLevel contact id. | |
| **crm_contact_input** | [**\Zernio\Model\CrmContactInput**](../Model/CrmContactInput.md)|  | |

### Return type

[**\Zernio\Model\CreateCrmContact201Response**](../Model/CreateCrmContact201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCrmDeal()`

```php
updateCrmDeal($account_id, $deal_id, $update_crm_deal_request): \Zernio\Model\GetCrmDeal200Response
```

Update a CRM deal

Move a deal to another stage, or change its amount, close date, owner or native fields. Send only what changes.  HubSpot needs `crm.objects.deals.write`, an optional scope portals approve when they connect; without it, 403 `crm_scope_missing` asks to reconnect HubSpot. `currency` only works on multi-currency HubSpot portals and Salesforce orgs.  HighLevel: `stage` is the pipeline stage id, `amount` the opportunity value, and `properties.status` (`open`, `won`, `lost`, `abandoned`) marks it won or lost. Its opportunities have no close date or currency of their own: `closeDate` and `currency` answer 400.  Updating needs `opportunities.write`, which the Zernio HighLevel app does not request yet, so this call answers 403 `crm_scope_missing` on HighLevel for now.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The connected HubSpot, Salesforce or HighLevel account (`GET /v1/accounts?platform=hubspot`, `salesforce` or `gohighlevel`).
$deal_id = 'deal_id_example'; // string | HubSpot deal id, Salesforce Opportunity id (`006...`) or HighLevel opportunity id.
$update_crm_deal_request = {"stage":"closedwon","amount":4800,"closeDate":"2026-11-30"}; // \Zernio\Model\UpdateCrmDealRequest

try {
    $result = $apiInstance->updateCrmDeal($account_id, $deal_id, $update_crm_deal_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->updateCrmDeal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected HubSpot, Salesforce or HighLevel account (&#x60;GET /v1/accounts?platform&#x3D;hubspot&#x60;, &#x60;salesforce&#x60; or &#x60;gohighlevel&#x60;). | |
| **deal_id** | **string**| HubSpot deal id, Salesforce Opportunity id (&#x60;006...&#x60;) or HighLevel opportunity id. | |
| **update_crm_deal_request** | [**\Zernio\Model\UpdateCrmDealRequest**](../Model/UpdateCrmDealRequest.md)|  | |

### Return type

[**\Zernio\Model\GetCrmDeal200Response**](../Model/GetCrmDeal200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
