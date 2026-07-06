# # CreateVoiceCallRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | Destination to dial, E.164 with leading +. |
**from_number** | **string** | Which of your voice-enabled numbers to dial from. Optional when you have exactly one. | [optional]
**forward_to** | **string** | Per-call agent override (tel:+E164, sip:..., or wss://...); defaults to the number&#39;s stored forward destination. | [optional]
**greeting** | **string** | Spoken to the callee when they answer, before the bridge. | [optional]
**record_override** | **bool** | Per-call recording toggle; defaults to the number&#39;s setting. | [optional]
**transcribe_override** | **bool** | Per-call transcription toggle; defaults to the number&#39;s setting. | [optional]
**transcription_language** | **string** | &#39;auto&#39; derives from the callee&#39;s country; &#39;en&#39;/&#39;es&#39; force it. | [optional]
**amd** | **bool** | Answering-machine detection; defers the bridge until human vs machine is known. | [optional]
**voicemail_drop_message** | **string** | Spoken to a detected machine, then hang up (implies &#x60;amd&#x60;). For outbound voicemail drops. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
