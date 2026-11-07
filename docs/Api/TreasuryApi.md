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
| [**createTransfer()**](TreasuryApi.md#createTransfer) | **POST** /v1/transfers | Create a transfer (removed) |
| [**getAutoRecharge()**](TreasuryApi.md#getAutoRecharge) | **GET** /v1/balance/auto-recharge | Get auto-recharge settings |
| [**getBalance()**](TreasuryApi.md#getBalance) | **GET** /v1/balance | Get balance |
| [**getPayoutBatch()**](TreasuryApi.md#getPayoutBatch) | **GET** /v1/payout-batches/{batchId} | Get a payout batch |
| [**getTopupInvoice()**](TreasuryApi.md#getTopupInvoice) | **GET** /v1/balance/top-ups/{topupId}/invoice | Get a top-up invoice |
| [**getTopupReceipt()**](TreasuryApi.md#getTopupReceipt) | **GET** /v1/balance/top-ups/{topupId}/receipt | Get a top-up receipt |
| [**getTopupStatement()**](TreasuryApi.md#getTopupStatement) | **GET** /v1/balance/top-ups/{topupId}/statement | Get a top-up invoice (alias) |
| [**getTransfer()**](TreasuryApi.md#getTransfer) | **GET** /v1/transfers/{transferId} | Get a transfer |
| [**listPayees()**](TreasuryApi.md#listPayees) | **GET** /v1/payees | List payees |
| [**listTopups()**](TreasuryApi.md#listTopups) | **GET** /v1/balance/top-ups | List top-ups |
| [**listTransfers()**](TreasuryApi.md#listTransfers) | **GET** /v1/transfers | List transfers |
| [**previewTopup()**](TreasuryApi.md#previewTopup) | **POST** /v1/balance/top-ups/preview | Preview a top-up&#39;s tax |
| [**updateAutoRecharge()**](TreasuryApi.md#updateAutoRecharge) | **PATCH** /v1/balance/auto-recharge | Update auto-recharge settings |


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

Charges the billing owner's saved card (the default one, or `paymentMethodId`) `amountCents` plus tax, while the payer is present, and credits your balance `amountCents`. There is no card fee.  Tax is added on top of the amount (`taxCents`, `totalCents`): VAT at 21% in Spain, at the customer's country rate for EU consumers; an EU business whose VAT id VIES confirms is reverse charged (no VAT, `reverseCharge: true`); outside the EU there is none.  The invoice also states the VAT in euros at the ECB rate of its date. Usage paid from the balance carries no further VAT. Get the figures before paying with `POST /v1/balance/top-ups/preview`.  Each top-up has an invoice, with VAT where it applies (`GET /v1/balance/top-ups/{topupId}/invoice`), and a card receipt (`GET /v1/balance/top-ups/{topupId}/receipt`).  - `status: succeeded`: the card was charged. `amountCents` is credited to `availableCents` within seconds. Transfers to payees can use it from 7 days after the charge. - `status: requires_action`: the bank asked for 3D Secure. Complete it with Stripe.js `handleNextAction({ clientSecret })`, then call `POST /v1/balance/top-ups/{topupId}/confirm`. One left unconfirmed is cancelled after 30 minutes.  ### Errors  - 402 `payment_required`: no saved card. - 402 `card_declined`: the bank's reason. - 400: `method: bank_transfer` (bank transfers are not available yet). - 400 `invalid_billing_address`: the billing address gives no tax location. Add it in Billing, then retry.  Needs an owner, admin or billing admin, signed in or through a full-access key they created.

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
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

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
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

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
createTransfer($create_transfer_request, $idempotency_key)
```

Create a transfer (removed)

Removed on 2026-11-06: the balance no longer pays creators. Every call answers 410.  Pay creators with one card payment per payout batch: `POST /v1/creator-campaigns/{campaignId}/payout-batches`. `GET /v1/transfers` still lists the transfers payout batches made.

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
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $apiInstance->createTransfer($create_transfer_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->createTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_transfer_request** | [**\Zernio\Model\CreateTransferRequest**](../Model/CreateTransferRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

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

## `getAutoRecharge()`

```php
getAutoRecharge(): \Zernio\Model\AutoRecharge
```

Get auto-recharge settings

Your balance's auto-recharge rule: when the balance drops below `belowCents`, the billing owner's saved card is charged back up to `toCents`, tax added on top as for any top-up.  Account credit you held when you moved to the balance pays a recharge first, without a card charge or invoice (see `recentCreditRecharges` on `GET /v1/balance`). The card is charged only once that credit is used up, and only while the balance is still below `belowCents`.  The first read gives the default rule, sized from your last 30 days of pay-per-use: below about a week of spend (at least $5), back up by about two more weeks (at least $20).  - 409 `balance_billing_required`: the account is not on the prepaid balance.  A profile-scoped key answers 403.

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
    $result = $apiInstance->getAutoRecharge();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->getAutoRecharge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\AutoRecharge**](../Model/AutoRecharge.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBalance()`

```php
getBalance(): \Zernio\Model\GetBalance200Response
```

Get balance

Returns your team's balance:  - the balance pay-per-use draws on - top-ups still waiting for payment - your latest top-ups and payout batch payments  A card top-up is in `availableCents` as soon as it is paid. The balance never pays creators: payouts are charged to your card per payout batch.  A card dispute or refund is debited from the available balance and can make it negative. New payout batches are refused until it is positive again.  A profile-scoped key answers 403, since the balance belongs to the whole team.

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

## `getTopupInvoice()`

```php
getTopupInvoice($topup_id): \Zernio\Model\GetTopupInvoice200Response
```

Get a top-up invoice

The invoice for a paid balance top-up: the PDF of the Stripe invoice it was paid through.  It shows the amount added to your balance and the tax charged on top: VAT where it applies, or a reverse charge note for an EU business with a valid VAT id. Usage paid from the balance carries no further VAT.  - `format: pdf` is the invoice PDF; `format: page` is its Stripe-hosted page when the PDF is not ready. - 404 before the top-up is paid, and for a payment with no invoice (top-ups before 2026-11-05, creator payout payments). Its card receipt is at getTopupReceipt.  The link is short-lived, so fetch it when you need it. A profile-scoped key answers 403.

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
    $result = $apiInstance->getTopupInvoice($topup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->getTopupInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **topup_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetTopupInvoice200Response**](../Model/GetTopupInvoice200Response.md)

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
getTopupReceipt($topup_id, $download): \SplFileObject
```

Get a top-up receipt

The receipt for a paid top-up or creator payout payment (`purpose: payout_batch`). `url` is the payment's invoice PDF when it has one (`format: pdf`), else Stripe's card receipt page (`format: page`); `invoiceUrl` and `receiptUrl` give each on its own.  The invoice alone is at getTopupInvoice. The link is short-lived, so fetch it when you need it. A profile-scoped key answers 403.

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
$download = True; // bool | true answers the card receipt itself as a PDF file (application/pdf, as an attachment) instead of the JSON links.

try {
    $result = $apiInstance->getTopupReceipt($topup_id, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->getTopupReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **topup_id** | **string**|  | |
| **download** | **bool**| true answers the card receipt itself as a PDF file (application/pdf, as an attachment) instead of the JSON links. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTopupStatement()`

```php
getTopupStatement($topup_id): \Zernio\Model\GetTopupInvoice200Response
```

Get a top-up invoice (alias)

Alias of getTopupInvoice, kept for clients written against its first name.  The invoice for a paid balance top-up: the PDF of the Stripe invoice it was paid through.  It shows the amount added to your balance and the tax charged on top: VAT where it applies, or a reverse charge note for an EU business with a valid VAT id. Usage paid from the balance carries no further VAT.  - `format: pdf` is the invoice PDF; `format: page` is its Stripe-hosted page when the PDF is not ready. - 404 before the top-up is paid, and for a payment with no invoice (top-ups before 2026-11-05, creator payout payments). Its card receipt is at getTopupReceipt.  The link is short-lived, so fetch it when you need it. A profile-scoped key answers 403.

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
    $result = $apiInstance->getTopupStatement($topup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->getTopupStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **topup_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetTopupInvoice200Response**](../Model/GetTopupInvoice200Response.md)

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

## `previewTopup()`

```php
previewTopup($preview_topup_request): \Zernio\Model\PreviewTopup200Response
```

Preview a top-up's tax

The tax a top-up of `amountCents` will carry and the total the card is charged, calculated by Stripe Tax from the billing owner's billing address and tax ids, as the top-up's invoice will be. Charges nothing.  - 400 `invalid_billing_address`: the billing address gives no tax location, so a top-up would be refused too.  Needs a full-access key or a signed-in session; a profile-scoped key answers 403.

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
$preview_topup_request = new \Zernio\Model\PreviewTopupRequest(); // \Zernio\Model\PreviewTopupRequest

try {
    $result = $apiInstance->previewTopup($preview_topup_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->previewTopup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **preview_topup_request** | [**\Zernio\Model\PreviewTopupRequest**](../Model/PreviewTopupRequest.md)|  | |

### Return type

[**\Zernio\Model\PreviewTopup200Response**](../Model/PreviewTopup200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAutoRecharge()`

```php
updateAutoRecharge($update_auto_recharge_request): \Zernio\Model\AutoRecharge
```

Update auto-recharge settings

Changes the auto-recharge rule. Omitted fields keep their value.  A declined recharge is retried 1 hour, 1 day and 3 days later, with an email each time. After the last retry fails, auto-recharge switches off (`disabledReason: payment_failed`) until the card is updated. A top-up you make yourself resets the retries.  A bank asking for 3D Secure counts as a decline: the charge happens while you are away, so the email asks you to top up in Billing.  A pay-per-use request that finds the balance at $0 runs the recharge first (with the rule on, a saved card and no retry pending) and goes through when the charge lands, so a new balance at $0 is charged on first use.  When this month's auto-recharges plus the next one would pass `monthlyLimitCents`, the card is not charged and you get one email that month. At $0, pay-per-use then answers 402 `usage_limit_reached`.  - 400: a field is out of range, or `toCents` is not more than $5 above `belowCents`. - 409 `balance_billing_required`: the account is not on the prepaid balance.  Needs an owner, admin or billing admin, signed in or through a full-access key they created.

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
$update_auto_recharge_request = new \Zernio\Model\UpdateAutoRechargeRequest(); // \Zernio\Model\UpdateAutoRechargeRequest

try {
    $result = $apiInstance->updateAutoRecharge($update_auto_recharge_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreasuryApi->updateAutoRecharge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_auto_recharge_request** | [**\Zernio\Model\UpdateAutoRechargeRequest**](../Model/UpdateAutoRechargeRequest.md)|  | |

### Return type

[**\Zernio\Model\AutoRecharge**](../Model/AutoRecharge.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
