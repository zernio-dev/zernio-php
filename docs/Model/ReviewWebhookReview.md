# # ReviewWebhookReview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Platform review ID (e.g. \&quot;accounts/123/locations/456/reviews/789\&quot; for Google Business Profile). |
**platform** | **string** | Platform the review originated on (Google Business Profile or Facebook Pages). |
**rating** | **int** | Star rating the reviewer gave. Null for a Facebook recommendation without stars. |
**recommendation_type** | **string** | Facebook only. Whether the reviewer recommended the Page. | [optional]
**text** | **string** | Review text content. May be empty if the reviewer left only a rating. |
**reviewer** | [**\Zernio\Model\ReviewWebhookReviewReviewer**](ReviewWebhookReviewReviewer.md) |  |
**created_at** | **\DateTime** |  |
**has_reply** | **bool** | Whether the connected account has replied to this review. |
**reply** | [**\Zernio\Model\ReviewWebhookReviewReply**](ReviewWebhookReviewReply.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
