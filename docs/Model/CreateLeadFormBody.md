# # CreateLeadFormBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Facebook social account ID (Late SocialAccount _id). |
**name** | **string** |  |
**questions** | [**\Zernio\Model\LeadGenFormQuestion[]**](LeadGenFormQuestion.md) |  |
**privacy_policy_url** | **string** | Required by Meta. Must be reachable from Meta&#39;s crawler. |
**privacy_policy_link_text** | **string** |  | [optional]
**follow_up_action_url** | **string** |  | [optional]
**locale** | **string** |  | [optional]
**thank_you_title** | **string** |  | [optional]
**thank_you_body** | **string** |  | [optional]
**thank_you_button_text** | **string** |  | [optional]
**thank_you_button_type** | **string** | Meta enum (e.g. VIEW_WEBSITE, CALL_BUSINESS, DOWNLOAD) | [optional]
**thank_you_website_url** | **string** |  | [optional]
**is_optimized_for_quality** | **bool** |  | [optional]
**context_card** | [**\Zernio\Model\CreateLeadFormBodyContextCard**](CreateLeadFormBodyContextCard.md) |  | [optional]
**legal_content** | [**\Zernio\Model\CreateLeadFormBodyLegalContent**](CreateLeadFormBodyLegalContent.md) |  | [optional]
**tracking_parameters** | **array<string,string>** | Up to 20 key/value pairs surfaced on every lead for attribution. | [optional]
**question_page_custom_headline** | **string** |  | [optional]
**allow_organic_lead** | **bool** |  | [optional]
**block_display_for_non_targeted_viewer** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
