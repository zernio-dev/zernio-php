# # InstagramVideoFallback

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | **string** |  |
**linked_to_original_post** | **bool** | True when the ad still references the original Instagram post and keeps its engagement. |
**video_id** | **string** | The Facebook-side ad video Zernio made. With instagram_video_reuploaded it is the copy in the ad account video library (possibly one made by an earlier boost of the same media, reused); the creative carries it as video_id unless Meta accepted the plain post reference once the copy existed, in which case the copy is kept for that reference. With instagram_video_rehosted_copy it is the new upload the creative uses (an unused copy made by this request is deleted). |
**platform_error** | [**\Zernio\Model\InstagramVideoFallbackPlatformError**](InstagramVideoFallbackPlatformError.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
