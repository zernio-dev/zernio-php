# # CreateWorkflowRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** |  |
**account_id** | **string** |  |
**platform** | **string** |  | [optional] [default to 'whatsapp']
**name** | **string** |  |
**description** | **string** |  | [optional]
**nodes** | [**\Zernio\Model\WorkflowNode[]**](WorkflowNode.md) |  | [optional]
**edges** | [**\Zernio\Model\WorkflowEdge[]**](WorkflowEdge.md) |  | [optional]
**entry_node_id** | **string** | The trigger node id; derived from the single trigger node if omitted | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
