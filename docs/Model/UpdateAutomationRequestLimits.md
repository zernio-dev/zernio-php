# # UpdateAutomationRequestLimits

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cooldown** | **string** | How long the same post or account is left alone after the automation acts on it, rounded up to whole minutes. None by default. | [optional]
**max_changes_per_day** | **int** | Most runs across the last 24 hours. Required, up to 20, with a boost step. | [optional]
**max_changes_per_object** | **int** | Most times the rule may change one object, over its whole history. Needs an &#x60;ads.*&#x60; step. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
