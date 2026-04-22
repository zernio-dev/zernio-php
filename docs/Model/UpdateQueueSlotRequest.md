# # UpdateQueueSlotRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** |  |
**queue_id** | **string** | Queue ID to update (optional) | [optional]
**name** | **string** | Queue name | [optional]
**timezone** | **string** |  |
**slots** | [**\Zernio\Model\QueueSlot[]**](QueueSlot.md) |  |
**active** | **bool** |  | [optional] [default to true]
**set_as_default** | **bool** | Make this queue the default | [optional]
**reshuffle_existing** | **bool** | Whether to reschedule existing queued posts to match new slots | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
