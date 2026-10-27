# # GetAd200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad** | [**\Zernio\Model\Ad**](Ad.md) |  | [optional]
**cached_at** | **\DateTime** | Google RSA details cache timestamp. | [optional]
**stale** | **bool** | Whether Google RSA details use the last successful cached response. | [optional]
**status_read_at** | **\DateTime** | With &#x60;live&#x3D;true&#x60;, when the switches were read from the platform; null when the live read failed and the stored values were returned. Always set on an unsynced Meta ad read with &#x60;accountId&#x60;, the time of that read. | [optional]
**dark_post** | [**\Zernio\Model\GetAd200ResponseDarkPost**](GetAd200ResponseDarkPost.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
