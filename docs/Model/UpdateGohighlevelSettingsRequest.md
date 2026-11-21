# # UpdateGohighlevelSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**relay_conversions** | **bool** | Relay GoHighLevel CRM events (new contacts, won opportunities, appointments, paid invoices and orders) as conversions with &#x60;source&#x60; &#x60;gohighlevel&#x60;. | [optional]
**write_back_attribution** | **bool** | Write each relayed conversion onto the &#x60;Zernio Conversions&#x60; custom field of the GoHighLevel contact. | [optional]
**report_to_ads** | **bool** | Also forward relayed conversions to the profile&#39;s ad platform destinations. Off stores them only. | [optional]
**sync_contacts** | **bool** | Match inbox contacts to HighLevel contacts (phone, then email) and create the ones that do not exist. | [optional]
**log_messages** | **bool** | Log inbox messages from every channel on the matched HighLevel contact, one note per channel and UTC day. | [optional]
**log_delivery_status** | **bool** | Mark sent, delivered, read and failed on logged outgoing messages. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
