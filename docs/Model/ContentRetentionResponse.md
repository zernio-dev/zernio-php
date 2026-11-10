# # ContentRetentionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mode** | **string** | &#x60;standard&#x60; stores content. &#x60;none&#x60; is zero content retention: identifiers and metadata only. |
**profile_ids** | **string[]** | Returned by GET. Profiles that use zero content retention on their own while the team is &#x60;standard&#x60;. Change one with &#x60;contentRetention&#x60; on PUT /v1/profiles/{profileId}. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
