# Zernio\AutomationsApi

One API for every automation: ad rules that check ads on a schedule, event automations that run when something happens in Zernio, and scheduled automations that check posts. Each has a &#x60;trigger&#x60;, the &#x60;subjects&#x60; it checks, the &#x60;steps&#x60; it takes and its &#x60;limits&#x60;.  An ad rule is also readable under &#x60;/v1/ads/rules&#x60; with the same id. Creating, editing, activating and previewing an ad rule needs ads access; nothing else does.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateAutomation()**](AutomationsApi.md#activateAutomation) | **POST** /v1/automations/{automationId}/activate | Turn an automation on |
| [**approveAutomationApproval()**](AutomationsApi.md#approveAutomationApproval) | **POST** /v1/automations/{automationId}/approvals/{approvalId}/approve | Approve an approval request |
| [**backtestAutomation()**](AutomationsApi.md#backtestAutomation) | **POST** /v1/automations/{automationId}/backtest | Backtest a saved automation |
| [**backtestAutomationDraft()**](AutomationsApi.md#backtestAutomationDraft) | **POST** /v1/automations/backtest | Backtest an unsaved automation |
| [**createAutomation()**](AutomationsApi.md#createAutomation) | **POST** /v1/automations | Create an automation |
| [**createAutomationTemplate()**](AutomationsApi.md#createAutomationTemplate) | **POST** /v1/automations/templates | Create an automation template |
| [**deleteAutomation()**](AutomationsApi.md#deleteAutomation) | **DELETE** /v1/automations/{automationId} | Delete an automation |
| [**deleteAutomationTemplate()**](AutomationsApi.md#deleteAutomationTemplate) | **DELETE** /v1/automations/templates/{templateId} | Delete an automation template |
| [**getAutomation()**](AutomationsApi.md#getAutomation) | **GET** /v1/automations/{automationId} | Get an automation |
| [**getAutomationApproval()**](AutomationsApi.md#getAutomationApproval) | **GET** /v1/automations/{automationId}/approvals/{approvalId} | Get an approval request |
| [**getAutomationCatalog()**](AutomationsApi.md#getAutomationCatalog) | **GET** /v1/automations/catalog | Get the automations catalog |
| [**getAutomationControls()**](AutomationsApi.md#getAutomationControls) | **GET** /v1/automations/controls | Get automation controls |
| [**getAutomationTemplate()**](AutomationsApi.md#getAutomationTemplate) | **GET** /v1/automations/templates/{templateId} | Get an automation template |
| [**getSharedAutomationTemplate()**](AutomationsApi.md#getSharedAutomationTemplate) | **GET** /v1/automations/templates/shared/{shareToken} | Get a shared automation template |
| [**getZernioAutomationTemplate()**](AutomationsApi.md#getZernioAutomationTemplate) | **GET** /v1/automations/templates/zernio/{templateId} | Get a Zernio automation template |
| [**installAutomationTemplate()**](AutomationsApi.md#installAutomationTemplate) | **POST** /v1/automations/templates/{templateId}/install | Install an automation template |
| [**installSharedAutomationTemplate()**](AutomationsApi.md#installSharedAutomationTemplate) | **POST** /v1/automations/templates/shared/{shareToken}/install | Install a shared automation template |
| [**installZernioAutomationTemplate()**](AutomationsApi.md#installZernioAutomationTemplate) | **POST** /v1/automations/templates/zernio/{templateId}/install | Install a Zernio automation template |
| [**listAutomationActions()**](AutomationsApi.md#listAutomationActions) | **GET** /v1/automations/actions | List automation actions |
| [**listAutomationApprovals()**](AutomationsApi.md#listAutomationApprovals) | **GET** /v1/automations/{automationId}/approvals | List an automation&#39;s approval requests |
| [**listAutomationChecks()**](AutomationsApi.md#listAutomationChecks) | **GET** /v1/automations/{automationId}/checks | List an automation&#39;s checks |
| [**listAutomationTemplates()**](AutomationsApi.md#listAutomationTemplates) | **GET** /v1/automations/templates | List automation templates |
| [**listAutomations()**](AutomationsApi.md#listAutomations) | **GET** /v1/automations | List automations |
| [**pauseAutomation()**](AutomationsApi.md#pauseAutomation) | **POST** /v1/automations/{automationId}/pause | Turn an automation off |
| [**previewAutomation()**](AutomationsApi.md#previewAutomation) | **POST** /v1/automations/{automationId}/preview | Preview a saved automation |
| [**previewAutomationDraft()**](AutomationsApi.md#previewAutomationDraft) | **POST** /v1/automations/preview | Preview an unsaved automation |
| [**rejectAutomationApproval()**](AutomationsApi.md#rejectAutomationApproval) | **POST** /v1/automations/{automationId}/approvals/{approvalId}/reject | Reject an approval request |
| [**updateAutomation()**](AutomationsApi.md#updateAutomation) | **PATCH** /v1/automations/{automationId} | Edit an automation |
| [**updateAutomationAdAccountControls()**](AutomationsApi.md#updateAutomationAdAccountControls) | **PATCH** /v1/automations/controls/ad-accounts | Update one ad account&#39;s controls |
| [**updateAutomationControls()**](AutomationsApi.md#updateAutomationControls) | **PATCH** /v1/automations/controls | Turn every ad automation off or on |
| [**updateAutomationTemplate()**](AutomationsApi.md#updateAutomationTemplate) | **PATCH** /v1/automations/templates/{templateId} | Update an automation template |


## `activateAutomation()`

```php
activateAutomation($automation_id): \Zernio\Model\CreateAutomation201Response
```

Turn an automation on

An ad rule's first check runs right away.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string

try {
    $result = $apiInstance->activateAutomation($automation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->activateAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**|  | |

### Return type

[**\Zernio\Model\CreateAutomation201Response**](../Model/CreateAutomation201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `approveAutomationApproval()`

```php
approveAutomationApproval($automation_id, $approval_id, $automation_approval_decision): \Zernio\Model\GetAutomationApproval200Response
```

Approve an approval request

Approves a pending request, so the automation acts on each change it holds. Each change is checked again first, and one that no longer applies is skipped.  Only the approvers the automation names now can decide, matched by the email of the user behind the API key. A request already decided, expired or cancelled is refused with nothing changed.  Each applied or failed change fires `automation.action.applied` or `automation.action.failed`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string
$approval_id = 'approval_id_example'; // string
$automation_approval_decision = new \Zernio\Model\AutomationApprovalDecision(); // \Zernio\Model\AutomationApprovalDecision

try {
    $result = $apiInstance->approveAutomationApproval($automation_id, $approval_id, $automation_approval_decision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->approveAutomationApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**|  | |
| **approval_id** | **string**|  | |
| **automation_approval_decision** | [**\Zernio\Model\AutomationApprovalDecision**](../Model/AutomationApprovalDecision.md)|  | [optional] |

### Return type

[**\Zernio\Model\GetAutomationApproval200Response**](../Model/GetAutomationApproval200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `backtestAutomation()`

```php
backtestAutomation($automation_id, $days): \Zernio\Model\AutomationBacktest
```

Backtest a saved automation

What a saved automation would have done over the last `days` days, replayed on stored daily metrics. Nothing is changed.  Each day lists what it would have done. Its own changes carry into later days, but the metrics stay what really happened. `notes` says what the replay could not know.  Only ad automations can be backtested, on at most 5,000 ads.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string
$days = 30; // int | How many whole days before today to replay. Today is not replayed.

try {
    $result = $apiInstance->backtestAutomation($automation_id, $days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->backtestAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**|  | |
| **days** | **int**| How many whole days before today to replay. Today is not replayed. | [optional] [default to 30] |

### Return type

[**\Zernio\Model\AutomationBacktest**](../Model/AutomationBacktest.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `backtestAutomationDraft()`

```php
backtestAutomationDraft($automation_definition, $days): \Zernio\Model\AutomationBacktest
```

Backtest an unsaved automation

Replays an automation over past days on stored daily metrics, without saving it or changing anything. It refuses what saving would refuse.  Each day lists what it would have done. Its own changes carry into later days, but the metrics stay what really happened. `notes` says what the replay could not know.  Only ad automations can be backtested, on at most 5,000 ads.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_definition = new \Zernio\Model\AutomationDefinition(); // \Zernio\Model\AutomationDefinition
$days = 30; // int | How many whole days before today to replay. Today is not replayed.

try {
    $result = $apiInstance->backtestAutomationDraft($automation_definition, $days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->backtestAutomationDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_definition** | [**\Zernio\Model\AutomationDefinition**](../Model/AutomationDefinition.md)|  | |
| **days** | **int**| How many whole days before today to replay. Today is not replayed. | [optional] [default to 30] |

### Return type

[**\Zernio\Model\AutomationBacktest**](../Model/AutomationBacktest.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAutomation()`

```php
createAutomation($automation_definition, $idempotency_key): \Zernio\Model\CreateAutomation201Response
```

Create an automation

Creates an automation. Its shape picks the kind:  - **Ad rule**: a `schedule` over campaigns, ad sets or ads, with metric `conditions` and ad `steps`. It stays paused unless `status` is `active`; preview it first with `POST /v1/automations/preview`. - **Event**: a Zernio event in `trigger.type`, such as `post.failed`, with notify steps. It is on unless `status` is `paused`. - **Scheduled**: a `schedule` over a profile's posts, with notify steps and an optional boost. It is on unless `status` is `paused`.  Everything an automation cannot hold is refused at once: the 400 lists every problem with its JSON path in `details.problems`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_definition = {"name":"Stop losers","status":"active","trigger":{"type":"schedule","every":"1h"},"subjects":{"each":"ad","adAccounts":[{"accountId":"6731a0c2e4b0f1a2b3c4d5e6","adAccountId":"act_1234567890"}]},"conditions":{"all":[{"metric":"spend","window":"last_3d","op":">","value":50},{"metric":"conversions","window":"last_3d","op":"<","value":1}]},"steps":[{"type":"ads.pause"},{"type":"notify.send"}],"limits":{"cooldown":"3d"}}; // \Zernio\Model\AutomationDefinition
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->createAutomation($automation_definition, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->createAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_definition** | [**\Zernio\Model\AutomationDefinition**](../Model/AutomationDefinition.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

### Return type

[**\Zernio\Model\CreateAutomation201Response**](../Model/CreateAutomation201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAutomationTemplate()`

```php
createAutomationTemplate($create_automation_template_request, $idempotency_key): \Zernio\Model\CreateAutomationTemplate201Response
```

Create an automation template

Saves a reusable setup of one or more automations (up to 20) that your team, or anyone you share it with, can install. Start from your own automations, one of Zernio's templates, a shared template, or definitions sent as they are.  Nothing tied to one account is kept. Ad accounts, a trigger's profile and accounts, and alert destinations become `inputs` that each install fills. Campaign ids, id filters, dates and approval steps are dropped.  From one of Zernio's templates, each threshold and budget or bid amount also becomes an input, with the template's own value as its default.  A template that would not install is refused: the 400 lists every problem in `details.problems`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_automation_template_request = {"name":"Protect spend","description":"Pause losers and alert the team.","from":{"automationIds":["6731a0c2e4b0f1a2b3c4d5e6"]}}; // \Zernio\Model\CreateAutomationTemplateRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->createAutomationTemplate($create_automation_template_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->createAutomationTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_automation_template_request** | [**\Zernio\Model\CreateAutomationTemplateRequest**](../Model/CreateAutomationTemplateRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

### Return type

[**\Zernio\Model\CreateAutomationTemplate201Response**](../Model/CreateAutomationTemplate201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAutomation()`

```php
deleteAutomation($automation_id): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Delete an automation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string

try {
    $result = $apiInstance->deleteAutomation($automation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->deleteAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**|  | |

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

## `deleteAutomationTemplate()`

```php
deleteAutomationTemplate($template_id): \Zernio\Model\DeleteAutomationTemplate200Response
```

Delete an automation template

Deletes one of your team's templates and its share link. Automations already installed from it stay.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string | The template's id.

try {
    $result = $apiInstance->deleteAutomationTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->deleteAutomationTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template&#39;s id. | |

### Return type

[**\Zernio\Model\DeleteAutomationTemplate200Response**](../Model/DeleteAutomationTemplate200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomation()`

```php
getAutomation($automation_id): \Zernio\Model\CreateAutomation201Response
```

Get an automation

An automation installed from a template also carries `template`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string

try {
    $result = $apiInstance->getAutomation($automation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->getAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**|  | |

### Return type

[**\Zernio\Model\CreateAutomation201Response**](../Model/CreateAutomation201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomationApproval()`

```php
getAutomationApproval($automation_id, $approval_id): \Zernio\Model\GetAutomationApproval200Response
```

Get an approval request

One approval request with the changes it holds, who may decide it and whether you can.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string
$approval_id = 'approval_id_example'; // string

try {
    $result = $apiInstance->getAutomationApproval($automation_id, $approval_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->getAutomationApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**|  | |
| **approval_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetAutomationApproval200Response**](../Model/GetAutomationApproval200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomationCatalog()`

```php
getAutomationCatalog(): \Zernio\Model\GetAutomationCatalog200Response
```

Get the automations catalog

What an automation can contain and where each part works, built from the same checks that validate a save, so it never offers what saving refuses.  - `schema`: the JSON Schema of the body of `POST /v1/automations`. - `triggers`: every trigger, tagged with its `kind`. Ad rule and scheduled triggers list their intervals; event triggers list each event with its facts. - The other sections describe ad rules: per subject (campaign, ad set, ad) its metrics and steps with the platforms that accept them, plus filters, groups, alerts, conditions, limits and approval.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAutomationCatalog();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->getAutomationCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\GetAutomationCatalog200Response**](../Model/GetAutomationCatalog200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomationControls()`

```php
getAutomationControls(): \Zernio\Model\GetAutomationControls200Response
```

Get automation controls

The team's switch for every ad rule, and each ad account's own switch and daily raise limit. Boosting automations do not read them.  Every team member sees the same controls. `adAccounts` lists each ad account your automations use, plus any ad account that has controls set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAutomationControls();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->getAutomationControls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\GetAutomationControls200Response**](../Model/GetAutomationControls200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomationTemplate()`

```php
getAutomationTemplate($template_id): \Zernio\Model\CreateAutomationTemplate201Response
```

Get an automation template

Returns one of your team's templates, with its inputs and automations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string | The template's id.

try {
    $result = $apiInstance->getAutomationTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->getAutomationTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template&#39;s id. | |

### Return type

[**\Zernio\Model\CreateAutomationTemplate201Response**](../Model/CreateAutomationTemplate201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSharedAutomationTemplate()`

```php
getSharedAutomationTemplate($share_token): \Zernio\Model\CreateAutomationTemplate201Response
```

Get a shared automation template

Returns a template shared by link, from any team. Who made it and its install counts in that team are left out, and `share` is null.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$share_token = 'share_token_example'; // string | The token from the template's `share.token`.

try {
    $result = $apiInstance->getSharedAutomationTemplate($share_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->getSharedAutomationTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **share_token** | **string**| The token from the template&#39;s &#x60;share.token&#x60;. | |

### Return type

[**\Zernio\Model\CreateAutomationTemplate201Response**](../Model/CreateAutomationTemplate201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZernioAutomationTemplate()`

```php
getZernioAutomationTemplate($template_id): \Zernio\Model\CreateAutomationTemplate201Response
```

Get a Zernio automation template

Returns one of Zernio's ready-made ad rule templates in the same shape as your own. Each threshold and budget or bid amount is an input with the template's own value as its default, so an install can change it or leave it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = stop_losers; // string | The id of one of Zernio's templates, for example `stop_losers`.

try {
    $result = $apiInstance->getZernioAutomationTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->getZernioAutomationTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The id of one of Zernio&#39;s templates, for example &#x60;stop_losers&#x60;. | |

### Return type

[**\Zernio\Model\CreateAutomationTemplate201Response**](../Model/CreateAutomationTemplate201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `installAutomationTemplate()`

```php
installAutomationTemplate($template_id, $automation_template_install_request, $idempotency_key): \Zernio\Model\AutomationTemplateInstallResponse
```

Install an automation template

Creates every automation in the template, with your values in place of its inputs. All or nothing: if one automation fails, the ones already created are removed. New automations stay paused unless `status` is `active`.  To install on many ad accounts at once, send `targets` (up to 50). Each target is its own install with its own `inputs`, which win over the shared `inputs`. A failed target leaves the others in place, and the response is 207.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string | The template's id.
$automation_template_install_request = {"inputs":{"adAccount":{"accountId":"6731a0c2e4b0f1a2b3c4d5e6","adAccountId":"act_1234567890"}},"status":"active"}; // \Zernio\Model\AutomationTemplateInstallRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->installAutomationTemplate($template_id, $automation_template_install_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->installAutomationTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template&#39;s id. | |
| **automation_template_install_request** | [**\Zernio\Model\AutomationTemplateInstallRequest**](../Model/AutomationTemplateInstallRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

### Return type

[**\Zernio\Model\AutomationTemplateInstallResponse**](../Model/AutomationTemplateInstallResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `installSharedAutomationTemplate()`

```php
installSharedAutomationTemplate($share_token, $automation_template_install_request, $idempotency_key): \Zernio\Model\AutomationTemplateInstallResponse
```

Install a shared automation template

Installs a template shared by link into your account, the same way as your own templates.  To install on many ad accounts at once, send `targets` (up to 50). Each target is its own install with its own `inputs`, which win over the shared `inputs`. A failed target leaves the others in place, and the response is 207.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$share_token = 'share_token_example'; // string | The token from the template's `share.token`.
$automation_template_install_request = {inputs={adAccount={accountId=6731a0c2e4b0f1a2b3c4d5e6, adAccountId=act_1234567890}}, status=active}; // \Zernio\Model\AutomationTemplateInstallRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->installSharedAutomationTemplate($share_token, $automation_template_install_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->installSharedAutomationTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **share_token** | **string**| The token from the template&#39;s &#x60;share.token&#x60;. | |
| **automation_template_install_request** | [**\Zernio\Model\AutomationTemplateInstallRequest**](../Model/AutomationTemplateInstallRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

### Return type

[**\Zernio\Model\AutomationTemplateInstallResponse**](../Model/AutomationTemplateInstallResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `installZernioAutomationTemplate()`

```php
installZernioAutomationTemplate($template_id, $automation_template_install_request, $idempotency_key): \Zernio\Model\AutomationTemplateInstallResponse
```

Install a Zernio automation template

Installs one of Zernio's ready-made templates. Leave a value input out to keep the template's default.  To install on many ad accounts at once, send `targets` (up to 50). Each target is its own install with its own `inputs`, which win over the shared `inputs`. A failed target leaves the others in place, and the response is 207.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = stop_losers; // string | The id of one of Zernio's templates, for example `stop_losers`.
$automation_template_install_request = {inputs={adAccount={accountId=6731a0c2e4b0f1a2b3c4d5e6, adAccountId=act_1234567890}}, status=active}; // \Zernio\Model\AutomationTemplateInstallRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->installZernioAutomationTemplate($template_id, $automation_template_install_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->installZernioAutomationTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The id of one of Zernio&#39;s templates, for example &#x60;stop_losers&#x60;. | |
| **automation_template_install_request** | [**\Zernio\Model\AutomationTemplateInstallRequest**](../Model/AutomationTemplateInstallRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

### Return type

[**\Zernio\Model\AutomationTemplateInstallResponse**](../Model/AutomationTemplateInstallResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAutomationActions()`

```php
listAutomationActions($automation_id, $account_id, $type, $from, $to, $limit, $cursor): \Zernio\Model\ListAutomationActions200Response
```

List automation actions

Every change your ad rules made, newest first: what changed, the value before and after, and whether it was applied, skipped or failed. What event and scheduled automations did is in each one's checks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string
$account_id = 'account_id_example'; // string | Only actions on this ads connection.
$type = 'type_example'; // string | A change reads as the value it set, so budget changes filter as `ads.set_budget`.
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$limit = 50; // int
$cursor = 'cursor_example'; // string | `nextCursor` from the previous page.

try {
    $result = $apiInstance->listAutomationActions($automation_id, $account_id, $type, $from, $to, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->listAutomationActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**|  | [optional] |
| **account_id** | **string**| Only actions on this ads connection. | [optional] |
| **type** | **string**| A change reads as the value it set, so budget changes filter as &#x60;ads.set_budget&#x60;. | [optional] |
| **from** | **\DateTime**|  | [optional] |
| **to** | **\DateTime**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **cursor** | **string**| &#x60;nextCursor&#x60; from the previous page. | [optional] |

### Return type

[**\Zernio\Model\ListAutomationActions200Response**](../Model/ListAutomationActions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAutomationApprovals()`

```php
listAutomationApprovals($automation_id, $status, $limit): \Zernio\Model\ListAutomationApprovals200Response
```

List an automation's approval requests

The requests an automation sent for a person's approval before acting, newest first. Each lists the changes it holds, who may decide it and until when.  Only automations that ask for approval have requests. Others return 409.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string
$status = 'status_example'; // string | Only requests in this status.
$limit = 20; // int | How many requests to return. There is no cursor; the newest come first.

try {
    $result = $apiInstance->listAutomationApprovals($automation_id, $status, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->listAutomationApprovals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**|  | |
| **status** | **string**| Only requests in this status. | [optional] |
| **limit** | **int**| How many requests to return. There is no cursor; the newest come first. | [optional] [default to 20] |

### Return type

[**\Zernio\Model\ListAutomationApprovals200Response**](../Model/ListAutomationApprovals200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAutomationChecks()`

```php
listAutomationChecks($automation_id, $limit, $cursor): \Zernio\Model\ListAutomationChecks200Response
```

List an automation's checks

Each time the automation ran, newest first, with what matched and what it did. For an event automation, each check is one event that reached it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string
$limit = 20; // int
$cursor = 'cursor_example'; // string | `nextCursor` from the previous page.

try {
    $result = $apiInstance->listAutomationChecks($automation_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->listAutomationChecks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**|  | |
| **limit** | **int**|  | [optional] [default to 20] |
| **cursor** | **string**| &#x60;nextCursor&#x60; from the previous page. | [optional] |

### Return type

[**\Zernio\Model\ListAutomationChecks200Response**](../Model/ListAutomationChecks200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAutomationTemplates()`

```php
listAutomationTemplates($scope): \Zernio\Model\ListAutomationTemplates200Response
```

List automation templates

Lists your team's templates, newest first. Every team member sees the templates any member saved. A team keeps up to 200.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scope = 'team'; // string | Which templates to list. Only `team` today.

try {
    $result = $apiInstance->listAutomationTemplates($scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->listAutomationTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scope** | **string**| Which templates to list. Only &#x60;team&#x60; today. | [optional] [default to &#39;team&#39;] |

### Return type

[**\Zernio\Model\ListAutomationTemplates200Response**](../Model/ListAutomationTemplates200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAutomations()`

```php
listAutomations($account_id, $ad_account_id, $limit, $cursor): \Zernio\Model\ListAutomations200Response
```

List automations

Lists the automations on the profiles your key can reach, newest first, across every kind: ad rules, event automations and scheduled automations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Only automations on this account: the ads connection of an ad rule, or one of the `accountIds` of an event or scheduled automation.
$ad_account_id = 'ad_account_id_example'; // string | Only ad rules checking this platform ad account.
$limit = 50; // int
$cursor = 'cursor_example'; // string | `nextCursor` from the previous page.

try {
    $result = $apiInstance->listAutomations($account_id, $ad_account_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->listAutomations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Only automations on this account: the ads connection of an ad rule, or one of the &#x60;accountIds&#x60; of an event or scheduled automation. | [optional] |
| **ad_account_id** | **string**| Only ad rules checking this platform ad account. | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **cursor** | **string**| &#x60;nextCursor&#x60; from the previous page. | [optional] |

### Return type

[**\Zernio\Model\ListAutomations200Response**](../Model/ListAutomations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pauseAutomation()`

```php
pauseAutomation($automation_id): \Zernio\Model\CreateAutomation201Response
```

Turn an automation off

Pausing never needs ads access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string

try {
    $result = $apiInstance->pauseAutomation($automation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->pauseAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**|  | |

### Return type

[**\Zernio\Model\CreateAutomation201Response**](../Model/CreateAutomation201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewAutomation()`

```php
previewAutomation($automation_id, $limit): \Zernio\Model\AutomationPreview
```

Preview a saved automation

Shows what an ad rule would do if it ran now. Nothing is changed. Event and scheduled automations cannot be previewed yet (400, `not_supported`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string
$limit = 100; // int | How many subjects to list, matches first. `evaluated` and `matched` always count them all.

try {
    $result = $apiInstance->previewAutomation($automation_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->previewAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**|  | |
| **limit** | **int**| How many subjects to list, matches first. &#x60;evaluated&#x60; and &#x60;matched&#x60; always count them all. | [optional] [default to 100] |

### Return type

[**\Zernio\Model\AutomationPreview**](../Model/AutomationPreview.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewAutomationDraft()`

```php
previewAutomationDraft($automation_definition, $limit): \Zernio\Model\AutomationPreview
```

Preview an unsaved automation

Shows what an ad rule would do if it ran now, without saving it or changing anything: every object it checks, each condition with its actual value, and the steps a match would run. It refuses what saving would refuse.  Event and scheduled automations cannot be previewed yet (400, `not_supported`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_definition = new \Zernio\Model\AutomationDefinition(); // \Zernio\Model\AutomationDefinition
$limit = 100; // int | How many subjects to list, matches first. `evaluated` and `matched` always count them all.

try {
    $result = $apiInstance->previewAutomationDraft($automation_definition, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->previewAutomationDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_definition** | [**\Zernio\Model\AutomationDefinition**](../Model/AutomationDefinition.md)|  | |
| **limit** | **int**| How many subjects to list, matches first. &#x60;evaluated&#x60; and &#x60;matched&#x60; always count them all. | [optional] [default to 100] |

### Return type

[**\Zernio\Model\AutomationPreview**](../Model/AutomationPreview.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectAutomationApproval()`

```php
rejectAutomationApproval($automation_id, $approval_id, $automation_approval_decision): \Zernio\Model\GetAutomationApproval200Response
```

Reject an approval request

Rejects a pending request: every change it holds is skipped and nothing is changed on the ad account.  Only the approvers the automation names now can decide, matched by the email of the user behind the API key. Rejecting needs no ads access, like pausing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string
$approval_id = 'approval_id_example'; // string
$automation_approval_decision = new \Zernio\Model\AutomationApprovalDecision(); // \Zernio\Model\AutomationApprovalDecision

try {
    $result = $apiInstance->rejectAutomationApproval($automation_id, $approval_id, $automation_approval_decision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->rejectAutomationApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**|  | |
| **approval_id** | **string**|  | |
| **automation_approval_decision** | [**\Zernio\Model\AutomationApprovalDecision**](../Model/AutomationApprovalDecision.md)|  | [optional] |

### Return type

[**\Zernio\Model\GetAutomationApproval200Response**](../Model/GetAutomationApproval200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAutomation()`

```php
updateAutomation($automation_id, $update_automation_request, $if_match): \Zernio\Model\CreateAutomation201Response
```

Edit an automation

Replaces the top-level fields you send and keeps the rest: to change one step, send all of `steps`. The result is checked as a whole automation, so problems carry the same paths as on create.  An automation keeps its kind, and an ad rule stays on its ad account. Send `alert: null` to remove an ad rule's alert.  Send the `version` you read as `If-Match`: if the automation was saved since, the edit is refused with a 409 (`automation_stale`). An edit is also refused with a 409 when another save lands while it is being applied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string
$update_automation_request = new \Zernio\Model\UpdateAutomationRequest(); // \Zernio\Model\UpdateAutomationRequest
$if_match = 'if_match_example'; // string | The automation's `version` when you read it.

try {
    $result = $apiInstance->updateAutomation($automation_id, $update_automation_request, $if_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->updateAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**|  | |
| **update_automation_request** | [**\Zernio\Model\UpdateAutomationRequest**](../Model/UpdateAutomationRequest.md)|  | |
| **if_match** | **string**| The automation&#39;s &#x60;version&#x60; when you read it. | [optional] |

### Return type

[**\Zernio\Model\CreateAutomation201Response**](../Model/CreateAutomation201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAutomationAdAccountControls()`

```php
updateAutomationAdAccountControls($update_automation_ad_account_controls_request): \Zernio\Model\GetAutomationControls200Response
```

Update one ad account's controls

Turns ad rules off or on for one ad account, sets its daily raise limit, or both. Send at least one of `paused` and `dailyRaiseLimit`; fields you leave out keep their value.  The ad account must be one the connection in `accountId` reaches, as for an automation on it. Controls apply to every ad rule of the team on that ad account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_automation_ad_account_controls_request = {"accountId":"6650f1c2a1b2c3d4e5f60718","adAccountId":"act_1234567890","dailyRaiseLimit":500}; // \Zernio\Model\UpdateAutomationAdAccountControlsRequest

try {
    $result = $apiInstance->updateAutomationAdAccountControls($update_automation_ad_account_controls_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->updateAutomationAdAccountControls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_automation_ad_account_controls_request** | [**\Zernio\Model\UpdateAutomationAdAccountControlsRequest**](../Model/UpdateAutomationAdAccountControlsRequest.md)|  | |

### Return type

[**\Zernio\Model\GetAutomationControls200Response**](../Model/GetAutomationControls200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAutomationControls()`

```php
updateAutomationControls($update_automation_controls_request): \Zernio\Model\GetAutomationControls200Response
```

Turn every ad automation off or on

Turns every ad rule of the team off (`paused: true`) or back on. Each rule keeps its own status, so turning the switch back on resumes exactly the rules that were active.  Scheduled automations that boost posts are not stopped by it: pause them one by one.  It reaches every profile, so only the account owner or a full-access team member can use it. A key limited to some profiles gets 403.  Turning off a switch that is already off keeps its original `pausedAt`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_automation_controls_request = new \Zernio\Model\UpdateAutomationControlsRequest(); // \Zernio\Model\UpdateAutomationControlsRequest

try {
    $result = $apiInstance->updateAutomationControls($update_automation_controls_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->updateAutomationControls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_automation_controls_request** | [**\Zernio\Model\UpdateAutomationControlsRequest**](../Model/UpdateAutomationControlsRequest.md)|  | |

### Return type

[**\Zernio\Model\GetAutomationControls200Response**](../Model/GetAutomationControls200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAutomationTemplate()`

```php
updateAutomationTemplate($template_id, $update_automation_template_request): \Zernio\Model\CreateAutomationTemplate201Response
```

Update an automation template

Renames a template, turns its share link on or off, or replaces its automations. Send at least one field.  Renaming or sharing keeps the `version`. New content (`from` or `automations`) is a new version; automations already installed keep the version they came from.  `visibility: link` turns the share link on (the same link while it stays on) and `visibility: team` revokes it. To copy a shared template, use `POST /v1/automations/templates` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string | The template's id.
$update_automation_template_request = {"visibility":"link"}; // \Zernio\Model\UpdateAutomationTemplateRequest

try {
    $result = $apiInstance->updateAutomationTemplate($template_id, $update_automation_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->updateAutomationTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The template&#39;s id. | |
| **update_automation_template_request** | [**\Zernio\Model\UpdateAutomationTemplateRequest**](../Model/UpdateAutomationTemplateRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateAutomationTemplate201Response**](../Model/CreateAutomationTemplate201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
