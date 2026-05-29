# # GetWhatsAppCallEstimate200ResponseBreakdown

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta_minutes** | **int** |  | [optional]
**meta_cost_usd** | **float** | Estimated Meta per-minute charge, billed by Meta directly to your WABA. Display only; not billed by Zernio. | [optional]
**telnyx_cost_usd** | **float** |  | [optional]
**recording_cost_usd** | **float** |  | [optional]
**billable_cost_usd** | **float** | Estimated amount Zernio bills you &#x3D; Telnyx leg + recording (excludes Meta). | [optional]
**total_cost_usd** | **float** | Estimated full cost incl. the Meta portion you pay directly. Display only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
