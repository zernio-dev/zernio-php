# Zernio\BusinessAgentApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addBusinessAgentAllowlistEntry()**](BusinessAgentApi.md#addBusinessAgentAllowlistEntry) | **POST** /v1/accounts/{accountId}/business-agent/allowlist | Allowlist a consumer |
| [**addBusinessAgentWebsite()**](BusinessAgentApi.md#addBusinessAgentWebsite) | **POST** /v1/accounts/{accountId}/business-agent/websites | Add a website to crawl |
| [**createBusinessAgentConnector()**](BusinessAgentApi.md#createBusinessAgentConnector) | **POST** /v1/accounts/{accountId}/business-agent/connectors | Create a connector |
| [**createBusinessAgentConnectorTool()**](BusinessAgentApi.md#createBusinessAgentConnectorTool) | **POST** /v1/accounts/{accountId}/business-agent/connectors/{connectorId}/tools | Create a connector tool |
| [**createBusinessAgentFaq()**](BusinessAgentApi.md#createBusinessAgentFaq) | **POST** /v1/accounts/{accountId}/business-agent/faqs | Create a FAQ |
| [**createBusinessAgentSkill()**](BusinessAgentApi.md#createBusinessAgentSkill) | **POST** /v1/accounts/{accountId}/business-agent/skills | Create a skill |
| [**createBusinessAgentUiSkill()**](BusinessAgentApi.md#createBusinessAgentUiSkill) | **POST** /v1/accounts/{accountId}/business-agent/ui-skills | Create a UI skill |
| [**deleteBusinessAgentConnector()**](BusinessAgentApi.md#deleteBusinessAgentConnector) | **DELETE** /v1/accounts/{accountId}/business-agent/connectors/{connectorId} | Delete a connector |
| [**deleteBusinessAgentConnectorTool()**](BusinessAgentApi.md#deleteBusinessAgentConnectorTool) | **DELETE** /v1/accounts/{accountId}/business-agent/connectors/{connectorId}/tools/{toolId} | Delete a connector tool |
| [**deleteBusinessAgentFaq()**](BusinessAgentApi.md#deleteBusinessAgentFaq) | **DELETE** /v1/accounts/{accountId}/business-agent/faqs/{faqId} | Delete a FAQ |
| [**deleteBusinessAgentFile()**](BusinessAgentApi.md#deleteBusinessAgentFile) | **DELETE** /v1/accounts/{accountId}/business-agent/files/{fileId} | Delete a knowledge file |
| [**deleteBusinessAgentSkill()**](BusinessAgentApi.md#deleteBusinessAgentSkill) | **DELETE** /v1/accounts/{accountId}/business-agent/skills/{skillId} | Delete a skill |
| [**deleteBusinessAgentUiSkill()**](BusinessAgentApi.md#deleteBusinessAgentUiSkill) | **DELETE** /v1/accounts/{accountId}/business-agent/ui-skills/{uiSkillId} | Delete a UI skill |
| [**deleteBusinessAgentWebsite()**](BusinessAgentApi.md#deleteBusinessAgentWebsite) | **DELETE** /v1/accounts/{accountId}/business-agent/websites/{websiteId} | Remove a crawled website |
| [**getBusinessAgentBudget()**](BusinessAgentApi.md#getBusinessAgentBudget) | **GET** /v1/accounts/{accountId}/business-agent/budget | Get usage budgets |
| [**getBusinessAgentBusinessInformation()**](BusinessAgentApi.md#getBusinessAgentBusinessInformation) | **GET** /v1/accounts/{accountId}/business-agent/business-information | Get business information |
| [**getBusinessAgentConnector()**](BusinessAgentApi.md#getBusinessAgentConnector) | **GET** /v1/accounts/{accountId}/business-agent/connectors/{connectorId} | Get a connector |
| [**getBusinessAgentConnectorLogs()**](BusinessAgentApi.md#getBusinessAgentConnectorLogs) | **GET** /v1/accounts/{accountId}/business-agent/connectors/{connectorId}/logs | Get connector failure logs |
| [**getBusinessAgentConnectorTool()**](BusinessAgentApi.md#getBusinessAgentConnectorTool) | **GET** /v1/accounts/{accountId}/business-agent/connectors/{connectorId}/tools/{toolId} | Get a connector tool |
| [**getBusinessAgentEvent()**](BusinessAgentApi.md#getBusinessAgentEvent) | **GET** /v1/accounts/{accountId}/business-agent/events/{eventId} | Get a business event status |
| [**getBusinessAgentFaq()**](BusinessAgentApi.md#getBusinessAgentFaq) | **GET** /v1/accounts/{accountId}/business-agent/faqs/{faqId} | Get a FAQ |
| [**getBusinessAgentFile()**](BusinessAgentApi.md#getBusinessAgentFile) | **GET** /v1/accounts/{accountId}/business-agent/files/{fileId} | Get a knowledge file |
| [**getBusinessAgentSkill()**](BusinessAgentApi.md#getBusinessAgentSkill) | **GET** /v1/accounts/{accountId}/business-agent/skills/{skillId} | Get a skill |
| [**getBusinessAgentStatus()**](BusinessAgentApi.md#getBusinessAgentStatus) | **GET** /v1/accounts/{accountId}/business-agent | Get agent setup status |
| [**getBusinessAgentUiSkill()**](BusinessAgentApi.md#getBusinessAgentUiSkill) | **GET** /v1/accounts/{accountId}/business-agent/ui-skills/{uiSkillId} | Get a UI skill |
| [**getBusinessAgentWebsite()**](BusinessAgentApi.md#getBusinessAgentWebsite) | **GET** /v1/accounts/{accountId}/business-agent/websites/{websiteId} | Get a crawled website |
| [**listBusinessAgentAllowlist()**](BusinessAgentApi.md#listBusinessAgentAllowlist) | **GET** /v1/accounts/{accountId}/business-agent/allowlist | List allowlisted consumers |
| [**listBusinessAgentConnectorTools()**](BusinessAgentApi.md#listBusinessAgentConnectorTools) | **GET** /v1/accounts/{accountId}/business-agent/connectors/{connectorId}/tools | List connector tools |
| [**listBusinessAgentConnectors()**](BusinessAgentApi.md#listBusinessAgentConnectors) | **GET** /v1/accounts/{accountId}/business-agent/connectors | List connectors |
| [**listBusinessAgentFaqs()**](BusinessAgentApi.md#listBusinessAgentFaqs) | **GET** /v1/accounts/{accountId}/business-agent/faqs | List FAQs |
| [**listBusinessAgentFiles()**](BusinessAgentApi.md#listBusinessAgentFiles) | **GET** /v1/accounts/{accountId}/business-agent/files | List knowledge files |
| [**listBusinessAgentSettings()**](BusinessAgentApi.md#listBusinessAgentSettings) | **GET** /v1/accounts/{accountId}/business-agent/settings | List agent settings |
| [**listBusinessAgentSkills()**](BusinessAgentApi.md#listBusinessAgentSkills) | **GET** /v1/accounts/{accountId}/business-agent/skills | List skills |
| [**listBusinessAgentUiSkills()**](BusinessAgentApi.md#listBusinessAgentUiSkills) | **GET** /v1/accounts/{accountId}/business-agent/ui-skills | List UI skills |
| [**listBusinessAgentWebsites()**](BusinessAgentApi.md#listBusinessAgentWebsites) | **GET** /v1/accounts/{accountId}/business-agent/websites | List crawled websites |
| [**onboardBusinessAgent()**](BusinessAgentApi.md#onboardBusinessAgent) | **POST** /v1/accounts/{accountId}/business-agent/onboard | Create the agent |
| [**readBusinessAgentEvals()**](BusinessAgentApi.md#readBusinessAgentEvals) | **GET** /v1/accounts/{accountId}/business-agent/evals | Read evaluation data |
| [**refreshBusinessAgentConnectorTools()**](BusinessAgentApi.md#refreshBusinessAgentConnectorTools) | **POST** /v1/accounts/{accountId}/business-agent/connectors/{connectorId}/refresh-tools | Refresh MCP connector tools |
| [**removeBusinessAgentAllowlistEntry()**](BusinessAgentApi.md#removeBusinessAgentAllowlistEntry) | **DELETE** /v1/accounts/{accountId}/business-agent/allowlist/{entryId} | Remove an allowlisted consumer |
| [**replaceBusinessAgentBudget()**](BusinessAgentApi.md#replaceBusinessAgentBudget) | **PUT** /v1/accounts/{accountId}/business-agent/budget | Replace usage budgets |
| [**replaceBusinessAgentBusinessInformation()**](BusinessAgentApi.md#replaceBusinessAgentBusinessInformation) | **PUT** /v1/accounts/{accountId}/business-agent/business-information | Replace business information |
| [**resetBusinessAgentBusinessInformation()**](BusinessAgentApi.md#resetBusinessAgentBusinessInformation) | **DELETE** /v1/accounts/{accountId}/business-agent/business-information | Reset business information |
| [**runBusinessAgentConnectorTool()**](BusinessAgentApi.md#runBusinessAgentConnectorTool) | **POST** /v1/accounts/{accountId}/business-agent/connectors/{connectorId}/tools/{toolId}/run | Run a connector tool once |
| [**sendBusinessAgentEvent()**](BusinessAgentApi.md#sendBusinessAgentEvent) | **POST** /v1/accounts/{accountId}/business-agent/events | Send a business event |
| [**sendBusinessAgentTestMessage()**](BusinessAgentApi.md#sendBusinessAgentTestMessage) | **POST** /v1/accounts/{accountId}/business-agent/test-messages | Send a test message |
| [**setBusinessAgentConnectorCredentials()**](BusinessAgentApi.md#setBusinessAgentConnectorCredentials) | **POST** /v1/accounts/{accountId}/business-agent/connectors/{connectorId}/credentials | Set connector credentials |
| [**startBusinessAgentEvalRun()**](BusinessAgentApi.md#startBusinessAgentEvalRun) | **POST** /v1/accounts/{accountId}/business-agent/evals | Start an evaluation run |
| [**updateBusinessAgentConnector()**](BusinessAgentApi.md#updateBusinessAgentConnector) | **PUT** /v1/accounts/{accountId}/business-agent/connectors/{connectorId} | Update a connector |
| [**updateBusinessAgentConnectorTool()**](BusinessAgentApi.md#updateBusinessAgentConnectorTool) | **PUT** /v1/accounts/{accountId}/business-agent/connectors/{connectorId}/tools/{toolId} | Update a connector tool |
| [**updateBusinessAgentFaq()**](BusinessAgentApi.md#updateBusinessAgentFaq) | **PUT** /v1/accounts/{accountId}/business-agent/faqs/{faqId} | Update a FAQ |
| [**updateBusinessAgentSettings()**](BusinessAgentApi.md#updateBusinessAgentSettings) | **PATCH** /v1/accounts/{accountId}/business-agent/settings | Update agent settings |
| [**updateBusinessAgentSkill()**](BusinessAgentApi.md#updateBusinessAgentSkill) | **PUT** /v1/accounts/{accountId}/business-agent/skills/{skillId} | Update a skill |
| [**updateBusinessAgentUiSkill()**](BusinessAgentApi.md#updateBusinessAgentUiSkill) | **PUT** /v1/accounts/{accountId}/business-agent/ui-skills/{uiSkillId} | Update a UI skill |
| [**updateBusinessAgentWebsite()**](BusinessAgentApi.md#updateBusinessAgentWebsite) | **PUT** /v1/accounts/{accountId}/business-agent/websites/{websiteId} | Update a crawled website |
| [**uploadBusinessAgentFile()**](BusinessAgentApi.md#uploadBusinessAgentFile) | **POST** /v1/accounts/{accountId}/business-agent/files | Upload a knowledge file |


## `addBusinessAgentAllowlistEntry()`

```php
addBusinessAgentAllowlistEntry($account_id, $add_business_agent_allowlist_entry_request): \Zernio\Model\BusinessAgentAllowlistEntry
```

Allowlist a consumer

One E.164 number per call. Not idempotent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$add_business_agent_allowlist_entry_request = new \Zernio\Model\AddBusinessAgentAllowlistEntryRequest(); // \Zernio\Model\AddBusinessAgentAllowlistEntryRequest

try {
    $result = $apiInstance->addBusinessAgentAllowlistEntry($account_id, $add_business_agent_allowlist_entry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->addBusinessAgentAllowlistEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **add_business_agent_allowlist_entry_request** | [**\Zernio\Model\AddBusinessAgentAllowlistEntryRequest**](../Model/AddBusinessAgentAllowlistEntryRequest.md)|  | |

### Return type

[**\Zernio\Model\BusinessAgentAllowlistEntry**](../Model/BusinessAgentAllowlistEntry.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addBusinessAgentWebsite()`

```php
addBusinessAgentWebsite($account_id, $business_agent_website_input): \Zernio\Model\BusinessAgentWebsite
```

Add a website to crawl

Meta crawls the site into the agent knowledge and recrawls it periodically; check `crawl_status` and `crawl_error` on read. Not idempotent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$business_agent_website_input = new \Zernio\Model\BusinessAgentWebsiteInput(); // \Zernio\Model\BusinessAgentWebsiteInput

try {
    $result = $apiInstance->addBusinessAgentWebsite($account_id, $business_agent_website_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->addBusinessAgentWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **business_agent_website_input** | [**\Zernio\Model\BusinessAgentWebsiteInput**](../Model/BusinessAgentWebsiteInput.md)|  | |

### Return type

[**\Zernio\Model\BusinessAgentWebsite**](../Model/BusinessAgentWebsite.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBusinessAgentConnector()`

```php
createBusinessAgentConnector($account_id, $business_agent_connector_input): \Zernio\Model\BusinessAgentConnector
```

Create a connector

Base URL plus how to authenticate (OAuth client credentials, API key or none). Names are unique per number. Not idempotent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$business_agent_connector_input = new \Zernio\Model\BusinessAgentConnectorInput(); // \Zernio\Model\BusinessAgentConnectorInput

try {
    $result = $apiInstance->createBusinessAgentConnector($account_id, $business_agent_connector_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->createBusinessAgentConnector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **business_agent_connector_input** | [**\Zernio\Model\BusinessAgentConnectorInput**](../Model/BusinessAgentConnectorInput.md)|  | |

### Return type

[**\Zernio\Model\BusinessAgentConnector**](../Model/BusinessAgentConnector.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBusinessAgentConnectorTool()`

```php
createBusinessAgentConnectorTool($account_id, $connector_id, $business_agent_connector_tool_input): \Zernio\Model\BusinessAgentConnectorTool
```

Create a connector tool

One operation on the connector, with the request definition Meta uses to build the outbound call from the conversation. Type the body params explicitly. Not idempotent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$connector_id = 'connector_id_example'; // string
$business_agent_connector_tool_input = new \Zernio\Model\BusinessAgentConnectorToolInput(); // \Zernio\Model\BusinessAgentConnectorToolInput

try {
    $result = $apiInstance->createBusinessAgentConnectorTool($account_id, $connector_id, $business_agent_connector_tool_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->createBusinessAgentConnectorTool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **connector_id** | **string**|  | |
| **business_agent_connector_tool_input** | [**\Zernio\Model\BusinessAgentConnectorToolInput**](../Model/BusinessAgentConnectorToolInput.md)|  | |

### Return type

[**\Zernio\Model\BusinessAgentConnectorTool**](../Model/BusinessAgentConnectorTool.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBusinessAgentFaq()`

```php
createBusinessAgentFaq($account_id, $business_agent_faq_input): \Zernio\Model\BusinessAgentFaq
```

Create a FAQ

One specific question per entry; beyond a few hundred entries retrieval quality drops. Not idempotent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$business_agent_faq_input = new \Zernio\Model\BusinessAgentFaqInput(); // \Zernio\Model\BusinessAgentFaqInput

try {
    $result = $apiInstance->createBusinessAgentFaq($account_id, $business_agent_faq_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->createBusinessAgentFaq: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **business_agent_faq_input** | [**\Zernio\Model\BusinessAgentFaqInput**](../Model/BusinessAgentFaqInput.md)|  | |

### Return type

[**\Zernio\Model\BusinessAgentFaq**](../Model/BusinessAgentFaq.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBusinessAgentSkill()`

```php
createBusinessAgentSkill($account_id, $business_agent_skill_input): \Zernio\Model\BusinessAgentSkill
```

Create a skill

Behavioral instructions in the brand voice. Reads back `pending_review` until Meta content review passes it. Not idempotent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$business_agent_skill_input = new \Zernio\Model\BusinessAgentSkillInput(); // \Zernio\Model\BusinessAgentSkillInput

try {
    $result = $apiInstance->createBusinessAgentSkill($account_id, $business_agent_skill_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->createBusinessAgentSkill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **business_agent_skill_input** | [**\Zernio\Model\BusinessAgentSkillInput**](../Model/BusinessAgentSkillInput.md)|  | |

### Return type

[**\Zernio\Model\BusinessAgentSkill**](../Model/BusinessAgentSkill.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBusinessAgentUiSkill()`

```php
createBusinessAgentUiSkill($account_id, $business_agent_ui_skill_input): \Zernio\Model\BusinessAgentUiSkill
```

Create a UI skill

Tells the agent when to send a rich component (CTA URL button, image, carousel, list, reply buttons, location, Flow) and what to put in it. Not idempotent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$business_agent_ui_skill_input = new \Zernio\Model\BusinessAgentUiSkillInput(); // \Zernio\Model\BusinessAgentUiSkillInput

try {
    $result = $apiInstance->createBusinessAgentUiSkill($account_id, $business_agent_ui_skill_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->createBusinessAgentUiSkill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **business_agent_ui_skill_input** | [**\Zernio\Model\BusinessAgentUiSkillInput**](../Model/BusinessAgentUiSkillInput.md)|  | |

### Return type

[**\Zernio\Model\BusinessAgentUiSkill**](../Model/BusinessAgentUiSkill.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBusinessAgentConnector()`

```php
deleteBusinessAgentConnector($account_id, $connector_id): \Zernio\Model\InlineObject
```

Delete a connector

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$connector_id = 'connector_id_example'; // string

try {
    $result = $apiInstance->deleteBusinessAgentConnector($account_id, $connector_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->deleteBusinessAgentConnector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **connector_id** | **string**|  | |

### Return type

[**\Zernio\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBusinessAgentConnectorTool()`

```php
deleteBusinessAgentConnectorTool($account_id, $connector_id, $tool_id): \Zernio\Model\InlineObject
```

Delete a connector tool

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$connector_id = 'connector_id_example'; // string
$tool_id = 'tool_id_example'; // string

try {
    $result = $apiInstance->deleteBusinessAgentConnectorTool($account_id, $connector_id, $tool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->deleteBusinessAgentConnectorTool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **connector_id** | **string**|  | |
| **tool_id** | **string**|  | |

### Return type

[**\Zernio\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBusinessAgentFaq()`

```php
deleteBusinessAgentFaq($account_id, $faq_id): \Zernio\Model\InlineObject
```

Delete a FAQ

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$faq_id = 'faq_id_example'; // string

try {
    $result = $apiInstance->deleteBusinessAgentFaq($account_id, $faq_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->deleteBusinessAgentFaq: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **faq_id** | **string**|  | |

### Return type

[**\Zernio\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBusinessAgentFile()`

```php
deleteBusinessAgentFile($account_id, $file_id): \Zernio\Model\InlineObject
```

Delete a knowledge file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$file_id = 'file_id_example'; // string

try {
    $result = $apiInstance->deleteBusinessAgentFile($account_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->deleteBusinessAgentFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **file_id** | **string**|  | |

### Return type

[**\Zernio\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBusinessAgentSkill()`

```php
deleteBusinessAgentSkill($account_id, $skill_id): \Zernio\Model\InlineObject
```

Delete a skill

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$skill_id = 'skill_id_example'; // string

try {
    $result = $apiInstance->deleteBusinessAgentSkill($account_id, $skill_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->deleteBusinessAgentSkill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **skill_id** | **string**|  | |

### Return type

[**\Zernio\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBusinessAgentUiSkill()`

```php
deleteBusinessAgentUiSkill($account_id, $ui_skill_id): \Zernio\Model\InlineObject
```

Delete a UI skill

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$ui_skill_id = 'ui_skill_id_example'; // string

try {
    $result = $apiInstance->deleteBusinessAgentUiSkill($account_id, $ui_skill_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->deleteBusinessAgentUiSkill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **ui_skill_id** | **string**|  | |

### Return type

[**\Zernio\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBusinessAgentWebsite()`

```php
deleteBusinessAgentWebsite($account_id, $website_id): \Zernio\Model\InlineObject
```

Remove a crawled website

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$website_id = 'website_id_example'; // string

try {
    $result = $apiInstance->deleteBusinessAgentWebsite($account_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->deleteBusinessAgentWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **website_id** | **string**|  | |

### Return type

[**\Zernio\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessAgentBudget()`

```php
getBusinessAgentBudget($account_id): \Zernio\Model\GetBusinessAgentBudget200Response
```

Get usage budgets

Caps over rolling windows for the Business Manager that owns the number. An empty list means unlimited.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).

try {
    $result = $apiInstance->getBusinessAgentBudget($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->getBusinessAgentBudget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |

### Return type

[**\Zernio\Model\GetBusinessAgentBudget200Response**](../Model/GetBusinessAgentBudget200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessAgentBusinessInformation()`

```php
getBusinessAgentBusinessInformation($account_id): \Zernio\Model\BusinessAgentBusinessInformation
```

Get business information

Payment methods, return policy, how to buy, shipping, description and contact details the agent answers from. Empty values until configured.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).

try {
    $result = $apiInstance->getBusinessAgentBusinessInformation($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->getBusinessAgentBusinessInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |

### Return type

[**\Zernio\Model\BusinessAgentBusinessInformation**](../Model/BusinessAgentBusinessInformation.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessAgentConnector()`

```php
getBusinessAgentConnector($account_id, $connector_id): \Zernio\Model\BusinessAgentConnector
```

Get a connector

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$connector_id = 'connector_id_example'; // string

try {
    $result = $apiInstance->getBusinessAgentConnector($account_id, $connector_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->getBusinessAgentConnector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **connector_id** | **string**|  | |

### Return type

[**\Zernio\Model\BusinessAgentConnector**](../Model/BusinessAgentConnector.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessAgentConnectorLogs()`

```php
getBusinessAgentConnectorLogs($account_id, $connector_id, $start_time, $end_time, $limit, $tool_id, $include_stats, $summary_only, $top_n): \Zernio\Model\GetBusinessAgentConnectorLogs200Response
```

Get connector failure logs

Third-party failures over the last 7 days (window at most 7 days, default the last 24 hours). Each entry carries `failure_code_name` and `error_message`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$connector_id = 'connector_id_example'; // string
$start_time = 56; // int | Unix seconds.
$end_time = 56; // int | Unix seconds.
$limit = 56; // int
$tool_id = 'tool_id_example'; // string
$include_stats = True; // bool | Add success rate and latency percentiles.
$summary_only = True; // bool | Aggregate failure patterns instead of entries.
$top_n = 56; // int

try {
    $result = $apiInstance->getBusinessAgentConnectorLogs($account_id, $connector_id, $start_time, $end_time, $limit, $tool_id, $include_stats, $summary_only, $top_n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->getBusinessAgentConnectorLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **connector_id** | **string**|  | |
| **start_time** | **int**| Unix seconds. | [optional] |
| **end_time** | **int**| Unix seconds. | [optional] |
| **limit** | **int**|  | [optional] |
| **tool_id** | **string**|  | [optional] |
| **include_stats** | **bool**| Add success rate and latency percentiles. | [optional] |
| **summary_only** | **bool**| Aggregate failure patterns instead of entries. | [optional] |
| **top_n** | **int**|  | [optional] |

### Return type

[**\Zernio\Model\GetBusinessAgentConnectorLogs200Response**](../Model/GetBusinessAgentConnectorLogs200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessAgentConnectorTool()`

```php
getBusinessAgentConnectorTool($account_id, $connector_id, $tool_id): \Zernio\Model\BusinessAgentConnectorTool
```

Get a connector tool

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$connector_id = 'connector_id_example'; // string
$tool_id = 'tool_id_example'; // string

try {
    $result = $apiInstance->getBusinessAgentConnectorTool($account_id, $connector_id, $tool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->getBusinessAgentConnectorTool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **connector_id** | **string**|  | |
| **tool_id** | **string**|  | |

### Return type

[**\Zernio\Model\BusinessAgentConnectorTool**](../Model/BusinessAgentConnectorTool.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessAgentEvent()`

```php
getBusinessAgentEvent($account_id, $event_id): \Zernio\Model\BusinessAgentEventStatus
```

Get a business event status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$event_id = 'event_id_example'; // string

try {
    $result = $apiInstance->getBusinessAgentEvent($account_id, $event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->getBusinessAgentEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **event_id** | **string**|  | |

### Return type

[**\Zernio\Model\BusinessAgentEventStatus**](../Model/BusinessAgentEventStatus.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessAgentFaq()`

```php
getBusinessAgentFaq($account_id, $faq_id): \Zernio\Model\BusinessAgentFaq
```

Get a FAQ

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$faq_id = 'faq_id_example'; // string

try {
    $result = $apiInstance->getBusinessAgentFaq($account_id, $faq_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->getBusinessAgentFaq: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **faq_id** | **string**|  | |

### Return type

[**\Zernio\Model\BusinessAgentFaq**](../Model/BusinessAgentFaq.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessAgentFile()`

```php
getBusinessAgentFile($account_id, $file_id): \Zernio\Model\BusinessAgentKnowledgeFile
```

Get a knowledge file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$file_id = 'file_id_example'; // string

try {
    $result = $apiInstance->getBusinessAgentFile($account_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->getBusinessAgentFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **file_id** | **string**|  | |

### Return type

[**\Zernio\Model\BusinessAgentKnowledgeFile**](../Model/BusinessAgentKnowledgeFile.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessAgentSkill()`

```php
getBusinessAgentSkill($account_id, $skill_id): \Zernio\Model\BusinessAgentSkill
```

Get a skill

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$skill_id = 'skill_id_example'; // string

try {
    $result = $apiInstance->getBusinessAgentSkill($account_id, $skill_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->getBusinessAgentSkill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **skill_id** | **string**|  | |

### Return type

[**\Zernio\Model\BusinessAgentSkill**](../Model/BusinessAgentSkill.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessAgentStatus()`

```php
getBusinessAgentStatus($account_id): \Zernio\Model\BusinessAgentStatus
```

Get agent setup status

One read that says where the merchant is: whether the number is eligible, whether the Meta Business Agent terms are accepted, whether an agent exists, whether it is on, and its settings. `manualSteps` lists what Zernio can verify is still pending (accepting the terms in WhatsApp Manager); `unverifiedSteps` lists what Meta exposes no state for (the payment method in Billing Hub). Never fails for those pre-setup states; it reports them as flags.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).

try {
    $result = $apiInstance->getBusinessAgentStatus($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->getBusinessAgentStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |

### Return type

[**\Zernio\Model\BusinessAgentStatus**](../Model/BusinessAgentStatus.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessAgentUiSkill()`

```php
getBusinessAgentUiSkill($account_id, $ui_skill_id): \Zernio\Model\BusinessAgentUiSkill
```

Get a UI skill

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$ui_skill_id = 'ui_skill_id_example'; // string

try {
    $result = $apiInstance->getBusinessAgentUiSkill($account_id, $ui_skill_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->getBusinessAgentUiSkill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **ui_skill_id** | **string**|  | |

### Return type

[**\Zernio\Model\BusinessAgentUiSkill**](../Model/BusinessAgentUiSkill.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessAgentWebsite()`

```php
getBusinessAgentWebsite($account_id, $website_id): \Zernio\Model\BusinessAgentWebsite
```

Get a crawled website

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$website_id = 'website_id_example'; // string

try {
    $result = $apiInstance->getBusinessAgentWebsite($account_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->getBusinessAgentWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **website_id** | **string**|  | |

### Return type

[**\Zernio\Model\BusinessAgentWebsite**](../Model/BusinessAgentWebsite.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBusinessAgentAllowlist()`

```php
listBusinessAgentAllowlist($account_id): \Zernio\Model\ListBusinessAgentAllowlist200Response
```

List allowlisted consumers

Consumers the agent answers while `ai_audience` is ALLOWLISTED_ONLY.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).

try {
    $result = $apiInstance->listBusinessAgentAllowlist($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->listBusinessAgentAllowlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |

### Return type

[**\Zernio\Model\ListBusinessAgentAllowlist200Response**](../Model/ListBusinessAgentAllowlist200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBusinessAgentConnectorTools()`

```php
listBusinessAgentConnectorTools($account_id, $connector_id): \Zernio\Model\ListBusinessAgentConnectorTools200Response
```

List connector tools

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$connector_id = 'connector_id_example'; // string

try {
    $result = $apiInstance->listBusinessAgentConnectorTools($account_id, $connector_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->listBusinessAgentConnectorTools: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **connector_id** | **string**|  | |

### Return type

[**\Zernio\Model\ListBusinessAgentConnectorTools200Response**](../Model/ListBusinessAgentConnectorTools200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBusinessAgentConnectors()`

```php
listBusinessAgentConnectors($account_id): \Zernio\Model\ListBusinessAgentConnectors200Response
```

List connectors

External APIs the agent may call. `connection_status` says whether Meta can currently reach each one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).

try {
    $result = $apiInstance->listBusinessAgentConnectors($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->listBusinessAgentConnectors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |

### Return type

[**\Zernio\Model\ListBusinessAgentConnectors200Response**](../Model/ListBusinessAgentConnectors200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBusinessAgentFaqs()`

```php
listBusinessAgentFaqs($account_id): \Zernio\Model\ListBusinessAgentFaqs200Response
```

List FAQs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).

try {
    $result = $apiInstance->listBusinessAgentFaqs($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->listBusinessAgentFaqs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |

### Return type

[**\Zernio\Model\ListBusinessAgentFaqs200Response**](../Model/ListBusinessAgentFaqs200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBusinessAgentFiles()`

```php
listBusinessAgentFiles($account_id): \Zernio\Model\ListBusinessAgentFiles200Response
```

List knowledge files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).

try {
    $result = $apiInstance->listBusinessAgentFiles($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->listBusinessAgentFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |

### Return type

[**\Zernio\Model\ListBusinessAgentFiles200Response**](../Model/ListBusinessAgentFiles200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBusinessAgentSettings()`

```php
listBusinessAgentSettings($account_id, $agent_id): \Zernio\Model\ListBusinessAgentSettings200Response
```

List agent settings

Settings of every agent configured on the number (normally one). Pass `agentId` to read one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$agent_id = 'agent_id_example'; // string

try {
    $result = $apiInstance->listBusinessAgentSettings($account_id, $agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->listBusinessAgentSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **agent_id** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\ListBusinessAgentSettings200Response**](../Model/ListBusinessAgentSettings200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBusinessAgentSkills()`

```php
listBusinessAgentSkills($account_id): \Zernio\Model\ListBusinessAgentSkills200Response
```

List skills

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).

try {
    $result = $apiInstance->listBusinessAgentSkills($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->listBusinessAgentSkills: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |

### Return type

[**\Zernio\Model\ListBusinessAgentSkills200Response**](../Model/ListBusinessAgentSkills200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBusinessAgentUiSkills()`

```php
listBusinessAgentUiSkills($account_id, $before, $after, $limit): \Zernio\Model\ListBusinessAgentUiSkills200Response
```

List UI skills

Cursor paged; follow `paging.cursors.after` until `paging.next` is absent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$before = 'before_example'; // string
$after = 'after_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->listBusinessAgentUiSkills($account_id, $before, $after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->listBusinessAgentUiSkills: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **before** | **string**|  | [optional] |
| **after** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\Zernio\Model\ListBusinessAgentUiSkills200Response**](../Model/ListBusinessAgentUiSkills200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBusinessAgentWebsites()`

```php
listBusinessAgentWebsites($account_id): \Zernio\Model\ListBusinessAgentWebsites200Response
```

List crawled websites

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).

try {
    $result = $apiInstance->listBusinessAgentWebsites($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->listBusinessAgentWebsites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |

### Return type

[**\Zernio\Model\ListBusinessAgentWebsites200Response**](../Model/ListBusinessAgentWebsites200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onboardBusinessAgent()`

```php
onboardBusinessAgent($account_id): \Zernio\Model\OnboardBusinessAgent201Response
```

Create the agent

Creates the Meta Business Agent on the number and schedules Meta's data preparation. Requires the terms to be accepted; eligibility is checked first and an ineligible number answers 403 `business_agent_not_eligible`. Not idempotent: call it once, then configure knowledge and skills, then enable it through the settings. Configuration calls made in the first minute can still answer `business_agent_not_found` while Meta prepares the workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).

try {
    $result = $apiInstance->onboardBusinessAgent($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->onboardBusinessAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |

### Return type

[**\Zernio\Model\OnboardBusinessAgent201Response**](../Model/OnboardBusinessAgent201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readBusinessAgentEvals()`

```php
readBusinessAgentEvals($account_id, $job_id, $summary_ids, $eval_ids): array<string,mixed>
```

Read evaluation data

Without query parameters, lists the evaluation scenarios (`eval_cases`). With `jobId`, polls a run started with POST. With `summaryIds`, returns the aggregated insight reports. With `evalIds`, returns per-conversation evaluation details. One of the three at a time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$job_id = 'job_id_example'; // string
$summary_ids = 'summary_ids_example'; // string | Comma-separated summary ids.
$eval_ids = 'eval_ids_example'; // string | Comma-separated evaluation ids.

try {
    $result = $apiInstance->readBusinessAgentEvals($account_id, $job_id, $summary_ids, $eval_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->readBusinessAgentEvals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **job_id** | **string**|  | [optional] |
| **summary_ids** | **string**| Comma-separated summary ids. | [optional] |
| **eval_ids** | **string**| Comma-separated evaluation ids. | [optional] |

### Return type

**array<string,mixed>**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshBusinessAgentConnectorTools()`

```php
refreshBusinessAgentConnectorTools($account_id, $connector_id): \Zernio\Model\BusinessAgentConnector
```

Refresh MCP connector tools

Re-discovers the tools of an MCP connector. A failed discovery keeps the previous tool set and reports an ERROR sync status inside a 200.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$connector_id = 'connector_id_example'; // string

try {
    $result = $apiInstance->refreshBusinessAgentConnectorTools($account_id, $connector_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->refreshBusinessAgentConnectorTools: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **connector_id** | **string**|  | |

### Return type

[**\Zernio\Model\BusinessAgentConnector**](../Model/BusinessAgentConnector.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeBusinessAgentAllowlistEntry()`

```php
removeBusinessAgentAllowlistEntry($account_id, $entry_id): \Zernio\Model\InlineObject
```

Remove an allowlisted consumer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$entry_id = 'entry_id_example'; // string

try {
    $result = $apiInstance->removeBusinessAgentAllowlistEntry($account_id, $entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->removeBusinessAgentAllowlistEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **entry_id** | **string**|  | |

### Return type

[**\Zernio\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceBusinessAgentBudget()`

```php
replaceBusinessAgentBudget($account_id, $get_business_agent_budget200_response): \Zernio\Model\GetBusinessAgentBudget200Response
```

Replace usage budgets

The full desired set: budgets left out are removed, an empty list returns to unlimited. Pass `budget_id` to edit one in place. When a cap is hit the agent finishes its turn, stops answering and hands the thread to a human until the window rolls over.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$get_business_agent_budget200_response = new \Zernio\Model\GetBusinessAgentBudget200Response(); // \Zernio\Model\GetBusinessAgentBudget200Response

try {
    $result = $apiInstance->replaceBusinessAgentBudget($account_id, $get_business_agent_budget200_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->replaceBusinessAgentBudget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **get_business_agent_budget200_response** | [**\Zernio\Model\GetBusinessAgentBudget200Response**](../Model/GetBusinessAgentBudget200Response.md)|  | |

### Return type

[**\Zernio\Model\GetBusinessAgentBudget200Response**](../Model/GetBusinessAgentBudget200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceBusinessAgentBusinessInformation()`

```php
replaceBusinessAgentBusinessInformation($account_id, $business_agent_business_information): \Zernio\Model\BusinessAgentBusinessInformation
```

Replace business information

Full replacement: every field you send overwrites the stored value; fields you omit are cleared.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$business_agent_business_information = new \Zernio\Model\BusinessAgentBusinessInformation(); // \Zernio\Model\BusinessAgentBusinessInformation

try {
    $result = $apiInstance->replaceBusinessAgentBusinessInformation($account_id, $business_agent_business_information);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->replaceBusinessAgentBusinessInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **business_agent_business_information** | [**\Zernio\Model\BusinessAgentBusinessInformation**](../Model/BusinessAgentBusinessInformation.md)|  | |

### Return type

[**\Zernio\Model\BusinessAgentBusinessInformation**](../Model/BusinessAgentBusinessInformation.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetBusinessAgentBusinessInformation()`

```php
resetBusinessAgentBusinessInformation($account_id): \Zernio\Model\InlineObject
```

Reset business information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).

try {
    $result = $apiInstance->resetBusinessAgentBusinessInformation($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->resetBusinessAgentBusinessInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |

### Return type

[**\Zernio\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `runBusinessAgentConnectorTool()`

```php
runBusinessAgentConnectorTool($account_id, $connector_id, $tool_id, $run_business_agent_connector_tool_request): \Zernio\Model\RunBusinessAgentConnectorTool200Response
```

Run a connector tool once

Executes the tool against the merchant API and returns the raw upstream result, to check a connector before the agent relies on it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$connector_id = 'connector_id_example'; // string
$tool_id = 'tool_id_example'; // string
$run_business_agent_connector_tool_request = new \Zernio\Model\RunBusinessAgentConnectorToolRequest(); // \Zernio\Model\RunBusinessAgentConnectorToolRequest

try {
    $result = $apiInstance->runBusinessAgentConnectorTool($account_id, $connector_id, $tool_id, $run_business_agent_connector_tool_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->runBusinessAgentConnectorTool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **connector_id** | **string**|  | |
| **tool_id** | **string**|  | |
| **run_business_agent_connector_tool_request** | [**\Zernio\Model\RunBusinessAgentConnectorToolRequest**](../Model/RunBusinessAgentConnectorToolRequest.md)|  | |

### Return type

[**\Zernio\Model\RunBusinessAgentConnectorTool200Response**](../Model/RunBusinessAgentConnectorTool200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendBusinessAgentEvent()`

```php
sendBusinessAgentEvent($account_id, $send_business_agent_event_request): \Zernio\Model\SendBusinessAgentEvent202Response
```

Send a business event

Tell the agent something happened in your systems (order shipped, document verified) so it messages the consumer about it. The consumer must already have a conversation with the number. Answers 202 with the event id; poll it for the outcome.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$send_business_agent_event_request = new \Zernio\Model\SendBusinessAgentEventRequest(); // \Zernio\Model\SendBusinessAgentEventRequest

try {
    $result = $apiInstance->sendBusinessAgentEvent($account_id, $send_business_agent_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->sendBusinessAgentEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **send_business_agent_event_request** | [**\Zernio\Model\SendBusinessAgentEventRequest**](../Model/SendBusinessAgentEventRequest.md)|  | |

### Return type

[**\Zernio\Model\SendBusinessAgentEvent202Response**](../Model/SendBusinessAgentEvent202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendBusinessAgentTestMessage()`

```php
sendBusinessAgentTestMessage($account_id, $send_business_agent_test_message_request): \Zernio\Model\BusinessAgentTestMessageResponse
```

Send a test message

Runs the message through the full agent pipeline in Meta sandbox with no WhatsApp user and no token billing. Pass back `conversationId` to continue a thread. Meta rate-limits it per number per hour.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$send_business_agent_test_message_request = new \Zernio\Model\SendBusinessAgentTestMessageRequest(); // \Zernio\Model\SendBusinessAgentTestMessageRequest

try {
    $result = $apiInstance->sendBusinessAgentTestMessage($account_id, $send_business_agent_test_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->sendBusinessAgentTestMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **send_business_agent_test_message_request** | [**\Zernio\Model\SendBusinessAgentTestMessageRequest**](../Model/SendBusinessAgentTestMessageRequest.md)|  | |

### Return type

[**\Zernio\Model\BusinessAgentTestMessageResponse**](../Model/BusinessAgentTestMessageResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setBusinessAgentConnectorCredentials()`

```php
setBusinessAgentConnectorCredentials($account_id, $connector_id, $set_business_agent_connector_credentials_request): \Zernio\Model\BusinessAgentConnector
```

Set connector credentials

Set or rotate the connector's credentials in place: `kind: api_key`, `kind: oauth` (client credentials) or `kind: certificate` (mTLS client certificate). Meta has no call that removes a credential layer; change the connector's `auth_type` or delete it instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$connector_id = 'connector_id_example'; // string
$set_business_agent_connector_credentials_request = new \Zernio\Model\SetBusinessAgentConnectorCredentialsRequest(); // \Zernio\Model\SetBusinessAgentConnectorCredentialsRequest

try {
    $result = $apiInstance->setBusinessAgentConnectorCredentials($account_id, $connector_id, $set_business_agent_connector_credentials_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->setBusinessAgentConnectorCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **connector_id** | **string**|  | |
| **set_business_agent_connector_credentials_request** | [**\Zernio\Model\SetBusinessAgentConnectorCredentialsRequest**](../Model/SetBusinessAgentConnectorCredentialsRequest.md)|  | |

### Return type

[**\Zernio\Model\BusinessAgentConnector**](../Model/BusinessAgentConnector.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startBusinessAgentEvalRun()`

```php
startBusinessAgentEvalRun($account_id, $start_business_agent_eval_run_request): \Zernio\Model\StartBusinessAgentEvalRun202Response
```

Start an evaluation run

Simulates the given scenarios against the agent and scores them. Answers 202 with a `job_id` to poll with GET.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$start_business_agent_eval_run_request = new \Zernio\Model\StartBusinessAgentEvalRunRequest(); // \Zernio\Model\StartBusinessAgentEvalRunRequest

try {
    $result = $apiInstance->startBusinessAgentEvalRun($account_id, $start_business_agent_eval_run_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->startBusinessAgentEvalRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **start_business_agent_eval_run_request** | [**\Zernio\Model\StartBusinessAgentEvalRunRequest**](../Model/StartBusinessAgentEvalRunRequest.md)|  | |

### Return type

[**\Zernio\Model\StartBusinessAgentEvalRun202Response**](../Model/StartBusinessAgentEvalRun202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBusinessAgentConnector()`

```php
updateBusinessAgentConnector($account_id, $connector_id, $business_agent_connector_input): \Zernio\Model\BusinessAgentConnector
```

Update a connector

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$connector_id = 'connector_id_example'; // string
$business_agent_connector_input = new \Zernio\Model\BusinessAgentConnectorInput(); // \Zernio\Model\BusinessAgentConnectorInput

try {
    $result = $apiInstance->updateBusinessAgentConnector($account_id, $connector_id, $business_agent_connector_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->updateBusinessAgentConnector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **connector_id** | **string**|  | |
| **business_agent_connector_input** | [**\Zernio\Model\BusinessAgentConnectorInput**](../Model/BusinessAgentConnectorInput.md)|  | |

### Return type

[**\Zernio\Model\BusinessAgentConnector**](../Model/BusinessAgentConnector.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBusinessAgentConnectorTool()`

```php
updateBusinessAgentConnectorTool($account_id, $connector_id, $tool_id, $business_agent_connector_tool_input): \Zernio\Model\BusinessAgentConnectorTool
```

Update a connector tool

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$connector_id = 'connector_id_example'; // string
$tool_id = 'tool_id_example'; // string
$business_agent_connector_tool_input = new \Zernio\Model\BusinessAgentConnectorToolInput(); // \Zernio\Model\BusinessAgentConnectorToolInput

try {
    $result = $apiInstance->updateBusinessAgentConnectorTool($account_id, $connector_id, $tool_id, $business_agent_connector_tool_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->updateBusinessAgentConnectorTool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **connector_id** | **string**|  | |
| **tool_id** | **string**|  | |
| **business_agent_connector_tool_input** | [**\Zernio\Model\BusinessAgentConnectorToolInput**](../Model/BusinessAgentConnectorToolInput.md)|  | |

### Return type

[**\Zernio\Model\BusinessAgentConnectorTool**](../Model/BusinessAgentConnectorTool.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBusinessAgentFaq()`

```php
updateBusinessAgentFaq($account_id, $faq_id, $business_agent_faq_input): \Zernio\Model\BusinessAgentFaq
```

Update a FAQ

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$faq_id = 'faq_id_example'; // string
$business_agent_faq_input = new \Zernio\Model\BusinessAgentFaqInput(); // \Zernio\Model\BusinessAgentFaqInput

try {
    $result = $apiInstance->updateBusinessAgentFaq($account_id, $faq_id, $business_agent_faq_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->updateBusinessAgentFaq: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **faq_id** | **string**|  | |
| **business_agent_faq_input** | [**\Zernio\Model\BusinessAgentFaqInput**](../Model/BusinessAgentFaqInput.md)|  | |

### Return type

[**\Zernio\Model\BusinessAgentFaq**](../Model/BusinessAgentFaq.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBusinessAgentSettings()`

```php
updateBusinessAgentSettings($account_id, $update_business_agent_settings_request, $agent_id): \Zernio\Model\BusinessAgentSettings
```

Update agent settings

Partial update: fields you omit keep their value. `rollout.enabled: true` turns the agent on for new conversations; `false` stops it on every thread. Turning it on for `EVERYONE` needs a payment method on the Business Agent billable account (Meta accepts the call but delivers nothing without one); `ALLOWLISTED_ONLY` does not, which is how you test with a few numbers before billing. `never_say_phrases` replaces the whole list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$update_business_agent_settings_request = new \Zernio\Model\UpdateBusinessAgentSettingsRequest(); // \Zernio\Model\UpdateBusinessAgentSettingsRequest
$agent_id = 'agent_id_example'; // string

try {
    $result = $apiInstance->updateBusinessAgentSettings($account_id, $update_business_agent_settings_request, $agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->updateBusinessAgentSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **update_business_agent_settings_request** | [**\Zernio\Model\UpdateBusinessAgentSettingsRequest**](../Model/UpdateBusinessAgentSettingsRequest.md)|  | |
| **agent_id** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\BusinessAgentSettings**](../Model/BusinessAgentSettings.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBusinessAgentSkill()`

```php
updateBusinessAgentSkill($account_id, $skill_id, $business_agent_skill_input): \Zernio\Model\BusinessAgentSkill
```

Update a skill

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$skill_id = 'skill_id_example'; // string
$business_agent_skill_input = new \Zernio\Model\BusinessAgentSkillInput(); // \Zernio\Model\BusinessAgentSkillInput

try {
    $result = $apiInstance->updateBusinessAgentSkill($account_id, $skill_id, $business_agent_skill_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->updateBusinessAgentSkill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **skill_id** | **string**|  | |
| **business_agent_skill_input** | [**\Zernio\Model\BusinessAgentSkillInput**](../Model/BusinessAgentSkillInput.md)|  | |

### Return type

[**\Zernio\Model\BusinessAgentSkill**](../Model/BusinessAgentSkill.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBusinessAgentUiSkill()`

```php
updateBusinessAgentUiSkill($account_id, $ui_skill_id, $business_agent_ui_skill_input): \Zernio\Model\BusinessAgentUiSkill
```

Update a UI skill

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$ui_skill_id = 'ui_skill_id_example'; // string
$business_agent_ui_skill_input = new \Zernio\Model\BusinessAgentUiSkillInput(); // \Zernio\Model\BusinessAgentUiSkillInput

try {
    $result = $apiInstance->updateBusinessAgentUiSkill($account_id, $ui_skill_id, $business_agent_ui_skill_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->updateBusinessAgentUiSkill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **ui_skill_id** | **string**|  | |
| **business_agent_ui_skill_input** | [**\Zernio\Model\BusinessAgentUiSkillInput**](../Model/BusinessAgentUiSkillInput.md)|  | |

### Return type

[**\Zernio\Model\BusinessAgentUiSkill**](../Model/BusinessAgentUiSkill.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBusinessAgentWebsite()`

```php
updateBusinessAgentWebsite($account_id, $website_id, $business_agent_website_input): \Zernio\Model\BusinessAgentWebsite
```

Update a crawled website

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$website_id = 'website_id_example'; // string
$business_agent_website_input = new \Zernio\Model\BusinessAgentWebsiteInput(); // \Zernio\Model\BusinessAgentWebsiteInput

try {
    $result = $apiInstance->updateBusinessAgentWebsite($account_id, $website_id, $business_agent_website_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->updateBusinessAgentWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **website_id** | **string**|  | |
| **business_agent_website_input** | [**\Zernio\Model\BusinessAgentWebsiteInput**](../Model/BusinessAgentWebsiteInput.md)|  | |

### Return type

[**\Zernio\Model\BusinessAgentWebsite**](../Model/BusinessAgentWebsite.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadBusinessAgentFile()`

```php
uploadBusinessAgentFile($account_id, $upload_business_agent_file_request): \Zernio\Model\BusinessAgentKnowledgeFile
```

Upload a knowledge file

Accepted types: pdf, doc, docx, png, jpg, jpeg, plus csv and xlsx when Meta enabled extraction on the asset. Meta's limit is 100 MB. Two ways to send the file: - JSON `{ url, fileName }`: Zernio downloads the file (public https URL, no redirects,   capped at 100 MB) and forwards it. Use this for anything above a few megabytes. - multipart form-data with a `file` part (and an optional `fileName`): bounded by the   request body limit of about 4.5 MB; larger uploads must use the `url` form. Not idempotent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account id (the number must be managed through the Cloud API).
$upload_business_agent_file_request = new \Zernio\Model\UploadBusinessAgentFileRequest(); // \Zernio\Model\UploadBusinessAgentFileRequest

try {
    $result = $apiInstance->uploadBusinessAgentFile($account_id, $upload_business_agent_file_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAgentApi->uploadBusinessAgentFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account id (the number must be managed through the Cloud API). | |
| **upload_business_agent_file_request** | [**\Zernio\Model\UploadBusinessAgentFileRequest**](../Model/UploadBusinessAgentFileRequest.md)|  | |

### Return type

[**\Zernio\Model\BusinessAgentKnowledgeFile**](../Model/BusinessAgentKnowledgeFile.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
