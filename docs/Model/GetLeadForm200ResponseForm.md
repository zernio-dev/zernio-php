# # GetLeadForm200ResponseForm

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**status** | **string** | ARCHIVED forms can&#39;t receive new leads. | [optional]
**locale** | **string** |  | [optional]
**created_time** | **\DateTime** |  | [optional]
**leads_count** | **int** |  | [optional]
**privacy_policy_url** | **string** |  | [optional]
**follow_up_action_url** | **string** |  | [optional]
**questions** | [**\Zernio\Model\GetLeadForm200ResponseFormQuestionsInner[]**](GetLeadForm200ResponseFormQuestionsInner.md) |  | [optional]
**thank_you_page** | [**\Zernio\Model\GetLeadForm200ResponseFormThankYouPage**](GetLeadForm200ResponseFormThankYouPage.md) |  | [optional]
**context_card** | **object** | Intro card shown before the form questions (title, content, button label). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
