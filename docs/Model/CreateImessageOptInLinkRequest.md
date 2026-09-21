# # CreateImessageOptInLinkRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**body** | **string** | Prefilled message text. Must contain the literal &#x60;[opt-in-code]&#x60; placeholder, e.g. \&quot;Hi! My code is [opt-in-code]\&quot;. |
**parameters** | **array<string,string>** | Custom key/values (e.g. leadId, campaign) echoed back on the opt-in message. | [optional]
**opt_in_code** | **string** | Your own code in place of the generated one (3-8 characters, no spaces or &#x60;#&#x60;, &#x60;!&#x60;, &#x60;-&#x60;). An unredeemed link lives 24 hours; re-issuing with the same code replaces it, and the earlier URL stops matching. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
