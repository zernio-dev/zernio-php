# Zernio\TreasuryApi

Fund a balance by card, then transfer money to payees (creators, ad accounts) through Zernio. The dashboard calls this your Balance. Requires usage-based billing. Every operation belongs to the &#x60;money&#x60; resource group.  - Money writes (top-ups, transfers, treasury settles, payout batches) need an owner, admin or billing admin, signed in or through a full-access key they created. - Reading the team&#39;s balance, top-ups, transfers and payees needs a full-access key or a signed-in session; a profile-scoped key answers 403.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelPayoutBatch()**](TreasuryApi.md#cancelPayoutBatch) | **POST** /v1/payout-batches/{batchId}/cancel | Cancel an unpaid payout batch |
| [**cancelTopup()**](TreasuryApi.md#cancelTopup) | **POST** /v1/balance/top-ups/{topupId}/cancel | Cancel a top-up |
| [**confirmPayoutBatch()**](TreasuryApi.md#confirmPayoutBatch) | **POST** /v1/payout-batches/{batchId}/confirm | Confirm a payout batch payment |
| [**confirmTopup()**](TreasuryApi.md#confirmTopup) | **POST** /v1/balance/top-ups/{topupId}/confirm | Confirm a top-up |
| [**createPayeeOnboardingLink()**](TreasuryApi.md#createPayeeOnboardingLink) | **POST** /v1/payees/{payeeId}/onboarding-link | Create a payee onboarding link |
| [**createTopup()**](TreasuryApi.md#createTopup) | **POST** /v1/balance/top-ups | Create a top-up |
| [**createTransfer()**](TreasuryApi.md#createTransfer) | **POST** /v1/transfers | Create a transfer |
| [**getBalance()**](TreasuryApi.md#getBalance) | **GET** /v1/balance | Get balance |
| [**getPayoutBatch()**](TreasuryApi.md#getPayoutBatch) | **GET** /v1/payout-batches/{batchId} | Get a payout batch |
| [**getTopupReceipt()**](TreasuryApi.md#getTopupReceipt) | **GET** /v1/balance/top-ups/{topupId}/receipt | Get a top-up receipt |
| [**getTransfer()**](TreasuryApi.md#getTransfer) | **GET** /v1/transfers/{transferId} | Get a transfer |
| [**listPayees()**](TreasuryApi.md#listPayees) | **GET** /v1/payees | List payees |
| [**listTopups()**](TreasuryApi.md#listTopups) | **GET** /v1/balance/top-ups | List top-ups |
| [**listTransfers()**](TreasuryApi.md#listTransfers) | **GET** /v1/transfers | List transfers |


## `cancelPayoutBatch()`

```php
cancelPayoutBatch($batch_id): \Zernio\Model\GetPayoutBatch200Response
```

Cancel an unpaid payout batch

Ends the payment of a batch that is still `awaiting_payment` (3D Secure left unfinished) and makes every amount payable again right away.  - When Stripe reports the charge already made, the batch is paid out instead. - A batch that was already paid is returned unchanged.  Needs an owner, admin or billing admin, signed in or through a full-access key they created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TreasuryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = 'batch_id_example'; // string | Payout batch ID.

try {
    $result = $apiInstance->cancelPayoutBatch($batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->cancelPayoutBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch_id** | **string**| Payout batch ID. | |

### Return type

[**\Zernio\Model\GetPayoutBatch200Response**](../Model/GetPayoutBatch200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelTopup()`

```php
cancelTopup($topup_id): \Zernio\Model\TreasuryTopup
```

Cancel a top-up

Ends the payment of a pending top-up (3D Secure left unfinished), so it stops counting toward `pendingTopupCents`, and returns it as `expired`.  - When Stripe reports it already paid, the top-up is credited and comes back `succeeded`. - A top-up that is no longer pending comes back unchanged. - A creator payout payment (`purpose: payout_batch`) answers 409; cancel it from its campaign.  Needs an owner, admin or billing admin, signed in or through a full-access key they created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TreasuryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topup_id = 'topup_id_example'; // string

try {
    $result = $apiInstance->cancelTopup($topup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->cancelTopup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **topup_id** | **string**|  | |

### Return type

[**\Zernio\Model\TreasuryTopup**](../Model/TreasuryTopup.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmPayoutBatch()`

```php
confirmPayoutBatch($batch_id): \Zernio\Model\GetPayoutBatch200Response
```

Confirm a payout batch payment

Call after 3D Secure. Reads the batch's payment from Stripe, then:  - charge succeeded: pays the creators (`paying`, then `paid`). - bank refused: ends the batch (`failed`) and makes every amount payable again. - still settling: leaves it `awaiting_payment`.  Safe to repeat. Needs an owner, admin or billing admin, signed in or through a full-access key they created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TreasuryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = 'batch_id_example'; // string | Payout batch ID.

try {
    $result = $apiInstance->confirmPayoutBatch($batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->confirmPayoutBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch_id** | **string**| Payout batch ID. | |

### Return type

[**\Zernio\Model\GetPayoutBatch200Response**](../Model/GetPayoutBatch200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmTopup()`

```php
confirmTopup($topup_id): \Zernio\Model\TreasuryTopup
```

Confirm a top-up

Call after 3D Secure. Reads the payment from Stripe, then:  - `succeeded`: paid, the top-up is credited. - `failed`: the bank refused it. - `pending`: Stripe is still settling the charge.  Safe to repeat. Needs an owner, admin or billing admin, signed in or through a full-access key they created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TreasuryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topup_id = 'topup_id_example'; // string

try {
    $result = $apiInstance->confirmTopup($topup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->confirmTopup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **topup_id** | **string**|  | |

### Return type

[**\Zernio\Model\TreasuryTopup**](../Model/TreasuryTopup.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPayeeOnboardingLink()`

```php
createPayeeOnboardingLink($payee_id): \Zernio\Model\CreatePayeeOnboardingLink200Response
```

Create a payee onboarding link

Returns a Stripe-hosted link where the payee completes identity and bank details so they can receive payouts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TreasuryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payee_id = 'payee_id_example'; // string

try {
    $result = $apiInstance->createPayeeOnboardingLink($payee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->createPayeeOnboardingLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payee_id** | **string**|  | |

### Return type

[**\Zernio\Model\CreatePayeeOnboardingLink200Response**](../Model/CreatePayeeOnboardingLink200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTopup()`

```php
createTopup($create_topup_request, $idempotency_key): \Zernio\Model\CreateTopup201Response
```

Create a top-up

Charges the billing owner's saved card (the default one, or `paymentMethodId`) for `amountCents` while the payer is present.  - `status: succeeded`: the card was charged. The top-up is credited to `availableCents` within seconds, net of Stripe's processing fee. Transfers to payees can use it from 7 days after the charge. - `status: requires_action`: the bank asked for 3D Secure. Complete it with Stripe.js `handleNextAction({ clientSecret })`, then call `POST /v1/balance/top-ups/{topupId}/confirm`. One left unconfirmed is cancelled after 30 minutes.  ### Errors  - 402 `payment_required`: no saved card. - 402 `card_declined`: the bank's reason. - 400: `method: bank_transfer` (bank transfers are not available yet).  Needs an owner, admin or billing admin, signed in or through a full-access key they created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TreasuryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_topup_request = new \Zernio\Model\CreateTopupRequest(); // \Zernio\Model\CreateTopupRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.

try {
    $result = $apiInstance->createTopup($create_topup_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->createTopup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_topup_request** | [**\Zernio\Model\CreateTopupRequest**](../Model/CreateTopupRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours. | [optional] |

### Return type

[**\Zernio\Model\CreateTopup201Response**](../Model/CreateTopup201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTransfer()`

```php
createTransfer($create_transfer_request, $idempotency_key): \Zernio\Model\TreasuryTransfer
```

Create a transfer

Moves money from your balance to a payee.  ### Fee  The payee receives the full `amountCents`. Zernio's fee (4%, 50 cent minimum) is added on top, so your balance is debited `totalCents` = `amountCents` + `feeCents`.  ### Who can call it  Needs an owner, admin or billing admin, signed in or through a full-access key they created. A profile-scoped key answers 403.  ### Errors  - 402: the balance does not cover the amount plus the fee. - 402: the balance is negative after a dispute or refund of a card top-up (\"Your balance is negative after a dispute or refund of a card top-up. Add funds to cover it before sending transfers.\"). - 409: the payee has not finished onboarding, or the Idempotency-Key is still processing. - 409 `payout_funds_locked`: money from a card top-up can be transferred from 7 days after the charge. The message names the amount and the day (\"$100.00 from your card top-up on Oct 29 can be paid out from Nov 5.\").  ### Retries  A same-key retry never makes the transfer twice within Stripe's 24-hour idempotency window. It answers 409 while another request is still waiting on Stripe for it.  A transfer Stripe has not confirmed after 24 hours answers 409 until the daily reconciliation marks it paid (Stripe made it) or failed (it did not).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TreasuryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_transfer_request = new \Zernio\Model\CreateTransferRequest(); // \Zernio\Model\CreateTransferRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.

try {
    $result = $apiInstance->createTransfer($create_transfer_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->createTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_transfer_request** | [**\Zernio\Model\CreateTransferRequest**](../Model/CreateTransferRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours. | [optional] |

### Return type

[**\Zernio\Model\TreasuryTransfer**](../Model/TreasuryTransfer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBalance()`

```php
getBalance(): \Zernio\Model\GetBalance200Response
```

Get balance

Returns your team's balance:  - the balance you can transfer - the part of it that cannot be paid out to creators yet (`payoutLockedCents`, `payoutLocks`) - top-ups still waiting for payment - your latest top-ups  A card top-up is in `availableCents` as soon as it is paid. Transfers to payees can use it from 7 days after the charge, so a stolen card cannot be turned straight into payouts.  A transfer debits its amount plus the fee added on top; the payee receives the full amount.  A card dispute or refund on a top-up is debited from the available balance and can make it negative. Transfers are refused until it is positive again.  A profile-scoped key answers 403, since the balance belongs to the whole team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TreasuryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBalance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->getBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\GetBalance200Response**](../Model/GetBalance200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayoutBatch()`

```php
getPayoutBatch($batch_id): \Zernio\Model\GetPayoutBatch200Response
```

Get a payout batch

One payout batch with its status and each creator's item. Poll it after the card payment to see when every creator is paid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TreasuryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = 'batch_id_example'; // string | Payout batch ID.

try {
    $result = $apiInstance->getPayoutBatch($batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->getPayoutBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch_id** | **string**| Payout batch ID. | |

### Return type

[**\Zernio\Model\GetPayoutBatch200Response**](../Model/GetPayoutBatch200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTopupReceipt()`

```php
getTopupReceipt($topup_id): \Zernio\Model\GetTopupReceipt200Response
```

Get a top-up receipt

The receipt for a paid top-up or creator payout payment (`purpose: payout_batch`). `format: pdf` is the Stripe invoice PDF; `format: page` is Stripe's receipt page, for payments that have no invoice. The link is short-lived, so fetch it when you need it. A profile-scoped key answers 403.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TreasuryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topup_id = 'topup_id_example'; // string

try {
    $result = $apiInstance->getTopupReceipt($topup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->getTopupReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **topup_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetTopupReceipt200Response**](../Model/GetTopupReceipt200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransfer()`

```php
getTransfer($transfer_id): \Zernio\Model\TreasuryTransfer
```

Get a transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TreasuryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_id = 'transfer_id_example'; // string

try {
    $result = $apiInstance->getTransfer($transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->getTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transfer_id** | **string**|  | |

### Return type

[**\Zernio\Model\TreasuryTransfer**](../Model/TreasuryTransfer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPayees()`

```php
listPayees(): \Zernio\Model\ListPayees200Response
```

List payees

Payees you can transfer to. A payee can receive transfers once `payoutsEnabled` is true. A profile-scoped key answers 403.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TreasuryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listPayees();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->listPayees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\ListPayees200Response**](../Model/ListPayees200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTopups()`

```php
listTopups($limit, $skip): \Zernio\Model\ListTopups200Response
```

List top-ups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TreasuryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int
$skip = 0; // int

try {
    $result = $apiInstance->listTopups($limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->listTopups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListTopups200Response**](../Model/ListTopups200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransfers()`

```php
listTransfers($limit, $skip): \Zernio\Model\ListTransfers200Response
```

List transfers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TreasuryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int
$skip = 0; // int

try {
    $result = $apiInstance->listTransfers($limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->listTransfers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListTransfers200Response**](../Model/ListTransfers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
