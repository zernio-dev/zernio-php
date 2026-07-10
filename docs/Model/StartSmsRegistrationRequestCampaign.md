# # StartSmsRegistrationRequestCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**usecase** | **string** |  |
**sub_usecases** | **string[]** | The concrete kinds of messages a MIXED campaign sends (the carrier registry requires 2-5, and reviewers match them against the sample messages). Omitted: a default pair is applied for MIXED. | [optional]
**description** | **string** |  |
**message_flow** | **string** | How a recipient ends up receiving your messages (the opt-in flow). Include a link to the page or form where they opt in — carrier reviewers reject campaigns whose consent they can&#39;t verify. |
**sample1** | **string** |  |
**sample2** | **string** | Second example message; carriers require two distinct samples |
**help_message** | **string** |  |
**optin_keywords** | **string** |  |
**optin_message** | **string** |  |
**optout_keywords** | **string** |  |
**optout_message** | **string** |  |
**help_keywords** | **string** |  |
**embedded_link** | **bool** |  | [optional]
**embedded_phone** | **bool** |  | [optional]
**number_pool** | **bool** |  | [optional]
**age_gated** | **bool** |  | [optional]
**direct_lending** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
