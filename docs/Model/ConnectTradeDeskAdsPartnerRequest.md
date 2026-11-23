# # ConnectTradeDeskAdsPartnerRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**partner_id** | **string** | Trade Desk Partner ID, a short code such as &#x60;ptn1234&#x60;. Stored and echoed lowercased. |
**api_token** | **string** | API token of a Trade Desk user with API access to the partner. |
**ad_account_ids** | **string[]** | Advertiser ids to keep. Left out or empty, a new connection keeps every advertiser and a reconnect keeps its saved selection. | [optional]
**name** | **string** | Optional display name for the account. | [optional]
**profile_id** | **string** | Your Zernio profile ID |
**state** | **string** | Optional state passthrough for the connect flow. | [optional]
**redirect_url** | **string** | Optional URL to redirect to after a successful connection, echoed back as redirectUrl. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
