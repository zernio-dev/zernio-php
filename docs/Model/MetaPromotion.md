# # MetaPromotion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Promotion type accepted by Meta. PERCENTAGE_OFF values cannot exceed 100. |
**value** | **float** | Nonnegative promotion value passed to Meta unchanged. AMOUNT_OFF units are not confirmed, including major versus minor currency units. For PERCENTAGE_OFF this is the percentage discount, at most 100. |
**code** | **string** | Optional promotion code. | [optional]
**start_date** | **\DateTime** | Optional ISO 8601 start timestamp with a timezone offset or Z. | [optional]
**end_date** | **\DateTime** | Optional ISO 8601 end timestamp with a timezone offset or Z. Must be after startDate when both are set. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
