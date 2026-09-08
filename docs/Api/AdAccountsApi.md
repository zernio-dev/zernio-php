# Zernio\AdAccountsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAccountCallouts()**](AdAccountsApi.md#addAccountCallouts) | **POST** /v1/ads/accounts/callouts | Add account-level callout extensions |
| [**createCustomConversion()**](AdAccountsApi.md#createCustomConversion) | **POST** /v1/accounts/{accountId}/custom-conversions | Create or reuse a custom conversion |
| [**createHighDemandPeriod()**](AdAccountsApi.md#createHighDemandPeriod) | **POST** /v1/ads/high-demand-periods | Schedule a budget increase |
| [**createValueRuleSet()**](AdAccountsApi.md#createValueRuleSet) | **POST** /v1/ads/value-rule-sets | Create a value rule set |
| [**deleteValueRuleSet()**](AdAccountsApi.md#deleteValueRuleSet) | **DELETE** /v1/ads/value-rule-sets/{valueRuleSetId} | Delete a value rule set |
| [**getAdAccountFinance()**](AdAccountsApi.md#getAdAccountFinance) | **GET** /v1/ads/accounts/finance | Ad account finances |
| [**getAdComments()**](AdAccountsApi.md#getAdComments) | **GET** /v1/ads/{adId}/comments | List comments on an ad |
| [**getAdsActivityLog()**](AdAccountsApi.md#getAdsActivityLog) | **GET** /v1/ads/activity | Ad account change / audit log |
| [**getDsaDefaults()**](AdAccountsApi.md#getDsaDefaults) | **GET** /v1/ads/dsa-defaults | Get ad account DSA defaults |
| [**getDsaRecommendations()**](AdAccountsApi.md#getDsaRecommendations) | **GET** /v1/ads/dsa-recommendations | List DSA beneficiary/payor suggestions |
| [**getValueRuleSet()**](AdAccountsApi.md#getValueRuleSet) | **GET** /v1/ads/value-rule-sets/{valueRuleSetId} | Read a value rule set |
| [**listAccountCallouts()**](AdAccountsApi.md#listAccountCallouts) | **GET** /v1/ads/accounts/callouts | List account-level callout extensions |
| [**listAdAccounts()**](AdAccountsApi.md#listAdAccounts) | **GET** /v1/ads/accounts | List ad accounts |
| [**listAdLabels()**](AdAccountsApi.md#listAdLabels) | **GET** /v1/ads/labels | Ad labels |
| [**listAdStudies()**](AdAccountsApi.md#listAdStudies) | **GET** /v1/ads/studies | A/B tests and lift studies |
| [**listAdsBusinessCenters()**](AdAccountsApi.md#listAdsBusinessCenters) | **GET** /v1/ads/business-centers | List TikTok Business Centers |
| [**listCustomConversions()**](AdAccountsApi.md#listCustomConversions) | **GET** /v1/accounts/{accountId}/custom-conversions | List custom conversions |
| [**listHighDemandPeriods()**](AdAccountsApi.md#listHighDemandPeriods) | **GET** /v1/ads/high-demand-periods | High demand periods / budget schedules |
| [**listMetaBusinesses()**](AdAccountsApi.md#listMetaBusinesses) | **GET** /v1/ads/businesses | Businesses list |
| [**listValueRuleSets()**](AdAccountsApi.md#listValueRuleSets) | **GET** /v1/ads/value-rule-sets | List value rule sets |
| [**removeAccountCallout()**](AdAccountsApi.md#removeAccountCallout) | **DELETE** /v1/ads/accounts/callouts | Remove an account-level callout extension |
| [**updateAdAccount()**](AdAccountsApi.md#updateAdAccount) | **PATCH** /v1/ads/accounts | Update ad account settings |
| [**updateValueRuleSet()**](AdAccountsApi.md#updateValueRuleSet) | **PUT** /v1/ads/value-rule-sets/{valueRuleSetId} | Replace a value rule set |


## `addAccountCallouts()`

```php
addAccountCallouts($add_account_callouts_request): \Zernio\Model\AddAccountCallouts201Response
```

Add account-level callout extensions

Creates one asset plus one `customerAsset` link (field type CALLOUT) per callout text, in a single mutate. Google only; every other platform returns 501.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_account_callouts_request = new \Zernio\Model\AddAccountCalloutsRequest(); // \Zernio\Model\AddAccountCalloutsRequest

try {
    $result = $apiInstance->addAccountCallouts($add_account_callouts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->addAccountCallouts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_account_callouts_request** | [**\Zernio\Model\AddAccountCalloutsRequest**](../Model/AddAccountCalloutsRequest.md)|  | |

### Return type

[**\Zernio\Model\AddAccountCallouts201Response**](../Model/AddAccountCallouts201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCustomConversion()`

```php
createCustomConversion($account_id, $create_custom_conversion_request): \Zernio\Model\CustomConversionResult
```

Create or reuse a custom conversion

Provision the Meta custom conversion an ads flow optimises toward, and hand back the `customConversionId` for `promotedObject.customConversionId` on POST /v1/ads/create. Removes the manual \"create it in Ads Manager first\" step.  **Reuse is ours, not Meta's.** Meta's create is not idempotent, so a retried request would otherwise mint a duplicate carrying none of the original's optimisation history. A non-archived conversion with the same `name` on the same `pixelId` is returned instead of created, with `reused: true` and a 200 rather than a 201.  `rule` is forwarded verbatim in Meta's own grammar (e.g. `{\"url\": {\"i_contains\": \"thank-you\"}}`); Meta validates it and rejects a malformed one with \"A conversion rule is required at creation time\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Meta ads SocialAccount id.
$create_custom_conversion_request = new \Zernio\Model\CreateCustomConversionRequest(); // \Zernio\Model\CreateCustomConversionRequest

try {
    $result = $apiInstance->createCustomConversion($account_id, $create_custom_conversion_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->createCustomConversion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Meta ads SocialAccount id. | |
| **create_custom_conversion_request** | [**\Zernio\Model\CreateCustomConversionRequest**](../Model/CreateCustomConversionRequest.md)|  | |

### Return type

[**\Zernio\Model\CustomConversionResult**](../Model/CustomConversionResult.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createHighDemandPeriod()`

```php
createHighDemandPeriod($create_high_demand_period_request): \Zernio\Model\CreateHighDemandPeriod201Response
```

Schedule a budget increase

Pre-schedule a temporary budget increase (Black Friday, a launch, a sale) instead of editing the budget by hand on the day. Same target rule as the GET: exactly one of `campaignId` / `adSetId`.  Two Meta constraints worth knowing before you call it. `timeStart` / `timeEnd` must fall on a 15-minute boundary, and a campaign cannot mix `ABSOLUTE` and `MULTIPLIER` across its schedules; the second type is rejected with \"Can't mix your budget scaling selection\". Window rules (must sit inside the campaign's run dates, minimum lead time, no overlap) are Meta's and its message is forwarded verbatim.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_high_demand_period_request = new \Zernio\Model\CreateHighDemandPeriodRequest(); // \Zernio\Model\CreateHighDemandPeriodRequest

try {
    $result = $apiInstance->createHighDemandPeriod($create_high_demand_period_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->createHighDemandPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_high_demand_period_request** | [**\Zernio\Model\CreateHighDemandPeriodRequest**](../Model/CreateHighDemandPeriodRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateHighDemandPeriod201Response**](../Model/CreateHighDemandPeriod201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createValueRuleSet()`

```php
createValueRuleSet($create_value_rule_set_request): \Zernio\Model\CreateValueRuleSet201Response
```

Create a value rule set

Creates a value rule set on the ad account (Meta's `POST /act_X/value_rule_set`). Attach the returned id to an ad set with `valueRuleSetId` on `POST /v1/ads/create` or `PUT /v1/ads/ad-sets/{adSetId}`.  **Rule order is semantic**: rules are evaluated in array order and only the first matching rule adjusts the bid for an overlapping audience.  `adjustValue` is an unsigned magnitude in percent; the direction lives in `adjustSign`. `INCREASE` accepts 1-1000, `DECREASE` accepts 1-90. There is no signed field and 0 is out of range.  `criteriaValueTypes` is positionally paired with `criteriaValues` (same length, same order). Every type is the literal `\"NONE\"` except on `LOCATION`, which uses `LOCATION_COUNTRY` / `LOCATION_REGION` / `LOCATION_CITY` / `LOCATION_COMSCORE_MARKET` and may mix them within one criterion. Location values are Targeting-Search keys: a two-letter country code for `LOCATION_COUNTRY`, a numeric key for the rest.  `LOCATION_DMA` was replaced by `LOCATION_COMSCORE_MARKET` on 2026-06-22 and rules using DMAs are no longer active, so this API rejects it.  `AUDIENCE_LABEL` values (e.g. `HIGH_VALUE`) are applied to a Custom Audience in Ads Manager. There is no API to provision them, so label strings are passed through unvalidated and a typo produces a rule that never fires.  Ads Manager turns a rule set read-only (this API stays editable) when a rule uses more than 2 criteria, a custom age range, or the placements `FB_MARKETPLACE`, `FB_SEARCH`, `FB_VIDEO` or `IG_EXPLORE`.  Limits: 6 rule sets per ad account, 10 rules per set, 4 criteria per rule. The per-account cap is enforced by Meta, not here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_value_rule_set_request = new \Zernio\Model\CreateValueRuleSetRequest(); // \Zernio\Model\CreateValueRuleSetRequest

try {
    $result = $apiInstance->createValueRuleSet($create_value_rule_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->createValueRuleSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_value_rule_set_request** | [**\Zernio\Model\CreateValueRuleSetRequest**](../Model/CreateValueRuleSetRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateValueRuleSet201Response**](../Model/CreateValueRuleSet201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteValueRuleSet()`

```php
deleteValueRuleSet($value_rule_set_id, $account_id): \Zernio\Model\DeleteValueRuleSet200Response
```

Delete a value rule set

Deletes the rule set (Meta's `POST /{value-rule-set-id}/delete_rule_set`, a custom action edge rather than an HTTP DELETE on its side). Ad sets pointing at it are not modified here; detach them first with `valueRulesApplied: false` on `PUT /v1/ads/ad-sets/{adSetId}`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value_rule_set_id = 'value_rule_set_id_example'; // string | Platform value rule set id.
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token.

try {
    $result = $apiInstance->deleteValueRuleSet($value_rule_set_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->deleteValueRuleSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **value_rule_set_id** | **string**| Platform value rule set id. | |
| **account_id** | **string**| Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token. | |

### Return type

[**\Zernio\Model\DeleteValueRuleSet200Response**](../Model/DeleteValueRuleSet200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdAccountFinance()`

```php
getAdAccountFinance($account_id, $ad_account_id): \Zernio\Model\GetAdAccountFinance200Response
```

Ad account finances

Finances of one Meta ad account: prepaid `balance`, lifetime `amountSpent`, account `spendCap` (null = no cap) and the `fundingSource`. Money values are converted from Meta's minor units to whole units of `currency`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token.
$ad_account_id = 'ad_account_id_example'; // string | Meta ad account id (act_<n>).

try {
    $result = $apiInstance->getAdAccountFinance($account_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->getAdAccountFinance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token. | |
| **ad_account_id** | **string**| Meta ad account id (act_&lt;n&gt;). | |

### Return type

[**\Zernio\Model\GetAdAccountFinance200Response**](../Model/GetAdAccountFinance200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdComments()`

```php
getAdComments($ad_id, $placement, $limit, $cursor): \Zernio\Model\GetAdComments200Response
```

List comments on an ad

Returns comments on an ad's underlying creative post. Useful for moderating or analyzing engagement on dark posts (ad creatives that never went live organically), which the regular GET /v1/inbox/comments/{postId} endpoint cannot serve because dark posts are not in Zernio's post database.  An ad that runs on both Facebook feed and Instagram feed has two separate underlying posts with separate comment threads (the creative's effective_object_story_id and effective_instagram_media_id). Use the `placement` query param to pick one; with no param the Instagram side is returned when it exists, otherwise Facebook. The identifiers are read from the ad record (persisted during sync) with a Marketing-API fallback for ads that predate the field.  For Instagram-placed comments, the Instagram account that runs the ad must be connected to Zernio, because those comments are read through that account's token. If no connected Instagram account on the profile can read the ad's media, the call returns ads_connection_required (the Facebook side, if any, is still readable via ?placement=facebook).  Meta-only for now. Other ad platforms (TikTok, LinkedIn, Pinterest, Google, X) are not wired to this endpoint and return feature_not_available.  Requires the Ads add-on. Response shape matches GET /v1/inbox/comments/{postId}.  The `{adId}` path segment accepts any identifier dialect Zernio indexes for the ad: Zernio internal `_id` (24-char hex), Meta's numeric `platformAdId` (the value shipped in `comment.received` webhooks as `comment.ad.id`), or the creative's `effective_object_story_id` / `effective_instagram_media_id`. Caller doesn't need a translation step.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string | Internal Zernio ad ID (ObjectId).
$placement = 'placement_example'; // string | Which side of the ad to return comments for. Omit to default to the Instagram side when present, else Facebook. Returns ad_not_commentable if the ad has no such placement.
$limit = 25; // int
$cursor = 'cursor_example'; // string | Pagination cursor from a previous response.

try {
    $result = $apiInstance->getAdComments($ad_id, $placement, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->getAdComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Internal Zernio ad ID (ObjectId). | |
| **placement** | **string**| Which side of the ad to return comments for. Omit to default to the Instagram side when present, else Facebook. Returns ad_not_commentable if the ad has no such placement. | [optional] |
| **limit** | **int**|  | [optional] [default to 25] |
| **cursor** | **string**| Pagination cursor from a previous response. | [optional] |

### Return type

[**\Zernio\Model\GetAdComments200Response**](../Model/GetAdComments200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdsActivityLog()`

```php
getAdsActivityLog($account_id, $ad_account_id, $since, $until, $object_id, $limit, $after): \Zernio\Model\GetAdsActivityLog200Response
```

Ad account change / audit log

Account-level audit log from Meta's `/act_X/activities`: who changed what and when (creates, edits, status flips, budget changes...) with Meta's translated event names and the structured before/after in `extra_data`. Rows are returned verbatim. Meta has no server-side per-object filter on this edge, so `objectId` filters the returned page client-side (combine with paging to walk history for one campaign/ad set/ad).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token.
$ad_account_id = 'ad_account_id_example'; // string | Meta ad account id (act_<n>).
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of range (YYYY-MM-DD).
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of range (YYYY-MM-DD).
$object_id = 'object_id_example'; // string | Client-side filter to one Meta object id (campaign, ad set or ad).
$limit = 50; // int | Rows per page
$after = 'after_example'; // string | Cursor from paging.after of the previous page.

try {
    $result = $apiInstance->getAdsActivityLog($account_id, $ad_account_id, $since, $until, $object_id, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->getAdsActivityLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token. | |
| **ad_account_id** | **string**| Meta ad account id (act_&lt;n&gt;). | |
| **since** | **\DateTime**| Start of range (YYYY-MM-DD). | [optional] |
| **until** | **\DateTime**| End of range (YYYY-MM-DD). | [optional] |
| **object_id** | **string**| Client-side filter to one Meta object id (campaign, ad set or ad). | [optional] |
| **limit** | **int**| Rows per page | [optional] [default to 50] |
| **after** | **string**| Cursor from paging.after of the previous page. | [optional] |

### Return type

[**\Zernio\Model\GetAdsActivityLog200Response**](../Model/GetAdsActivityLog200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDsaDefaults()`

```php
getDsaDefaults($account_id, $ad_account_id): \Zernio\Model\UpdateAdAccount200Response
```

Get ad account DSA defaults

Returns the default DSA beneficiary and payor currently set on a Meta ad account, whether they were set via `PATCH /v1/ads/accounts` or in Meta Ads Manager. Fields are omitted when no default is configured. Meta accounts only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID (metaads, or a facebook/instagram posting account)
$ad_account_id = 'ad_account_id_example'; // string | Meta ad account ID (act_...)

try {
    $result = $apiInstance->getDsaDefaults($account_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->getDsaDefaults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account ID (metaads, or a facebook/instagram posting account) | |
| **ad_account_id** | **string**| Meta ad account ID (act_...) | |

### Return type

[**\Zernio\Model\UpdateAdAccount200Response**](../Model/UpdateAdAccount200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDsaRecommendations()`

```php
getDsaRecommendations($account_id, $ad_account_id): \Zernio\Model\GetDsaRecommendations200Response
```

List DSA beneficiary/payor suggestions

Returns Meta's suggested beneficiary/payor names for an ad account, derived by Meta from the account's recent activity. Useful for prefilling `dsaBeneficiary`/`dsaPayor` inputs, or the defaults sent to `PATCH /v1/ads/accounts`, in your own UI.  Meta returns a single flat list. Entries are not labeled as beneficiary or payor, and since these are legal disclosures Zernio never applies them automatically: let your user pick the right entity. The list may be empty for accounts with little activity. Meta accounts only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID (metaads, or a facebook/instagram posting account)
$ad_account_id = 'ad_account_id_example'; // string | Meta ad account ID (act_...)

try {
    $result = $apiInstance->getDsaRecommendations($account_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->getDsaRecommendations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account ID (metaads, or a facebook/instagram posting account) | |
| **ad_account_id** | **string**| Meta ad account ID (act_...) | |

### Return type

[**\Zernio\Model\GetDsaRecommendations200Response**](../Model/GetDsaRecommendations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getValueRuleSet()`

```php
getValueRuleSet($value_rule_set_id, $account_id): \Zernio\Model\GetValueRuleSet200Response
```

Read a value rule set

Reads one value rule set including every nested rule id and criterion id. This is step one of any edit: `PUT` is a full replace, so you need the ids before you can keep the objects you are not changing.  Meta's own read returns `GENDER` values lowercase (`\"male\"`) while writes require `\"MALE\"`. Values are passed through untouched, so never case-compare a stored rule against a fetched one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value_rule_set_id = 'value_rule_set_id_example'; // string | Platform value rule set id.
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token.

try {
    $result = $apiInstance->getValueRuleSet($value_rule_set_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->getValueRuleSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **value_rule_set_id** | **string**| Platform value rule set id. | |
| **account_id** | **string**| Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token. | |

### Return type

[**\Zernio\Model\GetValueRuleSet200Response**](../Model/GetValueRuleSet200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccountCallouts()`

```php
listAccountCallouts($account_id, $customer_id): \Zernio\Model\ListAccountCallouts200Response
```

List account-level callout extensions

Google Ads compliance row C.75: callout assets linked at the CUSTOMER level via `customer_asset` (not a campaign or ad group), so they serve fleet-wide across the account. Google only; every other platform returns 501. Cached for the quota window (10 minutes fresh, up to 7 days last-good), and gated by the shared Google Ads operations budget on a cache miss. The response carries `cachedAt` and `stale`, set when a quota-exhausted call falls back to the last-good copy instead of a live read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Google ads SocialAccount id.
$customer_id = 'customer_id_example'; // string | Numeric Google Ads customer id (no dashes). Defaults to the account's connected customer.

try {
    $result = $apiInstance->listAccountCallouts($account_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->listAccountCallouts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Google ads SocialAccount id. | |
| **customer_id** | **string**| Numeric Google Ads customer id (no dashes). Defaults to the account&#39;s connected customer. | [optional] |

### Return type

[**\Zernio\Model\ListAccountCallouts200Response**](../Model/ListAccountCallouts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdAccounts()`

```php
listAdAccounts($account_id, $ad_account_id, $limit): \Zernio\Model\ListAdAccounts200Response
```

List ad accounts

Returns the platform ad accounts available for the given account (e.g. Meta ad accounts, TikTok advertiser IDs, Google Ads customer IDs).  For TikTok agencies: enumerates every advertiser under every Business Center the token can read (paginated server-side), then chunks the lookup against TikTok's `/advertiser/info/` endpoint (which has a per-call cap of ≤100 IDs). Solo advertisers without a BC fall back to the OAuth-time `advertiser_ids` list. Cached for 1h on the SocialAccount; lazy-refreshed on first call after expiry.  For Google Ads: responds `429` when Google's API quota is temporarily exhausted (instead of an empty list). Retry after a delay.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$ad_account_id = 'ad_account_id_example'; // string | Filter response to a single platform ad account ID (e.g. `act_123` for Meta, advertiser_id for TikTok). Returns at most one item.
$limit = 56; // int | Clamp the returned `accounts[]` length. Useful for typeahead pickers on agency tokens with hundreds of advertisers.

try {
    $result = $apiInstance->listAdAccounts($account_id, $ad_account_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->listAdAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account ID | |
| **ad_account_id** | **string**| Filter response to a single platform ad account ID (e.g. &#x60;act_123&#x60; for Meta, advertiser_id for TikTok). Returns at most one item. | [optional] |
| **limit** | **int**| Clamp the returned &#x60;accounts[]&#x60; length. Useful for typeahead pickers on agency tokens with hundreds of advertisers. | [optional] |

### Return type

[**\Zernio\Model\ListAdAccounts200Response**](../Model/ListAdAccounts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdLabels()`

```php
listAdLabels($account_id, $ad_account_id, $limit, $after): \Zernio\Model\ListAdLabels200Response
```

Ad labels

Lists the ad account's organizational labels (Meta's `/act_X/adlabels`), rows returned verbatim (id, name, created/updated time).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token.
$ad_account_id = 'ad_account_id_example'; // string | Meta ad account id (act_<n>).
$limit = 25; // int | Rows per page
$after = 'after_example'; // string | Cursor from paging.after of the previous page.

try {
    $result = $apiInstance->listAdLabels($account_id, $ad_account_id, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->listAdLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token. | |
| **ad_account_id** | **string**| Meta ad account id (act_&lt;n&gt;). | |
| **limit** | **int**| Rows per page | [optional] [default to 25] |
| **after** | **string**| Cursor from paging.after of the previous page. | [optional] |

### Return type

[**\Zernio\Model\ListAdLabels200Response**](../Model/ListAdLabels200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdStudies()`

```php
listAdStudies($account_id, $ad_account_id, $fields, $limit, $after): \Zernio\Model\ListAdStudies200Response
```

A/B tests and lift studies

Lists the ad account's A/B tests and lift studies (Meta's `/act_X/ad_studies`), rows returned verbatim. The default projection covers id, name, type, timing and cells with split percentages; `fields` is a raw-passthrough override.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token.
$ad_account_id = 'ad_account_id_example'; // string | Meta ad account id (act_<n>).
$fields = 'fields_example'; // string | Comma-separated Graph field override (supports nested {} projections).
$limit = 25; // int | Rows per page
$after = 'after_example'; // string | Cursor from paging.after of the previous page.

try {
    $result = $apiInstance->listAdStudies($account_id, $ad_account_id, $fields, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->listAdStudies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token. | |
| **ad_account_id** | **string**| Meta ad account id (act_&lt;n&gt;). | |
| **fields** | **string**| Comma-separated Graph field override (supports nested {} projections). | [optional] |
| **limit** | **int**| Rows per page | [optional] [default to 25] |
| **after** | **string**| Cursor from paging.after of the previous page. | [optional] |

### Return type

[**\Zernio\Model\ListAdStudies200Response**](../Model/ListAdStudies200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdsBusinessCenters()`

```php
listAdsBusinessCenters($account_id): \Zernio\Model\ListAdsBusinessCenters200Response
```

List TikTok Business Centers

Returns the TikTok Business Centers (BCs) the connected `tiktokads` account can read. Each BC reports its advertiser count so callers can build agency-style pickers without re-walking `/v1/ads/accounts` per BC.  TikTok-only. Solo advertisers (non-agency tokens) return an empty array.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the `tiktokads` (or parent `tiktok` posting) SocialAccount

try {
    $result = $apiInstance->listAdsBusinessCenters($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->listAdsBusinessCenters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| ID of the &#x60;tiktokads&#x60; (or parent &#x60;tiktok&#x60; posting) SocialAccount | |

### Return type

[**\Zernio\Model\ListAdsBusinessCenters200Response**](../Model/ListAdsBusinessCenters200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomConversions()`

```php
listCustomConversions($account_id, $ad_account_id): \Zernio\Model\ListCustomConversions200Response
```

List custom conversions

The ad account's Meta custom conversions, including archived ones (`isArchived`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Meta ads SocialAccount id.
$ad_account_id = 'ad_account_id_example'; // string | Meta ad account id (act_<n>).

try {
    $result = $apiInstance->listCustomConversions($account_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->listCustomConversions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Meta ads SocialAccount id. | |
| **ad_account_id** | **string**| Meta ad account id (act_&lt;n&gt;). | |

### Return type

[**\Zernio\Model\ListCustomConversions200Response**](../Model/ListCustomConversions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHighDemandPeriods()`

```php
listHighDemandPeriods($account_id, $campaign_id, $ad_set_id, $limit, $after): \Zernio\Model\ListHighDemandPeriods200Response
```

High demand periods / budget schedules

Scheduled budget increases (Meta's budget-scheduling API). The Graph edge lives on the campaign and ad-set nodes only, so exactly one of `campaignId` / `adSetId` (platform ids) is required. Rows returned verbatim (budget_value, budget_value_type, time window, recurrence).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token.
$campaign_id = 'campaign_id_example'; // string | Platform campaign id. Exactly one of campaignId / adSetId.
$ad_set_id = 'ad_set_id_example'; // string | Platform ad set id. Exactly one of campaignId / adSetId.
$limit = 25; // int | Rows per page
$after = 'after_example'; // string | Cursor from paging.after of the previous page.

try {
    $result = $apiInstance->listHighDemandPeriods($account_id, $campaign_id, $ad_set_id, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->listHighDemandPeriods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token. | |
| **campaign_id** | **string**| Platform campaign id. Exactly one of campaignId / adSetId. | [optional] |
| **ad_set_id** | **string**| Platform ad set id. Exactly one of campaignId / adSetId. | [optional] |
| **limit** | **int**| Rows per page | [optional] [default to 25] |
| **after** | **string**| Cursor from paging.after of the previous page. | [optional] |

### Return type

[**\Zernio\Model\ListHighDemandPeriods200Response**](../Model/ListHighDemandPeriods200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMetaBusinesses()`

```php
listMetaBusinesses($account_id, $limit, $after): \Zernio\Model\ListMetaBusinesses200Response
```

Businesses list

Business Manager portfolios the connected Meta user belongs to (Meta's `/me/businesses`), rows returned verbatim (id, name, verification_status, created_time). Token-scoped, so no `adAccountId` is needed. For TikTok Business Centers use `GET /v1/ads/business-centers`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token.
$limit = 25; // int | Rows per page
$after = 'after_example'; // string | Cursor from paging.after of the previous page.

try {
    $result = $apiInstance->listMetaBusinesses($account_id, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->listMetaBusinesses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token. | |
| **limit** | **int**| Rows per page | [optional] [default to 25] |
| **after** | **string**| Cursor from paging.after of the previous page. | [optional] |

### Return type

[**\Zernio\Model\ListMetaBusinesses200Response**](../Model/ListMetaBusinesses200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listValueRuleSets()`

```php
listValueRuleSets($account_id, $ad_account_id, $limit, $after): \Zernio\Model\ListValueRuleSets200Response
```

List value rule sets

Lists the ad account's value rule sets (Meta's `/act_X/value_rule_set`). A value rule set adjusts the auction bid up or down for audience segments you value differently; attach one to an ad set with `valueRuleSetId` on `POST /v1/ads/create` or `PUT /v1/ads/ad-sets/{adSetId}`.  Rows are returned in the same camelCase shape the `PUT` body takes, ids included, so a set round-trips 1:1: **the update is a full replace, not a patch**, so you GET, mutate and send the whole thing back.  Limits: 6 rule sets per ad account, 10 rules per set, 4 criteria per rule.  **Rule order is semantic.** Rules are evaluated in array order and only the FIRST matching rule adjusts the bid for an overlapping audience. The order you send is the order that is stored and returned.  Eligibility: value rule sets apply only to ad sets on the `LOWEST_COST_WITHOUT_CAP` (auto-bid) or `COST_CAP` bid strategies. Meta rejects the rest server-side.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token.
$ad_account_id = 'ad_account_id_example'; // string | Meta ad account id (act_<n>).
$limit = 25; // int | Rows per page
$after = 'after_example'; // string | Cursor from paging.after of the previous page. Meta does not document paging on this edge; `after` comes back null when it omits cursors.

try {
    $result = $apiInstance->listValueRuleSets($account_id, $ad_account_id, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->listValueRuleSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token. | |
| **ad_account_id** | **string**| Meta ad account id (act_&lt;n&gt;). | |
| **limit** | **int**| Rows per page | [optional] [default to 25] |
| **after** | **string**| Cursor from paging.after of the previous page. Meta does not document paging on this edge; &#x60;after&#x60; comes back null when it omits cursors. | [optional] |

### Return type

[**\Zernio\Model\ListValueRuleSets200Response**](../Model/ListValueRuleSets200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeAccountCallout()`

```php
removeAccountCallout($remove_account_callout_request): \Zernio\Model\RemoveAccountCallout200Response
```

Remove an account-level callout extension

Removes the `customerAsset` link (`customers/{cid}/customerAssets/{assetId}~CALLOUT`). Google only; every other platform returns 501.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$remove_account_callout_request = new \Zernio\Model\RemoveAccountCalloutRequest(); // \Zernio\Model\RemoveAccountCalloutRequest

try {
    $result = $apiInstance->removeAccountCallout($remove_account_callout_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->removeAccountCallout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **remove_account_callout_request** | [**\Zernio\Model\RemoveAccountCalloutRequest**](../Model/RemoveAccountCalloutRequest.md)|  | |

### Return type

[**\Zernio\Model\RemoveAccountCallout200Response**](../Model/RemoveAccountCallout200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdAccount()`

```php
updateAdAccount($update_ad_account_request): \Zernio\Model\UpdateAdAccount200Response
```

Update ad account settings

Sets the default DSA beneficiary and payor on a Meta ad account (EU DSA, Article 26). Set them once and every EU-targeted call to `/v1/ads/create`, `/v1/ads/boost` and `/v1/ads/ctwa` on that ad account can omit `dsaBeneficiary`/`dsaPayor`: Meta applies the defaults automatically.  The values are written to the ad account on Meta, the same setting Ads Manager edits. Nothing is stored in Zernio, and defaults already set in Ads Manager work identically. Zernio never guesses these values for you. Beneficiary and payor are legal disclosures shown to EU users, so you must provide the entity names explicitly. Use `GET /v1/ads/dsa-recommendations` to offer suggestions in your UI.  If `defaultDsaPayor` is omitted, the beneficiary is also set as the payor, which covers the common case where the same entity benefits from and pays for the ads. Read the current values back with `GET /v1/ads/dsa-defaults`.  Currently supported for Meta accounts only; other platforms return 400.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_ad_account_request = new \Zernio\Model\UpdateAdAccountRequest(); // \Zernio\Model\UpdateAdAccountRequest

try {
    $result = $apiInstance->updateAdAccount($update_ad_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->updateAdAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_ad_account_request** | [**\Zernio\Model\UpdateAdAccountRequest**](../Model/UpdateAdAccountRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateAdAccount200Response**](../Model/UpdateAdAccount200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateValueRuleSet()`

```php
updateValueRuleSet($value_rule_set_id, $update_value_rule_set_request): \Zernio\Model\UpdateValueRuleSet200Response
```

Replace a value rule set

**THIS IS A FULL REPLACE, NOT A PATCH.** Meta's update is declarative: the body you send becomes the rule set.  - `GET /v1/ads/value-rule-sets/{valueRuleSetId}` FIRST. - Keep a rule or criterion by echoing its `id`. - Create one by including the object WITHOUT an `id`. - Delete one by OMITTING it from the array. There is no warning and no undo.  `name` and `rules` are both required for exactly this reason: a partial body would silently destroy every rule left out.  **Rule order is semantic**: the array order you send is the evaluation order, and only the first matching rule adjusts the bid for an overlapping audience.  Existing rule sets created elsewhere may contain `LOCATION_DMA` criteria. Those went inert on 2026-06-22 and are rejected here; migrate them to `LOCATION_COMSCORE_MARKET`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value_rule_set_id = 'value_rule_set_id_example'; // string | Platform value rule set id.
$update_value_rule_set_request = new \Zernio\Model\UpdateValueRuleSetRequest(); // \Zernio\Model\UpdateValueRuleSetRequest

try {
    $result = $apiInstance->updateValueRuleSet($value_rule_set_id, $update_value_rule_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->updateValueRuleSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **value_rule_set_id** | **string**| Platform value rule set id. | |
| **update_value_rule_set_request** | [**\Zernio\Model\UpdateValueRuleSetRequest**](../Model/UpdateValueRuleSetRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateValueRuleSet200Response**](../Model/UpdateValueRuleSet200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
