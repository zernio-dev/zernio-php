# # ValidateMedia200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**valid** | **bool** |  | [optional]
**url** | **string** |  | [optional]
**error** | **string** | Error message if valid is false | [optional]
**content_type** | **string** |  | [optional]
**size** | **int** | File size in bytes | [optional]
**size_formatted** | **string** |  | [optional]
**type** | **string** |  | [optional]
**platform_limits** | [**array<string,\Zernio\Model\ValidateMedia200ResponsePlatformLimitsValue>**](ValidateMedia200ResponsePlatformLimitsValue.md) | Per-platform size limit comparison (only present when size and type are known) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
