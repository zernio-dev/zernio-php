# # MetaSavedAudience

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Meta saved audience id. | [optional]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**approximate_count_lower_bound** | **int** | Meta&#39;s estimated lower bound on reach. | [optional]
**approximate_count_upper_bound** | **int** | Meta&#39;s estimated upper bound on reach. | [optional]
**run_status** | **string** | Meta&#39;s run_status: whether the saved audience is active or deleted. | [optional]
**sentence_lines** | **mixed[]** | Meta&#39;s human-readable targeting summary lines, passed through as Meta returns them. | [optional]
**targeting** | **array<string,mixed>** | The Meta targeting spec saved in the audience, in Meta&#39;s own snake_case shape. Send it as &#x60;rawTargeting&#x60; on &#x60;POST /v1/ads/create&#x60; to target an ad set at this audience. | [optional]
**created_at** | **string** | Meta&#39;s time_created. | [optional]
**updated_at** | **string** | Meta&#39;s time_updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
