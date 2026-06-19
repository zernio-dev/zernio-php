# Zernio\SMSApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sendSms()**](SMSApi.md#sendSms) | **POST** /v1/sms/messages | Send an SMS or MMS |


## `sendSms()`

```php
sendSms($send_sms_request): \Zernio\Model\SendSms200Response
```

Send an SMS or MMS

Send a text (SMS) or media (MMS) message from one of your SMS-enabled numbers.  Provide `text`, `mediaUrls`, or both. Supply an `Idempotency-Key` header to make retries safe (a repeated key replays the original result instead of sending again). US numbers must have an approved carrier registration before they can deliver.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_sms_request = new \Zernio\Model\SendSmsRequest(); // \Zernio\Model\SendSmsRequest

try {
    $result = $apiInstance->sendSms($send_sms_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSApi->sendSms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_sms_request** | [**\Zernio\Model\SendSmsRequest**](../Model/SendSmsRequest.md)|  | |

### Return type

[**\Zernio\Model\SendSms200Response**](../Model/SendSms200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
