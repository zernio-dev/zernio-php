# # ListPhoneNumberCountries200ResponseCountriesInnerTypesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number_type** | **string** |  | [optional]
**tier** | **int** | Null on a &#x60;fulfilment: request&#x60; type, whose document tier is only known once its requirements are read. | [optional]
**needs_kyc** | **bool** |  | [optional]
**monthly_cents** | **int** | Price a NEW number of this type costs per month, in cents. | [optional]
**whatsapp_available** | **bool** | Always false for toll_free (WhatsApp does not reliably register toll-free numbers). | [optional]
**sms_available** | **bool** |  | [optional]
**calls_available** | **bool** |  | [optional]
**in_stock** | **bool** |  | [optional]
**fulfilment** | **string** | &#x60;request&#x60;: the carrier stocks this type nowhere and only sources it to order, so it is always a pre-order. | [optional]
**pre_orderable** | **bool** | Out of stock but orderable anyway. Submit KYC as usual (POST /v1/phone-numbers/kyc) and the carrier sources the number after review, usually about 3 weeks and never guaranteed. Only document tiers (3/4) qualify, and nothing is billed until the number is active. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
