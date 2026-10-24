# # MetaLeadFormPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**questions** | [**\Zernio\Model\CreateLeadFormRequestQuestionsInner[]**](CreateLeadFormRequestQuestionsInner.md) |  |
**privacy_policy_link_text** | **string** |  | [optional]
**follow_up_action_url** | **string** |  | [optional]
**locale** | **string** |  | [optional]
**thank_you_title** | **string** |  | [optional]
**thank_you_body** | **string** |  | [optional]
**thank_you_button_text** | **string** |  | [optional]
**thank_you_button_type** | **string** | Meta thank_you_page.button_type. Defaults to VIEW_WEBSITE. Meta rejects MESSAGE_BUSINESS on thank-you pages with (#100) This button type is not yet supported for Thank You Page. | [optional]
**thank_you_website_url** | **string** |  | [optional]
**thank_you_enable_messenger** | **bool** | Sent as Meta thank_you_page.enable_messenger (boolean). Accepted only inside platformSpecificData: a top-level thankYouEnableMessenger is a 400. | [optional] [default to false]
**is_optimized_for_quality** | **bool** | Set true for a higher-intent form (adds a review step before submit). | [optional]
**is_phone_sms_verify_enabled** | **bool** | Requires the lead to verify their phone number over SMS before the form submits (Meta is_phone_sms_verify_enabled). Only meaningful on a form with a PHONE question. Meta can restrict this parameter to apps holding a capability: when it does, the create fails with a 422 naming platformSpecificData.isPhoneSmsVerifyEnabled, and the toggle then has to be set in Meta&#39;s form builder. | [optional] [default to false]
**block_display_for_non_targeted_viewer** | **bool** |  | [optional]
**question_page_custom_headline** | **string** |  | [optional]
**context_card** | [**\Zernio\Model\MetaLeadFormPlatformDataContextCard**](MetaLeadFormPlatformDataContextCard.md) |  | [optional]
**custom_disclaimer** | [**\Zernio\Model\MetaLeadFormPlatformDataCustomDisclaimer**](MetaLeadFormPlatformDataCustomDisclaimer.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
