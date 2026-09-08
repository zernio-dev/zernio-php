# # CreateWhatsAppFlowRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | WhatsApp account ID |
**name** | **string** | Flow display name |
**categories** | **string[]** | Flow categories |
**clone_flow_id** | **string** | Optional: ID of an existing flow to clone the Flow JSON from | [optional]
**as_version** | **bool** | When cloning, true keeps the clone in cloneFlowId&#39;s version lineage (auto-numbered next version); false/absent creates an independent flow. Ignored without cloneFlowId. | [optional]
**endpoint_uri** | **string** | HTTPS-only data exchange endpoint for the flow. Settable only while the flow is in DRAFT, and the flow&#39;s uploaded Flow JSON must declare data_api_version \&quot;3.0\&quot; for the endpoint to be used. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
