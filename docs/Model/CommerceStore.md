# # CommerceStore

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio SocialAccount id of the store. |
**platform** | **string** |  |
**name** | **string** |  |
**domain** | **string** | The platform domain of the store, e.g. my-store.myshopify.com. |
**url** | **string** | Public storefront URL. |
**currency** | **string** | ISO 4217 code the store sells in. |
**country** | **string** | ISO 3166-1 alpha-2 country of the store. |
**capabilities** | [**\Zernio\Model\CommerceCapability[]**](CommerceCapability.md) |  |
**missing_capabilities** | [**\Zernio\Model\CommerceCapability[]**](CommerceCapability.md) | Capabilities the platform supports that this store has not granted yet. |
**grant_permissions_url** | **string** | Shopify: a page in the Shopify admin where the store owner approves the permissions missingCapabilities need, on the existing install (no reinstall; they can revoke them later). Null when nothing is missing or the store cannot grant them this way (a store connected with its own custom-app token). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
