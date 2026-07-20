# # GenerateAdPreviewsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio SocialAccount id used to resolve the Meta token. |
**ad_account_id** | **string** | Meta ad account id (act_&lt;n&gt;). |
**formats** | **string[]** | Meta ad_format values, one preview per format. Defaults to [DESKTOP_FEED_STANDARD]. | [optional]
**existing_creative_id** | **string** | Preview an existing ad-account creative by id. Mutually exclusive with creativeSpec. | [optional]
**creative_spec** | **array<string,mixed>** | Raw Meta creative spec forwarded verbatim to /generatepreviews. Mutually exclusive with existingCreativeId. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
