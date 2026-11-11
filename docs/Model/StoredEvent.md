# # StoredEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** |  | [optional]
**source** | **string** | Where the event came from: &#x60;api&#x60;, &#x60;relay&#x60;, &#x60;web&#x60;, &#x60;shopify&#x60;, &#x60;woocommerce&#x60;, &#x60;hubspot&#x60;, &#x60;meta_leads&#x60;, &#x60;google_leads&#x60;, &#x60;linkedin_leads&#x60; or &#x60;tiktok_leads&#x60;. | [optional]
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
**ad** | [**\Zernio\Model\StoredEventAd**](StoredEventAd.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
