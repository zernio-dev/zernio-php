# # GetAdReview200ResponseReview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approved** | **bool** | TikTok &#x60;is_approved&#x60;. Google and Meta: derived from the platform status (see the description). | [optional]
**review_status** | **string** | TikTok &#x60;review_status&#x60;, verbatim: ALL_AVAILABLE (approved everywhere), PART_AVAILABLE (approved for part of the targeting), UNAVAILABLE (rejected). Google: &#x60;review_status&#x60;. Meta: the ad&#39;s &#x60;effective_status&#x60;. | [optional]
**forbidden_placements** | **string[]** |  | [optional]
**forbidden_ages** | **string[]** |  | [optional]
**forbidden_locations** | **string[]** |  | [optional]
**forbidden_operating_systems** | **string[]** |  | [optional]
**rejections** | [**\Zernio\Model\GetAdReview200ResponseReviewRejectionsInner[]**](GetAdReview200ResponseReviewRejectionsInner.md) | One entry per rejected piece of content (TikTok &#x60;reject_info&#x60;). Empty when the ad was approved. | [optional]
**approval_status** | **string** | Google only. ad_group_ad.policy_summary.approval_status, verbatim. | [optional]
**policy_topics** | [**\Zernio\Model\GetAdReview200ResponseReviewPolicyTopicsInner[]**](GetAdReview200ResponseReviewPolicyTopicsInner.md) | Google only. ad_group_ad.policy_summary.policy_topic_entries. | [optional]
**review_feedback** | [**\Zernio\Model\GetAdReview200ResponseReviewReviewFeedback**](GetAdReview200ResponseReviewReviewFeedback.md) |  | [optional]
**issues** | **object[]** | Meta only. The Ad&#39;s &#x60;issues_info&#x60; objects (&#x60;error_code&#x60;, &#x60;error_message&#x60;, &#x60;error_summary&#x60;, &#x60;error_type&#x60;, &#x60;level&#x60;), verbatim. | [optional]
**read_at** | **\DateTime** | When the verdict was read from the platform. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
