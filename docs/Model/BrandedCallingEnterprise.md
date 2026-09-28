# # BrandedCallingEnterprise

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**legal_name** | **string** |  | [optional]
**doing_business_as** | **string** |  | [optional]
**organization_type** | **string** |  | [optional]
**organization_legal_type** | **string** |  | [optional]
**country_code** | **string** |  | [optional]
**jurisdiction_of_incorporation** | **string** |  | [optional]
**website** | **string** |  | [optional]
**fein_last4** | **string** | Last four digits of the tax id; the full id is never returned. | [optional]
**industry** | **string** |  | [optional]
**number_of_employees** | **string** |  | [optional]
**organization_contact** | [**\Zernio\Model\BrandedCallingContact**](BrandedCallingContact.md) |  | [optional]
**billing_contact** | [**\Zernio\Model\BrandedCallingContact**](BrandedCallingContact.md) |  | [optional]
**physical_address** | [**\Zernio\Model\BrandedCallingAddress**](BrandedCallingAddress.md) |  | [optional]
**billing_address** | [**\Zernio\Model\BrandedCallingAddress**](BrandedCallingAddress.md) |  | [optional]
**registered** | **bool** | True once the business exists at the carrier (happens when its first identity passes review). | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
