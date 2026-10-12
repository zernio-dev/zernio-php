# # WebhookPayloadWorkflowRun

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**test** | **bool** | Always true when present: only a sample sent by POST /v1/webhooks/test with an event carries it. Real deliveries never do. | [optional]
**id** | **string** | Event id, the dedupe key. |
**profiles** | [**\Zernio\Model\WebhookProfilesInner[]**](WebhookProfilesInner.md) | The profiles this event belongs to, each with the externalId you set on it (null when none is set). Present on every event tied to a profile and absent on events that belong to none. Events spanning several profiles (a post published to accounts of different profiles) list each once. Use it to route the event to your tenant without storing Zernio profile ids. | [optional]
**event** | **string** |  |
**timestamp** | **\DateTime** |  |
**workflow** | [**\Zernio\Model\WebhookPayloadWorkflowRunWorkflow**](WebhookPayloadWorkflowRunWorkflow.md) |  |
**execution** | [**\Zernio\Model\WebhookPayloadWorkflowRunExecution**](WebhookPayloadWorkflowRunExecution.md) |  |
**conversation** | [**\Zernio\Model\WebhookPayloadWorkflowRunConversation**](WebhookPayloadWorkflowRunConversation.md) |  |
**contact** | [**\Zernio\Model\WebhookPayloadContactTagContact**](WebhookPayloadContactTagContact.md) |  |
**trigger** | [**\Zernio\Model\WebhookPayloadWorkflowRunTrigger**](WebhookPayloadWorkflowRunTrigger.md) |  |
**error** | **string** | workflow.run.failed only: which node failed and why. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
