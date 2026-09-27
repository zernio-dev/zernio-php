# # GoogleDemandGenInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_group_name** | **string** | Defaults to the ad name. | [optional]
**final_url** | **string** |  |
**business_name** | **string** |  |
**headlines** | **string[]** | Distinct texts. A carousel ad takes exactly one. |
**long_headlines** | **string[]** | Video ads only, and required there. | [optional]
**descriptions** | **string[]** | A carousel ad takes exactly one. |
**call_to_action** | **string** | Image and carousel ads only. Call to action text such as &#39;Learn more&#39;; Google picks one when omitted. | [optional]
**images** | [**\Zernio\Model\GoogleDemandGenInputImages**](GoogleDemandGenInputImages.md) |  |
**youtube_video_ids** | **string[]** | Makes the ad a video responsive ad. | [optional]
**carousel_cards** | [**\Zernio\Model\GoogleDemandGenInputCarouselCardsInner[]**](GoogleDemandGenInputCarouselCardsInner.md) | Makes the ad a carousel ad. Each card needs its own image (no two cards may share one); use the same image shape on every card. Card images are uploaded to the account&#39;s asset library before the campaign is created, validateOnly included (Google checks cards against existing images; identical images are reused, not duplicated). | [optional]
**channels** | **string[]** | Channel controls on the ad group. Only the listed channels serve; omit to serve on all of them. | [optional]
**audience** | [**\Zernio\Model\GoogleDemandGenAudience**](GoogleDemandGenAudience.md) |  | [optional]
**audience_id** | **string** | Attach an existing Google Audience by numeric id instead of audience. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
