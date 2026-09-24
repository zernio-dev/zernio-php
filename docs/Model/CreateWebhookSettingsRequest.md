# # CreateWebhookSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Webhook name (1-50 characters) |
**url** | **string** | Webhook endpoint URL (must be a valid URL, whitespace trimmed) |
**secret** | **string** | Secret key for HMAC-SHA256 signature verification | [optional]
**events** | **string[]** | Events to subscribe to (at least one required) |
**is_active** | **bool** | Enable or disable webhook delivery. Defaults to &#x60;true&#x60; when omitted. | [optional] [default to true]
**custom_headers** | **array<string,string>** | Custom headers to include in webhook requests | [optional]
**disabled_resource_groups** | **string[]** | Resource groups this subscription does not receive (opt-out denylist). Omit or send an empty array to receive every event in &#x60;events&#x60;. Listing a group here drops its events before delivery and on every replay path. Set at creation it applies to everything this subscription ever receives; changed later via PUT it applies to events emitted after the change, with a five-minute tail for events already queued (see that operation). When the caller is a restricted (zrk_) key, that key&#39;s own disabled groups are unioned into whatever you send here, so a restricted key can never create a subscription wider than itself. | [optional]
**profile_ids** | **string[]** | Profiles this subscription receives events for. Omit or send an empty array to receive every profile. Every id must be a profile in your team, otherwise the request fails with 404 &#x60;profile_not_found&#x60; and nothing is created. Typical use is routing the profile that holds test accounts to a staging endpoint. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
