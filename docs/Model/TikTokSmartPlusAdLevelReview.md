# # TikTokSmartPlusAdLevelReview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**review_status** | [**\Zernio\Model\TikTokSmartPlusReviewStatus**](TikTokSmartPlusReviewStatus.md) |  | [optional]
**raw_review_status** | **string** | TikTok &#x60;review_status&#x60;, verbatim. | [optional]
**reject_reasons** | **string[]** | Every distinct reason across &#x60;rejections&#x60;. | [optional]
**passed_locations** | **string[]** | Location codes that passed the review. | [optional]
**appeal_status** | **string** | TikTok &#x60;appeal_status&#x60;, verbatim: NOT_APPEALED, APPEALING, APPEAL_SUCCESSFUL, APPEAL_FAILED, APPEAL_DONE. | [optional]
**appeal_reject_reasons** | **string[]** |  | [optional]
**rejections** | [**\Zernio\Model\TikTokReviewRejection[]**](TikTokReviewRejection.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
