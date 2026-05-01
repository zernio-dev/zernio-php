# Zernio\AccountGroupsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAccountGroup()**](AccountGroupsApi.md#createAccountGroup) | **POST** /v1/account-groups | Create group |
| [**deleteAccountGroup()**](AccountGroupsApi.md#deleteAccountGroup) | **DELETE** /v1/account-groups/{groupId} | Delete group |
| [**listAccountGroups()**](AccountGroupsApi.md#listAccountGroups) | **GET** /v1/account-groups | List groups |
| [**updateAccountGroup()**](AccountGroupsApi.md#updateAccountGroup) | **PUT** /v1/account-groups/{groupId} | Update group |


## `createAccountGroup()`

```php
createAccountGroup($create_account_group_request): \Zernio\Model\CreateAccountGroup201Response
```

Create group

Creates a new account group with a name and a list of social account IDs. Accounts can belong to different profiles; the caller must have access to every account's profile. Group names must be unique per user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_account_group_request = {"name":"Marketing Accounts","accountIds":["64e1f0a9e2b5af0012ab34cd","64e1f0a9e2b5af0012ab34ce"]}; // \Zernio\Model\CreateAccountGroupRequest

try {
    $result = $apiInstance->createAccountGroup($create_account_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountGroupsApi->createAccountGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_account_group_request** | [**\Zernio\Model\CreateAccountGroupRequest**](../Model/CreateAccountGroupRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateAccountGroup201Response**](../Model/CreateAccountGroup201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountGroup()`

```php
deleteAccountGroup($group_id): \Zernio\Model\DeleteAccountGroup200Response
```

Delete group

Permanently deletes an account group. The accounts themselves are not affected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->deleteAccountGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountGroupsApi->deleteAccountGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |

### Return type

[**\Zernio\Model\DeleteAccountGroup200Response**](../Model/DeleteAccountGroup200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccountGroups()`

```php
listAccountGroups(): \Zernio\Model\ListAccountGroups200Response
```

List groups

Returns all account groups visible to the authenticated user. Groups can contain accounts from multiple profiles. For API keys scoped to specific profiles, only groups whose accounts all live in allowed profiles are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listAccountGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountGroupsApi->listAccountGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\ListAccountGroups200Response**](../Model/ListAccountGroups200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountGroup()`

```php
updateAccountGroup($group_id, $update_account_group_request): \Zernio\Model\UpdateAccountGroup200Response
```

Update group

Updates the name or account list of an existing group. You can rename the group, change its accounts, or both.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$update_account_group_request = {"name":"Updated Marketing Accounts","accountIds":["64e1f0a9e2b5af0012ab34cd","64e1f0a9e2b5af0012ab34ce","64e1f0a9e2b5af0012ab34cf"]}; // \Zernio\Model\UpdateAccountGroupRequest

try {
    $result = $apiInstance->updateAccountGroup($group_id, $update_account_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountGroupsApi->updateAccountGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |
| **update_account_group_request** | [**\Zernio\Model\UpdateAccountGroupRequest**](../Model/UpdateAccountGroupRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateAccountGroup200Response**](../Model/UpdateAccountGroup200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
