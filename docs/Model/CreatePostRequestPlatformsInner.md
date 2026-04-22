# # CreatePostRequestPlatformsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**custom_content** | **string** | Platform-specific text override. When set, this content is used instead of the top-level post content for this platform. Useful for tailoring captions per platform (e.g. keeping tweets under 280 characters). | [optional]
**custom_media** | [**\Zernio\Model\CreatePostRequestMediaItemsInner[]**](CreatePostRequestMediaItemsInner.md) |  | [optional]
**scheduled_for** | **\DateTime** | Optional per-platform scheduled time override. When omitted, the top-level scheduledFor is used. | [optional]
**platform_specific_data** | [**\Zernio\Model\CreatePostRequestPlatformsInnerPlatformSpecificData**](CreatePostRequestPlatformsInnerPlatformSpecificData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
