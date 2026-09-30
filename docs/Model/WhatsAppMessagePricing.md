# # WhatsAppMessagePricing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billable** | **bool** | Whether Meta bills this message. Meta has announced it will deprecate this field. |
**pricing_model** | **string** | &#x60;PMP&#x60; (per-message pricing) or &#x60;CBP&#x60; (conversation-based, messages before 2025-07-01). |
**category** | **string** | Pricing category as Meta sends it, for example &#x60;marketing&#x60;, &#x60;marketing_lite&#x60;, &#x60;utility&#x60;, &#x60;authentication&#x60;, &#x60;authentication-international&#x60;, &#x60;service&#x60;, &#x60;referral_conversion&#x60;. |
**type** | **string** | &#x60;regular&#x60; (billable), &#x60;free_customer_service&#x60; or &#x60;free_entry_point&#x60;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
