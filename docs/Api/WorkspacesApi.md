# Zernio\WorkspacesApi

Create and manage the workspaces you belong to, and mint an API key for each. A workspace holds its own profiles, accounts, posts, keys and billing, so a product can keep one workspace per customer: create it, then create a key that acts in it.  Every key acts in the workspace it was created for, as its creator&#39;s membership there.  - Listing and reading take any key of yours. - Creating a workspace takes a full-access key. Send &#x60;apiKey&#x60; to get its first key in the same call. - Renaming, deleting and minting keys take a full-access key of that same workspace and the dashboard&#39;s role (owner or admin; delete is owner only). For another workspace, use the dashboard. - A new workspace has no billing: its keys can read, and writes return 402 &#x60;workspace_billing_required&#x60; until billing is set up at &#x60;billing.setupUrl&#x60;.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWorkspace()**](WorkspacesApi.md#createWorkspace) | **POST** /v1/workspaces | Create workspace |
| [**createWorkspaceApiKey()**](WorkspacesApi.md#createWorkspaceApiKey) | **POST** /v1/workspaces/{workspaceId}/api-keys | Create workspace key |
| [**deleteWorkspace()**](WorkspacesApi.md#deleteWorkspace) | **DELETE** /v1/workspaces/{workspaceId} | Delete workspace |
| [**getWorkspace()**](WorkspacesApi.md#getWorkspace) | **GET** /v1/workspaces/{workspaceId} | Get workspace |
| [**listWorkspaces()**](WorkspacesApi.md#listWorkspaces) | **GET** /v1/workspaces | List workspaces |
| [**updateWorkspace()**](WorkspacesApi.md#updateWorkspace) | **PATCH** /v1/workspaces/{workspaceId} | Rename workspace |


## `createWorkspace()`

```php
createWorkspace($create_workspace_request): \Zernio\Model\CreateWorkspace201Response
```

Create workspace

Creates a new, empty workspace owned by the key's owner, for example one per client of your product.  - Send `apiKey` to get the new workspace's first key in the same call. A key only manages its own workspace, so no other key can mint one there later. - The workspace has no billing. Its keys can read, but writes return 402 `workspace_billing_required` until billing is set up at `billing.setupUrl`. - Needs a full-access key. Creation is capped at 5 a day and 20 owned workspaces without billing (429).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_workspace_request = {"name":"Acme Corp","apiKey":{"name":"Acme Corp production"}}; // \Zernio\Model\CreateWorkspaceRequest

try {
    $result = $apiInstance->createWorkspace($create_workspace_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->createWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_workspace_request** | [**\Zernio\Model\CreateWorkspaceRequest**](../Model/CreateWorkspaceRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateWorkspace201Response**](../Model/CreateWorkspace201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWorkspaceApiKey()`

```php
createWorkspaceApiKey($workspace_id, $create_workspace_api_key_request): \Zernio\Model\CreateWorkspaceApiKey201Response
```

Create workspace key

Creates another API key that acts in this workspace as its creator. It covers every profile, and its full value is returned only once.  - The caller must be owner or admin there. - The calling credential must be a full-access key of this same workspace. Profile-scoped, restricted and handed-over keys, OAuth tokens and keys of other workspaces get 403. - For another workspace, use the dashboard. For a new one, send `apiKey` on `POST /v1/workspaces`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$create_workspace_api_key_request = {"name":"Acme Corp production","permission":"read-write"}; // \Zernio\Model\CreateWorkspaceApiKeyRequest

try {
    $result = $apiInstance->createWorkspaceApiKey($workspace_id, $create_workspace_api_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->createWorkspaceApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **create_workspace_api_key_request** | [**\Zernio\Model\CreateWorkspaceApiKeyRequest**](../Model/CreateWorkspaceApiKeyRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateWorkspaceApiKey201Response**](../Model/CreateWorkspaceApiKey201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWorkspace()`

```php
deleteWorkspace($workspace_id, $move_balance_to, $forfeit_balance): \Zernio\Model\GetWorkspace200Response
```

Delete workspace

Schedules the workspace for deletion 48 hours ahead, as the dashboard does. Members keep working, publishing is paused, and the owner or an admin can cancel from the dashboard until then. Only this workspace's data is deleted, never its members' accounts.  - Owner only, with a full-access key of this workspace. A key of another workspace gets 403; delete it from the dashboard. - A Personal workspace is never deleted. - Refused while the workspace owes a payment or holds a phone number or carrier registration (409 `deletion_blocked`). - With a balance above $0, send `moveBalanceTo` (another billed workspace you own) or `forfeitBalance=true`. Balances are never refunded. Without either the call returns 422 `deletion_balance_choice`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$move_balance_to = 'move_balance_to_example'; // string | A billed workspace you own that receives the remaining balance.
$forfeit_balance = True; // bool | Leave the remaining balance; it is written off when the workspace is deleted.

try {
    $result = $apiInstance->deleteWorkspace($workspace_id, $move_balance_to, $forfeit_balance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->deleteWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **move_balance_to** | **string**| A billed workspace you own that receives the remaining balance. | [optional] |
| **forfeit_balance** | **bool**| Leave the remaining balance; it is written off when the workspace is deleted. | [optional] |

### Return type

[**\Zernio\Model\GetWorkspace200Response**](../Model/GetWorkspace200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkspace()`

```php
getWorkspace($workspace_id): \Zernio\Model\GetWorkspace200Response
```

Get workspace

Returns one workspace the key's owner belongs to, with their role. Owners, admins and billing admins also get `billing` (whether it is set up, and where to set it up); members and viewers do not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getWorkspace($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->getWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetWorkspace200Response**](../Model/GetWorkspace200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWorkspaces()`

```php
listWorkspaces($limit, $skip): \Zernio\Model\ListWorkspaces200Response
```

List workspaces

Lists every workspace the key's owner belongs to, with their role in each: teams first by name, their Personal workspace last. Any key of the owner lists them all, whatever workspace that key acts in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Page size.
$skip = 0; // int | Number of workspaces to skip.

try {
    $result = $apiInstance->listWorkspaces($limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->listWorkspaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Page size. | [optional] [default to 50] |
| **skip** | **int**| Number of workspaces to skip. | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListWorkspaces200Response**](../Model/ListWorkspaces200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWorkspace()`

```php
updateWorkspace($workspace_id, $update_workspace_request): \Zernio\Model\GetWorkspace200Response
```

Rename workspace

Renames a workspace. Owner or admin there, with a full-access key of this workspace (a key of another workspace gets 403: rename it from the dashboard). Only a Personal workspace can be called \"Personal\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$update_workspace_request = {"name":"Acme Corporation"}; // \Zernio\Model\UpdateWorkspaceRequest

try {
    $result = $apiInstance->updateWorkspace($workspace_id, $update_workspace_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->updateWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **update_workspace_request** | [**\Zernio\Model\UpdateWorkspaceRequest**](../Model/UpdateWorkspaceRequest.md)|  | |

### Return type

[**\Zernio\Model\GetWorkspace200Response**](../Model/GetWorkspace200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
