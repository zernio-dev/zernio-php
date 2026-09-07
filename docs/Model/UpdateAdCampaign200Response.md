# # UpdateAdCampaign200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**updated** | **int** | Local Ad documents mirrored. 0 on the empty-campaign path. | [optional]
**budget** | [**\Zernio\Model\AdBudget**](AdBudget.md) |  | [optional]
**budget_level** | **string** |  | [optional]
**bid_strategy** | [**\Zernio\Model\BidStrategy**](BidStrategy.md) |  | [optional]
**bid_amount** | **float** |  | [optional]
**roas_average_floor** | **float** |  | [optional]
**portfolio_bid_strategy_id** | **string** | Google only. Echoed back, but NOT mirrored onto local Ad documents (no column for it yet). | [optional]
**platform_specific_data** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
