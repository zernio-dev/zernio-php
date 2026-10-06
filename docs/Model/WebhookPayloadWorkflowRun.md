# # WebhookPayloadWorkflowRun

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Event id, the dedupe key. |
**event** | **string** |  |
**timestamp** | **\DateTime** |  |
**workflow** | [**\Zernio\Model\WebhookPayloadWorkflowRunWorkflow**](WebhookPayloadWorkflowRunWorkflow.md) |  |
**execution** | [**\Zernio\Model\WebhookPayloadWorkflowRunExecution**](WebhookPayloadWorkflowRunExecution.md) |  |
**conversation** | [**\Zernio\Model\WebhookPayloadWorkflowRunConversation**](WebhookPayloadWorkflowRunConversation.md) |  |
**contact** | [**\Zernio\Model\WebhookPayloadContactTagContact**](WebhookPayloadContactTagContact.md) |  |
**trigger** | [**\Zernio\Model\WebhookPayloadWorkflowRunTrigger**](WebhookPayloadWorkflowRunTrigger.md) |  |
**error** | **string** | workflow.run.failed only: which node failed and why. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
