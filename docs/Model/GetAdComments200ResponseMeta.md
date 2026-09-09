# # GetAdComments200ResponseMeta

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** | Platform of the comments. |
**placement** | **string** | The placement these comments are for, useful when you didn&#39;t pass ?placement&#x3D; and want to know which one you got. | [optional]
**ad_id** | **string** | Internal Zernio ad ID. |
**platform_ad_id** | **string** | Platform ad ID. | [optional]
**effective_story_id** | **string** | Underlying post ID the comments belong to. effective_object_story_id for the Facebook side, effective_instagram_media_id for the Instagram side. | [optional]
**tiktok_item_id** | **string** | TikTok-only video item ID. Null when the ad and comments do not expose it. | [optional]
**since** | **\DateTime** | TikTok-only resolved start date. | [optional]
**until** | **\DateTime** | TikTok-only resolved end date. | [optional]
**facebook_account_id** | **string** | Facebook-only. The connected Facebook Page SocialAccount these comments were read through. Pass it as &#x60;accountId&#x60; (with &#x60;effectiveStoryId&#x60; as the postId) to /v1/inbox/comments to reply/hide/delete. Null when no connected Page was used (then moderation isn&#39;t possible). | [optional]
**instagram_user_id** | **string** | Instagram-only. The Instagram-scoped business ID that owns the boosted media (creative.instagram_user_id). | [optional]
**instagram_permalink** | **string** | Instagram-only. Public permalink of the boosted IG post (creative.instagram_permalink_url). | [optional]
**instagram_account_id** | **string** | Instagram-only. The connected Instagram SocialAccount these comments were read through. Pass it as &#x60;accountId&#x60; (with &#x60;effectiveStoryId&#x60; as the postId) to /v1/inbox/comments to reply/hide/delete. | [optional]
**account_id** | **string** | Account ID (ads SocialAccount). |
**last_updated** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
