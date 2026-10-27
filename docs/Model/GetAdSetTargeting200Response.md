# # GetAdSetTargeting200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_set_id** | **string** |  | [optional]
**targeting** | [**\ZernioModelTargetingSpec**](\ZernioModelTargetingSpec.md) | Only the keys the ad group sets. &#x60;regions&#x60;, &#x60;metros&#x60;, &#x60;cities&#x60; and &#x60;zips&#x60; entries carry &#x60;{ key, name }&#x60;; &#x60;interests&#x60; carry &#x60;{ id, name }&#x60;. | [optional]
**start_date** | **string** | The ad group&#39;s start_time, null when it has none. | [optional]
**end_date** | **string** | The ad group&#39;s end_time, null when it runs continuously. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
