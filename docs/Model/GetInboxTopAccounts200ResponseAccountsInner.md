# # GetInboxTopAccounts200ResponseAccountsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**display_name** | **string** | (disconnected) when the SocialAccount no longer exists | [optional]
**username** | **string** |  | [optional]
**received** | **int** |  | [optional]
**sent** | **int** |  | [optional]
**total** | **int** |  | [optional]
**conversations** | **int** |  | [optional]
**median_response_seconds** | **int** |  | [optional]
**replied_count** | **int** | Distinguishes &#39;instant replies&#39; from &#39;no replies at all&#39; so a zero medianResponseSeconds with repliedCount&#x3D;0 renders as &#39;—&#39; instead of &#39;0s&#39; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
