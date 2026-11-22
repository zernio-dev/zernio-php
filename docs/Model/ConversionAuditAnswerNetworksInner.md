# # ConversionAuditAnswerNetworksInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | Stable platform key (meta, google, tiktok, ...), as in &#x60;report.platforms&#x60;. |
**name** | **string** | Short network name (Meta, Google, TikTok, ...). |
**setup** | **string** | How the network gets its conversions: &#x60;verified&#x60;, &#x60;likely&#x60; or &#x60;possible&#x60; server path, &#x60;not-visible&#x60; (browser pixel, no server path visible), &#x60;not-firing&#x60; (installed, sent nothing), &#x60;configured&#x60; (tag manager only, never seen firing, not at risk) or &#x60;missing&#x60;. |
**leak_pct** | **int** | Share of this network&#39;s conversions at risk, 0-100 (0 once a server path is verified). Null when the network has no working browser pixel to measure. |
**loaded_by** | **string** | &#x60;zernio-tag&#x60; when the pixel comes from the Zernio site tag&#39;s settings (it loads the pixel after consent) rather than from the page itself, on a scan that read the page source only. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
