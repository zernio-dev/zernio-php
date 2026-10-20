# # CreateBlogArticleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** |  |
**body_html** | **string** | Article body as HTML. | [optional]
**handle** | **string** | URL slug. Generated from the title when omitted. | [optional]
**tags** | **string[]** | Tag names. WordPress and Wix resolve existing names case-insensitively and create missing tags (Wix allows up to 30). | [optional]
**author** | **string** | Shopify author display name, numeric WordPress user id serialized as a string, or Wix site member id. Assigning another WordPress user may require elevated capability. Wix posts without one go to the site&#39;s default author. | [optional]
**excerpt** | **string** | Short summary shown in blog listings. | [optional]
**image** | [**\Zernio\Model\CreateBlogArticleRequestImage**](CreateBlogArticleRequestImage.md) |  | [optional]
**seo** | [**\Zernio\Model\CreateBlogArticleRequestSeo**](CreateBlogArticleRequestSeo.md) |  | [optional]
**is_published** | **bool** | Set false for a draft or true to publish. On WordPress and Wix false takes priority over a future publishDate; omission with no date defaults to draft. | [optional]
**publish_date** | **\DateTime** | ISO 8601 datetime with offset (or Z). A future date schedules publication natively on the platform. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
