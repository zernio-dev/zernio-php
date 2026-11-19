# # GetEventsOverview200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**today** | [**\Zernio\Model\GetEventsOverview200ResponseToday**](GetEventsOverview200ResponseToday.md) |  | [optional]
**platforms** | [**\Zernio\Model\GetEventsOverview200ResponsePlatformsInner[]**](GetEventsOverview200ResponsePlatformsInner.md) | One entry per forwarding rule of the profiles covered. | [optional]
**sources** | [**\Zernio\Model\GetEventsOverview200ResponseSourcesInner[]**](GetEventsOverview200ResponseSourcesInner.md) | Each source that stored an event in the last 30 days, most recent first. | [optional]
**website** | [**\Zernio\Model\GetEventsOverview200ResponseWebsite**](GetEventsOverview200ResponseWebsite.md) |  | [optional]
**sites** | [**\Zernio\Model\GetEventsOverview200ResponseSitesInner[]**](GetEventsOverview200ResponseSitesInner.md) | Each tracking site of the profiles covered, with its activity. Hit counts are approximate distinct counts without bots. | [optional]
**event_names** | [**\Zernio\Model\GetEventsOverview200ResponseEventNamesInner[]**](GetEventsOverview200ResponseEventNamesInner.md) | Each event name stored in the 30 days before today and where it comes from. When a name comes from both the website tag and a server source, only the server copies count (in this overview, the daily overview and campaign results). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
