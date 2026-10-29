# # CreateTopupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount_cents** | **int** | Amount in cents, minimum $10 |
**method** | **string** | Only card is available. bank_transfer returns 400 \&quot;Bank transfers are not available yet.\&quot; |
**payment_method_id** | **string** | A saved card of the billing owner&#39;s (&#x60;pm_...&#x60;). Defaults to the default payment method. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
