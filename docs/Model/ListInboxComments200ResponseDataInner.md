# # ListInboxComments200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**account_username** | **string** |  | [optional]
**content** | **string** |  | [optional]
**picture** | **string** |  | [optional]
**permalink** | **string** |  | [optional]
**created_time** | **\DateTime** |  | [optional]
**comment_count** | **int** |  | [optional]
**like_count** | **int** |  | [optional]
**cid** | **string** | Bluesky content identifier | [optional]
**subreddit** | **string** | Reddit subreddit name | [optional]
**is_ad** | **bool** | True when this row is an ad (boosted/dark post). &#x60;platform&#x60; is then the comment platform (facebook or instagram), &#x60;id&#x60; equals &#x60;adId&#x60;, and the thread is at GET /v1/ads/{adId}/comments. | [optional]
**ad_id** | **string** | Internal Zernio ad id — only on ad rows (same value as &#x60;id&#x60;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
