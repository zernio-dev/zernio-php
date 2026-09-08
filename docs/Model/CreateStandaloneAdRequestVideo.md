# # CreateStandaloneAdRequestVideo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | Public URL of the video. Meta: uploaded via chunked transfer on /act_X/advideos, then the request blocks on Meta&#39;s transcoding until status.video_status &#x3D;&#x3D;&#x3D; &#39;ready&#39;. LinkedIn: uploaded via the Videos API (multipart), then the request blocks until LinkedIn finishes transcoding (status AVAILABLE); short clips take ~10-30s. Provide either &#x60;url&#x60; or &#x60;id&#x60;. | [optional]
**id** | **string** | Meta only. Reuse a video ALREADY uploaded to this ad account instead of re-uploading the file: pass the &#x60;videoId&#x60; returned by a previous create. Wins over &#x60;url&#x60;, so N ads that differ only in copy share one upload (&#x60;existingCreativeId&#x60; only covers the identical-copy case). Provide either &#x60;url&#x60; or &#x60;id&#x60;. | [optional]
**thumbnail_url** | **string** | Public URL of a still-image thumbnail for the video. OPTIONAL: when omitted on Meta, the poster is auto-generated from Meta&#39;s own preferred video thumbnail (the same candidates Ads Manager shows), so video ads usually publish without supplying one. When Meta produces no candidate the request fails with a 502 platform_error (reason: video_thumbnail_unavailable). Retry, or supply this field. Provide it to control the poster frame exactly (uploaded as an ad image and referenced in object_story_spec.video_data). Ignored by LinkedIn (auto-generated poster frame). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
