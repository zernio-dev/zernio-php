# # ConnectHandoffError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The &#x60;error&#x60; code the flow ended on, as on a redirect_url. &#x60;connect_incomplete&#x60; when the phone reported no outcome, &#x60;connect_unverified&#x60; when it reported an account Zernio could not match to this connect. | [optional]
**message** | **string** |  | [optional]
**details** | **array<string,string>** | The other params the redirect flow appends for that error, such as &#x60;is_user_fixable&#x60;, &#x60;reason&#x60;, &#x60;dashboard_url&#x60;, &#x60;request_id&#x60; and &#x60;stage&#x60;. All optional. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
