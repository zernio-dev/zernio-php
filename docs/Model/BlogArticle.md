# # BlogArticle

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Platform-native numeric article/post id. | [optional]
**blog_id** | **string** | Platform-native id of the blog the article belongs to. | [optional]
**platform** | **string** |  | [optional]
**title** | **string** |  | [optional]
**body_html** | **string** | Article body as HTML. | [optional]
**handle** | **string** | URL slug of the article. | [optional]
**tags** | **string[]** | Tag names. On WordPress, missing tag names are created and matching is case-insensitive. | [optional]
**author** | **string** | Shopify author display name, or numeric WordPress user id serialized as a string. | [optional]
**excerpt** | **string** | Short summary shown in blog listings. | [optional]
**image** | [**\Zernio\Model\BlogArticleImage**](BlogArticleImage.md) |  | [optional]
**is_published** | **bool** | False while the article is a draft or its publish date is still in the future. | [optional]
**published_at** | **\DateTime** | Publication time. On WordPress this is present only when status is &#x60;publish&#x60;; null for drafts, pending/private posts, and scheduled posts. | [optional]
**status** | **string** | WordPress only. Native post status returned by WordPress; omitted for Shopify. | [optional]
**publish_date** | **\DateTime** | WordPress only. Scheduled publication time in UTC when status is &#x60;future&#x60;; null for other WordPress statuses and omitted for Shopify. | [optional]
**created_at** | **\DateTime** | Creation time when the platform exposes one. WordPress returns null because its core date is the editable publication date. | [optional]
**updated_at** | **\DateTime** | Last modification time. WordPress returns modified_gmt as UTC. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
