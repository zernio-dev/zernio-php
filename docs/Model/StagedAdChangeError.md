# # StagedAdChangeError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | An error code, or &#x60;target_changed&#x60; when the object changed on the ad network after staging. | [optional]
**message** | **string** |  | [optional]
**details** | **array<string,mixed>** | Only on a failed change. What the write reported: the objects a failed create had already made, the fields an update had written (&#x60;appliedFields&#x60;), or the result of each item of a list write that failed in part. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
