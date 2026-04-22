# # QueueSchedule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** | Unique queue identifier | [optional]
**profile_id** | **string** | Profile ID this queue belongs to | [optional]
**name** | **string** | Queue name (e.g., \&quot;Morning Posts\&quot;, \&quot;Evening Content\&quot;) | [optional]
**timezone** | **string** | IANA timezone (e.g., America/New_York) | [optional]
**slots** | [**\Zernio\Model\QueueSlot[]**](QueueSlot.md) |  | [optional]
**active** | **bool** | Whether the queue is active | [optional]
**is_default** | **bool** | Whether this is the default queue for the profile (used when no queueId specified) | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
