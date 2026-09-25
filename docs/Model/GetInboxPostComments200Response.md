# # GetInboxPostComments200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** |  | [optional]
**comments** | [**\Zernio\Model\GetInboxPostComments200ResponseCommentsInner[]**](GetInboxPostComments200ResponseCommentsInner.md) |  | [optional]
**post** | [**\Zernio\Model\GetInboxPostComments200ResponsePost**](GetInboxPostComments200ResponsePost.md) |  | [optional]
**comment** | **object** | (Facebook and Instagram only) Present when &#x60;commentId&#x60; was passed: the requested comment itself, in the same shape as an entry in comments[]. comments[] then holds that comment&#39;s replies instead of the post&#39;s top-level comments. | [optional]
**pagination** | [**\Zernio\Model\GetInboxPostComments200ResponsePagination**](GetInboxPostComments200ResponsePagination.md) |  | [optional]
**meta** | [**\Zernio\Model\GetInboxPostComments200ResponseMeta**](GetInboxPostComments200ResponseMeta.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
