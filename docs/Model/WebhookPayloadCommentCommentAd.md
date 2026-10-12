# # WebhookPayloadCommentCommentAd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Meta ad ID (Instagram only). | [optional]
**title** | **string** | Ad creative title (Instagram only). | [optional]
**original_media_id** | **string** | Original media ID that Meta reports for the ad (Instagram only). | [optional]
**promotion_status** | **string** | Facebook only. The parent post&#39;s promotion_status as the Graph API returns it, for example \&quot;active\&quot; (organic post currently boosted). Ad dark posts usually report \&quot;inactive\&quot; and sometimes \&quot;ineligible\&quot;, so use isDarkPost, not this value, to tell an ad comment apart. | [optional]
**is_dark_post** | **bool** | Facebook only: true when the post is an unpublished ad creative (dark post), false for a boosted organic post. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
