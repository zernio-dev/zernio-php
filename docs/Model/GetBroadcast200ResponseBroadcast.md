# # GetBroadcast200ResponseBroadcast

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**message** | [**\Zernio\Model\GetBroadcast200ResponseBroadcastMessage**](GetBroadcast200ResponseBroadcastMessage.md) |  | [optional]
**template** | [**\Zernio\Model\GetBroadcast200ResponseBroadcastTemplate**](GetBroadcast200ResponseBroadcastTemplate.md) |  | [optional]
**segment_filters** | [**\Zernio\Model\GetBroadcast200ResponseBroadcastSegmentFilters**](GetBroadcast200ResponseBroadcastSegmentFilters.md) |  | [optional]
**status** | **string** |  | [optional]
**scheduled_at** | **\DateTime** |  | [optional]
**started_at** | **\DateTime** |  | [optional]
**completed_at** | **\DateTime** |  | [optional]
**recipient_count** | **int** |  | [optional]
**sent_count** | **int** | Recipients whose latest status is &#x60;sent&#x60;: the platform accepted the message and has not confirmed delivery yet. Each recipient counts once, under its latest status, so everyone the broadcast went out to is sentCount + deliveredCount + readCount. | [optional]
**delivered_count** | **int** | Recipients whose latest status is &#x60;delivered&#x60;, not read yet. Everyone it was delivered to is deliveredCount + readCount. | [optional]
**read_count** | **int** | Recipients whose latest status is &#x60;read&#x60;. | [optional]
**failed_count** | **int** | Recipients whose send failed. | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
