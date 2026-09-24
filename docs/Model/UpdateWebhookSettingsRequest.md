# # UpdateWebhookSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**webhook_id** | **string** | Webhook ID to update. Required unless the deprecated &#x60;_id&#x60; is sent instead. | [optional]
**_id** | **string** | Alias of webhookId, kept for existing callers | [optional]
**name** | **string** | Webhook name (1-50 characters). Must be non-empty if provided. | [optional]
**url** | **string** | Webhook endpoint URL (must be a valid URL, whitespace trimmed). Must be a valid URL if provided. | [optional]
**secret** | **string** | Secret key for HMAC-SHA256 signature verification | [optional]
**events** | **string[]** | Events to subscribe to. Must contain at least one event if provided. | [optional]
**is_active** | **bool** | Enable or disable webhook delivery | [optional]
**custom_headers** | **array<string,string>** | Custom headers to include in webhook requests | [optional]
**disabled_resource_groups** | **string[]** | Replaces the subscription&#39;s denylist. Send an empty array to clear it and receive every event in &#x60;events&#x60; again. Omitting the field leaves the current denylist untouched. Applies to events emitted after the update; already-queued events can still deliver for up to five minutes after they were enqueued. When the caller is a restricted (zrk_) key, that key&#39;s own disabled groups are unioned back in either way, so a restricted key can neither clear nor widen a subscription past its own groups. | [optional]
**profile_ids** | **string[]** | Replaces the subscription&#39;s profile allowlist. Send an empty array to receive every profile again. Omitting the field leaves the current list untouched. Every id must be a profile in your team, otherwise the request fails with 404 &#x60;profile_not_found&#x60; and nothing changes. Applies to events emitted after the update. Sending the stored list back unchanged is accepted without re-validation, so an endpoint stays editable after a listed profile is deleted. | [optional]
**account_ids** | **string[]** | Replaces the subscription&#39;s account allowlist. Send an empty array to receive every account again. Omitting the field leaves the current list untouched. Every id must be an account in your team, otherwise the request fails with 404 &#x60;account_not_found&#x60; and nothing changes. Sending the stored list back unchanged is accepted without re-validation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
