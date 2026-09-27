# # CreateGoogleAssetGroupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Unique within the campaign. |
**final_urls** | **string[]** |  |
**final_mobile_urls** | **string[]** |  | [optional]
**path1** | **string** |  | [optional]
**path2** | **string** | Requires path1. | [optional]
**status** | **string** |  | [optional] [default to 'PAUSED']
**assets** | [**\Zernio\Model\GoogleAssetGroupAssetLink[]**](GoogleAssetGroupAssetLink.md) |  | [optional]
**listing_group_filter** | [**\Zernio\Model\GoogleListingGroupTree**](GoogleListingGroupTree.md) |  | [optional]
**validate_only** | **bool** |  | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
