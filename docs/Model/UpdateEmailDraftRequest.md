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
**signature_id** | **string** | Swaps the Zernio signature block in the new &#x60;html&#x60; or &#x60;text&#x60; for this signature, so switching never stacks two; &#x60;null&#x60; removes it. Needs &#x60;html&#x60; or &#x60;text&#x60; in the same request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
