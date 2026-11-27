# # UpdateAutomationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**description** | **string** | Sequences and flows. | [optional]
**status** | **string** | &#x60;draft&#x60; only for a sequence or a flow that has not left draft. | [optional]
**trigger** | **object** | The trigger of the automation&#39;s kind. | [optional]
**or_triggers** | **object[]** | Comment to DM. | [optional]
**graph** | **object** | An &#x60;AutomationGraph&#x60; (with &#x60;triggers&#x60;) replaces the whole definition of any kind, sent without &#x60;trigger&#x60;, &#x60;orTriggers&#x60;, &#x60;subjects&#x60;, &#x60;filter&#x60;, &#x60;conditions&#x60;, &#x60;alert&#x60;, &#x60;steps&#x60; or &#x60;limits&#x60;. Comment to DM and flows also take their own graph, as read. | [optional]
**subjects** | [**\Zernio\Model\UpdateAutomationRequestSubjects**](UpdateAutomationRequestSubjects.md) |  | [optional]
**filter** | [**\Zernio\Model\AutomationFactCondition**](AutomationFactCondition.md) |  | [optional]
**conditions** | [**\Zernio\Model\AdRuleConditions**](AdRuleConditions.md) |  | [optional]
**alert** | [**\Zernio\Model\AutomationAlert**](AutomationAlert.md) |  | [optional]
**steps** | [**\Zernio\Model\UpdateAutomationRequestStepsInner[]**](UpdateAutomationRequestStepsInner.md) | The steps the automation&#39;s kind takes. | [optional]
**limits** | **object** | The limits of the automation&#39;s kind. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
