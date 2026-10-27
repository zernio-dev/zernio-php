# Zernio\EmailApi

Read, send and organize mail in connected Google Workspace and Microsoft 365 mailboxes. Connect with &#x60;scopes&#x3D;email&#x60;.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**downloadEmailAttachment()**](EmailApi.md#downloadEmailAttachment) | **GET** /v1/email/attachments/{attachmentId} | Download an attachment |
| [**getEmailMessage()**](EmailApi.md#getEmailMessage) | **GET** /v1/email/messages/{messageId} | Get an email message |
| [**getEmailThread()**](EmailApi.md#getEmailThread) | **GET** /v1/email/threads/{threadId} | Get an email thread with its messages |
| [**listEmailFolders()**](EmailApi.md#listEmailFolders) | **GET** /v1/email/folders | List mailbox folders |
| [**listEmailMessages()**](EmailApi.md#listEmailMessages) | **GET** /v1/email/messages | List email messages |
| [**listEmailThreads()**](EmailApi.md#listEmailThreads) | **GET** /v1/email/threads | List email threads |
| [**replyEmailMessage()**](EmailApi.md#replyEmailMessage) | **POST** /v1/email/messages/{messageId}/reply | Reply to a message |
| [**sendEmailMessage()**](EmailApi.md#sendEmailMessage) | **POST** /v1/email/messages | Send an email |
| [**trashEmailMessage()**](EmailApi.md#trashEmailMessage) | **DELETE** /v1/email/messages/{messageId} | Move a message to trash |
| [**updateEmailMessage()**](EmailApi.md#updateEmailMessage) | **PATCH** /v1/email/messages/{messageId} | Mark read or starred, or move a message |
| [**updateEmailThread()**](EmailApi.md#updateEmailThread) | **PATCH** /v1/email/threads/{threadId} | Update every message in a thread |


## `downloadEmailAttachment()`

```php
downloadEmailAttachment($attachment_id, $account_id, $message_id): \SplFileObject
```

Download an attachment

Streams the attachment bytes with its `Content-Type` and a `Content-Disposition` carrying the filename.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.
$message_id = 'message_id_example'; // string

try {
    $result = $apiInstance->downloadEmailAttachment($attachment_id, $account_id, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->downloadEmailAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachment_id** | **string**|  | |
| **account_id** | **string**| The connected Google or Microsoft account. | |
| **message_id** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailMessage()`

```php
getEmailMessage($message_id, $account_id, $include_headers, $raw): \Zernio\Model\SendEmailMessage201Response
```

Get an email message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.
$include_headers = false; // bool | Include the raw internet headers under `headers`.
$raw = false; // bool | Include the MIME source under `raw`.

try {
    $result = $apiInstance->getEmailMessage($message_id, $account_id, $include_headers, $raw);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->getEmailMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**|  | |
| **account_id** | **string**| The connected Google or Microsoft account. | |
| **include_headers** | **bool**| Include the raw internet headers under &#x60;headers&#x60;. | [optional] [default to false] |
| **raw** | **bool**| Include the MIME source under &#x60;raw&#x60;. | [optional] [default to false] |

### Return type

[**\Zernio\Model\SendEmailMessage201Response**](../Model/SendEmailMessage201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailThread()`

```php
getEmailThread($thread_id, $account_id): \Zernio\Model\GetEmailThread200Response
```

Get an email thread with its messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$thread_id = 'thread_id_example'; // string
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.

try {
    $result = $apiInstance->getEmailThread($thread_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->getEmailThread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **thread_id** | **string**|  | |
| **account_id** | **string**| The connected Google or Microsoft account. | |

### Return type

[**\Zernio\Model\GetEmailThread200Response**](../Model/GetEmailThread200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmailFolders()`

```php
listEmailFolders($account_id): \Zernio\Model\ListEmailFolders200Response
```

List mailbox folders

On Google, folders are Gmail labels (system labels carry `wellKnown`; `unreadCount` and `totalCount` are present only where Gmail reports them). There is no archive folder on Google; archived mail is listed with `folder=archive`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.

try {
    $result = $apiInstance->listEmailFolders($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->listEmailFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected Google or Microsoft account. | |

### Return type

[**\Zernio\Model\ListEmailFolders200Response**](../Model/ListEmailFolders200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmailMessages()`

```php
listEmailMessages($account_id, $folder, $unread, $starred, $has_attachment, $subject, $from, $to, $cc, $bcc, $any_email, $after, $before, $search_query_native, $sort_order, $cursor, $limit): \Zernio\Model\ListEmailMessages200Response
```

List email messages

Same filters and envelope as `GET /v1/email/threads`, one row per message. Bodies are omitted; fetch a message to read `text` and `html`. On Google, list rows also omit `attachments` (Gmail's metadata pages carry headers only; `hasAttachment=true` still filters server-side), `sortOrder=asc` reverses the fetched page and `archive` means mail without the inbox, trash or spam labels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.
$folder = 'folder_example'; // string
$unread = True; // bool
$starred = True; // bool
$has_attachment = True; // bool
$subject = 'subject_example'; // string
$from = 'from_example'; // string
$to = 'to_example'; // string
$cc = 'cc_example'; // string
$bcc = 'bcc_example'; // string
$any_email = 'any_email_example'; // string
$after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$search_query_native = 'search_query_native_example'; // string
$sort_order = 'desc'; // string
$cursor = 'cursor_example'; // string
$limit = 50; // int

try {
    $result = $apiInstance->listEmailMessages($account_id, $folder, $unread, $starred, $has_attachment, $subject, $from, $to, $cc, $bcc, $any_email, $after, $before, $search_query_native, $sort_order, $cursor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->listEmailMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected Google or Microsoft account. | |
| **folder** | **string**|  | [optional] |
| **unread** | **bool**|  | [optional] |
| **starred** | **bool**|  | [optional] |
| **has_attachment** | **bool**|  | [optional] |
| **subject** | **string**|  | [optional] |
| **from** | **string**|  | [optional] |
| **to** | **string**|  | [optional] |
| **cc** | **string**|  | [optional] |
| **bcc** | **string**|  | [optional] |
| **any_email** | **string**|  | [optional] |
| **after** | **\DateTime**|  | [optional] |
| **before** | **\DateTime**|  | [optional] |
| **search_query_native** | **string**|  | [optional] |
| **sort_order** | **string**|  | [optional] [default to &#39;desc&#39;] |
| **cursor** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |

### Return type

[**\Zernio\Model\ListEmailMessages200Response**](../Model/ListEmailMessages200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmailThreads()`

```php
listEmailThreads($account_id, $folder, $unread, $starred, $has_attachment, $subject, $from, $to, $cc, $bcc, $any_email, $after, $before, $search_query_native, $sort_order, $cursor, $limit): \Zernio\Model\ListEmailThreads200Response
```

List email threads

Threads of a connected Google or Microsoft mailbox, newest first. Every filter that the provider cannot apply server-side is applied to the fetched page instead and named in `meta.filteredClientSide`, so a filtered page can hold fewer than `limit` items while `pagination.hasMore` stays true.  On Google, folders are Gmail labels: `folder` takes a well-known name or a label id, `archive` means mail carrying none of the inbox, trash or spam labels, and `sortOrder=asc` reverses the fetched page (Gmail lists newest first only).  The account must have been connected with `scopes=email` (412 `account_scope_missing` otherwise).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.
$folder = 'folder_example'; // string | Well-known folder (`inbox`, `sent`, `drafts`, `trash`, `spam`, `archive`) or a provider folder id from `GET /v1/email/folders`. Default inbox.
$unread = True; // bool
$starred = True; // bool
$has_attachment = True; // bool
$subject = 'subject_example'; // string | Substring match on the subject.
$from = 'from_example'; // string | Sender address.
$to = 'to_example'; // string | A recipient address.
$cc = 'cc_example'; // string
$bcc = 'bcc_example'; // string | Applied client-side on Microsoft.
$any_email = 'any_email_example'; // string | Matches from, to, cc or bcc. Applied client-side on Microsoft.
$after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$search_query_native = 'search_query_native_example'; // string | The provider's own search syntax (Gmail search operators, Microsoft KQL). On Microsoft it cannot be combined with other filters or server-side ordering; those are applied to the page.
$sort_order = 'desc'; // string
$cursor = 'cursor_example'; // string
$limit = 50; // int

try {
    $result = $apiInstance->listEmailThreads($account_id, $folder, $unread, $starred, $has_attachment, $subject, $from, $to, $cc, $bcc, $any_email, $after, $before, $search_query_native, $sort_order, $cursor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->listEmailThreads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected Google or Microsoft account. | |
| **folder** | **string**| Well-known folder (&#x60;inbox&#x60;, &#x60;sent&#x60;, &#x60;drafts&#x60;, &#x60;trash&#x60;, &#x60;spam&#x60;, &#x60;archive&#x60;) or a provider folder id from &#x60;GET /v1/email/folders&#x60;. Default inbox. | [optional] |
| **unread** | **bool**|  | [optional] |
| **starred** | **bool**|  | [optional] |
| **has_attachment** | **bool**|  | [optional] |
| **subject** | **string**| Substring match on the subject. | [optional] |
| **from** | **string**| Sender address. | [optional] |
| **to** | **string**| A recipient address. | [optional] |
| **cc** | **string**|  | [optional] |
| **bcc** | **string**| Applied client-side on Microsoft. | [optional] |
| **any_email** | **string**| Matches from, to, cc or bcc. Applied client-side on Microsoft. | [optional] |
| **after** | **\DateTime**|  | [optional] |
| **before** | **\DateTime**|  | [optional] |
| **search_query_native** | **string**| The provider&#39;s own search syntax (Gmail search operators, Microsoft KQL). On Microsoft it cannot be combined with other filters or server-side ordering; those are applied to the page. | [optional] |
| **sort_order** | **string**|  | [optional] [default to &#39;desc&#39;] |
| **cursor** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |

### Return type

[**\Zernio\Model\ListEmailThreads200Response**](../Model/ListEmailThreads200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replyEmailMessage()`

```php
replyEmailMessage($message_id, $reply_email_message_request): \Zernio\Model\SendEmailMessage201Response
```

Reply to a message

Replies inside the provider's thread: the provider builds the quoted original and threading headers, your `html` or `text` goes above the quote. `to`, `cc`, `bcc`, `replyTo`, `subject`, `headers` and `attachments` are honoured; `scheduledFor` and `holdAsDraft` are rejected like on send. Same protection, caps and headers as sending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string
$reply_email_message_request = new \Zernio\Model\ReplyEmailMessageRequest(); // \Zernio\Model\ReplyEmailMessageRequest

try {
    $result = $apiInstance->replyEmailMessage($message_id, $reply_email_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->replyEmailMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**|  | |
| **reply_email_message_request** | [**\Zernio\Model\ReplyEmailMessageRequest**](../Model/ReplyEmailMessageRequest.md)|  | |

### Return type

[**\Zernio\Model\SendEmailMessage201Response**](../Model/SendEmailMessage201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendEmailMessage()`

```php
sendEmailMessage($send_email_request): \Zernio\Model\SendEmailMessage201Response
```

Send an email

Sends from the connected mailbox and returns the stored sent copy. The message is mirrored into the inbox (`message.sent` fires once) and counted against the mailbox's daily cap, reported in the `X-Zernio-Send-Limit`, `X-Zernio-Send-Remaining` and `X-Zernio-Send-Reset` response headers.  Protection on every mailbox: a daily cap (Microsoft 1,000; Google Workspace 500; Gmail consumer 200) that answers 429 `email_send_cap_reached` with `details.cap`; the same body reaching more than 50 distinct recipients within an hour pauses the mailbox with an escalating cooldown (429 `rate_limited`, `account.rate_limited` webhook). These mailboxes are for one-to-one mail, not bulk sends. Gmail sends need a payment method on the workspace (402). Reading, calendar and files do not.  `scheduledFor` and `holdAsDraft` are reserved and currently rejected with 400.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_email_request = new \Zernio\Model\SendEmailRequest(); // \Zernio\Model\SendEmailRequest

try {
    $result = $apiInstance->sendEmailMessage($send_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->sendEmailMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_email_request** | [**\Zernio\Model\SendEmailRequest**](../Model/SendEmailRequest.md)|  | |

### Return type

[**\Zernio\Model\SendEmailMessage201Response**](../Model/SendEmailMessage201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trashEmailMessage()`

```php
trashEmailMessage($message_id, $account_id): \Zernio\Model\TrashEmailMessage200Response
```

Move a message to trash

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.

try {
    $result = $apiInstance->trashEmailMessage($message_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->trashEmailMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**|  | |
| **account_id** | **string**| The connected Google or Microsoft account. | |

### Return type

[**\Zernio\Model\TrashEmailMessage200Response**](../Model/TrashEmailMessage200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailMessage()`

```php
updateEmailMessage($message_id, $email_message_patch): \Zernio\Model\SendEmailMessage201Response
```

Mark read or starred, or move a message

`folder` moves the message. On Google a move swaps the inbox, trash and spam labels and keeps every other label; `archive` removes the inbox label.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string
$email_message_patch = new \Zernio\Model\EmailMessagePatch(); // \Zernio\Model\EmailMessagePatch

try {
    $result = $apiInstance->updateEmailMessage($message_id, $email_message_patch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->updateEmailMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**|  | |
| **email_message_patch** | [**\Zernio\Model\EmailMessagePatch**](../Model/EmailMessagePatch.md)|  | |

### Return type

[**\Zernio\Model\SendEmailMessage201Response**](../Model/SendEmailMessage201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailThread()`

```php
updateEmailThread($thread_id, $email_message_patch): \Zernio\Model\UpdateEmailThread200Response
```

Update every message in a thread

Applies `unread`, `starred` or a `folder` move to each message of the thread.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$thread_id = 'thread_id_example'; // string
$email_message_patch = new \Zernio\Model\EmailMessagePatch(); // \Zernio\Model\EmailMessagePatch

try {
    $result = $apiInstance->updateEmailThread($thread_id, $email_message_patch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->updateEmailThread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **thread_id** | **string**|  | |
| **email_message_patch** | [**\Zernio\Model\EmailMessagePatch**](../Model/EmailMessagePatch.md)|  | |

### Return type

[**\Zernio\Model\UpdateEmailThread200Response**](../Model/UpdateEmailThread200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
