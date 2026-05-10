# # XApiPricingTiersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tier** | **string** | Tier key derived from price (e.g. &#x60;x_api_005&#x60; for $0.005, &#x60;x_api_200&#x60; for $0.200). The first three keys map to the legacy &#x60;xApiCalls&#x60; aggregate; new tiers (e.g. &#x60;x_api_200&#x60; for the URL tier added April 2026) are surfaced here but not in the legacy shape. | [optional]
**price_per_call_usd** | **float** |  | [optional]
**operation_count** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
