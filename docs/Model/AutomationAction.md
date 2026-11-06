# # AutomationAction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**step** | **string** | The id of the step that made it, for example &#x60;budget&#x60;. |
**type** | **string** |  |
**status** | **string** |  |
**reason** | **string** | Why it was skipped or failed, such as &#x60;already_paused&#x60;, &#x60;daily_limit_reached&#x60; or &#x60;awaiting_approval&#x60;. |
**previous** | [**\Zernio\Model\AutomationChangedValue**](AutomationChangedValue.md) |  |
**target** | [**\Zernio\Model\AutomationChangedValue**](AutomationChangedValue.md) |  |
**id** | **string** |  |
**automation_id** | **string** |  |
**automation_name** | **string** |  |
**check_id** | **string** |  |
**subject** | [**\Zernio\Model\AutomationActionAllOfSubject**](AutomationActionAllOfSubject.md) |  |
**platform** | **string** |  |
**ad_account** | [**\Zernio\Model\AutomationActionAllOfAdAccount**](AutomationActionAllOfAdAccount.md) |  |
**currency** | **string** |  |
**created_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
