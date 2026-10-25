# Zernio\AdRulesApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAdRule()**](AdRulesApi.md#createAdRule) | **POST** /v1/ads/rules | Create an ad rule |
| [**deleteAdRule()**](AdRulesApi.md#deleteAdRule) | **DELETE** /v1/ads/rules/{ruleId} | Delete an ad rule |
| [**getAdRule()**](AdRulesApi.md#getAdRule) | **GET** /v1/ads/rules/{ruleId} | Get an ad rule |
| [**listAdRuleRuns()**](AdRulesApi.md#listAdRuleRuns) | **GET** /v1/ads/rules/{ruleId}/runs | List an ad rule&#39;s runs |
| [**listAdRules()**](AdRulesApi.md#listAdRules) | **GET** /v1/ads/rules | List ad rules |
| [**previewAdRule()**](AdRulesApi.md#previewAdRule) | **POST** /v1/ads/rules/{ruleId}/preview | Preview an ad rule |
| [**updateAdRule()**](AdRulesApi.md#updateAdRule) | **PATCH** /v1/ads/rules/{ruleId} | Update an ad rule |


## `createAdRule()`

```php
createAdRule($create_ad_rule_request): \Zernio\Model\CreateAdRule201Response
```

Create an ad rule

Creates a rule that checks the campaigns or ad sets of one ad account on a schedule and acts on each one that meets every condition.  Rules support Meta, Google, TikTok, LinkedIn, Pinterest, X and Reddit ads connections. Each campaign or ad set is evaluated on its own, over the ad account's calendar days, from the metrics Zernio syncs. A rule can notify (the `ad_rule.triggered` webhook), and take at most one of `pause`, `activate` and `adjust_budget`. After acting on an object, the rule leaves that object alone for `cooldownMinutes`; a rule that pauses, activates or adjusts budgets needs a cooldown at least as long as its schedule.  `activate` only reactivates objects a rule paused, never ones you paused yourself, and only once the cooldown has passed since that pause. If you reactivate and pause such an object yourself between two runs of a rule, Zernio cannot tell your pause from the rule's, and an `activate` rule may reactivate it.  Use `POST /v1/ads/rules/{ruleId}/preview` to see what a rule would match before enabling it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_ad_rule_request = new \Zernio\Model\CreateAdRuleRequest(); // \Zernio\Model\CreateAdRuleRequest

try {
    $result = $apiInstance->createAdRule($create_ad_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdRulesApi->createAdRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_ad_rule_request** | [**\Zernio\Model\CreateAdRuleRequest**](../Model/CreateAdRuleRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateAdRule201Response**](../Model/CreateAdRule201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAdRule()`

```php
deleteAdRule($rule_id): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Delete an ad rule

Deletes a rule and its run history. Changes the rule already made on the platform stay.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 'rule_id_example'; // string

try {
    $result = $apiInstance->deleteAdRule($rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdRulesApi->deleteAdRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule_id** | **string**|  | |

### Return type

[**\Zernio\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdRule()`

```php
getAdRule($rule_id): \Zernio\Model\CreateAdRule201Response
```

Get an ad rule

Returns one ad rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 'rule_id_example'; // string

try {
    $result = $apiInstance->getAdRule($rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdRulesApi->getAdRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule_id** | **string**|  | |

### Return type

[**\Zernio\Model\CreateAdRule201Response**](../Model/CreateAdRule201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdRuleRuns()`

```php
listAdRuleRuns($rule_id, $limit, $skip): \Zernio\Model\ListAdRuleRuns200Response
```

List an ad rule's runs

Lists a rule's scheduled runs, newest first: what each run evaluated, matched and did.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 'rule_id_example'; // string
$limit = 20; // int
$skip = 0; // int

try {
    $result = $apiInstance->listAdRuleRuns($rule_id, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdRulesApi->listAdRuleRuns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule_id** | **string**|  | |
| **limit** | **int**|  | [optional] [default to 20] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListAdRuleRuns200Response**](../Model/ListAdRuleRuns200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdRules()`

```php
listAdRules($account_id, $ad_account_id, $limit, $skip): \Zernio\Model\ListAdRules200Response
```

List ad rules

Lists the ad rules on the profiles your key can reach, newest first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Only rules on this ads connection.
$ad_account_id = 'ad_account_id_example'; // string | Only rules watching this platform ad account.
$limit = 50; // int
$skip = 0; // int

try {
    $result = $apiInstance->listAdRules($account_id, $ad_account_id, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdRulesApi->listAdRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Only rules on this ads connection. | [optional] |
| **ad_account_id** | **string**| Only rules watching this platform ad account. | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListAdRules200Response**](../Model/ListAdRules200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewAdRule()`

```php
previewAdRule($rule_id): \Zernio\Model\AdRuleEvaluation
```

Preview an ad rule

Evaluates a rule against current metrics and returns what it would match right now, without acting on anything, sending a webhook or starting a cooldown. Works on disabled rules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 'rule_id_example'; // string

try {
    $result = $apiInstance->previewAdRule($rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdRulesApi->previewAdRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule_id** | **string**|  | |

### Return type

[**\Zernio\Model\AdRuleEvaluation**](../Model/AdRuleEvaluation.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdRule()`

```php
updateAdRule($rule_id, $update_ad_rule_request): \Zernio\Model\CreateAdRule201Response
```

Update an ad rule

Changes any field of a rule except its connection and ad account. Send `campaignIds: null` to check the whole ad account again. Changing the schedule, or enabling a disabled rule, moves the next run; re-sending `enabled: true` on an enabled rule does not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 'rule_id_example'; // string
$update_ad_rule_request = new \Zernio\Model\UpdateAdRuleRequest(); // \Zernio\Model\UpdateAdRuleRequest

try {
    $result = $apiInstance->updateAdRule($rule_id, $update_ad_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdRulesApi->updateAdRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule_id** | **string**|  | |
| **update_ad_rule_request** | [**\Zernio\Model\UpdateAdRuleRequest**](../Model/UpdateAdRuleRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateAdRule201Response**](../Model/CreateAdRule201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
