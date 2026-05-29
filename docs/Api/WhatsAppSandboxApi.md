# Zernio\WhatsAppSandboxApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWhatsAppSandboxSession()**](WhatsAppSandboxApi.md#createWhatsAppSandboxSession) | **POST** /v1/whatsapp/sandbox/sessions | Start a sandbox activation for a phone |
| [**deleteWhatsAppSandboxSession()**](WhatsAppSandboxApi.md#deleteWhatsAppSandboxSession) | **DELETE** /v1/whatsapp/sandbox/sessions/{sessionId} | Revoke a sandbox session |
| [**listWhatsAppSandboxSessions()**](WhatsAppSandboxApi.md#listWhatsAppSandboxSessions) | **GET** /v1/whatsapp/sandbox/sessions | List your sandbox sessions |


## `createWhatsAppSandboxSession()`

```php
createWhatsAppSandboxSession($create_whats_app_sandbox_session_request): \Zernio\Model\CreateWhatsAppSandboxSession200Response
```

Start a sandbox activation for a phone

Creates (or refreshes) a pending sandbox session for the given phone and immediately fires the verified sandbox template from the shared sandbox number to that phone. The session activates when the phone owner replies to that WhatsApp message — the reply itself is proof of ownership.  One phone per user: if the caller already has a non-expired session for a DIFFERENT phone, the request is rejected with `invalid_field_value` (the message names the existing phone so it can be revoked first). Re-creating a session for the SAME phone is idempotent and refreshes the verification template.  If Meta rejects the template send (not a WhatsApp number, paused WABA, token issue), the pending row is rolled back and the Meta error message is returned in `error` so the caller knows why.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppSandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_whats_app_sandbox_session_request = new \Zernio\Model\CreateWhatsAppSandboxSessionRequest(); // \Zernio\Model\CreateWhatsAppSandboxSessionRequest

try {
    $result = $apiInstance->createWhatsAppSandboxSession($create_whats_app_sandbox_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppSandboxApi->createWhatsAppSandboxSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_whats_app_sandbox_session_request** | [**\Zernio\Model\CreateWhatsAppSandboxSessionRequest**](../Model/CreateWhatsAppSandboxSessionRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateWhatsAppSandboxSession200Response**](../Model/CreateWhatsAppSandboxSession200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWhatsAppSandboxSession()`

```php
deleteWhatsAppSandboxSession($session_id): \Zernio\Model\DeleteWhatsAppSandboxSession200Response
```

Revoke a sandbox session

Hard-deletes the session. The user loses the ability to send to that phone via the sandbox until they re-activate it. Existing conversations and messages already exchanged with that phone are untouched — revocation only blocks FUTURE sends.  Sessions belonging to other users cannot be revoked; the response is the same 400 as \"session not found\" so existence isn't leaked.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppSandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | The session id returned by POST /v1/whatsapp/sandbox/sessions.

try {
    $result = $apiInstance->deleteWhatsAppSandboxSession($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppSandboxApi->deleteWhatsAppSandboxSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**| The session id returned by POST /v1/whatsapp/sandbox/sessions. | |

### Return type

[**\Zernio\Model\DeleteWhatsAppSandboxSession200Response**](../Model/DeleteWhatsAppSandboxSession200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWhatsAppSandboxSessions()`

```php
listWhatsAppSandboxSessions(): \Zernio\Model\ListWhatsAppSandboxSessions200Response
```

List your sandbox sessions

Returns all of the authenticated user's non-expired sandbox sessions (pending + active) plus the sandbox phone number. In practice there is at most one session per user since the sandbox is one-phone-per-user; the array shape is preserved for forward compatibility.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppSandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWhatsAppSandboxSessions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppSandboxApi->listWhatsAppSandboxSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\ListWhatsAppSandboxSessions200Response**](../Model/ListWhatsAppSandboxSessions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
