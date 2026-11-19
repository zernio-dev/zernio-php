# # AdMetricRow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_id** | **string** |  |
**name** | **string** |  |
**platform** | **string** |  |
**status** | **string** |  |
**currency** | **string** |  |
**summary** | [**\Zernio\Model\AdMetricRowSummary**](AdMetricRowSummary.md) |  |
**daily** | [**\Zernio\Model\AdMetricRowDailyInner[]**](AdMetricRowDailyInner.md) | With granularity&#x3D;day: one point per day. | [optional]
**breakdowns** | **array<string,mixed>** | With breakdowns: read live from the platform. | [optional]
**unsupported_breakdowns** | **string[]** |  | [optional]
**breakdown_hints** | **array<string,string>** |  | [optional]
**breakdowns_range** | **mixed** |  | [optional]
**breakdown_errors** | **mixed[]** |  | [optional]
**breakdown_dropped_metrics** | **array<string,string[]>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
