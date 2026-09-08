# # StartSmsRegistrationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**registration_type** | **string** |  |
**phone_numbers** | **string[]** | Your numbers this registration covers. When omitted or empty on a 10DLC registration, defaults to your active SMS-enabled US local numbers not already covered by another registration. | [optional]
**brand** | [**\Zernio\Model\StartSmsRegistrationRequestBrand**](StartSmsRegistrationRequestBrand.md) |  | [optional]
**campaign** | [**\Zernio\Model\StartSmsRegistrationRequestCampaign**](StartSmsRegistrationRequestCampaign.md) |  | [optional]
**messaging_brand_name** | **string** | DBA / trade name used to brand message content (samples and auto-replies) when it differs from the legal name, e.g. a sole proprietor texting under a business name. The legal &#x60;brand.displayName&#x60; is still what the carrier vets. | [optional]
**wizard_values** | **array<string,string>** | Raw dashboard-wizard answers, stored only to prefill edit-and-resubmit. API integrators can omit. | [optional]
**resubmit_request_id** | **string** | Resubmit a registration that was returned for changes. Updates it in place instead of creating a new one. | [optional]
**toll_free** | [**\Zernio\Model\StartSmsRegistrationRequestTollFree**](StartSmsRegistrationRequestTollFree.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
