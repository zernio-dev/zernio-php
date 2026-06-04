# # UpdateAdCampaignRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  |
**budget** | [**\Zernio\Model\UpdateAdCampaignRequestBudget**](UpdateAdCampaignRequestBudget.md) |  | [optional]
**bid_strategy** | [**\Zernio\Model\BidStrategy**](BidStrategy.md) | Campaign-level default. Ad sets inherit this unless they override. | [optional]
**name** | **string** | Rename the campaign (Meta only; other platforms return 501). At least one of budget/bidStrategy/name is required. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
