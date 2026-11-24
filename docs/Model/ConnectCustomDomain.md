# # ConnectCustomDomain

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**hostname** | **string** | The subdomain, such as &#x60;connect.yourbrand.com&#x60;. |
**zone** | **string** | The registered domain the records live in, such as &#x60;yourbrand.com&#x60;. |
**status** | **string** | &#x60;pending&#x60; until the TXT record is found and the certificate is issued, &#x60;active&#x60; once the domain serves the connect screens, &#x60;failed&#x60; when it stopped pointing at Zernio (remove it and add it again). |
**connect_enabled** | **bool** | Whether new connect links open on this domain while it is active. |
**ownership_verified** | **bool** | True once the TXT record was found. |
**records** | [**\Zernio\Model\ConnectCustomDomainRecordsInner[]**](ConnectCustomDomainRecordsInner.md) | The DNS records to add at your DNS provider. |
**activated_at** | **\DateTime** |  |
**created_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
