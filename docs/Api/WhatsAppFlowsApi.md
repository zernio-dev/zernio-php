# Zernio\WhatsAppFlowsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWhatsAppFlow()**](WhatsAppFlowsApi.md#createWhatsAppFlow) | **POST** /v1/whatsapp/flows | Create flow |
| [**deleteWhatsAppFlow()**](WhatsAppFlowsApi.md#deleteWhatsAppFlow) | **DELETE** /v1/whatsapp/flows/{flowId} | Delete flow |
| [**deprecateWhatsAppFlow()**](WhatsAppFlowsApi.md#deprecateWhatsAppFlow) | **POST** /v1/whatsapp/flows/{flowId}/deprecate | Deprecate flow |
| [**getWhatsAppFlow()**](WhatsAppFlowsApi.md#getWhatsAppFlow) | **GET** /v1/whatsapp/flows/{flowId} | Get flow |
| [**getWhatsAppFlowJson()**](WhatsAppFlowsApi.md#getWhatsAppFlowJson) | **GET** /v1/whatsapp/flows/{flowId}/json | Get flow JSON asset |
| [**getWhatsAppFlowPreview()**](WhatsAppFlowsApi.md#getWhatsAppFlowPreview) | **GET** /v1/whatsapp/flows/{flowId}/preview | Get flow preview URL |
| [**listWhatsAppFlowResponses()**](WhatsAppFlowsApi.md#listWhatsAppFlowResponses) | **GET** /v1/whatsapp/flow-responses | List flow responses |
| [**listWhatsAppFlowVersions()**](WhatsAppFlowsApi.md#listWhatsAppFlowVersions) | **GET** /v1/whatsapp/flows/{flowId}/versions | List flow versions |
| [**listWhatsAppFlows()**](WhatsAppFlowsApi.md#listWhatsAppFlows) | **GET** /v1/whatsapp/flows | List flows |
| [**publishWhatsAppFlow()**](WhatsAppFlowsApi.md#publishWhatsAppFlow) | **POST** /v1/whatsapp/flows/{flowId}/publish | Publish flow |
| [**sendWhatsAppFlowMessage()**](WhatsAppFlowsApi.md#sendWhatsAppFlowMessage) | **POST** /v1/whatsapp/flows/send | Send flow message |
| [**updateWhatsAppFlow()**](WhatsAppFlowsApi.md#updateWhatsAppFlow) | **PATCH** /v1/whatsapp/flows/{flowId} | Update flow |
| [**uploadWhatsAppFlowJson()**](WhatsAppFlowsApi.md#uploadWhatsAppFlowJson) | **PUT** /v1/whatsapp/flows/{flowId}/json | Upload flow JSON |


## `createWhatsAppFlow()`

```php
createWhatsAppFlow($create_whats_app_flow_request): \Zernio\Model\CreateWhatsAppFlow200Response
```

Create flow

Create a new WhatsApp Flow in DRAFT status. Optionally clone an existing flow. After creating, upload a Flow JSON definition, then publish to make it sendable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_whats_app_flow_request = {"accountId":"507f1f77bcf86cd799439011","name":"lead_capture_form","categories":["LEAD_GENERATION"]}; // \Zernio\Model\CreateWhatsAppFlowRequest

try {
    $result = $apiInstance->createWhatsAppFlow($create_whats_app_flow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppFlowsApi->createWhatsAppFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_whats_app_flow_request** | [**\Zernio\Model\CreateWhatsAppFlowRequest**](../Model/CreateWhatsAppFlowRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateWhatsAppFlow200Response**](../Model/CreateWhatsAppFlow200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWhatsAppFlow()`

```php
deleteWhatsAppFlow($flow_id, $account_id): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Delete flow

Delete a DRAFT flow. This is irreversible. Only flows in DRAFT status can be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string | Flow ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->deleteWhatsAppFlow($flow_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppFlowsApi->deleteWhatsAppFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**| Flow ID | |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deprecateWhatsAppFlow()`

```php
deprecateWhatsAppFlow($flow_id, $create_whats_app_dataset_request): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Deprecate flow

Deprecate a PUBLISHED flow. This is irreversible. Deprecated flows cannot be sent or opened, but existing active sessions may continue until they complete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string | Flow ID
$create_whats_app_dataset_request = new \Zernio\Model\CreateWhatsAppDatasetRequest(); // \Zernio\Model\CreateWhatsAppDatasetRequest

try {
    $result = $apiInstance->deprecateWhatsAppFlow($flow_id, $create_whats_app_dataset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppFlowsApi->deprecateWhatsAppFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**| Flow ID | |
| **create_whats_app_dataset_request** | [**\Zernio\Model\CreateWhatsAppDatasetRequest**](../Model/CreateWhatsAppDatasetRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppFlow()`

```php
getWhatsAppFlow($flow_id, $account_id, $fields): \Zernio\Model\GetWhatsAppFlow200Response
```

Get flow

Get details for a specific flow, including status, categories, validation errors, and preview URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string | Flow ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$fields = 'fields_example'; // string | Comma-separated fields to return (default: id,name,status,categories,validation_errors,json_version,preview,data_api_version,endpoint_uri)

try {
    $result = $apiInstance->getWhatsAppFlow($flow_id, $account_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppFlowsApi->getWhatsAppFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**| Flow ID | |
| **account_id** | **string**| WhatsApp social account ID | |
| **fields** | **string**| Comma-separated fields to return (default: id,name,status,categories,validation_errors,json_version,preview,data_api_version,endpoint_uri) | [optional] |

### Return type

[**\Zernio\Model\GetWhatsAppFlow200Response**](../Model/GetWhatsAppFlow200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppFlowJson()`

```php
getWhatsAppFlowJson($flow_id, $account_id): \Zernio\Model\GetWhatsAppFlowJson200Response
```

Get flow JSON asset

Get the flow JSON asset metadata, including a temporary download URL for the Flow JSON file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string | Flow ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->getWhatsAppFlowJson($flow_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppFlowsApi->getWhatsAppFlowJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**| Flow ID | |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\GetWhatsAppFlowJson200Response**](../Model/GetWhatsAppFlowJson200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppFlowPreview()`

```php
getWhatsAppFlowPreview($flow_id, $account_id, $invalidate): \Zernio\Model\GetWhatsAppFlowPreview200Response
```

Get flow preview URL

Get Meta's public web-preview URL for a flow (drafts included), embeddable as an interactive iframe. The link is reused across calls (valid ~30 days); pass invalidate=true to mint a fresh one (the previous link stops working).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string | Flow ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$invalidate = True; // bool | Mint a fresh preview link (default false)

try {
    $result = $apiInstance->getWhatsAppFlowPreview($flow_id, $account_id, $invalidate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppFlowsApi->getWhatsAppFlowPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**| Flow ID | |
| **account_id** | **string**| WhatsApp social account ID | |
| **invalidate** | **bool**| Mint a fresh preview link (default false) | [optional] |

### Return type

[**\Zernio\Model\GetWhatsAppFlowPreview200Response**](../Model/GetWhatsAppFlowPreview200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWhatsAppFlowResponses()`

```php
listWhatsAppFlowResponses($account_id, $flow_id, $limit): \Zernio\Model\ListWhatsAppFlowResponses200Response
```

List flow responses

List the responses customers submitted when completing a flow (parsed from the nfm_reply messages received via webhook), newest first. Scope to a single flow with `flowId` — this matches responses whose flow_token carries the `<flowId>:` prefix that Zernio stamps on auto-generated tokens at send time. Responses sent with a custom integrator-supplied flow_token are not attributed to a flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$flow_id = 'flow_id_example'; // string | Scope to responses for this flow
$limit = 50; // int | Max responses to return

try {
    $result = $apiInstance->listWhatsAppFlowResponses($account_id, $flow_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppFlowsApi->listWhatsAppFlowResponses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |
| **flow_id** | **string**| Scope to responses for this flow | [optional] |
| **limit** | **int**| Max responses to return | [optional] [default to 50] |

### Return type

[**\Zernio\Model\ListWhatsAppFlowResponses200Response**](../Model/ListWhatsAppFlowResponses200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWhatsAppFlowVersions()`

```php
listWhatsAppFlowVersions($flow_id, $account_id): \Zernio\Model\ListWhatsAppFlowVersions200Response
```

List flow versions

List the flow's version history (the clone lineage Zernio tracks, since Meta has no native versioning), newest version first. Each entry is enriched with the version's live name and status from Meta. A flow with no lineage returns just itself as version 1.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string | Flow ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->listWhatsAppFlowVersions($flow_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppFlowsApi->listWhatsAppFlowVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**| Flow ID | |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\ListWhatsAppFlowVersions200Response**](../Model/ListWhatsAppFlowVersions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWhatsAppFlows()`

```php
listWhatsAppFlows($account_id): \Zernio\Model\ListWhatsAppFlows200Response
```

List flows

List all WhatsApp Flows for the Business Account (WABA) associated with the given account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->listWhatsAppFlows($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppFlowsApi->listWhatsAppFlows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\ListWhatsAppFlows200Response**](../Model/ListWhatsAppFlows200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publishWhatsAppFlow()`

```php
publishWhatsAppFlow($flow_id, $create_whats_app_dataset_request): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Publish flow

Publish a DRAFT flow. This is irreversible. Once published, the flow and its JSON become immutable and the flow can be sent to users. To update a published flow, create a new flow (optionally cloning this one via cloneFlowId).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string | Flow ID
$create_whats_app_dataset_request = new \Zernio\Model\CreateWhatsAppDatasetRequest(); // \Zernio\Model\CreateWhatsAppDatasetRequest

try {
    $result = $apiInstance->publishWhatsAppFlow($flow_id, $create_whats_app_dataset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppFlowsApi->publishWhatsAppFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**| Flow ID | |
| **create_whats_app_dataset_request** | [**\Zernio\Model\CreateWhatsAppDatasetRequest**](../Model/CreateWhatsAppDatasetRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendWhatsAppFlowMessage()`

```php
sendWhatsAppFlowMessage($send_whats_app_flow_message_request): \Zernio\Model\SendWhatsAppFlowMessage200Response
```

Send flow message

Send a published flow as an interactive message with a CTA button. When the recipient taps the button, the flow opens natively in WhatsApp. Flow responses are received via webhooks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_whats_app_flow_message_request = {"accountId":"507f1f77bcf86cd799439011","to":"+1234567890","flow_id":"1234567890","flow_cta":"Get a Quote","flow_action":"navigate","flow_action_payload":{"screen":"LEAD_FORM"},"body":"Hi! Fill out this quick form to get a personalized quote."}; // \Zernio\Model\SendWhatsAppFlowMessageRequest

try {
    $result = $apiInstance->sendWhatsAppFlowMessage($send_whats_app_flow_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppFlowsApi->sendWhatsAppFlowMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_whats_app_flow_message_request** | [**\Zernio\Model\SendWhatsAppFlowMessageRequest**](../Model/SendWhatsAppFlowMessageRequest.md)|  | |

### Return type

[**\Zernio\Model\SendWhatsAppFlowMessage200Response**](../Model/SendWhatsAppFlowMessage200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWhatsAppFlow()`

```php
updateWhatsAppFlow($flow_id, $update_whats_app_flow_request): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Update flow

Update metadata (name, categories) of a DRAFT flow. Published flows are immutable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string | Flow ID
$update_whats_app_flow_request = new \Zernio\Model\UpdateWhatsAppFlowRequest(); // \Zernio\Model\UpdateWhatsAppFlowRequest

try {
    $result = $apiInstance->updateWhatsAppFlow($flow_id, $update_whats_app_flow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppFlowsApi->updateWhatsAppFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**| Flow ID | |
| **update_whats_app_flow_request** | [**\Zernio\Model\UpdateWhatsAppFlowRequest**](../Model/UpdateWhatsAppFlowRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadWhatsAppFlowJson()`

```php
uploadWhatsAppFlowJson($flow_id, $upload_whats_app_flow_json_request): \Zernio\Model\UploadWhatsAppFlowJson200Response
```

Upload flow JSON

Upload or update the Flow JSON for a DRAFT flow. The Flow JSON defines all screens, components (text inputs, dropdowns, date pickers, etc.), and navigation.  Meta validates the JSON on upload and returns any validation errors. See: https://developers.facebook.com/docs/whatsapp/flows/reference/flowjson

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string | Flow ID
$upload_whats_app_flow_json_request = {"accountId":"507f1f77bcf86cd799439011","flow_json":{"version":"6.0","screens":[{"id":"LEAD_FORM","title":"Get a Quote","terminal":true,"success":true,"layout":{"type":"SingleColumnLayout","children":[{"type":"TextInput","name":"full_name","label":"Full Name","required":true,"input-type":"text"},{"type":"TextInput","name":"email","label":"Email","required":true,"input-type":"email"},{"type":"Footer","label":"Submit","on-click-action":{"name":"complete","payload":{"full_name":"${form.full_name}","email":"${form.email}"}}}]}}]}}; // \Zernio\Model\UploadWhatsAppFlowJsonRequest

try {
    $result = $apiInstance->uploadWhatsAppFlowJson($flow_id, $upload_whats_app_flow_json_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppFlowsApi->uploadWhatsAppFlowJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**| Flow ID | |
| **upload_whats_app_flow_json_request** | [**\Zernio\Model\UploadWhatsAppFlowJsonRequest**](../Model/UploadWhatsAppFlowJsonRequest.md)|  | |

### Return type

[**\Zernio\Model\UploadWhatsAppFlowJson200Response**](../Model/UploadWhatsAppFlowJson200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
