# # SendEmailDraftRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**send_at** | **\DateTime** | Send later, 1 minute to 30 days ahead: answers 202 with a &#x60;ScheduledEmail&#x60;. The draft stays editable in the mailbox and goes out as it stands then. Cancelling with &#x60;DELETE /v1/email/messages/scheduled/{scheduleId}&#x60; keeps the draft. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
