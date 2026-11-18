# # GetEvent200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event** | [**\Zernio\Model\StoredEvent**](StoredEvent.md) |  | [optional]
**deliveries** | [**\Zernio\Model\GetEvent200ResponseDeliveriesInner[]**](GetEvent200ResponseDeliveriesInner.md) |  | [optional]
**touches** | [**\Zernio\Model\GetEvent200ResponseTouchesInner[]**](GetEvent200ResponseTouchesInner.md) | The touches the event is split across, oldest first: website visits (an ad click, search, a tagged link), the first and latest visits HubSpot recorded for a deal, and earlier lead forms or sales. Empty when the event counts whole for its own campaign. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
