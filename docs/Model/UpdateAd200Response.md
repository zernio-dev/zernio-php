# # UpdateAd200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**validate_only** | **bool** | Present and true when the request was sent with validateOnly: nothing was changed. The other fields of a real update are then absent. | [optional]
**results** | [**\Zernio\Model\AdWriteValidationResult[]**](AdWriteValidationResult.md) | validateOnly only: one entry, the object Meta validated. | [optional]
**ad** | [**\Zernio\Model\Ad**](Ad.md) |  | [optional]
**message** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
