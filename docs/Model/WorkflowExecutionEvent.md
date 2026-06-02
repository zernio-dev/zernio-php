# # WorkflowExecutionEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** |  | [optional]
**status** | **string** |  | [optional]
**node_id** | **string** | Present on &#x60;node_*&#x60; events | [optional]
**node_type** | **string** | Present on &#x60;node_*&#x60; events | [optional]
**source_handle** | **string** | The edge handle the executor followed out of this node (see &#x60;WorkflowEdge.sourceHandle&#x60;) | [optional]
**duration_ms** | **int** | Node run time; present on &#x60;node_completed&#x60; and &#x60;node_failed&#x60; | [optional]
**error_message** | **string** | Failure detail; present on &#x60;node_failed&#x60; and &#x60;execution_exited&#x60; | [optional]
**meta** | **array<string,mixed>** | Per-node-type payload. Shape varies — see WorkflowNode &#x60;type&#x60;. Examples:   &#x60;send_message&#x60; → &#x60;{ messageType, text, recipient }&#x60;,   &#x60;webhook&#x60; → &#x60;{ url, method, statusCode, responseTimeMs, responsePreview }&#x60;,   &#x60;ai&#x60; → &#x60;{ model, provider, inputTokens, outputTokens, responsePreview }&#x60;,   &#x60;condition&#x60; → &#x60;{ matchedHandle, rulesEvaluated }&#x60;,   &#x60;a_b_split&#x60; → &#x60;{ percentage, chosen }&#x60;. | [optional]
**at** | **\DateTime** | Event timestamp (UTC) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
