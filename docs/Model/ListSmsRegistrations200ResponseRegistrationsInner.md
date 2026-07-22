# # ListSmsRegistrations200ResponseRegistrationsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**registration_type** | **string** |  | [optional]
**display_name** | **string** |  | [optional]
**status** | **string** | requested/changes_requested &#x3D; pre-submission review states; customers see them as pending / needs changes. | [optional]
**brand_status** | **string** | Carrier-registry brand status (e.g. VERIFIED). | [optional]
**campaign_status** | **string** |  | [optional]
**brand_id** | **string** | TCR brand id, useful when referencing the brand in carrier support threads. | [optional]
**campaign_id** | **string** | TCR campaign id. | [optional]
**decline_reason** | **string** |  | [optional]
**tf_action_required_at** | **\DateTime** | Toll-free only: when the carrier requested changes (\&quot;Waiting For Customer\&quot;). The request must be resubmitted within 7 days of this timestamp or it expires. | [optional]
**phone_numbers** | **string[]** |  | [optional]
**awaiting_otp** | **bool** | Sole-prop 10DLC only; the OTP step is still pending. | [optional]
**trust_score** | **float** | Carrier-assigned brand trust score; drives throughput. | [optional]
**throughput** | [**\Zernio\Model\ListSmsRegistrations200ResponseRegistrationsInnerThroughput**](ListSmsRegistrations200ResponseRegistrationsInnerThroughput.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
