# # CreateBrandedCallingEnterpriseRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legal_name** | **string** | Exactly as on the tax record. |
**doing_business_as** | **string** |  |
**organization_type** | **string** |  |
**organization_legal_type** | **string** |  |
**country_code** | **string** | ISO 3166-1 alpha-2. US or CA. |
**jurisdiction_of_incorporation** | **string** | State, province or country of registration. |
**website** | **string** |  |
**fein** | **string** | US Federal Employer Identification Number (NN-NNNNNNN) or the Canadian equivalent. Stored encrypted; only the last four digits are ever returned. |
**industry** | **string** | One of the carrier industry labels, e.g. technology, healthcare, retail, finance, legal, insurance, real estate, logistics, education. |
**number_of_employees** | **string** |  |
**organization_contact** | [**\Zernio\Model\BrandedCallingContact**](BrandedCallingContact.md) |  |
**billing_contact** | [**\Zernio\Model\BrandedCallingContact**](BrandedCallingContact.md) |  |
**physical_address** | [**\Zernio\Model\BrandedCallingAddress**](BrandedCallingAddress.md) |  |
**billing_address** | [**\Zernio\Model\BrandedCallingAddress**](BrandedCallingAddress.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
