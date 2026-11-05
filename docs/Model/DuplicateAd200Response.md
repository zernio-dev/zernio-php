# # DuplicateAd200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**copied_ad_id** | **string** | Platform ID of the new ad | [optional]
**discovery** | **string** | The copy exists on the platform in all three cases.  - &#x60;triggered&#x60;: an ads sync started and runs after this response, so the copy may not be readable through Zernio yet. - &#x60;skipped&#x60;: no sync started, so the copy appears on a later scheduled sync. - &#x60;failed&#x60;: the sync could not start. A sync that errors after the response is not reported here. | [optional]
**raw** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
