# # MetaLeadFormQuestionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**key** | **string** |  | [optional]
**label** | **string** |  | [optional]
**type** | **string** | EMAIL, PHONE, FULL_NAME, CUSTOM, ... | [optional]
**inline_context** | **string** |  | [optional]
**options** | [**\Zernio\Model\BoostPostRequestTrackingUrlTagsInner[]**](BoostPostRequestTrackingUrlTagsInner.md) |  | [optional]
**conditional_questions_group_id** | **string** | READ-ONLY. Conditional logic can only be authored in Meta form builder; Meta has no create parameter for it. | [optional]
**conditional_questions_choices** | **object[]** | READ-ONLY. Which answers reveal the conditional group. | [optional]
**dependent_conditional_questions** | **object[]** | READ-ONLY. Questions revealed by the conditional group. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
