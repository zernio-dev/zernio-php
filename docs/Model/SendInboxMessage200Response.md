# # SendInboxMessage200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** |  | [optional]
**warnings** | [**\Zernio\Model\SendInboxMessage200ResponseWarningsInner[]**](SendInboxMessage200ResponseWarningsInner.md) | Present when a successful send ignored replyTo on Instagram or Facebook Messenger. The message was sent without a quote; do not retry it to apply the reply. | [optional]
**data** | [**\Zernio\Model\SendInboxMessage200ResponseData**](SendInboxMessage200ResponseData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
