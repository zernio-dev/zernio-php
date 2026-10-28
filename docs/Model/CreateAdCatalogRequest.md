# # CreateAdCatalogRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | A facebook, instagram, metaads or whatsapp account ID |
**catalog_account_id** | **string** | Account whose Meta login token performs the call (see GET) | [optional]
**ad_account_id** | **string** | Ad account whose owner business creates the catalog | [optional]
**business_id** | **string** | Business portfolio that owns the catalog | [optional]
**name** | **string** |  |
**vertical** | **string** | Meta catalog vertical. Use services for a professional services catalog (for example one linked to WhatsApp). local_service_business is a deprecated alias of local_service_businesses. The product endpoints under /v1/ads/catalogs/{catalogId}/products write commerce product items only. | [optional] [default to 'commerce']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
