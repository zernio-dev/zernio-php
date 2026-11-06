# # AutomationApproval

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**automation_id** | **string** |  |
**check_id** | **string** | The check that found the matches and sent the request. |
**status** | **string** | &#x60;cancelled&#x60; when the automation stopped asking for approval before anyone decided. |
**to** | **string[]** | The emails the request was sent to. |
**expires_at** | **\DateTime** | After this the request can no longer be decided and its changes are skipped. |
**created_at** | **\DateTime** |  |
**decided_by** | [**\Zernio\Model\AutomationApprovalDecidedBy**](AutomationApprovalDecidedBy.md) |  |
**decided_at** | **\DateTime** |  |
**can_decide** | **bool** | True when the request is pending and you are one of the approvers the automation names now. |
**changes** | [**\Zernio\Model\AutomationApprovalChange[]**](AutomationApprovalChange.md) | The changes the request holds. Notifications are not listed. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
