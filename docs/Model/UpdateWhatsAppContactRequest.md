# # UpdateWhatsAppContactRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Contact name | [optional]
**email** | **string** | Contact email | [optional]
**company** | **string** | Company name | [optional]
**tags** | **string[]** | Tags (replaces existing) | [optional]
**groups** | **string[]** | Groups (replaces existing) | [optional]
**is_opted_in** | **bool** | Opt-in status (changes are timestamped) | [optional]
**is_blocked** | **bool** | Block status | [optional]
**custom_fields** | **array<string,string>** | Custom fields to merge (set value to null to remove a field) | [optional]
**notes** | **string** | Notes about the contact | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
