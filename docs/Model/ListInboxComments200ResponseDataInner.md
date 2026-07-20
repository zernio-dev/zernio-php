# # ListInboxComments200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**account_username** | **string** |  | [optional]
**content** | **string** | The post text/caption. On ad rows (isAd: true) this is the AD NAME, not the underlying post&#39;s caption — the creative text isn&#39;t exposed here. | [optional]
**picture** | **string** | Post media thumbnail. On ad rows this is the ad creative thumbnail. | [optional]
**permalink** | **string** | Public URL of the post. On ad rows: the Facebook dark-post URL (facebook placement) or the IG media permalink (instagram placement); may be null when unknown. | [optional]
**created_time** | **\DateTime** |  | [optional]
**comment_count** | **int** |  | [optional]
**like_count** | **int** | Not fetched for ad rows (always 0 there). | [optional]
**cid** | **string** | Bluesky content identifier | [optional]
**subreddit** | **string** | Reddit subreddit name | [optional]
**is_ad** | **bool** | True when this row is an ad (boosted/dark post). &#x60;platform&#x60; is then the placement (facebook &#x3D; the Page dark post / instagram &#x3D; the IG media), &#x60;id&#x60; is &#x60;{adId}:{placement}&#x60;, and the thread is at GET /v1/ads/{adId}/comments?placement&#x3D;{placement}. | [optional]
**ad_id** | **string** | Internal Zernio ad id — only on ad rows. | [optional]
**placement** | **string** | Which side of the ad this row&#39;s comments are on — only on ad rows. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
