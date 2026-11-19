# # GetAllAccountsHealth200ResponseAccountsInnerPublishingRestriction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reason** | **string** |  | [optional]
**message** | **string** | The stored error message of the last failed publish. | [optional]
**since** | **\DateTime** |  | [optional]
**last_failed_at** | **\DateTime** |  | [optional]
**blocks_publish_now** | **bool** | True while POST /v1/posts refuses publish-now posts to this account with 422 &#x60;account_restricted&#x60; (24 hours after the last failure). Scheduled posts are always accepted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
