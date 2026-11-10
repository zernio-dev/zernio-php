# # SendEmailRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**to** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  |
**cc** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**bcc** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**reply_to** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**from_name** | **string** |  | [optional]
**from** | **string** | Send from another address listed by &#x60;GET /v1/email/send-as&#x60;; on Outlook, declare a shared mailbox there first. An address not on the list answers 400, and Outlook refusing it at send time answers 403. Omitted, the mail leaves from the mailbox address. | [optional]
**append_signature** | **bool** | Appends the signature of the sending address: its Zernio default first, else its Gmail signature. 400 when it has neither. | [optional]
**signature_id** | **string** | Appends this Zernio signature instead. Wins over &#x60;appendSignature&#x60;. | [optional]
**subject** | **string** |  |
**text** | **string** | Plain-text body. One of &#x60;text&#x60; or &#x60;html&#x60; is required. | [optional]
**html** | **string** |  | [optional]
**attachments** | [**\Zernio\Model\SendEmailRequestAttachmentsInner[]**](SendEmailRequestAttachmentsInner.md) | 25 MB in total on every provider. Send files over 4 MB by url: request bodies are capped at 4.5 MB. | [optional]
**headers** | **array<string,string>** | Custom &#x60;X-&#x60; headers only. &#x60;List-Unsubscribe&#x60; is dropped on Microsoft and reported in &#x60;metadata.droppedHeaders&#x60;. | [optional]
**metadata** | **array<string,string>** |  | [optional]
**scheduled_for** | **\DateTime** | Send later, between 1 minute and 30 days from now. The request answers 202 with the scheduled send; it leaves within a minute of this time through the same caps as an immediate send. List or cancel it under &#x60;/v1/email/messages/scheduled&#x60;. | [optional]
**hold_as_draft** | **bool** | Needs &#x60;scheduledFor&#x60;. Saves the email as a draft in the mailbox now and sends that draft at &#x60;scheduledFor&#x60;, with any edits the user made in their mail app. A draft deleted or sent from the mailbox first fails the send (&#x60;email.send_failed&#x60;). Cancelling deletes the draft. | [optional]
**track_opens** | **bool** | Adds an open pixel to the html and fires &#x60;email.opened&#x60;. Needs &#x60;html&#x60;. | [optional]
**track_links** | **bool** | Rewrites every http(s) link in the html through a Zernio redirect and fires &#x60;email.link_clicked&#x60;. Needs &#x60;html&#x60;. | [optional]
**track_replies** | **bool** | Fires &#x60;email.thread_replied&#x60; when someone else writes in this message&#39;s thread. Works with text or html. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
