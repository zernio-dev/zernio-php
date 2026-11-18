# # GetEventsOverviewDaily200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**period** | **string** |  | [optional]
**totals** | [**\Zernio\Model\GetEventsOverviewDaily200ResponseTotals**](GetEventsOverviewDaily200ResponseTotals.md) |  | [optional]
**days** | [**\Zernio\Model\GetEventsOverviewDaily200ResponseDaysInner[]**](GetEventsOverviewDaily200ResponseDaysInner.md) | Every day of the period, oldest first, zero where nothing happened. | [optional]
**event_names** | **string[]** | The event names stored in the period, most events first. | [optional]
**platforms** | [**\Zernio\Model\GetEventsOverviewDaily200ResponsePlatformsInner[]**](GetEventsOverviewDaily200ResponsePlatformsInner.md) | Each platform events were sent to in the period, most sends first. | [optional]
**pixel_missed** | [**\Zernio\Model\GetEventsOverviewDaily200ResponsePixelMissedInner[]**](GetEventsOverviewDaily200ResponsePixelMissedInner.md) | For each platform sent to in the period, the website conversions of people who allowed ad cookies (bots left out) and how many its browser pixel missed, which Zernio sent from its server. Most missed first; &#x60;null&#x60; without a tracked website in scope. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
