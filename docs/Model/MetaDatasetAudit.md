# # MetaDatasetAudit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**ad_account_id** | **string** |  |
**dataset** | [**\Zernio\Model\MetaDatasetAuditDataset**](MetaDatasetAuditDataset.md) |  |
**datasets** | [**\Zernio\Model\MetaDatasetAuditDatasetsInner[]**](MetaDatasetAuditDatasetsInner.md) | Every pixel assigned to the ad account. |
**window** | [**\Zernio\Model\MetaDatasetAuditWindow**](MetaDatasetAuditWindow.md) |  |
**events** | [**\Zernio\Model\MetaDatasetAuditEventsInner[]**](MetaDatasetAuditEventsInner.md) | One entry per event Meta counted in the window or scored, busiest first. |
**findings** | [**\Zernio\Model\MetaDatasetAuditFindingsInner[]**](MetaDatasetAuditFindingsInner.md) | Problems the numbers show, most damaging first. |
**unavailable** | [**\Zernio\Model\MetaDatasetAuditUnavailableInner[]**](MetaDatasetAuditUnavailableInner.md) | What the audit could not read, and why. |
**checked_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
