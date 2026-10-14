# # InstagramBusinessDiscoveryMediaInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**caption** | **string** |  |
**media_type** | **string** | IMAGE, VIDEO or CAROUSEL_ALBUM |
**media_product_type** | **string** | FEED or REELS |
**timestamp** | **\DateTime** |  |
**permalink** | **string** |  |
**like_count** | **int** | Null when the owner hides like counts |
**comments_count** | **int** |  |
**media_url** | **string** | Temporary CDN URL that expires; download the file rather than storing the link. Null on videos whose audio is licensed music, use thumbnailUrl for the cover. |
**thumbnail_url** | **string** | Video cover frame, VIDEO only. Temporary CDN URL. |
**view_count** | **int** | Reels only. Null on images and carousels. |
**children** | [**\Zernio\Model\InstagramBusinessDiscoveryMediaInnerChildrenInner[]**](InstagramBusinessDiscoveryMediaInnerChildrenInner.md) | Carousel slides in order. Null unless mediaType is CAROUSEL_ALBUM. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
