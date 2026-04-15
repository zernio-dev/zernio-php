# # ConversionEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_name** | **string** | Standard event name (Purchase, Lead, CompleteRegistration, AddToCart, InitiateCheckout, AddPaymentInfo, Subscribe, StartTrial, ViewContent, Search, Contact, SubmitApplication, Schedule) or a custom string (only supported on platforms that accept custom events). |
**event_time** | **int** | When the conversion happened, in unix seconds. |
**event_id** | **string** | Unique dedup key. The same eventId must be used on pixel + CAPI to prevent double-counting. Mapped to event_id on Meta and transactionId on Google. |
**value** | **float** | Conversion value in the specified currency. | [optional]
**currency** | **string** | ISO 4217 currency code. | [optional]
**user** | [**\Late\Model\ConversionEventUser**](ConversionEventUser.md) |  |
**items** | [**\Late\Model\ConversionEventItemsInner[]**](ConversionEventItemsInner.md) | Item-level detail for ecommerce events. | [optional]
**source_url** | **string** | URL where the conversion originated (used by Meta). | [optional]
**action_source** | **string** | Where the conversion happened. Used by Meta; Google ignores. | [optional]
**platform_data** | **array<string,mixed>** | Escape hatch for platform-specific fields we haven&#39;t normalized. Forwarded as-is. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
