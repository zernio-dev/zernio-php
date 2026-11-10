# # UpdateEmailDraftRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**to** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**cc** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**bcc** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**reply_to** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**subject** | **string** |  | [optional]
**text** | **string** |  | [optional]
**html** | **string** | On a draft created with tracking, the new html is instrumented again under the same &#x60;trackingId&#x60;. | [optional]
**attachments** | [**\Zernio\Model\EmailAttachmentInput[]**](EmailAttachmentInput.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
