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
**host_replacements** | [**\Zernio\Model\ImapDiscoveryHostReplacementsInner[]**](ImapDiscoveryHostReplacementsInner.md) | Server names discovery swapped for the name the server certificate is issued for, as on shared hosting where mail.&lt;domain&gt; has no certificate of its own. Present on the imap route. | [optional]
**reconnect_cause** | **string** |  | [optional]
**reason** | **string** |  | [optional]
**unsupported_reason** | **string** | Why an &#x60;unsupported&#x60; route cannot connect:  - &#x60;proton_requires_bridge&#x60;: Proton Mail only works through its local bridge. - &#x60;forwarding_only&#x60;: the domain forwards mail (Cloudflare Email Routing) and stores none, so connect the mailbox it forwards to. - &#x60;domain_typo&#x60;: the domain takes no mail and looks like a mistyped consumer domain. &#x60;suggestedEmail&#x60; has the likely address. - &#x60;no_mail_domain&#x60;: the domain has no MX and no address, so it cannot receive email. | [optional]
**suggested_email** | **string** | With unsupportedReason domain_typo: the address the user most likely meant, such as ana7275@gmail.com for ana@7275gmail.com. Run discovery again with it once the user confirms. | [optional]
**app_password_fallback** | **object** | Google only: Gmail over IMAP with an app password, for accounts whose admin blocks Google sign-in for other apps. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
