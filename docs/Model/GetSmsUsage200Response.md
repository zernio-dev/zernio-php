# # GetSmsUsage200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**since** | **\DateTime** |  | [optional]
**until** | **\DateTime** |  | [optional]
**group_by** | **string** |  | [optional]
**profile** | [**\Zernio\Model\UsageProfileRef**](UsageProfileRef.md) | Present with &#x60;profileId&#x60; / &#x60;externalId&#x60;: the profile the counts are scoped to. | [optional]
**totals** | [**\Zernio\Model\GetSmsUsage200ResponseTotals**](GetSmsUsage200ResponseTotals.md) |  | [optional]
**groups** | [**\Zernio\Model\GetSmsUsage200ResponseGroupsInner[]**](GetSmsUsage200ResponseGroupsInner.md) | Present (possibly empty) when &#x60;groupBy&#x60; is set. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
