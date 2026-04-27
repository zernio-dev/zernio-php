# # CreateCtwaAdRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Facebook or Instagram SocialAccount ID. |
**ad_account_id** | **string** | Meta ad account ID, e.g. &#x60;act_123456789&#x60;. |
**name** | **string** | Ad display name. Used to derive campaign / ad set names. |
**headline** | **string** |  |
**body** | **string** | Primary text shown above the image / video. |
**image_url** | **string** | Image asset for image creatives. Mutually exclusive with &#x60;video&#x60;. Required if &#x60;video&#x60; is not supplied. | [optional]
**video** | [**\Zernio\Model\CreateCtwaAdRequestVideo**](CreateCtwaAdRequestVideo.md) |  | [optional]
**budget_amount** | **float** | Budget amount in the ad account&#39;s currency major units (e.g. dollars for USD, not cents). Must be &gt; 0. |
**budget_type** | **string** |  |
**currency** | **string** | ISO 4217 currency code matching the ad account&#39;s currency (e.g. &#x60;USD&#x60;). Optional; Meta infers from the ad account when omitted. | [optional]
**end_date** | **\DateTime** | ISO 8601 datetime. Required when &#x60;budgetType&#x60; is &#x60;lifetime&#x60;. | [optional]
**countries** | **string[]** | ISO 3166-1 alpha-2 country codes. Defaults to &#x60;[\&quot;US\&quot;]&#x60;. | [optional]
**age_min** | **int** |  | [optional]
**age_max** | **int** |  | [optional]
**interests** | [**\Zernio\Model\CreateCtwaAdRequestInterestsInner[]**](CreateCtwaAdRequestInterestsInner.md) |  | [optional]
**audience_id** | **string** | Custom audience ID to target. | [optional]
**advantage_audience** | **int** | Meta&#39;s Advantage+ audience expansion. &#x60;0&#x60; (default) keeps targeting strict; &#x60;1&#x60; lets Meta expand beyond the supplied targeting when its delivery system finds better matches. Always sent on CREATE (Meta requires it). | [optional]
**objective** | **string** | Defaults to &#x60;OUTCOME_ENGAGEMENT&#x60; (the broadly-supported CTWA objective). &#x60;OUTCOME_SALES&#x60; and &#x60;OUTCOME_LEADS&#x60; require additional account configuration (Dataset linked to the WABA for sales) and may be rejected by Meta if missing. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
