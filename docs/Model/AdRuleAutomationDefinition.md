# # AdRuleAutomationDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**status** | **string** | A new ad rule stays paused unless &#x60;active&#x60;. | [optional] [default to 'paused']
**trigger** | [**\Zernio\Model\AutomationScheduleTrigger**](AutomationScheduleTrigger.md) |  |
**subjects** | [**\Zernio\Model\AutomationSubjects**](AutomationSubjects.md) |  |
**conditions** | [**\Zernio\Model\AdRuleConditions**](AdRuleConditions.md) |  |
**alert** | [**\Zernio\Model\AutomationAlert**](AutomationAlert.md) |  | [optional]
**steps** | [**\Zernio\Model\AutomationStep[]**](AutomationStep.md) |  |
**limits** | [**\Zernio\Model\AutomationLimits**](AutomationLimits.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
