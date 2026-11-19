# # GetEvent200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event** | [**\Zernio\Model\StoredEvent**](StoredEvent.md) |  | [optional]
**deliveries** | [**\Zernio\Model\GetEvent200ResponseDeliveriesInner[]**](GetEvent200ResponseDeliveriesInner.md) |  | [optional]
**touches** | [**\Zernio\Model\GetEvent200ResponseTouchesInner[]**](GetEvent200ResponseTouchesInner.md) | The touches the event is split across, oldest first: website visits (an ad click, search, a tagged link), the first and latest visits HubSpot recorded for a deal, earlier lead forms or sales, and a Shopify buyer&#39;s post-purchase survey answer. Empty when the event counts whole for its own campaign. | [optional]
**after** | [**\Zernio\Model\GetEvent200ResponseAfterInner[]**](GetEvent200ResponseAfterInner.md) | The same person&#39;s events in the 180 days after this one, oldest first, up to 50, like a Stripe payment after a sign-up. People match on email, phone, external id or visitor id. Copies of this event, and website copies of a sale a server reported, are left out. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
