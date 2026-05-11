# # TrackingTag

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Platform-native tag id. Meta: numeric pixel id, as a string. |
**name** | **string** |  |
**platform** | **string** |  |
**kind** | **string** | Platform-native flavor of the tag (Meta: &#x60;pixel&#x60;). |
**status** | **string** | &#x60;inactive&#x60; when the platform reports the tag as broken/unavailable. |
**code** | **string** | The base-code &#x60;&lt;script&gt;&#x60; snippet to install on the site. Meta only; populated by &#x60;getTrackingTag&#x60;, omitted from the list view. | [optional]
**last_fired_time** | **int** | Unix seconds of the last event the tag received, or &#x60;null&#x60; if it never fired. The practical \&quot;is it installed and working\&quot; signal. | [optional]
**is_unavailable** | **bool** | Whether the tag is in a broken/unavailable state (Meta &#x60;is_unavailable&#x60;). | [optional]
**installed** | **bool** | Convenience flag derived from &#x60;lastFiredTime&#x60; — has the tag ever fired. | [optional]
**creation_time** | **int** | Unix seconds the tag was created. | [optional]
**owner_business_id** | **string** | Business Manager id that owns the tag, or &#x60;null&#x60; when the tag lives on a personal (non-BM) ad account — such tags can&#39;t be shared with other ad accounts. | [optional]
**owner_ad_account_id** | **string** | Ad account id (&#x60;act_...&#x60;) that owns the tag, when reported. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
