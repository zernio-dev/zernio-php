# # UpdateAutomationAdAccountControlsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The ads connection that reaches the ad account. |
**ad_account_id** | **string** | The platform&#39;s ad account id. |
**paused** | **bool** | True stops every automation on this ad account; false lets them run again. | [optional]
**daily_raise_limit** | **float** | The most automations may raise budgets on this ad account in any 24 hours, in the ad account&#39;s currency. A raise past it is cut to the room left.  Send null to remove the limit. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
