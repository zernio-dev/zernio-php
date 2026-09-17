# # UpdateBlogArticleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** |  | [optional]
**body_html** | **string** | Article body as HTML. | [optional]
**handle** | **string** | URL slug of the article. | [optional]
**tags** | **string[]** | Replaces the full tag-name list. WordPress resolves existing names case-insensitively and creates missing tags. | [optional]
**author** | **string** | Shopify author display name, or numeric WordPress user id serialized as a string. Assigning another WordPress user may require elevated capability. | [optional]
**excerpt** | **string** | Short summary shown in blog listings. | [optional]
**image** | [**\Zernio\Model\UpdateBlogArticleRequestImage**](UpdateBlogArticleRequestImage.md) |  | [optional]
**seo** | [**\Zernio\Model\CreateBlogArticleRequestSeo**](CreateBlogArticleRequestSeo.md) |  | [optional]
**is_published** | **bool** | Set false to move to draft or true to publish. On WordPress false takes priority over a future publishDate; omission preserves status unless publishDate is sent. | [optional]
**publish_date** | **\DateTime** | ISO 8601 datetime with offset (or Z). A future date schedules publication natively on the platform. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
