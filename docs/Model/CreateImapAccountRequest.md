# # CreateImapAccountRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** |  |
**email** | **string** |  |
**name** | **string** | Shown to people the mailbox emails. | [optional]
**password** | **string** | Shortcut for imap.password. | [optional]
**imap** | [**\Zernio\Model\CreateImapAccountRequestImap**](CreateImapAccountRequestImap.md) |  | [optional]
**smtp** | [**\Zernio\Model\CreateImapAccountRequestSmtp**](CreateImapAccountRequestSmtp.md) |  | [optional]
**identities** | [**\Zernio\Model\CreateImapAccountRequestIdentitiesInner[]**](CreateImapAccountRequestIdentitiesInner.md) | Other addresses this mailbox sends as. | [optional]
**dry_run** | **bool** | Run every check and store nothing, for live validation in your own form. | [optional]
**allow_self_signed_certificate** | **bool** | On-premise servers only: accept a certificate that cannot be verified. The hosted page never offers it. | [optional]
**reconnect_account_id** | **string** | Reconnect this account in place with a new password; the stored servers are reused. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
