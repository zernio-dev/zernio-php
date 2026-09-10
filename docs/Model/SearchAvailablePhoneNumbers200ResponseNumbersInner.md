# # SearchAvailablePhoneNumbers200ResponseNumbersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_number** | **string** | E.164. Pass it as &#x60;phoneNumber&#x60; on POST /v1/phone-numbers/purchase to buy this exact number. | [optional]
**features** | **string[]** | Provider capability list for this number (e.g. voice, sms, mms). | [optional]
**locality** | **string** | Town or rate center the number belongs to, as the carrier names it (e.g. WACO). | [optional]
**best_effort** | **bool** | true when the carrier added this number because too few matched your filters, so it may be outside the requested prefix or locality. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
