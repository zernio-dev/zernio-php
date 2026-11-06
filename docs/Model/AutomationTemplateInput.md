# # AutomationTemplateInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | The name to send the value under in &#x60;inputs&#x60;, for example &#x60;adAccount&#x60;. |
**type** | **string** | What the value is. &#x60;ad_account&#x60;: &#x60;{ accountId, adAccountId }&#x60;. &#x60;profile&#x60;: a profile id. &#x60;social_accounts&#x60;: an array of social account ids. &#x60;notify_destination&#x60;: an array of &#x60;{ accountId, to?, channelId? }&#x60;. &#x60;number&#x60;, &#x60;money&#x60; (in the ad account&#39;s currency) and &#x60;percent&#x60;: a number within the bounds below. &#x60;choice&#x60;: one of &#x60;options[].value&#x60;. |
**label** | **string** |  |
**optional** | **bool** | True when an install may leave it out. A field that points at a left-out input is dropped. | [optional]
**default** | [**\Zernio\Model\AutomationTemplateInputDefault**](AutomationTemplateInputDefault.md) |  | [optional]
**min** | **float** |  | [optional]
**exclusive_min** | **float** | The value must be above it, for example an amount above 0. | [optional]
**max** | **float** |  | [optional]
**integer** | **bool** | True when only whole numbers are accepted. | [optional]
**options** | [**\Zernio\Model\AutomationTemplateInputOptionsInner[]**](AutomationTemplateInputOptionsInner.md) | What a &#x60;choice&#x60; input offers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
