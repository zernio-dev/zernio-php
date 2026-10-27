# # CreateFilePickerSessionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | A Google account connected with &#x60;scopes&#x3D;files&#x60;. |
**redirect_url** | **string** | Where the browser goes when the user finishes. Absolute &#x60;http(s)&#x60; URL or a custom app scheme (&#x60;myapp://...&#x60;); relative, protocol-relative and script URLs are refused. Optional when you rely on the &#x60;file.picked&#x60; webhook. | [optional]
**file_ids** | **string[]** | Drive file ids to show the user first (Google Picker &#x60;DocsView.setFileIds&#x60;), for example to ask for access to files your app already knows about. Pre-navigation only: the user still has to pick them. | [optional]
**mime_types** | **string[]** | Only show files of these exact media types. | [optional]
**multiselect** | **bool** | false limits the pick to one file. | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
