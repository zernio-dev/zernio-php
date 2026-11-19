# # PostRetryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** |  | [optional]
**error** | **string** | Present on a 207 only: summary of why the retry did not fully succeed. | [optional]
**platform_results** | [**\Zernio\Model\PostRetryPlatformResult[]**](PostRetryPlatformResult.md) | One entry per platform of the post, in &#x60;post.platforms[]&#x60; order. | [optional]
**post** | [**\Zernio\Model\Post**](Post.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
