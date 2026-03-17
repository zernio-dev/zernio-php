# Late\WhatsAppApi

WhatsApp Business API for sending messages, managing contacts, templates, broadcasts, and conversations. All endpoints require an accountId parameter identifying the WhatsApp-connected social account.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addWhatsAppBroadcastRecipients()**](WhatsAppApi.md#addWhatsAppBroadcastRecipients) | **PATCH** /v1/whatsapp/broadcasts/{broadcastId}/recipients | Add recipients |
| [**bulkDeleteWhatsAppContacts()**](WhatsAppApi.md#bulkDeleteWhatsAppContacts) | **DELETE** /v1/whatsapp/contacts/bulk | Bulk delete contacts |
| [**bulkUpdateWhatsAppContacts()**](WhatsAppApi.md#bulkUpdateWhatsAppContacts) | **POST** /v1/whatsapp/contacts/bulk | Bulk update contacts |
| [**cancelWhatsAppBroadcastSchedule()**](WhatsAppApi.md#cancelWhatsAppBroadcastSchedule) | **DELETE** /v1/whatsapp/broadcasts/{broadcastId}/schedule | Cancel scheduled broadcast |
| [**createWhatsAppBroadcast()**](WhatsAppApi.md#createWhatsAppBroadcast) | **POST** /v1/whatsapp/broadcasts | Create broadcast |
| [**createWhatsAppContact()**](WhatsAppApi.md#createWhatsAppContact) | **POST** /v1/whatsapp/contacts | Create contact |
| [**createWhatsAppTemplate()**](WhatsAppApi.md#createWhatsAppTemplate) | **POST** /v1/whatsapp/templates | Create template |
| [**deleteWhatsAppBroadcast()**](WhatsAppApi.md#deleteWhatsAppBroadcast) | **DELETE** /v1/whatsapp/broadcasts/{broadcastId} | Delete broadcast |
| [**deleteWhatsAppContact()**](WhatsAppApi.md#deleteWhatsAppContact) | **DELETE** /v1/whatsapp/contacts/{contactId} | Delete contact |
| [**deleteWhatsAppGroup()**](WhatsAppApi.md#deleteWhatsAppGroup) | **DELETE** /v1/whatsapp/groups | Delete group |
| [**deleteWhatsAppTemplate()**](WhatsAppApi.md#deleteWhatsAppTemplate) | **DELETE** /v1/whatsapp/templates/{templateName} | Delete template |
| [**getWhatsAppBroadcast()**](WhatsAppApi.md#getWhatsAppBroadcast) | **GET** /v1/whatsapp/broadcasts/{broadcastId} | Get broadcast |
| [**getWhatsAppBroadcastRecipients()**](WhatsAppApi.md#getWhatsAppBroadcastRecipients) | **GET** /v1/whatsapp/broadcasts/{broadcastId}/recipients | List recipients |
| [**getWhatsAppBroadcasts()**](WhatsAppApi.md#getWhatsAppBroadcasts) | **GET** /v1/whatsapp/broadcasts | List broadcasts |
| [**getWhatsAppBusinessProfile()**](WhatsAppApi.md#getWhatsAppBusinessProfile) | **GET** /v1/whatsapp/business-profile | Get business profile |
| [**getWhatsAppContact()**](WhatsAppApi.md#getWhatsAppContact) | **GET** /v1/whatsapp/contacts/{contactId} | Get contact |
| [**getWhatsAppContacts()**](WhatsAppApi.md#getWhatsAppContacts) | **GET** /v1/whatsapp/contacts | List contacts |
| [**getWhatsAppDisplayName()**](WhatsAppApi.md#getWhatsAppDisplayName) | **GET** /v1/whatsapp/business-profile/display-name | Get display name and review status |
| [**getWhatsAppGroups()**](WhatsAppApi.md#getWhatsAppGroups) | **GET** /v1/whatsapp/groups | List contact groups |
| [**getWhatsAppTemplate()**](WhatsAppApi.md#getWhatsAppTemplate) | **GET** /v1/whatsapp/templates/{templateName} | Get template |
| [**getWhatsAppTemplates()**](WhatsAppApi.md#getWhatsAppTemplates) | **GET** /v1/whatsapp/templates | List templates |
| [**importWhatsAppContacts()**](WhatsAppApi.md#importWhatsAppContacts) | **POST** /v1/whatsapp/contacts/import | Bulk import contacts |
| [**removeWhatsAppBroadcastRecipients()**](WhatsAppApi.md#removeWhatsAppBroadcastRecipients) | **DELETE** /v1/whatsapp/broadcasts/{broadcastId}/recipients | Remove recipients |
| [**renameWhatsAppGroup()**](WhatsAppApi.md#renameWhatsAppGroup) | **POST** /v1/whatsapp/groups | Rename group |
| [**scheduleWhatsAppBroadcast()**](WhatsAppApi.md#scheduleWhatsAppBroadcast) | **POST** /v1/whatsapp/broadcasts/{broadcastId}/schedule | Schedule broadcast |
| [**sendWhatsAppBroadcast()**](WhatsAppApi.md#sendWhatsAppBroadcast) | **POST** /v1/whatsapp/broadcasts/{broadcastId}/send | Send broadcast |
| [**sendWhatsAppBulk()**](WhatsAppApi.md#sendWhatsAppBulk) | **POST** /v1/whatsapp/bulk | Bulk send template messages |
| [**updateWhatsAppBusinessProfile()**](WhatsAppApi.md#updateWhatsAppBusinessProfile) | **POST** /v1/whatsapp/business-profile | Update business profile |
| [**updateWhatsAppContact()**](WhatsAppApi.md#updateWhatsAppContact) | **PUT** /v1/whatsapp/contacts/{contactId} | Update contact |
| [**updateWhatsAppDisplayName()**](WhatsAppApi.md#updateWhatsAppDisplayName) | **POST** /v1/whatsapp/business-profile/display-name | Request display name change |
| [**updateWhatsAppTemplate()**](WhatsAppApi.md#updateWhatsAppTemplate) | **PATCH** /v1/whatsapp/templates/{templateName} | Update template |
| [**uploadWhatsAppProfilePhoto()**](WhatsAppApi.md#uploadWhatsAppProfilePhoto) | **POST** /v1/whatsapp/business-profile/photo | Upload profile picture |


## `addWhatsAppBroadcastRecipients()`

```php
addWhatsAppBroadcastRecipients($broadcast_id, $add_whats_app_broadcast_recipients_request): \Late\Model\AddWhatsAppBroadcastRecipients200Response
```

Add recipients

Add recipients to a draft broadcast. Maximum 1000 recipients per request. Duplicate phone numbers are automatically skipped.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broadcast_id = 'broadcast_id_example'; // string | Broadcast ID
$add_whats_app_broadcast_recipients_request = {"recipients":[{"phone":"+1234567890","name":"John","variables":{"1":"John"}},{"phone":"+0987654321","name":"Jane"}]}; // \Late\Model\AddWhatsAppBroadcastRecipientsRequest

try {
    $result = $apiInstance->addWhatsAppBroadcastRecipients($broadcast_id, $add_whats_app_broadcast_recipients_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->addWhatsAppBroadcastRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_id** | **string**| Broadcast ID | |
| **add_whats_app_broadcast_recipients_request** | [**\Late\Model\AddWhatsAppBroadcastRecipientsRequest**](../Model/AddWhatsAppBroadcastRecipientsRequest.md)|  | |

### Return type

[**\Late\Model\AddWhatsAppBroadcastRecipients200Response**](../Model/AddWhatsAppBroadcastRecipients200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteWhatsAppContacts()`

```php
bulkDeleteWhatsAppContacts($bulk_delete_whats_app_contacts_request): \Late\Model\BulkDeleteWhatsAppContacts200Response
```

Bulk delete contacts

Permanently delete multiple contacts at once (max 500 per request).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_delete_whats_app_contacts_request = {"contactIds":["507f1f77bcf86cd799439011","507f1f77bcf86cd799439012"]}; // \Late\Model\BulkDeleteWhatsAppContactsRequest

try {
    $result = $apiInstance->bulkDeleteWhatsAppContacts($bulk_delete_whats_app_contacts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->bulkDeleteWhatsAppContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulk_delete_whats_app_contacts_request** | [**\Late\Model\BulkDeleteWhatsAppContactsRequest**](../Model/BulkDeleteWhatsAppContactsRequest.md)|  | |

### Return type

[**\Late\Model\BulkDeleteWhatsAppContacts200Response**](../Model/BulkDeleteWhatsAppContacts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateWhatsAppContacts()`

```php
bulkUpdateWhatsAppContacts($bulk_update_whats_app_contacts_request): \Late\Model\BulkUpdateWhatsAppContacts200Response
```

Bulk update contacts

Perform bulk operations on multiple contacts (max 500 per request). Supported actions: addTags, removeTags, addGroups, removeGroups, optIn, optOut, block, unblock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_update_whats_app_contacts_request = {"action":"addTags","contactIds":["507f1f77bcf86cd799439011","507f1f77bcf86cd799439012"],"tags":["vip","priority"]}; // \Late\Model\BulkUpdateWhatsAppContactsRequest

try {
    $result = $apiInstance->bulkUpdateWhatsAppContacts($bulk_update_whats_app_contacts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->bulkUpdateWhatsAppContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulk_update_whats_app_contacts_request** | [**\Late\Model\BulkUpdateWhatsAppContactsRequest**](../Model/BulkUpdateWhatsAppContactsRequest.md)|  | |

### Return type

[**\Late\Model\BulkUpdateWhatsAppContacts200Response**](../Model/BulkUpdateWhatsAppContacts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelWhatsAppBroadcastSchedule()`

```php
cancelWhatsAppBroadcastSchedule($broadcast_id): \Late\Model\CancelWhatsAppBroadcastSchedule200Response
```

Cancel scheduled broadcast

Cancel a scheduled broadcast and return it to draft status. Only broadcasts in scheduled status can be cancelled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broadcast_id = 'broadcast_id_example'; // string | Broadcast ID

try {
    $result = $apiInstance->cancelWhatsAppBroadcastSchedule($broadcast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->cancelWhatsAppBroadcastSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_id** | **string**| Broadcast ID | |

### Return type

[**\Late\Model\CancelWhatsAppBroadcastSchedule200Response**](../Model/CancelWhatsAppBroadcastSchedule200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWhatsAppBroadcast()`

```php
createWhatsAppBroadcast($create_whats_app_broadcast_request): \Late\Model\CreateWhatsAppBroadcast200Response
```

Create broadcast

Create a new draft broadcast. Optionally include initial recipients. After creation, add recipients and then send or schedule the broadcast.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_whats_app_broadcast_request = {"accountId":"507f1f77bcf86cd799439011","name":"Weekly Newsletter","description":"Weekly product updates","template":{"name":"weekly_update","language":"en_US"},"recipients":[{"phone":"+1234567890","name":"John","variables":{"1":"John"}}]}; // \Late\Model\CreateWhatsAppBroadcastRequest

try {
    $result = $apiInstance->createWhatsAppBroadcast($create_whats_app_broadcast_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->createWhatsAppBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_whats_app_broadcast_request** | [**\Late\Model\CreateWhatsAppBroadcastRequest**](../Model/CreateWhatsAppBroadcastRequest.md)|  | |

### Return type

[**\Late\Model\CreateWhatsAppBroadcast200Response**](../Model/CreateWhatsAppBroadcast200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWhatsAppContact()`

```php
createWhatsAppContact($create_whats_app_contact_request): \Late\Model\CreateWhatsAppContact200Response
```

Create contact

Create a new WhatsApp contact. Phone number must be unique per account and in E.164 format (e.g., +1234567890).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_whats_app_contact_request = {"accountId":"507f1f77bcf86cd799439011","phone":"+1234567890","name":"John Doe","email":"john@example.com","tags":["vip","newsletter"],"groups":["customers"]}; // \Late\Model\CreateWhatsAppContactRequest

try {
    $result = $apiInstance->createWhatsAppContact($create_whats_app_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->createWhatsAppContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_whats_app_contact_request** | [**\Late\Model\CreateWhatsAppContactRequest**](../Model/CreateWhatsAppContactRequest.md)|  | |

### Return type

[**\Late\Model\CreateWhatsAppContact200Response**](../Model/CreateWhatsAppContact200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWhatsAppTemplate()`

```php
createWhatsAppTemplate($create_whats_app_template_request): \Late\Model\CreateWhatsAppTemplate200Response
```

Create template

Create a new message template. Supports two modes:  **Custom template:** Provide `components` with your own content. Submitted to Meta for review (can take up to 24h).  **Library template:** Provide `library_template_name` instead of `components` to use a pre-built template from Meta's template library. Library templates are **pre-approved** (no review wait). You can optionally customize parameters and buttons via `library_template_body_inputs` and `library_template_button_inputs`.  Browse available library templates at: https://business.facebook.com/wa/manage/message-templates/

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_whats_app_template_request = {"accountId":"507f1f77bcf86cd799439011","name":"order_confirmation","category":"UTILITY","language":"en_US","components":[{"type":"body","text":"Your order {{1}} has been confirmed. Expected delivery: {{2}}"}]}; // \Late\Model\CreateWhatsAppTemplateRequest

try {
    $result = $apiInstance->createWhatsAppTemplate($create_whats_app_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->createWhatsAppTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_whats_app_template_request** | [**\Late\Model\CreateWhatsAppTemplateRequest**](../Model/CreateWhatsAppTemplateRequest.md)|  | |

### Return type

[**\Late\Model\CreateWhatsAppTemplate200Response**](../Model/CreateWhatsAppTemplate200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWhatsAppBroadcast()`

```php
deleteWhatsAppBroadcast($broadcast_id): \Late\Model\UnpublishPost200Response
```

Delete broadcast

Delete a broadcast. Only draft or cancelled broadcasts can be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broadcast_id = 'broadcast_id_example'; // string | Broadcast ID

try {
    $result = $apiInstance->deleteWhatsAppBroadcast($broadcast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->deleteWhatsAppBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_id** | **string**| Broadcast ID | |

### Return type

[**\Late\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWhatsAppContact()`

```php
deleteWhatsAppContact($contact_id): \Late\Model\UnpublishPost200Response
```

Delete contact

Permanently delete a WhatsApp contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Contact ID

try {
    $result = $apiInstance->deleteWhatsAppContact($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->deleteWhatsAppContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| Contact ID | |

### Return type

[**\Late\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWhatsAppGroup()`

```php
deleteWhatsAppGroup($delete_whats_app_group_request): \Late\Model\RenameWhatsAppGroup200Response
```

Delete group

Delete a contact group. This removes the group from all contacts but does not delete the contacts themselves.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_whats_app_group_request = {"accountId":"507f1f77bcf86cd799439011","groupName":"old-leads"}; // \Late\Model\DeleteWhatsAppGroupRequest

try {
    $result = $apiInstance->deleteWhatsAppGroup($delete_whats_app_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->deleteWhatsAppGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_whats_app_group_request** | [**\Late\Model\DeleteWhatsAppGroupRequest**](../Model/DeleteWhatsAppGroupRequest.md)|  | |

### Return type

[**\Late\Model\RenameWhatsAppGroup200Response**](../Model/RenameWhatsAppGroup200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWhatsAppTemplate()`

```php
deleteWhatsAppTemplate($template_name, $account_id): \Late\Model\UnpublishPost200Response
```

Delete template

Permanently delete a message template by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_name = 'template_name_example'; // string | Template name
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->deleteWhatsAppTemplate($template_name, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->deleteWhatsAppTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_name** | **string**| Template name | |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Late\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppBroadcast()`

```php
getWhatsAppBroadcast($broadcast_id): \Late\Model\GetWhatsAppBroadcast200Response
```

Get broadcast

Retrieve detailed information about a single broadcast including delivery statistics.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broadcast_id = 'broadcast_id_example'; // string | Broadcast ID

try {
    $result = $apiInstance->getWhatsAppBroadcast($broadcast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_id** | **string**| Broadcast ID | |

### Return type

[**\Late\Model\GetWhatsAppBroadcast200Response**](../Model/GetWhatsAppBroadcast200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppBroadcastRecipients()`

```php
getWhatsAppBroadcastRecipients($broadcast_id, $status, $limit, $skip): \Late\Model\GetWhatsAppBroadcastRecipients200Response
```

List recipients

List recipients of a broadcast with their delivery status. Supports filtering by delivery status and pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broadcast_id = 'broadcast_id_example'; // string | Broadcast ID
$status = 'status_example'; // string | Filter by recipient delivery status
$limit = 100; // int | Maximum results (default 100)
$skip = 0; // int | Offset for pagination

try {
    $result = $apiInstance->getWhatsAppBroadcastRecipients($broadcast_id, $status, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppBroadcastRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_id** | **string**| Broadcast ID | |
| **status** | **string**| Filter by recipient delivery status | [optional] |
| **limit** | **int**| Maximum results (default 100) | [optional] [default to 100] |
| **skip** | **int**| Offset for pagination | [optional] [default to 0] |

### Return type

[**\Late\Model\GetWhatsAppBroadcastRecipients200Response**](../Model/GetWhatsAppBroadcastRecipients200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppBroadcasts()`

```php
getWhatsAppBroadcasts($account_id, $status, $limit, $skip): \Late\Model\GetWhatsAppBroadcasts200Response
```

List broadcasts

List all WhatsApp broadcasts for an account. Returns broadcasts sorted by creation date (newest first) without the full recipients list for performance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$status = 'status_example'; // string | Filter by broadcast status
$limit = 50; // int | Maximum results (default 50)
$skip = 0; // int | Offset for pagination

try {
    $result = $apiInstance->getWhatsAppBroadcasts($account_id, $status, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppBroadcasts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |
| **status** | **string**| Filter by broadcast status | [optional] |
| **limit** | **int**| Maximum results (default 50) | [optional] [default to 50] |
| **skip** | **int**| Offset for pagination | [optional] [default to 0] |

### Return type

[**\Late\Model\GetWhatsAppBroadcasts200Response**](../Model/GetWhatsAppBroadcasts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppBusinessProfile()`

```php
getWhatsAppBusinessProfile($account_id): \Late\Model\GetWhatsAppBusinessProfile200Response
```

Get business profile

Retrieve the WhatsApp Business profile for the account (about, address, description, email, websites, etc.).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->getWhatsAppBusinessProfile($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppBusinessProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Late\Model\GetWhatsAppBusinessProfile200Response**](../Model/GetWhatsAppBusinessProfile200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppContact()`

```php
getWhatsAppContact($contact_id): \Late\Model\GetWhatsAppContact200Response
```

Get contact

Retrieve a single WhatsApp contact by ID with full details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Contact ID

try {
    $result = $apiInstance->getWhatsAppContact($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| Contact ID | |

### Return type

[**\Late\Model\GetWhatsAppContact200Response**](../Model/GetWhatsAppContact200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppContacts()`

```php
getWhatsAppContacts($account_id, $search, $tag, $group, $opted_in, $limit, $skip): \Late\Model\GetWhatsAppContacts200Response
```

List contacts

List WhatsApp contacts for an account. Supports filtering by tags, groups, opt-in status, and text search. Returns contacts sorted by name with available filter options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$search = 'search_example'; // string | Search contacts by name, phone, email, or company
$tag = 'tag_example'; // string | Filter by tag
$group = 'group_example'; // string | Filter by group
$opted_in = 'opted_in_example'; // string | Filter by opt-in status
$limit = 50; // int | Maximum results (default 50)
$skip = 0; // int | Offset for pagination

try {
    $result = $apiInstance->getWhatsAppContacts($account_id, $search, $tag, $group, $opted_in, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |
| **search** | **string**| Search contacts by name, phone, email, or company | [optional] |
| **tag** | **string**| Filter by tag | [optional] |
| **group** | **string**| Filter by group | [optional] |
| **opted_in** | **string**| Filter by opt-in status | [optional] |
| **limit** | **int**| Maximum results (default 50) | [optional] [default to 50] |
| **skip** | **int**| Offset for pagination | [optional] [default to 0] |

### Return type

[**\Late\Model\GetWhatsAppContacts200Response**](../Model/GetWhatsAppContacts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppDisplayName()`

```php
getWhatsAppDisplayName($account_id): \Late\Model\GetWhatsAppDisplayName200Response
```

Get display name and review status

Fetch the current display name and its Meta review status for a WhatsApp Business account. Display name changes require Meta approval and can take 1-3 business days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->getWhatsAppDisplayName($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppDisplayName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Late\Model\GetWhatsAppDisplayName200Response**](../Model/GetWhatsAppDisplayName200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppGroups()`

```php
getWhatsAppGroups($account_id): \Late\Model\GetWhatsAppGroups200Response
```

List contact groups

List all contact groups for a WhatsApp account with contact counts. Groups are derived from the groups field on contacts, not stored as separate documents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->getWhatsAppGroups($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Late\Model\GetWhatsAppGroups200Response**](../Model/GetWhatsAppGroups200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppTemplate()`

```php
getWhatsAppTemplate($template_name, $account_id): \Late\Model\GetWhatsAppTemplate200Response
```

Get template

Retrieve a single message template by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_name = 'template_name_example'; // string | Template name
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->getWhatsAppTemplate($template_name, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_name** | **string**| Template name | |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Late\Model\GetWhatsAppTemplate200Response**](../Model/GetWhatsAppTemplate200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppTemplates()`

```php
getWhatsAppTemplates($account_id): \Late\Model\GetWhatsAppTemplates200Response
```

List templates

List all message templates for the WhatsApp Business Account (WABA) associated with the given account. Templates are fetched directly from the WhatsApp Cloud API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->getWhatsAppTemplates($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Late\Model\GetWhatsAppTemplates200Response**](../Model/GetWhatsAppTemplates200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importWhatsAppContacts()`

```php
importWhatsAppContacts($import_whats_app_contacts_request): \Late\Model\ImportWhatsAppContacts200Response
```

Bulk import contacts

Import up to 1000 contacts at once. Each contact requires a phone number and name. Duplicates are skipped by default. Supports default tags and groups applied to all imported contacts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$import_whats_app_contacts_request = {"accountId":"507f1f77bcf86cd799439011","contacts":[{"phone":"+1234567890","name":"John Doe","email":"john@example.com"},{"phone":"+0987654321","name":"Jane Smith"}],"defaultTags":["imported"],"defaultGroups":["new-leads"]}; // \Late\Model\ImportWhatsAppContactsRequest

try {
    $result = $apiInstance->importWhatsAppContacts($import_whats_app_contacts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->importWhatsAppContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **import_whats_app_contacts_request** | [**\Late\Model\ImportWhatsAppContactsRequest**](../Model/ImportWhatsAppContactsRequest.md)|  | |

### Return type

[**\Late\Model\ImportWhatsAppContacts200Response**](../Model/ImportWhatsAppContacts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeWhatsAppBroadcastRecipients()`

```php
removeWhatsAppBroadcastRecipients($broadcast_id, $remove_whats_app_broadcast_recipients_request): \Late\Model\RemoveWhatsAppBroadcastRecipients200Response
```

Remove recipients

Remove recipients from a draft broadcast by phone number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broadcast_id = 'broadcast_id_example'; // string | Broadcast ID
$remove_whats_app_broadcast_recipients_request = {"phones":["+1234567890","+0987654321"]}; // \Late\Model\RemoveWhatsAppBroadcastRecipientsRequest

try {
    $result = $apiInstance->removeWhatsAppBroadcastRecipients($broadcast_id, $remove_whats_app_broadcast_recipients_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->removeWhatsAppBroadcastRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_id** | **string**| Broadcast ID | |
| **remove_whats_app_broadcast_recipients_request** | [**\Late\Model\RemoveWhatsAppBroadcastRecipientsRequest**](../Model/RemoveWhatsAppBroadcastRecipientsRequest.md)|  | |

### Return type

[**\Late\Model\RemoveWhatsAppBroadcastRecipients200Response**](../Model/RemoveWhatsAppBroadcastRecipients200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renameWhatsAppGroup()`

```php
renameWhatsAppGroup($rename_whats_app_group_request): \Late\Model\RenameWhatsAppGroup200Response
```

Rename group

Rename a contact group. This updates the group name on all contacts that belong to the group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rename_whats_app_group_request = {"accountId":"507f1f77bcf86cd799439011","oldName":"customers","newName":"active-customers"}; // \Late\Model\RenameWhatsAppGroupRequest

try {
    $result = $apiInstance->renameWhatsAppGroup($rename_whats_app_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->renameWhatsAppGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rename_whats_app_group_request** | [**\Late\Model\RenameWhatsAppGroupRequest**](../Model/RenameWhatsAppGroupRequest.md)|  | |

### Return type

[**\Late\Model\RenameWhatsAppGroup200Response**](../Model/RenameWhatsAppGroup200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleWhatsAppBroadcast()`

```php
scheduleWhatsAppBroadcast($broadcast_id, $schedule_whats_app_broadcast_request): \Late\Model\ScheduleWhatsAppBroadcast200Response
```

Schedule broadcast

Schedule a draft broadcast for future sending. The scheduled time must be in the future and no more than 30 days in advance. The broadcast must be in draft status and have recipients.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broadcast_id = 'broadcast_id_example'; // string | Broadcast ID
$schedule_whats_app_broadcast_request = {"scheduledAt":"2026-03-15T10:00:00Z"}; // \Late\Model\ScheduleWhatsAppBroadcastRequest

try {
    $result = $apiInstance->scheduleWhatsAppBroadcast($broadcast_id, $schedule_whats_app_broadcast_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->scheduleWhatsAppBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_id** | **string**| Broadcast ID | |
| **schedule_whats_app_broadcast_request** | [**\Late\Model\ScheduleWhatsAppBroadcastRequest**](../Model/ScheduleWhatsAppBroadcastRequest.md)|  | |

### Return type

[**\Late\Model\ScheduleWhatsAppBroadcast200Response**](../Model/ScheduleWhatsAppBroadcast200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendWhatsAppBroadcast()`

```php
sendWhatsAppBroadcast($broadcast_id): \Late\Model\SendWhatsAppBroadcast200Response
```

Send broadcast

Start sending a broadcast immediately. The broadcast must be in draft or scheduled status and have at least one recipient. Messages are sent sequentially with rate limiting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broadcast_id = 'broadcast_id_example'; // string | Broadcast ID

try {
    $result = $apiInstance->sendWhatsAppBroadcast($broadcast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->sendWhatsAppBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_id** | **string**| Broadcast ID | |

### Return type

[**\Late\Model\SendWhatsAppBroadcast200Response**](../Model/SendWhatsAppBroadcast200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendWhatsAppBulk()`

```php
sendWhatsAppBulk($send_whats_app_bulk_request): \Late\Model\SendWhatsAppBulk200Response
```

Bulk send template messages

Send a template message to multiple recipients in a single request. Maximum 100 recipients per request. Only template messages are supported for bulk sending (not free-form text).  Each recipient can have optional per-recipient template variables for personalization. Returns detailed results for each recipient.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_whats_app_bulk_request = {"accountId":"507f1f77bcf86cd799439011","recipients":[{"phone":"+1234567890","variables":{"1":"John"}},{"phone":"+0987654321","variables":{"1":"Jane"}}],"template":{"name":"welcome_message","language":"en_US"}}; // \Late\Model\SendWhatsAppBulkRequest

try {
    $result = $apiInstance->sendWhatsAppBulk($send_whats_app_bulk_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->sendWhatsAppBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_whats_app_bulk_request** | [**\Late\Model\SendWhatsAppBulkRequest**](../Model/SendWhatsAppBulkRequest.md)|  | |

### Return type

[**\Late\Model\SendWhatsAppBulk200Response**](../Model/SendWhatsAppBulk200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWhatsAppBusinessProfile()`

```php
updateWhatsAppBusinessProfile($update_whats_app_business_profile_request): \Late\Model\UnpublishPost200Response
```

Update business profile

Update the WhatsApp Business profile. All fields are optional; only provided fields will be updated. Constraints: about max 139 chars, description max 512 chars, max 2 websites.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_whats_app_business_profile_request = {"accountId":"507f1f77bcf86cd799439011","about":"We help businesses grow","description":"Premium business solutions for startups and enterprises","email":"hello@example.com","websites":["https://example.com"]}; // \Late\Model\UpdateWhatsAppBusinessProfileRequest

try {
    $result = $apiInstance->updateWhatsAppBusinessProfile($update_whats_app_business_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->updateWhatsAppBusinessProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_whats_app_business_profile_request** | [**\Late\Model\UpdateWhatsAppBusinessProfileRequest**](../Model/UpdateWhatsAppBusinessProfileRequest.md)|  | |

### Return type

[**\Late\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWhatsAppContact()`

```php
updateWhatsAppContact($contact_id, $update_whats_app_contact_request): \Late\Model\UpdateWhatsAppContact200Response
```

Update contact

Update an existing WhatsApp contact. All fields are optional; only provided fields will be updated. Custom fields are merged with existing values. Set a custom field to null to remove it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Contact ID
$update_whats_app_contact_request = {"name":"John Doe Updated","tags":["vip","premium"],"customFields":{"plan":"enterprise","remove_me":null}}; // \Late\Model\UpdateWhatsAppContactRequest

try {
    $result = $apiInstance->updateWhatsAppContact($contact_id, $update_whats_app_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->updateWhatsAppContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| Contact ID | |
| **update_whats_app_contact_request** | [**\Late\Model\UpdateWhatsAppContactRequest**](../Model/UpdateWhatsAppContactRequest.md)|  | |

### Return type

[**\Late\Model\UpdateWhatsAppContact200Response**](../Model/UpdateWhatsAppContact200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWhatsAppDisplayName()`

```php
updateWhatsAppDisplayName($update_whats_app_display_name_request): \Late\Model\UpdateWhatsAppDisplayName200Response
```

Request display name change

Submit a display name change request for the WhatsApp Business account. The new name must follow WhatsApp naming guidelines (3-512 characters, must represent your business). Changes require Meta review and approval, which typically takes 1-3 business days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_whats_app_display_name_request = {"accountId":"507f1f77bcf86cd799439011","displayName":"My Business Name"}; // \Late\Model\UpdateWhatsAppDisplayNameRequest

try {
    $result = $apiInstance->updateWhatsAppDisplayName($update_whats_app_display_name_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->updateWhatsAppDisplayName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_whats_app_display_name_request** | [**\Late\Model\UpdateWhatsAppDisplayNameRequest**](../Model/UpdateWhatsAppDisplayNameRequest.md)|  | |

### Return type

[**\Late\Model\UpdateWhatsAppDisplayName200Response**](../Model/UpdateWhatsAppDisplayName200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWhatsAppTemplate()`

```php
updateWhatsAppTemplate($template_name, $update_whats_app_template_request): \Late\Model\UpdateWhatsAppTemplate200Response
```

Update template

Update a message template's components. Only certain fields can be updated depending on the template's current approval state. Approved templates can only have components updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_name = 'template_name_example'; // string | Template name
$update_whats_app_template_request = {"accountId":"507f1f77bcf86cd799439011","components":[{"type":"body","text":"Updated: Your order {{1}} is confirmed. Delivery by {{2}}"}]}; // \Late\Model\UpdateWhatsAppTemplateRequest

try {
    $result = $apiInstance->updateWhatsAppTemplate($template_name, $update_whats_app_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->updateWhatsAppTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_name** | **string**| Template name | |
| **update_whats_app_template_request** | [**\Late\Model\UpdateWhatsAppTemplateRequest**](../Model/UpdateWhatsAppTemplateRequest.md)|  | |

### Return type

[**\Late\Model\UpdateWhatsAppTemplate200Response**](../Model/UpdateWhatsAppTemplate200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadWhatsAppProfilePhoto()`

```php
uploadWhatsAppProfilePhoto($account_id, $file): \Late\Model\UnpublishPost200Response
```

Upload profile picture

Upload a new profile picture for the WhatsApp Business Profile. Uses Meta's resumable upload API under the hood: creates an upload session, uploads the image bytes, then updates the business profile with the resulting handle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$file = '/path/to/file.txt'; // \SplFileObject | Image file (JPEG or PNG, max 5MB, recommended 640x640)

try {
    $result = $apiInstance->uploadWhatsAppProfilePhoto($account_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->uploadWhatsAppProfilePhoto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |
| **file** | **\SplFileObject****\SplFileObject**| Image file (JPEG or PNG, max 5MB, recommended 640x640) | |

### Return type

[**\Late\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
