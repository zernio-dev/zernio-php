# # ReviewPhoneNumberKycPacketRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | **string** |  |
**number_type** | **string** |  |
**values** | **array<string,string>** | requirementId to declared textual value. | [optional]
**address** | **array<string,string>** | Declared address (street_address, locality, ...), so a mismatched proof-of-address can be flagged. | [optional]
**docs** | [**\Zernio\Model\SubmitPhoneNumberKycRequestDocumentsInnerOneOf1[]**](SubmitPhoneNumberKycRequestDocumentsInnerOneOf1.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
