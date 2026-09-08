# # PinterestPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Pin title. Defaults to first line of content or \&quot;Pin\&quot;. Must be ≤ 100 characters. | [optional]
**board_id** | **string** | Target Pinterest board ID. If omitted, the first available board is used. | [optional]
**board_section_id** | **string** | Target section inside the board. Optional; the pin lands on the board itself when omitted. Pinterest rejects the pin if the section does not belong to boardId, so send both together. | [optional]
**link** | **string** | Destination link (pin URL) | [optional]
**cover_image_url** | **string** | Optional cover image for video pins | [optional]
**cover_image_key_frame_time** | **int** | Optional key frame time in seconds for derived video cover | [optional]
**is_ai_generated** | **bool** | When true, the Pin is created with Pinterest&#39;s AI_MODIFIED disclosure (ai_disclosures), which shows an \&quot;AI modified\&quot; label. Applies to image and video Pins. Pinterest offers no \&quot;not AI\&quot; value, so false omits the disclosure. Pinterest may still label a Pin on its own detection. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
