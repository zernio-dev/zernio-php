# # EventAutomationCheck

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**automation_id** | **string** |  |
**checked_at** | **\DateTime** |  |
**outcome** | **string** | &#x60;paused&#x60;: the team used its free automation runs with no payment method on file, so the check did not run. &#x60;error&#x60; says why. |
**evaluated** | **int** |  |
**event** | **string** |  |
**event_id** | **string** |  |
**subject** | [**\Zernio\Model\EventAutomationCheckSubject**](EventAutomationCheckSubject.md) |  |
**facts** | **array<string,mixed>** | The event&#39;s facts as the trigger read them, keyed by fact name. Recorded only for an automation with no steps (one that only records each event).  Null for an automation with steps, whose filter results show the facts it compared, and on checks recorded before facts were kept. Content facts are null for a team that keeps no content. |
**filter** | [**\Zernio\Model\AutomationFactResult[]**](AutomationFactResult.md) |  |
**actions** | [**\Zernio\Model\AutomationRunResult[]**](AutomationRunResult.md) |  |
**error** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
