# # UpdateAccountRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**username** | **string** |  | [optional]
**display_name** | **string** |  | [optional]
**x_capabilities** | [**\Zernio\Model\UpdateAccountRequestXCapabilities**](UpdateAccountRequestXCapabilities.md) |  | [optional]
**meta_ads_sync_enabled** | **bool** | Facebook only (400 &#x60;invalid_field_value&#x60; on any other platform). Off by default for every Facebook account.  &#x60;true&#x60; makes this account sync the Meta ads of the ad accounts it reaches, like a &#x60;metaads&#x60; connection.  - The first sync starts at once (14 days, then 90 days of history in the background) and fires &#x60;account.ads.initial_sync_completed&#x60; for this &#x60;accountId&#x60; with &#x60;platform: metaads&#x60;. - It then refreshes on the Meta Ads schedule. - Each switch from &#x60;false&#x60; to &#x60;true&#x60; runs another initial sync and fires the webhook again. Sending &#x60;true&#x60; while it is on changes nothing. - Needs &#x60;ads_management&#x60; and &#x60;ads_read&#x60; on the account (403 &#x60;reconnect_required&#x60; otherwise, with &#x60;details.requiredPermissions&#x60;). - Needs ads access (403 &#x60;ads_addon_required&#x60;) and room in the managed ads allowance (403 &#x60;ads_allowance_exceeded&#x60;). - While a &#x60;metaads&#x60; connection has this account as &#x60;parentAccountId&#x60;, that connection syncs the ads instead.  Synced active ads count on the managed ads meter like ads from a Meta Ads connection.  &#x60;false&#x60; stops the sync. Ads already synced are kept, never deleted: they stop updating and stop counting on the meter, and a &#x60;metaads&#x60; connection of yours that reaches the same ad account takes them over. Posting, inbox and comments on the account are not affected. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
