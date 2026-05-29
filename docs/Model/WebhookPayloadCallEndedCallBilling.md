# # WebhookPayloadCallEndedCallBilling

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta_cost_usd** | **float** | Meta per-minute charge. Billed by Meta DIRECTLY to your WhatsApp Business Account payment method (your separate Meta invoice). Zernio does NOT charge this. Display only. | [optional]
**telnyx_cost_usd** | **float** |  | [optional]
**recording_cost_usd** | **float** |  | [optional]
**billable_cost_usd** | **float** | The amount Zernio bills you &#x3D; Telnyx leg + recording. Excludes Meta (billed by Meta directly). | [optional]
**total_cost_usd** | **float** | Full economic cost incl. the Meta portion you pay directly (Meta + Telnyx + recording). Display only, not the Zernio-billed amount. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
