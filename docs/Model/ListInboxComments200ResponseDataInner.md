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
**is_ad** | **bool** | True when this row is an ad (boosted/dark post). &#x60;platform&#x60; is then the placement (facebook &#x3D; the Page dark post / instagram &#x3D; the IG media), &#x60;id&#x60; is &#x60;{adId}:{placement}&#x60;, and the thread is at GET /v1/ads/{adId}/comments?placement&#x3D;{placement}. | [optional]
**ad_id** | **string** | Internal Zernio ad id — only on ad rows. | [optional]
**placement** | **string** | Which side of the ad this row&#39;s comments are on — only on ad rows. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
