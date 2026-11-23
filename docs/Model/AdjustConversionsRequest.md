# # AdjustConversionsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | SocialAccount ID. Must be a &#x60;googleads&#x60;, &#x60;impact&#x60; or &#x60;microsoftads&#x60; account. |
**destination_id** | **string** | Conversion action resource name on Google, e.g. &#x60;customers/1234567890/conversionActions/987654321&#x60;; &#x60;&lt;program id&gt;:&lt;event type id&gt;&#x60; on Impact; &#x60;accounts/{adAccountId}/conversionGoals/{goalId}&#x60; on Microsoft Ads. |
**adjustments** | [**\Zernio\Model\AdjustConversionsRequestAdjustmentsInner[]**](AdjustConversionsRequestAdjustmentsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
