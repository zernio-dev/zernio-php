# # YouTubeDemographicsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** |  | [optional]
**account_id** | **string** | The Zernio SocialAccount ID | [optional]
**platform** | **string** |  | [optional]
**video_id** | **string** | Present only when demographics are scoped to a single video | [optional]
**title** | **string** | Video title (video mode only) | [optional]
**published_at** | **\DateTime** | Video publish date (video mode only) | [optional]
**demographics** | **array<string,\Zernio\Model\YouTubeDemographicsResponseDemographicsValueInner[]>** | Object keyed by breakdown dimension (age, gender, country) | [optional]
**date_range** | [**\Zernio\Model\YouTubeDemographicsResponseDateRange**](YouTubeDemographicsResponseDateRange.md) |  | [optional]
**note** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
