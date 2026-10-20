# # UpdateBlogArticleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** |  | [optional]
**body_html** | **string** | Article body as HTML. | [optional]
**handle** | **string** | URL slug of the article. | [optional]
**tags** | **string[]** | Replaces the full tag-name list. WordPress and Wix resolve existing names case-insensitively and create missing tags (Wix allows up to 30). | [optional]
**author** | **string** | Shopify author display name, numeric WordPress user id serialized as a string, or Wix site member id. Assigning another WordPress user may require elevated capability. Wix posts without one go to the site&#39;s default author. | [optional]
**excerpt** | **string** | Short summary shown in blog listings. | [optional]
**image** | [**\Zernio\Model\UpdateBlogArticleRequestImage**](UpdateBlogArticleRequestImage.md) |  | [optional]
**seo** | [**\Zernio\Model\CreateBlogArticleRequestSeo**](CreateBlogArticleRequestSeo.md) |  | [optional]
**is_published** | **bool** | Set false to move to draft or true to publish. On WordPress and Wix false takes priority over a future publishDate; omission preserves status unless publishDate is sent (edits to a published Wix post go live). | [optional]
**publish_date** | **\DateTime** | ISO 8601 datetime with offset (or Z). A future date schedules publication natively on the platform. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
