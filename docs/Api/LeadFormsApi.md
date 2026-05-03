# Zernio\LeadFormsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLeadForm()**](LeadFormsApi.md#createLeadForm) | **POST** /v1/ads/lead-forms | Create a Meta Lead Gen Form |
| [**createLeadFormTestLead()**](LeadFormsApi.md#createLeadFormTestLead) | **POST** /v1/ads/lead-forms/{formId}/test-leads | Create a synthetic test lead |
| [**deleteLeadForm()**](LeadFormsApi.md#deleteLeadForm) | **DELETE** /v1/ads/lead-forms/{formId} | Delete a Lead Gen Form |
| [**deleteLeadFormTestLead()**](LeadFormsApi.md#deleteLeadFormTestLead) | **DELETE** /v1/ads/lead-forms/{formId}/test-leads/{leadId} | Delete a (test) lead |
| [**getLeadForm()**](LeadFormsApi.md#getLeadForm) | **GET** /v1/ads/lead-forms/{formId} | Get a Lead Gen Form |
| [**listLeadFormLeads()**](LeadFormsApi.md#listLeadFormLeads) | **GET** /v1/ads/lead-forms/{formId}/leads | List submitted leads for a form |
| [**listLeadForms()**](LeadFormsApi.md#listLeadForms) | **GET** /v1/ads/lead-forms | List Meta Lead Gen Forms |
| [**updateLeadForm()**](LeadFormsApi.md#updateLeadForm) | **PATCH** /v1/ads/lead-forms/{formId} | Update a Lead Gen Form (status only) |


## `createLeadForm()`

```php
createLeadForm($create_lead_form_body): \Zernio\Model\CreateLeadForm201Response
```

Create a Meta Lead Gen Form

Creates a new Instant Form on the Facebook Page tied to the given social account. The form is created in `ACTIVE` status and is immediately attachable to ads (see `leadGenFormId` on POST /v1/ads/create).  Once a form has received any leads, its questions / privacy policy / thank-you page become immutable on Meta's side; only `status` may be changed via PATCH.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LeadFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_lead_form_body = new \Zernio\Model\CreateLeadFormBody(); // \Zernio\Model\CreateLeadFormBody

try {
    $result = $apiInstance->createLeadForm($create_lead_form_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadFormsApi->createLeadForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_lead_form_body** | [**\Zernio\Model\CreateLeadFormBody**](../Model/CreateLeadFormBody.md)|  | |

### Return type

[**\Zernio\Model\CreateLeadForm201Response**](../Model/CreateLeadForm201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLeadFormTestLead()`

```php
createLeadFormTestLead($form_id, $create_lead_form_test_lead_request): \Zernio\Model\CreateLeadFormTestLead200Response
```

Create a synthetic test lead

Submits a fake lead against a form. Useful for QA, App Review demos, and exercising webhook subscribers without waiting for real ad impressions. Meta caps a form to one outstanding test lead — call DELETE on the returned id before re-submitting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LeadFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 'form_id_example'; // string
$create_lead_form_test_lead_request = new \Zernio\Model\CreateLeadFormTestLeadRequest(); // \Zernio\Model\CreateLeadFormTestLeadRequest

try {
    $result = $apiInstance->createLeadFormTestLead($form_id, $create_lead_form_test_lead_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadFormsApi->createLeadFormTestLead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**|  | |
| **create_lead_form_test_lead_request** | [**\Zernio\Model\CreateLeadFormTestLeadRequest**](../Model/CreateLeadFormTestLeadRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateLeadFormTestLead200Response**](../Model/CreateLeadFormTestLead200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLeadForm()`

```php
deleteLeadForm($form_id, $account_id): \Zernio\Model\DeleteLeadForm200Response
```

Delete a Lead Gen Form

Deletes the form from Meta. If the form has already received leads, Meta archives it instead of hard-deleting; the response is the same either way.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LeadFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 'form_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->deleteLeadForm($form_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadFormsApi->deleteLeadForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**|  | |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\DeleteLeadForm200Response**](../Model/DeleteLeadForm200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLeadFormTestLead()`

```php
deleteLeadFormTestLead($form_id, $lead_id, $account_id): \Zernio\Model\DeleteLeadForm200Response
```

Delete a (test) lead

Deletes a single lead by ID. Primarily used to clear the outstanding test lead so you can submit a new one. The same Graph API call works on real leads too; for production lead deletion (GDPR/CCPA) prefer a dedicated flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LeadFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 'form_id_example'; // string
$lead_id = 'lead_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->deleteLeadFormTestLead($form_id, $lead_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadFormsApi->deleteLeadFormTestLead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**|  | |
| **lead_id** | **string**|  | |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\DeleteLeadForm200Response**](../Model/DeleteLeadForm200Response.md)

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
getLeadForm($form_id, $account_id): \Zernio\Model\GetLeadForm200Response
```

Get a Lead Gen Form

Returns full details for a single form, including questions, privacy policy, and lead counts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LeadFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 'form_id_example'; // string | Meta lead form ID (numeric string)
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getLeadForm($form_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadFormsApi->getLeadForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**| Meta lead form ID (numeric string) | |
| **account_id** | **string**|  | |

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

## `listLeadFormLeads()`

```php
listLeadFormLeads($form_id, $account_id, $limit, $cursor, $since): \Zernio\Model\ListLeadFormLeads200Response
```

List submitted leads for a form

Returns leads submitted against a Lead Gen Form. The page access token on the connected account must have the `leads_retrieval` permission — if the token was minted before that scope was approved, this endpoint returns `code: scope_reconnect_required` (HTTP 422) and the customer must reconnect the Facebook account.  For real-time delivery without polling, subscribe a webhook to the `lead.received` event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LeadFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 'form_id_example'; // string
$account_id = 'account_id_example'; // string
$limit = 25; // int
$cursor = 'cursor_example'; // string
$since = 56; // int | Unix timestamp; only return leads created strictly after this.

try {
    $result = $apiInstance->listLeadFormLeads($form_id, $account_id, $limit, $cursor, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadFormsApi->listLeadFormLeads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**|  | |
| **account_id** | **string**|  | |
| **limit** | **int**|  | [optional] [default to 25] |
| **cursor** | **string**|  | [optional] |
| **since** | **int**| Unix timestamp; only return leads created strictly after this. | [optional] |

### Return type

[**\Zernio\Model\ListLeadFormLeads200Response**](../Model/ListLeadFormLeads200Response.md)

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
listLeadForms($account_id, $limit, $cursor): \Zernio\Model\ListLeadForms200Response
```

List Meta Lead Gen Forms

Returns Meta Instant Forms attached to the Facebook Page connected via the given social account. Forms live on Facebook Pages — Instagram lead ads reuse the linked Page under the hood, so even Instagram-only ad accounts list forms from the linked Facebook Page. Requires the Ads add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LeadFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Facebook social account ID (Late SocialAccount _id)
$limit = 25; // int
$cursor = 'cursor_example'; // string | Meta `paging.cursors.after` from a prior page

try {
    $result = $apiInstance->listLeadForms($account_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadFormsApi->listLeadForms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Facebook social account ID (Late SocialAccount _id) | |
| **limit** | **int**|  | [optional] [default to 25] |
| **cursor** | **string**| Meta &#x60;paging.cursors.after&#x60; from a prior page | [optional] |

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

## `updateLeadForm()`

```php
updateLeadForm($form_id, $update_lead_form_request): \Zernio\Model\DeleteLeadForm200Response
```

Update a Lead Gen Form (status only)

Update mutable fields on an existing form. Today only `status` is mutable on Meta's side — questions / privacy_policy / thank_you_page are immutable once a form has received any leads.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LeadFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 'form_id_example'; // string
$update_lead_form_request = new \Zernio\Model\UpdateLeadFormRequest(); // \Zernio\Model\UpdateLeadFormRequest

try {
    $result = $apiInstance->updateLeadForm($form_id, $update_lead_form_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadFormsApi->updateLeadForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**|  | |
| **update_lead_form_request** | [**\Zernio\Model\UpdateLeadFormRequest**](../Model/UpdateLeadFormRequest.md)|  | |

### Return type

[**\Zernio\Model\DeleteLeadForm200Response**](../Model/DeleteLeadForm200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
