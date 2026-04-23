# # CreateStandaloneAdRequestVideo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | Public URL of the video. Uploaded to Meta via chunked transfer on /act_X/advideos; then the request blocks on Meta&#39;s transcoding until status.video_status &#x3D;&#x3D;&#x3D; &#39;ready&#39;. |
**thumbnail_url** | **string** | Public URL of a still-image thumbnail for the video. Required by Meta on every video creative. Uploaded to Meta as an ad image and referenced as the thumbnail in object_story_spec.video_data. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
