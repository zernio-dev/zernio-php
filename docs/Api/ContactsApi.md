# Zernio\ContactsApi

Cross-platform contact management (CRM). Contacts are unified identities linked to platform-specific channels (phone, IGSID, etc.). Created automatically when messages arrive, or manually via API.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkCreateContacts()**](ContactsApi.md#bulkCreateContacts) | **POST** /v1/contacts/bulk | Bulk create contacts |
| [**createContact()**](ContactsApi.md#createContact) | **POST** /v1/contacts | Create contact |
| [**deleteContact()**](ContactsApi.md#deleteContact) | **DELETE** /v1/contacts/{contactId} | Delete contact |
| [**getContact()**](ContactsApi.md#getContact) | **GET** /v1/contacts/{contactId} | Get contact |
| [**getContactChannels()**](ContactsApi.md#getContactChannels) | **GET** /v1/contacts/{contactId}/channels | List channels for a contact |
| [**listContacts()**](ContactsApi.md#listContacts) | **GET** /v1/contacts | List contacts |
| [**updateContact()**](ContactsApi.md#updateContact) | **PATCH** /v1/contacts/{contactId} | Update contact |


## `bulkCreateContacts()`

```php
bulkCreateContacts($bulk_create_contacts_request): \Zernio\Model\BulkCreateContacts200Response
```

Bulk create contacts

Import up to 1000 contacts at a time. Skips duplicates, merging any new tags onto the existing contact.  ### Accounts and platform  - accountId is required whenever contacts carry a platformIdentifier (or a row-level accountId). - platform is always derived from the resolved account, never used to decide whether channels are created. A mismatched platform 404s as account not found.  ### Per-contact validation  - When accountId is set, each contact must carry a platformIdentifier. A row missing it is rejected individually (reported in errors[], HTTP 200), not a 400 for the whole import. - On phone platforms (whatsapp, sms) the platformIdentifier is normalized to digits. A value that is not phone-shaped is rejected per contact and reported in errors[], not imported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_create_contacts_request = new \Zernio\Model\BulkCreateContactsRequest(); // \Zernio\Model\BulkCreateContactsRequest

try {
    $result = $apiInstance->bulkCreateContacts($bulk_create_contacts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->bulkCreateContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulk_create_contacts_request** | [**\Zernio\Model\BulkCreateContactsRequest**](../Model/BulkCreateContactsRequest.md)|  | |

### Return type

[**\Zernio\Model\BulkCreateContacts200Response**](../Model/BulkCreateContacts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createContact()`

```php
createContact($create_contact_request): \Zernio\Model\CreateContact200Response
```

Create contact

Create a new contact. Optionally create a platform channel in the same request by providing accountId, platform, and platformIdentifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_contact_request = new \Zernio\Model\CreateContactRequest(); // \Zernio\Model\CreateContactRequest

try {
    $result = $apiInstance->createContact($create_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_contact_request** | [**\Zernio\Model\CreateContactRequest**](../Model/CreateContactRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateContact200Response**](../Model/CreateContact200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContact()`

```php
deleteContact($contact_id)
```

Delete contact

Permanently deletes a contact and all associated channels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string

try {
    $apiInstance->deleteContact($contact_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `getContact()`

```php
getContact($contact_id): \Zernio\Model\GetContact200Response
```

Get contact

Returns a contact with all associated messaging channels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string

try {
    $result = $apiInstance->getContact($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetContact200Response**](../Model/GetContact200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactChannels()`

```php
getContactChannels($contact_id): \Zernio\Model\GetContactChannels200Response
```

List channels for a contact

Returns all messaging channels linked to a contact (e.g. Instagram DM, Telegram, WhatsApp).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string

try {
    $result = $apiInstance->getContactChannels($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetContactChannels200Response**](../Model/GetContactChannels200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContacts()`

```php
listContacts($profile_id, $account_id, $search, $tag, $tags, $platform, $is_subscribed, $limit, $skip): \Zernio\Model\ListContacts200Response
```

List contacts

List and search contacts for a profile. Supports filtering by tags, platform, subscription status, and text search on name, email and company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Filter by profile. Omit to list across all profiles. Matches the profile recorded on the contact itself, which is set when the contact is created and is independent of the profile its account currently belongs to. Filter by accountId to list a contact through its channel instead.
$account_id = 'account_id_example'; // string | Filter by the SocialAccount that owns the contact channel. Contacts are resolved through their channels, so the profileId contact filter is not applied while accountId is set. A profileId sent alongside is still access-checked and still scopes the returned filters.tags list.
$search = 'search_example'; // string | Case-insensitive substring match on the contact name, email and company. Phone numbers and other platform identifiers are not matched: they live on the contact channel, not on the contact. To reach a contact from an inbox webhook, use the conversation.contactId it already carries.
$tag = 'tag_example'; // string
$tags = 'tags_example'; // string | Comma-separated tags, matches contacts carrying any of them
$platform = 'platform_example'; // string
$is_subscribed = 'is_subscribed_example'; // string
$limit = 50; // int
$skip = 0; // int

try {
    $result = $apiInstance->listContacts($profile_id, $account_id, $search, $tag, $tags, $platform, $is_subscribed, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->listContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Filter by profile. Omit to list across all profiles. Matches the profile recorded on the contact itself, which is set when the contact is created and is independent of the profile its account currently belongs to. Filter by accountId to list a contact through its channel instead. | [optional] |
| **account_id** | **string**| Filter by the SocialAccount that owns the contact channel. Contacts are resolved through their channels, so the profileId contact filter is not applied while accountId is set. A profileId sent alongside is still access-checked and still scopes the returned filters.tags list. | [optional] |
| **search** | **string**| Case-insensitive substring match on the contact name, email and company. Phone numbers and other platform identifiers are not matched: they live on the contact channel, not on the contact. To reach a contact from an inbox webhook, use the conversation.contactId it already carries. | [optional] |
| **tag** | **string**|  | [optional] |
| **tags** | **string**| Comma-separated tags, matches contacts carrying any of them | [optional] |
| **platform** | **string**|  | [optional] |
| **is_subscribed** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListContacts200Response**](../Model/ListContacts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContact()`

```php
updateContact($contact_id, $update_contact_request): \Zernio\Model\UpdateContact200Response
```

Update contact

Update one or more fields on a contact. Only provided fields are changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string
$update_contact_request = new \Zernio\Model\UpdateContactRequest(); // \Zernio\Model\UpdateContactRequest

try {
    $result = $apiInstance->updateContact($contact_id, $update_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |
| **update_contact_request** | [**\Zernio\Model\UpdateContactRequest**](../Model/UpdateContactRequest.md)|  | [optional] |

### Return type

[**\Zernio\Model\UpdateContact200Response**](../Model/UpdateContact200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
