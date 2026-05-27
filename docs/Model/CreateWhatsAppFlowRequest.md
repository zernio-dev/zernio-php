# # CreateWhatsAppFlowRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | WhatsApp social account ID |
**name** | **string** | Flow display name |
**categories** | **string[]** | Flow categories |
**clone_flow_id** | **string** | Optional: ID of an existing flow to clone the Flow JSON from | [optional]
**as_version** | **bool** | When cloning, true keeps the clone in cloneFlowId&#39;s version lineage (auto-numbered next version); false/absent creates an independent flow. Ignored without cloneFlowId. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
