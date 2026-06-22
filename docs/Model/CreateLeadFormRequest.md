# # CreateLeadFormRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**name** | **string** |  |
**questions** | [**\Zernio\Model\CreateLeadFormRequestQuestionsInner[]**](CreateLeadFormRequestQuestionsInner.md) |  |
**privacy_policy_url** | **string** |  |
**privacy_policy_link_text** | **string** |  | [optional]
**follow_up_action_url** | **string** |  | [optional]
**locale** | **string** |  | [optional]
**thank_you_title** | **string** |  | [optional]
**thank_you_body** | **string** |  | [optional]
**thank_you_button_text** | **string** |  | [optional]
**thank_you_button_type** | **string** |  | [optional]
**thank_you_website_url** | **string** |  | [optional]
**is_optimized_for_quality** | **bool** | Legacy form type toggle. Prefer formType instead. false &#x3D; More Volume, true &#x3D; Higher Intent. | [optional]
**form_type** | **string** | Form type. MORE_VOLUME &#x3D; optimized for lead quantity (default). HIGHER_INTENT &#x3D; adds a review/confirmation step before submit. RICH_CREATIVE &#x3D; includes context card and custom headline to educate users before they submit. Supersedes isOptimizedForQuality. | [optional]
**block_display_for_non_targeted_viewer** | **bool** | Sharing setting. true &#x3D; Restricted (only people targeted by the ad can open the form link). false &#x3D; Open (shareable link, default). | [optional]
**allow_organic_lead_gen** | **bool** | Flexible form delivery. true &#x3D; the form can surface organically on the Page (not just as a paid ad). Defaults to false. | [optional]
**question_page_custom_headline** | **string** | Custom subheadline shown above the form fields on the questions page (the contact-information section description). Defaults to Meta&#39;s generic copy when omitted. | [optional]
**context_card** | [**\Zernio\Model\CreateLeadFormRequestContextCard**](CreateLeadFormRequestContextCard.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
