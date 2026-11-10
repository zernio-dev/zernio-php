# # ForwardEmailRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**to** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  |
**cc** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**bcc** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**reply_to** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**from_name** | **string** |  | [optional]
**from** | **string** | Send from another address of the mailbox, as on &#x60;POST /v1/email/messages&#x60;. | [optional]
**append_signature** | **bool** | Appends the signature of the sending address to the note, above the forwarded original: its Zernio default first, else its Gmail signature. | [optional]
**signature_id** | **string** | Appends this Zernio signature to the note instead. Wins over &#x60;appendSignature&#x60;. | [optional]
**subject** | **string** | Defaults to \&quot;Fwd: \&quot; plus the original subject. | [optional]
**text** | **string** | Optional note above the forwarded mail. | [optional]
**html** | **string** | Optional note above the forwarded mail, as html. | [optional]
**attachments** | [**\Zernio\Model\EmailAttachmentInput[]**](EmailAttachmentInput.md) | Added to the forwarded attachments. Everything together stays under 25 MB, else 413 &#x60;attachment_too_large&#x60;. | [optional]
**include_attachments** | **bool** | False keeps only the inline images of the original. | [optional] [default to true]
**exclude_attachment_ids** | **string[]** | Attachment ids (from a read of the original) to leave out. | [optional]
**metadata** | **array<string,string>** |  | [optional]
**track_opens** | **bool** | Adds an open pixel to the note and fires &#x60;email.opened&#x60;. Needs &#x60;html&#x60;. | [optional]
**track_links** | **bool** | Rewrites the links of the note and fires &#x60;email.link_clicked&#x60;. Needs &#x60;html&#x60;. | [optional]
**track_replies** | **bool** | Fires &#x60;email.thread_replied&#x60; when someone else writes in the thread. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
