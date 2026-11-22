# # AudienceUploadUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Email, or SHA-256 of it trimmed and lowercased. | [optional]
**phone** | **string** | Phone with country code. Plaintext matches on Meta and Google; see the endpoint description before sending it hashed. | [optional]
**first_name** | **string** |  | [optional]
**last_name** | **string** |  | [optional]
**birth_year** | **string** | YYYY. Meta only. | [optional]
**birth_month** | **string** | MM (01-12). Meta only. | [optional]
**birth_day** | **string** | DD (01-31). Meta only. | [optional]
**gender** | **string** | m or f. Meta only. | [optional]
**city** | **string** | Meta only. | [optional]
**state** | **string** | Meta only. | [optional]
**zip** | **string** |  | [optional]
**country** | **string** | ISO 3166-1 alpha-2 code. | [optional]
**external_id** | **string** | Your own id for the person. Meta only. | [optional]
**region** | **string** | Where the person is (ISO country, or US-CA). With no granted consent, EEA, UK and CH people are dropped before upload. | [optional]
**consent** | [**\Zernio\Model\AudienceUploadUserConsent**](AudienceUploadUserConsent.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
