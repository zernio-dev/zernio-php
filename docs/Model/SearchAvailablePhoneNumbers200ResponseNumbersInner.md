# # SearchAvailablePhoneNumbers200ResponseNumbersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_number** | **string** | E.164. Pass it as &#x60;phoneNumber&#x60; on POST /v1/phone-numbers/purchase to buy this exact number. | [optional]
**features** | **string[]** | Provider capability list for this number (e.g. voice, sms, mms). | [optional]
**locality** | **string** | Town or rate center the number belongs to, as the carrier names it (e.g. WACO). | [optional]
**best_effort** | **bool** | true when the carrier added this number because too few matched your filters, so it may be outside the requested prefix or locality. | [optional]
**masked_number** | **string** | Keyless calls only, in place of &#x60;phoneNumber&#x60;: the number with its middle digits masked, e.g. +44 20 •••• 0123. | [optional]
**number_type** | **string** | Keyless calls only. Without a &#x60;numberType&#x60; filter a keyless search mixes every type the country sells, so each result names its own. | [optional]
**claim_id** | **string** | Keyless calls only. Opaque, expires after 7 days. Pass it as &#x60;claimId&#x60; on a keyless POST /v1/phone-numbers/purchase. | [optional]
**claim_url** | **string** | Keyless calls only. Signup link that opens the dashboard&#39;s confirm step for this number. The number is not held: if it is gone by then, the buyer picks another in the same area. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
