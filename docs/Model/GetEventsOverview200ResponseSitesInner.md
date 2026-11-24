# # GetEventsOverview200ResponseSitesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**site_id** | **string** |  | [optional]
**profile_id** | **string** | The profile the site belongs to. | [optional]
**hits_today** | **int** | Hits today. | [optional]
**last_active_on** | **\DateTime** | The last day in the past 7 with a hit. &#x60;null&#x60; when none. | [optional]
**event_names_last_week** | **string[]** | Each event name people (not bots) sent the site in the last 7 days, sorted. Names the site sends that are neither standard nor in its &#x60;customEvents&#x60; are left out. | [optional]
**totals** | [**\Zernio\Model\GetEventsOverview200ResponseSitesInnerTotals**](GetEventsOverview200ResponseSitesInnerTotals.md) |  | [optional]
**sends_nowhere** | **bool** | Whether no forwarding rule of the profile to an ad platform uses the site (its own events, or server events its visits complete) and its tag fires no ad pixel in the browser. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
