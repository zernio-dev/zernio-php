# # CreateConversionDestinationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_account_id** | **string** | Sponsored ad account ID. Numeric (e.g. \&quot;5123456\&quot;) or full &#x60;urn:li:sponsoredAccount:{id}&#x60; URN. |
**name** | **string** |  |
**type** | **string** | Either a unified standard event name (e.g. \&quot;Purchase\&quot;, \&quot;Lead\&quot;, \&quot;AddToCart\&quot;) or a LinkedIn rule type enum value (e.g. \&quot;PURCHASE\&quot;, \&quot;QUALIFIED_LEAD\&quot;). The API maps standard names to LinkedIn enum values automatically. |
**attribution_type** | **string** |  | [optional]
**post_click_attribution_window_size** | **int** | Default 30. 365 only allowed for LEAD, PURCHASE, ADD_TO_CART, QUALIFIED_LEAD, SUBMIT_APPLICATION rule types — the API rejects other combinations locally. | [optional]
**view_through_attribution_window_size** | **int** | Default 7. Same 365-day-window type restriction applies as &#x60;postClickAttributionWindowSize&#x60;. | [optional]
**value_type** | **string** | DYNAMIC (default) uses the per-event &#x60;value&#x60; from &#x60;sendConversions&#x60;. FIXED uses the rule&#39;s &#x60;value&#x60; field. NO_VALUE drops monetary value entirely. | [optional]
**value** | [**\Zernio\Model\CreateConversionDestinationRequestValue**](CreateConversionDestinationRequestValue.md) |  | [optional]
**auto_association_type** | **string** | Controls campaign association at rule-creation time: - ALL_CAMPAIGNS: associate the rule with every active,   paused, and draft campaign in the ad account - OBJECTIVE_BASED: associate only campaigns whose   objective matches the rule&#39;s type - NONE: don&#39;t auto-associate. Manage associations via   the &#x60;/associations&#x60; endpoints below. Note: auto-association runs once at create time; new campaigns added after the rule still need explicit association. | [optional] [default to 'ALL_CAMPAIGNS']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
