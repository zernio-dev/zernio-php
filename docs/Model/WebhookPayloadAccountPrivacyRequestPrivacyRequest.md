# # WebhookPayloadAccountPrivacyRequestPrivacyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | customer_data_request: the merchant asked for the data you hold about &#x60;customer&#x60;. Send it to the merchant.  customer_redact: erase the data you hold about &#x60;customer&#x60; and the orders in &#x60;orderIds&#x60;.  shop_redact: erase the data you hold about the whole shop. Sent 48 hours after the merchant uninstalled the app. |
**shop_domain** | **string** |  |
**shop_id** | **string** |  |
**customer** | [**\Zernio\Model\WebhookPayloadAccountPrivacyRequestPrivacyRequestCustomer**](WebhookPayloadAccountPrivacyRequestPrivacyRequestCustomer.md) |  |
**order_ids** | **string[]** | The Shopify order ids the request covers. Empty for shop_redact. |
**data_request_id** | **string** | Shopify&#39;s id for a customer_data_request. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
