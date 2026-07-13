# # ListInboxReviews200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**account_username** | **string** |  | [optional]
**reviewer** | [**\Zernio\Model\ListInboxReviews200ResponseDataInnerReviewer**](ListInboxReviews200ResponseDataInnerReviewer.md) |  | [optional]
**rating** | **int** |  | [optional]
**text** | **string** |  | [optional]
**created** | **\DateTime** |  | [optional]
**has_reply** | **bool** |  | [optional]
**has_photos** | **bool** | Whether the review has at least one photo. Google Business only; always false for other platforms. | [optional]
**photo_count** | **int** | Number of photos attached to the review (photos only; videos are not counted). Google Business only; 0 for other platforms. | [optional]
**reply** | [**\Zernio\Model\ListInboxReviews200ResponseDataInnerReply**](ListInboxReviews200ResponseDataInnerReply.md) |  | [optional]
**review_url** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
