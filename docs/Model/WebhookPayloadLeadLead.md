# # WebhookPayloadLeadLead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Zernio lead ID (AdLead document ID) |
**platform** | **string** | The ad network the lead came from. | [optional]
**leadgen_id** | **string** | The network&#39;s lead id: Meta&#39;s leadgen_id, or the Google lead form submission id |
**form_id** | **string** | Lead Gen form ID the lead was submitted against |
**form_name** | **string** | Human-readable form name (best-effort; may be null) | [optional]
**ad_id** | **string** | Meta ad ID that drove the lead (null for organic/test leads) | [optional]
**adset_id** | **string** |  | [optional]
**campaign_id** | **string** |  | [optional]
**fields** | **array<string,string>** | Flattened question key -&gt; answer map. For multiple-choice questions the value is the option key (e.g. \&quot;k1\&quot;), not the display label. |
**consents** | [**\Zernio\Model\AdLeadConsent[]**](AdLeadConsent.md) | Sent on every delivery since 2026-10-25. Absent when an older event is redelivered, since redeliveries replay the stored payload. | [optional]
**is_organic** | **bool** | True when the lead came from an organic post rather than a paid ad |
**created_at** | **\DateTime** | Meta&#39;s lead creation time (ISO 8601) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
