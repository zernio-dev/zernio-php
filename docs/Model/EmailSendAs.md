# # EmailSendAs

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** |  | [optional]
**name** | **string** | Display name used when &#x60;fromName&#x60; is not given. | [optional]
**type** | **string** | &#x60;primary&#x60; is the mailbox&#39;s own address, &#x60;alias&#x60; a provider alias, &#x60;shared&#x60; a declared address (shared mailbox, delegate or alias). | [optional]
**verification_status** | **string** | &#x60;pending&#x60;: Gmail has not verified the alias, so sends from it are refused. &#x60;unverified&#x60;: declared and not sent from yet; it becomes &#x60;accepted&#x60; after its first send. | [optional]
**is_default** | **bool** | The address the provider picks by default. | [optional]
**source** | **string** |  | [optional]
**reply_to** | **string** | Gmail alias reply-to address, if set. | [optional]
**signature** | [**\Zernio\Model\EmailSendAsSignature**](EmailSendAsSignature.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
