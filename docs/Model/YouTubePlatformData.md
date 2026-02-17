# # YouTubePlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Video title. Defaults to first line of content or \&quot;Untitled Video\&quot;. Must be ≤ 100 characters. | [optional]
**visibility** | **string** | Video visibility: public (default, anyone can watch), unlisted (link only), private (invite only) | [optional] [default to 'public']
**made_for_kids** | **bool** | COPPA compliance flag. Set true for child-directed content (restricts comments, notifications, ad targeting). Defaults to false. YouTube may block views if not explicitly set. | [optional] [default to false]
**first_comment** | **string** | Optional first comment to post immediately after video upload. Up to 10,000 characters (YouTube&#39;s comment limit). | [optional]
**contains_synthetic_media** | **bool** | AI-generated content disclosure. Set true if the video contains synthetic content that could be mistaken for real. YouTube may add a label. | [optional] [default to false]
**category_id** | **string** | YouTube video category ID. Defaults to 22 (People &amp; Blogs). Common: 1 (Film), 2 (Autos), 10 (Music), 15 (Pets), 17 (Sports), 20 (Gaming), 23 (Comedy), 24 (Entertainment), 25 (News), 26 (Howto), 27 (Education), 28 (Science &amp; Tech). | [optional] [default to '22']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
