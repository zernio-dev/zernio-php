# Zernio\AdLibraryApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchAdLibrary()**](AdLibraryApi.md#searchAdLibrary) | **GET** /v1/ads/library | Search the public Ad Library |


## `searchAdLibrary()`

```php
searchAdLibrary($platform, $account_id, $q, $page_ids, $advertiser, $countries, $ad_type, $status, $platforms, $media_type, $languages, $since, $until, $search_type, $fields, $limit, $after): \Zernio\Model\SearchAdLibrary200Response
```

Search the public Ad Library

Competitor and market research over the public ad archives. Meta's Ad Library (`GET /ads_archive`) is searched with Zernio's own developer access, so `platform=meta` needs no connected account at all. LinkedIn's Ad Library (`GET /rest/adLibrary`) runs on a connected `linkedin` / `linkedinads` account, passed as `accountId`. Passing a Meta account as `accountId` also selects Meta. Rows are returned in the platform's raw shape under `data`; `paging.after` is an opaque cursor on both (`null` when exhausted).  **Meta coverage.** Political and social-issue ads are searchable worldwide. Every other ad is in the archive only if it was delivered to the EU or UK within the last year, so a US-only commercial advertiser is invisible. Spend, impressions and demographics are political-only fields and are left out of the default projection; request them via `fields`. All customers share Zernio's Meta quota, so a `429` means back off for a minute.  **LinkedIn coverage.** Ads served after June 1 2023, worldwide, kept for a year after their last impression. EU-delivered ads carry impression ranges and the disclosed targeting facets. Pages are capped at 25 ads (`limit` > 25 is a 400); `after` is the next offset.  Which params apply: `q`, `countries`, `since`, `until`, `limit`, `after` on both; `pageIds`, `adType`, `status`, `platforms`, `mediaType`, `languages`, `searchType`, `fields` are Meta-only; `advertiser` is LinkedIn-only. Passing a param the account's platform does not support is a 400 naming the param.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string | Which archive to search. `meta` needs no accountId. Required unless accountId is given.
$account_id = 'account_id_example'; // string | Zernio SocialAccount id. Required for LinkedIn (linkedin / linkedinads: its token searches). Optional for Meta, where any facebook / instagram / metaads account only selects the platform.
$q = 'q_example'; // string | Keyword search. Meta does not translate it, so write it in the ads' language. Required unless pageIds (Meta) or advertiser (LinkedIn) is given.
$page_ids = 'page_ids_example'; // string | Meta only. Comma-separated Facebook Page ids (max 10) whose ads to list.
$advertiser = 'advertiser_example'; // string | LinkedIn only. Advertiser (Page) name to search.
$countries = 'countries_example'; // string | Comma-separated ISO 3166-1 alpha-2 codes the ads reached. Meta defaults to ALL (an explicit ALL is Meta-only); LinkedIn searches every market when omitted.
$ad_type = 'ALL'; // string | Meta only.
$status = 'ACTIVE'; // string | Meta only. ACTIVE = eligible for delivery right now.
$platforms = 'platforms_example'; // string | Meta only. Comma-separated publisher platforms: FACEBOOK, INSTAGRAM, AUDIENCE_NETWORK, MESSENGER, WHATSAPP, OCULUS, THREADS, STREAMING_SERVICES.
$media_type = 'media_type_example'; // string | Meta only.
$languages = 'languages_example'; // string | Meta only. Comma-separated ISO 639-1 codes of the ad text.
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Earliest delivery date (YYYY-MM-DD).
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Latest delivery date (YYYY-MM-DD).
$search_type = 'KEYWORD_UNORDERED'; // string | Meta only. Whether q matches words in any order or as an exact phrase (comma-separate phrases to match all of them).
$fields = 'fields_example'; // string | Meta only. Raw Graph projection override, e.g. add spend,impressions,demographic_distribution for political ads.
$limit = 25; // int | Rows per page. LinkedIn accepts at most 25.
$after = 'after_example'; // string | paging.after of the previous page.

try {
    $result = $apiInstance->searchAdLibrary($platform, $account_id, $q, $page_ids, $advertiser, $countries, $ad_type, $status, $platforms, $media_type, $languages, $since, $until, $search_type, $fields, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdLibraryApi->searchAdLibrary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **platform** | **string**| Which archive to search. &#x60;meta&#x60; needs no accountId. Required unless accountId is given. | [optional] |
| **account_id** | **string**| Zernio SocialAccount id. Required for LinkedIn (linkedin / linkedinads: its token searches). Optional for Meta, where any facebook / instagram / metaads account only selects the platform. | [optional] |
| **q** | **string**| Keyword search. Meta does not translate it, so write it in the ads&#39; language. Required unless pageIds (Meta) or advertiser (LinkedIn) is given. | [optional] |
| **page_ids** | **string**| Meta only. Comma-separated Facebook Page ids (max 10) whose ads to list. | [optional] |
| **advertiser** | **string**| LinkedIn only. Advertiser (Page) name to search. | [optional] |
| **countries** | **string**| Comma-separated ISO 3166-1 alpha-2 codes the ads reached. Meta defaults to ALL (an explicit ALL is Meta-only); LinkedIn searches every market when omitted. | [optional] |
| **ad_type** | **string**| Meta only. | [optional] [default to &#39;ALL&#39;] |
| **status** | **string**| Meta only. ACTIVE &#x3D; eligible for delivery right now. | [optional] [default to &#39;ACTIVE&#39;] |
| **platforms** | **string**| Meta only. Comma-separated publisher platforms: FACEBOOK, INSTAGRAM, AUDIENCE_NETWORK, MESSENGER, WHATSAPP, OCULUS, THREADS, STREAMING_SERVICES. | [optional] |
| **media_type** | **string**| Meta only. | [optional] |
| **languages** | **string**| Meta only. Comma-separated ISO 639-1 codes of the ad text. | [optional] |
| **since** | **\DateTime**| Earliest delivery date (YYYY-MM-DD). | [optional] |
| **until** | **\DateTime**| Latest delivery date (YYYY-MM-DD). | [optional] |
| **search_type** | **string**| Meta only. Whether q matches words in any order or as an exact phrase (comma-separate phrases to match all of them). | [optional] [default to &#39;KEYWORD_UNORDERED&#39;] |
| **fields** | **string**| Meta only. Raw Graph projection override, e.g. add spend,impressions,demographic_distribution for political ads. | [optional] |
| **limit** | **int**| Rows per page. LinkedIn accepts at most 25. | [optional] [default to 25] |
| **after** | **string**| paging.after of the previous page. | [optional] |

### Return type

[**\Zernio\Model\SearchAdLibrary200Response**](../Model/SearchAdLibrary200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
