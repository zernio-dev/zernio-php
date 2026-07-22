# Zernio\WhatsAppApi

WhatsApp Business API. Template, business profile, and phone number endpoints. All endpoints require an accountId parameter identifying the WhatsApp-connected social account.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addWhatsAppGroupParticipants()**](WhatsAppApi.md#addWhatsAppGroupParticipants) | **POST** /v1/whatsapp/wa-groups/{groupId}/participants | Add participants |
| [**approveWhatsAppGroupJoinRequests()**](WhatsAppApi.md#approveWhatsAppGroupJoinRequests) | **POST** /v1/whatsapp/wa-groups/{groupId}/join-requests | Approve join requests |
| [**blockWhatsAppUsers()**](WhatsAppApi.md#blockWhatsAppUsers) | **POST** /v1/whatsapp/block-users | Block users |
| [**createWhatsAppDataset()**](WhatsAppApi.md#createWhatsAppDataset) | **POST** /v1/whatsapp/dataset | Provision CTWA dataset |
| [**createWhatsAppGroupChat()**](WhatsAppApi.md#createWhatsAppGroupChat) | **POST** /v1/whatsapp/wa-groups | Create group |
| [**createWhatsAppGroupInviteLink()**](WhatsAppApi.md#createWhatsAppGroupInviteLink) | **POST** /v1/whatsapp/wa-groups/{groupId}/invite-link | Create invite link |
| [**createWhatsAppTemplate()**](WhatsAppApi.md#createWhatsAppTemplate) | **POST** /v1/whatsapp/templates | Create template |
| [**deleteWhatsAppGroupChat()**](WhatsAppApi.md#deleteWhatsAppGroupChat) | **DELETE** /v1/whatsapp/wa-groups/{groupId} | Delete group |
| [**deleteWhatsAppTemplate()**](WhatsAppApi.md#deleteWhatsAppTemplate) | **DELETE** /v1/whatsapp/templates/{templateName} | Delete template |
| [**deleteWhatsappBusinessUsername()**](WhatsAppApi.md#deleteWhatsappBusinessUsername) | **DELETE** /v1/whatsapp/business-profile/username | Delete business username |
| [**getWhatsAppBlockStatus()**](WhatsAppApi.md#getWhatsAppBlockStatus) | **GET** /v1/whatsapp/block-users/status | Check if a user is blocked |
| [**getWhatsAppBlockedUsers()**](WhatsAppApi.md#getWhatsAppBlockedUsers) | **GET** /v1/whatsapp/block-users | List blocked users |
| [**getWhatsAppBusinessProfile()**](WhatsAppApi.md#getWhatsAppBusinessProfile) | **GET** /v1/whatsapp/business-profile | Get business profile |
| [**getWhatsAppDataset()**](WhatsAppApi.md#getWhatsAppDataset) | **GET** /v1/whatsapp/dataset | Get CTWA conversions dataset |
| [**getWhatsAppDisplayName()**](WhatsAppApi.md#getWhatsAppDisplayName) | **GET** /v1/whatsapp/business-profile/display-name | Get display name status |
| [**getWhatsAppGroupChat()**](WhatsAppApi.md#getWhatsAppGroupChat) | **GET** /v1/whatsapp/wa-groups/{groupId} | Get group info |
| [**getWhatsAppMedia()**](WhatsAppApi.md#getWhatsAppMedia) | **GET** /v1/whatsapp/media/{mediaId} | Download WhatsApp media |
| [**getWhatsAppTemplate()**](WhatsAppApi.md#getWhatsAppTemplate) | **GET** /v1/whatsapp/templates/{templateName} | Get template |
| [**getWhatsAppTemplates()**](WhatsAppApi.md#getWhatsAppTemplates) | **GET** /v1/whatsapp/templates | List templates |
| [**getWhatsappBusinessUsername()**](WhatsAppApi.md#getWhatsappBusinessUsername) | **GET** /v1/whatsapp/business-profile/username | Get business username |
| [**getWhatsappBusinessUsernameSuggestions()**](WhatsAppApi.md#getWhatsappBusinessUsernameSuggestions) | **GET** /v1/whatsapp/business-profile/username/suggestions | Get username suggestions |
| [**listWhatsAppConversions()**](WhatsAppApi.md#listWhatsAppConversions) | **GET** /v1/whatsapp/conversions | List conversion events |
| [**listWhatsAppGroupChats()**](WhatsAppApi.md#listWhatsAppGroupChats) | **GET** /v1/whatsapp/wa-groups | List active groups |
| [**listWhatsAppGroupJoinRequests()**](WhatsAppApi.md#listWhatsAppGroupJoinRequests) | **GET** /v1/whatsapp/wa-groups/{groupId}/join-requests | List join requests |
| [**rejectWhatsAppGroupJoinRequests()**](WhatsAppApi.md#rejectWhatsAppGroupJoinRequests) | **DELETE** /v1/whatsapp/wa-groups/{groupId}/join-requests | Reject join requests |
| [**removeWhatsAppGroupParticipants()**](WhatsAppApi.md#removeWhatsAppGroupParticipants) | **DELETE** /v1/whatsapp/wa-groups/{groupId}/participants | Remove participants |
| [**sendWhatsAppConversion()**](WhatsAppApi.md#sendWhatsAppConversion) | **POST** /v1/whatsapp/conversions | Send WhatsApp conversion event |
| [**setWhatsappBusinessUsername()**](WhatsAppApi.md#setWhatsappBusinessUsername) | **POST** /v1/whatsapp/business-profile/username | Set business username |
| [**unblockWhatsAppUsers()**](WhatsAppApi.md#unblockWhatsAppUsers) | **DELETE** /v1/whatsapp/block-users | Unblock users |
| [**updateWhatsAppBusinessProfile()**](WhatsAppApi.md#updateWhatsAppBusinessProfile) | **POST** /v1/whatsapp/business-profile | Update business profile |
| [**updateWhatsAppDisplayName()**](WhatsAppApi.md#updateWhatsAppDisplayName) | **POST** /v1/whatsapp/business-profile/display-name | Request display name change |
| [**updateWhatsAppGroupChat()**](WhatsAppApi.md#updateWhatsAppGroupChat) | **POST** /v1/whatsapp/wa-groups/{groupId} | Update group settings |
| [**updateWhatsAppTemplate()**](WhatsAppApi.md#updateWhatsAppTemplate) | **PATCH** /v1/whatsapp/templates/{templateName} | Update template |
| [**uploadWhatsAppProfilePhoto()**](WhatsAppApi.md#uploadWhatsAppProfilePhoto) | **POST** /v1/whatsapp/business-profile/photo | Upload profile picture |


## `addWhatsAppGroupParticipants()`

```php
addWhatsAppGroupParticipants($group_id, $account_id, $add_whats_app_group_participants_request): \Zernio\Model\UnpublishPost200Response
```

Add participants

Add participants to a WhatsApp group. Maximum 8 participants per request.  Not available on [Coexistence](/platforms/whatsapp/connection#whatsapp-business-app-coexistence) numbers. Requires a Cloud API-only number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$add_whats_app_group_participants_request = new \Zernio\Model\AddWhatsAppGroupParticipantsRequest(); // \Zernio\Model\AddWhatsAppGroupParticipantsRequest

try {
    $result = $apiInstance->addWhatsAppGroupParticipants($group_id, $account_id, $add_whats_app_group_participants_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->addWhatsAppGroupParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **account_id** | **string**| WhatsApp social account ID | |
| **add_whats_app_group_participants_request** | [**\Zernio\Model\AddWhatsAppGroupParticipantsRequest**](../Model/AddWhatsAppGroupParticipantsRequest.md)|  | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `approveWhatsAppGroupJoinRequests()`

```php
approveWhatsAppGroupJoinRequests($group_id, $account_id, $approve_whats_app_group_join_requests_request): \Zernio\Model\UnpublishPost200Response
```

Approve join requests

Approve pending join requests for a WhatsApp group.  Not available on [Coexistence](/platforms/whatsapp/connection#whatsapp-business-app-coexistence) numbers. Requires a Cloud API-only number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$approve_whats_app_group_join_requests_request = new \Zernio\Model\ApproveWhatsAppGroupJoinRequestsRequest(); // \Zernio\Model\ApproveWhatsAppGroupJoinRequestsRequest

try {
    $result = $apiInstance->approveWhatsAppGroupJoinRequests($group_id, $account_id, $approve_whats_app_group_join_requests_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->approveWhatsAppGroupJoinRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **account_id** | **string**| WhatsApp social account ID | |
| **approve_whats_app_group_join_requests_request** | [**\Zernio\Model\ApproveWhatsAppGroupJoinRequestsRequest**](../Model/ApproveWhatsAppGroupJoinRequestsRequest.md)|  | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blockWhatsAppUsers()`

```php
blockWhatsAppUsers($block_whats_app_users_request): \Zernio\Model\BlockWhatsAppUsers200Response
```

Block users

Block one or more WhatsApp users on this number. Blocked users cannot message your number or see that you are online, and your sends to them return an error.  Meta constraints, surfaced per-user in `failed` (the request itself still succeeds for the rest of the batch): - Only users who messaged your business within the last 24 hours can be   blocked (failures outside the window report \"Re-engagement required\"). - Up to 1,000 users per request; the blocklist caps at 64,000. - Other WhatsApp Business accounts cannot be blocked.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$block_whats_app_users_request = new \Zernio\Model\BlockWhatsAppUsersRequest(); // \Zernio\Model\BlockWhatsAppUsersRequest

try {
    $result = $apiInstance->blockWhatsAppUsers($block_whats_app_users_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->blockWhatsAppUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **block_whats_app_users_request** | [**\Zernio\Model\BlockWhatsAppUsersRequest**](../Model/BlockWhatsAppUsersRequest.md)|  | |

### Return type

[**\Zernio\Model\BlockWhatsAppUsers200Response**](../Model/BlockWhatsAppUsers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWhatsAppDataset()`

```php
createWhatsAppDataset($delete_whatsapp_business_username_request): \Zernio\Model\CreateWhatsAppDataset200Response
```

Provision CTWA dataset

Creates (or fetches, if one already exists) the Meta dataset that Click-to-WhatsApp ad events are reported against via the Conversions API, and persists its ID on the account as `metadata.metaCapiDatasetId`.  The call is GET-first idempotent — a WABA can only own one CTWA dataset, so a second call after a successful provision is a safe no-op that returns the same ID with `created: false`.  Requires the connected WhatsApp account's token to carry the `whatsapp_business_manage_events` permission. If the permission is missing the endpoint returns 422 with a message asking the user to reconnect the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_whatsapp_business_username_request = new \Zernio\Model\DeleteWhatsappBusinessUsernameRequest(); // \Zernio\Model\DeleteWhatsappBusinessUsernameRequest

try {
    $result = $apiInstance->createWhatsAppDataset($delete_whatsapp_business_username_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->createWhatsAppDataset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_whatsapp_business_username_request** | [**\Zernio\Model\DeleteWhatsappBusinessUsernameRequest**](../Model/DeleteWhatsappBusinessUsernameRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateWhatsAppDataset200Response**](../Model/CreateWhatsAppDataset200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWhatsAppGroupChat()`

```php
createWhatsAppGroupChat($create_whats_app_group_chat_request): \Zernio\Model\CreateWhatsAppGroupChat201Response
```

Create group

Create a new WhatsApp group chat. Returns the group ID and optionally an invite link.  Not available on [Coexistence](/platforms/whatsapp/connection#whatsapp-business-app-coexistence) numbers. Requires a Cloud API-only number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_whats_app_group_chat_request = new \Zernio\Model\CreateWhatsAppGroupChatRequest(); // \Zernio\Model\CreateWhatsAppGroupChatRequest

try {
    $result = $apiInstance->createWhatsAppGroupChat($create_whats_app_group_chat_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->createWhatsAppGroupChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_whats_app_group_chat_request** | [**\Zernio\Model\CreateWhatsAppGroupChatRequest**](../Model/CreateWhatsAppGroupChatRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateWhatsAppGroupChat201Response**](../Model/CreateWhatsAppGroupChat201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWhatsAppGroupInviteLink()`

```php
createWhatsAppGroupInviteLink($group_id, $account_id): \Zernio\Model\CreateWhatsAppGroupInviteLink200Response
```

Create invite link

Create a new invite link for a WhatsApp group. The previous link is revoked.  Not available on [Coexistence](/platforms/whatsapp/connection#whatsapp-business-app-coexistence) numbers. Requires a Cloud API-only number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->createWhatsAppGroupInviteLink($group_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->createWhatsAppGroupInviteLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\CreateWhatsAppGroupInviteLink200Response**](../Model/CreateWhatsAppGroupInviteLink200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWhatsAppTemplate()`

```php
createWhatsAppTemplate($create_whats_app_template_request): \Zernio\Model\CreateWhatsAppTemplate200Response
```

Create template

Create a new message template. Supports two modes:  Custom template: Provide components with your own content. Submitted to Meta for review (can take up to 24h).  Library template: Provide library_template_name instead of components to use a pre-built template from Meta's template library. Library templates are pre-approved (no review wait). You can optionally customize parameters and buttons via library_template_body_inputs and library_template_button_inputs.  Browse available library templates at: https://business.facebook.com/wa/manage/message-templates/

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_whats_app_template_request = {"accountId":"507f1f77bcf86cd799439011","name":"order_confirmation","category":"UTILITY","language":"en_US","components":[{"type":"header","format":"image","example":{"header_handle":["https://example.com/header.jpg"]}},{"type":"body","text":"Your order {{1}} has been confirmed. Expected delivery: {{2}}","example":{"body_text":[["ORD-12345","March 31"]]}},{"type":"footer","text":"Thank you for your purchase"},{"type":"buttons","buttons":[{"type":"quick_reply","text":"Track Order"}]}]}; // \Zernio\Model\CreateWhatsAppTemplateRequest

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
| **create_whats_app_template_request** | [**\Zernio\Model\CreateWhatsAppTemplateRequest**](../Model/CreateWhatsAppTemplateRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateWhatsAppTemplate200Response**](../Model/CreateWhatsAppTemplate200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWhatsAppGroupChat()`

```php
deleteWhatsAppGroupChat($group_id, $account_id): \Zernio\Model\UnpublishPost200Response
```

Delete group

Delete a WhatsApp group and remove all participants.  Not available on [Coexistence](/platforms/whatsapp/connection#whatsapp-business-app-coexistence) numbers. Requires a Cloud API-only number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->deleteWhatsAppGroupChat($group_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->deleteWhatsAppGroupChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWhatsAppTemplate()`

```php
deleteWhatsAppTemplate($template_name, $account_id): \Zernio\Model\UnpublishPost200Response
```

Delete template

Permanently delete a message template by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
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

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWhatsappBusinessUsername()`

```php
deleteWhatsappBusinessUsername($delete_whatsapp_business_username_request): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Delete business username

Release the currently claimed WhatsApp Business username from the account. After deletion the username becomes available for other accounts to claim.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_whatsapp_business_username_request = {"accountId":"507f1f77bcf86cd799439011"}; // \Zernio\Model\DeleteWhatsappBusinessUsernameRequest

try {
    $result = $apiInstance->deleteWhatsappBusinessUsername($delete_whatsapp_business_username_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->deleteWhatsappBusinessUsername: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_whatsapp_business_username_request** | [**\Zernio\Model\DeleteWhatsappBusinessUsernameRequest**](../Model/DeleteWhatsappBusinessUsernameRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppBlockStatus()`

```php
getWhatsAppBlockStatus($account_id, $user): \Zernio\Model\GetWhatsAppBlockStatus200Response
```

Check if a user is blocked

Definitive blocked-state lookup for a single contact. Meta exposes no membership endpoint, so this reads Zernio's blocklist mirror (kept in sync by the block/unblock endpoints; the first call per account backfills the mirror from Meta's full list). Constant-time regardless of blocklist size.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$user = 'user_example'; // string | Consumer wa_id or E.164 phone (leading + optional)

try {
    $result = $apiInstance->getWhatsAppBlockStatus($account_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppBlockStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **user** | **string**| Consumer wa_id or E.164 phone (leading + optional) | |

### Return type

[**\Zernio\Model\GetWhatsAppBlockStatus200Response**](../Model/GetWhatsAppBlockStatus200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppBlockedUsers()`

```php
getWhatsAppBlockedUsers($account_id, $limit, $after): \Zernio\Model\GetWhatsAppBlockedUsers200Response
```

List blocked users

List the WhatsApp users blocked on this number. Cursor-paginated; pass `nextCursor` back as `after` to fetch the next page. The blocklist holds up to 64,000 users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$limit = 56; // int | Page size.
$after = 'after_example'; // string | Cursor from a previous response's `nextCursor`.

try {
    $result = $apiInstance->getWhatsAppBlockedUsers($account_id, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppBlockedUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |
| **limit** | **int**| Page size. | [optional] |
| **after** | **string**| Cursor from a previous response&#39;s &#x60;nextCursor&#x60;. | [optional] |

### Return type

[**\Zernio\Model\GetWhatsAppBlockedUsers200Response**](../Model/GetWhatsAppBlockedUsers200Response.md)

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
getWhatsAppBusinessProfile($account_id): \Zernio\Model\GetWhatsAppBusinessProfile200Response
```

Get business profile

Retrieve the WhatsApp Business profile for the account (about, address, description, email, websites, etc.).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
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

[**\Zernio\Model\GetWhatsAppBusinessProfile200Response**](../Model/GetWhatsAppBusinessProfile200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppDataset()`

```php
getWhatsAppDataset($account_id): \Zernio\Model\GetWhatsAppDataset200Response
```

Get CTWA conversions dataset

Returns the Meta Click-to-WhatsApp conversions dataset currently linked to the WhatsApp account, if one has been provisioned. Reads only from the stored `metadata.metaCapiDatasetId` — never hits Meta, never creates a dataset. Use this to detect whether `POST /v1/whatsapp/conversions` is configured for an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->getWhatsAppDataset($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppDataset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\GetWhatsAppDataset200Response**](../Model/GetWhatsAppDataset200Response.md)

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
getWhatsAppDisplayName($account_id): \Zernio\Model\GetWhatsAppDisplayName200Response
```

Get display name status

Fetch the current display name and its Meta review status for a WhatsApp Business account. Display name changes require Meta approval and can take 1-3 business days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
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

[**\Zernio\Model\GetWhatsAppDisplayName200Response**](../Model/GetWhatsAppDisplayName200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppGroupChat()`

```php
getWhatsAppGroupChat($group_id, $account_id): \Zernio\Model\GetWhatsAppGroupChat200Response
```

Get group info

Retrieve metadata about a WhatsApp group including subject, description, participants, and settings.  Not available on [Coexistence](/platforms/whatsapp/connection#whatsapp-business-app-coexistence) numbers. Requires a Cloud API-only number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->getWhatsAppGroupChat($group_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppGroupChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\GetWhatsAppGroupChat200Response**](../Model/GetWhatsAppGroupChat200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppMedia()`

```php
getWhatsAppMedia($media_id, $account_id): \SplFileObject
```

Download WhatsApp media

Streams the binary for a WhatsApp attachment. This is the endpoint the `url` on a WhatsApp `attachments[]` entry points at, in both the `message.received` webhook and the List messages response.  **This is an authenticated endpoint, not a public link.** Send `Authorization: Bearer <your API key>` exactly as you would for any other call. Passing the URL straight to a browser, an LLM vision API, or a no-code \"download file\" step without the header returns `401`. This is the most common integration mistake on this endpoint, and it differs from Instagram, Facebook and Telegram, whose `attachments[].url` is a direct CDN link that needs no header.  **Fetch on receipt, not lazily.** WhatsApp media lives in Meta's media store, not ours, and it is removed after a limited retention window (currently 7 days, and Meta has been dropping some inbound media sooner). Once Meta drops it the media is unrecoverable and this endpoint answers `400` permanently, so retrying will never succeed. Download and store the bytes when the webhook arrives.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_id = 'media_id_example'; // string | The media id from `attachments[].payload.id`.
$account_id = 'account_id_example'; // string | The WhatsApp account that received the media.

try {
    $result = $apiInstance->getWhatsAppMedia($media_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsAppMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **media_id** | **string**| The media id from &#x60;attachments[].payload.id&#x60;. | |
| **account_id** | **string**| The WhatsApp account that received the media. | |

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

## `getWhatsAppTemplate()`

```php
getWhatsAppTemplate($template_name, $account_id): \Zernio\Model\GetWhatsAppTemplate200Response
```

Get template

Retrieve a single message template by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
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

[**\Zernio\Model\GetWhatsAppTemplate200Response**](../Model/GetWhatsAppTemplate200Response.md)

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
getWhatsAppTemplates($account_id): \Zernio\Model\GetWhatsAppTemplates200Response
```

List templates

List all message templates for the WhatsApp Business Account (WABA) associated with the given account. Templates are fetched directly from the WhatsApp Cloud API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
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

[**\Zernio\Model\GetWhatsAppTemplates200Response**](../Model/GetWhatsAppTemplates200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsappBusinessUsername()`

```php
getWhatsappBusinessUsername($account_id): \Zernio\Model\GetWhatsappBusinessUsername200Response
```

Get business username

Fetch the current WhatsApp Business username and its approval status. Username status can be `approved` (active), `reserved` (pending activation), or `none` (no username set).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->getWhatsappBusinessUsername($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsappBusinessUsername: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\GetWhatsappBusinessUsername200Response**](../Model/GetWhatsappBusinessUsername200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsappBusinessUsernameSuggestions()`

```php
getWhatsappBusinessUsernameSuggestions($account_id): \Zernio\Model\GetWhatsappBusinessUsernameSuggestions200Response
```

Get username suggestions

Retrieve a list of available WhatsApp Business username suggestions based on the account's business profile name. Use these to help users discover valid, unclaimed usernames.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->getWhatsappBusinessUsernameSuggestions($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->getWhatsappBusinessUsernameSuggestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\GetWhatsappBusinessUsernameSuggestions200Response**](../Model/GetWhatsappBusinessUsernameSuggestions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWhatsAppConversions()`

```php
listWhatsAppConversions($account_id, $limit): \Zernio\Model\ListWhatsAppConversions200Response
```

List conversion events

Returns the most recent conversion events sent through `POST /v1/whatsapp/conversions` for the given WhatsApp account. Sourced from delivery logs (Axiom `late` dataset), so the visible window is bounded by log retention (about 30 days). Useful for rendering a \"recent activity\" panel on the conversions setup tab without standing up a parallel persistence layer.  Per-event payload mirrors the structured log we write on every successful send: `eventName`, `conversationId`, `eventsReceived`, `eventsFailed`, `traceId`, `durationMs`, and the wall-clock `timestamp`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$limit = 50; // int | Max events to return (1-200, default 50).

try {
    $result = $apiInstance->listWhatsAppConversions($account_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->listWhatsAppConversions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |
| **limit** | **int**| Max events to return (1-200, default 50). | [optional] [default to 50] |

### Return type

[**\Zernio\Model\ListWhatsAppConversions200Response**](../Model/ListWhatsAppConversions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWhatsAppGroupChats()`

```php
listWhatsAppGroupChats($account_id, $limit, $after): \Zernio\Model\ListWhatsAppGroupChats200Response
```

List active groups

List active WhatsApp group chats for a business phone number. These are actual WhatsApp group conversations on the platform.  Not available on [Coexistence](/platforms/whatsapp/connection#whatsapp-business-app-coexistence) numbers. Requires a Cloud API-only number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$limit = 25; // int | Max groups to return
$after = 'after_example'; // string | Pagination cursor

try {
    $result = $apiInstance->listWhatsAppGroupChats($account_id, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->listWhatsAppGroupChats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |
| **limit** | **int**| Max groups to return | [optional] [default to 25] |
| **after** | **string**| Pagination cursor | [optional] |

### Return type

[**\Zernio\Model\ListWhatsAppGroupChats200Response**](../Model/ListWhatsAppGroupChats200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWhatsAppGroupJoinRequests()`

```php
listWhatsAppGroupJoinRequests($group_id, $account_id): \Zernio\Model\ListWhatsAppGroupJoinRequests200Response
```

List join requests

List pending join requests for a WhatsApp group (only for groups with approval_required mode).  Not available on [Coexistence](/platforms/whatsapp/connection#whatsapp-business-app-coexistence) numbers. Requires a Cloud API-only number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID

try {
    $result = $apiInstance->listWhatsAppGroupJoinRequests($group_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->listWhatsAppGroupJoinRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **account_id** | **string**| WhatsApp social account ID | |

### Return type

[**\Zernio\Model\ListWhatsAppGroupJoinRequests200Response**](../Model/ListWhatsAppGroupJoinRequests200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectWhatsAppGroupJoinRequests()`

```php
rejectWhatsAppGroupJoinRequests($group_id, $account_id, $reject_whats_app_group_join_requests_request): \Zernio\Model\UnpublishPost200Response
```

Reject join requests

Reject pending join requests for a WhatsApp group.  Not available on [Coexistence](/platforms/whatsapp/connection#whatsapp-business-app-coexistence) numbers. Requires a Cloud API-only number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$reject_whats_app_group_join_requests_request = new \Zernio\Model\RejectWhatsAppGroupJoinRequestsRequest(); // \Zernio\Model\RejectWhatsAppGroupJoinRequestsRequest

try {
    $result = $apiInstance->rejectWhatsAppGroupJoinRequests($group_id, $account_id, $reject_whats_app_group_join_requests_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->rejectWhatsAppGroupJoinRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **account_id** | **string**| WhatsApp social account ID | |
| **reject_whats_app_group_join_requests_request** | [**\Zernio\Model\RejectWhatsAppGroupJoinRequestsRequest**](../Model/RejectWhatsAppGroupJoinRequestsRequest.md)|  | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeWhatsAppGroupParticipants()`

```php
removeWhatsAppGroupParticipants($group_id, $account_id, $remove_whats_app_group_participants_request): \Zernio\Model\UnpublishPost200Response
```

Remove participants

Remove participants from a WhatsApp group.  Not available on [Coexistence](/platforms/whatsapp/connection#whatsapp-business-app-coexistence) numbers. Requires a Cloud API-only number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$remove_whats_app_group_participants_request = new \Zernio\Model\RemoveWhatsAppGroupParticipantsRequest(); // \Zernio\Model\RemoveWhatsAppGroupParticipantsRequest

try {
    $result = $apiInstance->removeWhatsAppGroupParticipants($group_id, $account_id, $remove_whats_app_group_participants_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->removeWhatsAppGroupParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **account_id** | **string**| WhatsApp social account ID | |
| **remove_whats_app_group_participants_request** | [**\Zernio\Model\RemoveWhatsAppGroupParticipantsRequest**](../Model/RemoveWhatsAppGroupParticipantsRequest.md)|  | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendWhatsAppConversion()`

```php
sendWhatsAppConversion($send_whats_app_conversion_request): \Zernio\Model\SendWhatsAppConversion200Response
```

Send WhatsApp conversion event

Forward a WhatsApp Business Messaging conversion event (`LeadSubmitted`, `Purchase`, `AddToCart`, `InitiateCheckout`, `ViewContent`) to Meta's Conversions API with `action_source = business_messaging` and `messaging_channel = whatsapp`. The endpoint looks up the originating CTWA click ID (`ctwa_clid`) captured on the first inbound message of the conversation and replays it on every event so Meta can attribute the conversion back to the Click-to-WhatsApp ad that drove the chat.  Configuration prerequisite on the WhatsApp account metadata:   - `metaCapiDatasetId`: the Meta dataset ID linked to the WABA.     Provision one with `POST /v1/whatsapp/dataset`.  The WABA ID (already set automatically at connect time) is forwarded as `user_data.whatsapp_business_account_id`, which is the per-channel attribution identifier Meta requires for WhatsApp events. No Facebook Page ID is needed (that field is the Messenger-branch identifier).  Identify the conversation by either `conversationId` (preferred) or `phoneE164` (digits only, no `+`). At least one is required. If the conversation has no captured `ctwa_clid`, the request returns 422 because there is nothing to attribute.  Token and dataset coupling: the WhatsApp account's accessToken must have access to the configured `metaCapiDatasetId`. By default a WABA's system-user token is scoped to the WABA's own Business Manager and cannot post to a pixel owned by a different Business; Meta returns code 100 in that case. Either share the dataset with the WhatsApp app's Business in BM, or use a dataset already in the same Business as the WABA.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_whats_app_conversion_request = new \Zernio\Model\SendWhatsAppConversionRequest(); // \Zernio\Model\SendWhatsAppConversionRequest

try {
    $result = $apiInstance->sendWhatsAppConversion($send_whats_app_conversion_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->sendWhatsAppConversion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_whats_app_conversion_request** | [**\Zernio\Model\SendWhatsAppConversionRequest**](../Model/SendWhatsAppConversionRequest.md)|  | |

### Return type

[**\Zernio\Model\SendWhatsAppConversion200Response**](../Model/SendWhatsAppConversion200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setWhatsappBusinessUsername()`

```php
setWhatsappBusinessUsername($set_whatsapp_business_username_request): \Zernio\Model\SetWhatsappBusinessUsername200Response
```

Set business username

Claim or transfer a WhatsApp Business username for the account.  Username rules: 3-35 characters, letters/digits/period/underscore only, must contain at least one letter, no leading or trailing periods, no consecutive periods, no `www` prefix, no domain TLD suffix (e.g. `.com`).  If the desired username is currently held by another account, pass `transferAction: \"force_transfer\"` to request a transfer. On failure the API returns a standard error envelope with one of these codes: `whatsapp_username_unavailable` (already taken and transfer not requested), `whatsapp_username_ineligible` (account not eligible to claim a username), or `whatsapp_username_transfer_required` (username is held elsewhere; retry with `force_transfer`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_whatsapp_business_username_request = {"accountId":"507f1f77bcf86cd799439011","username":"mybusiness","transferAction":"none"}; // \Zernio\Model\SetWhatsappBusinessUsernameRequest

try {
    $result = $apiInstance->setWhatsappBusinessUsername($set_whatsapp_business_username_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->setWhatsappBusinessUsername: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_whatsapp_business_username_request** | [**\Zernio\Model\SetWhatsappBusinessUsernameRequest**](../Model/SetWhatsappBusinessUsernameRequest.md)|  | |

### Return type

[**\Zernio\Model\SetWhatsappBusinessUsername200Response**](../Model/SetWhatsappBusinessUsername200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unblockWhatsAppUsers()`

```php
unblockWhatsAppUsers($unblock_whats_app_users_request): \Zernio\Model\UnblockWhatsAppUsers200Response
```

Unblock users

Unblock one or more previously blocked WhatsApp users on this number. Up to 1,000 users per request; per-user failures are reported in `failed` without failing the rest of the batch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unblock_whats_app_users_request = new \Zernio\Model\UnblockWhatsAppUsersRequest(); // \Zernio\Model\UnblockWhatsAppUsersRequest

try {
    $result = $apiInstance->unblockWhatsAppUsers($unblock_whats_app_users_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->unblockWhatsAppUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **unblock_whats_app_users_request** | [**\Zernio\Model\UnblockWhatsAppUsersRequest**](../Model/UnblockWhatsAppUsersRequest.md)|  | |

### Return type

[**\Zernio\Model\UnblockWhatsAppUsers200Response**](../Model/UnblockWhatsAppUsers200Response.md)

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
updateWhatsAppBusinessProfile($update_whats_app_business_profile_request): \Zernio\Model\UnpublishPost200Response
```

Update business profile

Update the WhatsApp Business profile. All fields are optional; only provided fields will be updated. Constraints: about max 139 chars, description max 512 chars, max 2 websites.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_whats_app_business_profile_request = {"accountId":"507f1f77bcf86cd799439011","about":"We help businesses grow","description":"Premium business solutions for startups and enterprises","email":"hello@example.com","websites":["https://example.com"]}; // \Zernio\Model\UpdateWhatsAppBusinessProfileRequest

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
| **update_whats_app_business_profile_request** | [**\Zernio\Model\UpdateWhatsAppBusinessProfileRequest**](../Model/UpdateWhatsAppBusinessProfileRequest.md)|  | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

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
updateWhatsAppDisplayName($update_whats_app_display_name_request): \Zernio\Model\UpdateWhatsAppDisplayName200Response
```

Request display name change

Submit a display name change request for the WhatsApp Business account. The new name must follow WhatsApp naming guidelines (3-512 characters, must represent your business). Changes require Meta review and approval, which typically takes 1-3 business days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_whats_app_display_name_request = {"accountId":"507f1f77bcf86cd799439011","displayName":"My Business Name"}; // \Zernio\Model\UpdateWhatsAppDisplayNameRequest

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
| **update_whats_app_display_name_request** | [**\Zernio\Model\UpdateWhatsAppDisplayNameRequest**](../Model/UpdateWhatsAppDisplayNameRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateWhatsAppDisplayName200Response**](../Model/UpdateWhatsAppDisplayName200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWhatsAppGroupChat()`

```php
updateWhatsAppGroupChat($group_id, $account_id, $update_whats_app_group_chat_request): \Zernio\Model\UnpublishPost200Response
```

Update group settings

Update the subject, description, or join approval mode of a WhatsApp group.  Not available on [Coexistence](/platforms/whatsapp/connection#whatsapp-business-app-coexistence) numbers. Requires a Cloud API-only number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group ID
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$update_whats_app_group_chat_request = new \Zernio\Model\UpdateWhatsAppGroupChatRequest(); // \Zernio\Model\UpdateWhatsAppGroupChatRequest

try {
    $result = $apiInstance->updateWhatsAppGroupChat($group_id, $account_id, $update_whats_app_group_chat_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->updateWhatsAppGroupChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group ID | |
| **account_id** | **string**| WhatsApp social account ID | |
| **update_whats_app_group_chat_request** | [**\Zernio\Model\UpdateWhatsAppGroupChatRequest**](../Model/UpdateWhatsAppGroupChatRequest.md)|  | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

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
updateWhatsAppTemplate($template_name, $update_whats_app_template_request): \Zernio\Model\UpdateWhatsAppTemplate200Response
```

Update template

Update a message template's components. Only certain fields can be updated depending on the template's current approval state. Approved templates can only have components updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_name = 'template_name_example'; // string | Template name
$update_whats_app_template_request = {"accountId":"507f1f77bcf86cd799439011","components":[{"type":"body","text":"Updated: Your order {{1}} is confirmed. Delivery by {{2}}","example":{"body_text":[["ORD-12345","April 1"]]}},{"type":"buttons","buttons":[{"type":"quick_reply","text":"Track Order"}]}]}; // \Zernio\Model\UpdateWhatsAppTemplateRequest

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
| **update_whats_app_template_request** | [**\Zernio\Model\UpdateWhatsAppTemplateRequest**](../Model/UpdateWhatsAppTemplateRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateWhatsAppTemplate200Response**](../Model/UpdateWhatsAppTemplate200Response.md)

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
uploadWhatsAppProfilePhoto($account_id, $file): \Zernio\Model\UnpublishPost200Response
```

Upload profile picture

Upload a new profile picture for the WhatsApp Business Profile. Uses Meta's resumable upload API under the hood: creates an upload session, uploads the image bytes, then updates the business profile with the resulting handle.  Provide the image either as a binary upload (`multipart/form-data` with `file`) or as a download URL (`application/json` with `url`) — with a URL we fetch the image server-side and upload the bytes for you. Meta's profile-photo API is bytes-only, so there is no direct URL passthrough. JPEG/PNG, max 5MB either way.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WhatsAppApi(
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

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
