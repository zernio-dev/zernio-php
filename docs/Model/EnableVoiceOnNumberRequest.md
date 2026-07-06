# # EnableVoiceOnNumberRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**forward_to** | **string** | tel:+E164, sip:..., or wss://... destination for inbound calls. Empty string clears the forward (outbound-only); omitted preserves the current one. | [optional]
**recording_enabled** | **bool** |  | [optional]
**transcription_enabled** | **bool** |  | [optional]
**transcription_language** | **string** |  | [optional]
**voicemail_enabled** | **bool** | Voicemail is taken when there&#39;s no live destination. Default on. | [optional]
**voicemail_greeting** | **string** | Custom spoken greeting; empty string restores the default. | [optional]
**business_hours_enabled** | **bool** | Outside the windows, inbound skips the forward and goes to voicemail. Off &#x3D; 24/7. | [optional]
**business_hours_timezone** | **string** | IANA timezone the windows are evaluated in. | [optional]
**business_hours** | [**\Zernio\Model\EnableVoiceOnNumberRequestBusinessHoursInner[]**](EnableVoiceOnNumberRequestBusinessHoursInner.md) |  | [optional]
**blocked_callers** | **string[]** | E.164 numbers rejected before answer. Replaces the whole list; bare 10-digit values are normalized as US numbers. | [optional]
**forward_caller_id** | **string** | Caller ID on the forwarded leg: your number (&#x60;business&#x60;) or the original caller&#39;s (&#x60;caller&#x60;). | [optional]
**ivr_enabled** | **bool** | IVR menu (supersedes the plain forward within business hours). | [optional]
**ivr_prompt** | **string** |  | [optional]
**ivr_options** | [**\Zernio\Model\EnableVoiceOnNumberRequestIvrOptionsInner[]**](EnableVoiceOnNumberRequestIvrOptionsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
