# # RespondToPhoneNumberReviewerRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | Your message to the reviewer. | [optional]
**documents** | [**\Zernio\Model\RespondToPhoneNumberReviewerRequestDocumentsInner[]**](RespondToPhoneNumberReviewerRequestDocumentsInner.md) | Corrected requirement documents, each keyed to its requirement. | [optional]
**address** | **object** | A corrected address record, keyed to its requirement. | [optional]
**entity_type** | **string** |  | [optional]
**attachments** | [**\Zernio\Model\ReplyToPhoneNumberReviewerRequestAttachmentsInner[]**](ReplyToPhoneNumberReviewerRequestAttachmentsInner.md) | Loose files (PDF/JPG/PNG/WEBP, max 10 MB each) whose links are added to your message. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
