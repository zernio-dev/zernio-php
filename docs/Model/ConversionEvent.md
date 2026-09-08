# # ConversionEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_name** | **string** | Standard event name (Purchase, Lead, CompleteRegistration, AddToCart, InitiateCheckout, AddPaymentInfo, Subscribe, StartTrial, ViewContent, Search, Contact, SubmitApplication, Schedule) or a custom string (only supported on platforms that accept custom events: Meta and OpenAI Ads).  Per-platform behavior: - Meta: free-form; standard names match Meta&#39;s built-ins. - Google: ignored. The conversion action&#39;s category determines the type. - LinkedIn: ignored. The conversion rule&#39;s &#x60;type&#x60; is locked to the destination. - OpenAI Ads: a fixed subset of standard names (Purchase, Lead, AddToCart, ViewContent, InitiateCheckout, CompleteRegistration, Subscribe, StartTrial, Schedule) maps 1:1 onto OpenAI&#39;s own event-type enum; anything else is sent as a custom event with the name preserved. |
**event_time** | **int** | When the conversion happened, in unix seconds. |
**event_id** | **string** | Unique dedup key. The same eventId must be used on pixel + CAPI to prevent double-counting. Mapped to event_id on Meta, transactionId on Google, eventId on LinkedIn (LinkedIn deduplicates against Insight Tag events with the same eventId; the Insight Tag event wins when both arrive). |
**value** | **float** | Conversion value in the specified currency. | [optional]
**currency** | **string** | ISO 4217 currency code. | [optional]
**user** | [**\Zernio\Model\ConversionEventUser**](ConversionEventUser.md) |  |
**items** | [**\Zernio\Model\ConversionEventItemsInner[]**](ConversionEventItemsInner.md) | Item-level detail for ecommerce events. | [optional]
**source_url** | **string** | URL where the conversion originated (used by Meta). | [optional]
**action_source** | **string** | Where the conversion happened. Used by Meta. Google also requires an event source internally; omitting this field sends OTHER to Google. Send an explicit value for accurate origin reporting. | [optional]
**platform_data** | **array<string,mixed>** | Escape hatch for platform-specific fields we haven&#39;t normalized. On Meta, keys are shallow-merged into &#x60;custom_data&#x60; only: fields Zernio already builds (&#x60;value&#x60;, &#x60;currency&#x60;, &#x60;contents&#x60;, &#x60;num_items&#x60;) always win on collision, and &#x60;user_data&#x60; (hashed match keys) is never touched. Use first-class fields (e.g. &#x60;user.leadId&#x60;) for anything that must reach &#x60;user_data&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
