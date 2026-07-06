# Zernio\VoiceApi

Regular phone (PSTN) calling on your numbers. Enable voice on a number and route inbound calls to your own AI voice agent (Vapi/Retell), a phone, or a SIP endpoint, with voicemail, business-hours routing, IVR, recording, and transcription. Place outbound calls, manage live ones (end, blind-transfer), resolve recordings, and drive the browser softphone. Private beta: returns 403 unless your account is enrolled.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createVoiceCall()**](VoiceApi.md#createVoiceCall) | **POST** /v1/voice/calls | Place an outbound phone call |
| [**createVoiceWebSession()**](VoiceApi.md#createVoiceWebSession) | **POST** /v1/voice/calls/web | Mint a browser softphone session |
| [**dialVoiceWebCall()**](VoiceApi.md#dialVoiceWebCall) | **POST** /v1/voice/calls/web/dial | Dial from the browser softphone |
| [**disableVoiceOnNumber()**](VoiceApi.md#disableVoiceOnNumber) | **DELETE** /v1/phone-numbers/{id}/voice | Disable phone calling on a number |
| [**enableVoiceOnNumber()**](VoiceApi.md#enableVoiceOnNumber) | **POST** /v1/phone-numbers/{id}/voice | Enable phone calling on a number |
| [**endVoiceCall()**](VoiceApi.md#endVoiceCall) | **POST** /v1/voice/calls/{id}/end | Hang up a live call |
| [**getVoiceCall()**](VoiceApi.md#getVoiceCall) | **GET** /v1/voice/calls/{id} | Get a phone call |
| [**getVoiceCallEstimate()**](VoiceApi.md#getVoiceCallEstimate) | **GET** /v1/voice/calls/estimate | Estimate call cost |
| [**getVoiceCallRecording()**](VoiceApi.md#getVoiceCallRecording) | **GET** /v1/voice/calls/{id}/recording | Get a call recording |
| [**listVoiceCalls()**](VoiceApi.md#listVoiceCalls) | **GET** /v1/voice/calls | List phone calls |
| [**transferVoiceCall()**](VoiceApi.md#transferVoiceCall) | **POST** /v1/voice/calls/{id}/transfer | Blind-transfer a live call |


## `createVoiceCall()`

```php
createVoiceCall($create_voice_call_request, $idempotency_key): \Zernio\Model\CreateVoiceCall200Response
```

Place an outbound phone call

Dials `to` FROM one of your voice-enabled numbers and, on answer, bridges the callee to the number's stored forward destination, or to the per-call `forwardTo` override. Destinations can be your own AI voice agent (Vapi/Retell), a phone, or a SIP endpoint. An optional `greeting` is spoken to the callee before the bridge.  The 200 response means the call is dialing; the lifecycle continues asynchronously (track it via `GET /v1/voice/calls/{id}` or the `call.*` webhooks). Outbound calls are capped per rolling hour (429 when hit).  **Idempotency:** send an `Idempotency-Key` header to make retries safe; same key + same body replays the original response instead of dialing (and billing) a second call. The body `idempotencyKey` field predates the header and keeps working; prefer the header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_voice_call_request = new \Zernio\Model\CreateVoiceCallRequest(); // \Zernio\Model\CreateVoiceCallRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes dial retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409.

try {
    $result = $apiInstance->createVoiceCall($create_voice_call_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->createVoiceCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_voice_call_request** | [**\Zernio\Model\CreateVoiceCallRequest**](../Model/CreateVoiceCallRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes dial retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. | [optional] |

### Return type

[**\Zernio\Model\CreateVoiceCall200Response**](../Model/CreateVoiceCall200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVoiceWebSession()`

```php
createVoiceWebSession(): \Zernio\Model\CreateVoiceWebSession200Response
```

Mint a browser softphone session

Step 1 of the two-step browser softphone handshake. Mints a WebRTC session (token + credential) the browser registers with the `@telnyx/webrtc` SDK. Once registered, call `POST /v1/voice/calls/web/dial` with the returned `credentialId` to place the call. The split avoids bridging to a browser that has not finished registering. The token lives ~1 hour (it must outlive the whole call, not just the handshake).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVoiceWebSession();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->createVoiceWebSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\CreateVoiceWebSession200Response**](../Model/CreateVoiceWebSession200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dialVoiceWebCall()`

```php
dialVoiceWebCall($dial_voice_web_call_request): \Zernio\Model\DialVoiceWebCall200Response
```

Dial from the browser softphone

Step 2 of the browser softphone handshake: places an outbound call whose answered leg is bridged to the browser registered with the credential from `POST /v1/voice/calls/web`. The call runs through the normal outbound lane, so it is logged as outbound (from = your number, to = target) and recorded per the number's settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dial_voice_web_call_request = new \Zernio\Model\DialVoiceWebCallRequest(); // \Zernio\Model\DialVoiceWebCallRequest

try {
    $result = $apiInstance->dialVoiceWebCall($dial_voice_web_call_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->dialVoiceWebCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dial_voice_web_call_request** | [**\Zernio\Model\DialVoiceWebCallRequest**](../Model/DialVoiceWebCallRequest.md)|  | |

### Return type

[**\Zernio\Model\DialVoiceWebCall200Response**](../Model/DialVoiceWebCall200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableVoiceOnNumber()`

```php
disableVoiceOnNumber($id): \Zernio\Model\DisableVoiceOnNumber200Response
```

Disable phone calling on a number

Turns off PSTN calling for the number. The stored forward destination and settings are preserved, so re-enabling restores the prior config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->disableVoiceOnNumber($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->disableVoiceOnNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Zernio\Model\DisableVoiceOnNumber200Response**](../Model/DisableVoiceOnNumber200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableVoiceOnNumber()`

```php
enableVoiceOnNumber($id, $enable_voice_on_number_request): \Zernio\Model\EnableVoiceOnNumber200Response
```

Enable phone calling on a number

Turns on regular phone (PSTN) calling for one of your numbers and configures how inbound calls are handled. Inbound calls route to `forwardTo`: your own AI voice agent (Vapi/Retell), a phone, or a SIP endpoint. Optional extras: voicemail, business-hours windows, an IVR menu, a caller blocklist, recording, and transcription. A number can also be voice-enabled with no forward (outbound-only).  Idempotent, and doubles as the settings update: only fields present in the body are written. Omitting `forwardTo` preserves the current destination; sending an empty string clears it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Phone number record ID (from GET /v1/phone-numbers).
$enable_voice_on_number_request = new \Zernio\Model\EnableVoiceOnNumberRequest(); // \Zernio\Model\EnableVoiceOnNumberRequest

try {
    $result = $apiInstance->enableVoiceOnNumber($id, $enable_voice_on_number_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->enableVoiceOnNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Phone number record ID (from GET /v1/phone-numbers). | |
| **enable_voice_on_number_request** | [**\Zernio\Model\EnableVoiceOnNumberRequest**](../Model/EnableVoiceOnNumberRequest.md)|  | [optional] |

### Return type

[**\Zernio\Model\EnableVoiceOnNumber200Response**](../Model/EnableVoiceOnNumber200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `endVoiceCall()`

```php
endVoiceCall($id): \Zernio\Model\EndVoiceCall200Response
```

Hang up a live call

Hangs up a live call on demand. Idempotent: ending a call that already ended (or never connected) returns success with the call's current status. Final duration/cost are written asynchronously when the hangup event lands, so the call doc may briefly still show its prior status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->endVoiceCall($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->endVoiceCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Zernio\Model\EndVoiceCall200Response**](../Model/EndVoiceCall200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoiceCall()`

```php
getVoiceCall($id): \Zernio\Model\GetVoiceCall200Response
```

Get a phone call

Full call detail, including the transcript segments when transcription was on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVoiceCall($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->getVoiceCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Zernio\Model\GetVoiceCall200Response**](../Model/GetVoiceCall200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoiceCallEstimate()`

```php
getVoiceCallEstimate($to, $minutes, $recording, $transcription): \Zernio\Model\GetVoiceCallEstimate200Response
```

Estimate call cost

Pre-call cost estimate for a PSTN call: the carrier leg plus optional recording and transcription add-ons. Same billing formula as the post-call invoice, so the quote and the final charge can't disagree. The per-minute figure is deliberately conservative (the real cost comes from the settled carrier record after the call), so estimates trend slightly over the actual invoice. Parity endpoint of `GET /v1/whatsapp/calls/estimate`, minus the Meta line (PSTN calls have no separate Meta bill, so `totalCostUSD` equals `billableCostUSD`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$to = 'to_example'; // string | Destination number, E.164 (leading + optional).
$minutes = 1; // int
$recording = True; // bool
$transcription = True; // bool

try {
    $result = $apiInstance->getVoiceCallEstimate($to, $minutes, $recording, $transcription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->getVoiceCallEstimate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **to** | **string**| Destination number, E.164 (leading + optional). | |
| **minutes** | **int**|  | [optional] [default to 1] |
| **recording** | **bool**|  | [optional] |
| **transcription** | **bool**|  | [optional] |

### Return type

[**\Zernio\Model\GetVoiceCallEstimate200Response**](../Model/GetVoiceCallEstimate200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoiceCallRecording()`

```php
getVoiceCallRecording($id, $as): \Zernio\Model\GetWhatsAppCallRecording200Response
```

Get a call recording

Resolves a fresh, playable MP3 URL for the call's recording (provider-signed URLs expire ~10 minutes after signing, so this endpoint re-signs on demand). Default responds `302 Found` redirecting to the fresh URL; pass `as=json` to receive `{ url }` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$as = 'as_example'; // string | `json` returns `{ url }` instead of a 302 redirect.

try {
    $result = $apiInstance->getVoiceCallRecording($id, $as);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->getVoiceCallRecording: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **as** | **string**| &#x60;json&#x60; returns &#x60;{ url }&#x60; instead of a 302 redirect. | [optional] |

### Return type

[**\Zernio\Model\GetWhatsAppCallRecording200Response**](../Model/GetWhatsAppCallRecording200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVoiceCalls()`

```php
listVoiceCalls($status, $direction, $number, $before, $limit): \Zernio\Model\ListVoiceCalls200Response
```

List phone calls

Your PSTN voice calls (inbound + outbound), newest first. Cursor pagination: pass the returned `nextCursor` as `before` for the next page. For a history that also includes WhatsApp calls, use `GET /v1/calls`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string
$direction = 'direction_example'; // string
$number = 'number_example'; // string | Exact filter: calls involving this number (typically one of your DIDs). E.164, leading + optional.
$before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$limit = 50; // int

try {
    $result = $apiInstance->listVoiceCalls($status, $direction, $number, $before, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->listVoiceCalls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **string**|  | [optional] |
| **direction** | **string**|  | [optional] |
| **number** | **string**| Exact filter: calls involving this number (typically one of your DIDs). E.164, leading + optional. | [optional] |
| **before** | **\DateTime**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |

### Return type

[**\Zernio\Model\ListVoiceCalls200Response**](../Model/ListVoiceCalls200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferVoiceCall()`

```php
transferVoiceCall($id, $transfer_voice_call_request): \Zernio\Model\TransferVoiceCall200Response
```

Blind-transfer a live call

Moves the call's current leg to a new destination (a phone number or a SIP endpoint). This is a BLIND transfer: control of the leg is handed off and the call ends normally when the transferred leg hangs up. The caller ID presented on the transfer leg is always your own number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$transfer_voice_call_request = new \Zernio\Model\TransferVoiceCallRequest(); // \Zernio\Model\TransferVoiceCallRequest

try {
    $result = $apiInstance->transferVoiceCall($id, $transfer_voice_call_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->transferVoiceCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **transfer_voice_call_request** | [**\Zernio\Model\TransferVoiceCallRequest**](../Model/TransferVoiceCallRequest.md)|  | |

### Return type

[**\Zernio\Model\TransferVoiceCall200Response**](../Model/TransferVoiceCall200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
