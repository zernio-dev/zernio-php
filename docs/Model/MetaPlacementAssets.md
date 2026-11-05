# # MetaPlacementAssets

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_image_url** | **string** | Image mode. Catch-all image for any placement no rule matches. Required in image mode (Meta mandates a default rule). | [optional]
**default_video_url** | **string** | Video mode. Catch-all video for any placement no rule matches. Video mode requires this or &#x60;defaultVideoId&#x60;. | [optional]
**default_video_id** | **string** | Video mode. ID of a video already on the ad account, used as the catch-all instead of uploading &#x60;defaultVideoUrl&#x60;. Wins over &#x60;defaultVideoUrl&#x60;. A video still processing after 30 seconds returns 409. | [optional]
**default_thumbnail_url** | **string** | Video mode (optional). Poster image for the default video; Meta auto-generates one when omitted. | [optional]
**rules** | [**\Zernio\Model\MetaPlacementAssetsRulesInner[]**](MetaPlacementAssetsRulesInner.md) | One entry per placement group you want to pin a specific asset to. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
