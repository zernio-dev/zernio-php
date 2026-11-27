# # UpdateCampaignConversionGoalsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stage** | **bool** | Send true to store this write as a staged change instead of applying it. The response is &#x60;202&#x60; with the change, and POST /v1/ads/changes/{changeId}/confirm applies it later. Cannot be combined with &#x60;validateOnly&#x60;. | [optional]
**goals** | [**\Zernio\Model\GoogleBiddableGoalInput[]**](GoogleBiddableGoalInput.md) |  | [optional]
**goal_config_level** | **string** |  | [optional]
**custom_conversion_goal_id** | **string** | Custom goal to bid on, or null to clear | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
