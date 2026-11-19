# # AdsPerformanceResponseAdsInnerMetrics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**spend** | **float** | In the ad&#39;s currency. | [optional]
**impressions** | **int** |  | [optional]
**reach** | **int** | People who saw the ad. De-duplicated over the range on Meta and TikTok when the platform returns it; elsewhere the sum of each day&#39;s reach, which counts a person once per day. | [optional]
**frequency** | **float** | Average times each person saw the ad: &#x60;impressions / reach&#x60;. 0 when the platform reports no reach. | [optional]
**clicks** | **int** |  | [optional]
**ctr** | **float** | Percent. | [optional]
**conversions** | **float** | Results over the range (see AdMetrics.conversions). | [optional]
**cost_per_conversion** | **float** |  | [optional]
**purchase_value** | **float** |  | [optional]
**roas** | **float** |  | [optional]
**conversions_by_type** | **array<string,float>** | &#x60;conversions&#x60; split by what was counted (Meta action_type or Google conversion action name). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
