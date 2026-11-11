# # GetEventsOverview200ResponseWebsite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**steps** | [**\Zernio\Model\GetEventsOverview200ResponseWebsiteStepsInner[]**](GetEventsOverview200ResponseWebsiteStepsInner.md) | The funnel: page views, product views, add to cart, checkouts and purchases today. | [optional]
**recovered** | **int** | Purchases with ad consent for which no browser pixel fired, so only the server reported them. | [optional]
**conversions** | **int** | Purchases today. | [optional]
**consented** | **int** | Page views with ad storage consent. | [optional]
**visits** | **int** | Page views today. | [optional]
**bots** | **int** | Page views from bots. | [optional]
**server_platforms** | **string[]** | Platforms of the forwarding rules that receive website events. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
