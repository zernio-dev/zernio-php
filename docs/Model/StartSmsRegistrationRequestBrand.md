# # StartSmsRegistrationRequestBrand

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entity_type** | **string** |  |
**display_name** | **string** |  |
**company_name** | **string** | Legal company name. Required for every entityType except SOLE_PROPRIETOR. | [optional]
**ein** | **string** | Required for every entityType except SOLE_PROPRIETOR. | [optional]
**phone** | **string** | Business contact phone. Required for every entityType except SOLE_PROPRIETOR. | [optional]
**mobile_phone** | **string** | Required for SOLE_PROPRIETOR; the verification OTP is texted there (US/CA mobile). | [optional]
**street** | **string** |  |
**city** | **string** |  |
**state** | **string** |  |
**postal_code** | **string** |  |
**country** | **string** |  |
**email** | **string** | Brand contact email; defaults to your account email when omitted. | [optional]
**website** | **string** | The brand&#39;s website (sole proprietors may use a social profile such as LinkedIn or a business Facebook page). Carriers verify the brand against it; a bare domain is normalized to https://. |
**vertical** | **string** |  |
**stock_symbol** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
