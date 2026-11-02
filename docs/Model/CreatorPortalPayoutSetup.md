# # CreatorPortalPayoutSetup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mode** | **string** | How the campaign pays: treasury means through Zernio, so the creator onboards for payouts, which they can do from the moment they join. Earnings wait until it is done. |
**status** | **string** |  |
**country** | **string** |  |
**suggested_country** | **string** | The country the request came from, to preselect before payout setup starts. Null once the payout account has a country, and outside treasury mode. |
**transfers** | [**\Zernio\Model\CreatorPortalPayoutSetupTransfersInner[]**](CreatorPortalPayoutSetupTransfersInner.md) | Treasury payouts sent to the creator. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
