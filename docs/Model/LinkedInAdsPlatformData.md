# # LinkedInAdsPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cost_type** | **string** | Campaign cost model (billing event). Defaults to &#x60;CPM&#x60;. Required when &#x60;unitCost&#x60; is set so the manual bid applies to an explicit cost model. | [optional]
**unit_cost** | **float** | Manual bid in WHOLE account-currency units (e.g. 2.5 &#x3D; $2.50). Requires &#x60;costType&#x60;. Omit for LinkedIn&#39;s automated (max delivery) bidding. LinkedIn enforces its own per-audience min/max bid bounds. | [optional]
**optimization_target_type** | **string** | Campaign &#x60;optimizationTargetType&#x60; (e.g. &#x60;MAX_CLICK&#x60;, &#x60;TARGET_COST_PER_CLICK&#x60;, &#x60;MAX_IMPRESSION&#x60;). Forwarded verbatim — LinkedIn validates compatibility with the objective and &#x60;costType&#x60;. Omit for the objective-derived default. | [optional]
**creative_selection** | **string** | How LinkedIn rotates creatives within the campaign. Defaults to &#x60;OPTIMIZED&#x60;. | [optional]
**audience_expansion_enabled** | **bool** | Enable LinkedIn audience expansion. Defaults to false. | [optional]
**offsite_delivery_enabled** | **bool** | Deliver on the LinkedIn Audience Network. Defaults to false. | [optional]
**connected_television_only** | **bool** | Restrict delivery to Connected TV inventory. | [optional]
**carousel** | [**\Zernio\Model\LinkedInAdsPlatformDataCarousel**](LinkedInAdsPlatformDataCarousel.md) |  | [optional]
**document** | [**\Zernio\Model\LinkedInAdsPlatformDataDocument**](LinkedInAdsPlatformDataDocument.md) |  | [optional]
**spotlight** | [**\Zernio\Model\LinkedInAdsPlatformDataSpotlight**](LinkedInAdsPlatformDataSpotlight.md) |  | [optional]
**follower** | [**\Zernio\Model\LinkedInAdsPlatformDataFollower**](LinkedInAdsPlatformDataFollower.md) |  | [optional]
**text_ad** | [**\Zernio\Model\LinkedInAdsPlatformDataTextAd**](LinkedInAdsPlatformDataTextAd.md) |  | [optional]
**event** | [**\Zernio\Model\LinkedInAdsPlatformDataEvent**](LinkedInAdsPlatformDataEvent.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
