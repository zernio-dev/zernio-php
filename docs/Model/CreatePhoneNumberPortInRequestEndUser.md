# # CreatePhoneNumberPortInRequestEndUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entity_name** | **string** | Account holder / business name, as on the carrier account. |
**auth_person_name** | **string** | Full name (first + last) of the person authorizing the port — must match the LOA signature. |
**billing_phone_number** | **string** | Phone number on the losing carrier&#39;s bill. Defaults to the ported number itself on single-number orders. Validated as a real phone number when present. | [optional]
**account_number** | **string** | Account number with the losing carrier — required (carriers reject ports without it; on prepaid mobile plans it is often the phone number itself). |
**pin_passcode** | **string** | Transfer PIN. Required for mobile numbers (wireless carriers reject PIN-less ports). Forwarded to the carrier, never stored. | [optional]
**street_address** | **string** |  |
**extended_address** | **string** |  | [optional]
**locality** | **string** |  |
**administrative_area** | **string** | 2-letter US state / CA province code (full names are accepted and normalized). |
**postal_code** | **string** | US ZIP (5 digits) or Canadian postal code, matching countryCode. |
**country_code** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
