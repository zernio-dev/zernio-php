# Zernio\WhatsAppApi

WhatsApp Business API. Template, business profile, and phone number endpoints. All endpoints require an accountId parameter identifying the WhatsApp-connected social account.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addWhatsAppGroupParticipants()**](WhatsAppApi.md#addWhatsAppGroupParticipants) | **POST** /v1/whatsapp/wa-groups/{groupId}/participants | Add participants |
| [**approveWhatsAppGroupJoinRequests()**](WhatsAppApi.md#approveWhatsAppGroupJoinRequests) | **POST** /v1/whatsapp/wa-groups/{groupId}/join-requests | Approve join requests |
| [**createWhatsAppGroupChat()**](WhatsAppApi.md#createWhatsAppGroupChat) | **POST** /v1/whatsapp/wa-groups | Create group |
| [**createWhatsAppGroupInviteLink()**](WhatsAppApi.md#createWhatsAppGroupInviteLink) | **POST** /v1/whatsapp/wa-groups/{groupId}/invite-link | Create invite link |
| [**createWhatsAppTemplate()**](WhatsAppApi.md#createWhatsAppTemplate) | **POST** /v1/whatsapp/templates | Create template |
| [**deleteWhatsAppGroupChat()**](WhatsAppApi.md#deleteWhatsAppGroupChat) | **DELETE** /v1/whatsapp/wa-groups/{groupId} | Delete group |
| [**deleteWhatsAppTemplate()**](WhatsAppApi.md#deleteWhatsAppTemplate) | **DELETE** /v1/whatsapp/templates/{templateName} | Delete template |
| [**getWhatsAppBusinessProfile()**](WhatsAppApi.md#getWhatsAppBusinessProfile) | **GET** /v1/whatsapp/business-profile | Get business profile |
| [**getWhatsAppDisplayName()**](WhatsAppApi.md#getWhatsAppDisplayName) | **GET** /v1/whatsapp/business-profile/display-name | Get display name status |
| [**getWhatsAppGroupChat()**](WhatsAppApi.md#getWhatsAppGroupChat) | **GET** /v1/whatsapp/wa-groups/{groupId} | Get group info |
| [**getWhatsAppTemplate()**](WhatsAppApi.md#getWhatsAppTemplate) | **GET** /v1/whatsapp/templates/{templateName} | Get template |
| [**getWhatsAppTemplates()**](WhatsAppApi.md#getWhatsAppTemplates) | **GET** /v1/whatsapp/templates | List templates |
| [**listWhatsAppGroupChats()**](WhatsAppApi.md#listWhatsAppGroupChats) | **GET** /v1/whatsapp/wa-groups | List active groups |
| [**listWhatsAppGroupJoinRequests()**](WhatsAppApi.md#listWhatsAppGroupJoinRequests) | **GET** /v1/whatsapp/wa-groups/{groupId}/join-requests | List join requests |
| [**rejectWhatsAppGroupJoinRequests()**](WhatsAppApi.md#rejectWhatsAppGroupJoinRequests) | **DELETE** /v1/whatsapp/wa-groups/{groupId}/join-requests | Reject join requests |
| [**removeWhatsAppGroupParticipants()**](WhatsAppApi.md#removeWhatsAppGroupParticipants) | **DELETE** /v1/whatsapp/wa-groups/{groupId}/participants | Remove participants |
| [**updateWhatsAppBusinessProfile()**](WhatsAppApi.md#updateWhatsAppBusinessProfile) | **POST** /v1/whatsapp/business-profile | Update business profile |
| [**updateWhatsAppDisplayName()**](WhatsAppApi.md#updateWhatsAppDisplayName) | **POST** /v1/whatsapp/business-profile/display-name | Request display name change |
| [**updateWhatsAppGroupChat()**](WhatsAppApi.md#updateWhatsAppGroupChat) | **POST** /v1/whatsapp/wa-groups/{groupId} | Update group settings |
| [**updateWhatsAppTemplate()**](WhatsAppApi.md#updateWhatsAppTemplate) | **PATCH** /v1/whatsapp/templates/{templateName} | Update template |
| [**uploadWhatsAppProfilePhoto()**](WhatsAppApi.md#uploadWhatsAppProfilePhoto) | **POST** /v1/whatsapp/business-profile/photo | Upload profile picture |


## `addWhatsAppGroupParticipants()`

```php
addWhatsAppGroupParticipants($group_id, $account_id, $add_whats_app_group_participants_request): \Zernio\Model\UnpublishPost200Response
```

Add participants

Add participants to a WhatsApp group. Maximum 8 participants per request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$add_whats_app_group_participants_request = new \Zernio\Model\AddWhatsAppGroupParticipantsRequest(); // \Zernio\Model\AddWhatsAppGroupParticipantsRequest

try {
    $result = $apiInstance->addWhatsAppGroupParticipants($group_id, $account_id, $add_whats_app_group_participants_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->addWhatsAppGroupParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **account_id** | **string**| WhatsApp social account ID | |
| **add_whats_app_group_participants_request** | [**\Zernio\Model\AddWhatsAppGroupParticipantsRequest**](../Model/AddWhatsAppGroupParticipantsRequest.md)|  | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `approveWhatsAppGroupJoinRequests()`

```php
approveWhatsAppGroupJoinRequests($group_id, $account_id, $approve_whats_app_group_join_requests_request): \Zernio\Model\UnpublishPost200Response
```

Approve join requests

Approve pending join requests for a WhatsApp group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$approve_whats_app_group_join_requests_request = new \Zernio\Model\ApproveWhatsAppGroupJoinRequestsRequest(); // \Zernio\Model\ApproveWhatsAppGroupJoinRequestsRequest

try {
    $result = $apiInstance->approveWhatsAppGroupJoinRequests($group_id, $account_id, $approve_whats_app_group_join_requests_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->approveWhatsAppGroupJoinRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **account_id** | **string**| WhatsApp social account ID | |
| **approve_whats_app_group_join_requests_request** | [**\Zernio\Model\ApproveWhatsAppGroupJoinRequestsRequest**](../Model/ApproveWhatsAppGroupJoinRequestsRequest.md)|  | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWhatsAppGroupChat()`

```php
createWhatsAppGroupChat($create_whats_app_group_chat_request): \Zernio\Model\CreateWhatsAppGroupChat201Response
```

Create group

Create a new WhatsApp group chat. Returns the group ID and optionally an invite link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_whats_app_group_chat_request = new \Zernio\Model\CreateWhatsAppGroupChatRequest(); // \Zernio\Model\CreateWhatsAppGroupChatRequest

try {
    $result = $apiInstance->createWhatsAppGroupChat($create_whats_app_group_chat_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->createWhatsAppGroupChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_whats_app_group_chat_request** | [**\Zernio\Model\CreateWhatsAppGroupChatRequest**](../Model/CreateWhatsAppGroupChatRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateWhatsAppGroupChat201Response**](../Model/CreateWhatsAppGroupChat201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWhatsAppGroupInviteLink()`

```php
createWhatsAppGroupInviteLink($group_id, $account_id): \Zernio\Model\CreateWhatsAppGroupInviteLink200Response
```

Create invite link

Create a new invite link for a WhatsApp group. The previous link is revoked.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->createWhatsAppGroupInviteLink($group_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->createWhatsAppGroupInviteLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\CreateWhatsAppGroupInviteLink200Response**](../Model/CreateWhatsAppGroupInviteLink200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWhatsAppTemplate()`

```php
createWhatsAppTemplate($create_whats_app_template_request): \Zernio\Model\CreateWhatsAppTemplate200Response
```

Create template

Create a new message template. Supports two modes:  Custom template: Provide components with your own content. Submitted to Meta for review (can take up to 24h).  Library template: Provide library_template_name instead of components to use a pre-built template from Meta's template library. Library templates are pre-approved (no review wait). You can optionally customize parameters and buttons via library_template_body_inputs and library_template_button_inputs.  Browse available library templates at: https://business.facebook.com/wa/manage/message-templates/

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_whats_app_template_request = {"accountId":"507f1f77bcf86cd799439011","name":"order_confirmation","category":"UTILITY","language":"en_US","components":[{"type":"header","format":"image","example":{"header_handle":["https://example.com/header.jpg"]}},{"type":"body","text":"Your order {{1}} has been confirmed. Expected delivery: {{2}}","example":{"body_text":[["ORD-12345","March 31"]]}},{"type":"footer","text":"Thank you for your purchase"},{"type":"buttons","buttons":[{"type":"quick_reply","text":"Track Order"}]}]}; // \Zernio\Model\CreateWhatsAppTemplateRequest

try {
    $result = $apiInstance->createWhatsAppTemplate($create_whats_app_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->createWhatsAppTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_whats_app_template_request** | [**\Zernio\Model\CreateWhatsAppTemplateRequest**](../Model/CreateWhatsAppTemplateRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateWhatsAppTemplate200Response**](../Model/CreateWhatsAppTemplate200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWhatsAppGroupChat()`

```php
deleteWhatsAppGroupChat($group_id, $account_id): \Zernio\Model\UnpublishPost200Response
```

Delete group

Delete a WhatsApp group and remove all participants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->deleteWhatsAppGroupChat($group_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->deleteWhatsAppGroupChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWhatsAppTemplate()`

```php
deleteWhatsAppTemplate($template_name, $account_id): \Zernio\Model\UnpublishPost200Response
```

Delete template

Permanently delete a message template by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_name = 'template_name_example'; // string | Template name
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->deleteWhatsAppTemplate($template_name, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->deleteWhatsAppTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_name** | **string**| Template name | |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppBusinessProfile()`

```php
getWhatsAppBusinessProfile($account_id): \Zernio\Model\GetWhatsAppBusinessProfile200Response
```

Get business profile

Retrieve the WhatsApp Business profile for the account (about, address, description, email, websites, etc.).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->getWhatsAppBusinessProfile($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppBusinessProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\GetWhatsAppBusinessProfile200Response**](../Model/GetWhatsAppBusinessProfile200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppDisplayName()`

```php
getWhatsAppDisplayName($account_id): \Zernio\Model\GetWhatsAppDisplayName200Response
```

Get display name status

Fetch the current display name and its Meta review status for a WhatsApp Business account. Display name changes require Meta approval and can take 1-3 business days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->getWhatsAppDisplayName($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppDisplayName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\GetWhatsAppDisplayName200Response**](../Model/GetWhatsAppDisplayName200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppGroupChat()`

```php
getWhatsAppGroupChat($group_id, $account_id): \Zernio\Model\GetWhatsAppGroupChat200Response
```

Get group info

Retrieve metadata about a WhatsApp group including subject, description, participants, and settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->getWhatsAppGroupChat($group_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppGroupChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\GetWhatsAppGroupChat200Response**](../Model/GetWhatsAppGroupChat200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppTemplate()`

```php
getWhatsAppTemplate($template_name, $account_id): \Zernio\Model\GetWhatsAppTemplate200Response
```

Get template

Retrieve a single message template by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_name = 'template_name_example'; // string | Template name
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->getWhatsAppTemplate($template_name, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_name** | **string**| Template name | |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\GetWhatsAppTemplate200Response**](../Model/GetWhatsAppTemplate200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppTemplates()`

```php
getWhatsAppTemplates($account_id): \Zernio\Model\GetWhatsAppTemplates200Response
```

List templates

List all message templates for the WhatsApp Business Account (WABA) associated with the given account. Templates are fetched directly from the WhatsApp Cloud API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->getWhatsAppTemplates($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\GetWhatsAppTemplates200Response**](../Model/GetWhatsAppTemplates200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWhatsAppGroupChats()`

```php
listWhatsAppGroupChats($account_id, $limit, $after): \Zernio\Model\ListWhatsAppGroupChats200Response
```

List active groups

List active WhatsApp group chats for a business phone number. These are actual WhatsApp group conversations on the platform.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$limit = 25; // int | Max groups to return
$after = 'after_example'; // string | Pagination cursor

try {
    $result = $apiInstance->listWhatsAppGroupChats($account_id, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->listWhatsAppGroupChats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |
| **limit** | **int**| Max groups to return | [optional] [default to 25] |
| **after** | **string**| Pagination cursor | [optional] |

### Return type

[**\Zernio\Model\ListWhatsAppGroupChats200Response**](../Model/ListWhatsAppGroupChats200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWhatsAppGroupJoinRequests()`

```php
listWhatsAppGroupJoinRequests($group_id, $account_id): \Zernio\Model\ListWhatsAppGroupJoinRequests200Response
```

List join requests

List pending join requests for a WhatsApp group (only for groups with approval_required mode).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->listWhatsAppGroupJoinRequests($group_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->listWhatsAppGroupJoinRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\ListWhatsAppGroupJoinRequests200Response**](../Model/ListWhatsAppGroupJoinRequests200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectWhatsAppGroupJoinRequests()`

```php
rejectWhatsAppGroupJoinRequests($group_id, $account_id, $reject_whats_app_group_join_requests_request): \Zernio\Model\UnpublishPost200Response
```

Reject join requests

Reject pending join requests for a WhatsApp group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$reject_whats_app_group_join_requests_request = new \Zernio\Model\RejectWhatsAppGroupJoinRequestsRequest(); // \Zernio\Model\RejectWhatsAppGroupJoinRequestsRequest

try {
    $result = $apiInstance->rejectWhatsAppGroupJoinRequests($group_id, $account_id, $reject_whats_app_group_join_requests_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->rejectWhatsAppGroupJoinRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **account_id** | **string**| WhatsApp social account ID | |
| **reject_whats_app_group_join_requests_request** | [**\Zernio\Model\RejectWhatsAppGroupJoinRequestsRequest**](../Model/RejectWhatsAppGroupJoinRequestsRequest.md)|  | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeWhatsAppGroupParticipants()`

```php
removeWhatsAppGroupParticipants($group_id, $account_id, $remove_whats_app_group_participants_request): \Zernio\Model\UnpublishPost200Response
```

Remove participants

Remove participants from a WhatsApp group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$remove_whats_app_group_participants_request = new \Zernio\Model\RemoveWhatsAppGroupParticipantsRequest(); // \Zernio\Model\RemoveWhatsAppGroupParticipantsRequest

try {
    $result = $apiInstance->removeWhatsAppGroupParticipants($group_id, $account_id, $remove_whats_app_group_participants_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->removeWhatsAppGroupParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **account_id** | **string**| WhatsApp social account ID | |
| **remove_whats_app_group_participants_request** | [**\Zernio\Model\RemoveWhatsAppGroupParticipantsRequest**](../Model/RemoveWhatsAppGroupParticipantsRequest.md)|  | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWhatsAppBusinessProfile()`

```php
updateWhatsAppBusinessProfile($update_whats_app_business_profile_request): \Zernio\Model\UnpublishPost200Response
```

Update business profile

Update the WhatsApp Business profile. All fields are optional; only provided fields will be updated. Constraints: about max 139 chars, description max 512 chars, max 2 websites.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_whats_app_business_profile_request = {"accountId":"507f1f77bcf86cd799439011","about":"We help businesses grow","description":"Premium business solutions for startups and enterprises","email":"hello@example.com","websites":["https://example.com"]}; // \Zernio\Model\UpdateWhatsAppBusinessProfileRequest

try {
    $result = $apiInstance->updateWhatsAppBusinessProfile($update_whats_app_business_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->updateWhatsAppBusinessProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_whats_app_business_profile_request** | [**\Zernio\Model\UpdateWhatsAppBusinessProfileRequest**](../Model/UpdateWhatsAppBusinessProfileRequest.md)|  | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWhatsAppDisplayName()`

```php
updateWhatsAppDisplayName($update_whats_app_display_name_request): \Zernio\Model\UpdateWhatsAppDisplayName200Response
```

Request display name change

Submit a display name change request for the WhatsApp Business account. The new name must follow WhatsApp naming guidelines (3-512 characters, must represent your business). Changes require Meta review and approval, which typically takes 1-3 business days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_whats_app_display_name_request = {"accountId":"507f1f77bcf86cd799439011","displayName":"My Business Name"}; // \Zernio\Model\UpdateWhatsAppDisplayNameRequest

try {
    $result = $apiInstance->updateWhatsAppDisplayName($update_whats_app_display_name_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->updateWhatsAppDisplayName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_whats_app_display_name_request** | [**\Zernio\Model\UpdateWhatsAppDisplayNameRequest**](../Model/UpdateWhatsAppDisplayNameRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateWhatsAppDisplayName200Response**](../Model/UpdateWhatsAppDisplayName200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWhatsAppGroupChat()`

```php
updateWhatsAppGroupChat($group_id, $account_id, $update_whats_app_group_chat_request): \Zernio\Model\UnpublishPost200Response
```

Update group settings

Update the subject, description, or join approval mode of a WhatsApp group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$update_whats_app_group_chat_request = new \Zernio\Model\UpdateWhatsAppGroupChatRequest(); // \Zernio\Model\UpdateWhatsAppGroupChatRequest

try {
    $result = $apiInstance->updateWhatsAppGroupChat($group_id, $account_id, $update_whats_app_group_chat_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->updateWhatsAppGroupChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **account_id** | **string**| WhatsApp social account ID | |
| **update_whats_app_group_chat_request** | [**\Zernio\Model\UpdateWhatsAppGroupChatRequest**](../Model/UpdateWhatsAppGroupChatRequest.md)|  | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWhatsAppTemplate()`

```php
updateWhatsAppTemplate($template_name, $update_whats_app_template_request): \Zernio\Model\UpdateWhatsAppTemplate200Response
```

Update template

Update a message template's components. Only certain fields can be updated depending on the template's current approval state. Approved templates can only have components updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_name = 'template_name_example'; // string | Template name
$update_whats_app_template_request = {"accountId":"507f1f77bcf86cd799439011","components":[{"type":"body","text":"Updated: Your order {{1}} is confirmed. Delivery by {{2}}","example":{"body_text":[["ORD-12345","April 1"]]}},{"type":"buttons","buttons":[{"type":"quick_reply","text":"Track Order"}]}]}; // \Zernio\Model\UpdateWhatsAppTemplateRequest

try {
    $result = $apiInstance->updateWhatsAppTemplate($template_name, $update_whats_app_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->updateWhatsAppTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_name** | **string**| Template name | |
| **update_whats_app_template_request** | [**\Zernio\Model\UpdateWhatsAppTemplateRequest**](../Model/UpdateWhatsAppTemplateRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateWhatsAppTemplate200Response**](../Model/UpdateWhatsAppTemplate200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadWhatsAppProfilePhoto()`

```php
uploadWhatsAppProfilePhoto($account_id, $file): \Zernio\Model\UnpublishPost200Response
```

Upload profile picture

Upload a new profile picture for the WhatsApp Business Profile. Uses Meta's resumable upload API under the hood: creates an upload session, uploads the image bytes, then updates the business profile with the resulting handle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$file = '/path/to/file.txt'; // \SplFileObject | Image file (JPEG or PNG, max 5MB, recommended 640x640)

try {
    $result = $apiInstance->uploadWhatsAppProfilePhoto($account_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->uploadWhatsAppProfilePhoto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |
| **file** | **\SplFileObject****\SplFileObject**| Image file (JPEG or PNG, max 5MB, recommended 640x640) | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
