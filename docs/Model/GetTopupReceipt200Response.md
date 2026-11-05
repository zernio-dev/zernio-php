# # GetTopupReceipt200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** |  |
**format** | **string** |  |
**invoice_url** | **string** | The invoice PDF; null when the payment made no invoice. | [optional]
**receipt_url** | **string** | Stripe&#39;s card receipt page for the charge. | [optional]
**amount_cents** | **int** | As in the top-up list. |
**fee_cents** | **int** | Card fee paid, as in the top-up list. |
**tax_cents** | **int** | Tax charged on top of amountCents, as in the top-up list. | [optional]
**charged_cents** | **int** | What the card was charged, tax included: the total on the receipt. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
