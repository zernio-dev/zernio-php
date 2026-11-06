# # MetaRecoveredWritesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** | The Meta object id this response uses. |
**adopted** | **bool** | Always true when present. Zernio found this object by name under its parent and reused it instead of creating it again. | [optional]
**reposted_after** | **string** | Zernio sent the create again after Meta answered a 5xx and the read-back found no such object. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
