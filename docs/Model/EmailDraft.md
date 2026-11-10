# # EmailDraft

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The draft id: the Gmail draft id, or the Outlook message id. | [optional]
**thread_id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**provider** | **string** |  | [optional]
**folders** | **string[]** |  | [optional]
**from** | [**\Zernio\Model\EmailAddress**](EmailAddress.md) |  | [optional]
**sender** | [**\Zernio\Model\EmailAddress**](EmailAddress.md) |  | [optional]
**to** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**cc** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**bcc** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**reply_to** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**subject** | **string** |  | [optional]
**snippet** | **string** |  | [optional]
**text** | **string** |  | [optional]
**html** | **string** |  | [optional]
**attachments** | [**\Zernio\Model\EmailAttachment[]**](EmailAttachment.md) |  | [optional]
**headers** | **array<string,string>** | Only with &#x60;includeHeaders&#x3D;true&#x60;. | [optional]
**raw** | **string** | MIME source, only with &#x60;raw&#x3D;true&#x60;. | [optional]
**date** | **\DateTime** |  | [optional]
**unread** | **bool** |  | [optional]
**starred** | **bool** |  | [optional]
**labels** | **string[]** | Gmail: the ids of the user labels on the message (names come from &#x60;GET /v1/email/labels&#x60;). Outlook: its category names. | [optional]
**metadata** | **array<string,string>** |  | [optional]
**tracking_id** | **string** | Set when the draft was created with tracking. | [optional]
**clean** | [**\Zernio\Model\EmailClean**](EmailClean.md) |  | [optional]
**draft_id** | **string** | On a mail sent from a draft (&#x60;POST /v1/email/drafts/{draftId}/send&#x60;): the draft it was. The sent mail has a new id. | [optional]
**forwarded_from** | **string** | On a forward: the message it forwarded. | [optional]
**object** | **string** |  | [optional]
**kind** | **string** | Fixed when the draft is created. A draft the user wrote in their mail client is read from its headers. | [optional]
**version** | **string** | Changes on every edit, the user&#39;s in Gmail or Outlook included. Pass it as &#x60;If-Match&#x60; to update or send only that version. Also the &#x60;ETag&#x60; response header. | [optional]
**message_id** | **string** | The provider message behind the draft. Volatile: Gmail replaces it on every save. | [optional]
**in_reply_to** | **string** | The message a reply draft answers. | [optional]
**forward_of** | **string** | The message a forward draft forwards. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
