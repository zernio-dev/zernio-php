# # SendInboxMessageRequestTemplateElementsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Element title (max 80 chars). Required for Instagram/Facebook generic templates. | [optional]
**subtitle** | **string** | Element subtitle (Instagram/Facebook only) | [optional]
**image_url** | **string** | Element image URL (Instagram/Facebook only) | [optional]
**buttons** | [**\Zernio\Model\SendInboxMessageRequestTemplateElementsInnerButtonsInner[]**](SendInboxMessageRequestTemplateElementsInnerButtonsInner.md) | Element buttons (Instagram/Facebook only) | [optional]
**name** | **string** | WhatsApp only. Name of the approved template to send. | [optional]
**language** | **string** | WhatsApp only. Template language code (e.g. en_US). | [optional]
**components** | **array<string,mixed>[]** | WhatsApp only. Meta Cloud API send-shape components array, forwarded to Meta verbatim. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
