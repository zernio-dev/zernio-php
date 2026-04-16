# # BoostPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**post_id** | **string** | Zernio post ID (provide this or platformPostId) | [optional]
**platform_post_id** | **string** | Platform post ID (alternative to postId) | [optional]
**account_id** | **string** | Social account ID |
**ad_account_id** | **string** | Platform ad account ID |
**name** | **string** |  |
**goal** | **string** | Available goals vary by platform. Meta (Facebook/Instagram) and TikTok support all 7. LinkedIn supports all except app_promotion. Twitter/X supports engagement, traffic, awareness, video_views, app_promotion. Pinterest and Google Ads support only engagement, traffic, awareness, video_views. |
**budget** | [**\Late\Model\BoostPostRequestBudget**](BoostPostRequestBudget.md) |  |
**currency** | **string** |  | [optional]
**schedule** | [**\Late\Model\BoostPostRequestSchedule**](BoostPostRequestSchedule.md) |  | [optional]
**targeting** | [**\Late\Model\BoostPostRequestTargeting**](BoostPostRequestTargeting.md) |  | [optional]
**bid_amount** | **float** | Max bid cap (Meta only) | [optional]
**tracking** | [**\Late\Model\BoostPostRequestTracking**](BoostPostRequestTracking.md) |  | [optional]
**special_ad_categories** | **string[]** | Meta only. Required for housing, employment, credit, or political ads. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
