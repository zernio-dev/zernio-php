# # WebhookPayloadPostPostPlatformsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  |
**status** | **string** |  |
**account_id** | **string** | SocialAccount id this platform target published through. Use it to route events by connected account (e.g. separate staging vs production endpoints). A post can span multiple accounts. | [optional]
**platform_post_id** | **string** |  | [optional]
**published_url** | **string** |  | [optional]
**error** | **string** |  | [optional]
**platform_error** | [**\Zernio\Model\PostPlatformError**](PostPlatformError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
