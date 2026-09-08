# # CtwaAdRequestBodyVideo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | Public URL of the video to upload. Provide either &#x60;url&#x60; or &#x60;id&#x60;. | [optional]
**id** | **string** | Reuse a video already uploaded to this ad account (list them with GET /v1/ads/videos) instead of re-uploading. Wins over &#x60;url&#x60;. Provide either &#x60;url&#x60; or &#x60;id&#x60;. | [optional]
**thumbnail_url** | **string** | OPTIONAL: when omitted, the poster is auto-generated from Meta&#39;s own preferred video thumbnail. When Meta produces no candidate the request fails with a 502 platform_error (reason: video_thumbnail_unavailable). Retry, or supply this field to control the poster frame exactly. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
