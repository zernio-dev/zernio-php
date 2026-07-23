# Zernio\ReachAndFrequencyApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelRfReservation()**](ReachAndFrequencyApi.md#cancelRfReservation) | **DELETE** /v1/ads/rf-predictions/{predictionId} | Cancel a Reach &amp; Frequency reservation |
| [**createRfPrediction()**](ReachAndFrequencyApi.md#createRfPrediction) | **POST** /v1/ads/rf-predictions | Create a Reach &amp; Frequency prediction |
| [**getRfPrediction()**](ReachAndFrequencyApi.md#getRfPrediction) | **GET** /v1/ads/rf-predictions/{predictionId} | Read a Reach &amp; Frequency prediction |
| [**reserveRfPrediction()**](ReachAndFrequencyApi.md#reserveRfPrediction) | **POST** /v1/ads/rf-predictions/{predictionId}/reserve | Reserve a Reach &amp; Frequency prediction |


## `cancelRfReservation()`

```php
cancelRfReservation($prediction_id, $account_id, $ad_account_id)
```

Cancel a Reach & Frequency reservation

Releases a RESERVATION's locked price and inventory. Unreserved predictions expire on their own.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ReachAndFrequencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prediction_id = 'prediction_id_example'; // string
$account_id = 'account_id_example'; // string
$ad_account_id = 'ad_account_id_example'; // string

try {
    $apiInstance->cancelRfReservation($prediction_id, $account_id, $ad_account_id);
} catch (Exception $e) {
    echo 'Exception when calling ReachAndFrequencyApi->cancelRfReservation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **prediction_id** | **string**|  | |
| **account_id** | **string**|  | |
| **ad_account_id** | **string**|  | |

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

## `createRfPrediction()`

```php
createRfPrediction($create_rf_prediction_request): \Zernio\Model\CreateRfPrediction201Response
```

Create a Reach & Frequency prediction

Creates an R&F prediction — a QUOTE, nothing is bought and no ad entities are created. Provide a date range plus exactly one of `budgetAmount` (Meta predicts reach) or `reach` (Meta predicts the budget). The response carries the estimate and its allowed bounds (min/max budget and reach). Predictions expire on their own; to buy, reserve one via POST /v1/ads/rf-predictions/{predictionId}/reserve and pass the RESERVED id to POST /v1/ads/create with `buyingType: \"RESERVED\"`.  Reservation campaigns reject automatic placements, so omitted `placements` default to Facebook feed (+ Instagram stream when a linked IG professional account resolves); Instagram placements require that IG account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ReachAndFrequencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_rf_prediction_request = new \Zernio\Model\CreateRfPredictionRequest(); // \Zernio\Model\CreateRfPredictionRequest

try {
    $result = $apiInstance->createRfPrediction($create_rf_prediction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachAndFrequencyApi->createRfPrediction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_rf_prediction_request** | [**\Zernio\Model\CreateRfPredictionRequest**](../Model/CreateRfPredictionRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateRfPrediction201Response**](../Model/CreateRfPrediction201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRfPrediction()`

```php
getRfPrediction($prediction_id, $account_id, $ad_account_id): \Zernio\Model\CreateRfPrediction201Response
```

Read a Reach & Frequency prediction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ReachAndFrequencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prediction_id = 'prediction_id_example'; // string
$account_id = 'account_id_example'; // string
$ad_account_id = 'ad_account_id_example'; // string

try {
    $result = $apiInstance->getRfPrediction($prediction_id, $account_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachAndFrequencyApi->getRfPrediction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **prediction_id** | **string**|  | |
| **account_id** | **string**|  | |
| **ad_account_id** | **string**|  | |

### Return type

[**\Zernio\Model\CreateRfPrediction201Response**](../Model/CreateRfPrediction201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reserveRfPrediction()`

```php
reserveRfPrediction($prediction_id, $reserve_rf_prediction_request): \Zernio\Model\ReserveRfPrediction201Response
```

Reserve a Reach & Frequency prediction

Locks the quoted price + inventory until the returned `expiresAt` and mints a NEW prediction id — pass that RESERVED id (not the original) as `rfPredictionId` on POST /v1/ads/create. Release an unused reservation via DELETE.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ReachAndFrequencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prediction_id = 'prediction_id_example'; // string
$reserve_rf_prediction_request = new \Zernio\Model\ReserveRfPredictionRequest(); // \Zernio\Model\ReserveRfPredictionRequest

try {
    $result = $apiInstance->reserveRfPrediction($prediction_id, $reserve_rf_prediction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachAndFrequencyApi->reserveRfPrediction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **prediction_id** | **string**|  | |
| **reserve_rf_prediction_request** | [**\Zernio\Model\ReserveRfPredictionRequest**](../Model/ReserveRfPredictionRequest.md)|  | |

### Return type

[**\Zernio\Model\ReserveRfPrediction201Response**](../Model/ReserveRfPrediction201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
