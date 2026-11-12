# # StartCreatorPayouts200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | Stripe-hosted onboarding page. Send the creator here; Stripe returns them to their Zernio creator page when done. Expires after a few minutes, so request it when the creator clicks. |
**client_secret** | **string** | Account session secret for Stripe&#39;s embedded onboarding component. Only usable on Zernio&#39;s own creator page; integrations use &#x60;url&#x60;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
