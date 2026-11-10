# # EmailSignature

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**html** | **string** |  | [optional]
**text** | **string** | Appended to plain-text bodies. When &#x60;null&#x60;, the html stripped to text is used. | [optional]
**account_id** | **string** | &#x60;null&#x60; for a workspace-wide signature. | [optional]
**default_for** | **string[]** | Sending addresses this signature is the default for. Each address has one default per scope; an account signature wins over a workspace one. | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
