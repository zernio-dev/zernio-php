# # StorePixelInstall

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**store_account_id** | **string** |  | [optional]
**platform** | **string** | The store platform. | [optional]
**tag_platform** | **string** | Platform of the tag this install is about (e.g. &#x60;metaads&#x60;). | [optional]
**site_tag_id** | **string** | The id the tag carries on the site (see &#x60;TrackingTag.siteTagId&#x60;). | [optional]
**installed** | **bool** | Shopify: this tag is the one the store fires for its platform. WordPress: the Zernio widget for this tag is in an active widget area with its script intact. | [optional]
**shop_domain** | **string** | Shopify only. | [optional]
**installed_tag_id** | **string** | Shopify only: the tag of the same platform the store fires now (may be a different tag), or null. | [optional]
**tags** | [**\Zernio\Model\StorePixelInstallTagsInner[]**](StorePixelInstallTagsInner.md) | GET only on WordPress, always on Shopify: every Zernio tag on the store, all platforms. | [optional]
**web_pixel_id** | **string** | Shopify only: web pixel id, or null when nothing is installed. | [optional]
**site_url** | **string** | WordPress only. | [optional]
**method** | **string** | WordPress only. | [optional]
**widget_id** | **string** | WordPress only: widget id, e.g. &#x60;custom_html-3&#x60;. | [optional]
**sidebar_id** | **string** | WordPress only: widget area holding the widget. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
