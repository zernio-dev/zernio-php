# # CommentAutomationStats

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**triggered** | **int** | Matched triggers that reached the audience or send stage. | [optional]
**dms_sent** | **int** |  | [optional]
**dms_failed** | **int** |  | [optional]
**unique_contacts** | **int** |  | [optional]
**tracked_sends** | **int** | DMs sent with a trackable (wrapped) link. CTR denominator: divide clicks by this, not dmsSent. Lags dmsSent for campaigns that predate click tracking. | [optional]
**link_clicks** | **int** | Total clicks on tracked links (bots/prefetch excluded). | [optional]
**unique_clicks** | **int** | Distinct people who clicked a tracked link. | [optional]
**delivered** | **int** | DMs confirmed delivered (Messenger; IG emits no delivery receipt). | [optional]
**read** | **int** | DMs confirmed read (IG messaging_seen / Messenger message_reads). | [optional]
**audience_skipped** | **int** | Triggers the audience rule did not answer with the DM. | [optional]
**follow_gate_sent** | **int** |  | [optional]
**follow_gate_passed** | **int** |  | [optional]
**follow_gate_failed** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
