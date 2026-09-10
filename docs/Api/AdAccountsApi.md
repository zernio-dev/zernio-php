# Zernio\AdAccountsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAccountCallouts()**](AdAccountsApi.md#addAccountCallouts) | **POST** /v1/ads/accounts/callouts | Add account callouts |
| [**addAccountSitelinks()**](AdAccountsApi.md#addAccountSitelinks) | **POST** /v1/ads/accounts/sitelinks | Add account sitelinks |
| [**addAccountStructuredSnippets()**](AdAccountsApi.md#addAccountStructuredSnippets) | **POST** /v1/ads/accounts/structured-snippets | Add account snippets |
| [**createAdAccount()**](AdAccountsApi.md#createAdAccount) | **POST** /v1/ads/accounts | Create Meta ad account |
| [**createAdNegativeKeywordList()**](AdAccountsApi.md#createAdNegativeKeywordList) | **POST** /v1/ads/accounts/negative-keyword-lists | Create a negative keyword list |
| [**createCustomConversion()**](AdAccountsApi.md#createCustomConversion) | **POST** /v1/accounts/{accountId}/custom-conversions | Create custom conversion |
| [**createHighDemandPeriod()**](AdAccountsApi.md#createHighDemandPeriod) | **POST** /v1/ads/high-demand-periods | Schedule a budget increase |
| [**createValueRuleSet()**](AdAccountsApi.md#createValueRuleSet) | **POST** /v1/ads/value-rule-sets | Create a value rule set |
| [**deleteAdComment()**](AdAccountsApi.md#deleteAdComment) | **DELETE** /v1/ads/{adId}/comments/{commentId} | Delete an ad comment |
| [**deleteAdNegativeKeywordList()**](AdAccountsApi.md#deleteAdNegativeKeywordList) | **DELETE** /v1/ads/accounts/negative-keyword-lists/{listId} | Delete a negative keyword list |
| [**deleteValueRuleSet()**](AdAccountsApi.md#deleteValueRuleSet) | **DELETE** /v1/ads/value-rule-sets/{valueRuleSetId} | Delete a value rule set |
| [**getAdAccountFinance()**](AdAccountsApi.md#getAdAccountFinance) | **GET** /v1/ads/accounts/finance | Ad account finances |
| [**getAdComments()**](AdAccountsApi.md#getAdComments) | **GET** /v1/ads/{adId}/comments | List comments on an ad |
| [**getAdNegativeKeywordList()**](AdAccountsApi.md#getAdNegativeKeywordList) | **GET** /v1/ads/accounts/negative-keyword-lists/{listId} | Get a negative keyword list |
| [**getAdsActivityLog()**](AdAccountsApi.md#getAdsActivityLog) | **GET** /v1/ads/activity | Ad account change / audit log |
| [**getDsaDefaults()**](AdAccountsApi.md#getDsaDefaults) | **GET** /v1/ads/dsa-defaults | Get ad account DSA defaults |
| [**getDsaRecommendations()**](AdAccountsApi.md#getDsaRecommendations) | **GET** /v1/ads/dsa-recommendations | Get DSA recommendations |
| [**getIosFourteenCampaignLimits()**](AdAccountsApi.md#getIosFourteenCampaignLimits) | **GET** /v1/ads/ios-fourteen-campaign-limits | Get iOS 14 campaign limits |
| [**getValueRuleSet()**](AdAccountsApi.md#getValueRuleSet) | **GET** /v1/ads/value-rule-sets/{valueRuleSetId} | Read a value rule set |
| [**hideAdComment()**](AdAccountsApi.md#hideAdComment) | **POST** /v1/ads/{adId}/comments/{commentId}/hide | Hide or unhide an ad comment |
| [**listAccountCallouts()**](AdAccountsApi.md#listAccountCallouts) | **GET** /v1/ads/accounts/callouts | List account callouts |
| [**listAccountSitelinks()**](AdAccountsApi.md#listAccountSitelinks) | **GET** /v1/ads/accounts/sitelinks | List account sitelinks |
| [**listAccountStructuredSnippets()**](AdAccountsApi.md#listAccountStructuredSnippets) | **GET** /v1/ads/accounts/structured-snippets | List account snippets |
| [**listAdAccounts()**](AdAccountsApi.md#listAdAccounts) | **GET** /v1/ads/accounts | List ad accounts |
| [**listAdLabels()**](AdAccountsApi.md#listAdLabels) | **GET** /v1/ads/labels | Ad labels |
| [**listAdNegativeKeywordLists()**](AdAccountsApi.md#listAdNegativeKeywordLists) | **GET** /v1/ads/accounts/negative-keyword-lists | List negative keyword lists |
| [**listAdStudies()**](AdAccountsApi.md#listAdStudies) | **GET** /v1/ads/studies | A/B tests and lift studies |
| [**listAdsBusinessCenters()**](AdAccountsApi.md#listAdsBusinessCenters) | **GET** /v1/ads/business-centers | List TikTok Business Centers |
| [**listAdsInstagramAccounts()**](AdAccountsApi.md#listAdsInstagramAccounts) | **GET** /v1/ads/instagram-accounts | List Instagram ad identities |
| [**listAdvertisableApplications()**](AdAccountsApi.md#listAdvertisableApplications) | **GET** /v1/ads/advertisable-applications | List advertisable apps |
| [**listCustomConversions()**](AdAccountsApi.md#listCustomConversions) | **GET** /v1/accounts/{accountId}/custom-conversions | List custom conversions |
| [**listHighDemandPeriods()**](AdAccountsApi.md#listHighDemandPeriods) | **GET** /v1/ads/high-demand-periods | List high-demand periods |
| [**listMetaBusinesses()**](AdAccountsApi.md#listMetaBusinesses) | **GET** /v1/ads/businesses | Businesses list |
| [**listTikTokAdPixels()**](AdAccountsApi.md#listTikTokAdPixels) | **GET** /v1/ads/pixels | List TikTok ad pixels |
| [**listValueRuleSets()**](AdAccountsApi.md#listValueRuleSets) | **GET** /v1/ads/value-rule-sets | List value rule sets |
| [**removeAccountCallout()**](AdAccountsApi.md#removeAccountCallout) | **DELETE** /v1/ads/accounts/callouts | Remove account callout |
| [**removeAccountSitelink()**](AdAccountsApi.md#removeAccountSitelink) | **DELETE** /v1/ads/accounts/sitelinks | Remove account sitelink |
| [**removeAccountStructuredSnippet()**](AdAccountsApi.md#removeAccountStructuredSnippet) | **DELETE** /v1/ads/accounts/structured-snippets | Remove account snippet |
| [**replaceAdNegativeKeywordListKeywords()**](AdAccountsApi.md#replaceAdNegativeKeywordListKeywords) | **PUT** /v1/ads/accounts/negative-keyword-lists/{listId}/keywords | Replace negative list keywords |
| [**replyToAdComment()**](AdAccountsApi.md#replyToAdComment) | **POST** /v1/ads/{adId}/comments/{commentId}/reply | Reply to an ad comment |
| [**updateAccountCallouts()**](AdAccountsApi.md#updateAccountCallouts) | **PUT** /v1/ads/accounts/callouts | Update account callouts |
| [**updateAccountSitelinks()**](AdAccountsApi.md#updateAccountSitelinks) | **PUT** /v1/ads/accounts/sitelinks | Update account sitelinks |
| [**updateAccountStructuredSnippets()**](AdAccountsApi.md#updateAccountStructuredSnippets) | **PUT** /v1/ads/accounts/structured-snippets | Update account snippets |
| [**updateAdAccount()**](AdAccountsApi.md#updateAdAccount) | **PATCH** /v1/ads/accounts | Update ad account settings |
| [**updateAdNegativeKeywordList()**](AdAccountsApi.md#updateAdNegativeKeywordList) | **PUT** /v1/ads/accounts/negative-keyword-lists/{listId} | Rename a negative keyword list |
| [**updateValueRuleSet()**](AdAccountsApi.md#updateValueRuleSet) | **PUT** /v1/ads/value-rule-sets/{valueRuleSetId} | Replace a value rule set |


## `addAccountCallouts()`

```php
addAccountCallouts($add_account_callouts_request): \Zernio\Model\AddAccountCallouts201Response
```

Add account callouts

Creates assets and customer_asset links for this Google customer. Links apply at account level.

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
$add_account_callouts_request = {"accountId":"64b1f0c8a1b2c3d4e5f60718","customerId":"1234567890","callouts":["Fast setup"]}; // \Zernio\Model\AddAccountCalloutsRequest

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

## `addAccountSitelinks()`

```php
addAccountSitelinks($add_account_sitelinks_request): \Zernio\Model\AddAccountSitelinks201Response
```

Add account sitelinks

Creates assets and customer_asset links for this Google customer. Links apply at account level.

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
$add_account_sitelinks_request = {"accountId":"64b1f0c8a1b2c3d4e5f60718","customerId":"1234567890","sitelinks":[{"text":"Pricing","linkUrl":"https://zernio.com/pricing"}]}; // \Zernio\Model\AddAccountSitelinksRequest

try {
    $result = $apiInstance->addAccountSitelinks($add_account_sitelinks_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->addAccountSitelinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_account_sitelinks_request** | [**\Zernio\Model\AddAccountSitelinksRequest**](../Model/AddAccountSitelinksRequest.md)|  | |

### Return type

[**\Zernio\Model\AddAccountSitelinks201Response**](../Model/AddAccountSitelinks201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addAccountStructuredSnippets()`

```php
addAccountStructuredSnippets($add_account_structured_snippets_request): \Zernio\Model\AddAccountStructuredSnippets201Response
```

Add account snippets

Creates assets and customer_asset links for this Google customer. Links apply at account level.

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
$add_account_structured_snippets_request = {"accountId":"64b1f0c8a1b2c3d4e5f60718","customerId":"1234567890","structuredSnippets":[{"header":"Types","values":["Scheduling","Analytics","Messaging"]}]}; // \Zernio\Model\AddAccountStructuredSnippetsRequest

try {
    $result = $apiInstance->addAccountStructuredSnippets($add_account_structured_snippets_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->addAccountStructuredSnippets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_account_structured_snippets_request** | [**\Zernio\Model\AddAccountStructuredSnippetsRequest**](../Model/AddAccountStructuredSnippetsRequest.md)|  | |

### Return type

[**\Zernio\Model\AddAccountStructuredSnippets201Response**](../Model/AddAccountStructuredSnippets201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAdAccount()`

```php
createAdAccount($create_ad_account_request): \Zernio\Model\CreateAdAccount201Response
```

Create Meta ad account

Creates a durable Meta ad account in the end user's own business portfolio using their connected Meta Ads token. Requires an active metaads accountId, Ads access, business_management permission and business admin access. Discover portfolios with GET /v1/ads/businesses. System-user tokens may return an empty businesses list; supply the known business ID in that case.  The self-serve account starts without a payment method. The user must add a payment method in Ads Manager before ads can deliver. Zernio cannot add payment methods. Meta may require business verification and limits how many accounts a business can create. Closing an account does not guarantee more capacity. An ad account cannot truly be deleted, even after closing it and removing it from a business.  timezoneId is Meta's numeric ID, not an IANA timezone name. Select it from https://developers.facebook.com/docs/marketing-api/reference/ad-account/timezone-ids/. For example, 1 is America/Los_Angeles. Meta validates supported currencies and IDs. endAdvertiser, mediaAgency and partner default to NONE for the self-serve flow.  The new account is added atomically to an existing scoped ad-account allowlist. Unrestricted connections stay unrestricted. Reconnecting the same Meta identity preserves this scope unless a caller explicitly replaces it. Discovery is nudged immediately. Use the returned adAccountId with the existing ads endpoints.  This operation is not idempotent and Zernio never automatically retries it. Unknown body fields are rejected. No validateOnly or dry-run option is supported. After a timeout or a 502 with details.creationStatus=unknown, check the business in Ads Manager before attempting another creation. A 201 with connectionUpdated=false means the account exists but needs reconnecting with adAccountIds containing the returned ID and the previous scoped IDs via GET /v1/connect/facebook/ads. Do not repeat the create call.

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
$create_ad_account_request = {"accountId":"69fc524892b3d8e85f893e73","businessId":"123456789012345","name":"Customer advertising","currency":"EUR","timezoneId":1}; // \Zernio\Model\CreateAdAccountRequest

try {
    $result = $apiInstance->createAdAccount($create_ad_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->createAdAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_ad_account_request** | [**\Zernio\Model\CreateAdAccountRequest**](../Model/CreateAdAccountRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateAdAccount201Response**](../Model/CreateAdAccount201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAdNegativeKeywordList()`

```php
createAdNegativeKeywordList($create_ad_negative_keyword_list_request): \Zernio\Model\CreateAdNegativeKeywordList201Response
```

Create a negative keyword list

Creates one Google Ads shared negative keyword list with optional initial keywords in a single atomic mutation. Daily quota is reserved for every mutate item, so large batches may return 429 before any change. This operation is not idempotent. The list is not attached to any campaign.

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
$create_ad_negative_keyword_list_request = {"accountId":"69ce75d483e990e1c01ccfe4","customerId":"9122445560","name":"Excluded searches","keywords":["free",{"text":"jobs","matchType":"phrase"}]}; // \Zernio\Model\CreateAdNegativeKeywordListRequest

try {
    $result = $apiInstance->createAdNegativeKeywordList($create_ad_negative_keyword_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->createAdNegativeKeywordList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_ad_negative_keyword_list_request** | [**\Zernio\Model\CreateAdNegativeKeywordListRequest**](../Model/CreateAdNegativeKeywordListRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateAdNegativeKeywordList201Response**](../Model/CreateAdNegativeKeywordList201Response.md)

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

Create custom conversion

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

## `deleteAdComment()`

```php
deleteAdComment($ad_id, $comment_id, $since, $until): \Zernio\Model\ReplyToAdComment200Response
```

Delete an ad comment

Delete your own TikTok ad comment or reply. TikTok must return can_delete=true for the comment. Other users' comments can be hidden instead.  Unknown identity and video item fields are resolved only when needed for this action, then persisted for reuse. Comment-specific fields take precedence. If TikTok no longer returns the ad needed to resolve identity, 404 ad_not_found directs you to check deletion or archival in TikTok Ads Manager. Listing can still succeed. Unsupported or unavailable identity returns 403 feature_not_available. Denied access to ad details returns 403 insufficient_permissions with reconnect guidance and the upstream platformError.  Requires Ads access. The ad is resolved within the caller's accessible profiles. Before moderation, Zernio verifies that the comment belongs to this ad using TikTok's ad-group comment listing. The default search window is the last 30 days. Use since/until for older comments, with at most 30 days between the dates. Lookups scan at most 2,000 ad-group comments; narrow the date window if exceeded. Meta returns 501 feature_not_available with guidance to use the existing inbox comment endpoints and the account/post IDs from GET /v1/ads/{adId}/comments.

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
$ad_id = 'ad_id_example'; // string | Internal Zernio ad ID or indexed platform ad ID.
$comment_id = 'comment_id_example'; // string | TikTok comment ID from the ad comment listing.
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date of the comment lookup window. Defaults to 30 days before until.
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date of the comment lookup window. Defaults to today in UTC.

try {
    $result = $apiInstance->deleteAdComment($ad_id, $comment_id, $since, $until);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->deleteAdComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Internal Zernio ad ID or indexed platform ad ID. | |
| **comment_id** | **string**| TikTok comment ID from the ad comment listing. | |
| **since** | **\DateTime**| Start date of the comment lookup window. Defaults to 30 days before until. | [optional] |
| **until** | **\DateTime**| End date of the comment lookup window. Defaults to today in UTC. | [optional] |

### Return type

[**\Zernio\Model\ReplyToAdComment200Response**](../Model/ReplyToAdComment200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAdNegativeKeywordList()`

```php
deleteAdNegativeKeywordList($list_id, $account_id, $customer_id, $platform): \Zernio\Model\DeleteAdNegativeKeywordList200Response
```

Delete a negative keyword list

Removes the Google shared negative keyword list. Detach it from all campaigns first; an in-use list is rejected. Only NEGATIVE_KEYWORDS shared sets are supported.

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
$list_id = 'list_id_example'; // string
$account_id = 'account_id_example'; // string
$customer_id = 'customer_id_example'; // string
$platform = 'platform_example'; // string

try {
    $result = $apiInstance->deleteAdNegativeKeywordList($list_id, $account_id, $customer_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->deleteAdNegativeKeywordList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **account_id** | **string**|  | |
| **customer_id** | **string**|  | [optional] |
| **platform** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\DeleteAdNegativeKeywordList200Response**](../Model/DeleteAdNegativeKeywordList200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
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
getAdComments($ad_id, $placement, $limit, $since, $until, $cursor): \Zernio\Model\GetAdComments200Response
```

List comments on an ad

Returns comments on an ad's underlying creative post. Useful for moderating or analyzing engagement on dark posts (ad creatives that never went live organically), which the regular GET /v1/inbox/comments/{postId} endpoint cannot serve because dark posts are not in Zernio's post database.  An ad that runs on both Facebook feed and Instagram feed has two separate underlying posts with separate comment threads (the creative's effective_object_story_id and effective_instagram_media_id). Use the `placement` query param to pick one; with no param the Instagram side is returned when it exists, otherwise Facebook. The identifiers are read from the ad record (persisted during sync) with a Marketing-API fallback for ads that predate the field.  For Instagram-placed comments, the Instagram account that runs the ad must be connected to Zernio, because those comments are read through that account's token. If no connected Instagram account on the profile can read the ad's media, the call returns ads_connection_required (the Facebook side, if any, is still readable via ?placement=facebook).  TikTok uses the connected TikTok Ads advertiser token and supports both paid video ads and Spark Ads. `since` and `until` select a date window of at most 30 days; the default is the last 30 days. TikTok searches by ad group, so Zernio filters each page to this ad. A page can be empty while `pagination.hasMore` is true. Reuse `pagination.cursor` with the same `limit`; the cursor retains the date window. `placement` is Meta-only and returns a 400 for TikTok. Listing needs no identity or video item ID. When the ad group is stored, each page makes one comment-list call and no ad-detail lookup, including for external ads that TikTok no longer returns from ad details. `meta.tiktokItemId: null` does not prevent listing. If the ad group is missing, Zernio fetches ad details; unavailable details return 404 ad_not_found, and no ad group returns 400 ad_not_commentable.  TikTok returns replies as separate comments with `parentId`; nested reply fetching is not supported. `canReply` requires a first-level comment, comment-management permission, a video item ID and a supported TT_USER or CUSTOMIZED_USER identity. `canDelete` requires TikTok's own-comment deletion capability, a video item ID and a supported identity. Both flags are false when identity or item is unknown. Listing uses stored and comment-specific fields without fetching identity. A direct reply or delete request can lazily resolve missing fields and succeed even after a false flag. `canHide` is true because visibility changes need only advertiser and comment IDs. `canLike` is false. Use the ad comment reply, hide and delete operations below to moderate TikTok comments. Other platforms return feature_not_available.  Requires the Ads add-on. Response shape matches GET /v1/inbox/comments/{postId}.  The `{adId}` path segment accepts any identifier dialect Zernio indexes for the ad: Zernio internal `_id` (24-char hex), the numeric `platformAdId` (the value shipped in `comment.received` webhooks as `comment.ad.id`), or the creative's `effective_object_story_id` / `effective_instagram_media_id`. Caller doesn't need a translation step.

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
$ad_id = 'ad_id_example'; // string | Internal Zernio ad ID or indexed platform ad/post ID.
$placement = 'placement_example'; // string | Which side of the ad to return comments for. Omit to default to the Instagram side when present, else Facebook. Returns ad_not_commentable if the ad has no such placement.
$limit = 25; // int
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | TikTok-only start date. Defaults to 30 days before until. Maximum window is 30 days.
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | TikTok-only end date. Defaults to today in UTC.
$cursor = 'cursor_example'; // string | Pagination cursor from a previous response.

try {
    $result = $apiInstance->getAdComments($ad_id, $placement, $limit, $since, $until, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->getAdComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Internal Zernio ad ID or indexed platform ad/post ID. | |
| **placement** | **string**| Which side of the ad to return comments for. Omit to default to the Instagram side when present, else Facebook. Returns ad_not_commentable if the ad has no such placement. | [optional] |
| **limit** | **int**|  | [optional] [default to 25] |
| **since** | **\DateTime**| TikTok-only start date. Defaults to 30 days before until. Maximum window is 30 days. | [optional] |
| **until** | **\DateTime**| TikTok-only end date. Defaults to today in UTC. | [optional] |
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

## `getAdNegativeKeywordList()`

```php
getAdNegativeKeywordList($list_id, $account_id, $customer_id, $platform): \Zernio\Model\GetAdNegativeKeywordList200Response
```

Get a negative keyword list

Google Ads shared negative keyword lists (shared_set type NEGATIVE_KEYWORDS). Reads are cached for 10 minutes; quota exhaustion may return the last successful result for up to 7 days with stale=true. Customer selection is limited to this connection and its account scope. Includes the keywords and their criterion ids.

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
$list_id = 'list_id_example'; // string
$account_id = 'account_id_example'; // string
$customer_id = 'customer_id_example'; // string
$platform = 'platform_example'; // string

try {
    $result = $apiInstance->getAdNegativeKeywordList($list_id, $account_id, $customer_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->getAdNegativeKeywordList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **account_id** | **string**|  | |
| **customer_id** | **string**|  | [optional] |
| **platform** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\GetAdNegativeKeywordList200Response**](../Model/GetAdNegativeKeywordList200Response.md)

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

Get DSA recommendations

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

## `getIosFourteenCampaignLimits()`

```php
getIosFourteenCampaignLimits($account_id, $ad_account_id, $application_id): \Zernio\Model\GetIosFourteenCampaignLimits200Response
```

Get iOS 14 campaign limits

Reads Meta iOS 14 campaign limits for an application on an ad account. applicationId is sent as Meta app_id. This read does not establish that the application is configured for iOS promotion.

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
$account_id = 'account_id_example'; // string | Zernio Meta Ads or Facebook SocialAccount ID.
$ad_account_id = 'ad_account_id_example'; // string | Meta ad account ID including the act_ prefix.
$application_id = 'application_id_example'; // string | Meta application ID from advertisable-applications.

try {
    $result = $apiInstance->getIosFourteenCampaignLimits($account_id, $ad_account_id, $application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->getIosFourteenCampaignLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Zernio Meta Ads or Facebook SocialAccount ID. | |
| **ad_account_id** | **string**| Meta ad account ID including the act_ prefix. | |
| **application_id** | **string**| Meta application ID from advertisable-applications. | |

### Return type

[**\Zernio\Model\GetIosFourteenCampaignLimits200Response**](../Model/GetIosFourteenCampaignLimits200Response.md)

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

## `hideAdComment()`

```php
hideAdComment($ad_id, $comment_id, $hide_ad_comment_request, $since, $until): \Zernio\Model\HideAdComment200Response
```

Hide or unhide an ad comment

Hide or restore a TikTok ad comment. Send hidden=true to hide it or hidden=false to make it public again. Identity and video item ID are not required; no identity lookup is performed.  Requires Ads access. The ad is resolved within the caller's accessible profiles. Before moderation, Zernio verifies that the comment belongs to this ad using TikTok's ad-group comment listing. The default search window is the last 30 days. Use since/until for older comments, with at most 30 days between the dates. Lookups scan at most 2,000 ad-group comments; narrow the date window if exceeded. Meta returns 501 feature_not_available with guidance to use the existing inbox comment endpoints and the account/post IDs from GET /v1/ads/{adId}/comments.

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
$ad_id = 'ad_id_example'; // string | Internal Zernio ad ID or indexed platform ad ID.
$comment_id = 'comment_id_example'; // string | TikTok comment ID from the ad comment listing.
$hide_ad_comment_request = {"hidden":true}; // \Zernio\Model\HideAdCommentRequest
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date of the comment lookup window. Defaults to 30 days before until.
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date of the comment lookup window. Defaults to today in UTC.

try {
    $result = $apiInstance->hideAdComment($ad_id, $comment_id, $hide_ad_comment_request, $since, $until);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->hideAdComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Internal Zernio ad ID or indexed platform ad ID. | |
| **comment_id** | **string**| TikTok comment ID from the ad comment listing. | |
| **hide_ad_comment_request** | [**\Zernio\Model\HideAdCommentRequest**](../Model/HideAdCommentRequest.md)|  | |
| **since** | **\DateTime**| Start date of the comment lookup window. Defaults to 30 days before until. | [optional] |
| **until** | **\DateTime**| End date of the comment lookup window. Defaults to today in UTC. | [optional] |

### Return type

[**\Zernio\Model\HideAdComment200Response**](../Model/HideAdComment200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccountCallouts()`

```php
listAccountCallouts($account_id, $customer_id): \Zernio\Model\ListAccountCallouts200Response
```

List account callouts

Lists directly attached Google assets. Fresh reads are cached for 10 minutes; exhausted quota may return the last successful read with stale=true. Inherited assets are not included. Preserves Google RMF C.75 account-level callouts.

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
$account_id = 'account_id_example'; // string
$customer_id = 'customer_id_example'; // string

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
| **account_id** | **string**|  | |
| **customer_id** | **string**|  | [optional] |

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

## `listAccountSitelinks()`

```php
listAccountSitelinks($account_id, $customer_id): \Zernio\Model\ListAccountSitelinks200Response
```

List account sitelinks

Lists directly attached Google assets. Fresh reads are cached for 10 minutes; exhausted quota may return the last successful read with stale=true. Inherited assets are not included.

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
$account_id = 'account_id_example'; // string
$customer_id = 'customer_id_example'; // string

try {
    $result = $apiInstance->listAccountSitelinks($account_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->listAccountSitelinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **customer_id** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\ListAccountSitelinks200Response**](../Model/ListAccountSitelinks200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccountStructuredSnippets()`

```php
listAccountStructuredSnippets($account_id, $customer_id): \Zernio\Model\ListAccountStructuredSnippets200Response
```

List account snippets

Lists directly attached Google assets. Fresh reads are cached for 10 minutes; exhausted quota may return the last successful read with stale=true. Inherited assets are not included.

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
$account_id = 'account_id_example'; // string
$customer_id = 'customer_id_example'; // string

try {
    $result = $apiInstance->listAccountStructuredSnippets($account_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->listAccountStructuredSnippets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **customer_id** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\ListAccountStructuredSnippets200Response**](../Model/ListAccountStructuredSnippets200Response.md)

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

Returns the platform ad accounts available for the given account (e.g. Meta ad accounts, TikTok advertiser IDs, Google Ads customer IDs). Meta business-login accounts use their own system-user token. Fresh Meta discovery includes businessId and businessName from the owning Business Manager when available; cached entries gain these fields after the next discovery refresh.  For TikTok agencies: enumerates every advertiser under every Business Center the token can read (paginated server-side), then chunks the lookup against TikTok's `/advertiser/info/` endpoint (which has a per-call cap of ≤100 IDs). Solo advertisers without a BC fall back to the OAuth-time `advertiser_ids` list. Cached for 1h on the SocialAccount; lazy-refreshed on first call after expiry.  For Google Ads: responds `429` when Google's API quota is temporarily exhausted (instead of an empty list). Retry after a delay.

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

## `listAdNegativeKeywordLists()`

```php
listAdNegativeKeywordLists($account_id, $customer_id, $platform): \Zernio\Model\ListAdNegativeKeywordLists200Response
```

List negative keyword lists

Google Ads shared negative keyword lists (shared_set type NEGATIVE_KEYWORDS). Reads are cached for 10 minutes; quota exhaustion may return the last successful result for up to 7 days with stale=true. Customer selection is limited to this connection and its account scope.

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
$account_id = 'account_id_example'; // string
$customer_id = 'customer_id_example'; // string
$platform = 'platform_example'; // string

try {
    $result = $apiInstance->listAdNegativeKeywordLists($account_id, $customer_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->listAdNegativeKeywordLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **customer_id** | **string**|  | [optional] |
| **platform** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\ListAdNegativeKeywordLists200Response**](../Model/ListAdNegativeKeywordLists200Response.md)

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

## `listAdsInstagramAccounts()`

```php
listAdsInstagramAccounts($account_id, $ad_account_id): \Zernio\Model\ListAdsInstagramAccounts200Response
```

List Instagram ad identities

Discovers identities through connected_instagram_accounts, Page linkage and Page-backed identities, with a best-effort business fallback. Business permission errors do not fail discovery. The resolved object uses the same profile-scoped resolver as ad creation; null means no identity was resolved. Format-specific observed-actor fallbacks at creative creation are not predicted.

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
$account_id = 'account_id_example'; // string | Zernio Meta Ads or Facebook SocialAccount ID.
$ad_account_id = 'ad_account_id_example'; // string | Meta ad account ID including the act_ prefix.

try {
    $result = $apiInstance->listAdsInstagramAccounts($account_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->listAdsInstagramAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Zernio Meta Ads or Facebook SocialAccount ID. | |
| **ad_account_id** | **string**| Meta ad account ID including the act_ prefix. | |

### Return type

[**\Zernio\Model\ListAdsInstagramAccounts200Response**](../Model/ListAdsInstagramAccounts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdvertisableApplications()`

```php
listAdvertisableApplications($account_id, $ad_account_id): \Zernio\Model\ListAdvertisableApplications200Response
```

List advertisable apps

Lists applications available to a Meta ad account, their supported platforms and unmodified object store URLs. A listed app still needs a configured mobile platform and store URL to run install promotion.

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
$account_id = 'account_id_example'; // string | Zernio Meta Ads or Facebook SocialAccount ID.
$ad_account_id = 'ad_account_id_example'; // string | Meta ad account ID including the act_ prefix.

try {
    $result = $apiInstance->listAdvertisableApplications($account_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->listAdvertisableApplications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Zernio Meta Ads or Facebook SocialAccount ID. | |
| **ad_account_id** | **string**| Meta ad account ID including the act_ prefix. | |

### Return type

[**\Zernio\Model\ListAdvertisableApplications200Response**](../Model/ListAdvertisableApplications200Response.md)

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

List high-demand periods

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

## `listTikTokAdPixels()`

```php
listTikTokAdPixels($account_id, $advertiser_id, $code): \Zernio\Model\ListTikTokAdPixels200Response
```

List TikTok ad pixels

Lists pixels and their supported optimization events for a connected TikTok Ads account. The advertiser defaults to the first advertiser on the connection. Reconnect if Pixel Management permission has not been granted.

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
$account_id = 'account_id_example'; // string | Zernio SocialAccount ID.
$advertiser_id = 'advertiser_id_example'; // string | Advertiser belonging to this connection.
$code = 'code_example'; // string | Filter by a Pixel Code.

try {
    $result = $apiInstance->listTikTokAdPixels($account_id, $advertiser_id, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->listTikTokAdPixels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Zernio SocialAccount ID. | |
| **advertiser_id** | **string**| Advertiser belonging to this connection. | [optional] |
| **code** | **string**| Filter by a Pixel Code. | [optional] |

### Return type

[**\Zernio\Model\ListTikTokAdPixels200Response**](../Model/ListTikTokAdPixels200Response.md)

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

Remove account callout

Removes the customer_asset attachment only. The underlying shared asset and its campaign or ad-group attachments remain.

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
$remove_account_callout_request = {"accountId":"64b1f0c8a1b2c3d4e5f60718","customerId":"1234567890","assetId":"123"}; // \Zernio\Model\RemoveAccountCalloutRequest

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

## `removeAccountSitelink()`

```php
removeAccountSitelink($remove_account_callout_request): \Zernio\Model\RemoveAccountCallout200Response
```

Remove account sitelink

Removes the customer_asset attachment only. The underlying shared asset and its campaign or ad-group attachments remain.

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
$remove_account_callout_request = {accountId=64b1f0c8a1b2c3d4e5f60718, customerId=1234567890, assetId=123}; // \Zernio\Model\RemoveAccountCalloutRequest

try {
    $result = $apiInstance->removeAccountSitelink($remove_account_callout_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->removeAccountSitelink: ', $e->getMessage(), PHP_EOL;
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

## `removeAccountStructuredSnippet()`

```php
removeAccountStructuredSnippet($remove_account_callout_request): \Zernio\Model\RemoveAccountCallout200Response
```

Remove account snippet

Removes the customer_asset attachment only. The underlying shared asset and its campaign or ad-group attachments remain.

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
$remove_account_callout_request = {accountId=64b1f0c8a1b2c3d4e5f60718, customerId=1234567890, assetId=123}; // \Zernio\Model\RemoveAccountCalloutRequest

try {
    $result = $apiInstance->removeAccountStructuredSnippet($remove_account_callout_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->removeAccountStructuredSnippet: ', $e->getMessage(), PHP_EOL;
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

## `replaceAdNegativeKeywordListKeywords()`

```php
replaceAdNegativeKeywordListKeywords($list_id, $replace_ad_negative_keyword_list_keywords_request): \Zernio\Model\ReplaceAdNegativeKeywordListKeywords200Response
```

Replace negative list keywords

Replaces the full desired keyword set. Existing keywords are diffed by normalized text and match type; creates and removals are applied atomically in one mutation. Unchanged criteria retain their ids. Send an empty keywords array to clear the list. Changes affect every campaign using this list. Each create or removal consumes one daily operation; the entire batch must fit the remaining quota.

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
$list_id = 'list_id_example'; // string
$replace_ad_negative_keyword_list_keywords_request = {"accountId":"69ce75d483e990e1c01ccfe4","customerId":"9122445560","keywords":["free",{"text":"jobs","matchType":"phrase"}]}; // \Zernio\Model\ReplaceAdNegativeKeywordListKeywordsRequest

try {
    $result = $apiInstance->replaceAdNegativeKeywordListKeywords($list_id, $replace_ad_negative_keyword_list_keywords_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->replaceAdNegativeKeywordListKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **replace_ad_negative_keyword_list_keywords_request** | [**\Zernio\Model\ReplaceAdNegativeKeywordListKeywordsRequest**](../Model/ReplaceAdNegativeKeywordListKeywordsRequest.md)|  | |

### Return type

[**\Zernio\Model\ReplaceAdNegativeKeywordListKeywords200Response**](../Model/ReplaceAdNegativeKeywordListKeywords200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replyToAdComment()`

```php
replyToAdComment($ad_id, $comment_id, $reply_to_ad_comment_request, $since, $until): \Zernio\Model\ReplyToAdComment200Response
```

Reply to an ad comment

Reply to a first-level TikTok ad comment. Requires a TT_USER or CUSTOMIZED_USER identity with comment-management permission. Replies to replies are rejected. The response commentId identifies the new reply. This operation is not idempotent; do not blindly retry an uncertain response.  Unknown identity and video item fields are resolved only when needed for this action, then persisted for reuse. Comment-specific fields take precedence. If TikTok no longer returns the ad needed to resolve identity, 404 ad_not_found directs you to check deletion or archival in TikTok Ads Manager. Listing can still succeed. Unsupported or unavailable identity returns 403 feature_not_available. Denied access to ad details returns 403 insufficient_permissions with reconnect guidance and the upstream platformError.  Requires Ads access. The ad is resolved within the caller's accessible profiles. Before moderation, Zernio verifies that the comment belongs to this ad using TikTok's ad-group comment listing. The default search window is the last 30 days. Use since/until for older comments, with at most 30 days between the dates. Lookups scan at most 2,000 ad-group comments; narrow the date window if exceeded. Meta returns 501 feature_not_available with guidance to use the existing inbox comment endpoints and the account/post IDs from GET /v1/ads/{adId}/comments.

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
$ad_id = 'ad_id_example'; // string | Internal Zernio ad ID or indexed platform ad ID.
$comment_id = 'comment_id_example'; // string | TikTok comment ID from the ad comment listing.
$reply_to_ad_comment_request = {"text":"Thanks for your question!"}; // \Zernio\Model\ReplyToAdCommentRequest
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date of the comment lookup window. Defaults to 30 days before until.
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date of the comment lookup window. Defaults to today in UTC.

try {
    $result = $apiInstance->replyToAdComment($ad_id, $comment_id, $reply_to_ad_comment_request, $since, $until);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->replyToAdComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Internal Zernio ad ID or indexed platform ad ID. | |
| **comment_id** | **string**| TikTok comment ID from the ad comment listing. | |
| **reply_to_ad_comment_request** | [**\Zernio\Model\ReplyToAdCommentRequest**](../Model/ReplyToAdCommentRequest.md)|  | |
| **since** | **\DateTime**| Start date of the comment lookup window. Defaults to 30 days before until. | [optional] |
| **until** | **\DateTime**| End date of the comment lookup window. Defaults to today in UTC. | [optional] |

### Return type

[**\Zernio\Model\ReplyToAdComment200Response**](../Model/ReplyToAdComment200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountCallouts()`

```php
updateAccountCallouts($update_account_callouts_request): \Zernio\Model\UpdateAccountCallouts200Response
```

Update account callouts

Edits existing Google assets in place. Send updates with assetResourceName and the fields to change. An asset is shared: changes affect every attachment using it. Omitted fields stay unchanged. The operation consumes the Google operations budget and invalidates affected cached lists.

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
$update_account_callouts_request = {"accountId":"64b1f0c8a1b2c3d4e5f60718","customerId":"1234567890","updates":[{"assetResourceName":"customers/1234567890/assets/123","calloutAsset":{"calloutText":"Simple integration"}}]}; // \Zernio\Model\UpdateAccountCalloutsRequest

try {
    $result = $apiInstance->updateAccountCallouts($update_account_callouts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->updateAccountCallouts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_account_callouts_request** | [**\Zernio\Model\UpdateAccountCalloutsRequest**](../Model/UpdateAccountCalloutsRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateAccountCallouts200Response**](../Model/UpdateAccountCallouts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountSitelinks()`

```php
updateAccountSitelinks($update_account_sitelinks_request): \Zernio\Model\UpdateAccountCallouts200Response
```

Update account sitelinks

Edits existing Google assets in place. Send updates with assetResourceName and the fields to change. An asset is shared: changes affect every attachment using it. Omitted fields stay unchanged. The operation consumes the Google operations budget and invalidates affected cached lists.

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
$update_account_sitelinks_request = {"accountId":"64b1f0c8a1b2c3d4e5f60718","customerId":"1234567890","updates":[{"assetResourceName":"customers/1234567890/assets/123","sitelinkAsset":{"linkText":"Explore pricing"},"finalUrls":["https://zernio.com/pricing"]}]}; // \Zernio\Model\UpdateAccountSitelinksRequest

try {
    $result = $apiInstance->updateAccountSitelinks($update_account_sitelinks_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->updateAccountSitelinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_account_sitelinks_request** | [**\Zernio\Model\UpdateAccountSitelinksRequest**](../Model/UpdateAccountSitelinksRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateAccountCallouts200Response**](../Model/UpdateAccountCallouts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountStructuredSnippets()`

```php
updateAccountStructuredSnippets($update_account_structured_snippets_request): \Zernio\Model\UpdateAccountCallouts200Response
```

Update account snippets

Edits existing Google assets in place. Send updates with assetResourceName and the fields to change. An asset is shared: changes affect every attachment using it. Omitted fields stay unchanged. The operation consumes the Google operations budget and invalidates affected cached lists.

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
$update_account_structured_snippets_request = {"accountId":"64b1f0c8a1b2c3d4e5f60718","customerId":"1234567890","updates":[{"assetResourceName":"customers/1234567890/assets/123","structuredSnippetAsset":{"header":"Types","values":["Scheduling","Reporting","Messaging"]}}]}; // \Zernio\Model\UpdateAccountStructuredSnippetsRequest

try {
    $result = $apiInstance->updateAccountStructuredSnippets($update_account_structured_snippets_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->updateAccountStructuredSnippets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_account_structured_snippets_request** | [**\Zernio\Model\UpdateAccountStructuredSnippetsRequest**](../Model/UpdateAccountStructuredSnippetsRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateAccountCallouts200Response**](../Model/UpdateAccountCallouts200Response.md)

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

## `updateAdNegativeKeywordList()`

```php
updateAdNegativeKeywordList($list_id, $update_ad_negative_keyword_list_request): \Zernio\Model\UpdateAdNegativeKeywordList200Response
```

Rename a negative keyword list

Renames a shared negative keyword list. Keywords and campaign associations are unchanged. Use the keywords endpoint to edit the desired keyword set.

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
$list_id = 'list_id_example'; // string
$update_ad_negative_keyword_list_request = {"accountId":"69ce75d483e990e1c01ccfe4","customerId":"9122445560","name":"Excluded searches renamed"}; // \Zernio\Model\UpdateAdNegativeKeywordListRequest

try {
    $result = $apiInstance->updateAdNegativeKeywordList($list_id, $update_ad_negative_keyword_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAccountsApi->updateAdNegativeKeywordList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**|  | |
| **update_ad_negative_keyword_list_request** | [**\Zernio\Model\UpdateAdNegativeKeywordListRequest**](../Model/UpdateAdNegativeKeywordListRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateAdNegativeKeywordList200Response**](../Model/UpdateAdNegativeKeywordList200Response.md)

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
