# # CreateForwardingRuleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** |  |
**account_id** | **string** | Connected ads account ID that owns the destination. |
**destination_id** | **string** | The platform destination: a pixel, a conversion action, a conversion rule, or a GA4 web stream measurement id (&#x60;G-…&#x60;). |
**event_names** | **string[]** |  | [optional]
**sources** | **string[]** | Forward only events from these sources, such as only &#x60;web&#x60; for a tracked website. Leave it out to forward events from every source. | [optional]
**api_secret** | **string** | Google Analytics destinations only, and required for them: the data stream&#39;s Measurement Protocol API secret, from GA4 Admin › Data streams › Measurement Protocol API secrets. Checked with one hit to Google&#39;s validation server (which cannot confirm the secret itself), stored encrypted and never returned. Change it later with &#x60;PATCH /v1/events/forwarding-rules/{ruleId}&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
