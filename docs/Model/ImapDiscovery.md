# # ImapDiscovery

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** |  | [optional]
**route** | **string** |  | [optional]
**provider** | [**\Zernio\Model\ImapDiscoveryProvider**](ImapDiscoveryProvider.md) |  | [optional]
**source** | **string** |  | [optional]
**confidence** | **string** | low when only a probe answered: show the settings for the user to check. | [optional]
**imap** | [**\Zernio\Model\ImapDiscoveryImap**](ImapDiscoveryImap.md) |  | [optional]
**smtp** | [**\Zernio\Model\ImapDiscoverySmtp**](ImapDiscoverySmtp.md) |  | [optional]
**auth** | [**\Zernio\Model\ImapDiscoveryAuth**](ImapDiscoveryAuth.md) |  | [optional]
**preflight** | [**\Zernio\Model\ImapDiscoveryPreflightInner[]**](ImapDiscoveryPreflightInner.md) | What to switch on at the provider first, such as IMAP access on GMX or Yandex. | [optional]
**reconnect_cause** | **string** |  | [optional]
**reason** | **string** |  | [optional]
**unsupported_reason** | **string** |  | [optional]
**app_password_fallback** | **object** | Google only: Gmail over IMAP with an app password, for accounts whose admin blocks Google sign-in for other apps. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
