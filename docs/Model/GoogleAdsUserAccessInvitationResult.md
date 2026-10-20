# # GoogleAdsUserAccessInvitationResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **string** |  | [optional]
**email_address** | **string** |  | [optional]
**access_role** | [**\Zernio\Model\GoogleAdsAccessRole**](GoogleAdsAccessRole.md) |  | [optional]
**status** | **string** | PENDING once the email is sent; PENDING_APPROVAL while Google waits for a second admin&#39;s multi-party approval. | [optional]
**invitation_id** | **string** | Null on validateOnly and while the invitation awaits multi-party approval. | [optional]
**multi_party_auth_review_id** | **string** | Google&#39;s multi-party approval review id when status is PENDING_APPROVAL. | [optional]
**validate_only** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
