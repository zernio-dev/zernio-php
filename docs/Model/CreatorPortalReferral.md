# # CreatorPortalReferral

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The creator&#39;s discount code. Null while the store has not created it yet, or on a link-only campaign. |
**discount_percent** | **int** | What the code takes off an order. |
**tracking_url** | **string** | The landing page with the UTM parameters that credit the creator. Null on a code-only campaign. |
**orders** | [**\Zernio\Model\CreatorPortalReferralOrdersInner[]**](CreatorPortalReferralOrdersInner.md) | The latest 50 credited orders. |
**totals** | [**\Zernio\Model\CreatorPortalReferralTotals**](CreatorPortalReferralTotals.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
