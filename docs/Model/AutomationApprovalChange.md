# # AutomationApprovalChange

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action_id** | **string** |  |
**subject** | [**\Zernio\Model\AutomationApprovalChangeSubject**](AutomationApprovalChangeSubject.md) |  |
**type** | **string** |  |
**previous** | [**\Zernio\Model\AutomationApprovalChangePrevious**](AutomationApprovalChangePrevious.md) |  |
**target** | [**\Zernio\Model\AutomationApprovalChangeTarget**](AutomationApprovalChangeTarget.md) |  |
**conditions** | **object[]** | Each condition as it was judged when the request was sent, with its actual value. |
**status** | **string** | &#x60;pending&#x60; until the request is decided. |
**reason** | **string** | Why the change was made, skipped or failed, when known. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
