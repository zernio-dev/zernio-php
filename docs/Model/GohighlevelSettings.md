# # GohighlevelSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  |
**platform** | **string** |  |
**location_id** | **string** | The HighLevel sub-account (location) id. |
**company_id** | **string** | The agency that owns the sub-account, null for a sub-account under no agency. |
**location_name** | **string** |  |
**installed_by** | **string** | The HighLevel user who installed the app. |
**relay_conversions** | **bool** | CRM events are relayed as conversions. Default true. |
**write_back_attribution** | **bool** | Relayed conversions are written back onto the HighLevel contact. Default true. |
**report_to_ads** | **bool** | Relayed conversions are forwarded to the profile&#39;s ad platforms. A new connection starts with this on when its profile already sends events to an ad account, else off; reconnecting keeps the value. |
**sync_contacts** | **bool** | Inbox contacts are matched to HighLevel contacts by phone, then email, and created there when none matches. Default true. |
**log_messages** | **bool** | Inbox messages from every channel (both directions) are logged on the HighLevel contact as one note per channel and day. Default true. |
**log_delivery_status** | **bool** | Logged outgoing messages show their delivery status (sent, delivered, read, failed) on their note line. Default true. |
**sync_ad_leads** | **bool** | Leads from the profile&#39;s ad network lead forms become HighLevel contacts, deduplicated by email, then phone. Default true. |
**mirror_conversations** | **bool** | Telegram, LINE, WeChat, iMessage and RCS messages go into the contact&#39;s Conversations thread under the Zernio channel (answerable from HighLevel) instead of a note. Default true. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
