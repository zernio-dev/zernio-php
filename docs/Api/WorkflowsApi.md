# Zernio\WorkflowsApi

Branching conversation automations. An inbound message matches a workflow&#39;s trigger and walks a directed graph of nodes (send message, wait for reply, condition, set variable, delay, webhook, handoff, end). Unlike Sequences (linear, time-based drips), Workflows are event-driven and interactive. Fully supported on WhatsApp, Instagram, and Messenger; &#x60;send_message&#x60; template and interactive modes are WhatsApp-only.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateWorkflow()**](WorkflowsApi.md#activateWorkflow) | **POST** /v1/workflows/{workflowId}/activate | Activate workflow |
| [**createWorkflow()**](WorkflowsApi.md#createWorkflow) | **POST** /v1/workflows | Create workflow |
| [**deleteWorkflow()**](WorkflowsApi.md#deleteWorkflow) | **DELETE** /v1/workflows/{workflowId} | Delete workflow |
| [**getWorkflow()**](WorkflowsApi.md#getWorkflow) | **GET** /v1/workflows/{workflowId} | Get workflow with graph |
| [**listWorkflowExecutions()**](WorkflowsApi.md#listWorkflowExecutions) | **GET** /v1/workflows/{workflowId}/executions | List workflow runs |
| [**listWorkflows()**](WorkflowsApi.md#listWorkflows) | **GET** /v1/workflows | List workflows |
| [**pauseWorkflow()**](WorkflowsApi.md#pauseWorkflow) | **POST** /v1/workflows/{workflowId}/pause | Pause workflow |
| [**triggerWorkflow()**](WorkflowsApi.md#triggerWorkflow) | **POST** /v1/workflows/{workflowId}/executions | Manually start a workflow run |
| [**updateWorkflow()**](WorkflowsApi.md#updateWorkflow) | **PATCH** /v1/workflows/{workflowId} | Update workflow |


## `activateWorkflow()`

```php
activateWorkflow($workflow_id): \Zernio\Model\ActivateWorkflow200Response
```

Activate workflow

Validate the graph is runnable and set the workflow live. Once active, matching inbound messages start executions. Idempotent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 'workflow_id_example'; // string

try {
    $result = $apiInstance->activateWorkflow($workflow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->activateWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **string**|  | |

### Return type

[**\Zernio\Model\ActivateWorkflow200Response**](../Model/ActivateWorkflow200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWorkflow()`

```php
createWorkflow($create_workflow_request): \Zernio\Model\CreateWorkflow200Response
```

Create workflow

Create a branching conversation workflow (draft) from a node/edge graph. Created in `draft` status; activate it to start matching inbound messages. The graph is validated structurally; completeness (a trigger node + reachable entry) is required at activation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_workflow_request = new \Zernio\Model\CreateWorkflowRequest(); // \Zernio\Model\CreateWorkflowRequest

try {
    $result = $apiInstance->createWorkflow($create_workflow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_workflow_request** | [**\Zernio\Model\CreateWorkflowRequest**](../Model/CreateWorkflowRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateWorkflow200Response**](../Model/CreateWorkflow200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWorkflow()`

```php
deleteWorkflow($workflow_id)
```

Delete workflow

Permanently delete a workflow and all of its executions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 'workflow_id_example'; // string

try {
    $apiInstance->deleteWorkflow($workflow_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->deleteWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **string**|  | |

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

## `getWorkflow()`

```php
getWorkflow($workflow_id): \Zernio\Model\GetWorkflow200Response
```

Get workflow with graph

Returns a workflow including its full node/edge graph and run stats.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 'workflow_id_example'; // string

try {
    $result = $apiInstance->getWorkflow($workflow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->getWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetWorkflow200Response**](../Model/GetWorkflow200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWorkflowExecutions()`

```php
listWorkflowExecutions($workflow_id, $status, $limit, $skip): \Zernio\Model\ListWorkflowExecutions200Response
```

List workflow runs

Returns recent executions (runs) with their status, current node, and accumulated variables.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 'workflow_id_example'; // string
$status = 'status_example'; // string
$limit = 25; // int
$skip = 0; // int

try {
    $result = $apiInstance->listWorkflowExecutions($workflow_id, $status, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->listWorkflowExecutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **string**|  | |
| **status** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 25] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListWorkflowExecutions200Response**](../Model/ListWorkflowExecutions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWorkflows()`

```php
listWorkflows($profile_id, $status, $limit, $skip): \Zernio\Model\ListWorkflows200Response
```

List workflows

Returns workflows with run stats. Filter by status or profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Filter by profile. Omit to list across all profiles
$status = 'status_example'; // string
$limit = 50; // int
$skip = 0; // int

try {
    $result = $apiInstance->listWorkflows($profile_id, $status, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->listWorkflows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Filter by profile. Omit to list across all profiles | [optional] |
| **status** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListWorkflows200Response**](../Model/ListWorkflows200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pauseWorkflow()`

```php
pauseWorkflow($workflow_id): \Zernio\Model\PauseWorkflow200Response
```

Pause workflow

Stop matching new inbound messages. In-flight executions continue to completion. Idempotent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 'workflow_id_example'; // string

try {
    $result = $apiInstance->pauseWorkflow($workflow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->pauseWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **string**|  | |

### Return type

[**\Zernio\Model\PauseWorkflow200Response**](../Model/PauseWorkflow200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `triggerWorkflow()`

```php
triggerWorkflow($workflow_id, $trigger_workflow_request): \Zernio\Model\TriggerWorkflow200Response
```

Manually start a workflow run

Kick off a run without waiting for an inbound message (useful for testing). Target an existing conversation by `conversationId`, or — WhatsApp only — a phone number via `to` (a conversation is found or created). `text` seeds the run's `lastMessage` variable. The graph must be runnable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 'workflow_id_example'; // string
$trigger_workflow_request = new \Zernio\Model\TriggerWorkflowRequest(); // \Zernio\Model\TriggerWorkflowRequest

try {
    $result = $apiInstance->triggerWorkflow($workflow_id, $trigger_workflow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->triggerWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **string**|  | |
| **trigger_workflow_request** | [**\Zernio\Model\TriggerWorkflowRequest**](../Model/TriggerWorkflowRequest.md)|  | |

### Return type

[**\Zernio\Model\TriggerWorkflow200Response**](../Model/TriggerWorkflow200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWorkflow()`

```php
updateWorkflow($workflow_id, $update_workflow_request): \Zernio\Model\UpdateWorkflow200Response
```

Update workflow

Update name, description, or the graph. The graph can only be modified while the workflow is draft or paused.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 'workflow_id_example'; // string
$update_workflow_request = new \Zernio\Model\UpdateWorkflowRequest(); // \Zernio\Model\UpdateWorkflowRequest

try {
    $result = $apiInstance->updateWorkflow($workflow_id, $update_workflow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->updateWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **string**|  | |
| **update_workflow_request** | [**\Zernio\Model\UpdateWorkflowRequest**](../Model/UpdateWorkflowRequest.md)|  | [optional] |

### Return type

[**\Zernio\Model\UpdateWorkflow200Response**](../Model/UpdateWorkflow200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
