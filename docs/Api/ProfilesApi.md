# Zernio\ProfilesApi

Manage profiles (named groups of social accounts).

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProfile()**](ProfilesApi.md#createProfile) | **POST** /v1/profiles | Create profile |
| [**deleteProfile()**](ProfilesApi.md#deleteProfile) | **DELETE** /v1/profiles/{profileId} | Delete profile |
| [**getProfile()**](ProfilesApi.md#getProfile) | **GET** /v1/profiles/{profileId} | Get profile |
| [**listProfiles()**](ProfilesApi.md#listProfiles) | **GET** /v1/profiles | List profiles |
| [**updateProfile()**](ProfilesApi.md#updateProfile) | **PUT** /v1/profiles/{profileId} | Update profile |


## `createProfile()`

```php
createProfile($create_profile_request, $idempotency_key): \Zernio\Model\ProfileCreateResponse
```

Create profile

Creates a new profile with a name, optional description, and color. Names are unique per workspace: a duplicate returns a 409 whose details.existingProfileId carries the id of the existing profile. Send an Idempotency-Key header to make retries safe: a retried create with the same key and body replays the original 201 (same _id) instead of conflicting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_profile_request = {"name":"Marketing Team","description":"Profile for marketing campaigns","color":"#4CAF50"}; // \Zernio\Model\CreateProfileRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes create retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409.

try {
    $result = $apiInstance->createProfile($create_profile_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->createProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_profile_request** | [**\Zernio\Model\CreateProfileRequest**](../Model/CreateProfileRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes create retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. | [optional] |

### Return type

[**\Zernio\Model\ProfileCreateResponse**](../Model/ProfileCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProfile()`

```php
deleteProfile($profile_id): \Zernio\Model\ProfileDeleteResponse
```

Delete profile

Permanently deletes a profile. Active connected accounts block deletion (returns 400) - disconnect them first. Any remaining disconnected accounts and provisioned WhatsApp numbers are moved to another of your profiles (a new one is created only if needed), never deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string

try {
    $result = $apiInstance->deleteProfile($profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |

### Return type

[**\Zernio\Model\ProfileDeleteResponse**](../Model/ProfileDeleteResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfile()`

```php
getProfile($profile_id): \Zernio\Model\ProfileGetResponse
```

Get profile

Returns a single profile by ID, including its name, color, and default status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string

try {
    $result = $apiInstance->getProfile($profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |

### Return type

[**\Zernio\Model\ProfileGetResponse**](../Model/ProfileGetResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProfiles()`

```php
listProfiles($include_over_limit, $name, $limit, $skip): \Zernio\Model\ProfilesListResponse
```

List profiles

Returns profiles sorted default-first, then by creation date. Filter with name (exact match) and paginate with limit/skip; without those params the full list is returned unchanged. Use includeOverLimit=true to include profiles that exceed the plan limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_over_limit = false; // bool | When true, includes over-limit profiles (marked with isOverLimit: true).
$name = 'name_example'; // string | Exact-match filter on the profile name. Useful to recover a profile id after an ambiguous create (timeout followed by a 409 on retry).
$limit = 56; // int | Page size. When limit or skip is present, the response includes total and skip (and echoes limit).
$skip = 56; // int | Number of profiles to skip, applied after sorting and filtering.

try {
    $result = $apiInstance->listProfiles($include_over_limit, $name, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->listProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include_over_limit** | **bool**| When true, includes over-limit profiles (marked with isOverLimit: true). | [optional] [default to false] |
| **name** | **string**| Exact-match filter on the profile name. Useful to recover a profile id after an ambiguous create (timeout followed by a 409 on retry). | [optional] |
| **limit** | **int**| Page size. When limit or skip is present, the response includes total and skip (and echoes limit). | [optional] |
| **skip** | **int**| Number of profiles to skip, applied after sorting and filtering. | [optional] |

### Return type

[**\Zernio\Model\ProfilesListResponse**](../Model/ProfilesListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProfile()`

```php
updateProfile($profile_id, $update_profile_request): \Zernio\Model\ProfileUpdateResponse
```

Update profile

Updates a profile's name, description, color, or default status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$update_profile_request = {"name":"Marketing Team (Updated)","color":"#2196F3","isDefault":true}; // \Zernio\Model\UpdateProfileRequest

try {
    $result = $apiInstance->updateProfile($profile_id, $update_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->updateProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **update_profile_request** | [**\Zernio\Model\UpdateProfileRequest**](../Model/UpdateProfileRequest.md)|  | |

### Return type

[**\Zernio\Model\ProfileUpdateResponse**](../Model/ProfileUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
