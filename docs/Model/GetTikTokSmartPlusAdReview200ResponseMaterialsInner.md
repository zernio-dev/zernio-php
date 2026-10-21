# # GetTikTokSmartPlusAdReview200ResponseMaterialsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_material_id** | **string** | TikTok &#x60;ad_material_id&#x60; of the creative inside this ad. | [optional]
**material_type** | **string** | Null for a creative TikTok added on its own or a carousel image. | [optional]
**tiktok_item_id** | **string** | The TikTok post id when the creative is a Spark post. | [optional]
**video_id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**operation_status** | **string** | TikTok &#x60;material_operation_status&#x60;: ENABLE or DISABLE. | [optional]
**review_status** | [**\Zernio\Model\TikTokSmartPlusReviewStatus**](TikTokSmartPlusReviewStatus.md) |  | [optional]
**raw_review_status** | **string** | TikTok &#x60;review_status&#x60;, verbatim. | [optional]
**reject_reasons** | **string[]** | Every distinct reason across &#x60;rejections&#x60;. Empty when approved. | [optional]
**passed_locations** | **string[]** |  | [optional]
**rejections** | [**\Zernio\Model\TikTokReviewRejection[]**](TikTokReviewRejection.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
