# # RecyclingConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Set to false to disable recycling on this post | [optional] [default to true]
**gap** | **int** | Number of interval units between each repost. Required when enabling recycling. | [optional]
**gap_freq** | **string** | Interval unit for the gap. Defaults to &#39;month&#39;. | [optional] [default to 'month']
**start_date** | **\DateTime** | When to start the recycling cycle. Defaults to the post&#39;s scheduledFor date. | [optional]
**expire_count** | **int** | Stop recycling after this many copies have been created | [optional]
**expire_date** | **\DateTime** | Stop recycling after this date, regardless of count | [optional]
**content_variations** | **string[]** | Array of content variations for recycled copies. On each recycle, the next variation is used in round-robin order. Recommended for Twitter and Pinterest to avoid duplicate content flags. If omitted, the original post content is used for all recycled copies. Send an empty array [] to clear existing variations. Must have 2+ entries when setting variations. Platform-level customContent still overrides the base content per platform. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
