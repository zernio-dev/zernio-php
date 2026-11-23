# # GetEventsAccuracy200ResponseDestinationsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rule_id** | **string** | The forwarding rule. | [optional]
**profile_id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**platform** | **string** | Ad platform, such as &#x60;metaads&#x60; or &#x60;googleads&#x60;. | [optional]
**account_name** | **string** |  | [optional]
**destination_id** | **string** |  | [optional]
**sales** | **int** | Real sales in the period from the sources the rule takes. | [optional]
**sent** | **int** | Sales a send was tried for. | [optional]
**accepted** | **int** | Sales the platform accepted, by the latest attempt. | [optional]
**failed** | **int** |  | [optional]
**retrying** | **int** |  | [optional]
**not_sent** | **int** | Sales never sent: no ad consent, no identifier the platform matches on, or left out by the rule&#39;s event names. | [optional]
**accuracy** | **float** | &#x60;accepted / sent&#x60;, from 0 to 1. &#x60;null&#x60; with no sale sent. | [optional]
**deliveries** | [**\Zernio\Model\GetEventsAccuracy200ResponseDestinationsInnerDeliveries**](GetEventsAccuracy200ResponseDestinationsInnerDeliveries.md) |  | [optional]
**match** | [**\Zernio\Model\GetEventsAccuracy200ResponseDestinationsInnerMatch**](GetEventsAccuracy200ResponseDestinationsInnerMatch.md) |  | [optional]
**match_rate** | **float** | &#x60;match.identified / match.events&#x60;. &#x60;null&#x60; with nothing sent. | [optional]
**failure_reasons** | [**\Zernio\Model\GetEventsAccuracy200ResponseDestinationsInnerFailureReasonsInner[]**](GetEventsAccuracy200ResponseDestinationsInnerFailureReasonsInner.md) | Why the destination refused events in the period, by refusal code, most events first (at most 5). Empty when it refused none. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
