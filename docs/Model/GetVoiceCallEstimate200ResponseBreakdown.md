# # GetVoiceCallEstimate200ResponseBreakdown

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**telnyx_cost_usd** | **float** |  | [optional]
**recording_cost_usd** | **float** |  | [optional]
**transcription_cost_usd** | **float** |  | [optional]
**branded_call_usd** | **float** | Branded Calling surcharge, 0 unless &#x60;from&#x60; is a verified branded number calling a US destination. | [optional]
**billable_cost_usd** | **float** | What Zernio bills for the call. | [optional]
**total_cost_usd** | **float** | Equals billableCostUSD (no separate Meta bill on PSTN); kept for shape parity with the WhatsApp estimate. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
