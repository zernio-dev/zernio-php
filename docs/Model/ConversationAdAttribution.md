# # ConversationAdAttribution

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_id** | **string** | Meta&#39;s ad ID: &#x60;meta_ad_id&#x60; on Instagram and Facebook, &#x60;ctwa_source_id&#x60; on WhatsApp when &#x60;ctwa_source_type&#x60; is &#x60;ad&#x60;. Accepted by &#x60;GET /v1/ads/{adId}&#x60;. |
**name** | **string** | The synced ad&#39;s name, else the ad title or headline Meta sent. |
**synced** | **bool** | True when the ad was found in your synced ads. |
**campaign_id** | **string** | Meta campaign ID. Synced ads only. |
**campaign_name** | **string** | Campaign name. Synced ads only. |
**ad_set_id** | **string** | Meta ad set ID. Synced ads only. |
**ad_set_name** | **string** | Ad set name. Synced ads only. |
**ad_account_id** | **string** | Meta ad account ID (act_...). Synced ads only. |
**ad_account_name** | **string** | Ad account name. Synced ads only. |
**platform_post_id** | **string** | The post the ad promotes, from the synced ad or else Meta&#39;s &#x60;post_id&#x60; on the click. |
**is_external** | **bool** | True when the ad was created outside Zernio (synced from Ads Manager), false when created through Zernio, null when not synced. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
