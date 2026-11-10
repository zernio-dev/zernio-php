# # WebhookPayloadAccountConnectedAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The account&#39;s unique identifier (same as used in /v1/accounts/{accountId}) |
**profile_id** | **string** | The profile&#39;s unique identifier this account belongs to |
**platform** | **string** |  |
**username** | **string** |  |
**display_name** | **string** |  | [optional]
**reconnected** | **bool** | Present and true when a reconnect restored an existing account in place, keeping its accountId. | [optional]
**replaced_account_id** | **string** | The IMAP account this connection replaces, when a reconnected mailbox moved to Google or Microsoft. That account is retired at the same time, with account.disconnected and reasonCode replaced. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
