# # GoogleAdsHierarchyClient

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **string** | Native Google Ads customer id, digits only. | [optional]
**name** | **string** | Null for a pending invitation. | [optional]
**currency** | **string** |  | [optional]
**time_zone** | **string** |  | [optional]
**manager** | **bool** | True for a sub-manager account. | [optional]
**test_account** | **bool** |  | [optional]
**hidden** | **bool** | Hidden in the manager&#39;s Google Ads UI. | [optional]
**level** | **int** | Distance from the root (1 &#x3D; direct client of the root). | [optional]
**status** | **string** | Google customer status: ENABLED, CANCELED, SUSPENDED or CLOSED. Null for a pending invitation. | [optional]
**parent_customer_id** | **string** | Direct manager of this account. Null only when more than 50 managers under the root were skipped. | [optional]
**manager_link_id** | **string** | Id of the link to the parent, used by PATCH /v1/ads/accounts/manager-links. | [optional]
**link_status** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
