# # GetPostTimeline200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**post_id** | **string** | The postId that was requested | [optional]
**timeline** | [**\Zernio\Model\GetPostTimeline200ResponseTimelineInner[]**](GetPostTimeline200ResponseTimelineInner.md) |  | [optional]
**analytics_off** | [**\Zernio\Model\AnalyticsOffAccount[]**](AnalyticsOffAccount.md) | The X accounts of this post whose analytics sync does not run, so their rows stop at the last read. Absent when there are none. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
