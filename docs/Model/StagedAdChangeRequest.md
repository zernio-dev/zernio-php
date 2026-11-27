# # StagedAdChangeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**operation** | **string** | The operationId of the staged write. Every write in this list accepts &#x60;stage: true&#x60; in its body, or &#x60;?stage&#x3D;true&#x60; when it has no body. |
**method** | **string** |  |
**path** | **string** | The path of the write, for example /v1/ads/keywords. |
**params** | **array<string,string>** | The path values of the staged request, by the names in &#x60;path&#x60;. | [optional]
**query** | [**array<string,\Zernio\Model\StagedAdChangeRequestQueryValue>**](StagedAdChangeRequestQueryValue.md) | The query values of the staged request, without &#x60;stage&#x60;. A key that was sent more than once holds every value, in the order sent. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
