# # WebhookPayloadCampaignPayoutPayoutFailure

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transfer_id** | **string** | The Zernio transfer that did not go through. |
**amount_cents** | **int** | The payout amount that did not reach the creator. It is returned to payable, minus any amount a rejection made while the payout was in flight claws back to the campaign budget; payableCents is the balance after both. |
**reason** | **string** | returned: Stripe refused the transfer. stale: it could not be confirmed with Stripe within 24 hours. reversed: Stripe reversed it after it was sent; the settlement is undone. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
