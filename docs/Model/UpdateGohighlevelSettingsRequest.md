# # UpdateGohighlevelSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**relay_conversions** | **bool** | Relay GoHighLevel CRM events (new contacts, won opportunities, appointments, paid invoices and orders) as conversions with &#x60;source&#x60; &#x60;gohighlevel&#x60;. | [optional]
**write_back_attribution** | **bool** | Write each relayed conversion onto the &#x60;Zernio Conversions&#x60; custom field of the GoHighLevel contact. | [optional]
**report_to_ads** | **bool** | Also forward relayed conversions to the profile&#39;s ad platform destinations. Off stores them only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
