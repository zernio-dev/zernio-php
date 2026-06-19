# # GetInboxConversation200ResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**account_username** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**status** | **string** |  | [optional]
**participant_name** | **string** |  | [optional]
**participant_id** | **string** |  | [optional]
**participant_verified_type** | **string** | X/Twitter verified badge type. Only present for Twitter/X conversations. | [optional]
**last_message** | **string** |  | [optional]
**last_message_at** | **\DateTime** |  | [optional]
**updated_time** | **\DateTime** |  | [optional]
**participants** | [**\Zernio\Model\UpdateFacebookPage200ResponseSelectedPage[]**](UpdateFacebookPage200ResponseSelectedPage.md) |  | [optional]
**instagram_profile** | [**\Zernio\Model\ListInboxConversations200ResponseDataInnerInstagramProfile**](ListInboxConversations200ResponseDataInnerInstagramProfile.md) |  | [optional]
**metadata** | **array<string,string>** | Ad-click attribution captured on the first inbound message of the conversation. Only present when the conversation originated from a click-to-message ad. Absent on organic conversations.  Two sources populate this field:   - WhatsApp CTWA (Click-to-WhatsApp): &#x60;ctwa_clid&#x60;, &#x60;ctwa_source_id&#x60;,     &#x60;ctwa_source_url&#x60;, &#x60;ctwa_headline&#x60;, &#x60;ctwa_source_type&#x60;, &#x60;ctwa_captured_at&#x60;.   - Facebook Messenger CTM / Instagram CTD: &#x60;meta_ad_id&#x60;, &#x60;meta_ad_title&#x60;,     &#x60;meta_ad_source&#x60;, &#x60;meta_ad_type&#x60;, &#x60;meta_ad_ref&#x60;, &#x60;meta_ad_captured_at&#x60;,     &#x60;meta_ad_photo_url&#x60;, &#x60;meta_ad_video_url&#x60;, &#x60;meta_ad_post_id&#x60;,     &#x60;meta_ad_product_id&#x60;, &#x60;meta_ad_flow_id&#x60;.  Note: &#x60;meta_ad_photo_url&#x60; and &#x60;meta_ad_video_url&#x60; are Facebook CDN URLs that may expire. Use &#x60;meta_ad_id&#x60; for a permanent reference to the ad (e.g. to link to Meta Ads Manager). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
