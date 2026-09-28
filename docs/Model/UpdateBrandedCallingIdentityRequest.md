# # UpdateBrandedCallingIdentityRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_name** | **string** | Shown on the callee&#39;s screen. No emoji. | [optional]
**call_reasons** | **string[]** | 1 to 10 reasons you call, each up to 64 characters. Pick from GET /v1/branded-calling/call-reasons to skip manual vetting. | [optional]
**logo_url** | **string** | HTTPS URL of a PNG, JPEG, WebP or SVG logo. Zernio converts it to the 256x256 BMP the carriers require and hosts it. | [optional]
**authorizer** | [**\Zernio\Model\CreateBrandedCallingIdentityRequestAuthorizer**](CreateBrandedCallingIdentityRequestAuthorizer.md) |  | [optional]
**references** | [**\Zernio\Model\BrandedCallingReferences**](BrandedCallingReferences.md) |  | [optional]
**review_answers** | [**array<string,\Zernio\Model\UpdateBrandedCallingIdentityRequestReviewAnswersValue>**](UpdateBrandedCallingIdentityRequestReviewAnswersValue.md) | One entry per point id of the open reviewRequest. | [optional]
**review_note** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
