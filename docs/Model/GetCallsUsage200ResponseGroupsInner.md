# # GetCallsUsage200ResponseGroupsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | The group key: a &#x60;YYYY-MM-DD&#x60; UTC day, one of your numbers, a channel, or a profile id. | [optional]
**profile_id** | **string** | With &#x60;groupBy&#x3D;profile&#x60; only: the profile id (same as &#x60;key&#x60;). | [optional]
**external_id** | **string** | With &#x60;groupBy&#x3D;profile&#x60; only: the externalId set on the profile, null when it has none. | [optional]
**calls** | **int** |  | [optional]
**answered** | **int** |  | [optional]
**minutes** | **float** |  | [optional]
**billable_usd** | **float** |  | [optional]
**meta_usd** | **float** |  | [optional]
**branded_calls** | **int** |  | [optional]
**branded_call_usd** | **float** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
