# # ListPhoneNumbers200ResponseNumbersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  | [optional]
**phone_number** | **string** |  | [optional]
**country** | **string** |  | [optional]
**status** | **string** |  | [optional]
**registrant_name** | **string** | For regulated numbers, who it&#39;s registered for (company or person), set from the submitted KYC. | [optional]
**telnyx_order_id** | **string** | Present once the number order has been placed (i.e. the requirement group was approved). Absent while still in identity review. | [optional]
**monthly_cents** | **int** | What this number bills each month, in cents. Stamped when the number was bought, so an existing number keeps its price when the rate card changes. | [optional]
**hosted_by_zernio** | **bool** | False for numbers you brought yourself (connected via Meta embedded signup). They live on your own carrier, so SMS/Calls can&#39;t be enabled on them. | [optional]
**sip_trunk_id** | **string** | SIP trunk the number is attached to; null when not trunked. While attached, enabling Calls or WhatsApp calling, requesting WhatsApp verification, and releasing the number all return 409. | [optional]
**profile_id** | **object** |  | [optional]
**provisioned_at** | **\DateTime** |  | [optional]
**meta_preverified_id** | **string** |  | [optional]
**meta_verification_status** | **string** |  | [optional]
**onfido_verification_url** | **string** | For regulated (Tier 3/4) numbers with an Onfido ID-verification step: the link to forward to the end user. Set once the order is placed; null otherwise. Poll this field after submitting KYC. | [optional]
**end_user_first_name** | **string** |  | [optional]
**end_user_last_name** | **string** |  | [optional]
**regulatory_decline_reason** | **string** | Reviewer rejection reason when status is regulatory_declined. | [optional]
**calling_enabled** | **bool** | Whether WhatsApp Business Calling is enabled on this number (manage via /v1/whatsapp/phone-numbers/{id}/calling). | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
