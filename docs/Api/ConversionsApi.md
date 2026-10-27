# Zernio\ConversionsApi

Server-side Conversions API: send + adjust conversion events (with hashed matching and consent/LDU forwarding), read Event Match Quality, and manage conversion destinations (pixels/datasets) and their ad-account associations. Supported on Meta, Google, TikTok, LinkedIn, Pinterest, OpenAI Ads and Reddit (badges show per operation). Requires the Ads add-on.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addConversionAssociations()**](ConversionsApi.md#addConversionAssociations) | **POST** /v1/accounts/{accountId}/conversion-destinations/{destinationId}/associations | Associate campaigns |
| [**adjustConversions()**](ConversionsApi.md#adjustConversions) | **POST** /v1/ads/conversions/adjustments | Adjust uploaded conversions |
| [**createConversionAction()**](ConversionsApi.md#createConversionAction) | **POST** /v1/ads/conversions/actions | Create website conversion action |
| [**createConversionDestination()**](ConversionsApi.md#createConversionDestination) | **POST** /v1/accounts/{accountId}/conversion-destinations | Create a conversion destination |
| [**createCustomConversionGoal()**](ConversionsApi.md#createCustomConversionGoal) | **POST** /v1/ads/conversions/custom-goals | Create a custom conversion goal |
| [**createEventDestination()**](ConversionsApi.md#createEventDestination) | **POST** /v1/events/destinations | Add an event destination |
| [**deleteConversionDestination()**](ConversionsApi.md#deleteConversionDestination) | **DELETE** /v1/accounts/{accountId}/conversion-destinations/{destinationId} | Delete a conversion destination |
| [**deleteEventDestination()**](ConversionsApi.md#deleteEventDestination) | **DELETE** /v1/events/destinations/{destinationId} | Remove an event destination |
| [**getConversionDestination()**](ConversionsApi.md#getConversionDestination) | **GET** /v1/accounts/{accountId}/conversion-destinations/{destinationId} | Get a conversion destination |
| [**getConversionMetrics()**](ConversionsApi.md#getConversionMetrics) | **GET** /v1/accounts/{accountId}/conversion-destinations/{destinationId}/metrics | Get attribution metrics |
| [**getConversionsQuality()**](ConversionsApi.md#getConversionsQuality) | **GET** /v1/ads/conversions/quality | Get Event Match Quality |
| [**listAdConversionGoals()**](ConversionsApi.md#listAdConversionGoals) | **GET** /v1/ads/conversions/goals | List account conversion goals |
| [**listConversionActions()**](ConversionsApi.md#listConversionActions) | **GET** /v1/ads/conversions/actions | List conversion actions |
| [**listConversionAssociations()**](ConversionsApi.md#listConversionAssociations) | **GET** /v1/accounts/{accountId}/conversion-destinations/{destinationId}/associations | List associated campaigns |
| [**listConversionDestinations()**](ConversionsApi.md#listConversionDestinations) | **GET** /v1/accounts/{accountId}/conversion-destinations | List conversion destinations |
| [**listCustomConversionGoals()**](ConversionsApi.md#listCustomConversionGoals) | **GET** /v1/ads/conversions/custom-goals | List custom conversion goals |
| [**listEventDestinations()**](ConversionsApi.md#listEventDestinations) | **GET** /v1/events/destinations | List event destinations |
| [**listEvents()**](ConversionsApi.md#listEvents) | **GET** /v1/events | List stored events |
| [**removeConversionAssociations()**](ConversionsApi.md#removeConversionAssociations) | **DELETE** /v1/accounts/{accountId}/conversion-destinations/{destinationId}/associations | Remove associated campaigns |
| [**removeCustomConversionGoal()**](ConversionsApi.md#removeCustomConversionGoal) | **DELETE** /v1/ads/conversions/custom-goals/{goalId} | Remove a custom conversion goal |
| [**sendConversions()**](ConversionsApi.md#sendConversions) | **POST** /v1/ads/conversions | Send conversion events |
| [**sendEvents()**](ConversionsApi.md#sendEvents) | **POST** /v1/events | Send events to every destination |
| [**updateAdConversionGoals()**](ConversionsApi.md#updateAdConversionGoals) | **PATCH** /v1/ads/conversions/goals | Update account conversion goals |
| [**updateConversionAction()**](ConversionsApi.md#updateConversionAction) | **PATCH** /v1/ads/conversions/actions/{actionId} | Update a conversion action&#39;s settings |
| [**updateConversionDestination()**](ConversionsApi.md#updateConversionDestination) | **PATCH** /v1/accounts/{accountId}/conversion-destinations/{destinationId} | Update a conversion destination |
| [**updateCustomConversionGoal()**](ConversionsApi.md#updateCustomConversionGoal) | **PATCH** /v1/ads/conversions/custom-goals/{goalId} | Update a custom conversion goal |


## `addConversionAssociations()`

```php
addConversionAssociations($account_id, $destination_id, $add_conversion_associations_request): \Zernio\Model\AddConversionAssociations200Response
```

Associate campaigns

Links campaigns to a LinkedIn conversion rule so they track it, reporting which links succeeded or failed.  Returns a per-campaign success/failure result so callers can retry only the rows that failed (e.g. wrong campaign type for the rule's objective).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$destination_id = 'destination_id_example'; // string
$add_conversion_associations_request = new \Zernio\Model\AddConversionAssociationsRequest(); // \Zernio\Model\AddConversionAssociationsRequest

try {
    $result = $apiInstance->addConversionAssociations($account_id, $destination_id, $add_conversion_associations_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->addConversionAssociations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **destination_id** | **string**|  | |
| **add_conversion_associations_request** | [**\Zernio\Model\AddConversionAssociationsRequest**](../Model/AddConversionAssociationsRequest.md)|  | |

### Return type

[**\Zernio\Model\AddConversionAssociations200Response**](../Model/AddConversionAssociations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adjustConversions()`

```php
adjustConversions($adjust_conversions_request): \Zernio\Model\AdjustConversions200Response
```

Adjust uploaded conversions

Retracts, restates the value of, or enhances conversions you already sent to Google Ads, for refunds or late customer data.  Adjust conversions that were previously uploaded via `POST /v1/ads/conversions`: retract them, restate their value, or enhance them with first-party data. Requires the Ads add-on.  **Google Ads only.** Google handles adjustments through the classic Google Ads API (`ConversionAdjustmentUploadService`); the Data Manager `ingestEvents` path used for sending conversions is ingest-only. Meta and LinkedIn have no equivalent, so this endpoint returns `405` for those platforms.  Adjustment types:  - `RETRACTION`: remove the conversion entirely (refund, chargeback, cancelled order, churn). - `RESTATEMENT`: change the conversion's value (upgrade / downgrade / partial refund). Send the corrected **total** value in `restatementValue` (not a delta). - `ENHANCEMENT`: attach first-party identifiers (hashed email / phone) to an existing conversion (enhanced conversions applied after the fact).  Identifying the original conversion (per adjustment):  - `orderId`: the transaction ID you sent as `eventId` on the original conversion. Recommended, and **required** for `ENHANCEMENT`. - or `gclid` + `conversionTime`: the click ID and the original conversion's time (unix seconds). Not available for `ENHANCEMENT`.  `destinationId` is the conversion action resource name, e.g. `customers/1234567890/conversionActions/987654321` (same value you send to `POST /v1/ads/conversions`). PII in `user` is hashed with SHA-256 server-side (Gmail-specific normalization included). Send plaintext.  Times are unix seconds; we convert to Google's required `yyyy-MM-dd HH:mm:ss+00:00` format. Up to 2000 adjustments per request; partial failure is supported (inspect `adjustmentsFailed` / `failures[]`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adjust_conversions_request = new \Zernio\Model\AdjustConversionsRequest(); // \Zernio\Model\AdjustConversionsRequest

try {
    $result = $apiInstance->adjustConversions($adjust_conversions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->adjustConversions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adjust_conversions_request** | [**\Zernio\Model\AdjustConversionsRequest**](../Model/AdjustConversionsRequest.md)|  | |

### Return type

[**\Zernio\Model\AdjustConversions200Response**](../Model/AdjustConversions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createConversionAction()`

```php
createConversionAction($create_conversion_action_request): \Zernio\Model\CreateConversionAction201Response
```

Create website conversion action

Creates a Google Ads website conversion action and returns the tag snippets to install on your site.  Creates a `WEBPAGE` conversion action (category `DEFAULT`) and returns it with its tag snippets, read back after creation since Google never returns them on the create response itself. Invalidates the cached list `GET` on this resource would otherwise keep serving. Google-only; other platforms return `501`. Requires the Ads add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_conversion_action_request = new \Zernio\Model\CreateConversionActionRequest(); // \Zernio\Model\CreateConversionActionRequest

try {
    $result = $apiInstance->createConversionAction($create_conversion_action_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->createConversionAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_conversion_action_request** | [**\Zernio\Model\CreateConversionActionRequest**](../Model/CreateConversionActionRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateConversionAction201Response**](../Model/CreateConversionAction201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createConversionDestination()`

```php
createConversionDestination($account_id, $create_conversion_destination_request): \Zernio\Model\CreateConversionDestination201Response
```

Create a conversion destination

Creates a new place to send conversion events: a Google Ads conversion action or a LinkedIn conversion rule.  Supported for LinkedIn (conversion rule) and Google Ads (conversion action). Meta and OpenAI Ads pixels are created via their own tracking-tags flow instead (`POST /v1/accounts/{accountId}/tracking-tags`); this endpoint returns 405 for both, and for Reddit (create Reddit pixels in Reddit Ads Manager).  **LinkedIn:** creation is NOT idempotent. A retry creates a second destination. Deduplicate before retrying.  **Google Ads:** calling with a name that already exists reuses the existing conversion action transparently (the response is identical to a fresh create). Calling with the same name but a different category returns a typed `IDEMPOTENCY_CONFLICT` (409) rather than silently returning the mismatched action.  **LinkedIn:** the rule is created with `conversionMethod=CONVERSIONS_API` and (by default) auto-associated with all of the ad account's campaigns via `autoAssociationType=ALL_CAMPAIGNS`. Pass `autoAssociationType: NONE` to opt out and manage associations explicitly via the associations endpoints below.  365-day attribution windows are only valid for `SUBMIT_APPLICATION`, `PURCHASE`, `ADD_TO_CART`, `QUALIFIED_LEAD`, and `LEAD` rule types; the API rejects other combinations locally.  **Google Ads:** the conversion action is created with `type=UPLOAD_CLICKS` (required for API-uploaded offline conversions, immutable after creation). The `type` field carries the Google `ConversionActionCategory` enum value, e.g. `PURCHASE`, `SUBSCRIBE_PAID`, `SIGNUP`, `IMPORTED_LEAD`, `BOOK_APPOINTMENT`. Unified standard event names (e.g. `Purchase`, `Subscribe`, `CompleteRegistration`, `Lead`, `Schedule`) are resolved to their Google category equivalents automatically. The action defaults to secondary (non-primary) to avoid immediately steering Smart Bidding; pass `primaryForGoal: true` to opt in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | SocialAccount ID (linkedinads or googleads).
$create_conversion_destination_request = new \Zernio\Model\CreateConversionDestinationRequest(); // \Zernio\Model\CreateConversionDestinationRequest

try {
    $result = $apiInstance->createConversionDestination($account_id, $create_conversion_destination_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->createConversionDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| SocialAccount ID (linkedinads or googleads). | |
| **create_conversion_destination_request** | [**\Zernio\Model\CreateConversionDestinationRequest**](../Model/CreateConversionDestinationRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateConversionDestination201Response**](../Model/CreateConversionDestination201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCustomConversionGoal()`

```php
createCustomConversionGoal($create_custom_conversion_goal_request): \Zernio\Model\CreateSharedBudget201ResponseBudget
```

Create a custom conversion goal

Creates a Google Ads custom conversion goal from a set of conversion actions, so a campaign can bid on just those.  Creates a custom conversion goal from conversion action ids. Point a campaign at it with `PATCH /v1/ads/campaigns/{campaignId}/conversion-goals`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_custom_conversion_goal_request = new \Zernio\Model\CreateCustomConversionGoalRequest(); // \Zernio\Model\CreateCustomConversionGoalRequest

try {
    $result = $apiInstance->createCustomConversionGoal($create_custom_conversion_goal_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->createCustomConversionGoal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_custom_conversion_goal_request** | [**\Zernio\Model\CreateCustomConversionGoalRequest**](../Model/CreateCustomConversionGoalRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateSharedBudget201ResponseBudget**](../Model/CreateSharedBudget201ResponseBudget.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEventDestination()`

```php
createEventDestination($create_event_destination_request): \Zernio\Model\CreateEventDestination201Response
```

Add an event destination

Saves an ad platform destination for a profile, so events sent to `POST /v1/events` for that profile are forwarded to it. Pick `destinationId` from `GET /v1/accounts/{accountId}/conversion-destinations`. Set `eventNames` to forward only those events (for example only `Purchase`); leave it out to forward every event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_event_destination_request = new \Zernio\Model\CreateEventDestinationRequest(); // \Zernio\Model\CreateEventDestinationRequest

try {
    $result = $apiInstance->createEventDestination($create_event_destination_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->createEventDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_event_destination_request** | [**\Zernio\Model\CreateEventDestinationRequest**](../Model/CreateEventDestinationRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateEventDestination201Response**](../Model/CreateEventDestination201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteConversionDestination()`

```php
deleteConversionDestination($account_id, $destination_id, $ad_account_id)
```

Delete a conversion destination

Disables a LinkedIn conversion rule, which is how LinkedIn deletes it; the rule can still be read afterwards.  LinkedIn-only today. LinkedIn does not expose hard-delete on conversion rules; what their UI calls \"delete\" is the same `enabled: false` flip we apply here. The rule remains fetchable via GET with `status: 'inactive'`; the unified discovery endpoint hides it by default.  `adAccountId` may be passed as a query parameter (recommended) or as a JSON body field for clients that can send DELETE bodies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$destination_id = 'destination_id_example'; // string
$ad_account_id = 'ad_account_id_example'; // string | Required as query OR in JSON body.

try {
    $apiInstance->deleteConversionDestination($account_id, $destination_id, $ad_account_id);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->deleteConversionDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **destination_id** | **string**|  | |
| **ad_account_id** | **string**| Required as query OR in JSON body. | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEventDestination()`

```php
deleteEventDestination($destination_id): \Zernio\Model\DeleteSmsSenderId200Response
```

Remove an event destination

Stops forwarding events to this destination. `destinationId` is the event destination `id`, not the platform destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destination_id = 'destination_id_example'; // string

try {
    $result = $apiInstance->deleteEventDestination($destination_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->deleteEventDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **destination_id** | **string**|  | |

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

## `getConversionDestination()`

```php
getConversionDestination($account_id, $destination_id, $ad_account_id): \Zernio\Model\GetConversionDestination200Response
```

Get a conversion destination

Shows one LinkedIn conversion rule with its full settings.  LinkedIn-only today. Returns the full destination record for one conversion rule. The `adAccountId` query parameter is required because LinkedIn rules are scoped to a sponsored ad account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$destination_id = 'destination_id_example'; // string
$ad_account_id = 'ad_account_id_example'; // string | Numeric ID or full `urn:li:sponsoredAccount:{id}` URN.

try {
    $result = $apiInstance->getConversionDestination($account_id, $destination_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->getConversionDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **destination_id** | **string**|  | |
| **ad_account_id** | **string**| Numeric ID or full &#x60;urn:li:sponsoredAccount:{id}&#x60; URN. | |

### Return type

[**\Zernio\Model\GetConversionDestination200Response**](../Model/GetConversionDestination200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversionMetrics()`

```php
getConversionMetrics($account_id, $destination_id, $ad_account_id, $start_date, $end_date, $granularity): \Zernio\Model\GetConversionMetrics200Response
```

Get attribution metrics

Shows a LinkedIn conversion rule's attributed conversions, value, leads and cost over time.  LinkedIn-only today. Returns conversion-attribution metrics (`externalWebsiteConversions`, `externalWebsitePostClickConversions`, `externalWebsitePostViewConversions`, `conversionValueInLocalCurrency`, `qualifiedLeads`, `costInLocalCurrency`) bucketed by date.  Date-range constraints (passed through from LinkedIn): - `granularity=DAILY` is retained for ~6 months only - `granularity=ALL` with a range > 6 months auto-rounds to month boundaries - `granularity=MONTHLY`/`YEARLY` retains 24 months  Throttle: LinkedIn caps adAnalytics at 45M metric values per 5-minute window across the calling token. Single-rule queries are well within that limit; surfaces as 429 if hit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$destination_id = 'destination_id_example'; // string
$ad_account_id = 'ad_account_id_example'; // string
$start_date = 'start_date_example'; // string
$end_date = 'end_date_example'; // string
$granularity = 'DAILY'; // string

try {
    $result = $apiInstance->getConversionMetrics($account_id, $destination_id, $ad_account_id, $start_date, $end_date, $granularity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->getConversionMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **destination_id** | **string**|  | |
| **ad_account_id** | **string**|  | |
| **start_date** | **string**|  | |
| **end_date** | **string**|  | [optional] |
| **granularity** | **string**|  | [optional] [default to &#39;DAILY&#39;] |

### Return type

[**\Zernio\Model\GetConversionMetrics200Response**](../Model/GetConversionMetrics200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversionsQuality()`

```php
getConversionsQuality($account_id, $destination_id): \Zernio\Model\GetConversionsQuality200Response
```

Get Event Match Quality

Shows how well your server-side conversion events match users, with event match quality and coverage for Meta or Pinterest.  Reads Meta Event Match Quality (EMQ) and pixel↔CAPI event coverage for a pixel/dataset, live from Meta's Dataset Quality API. Web events only (a Meta limitation). Other platforms return 405, except Pinterest. Requires the Ads add-on.  Pinterest (`pinterestads`): `destinationId` is the numeric ad account id. Rows come from Pinterest's Event Quality Score for Conversions API web events over the last 14 days, one per event name, with each identifier's coverage in `matchKeys` and `eventCoveragePercentage` set to the tag/API `event_id` overlap. No `compositeScore`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | SocialAccount _id (a metaads or pinterestads account).
$destination_id = 'destination_id_example'; // string | Meta pixel/dataset ID, or the numeric Pinterest ad account id.

try {
    $result = $apiInstance->getConversionsQuality($account_id, $destination_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->getConversionsQuality: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| SocialAccount _id (a metaads or pinterestads account). | |
| **destination_id** | **string**| Meta pixel/dataset ID, or the numeric Pinterest ad account id. | |

### Return type

[**\Zernio\Model\GetConversionsQuality200Response**](../Model/GetConversionsQuality200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdConversionGoals()`

```php
listAdConversionGoals($account_id, $ad_account_id, $customer_id): \Zernio\Model\ListAdConversionGoals200Response
```

List account conversion goals

Lists a Google Ads account's default conversion goals, which ones are used for bidding, and the conversion actions in each.  Google Ads account-default conversion goals (CustomerConversionGoal), one per category and origin, with `biddable` (whether the goal is used for bidding and reported in the Conversions column) and the conversion actions that belong to it, each flagged `primaryForGoal` (primary) or not (secondary). Reads are cached for 10 minutes; when the shared Google quota is exhausted the last successful result is served with `stale: true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (Google Ads)
$ad_account_id = 'ad_account_id_example'; // string | Google customer id. Required when the connection has multiple customers.
$customer_id = 'customer_id_example'; // string | Alias of adAccountId

try {
    $result = $apiInstance->listAdConversionGoals($account_id, $ad_account_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->listAdConversionGoals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Zernio SocialAccount id (Google Ads) | |
| **ad_account_id** | **string**| Google customer id. Required when the connection has multiple customers. | [optional] |
| **customer_id** | **string**| Alias of adAccountId | [optional] |

### Return type

[**\Zernio\Model\ListAdConversionGoals200Response**](../Model/ListAdConversionGoals200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConversionActions()`

```php
listConversionActions($account_id, $ad_account_id, $customer_id, $type): \Zernio\Model\ListConversionActions200Response
```

List conversion actions

Lists the conversion actions in a Google Ads account, with the website tag snippets to install where available.  Lists Google Ads conversion actions on the resolved customer, all types by default. Each action's `tagSnippets` (global site tag + event snippet) is included when Google has them for that action's type, e.g. `WEBPAGE`. Google-only; other platforms return `501`. Requires the Ads add-on.  `adAccountId` (alias `customerId`) is optional: when omitted, it is resolved from the connection's accessible Google Ads customers, and the call fails with `400` when more than one is accessible (pass `adAccountId` to disambiguate).  The list itself is cached for the quota window (1 hour fresh, up to 7 days last-good; the cache key does not vary on `type`). The response carries `cachedAt` and `stale`, set when a quota-exhausted call falls back to the last-good copy instead of a live read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | SocialAccount _id (must be a googleads account).
$ad_account_id = 'ad_account_id_example'; // string | Platform ad account ID (Google customer ID, digits only). Resolved automatically when the connection has exactly one accessible customer.
$customer_id = 'customer_id_example'; // string | Alias of adAccountId, kept for existing callers
$type = 'type_example'; // string | Filter by Google's ConversionActionType enum (e.g. WEBPAGE, UPLOAD_CLICKS).

try {
    $result = $apiInstance->listConversionActions($account_id, $ad_account_id, $customer_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->listConversionActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| SocialAccount _id (must be a googleads account). | |
| **ad_account_id** | **string**| Platform ad account ID (Google customer ID, digits only). Resolved automatically when the connection has exactly one accessible customer. | [optional] |
| **customer_id** | **string**| Alias of adAccountId, kept for existing callers | [optional] |
| **type** | **string**| Filter by Google&#39;s ConversionActionType enum (e.g. WEBPAGE, UPLOAD_CLICKS). | [optional] |

### Return type

[**\Zernio\Model\ListConversionActions200Response**](../Model/ListConversionActions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConversionAssociations()`

```php
listConversionAssociations($account_id, $destination_id, $ad_account_id): \Zernio\Model\ListConversionAssociations200Response
```

List associated campaigns

Lists the LinkedIn campaigns that track a conversion rule, so you can spot newer campaigns that still need linking.  LinkedIn-only today. Returns the campaigns currently associated with this conversion rule. Auto-association on rule creation runs once at create time; campaigns created after the rule still need explicit association.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$destination_id = 'destination_id_example'; // string
$ad_account_id = 'ad_account_id_example'; // string

try {
    $result = $apiInstance->listConversionAssociations($account_id, $destination_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->listConversionAssociations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **destination_id** | **string**|  | |
| **ad_account_id** | **string**|  | |

### Return type

[**\Zernio\Model\ListConversionAssociations200Response**](../Model/ListConversionAssociations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConversionDestinations()`

```php
listConversionDestinations($account_id): \Zernio\Model\ListConversionDestinations200Response
```

List conversion destinations

Lists where an ad account can receive conversion events (pixels, conversion actions or rules), so you know where to send them.  Returns the list of pixels (Meta), conversion actions (Google), conversion rules (LinkedIn), pixels (OpenAI Ads, Reddit) or ad accounts (Pinterest) accessible to the connected ads account. Use the returned `id` as `destinationId` when posting to `POST /v1/ads/conversions`.  For Google and LinkedIn, each destination's `type` reflects the conversion type (PURCHASE, LEAD, SIGN_UP, etc.), and the event type is locked to the destination. For Meta, OpenAI Ads and Reddit, `type` is absent: pixels accept any event name per request.  For Reddit, the pixels of every ad account the connection reaches (only the scoped ones when the connection has an ad-account scope), each with the `adAccountId` that owns it. Reddit pixels are created in Reddit Ads Manager, not through Zernio.  For LinkedIn, destinations are returned across every sponsored ad account the connected token can access; the `adAccountId` field on each destination identifies the parent ad account and is required for subsequent CRUD calls (update, delete, associations, metrics).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | SocialAccount ID (metaads, googleads, linkedinads, tiktokads, openaiads, pinterestads, or redditads).

try {
    $result = $apiInstance->listConversionDestinations($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->listConversionDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| SocialAccount ID (metaads, googleads, linkedinads, tiktokads, openaiads, pinterestads, or redditads). | |

### Return type

[**\Zernio\Model\ListConversionDestinations200Response**](../Model/ListConversionDestinations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomConversionGoals()`

```php
listCustomConversionGoals($account_id, $ad_account_id, $customer_id): \Zernio\Model\ListCustomConversionGoals200Response
```

List custom conversion goals

Lists the custom conversion goals in a Google Ads account, each a named set of conversion actions a campaign can bid on.  Google Ads custom conversion goals (a named set of conversion actions a campaign can bid on). Removed goals are excluded. Cached like the other Google reads.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (Google Ads)
$ad_account_id = 'ad_account_id_example'; // string | Google customer id. Required when the connection has multiple customers.
$customer_id = 'customer_id_example'; // string | Alias of adAccountId

try {
    $result = $apiInstance->listCustomConversionGoals($account_id, $ad_account_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->listCustomConversionGoals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Zernio SocialAccount id (Google Ads) | |
| **ad_account_id** | **string**| Google customer id. Required when the connection has multiple customers. | [optional] |
| **customer_id** | **string**| Alias of adAccountId | [optional] |

### Return type

[**\Zernio\Model\ListCustomConversionGoals200Response**](../Model/ListCustomConversionGoals200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEventDestinations()`

```php
listEventDestinations($profile_id): \Zernio\Model\ListEventDestinations200Response
```

List event destinations

Lists the ad platform destinations that receive events sent to `POST /v1/events`, for one profile or every profile you can access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string

try {
    $result = $apiInstance->listEventDestinations($profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->listEventDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\ListEventDestinations200Response**](../Model/ListEventDestinations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEvents()`

```php
listEvents($profile_id, $limit, $from, $to, $event_name, $cursor): \Zernio\Model\ListEvents200Response
```

List stored events

Lists the conversion events stored for a profile by `POST /v1/events`, newest first. Personal data is never returned: `hasEmail`, `hasPhone` and `hasExternalId` only say whether the event carried that identifier. Events sent with `testCode` are not stored, so they never appear here.  Paginate with `cursor`: pass the `nextCursor` of the previous page until it comes back `null`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$limit = 50; // int
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only events at or after this time (ISO 8601, on the event time).
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only events before this time (ISO 8601, on the event time).
$event_name = 'event_name_example'; // string | Only events with this name, such as `Purchase`.
$cursor = 'cursor_example'; // string | `nextCursor` from the previous page.

try {
    $result = $apiInstance->listEvents($profile_id, $limit, $from, $to, $event_name, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->listEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **limit** | **int**|  | [optional] [default to 50] |
| **from** | **\DateTime**| Only events at or after this time (ISO 8601, on the event time). | [optional] |
| **to** | **\DateTime**| Only events before this time (ISO 8601, on the event time). | [optional] |
| **event_name** | **string**| Only events with this name, such as &#x60;Purchase&#x60;. | [optional] |
| **cursor** | **string**| &#x60;nextCursor&#x60; from the previous page. | [optional] |

### Return type

[**\Zernio\Model\ListEvents200Response**](../Model/ListEvents200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeConversionAssociations()`

```php
removeConversionAssociations($account_id, $destination_id, $ad_account_id, $campaign_ids): \Zernio\Model\RemoveConversionAssociations200Response
```

Remove associated campaigns

Unlinks campaigns from a LinkedIn conversion rule so they stop tracking it.  Pass `adAccountId` and `campaignIds` as query parameters (`campaignIds` is comma-separated). The route also accepts a JSON body with the same fields for clients that prefer DELETE-with-body, but the documented surface is query-only because some SDK code generators (e.g. Python) collapse query + body parameters with the same name into a single kwarg.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$destination_id = 'destination_id_example'; // string
$ad_account_id = 'ad_account_id_example'; // string
$campaign_ids = 'campaign_ids_example'; // string | Comma-separated list of campaign IDs.

try {
    $result = $apiInstance->removeConversionAssociations($account_id, $destination_id, $ad_account_id, $campaign_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->removeConversionAssociations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **destination_id** | **string**|  | |
| **ad_account_id** | **string**|  | |
| **campaign_ids** | **string**| Comma-separated list of campaign IDs. | |

### Return type

[**\Zernio\Model\RemoveConversionAssociations200Response**](../Model/RemoveConversionAssociations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeCustomConversionGoal()`

```php
removeCustomConversionGoal($goal_id, $account_id, $ad_account_id, $customer_id): \Zernio\Model\RemoveCustomConversionGoal200Response
```

Remove a custom conversion goal

Deletes a Google Ads custom conversion goal; switch any campaigns using it to another goal first.  Google refuses (400) while any campaign still uses it: switch those campaigns to another goal first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$goal_id = 'goal_id_example'; // string | Google custom conversion goal id
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (Google Ads)
$ad_account_id = 'ad_account_id_example'; // string | Google customer id. Required when the connection has multiple customers.
$customer_id = 'customer_id_example'; // string | Alias of adAccountId

try {
    $result = $apiInstance->removeCustomConversionGoal($goal_id, $account_id, $ad_account_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->removeCustomConversionGoal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **goal_id** | **string**| Google custom conversion goal id | |
| **account_id** | **string**| Zernio SocialAccount id (Google Ads) | |
| **ad_account_id** | **string**| Google customer id. Required when the connection has multiple customers. | [optional] |
| **customer_id** | **string**| Alias of adAccountId | [optional] |

### Return type

[**\Zernio\Model\RemoveCustomConversionGoal200Response**](../Model/RemoveCustomConversionGoal200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendConversions()`

```php
sendConversions($send_conversions_request): \Zernio\Model\SendConversions200Response
```

Send conversion events

Sends conversion events, such as purchases or leads, from your server to an ad platform so it can attribute and optimize ads.  Relay one or more conversion events to the target ad platform's native Conversions API. Platform is inferred from the provided `accountId`. Requires the Ads add-on.  Supported platforms:  - Meta (`metaads`) via Graph API - Google Ads (`googleads`) via Data Manager API `ingestEvents` - LinkedIn (`linkedinads`) via `/rest/conversionEvents` - TikTok (`tiktokads`) via the Offline Events API `/offline/batch/` (OFFLINE conversions only) - OpenAI Ads (`openaiads`) via its Conversions API (a separate host, `bzr.openai.com`) - Pinterest (`pinterestads`) via `POST /v5/ad_accounts/{id}/events` - Reddit (`redditads`) via the Reddit Conversions API (`POST /api/v3/pixels/{pixelId}/conversion_events`)  `destinationId` semantics differ per platform:  - Meta: pixel (dataset) ID, e.g. `123456789012345` - Google: conversion action resource name, e.g. `customers/1234567890/conversionActions/987654321` - LinkedIn: conversion rule ID or URN, e.g. `104012` or `urn:lla:llaPartnerConversion:104012` - TikTok: Offline Event Set ID, e.g. `7057103914977558530` - OpenAI Ads: pixel wire id (numeric `pixel_id`, distinct from the internal pixel id), as returned by `GET /v1/accounts/{accountId}/conversion-destinations` - Pinterest: numeric ad account id, e.g. `549755885175` (Pinterest attributes to the ad account, not to a tag) - Reddit: pixel id, e.g. `a2_abc123`, as returned by `GET /v1/accounts/{accountId}/conversion-destinations` (any other shape returns 400)  Pinterest notes: each event needs an `email`, or `ipAddress` plus `userAgent`; others are listed in `failures` with code `INVALID_EVENT` and the rest are still sent. `clickIds.epik` (the `_epik` cookie) is sent as `click_id`. `actionSource` `web` stays `web`, offline sources become `offline`, and app events need `platformData.action_source` `app_android` or `app_ios`. Pinterest answers per event, so one bad event does not fail its chunk (failures carry code `PINTEREST_EVENT_FAILED`). `consent.adUserData: DENIED` sets `opt_out`. The connected user needs a Business Access role on the ad account (403 otherwise).  Reddit notes: each event needs a match key: `clickIds.rdt_cid`, `clickIds.rdt_uuid`, `email`, `phone`, `externalId`, or `ipAddress` plus `userAgent`. Reddit accepts events up to 7 days old, and `eventTime` is unix SECONDS (a value more than an hour in the future is refused as milliseconds). Events failing these checks are listed in `failures` with code `INVALID_EVENT` and the rest are still sent. Email (lowercased, dots and `+tags` stripped from the local part), phone (E.164 with the leading `+`) and `externalId` are SHA-256 hashed; IP and user agent go plaintext. `consent.adUserData: DENIED` sends no user fields. `actionSource` maps to WEBSITE (`web`), APP (`app`) or OTHER, overridable with `platformData.action_source`; `platformData.order_id` is forwarded. `testCode` is sent as Reddit's `test_id`. The connection must hold the `adsconversions` permission: one authorized without it returns 403 `reconnect_required` (reconnect via GET /v1/connect/redditads/ads), and a Reddit user with no role on the ad account that owns the pixel returns 403 `insufficient_permissions`. Reddit throttling and other rejections are reported per chunk in `failures` with code `REDDIT_REJECTED`.  TikTok notes: this path sends OFFLINE conversions (in-store / CRM / call-center), not web-pixel events. Each event must carry an email or phone (TikTok requires at least one). The connected TikTok ads account must have granted the Offline Events permission; older grants must reconnect.  OpenAI Ads notes: requires a tracking tag (pixel) to already exist on the account. Returns 422 with code `TRACKING_TAG_REQUIRED` if `POST /v1/accounts/{accountId}/tracking-tags` hasn't been called yet.  Callers can list valid destinations via `GET /v1/accounts/{accountId}/conversion-destinations`.  All PII (email, phone, names, external IDs) is hashed with SHA-256 server-side per each platform's normalization spec, including Google's Gmail-specific dot/plus-suffix stripping. Send plaintext. LinkedIn `externalIds` are passed through as plaintext per LinkedIn's spec; only emails and phones are hashed.  For LinkedIn, the connected account must have been authorized after the Conversions API rollout (i.e. the OAuth grant must include `rw_conversions`). Older accounts must reconnect.  Batching is handled automatically. Meta caps at 1000 events per request and rejects the entire batch if any event is malformed. Google caps at 2000. LinkedIn caps at 5000 and is also all-or-nothing per chunk. OpenAI Ads caps at 1000 per request; larger submissions are split into 1000-event chunks, each all-or-nothing (a malformed event fails every event in that chunk, not the whole request). Reddit works the same way, in chunks of 1000.  Dedup: pass a stable `eventId` on every event. Meta and LinkedIn use it to dedupe against browser-side pixel/Insight Tag events; Google maps it to `transactionId`; Reddit receives it as `conversion_id`, its dedup key against Reddit Pixel events.  Per-platform `eventName` semantics:  - Meta: free-form. Standard names (Purchase, Lead, ...) match Meta's built-in events; custom strings are accepted. - Google: ignored. The conversion action's category determines the event type. Send the standard name closest to your action for documentation, but the platform will not branch on it. - LinkedIn: ignored. The conversion rule's `type` (LEAD, PURCHASE, etc.) is locked to the destination at rule-creation time. Send the standard name for documentation; LinkedIn does not branch on it. - OpenAI Ads: a fixed subset of standard names (Purchase, Lead, AddToCart, ViewContent, InitiateCheckout, CompleteRegistration, Subscribe, StartTrial, Schedule) maps 1:1 onto OpenAI's own event-type enum; any other standard name or custom string is sent as `type: custom` with the name preserved. - Pinterest: standard names map onto Pinterest's (Purchase = `checkout`, AddToCart = `add_to_cart`, InitiateCheckout = `initiate_checkout`, AddPaymentInfo = `add_payment_info`, Lead = `lead`, CompleteRegistration = `signup`, Subscribe = `subscribe`, ViewContent = `view_content`, Search = `search`, PageView = `page_visit`); any other string is sent as is, so it matches an advertiser defined event of that name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_conversions_request = new \Zernio\Model\SendConversionsRequest(); // \Zernio\Model\SendConversionsRequest

try {
    $result = $apiInstance->sendConversions($send_conversions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->sendConversions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_conversions_request** | [**\Zernio\Model\SendConversionsRequest**](../Model/SendConversionsRequest.md)|  | |

### Return type

[**\Zernio\Model\SendConversions200Response**](../Model/SendConversions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendEvents()`

```php
sendEvents($send_events_request): \Zernio\Model\SendEvents200Response
```

Send events to every destination

Sends conversion events once and forwards them to every ad platform destination saved for the profile (see `POST /v1/events/destinations`), or to the `destinations` given in the request. Each destination receives the events exactly as `POST /v1/ads/conversions` would send them, so the per-platform notes there (hashing, batching, `eventName` semantics, dedup on `eventId`) apply here too. A destination saved with `eventNames` only receives events with those names.  Zernio also stores each event for the profile's reporting. Email, phone and `externalId` are stored only as SHA-256 hashes, and `sourceUrl` keeps only its origin, path and attribution parameters (`utm_*`, `gclid`, `fbclid`, `ttclid`, `li_fat_id`, `epik`, `rdt_cid`, `gbraid`, `wbraid`). Events sent with `testCode` are forwarded but not stored.  One destination failing never blocks the others: each one reports its own result. Requires the Ads add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_events_request = new \Zernio\Model\SendEventsRequest(); // \Zernio\Model\SendEventsRequest

try {
    $result = $apiInstance->sendEvents($send_events_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->sendEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_events_request** | [**\Zernio\Model\SendEventsRequest**](../Model/SendEventsRequest.md)|  | |

### Return type

[**\Zernio\Model\SendEvents200Response**](../Model/SendEvents200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdConversionGoals()`

```php
updateAdConversionGoals($update_ad_conversion_goals_request): \Zernio\Model\UpdateAdConversionGoals200Response
```

Update account conversion goals

Turns bidding on or off for a Google Ads account's default conversion goals, which campaigns using account goals follow.  Sets `biddable` on one or more account-default goals, addressed by category and origin, in one mutate. Campaigns that use account-level goals (`goalConfigLevel: CUSTOMER`) follow the change. Returns the re-read goal list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_ad_conversion_goals_request = new \Zernio\Model\UpdateAdConversionGoalsRequest(); // \Zernio\Model\UpdateAdConversionGoalsRequest

try {
    $result = $apiInstance->updateAdConversionGoals($update_ad_conversion_goals_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->updateAdConversionGoals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_ad_conversion_goals_request** | [**\Zernio\Model\UpdateAdConversionGoalsRequest**](../Model/UpdateAdConversionGoalsRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateAdConversionGoals200Response**](../Model/UpdateAdConversionGoals200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateConversionAction()`

```php
updateConversionAction($action_id, $update_conversion_action_request): \Zernio\Model\UpdateConversionAction200Response
```

Update a conversion action's settings

Changes a Google Ads conversion action's settings, such as primary or secondary, counting, value and lookback windows, or removes or restores it.  Updates a Google Ads conversion action in one mutate, each field sent written on its own update mask leaf so omitted fields keep their value. Send at least one field.  `primaryForGoal` sets `primary_for_goal`: a primary action counts toward its goal's bidding and the Conversions column; a secondary one is observation-only (All conversions). `countingType`, `category`, the value settings (`defaultValue`, `defaultCurrency`, `alwaysUseDefaultValue`) and the click-through / view-through lookback windows map to the same-named conversion_action fields.  `status: REMOVED` removes the action (Google keeps it, with its history, as REMOVED) and must be sent alone; `status: ENABLED` restores a removed action. Google refuses HIDDEN on website actions, so it is not offered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$action_id = 'action_id_example'; // string | Google conversion action id
$update_conversion_action_request = new \Zernio\Model\UpdateConversionActionRequest(); // \Zernio\Model\UpdateConversionActionRequest

try {
    $result = $apiInstance->updateConversionAction($action_id, $update_conversion_action_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->updateConversionAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **action_id** | **string**| Google conversion action id | |
| **update_conversion_action_request** | [**\Zernio\Model\UpdateConversionActionRequest**](../Model/UpdateConversionActionRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateConversionAction200Response**](../Model/UpdateConversionAction200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateConversionDestination()`

```php
updateConversionDestination($account_id, $destination_id, $update_conversion_destination_request): \Zernio\Model\GetConversionDestination200Response
```

Update a conversion destination

Changes a LinkedIn conversion rule's name, value, attribution windows, or turns it on or off.  Partial-update a conversion rule. LinkedIn-only today. Whitelisted fields: `name`, `enabled`, attribution windows, `valueType`, `value`, `attributionType`. The rule's `type` and parent ad account are intentionally not exposed for update. Recreate the rule if those need to change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$destination_id = 'destination_id_example'; // string
$update_conversion_destination_request = new \Zernio\Model\UpdateConversionDestinationRequest(); // \Zernio\Model\UpdateConversionDestinationRequest

try {
    $result = $apiInstance->updateConversionDestination($account_id, $destination_id, $update_conversion_destination_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->updateConversionDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **destination_id** | **string**|  | |
| **update_conversion_destination_request** | [**\Zernio\Model\UpdateConversionDestinationRequest**](../Model/UpdateConversionDestinationRequest.md)|  | |

### Return type

[**\Zernio\Model\GetConversionDestination200Response**](../Model/GetConversionDestination200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomConversionGoal()`

```php
updateCustomConversionGoal($goal_id, $update_custom_conversion_goal_request): \Zernio\Model\UpdateCustomConversionGoal200Response
```

Update a custom conversion goal

Renames a Google Ads custom conversion goal or replaces the conversion actions in it.  Returns the re-read goal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$goal_id = 'goal_id_example'; // string | Google custom conversion goal id
$update_custom_conversion_goal_request = new \Zernio\Model\UpdateCustomConversionGoalRequest(); // \Zernio\Model\UpdateCustomConversionGoalRequest

try {
    $result = $apiInstance->updateCustomConversionGoal($goal_id, $update_custom_conversion_goal_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->updateCustomConversionGoal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **goal_id** | **string**| Google custom conversion goal id | |
| **update_custom_conversion_goal_request** | [**\Zernio\Model\UpdateCustomConversionGoalRequest**](../Model/UpdateCustomConversionGoalRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateCustomConversionGoal200Response**](../Model/UpdateCustomConversionGoal200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
