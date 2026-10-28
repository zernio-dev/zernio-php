# # GetBalance200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available_cents** | **int** | Balance you can transfer now. Negative after a dispute or refund of a top-up that was already spent; transfers are refused while it is negative. | [optional]
**pending_cents** | **int** | Paid card top-ups still on hold. Card top-ups become available after 7 days. | [optional]
**pending_releases** | [**\Zernio\Model\GetBalance200ResponsePendingReleasesInner[]**](GetBalance200ResponsePendingReleasesInner.md) | Card top-ups on hold, each with the time it becomes available. | [optional]
**pending_topup_cents** | **int** | Top-ups started but not paid yet. | [optional]
**currency** | **string** |  | [optional]
**recent_topups** | [**\Zernio\Model\TreasuryTopup[]**](TreasuryTopup.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
