# # AdLead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Zernio lead id. | [optional]
**leadgen_id** | **string** | Meta lead id. On LinkedIn, the leadFormResponse id. | [optional]
**form_id** | **string** |  | [optional]
**form_name** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**ad_id** | **string** |  | [optional]
**adset_id** | **string** |  | [optional]
**campaign_id** | **string** | On LinkedIn, this is the LinkedIn Campaign id, which corresponds to platformAdSetId on GET /v1/ads (LinkedIn&#39;s Campaign Group is Zernio&#39;s campaign). | [optional]
**is_organic** | **bool** |  | [optional]
**created_time** | **string** | ISO 8601. | [optional]
**fields** | **array<string,string>** | Question key → answer. On LinkedIn, the key is the lowercased predefinedField, else the question name, else the numeric questionId; multiple-choice values are option labels (unlike Meta, which returns the option key). | [optional]
**field_data** | **object[]** | Raw Meta field_data. | [optional]
**consents** | [**\Zernio\Model\AdLeadConsent[]**](AdLeadConsent.md) | Meta lead forms only: the answer to every custom disclaimer checkbox, required or optional. Empty when the form has none, and may be empty on leads stored before 2026-10-22. LinkedIn leads do not carry the field. | [optional]
**status** | **string** | Meta leads only. &#x60;contacted&#x60; is set when the first WhatsApp message of a lead_received workflow is delivered, &#x60;unreachable&#x60; when it fails or the phone number is not valid. | [optional]
**status_changed_at** | **\DateTime** |  | [optional]
**value** | **float** |  | [optional]
**currency** | **string** |  | [optional]
**contact_id** | **string** | The contact a lead_received workflow created or matched for this lead. | [optional]
**first_contacted_at** | **\DateTime** | When the first WhatsApp message to the lead was delivered. | [optional]
**conversation_id** | **string** | The Inbox conversation a lead_received workflow opened with the lead. | [optional]
**webhook_delivered_at** | **\DateTime** | Meta leads only. When the &#x60;lead.received&#x60; webhook was delivered; null while it has not been. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
