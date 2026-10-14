# # GetAd200ResponseDarkPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  | [optional]
**platform_post_id** | **string** | The dark post id, &#x60;{pageId}_{postId}&#x60;. | [optional]
**page_id** | **string** |  | [optional]
**is_dark_post** | **bool** | Always true. | [optional]
**ad_id** | **string** | Always null: Meta exposes no link from a placement dark post to its ad. | [optional]
**account_id** | **string** | Zernio Meta Ads account id for the Page, null when none is connected. | [optional]
**facebook_account_id** | **string** | Zernio Facebook account id of the Page. | [optional]
**platform_ad_account_ids** | **string[]** | Meta ad accounts (&#x60;act_...&#x60;) with synced ads on this Page. | [optional]
**first_seen_at** | **\DateTime** |  | [optional]
**last_activity_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
