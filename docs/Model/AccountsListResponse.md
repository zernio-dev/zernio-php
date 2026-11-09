# # AccountsListResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounts** | [**\Zernio\Model\ListedAccount[]**](ListedAccount.md) |  |
**has_analytics_access** | **bool** | Whether user has analytics add-on access |
**pagination** | [**\Zernio\Model\AccountsListResponsePagination**](AccountsListResponsePagination.md) |  | [optional]
**warning** | **string** | Only when an unpaged API request was cut at 500 accounts: how to list the rest with cursor paging. | [optional]
**profile_totals** | **array<string,int>** | Only with profileIds and perProfile. Accounts matching the filters per profile ID; a profile with none is absent. | [optional]
**status_counts** | [**\Zernio\Model\AccountsListResponseStatusCounts**](AccountsListResponseStatusCounts.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
