# # ListFormLeads200ResponseLeadsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Meta leadgenId. | [optional]
**lead_id** | **string** | Zernio lead id, for PATCH /v1/ads/leads/{id}. Only on persisted leads. | [optional]
**status** | **string** | Lead status (see PATCH /v1/ads/leads/{id}). Only on persisted leads. | [optional]
**created_time** | **string** |  | [optional]
**ad_id** | **string** |  | [optional]
**form_id** | **string** |  | [optional]
**fields** | **array<string,string>** |  | [optional]
**field_data** | **object[]** |  | [optional]
**consents** | [**\Zernio\Model\AdLeadConsent[]**](AdLeadConsent.md) | Meta lead forms only: the answer to every custom disclaimer checkbox, required or optional. Empty when the form has none, and may be empty on leads stored before 2026-10-22. LinkedIn leads do not carry the field. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
