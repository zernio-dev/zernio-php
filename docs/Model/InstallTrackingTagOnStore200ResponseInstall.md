# # InstallTrackingTagOnStore200ResponseInstall

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**store_account_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**installed** | **bool** | Shopify: this tag is the pixel the store fires. WordPress: the Zernio widget for this tag is in an active widget area with its script intact. | [optional]
**shop_domain** | **string** | Shopify only. | [optional]
**installed_tag_id** | **string** | Shopify only: the Meta pixel the store fires now (may be a different tag), or null. | [optional]
**web_pixel_id** | **string** | Shopify only: web pixel id, or null when nothing is installed. | [optional]
**site_url** | **string** | WordPress only. | [optional]
**method** | **string** | WordPress only. | [optional]
**widget_id** | **string** | WordPress only: widget id, e.g. &#x60;custom_html-3&#x60;. | [optional]
**sidebar_id** | **string** | WordPress only: widget area holding the widget. | [optional]
**replaced_tag_id** | **string** | Shopify only: the pixel this install replaced on the store, if any. | [optional]
**sidebar_name** | **string** | WordPress only: name of the widget area used. | [optional]
**created** | **bool** | WordPress only: false when an existing Zernio widget was updated. | [optional]
**homepage_check** | **string** | WordPress only: whether the pixel appeared in the homepage HTML. &#x60;not_found&#x60; can be a stale page cache. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
