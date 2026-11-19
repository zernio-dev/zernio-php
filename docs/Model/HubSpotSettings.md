# # HubSpotSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** | Zernio account ID of the HubSpot connection. |
**platform** | **string** |  |
**hub_id** | **string** | HubSpot portal (hub) ID. |
**hub_domain** | **string** | HubSpot portal domain, when HubSpot reports one. |
**scopes** | **string[]** | OAuth scopes the portal granted. |
**sync_contacts** | **bool** | Whether Zernio creates HubSpot contacts for inbox contacts that match none. |
**log_messages** | **bool** | Whether Zernio logs inbox messages on HubSpot contact timelines. |
**log_delivery_status** | **bool** | Whether Zernio keeps the delivery status (sent, delivered, read, played, failed) of logged outgoing messages up to date on their HubSpot timeline entries. Only applies while &#x60;logMessages&#x60; is on. Defaults to &#x60;true&#x60;. |
**contact_defaults** | **array<string,string>** | Values Zernio sets on contacts it creates, keyed by HubSpot internal property name, for properties the portal requires on create (for example &#x60;lifecyclestage: lead&#x60;). The contact&#39;s own name, email and phone win. Empty object when none. |
**sync_issue** | [**\Zernio\Model\HubSpotSettingsSyncIssue**](HubSpotSettingsSyncIssue.md) |  |
**report_deals** | **bool** | Whether Zernio sends closed-won deals as Purchase events to the profile&#39;s event destinations. |
**use_deals_as_results** | **bool** | Whether closed-won deals count as sales on the ad campaign that brought their contact, in campaign results and ad rules. |
**qualified_leads** | [**\Zernio\Model\HubSpotQualifiedLeads**](HubSpotQualifiedLeads.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
