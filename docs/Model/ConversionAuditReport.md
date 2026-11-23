# # ConversionAuditReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The normalized URL that was scanned. |
**domain** | **string** | The scanned host without &#x60;www.&#x60;. |
**score** | **float** | Conversion tracking score, 0-100. Higher means a more complete setup and less signal at risk. |
**grade** | **string** | Letter grade for the score. |
**score_range** | [**\Zernio\Model\ConversionAuditReportScoreRange**](ConversionAuditReportScoreRange.md) |  | [optional]
**estimated_signal_loss_pct** | **float** | Average share of conversions at risk on the networks with no visible server-side path, 0-100. |
**platforms** | [**\Zernio\Model\ConversionAuditReportPlatformsInner[]**](ConversionAuditReportPlatformsInner.md) | One finding per ad platform the scan looked for. |
**browser_only** | **bool** | True when every active platform is tracked browser-only. |
**consent_manager** | **string** | Consent manager found on the page, or null. |
**active_platform_count** | **int** | How many ad platforms the scan found any tracking for. |
**visibility** | **string** | &#x60;full&#x60; &#x3D; pixels were visible, &#x60;limited&#x60; &#x3D; tags load dynamically so not all are visible, &#x60;none&#x60; &#x3D; nothing found. |
**scanner_blocked** | **bool** | Always &#x60;true&#x60; when present: set when the site served our page fetch a bot wall and showed no pixel. The report is a partial, source-only read, so &#x60;score&#x60; and &#x60;grade&#x60; are placeholders, not a verdict, and &#x60;networks&#x60; is empty. | [optional]
**site_signals** | **string[]** | Site tech recognized (Shopify, WooCommerce, ...). |
**scan_mode** | **string** | &#x60;rendered&#x60; when a headless browser ran the page and its requests were checked, &#x60;static&#x60; for the page source only. | [optional]
**limitations** | **string[]** | What this scan could not see. | [optional]
**checks** | [**\Zernio\Model\ConversionAuditReportChecksInner[]**](ConversionAuditReportChecksInner.md) | The scored checks behind &#x60;score&#x60;. | [optional]
**server_side** | [**\Zernio\Model\ConversionAuditReportServerSide**](ConversionAuditReportServerSide.md) |  | [optional]
**consent** | [**\Zernio\Model\ConversionAuditReportConsent**](ConversionAuditReportConsent.md) |  | [optional]
**consent_scan** | [**\Zernio\Model\ConversionAuditReportConsentScan**](ConversionAuditReportConsentScan.md) |  | [optional]
**tag_managers** | **string[]** |  | [optional]
**other_networks** | [**\Zernio\Model\ConversionAuditReportOtherNetworksInner[]**](ConversionAuditReportOtherNetworksInner.md) | Ad networks found that the score does not cover. &#x60;relaySupported&#x60; is true when Zernio can send them conversions. | [optional]
**other_networks_configured** | [**\Zernio\Model\ConversionAuditReportOtherNetworksInner[]**](ConversionAuditReportOtherNetworksInner.md) | Rendered scans: unscored ad networks found only in a Google Tag Manager container that the visit never saw load or send. Not counted in &#x60;otherNetworks&#x60;. | [optional]
**favicon_url** | **string** | The site&#39;s icon. Absent when the site was unreachable. | [optional]
**summary** | **string** | One-paragraph summary of the audit. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
