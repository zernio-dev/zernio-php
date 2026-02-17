# Late\AccountGroupsApi



All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAccountGroup()**](AccountGroupsApi.md#createAccountGroup) | **POST** /v1/account-groups | Create group |
| [**deleteAccountGroup()**](AccountGroupsApi.md#deleteAccountGroup) | **DELETE** /v1/account-groups/{groupId} | Delete group |
| [**listAccountGroups()**](AccountGroupsApi.md#listAccountGroups) | **GET** /v1/account-groups | List groups |
| [**updateAccountGroup()**](AccountGroupsApi.md#updateAccountGroup) | **PUT** /v1/account-groups/{groupId} | Update group |


## `createAccountGroup()`

```php
createAccountGroup($create_account_group_request): \Late\Model\CreateAccountGroup201Response
```

Create group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AccountGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_account_group_request = {"name":"Marketing Accounts","accountIds":["64e1f0a9e2b5af0012ab34cd","64e1f0a9e2b5af0012ab34ce"]}; // \Late\Model\CreateAccountGroupRequest

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
| **create_account_group_request** | [**\Late\Model\CreateAccountGroupRequest**](../Model/CreateAccountGroupRequest.md)|  | |

### Return type

[**\Late\Model\CreateAccountGroup201Response**](../Model/CreateAccountGroup201Response.md)

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
deleteAccountGroup($group_id): \Late\Model\DeleteAccountGroup200Response
```

Delete group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AccountGroupsApi(
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

[**\Late\Model\DeleteAccountGroup200Response**](../Model/DeleteAccountGroup200Response.md)

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
listAccountGroups(): \Late\Model\ListAccountGroups200Response
```

List groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AccountGroupsApi(
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

[**\Late\Model\ListAccountGroups200Response**](../Model/ListAccountGroups200Response.md)

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
updateAccountGroup($group_id, $update_account_group_request): \Late\Model\UpdateAccountGroup200Response
```

Update group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AccountGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$update_account_group_request = {"name":"Updated Marketing Accounts","accountIds":["64e1f0a9e2b5af0012ab34cd","64e1f0a9e2b5af0012ab34ce","64e1f0a9e2b5af0012ab34cf"]}; // \Late\Model\UpdateAccountGroupRequest

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
| **update_account_group_request** | [**\Late\Model\UpdateAccountGroupRequest**](../Model/UpdateAccountGroupRequest.md)|  | |

### Return type

[**\Late\Model\UpdateAccountGroup200Response**](../Model/UpdateAccountGroup200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
