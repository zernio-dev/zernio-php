# # CallRecordBilling

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta_minutes** | **float** |  | [optional]
**telnyx_seconds** | **float** |  | [optional]
**transcription_seconds** | **float** |  | [optional]
**transcription_cost_usd** | **float** |  | [optional]
**meta_cost_usd** | **float** | WhatsApp channel only. Meta per-minute charge, billed by Meta directly to your WABA. Display only; not billed by Zernio. | [optional]
**telnyx_cost_usd** | **float** |  | [optional]
**recording_cost_usd** | **float** |  | [optional]
**billable_cost_usd** | **float** | Amount Zernio bills you &#x3D; telephony leg + recording + transcription (excludes any Meta portion). | [optional]
**total_cost_usd** | **float** | Full cost incl. any Meta portion you pay directly. Display only. | [optional]
**currency** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
