# # ListAdAudiences200ResponseAudiencesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The Zernio audience id. Pass this as audienceId on GET /v1/ads/audiences/{audienceId} and the companies/users upload endpoints. Null when the audience was not created through Zernio. | [optional]
**account_id** | **string** | Account the audience was created against. Returned for saved_targeting items. | [optional]
**platform_audience_id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**type** | **string** |  | [optional]
**spec** | [**\Zernio\Model\TargetingSpec**](TargetingSpec.md) |  | [optional]
**platform** | **string** |  | [optional]
**size** | **int** |  | [optional]
**status** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
