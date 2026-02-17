# Late\MessagesApi

Unified inbox API for managing conversations and direct messages across all connected accounts. All endpoints aggregate data from multiple social accounts in a single API call. Requires Inbox addon.

All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**editInboxMessage()**](MessagesApi.md#editInboxMessage) | **PATCH** /v1/inbox/conversations/{conversationId}/messages/{messageId} | Edit message |
| [**getInboxConversation()**](MessagesApi.md#getInboxConversation) | **GET** /v1/inbox/conversations/{conversationId} | Get conversation |
| [**getInboxConversationMessages()**](MessagesApi.md#getInboxConversationMessages) | **GET** /v1/inbox/conversations/{conversationId}/messages | List messages |
| [**listInboxConversations()**](MessagesApi.md#listInboxConversations) | **GET** /v1/inbox/conversations | List conversations |
| [**sendInboxMessage()**](MessagesApi.md#sendInboxMessage) | **POST** /v1/inbox/conversations/{conversationId}/messages | Send message |
| [**updateInboxConversation()**](MessagesApi.md#updateInboxConversation) | **PUT** /v1/inbox/conversations/{conversationId} | Update conversation status |


## `editInboxMessage()`

```php
editInboxMessage($conversation_id, $message_id, $edit_inbox_message_request): \Late\Model\EditInboxMessage200Response
```

Edit message

Edit the text and/or reply markup of a previously sent Telegram message. Only supported for Telegram. Returns 400 for other platforms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID
$message_id = 'message_id_example'; // string | The Telegram message ID to edit
$edit_inbox_message_request = new \Late\Model\EditInboxMessageRequest(); // \Late\Model\EditInboxMessageRequest

try {
    $result = $apiInstance->editInboxMessage($conversation_id, $message_id, $edit_inbox_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->editInboxMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID | |
| **message_id** | **string**| The Telegram message ID to edit | |
| **edit_inbox_message_request** | [**\Late\Model\EditInboxMessageRequest**](../Model/EditInboxMessageRequest.md)|  | |

### Return type

[**\Late\Model\EditInboxMessage200Response**](../Model/EditInboxMessage200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboxConversation()`

```php
getInboxConversation($conversation_id, $account_id): \Late\Model\GetInboxConversation200Response
```

Get conversation

Retrieve details and metadata for a specific conversation. Requires accountId query parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID.
$account_id = 'account_id_example'; // string | The social account ID

try {
    $result = $apiInstance->getInboxConversation($conversation_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getInboxConversation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID. | |
| **account_id** | **string**| The social account ID | |

### Return type

[**\Late\Model\GetInboxConversation200Response**](../Model/GetInboxConversation200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboxConversationMessages()`

```php
getInboxConversationMessages($conversation_id, $account_id): \Late\Model\GetInboxConversationMessages200Response
```

List messages

Fetch messages for a specific conversation. Requires accountId query parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID.
$account_id = 'account_id_example'; // string | Social account ID

try {
    $result = $apiInstance->getInboxConversationMessages($conversation_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getInboxConversationMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID. | |
| **account_id** | **string**| Social account ID | |

### Return type

[**\Late\Model\GetInboxConversationMessages200Response**](../Model/GetInboxConversationMessages200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInboxConversations()`

```php
listInboxConversations($profile_id, $platform, $status, $sort_order, $limit, $cursor, $account_id): \Late\Model\ListInboxConversations200Response
```

List conversations

Fetch conversations (DMs) from all connected messaging accounts in a single API call. Supports filtering by profile and platform. Results are aggregated and deduplicated. Supported platforms: Facebook, Instagram, Twitter/X, Bluesky, Reddit, Telegram.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Filter by profile ID
$platform = 'platform_example'; // string | Filter by platform
$status = 'status_example'; // string | Filter by conversation status
$sort_order = 'desc'; // string | Sort order by updated time
$limit = 50; // int | Maximum number of conversations to return
$cursor = 'cursor_example'; // string | Pagination cursor for next page
$account_id = 'account_id_example'; // string | Filter by specific social account ID

try {
    $result = $apiInstance->listInboxConversations($profile_id, $platform, $status, $sort_order, $limit, $cursor, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->listInboxConversations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Filter by profile ID | [optional] |
| **platform** | **string**| Filter by platform | [optional] |
| **status** | **string**| Filter by conversation status | [optional] |
| **sort_order** | **string**| Sort order by updated time | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**| Maximum number of conversations to return | [optional] [default to 50] |
| **cursor** | **string**| Pagination cursor for next page | [optional] |
| **account_id** | **string**| Filter by specific social account ID | [optional] |

### Return type

[**\Late\Model\ListInboxConversations200Response**](../Model/ListInboxConversations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendInboxMessage()`

```php
sendInboxMessage($conversation_id, $send_inbox_message_request): \Late\Model\SendInboxMessage200Response
```

Send message

Send a message in a conversation. Supports text, attachments, quick replies, buttons, and message tags. Attachment and interactive message support varies by platform.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID.
$send_inbox_message_request = new \Late\Model\SendInboxMessageRequest(); // \Late\Model\SendInboxMessageRequest

try {
    $result = $apiInstance->sendInboxMessage($conversation_id, $send_inbox_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendInboxMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID. | |
| **send_inbox_message_request** | [**\Late\Model\SendInboxMessageRequest**](../Model/SendInboxMessageRequest.md)|  | |

### Return type

[**\Late\Model\SendInboxMessage200Response**](../Model/SendInboxMessage200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInboxConversation()`

```php
updateInboxConversation($conversation_id, $update_inbox_conversation_request): \Late\Model\UpdateInboxConversation200Response
```

Update conversation status

Archive or activate a conversation. Requires accountId in request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID.
$update_inbox_conversation_request = new \Late\Model\UpdateInboxConversationRequest(); // \Late\Model\UpdateInboxConversationRequest

try {
    $result = $apiInstance->updateInboxConversation($conversation_id, $update_inbox_conversation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->updateInboxConversation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID. | |
| **update_inbox_conversation_request** | [**\Late\Model\UpdateInboxConversationRequest**](../Model/UpdateInboxConversationRequest.md)|  | |

### Return type

[**\Late\Model\UpdateInboxConversation200Response**](../Model/UpdateInboxConversation200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
