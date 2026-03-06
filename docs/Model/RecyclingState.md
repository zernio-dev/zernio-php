# # RecyclingState

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Whether recycling is currently active | [optional]
**gap** | **int** | Number of interval units between reposts | [optional]
**gap_freq** | **string** | Interval unit (week or month) | [optional]
**start_date** | **\DateTime** |  | [optional]
**expire_count** | **int** |  | [optional]
**expire_date** | **\DateTime** |  | [optional]
**content_variations** | **string[]** | Content variations for recycled copies (if configured) | [optional]
**content_variation_index** | **int** | Current position in the content variations rotation (read-only) | [optional]
**recycle_count** | **int** | How many recycled copies have been created so far (read-only) | [optional]
**next_recycle_at** | **\DateTime** | When the next recycled copy will be created (read-only) | [optional]
**last_recycled_at** | **\DateTime** | When the last recycled copy was created (read-only) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
