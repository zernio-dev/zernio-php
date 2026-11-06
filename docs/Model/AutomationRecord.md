# # AutomationRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**kind** | **string** |  |
**status** | **string** |  |
**version** | **string** | Send it back as &#x60;If-Match&#x60; when editing, so an edit made after someone else saved is refused. |
**last_check_at** | **\DateTime** | Null until an ad rule first checks. Always null for event and scheduled automations; their checks list when they ran. |
**next_check_at** | **\DateTime** | Null while paused. Always null for event and scheduled automations. |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**template** | [**\Zernio\Model\AutomationRecordTemplate**](AutomationRecordTemplate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
