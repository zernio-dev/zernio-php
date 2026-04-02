# Late\AdCampaignsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAdTree()**](AdCampaignsApi.md#getAdTree) | **GET** /v1/ads/tree | Get nested campaign/ad-set/ad tree |
| [**listAdCampaigns()**](AdCampaignsApi.md#listAdCampaigns) | **GET** /v1/ads/campaigns | List campaigns with aggregate metrics |
| [**updateAdCampaignStatus()**](AdCampaignsApi.md#updateAdCampaignStatus) | **PUT** /v1/ads/campaigns/{campaignId}/status | Pause or resume a campaign |


## `getAdTree()`

```php
getAdTree($page, $limit, $source, $platform, $status, $ad_account_id, $account_id, $profile_id): \Late\Model\GetAdTree200Response
```

Get nested campaign/ad-set/ad tree

Returns a nested Campaign > Ad Set > Ad hierarchy with rolled-up metrics at each level. Uses a two-stage aggregation: ads are grouped into ad sets, then ad sets into campaigns. Pagination is at the campaign level. Ads without a campaign or ad set ID are grouped into synthetic \"Ungrouped\" buckets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number (1-based)
$limit = 20; // int | Campaigns per page
$source = 'zernio'; // string
$platform = 'platform_example'; // string
$status = 'status_example'; // string | Filter by derived campaign status (post-aggregation)
$ad_account_id = 'ad_account_id_example'; // string | Platform ad account ID
$account_id = 'account_id_example'; // string | Social account ID
$profile_id = 'profile_id_example'; // string | Profile ID

try {
    $result = $apiInstance->getAdTree($page, $limit, $source, $platform, $status, $ad_account_id, $account_id, $profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->getAdTree: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number (1-based) | [optional] [default to 1] |
| **limit** | **int**| Campaigns per page | [optional] [default to 20] |
| **source** | **string**|  | [optional] [default to &#39;zernio&#39;] |
| **platform** | **string**|  | [optional] |
| **status** | **string**| Filter by derived campaign status (post-aggregation) | [optional] |
| **ad_account_id** | **string**| Platform ad account ID | [optional] |
| **account_id** | **string**| Social account ID | [optional] |
| **profile_id** | **string**| Profile ID | [optional] |

### Return type

[**\Late\Model\GetAdTree200Response**](../Model/GetAdTree200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdCampaigns()`

```php
listAdCampaigns($page, $limit, $source, $platform, $status, $ad_account_id, $account_id, $profile_id): \Late\Model\ListAdCampaigns200Response
```

List campaigns with aggregate metrics

Returns campaigns as virtual aggregations over ad documents grouped by platform campaign ID. Metrics (spend, impressions, clicks, etc.) are summed across all ads in each campaign. Campaign status is derived from child ad statuses (active > pending_review > paused > error > completed > cancelled > rejected).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number (1-based)
$limit = 20; // int
$source = 'zernio'; // string
$platform = 'platform_example'; // string
$status = 'status_example'; // string | Filter by derived campaign status (post-aggregation)
$ad_account_id = 'ad_account_id_example'; // string | Platform ad account ID (e.g. act_123 for Meta)
$account_id = 'account_id_example'; // string | Social account ID
$profile_id = 'profile_id_example'; // string | Profile ID

try {
    $result = $apiInstance->listAdCampaigns($page, $limit, $source, $platform, $status, $ad_account_id, $account_id, $profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->listAdCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number (1-based) | [optional] [default to 1] |
| **limit** | **int**|  | [optional] [default to 20] |
| **source** | **string**|  | [optional] [default to &#39;zernio&#39;] |
| **platform** | **string**|  | [optional] |
| **status** | **string**| Filter by derived campaign status (post-aggregation) | [optional] |
| **ad_account_id** | **string**| Platform ad account ID (e.g. act_123 for Meta) | [optional] |
| **account_id** | **string**| Social account ID | [optional] |
| **profile_id** | **string**| Profile ID | [optional] |

### Return type

[**\Late\Model\ListAdCampaigns200Response**](../Model/ListAdCampaigns200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdCampaignStatus()`

```php
updateAdCampaignStatus($campaign_id, $update_ad_campaign_status_request): \Late\Model\UpdateAdCampaignStatus200Response
```

Pause or resume a campaign

Updates the status of all ads in a campaign. Makes one platform API call (not per-ad) since status cascades through the campaign hierarchy. Ads in terminal statuses (rejected, completed, cancelled) are automatically skipped.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Platform campaign ID
$update_ad_campaign_status_request = new \Late\Model\UpdateAdCampaignStatusRequest(); // \Late\Model\UpdateAdCampaignStatusRequest

try {
    $result = $apiInstance->updateAdCampaignStatus($campaign_id, $update_ad_campaign_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->updateAdCampaignStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Platform campaign ID | |
| **update_ad_campaign_status_request** | [**\Late\Model\UpdateAdCampaignStatusRequest**](../Model/UpdateAdCampaignStatusRequest.md)|  | |

### Return type

[**\Late\Model\UpdateAdCampaignStatus200Response**](../Model/UpdateAdCampaignStatus200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
