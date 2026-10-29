# Zernio\LedgerApi

Read-only access to double-entry ledger balances and entries for your team. Every operation belongs to the &#x60;money&#x60; resource group.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLedgerBalances()**](LedgerApi.md#getLedgerBalances) | **GET** /v1/ledger/balances | Get ledger balances |
| [**listLedgerEntries()**](LedgerApi.md#listLedgerEntries) | **GET** /v1/ledger/entries | List ledger entries |


## `getLedgerBalances()`

```php
getLedgerBalances($scope_type, $scope_id, $currency): \Zernio\Model\GetLedgerBalances200Response
```

Get ledger balances

Returns the balance of each bucket (for example accruing, owed, payable) for one ledger scope.  These return an empty balances object:  - A scope owned by another team. - For a profile-scoped key (or a member limited to some profiles), any scope other than `campaign` and `participant` scopes of campaigns under its profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scope_type = 'scope_type_example'; // string | Scope type, for example participant or campaign.
$scope_id = 'scope_id_example'; // string | Scope identifier.
$currency = 'usd'; // string | Lowercase ISO 4217 currency code.

try {
    $result = $apiInstance->getLedgerBalances($scope_type, $scope_id, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->getLedgerBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scope_type** | **string**| Scope type, for example participant or campaign. | |
| **scope_id** | **string**| Scope identifier. | |
| **currency** | **string**| Lowercase ISO 4217 currency code. | [optional] [default to &#39;usd&#39;] |

### Return type

[**\Zernio\Model\GetLedgerBalances200Response**](../Model/GetLedgerBalances200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLedgerEntries()`

```php
listLedgerEntries($scope_type, $scope_id, $kind, $reference_type, $reference_id, $limit, $skip): \Zernio\Model\ListLedgerEntries200Response
```

List ledger entries

Lists ledger entries for your team, newest first.  ### Filters  - scope (matches either side of the entry) - kind - the reference that caused the entry  ### Profile-scoped access  A profile-scoped key (or a member limited to some profiles) only sees entries of campaigns under its profiles and of their participants. Operator and platform scopes stay hidden from it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scope_type = 'scope_type_example'; // string
$scope_id = 'scope_id_example'; // string
$kind = 'kind_example'; // string
$reference_type = 'reference_type_example'; // string
$reference_id = 'reference_id_example'; // string
$limit = 50; // int
$skip = 0; // int

try {
    $result = $apiInstance->listLedgerEntries($scope_type, $scope_id, $kind, $reference_type, $reference_id, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->listLedgerEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scope_type** | **string**|  | [optional] |
| **scope_id** | **string**|  | [optional] |
| **kind** | **string**|  | [optional] |
| **reference_type** | **string**|  | [optional] |
| **reference_id** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListLedgerEntries200Response**](../Model/ListLedgerEntries200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
