# # CreateStandaloneAdRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**ad_account_id** | **string** |  |
**name** | **string** |  |
**goal** | **string** | Required on legacy + multi-creative shapes. Inherited from the ad set on the attach shape. Available goals vary by platform. Meta-specific: &#x60;conversions&#x60; requires &#x60;promotedObject.pixelId&#x60; + &#x60;promotedObject.customEventType&#x60;; &#x60;app_promotion&#x60; requires &#x60;promotedObject.applicationId&#x60; + &#x60;promotedObject.objectStoreUrl&#x60;; &#x60;lead_generation&#x60; accepts an optional &#x60;promotedObject.pageId&#x60; (auto-filled from the connected Page when omitted). | [optional]
**budget_amount** | **float** | Required on legacy + multi-creative shapes. Inherited on attach. | [optional]
**budget_type** | **string** | Required on legacy + multi-creative shapes. Inherited on attach. | [optional]
**currency** | **string** |  | [optional]
**headline** | **string** | Required for Meta, Google, and Pinterest on legacy + attach shapes (skip for multi-creative — use &#x60;creatives[].headline&#x60;). Ignored for TikTok and X/Twitter. Max: Meta&#x3D;255, Google&#x3D;30, Pinterest&#x3D;100. | [optional]
**long_headline** | **string** | Google Display only. Defaults to &#x60;headline&#x60; if omitted. | [optional]
**body** | **string** | Required on legacy + attach shapes. For X/Twitter this is the tweet text (max 280 chars including a ~24-char URL when &#x60;linkUrl&#x60; is set). Max: Google&#x3D;90, Pinterest&#x3D;500. | [optional]
**call_to_action** | **string** | Required on legacy + attach shapes for Meta. Honoured on TikTok too — passes through to the Spark Ad creative&#39;s &#x60;call_to_action&#x60;. Ignored by other platforms. | [optional]
**link_url** | **string** | Required on legacy + attach shapes. Skip for multi-creative. | [optional]
**image_url** | **string** | Image creative for Meta/Google/Pinterest on legacy + attach shapes (mutually exclusive with &#x60;video&#x60;). Not required for Google Search campaigns. For TikTok, this field carries the VIDEO URL (the TikTok ads endpoint is video-only; the field retains the &#x60;imageUrl&#x60; name for cross-platform consistency). Ignored for X/Twitter. For Google Display, treated as the landscape image (alias of &#x60;images.landscape&#x60;); supply &#x60;images.square&#x60; alongside or the request is rejected. | [optional]
**images** | [**\Zernio\Model\CreateStandaloneAdRequestImages**](CreateStandaloneAdRequestImages.md) |  | [optional]
**video** | [**\Zernio\Model\CreateStandaloneAdRequestVideo**](CreateStandaloneAdRequestVideo.md) |  | [optional]
**creatives** | [**\Zernio\Model\CreateStandaloneAdRequestCreativesInner[]**](CreateStandaloneAdRequestCreativesInner.md) | Meta-only. When present, switches to the multi-creative shape: creates 1 campaign + 1 ad set + N ads (one per entry here). Top-level &#x60;headline&#x60; / &#x60;body&#x60; / &#x60;imageUrl&#x60; / &#x60;linkUrl&#x60; / &#x60;callToAction&#x60; are ignored in this mode. Mutually exclusive with &#x60;adSetId&#x60;. | [optional]
**ad_set_id** | **string** | Meta-only. When present, switches to the attach shape: adds one new ad to this existing ad set without creating a new campaign. Budget, targeting, goal, schedule, AND bid strategy are inherited from the ad set on Meta — passing &#x60;bidStrategy&#x60; in attach mode returns 400. To change an existing ad set&#39;s bid, use &#x60;PUT /v1/ads/ad-sets/{adSetId}&#x60;. Mutually exclusive with &#x60;creatives[]&#x60;.  Supported on Meta (facebook, instagram) and TikTok. On TikTok the &#x60;adSetId&#x60; is the ad group ID; the new ad inherits the ad group&#39;s bid + budget + targeting. | [optional]
**business_name** | **string** | Google Display only | [optional]
**board_id** | **string** | Pinterest only. Board ID (auto-creates if not provided). | [optional]
**countries** | **string[]** | ISO 3166-1 alpha-2 country codes (e.g. [&#39;NL&#39;]). Defaults to [&#39;US&#39;] when no &#x60;cities&#x60; or &#x60;regions&#x60; are provided. | [optional]
**cities** | [**\Zernio\Model\CreateStandaloneAdRequestCitiesInner[]**](CreateStandaloneAdRequestCitiesInner.md) | Meta-only. City-level geo targeting. Each city is targeted by Meta&#39;s opaque &#x60;key&#x60; (the city ID) which can be looked up via &#x60;GET /v1/ads/targeting/search?type&#x3D;city&amp;q&#x3D;&lt;name&gt;&amp;country_code&#x3D;&lt;ISO&gt;&#x60;. Optional &#x60;radius&#x60; + &#x60;distance_unit&#x60; extend the targeting beyond the city limits (e.g. radius 25 km around the city center). Both must be set together, or both omitted (Meta defaults to ~16 km when omitted).  Cannot overlap with the same country in &#x60;countries&#x60; (Meta returns a \&quot;locations overlap\&quot; error). Either drop the country or scope it to a different country. | [optional]
**regions** | [**\Zernio\Model\CreateStandaloneAdRequestRegionsInner[]**](CreateStandaloneAdRequestRegionsInner.md) | Meta-only. Region-level (state/province) geo targeting. Each region is targeted by Meta&#39;s opaque &#x60;key&#x60; (the region ID) which can be looked up via &#x60;GET /v1/ads/targeting/search?type&#x3D;region&amp;q&#x3D;&lt;name&gt;&amp;country_code&#x3D;&lt;ISO&gt;&#x60;. | [optional]
**age_min** | **int** |  | [optional]
**age_max** | **int** |  | [optional]
**interests** | [**\Zernio\Model\UpdateAdRequestTargetingInterestsInner[]**](UpdateAdRequestTargetingInterestsInner.md) | Interest objects from /v1/ads/interests. Each must include id and name. | [optional]
**end_date** | **\DateTime** | Required for lifetime budgets | [optional]
**audience_id** | **string** | Custom audience ID for targeting | [optional]
**campaign_type** | **string** | Google only | [optional] [default to 'display']
**keywords** | **string[]** | Google Search only | [optional]
**additional_headlines** | **string[]** | Google Search RSA only. Extra headlines. | [optional]
**additional_descriptions** | **string[]** | Google Search RSA only. Extra descriptions. | [optional]
**advantage_audience** | **int** | Meta only. Controls the Advantage audience feature (targeting_automation). 0 &#x3D; disabled (default), 1 &#x3D; enabled. Meta Marketing API requires this field on all ad set creation requests. | [optional]
**gender** | **string** | Meta only. Restrict the audience by gender. &#39;male&#39; targets men only, &#39;female&#39; targets women only, &#39;all&#39; (default) targets everyone. Ignored by non-Meta platforms. | [optional] [default to 'all']
**bid_strategy** | [**\Zernio\Model\BidStrategy**](BidStrategy.md) | Meta bid strategy applied to the ad set. | [optional]
**bid_amount** | **float** | Bid cap in WHOLE currency units (USD: 5 &#x3D; $5.00; JPY: 100 &#x3D; ¥100). Required when &#x60;bidStrategy&#x60; is &#x60;LOWEST_COST_WITH_BID_CAP&#x60; or &#x60;COST_CAP&#x60;. | [optional]
**roas_average_floor** | **float** | Minimum ROAS as a decimal multiplier (e.g. 2.0 &#x3D; 2.0x ROAS). Required when &#x60;bidStrategy&#x60; is &#x60;LOWEST_COST_WITH_MIN_ROAS&#x60;. Sent to Meta as &#x60;bid_constraints.roas_average_floor&#x60; × 10000. | [optional]
**dsa_beneficiary** | **string** | Name of the legal entity benefiting from the ad. Required by Meta when targeting EU users (DSA Article 26). Not enforced at schema level; enforced server-side when targeting intersects EU member states. | [optional]
**dsa_payor** | **string** | Name of the legal entity paying for the ad. Required by Meta when targeting EU users (DSA Article 26). Note Meta API spelling: dsa_payor (not dsa_payer). | [optional]
**brand_identity** | [**\Zernio\Model\CreateStandaloneAdRequestBrandIdentity**](CreateStandaloneAdRequestBrandIdentity.md) |  | [optional]
**identity_type** | **string** | TikTok only. Forces the identity attribution on the ad:    - &#x60;TT_USER&#x60;: the posting account&#39;s open_id (real @username     branding). Requires a connected TikTok posting account     on the same profile.   - &#x60;CUSTOMIZED_USER&#x60;: synthetic Brand Identity (display     name + avatar). Requires a configured Brand Identity     (cached on the &#x60;tiktokads&#x60; SocialAccount via     &#x60;PATCH /v1/connect/tiktok-ads&#x60;) or an inline     &#x60;brandIdentity&#x60; to create one on the fly.  When omitted, defaults to &#x60;TT_USER&#x60; if a posting account is connected on this profile, else &#x60;CUSTOMIZED_USER&#x60;. Spark Ads (&#x60;POST /v1/ads/boost&#x60;) always use &#x60;TT_USER&#x60; regardless of this field — TikTok requires the original organic post&#39;s author identity for Spark. | [optional]
**promoted_object** | [**\Zernio\Model\CreateStandaloneAdRequestPromotedObject**](CreateStandaloneAdRequestPromotedObject.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
