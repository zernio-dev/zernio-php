# # GetLinkedInBidPricingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio social account ID (LinkedIn). |
**ad_account_id** | **string** | LinkedIn ad account ID (numeric). |
**spec** | [**\ZernioModelTargetingSpec**](\ZernioModelTargetingSpec.md) | Same targeting spec used by POST /v1/ads/create. |
**campaign_type** | **string** | Defaults to SPONSORED_UPDATES. | [optional]
**bid_type** | **string** | Defaults to CPM. | [optional]
**match_type** | **string** | Defaults to EXACT. | [optional]
**currency** | **string** | ISO 4217, defaults to USD. | [optional]
**objective_type** | **string** | LinkedIn objectiveType, e.g. WEBSITE_VISIT, LEAD_GENERATION, VIDEO_VIEW. | [optional]
**optimization_target_type** | **string** | LinkedIn optimizationTargetType, e.g. MAX_CLICK, MAX_IMPRESSION. | [optional]
**daily_budget** | **float** | Optional daily budget in whole account-currency units. LinkedIn refines the suggested bid to this budget. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
