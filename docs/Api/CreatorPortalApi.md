# Zernio\CreatorPortalApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCreatorPayoutLogin()**](CreatorPortalApi.md#createCreatorPayoutLogin) | **POST** /public/creator-campaigns/{token}/payout-login | Open the creator&#39;s Stripe dashboard |
| [**getCreatorPayoutStatement()**](CreatorPortalApi.md#getCreatorPayoutStatement) | **GET** /public/creator-campaigns/{token}/payouts/{transferId}/statement | Download a payout statement |
| [**getCreatorPayouts()**](CreatorPortalApi.md#getCreatorPayouts) | **GET** /public/creator-campaigns/{token}/payouts | List a creator&#39;s earnings history |
| [**getCreatorPortal()**](CreatorPortalApi.md#getCreatorPortal) | **GET** /public/creator-campaigns/{token} | Read a creator invite or participant page |
| [**joinCreatorCampaign()**](CreatorPortalApi.md#joinCreatorCampaign) | **POST** /public/creator-campaigns/{token} | Join a campaign |
| [**recoverCreatorPortalLinks()**](CreatorPortalApi.md#recoverCreatorPortalLinks) | **POST** /public/creator-campaigns/recover-link | Email a creator their campaign links |
| [**startCreatorConnect()**](CreatorPortalApi.md#startCreatorConnect) | **POST** /public/creator-campaigns/{token}/connect | Start connecting a creator account |
| [**startCreatorPayouts()**](CreatorPortalApi.md#startCreatorPayouts) | **POST** /public/creator-campaigns/{token}/payouts | Start payout onboarding |
| [**submitCreatorPost()**](CreatorPortalApi.md#submitCreatorPost) | **POST** /public/creator-campaigns/{token}/submissions | Submit a post |


## `createCreatorPayoutLogin()`

```php
createCreatorPayoutLogin($token): \Zernio\Model\StartCreatorPayouts200Response
```

Open the creator's Stripe dashboard

Returns a one-time link into the creator's Stripe Express dashboard, where they change bank details and see each payout. Only after the creator submitted their payout details. About 20 attempts per participant every 10 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Zernio\Api\CreatorPortalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | A participant token or an open invite token. A malformed token answers 404 like an unknown one.

try {
    $result = $apiInstance->createCreatorPayoutLogin($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorPortalApi->createCreatorPayoutLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| A participant token or an open invite token. A malformed token answers 404 like an unknown one. | |

### Return type

[**\Zernio\Model\StartCreatorPayouts200Response**](../Model/StartCreatorPayouts200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreatorPayoutStatement()`

```php
getCreatorPayoutStatement($token, $transfer_id): \SplFileObject
```

Download a payout statement

A PDF statement of one paid payout to this creator: who paid, the campaign, the date, the amount and the Stripe transfer id. It is a statement of a payment, not a tax invoice.  Only for a paid payout of this participant; anything else answers 404.  About 60 downloads per participant every 10 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Zernio\Api\CreatorPortalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | A participant token or an open invite token. A malformed token answers 404 like an unknown one.
$transfer_id = 'transfer_id_example'; // string

try {
    $result = $apiInstance->getCreatorPayoutStatement($token, $transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorPortalApi->getCreatorPayoutStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| A participant token or an open invite token. A malformed token answers 404 like an unknown one. | |
| **transfer_id** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreatorPayouts()`

```php
getCreatorPayouts($token, $limit, $skip): \Zernio\Model\GetCreatorPayouts200Response
```

List a creator's earnings history

The participant's ledger entries, newest first, with the bucket each one moved money from and to (`accruing`, `owed`, `payable`, `settling`, `settled`; null for the other side), plus the payout setup. Never cached.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Zernio\Api\CreatorPortalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | A participant token or an open invite token. A malformed token answers 404 like an unknown one.
$limit = 50; // int
$skip = 0; // int

try {
    $result = $apiInstance->getCreatorPayouts($token, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorPortalApi->getCreatorPayouts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| A participant token or an open invite token. A malformed token answers 404 like an unknown one. | |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\GetCreatorPayouts200Response**](../Model/GetCreatorPayouts200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreatorPortal()`

```php
getCreatorPortal($token): \Zernio\Model\GetCreatorPortal200Response
```

Read a creator invite or participant page

What a creator sees behind a campaign link, with no API key. Never cached.  `token` is one of:  - An open invite token (from `POST /v1/creator-campaigns/{campaignId}/invite-link`): answers `kind: invite` with the campaign only. - A participant token (from an invite or a join): answers `kind: participant` with the creator's connected accounts, latest 100 submissions, earnings and payout setup.  Reading a participant page also re-checks the creator's connected accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Zernio\Api\CreatorPortalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | A participant token or an open invite token. A malformed token answers 404 like an unknown one.

try {
    $result = $apiInstance->getCreatorPortal($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorPortalApi->getCreatorPortal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| A participant token or an open invite token. A malformed token answers 404 like an unknown one. | |

### Return type

[**\Zernio\Model\GetCreatorPortal200Response**](../Model/GetCreatorPortal200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `joinCreatorCampaign()`

```php
joinCreatorCampaign($token, $join_creator_campaign_request): \Zernio\Model\JoinCreatorCampaign201Response
```

Join a campaign

Accepts a participant invite, or joins through an open invite link.  - Participant token: the body is ignored and the invite is accepted. - Open invite token: a new participant is created from `displayName` (required) and `email` (optional), and a fresh participant token comes back. Keep it: it is the creator's only key to their page.  Open-link joins are limited to about 20 per IP address and 60 per link every 10 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Zernio\Api\CreatorPortalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | A participant token or an open invite token. A malformed token answers 404 like an unknown one.
$join_creator_campaign_request = new \Zernio\Model\JoinCreatorCampaignRequest(); // \Zernio\Model\JoinCreatorCampaignRequest

try {
    $result = $apiInstance->joinCreatorCampaign($token, $join_creator_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorPortalApi->joinCreatorCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| A participant token or an open invite token. A malformed token answers 404 like an unknown one. | |
| **join_creator_campaign_request** | [**\Zernio\Model\JoinCreatorCampaignRequest**](../Model/JoinCreatorCampaignRequest.md)|  | [optional] |

### Return type

[**\Zernio\Model\JoinCreatorCampaign201Response**](../Model/JoinCreatorCampaign201Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recoverCreatorPortalLinks()`

```php
recoverCreatorPortalLinks($recover_creator_portal_links_request): \Zernio\Model\RecoverCreatorPortalLinks202Response
```

Email a creator their campaign links

For a creator who lost their link. Emails every personal participant link held by `email` in one message, optionally only the one for `campaignId`.  - Removed participants and draft campaigns are left out. - Always answers 202 with the same body, so the answer never tells whether the address has links. - Limited to 5 requests per hour per email address and 5 per hour per IP address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Zernio\Api\CreatorPortalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recover_creator_portal_links_request = new \Zernio\Model\RecoverCreatorPortalLinksRequest(); // \Zernio\Model\RecoverCreatorPortalLinksRequest

try {
    $result = $apiInstance->recoverCreatorPortalLinks($recover_creator_portal_links_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorPortalApi->recoverCreatorPortalLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recover_creator_portal_links_request** | [**\Zernio\Model\RecoverCreatorPortalLinksRequest**](../Model/RecoverCreatorPortalLinksRequest.md)|  | |

### Return type

[**\Zernio\Model\RecoverCreatorPortalLinks202Response**](../Model/RecoverCreatorPortalLinks202Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startCreatorConnect()`

```php
startCreatorConnect($token, $start_creator_connect_request): \Zernio\Model\StartCreatorConnect200Response
```

Start connecting a creator account

Returns the authorization URL that connects one of the creator's own social accounts, read-only, so their posts can be verified. Send the creator's browser to `authUrl`; they come back to their participant page. Only the campaign's platforms are accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Zernio\Api\CreatorPortalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | A participant token or an open invite token. A malformed token answers 404 like an unknown one.
$start_creator_connect_request = new \Zernio\Model\StartCreatorConnectRequest(); // \Zernio\Model\StartCreatorConnectRequest

try {
    $result = $apiInstance->startCreatorConnect($token, $start_creator_connect_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorPortalApi->startCreatorConnect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| A participant token or an open invite token. A malformed token answers 404 like an unknown one. | |
| **start_creator_connect_request** | [**\Zernio\Model\StartCreatorConnectRequest**](../Model/StartCreatorConnectRequest.md)|  | |

### Return type

[**\Zernio\Model\StartCreatorConnect200Response**](../Model/StartCreatorConnect200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startCreatorPayouts()`

```php
startCreatorPayouts($token, $start_creator_payouts_request): \Zernio\Model\StartCreatorPayouts200Response
```

Start payout onboarding

For a campaign that pays through the Zernio treasury: creates the creator's payee on first use and returns a Stripe-hosted onboarding link where they enter identity and bank details. `country` is required the first time and cannot change afterwards. About 20 attempts per participant every 10 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Zernio\Api\CreatorPortalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | A participant token or an open invite token. A malformed token answers 404 like an unknown one.
$start_creator_payouts_request = new \Zernio\Model\StartCreatorPayoutsRequest(); // \Zernio\Model\StartCreatorPayoutsRequest

try {
    $result = $apiInstance->startCreatorPayouts($token, $start_creator_payouts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorPortalApi->startCreatorPayouts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| A participant token or an open invite token. A malformed token answers 404 like an unknown one. | |
| **start_creator_payouts_request** | [**\Zernio\Model\StartCreatorPayoutsRequest**](../Model/StartCreatorPayoutsRequest.md)|  | |

### Return type

[**\Zernio\Model\StartCreatorPayouts200Response**](../Model/StartCreatorPayouts200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitCreatorPost()`

```php
submitCreatorPost($token, $submit_creator_post_request): \Zernio\Model\SubmitCreatorPost201Response
```

Submit a post

Submits the link to a post the creator published from a connected account. The post opens a tracking window and fires `campaign_submission.received` to the operator. About 30 attempts and 10 accepted posts per participant every 10 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Zernio\Api\CreatorPortalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | A participant token or an open invite token. A malformed token answers 404 like an unknown one.
$submit_creator_post_request = new \Zernio\Model\SubmitCreatorPostRequest(); // \Zernio\Model\SubmitCreatorPostRequest

try {
    $result = $apiInstance->submitCreatorPost($token, $submit_creator_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorPortalApi->submitCreatorPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| A participant token or an open invite token. A malformed token answers 404 like an unknown one. | |
| **submit_creator_post_request** | [**\Zernio\Model\SubmitCreatorPostRequest**](../Model/SubmitCreatorPostRequest.md)|  | |

### Return type

[**\Zernio\Model\SubmitCreatorPost201Response**](../Model/SubmitCreatorPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
