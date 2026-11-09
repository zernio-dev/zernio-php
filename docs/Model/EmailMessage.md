# # EmailMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The provider&#39;s message id. | [optional]
**thread_id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**provider** | **string** |  | [optional]
**folders** | **string[]** |  | [optional]
**from** | [**\Zernio\Model\EmailAddress**](EmailAddress.md) |  | [optional]
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
**metadata** | **array<string,string>** |  | [optional]
**tracking_id** | **string** | Set on a send with &#x60;trackOpens&#x60;, &#x60;trackLinks&#x60; or &#x60;trackReplies&#x60;; the email.* webhooks carry it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
