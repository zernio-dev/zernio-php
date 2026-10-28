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
**report_deals** | **bool** | Whether Zernio sends closed-won deals as Purchase events to the profile&#39;s event destinations. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
