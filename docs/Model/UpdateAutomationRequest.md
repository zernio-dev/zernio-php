# # UpdateAutomationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**status** | **string** |  | [optional]
**trigger** | [**\Zernio\Model\AutomationTrigger**](AutomationTrigger.md) |  | [optional]
**subjects** | [**\Zernio\Model\UpdateAutomationRequestSubjects**](UpdateAutomationRequestSubjects.md) |  | [optional]
**filter** | [**\Zernio\Model\AutomationFactCondition**](AutomationFactCondition.md) |  | [optional]
**conditions** | [**\Zernio\Model\AdRuleConditions**](AdRuleConditions.md) |  | [optional]
**alert** | [**\Zernio\Model\AutomationAlert**](AutomationAlert.md) |  | [optional]
**steps** | [**\Zernio\Model\UpdateAutomationRequestStepsInner[]**](UpdateAutomationRequestStepsInner.md) | The steps the automation&#39;s kind takes. | [optional]
**limits** | [**\Zernio\Model\UpdateAutomationRequestLimits**](UpdateAutomationRequestLimits.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
