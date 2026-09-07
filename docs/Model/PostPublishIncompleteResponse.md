# # PostPublishIncompleteResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**post** | [**\Zernio\Model\Post**](Post.md) |  | [optional]
**message** | **string** | Human-readable summary of the publish outcome. | [optional]
**error** | **string** | Present when no platform published. Absent on a partial success. Informational only; the per-platform detail is in &#x60;platformResults&#x60; and in &#x60;post.platforms[]&#x60;. | [optional]
**platform_results** | [**\Zernio\Model\PostPublishIncompleteResponsePlatformResultsInner[]**](PostPublishIncompleteResponsePlatformResultsInner.md) | Per-platform outcome of the publish attempt. Omitted when the attempt aborted before producing per-platform results (for example the post was already being processed); read &#x60;post.platforms[]&#x60; in that case. | [optional]
**warnings** | **string[]** | Advisory notices about the post that was still created. Absent when there are none. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
