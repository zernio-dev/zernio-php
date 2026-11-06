# # ValidateMedia200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**valid** | **bool** |  | [optional]
**url** | **string** |  | [optional]
**error** | **string** | Error message if valid is false | [optional]
**code** | **string** | Stable reason when valid is false. MEDIA_UNDECODABLE: the bytes are not a valid image, video or PDF. MEDIA_URL_UNREACHABLE: HTTP error, timeout, network failure, or a web page served instead of the file. MEDIA_URL_NOT_ALLOWED: not a public HTTP(S) URL. | [optional]
**content_type** | **string** | Content-Type header the server sent (may disagree with the detected format) | [optional]
**size** | **int** | File size in bytes | [optional]
**size_formatted** | **string** |  | [optional]
**type** | **string** | Detected from the file bytes | [optional]
**format** | **string** | Detected format (jpeg, png, webp, gif, heif, mp4, mov, webm, pdf, ...) | [optional]
**width** | **int** | Image width in pixels (images only) | [optional]
**height** | **int** | Image height in pixels (images only) | [optional]
**inspection** | **string** | How deeply the content was verified. decoded: every pixel decoded. header: file signature and header verified (videos, PDFs, HEIC/AVIF, images over 32 MB). | [optional]
**platform_limits** | [**array<string,\Zernio\Model\ValidateMedia200ResponsePlatformLimitsValue>**](ValidateMedia200ResponsePlatformLimitsValue.md) | Per-platform size limit comparison (only present when size and type are known) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
