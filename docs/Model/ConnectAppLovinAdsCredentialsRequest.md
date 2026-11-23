# # ConnectAppLovinAdsCredentialsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_key** | **string** | Conversion API key from the Keys page of AppLovin Axon Ads Manager. Sent with eventKey. | [optional]
**event_key** | **string** | Event Key from the Keys page of AppLovin Axon Ads Manager: 8 to 128 letters, digits, dots, dashes or underscores. Sent with apiKey. | [optional]
**campaign_api_key** | **string** | Campaign Management API key from the Keys page of ads.axon.ai (visible to account Admins only). Sent with accountId. Lets Zernio read, create and manage campaigns and creative sets. | [optional]
**account_id** | **string** | Numeric AppLovin account id (Account menu, then Go to settings, in ads.axon.ai). Sent with campaignApiKey. | [optional]
**reconnect_account_id** | **string** | The Zernio id of the AppLovin connection being reconnected (a connection on this profile). The keys sent update that connection, which keeps its identity, instead of creating one: send it to add or replace keys on an existing connection. | [optional]
**report_key** | **string** | Optional Report Key from the Keys page of your AppLovin account. With it, Zernio syncs AppLovin spend per campaign. | [optional]
**name** | **string** | Optional display name for the account. | [optional]
**profile_id** | **string** | Your Zernio profile ID |
**state** | **string** | Optional state passthrough for the connect flow. | [optional]
**redirect_url** | **string** | Optional URL to redirect to after a successful connection, echoed back as redirectUrl. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
