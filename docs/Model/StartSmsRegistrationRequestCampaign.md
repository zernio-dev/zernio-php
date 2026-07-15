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
**help_message** | **string** |  | [optional]
**optin_keywords** | **string** |  |
**optin_message** | **string** |  | [optional]
**optout_keywords** | **string** |  |
**optout_message** | **string** |  | [optional]
**help_keywords** | **string** |  |
**embedded_link** | **bool** | Whether messages carry links. Auto-derived from the samples when omitted, so the declaration matches what the reviewer reads. | [optional]
**embedded_phone** | **bool** | Whether messages carry phone numbers. Auto-derived from the samples when omitted. | [optional]
**number_pool** | **bool** |  | [optional]
**age_gated** | **bool** |  | [optional]
**direct_lending** | **bool** |  | [optional]
**privacy_policy_link** | **string** | Link to your privacy policy. Recommended: reviewers check that it says mobile information is not sold or shared with third parties for promotional purposes. A bare domain is normalized to https://. | [optional]
**terms_and_conditions_link** | **string** | Link to your terms &amp; conditions. A bare domain is normalized to https://. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
