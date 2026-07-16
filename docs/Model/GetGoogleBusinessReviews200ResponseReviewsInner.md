# # GetGoogleBusinessReviews200ResponseReviewsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Review ID | [optional]
**name** | **string** | Full resource name | [optional]
**reviewer** | [**\Zernio\Model\GetGoogleBusinessReviews200ResponseReviewsInnerReviewer**](GetGoogleBusinessReviews200ResponseReviewsInnerReviewer.md) |  | [optional]
**rating** | **int** | Numeric star rating | [optional]
**star_rating** | **string** | Google&#39;s string rating | [optional]
**comment** | **string** | Review text | [optional]
**create_time** | **\DateTime** |  | [optional]
**update_time** | **\DateTime** |  | [optional]
**review_reply** | [**\Zernio\Model\GetGoogleBusinessReviews200ResponseReviewsInnerReviewReply**](GetGoogleBusinessReviews200ResponseReviewsInnerReviewReply.md) |  | [optional]
**photo_count** | **int** | Number of photos attached to the review (photos only, videos are not counted) | [optional]
**photos** | [**\Zernio\Model\GetGoogleBusinessReviews200ResponseReviewsInnerPhotosInner[]**](GetGoogleBusinessReviews200ResponseReviewsInnerPhotosInner.md) | Photos attached to the review by the reviewer | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
