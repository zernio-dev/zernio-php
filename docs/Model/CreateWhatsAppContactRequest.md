# # CreateWhatsAppContactRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | WhatsApp social account ID |
**phone** | **string** | Phone number in E.164 format |
**name** | **string** | Contact name |
**email** | **string** | Contact email | [optional]
**company** | **string** | Company name | [optional]
**tags** | **string[]** | Tags for categorization | [optional]
**groups** | **string[]** | Groups the contact belongs to | [optional]
**is_opted_in** | **bool** | Whether the contact has opted in to receive messages | [optional] [default to true]
**custom_fields** | **array<string,string>** | Custom key-value fields | [optional]
**notes** | **string** | Notes about the contact | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
