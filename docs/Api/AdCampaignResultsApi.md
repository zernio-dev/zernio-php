# Zernio\AdCampaignResultsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCampaignResultsUpload()**](AdCampaignResultsApi.md#getCampaignResultsUpload) | **GET** /v1/ads/campaign-results/uploads/{uploadId} | Check a results upload |
| [**listCampaignResultMetrics()**](AdCampaignResultsApi.md#listCampaignResultMetrics) | **GET** /v1/ads/campaign-results/metrics | List your result metrics |
| [**listCampaignResults()**](AdCampaignResultsApi.md#listCampaignResults) | **GET** /v1/ads/campaign-results | List your results per campaign |
| [**setCampaignResultMetric()**](AdCampaignResultsApi.md#setCampaignResultMetric) | **PUT** /v1/ads/campaign-results/metrics/{key} | Name a result metric |
| [**uploadCampaignResults()**](AdCampaignResultsApi.md#uploadCampaignResults) | **POST** /v1/ads/campaign-results | Upload your results per campaign |


## `getCampaignResultsUpload()`

```php
getCampaignResultsUpload($upload_id): \Zernio\Model\GetCampaignResultsUpload200Response
```

Check a results upload

How an upload was matched: rows matched and unmatched, and up to 100 unmatched rows with why (`no_campaign` or `ambiguous`).  `status` turns `done` once every row is processed, usually within seconds. Uploads are kept for 30 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_id = 'upload_id_example'; // string

try {
    $result = $apiInstance->getCampaignResultsUpload($upload_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignResultsApi->getCampaignResultsUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upload_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetCampaignResultsUpload200Response**](../Model/GetCampaignResultsUpload200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCampaignResultMetrics()`

```php
listCampaignResultMetrics(): \Zernio\Model\ListCampaignResultMetrics200Response
```

List your result metrics

The metric keys your team has sent, with their label and kind. A new key appears as a `count` labelled from the key; name it with `PUT /v1/ads/campaign-results/metrics/{key}`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCampaignResultMetrics();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignResultsApi->listCampaignResultMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\ListCampaignResultMetrics200Response**](../Model/ListCampaignResultMetrics200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCampaignResults()`

```php
listCampaignResults($from_date, $to_date, $campaign_ids, $limit, $cursor): \Zernio\Model\ListCampaignResults200Response
```

List your results per campaign

Your results summed per campaign over a date range, one entry per campaign with every metric it has, for the ad accounts your key can see. Each day counts its newest value only.  Paginated by campaign: pass `nextCursor` back as `cursor` until it is null.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive. At most 400 days after `fromDate`.
$campaign_ids = 'campaign_ids_example'; // string | Comma-separated platform campaign ids, at most 500. Omit for all campaigns.
$limit = 100; // int | Campaigns per page.
$cursor = 'cursor_example'; // string | `nextCursor` from the previous page.

try {
    $result = $apiInstance->listCampaignResults($from_date, $to_date, $campaign_ids, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignResultsApi->listCampaignResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from_date** | **\DateTime**|  | |
| **to_date** | **\DateTime**| Inclusive. At most 400 days after &#x60;fromDate&#x60;. | |
| **campaign_ids** | **string**| Comma-separated platform campaign ids, at most 500. Omit for all campaigns. | [optional] |
| **limit** | **int**| Campaigns per page. | [optional] [default to 100] |
| **cursor** | **string**| &#x60;nextCursor&#x60; from the previous page. | [optional] |

### Return type

[**\Zernio\Model\ListCampaignResults200Response**](../Model/ListCampaignResults200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setCampaignResultMetric()`

```php
setCampaignResultMetric($key, $set_campaign_result_metric_request): \Zernio\Model\SetCampaignResultMetric200Response
```

Name a result metric

Sets a metric key's label and kind: `count` for things you count (leads, sales) or `money` with its currency (revenue).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string
$set_campaign_result_metric_request = new \Zernio\Model\SetCampaignResultMetricRequest(); // \Zernio\Model\SetCampaignResultMetricRequest

try {
    $result = $apiInstance->setCampaignResultMetric($key, $set_campaign_result_metric_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignResultsApi->setCampaignResultMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**|  | |
| **set_campaign_result_metric_request** | [**\Zernio\Model\SetCampaignResultMetricRequest**](../Model/SetCampaignResultMetricRequest.md)|  | |

### Return type

[**\Zernio\Model\SetCampaignResultMetric200Response**](../Model/SetCampaignResultMetric200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadCampaignResults()`

```php
uploadCampaignResults($upload_campaign_results_request, $idempotency_key): \Zernio\Model\UploadCampaignResults202Response
```

Upload your results per campaign

Sends your own daily numbers per campaign (qualified leads, sales, revenue...) so rules and reports can use them next to spend.  Name each row's campaign by `campaignId`, `utmCampaign` or `campaignName`. Rows are matched in the background: the `202` returns an `uploadId`, and `Location` points to `GET /v1/ads/campaign-results/uploads/{uploadId}`.  Re-sending a day replaces it. Send an `Idempotency-Key` to retry safely. Limits per team: 60 requests and 20,000 rows per hour, 512 KB per request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_campaign_results_request = new \Zernio\Model\UploadCampaignResultsRequest(); // \Zernio\Model\UploadCampaignResultsRequest
$idempotency_key = 'idempotency_key_example'; // string | A retry with the same key and body replays the first response instead of uploading twice.

try {
    $result = $apiInstance->uploadCampaignResults($upload_campaign_results_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignResultsApi->uploadCampaignResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upload_campaign_results_request** | [**\Zernio\Model\UploadCampaignResultsRequest**](../Model/UploadCampaignResultsRequest.md)|  | |
| **idempotency_key** | **string**| A retry with the same key and body replays the first response instead of uploading twice. | [optional] |

### Return type

[**\Zernio\Model\UploadCampaignResults202Response**](../Model/UploadCampaignResults202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
