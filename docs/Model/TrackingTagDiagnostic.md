# # TrackingTagDiagnostic

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | Platform check id (Meta: e.g. &#x60;pixel_missing_param_in_events&#x60;). |
**title** | **string** |  |
**description** | **string** |  | [optional]
**result** | **string** | The platform verdict (Meta: &#x60;passed&#x60;, &#x60;failed&#x60;, &#x60;warning&#x60;). |
**action_url** | **string** | Where to fix it in the platform UI (Meta: Events Manager). | [optional]
**always_use_default_value** | **bool** | Record &#x60;defaultValue&#x60; even when the conversion sends its own value. | [optional]
**primary** | **bool** | Primary (counts toward bidding) or secondary (observation only). | [optional]
**counting_type** | **string** | &#x60;one&#x60; &#x3D; one conversion per ad interaction, &#x60;every&#x60; &#x3D; each conversion. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
