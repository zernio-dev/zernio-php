# # CreateCommerceOrderEditRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Connected store SocialAccount id. |
**add** | [**\Zernio\Model\CreateCommerceOrderEditRequestAddInner[]**](CreateCommerceOrderEditRequestAddInner.md) |  | [optional]
**quantities** | [**\Zernio\Model\CreateCommerceOrderEditRequestQuantitiesInner[]**](CreateCommerceOrderEditRequestQuantitiesInner.md) |  | [optional]
**notify_customer** | **bool** |  | [optional] [default to false]
**staff_note** | **string** |  | [optional]
**validate_only** | **bool** | Return the edited totals without changing the order. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
