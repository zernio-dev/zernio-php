# # SendInboxMessage400Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **string** |  | [optional]
**type** | **string** | Present on Meta and TikTok pass-through rejections: platform_error when the platform rejected the send (see platform/platformError below), invalid_request_error for validation failures. | [optional]
**code** | **string** | Stable machine-readable reason.  - PLATFORM_LIMITATION: a capability the platform does not offer (e.g. Bluesky and Reddit DMs reject media). - MISSING_PARTICIPANT: the stored conversation has no recipient to send to. - DIRECT_SEND_NOT_ELIGIBLE and DIRECT_SEND_BLOCKED: the WhatsApp Business Account needs Meta to grant or restore Direct Send access. - DIRECT_SEND_LIMITED: temporary; Meta lifts it on its own. - platform_api_error: the platform itself rejected the send (see platformError). | [optional]
**platform** | **string** | Present alongside code platform_api_error. The platform that rejected the send (e.g. instagram, facebook, whatsapp, tiktok). | [optional]
**platform_error** | [**\Zernio\Model\SendInboxMessage400ResponsePlatformError**](SendInboxMessage400ResponsePlatformError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
