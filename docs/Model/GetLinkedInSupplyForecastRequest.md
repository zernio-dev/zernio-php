# # GetLinkedInSupplyForecastRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**ad_account_id** | **string** |  |
**spec** | [**\ZernioModelTargetingSpec**](\ZernioModelTargetingSpec.md) |  |
**campaign_type** | **string** | Defaults to SPONSORED_UPDATES. | [optional]
**time_range_start** | **int** | Unix ms. Must be in the future. |
**time_range_end** | **int** | Unix ms. Must be after start and within LinkedIn&#39;s max horizon. |
**objective_type** | **string** |  | [optional]
**optimization_target** | **string** | When set, the forecast assumes auto-bidding. When unset, competingBid is required. | [optional]
**daily_budget** | **float** | Either dailyBudget or totalBudget is required. | [optional]
**total_budget** | **float** |  | [optional]
**currency** | **string** | ISO 4217, defaults to USD. | [optional]
**competing_bid** | [**\Zernio\Model\GetLinkedInSupplyForecastRequestCompetingBid**](GetLinkedInSupplyForecastRequestCompetingBid.md) |  | [optional]
**enable_audience_network** | **bool** | Defaults to false. Required true for connectedTelevisionOnly. | [optional]
**enable_audience_expansion** | **bool** | Defaults to false. | [optional]
**connected_television_only** | **bool** | Defaults to false. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
