# # WebhookPayloadConversionConversion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** |  |
**event_name** | **string** |  |
**event_time** | **\DateTime** |  |
**received_at** | **\DateTime** |  |
**source** | **string** | Who sent it: &#x60;api&#x60;, &#x60;relay&#x60;, a lead form (&#x60;meta_leads&#x60;, &#x60;google_leads&#x60;, &#x60;linkedin_leads&#x60;, &#x60;tiktok_leads&#x60;), a store (&#x60;shopify&#x60;, &#x60;woocommerce&#x60;) or &#x60;hubspot&#x60;. |
**action_source** | **string** |  | [optional]
**value** | **float** |  | [optional]
**currency** | **string** |  | [optional]
**source_url** | **string** | Origin, path and attribution parameters only. | [optional]
**utm** | [**\Zernio\Model\StoredEventUtm**](StoredEventUtm.md) |  | [optional]
**zrn** | **string** |  | [optional]
**click_ids** | [**\Zernio\Model\StoredEventClickIds**](StoredEventClickIds.md) |  | [optional]
**destinations_sent** | **int** |  | [optional]
**has_email** | **bool** |  | [optional]
**has_phone** | **bool** |  | [optional]
**has_external_id** | **bool** |  | [optional]
**campaign** | [**\Zernio\Model\WebhookPayloadConversionConversionCampaign**](WebhookPayloadConversionConversionCampaign.md) |  |
**campaign_match** | **string** | &#x60;matched&#x60;, or why there is no campaign: &#x60;no_hint&#x60;, &#x60;no_campaign&#x60;, &#x60;ambiguous&#x60;, &#x60;not_counted&#x60; or &#x60;match_failed&#x60;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
