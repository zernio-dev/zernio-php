# # GetEvent200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event** | [**\Zernio\Model\StoredEvent**](StoredEvent.md) |  | [optional]
**deliveries** | [**\Zernio\Model\GetEvent200ResponseDeliveriesInner[]**](GetEvent200ResponseDeliveriesInner.md) |  | [optional]
**touches** | [**\Zernio\Model\GetEvent200ResponseTouchesInner[]**](GetEvent200ResponseTouchesInner.md) | The touches of the person before the event that its credit is split across, oldest first: website visits from somewhere (an ad click, search, a tagged link) and earlier lead forms or sales. Empty when the event counts whole for its own campaign under every model. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
