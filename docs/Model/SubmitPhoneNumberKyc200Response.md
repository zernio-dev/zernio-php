# # SubmitPhoneNumberKyc200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** |  | [optional]
**pre_order** | **bool** | True when nothing was in stock and this submission placed a pre-order. The number stays &#x60;pending_regulatory&#x60; until the carrier sources it (usually about 3 weeks) and is not billed until active. A pre-order is one number: &#x60;quantity&#x60; above 1 is rejected with 400. | [optional]
**phone_number** | [**\Zernio\Model\SubmitPhoneNumberKyc200ResponsePhoneNumber**](SubmitPhoneNumberKyc200ResponsePhoneNumber.md) |  | [optional]
**numbers** | [**\Zernio\Model\SubmitPhoneNumberKyc200ResponseNumbersInner[]**](SubmitPhoneNumberKyc200ResponseNumbersInner.md) | Every number provisioned from this submission. Length equals the requested &#x60;quantity&#x60; on full success (fewer if some orders failed; best-effort). The first element mirrors &#x60;phoneNumber&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
