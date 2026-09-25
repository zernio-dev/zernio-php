# Zernio\IMessageApi

Two-way iMessage on provider-provisioned senders. Order or register a sender on a profile, then send and receive through the inbox conversation endpoints (&#39;platform: imessage&#39;).

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addImessageGroupParticipant()**](IMessageApi.md#addImessageGroupParticipant) | **POST** /v1/imessage/groups/{conversationId}/participants | Add a participant to an iMessage group |
| [**cancelImessageSender()**](IMessageApi.md#cancelImessageSender) | **DELETE** /v1/imessage/senders/{senderId} | Cancel an iMessage sender |
| [**createImessageGroup()**](IMessageApi.md#createImessageGroup) | **POST** /v1/imessage/groups | Start an iMessage group chat |
| [**createImessageOptInLink()**](IMessageApi.md#createImessageOptInLink) | **POST** /v1/imessage/senders/{senderId}/opt-in-links | Create a tracked iMessage opt-in link |
| [**getImessageGroup()**](IMessageApi.md#getImessageGroup) | **GET** /v1/imessage/groups/{conversationId} | Get an iMessage group |
| [**getImessageSender()**](IMessageApi.md#getImessageSender) | **GET** /v1/imessage/senders/{senderId} | Get iMessage sender status |
| [**listImessageAudience()**](IMessageApi.md#listImessageAudience) | **GET** /v1/imessage/audience | List iMessage audience |
| [**listImessageAvailableNumbers()**](IMessageApi.md#listImessageAvailableNumbers) | **GET** /v1/imessage/senders/available-numbers | List instantly available iMessage numbers |
| [**listImessageSenderOrders()**](IMessageApi.md#listImessageSenderOrders) | **GET** /v1/imessage/senders/order | List iMessage sender orders |
| [**listImessageSenders()**](IMessageApi.md#listImessageSenders) | **GET** /v1/imessage/senders | List iMessage senders |
| [**orderImessageSender()**](IMessageApi.md#orderImessageSender) | **POST** /v1/imessage/senders/order | Order a new iMessage sender |
| [**registerImessageSender()**](IMessageApi.md#registerImessageSender) | **POST** /v1/imessage/senders | Register an iMessage sender |
| [**removeImessageGroupParticipant()**](IMessageApi.md#removeImessageGroupParticipant) | **DELETE** /v1/imessage/groups/{conversationId}/participants | Remove a participant from an iMessage group |
| [**reserveImessageAvailableNumber()**](IMessageApi.md#reserveImessageAvailableNumber) | **POST** /v1/imessage/senders/available-numbers/{numberId}/reserve | Reserve an available iMessage number |
| [**setImessageSubscription()**](IMessageApi.md#setImessageSubscription) | **POST** /v1/imessage/audience/subscription | Subscribe or opt out an iMessage contact |
| [**updateImessageGroup()**](IMessageApi.md#updateImessageGroup) | **PATCH** /v1/imessage/groups/{conversationId} | Rename an iMessage group or change its photo |
| [**updateImessageSender()**](IMessageApi.md#updateImessageSender) | **PATCH** /v1/imessage/senders/{senderId} | Update an iMessage sender |


## `addImessageGroupParticipant()`

```php
addImessageGroupParticipant($conversation_id, $add_imessage_group_participant_request): \Zernio\Model\AddImessageGroupParticipant200Response
```

Add a participant to an iMessage group

Applied asynchronously by the provider; the participant list on the next group webhook reflects it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\IMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string
$add_imessage_group_participant_request = new \Zernio\Model\AddImessageGroupParticipantRequest(); // \Zernio\Model\AddImessageGroupParticipantRequest

try {
    $result = $apiInstance->addImessageGroupParticipant($conversation_id, $add_imessage_group_participant_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMessageApi->addImessageGroupParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**|  | |
| **add_imessage_group_participant_request** | [**\Zernio\Model\AddImessageGroupParticipantRequest**](../Model/AddImessageGroupParticipantRequest.md)|  | |

### Return type

[**\Zernio\Model\AddImessageGroupParticipant200Response**](../Model/AddImessageGroupParticipant200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelImessageSender()`

```php
cancelImessageSender($sender_id): \Zernio\Model\OrderImessageSender202Response
```

Cancel an iMessage sender

Cancels the sender at the provider and deactivates its messaging account. Billing stops with the current month (no proration or refunds, matching phone numbers). A sender still being set up (status ordering or activating) cannot be canceled; contact support to change the order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\IMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_id = 'sender_id_example'; // string

try {
    $result = $apiInstance->cancelImessageSender($sender_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMessageApi->cancelImessageSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_id** | **string**|  | |

### Return type

[**\Zernio\Model\OrderImessageSender202Response**](../Model/OrderImessageSender202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createImessageGroup()`

```php
createImessageGroup($create_imessage_group_request): \Zernio\Model\CreateImessageGroup202Response
```

Start an iMessage group chat

Creates a group chat from one of your senders and sends its first message. The provider processes it asynchronously: the response carries the request id, and the thread appears in the inbox (with its group conversation id) on the first webhook. Starting a group counts as messaging new contacts, so the sender needs the provider's init-conversations add-on and the same sending intervals apply; without it the request fails with 409 `recipient_must_message_first`. WhatsApp groups need a `name`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\IMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_imessage_group_request = new \Zernio\Model\CreateImessageGroupRequest(); // \Zernio\Model\CreateImessageGroupRequest

try {
    $result = $apiInstance->createImessageGroup($create_imessage_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMessageApi->createImessageGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_imessage_group_request** | [**\Zernio\Model\CreateImessageGroupRequest**](../Model/CreateImessageGroupRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateImessageGroup202Response**](../Model/CreateImessageGroup202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createImessageOptInLink()`

```php
createImessageOptInLink($sender_id, $create_imessage_opt_in_link_request): \Zernio\Model\CreateImessageOptInLink200Response
```

Create a tracked iMessage opt-in link

Generates a per-campaign link that opens Messages on this sender with `body` prefilled. A thread the contact opens skips the pacing and the first-message content rule that apply when the sender writes first, and it is the only way in for senders without the add-on for new contacts (their sends to anyone else fail with `recipient_must_message_first`).  Each link carries a unique code in place of the `[opt-in-code]` placeholder; when the contact sends it, the resulting `message.received` webhook (and the stored inbox message's `metadata`) has `optIn: true` and your `parameters` under `optInParameters`, so you can attribute the conversation to the campaign or lead that produced it.  For an untracked link, use the sender's `optInLink` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\IMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_id = 'sender_id_example'; // string
$create_imessage_opt_in_link_request = new \Zernio\Model\CreateImessageOptInLinkRequest(); // \Zernio\Model\CreateImessageOptInLinkRequest

try {
    $result = $apiInstance->createImessageOptInLink($sender_id, $create_imessage_opt_in_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMessageApi->createImessageOptInLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_id** | **string**|  | |
| **create_imessage_opt_in_link_request** | [**\Zernio\Model\CreateImessageOptInLinkRequest**](../Model/CreateImessageOptInLinkRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateImessageOptInLink200Response**](../Model/CreateImessageOptInLink200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getImessageGroup()`

```php
getImessageGroup($conversation_id, $account_id): \Zernio\Model\GetImessageGroup200Response
```

Get an iMessage group

The group's name, participants and channel as the provider currently sees them. The conversation must be a group thread of the given account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\IMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The inbox conversation id (or the provider group id)
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getImessageGroup($conversation_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMessageApi->getImessageGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The inbox conversation id (or the provider group id) | |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetImessageGroup200Response**](../Model/GetImessageGroup200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getImessageSender()`

```php
getImessageSender($sender_id): \Zernio\Model\GetImessageSender200Response
```

Get iMessage sender status

Lifecycle status of an ordered or registered sender (poll while an order activates), plus the provider's live platform health for it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\IMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_id = 'sender_id_example'; // string

try {
    $result = $apiInstance->getImessageSender($sender_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMessageApi->getImessageSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetImessageSender200Response**](../Model/GetImessageSender200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listImessageAudience()`

```php
listImessageAudience($account_id, $status, $search, $limit, $skip): \Zernio\Model\ListImessageAudience200Response
```

List iMessage audience

Contacts who have messaged your iMessage senders (1:1 threads), with subscription state and, for threads opened through a tracked opt-in link, the parameters that brought them in. Newest activity first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\IMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Limit to one sender account
$status = 'status_example'; // string
$search = 'search_example'; // string | Matches the contact handle or name
$limit = 50; // int
$skip = 0; // int

try {
    $result = $apiInstance->listImessageAudience($account_id, $status, $search, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMessageApi->listImessageAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Limit to one sender account | [optional] |
| **status** | **string**|  | [optional] |
| **search** | **string**| Matches the contact handle or name | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListImessageAudience200Response**](../Model/ListImessageAudience200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listImessageAvailableNumbers()`

```php
listImessageAvailableNumbers($region): \Zernio\Model\ListImessageAvailableNumbers200Response
```

List instantly available iMessage numbers

Phone numbers the provider has already registered and can assign on the spot. Order one by passing its `id` as `availableNumberId` to POST /v1/imessage/senders/order: the sender activates immediately instead of after the usual provisioning wait. Reserve it first with POST /v1/imessage/senders/available-numbers/{numberId}/reserve while the buyer decides. The list is a snapshot; a number can be taken between listing and ordering.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\IMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$region = 'region_example'; // string

try {
    $result = $apiInstance->listImessageAvailableNumbers($region);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMessageApi->listImessageAvailableNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **region** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\ListImessageAvailableNumbers200Response**](../Model/ListImessageAvailableNumbers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listImessageSenderOrders()`

```php
listImessageSenderOrders($include_canceled): \Zernio\Model\ListImessageSenderOrders200Response
```

List iMessage sender orders

Every sender lifecycle doc your team owns (ordered or registered), across statuses. Canceled senders are omitted unless `includeCanceled=true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\IMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_canceled = false; // bool

try {
    $result = $apiInstance->listImessageSenderOrders($include_canceled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMessageApi->listImessageSenderOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include_canceled** | **bool**|  | [optional] [default to false] |

### Return type

[**\Zernio\Model\ListImessageSenderOrders200Response**](../Model/ListImessageSenderOrders200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listImessageSenders()`

```php
listImessageSenders(): \Zernio\Model\ListImessageSenders200Response
```

List iMessage senders

Lists the iMessage senders registered across your accessible profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\IMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listImessageSenders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMessageApi->listImessageSenders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\ListImessageSenders200Response**](../Model/ListImessageSenders200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderImessageSender()`

```php
orderImessageSender($order_imessage_sender_request): \Zernio\Model\OrderImessageSender202Response
```

Order a new iMessage sender

Orders a NEW dedicated iMessage sender from the delivery provider (compare with POST /v1/imessage/senders, which registers a sender you already own). Activation is asynchronous (minutes to a few hours): the response is 202 with the lifecycle object; poll GET /v1/imessage/senders/{senderId} or subscribe to the account.connected webhook. Billing starts at activation (monthly per sender, no proration). Requires usage-based billing and a valid payment method. Pass purchaseIntentId to make retries idempotent — the provider-side order is never retried automatically. Ordered phone senders include SMS/RCS fallback with call forwarding and the ability to message contacts who have not written first (sending intervals still apply).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\IMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_imessage_sender_request = new \Zernio\Model\OrderImessageSenderRequest(); // \Zernio\Model\OrderImessageSenderRequest

try {
    $result = $apiInstance->orderImessageSender($order_imessage_sender_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMessageApi->orderImessageSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_imessage_sender_request** | [**\Zernio\Model\OrderImessageSenderRequest**](../Model/OrderImessageSenderRequest.md)|  | |

### Return type

[**\Zernio\Model\OrderImessageSender202Response**](../Model/OrderImessageSender202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerImessageSender()`

```php
registerImessageSender($register_imessage_sender_request): \Zernio\Model\RegisterImessageSender200Response
```

Register an iMessage sender

Registers a provider-provisioned iMessage sender (a phone number or an email handle) that YOU already own on a profile, creating an `imessage` account that sends and receives through the inbox conversation endpoints. To have Zernio order a new sender for you, use POST /v1/imessage/senders/order instead. Registration attaches the monthly sender fee (billed while active) and requires a payment method (402 without one). One sender per profile: re-registering the SAME handle refreshes it; a different handle returns 409 until the existing sender is canceled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\IMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$register_imessage_sender_request = new \Zernio\Model\RegisterImessageSenderRequest(); // \Zernio\Model\RegisterImessageSenderRequest

try {
    $result = $apiInstance->registerImessageSender($register_imessage_sender_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMessageApi->registerImessageSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **register_imessage_sender_request** | [**\Zernio\Model\RegisterImessageSenderRequest**](../Model/RegisterImessageSenderRequest.md)|  | |

### Return type

[**\Zernio\Model\RegisterImessageSender200Response**](../Model/RegisterImessageSender200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeImessageGroupParticipant()`

```php
removeImessageGroupParticipant($conversation_id, $account_id, $contact): \Zernio\Model\AddImessageGroupParticipant200Response
```

Remove a participant from an iMessage group

Applied asynchronously by the provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\IMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string
$account_id = 'account_id_example'; // string
$contact = 'contact_example'; // string | E.164 phone or iMessage email

try {
    $result = $apiInstance->removeImessageGroupParticipant($conversation_id, $account_id, $contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMessageApi->removeImessageGroupParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**|  | |
| **account_id** | **string**|  | |
| **contact** | **string**| E.164 phone or iMessage email | |

### Return type

[**\Zernio\Model\AddImessageGroupParticipant200Response**](../Model/AddImessageGroupParticipant200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reserveImessageAvailableNumber()`

```php
reserveImessageAvailableNumber($number_id): \Zernio\Model\ReserveImessageAvailableNumber200Response
```

Reserve an available iMessage number

Holds the number for 3 minutes so nobody else can order it while the buyer decides. Place the order (POST /v1/imessage/senders/order with availableNumberId) before the hold expires. No request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\IMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number_id = 'number_id_example'; // string

try {
    $result = $apiInstance->reserveImessageAvailableNumber($number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMessageApi->reserveImessageAvailableNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number_id** | **string**|  | |

### Return type

[**\Zernio\Model\ReserveImessageAvailableNumber200Response**](../Model/ReserveImessageAvailableNumber200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setImessageSubscription()`

```php
setImessageSubscription($set_imessage_subscription_request): \Zernio\Model\SetImessageSubscription200Response
```

Subscribe or opt out an iMessage contact

Opted-out contacts are refused at send time (409 recipient_opted_out) until re-subscribed. Their inbound messages still arrive. Scoped to your account: it does not change the contact's state with other businesses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\IMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_imessage_subscription_request = new \Zernio\Model\SetImessageSubscriptionRequest(); // \Zernio\Model\SetImessageSubscriptionRequest

try {
    $result = $apiInstance->setImessageSubscription($set_imessage_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMessageApi->setImessageSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_imessage_subscription_request** | [**\Zernio\Model\SetImessageSubscriptionRequest**](../Model/SetImessageSubscriptionRequest.md)|  | |

### Return type

[**\Zernio\Model\SetImessageSubscription200Response**](../Model/SetImessageSubscription200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateImessageGroup()`

```php
updateImessageGroup($conversation_id, $update_imessage_group_request): \Zernio\Model\UpdateImessageGroup200Response
```

Rename an iMessage group or change its photo

One change per call: either `name` or `photoUrl` (an empty `photoUrl` removes the photo). Applied asynchronously by the provider; a rename is mirrored on the inbox conversation right away.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\IMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string
$update_imessage_group_request = new \Zernio\Model\UpdateImessageGroupRequest(); // \Zernio\Model\UpdateImessageGroupRequest

try {
    $result = $apiInstance->updateImessageGroup($conversation_id, $update_imessage_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMessageApi->updateImessageGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**|  | |
| **update_imessage_group_request** | [**\Zernio\Model\UpdateImessageGroupRequest**](../Model/UpdateImessageGroupRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateImessageGroup200Response**](../Model/UpdateImessageGroup200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateImessageSender()`

```php
updateImessageSender($sender_id, $update_imessage_sender_request): \Zernio\Model\OrderImessageSender202Response
```

Update an iMessage sender

Display name (inbox and API responses) and the contact card (vCard) recipients see when they save the sender. The contact card is what a contactCard send shares.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\IMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_id = 'sender_id_example'; // string
$update_imessage_sender_request = new \Zernio\Model\UpdateImessageSenderRequest(); // \Zernio\Model\UpdateImessageSenderRequest

try {
    $result = $apiInstance->updateImessageSender($sender_id, $update_imessage_sender_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMessageApi->updateImessageSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_id** | **string**|  | |
| **update_imessage_sender_request** | [**\Zernio\Model\UpdateImessageSenderRequest**](../Model/UpdateImessageSenderRequest.md)|  | |

### Return type

[**\Zernio\Model\OrderImessageSender202Response**](../Model/OrderImessageSender202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
