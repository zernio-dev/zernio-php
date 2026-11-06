# # ErrorResponseDetailsCreatedObjectsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  | [optional]
**id** | **string** | Meta object id; for &#x60;image&#x60; the image hash. | [optional]
**cleanup** | **string** | &#x60;deleted&#x60;: Zernio deleted it. &#x60;left_behind&#x60;: cleanup could not delete it (Meta refused the delete, or the delete hit a network error), so it still exists. &#x60;kept&#x60;: deliberately not deleted: an image (hashes are shared by every upload of the same file), or an object Zernio found by name after Meta lost its answer to the create, which may belong to another request with the same name. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
