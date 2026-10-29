# # AdAppliedDefaults

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Sent when &#x60;name&#x60; was omitted: &#x60;Ad &lt;YYYY-MM-DD HH:MM:SS&gt;&#x60; in UTC. | [optional]
**goal** | **string** | Sent when &#x60;goal&#x60; was omitted: the goal Zernio inferred.  - &#x60;lead_generation&#x60;: with a &#x60;leadGenFormId&#x60;. - &#x60;app_promotion&#x60;: when &#x60;promotedObject&#x60; names an app. - &#x60;conversions&#x60;: with &#x60;promotedObject.pixelId&#x60; and &#x60;customEventType&#x60;. - &#x60;traffic&#x60;: when the ad has a link (&#x60;linkUrl&#x60;, a carousel card, &#x60;creatives[].linkUrl&#x60;, &#x60;dynamicCreative.linkUrls&#x60; or a LinkedIn carousel card). - &#x60;engagement&#x60;: otherwise.  Each applies only when the platform offers it, falling back to &#x60;engagement&#x60;, then &#x60;awareness&#x60;, then the platform&#39;s first goal. Never inferred with &#x60;existingCampaignId&#x60;, &#x60;smartPlus&#x60; or the LinkedIn spotlight, follower and jobs formats: those still return 400 without &#x60;goal&#x60;. | [optional]
**budget_type** | **string** | Sent when &#x60;budgetAmount&#x60; came without &#x60;budgetType&#x60;. | [optional]
**end_date** | **string** | Sent when a lifetime budget had no &#x60;endDate&#x60;: 7 days after the start. A daily budget never gets one and runs until paused.  - A start with an offset (or no start) gets a UTC instant. - An offset-less start gets an offset-less end, read in the ad account timezone like the start. - A date-only start gets the date 6 days later, which runs to 23:59:59. | [optional]
**countries** | **string[]** | Sent when the request sent no countries and the ad gets the long-standing United States default. Not sent on attach, Google Performance Max or Demand Gen, or a Google ad group joining &#x60;existingCampaignId&#x60;, which keep their own geo. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
