# # EmailSendAs

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** |  | [optional]
**display_name** | **string** |  | [optional]
**reply_to** | **string** | Gmail alias reply-to address, if set. | [optional]
**is_primary** | **bool** | The mailbox&#39;s own address. | [optional]
**is_default** | **bool** | The address Gmail picks by default in its compose window. | [optional]
**verified** | **bool** | Gmail sends from an alias only once it is verified. Always &#x60;true&#x60; on Outlook. | [optional]
**signature** | **string** | Signature html. Gmail only; always &#x60;null&#x60; on Outlook. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
