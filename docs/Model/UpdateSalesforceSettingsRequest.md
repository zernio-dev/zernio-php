# # UpdateSalesforceSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sync_contacts** | **bool** | Create a Lead or Contact for an inbox contact that matches nobody by phone (any phone field) or email. A match is linked as it is and never updated. | [optional]
**log_messages** | **bool** | Log inbound and outbound inbox messages as one conversation Task per person, channel and day. | [optional]
**create_as** | **string** | What a person new to Salesforce is created as. Leads get Company &#x60;[not provided]&#x60;. | [optional]
**log_delivery_status** | **bool** | Mark sent messages in the transcript as delivered, read or failed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
