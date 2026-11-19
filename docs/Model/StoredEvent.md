# # StoredEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** |  | [optional]
**profile_id** | **string** | The profile the event was stored under. | [optional]
**source** | **string** | Where the event came from: &#x60;api&#x60;, &#x60;relay&#x60;, &#x60;web&#x60;, &#x60;shopify&#x60;, &#x60;woocommerce&#x60;, &#x60;stripe&#x60;, &#x60;hubspot&#x60;, &#x60;salesforce&#x60;, &#x60;meta_leads&#x60;, &#x60;google_leads&#x60;, &#x60;linkedin_leads&#x60;, &#x60;tiktok_leads&#x60; or &#x60;postback&#x60; (an affiliate network&#39;s postback to a tracking link). | [optional]
**event_name** | **string** |  | [optional]
**event_time** | **\DateTime** |  | [optional]
**received_at** | **\DateTime** |  | [optional]
**action_source** | **string** |  | [optional]
**value** | **float** |  | [optional]
**currency** | **string** |  | [optional]
**source_url** | **string** | Origin, path and attribution parameters only. | [optional]
**utm** | [**\Zernio\Model\StoredEventUtm**](StoredEventUtm.md) |  | [optional]
**zrn** | **string** | Ad ID from the &#x60;zrn&#x60; parameter Zernio adds to links of ads it creates. | [optional]
**click_ids** | [**\Zernio\Model\StoredEventClickIds**](StoredEventClickIds.md) |  | [optional]
**destinations_sent** | **int** | Destinations the event was forwarded to. | [optional]
**has_email** | **bool** |  | [optional]
**has_phone** | **bool** |  | [optional]
**has_external_id** | **bool** |  | [optional]
**paired_event_id** | **string** | In a &#x60;GET /v1/events&#x60; page: the other copy of the same conversion, when a website tag (&#x60;web&#x60;) and a server send both stored it under different event ids (same event name, a shared identifier, at most 30 minutes apart). &#x60;null&#x60; otherwise, and always &#x60;null&#x60; from &#x60;GET /v1/events/{eventId}&#x60;. | [optional]
**ad** | [**\Zernio\Model\StoredEventAd**](StoredEventAd.md) |  | [optional]
**campaign** | [**\Zernio\Model\StoredEventCampaign**](StoredEventCampaign.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
