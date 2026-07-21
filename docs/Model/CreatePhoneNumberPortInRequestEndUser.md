# # CreatePhoneNumberPortInRequestEndUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entity_name** | **string** | Account holder / business name, as on the carrier account. |
**auth_person_name** | **string** | Full name (first + last) of the person authorizing the port — must match the LOA signature. |
**billing_phone_number** | **string** | Phone number on the losing carrier&#39;s bill. Defaults to the ported number itself on single-number orders. Validated as a real phone number when present. | [optional]
**account_number** | **string** | Account number with the losing carrier — required (carriers reject ports without it; on prepaid mobile plans it is often the phone number itself). |
**pin_passcode** | **string** | Transfer PIN. Required for US/CA mobile numbers (wireless carriers reject PIN-less ports). Forwarded to the carrier, never stored. International porting codes (e.g. the UK PAC) go through &#x60;requirements&#x60; instead. | [optional]
**tax_identifier** | **string** | Company tax id on the carrier account (EU ports, e.g. Spanish CIF). | [optional]
**business_identifier** | **string** | Business registration id on the carrier account (EU ports). | [optional]
**street_address** | **string** |  |
**extended_address** | **string** |  | [optional]
**locality** | **string** |  |
**administrative_area** | **string** | Region. Required for US/CA as the 2-letter state/province code (full names are accepted and normalized); optional elsewhere. | [optional]
**postal_code** | **string** | Postal code. Validated as a US ZIP / Canadian postal code for US/CA; free-form elsewhere. |
**country_code** | **string** | Service-address country (a supported port-in country). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
