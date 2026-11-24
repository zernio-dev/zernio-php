# # AnalyticsListResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**overview** | [**\Zernio\Model\AnalyticsOverview**](AnalyticsOverview.md) |  | [optional]
**posts** | [**\Zernio\Model\AnalyticsListResponsePostsInner[]**](AnalyticsListResponsePostsInner.md) |  | [optional]
**pagination** | [**\Zernio\Model\Pagination**](Pagination.md) |  | [optional]
**accounts** | [**\Zernio\Model\SocialAccount[]**](SocialAccount.md) | Connected accounts (followerCount and followersLastUpdated only included if user has analytics add-on) | [optional]
**has_analytics_access** | **bool** | Whether user has analytics add-on access | [optional]
**analytics_off** | [**\Zernio\Model\AnalyticsOffAccount[]**](AnalyticsOffAccount.md) | The X accounts this list covers (after its platform, profile and account filters) whose analytics sync does not run: their numbers stay as of the last read. Also sent with &#x60;view&#x3D;summary&#x60;. Absent when there are none. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
