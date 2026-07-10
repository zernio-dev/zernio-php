# Zernio\WhatsAppCallingApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**disableWhatsAppCalling()**](WhatsAppCallingApi.md#disableWhatsAppCalling) | **DELETE** /v1/phone-numbers/{id}/whatsapp/calling | Disable calling on a number |
| [**disableWhatsAppCallingLegacy()**](WhatsAppCallingApi.md#disableWhatsAppCallingLegacy) | **DELETE** /v1/whatsapp/phone-numbers/{id}/calling | Disable calling on a number |
| [**enableWhatsAppCalling()**](WhatsAppCallingApi.md#enableWhatsAppCalling) | **POST** /v1/phone-numbers/{id}/whatsapp/calling | Enable calling on a number |
| [**enableWhatsAppCallingLegacy()**](WhatsAppCallingApi.md#enableWhatsAppCallingLegacy) | **POST** /v1/whatsapp/phone-numbers/{id}/calling | Enable calling on a number |
| [**getWhatsAppCall()**](WhatsAppCallingApi.md#getWhatsAppCall) | **GET** /v1/whatsapp/calls/{id} | Get a single call |
| [**getWhatsAppCallEstimate()**](WhatsAppCallingApi.md#getWhatsAppCallEstimate) | **GET** /v1/whatsapp/calls/estimate | Estimate per-minute cost |
| [**getWhatsAppCallPermissions()**](WhatsAppCallingApi.md#getWhatsAppCallPermissions) | **GET** /v1/whatsapp/call-permissions | Check call permission |
| [**getWhatsAppCallRecording()**](WhatsAppCallingApi.md#getWhatsAppCallRecording) | **GET** /v1/whatsapp/calls/{id}/recording | Get a call recording |
| [**getWhatsAppCalling()**](WhatsAppCallingApi.md#getWhatsAppCalling) | **GET** /v1/phone-numbers/{id}/whatsapp/calling | Get calling config for a number |
| [**getWhatsAppCallingConfig()**](WhatsAppCallingApi.md#getWhatsAppCallingConfig) | **GET** /v1/whatsapp/calling | Get calling config for an account |
| [**initiateWhatsAppCall()**](WhatsAppCallingApi.md#initiateWhatsAppCall) | **POST** /v1/whatsapp/calls | Initiate outbound call |
| [**listWhatsAppCalls()**](WhatsAppCallingApi.md#listWhatsAppCalls) | **GET** /v1/whatsapp/calls | List call history for an account |
| [**updateWhatsAppCalling()**](WhatsAppCallingApi.md#updateWhatsAppCalling) | **PATCH** /v1/phone-numbers/{id}/whatsapp/calling | Update calling config |
| [**updateWhatsAppCallingLegacy()**](WhatsAppCallingApi.md#updateWhatsAppCallingLegacy) | **PATCH** /v1/whatsapp/phone-numbers/{id}/calling | Update calling config |


## `disableWhatsAppCalling()`

```php
disableWhatsAppCalling($id, $account_id)
```

Disable calling on a number

Disable calling. Sends calling.status=DISABLED to Meta (best-effort) and flips the local `callingEnabled` flag off. forwardTo and SIP creds are preserved so a re-enable does not lose the destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $apiInstance->disableWhatsAppCalling($id, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCallingApi->disableWhatsAppCalling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **account_id** | **string**|  | |

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

## `disableWhatsAppCallingLegacy()`

```php
disableWhatsAppCallingLegacy($id, $account_id)
```

Disable calling on a number

Deprecated alias of `/v1/phone-numbers/{id}/whatsapp/calling`; same contract. New integrations should use that path.  Disable calling. Sends calling.status=DISABLED to Meta (best-effort) and flips the local `callingEnabled` flag off. forwardTo and SIP creds are preserved so a re-enable does not lose the destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $apiInstance->disableWhatsAppCallingLegacy($id, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCallingApi->disableWhatsAppCallingLegacy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **account_id** | **string**|  | |

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

## `enableWhatsAppCalling()`

```php
enableWhatsAppCalling($id, $enable_whats_app_calling_legacy_request): \Zernio\Model\EnableWhatsAppCallingLegacy200Response
```

Enable calling on a number

Enable WhatsApp Business Calling on a connected number. Configures Meta calling.status=ENABLED with our Telnyx SIP endpoint, fetches and stores the Meta-issued SIP password (encrypted), and snapshots the customer's forward-to destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Phone number record ID (from GET /v1/phone-numbers).
$enable_whats_app_calling_legacy_request = new \Zernio\Model\EnableWhatsAppCallingLegacyRequest(); // \Zernio\Model\EnableWhatsAppCallingLegacyRequest

try {
    $result = $apiInstance->enableWhatsAppCalling($id, $enable_whats_app_calling_legacy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCallingApi->enableWhatsAppCalling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Phone number record ID (from GET /v1/phone-numbers). | |
| **enable_whats_app_calling_legacy_request** | [**\Zernio\Model\EnableWhatsAppCallingLegacyRequest**](../Model/EnableWhatsAppCallingLegacyRequest.md)|  | |

### Return type

[**\Zernio\Model\EnableWhatsAppCallingLegacy200Response**](../Model/EnableWhatsAppCallingLegacy200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableWhatsAppCallingLegacy()`

```php
enableWhatsAppCallingLegacy($id, $enable_whats_app_calling_legacy_request): \Zernio\Model\EnableWhatsAppCallingLegacy200Response
```

Enable calling on a number

Deprecated alias of `/v1/phone-numbers/{id}/whatsapp/calling`; same contract. New integrations should use that path.  Enable WhatsApp Business Calling on a connected number. Configures Meta calling.status=ENABLED with our Telnyx SIP endpoint, fetches and stores the Meta-issued SIP password (encrypted), and snapshots the customer's forward-to destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | WhatsAppPhoneNumber Mongo ID
$enable_whats_app_calling_legacy_request = new \Zernio\Model\EnableWhatsAppCallingLegacyRequest(); // \Zernio\Model\EnableWhatsAppCallingLegacyRequest

try {
    $result = $apiInstance->enableWhatsAppCallingLegacy($id, $enable_whats_app_calling_legacy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCallingApi->enableWhatsAppCallingLegacy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| WhatsAppPhoneNumber Mongo ID | |
| **enable_whats_app_calling_legacy_request** | [**\Zernio\Model\EnableWhatsAppCallingLegacyRequest**](../Model/EnableWhatsAppCallingLegacyRequest.md)|  | |

### Return type

[**\Zernio\Model\EnableWhatsAppCallingLegacy200Response**](../Model/EnableWhatsAppCallingLegacy200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppCall()`

```php
getWhatsAppCall($id, $account_id): \Zernio\Model\GetWhatsAppCall200Response
```

Get a single call

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getWhatsAppCall($id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCallingApi->getWhatsAppCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetWhatsAppCall200Response**](../Model/GetWhatsAppCall200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppCallEstimate()`

```php
getWhatsAppCallEstimate($account_id, $to, $minutes, $recording): \Zernio\Model\GetWhatsAppCallEstimate200Response
```

Estimate per-minute cost

Returns a zero-markup estimated cost for an outbound call to the given destination, broken down by Meta + Telnyx + recording line items. Costs are pass-through, no margin applied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$to = 'to_example'; // string
$minutes = 56; // int
$recording = True; // bool

try {
    $result = $apiInstance->getWhatsAppCallEstimate($account_id, $to, $minutes, $recording);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCallingApi->getWhatsAppCallEstimate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **to** | **string**|  | |
| **minutes** | **int**|  | [optional] |
| **recording** | **bool**|  | [optional] |

### Return type

[**\Zernio\Model\GetWhatsAppCallEstimate200Response**](../Model/GetWhatsAppCallEstimate200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppCallPermissions()`

```php
getWhatsAppCallPermissions($account_id, $to): \Zernio\Model\GetWhatsAppCallPermissions200Response
```

Check call permission

Returns the permission state and the list of available actions for a given consumer wa_id (e.g. `start_call`, `send_call_permission_request`). Use this before placing a call to decide whether to prompt for consent first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$to = 'to_example'; // string | Consumer wa_id (E.164, leading + optional)

try {
    $result = $apiInstance->getWhatsAppCallPermissions($account_id, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCallingApi->getWhatsAppCallPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **to** | **string**| Consumer wa_id (E.164, leading + optional) | |

### Return type

[**\Zernio\Model\GetWhatsAppCallPermissions200Response**](../Model/GetWhatsAppCallPermissions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppCallRecording()`

```php
getWhatsAppCallRecording($id, $account_id, $as): \Zernio\Model\GetWhatsAppCallRecording200Response
```

Get a call recording

Resolves a fresh, playable MP3 URL for the call's recording. Provider-signed recording URLs expire ~10 minutes after signing, so the `recordingUrl` stored on the call is usually stale by the time it is played; this endpoint re-signs on demand. Default responds `302 Found` redirecting to the fresh URL (point an `<audio>` element or a link straight at this endpoint); pass `as=json` to receive `{ url }` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$account_id = 'account_id_example'; // string
$as = 'as_example'; // string | `json` returns `{ url }` instead of a 302 redirect.

try {
    $result = $apiInstance->getWhatsAppCallRecording($id, $account_id, $as);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCallingApi->getWhatsAppCallRecording: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **account_id** | **string**|  | |
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

## `getWhatsAppCalling()`

```php
getWhatsAppCalling($id): \Zernio\Model\GetWhatsAppCalling200Response
```

Get calling config for a number

The WhatsApp Business Calling configuration of this number, keyed the same way as the POST/PATCH/DELETE below (full read-write on one sub-resource). Encrypted secrets are never returned; only a boolean saying whether a SIP password is stored. The account-scoped read (`GET /v1/whatsapp/calling?accountId=`) remains for callers that only know the social account id, and additionally carries account-level extras (billing eligibility, current-period spend).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Phone number record ID (from GET /v1/phone-numbers).

try {
    $result = $apiInstance->getWhatsAppCalling($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCallingApi->getWhatsAppCalling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Phone number record ID (from GET /v1/phone-numbers). | |

### Return type

[**\Zernio\Model\GetWhatsAppCalling200Response**](../Model/GetWhatsAppCalling200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppCallingConfig()`

```php
getWhatsAppCallingConfig($account_id): \Zernio\Model\GetWhatsAppCallingConfig200Response
```

Get calling config for an account

Returns the local calling configuration snapshot for the connected WhatsApp account: whether calling is enabled, the forward-to destination URI, recording opt-in state, the phone number record id (use as `{id}` on the read-write calling sub-resource at /v1/phone-numbers/{id}/whatsapp/calling) and whether SIP digest credentials are stored (the encrypted password itself is never returned). Also carries account-level extras (billing eligibility, current-period spend) that the number-keyed GET does not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->getWhatsAppCallingConfig($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCallingApi->getWhatsAppCallingConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\GetWhatsAppCallingConfig200Response**](../Model/GetWhatsAppCallingConfig200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initiateWhatsAppCall()`

```php
initiateWhatsAppCall($initiate_whats_app_call_request, $idempotency_key): \Zernio\Model\InitiateWhatsAppCall200Response
```

Initiate outbound call

Initiates an outbound Business-Initiated Call. The Telnyx-side SIP leg is originated server-side (Option B: SIP-first). Telnyx INVITEs Meta directly over TLS:5061 with the SIP digest credentials we captured at calling-enablement time). No client-side SDP is required; pass only `accountId` and `to`.  To send the consumer the call-consent prompt instead of placing a call, pass `action: \"send_call_permission_request\"` (+ optional `bodyText`). The consumer must tap Allow in WhatsApp before `start_call` is permitted; Meta limits the prompt to 1 per consumer per 24h (2 per 7 days) and requires an open 24h service window.  **Idempotency:** send an `Idempotency-Key` header to make retries safe; same key + same body replays the original response instead of dialing (and billing) a second call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$initiate_whats_app_call_request = new \Zernio\Model\InitiateWhatsAppCallRequest(); // \Zernio\Model\InitiateWhatsAppCallRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes dial retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409.

try {
    $result = $apiInstance->initiateWhatsAppCall($initiate_whats_app_call_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCallingApi->initiateWhatsAppCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **initiate_whats_app_call_request** | [**\Zernio\Model\InitiateWhatsAppCallRequest**](../Model/InitiateWhatsAppCallRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes dial retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. | [optional] |

### Return type

[**\Zernio\Model\InitiateWhatsAppCall200Response**](../Model/InitiateWhatsAppCall200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWhatsAppCalls()`

```php
listWhatsAppCalls($account_id, $status, $direction, $since, $until, $before, $limit): \Zernio\Model\ListWhatsAppCalls200Response
```

List call history for an account

Compact history listing for a single connected account. Results are scoped to the resolved SocialAccount; profile-scoped team members cannot read calls on sibling accounts.  Cursor pagination: pass the returned `nextCursor` as `before` to fetch the next page (same scheme as `GET /v1/calls`). `since`/`until` remain as absolute range filters and combine with the cursor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$status = 'status_example'; // string
$direction = 'direction_example'; // string
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Return calls with startedAt strictly before this instant (use the previous page's nextCursor).
$limit = 56; // int

try {
    $result = $apiInstance->listWhatsAppCalls($account_id, $status, $direction, $since, $until, $before, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCallingApi->listWhatsAppCalls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **status** | **string**|  | [optional] |
| **direction** | **string**|  | [optional] |
| **since** | **\DateTime**|  | [optional] |
| **until** | **\DateTime**|  | [optional] |
| **before** | **\DateTime**| Return calls with startedAt strictly before this instant (use the previous page&#39;s nextCursor). | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\Zernio\Model\ListWhatsAppCalls200Response**](../Model/ListWhatsAppCalls200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWhatsAppCalling()`

```php
updateWhatsAppCalling($id, $update_whats_app_calling_legacy_request)
```

Update calling config

Update fields on an already-enabled number. Only fields present in the body are written; `undefined` leaves the stored value alone, explicit `null` clears a nullable field. No Meta side effect, this only changes local routing state consumed by the Telnyx webhook handler.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_whats_app_calling_legacy_request = new \Zernio\Model\UpdateWhatsAppCallingLegacyRequest(); // \Zernio\Model\UpdateWhatsAppCallingLegacyRequest

try {
    $apiInstance->updateWhatsAppCalling($id, $update_whats_app_calling_legacy_request);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCallingApi->updateWhatsAppCalling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_whats_app_calling_legacy_request** | [**\Zernio\Model\UpdateWhatsAppCallingLegacyRequest**](../Model/UpdateWhatsAppCallingLegacyRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWhatsAppCallingLegacy()`

```php
updateWhatsAppCallingLegacy($id, $update_whats_app_calling_legacy_request)
```

Update calling config

Deprecated alias of `/v1/phone-numbers/{id}/whatsapp/calling`; same contract. New integrations should use that path.  Update fields on an already-enabled number. Only fields present in the body are written; `undefined` leaves the stored value alone, explicit `null` clears a nullable field. No Meta side effect, this only changes local routing state consumed by the Telnyx webhook handler.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_whats_app_calling_legacy_request = new \Zernio\Model\UpdateWhatsAppCallingLegacyRequest(); // \Zernio\Model\UpdateWhatsAppCallingLegacyRequest

try {
    $apiInstance->updateWhatsAppCallingLegacy($id, $update_whats_app_calling_legacy_request);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCallingApi->updateWhatsAppCallingLegacy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_whats_app_calling_legacy_request** | [**\Zernio\Model\UpdateWhatsAppCallingLegacyRequest**](../Model/UpdateWhatsAppCallingLegacyRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
