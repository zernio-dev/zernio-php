# # ConversionAuditReportPlatformsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | Stable platform key (meta, google, tiktok, ...). |
**name** | **string** | Human-readable platform name. |
**browser_pixel** | **bool** | Whether a browser pixel for this platform was found. |
**server_side** | **bool** | True only when the page shows a server-side path for this platform. |
**status** | **string** | &#x60;good&#x60; &#x3D; server-side, &#x60;warn&#x60; &#x3D; browser-only (the leak), &#x60;missing&#x60; &#x3D; not tracked. |
**estimated_loss_browser_only** | **float** | Share of conversions typically lost when this platform runs browser-only, 0-1. |
**note** | **string** | Short explanation of the finding. |
**ids** | **string[]** | Pixel or tag ids found for this platform. | [optional]
**events** | **string[]** | Standard events called in the page or its tag-manager containers. | [optional]
**fix_steps** | **string[]** | Steps to fix this platform&#39;s tracking. | [optional]
**fired** | **string** | Rendered scans: &#x60;after-consent&#x60; when the pixel fired only once the scan accepted the cookie banner. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
