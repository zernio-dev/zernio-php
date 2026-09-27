# # GooglePmaxAssetGroup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Stable Google asset group id. Use it in the asset-group endpoints below. |
**resource_name** | **string** | customers/{customerId}/assetGroups/{assetGroupId} |
**campaign_id** | **string** |  |
**name** | **string** |  |
**status** | **string** | Asset-group status on Google. Campaign status independently controls delivery. |
**final_urls** | **string[]** |  |
**final_mobile_urls** | **string[]** |  |
**path1** | **string** |  |
**path2** | **string** |  |
**ad_strength** | **string** | Google ad strength, such as POOR, AVERAGE, GOOD or EXCELLENT. |
**primary_status** | **string** | Why the group is or is not serving, such as ELIGIBLE, PAUSED or NOT_ELIGIBLE. |
**primary_status_reasons** | **string[]** |  |
**assets** | [**\Zernio\Model\GooglePmaxAssetGroupAssetsInner[]**](GooglePmaxAssetGroupAssetsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
