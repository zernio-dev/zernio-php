# # AutomationEventTrigger

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The Zernio event that starts it. |
**profile_id** | **string** | The profile whose events start it, from &#x60;GET /v1/profiles&#x60;. |
**account_ids** | **string[]** | Only events of these accounts. Leave out for every account of the profile. | [optional]
**filter** | [**\Zernio\Model\AutomationFactCondition**](AutomationFactCondition.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
