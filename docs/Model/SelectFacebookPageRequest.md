# # SelectFacebookPageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | Profile ID from your classic connection flow. |
**page_id** | **string** | A Page ID from the granted Pages returned by listFacebookPages. |
**page_ids** | **string[]** | Several Page IDs to connect from one sign-in, each as its own account. With two or more distinct IDs the response lists &#x60;accounts&#x60; and &#x60;failed&#x60; instead of &#x60;account&#x60;, and the request is refused with 400 while a profile holds one Facebook account and on a reconnect or an ads connect, which pick exactly one Page. A single distinct ID behaves exactly like pageId. | [optional]
**temp_token** | **string** | Temporary Facebook access token from OAuth. |
**user_profile** | [**\Zernio\Model\SelectFacebookPageRequestOneOfUserProfile**](SelectFacebookPageRequestOneOfUserProfile.md) |  |
**redirect_url** | **string** | Optional custom redirect URL to return to after selection. | [optional]
**selection_token** | **string** | Encrypted dashboard business-login grant. Expires after ten minutes. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
