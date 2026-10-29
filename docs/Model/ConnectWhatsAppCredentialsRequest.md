# # ConnectWhatsAppCredentialsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | Your Zernio profile ID |
**access_token** | **string** | Permanent System User access token from Meta Business Suite |
**waba_id** | **string** | WhatsApp Business Account ID from Meta |
**phone_number_id** | **string** | Phone Number ID from Meta WhatsApp Manager |
**pin** | **string** | The 6-digit two-step verification PIN set on the number. Required if you enabled two-step verification for it, otherwise Meta rejects the Cloud API registration with error 133005 and the number cannot send messages. | [optional]
**oauth_app_id** | **string** | Your own WhatsApp OAuth app (see /v1/connect/oauth-apps) holding the Meta app the access token belongs to. The WABA&#39;s webhooks then go to that app&#39;s own callback URL and every delivery is checked against its app secret. Without it, deliveries come to Zernio&#39;s shared Meta webhook. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
