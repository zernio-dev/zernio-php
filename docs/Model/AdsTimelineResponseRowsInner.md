# # AdsTimelineResponseRowsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **\DateTime** |  | [optional]
**spend** | **float** | Native currency units (matches /ads/tree convention). | [optional]
**impressions** | **int** |  | [optional]
**reach** | **int** | Reach summed across the account&#39;s ads for this single day. A person seen by two ads the same day counts twice, and reach is de-duplicated per day only: do NOT sum it across days (people reached on multiple days would be double-counted). | [optional]
**clicks** | **int** |  | [optional]
**engagement** | **int** |  | [optional]
**ctr** | **float** | Click-through rate as a percentage (0 to 100). | [optional]
**cpc** | **float** | Cost per click in native currency. | [optional]
**cpm** | **float** | Cost per 1000 impressions in native currency. | [optional]
**conversions** | **float** | Sum of conversion events over the range. Fractional values are normal (attribution splitting + Google modeled conversions). Meta: events matching the campaign optimization goal. Google: tracked conversions. X / LinkedIn: reported website/lead conversions (added 2026-07). | [optional]
**all_conversions** | **float** | All conversions, including actions excluded from the Conversions column (Google metrics.all_conversions). 0 on platforms without the concept. | [optional]
**cost_per_conversion** | **float** |  | [optional]
**actions** | **array<string,float>** | Per-action-type counts merged across all ads on this day. Keys are platform-native action types. | [optional]
**action_values** | **array<string,float>** | Monetary mirror of &#x60;actions&#x60; in native currency. | [optional]
**purchase_value** | **float** | Sum of purchase-type action values on this day, native currency. | [optional]
**roas** | **float** | Derived purchaseValue / spend. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
