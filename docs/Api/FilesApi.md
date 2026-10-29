# Zernio\FilesApi

Google Drive and OneDrive files of a connected account: list, download, upload, folders, rename, move, trash and share links. Connect with &#x60;scopes&#x3D;files&#x60;. Attach a file to a post as &#x60;{ fileId, accountId }&#x60; in &#x60;mediaItems&#x60;.  **Google Drive access is per file.** Google accounts are connected with Google&#39;s &#x60;drive.file&#x60; scope, not full Drive access. Zernio, and so your integration, can open only:  - files created through Zernio (&#x60;POST /v1/files&#x60;, &#x60;POST /v1/files/folders&#x60;), and - files the user picked in Google Picker: in the Zernio dashboard, or on a hosted picker page you open with &#x60;POST /v1/files/picker-sessions&#x60;.  Everything else in the user&#39;s Drive is invisible. Listing returns only the files above, and a folder the user never picked lists empty (picking a folder does not grant its contents).  Any per-file call on another id answers 404 &#x60;resource_not_found&#x60; with &#x60;details.reason: file_not_granted&#x60;. The fix is always to have the user pick the file. Picked files in shared drives work. Grants last until the user removes Zernio from their Google account.  OneDrive (Microsoft accounts) has no such limit: the account reaches every file the user can see, and picker sessions do not apply.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFilePickerSession()**](FilesApi.md#createFilePickerSession) | **POST** /v1/files/picker-sessions | Create a hosted Google Picker session |
| [**createFolder()**](FilesApi.md#createFolder) | **POST** /v1/files/folders | Create a folder |
| [**downloadFile()**](FilesApi.md#downloadFile) | **GET** /v1/files/{fileId}/download | Download a file |
| [**getFile()**](FilesApi.md#getFile) | **GET** /v1/files/{fileId} | Get a file or folder |
| [**getFileShareLink()**](FilesApi.md#getFileShareLink) | **GET** /v1/files/{fileId}/share-link | Get an anyone-with-the-link share link |
| [**listFiles()**](FilesApi.md#listFiles) | **GET** /v1/files | List files in a folder or search the drive |
| [**trashFile()**](FilesApi.md#trashFile) | **DELETE** /v1/files/{fileId} | Move a file to the trash |
| [**updateFile()**](FilesApi.md#updateFile) | **PATCH** /v1/files/{fileId} | Rename or move a file |
| [**uploadFile()**](FilesApi.md#uploadFile) | **POST** /v1/files | Upload a file |


## `createFilePickerSession()`

```php
createFilePickerSession($create_file_picker_session_request): \Zernio\Model\CreateFilePickerSession201Response
```

Create a hosted Google Picker session

Creates a hosted Google Picker session so your end user can grant Zernio access to Drive files.  Google accounts are connected with `drive.file`, so Zernio opens only files it created or the user picked (see the Files tag).  1. Create a session. 2. Send the user to `url`. 3. They pick files in Google Picker on a Zernio-hosted page.  ### Redirect  When they finish, the browser is sent to `redirectUrl` with these query params added (existing params are kept):  - `status=picked`, `pickerSessionId`, `fileIds` (comma-separated Drive file ids, already checked against Drive), or - `status=cancelled`, `pickerSessionId` when the user pressed Cancel.  A `file.picked` webhook fires on every successful pick, so `redirectUrl` is optional for server-side integrations. Closing the picker without picking keeps the session open; the user can try again until it expires.  ### Limits  - The URL is single-use and expires after 30 minutes; create a new session for every pick. - Google accounts only: Microsoft accounts answer 400 `platform_not_supported` because OneDrive needs no picker. - Picks are permanent grants: once picked, a file stays readable through the Files endpoints until the user removes Zernio from their Google account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_file_picker_session_request = {"accountId":"6650f1c2a4b5c6d7e8f90123","redirectUrl":"https://app.example.com/drive/picked","mimeTypes":["image/png","image/jpeg","video/mp4"]}; // \Zernio\Model\CreateFilePickerSessionRequest

try {
    $result = $apiInstance->createFilePickerSession($create_file_picker_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createFilePickerSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_file_picker_session_request** | [**\Zernio\Model\CreateFilePickerSessionRequest**](../Model/CreateFilePickerSessionRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateFilePickerSession201Response**](../Model/CreateFilePickerSession201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFolder()`

```php
createFolder($create_folder_request): \Zernio\Model\UploadFile201Response
```

Create a folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_folder_request = new \Zernio\Model\CreateFolderRequest(); // \Zernio\Model\CreateFolderRequest

try {
    $result = $apiInstance->createFolder($create_folder_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_folder_request** | [**\Zernio\Model\CreateFolderRequest**](../Model/CreateFolderRequest.md)|  | |

### Return type

[**\Zernio\Model\UploadFile201Response**](../Model/UploadFile201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadFile()`

```php
downloadFile($file_id, $account_id): \SplFileObject
```

Download a file

Streams the bytes with `Content-Disposition: attachment`. Google Docs, Slides and Drawings arrive as PDF/PNG and Sheets as XLSX, named with the export extension. Folders answer 400.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.

try {
    $result = $apiInstance->downloadFile($file_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->downloadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |
| **account_id** | **string**| The connected Google or Microsoft account. | |

### Return type

**\SplFileObject**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFile()`

```php
getFile($file_id, $account_id): \Zernio\Model\UploadFile201Response
```

Get a file or folder

On Google Drive, a file Zernio neither created nor was given through Google Picker answers 404 `resource_not_found` with `details: { fileId, reason: file_not_granted }`; send the user through `POST /v1/files/picker-sessions` (pass the id in `fileIds` to show it first). The same 404 applies to download, update, trash and share-link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.

try {
    $result = $apiInstance->getFile($file_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |
| **account_id** | **string**| The connected Google or Microsoft account. | |

### Return type

[**\Zernio\Model\UploadFile201Response**](../Model/UploadFile201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileShareLink()`

```php
getFileShareLink($file_id, $account_id): \Zernio\Model\GetFileShareLink200Response
```

Get an anyone-with-the-link share link

Grants read access to anyone holding the link (Drive `anyone` permission, OneDrive anonymous view link) and returns it. The grant stays until it is revoked on the provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.

try {
    $result = $apiInstance->getFileShareLink($file_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileShareLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |
| **account_id** | **string**| The connected Google or Microsoft account. | |

### Return type

[**\Zernio\Model\GetFileShareLink200Response**](../Model/GetFileShareLink200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFiles()`

```php
listFiles($account_id, $folder_id, $q, $cursor, $limit): \Zernio\Model\ListFiles200Response
```

List files in a folder or search the drive

Lists the children of `folderId` (the root by default), folders first.  With `q` and no `folderId` the whole drive is searched by name (on Google, every drive the app can see, shared drives included).  - The account must have been connected with `scopes=files` (412 `account_scope_missing` otherwise). - Cursors are opaque and provider-issued. - Google Drive returns only files Zernio created or the user picked (see the Files tag): an unpicked folder lists empty.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.
$folder_id = 'folder_id_example'; // string | Provider folder id; omit for the root.
$q = 'q_example'; // string | Name search.
$cursor = 'cursor_example'; // string
$limit = 50; // int

try {
    $result = $apiInstance->listFiles($account_id, $folder_id, $q, $cursor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->listFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected Google or Microsoft account. | |
| **folder_id** | **string**| Provider folder id; omit for the root. | [optional] |
| **q** | **string**| Name search. | [optional] |
| **cursor** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |

### Return type

[**\Zernio\Model\ListFiles200Response**](../Model/ListFiles200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trashFile()`

```php
trashFile($file_id, $account_id): \Zernio\Model\TrashFile200Response
```

Move a file to the trash

Drive trash or the OneDrive recycle bin; nothing is destroyed and the user can restore it on the provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.

try {
    $result = $apiInstance->trashFile($file_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->trashFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |
| **account_id** | **string**| The connected Google or Microsoft account. | |

### Return type

[**\Zernio\Model\TrashFile200Response**](../Model/TrashFile200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFile()`

```php
updateFile($file_id, $update_file_request): \Zernio\Model\UploadFile201Response
```

Rename or move a file

`parentId` moves the item into another folder; `name` renames it. At least one is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string
$update_file_request = new \Zernio\Model\UpdateFileRequest(); // \Zernio\Model\UpdateFileRequest

try {
    $result = $apiInstance->updateFile($file_id, $update_file_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->updateFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |
| **update_file_request** | [**\Zernio\Model\UpdateFileRequest**](../Model/UpdateFileRequest.md)|  | |

### Return type

[**\Zernio\Model\UploadFile201Response**](../Model/UploadFile201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadFile()`

```php
uploadFile($upload_file_request): \Zernio\Model\UploadFile201Response
```

Upload a file

Either `multipart/form-data` with the file under `file` plus `accountId`, `name` (defaults to the file name) and `parentId`, or JSON with a public `url` the file is fetched from (100 MB cap). Large files go through the provider's resumable upload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_file_request = new \Zernio\Model\UploadFileRequest(); // \Zernio\Model\UploadFileRequest

try {
    $result = $apiInstance->uploadFile($upload_file_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upload_file_request** | [**\Zernio\Model\UploadFileRequest**](../Model/UploadFileRequest.md)|  | |

### Return type

[**\Zernio\Model\UploadFile201Response**](../Model/UploadFile201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
