# # SearchAvailablePhoneNumbers200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | **string** |  | [optional]
**number_type** | **string** |  | [optional]
**require_sms** | **bool** | Echo of the &#x60;sms&#x60; filter applied to this search. | [optional]
**numbers** | [**\Zernio\Model\SearchAvailablePhoneNumbers200ResponseNumbersInner[]**](SearchAvailablePhoneNumbers200ResponseNumbersInner.md) |  | [optional]
**masked** | **bool** | true on keyless calls. | [optional]
**near** | **string** | With &#x60;country&#x3D;auto&#x60;: the caller&#39;s city the results were narrowed to, or null when there was no stock there. | [optional]
**claim_id** | **string** | Keyless calls only: a claim for any number matching this search&#39;s country, type and area. | [optional]
**claim_url** | **string** | Keyless calls only: signup link for any number matching this search. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
