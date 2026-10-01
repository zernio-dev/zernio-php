# Zernio\RCSApi

Branded, verified RCS messaging. Each agent is a sender with your name, logo, banner and verified tick, owned by a vetted company (brand). The US is self-serve end to end; other markets are filed with the carriers by our team after review.  Lifecycle: &#x60;requested&#x60; (our review, nothing filed or billed) -&gt; &#x60;brand_vetting&#x60; -&gt; &#x60;agent_review&#x60; -&gt; &#x60;testing&#x60; (invite test phones, then send the launch filing) -&gt; &#x60;launch_review&#x60; (our review) -&gt; &#x60;launching&#x60; (carrier review) -&gt; &#x60;live&#x60;. Side exits: &#x60;changes_requested&#x60;, &#x60;rejected&#x60;, &#x60;deactivated&#x60;. Status changes fire &#x60;rcs.agent.status_updated&#x60;.  Pricing per agent in the US: $150 when we submit it to the carriers, $750 when it goes live, then $160/mo month to month from go-live (nothing monthly during carrier review). Other markets: $150 when filed, then $75/mo from go-live. Messages (sent and received) at 1.5x carrier cost. Set &#x60;smsFallbackFrom&#x60; to one of your SMS-enabled numbers and phones without RCS get the message as SMS.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRcsTestDevice()**](RCSApi.md#addRcsTestDevice) | **POST** /v1/rcs/agents/{agentId}/test-devices | Invite an RCS test phone |
| [**createRcsAgent()**](RCSApi.md#createRcsAgent) | **POST** /v1/rcs/agents | Request an RCS agent |
| [**deactivateRcsAgent()**](RCSApi.md#deactivateRcsAgent) | **DELETE** /v1/rcs/agents/{agentId} | Deactivate an RCS agent |
| [**getRcsAgent()**](RCSApi.md#getRcsAgent) | **GET** /v1/rcs/agents/{agentId} | Get an RCS agent |
| [**getRcsCapabilities()**](RCSApi.md#getRcsCapabilities) | **GET** /v1/rcs/capabilities | Check RCS capability |
| [**listRcsAgents()**](RCSApi.md#listRcsAgents) | **GET** /v1/rcs/agents | List RCS agents |
| [**listRcsBrands()**](RCSApi.md#listRcsBrands) | **GET** /v1/rcs/brands | List RCS brands |
| [**listRcsTestDevices()**](RCSApi.md#listRcsTestDevices) | **GET** /v1/rcs/agents/{agentId}/test-devices | List RCS test phones |
| [**removeRcsTestDevice()**](RCSApi.md#removeRcsTestDevice) | **DELETE** /v1/rcs/agents/{agentId}/test-devices/{testDeviceId} | Remove an RCS test phone |
| [**requestRcsAgentLaunch()**](RCSApi.md#requestRcsAgentLaunch) | **POST** /v1/rcs/agents/{agentId}/launch-request | Send the launch filing |
| [**sendRcsMessage()**](RCSApi.md#sendRcsMessage) | **POST** /v1/rcs/messages | Send an RCS message |
| [**updateRcsAgent()**](RCSApi.md#updateRcsAgent) | **PATCH** /v1/rcs/agents/{agentId} | Update an RCS agent |
| [**uploadRcsAsset()**](RCSApi.md#uploadRcsAsset) | **POST** /v1/rcs/assets | Upload an RCS logo or banner |


## `addRcsTestDevice()`

```php
addRcsTestDevice($agent_id, $add_rcs_test_device_request): \Zernio\Model\AddRcsTestDevice201Response
```

Invite an RCS test phone

Invites a phone to try the agent before launch. It must accept the invite in its messaging app. Available once the agent exists with the carriers (after brand vetting). T-Mobile and AT&T numbers cannot be test phones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\RCSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string
$add_rcs_test_device_request = new \Zernio\Model\AddRcsTestDeviceRequest(); // \Zernio\Model\AddRcsTestDeviceRequest

try {
    $result = $apiInstance->addRcsTestDevice($agent_id, $add_rcs_test_device_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RCSApi->addRcsTestDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |
| **add_rcs_test_device_request** | [**\Zernio\Model\AddRcsTestDeviceRequest**](../Model/AddRcsTestDeviceRequest.md)|  | |

### Return type

[**\Zernio\Model\AddRcsTestDevice201Response**](../Model/AddRcsTestDevice201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRcsAgent()`

```php
createRcsAgent($create_rcs_agent_request, $idempotency_key): \Zernio\Model\CreateRcsAgent201Response
```

Request an RCS agent

Requests a new agent for a profile, with a new company (`brand`) or an existing one (`brandId`, skips vetting when it is already verified). The request lands in our review: nothing is filed with the carriers or billed until we submit it. A profile can hold several agents. Requires usage-based billing and a card on file. Send an `Idempotency-Key` header to make retries safe.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\RCSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_rcs_agent_request = new \Zernio\Model\CreateRcsAgentRequest(); // \Zernio\Model\CreateRcsAgentRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409.

try {
    $result = $apiInstance->createRcsAgent($create_rcs_agent_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RCSApi->createRcsAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_rcs_agent_request** | [**\Zernio\Model\CreateRcsAgentRequest**](../Model/CreateRcsAgentRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. | [optional] |

### Return type

[**\Zernio\Model\CreateRcsAgent201Response**](../Model/CreateRcsAgent201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivateRcsAgent()`

```php
deactivateRcsAgent($agent_id): \Zernio\Model\CreateRcsAgent201Response
```

Deactivate an RCS agent

Stops sending, disconnects its inbox account and stops monthly billing. Fees already charged are not refunded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\RCSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string

try {
    $result = $apiInstance->deactivateRcsAgent($agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RCSApi->deactivateRcsAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |

### Return type

[**\Zernio\Model\CreateRcsAgent201Response**](../Model/CreateRcsAgent201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRcsAgent()`

```php
getRcsAgent($agent_id): \Zernio\Model\CreateRcsAgent201Response
```

Get an RCS agent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\RCSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string

try {
    $result = $apiInstance->getRcsAgent($agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RCSApi->getRcsAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |

### Return type

[**\Zernio\Model\CreateRcsAgent201Response**](../Model/CreateRcsAgent201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRcsCapabilities()`

```php
getRcsCapabilities($agent_id, $numbers): \Zernio\Model\GetRcsCapabilities200Response
```

Check RCS capability

Which recipients can receive RCS from the agent and which rich features their phones support. Up to 100 numbers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\RCSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string
$numbers = 'numbers_example'; // string | Comma-separated E.164 numbers, max 100.

try {
    $result = $apiInstance->getRcsCapabilities($agent_id, $numbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RCSApi->getRcsCapabilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |
| **numbers** | **string**| Comma-separated E.164 numbers, max 100. | |

### Return type

[**\Zernio\Model\GetRcsCapabilities200Response**](../Model/GetRcsCapabilities200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRcsAgents()`

```php
listRcsAgents($include_closed): \Zernio\Model\ListRcsAgents200Response
```

List RCS agents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\RCSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_closed = True; // bool | Include rejected and deactivated agents.

try {
    $result = $apiInstance->listRcsAgents($include_closed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RCSApi->listRcsAgents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include_closed** | **bool**| Include rejected and deactivated agents. | [optional] |

### Return type

[**\Zernio\Model\ListRcsAgents200Response**](../Model/ListRcsAgents200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRcsBrands()`

```php
listRcsBrands(): \Zernio\Model\ListRcsBrands200Response
```

List RCS brands

The team's RCS brands (vetted companies), to reuse one for another agent with `brandId`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\RCSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listRcsBrands();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RCSApi->listRcsBrands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\ListRcsBrands200Response**](../Model/ListRcsBrands200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRcsTestDevices()`

```php
listRcsTestDevices($agent_id): \Zernio\Model\ListRcsTestDevices200Response
```

List RCS test phones

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\RCSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string

try {
    $result = $apiInstance->listRcsTestDevices($agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RCSApi->listRcsTestDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |

### Return type

[**\Zernio\Model\ListRcsTestDevices200Response**](../Model/ListRcsTestDevices200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeRcsTestDevice()`

```php
removeRcsTestDevice($agent_id, $test_device_id): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Remove an RCS test phone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\RCSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string
$test_device_id = 'test_device_id_example'; // string

try {
    $result = $apiInstance->removeRcsTestDevice($agent_id, $test_device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RCSApi->removeRcsTestDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |
| **test_device_id** | **string**|  | |

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

## `requestRcsAgentLaunch()`

```php
requestRcsAgentLaunch($agent_id, $rcs_launch_request): \Zernio\Model\CreateRcsAgent201Response
```

Send the launch filing

Sends the launch details the carriers review (campaign, consent and a public test video). US agents send them once they are in `testing`; we review them before they reach the carriers. Agents in other markets send them while still in review (`requested`, `changes_requested` or `brand_vetting`), because we file everything with the carriers at once; this saves the details without changing the status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\RCSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string
$rcs_launch_request = new \Zernio\Model\RcsLaunchRequest(); // \Zernio\Model\RcsLaunchRequest

try {
    $result = $apiInstance->requestRcsAgentLaunch($agent_id, $rcs_launch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RCSApi->requestRcsAgentLaunch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |
| **rcs_launch_request** | [**\Zernio\Model\RcsLaunchRequest**](../Model/RcsLaunchRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateRcsAgent201Response**](../Model/CreateRcsAgent201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendRcsMessage()`

```php
sendRcsMessage($send_rcs_message_request, $idempotency_key): \Zernio\Model\SendRcsMessage200Response
```

Send an RCS message

Sends from one of your agents. Use `text` for a plain message or `content` for rich content (card, carousel, media, suggestion chips). Before launch an agent only reaches test phones that accepted the invite. With the agent's `smsFallbackFrom` set, phones without RCS get `fallbackText` (default: the message's readable text) as SMS.  Replies and status arrive as webhooks with `platform: \"rcs\"`: `message.received` (a tapped chip carries its postback in `metadata.postbackPayload`), `message.delivered`, `message.read` and `message.failed`. Send an `Idempotency-Key` header to make retries safe.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\RCSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_rcs_message_request = new \Zernio\Model\SendRcsMessageRequest(); // \Zernio\Model\SendRcsMessageRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409.

try {
    $result = $apiInstance->sendRcsMessage($send_rcs_message_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RCSApi->sendRcsMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_rcs_message_request** | [**\Zernio\Model\SendRcsMessageRequest**](../Model/SendRcsMessageRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. | [optional] |

### Return type

[**\Zernio\Model\SendRcsMessage200Response**](../Model/SendRcsMessage200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRcsAgent()`

```php
updateRcsAgent($agent_id, $update_rcs_agent_request): \Zernio\Model\CreateRcsAgent201Response
```

Update an RCS agent

Edits the filing while the agent is `requested` or `changes_requested`; answering a change request puts it back in our review. The company can only change until it is filed. `smsFallbackFrom` stays editable in any status (null removes it).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\RCSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_id = 'agent_id_example'; // string
$update_rcs_agent_request = new \Zernio\Model\UpdateRcsAgentRequest(); // \Zernio\Model\UpdateRcsAgentRequest

try {
    $result = $apiInstance->updateRcsAgent($agent_id, $update_rcs_agent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RCSApi->updateRcsAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_id** | **string**|  | |
| **update_rcs_agent_request** | [**\Zernio\Model\UpdateRcsAgentRequest**](../Model/UpdateRcsAgentRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateRcsAgent201Response**](../Model/CreateRcsAgent201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadRcsAsset()`

```php
uploadRcsAsset($file, $kind): \Zernio\Model\ListInboxReviews200ResponseDataInnerPhotosInner
```

Upload an RCS logo or banner

Uploads an image and returns a public URL for `profile.logoUrl` or `profile.heroUrl`. The image is cropped and compressed to the carriers' exact rules (logo 224x224 under 50 KB, banner 1440x448 under 200 KB).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\RCSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject | PNG, JPEG or WebP.
$kind = 'kind_example'; // string

try {
    $result = $apiInstance->uploadRcsAsset($file, $kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RCSApi->uploadRcsAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| PNG, JPEG or WebP. | |
| **kind** | **string**|  | |

### Return type

[**\Zernio\Model\ListInboxReviews200ResponseDataInnerPhotosInner**](../Model/ListInboxReviews200ResponseDataInnerPhotosInner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
