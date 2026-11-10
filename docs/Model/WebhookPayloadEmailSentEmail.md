# # WebhookPayloadEmailSentEmail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_id** | **string** | Provider id of the sent mail. | [optional]
**thread_id** | **string** |  | [optional]
**tracking_id** | **string** |  | [optional]
**metadata** | **array<string,string>** |  | [optional]
**subject** | **string** |  | [optional]
**from** | [**\Zernio\Model\EmailAddress**](EmailAddress.md) |  | [optional]
**to** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**cc** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**bcc** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**sent_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
