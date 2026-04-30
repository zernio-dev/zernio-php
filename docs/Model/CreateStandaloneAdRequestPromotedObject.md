# # CreateStandaloneAdRequestPromotedObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pixel_id** | **string** | Facebook Pixel ID. Required for &#x60;goal: conversions&#x60;. | [optional]
**custom_event_type** | **string** | Standard event the campaign optimises against, e.g. &#x60;PURCHASE&#x60;, &#x60;LEAD&#x60;, &#x60;COMPLETE_REGISTRATION&#x60;, &#x60;ADD_TO_CART&#x60;. Uppercased internally so callers can pass any case. Required for &#x60;goal: conversions&#x60;. | [optional]
**page_id** | **string** | Facebook Page ID. Used by &#x60;goal: lead_generation&#x60;. Auto-filled from the connected Page when omitted. | [optional]
**application_id** | **string** | App ID. Required for &#x60;goal: app_promotion&#x60;. | [optional]
**object_store_url** | **string** | App Store / Play Store listing URL. Required for &#x60;goal: app_promotion&#x60;. | [optional]
**custom_conversion_id** | **string** | Custom Conversion ID, when optimising against one instead of a standard event. | [optional]
**product_catalog_id** | **string** | Catalog ID for catalog/Advantage+ Shopping campaigns. | [optional]
**product_set_id** | **string** | Product Set ID inside the catalog. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
