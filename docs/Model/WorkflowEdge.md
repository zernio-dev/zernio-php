# # WorkflowEdge

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**source** | **string** | Source node id |
**target** | **string** | Target node id |
**source_handle** | **string** | Selects a branch output of a multi-output node. Null (or omitted) &#x3D; the node&#39;s single/default output. Known handles per node type:    - **condition** — a rule&#39;s &#x60;id&#x60;, or &#x60;&#39;default&#39;&#x60; (no rule matched)   - **wait_for_reply** — &#x60;&#39;reply&#39;&#x60; (contact replied) | &#x60;&#39;timeout&#39;&#x60; (no reply in window)   - **webhook** — &#x60;&#39;success&#39;&#x60; (2xx) | &#x60;&#39;error&#39;&#x60; (non-2xx / fetch failed)   - **ai** — &#x60;&#39;success&#39;&#x60; (text/JSON response) | &#x60;&#39;tool:&lt;toolName&gt;&#39;&#x60; (model invoked     that tool) | &#x60;&#39;error&#39;&#x60; (upstream failure / non-JSON in JSON mode)   - **start_call** — &#x60;&#39;success&#39;&#x60; | &#x60;&#39;permission_required&#39;&#x60; | &#x60;&#39;failed&#39;&#x60;   - **a_b_split** — &#x60;&#39;a&#39;&#x60; | &#x60;&#39;b&#39;&#x60;   - **enroll_sequence** — &#x60;&#39;success&#39;&#x60; | &#x60;&#39;error&#39;&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
