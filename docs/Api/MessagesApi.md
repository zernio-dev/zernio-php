# Zernio\MessagesApi

Unified inbox API for managing conversations and direct messages across all connected accounts. All endpoints aggregate data from multiple accounts in a single API call. Requires Inbox addon.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addMessageReaction()**](MessagesApi.md#addMessageReaction) | **POST** /v1/inbox/conversations/{conversationId}/messages/{messageId}/reactions | Add reaction |
| [**createInboxConversation()**](MessagesApi.md#createInboxConversation) | **POST** /v1/inbox/conversations | Create conversation |
| [**deleteInboxMessage()**](MessagesApi.md#deleteInboxMessage) | **DELETE** /v1/inbox/conversations/{conversationId}/messages/{messageId} | Delete message |
| [**editInboxMessage()**](MessagesApi.md#editInboxMessage) | **PATCH** /v1/inbox/conversations/{conversationId}/messages/{messageId} | Edit message |
| [**getInboxConversation()**](MessagesApi.md#getInboxConversation) | **GET** /v1/inbox/conversations/{conversationId} | Get conversation |
| [**getInboxConversationMessages()**](MessagesApi.md#getInboxConversationMessages) | **GET** /v1/inbox/conversations/{conversationId}/messages | List messages |
| [**getMessageAttachment()**](MessagesApi.md#getMessageAttachment) | **GET** /v1/inbox/conversations/{conversationId}/messages/{messageId}/attachments/{index} | Resolve message attachment |
| [**listInboxConversations()**](MessagesApi.md#listInboxConversations) | **GET** /v1/inbox/conversations | List conversations |
| [**markConversationRead()**](MessagesApi.md#markConversationRead) | **POST** /v1/inbox/conversations/{conversationId}/read | Mark a conversation as read |
| [**removeMessageReaction()**](MessagesApi.md#removeMessageReaction) | **DELETE** /v1/inbox/conversations/{conversationId}/messages/{messageId}/reactions | Remove reaction |
| [**searchInboxConversations()**](MessagesApi.md#searchInboxConversations) | **GET** /v1/inbox/conversations/search | Search conversations |
| [**sendInboxMessage()**](MessagesApi.md#sendInboxMessage) | **POST** /v1/inbox/conversations/{conversationId}/messages | Send message |
| [**sendTypingIndicator()**](MessagesApi.md#sendTypingIndicator) | **POST** /v1/inbox/conversations/{conversationId}/typing | Send typing indicator |
| [**setConversationThreadControl()**](MessagesApi.md#setConversationThreadControl) | **POST** /v1/inbox/conversations/{conversationId}/thread-control | Hand a conversation to or from Meta Business Agent |
| [**updateInboxConversation()**](MessagesApi.md#updateInboxConversation) | **PUT** /v1/inbox/conversations/{conversationId} | Update conversation status |
| [**uploadMediaDirect()**](MessagesApi.md#uploadMediaDirect) | **POST** /v1/media/upload-direct | Upload media file |


## `addMessageReaction()`

```php
addMessageReaction($conversation_id, $message_id, $add_message_reaction_request): \Zernio\Model\AddMessageReaction200Response
```

Add reaction

Add an emoji reaction to a message. Platform support: - Telegram: Supports a subset of Unicode emoji reactions - WhatsApp: Supports any standard emoji (one reaction per message per sender) - Instagram and Facebook Messenger: Any standard emoji, subject to Meta's 24h messaging window - Slack: The emoji must have a Slack name (e.g. `:thumbsup:`); unnamed characters return 400 - All others: Returns 400 (not supported)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID
$message_id = 'message_id_example'; // string | The platform message ID (as returned by GET /messages) or the Zernio message ID (as returned by the reaction webhook)
$add_message_reaction_request = new \Zernio\Model\AddMessageReactionRequest(); // \Zernio\Model\AddMessageReactionRequest

try {
    $result = $apiInstance->addMessageReaction($conversation_id, $message_id, $add_message_reaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->addMessageReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID | |
| **message_id** | **string**| The platform message ID (as returned by GET /messages) or the Zernio message ID (as returned by the reaction webhook) | |
| **add_message_reaction_request** | [**\Zernio\Model\AddMessageReactionRequest**](../Model/AddMessageReactionRequest.md)|  | |

### Return type

[**\Zernio\Model\AddMessageReaction200Response**](../Model/AddMessageReaction200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInboxConversation()`

```php
createInboxConversation($create_inbox_conversation_request): \Zernio\Model\CreateInboxConversation201Response
```

Create conversation

Start a direct message conversation with a user. If a conversation with that recipient already exists, the message is added to the existing thread.  Supported platforms: X, Bluesky, Reddit, WhatsApp, SMS, and Slack. Other platforms return PLATFORM_NOT_SUPPORTED.  **Slack.** Pass a workspace member id as participantId (list them with GET /v1/accounts/{accountId}/slack-members). Zernio opens the DM channel with that member and sends the message; the thread then behaves like any other Slack conversation in the inbox. The member must belong to the connected workspace.  **WhatsApp.** This is the endpoint for sending an approved template message to a phone number. Provide templateName, templateLanguage, and templateParams (variable values for the text header, body and dynamic URL buttons, in that order), with the recipient phone in participantId. A template is required because WhatsApp does not permit freeform messages to open a conversation; a missing template returns TEMPLATE_REQUIRED.  - Templates with media headers (image, video, document) are handled automatically: Zernio reads the approved template definition and fills the header at send time with the template's approved sample asset. To send a DIFFERENT asset per message (e.g. a distinct invoice PDF for each recipient), pass the headerMedia field with a public link (or a Meta media id); it overrides the sample for that send. - A template whose approved header format is LOCATION has no header asset to reconstruct at all: Meta only accepts the location at send time, so pass headerLocation (latitude and longitude required) whenever such a template is sent; headerMedia and headerLocation cannot both be supplied. - A button that carries its own value at send time (a copy-code button holding a Pix payment code or a coupon, a flow token) is sent with templateButtonParams, addressed by the button's index; templateParams covers text variables and dynamic URL buttons only. - Template fields are accepted on the JSON body only, not on multipart requests.  For a number you already have a thread with, this sends the template into that thread, which also makes it the way to re-engage a contact after the 24-hour customer-service window has closed. Once the recipient replies (opening the 24h window), send freeform messages with the send-message endpoint (POST /v1/inbox/conversations/{conversationId}/messages).  Alternatively, WhatsApp Business Accounts eligible for Meta Direct Send can open a conversation with a business-initiated utility text message and no template: pass category: 'utility' together with message (and no templateName). See the category field below.  **DM eligibility (X).** Before sending, the endpoint checks if the recipient accepts DMs from your account (via the receives_your_dm field). If not, a 422 error with code DM_NOT_ALLOWED is returned. You can skip this check with skipDmCheck: true if you have already verified eligibility.  **X API tier requirement.** DM write endpoints require X API Pro tier ($5,000/month) or Enterprise access. This applies to BYOK (Bring Your Own Key) users who provide their own X API credentials.  **Rate limits (X only).** X's DM API enforces 200 requests per 15 minutes, 1,000 per 24 hours per connected X account, and 15,000 per 24 hours per X developer app (shared across all DM endpoints). These limits do NOT apply to other platforms. WhatsApp sends are governed by Meta's per-number messaging tiers (unique business-initiated conversations per 24 hours) and per-number throughput instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_inbox_conversation_request = new \Zernio\Model\CreateInboxConversationRequest(); // \Zernio\Model\CreateInboxConversationRequest

try {
    $result = $apiInstance->createInboxConversation($create_inbox_conversation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->createInboxConversation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_inbox_conversation_request** | [**\Zernio\Model\CreateInboxConversationRequest**](../Model/CreateInboxConversationRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateInboxConversation201Response**](../Model/CreateInboxConversation201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInboxMessage()`

```php
deleteInboxMessage($conversation_id, $message_id, $account_id): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Delete message

Delete a message from a conversation. Platform support varies: - Telegram: Full delete (bot's own messages anytime, others if admin) - X: Full delete (own DM events only) - Bluesky: Delete for self only (recipient still sees it) - Reddit: Delete from sender's view only - Facebook, Instagram, WhatsApp: Not supported (returns 400)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID
$message_id = 'message_id_example'; // string | The platform message ID to delete
$account_id = 'account_id_example'; // string | Account ID

try {
    $result = $apiInstance->deleteInboxMessage($conversation_id, $message_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->deleteInboxMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID | |
| **message_id** | **string**| The platform message ID to delete | |
| **account_id** | **string**| Account ID | |

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

## `editInboxMessage()`

```php
editInboxMessage($conversation_id, $message_id, $edit_inbox_message_request): \Zernio\Model\EditInboxMessage200Response
```

Edit message

Edit the text and/or reply markup of a previously sent Telegram message. Only supported for Telegram. Returns 400 for other platforms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID
$message_id = 'message_id_example'; // string | The Telegram message ID to edit
$edit_inbox_message_request = new \Zernio\Model\EditInboxMessageRequest(); // \Zernio\Model\EditInboxMessageRequest

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
| **edit_inbox_message_request** | [**\Zernio\Model\EditInboxMessageRequest**](../Model/EditInboxMessageRequest.md)|  | |

### Return type

[**\Zernio\Model\EditInboxMessage200Response**](../Model/EditInboxMessage200Response.md)

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
getInboxConversation($conversation_id, $account_id): \Zernio\Model\GetInboxConversation200Response
```

Get conversation

Retrieve details and metadata for a specific conversation. Requires accountId query parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | Opaque conversation identifier, accepted verbatim from the list endpoint or from the conversationId on inbox webhooks. Format not to be assumed.
$account_id = 'account_id_example'; // string | The account ID

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
| **conversation_id** | **string**| Opaque conversation identifier, accepted verbatim from the list endpoint or from the conversationId on inbox webhooks. Format not to be assumed. | |
| **account_id** | **string**| The account ID | |

### Return type

[**\Zernio\Model\GetInboxConversation200Response**](../Model/GetInboxConversation200Response.md)

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
getInboxConversationMessages($conversation_id, $account_id, $limit, $cursor, $sort_order): \Zernio\Model\GetInboxConversationMessages200Response
```

List messages

Fetch messages for a specific conversation, with cursor-based pagination and ordering control.  Pagination: pass `pagination.nextCursor` from a prior response back as the `cursor` query param to fetch the next page. The cursor is opaque; do not parse or construct it client-side.  Sort order: defaults to `asc` (oldest first, chat style). For the \"show me the latest messages\" pattern, pass `?sortOrder=desc&limit=N`. X, Instagram, Telegram, WhatsApp and Reddit honor the requested order from the local message store. For Facebook and Bluesky, the upstream APIs only return newest-first and have no order parameter, so sort order is best-effort and only reverses items within a single page (pages still walk newest→oldest). The response field `sortOrderApplied` tells you what was actually applied.  Reddit threads are paginated client-side because Reddit's API has no per-thread cursor. Very long threads may be upstream-truncated by Reddit's inbox/sent windows (~100 most-recent items each); this is a Reddit platform limitation.  Instagram and Facebook conversations include history from before the account was connected, replayed from Meta. That replay covers the 500 most recent messages per conversation: a longer thread keeps its newest 500 and older messages are not retrievable. Messages that arrived after the account was connected are unaffected. Replayed messages are stored as already read and emit no webhooks.  X limitation: X's encrypted \"X Chat\" messages are not accessible via the API. Conversations where the other participant uses encrypted X Chat may only show your outgoing messages. See the list conversations endpoint for more details.  This endpoint is read-only and does NOT mark messages as read or send read receipts. To mark a conversation read (and send WhatsApp blue ticks on eligible accounts), call `POST /v1/inbox/conversations/{conversationId}/read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | Opaque conversation identifier, accepted verbatim from the list endpoint or from the conversationId on inbox webhooks. Format not to be assumed.
$account_id = 'account_id_example'; // string | Account ID
$limit = 100; // int | Number of messages to return per page. Default 100, max 100.
$cursor = 'cursor_example'; // string | Opaque pagination cursor. Pass `pagination.nextCursor` from a prior response verbatim: a cursor we cannot parse returns 400 rather than silently restarting from the first page.
$sort_order = 'asc'; // string | Order of returned messages. Default `asc` (oldest first, chat style). X, Instagram, Telegram, WhatsApp and Reddit honor this order across cursor pages. For Facebook and Bluesky, only intra-page ordering is affected. Pages always walk newest→oldest. See `sortOrderApplied` in the response.

try {
    $result = $apiInstance->getInboxConversationMessages($conversation_id, $account_id, $limit, $cursor, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getInboxConversationMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| Opaque conversation identifier, accepted verbatim from the list endpoint or from the conversationId on inbox webhooks. Format not to be assumed. | |
| **account_id** | **string**| Account ID | |
| **limit** | **int**| Number of messages to return per page. Default 100, max 100. | [optional] [default to 100] |
| **cursor** | **string**| Opaque pagination cursor. Pass &#x60;pagination.nextCursor&#x60; from a prior response verbatim: a cursor we cannot parse returns 400 rather than silently restarting from the first page. | [optional] |
| **sort_order** | **string**| Order of returned messages. Default &#x60;asc&#x60; (oldest first, chat style). X, Instagram, Telegram, WhatsApp and Reddit honor this order across cursor pages. For Facebook and Bluesky, only intra-page ordering is affected. Pages always walk newest→oldest. See &#x60;sortOrderApplied&#x60; in the response. | [optional] [default to &#39;asc&#39;] |

### Return type

[**\Zernio\Model\GetInboxConversationMessages200Response**](../Model/GetInboxConversationMessages200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessageAttachment()`

```php
getMessageAttachment($conversation_id, $message_id, $index, $account_id, $format): \Zernio\Model\GetMessageAttachment200Response
```

Resolve message attachment

Resolve one attachment on a message to a media url that works right now.  Instagram and Facebook sign DM media urls per request and expire them, so the `url` on a message is a snapshot: it works when you read the message and stops working later. This endpoint checks the stored url and, when it has gone stale, re-mints the message's media from Meta and persists it before answering. The message id never expires, so this URL is the one to store. It is returned ready-made on each attachment as `refreshUrl` when you read a message over REST.  **Webhook payloads do not carry `refreshUrl`**, so a webhook-driven integration builds this URL itself. Every piece is in the event: `message.conversationId`, `message.platformMessageId`, the attachment's zero-based position, and `account.accountId`. **`accountId` is a required query parameter**; omitting it returns `400` `missing_required_field`, which is the same requirement `GET /v1/whatsapp/media/{mediaId}` has.  By default it responds `302` to the live media url, so it can be used directly as an `<img src>` on a browser session. API-key integrators should pass `?format=json` and read `url` off the body, since a browser cannot attach an Authorization header to an image request.  Only Instagram and Facebook media can be re-minted. On other platforms the stored url is returned as-is when it still resolves, and `404` otherwise.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID (Zernio id or platform conversation id)
$message_id = 'message_id_example'; // string | The message id as returned by the list-messages endpoint (the platform message id)
$index = 56; // int | Zero-based position of the attachment in the message's attachments array
$account_id = 'account_id_example'; // string | Account ID. Required: without it the request returns 400 missing_required_field.
$format = 'redirect'; // string | `redirect` (default) answers 302 to the media; `json` returns the url in the body

try {
    $result = $apiInstance->getMessageAttachment($conversation_id, $message_id, $index, $account_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getMessageAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID (Zernio id or platform conversation id) | |
| **message_id** | **string**| The message id as returned by the list-messages endpoint (the platform message id) | |
| **index** | **int**| Zero-based position of the attachment in the message&#39;s attachments array | |
| **account_id** | **string**| Account ID. Required: without it the request returns 400 missing_required_field. | |
| **format** | **string**| &#x60;redirect&#x60; (default) answers 302 to the media; &#x60;json&#x60; returns the url in the body | [optional] [default to &#39;redirect&#39;] |

### Return type

[**\Zernio\Model\GetMessageAttachment200Response**](../Model/GetMessageAttachment200Response.md)

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
listInboxConversations($profile_id, $platform, $status, $sort_order, $limit, $cursor, $account_id): \Zernio\Model\ListInboxConversations200Response
```

List conversations

Fetch conversations (DMs) from all connected messaging accounts in a single API call. Supports filtering by profile and platform. Results are aggregated and deduplicated.  Supported platforms: Facebook, Instagram, X, Bluesky, Reddit, Telegram.  **X limitation.** X has replaced traditional DMs with encrypted \"X Chat\" for many accounts. Messages sent or received through encrypted X Chat are not accessible via X's API (the /2/dm_events endpoint only returns legacy unencrypted DMs). This means some X conversations may show only outgoing messages or appear empty. This is an X platform limitation that affects all third-party applications. See X's docs on encrypted messaging for more details.  **Instagram and Facebook pre-connect history.** When one of these accounts is connected, Zernio replays the DM history the account already holds on Meta, so conversations that began before the account was connected appear here. Up to 500 conversations per account are replayed.  - The replay runs in the background and can finish after a listing you have already taken, and replayed conversations keep their original lastMessageAt, so they sort into date order rather than appearing at the top. If you mirror this endpoint into your own store, re-run the sweep rather than relying on a single pass at connect time. - Replayed history emits no webhooks and is stored as already read, so it never affects unread counts. - Threads that Meta refuses to serve are skipped, and an account whose Instagram \"connected tools\" message access is turned off is not replayed at all.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
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
$account_id = 'account_id_example'; // string | Filter by specific account ID

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
| **account_id** | **string**| Filter by specific account ID | [optional] |

### Return type

[**\Zernio\Model\ListInboxConversations200Response**](../Model/ListInboxConversations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markConversationRead()`

```php
markConversationRead($conversation_id, $send_typing_indicator_request): \Zernio\Model\MarkConversationRead200Response
```

Mark a conversation as read

Marks all unread incoming messages in the conversation as read.  For WhatsApp, this also sends read receipts (blue ticks) to the contact, EXCEPT on coexistence accounts (where the WhatsApp Business app on the customer's phone owns read state and we never override it).  This is the explicit, human-driven counterpart to `GET .../messages`, which is side-effect-free and does NOT mark anything read. Call this when a user actually views the conversation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID
$send_typing_indicator_request = new \Zernio\Model\SendTypingIndicatorRequest(); // \Zernio\Model\SendTypingIndicatorRequest

try {
    $result = $apiInstance->markConversationRead($conversation_id, $send_typing_indicator_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->markConversationRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID | |
| **send_typing_indicator_request** | [**\Zernio\Model\SendTypingIndicatorRequest**](../Model/SendTypingIndicatorRequest.md)|  | |

### Return type

[**\Zernio\Model\MarkConversationRead200Response**](../Model/MarkConversationRead200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeMessageReaction()`

```php
removeMessageReaction($conversation_id, $message_id, $account_id): \Zernio\Model\RemoveMessageReaction200Response
```

Remove reaction

Remove a reaction from a message. Platform support: - Telegram: Send empty reaction array to clear - WhatsApp: Send empty emoji to remove - Instagram and Facebook Messenger: Sends Meta's `unreact` action; the emoji does not need to be repeated - Slack: Removes the reaction we previously sent on that message - All others: Returns 400 (not supported)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID
$message_id = 'message_id_example'; // string | The platform message ID (as returned by GET /messages) or the Zernio message ID (as returned by the reaction webhook)
$account_id = 'account_id_example'; // string | Account ID

try {
    $result = $apiInstance->removeMessageReaction($conversation_id, $message_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->removeMessageReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID | |
| **message_id** | **string**| The platform message ID (as returned by GET /messages) or the Zernio message ID (as returned by the reaction webhook) | |
| **account_id** | **string**| Account ID | |

### Return type

[**\Zernio\Model\RemoveMessageReaction200Response**](../Model/RemoveMessageReaction200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchInboxConversations()`

```php
searchInboxConversations($query, $direction, $profile_id, $platform, $account_id, $limit, $cursor): \Zernio\Model\SearchInboxConversations200Response
```

Search conversations

Search your conversations two ways at once, and get back the matching conversations, most-recent match first:  - Message text: matches words inside message bodies. Case-insensitive and accent-insensitive, exact tokens only (no substrings, no stemming). Each hit carries up to 3 most-recent matching messages. With direction=outgoing you can collect examples of how you write to customers, for example to teach an AI agent your tone of voice. - Contact identity: matches the participant's name, username, or phone number as a case-insensitive substring. These hits have matchCount 0 and an empty matches array.  A conversation that matches both ways is returned once, carrying its message matches.  Only platforms whose messages are stored by Zernio are searchable: WhatsApp, SMS, Telegram, Facebook, Instagram, X and Reddit. Bluesky conversations are fetched live from the platform and cannot be searched; those accounts are listed in meta.accountsSkipped.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | Text to search for, in message content and in the contact's name, username, or phone number
$direction = 'direction_example'; // string | Only match messages sent to you (incoming) or by you (outgoing). Contact-identity matching is not applied when this is set.
$profile_id = 'profile_id_example'; // string | Filter by profile ID
$platform = 'platform_example'; // string | Filter by platform (searchable platforms only)
$account_id = 'account_id_example'; // string | Filter by specific account ID
$limit = 20; // int | Maximum number of conversations to return
$cursor = 'cursor_example'; // string | Opaque pagination cursor. Pass back pagination.nextCursor verbatim; do not construct one.

try {
    $result = $apiInstance->searchInboxConversations($query, $direction, $profile_id, $platform, $account_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->searchInboxConversations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| Text to search for, in message content and in the contact&#39;s name, username, or phone number | |
| **direction** | **string**| Only match messages sent to you (incoming) or by you (outgoing). Contact-identity matching is not applied when this is set. | [optional] |
| **profile_id** | **string**| Filter by profile ID | [optional] |
| **platform** | **string**| Filter by platform (searchable platforms only) | [optional] |
| **account_id** | **string**| Filter by specific account ID | [optional] |
| **limit** | **int**| Maximum number of conversations to return | [optional] [default to 20] |
| **cursor** | **string**| Opaque pagination cursor. Pass back pagination.nextCursor verbatim; do not construct one. | [optional] |

### Return type

[**\Zernio\Model\SearchInboxConversations200Response**](../Model/SearchInboxConversations200Response.md)

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
sendInboxMessage($conversation_id, $send_inbox_message_request, $idempotency_key): \Zernio\Model\SendInboxMessage200Response
```

Send message

Send a message in a conversation. Supports text, attachments, quick replies, buttons, templates, and message tags. Attachment and interactive message support varies by platform.  WhatsApp per-recipient rate limit: WhatsApp caps how many messages you may send to the same recipient in a short window and rejects the excess with error code `131056` (\"Too many messages sent to this recipient\"). Pace sends to a single recipient at roughly 10 per minute; bursts above that return a `400` with code `131056`. Sends to other recipients are unaffected, so parallelise across recipients rather than flooding one.  WhatsApp template messages: to send an approved template into this conversation (required when the 24-hour customer-service window is closed), use the `template` field with a single element carrying the template reference: `{ \"elements\": [{ \"name\": ..., \"language\": ..., \"components\": [...] }] }`. See the `template` field below for the exact shape. To send a template to a phone number you have no conversation with yet, use the create-conversation endpoint (POST /v1/inbox/conversations) instead.  WhatsApp rich interactive messages (list, CTA URL, Flow, location request) are available via the `interactive` field. Tap events are delivered through the `message.received` webhook with WhatsApp-specific `metadata` fields (`interactiveType`, `interactiveId`, `flowResponseJson`, `flowResponseData`).  **Idempotency:** send an `Idempotency-Key` header to make retries safe (e.g. after a client-side timeout where delivery is unknown): same key + same body replays the original response (with `Idempotent-Replayed: true`) instead of sending the message a second time; same key + different body returns 422; a key still in flight returns 409. Works for JSON and multipart (file upload) requests alike. Keys are retained for 24 hours.  Only successful (2xx) responses are stored for replay: if the request throws or returns a non-2xx status, the key is released so the same key can be retried once the problem is fixed. The header therefore protects the \"request succeeded but the response was lost\" case. For an ambiguous failure (a 5xx or a network timeout), reconcile before retrying: a failure after the platform already accepted the message also releases the key, and a blind retry could send it twice. List the conversation's messages first, and treat an empty result as inconclusive rather than as proof nothing was sent, since a send that failed while being recorded leaves no trace on our side.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | Opaque conversation identifier, accepted verbatim from the list endpoint or from the conversationId on inbox webhooks. Format not to be assumed.
$send_inbox_message_request = {"accountId":"6a7adc04d0fe733d1a1bed76","message":"Reply yes to continue.","attachmentUrl":"https://cdn.example.com/property.jpg","attachmentType":"image","buttons":[{"type":"postback","title":true,"payload":"btn_0"},{"type":"postback","title":false,"payload":"btn_1"}]}; // \Zernio\Model\SendInboxMessageRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409.

try {
    $result = $apiInstance->sendInboxMessage($conversation_id, $send_inbox_message_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendInboxMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| Opaque conversation identifier, accepted verbatim from the list endpoint or from the conversationId on inbox webhooks. Format not to be assumed. | |
| **send_inbox_message_request** | [**\Zernio\Model\SendInboxMessageRequest**](../Model/SendInboxMessageRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. | [optional] |

### Return type

[**\Zernio\Model\SendInboxMessage200Response**](../Model/SendInboxMessage200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendTypingIndicator()`

```php
sendTypingIndicator($conversation_id, $send_typing_indicator_request): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Send typing indicator

Show a typing indicator in a conversation. Platform support: - Facebook Messenger: Shows \"Page is typing...\" for 20 seconds - Instagram: Shows \"typing...\" to the recipient (works for both Instagram Login and Facebook Login accounts). The recipient must be signed in to Instagram to see it. - Telegram: Shows \"Bot is typing...\" for 5 seconds - WhatsApp: Shows \"typing...\" for up to 25 seconds. Requires a recent inbound message in the conversation (Meta references the inbound message id) and also marks that message as read as a side-effect. - All others: Returns 200 but no-op (platform doesn't support it)  Typing indicators are best-effort. The endpoint always returns 200 even if the platform call fails; `success` reports whether a typing indicator was actually sent to the platform (`false` on unsupported platforms or when the platform call failed).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID
$send_typing_indicator_request = new \Zernio\Model\SendTypingIndicatorRequest(); // \Zernio\Model\SendTypingIndicatorRequest

try {
    $result = $apiInstance->sendTypingIndicator($conversation_id, $send_typing_indicator_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendTypingIndicator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID | |
| **send_typing_indicator_request** | [**\Zernio\Model\SendTypingIndicatorRequest**](../Model/SendTypingIndicatorRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setConversationThreadControl()`

```php
setConversationThreadControl($conversation_id, $set_conversation_thread_control_request): \Zernio\Model\SetConversationThreadControl200Response
```

Hand a conversation to or from Meta Business Agent

WhatsApp only, on numbers with Meta Business Agent enabled. Wraps Meta's thread control: - `release`: hand the conversation back to the agent so it resumes answering. You must currently hold control (sending any message takes it implicitly). - `take`: take control before sending anything, so the agent stops replying while an operator reads the thread. Meta accepts this only from the business configured as the number's escalation partner; other apps take control by sending a message. - `pass`: transfer control to the number's configured escalation partner, or to the agent with `target: ai_agent`.  The conversation's `threadControl` follows the result; a `conversation.control_changed` webhook fires when Meta later reports the change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID
$set_conversation_thread_control_request = new \Zernio\Model\SetConversationThreadControlRequest(); // \Zernio\Model\SetConversationThreadControlRequest

try {
    $result = $apiInstance->setConversationThreadControl($conversation_id, $set_conversation_thread_control_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->setConversationThreadControl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID | |
| **set_conversation_thread_control_request** | [**\Zernio\Model\SetConversationThreadControlRequest**](../Model/SetConversationThreadControlRequest.md)|  | |

### Return type

[**\Zernio\Model\SetConversationThreadControl200Response**](../Model/SetConversationThreadControl200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInboxConversation()`

```php
updateInboxConversation($conversation_id, $update_inbox_conversation_request): \Zernio\Model\UpdateInboxConversation200Response
```

Update conversation status

Archive or activate a conversation. Requires accountId in request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | Opaque conversation identifier, accepted verbatim from the list endpoint or from the conversationId on inbox webhooks. Format not to be assumed.
$update_inbox_conversation_request = new \Zernio\Model\UpdateInboxConversationRequest(); // \Zernio\Model\UpdateInboxConversationRequest

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
| **conversation_id** | **string**| Opaque conversation identifier, accepted verbatim from the list endpoint or from the conversationId on inbox webhooks. Format not to be assumed. | |
| **update_inbox_conversation_request** | [**\Zernio\Model\UpdateInboxConversationRequest**](../Model/UpdateInboxConversationRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateInboxConversation200Response**](../Model/UpdateInboxConversation200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadMediaDirect()`

```php
uploadMediaDirect($file, $content_type): \Zernio\Model\UploadMediaDirect200Response
```

Upload media file

Upload a media file using API key authentication and get back a publicly accessible URL. The URL can be used as attachmentUrl when sending inbox messages.  Files are stored in temporary storage and auto-delete after 7 days. Maximum file size is 25MB.  Unlike /v1/media/upload (which uses upload tokens for end-user flows), this endpoint takes your API key in the Authorization header, for programmatic use.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject | The file to upload (max 25MB)
$content_type = 'content_type_example'; // string | Override MIME type (e.g. \\\"image/jpeg\\\"). Auto-detected from file if not provided.

try {
    $result = $apiInstance->uploadMediaDirect($file, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->uploadMediaDirect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| The file to upload (max 25MB) | |
| **content_type** | **string**| Override MIME type (e.g. \\\&quot;image/jpeg\\\&quot;). Auto-detected from file if not provided. | [optional] |

### Return type

[**\Zernio\Model\UploadMediaDirect200Response**](../Model/UploadMediaDirect200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
