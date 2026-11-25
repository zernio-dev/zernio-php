# # WebhookPayloadReviewDeletedReview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Google: full review name. Facebook: the review id from review.new. |
**platform** | **string** |  |
**rating** | **int** | Star rating the reviewer gave. Null when it was never recorded. |
**created_at** | **\DateTime** | When the reviewer posted the review. Null when it was never recorded. Always null on Facebook. |
**last_seen_at** | **\DateTime** | Last time Zernio saw Google return this review. On Facebook, when Meta&#39;s removal notice arrived. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
