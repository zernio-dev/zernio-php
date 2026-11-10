# # SearchInboxConversations200ResponseMeta

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounts_queried** | **int** |  | [optional]
**accounts_failed** | **int** |  | [optional]
**failed_accounts** | [**\Zernio\Model\SearchInboxConversations200ResponseMetaFailedAccountsInner[]**](SearchInboxConversations200ResponseMetaFailedAccountsInner.md) |  | [optional]
**last_updated** | **\DateTime** |  | [optional]
**content_not_retained** | **bool** | True when a searched account belongs to a team that does not retain content. Message text is not searchable there, only identifiers match. | [optional]
**accounts_skipped** | [**\Zernio\Model\ListInboxConversations200ResponseMetaAccountsSkippedInner[]**](ListInboxConversations200ResponseMetaAccountsSkippedInner.md) | Connected messaging accounts that cannot be searched (live-fetched platforms) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
