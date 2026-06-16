# Zernio\WhatsAppCallingApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**disableWhatsAppCalling()**](WhatsAppCallingApi.md#disableWhatsAppCalling) | **DELETE** /v1/whatsapp/phone-numbers/{id}/calling | Disable calling on a number |
| [**enableWhatsAppCalling()**](WhatsAppCallingApi.md#enableWhatsAppCalling) | **POST** /v1/whatsapp/phone-numbers/{id}/calling | Enable calling on a number |
| [**getWhatsAppCall()**](WhatsAppCallingApi.md#getWhatsAppCall) | **GET** /v1/whatsapp/calls/{callId} | Get a single call |
| [**getWhatsAppCallEstimate()**](WhatsAppCallingApi.md#getWhatsAppCallEstimate) | **GET** /v1/whatsapp/calls/estimate | Estimate per-minute cost for a destination |
| [**getWhatsAppCallPermissions()**](WhatsAppCallingApi.md#getWhatsAppCallPermissions) | **GET** /v1/whatsapp/call-permissions | Check call permission for a consumer |
| [**getWhatsAppCallingConfig()**](WhatsAppCallingApi.md#getWhatsAppCallingConfig) | **GET** /v1/whatsapp/calling | Get calling config for an account |
| [**initiateWhatsAppCall()**](WhatsAppCallingApi.md#initiateWhatsAppCall) | **POST** /v1/whatsapp/calls | Initiate outbound call |
| [**listWhatsAppCalls()**](WhatsAppCallingApi.md#listWhatsAppCalls) | **GET** /v1/whatsapp/calls | List call history for an account |
| [**updateWhatsAppCalling()**](WhatsAppCallingApi.md#updateWhatsAppCalling) | **PATCH** /v1/whatsapp/phone-numbers/{id}/calling | Update calling config |


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

## `enableWhatsAppCalling()`

```php
enableWhatsAppCalling($id, $enable_whats_app_calling_request): \Zernio\Model\EnableWhatsAppCalling200Response
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
$id = 'id_example'; // string | WhatsAppPhoneNumber Mongo ID
$enable_whats_app_calling_request = new \Zernio\Model\EnableWhatsAppCallingRequest(); // \Zernio\Model\EnableWhatsAppCallingRequest

try {
    $result = $apiInstance->enableWhatsAppCalling($id, $enable_whats_app_calling_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCallingApi->enableWhatsAppCalling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| WhatsAppPhoneNumber Mongo ID | |
| **enable_whats_app_calling_request** | [**\Zernio\Model\EnableWhatsAppCallingRequest**](../Model/EnableWhatsAppCallingRequest.md)|  | |

### Return type

[**\Zernio\Model\EnableWhatsAppCalling200Response**](../Model/EnableWhatsAppCalling200Response.md)

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
getWhatsAppCall($call_id, $account_id): \Zernio\Model\GetWhatsAppCall200Response
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
$call_id = 'call_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getWhatsAppCall($call_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCallingApi->getWhatsAppCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **call_id** | **string**|  | |
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

Estimate per-minute cost for a destination

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

Check call permission for a consumer

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

## `getWhatsAppCallingConfig()`

```php
getWhatsAppCallingConfig($account_id): \Zernio\Model\GetWhatsAppCallingConfig200Response
```

Get calling config for an account

Returns the local calling configuration snapshot for the connected WhatsApp account: whether calling is enabled, the forward-to destination URI, recording opt-in state, the WhatsAppPhoneNumber doc id (use as `{id}` on the calling-config write endpoints) and whether SIP digest credentials are stored (the encrypted password itself is never returned).

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
initiateWhatsAppCall($initiate_whats_app_call_request): \Zernio\Model\InitiateWhatsAppCall200Response
```

Initiate outbound call

Initiates an outbound Business-Initiated Call. The Telnyx-side SIP leg is originated server-side (Option B: SIP-first). Telnyx INVITEs Meta directly over TLS:5061 with the SIP digest credentials we captured at calling-enablement time). No client-side SDP is required; pass only `accountId` and `to`.  To send the consumer the call-consent prompt instead of placing a call, pass `action: \"send_call_permission_request\"` (+ optional `bodyText`). The consumer must tap Allow in WhatsApp before `start_call` is permitted; Meta limits the prompt to 1 per consumer per 24h (2 per 7 days) and requires an open 24h service window.

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

try {
    $result = $apiInstance->initiateWhatsAppCall($initiate_whats_app_call_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCallingApi->initiateWhatsAppCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **initiate_whats_app_call_request** | [**\Zernio\Model\InitiateWhatsAppCallRequest**](../Model/InitiateWhatsAppCallRequest.md)|  | |

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
listWhatsAppCalls($account_id, $status, $direction, $since, $until, $limit): \Zernio\Model\ListWhatsAppCalls200Response
```

List call history for an account

Compact history listing for a single connected account. Results are scoped to the resolved SocialAccount; profile-scoped team members cannot read calls on sibling accounts.

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
$limit = 56; // int

try {
    $result = $apiInstance->listWhatsAppCalls($account_id, $status, $direction, $since, $until, $limit);
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
updateWhatsAppCalling($id, $update_whats_app_calling_request)
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
$update_whats_app_calling_request = new \Zernio\Model\UpdateWhatsAppCallingRequest(); // \Zernio\Model\UpdateWhatsAppCallingRequest

try {
    $apiInstance->updateWhatsAppCalling($id, $update_whats_app_calling_request);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCallingApi->updateWhatsAppCalling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_whats_app_calling_request** | [**\Zernio\Model\UpdateWhatsAppCallingRequest**](../Model/UpdateWhatsAppCallingRequest.md)|  | |

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
