# # CreateStandaloneAdRequestCreativesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**headline** | **string** |  |
**body** | **string** |  |
**image_url** | **string** | Image creative. Mutually exclusive with &#x60;video&#x60;. | [optional]
**video** | [**\Zernio\Model\CreateStandaloneAdRequestCreativesInnerVideo**](CreateStandaloneAdRequestCreativesInnerVideo.md) |  | [optional]
**link_url** | **string** |  |
**call_to_action** | **string** |  |
**lead_gen_form_id** | **string** | Per-creative Lead Gen Form ID. Wins over the top-level &#x60;leadGenFormId&#x60; so each ad in a campaign can A/B a different form. Forces CTA to SIGN_UP. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
