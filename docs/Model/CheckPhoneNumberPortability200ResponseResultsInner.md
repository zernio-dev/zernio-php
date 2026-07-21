# # CheckPhoneNumberPortability200ResponseResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_number** | **string** |  | [optional]
**portable** | **bool** |  | [optional]
**fast_portable** | **bool** | Qualifies for the carrier&#39;s accelerated FastPort lane. | [optional]
**line_type** | **string** | Line type when known (mobile, landline, voip…). A US/CA mobile number requires the transfer PIN at submit. | [optional]
**country_code** | **string** | ISO country of the number — pass it to GET /v1/phone-numbers/port-in/requirements for international numbers. | [optional]
**phone_number_type** | **string** | Carrier number-type classification (local, mobile, national, toll_free…) — the numberType for the requirements endpoint. | [optional]
**not_portable_reason** | **string** | Carrier reason when not portable; null when portable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
