# # EnableSmsOnNumber200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** |  | [optional]
**id** | **string** | The SMS social account ID (present when enabled). | [optional]
**phone_number** | **string** |  | [optional]
**is_active** | **bool** | False for US numbers until their registration is approved. | [optional]
**country** | **string** |  | [optional]
**sms_capable** | **bool** | Null when capability can&#39;t be read yet (still provisioning). | [optional]
**mms_capable** | **bool** |  | [optional]
**domestic_only** | **bool** |  | [optional]
**not_ready** | **bool** | Number is still provisioning at the carrier; retry shortly. | [optional]
**needs_registration** | **bool** | US only; a carrier registration is required before delivery. | [optional]
**already_registered** | **bool** | A prior non-rejected registration already covers this number; no re-submit needed. | [optional]
**registration_status** | **string** |  | [optional]
**reusable** | [**\Zernio\Model\EnableSmsOnNumber200ResponseReusable**](EnableSmsOnNumber200ResponseReusable.md) |  | [optional]
**message** | **string** | Human-readable explanation when &#x60;enabled&#x60; is false. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
