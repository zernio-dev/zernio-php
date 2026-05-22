# # ListAdAudiences200ResponseAudiencesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**platform_audience_id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**type** | **string** |  | [optional]
**spec** | [**\Zernio\Model\TargetingSpec**](TargetingSpec.md) | Present (and the only meaningful payload) when &#x60;type&#x60; is &#x60;saved_targeting&#x60;. Null for uploaded/derived audience types. | [optional]
**platform** | **string** |  | [optional]
**size** | **int** |  | [optional]
**status** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
