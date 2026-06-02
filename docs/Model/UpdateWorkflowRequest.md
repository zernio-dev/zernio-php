# # UpdateWorkflowRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**nodes** | [**\Zernio\Model\WorkflowNode[]**](WorkflowNode.md) |  | [optional]
**edges** | [**\Zernio\Model\WorkflowEdge[]**](WorkflowEdge.md) |  | [optional]
**entry_node_id** | **string** |  | [optional]
**account_id** | **string** | Reassign the workflow to a different &#x60;SocialAccount&#x60;. &#x60;platform&#x60; and &#x60;profileId&#x60; are derived server-side from the new account (the client never sends them directly). The account must belong to the caller&#39;s workspace and be on a workflow-supported platform (whatsapp, instagram, facebook, telegram, twitter, bluesky, reddit). Changing this triggers a graph revalidation against the new platform. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
