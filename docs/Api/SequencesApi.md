# Late\SequencesApi

Drip campaign sequences. Send a series of messages to enrolled contacts with configurable delays between steps. Supports auto-exit on reply or unsubscribe.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateSequence()**](SequencesApi.md#activateSequence) | **POST** /v1/sequences/{sequenceId}/activate | Activate a sequence |
| [**createSequence()**](SequencesApi.md#createSequence) | **POST** /v1/sequences | Create a sequence |
| [**deleteSequence()**](SequencesApi.md#deleteSequence) | **DELETE** /v1/sequences/{sequenceId} | Delete a sequence |
| [**enrollContacts()**](SequencesApi.md#enrollContacts) | **POST** /v1/sequences/{sequenceId}/enroll | Enroll contacts in a sequence |
| [**getSequence()**](SequencesApi.md#getSequence) | **GET** /v1/sequences/{sequenceId} | Get sequence with steps |
| [**listSequenceEnrollments()**](SequencesApi.md#listSequenceEnrollments) | **GET** /v1/sequences/{sequenceId}/enrollments | List enrollments for a sequence |
| [**listSequences()**](SequencesApi.md#listSequences) | **GET** /v1/sequences | List sequences |
| [**pauseSequence()**](SequencesApi.md#pauseSequence) | **POST** /v1/sequences/{sequenceId}/pause | Pause a sequence |
| [**unenrollContact()**](SequencesApi.md#unenrollContact) | **DELETE** /v1/sequences/{sequenceId}/enroll/{contactId} | Unenroll a contact from a sequence |
| [**updateSequence()**](SequencesApi.md#updateSequence) | **PATCH** /v1/sequences/{sequenceId} | Update a sequence |


## `activateSequence()`

```php
activateSequence($sequence_id)
```

Activate a sequence

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\SequencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequence_id = 'sequence_id_example'; // string

try {
    $apiInstance->activateSequence($sequence_id);
} catch (Exception $e) {
    echo 'Exception when calling SequencesApi->activateSequence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sequence_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSequence()`

```php
createSequence($create_sequence_request)
```

Create a sequence

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\SequencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_sequence_request = new \Late\Model\CreateSequenceRequest(); // \Late\Model\CreateSequenceRequest

try {
    $apiInstance->createSequence($create_sequence_request);
} catch (Exception $e) {
    echo 'Exception when calling SequencesApi->createSequence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_sequence_request** | [**\Late\Model\CreateSequenceRequest**](../Model/CreateSequenceRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSequence()`

```php
deleteSequence($sequence_id)
```

Delete a sequence

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\SequencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequence_id = 'sequence_id_example'; // string

try {
    $apiInstance->deleteSequence($sequence_id);
} catch (Exception $e) {
    echo 'Exception when calling SequencesApi->deleteSequence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sequence_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enrollContacts()`

```php
enrollContacts($sequence_id, $enroll_contacts_request)
```

Enroll contacts in a sequence

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\SequencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequence_id = 'sequence_id_example'; // string
$enroll_contacts_request = new \Late\Model\EnrollContactsRequest(); // \Late\Model\EnrollContactsRequest

try {
    $apiInstance->enrollContacts($sequence_id, $enroll_contacts_request);
} catch (Exception $e) {
    echo 'Exception when calling SequencesApi->enrollContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sequence_id** | **string**|  | |
| **enroll_contacts_request** | [**\Late\Model\EnrollContactsRequest**](../Model/EnrollContactsRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSequence()`

```php
getSequence($sequence_id)
```

Get sequence with steps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\SequencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequence_id = 'sequence_id_example'; // string

try {
    $apiInstance->getSequence($sequence_id);
} catch (Exception $e) {
    echo 'Exception when calling SequencesApi->getSequence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sequence_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSequenceEnrollments()`

```php
listSequenceEnrollments($sequence_id, $status, $limit, $skip)
```

List enrollments for a sequence

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\SequencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequence_id = 'sequence_id_example'; // string
$status = 'status_example'; // string
$limit = 50; // int
$skip = 0; // int

try {
    $apiInstance->listSequenceEnrollments($sequence_id, $status, $limit, $skip);
} catch (Exception $e) {
    echo 'Exception when calling SequencesApi->listSequenceEnrollments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sequence_id** | **string**|  | |
| **status** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSequences()`

```php
listSequences($profile_id, $status, $limit, $skip)
```

List sequences

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\SequencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$status = 'status_example'; // string
$limit = 50; // int
$skip = 0; // int

try {
    $apiInstance->listSequences($profile_id, $status, $limit, $skip);
} catch (Exception $e) {
    echo 'Exception when calling SequencesApi->listSequences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **status** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pauseSequence()`

```php
pauseSequence($sequence_id)
```

Pause a sequence

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\SequencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequence_id = 'sequence_id_example'; // string

try {
    $apiInstance->pauseSequence($sequence_id);
} catch (Exception $e) {
    echo 'Exception when calling SequencesApi->pauseSequence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sequence_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unenrollContact()`

```php
unenrollContact($sequence_id, $contact_id)
```

Unenroll a contact from a sequence

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\SequencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequence_id = 'sequence_id_example'; // string
$contact_id = 'contact_id_example'; // string

try {
    $apiInstance->unenrollContact($sequence_id, $contact_id);
} catch (Exception $e) {
    echo 'Exception when calling SequencesApi->unenrollContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sequence_id** | **string**|  | |
| **contact_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSequence()`

```php
updateSequence($sequence_id)
```

Update a sequence

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\SequencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequence_id = 'sequence_id_example'; // string

try {
    $apiInstance->updateSequence($sequence_id);
} catch (Exception $e) {
    echo 'Exception when calling SequencesApi->updateSequence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sequence_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
