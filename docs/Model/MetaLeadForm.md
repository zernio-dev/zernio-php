# # MetaLeadForm

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**status** | **string** | One of ACTIVE, ARCHIVED, DELETED or DRAFT. | [optional]
**locale** | **string** |  | [optional]
**created_time** | **\DateTime** |  | [optional]
**page_id** | **string** | Owning Facebook Page. A form on any other Page is a 404, whether read or archived. | [optional]
**leads_count** | **int** |  | [optional]
**organic_leads_count** | **int** |  | [optional]
**expired_leads_count** | **int** | Leads Meta has aged out of the retention window. | [optional]
**privacy_policy_url** | **string** |  | [optional]
**follow_up_action_url** | **string** |  | [optional]
**follow_up_action_text** | **string** |  | [optional]
**question_page_custom_headline** | **string** |  | [optional]
**is_optimized_for_quality** | **bool** |  | [optional]
**block_display_for_non_targeted_viewer** | **bool** |  | [optional]
**allow_organic_lead** | **bool** | Whether the form can also be submitted from an organic Page post. | [optional]
**tracking_parameters** | [**\Zernio\Model\BoostPostRequestTrackingUrlTagsInner[]**](BoostPostRequestTrackingUrlTagsInner.md) | Custom key/value pairs attached to every lead of this form. | [optional]
**legal_content** | [**\Zernio\Model\MetaLeadFormLegalContent**](MetaLeadFormLegalContent.md) |  | [optional]
**context_card** | [**\Zernio\Model\MetaLeadFormContextCard**](MetaLeadFormContextCard.md) |  | [optional]
**thank_you_page** | [**\Zernio\Model\MetaLeadFormThankYouPage**](MetaLeadFormThankYouPage.md) |  | [optional]
**questions** | [**\Zernio\Model\MetaLeadFormQuestionsInner[]**](MetaLeadFormQuestionsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
