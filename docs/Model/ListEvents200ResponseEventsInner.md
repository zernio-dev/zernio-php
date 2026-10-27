# # ListEvents200ResponseEventsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** |  | [optional]
**event_name** | **string** |  | [optional]
**event_time** | **\DateTime** |  | [optional]
**received_at** | **\DateTime** |  | [optional]
**action_source** | **string** |  | [optional]
**value** | **float** |  | [optional]
**currency** | **string** |  | [optional]
**source_url** | **string** | Origin, path and attribution parameters only. | [optional]
**utm** | [**\Zernio\Model\ListEvents200ResponseEventsInnerUtm**](ListEvents200ResponseEventsInnerUtm.md) |  | [optional]
**zrn** | **string** | Ad ID from the &#x60;zrn&#x60; parameter Zernio adds to links of ads it creates. | [optional]
**click_ids** | [**\Zernio\Model\ListEvents200ResponseEventsInnerClickIds**](ListEvents200ResponseEventsInnerClickIds.md) |  | [optional]
**destinations_sent** | **int** | Destinations the event was forwarded to. | [optional]
**has_email** | **bool** |  | [optional]
**has_phone** | **bool** |  | [optional]
**has_external_id** | **bool** |  | [optional]
**ad** | [**\Zernio\Model\ListEvents200ResponseEventsInnerAd**](ListEvents200ResponseEventsInnerAd.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
