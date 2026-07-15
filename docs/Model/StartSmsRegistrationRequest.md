# # StartSmsRegistrationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**registration_type** | **string** |  |
**phone_numbers** | **string[]** | Your numbers this registration covers. |
**brand** | [**\Zernio\Model\StartSmsRegistrationRequestBrand**](StartSmsRegistrationRequestBrand.md) |  | [optional]
**campaign** | [**\Zernio\Model\StartSmsRegistrationRequestCampaign**](StartSmsRegistrationRequestCampaign.md) |  | [optional]
**wizard_values** | **array<string,string>** | Raw dashboard-wizard answers, stored only to prefill edit-and-resubmit. API integrators can omit. | [optional]
**resubmit_request_id** | **string** | Resubmit a registration that was returned for changes — updates it in place instead of creating a new one. | [optional]
**toll_free** | [**\Zernio\Model\StartSmsRegistrationRequestTollFree**](StartSmsRegistrationRequestTollFree.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
