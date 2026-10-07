# # GetAdAccountLiveEntities200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  | [optional]
**ad_account_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**currency** | **string** | ISO 4217 code every budget and bid amount is expressed in. | [optional]
**read_at** | **\DateTime** | When the platform was read. | [optional]
**campaigns** | [**\Zernio\Model\GetAdAccountLiveEntities200ResponseCampaignsInner[]**](GetAdAccountLiveEntities200ResponseCampaignsInner.md) | Absent when &#x60;level&#x3D;adSet&#x60;. | [optional]
**ad_sets** | [**\Zernio\Model\GetAdAccountLiveEntities200ResponseAdSetsInner[]**](GetAdAccountLiveEntities200ResponseAdSetsInner.md) | Absent when &#x60;level&#x3D;campaign&#x60;. | [optional]
**paging** | [**\Zernio\Model\GetAdAccountLiveEntities200ResponsePaging**](GetAdAccountLiveEntities200ResponsePaging.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
