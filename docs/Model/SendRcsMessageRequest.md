# # SendRcsMessageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agent_id** | **string** |  |
**to** | **string** | Recipient number (E.164; formatting is normalized). |
**text** | **string** |  | [optional]
**content** | [**\Zernio\Model\RcsContent**](RcsContent.md) |  | [optional]
**fallback_text** | **string** |  | [optional]
**ttl_seconds** | **int** | Seconds before an undelivered message expires. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
