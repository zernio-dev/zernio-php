# # BrandedCallingIdentity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**enterprise_id** | **string** |  | [optional]
**display_name** | **string** |  | [optional]
**call_reasons** | **string[]** |  | [optional]
**call_reasons_pre_approved** | **bool** | Every call reason matches the carrier catalogue (GET /v1/branded-calling/call-reasons); anything else is vetted by hand and takes longer. | [optional]
**logo_url** | **string** | The image you sent. Zernio hosts the 256x256 BMP the carriers require. | [optional]
**authorizer** | [**\Zernio\Model\BrandedCallingIdentityAuthorizer**](BrandedCallingIdentityAuthorizer.md) |  | [optional]
**references** | [**\Zernio\Model\BrandedCallingReferences**](BrandedCallingReferences.md) |  | [optional]
**status** | **string** | requested &#x3D; in Zernio review; changes_requested &#x3D; answer the review (PATCH); pending_email_verification &#x3D; confirm the code emailed to the authorizer; in_review &#x3D; with the carrier vetting team; verified &#x3D; attach numbers; rejected &#x3D; fix and PATCH to resubmit; suspended &#x3D; an infringement claim is open; expired &#x3D; the yearly verification lapsed; permanently_rejected &#x3D; terminal. | [optional]
**rejection_reasons** | [**\Zernio\Model\BrandedCallingIdentityRejectionReasonsInner[]**](BrandedCallingIdentityRejectionReasonsInner.md) |  | [optional]
**review_note** | **string** | The open change request, as text. | [optional]
**review_request** | [**\Zernio\Model\BrandedCallingIdentityReviewRequest**](BrandedCallingIdentityReviewRequest.md) |  | [optional]
**email_verified_at** | **\DateTime** |  | [optional]
**submitted_at** | **\DateTime** |  | [optional]
**verified_at** | **\DateTime** |  | [optional]
**expiring_at** | **\DateTime** | Verification lasts one year; Zernio resubmits 30 days before this date. | [optional]
**numbers** | [**\Zernio\Model\BrandedCallingIdentityNumber[]**](BrandedCallingIdentityNumber.md) |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
