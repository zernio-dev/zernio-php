# # GenerateAdPreviewsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio SocialAccount id used to resolve the Meta token. |
**ad_account_id** | **string** | Platform ad account id (Meta act_&lt;n&gt;, Google customer id, LinkedIn account id, ...). |
**formats** | **string[]** | Meta ad_format values, one preview per format. Defaults to [DESKTOP_FEED_STANDARD]. | [optional]
**existing_creative_id** | **string** | Preview an existing ad-account creative by id. Mutually exclusive with creativeSpec. | [optional]
**creative_spec** | **array<string,mixed>** | Raw Meta creative spec forwarded to /generatepreviews. Mutually exclusive with existingCreativeId. An &#x60;object_story_spec&#x60; without &#x60;page_id&#x60; or &#x60;instagram_user_id&#x60;, and a &#x60;source_instagram_media_id&#x60; spec without &#x60;instagram_user_id&#x60;, get the connection&#39;s Facebook Page and Instagram account, as a create would. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
