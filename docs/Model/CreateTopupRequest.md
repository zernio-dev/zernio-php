# # CreateTopupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount_cents** | **int** | Amount to credit to your balance, in cents: $5 to $100,000. Tax is charged on top; no card fee. |
**method** | **string** | Only card is available. bank_transfer returns 400 \&quot;Bank transfers are not available yet.\&quot; |
**payment_method_id** | **string** | A saved card of the billing owner&#39;s (&#x60;pm_...&#x60;). Defaults to the default payment method. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
