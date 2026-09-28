# # RcsLaunchRequestConsent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**opt_in_methods** | [**\Zernio\Model\RcsLaunchRequestConsentOptInMethodsInner[]**](RcsLaunchRequestConsentOptInMethodsInner.md) |  |
**call_to_action** | **string** | The opt-in wording people agree to. |
**call_to_action_url** | **string** | Required for WEBSITE opt-in. | [optional]
**call_to_action_media_url** | **string** | Screenshot of the opt-in. Required for WEBSITE and MOBILE_APP opt-in. | [optional]
**double_opt_in** | **bool** |  |
**double_opt_in_message** | **string** | Required when doubleOptIn is true. | [optional]
**opt_in_message** | **string** |  |
**help_response** | **string** |  |
**opt_out_response** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
