# Zernio\EmailApi

Read, send and organize mail in connected Google Workspace and Microsoft 365 mailboxes. Connect with &#x60;scopes&#x3D;email&#x60;.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelScheduledEmail()**](EmailApi.md#cancelScheduledEmail) | **DELETE** /v1/email/messages/scheduled/{scheduleId} | Cancel a scheduled email |
| [**createEmailDraft()**](EmailApi.md#createEmailDraft) | **POST** /v1/email/drafts | Create a draft |
| [**createEmailLabel()**](EmailApi.md#createEmailLabel) | **POST** /v1/email/labels | Create a label |
| [**createEmailSignature()**](EmailApi.md#createEmailSignature) | **POST** /v1/email/signatures | Create a signature |
| [**declareEmailSendAs()**](EmailApi.md#declareEmailSendAs) | **POST** /v1/email/send-as | Declare a send-as address |
| [**deleteEmailDraft()**](EmailApi.md#deleteEmailDraft) | **DELETE** /v1/email/drafts/{draftId} | Delete a draft |
| [**deleteEmailLabel()**](EmailApi.md#deleteEmailLabel) | **DELETE** /v1/email/labels/{labelId} | Delete a label |
| [**deleteEmailSendAs()**](EmailApi.md#deleteEmailSendAs) | **DELETE** /v1/email/send-as/{email} | Remove a declared send-as address |
| [**deleteEmailSignature()**](EmailApi.md#deleteEmailSignature) | **DELETE** /v1/email/signatures/{signatureId} | Delete a signature |
| [**downloadEmailAttachment()**](EmailApi.md#downloadEmailAttachment) | **GET** /v1/email/attachments/{attachmentId} | Download an attachment |
| [**forwardEmailMessage()**](EmailApi.md#forwardEmailMessage) | **POST** /v1/email/messages/{messageId}/forward | Forward a message |
| [**getEmailDraft()**](EmailApi.md#getEmailDraft) | **GET** /v1/email/drafts/{draftId} | Get a draft |
| [**getEmailMessage()**](EmailApi.md#getEmailMessage) | **GET** /v1/email/messages/{messageId} | Get an email message |
| [**getEmailSignature()**](EmailApi.md#getEmailSignature) | **GET** /v1/email/signatures/{signatureId} | Get a signature |
| [**getEmailThread()**](EmailApi.md#getEmailThread) | **GET** /v1/email/threads/{threadId} | Get an email thread with its messages |
| [**getScheduledEmail()**](EmailApi.md#getScheduledEmail) | **GET** /v1/email/messages/scheduled/{scheduleId} | Get a scheduled email |
| [**importEmailSignatures()**](EmailApi.md#importEmailSignatures) | **POST** /v1/email/signatures/import | Import Gmail signatures |
| [**listEmailDrafts()**](EmailApi.md#listEmailDrafts) | **GET** /v1/email/drafts | List drafts |
| [**listEmailFolders()**](EmailApi.md#listEmailFolders) | **GET** /v1/email/folders | List mailbox folders |
| [**listEmailLabels()**](EmailApi.md#listEmailLabels) | **GET** /v1/email/labels | List labels |
| [**listEmailMessages()**](EmailApi.md#listEmailMessages) | **GET** /v1/email/messages | List email messages |
| [**listEmailSendAs()**](EmailApi.md#listEmailSendAs) | **GET** /v1/email/send-as | List send-as addresses |
| [**listEmailSignatures()**](EmailApi.md#listEmailSignatures) | **GET** /v1/email/signatures | List signatures |
| [**listEmailThreads()**](EmailApi.md#listEmailThreads) | **GET** /v1/email/threads | List email threads |
| [**listScheduledEmails()**](EmailApi.md#listScheduledEmails) | **GET** /v1/email/messages/scheduled | List scheduled emails |
| [**replyEmailMessage()**](EmailApi.md#replyEmailMessage) | **POST** /v1/email/messages/{messageId}/reply | Reply to a message |
| [**sendEmailDraft()**](EmailApi.md#sendEmailDraft) | **POST** /v1/email/drafts/{draftId}/send | Send a draft |
| [**sendEmailMessage()**](EmailApi.md#sendEmailMessage) | **POST** /v1/email/messages | Send an email |
| [**trashEmailMessage()**](EmailApi.md#trashEmailMessage) | **DELETE** /v1/email/messages/{messageId} | Move a message to trash |
| [**updateEmailDraft()**](EmailApi.md#updateEmailDraft) | **PATCH** /v1/email/drafts/{draftId} | Update a draft |
| [**updateEmailMessage()**](EmailApi.md#updateEmailMessage) | **PATCH** /v1/email/messages/{messageId} | Mark read or starred, label, or move a message |
| [**updateEmailSignature()**](EmailApi.md#updateEmailSignature) | **PATCH** /v1/email/signatures/{signatureId} | Update a signature |
| [**updateEmailThread()**](EmailApi.md#updateEmailThread) | **PATCH** /v1/email/threads/{threadId} | Update every message in a thread |


## `cancelScheduledEmail()`

```php
cancelScheduledEmail($schedule_id, $account_id): \Zernio\Model\SendEmailMessage202Response
```

Cancel a scheduled email

Cancels a send still waiting for its time and returns it with `status: cancelled`. One that is sending, sent or failed answers 409.

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
$schedule_id = 'schedule_id_example'; // string
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.

try {
    $result = $apiInstance->cancelScheduledEmail($schedule_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->cancelScheduledEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schedule_id** | **string**|  | |
| **account_id** | **string**| The connected Google or Microsoft account. | |

### Return type

[**\Zernio\Model\SendEmailMessage202Response**](../Model/SendEmailMessage202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmailDraft()`

```php
createEmailDraft($create_email_draft_request, $idempotency_key): \Zernio\Model\CreateEmailDraft201Response
```

Create a draft

Saves a draft in the user's mailbox, where they see it in Gmail or Outlook. Recipients and subject can come later. `inReplyTo` makes a reply draft in that thread and `forwardOf` a forward draft with the original's attachments; the `kind` is fixed for the life of the draft.  Send it with `POST /v1/email/drafts/{draftId}/send`. Edits the user makes in their mail client are what goes out. Store the draft `id`, and pass its `version` as `If-Match` so an update or send applies only to the version you saw.

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
$create_email_draft_request = new \Zernio\Model\CreateEmailDraftRequest(); // \Zernio\Model\CreateEmailDraftRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->createEmailDraft($create_email_draft_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->createEmailDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_email_draft_request** | [**\Zernio\Model\CreateEmailDraftRequest**](../Model/CreateEmailDraftRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

### Return type

[**\Zernio\Model\CreateEmailDraft201Response**](../Model/CreateEmailDraft201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmailLabel()`

```php
createEmailLabel($create_email_label_request): \Zernio\Model\CreateEmailLabel200Response
```

Create a label

Creates a Gmail label or an Outlook category. Safe to repeat: when the name already exists (case-insensitive) the existing label comes back with 200.

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
$create_email_label_request = new \Zernio\Model\CreateEmailLabelRequest(); // \Zernio\Model\CreateEmailLabelRequest

try {
    $result = $apiInstance->createEmailLabel($create_email_label_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->createEmailLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_email_label_request** | [**\Zernio\Model\CreateEmailLabelRequest**](../Model/CreateEmailLabelRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateEmailLabel200Response**](../Model/CreateEmailLabel200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmailSignature()`

```php
createEmailSignature($create_email_signature_request): \Zernio\Model\CreateEmailSignature201Response
```

Create a signature

Stores a signature Zernio appends on any provider. Without `accountId` it is workspace-wide. `defaultFor` makes it what `appendSignature` uses for those sending addresses. Up to 50 per workspace, 100 KB of html, no scripts.

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
$create_email_signature_request = new \Zernio\Model\CreateEmailSignatureRequest(); // \Zernio\Model\CreateEmailSignatureRequest

try {
    $result = $apiInstance->createEmailSignature($create_email_signature_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->createEmailSignature: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_email_signature_request** | [**\Zernio\Model\CreateEmailSignatureRequest**](../Model/CreateEmailSignatureRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateEmailSignature201Response**](../Model/CreateEmailSignature201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `declareEmailSendAs()`

```php
declareEmailSendAs($declare_email_send_as_request): \Zernio\Model\DeclareEmailSendAs200Response
```

Declare a send-as address

Adds an address the provider cannot list, such as an Outlook shared mailbox, so `from` accepts it. It starts `unverified` and becomes `accepted` after its first send. Gmail answers 400: add aliases in Gmail settings instead. An address already listed comes back with 200.

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
$declare_email_send_as_request = new \Zernio\Model\DeclareEmailSendAsRequest(); // \Zernio\Model\DeclareEmailSendAsRequest

try {
    $result = $apiInstance->declareEmailSendAs($declare_email_send_as_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->declareEmailSendAs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **declare_email_send_as_request** | [**\Zernio\Model\DeclareEmailSendAsRequest**](../Model/DeclareEmailSendAsRequest.md)|  | |

### Return type

[**\Zernio\Model\DeclareEmailSendAs200Response**](../Model/DeclareEmailSendAs200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailDraft()`

```php
deleteEmailDraft($draft_id, $account_id): \Zernio\Model\DeleteEmailDraft200Response
```

Delete a draft

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
$draft_id = 'draft_id_example'; // string
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.

try {
    $result = $apiInstance->deleteEmailDraft($draft_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->deleteEmailDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **draft_id** | **string**|  | |
| **account_id** | **string**| The connected Google or Microsoft account. | |

### Return type

[**\Zernio\Model\DeleteEmailDraft200Response**](../Model/DeleteEmailDraft200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailLabel()`

```php
deleteEmailLabel($label_id, $account_id): \Zernio\Model\DeleteEmailDraft200Response
```

Delete a label

Deletes a Gmail user label or an Outlook category, by id or name (URL-encode a slash). Gmail removes the label from every message. Outlook keeps a deleted category on messages that already carry it; 412 when the organization blocks the category list.

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
$label_id = 'label_id_example'; // string
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.

try {
    $result = $apiInstance->deleteEmailLabel($label_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->deleteEmailLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **label_id** | **string**|  | |
| **account_id** | **string**| The connected Google or Microsoft account. | |

### Return type

[**\Zernio\Model\DeleteEmailDraft200Response**](../Model/DeleteEmailDraft200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailSendAs()`

```php
deleteEmailSendAs($email, $account_id): \Zernio\Model\DeleteEmailSendAs200Response
```

Remove a declared send-as address

Removes an address declared with `POST /v1/email/send-as`. Addresses the provider lists cannot be removed here. URL-encode the `@`.

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
$email = 'email_example'; // string
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.

try {
    $result = $apiInstance->deleteEmailSendAs($email, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->deleteEmailSendAs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | |
| **account_id** | **string**| The connected Google or Microsoft account. | |

### Return type

[**\Zernio\Model\DeleteEmailSendAs200Response**](../Model/DeleteEmailSendAs200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailSignature()`

```php
deleteEmailSignature($signature_id): \Zernio\Model\DeleteEmailDraft200Response
```

Delete a signature

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
$signature_id = 'signature_id_example'; // string

try {
    $result = $apiInstance->deleteEmailSignature($signature_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->deleteEmailSignature: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signature_id** | **string**|  | |

### Return type

[**\Zernio\Model\DeleteEmailDraft200Response**](../Model/DeleteEmailDraft200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `forwardEmailMessage()`

```php
forwardEmailMessage($message_id, $forward_email_request, $idempotency_key): \Zernio\Model\SendEmailMessage201Response
```

Forward a message

Forwards the message with its attachments. Your `text` or `html` goes above the forwarded mail, and the subject defaults to \"Fwd: \" plus the original's. On Google the forward stays in the original thread; on Microsoft it goes through Outlook's own forward.  `includeAttachments: false` keeps only the original's inline images, and `excludeAttachmentIds` leaves out the ones you name. Everything together stays under 25 MB.  `trackOpens`, `trackLinks` and `trackReplies` work as on send. Same protection, caps and headers as sending. The response carries `forwardedFrom`, and `email.sent` fires with `source: forward`.

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
$forward_email_request = new \Zernio\Model\ForwardEmailRequest(); // \Zernio\Model\ForwardEmailRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->forwardEmailMessage($message_id, $forward_email_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->forwardEmailMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**|  | |
| **forward_email_request** | [**\Zernio\Model\ForwardEmailRequest**](../Model/ForwardEmailRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

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

## `getEmailDraft()`

```php
getEmailDraft($draft_id, $account_id): \Zernio\Model\CreateEmailDraft201Response
```

Get a draft

The draft as it stands in the mailbox now, with its bodies. A draft deleted in the mail client answers 404.

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
$draft_id = 'draft_id_example'; // string
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.

try {
    $result = $apiInstance->getEmailDraft($draft_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->getEmailDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **draft_id** | **string**|  | |
| **account_id** | **string**| The connected Google or Microsoft account. | |

### Return type

[**\Zernio\Model\CreateEmailDraft201Response**](../Model/CreateEmailDraft201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailMessage()`

```php
getEmailMessage($message_id, $account_id, $include_headers, $raw, $clean): \Zernio\Model\SendEmailMessage201Response
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
$clean = false; // bool | Add `cleanText`: the new text only, without quoted replies, forwarded history, signature or tracking pixels. Ready to hand to an LLM.

try {
    $result = $apiInstance->getEmailMessage($message_id, $account_id, $include_headers, $raw, $clean);
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
| **clean** | **bool**| Add &#x60;cleanText&#x60;: the new text only, without quoted replies, forwarded history, signature or tracking pixels. Ready to hand to an LLM. | [optional] [default to false] |

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

## `getEmailSignature()`

```php
getEmailSignature($signature_id): \Zernio\Model\CreateEmailSignature201Response
```

Get a signature

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
$signature_id = 'signature_id_example'; // string

try {
    $result = $apiInstance->getEmailSignature($signature_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->getEmailSignature: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signature_id** | **string**|  | |

### Return type

[**\Zernio\Model\CreateEmailSignature201Response**](../Model/CreateEmailSignature201Response.md)

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
getEmailThread($thread_id, $account_id, $clean): \Zernio\Model\GetEmailThread200Response
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
$clean = false; // bool | Add `cleanText` to every message: what each one added to the conversation, without the quoted history.

try {
    $result = $apiInstance->getEmailThread($thread_id, $account_id, $clean);
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
| **clean** | **bool**| Add &#x60;cleanText&#x60; to every message: what each one added to the conversation, without the quoted history. | [optional] [default to false] |

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

## `getScheduledEmail()`

```php
getScheduledEmail($schedule_id, $account_id): \Zernio\Model\SendEmailMessage202Response
```

Get a scheduled email

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
$schedule_id = 'schedule_id_example'; // string
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.

try {
    $result = $apiInstance->getScheduledEmail($schedule_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->getScheduledEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schedule_id** | **string**|  | |
| **account_id** | **string**| The connected Google or Microsoft account. | |

### Return type

[**\Zernio\Model\SendEmailMessage202Response**](../Model/SendEmailMessage202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importEmailSignatures()`

```php
importEmailSignatures($account_id): \Zernio\Model\ListEmailSignatures200Response
```

Import Gmail signatures

Copies each Gmail send-as signature into a Zernio signature on that account, the default for its address. Repeating it refreshes the copies. Outlook answers 400: Microsoft Graph does not expose signatures.

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
    $result = $apiInstance->importEmailSignatures($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->importEmailSignatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected Google or Microsoft account. | |

### Return type

[**\Zernio\Model\ListEmailSignatures200Response**](../Model/ListEmailSignatures200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmailDrafts()`

```php
listEmailDrafts($account_id, $limit, $cursor): \Zernio\Model\ListEmailDrafts200Response
```

List drafts

The mailbox's drafts, newest first, including drafts the user wrote in Gmail or Outlook. Drafts in the trash are left out. Rows carry no bodies on Google; get a draft to read them.

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
$limit = 25; // int
$cursor = 'cursor_example'; // string

try {
    $result = $apiInstance->listEmailDrafts($account_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->listEmailDrafts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected Google or Microsoft account. | |
| **limit** | **int**|  | [optional] [default to 25] |
| **cursor** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\ListEmailDrafts200Response**](../Model/ListEmailDrafts200Response.md)

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

## `listEmailLabels()`

```php
listEmailLabels($account_id): \Zernio\Model\ListEmailLabels200Response
```

List labels

Gmail labels, system and user, or the Outlook category list. If an organization blocks reading the Outlook list, it comes back empty and categories still apply to messages by name.

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
    $result = $apiInstance->listEmailLabels($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->listEmailLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected Google or Microsoft account. | |

### Return type

[**\Zernio\Model\ListEmailLabels200Response**](../Model/ListEmailLabels200Response.md)

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

Same filters and envelope as `GET /v1/email/threads`, one row per message. Bodies are omitted; fetch a message to read `text` and `html`.  ### On Google  - List rows also omit `attachments` (Gmail's metadata pages carry headers only); `hasAttachment=true` still filters server-side. - `sortOrder=asc` reverses the fetched page. - `archive` means mail without the inbox, trash or spam labels.

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

## `listEmailSendAs()`

```php
listEmailSendAs($account_id): \Zernio\Model\ListEmailSendAs200Response
```

List send-as addresses

The addresses a mailbox can send from, for `from`, each with the signature `appendSignature` would add. Gmail lists every alias itself. Outlook lists the mailbox address and its aliases, plus any address declared with `POST /v1/email/send-as`.

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
    $result = $apiInstance->listEmailSendAs($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->listEmailSendAs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected Google or Microsoft account. | |

### Return type

[**\Zernio\Model\ListEmailSendAs200Response**](../Model/ListEmailSendAs200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmailSignatures()`

```php
listEmailSignatures($account_id): \Zernio\Model\ListEmailSignatures200Response
```

List signatures

Zernio-stored signatures: workspace-wide ones plus those of the accounts you can see. With `accountId`, only workspace-wide ones and that account's.

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
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->listEmailSignatures($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->listEmailSignatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\ListEmailSignatures200Response**](../Model/ListEmailSignatures200Response.md)

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

## `listScheduledEmails()`

```php
listScheduledEmails($account_id, $status, $cursor, $limit): \Zernio\Model\ListScheduledEmails200Response
```

List scheduled emails

Sends made with `scheduledFor` on this mailbox, in send order. Sent, failed and cancelled ones stay listed; filter with `status`.

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
$status = 'status_example'; // string
$cursor = 'cursor_example'; // string | `pagination.nextCursor` of the previous page.
$limit = 50; // int

try {
    $result = $apiInstance->listScheduledEmails($account_id, $status, $cursor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->listScheduledEmails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected Google or Microsoft account. | |
| **status** | **string**|  | [optional] |
| **cursor** | **string**| &#x60;pagination.nextCursor&#x60; of the previous page. | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |

### Return type

[**\Zernio\Model\ListScheduledEmails200Response**](../Model/ListScheduledEmails200Response.md)

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
replyEmailMessage($message_id, $reply_email_message_request, $idempotency_key): \Zernio\Model\SendEmailMessage201Response
```

Reply to a message

Replies inside the provider's thread: the provider builds the quoted original and threading headers, your `html` or `text` goes above the quote. `to`, `cc`, `bcc`, `replyTo`, `subject`, `headers` and `attachments` are honoured.  `scheduledFor` schedules the reply (202) and `trackOpens`, `trackLinks` and `trackReplies` track it, as on send; `holdAsDraft` holds it as a reply draft in the thread until then. Same protection, caps and headers as sending.

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
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->replyEmailMessage($message_id, $reply_email_message_request, $idempotency_key);
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
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

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

## `sendEmailDraft()`

```php
sendEmailDraft($draft_id, $send_email_draft_request, $if_match, $idempotency_key): \Zernio\Model\SendEmailMessage201Response
```

Send a draft

Sends the draft as it stands in the mailbox now, edits made in Gmail or Outlook included, and returns the sent message with `draftId`. The draft needs at least one recipient. A draft the user deleted or already sent answers 404 `draft_not_found`.  With `If-Match` it goes out only if it is still the version the approver saw (412 `draft_conflict` otherwise). If the user removed the open pixel or rewrote links, tracking is put back before it is sent. Fires `email.sent` with `source: draft`.  Tracking set when the draft was created applies, and its `metadata` comes back on the sent message. Same protection, caps and headers as sending.

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
$draft_id = 'draft_id_example'; // string
$send_email_draft_request = new \Zernio\Model\SendEmailDraftRequest(); // \Zernio\Model\SendEmailDraftRequest
$if_match = 'if_match_example'; // string | The draft `version` (also its `ETag`). The request applies only if the draft is still that version; otherwise 412 `draft_conflict` with the current draft in `details.draft`.
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->sendEmailDraft($draft_id, $send_email_draft_request, $if_match, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->sendEmailDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **draft_id** | **string**|  | |
| **send_email_draft_request** | [**\Zernio\Model\SendEmailDraftRequest**](../Model/SendEmailDraftRequest.md)|  | |
| **if_match** | **string**| The draft &#x60;version&#x60; (also its &#x60;ETag&#x60;). The request applies only if the draft is still that version; otherwise 412 &#x60;draft_conflict&#x60; with the current draft in &#x60;details.draft&#x60;. | [optional] |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

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
sendEmailMessage($send_email_request, $idempotency_key): \Zernio\Model\SendEmailMessage201Response
```

Send an email

Sends from the connected mailbox and returns the stored sent copy.  The message is mirrored into the inbox (`message.sent` fires once) and counted against the mailbox's daily cap. The cap is reported in the `X-Zernio-Send-Limit`, `X-Zernio-Send-Remaining` and `X-Zernio-Send-Reset` response headers.  ### Sending limits  These mailboxes are for one-to-one mail, not bulk sends. Protection on every mailbox:  - Daily cap: Microsoft 1,000; Google Workspace 500; Gmail consumer 200. Reaching it answers 429 `email_send_cap_reached` with `details.cap`. - The same body reaching more than 50 distinct recipients within an hour pauses the mailbox with an escalating cooldown (429 `rate_limited`, `account.rate_limited` webhook).  ### Scheduling  With `scheduledFor` the request answers 202 with a `ScheduledEmail` instead of sending. The account and payment method are checked now; the caps, cooldowns and the send itself run at `scheduledFor`. A send that fails then fires `email.send_failed`. List, read and cancel scheduled sends under `/v1/email/messages/scheduled`.  ### Tracking  - `trackOpens` adds a 1x1 image to the html and fires `email.opened`. - `trackLinks` rewrites every http(s) link in the html through a Zernio redirect and fires `email.link_clicked`. - `trackReplies` fires `email.thread_replied` when someone else writes in the thread.  Tracking costs nothing extra. Opens are approximate: image proxies prefetch and image blocking hides them.  ### Other errors  - 402: Gmail sends need a payment method on the workspace. Reading, calendar and files do not. - 400: `holdAsDraft` without `scheduledFor`; `trackOpens` or `trackLinks` without `html`; `scheduledFor` outside 1 minute to 30 days.

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
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->sendEmailMessage($send_email_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->sendEmailMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_email_request** | [**\Zernio\Model\SendEmailRequest**](../Model/SendEmailRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

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

## `updateEmailDraft()`

```php
updateEmailDraft($draft_id, $update_email_draft_request, $if_match): \Zernio\Model\CreateEmailDraft201Response
```

Update a draft

Changes the fields you send and keeps the rest. A reply draft stays in its thread, and a new body on a reply or forward draft goes above the quoted original. With `If-Match`, a draft someone edited since answers 412 `draft_conflict` with the current draft.

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
$draft_id = 'draft_id_example'; // string
$update_email_draft_request = new \Zernio\Model\UpdateEmailDraftRequest(); // \Zernio\Model\UpdateEmailDraftRequest
$if_match = 'if_match_example'; // string | The draft `version` (also its `ETag`). The request applies only if the draft is still that version; otherwise 412 `draft_conflict` with the current draft in `details.draft`.

try {
    $result = $apiInstance->updateEmailDraft($draft_id, $update_email_draft_request, $if_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->updateEmailDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **draft_id** | **string**|  | |
| **update_email_draft_request** | [**\Zernio\Model\UpdateEmailDraftRequest**](../Model/UpdateEmailDraftRequest.md)|  | |
| **if_match** | **string**| The draft &#x60;version&#x60; (also its &#x60;ETag&#x60;). The request applies only if the draft is still that version; otherwise 412 &#x60;draft_conflict&#x60; with the current draft in &#x60;details.draft&#x60;. | [optional] |

### Return type

[**\Zernio\Model\CreateEmailDraft201Response**](../Model/CreateEmailDraft201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailMessage()`

```php
updateEmailMessage($message_id, $email_message_patch): \Zernio\Model\SendEmailMessage201Response
```

Mark read or starred, label, or move a message

`addLabels` and `removeLabels` tag the message without moving it. `folder` moves it: on Google a move files the mail in one place, so it drops the inbox, trash, spam and user labels it held; `archive` removes the inbox label.

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

## `updateEmailSignature()`

```php
updateEmailSignature($signature_id, $update_email_signature_request): \Zernio\Model\CreateEmailSignature201Response
```

Update a signature

Changes the name, html, text or `defaultFor`. Taking an address in `defaultFor` removes it from the other signatures of the same scope.

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
$signature_id = 'signature_id_example'; // string
$update_email_signature_request = new \Zernio\Model\UpdateEmailSignatureRequest(); // \Zernio\Model\UpdateEmailSignatureRequest

try {
    $result = $apiInstance->updateEmailSignature($signature_id, $update_email_signature_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->updateEmailSignature: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signature_id** | **string**|  | |
| **update_email_signature_request** | [**\Zernio\Model\UpdateEmailSignatureRequest**](../Model/UpdateEmailSignatureRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateEmailSignature201Response**](../Model/CreateEmailSignature201Response.md)

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

Applies `unread`, `starred`, `addLabels`, `removeLabels` or a `folder` move to each message of the thread.

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
