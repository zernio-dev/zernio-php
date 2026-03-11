# # ImportWhatsAppContactsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | WhatsApp social account ID |
**contacts** | [**\Late\Model\ImportWhatsAppContactsRequestContactsInner[]**](ImportWhatsAppContactsRequestContactsInner.md) | Contacts to import (max 1000) |
**default_tags** | **string[]** | Tags applied to all imported contacts | [optional]
**default_groups** | **string[]** | Groups applied to all imported contacts | [optional]
**skip_duplicates** | **bool** | Skip contacts with existing phone numbers | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
