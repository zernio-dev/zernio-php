# # InboxMetricRow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **string** | Start of the period: the day or the Monday of the week, never before fromDate. With granularity&#x3D;total, fromDate. |
**account_id** | **string** | With groupBy&#x3D;account. | [optional]
**platform** | **string** | With groupBy&#x3D;account or groupBy&#x3D;platform. | [optional]
**source** | **string** | With groupBy&#x3D;source; null for messages with no source recorded, such as messages received. | [optional]
**day_of_week** | **int** | With groupBy&#x3D;hourOfWeek: 1 is Monday, 7 is Sunday, in UTC. | [optional]
**hour** | **int** | With groupBy&#x3D;hourOfWeek: 0 to 23, in UTC. | [optional]
**response_time_bucket** | [**\Zernio\Model\ResponseTimeBucket**](ResponseTimeBucket.md) | With groupBy&#x3D;responseTimeBucket. | [optional]
**account** | [**\Zernio\Model\InboxMetricRowAccount**](InboxMetricRowAccount.md) |  | [optional]
**conversation_id** | **string** | With groupBy&#x3D;conversation or conversationId: the Zernio conversation id, or the id logged with the messages when the conversation no longer exists. | [optional]
**first_message_at** | **string** | With conversation rows: first message, read receipt or failure in the period, UTC. null for a conversation read by id with no activity in the period. | [optional]
**last_message_at** | **string** | With conversation rows: last message, read receipt or failure in the period, UTC. | [optional]
**conversation** | [**\Zernio\Model\InboxMetricRowConversation**](InboxMetricRowConversation.md) |  | [optional]
**metrics** | **array<string,float>** | Each metric asked; response times are null when no message received got a reply. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
