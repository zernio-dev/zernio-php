# Zernio\SequencesApi

Drip campaign sequences. Send a series of messages to enrolled contacts with configurable delays between steps. Supports auto-exit on reply or unsubscribe.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateSequence()**](SequencesApi.md#activateSequence) | **POST** /v1/sequences/{sequenceId}/activate | Activate sequence |
| [**createSequence()**](SequencesApi.md#createSequence) | **POST** /v1/sequences | Create sequence |
| [**deleteSequence()**](SequencesApi.md#deleteSequence) | **DELETE** /v1/sequences/{sequenceId} | Delete sequence |
| [**enrollContacts()**](SequencesApi.md#enrollContacts) | **POST** /v1/sequences/{sequenceId}/enroll | Enroll contacts in a sequence |
| [**getSequence()**](SequencesApi.md#getSequence) | **GET** /v1/sequences/{sequenceId} | Get sequence with steps |
| [**listSequenceEnrollments()**](SequencesApi.md#listSequenceEnrollments) | **GET** /v1/sequences/{sequenceId}/enrollments | List enrollments for a sequence |
| [**listSequences()**](SequencesApi.md#listSequences) | **GET** /v1/sequences | List sequences |
| [**pauseSequence()**](SequencesApi.md#pauseSequence) | **POST** /v1/sequences/{sequenceId}/pause | Pause sequence |
| [**unenrollContact()**](SequencesApi.md#unenrollContact) | **DELETE** /v1/sequences/{sequenceId}/enroll/{contactId} | Unenroll contact |
| [**updateSequence()**](SequencesApi.md#updateSequence) | **PATCH** /v1/sequences/{sequenceId} | Update sequence |


## `activateSequence()`

```php
activateSequence($sequence_id): \Zernio\Model\ActivateSequence200Response
```

Activate sequence

Start a draft or paused sequence. The sequence must have at least one step.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SequencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequence_id = 'sequence_id_example'; // string

try {
    $result = $apiInstance->activateSequence($sequence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SequencesApi->activateSequence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sequence_id** | **string**|  | |

### Return type

[**\Zernio\Model\ActivateSequence200Response**](../Model/ActivateSequence200Response.md)

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
createSequence($create_sequence_request): \Zernio\Model\CreateSequence200Response
```

Create sequence

Create a multi-step messaging sequence. Each step has a delay and a message or WhatsApp template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SequencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_sequence_request = new \Zernio\Model\CreateSequenceRequest(); // \Zernio\Model\CreateSequenceRequest

try {
    $result = $apiInstance->createSequence($create_sequence_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SequencesApi->createSequence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_sequence_request** | [**\Zernio\Model\CreateSequenceRequest**](../Model/CreateSequenceRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateSequence200Response**](../Model/CreateSequence200Response.md)

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

Delete sequence

Permanently delete a sequence. Active enrollments are stopped.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SequencesApi(
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
enrollContacts($sequence_id, $enroll_contacts_request): \Zernio\Model\EnrollContacts200Response
```

Enroll contacts in a sequence

Enroll one or more contacts into a sequence. Contacts already enrolled are skipped.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SequencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequence_id = 'sequence_id_example'; // string
$enroll_contacts_request = new \Zernio\Model\EnrollContactsRequest(); // \Zernio\Model\EnrollContactsRequest

try {
    $result = $apiInstance->enrollContacts($sequence_id, $enroll_contacts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SequencesApi->enrollContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sequence_id** | **string**|  | |
| **enroll_contacts_request** | [**\Zernio\Model\EnrollContactsRequest**](../Model/EnrollContactsRequest.md)|  | |

### Return type

[**\Zernio\Model\EnrollContacts200Response**](../Model/EnrollContacts200Response.md)

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
getSequence($sequence_id): \Zernio\Model\GetSequence200Response
```

Get sequence with steps

Returns a sequence with all its steps and enrollment stats.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SequencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequence_id = 'sequence_id_example'; // string

try {
    $result = $apiInstance->getSequence($sequence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SequencesApi->getSequence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sequence_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetSequence200Response**](../Model/GetSequence200Response.md)

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
listSequenceEnrollments($sequence_id, $status, $limit, $skip): \Zernio\Model\ListSequenceEnrollments200Response
```

List enrollments for a sequence

Returns enrolled contacts with their progress, status, and next scheduled step.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SequencesApi(
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
    $result = $apiInstance->listSequenceEnrollments($sequence_id, $status, $limit, $skip);
    print_r($result);
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

[**\Zernio\Model\ListSequenceEnrollments200Response**](../Model/ListSequenceEnrollments200Response.md)

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
listSequences($profile_id, $status, $limit, $skip): \Zernio\Model\ListSequences200Response
```

List sequences

Returns sequences with enrollment stats. Filter by status, platform, or profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SequencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Filter by profile. Omit to list across all profiles
$status = 'status_example'; // string
$limit = 50; // int
$skip = 0; // int

try {
    $result = $apiInstance->listSequences($profile_id, $status, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SequencesApi->listSequences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Filter by profile. Omit to list across all profiles | [optional] |
| **status** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListSequences200Response**](../Model/ListSequences200Response.md)

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
pauseSequence($sequence_id): \Zernio\Model\ActivateSequence200Response
```

Pause sequence

Pause an active sequence. Enrolled contacts stop receiving messages until the sequence is reactivated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SequencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequence_id = 'sequence_id_example'; // string

try {
    $result = $apiInstance->pauseSequence($sequence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SequencesApi->pauseSequence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sequence_id** | **string**|  | |

### Return type

[**\Zernio\Model\ActivateSequence200Response**](../Model/ActivateSequence200Response.md)

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

Unenroll contact

Remove a contact from a sequence. No further messages will be sent to this contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SequencesApi(
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
updateSequence($sequence_id): \Zernio\Model\UpdateSequence200Response
```

Update sequence

Update a sequence's name, steps, or exit conditions. Active sequences can be updated without pausing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SequencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequence_id = 'sequence_id_example'; // string

try {
    $result = $apiInstance->updateSequence($sequence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SequencesApi->updateSequence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sequence_id** | **string**|  | |

### Return type

[**\Zernio\Model\UpdateSequence200Response**](../Model/UpdateSequence200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
