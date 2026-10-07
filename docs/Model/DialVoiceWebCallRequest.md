# # DialVoiceWebCallRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | The number to call, E.164 with leading +. |
**credential_id** | **string** | The WebRTC credential id returned by POST /v1/voice/calls/web (the registered browser). |
**from_number** | **string** | Which of your voice-enabled numbers to call from (optional when you have one). | [optional]
**record_override** | **bool** |  | [optional]
**ring_timeout_seconds** | **int** | Seconds to let the callee&#39;s phone ring before the call ends as no_answer. The destination carrier can end it sooner. | [optional] [default to 30]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
