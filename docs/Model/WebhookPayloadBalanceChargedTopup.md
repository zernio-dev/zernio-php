# # WebhookPayloadBalanceChargedTopup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The top-up id, as in GET /v1/balance (&#x60;recentTopups&#x60;) and its invoice and receipt endpoints. |
**trigger** | **string** | &#x60;manual&#x60;: someone topped up in Billing or through the API. &#x60;auto_top_up&#x60;: the auto top-up rule charged the card. |
**amount_cents** | **int** | Added to the balance, in USD cents. |
**tax_cents** | **int** | VAT charged on top, in USD cents (0 when none applies). |
**charged_cents** | **int** | What the card was charged, in USD cents: amount plus tax. |
**currency** | **string** |  |
**card** | [**\Zernio\Model\WebhookPayloadBalanceChargedTopupCard**](WebhookPayloadBalanceChargedTopupCard.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
