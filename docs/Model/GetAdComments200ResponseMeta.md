# # GetAdComments200ResponseMeta

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  |
**ad_id** | **string** | Internal Zernio ad ID. |
**platform_ad_id** | **string** | Meta ad ID. |
**effective_story_id** | **string** | Underlying post ID the comments belong to. effective_object_story_id for Facebook, effective_instagram_media_id for Instagram. |
**instagram_user_id** | **string** | Instagram-only. The Instagram-scoped business ID that owns the boosted media (creative.instagram_user_id). | [optional]
**instagram_permalink** | **string** | Instagram-only. Public permalink of the boosted IG post (creative.instagram_permalink_url). | [optional]
**instagram_account_id** | **string** | Instagram-only. The connected Instagram SocialAccount these comments were read through — use it for reply/hide actions via /v1/inbox/comments. | [optional]
**account_id** | **string** | Social account ID (ads SocialAccount). |
**last_updated** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
