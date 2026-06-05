# # GetInboxConversationAnalytics200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** |  | [optional]
**conversation_id** | **string** | The platformConversationId | [optional]
**mongo_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**from** | **\DateTime** |  | [optional]
**to** | **\DateTime** |  | [optional]
**summary** | [**\Zernio\Model\GetInboxConversationAnalytics200ResponseSummary**](GetInboxConversationAnalytics200ResponseSummary.md) |  | [optional]
**timeseries** | [**\Zernio\Model\GetInboxVolume200ResponseTimeseriesInner[]**](GetInboxVolume200ResponseTimeseriesInner.md) |  | [optional]
**by_source** | [**\Zernio\Model\GetInboxConversationAnalytics200ResponseBySourceInner[]**](GetInboxConversationAnalytics200ResponseBySourceInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
