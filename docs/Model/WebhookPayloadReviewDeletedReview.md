# # WebhookPayloadReviewDeletedReview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Full review name, matching review.id on the review.new event (\&quot;accounts/123/locations/456/reviews/789\&quot;). |
**platform** | **string** |  |
**rating** | **int** | Star rating the reviewer gave. Null when it was never recorded. |
**created_at** | **\DateTime** | When the reviewer posted the review. Null when it was never recorded. |
**last_seen_at** | **\DateTime** | Last time Zernio saw Google return this review. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
