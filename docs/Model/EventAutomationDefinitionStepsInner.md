# # EventAutomationDefinitionStepsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**type** | **string** |  |
**to** | [**\Zernio\Model\AutomationNotifyStepToInner[]**](AutomationNotifyStepToInner.md) | Up to 5 in an ad rule. | [optional]
**text** | **string** |  |
**workflow_id** | **string** |  |
**sequence_id** | **string** |  |
**url** | **string** |  |
**method** | **string** |  | [optional] [default to 'POST']
**headers** | **array<string,string>** |  | [optional]
**body** | **string** | May read &#x60;{{event.&lt;fact&gt;}}&#x60;. | [optional]
**action** | **string** |  |
**tag** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
