# # GetTikTokSmartPlusAdReview200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**platform_ad_id** | **string** |  | [optional]
**smart_plus_ad_id** | **string** | The TikTok Smart+ ad whose review this is. | [optional]
**review** | [**\Zernio\Model\TikTokSmartPlusAdLevelReview**](TikTokSmartPlusAdLevelReview.md) |  | [optional]
**materials** | [**\Zernio\Model\TikTokSmartPlusMaterialReview[]**](TikTokSmartPlusMaterialReview.md) | One entry per creative TikTok reviewed (&#x60;material_review_infos&#x60;). | [optional]
**read_at** | **\DateTime** | When the verdict was read from TikTok. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
