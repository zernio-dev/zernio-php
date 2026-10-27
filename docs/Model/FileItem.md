# # FileItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**account_id** | **string** |  |
**provider** | **string** |  |
**name** | **string** |  |
**kind** | **string** |  |
**mime_type** | **string** |  |
**size** | **int** | Bytes; null for folders and Google editors files. |
**parent_id** | **string** |  |
**web_url** | **string** | The provider&#39;s own link to open the item. |
**downloadable** | **bool** | False for folders and for Drive files whose owner disabled downloading. |
**export_mime_type** | **string** | Google Docs, Slides and Drawings download as PDF/PNG and Sheets as XLSX; this is the type the download carries. | [optional]
**created_at** | **\DateTime** |  |
**modified_at** | **\DateTime** |  |
**trashed** | **bool** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
