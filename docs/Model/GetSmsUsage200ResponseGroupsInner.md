# # GetSmsUsage200ResponseGroupsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | A &#x60;YYYY-MM-DD&#x60; UTC day, one of your numbers, or a profile id. | [optional]
**profile_id** | **string** | With &#x60;groupBy&#x3D;profile&#x60; only: the profile id (same as &#x60;key&#x60;). | [optional]
**external_id** | **string** | With &#x60;groupBy&#x3D;profile&#x60; only: the externalId set on the profile, null when it has none. | [optional]
**sent** | **int** |  | [optional]
**received** | **int** |  | [optional]
**total** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
