# # ListWhatsAppCalls200ResponseCallsInnerBilling

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta_cost_usd** | **float** | Meta per-minute charge, billed by Meta directly to your WABA. Display only; not billed by Zernio. | [optional]
**telnyx_cost_usd** | **float** |  | [optional]
**recording_cost_usd** | **float** |  | [optional]
**billable_cost_usd** | **float** | Amount Zernio bills you &#x3D; Telnyx leg + recording (excludes Meta). | [optional]
**total_cost_usd** | **float** | Full cost incl. the Meta portion you pay directly. Display only. | [optional]
**currency** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
