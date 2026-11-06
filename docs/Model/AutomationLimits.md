# # AutomationLimits

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cooldown** | **string** | How long an object is left alone after the rule acts on it. Whole minutes, up to &#x60;30d&#x60;. | [optional] [default to '1d']
**max_changes_per_day** | **int** | Most changes across the last 24 hours. Needs an &#x60;ads.*&#x60; step. | [optional]
**max_changes_per_object** | **int** | Most times the rule may change one object, over its whole history. Needs an &#x60;ads.*&#x60; step. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
