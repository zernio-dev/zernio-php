# # ListInboxReviews200ResponseMeta

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounts_queried** | **int** |  | [optional]
**accounts_failed** | **int** |  | [optional]
**failed_accounts** | [**\Zernio\Model\ListInboxConversations200ResponseMetaFailedAccountsInner[]**](ListInboxConversations200ResponseMetaFailedAccountsInner.md) |  | [optional]
**last_updated** | **\DateTime** |  | [optional]
**accounts_skipped** | [**\Zernio\Model\ListInboxConversations200ResponseMetaAccountsSkippedInner[]**](ListInboxConversations200ResponseMetaAccountsSkippedInner.md) | Connected accounts that were not queried: their platform does not support this feature, or the account is not enabled for it | [optional]
**truncated_accounts** | [**\Zernio\Model\ListInboxConversations200ResponseMetaAccountsSkippedInner[]**](ListInboxConversations200ResponseMetaAccountsSkippedInner.md) | Accounts whose listing hit the read budget with pages left: their reviews in data, and the Google Business Profile summary, are partial. Empty when every account was read in full. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
