# # GetAdsTimeline200ResponseRowsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **\DateTime** |  | [optional]
**spend** | **float** | Native currency units (matches /ads/tree convention). | [optional]
**impressions** | **int** |  | [optional]
**reach** | **int** |  | [optional]
**clicks** | **int** |  | [optional]
**engagement** | **int** |  | [optional]
**ctr** | **float** | Click-through rate as a percentage (0–100). | [optional]
**cpc** | **float** | Cost per click in native currency. | [optional]
**cpm** | **float** | Cost per 1000 impressions in native currency. | [optional]
**conversions** | **int** | Sum of conversion events matching the campaign optimization goal. Meta-only at time of writing. | [optional]
**cost_per_conversion** | **float** |  | [optional]
**actions** | **array<string,float>** | Per-action-type counts merged across all ads on this day. Keys are platform-native action types. | [optional]
**action_values** | **array<string,float>** | Monetary mirror of &#x60;actions&#x60; in native currency. | [optional]
**purchase_value** | **float** | Sum of purchase-type action values on this day, native currency. | [optional]
**roas** | **float** | Derived purchaseValue / spend. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
