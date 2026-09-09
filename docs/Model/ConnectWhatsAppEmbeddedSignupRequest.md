# # ConnectWhatsAppEmbeddedSignupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Authorization code from the WA_EMBEDDED_SIGNUP postMessage |
**profile_id** | **string** |  |
**waba_id** | **string** | WhatsApp Business Account id, when the SDK reported one | [optional]
**phone_number_id** | **string** |  | [optional]
**is_coexistence** | **bool** | Number is also live in the WhatsApp Business app | [optional]
**expected_phone_number** | **string** | Rejects the connect when Meta returns a different number | [optional]
**redirect_url** | **string** | Hosted signup page only. When present, the response also carries &#x60;redirectUrl&#x60;, the URL the user should land on, with the outcome mapped exactly like the redirect flow (success params, or &#x60;error&#x60; and &#x60;platform&#x60; with the same values). Must be an absolute http(s) URL or a custom app scheme. | [optional]
**echo_connect_token** | **bool** | Hosted signup page only. Append the connect token to the success redirect, as the redirect flow does for API-key callers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
