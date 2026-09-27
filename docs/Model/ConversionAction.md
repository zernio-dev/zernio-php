# # ConversionAction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Google Ads conversion action id. |
**name** | **string** |  |
**type** | **string** | Google&#39;s ConversionActionType, e.g. WEBPAGE, UPLOAD_CLICKS. |
**status** | **string** | Google&#39;s ConversionActionStatus, e.g. ENABLED, REMOVED, HIDDEN. |
**category** | **string** | Google&#39;s ConversionActionCategory, e.g. DEFAULT, PURCHASE, LEAD. |
**origin** | **string** | Google&#39;s ConversionOrigin, e.g. WEBSITE, APP. Together with category it names the goal the action belongs to (see GET /v1/ads/conversions/goals). | [optional]
**primary_for_goal** | **bool** | true &#x3D; primary (counts toward bidding when its goal is biddable), false &#x3D; secondary. Change it with PATCH /v1/ads/conversions/actions/{actionId}. | [optional]
**tag_snippets** | [**\Zernio\Model\ConversionActionTagSnippetsInner[]**](ConversionActionTagSnippetsInner.md) | The code a customer pastes onto their site. Present for types Google generates a snippet for (e.g. WEBPAGE); empty otherwise. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
