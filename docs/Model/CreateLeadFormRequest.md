# # CreateLeadFormRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stage** | **bool** | Send true to store this write as a staged change instead of applying it. The response is &#x60;202&#x60; with the change, and POST /v1/ads/changes/{changeId}/confirm applies it later. Cannot be combined with &#x60;validateOnly&#x60;. | [optional]
**account_id** | **string** |  |
**name** | **string** |  |
**questions** | [**\Zernio\Model\CreateLeadFormRequestQuestionsInner[]**](CreateLeadFormRequestQuestionsInner.md) | Deprecated (Meta legacy shape): use platformSpecificData.questions. | [optional]
**privacy_policy_url** | **string** |  |
**privacy_policy_link_text** | **string** | Deprecated: use platformSpecificData.privacyPolicyLinkText. | [optional]
**follow_up_action_url** | **string** | Deprecated: use platformSpecificData.followUpActionUrl. | [optional]
**locale** | **string** | Deprecated: use platformSpecificData.locale. | [optional]
**thank_you_title** | **string** | Deprecated: use platformSpecificData.thankYouTitle. | [optional]
**thank_you_body** | **string** | Deprecated: use platformSpecificData.thankYouBody. | [optional]
**thank_you_button_text** | **string** | Deprecated: use platformSpecificData.thankYouButtonText. | [optional]
**thank_you_button_type** | **string** | Deprecated: use platformSpecificData.thankYouButtonType. | [optional]
**thank_you_website_url** | **string** | Deprecated: use platformSpecificData.thankYouWebsiteUrl. | [optional]
**is_optimized_for_quality** | **bool** | Deprecated: use platformSpecificData.isOptimizedForQuality. | [optional]
**platform_specific_data** | [**\Zernio\Model\CreateLeadFormRequestPlatformSpecificData**](CreateLeadFormRequestPlatformSpecificData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
