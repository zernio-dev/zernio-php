# Zernio\InvitesApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInviteToken()**](InvitesApi.md#createInviteToken) | **POST** /v1/invite/tokens | Create invite token |


## `createInviteToken()`

```php
createInviteToken($create_invite_token_request): \Zernio\Model\CreateInviteToken201Response
```

Create invite token

Generate a secure invite link to grant team members access to your profiles. Invites expire after 7 days and are single-use.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_invite_token_request = {"scope":"profiles","profileIds":["64f0a1b2c3d4e5f6a7b8c9d0","64f0a1b2c3d4e5f6a7b8c9d1"]}; // \Zernio\Model\CreateInviteTokenRequest

try {
    $result = $apiInstance->createInviteToken($create_invite_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitesApi->createInviteToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_invite_token_request** | [**\Zernio\Model\CreateInviteTokenRequest**](../Model/CreateInviteTokenRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateInviteToken201Response**](../Model/CreateInviteToken201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
