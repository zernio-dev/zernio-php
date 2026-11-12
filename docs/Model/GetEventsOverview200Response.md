# # GetEventsOverview200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**today** | [**\Zernio\Model\GetEventsOverview200ResponseToday**](GetEventsOverview200ResponseToday.md) |  | [optional]
**platforms** | [**\Zernio\Model\GetEventsOverview200ResponsePlatformsInner[]**](GetEventsOverview200ResponsePlatformsInner.md) | One entry per forwarding rule of the profile. | [optional]
**sources** | [**\Zernio\Model\GetEventsOverview200ResponseSourcesInner[]**](GetEventsOverview200ResponseSourcesInner.md) | Each source that stored an event in the last 30 days, most recent first. | [optional]
**website** | [**\Zernio\Model\GetEventsOverview200ResponseWebsite**](GetEventsOverview200ResponseWebsite.md) |  | [optional]
**sites** | [**\Zernio\Model\GetEventsOverview200ResponseSitesInner[]**](GetEventsOverview200ResponseSitesInner.md) | Each tracking site of the profile with its activity. Hit counts are approximate distinct counts without bots. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
