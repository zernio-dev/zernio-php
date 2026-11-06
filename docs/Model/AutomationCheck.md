# # AutomationCheck

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**automation_id** | **string** |  |
**checked_at** | **\DateTime** |  |
**outcome** | **string** |  |
**evaluated** | **int** | Posts judged. |
**subjects** | [**\Zernio\Model\AdRuleAutomationCheckSubjectsInner[]**](AdRuleAutomationCheckSubjectsInner.md) |  |
**actions** | [**\Zernio\Model\ScheduledAutomationCheckActionsInner[]**](ScheduledAutomationCheckActionsInner.md) |  |
**notification** | [**\Zernio\Model\AdRuleAutomationCheckNotification**](AdRuleAutomationCheckNotification.md) |  |
**error** | **string** |  |
**event** | **string** |  |
**event_id** | **string** |  |
**subject** | [**\Zernio\Model\EventAutomationCheckSubject**](EventAutomationCheckSubject.md) |  |
**filter** | [**\Zernio\Model\AutomationFactResult[]**](AutomationFactResult.md) |  |
**analytics_synced_at** | **\DateTime** | The oldest analytics sync among the posts judged: their numbers are as of then. |
**matched** | [**\Zernio\Model\ScheduledAutomationCheckMatchedInner[]**](ScheduledAutomationCheckMatchedInner.md) | Up to 20 matching posts. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
