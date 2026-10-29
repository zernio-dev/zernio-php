# # ExternalPostMediaItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**url** | **string** | Direct URL to the media file. Null when the platform withholds it: check mediaStatus before downloading.  - Instagram omits the video file for Reels it flags as containing copyrighted material (its docs name audio as the usual cause). type stays \&quot;video\&quot; while the file is permanently unreachable. - LinkedIn videos with no file returned: url falls back to the cover image and the item carries mediaStatus: unavailable. |
**thumbnail** | **string** | Cover image. Still present when url is null. | [optional]
**media_status** | **string** | unavailable means the media file could not be retrieved (url is null or, for LinkedIn videos, a cover image standing in for the file). available or absent means the file is available at url (older synced items omit the field). | [optional]
**unavailable_reason** | **string** | Why the file is missing. platform_withheld means the platform declined to return it and retrying will not help. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
