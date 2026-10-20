# # GoogleDemandGenUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**final_url** | **string** |  | [optional]
**business_name** | **string** |  | [optional]
**headlines** | **string[]** |  | [optional]
**long_headlines** | **string[]** | Video ads only. | [optional]
**descriptions** | **string[]** |  | [optional]
**call_to_action** | **string** | Image and carousel ads only. | [optional]
**images** | [**\Zernio\Model\GoogleDemandGenUpdateImages**](GoogleDemandGenUpdateImages.md) |  | [optional]
**youtube_video_ids** | **string[]** | Video ads only. | [optional]
**channels** | **string[]** | Replaces the ad group&#39;s channel controls. Only the listed channels serve; Google Maps, which this list cannot select, is turned off. Omit to leave the ad group&#39;s channel controls unchanged. | [optional]
**audience** | [**\Zernio\Model\GoogleDemandGenAudience**](GoogleDemandGenAudience.md) |  | [optional]
**audience_id** | **string** | Attach an existing Google Audience by numeric id instead of audience. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
