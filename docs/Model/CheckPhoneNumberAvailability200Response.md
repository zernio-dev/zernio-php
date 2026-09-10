# # CheckPhoneNumberAvailability200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | **string** |  | [optional]
**number_type** | **string** |  | [optional]
**available** | **bool** | Whether deliverable voice inventory exists right now. | [optional]
**pre_orderable** | **bool** | Nothing deliverable now, but this pair can be pre-ordered: submit KYC as usual and the carrier sources the number after review (usually about 3 weeks, never guaranteed). Only document tiers (3/4) qualify. | [optional]
**address_constraint** | **string** |  | [optional]
**areas** | **string[]** | For &#x60;geo&#x60; only: the area(s) the registered address must be in. | [optional]
**area_options** | [**\Zernio\Model\CheckPhoneNumberAvailability200ResponseAreaOptionsInner[]**](CheckPhoneNumberAvailability200ResponseAreaOptionsInner.md) | Live inventory grouped by area code. For US and CA this is the full country inventory (every area code with stock, recognizable metros listed first, then alphabetical); other countries are ordered largest stock first; they list the areas in the latest inventory page (up to 500 numbers, which for most countries is the entire pool). Empty when out of stock (or the area lookup failed). Pass a chosen &#x60;ndc&#x60; as &#x60;areaCode&#x60; on POST /v1/phone-numbers/purchase (or on the KYC submit for regulated countries) to require that area. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
