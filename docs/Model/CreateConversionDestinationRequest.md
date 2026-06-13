# # CreateConversionDestinationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_account_id** | **string** | Ad account ID. For LinkedIn: numeric (e.g. \&quot;5123456\&quot;) or full &#x60;urn:li:sponsoredAccount:{id}&#x60; URN. For Google: numeric customer ID (e.g. \&quot;1234567890\&quot;) or &#x60;customers/{id}&#x60; form. |
**name** | **string** |  |
**type** | **string** | Conversion type. For LinkedIn: a unified standard event name (e.g. \&quot;Purchase\&quot;, \&quot;Lead\&quot;, \&quot;AddToCart\&quot;) or a LinkedIn rule type enum (e.g. \&quot;PURCHASE\&quot;, \&quot;QUALIFIED_LEAD\&quot;). For Google: a unified standard event name (Purchase, Subscribe, CompleteRegistration, Lead, Schedule) or a Google ConversionActionCategory enum value directly (e.g. \&quot;PURCHASE\&quot;, \&quot;SUBSCRIBE_PAID\&quot;, \&quot;SIGNUP\&quot;, \&quot;IMPORTED_LEAD\&quot;, \&quot;BOOK_APPOINTMENT\&quot;). Unknown values pass through to the platform. |
**attribution_type** | **string** | LinkedIn only. | [optional]
**post_click_attribution_window_size** | **int** | LinkedIn only. Default 30. 365 only allowed for LEAD, PURCHASE, ADD_TO_CART, QUALIFIED_LEAD, SUBMIT_APPLICATION rule types; the API rejects other combinations locally. | [optional]
**view_through_attribution_window_size** | **int** | LinkedIn only. Default 7. Same 365-day-window type restriction applies as &#x60;postClickAttributionWindowSize&#x60;. | [optional]
**value_type** | **string** | LinkedIn only. DYNAMIC (default) uses the per-event &#x60;value&#x60; from &#x60;sendConversions&#x60;. FIXED uses the rule&#39;s &#x60;value&#x60; field. NO_VALUE drops monetary value entirely. | [optional]
**value** | [**\Zernio\Model\CreateConversionDestinationRequestValue**](CreateConversionDestinationRequestValue.md) |  | [optional]
**auto_association_type** | **string** | LinkedIn only. Controls campaign association at rule-creation time: - ALL_CAMPAIGNS: associate the rule with every active,   paused, and draft campaign in the ad account - OBJECTIVE_BASED: associate only campaigns whose   objective matches the rule&#39;s type - NONE: don&#39;t auto-associate. Manage associations via   the &#x60;/associations&#x60; endpoints below. Note: auto-association runs once at create time; new campaigns added after the rule still need explicit association. | [optional] [default to 'ALL_CAMPAIGNS']
**counting_type** | **string** | Google Ads only. Whether to count multiple conversions from the same click (MANY_PER_CLICK) or at most one (ONE_PER_CLICK). Defaults to MANY_PER_CLICK if omitted. | [optional]
**primary_for_goal** | **bool** | Google Ads only. When true, the conversion action is marked as primary and immediately influences Smart Bidding. Defaults to false (secondary, record-only) to avoid unintentionally steering the customer&#39;s campaigns on creation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
