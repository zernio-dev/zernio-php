# # GetAdMedia200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_id** | **string** |  | [optional]
**platform** | **string** | &#39;facebook&#39; or &#39;instagram&#39;. Only Meta is supported for now. | [optional]
**synced** | **bool** | False when the ad was read live from Meta because it is not in Zernio&#39;s store (request made with &#x60;accountId&#x60;). | [optional]
**media** | [**\Zernio\Model\GetAdMedia200ResponseMediaInner[]**](GetAdMedia200ResponseMediaInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
