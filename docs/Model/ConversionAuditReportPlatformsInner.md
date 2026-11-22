# # ConversionAuditReportPlatformsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | Stable platform key (meta, google, tiktok, ...). |
**name** | **string** | Human-readable platform name. |
**browser_pixel** | **bool** | Whether a browser pixel for this platform was found. |
**server_side** | **bool** | True only when a server-side path is proven: visible from the page, or verified through the Zernio account behind the site tag. |
**relayed_by** | **string** | The only server path seen is the Zernio site tag relay; &#x60;serverSideVerified&#x60; says whether its delivery to this platform is proven. | [optional]
**server_side_verified** | **bool** | The Zernio site tag on the page belongs to an account whose destination for this platform accepted the site&#39;s events in the last 7 days. | [optional]
**server_tool** | **string** | A third-party server-side tool installed on the site that may already send this platform&#39;s events (Elevar, Littledata, Stape), when its status is &#x60;likely&#x60;. Which platforms the tool feeds is not visible from the page. | [optional]
**status** | **string** | &#x60;good&#x60;: server-side. &#x60;warn&#x60;: browser-only (the leak). &#x60;missing&#x60;: not tracked. &#x60;not-firing&#x60;: installed but sent nothing during a full visit. &#x60;configured&#x60;: only in a Google Tag Manager container and not seen firing on a visit where silence proves nothing, so not counted as tracked. |
**estimated_loss_browser_only** | **float** | Share of conversions typically lost when this platform runs browser-only, 0-1. |
**note** | **string** | Short explanation of the finding. |
**ids** | **string[]** | Pixel or tag ids found for this platform. | [optional]
**events** | **string[]** | Standard events called in the page or its tag-manager containers. | [optional]
**fix_steps** | **string[]** | Steps to fix this platform&#39;s tracking. | [optional]
**fired** | **string** | Rendered scans: &#x60;after-consent&#x60; when the pixel fired only once the scan accepted the cookie banner. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
