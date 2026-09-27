# # GetAdAccountHierarchy200ResponseRootsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **string** | Native Google Ads customer id, digits only. | [optional]
**name** | **string** |  | [optional]
**currency** | **string** | ISO 4217 code. | [optional]
**time_zone** | **string** | IANA time zone, e.g. Europe/Madrid. | [optional]
**manager** | **bool** | True for a manager (MCC) account. | [optional]
**test_account** | **bool** |  | [optional]
**status** | **string** | Google customer status: ENABLED, CANCELED, SUSPENDED or CLOSED. | [optional]
**manager_links** | [**\Zernio\Model\GetAdAccountHierarchy200ResponseRootsInnerManagerLinksInner[]**](GetAdAccountHierarchy200ResponseRootsInnerManagerLinksInner.md) | Managers linked to this account, ACTIVE or PENDING. | [optional]
**clients** | [**\Zernio\Model\GoogleAdsHierarchyClient[]**](GoogleAdsHierarchyClient.md) | Every account under this root at any depth, in Google&#39;s order, followed by pending invitations. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
