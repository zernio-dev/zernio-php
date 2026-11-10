# # CreateEmailDraftRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**to** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) | Optional on a draft; needed before it is sent. | [optional]
**cc** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**bcc** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**reply_to** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**from_name** | **string** |  | [optional]
**from** | **string** | Send from another address of the mailbox, as on &#x60;POST /v1/email/messages&#x60;. Checked when the draft is saved. | [optional]
**append_signature** | **bool** | Puts the signature of the sending address in the draft body, where the user sees it: its Zernio default first, else its Gmail signature. | [optional]
**signature_id** | **string** | Puts this Zernio signature in the draft body instead. Wins over &#x60;appendSignature&#x60;. | [optional]
**subject** | **string** | On a reply draft, empty keeps the thread subject. | [optional]
**text** | **string** |  | [optional]
**html** | **string** |  | [optional]
**attachments** | [**\Zernio\Model\EmailAttachmentInput[]**](EmailAttachmentInput.md) |  | [optional]
**headers** | **array<string,string>** | Custom &#x60;X-&#x60; headers only. | [optional]
**metadata** | **array<string,string>** | Kept with the draft and returned on the sent message and its email.* webhooks. | [optional]
**in_reply_to** | **string** | Makes a reply draft in that message&#39;s thread, addressed and threaded like a reply. Not with &#x60;forwardOf&#x60;. | [optional]
**reply_all** | **bool** | With &#x60;inReplyTo&#x60;: address every recipient of the original. Leave out &#x60;to&#x60;, &#x60;cc&#x60; and &#x60;bcc&#x60;. | [optional]
**forward_of** | **string** | Makes a forward draft of that message, with its attachments. Recipients can come later. Not with &#x60;inReplyTo&#x60;. | [optional]
**include_attachments** | **bool** | With &#x60;forwardOf&#x60;: false keeps only the inline images of the original. | [optional] [default to true]
**exclude_attachment_ids** | **string[]** | With &#x60;forwardOf&#x60;: attachment ids (from a read of the original) to leave out. | [optional]
**track_opens** | **bool** | Puts the open pixel in the draft html now; fires &#x60;email.opened&#x60; once it is sent. Needs &#x60;html&#x60;. | [optional]
**track_links** | **bool** | Rewrites the draft&#39;s links now; fires &#x60;email.link_clicked&#x60; once it is sent. Needs &#x60;html&#x60;. | [optional]
**track_replies** | **bool** | Fires &#x60;email.thread_replied&#x60; once it is sent. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
