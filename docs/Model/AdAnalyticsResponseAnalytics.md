# # AdAnalyticsResponseAnalytics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**summary** | [**\Zernio\Model\AdMetrics**](AdMetrics.md) |  | [optional]
**daily** | [**\Zernio\Model\CampaignAnalyticsResponseAnalyticsDailyInner[]**](CampaignAnalyticsResponseAnalyticsDailyInner.md) |  | [optional]
**breakdowns** | **array<string,object[]>** | Requested demographic breakdowns, keyed by dimension. Fetched live from the platform per request and never stored, so these rows can carry fields the stored &#x60;summary&#x60; and &#x60;daily&#x60; series do not.  LinkedIn rows carry &#x60;value&#x60; (the pivot URN), &#x60;name&#x60; (resolved label where LinkedIn provides one), the usual spend/impressions/clicks/ctr/cpc/cpm/engagement figures, plus two reach fields:  - &#x60;reach&#x60;: the segment&#39;s &#x60;approximateMemberReach&#x60;. - &#x60;audiencePenetration&#x60;: LinkedIn&#39;s own ratio of members reached to the size of   the targeted audience, passed through verbatim.  LinkedIn withholds both below its audience privacy threshold, in which case the keys are ABSENT rather than 0. &#x60;audiencePenetration&#x60; is available here only: it is not part of the stored metrics series. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
