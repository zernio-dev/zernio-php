# # WebhookPayloadAutomationCheckCompletedCheck

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**slot** | **\DateTime** | The scheduled time the check ran for. |
**outcome** | **string** | &#x60;paused&#x60;: the team used its free automation runs with no payment method on file, so the check did not run. &#x60;error&#x60; says why. |
**subjects_evaluated** | **int** | How many objects the check read. |
**actions_count** | **int** | How many actions it recorded. |
**error** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
