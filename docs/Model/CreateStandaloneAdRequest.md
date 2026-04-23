# # CreateStandaloneAdRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**ad_account_id** | **string** |  |
**name** | **string** |  |
**goal** | **string** | Required on legacy + multi-creative shapes. Inherited from the ad set on the attach shape. Available goals vary by platform. | [optional]
**budget_amount** | **float** | Required on legacy + multi-creative shapes. Inherited on attach. | [optional]
**budget_type** | **string** | Required on legacy + multi-creative shapes. Inherited on attach. | [optional]
**currency** | **string** |  | [optional]
**headline** | **string** | Required for Meta, Google, and Pinterest on legacy + attach shapes (skip for multi-creative — use &#x60;creatives[].headline&#x60;). Ignored for TikTok and X/Twitter. Max: Meta&#x3D;255, Google&#x3D;30, Pinterest&#x3D;100. | [optional]
**long_headline** | **string** | Google Display only. Defaults to &#x60;headline&#x60; if omitted. | [optional]
**body** | **string** | Required on legacy + attach shapes. For X/Twitter this is the tweet text (max 280 chars including a ~24-char URL when &#x60;linkUrl&#x60; is set). Max: Google&#x3D;90, Pinterest&#x3D;500. | [optional]
**call_to_action** | **string** | Required on legacy + attach shapes. Meta only. | [optional]
**link_url** | **string** | Required on legacy + attach shapes. Skip for multi-creative. | [optional]
**image_url** | **string** | Image creative for Meta/Google/Pinterest on legacy + attach shapes (mutually exclusive with &#x60;video&#x60;). Not required for Google Search campaigns. For TikTok, this field carries the VIDEO URL (the TikTok ads endpoint is video-only; the field retains the &#x60;imageUrl&#x60; name for cross-platform consistency). Ignored for X/Twitter. For Google Display, treated as the landscape image (alias of &#x60;images.landscape&#x60;); supply &#x60;images.square&#x60; alongside or the request is rejected. | [optional]
**images** | [**\Zernio\Model\CreateStandaloneAdRequestImages**](CreateStandaloneAdRequestImages.md) |  | [optional]
**video** | [**\Zernio\Model\CreateStandaloneAdRequestVideo**](CreateStandaloneAdRequestVideo.md) |  | [optional]
**creatives** | [**\Zernio\Model\CreateStandaloneAdRequestCreativesInner[]**](CreateStandaloneAdRequestCreativesInner.md) | Meta-only. When present, switches to the multi-creative shape: creates 1 campaign + 1 ad set + N ads (one per entry here). Top-level &#x60;headline&#x60; / &#x60;body&#x60; / &#x60;imageUrl&#x60; / &#x60;linkUrl&#x60; / &#x60;callToAction&#x60; are ignored in this mode. Mutually exclusive with &#x60;adSetId&#x60;. | [optional]
**ad_set_id** | **string** | Meta-only. When present, switches to the attach shape: adds one new ad to this existing ad set without creating a new campaign. Budget, targeting, goal, and schedule are inherited from the ad set on Meta. Mutually exclusive with &#x60;creatives[]&#x60;. | [optional]
**business_name** | **string** | Google Display only | [optional]
**board_id** | **string** | Pinterest only. Board ID (auto-creates if not provided). | [optional]
**countries** | **string[]** |  | [optional]
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

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
