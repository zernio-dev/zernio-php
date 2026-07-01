# # SyncExternalPosts200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**synced** | [**\Zernio\Model\SyncExternalPosts200ResponseSynced**](SyncExternalPosts200ResponseSynced.md) |  | [optional]
**found** | **bool** | Present only when a locator (&#x60;url&#x60;/&#x60;postId&#x60;) was provided — whether the post was found. | [optional]
**post** | [**\Zernio\Model\ExternalPostSummary**](ExternalPostSummary.md) |  | [optional]
**posts** | [**\Zernio\Model\ExternalPostSummary[]**](ExternalPostSummary.md) | The account&#39;s recent external posts. Present only when no locator was provided. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
