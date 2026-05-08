# # UpdateConversionDestinationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_account_id** | **string** |  |
**name** | **string** |  | [optional]
**enabled** | **bool** | Setting &#x60;false&#x60; is equivalent to calling DELETE — the rule will appear as &#x60;inactive&#x60; afterwards. | [optional]
**attribution_type** | **string** |  | [optional]
**post_click_attribution_window_size** | **int** | 365 only allowed for LEAD, PURCHASE, ADD_TO_CART, QUALIFIED_LEAD, SUBMIT_APPLICATION rule types. | [optional]
**view_through_attribution_window_size** | **int** | 365 only allowed for LEAD, PURCHASE, ADD_TO_CART, QUALIFIED_LEAD, SUBMIT_APPLICATION rule types. | [optional]
**value_type** | **string** |  | [optional]
**value** | [**\Zernio\Model\UpdateConversionDestinationRequestValue**](UpdateConversionDestinationRequestValue.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
