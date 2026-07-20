# # ListInboxReviews200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Review identifier. For Google Business this is the full review resource name (accounts/{accountId}/locations/{locationId}/reviews/{reviewId}), so it also encodes the location. | [optional]
**platform** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**account_username** | **string** |  | [optional]
**location_id** | **string** | Bare GBP location id the review belongs to. Google Business only; absent for other platforms. | [optional]
**location_name** | **string** | Human-readable GBP location display name. Google Business only; absent for other platforms. | [optional]
**reviewer** | [**\Zernio\Model\ListInboxReviews200ResponseDataInnerReviewer**](ListInboxReviews200ResponseDataInnerReviewer.md) |  | [optional]
**rating** | **int** |  | [optional]
**text** | **string** |  | [optional]
**created** | **\DateTime** |  | [optional]
**has_reply** | **bool** |  | [optional]
**has_photos** | **bool** | Whether the review has at least one photo. Google Business only; always false for other platforms. | [optional]
**photo_count** | **int** | Number of photos attached to the review (photos only; videos are not counted). Google Business only; 0 for other platforms. | [optional]
**photos** | [**\Zernio\Model\GetGoogleBusinessReviews200ResponseReviewsInnerPhotosInner[]**](GetGoogleBusinessReviews200ResponseReviewsInnerPhotosInner.md) | Photos attached to the review. Google Business only; always an empty array for other platforms. | [optional]
**reply** | [**\Zernio\Model\ListInboxReviews200ResponseDataInnerReply**](ListInboxReviews200ResponseDataInnerReply.md) |  | [optional]
**review_url** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
