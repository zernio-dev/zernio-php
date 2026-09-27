# # GoogleDemandGenInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_group_name** | **string** | Defaults to the ad name. | [optional]
**final_url** | **string** |  |
**business_name** | **string** |  |
**headlines** | **string[]** | Distinct texts. |
**long_headlines** | **string[]** | Video ads only, and required there. | [optional]
**descriptions** | **string[]** |  |
**call_to_action** | **string** | Image ads only. Call to action text such as &#39;Learn more&#39;; Google picks one when omitted. | [optional]
**images** | [**\Zernio\Model\GoogleDemandGenInputImages**](GoogleDemandGenInputImages.md) |  |
**youtube_video_ids** | **string[]** | Makes the ad a video responsive ad. | [optional]
**channels** | **string[]** | Channel controls on the ad group. Only the listed channels serve; omit to serve on all of them. | [optional]
**audience** | [**\Zernio\Model\GoogleDemandGenInputAudience**](GoogleDemandGenInputAudience.md) |  | [optional]
**audience_id** | **string** | Attach an existing Google Audience by numeric id instead of audience. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
