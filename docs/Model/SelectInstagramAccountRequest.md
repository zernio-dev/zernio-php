# # SelectInstagramAccountRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | Profile ID from your connection flow |
**page_id** | **string** | The Facebook Page ID selected by the user, from GET /v1/connect/instagram/select-account. Send this or pageIds, not both. | [optional]
**page_ids** | **string[]** | Several Page IDs whose linked Instagram accounts to connect from one sign-in, each as its own account. With two or more distinct IDs the response lists &#x60;accounts&#x60; and &#x60;failed&#x60; instead of &#x60;account&#x60;, and the request is refused with 400 on a reconnect or an ads connect. A single distinct ID behaves exactly like pageId. | [optional]
**temp_token** | **string** | Long-lived Facebook user access token from the OAuth callback redirect. Required unless sent in the X-Temp-Token header. | [optional]
**connect_flow** | **string** | Set by the Zernio-hosted picker, whose user token stays in an httpOnly cookie. Integrators send tempToken instead. | [optional]
**redirect_url** | **string** | Optional custom redirect URL to return to after selection | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
