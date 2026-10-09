# # BrowseAdTargeting200ResponseNodesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**node_id** | **string** | Identifies the node within this response. Not a Meta id: never put it in a targeting spec. |
**parent_node_id** | **string** | nodeId of the parent organizational node, null for a root. |
**id** | **string** | Meta targeting id, null on organizational nodes. |
**name** | **string** |  |
**type** | **string** | Meta&#39;s targeting spec key (interests, behaviors, industries, life_events, education_statuses, relationship_statuses, family_statuses, income, ...). Null on most organizational nodes. |
**path** | **string[]** | Labels of the ancestors, root first. Does not include the node itself. |
**selectable** | **bool** | True when the node can be targeted (it has a Meta id). |
**description** | **string** | Meta&#39;s description, when it has one. | [optional]
**audience_size_lower_bound** | **int** | Meta&#39;s estimated audience size, lower bound, when reported. | [optional]
**audience_size_upper_bound** | **int** | Meta&#39;s estimated audience size, upper bound, when reported. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
