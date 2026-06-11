# # GetWhatsAppPhoneNumbers200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**numbers** | [**\Zernio\Model\GetWhatsAppPhoneNumbers200ResponseNumbersInner[]**](GetWhatsAppPhoneNumbers200ResponseNumbersInner.md) |  | [optional]
**connected** | [**\Zernio\Model\GetWhatsAppPhoneNumbers200ResponseConnectedInner[]**](GetWhatsAppPhoneNumbers200ResponseConnectedInner.md) | Connected (bring-your-own) WhatsApp numbers — your own WABA numbers linked via Embedded Signup. Not provisioned or billed by Zernio, so they are not in &#x60;numbers&#x60;; &#x60;accountId&#x60; is the social-account id used by the messaging and inbox endpoints. Included only on the default and &#x60;status&#x3D;active&#x60; views. | [optional]
**sandbox** | [**\Zernio\Model\GetWhatsAppPhoneNumbers200ResponseSandbox**](GetWhatsAppPhoneNumbers200ResponseSandbox.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
