# # AnalyticsListResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**overview** | [**\Zernio\Model\AnalyticsOverview**](AnalyticsOverview.md) |  | [optional]
**posts** | [**\Zernio\Model\AnalyticsListResponsePostsInner[]**](AnalyticsListResponsePostsInner.md) |  | [optional]
**pagination** | [**\Zernio\Model\Pagination**](Pagination.md) |  | [optional]
**accounts** | [**\Zernio\Model\SocialAccount[]**](SocialAccount.md) | Connected social accounts (followerCount and followersLastUpdated only included if user has analytics add-on) | [optional]
**has_analytics_access** | **bool** | Whether user has analytics add-on access | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
