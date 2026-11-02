# # GetAdAccountHealth200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_account_id** | **string** |  | [optional]
**status** | **string** |  | [optional]
**ready** | **bool** | False when a create or boost on this ad account would be refused; &#x60;blockers&#x60; says why. | [optional]
**blockers** | [**\Zernio\Model\GetAdAccountHealth200ResponseBlockersInner[]**](GetAdAccountHealth200ResponseBlockersInner.md) |  | [optional]
**checked_at** | **\DateTime** |  | [optional]
**checks** | [**\Zernio\Model\GetAdAccountHealth200ResponseChecksInner[]**](GetAdAccountHealth200ResponseChecksInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
