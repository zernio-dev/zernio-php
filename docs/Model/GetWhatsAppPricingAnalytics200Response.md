# # GetWhatsAppPricingAnalytics200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**phone_number** | **string** | The number the data is scoped to, digits only. |
**granularity** | **string** |  |
**start** | **\DateTime** |  |
**end** | **\DateTime** |  |
**currency** | **string** | ISO 4217 currency every &#x60;cost&#x60; is in, from the WABA&#39;s payment method (for example USD or BRL). Null when Meta does not return it. |
**data_points** | [**\Zernio\Model\GetWhatsAppPricingAnalytics200ResponseDataPointsInner[]**](GetWhatsAppPricingAnalytics200ResponseDataPointsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
