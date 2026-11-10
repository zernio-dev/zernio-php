# # LaunchCampaignAdsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**submission_ids** | **string[]** | Approved submissions to run as ads. |
**network** | **string** | Meta runs Instagram and Facebook posts; TikTok runs TikTok posts. |
**account_id** | **string** | The brand&#39;s connected ads account (Facebook or TikTok) the ads run from, as in &#x60;/v1/accounts&#x60;. |
**ad_account_id** | **string** | Platform ad account ID. |
**ad_set_id** | **string** | Existing Meta ad set the ads go into. Required when &#x60;network&#x60; is &#x60;meta&#x60;. | [optional]
**existing_campaign_id** | **string** | Existing TikTok campaign that gets one ad group per post. Required when &#x60;network&#x60; is &#x60;tiktok&#x60;. | [optional]
**daily_budget** | **float** | Daily budget of each TikTok ad group, in the ad account currency. Required when &#x60;network&#x60; is &#x60;tiktok&#x60;. | [optional]
**identity** | **string** | Whose handle the ad runs under. TikTok takes &#x60;creator&#x60; only. |
**body** | **string** | Primary text of brand ads. Defaults to the post caption. | [optional]
**headline** | **string** |  | [optional]
**call_to_action** | **string** | Call to action, as in &#x60;POST /v1/ads/create&#x60;. | [optional]
**link_url** | **string** | Destination URL (http or https). | [optional]
**status** | **string** | Ads launch paused unless set to &#x60;ACTIVE&#x60;. | [optional] [default to 'PAUSED']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
