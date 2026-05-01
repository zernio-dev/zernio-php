# # WebhookPayloadAccountAdsInitialSyncCompletedAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The account&#39;s unique identifier (same as used in /v1/accounts/{accountId}) |
**profile_id** | **string** | The profile&#39;s unique identifier this account belongs to |
**platform** | **string** |  |
**username** | **string** |  |
**display_name** | **string** |  | [optional]
**platform_user_id** | **string** | The platform-side account/ad-account ID (e.g. Meta ad account ID). | [optional]
**profile_picture** | **string** | URL of the account&#39;s profile picture, when available. | [optional]
**platform_ad_account_id** | **string** | When the consumer scoped the connect call to a single ad account, this echoes that ID back so the webhook can be correlated to the originating connect request without consulting the consumer&#39;s DB. Meta uses the &#x60;act_*&#x60; shape. | [optional]
**platform_ad_account_ids** | **string[]** | Every ad-account ID that the connected token could see at discovery time. Useful for \&quot;we synced ads from these accounts\&quot; UX without a follow-up API call. Empty array when the token had no ad-account visibility. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
