# # AdCampaignBudget

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** |  |
**type** | **string** |  |
**amount_micros** | **string** | Google only. Exact decimal micros; DAILY uses amount_micros and CUSTOM_PERIOD uses total_amount_micros. | [optional]
**explicitly_shared** | **bool** | Google only. True for a shared budget; null when unavailable. Shared writes require allowSharedBudgetUpdate&#x3D;true; unknown sharing status cannot be overridden. | [optional]
**resource_name** | **string** | Google only. campaign_budget.resource_name, or null when unavailable. | [optional]
**delivery_method** | **string** | Google only. campaign_budget.delivery_method, typically STANDARD, or null when unavailable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
