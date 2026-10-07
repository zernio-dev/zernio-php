# # GetAdReview200ResponseReview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approved** | **bool** | TikTok &#x60;is_approved&#x60;. | [optional]
**review_status** | **string** | TikTok &#x60;review_status&#x60;, verbatim: ALL_AVAILABLE (approved everywhere), PART_AVAILABLE (approved for part of the targeting), UNAVAILABLE (rejected). | [optional]
**forbidden_placements** | **string[]** |  | [optional]
**forbidden_ages** | **string[]** |  | [optional]
**forbidden_locations** | **string[]** |  | [optional]
**forbidden_operating_systems** | **string[]** |  | [optional]
**rejections** | [**\Zernio\Model\GetAdReview200ResponseReviewRejectionsInner[]**](GetAdReview200ResponseReviewRejectionsInner.md) | One entry per rejected piece of content (TikTok &#x60;reject_info&#x60;). Empty when the ad was approved. | [optional]
**approval_status** | **string** | Google only. ad_group_ad.policy_summary.approval_status, verbatim. | [optional]
**policy_topics** | [**\Zernio\Model\GetAdReview200ResponseReviewPolicyTopicsInner[]**](GetAdReview200ResponseReviewPolicyTopicsInner.md) | Google only. ad_group_ad.policy_summary.policy_topic_entries. | [optional]
**read_at** | **\DateTime** | When the verdict was read from the platform. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
