# # LinkedInAggregateAnalyticsTotalResponseAnalytics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**impressions** | **int** | Total impressions across all posts | [optional]
**reach** | **int** | Unique members reached across all posts | [optional]
**reactions** | **int** | Total reactions across all posts | [optional]
**comments** | **int** | Total comments across all posts | [optional]
**shares** | **int** | Total reshares across all posts | [optional]
**saves** | **int** | Total times posts were saved (personal accounts only) | [optional]
**sends** | **int** | Total times posts were sent via LinkedIn messaging (personal accounts only) | [optional]
**engagement_rate** | **float** | Overall engagement rate, as a percentage rounded to 2 decimals: (reactions + comments + shares + saves + sends) / impressions * 100.  Clicks are not counted and there is no fallback denominator, so this is 0 whenever impressions is 0. NOT the same formula as PostAnalytics.engagementRate on GET /v1/analytics. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
