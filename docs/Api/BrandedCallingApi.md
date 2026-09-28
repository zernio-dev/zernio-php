# Zernio\BrandedCallingApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachBrandedCallingNumbers()**](BrandedCallingApi.md#attachBrandedCallingNumbers) | **POST** /v1/branded-calling/identities/{id}/numbers | Attach numbers to a verified identity |
| [**confirmBrandedCallingAuthorizerEmail()**](BrandedCallingApi.md#confirmBrandedCallingAuthorizerEmail) | **POST** /v1/branded-calling/identities/{id}/verify-email/confirm | Confirm the authorizer&#39;s code |
| [**createBrandedCallingEnterprise()**](BrandedCallingApi.md#createBrandedCallingEnterprise) | **POST** /v1/branded-calling/enterprises | Register a business for Branded Calling |
| [**createBrandedCallingIdentity()**](BrandedCallingApi.md#createBrandedCallingIdentity) | **POST** /v1/branded-calling/identities | Create a caller identity |
| [**deleteBrandedCallingEnterprise()**](BrandedCallingApi.md#deleteBrandedCallingEnterprise) | **DELETE** /v1/branded-calling/enterprises/{id} | Delete a registered business |
| [**deleteBrandedCallingIdentity()**](BrandedCallingApi.md#deleteBrandedCallingIdentity) | **DELETE** /v1/branded-calling/identities/{id} | Delete a caller identity |
| [**detachBrandedCallingNumbers()**](BrandedCallingApi.md#detachBrandedCallingNumbers) | **DELETE** /v1/branded-calling/identities/{id}/numbers | Detach numbers from an identity |
| [**getBrandedCallingEnterprise()**](BrandedCallingApi.md#getBrandedCallingEnterprise) | **GET** /v1/branded-calling/enterprises/{id} | Get a registered business |
| [**getBrandedCallingIdentity()**](BrandedCallingApi.md#getBrandedCallingIdentity) | **GET** /v1/branded-calling/identities/{id} | Get a caller identity |
| [**listBrandedCallingCallReasons()**](BrandedCallingApi.md#listBrandedCallingCallReasons) | **GET** /v1/branded-calling/call-reasons | List pre-approved call reasons |
| [**listBrandedCallingEnterprises()**](BrandedCallingApi.md#listBrandedCallingEnterprises) | **GET** /v1/branded-calling/enterprises | List registered businesses |
| [**listBrandedCallingIdentities()**](BrandedCallingApi.md#listBrandedCallingIdentities) | **GET** /v1/branded-calling/identities | List caller identities |
| [**listBrandedCallingIdentityNumbers()**](BrandedCallingApi.md#listBrandedCallingIdentityNumbers) | **GET** /v1/branded-calling/identities/{id}/numbers | List the numbers on a caller identity |
| [**resendBrandedCallingAuthorizerCode()**](BrandedCallingApi.md#resendBrandedCallingAuthorizerCode) | **POST** /v1/branded-calling/identities/{id}/verify-email | Resend the authorizer&#39;s code |
| [**updateBrandedCallingIdentity()**](BrandedCallingApi.md#updateBrandedCallingIdentity) | **PATCH** /v1/branded-calling/identities/{id} | Edit or resubmit a caller identity |


## `attachBrandedCallingNumbers()`

```php
attachBrandedCallingNumbers($id, $attach_branded_calling_numbers_request): \Zernio\Model\ListBrandedCallingIdentityNumbers200Response
```

Attach numbers to a verified identity

Files a Letter of Authorization signed by you (Zernio is named as the authorized agent managing the numbers) and opens a vetting batch of up to 15 US numbers you own. The batch is all-or-nothing: one ineligible number refuses the whole call. Each number shows the identity once its own status reaches `verified`. A number belongs to one identity at a time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BrandedCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$attach_branded_calling_numbers_request = new \Zernio\Model\AttachBrandedCallingNumbersRequest(); // \Zernio\Model\AttachBrandedCallingNumbersRequest

try {
    $result = $apiInstance->attachBrandedCallingNumbers($id, $attach_branded_calling_numbers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandedCallingApi->attachBrandedCallingNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **attach_branded_calling_numbers_request** | [**\Zernio\Model\AttachBrandedCallingNumbersRequest**](../Model/AttachBrandedCallingNumbersRequest.md)|  | |

### Return type

[**\Zernio\Model\ListBrandedCallingIdentityNumbers200Response**](../Model/ListBrandedCallingIdentityNumbers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmBrandedCallingAuthorizerEmail()`

```php
confirmBrandedCallingAuthorizerEmail($id, $confirm_branded_calling_authorizer_email_request): \Zernio\Model\BrandedCallingIdentity
```

Confirm the authorizer's code

The last customer step. On success the stored references are filed and the identity is submitted to carrier vetting in the same call (`in_review`). If a later step fails the identity stays `pending_email_verification` with the email already verified; calling again resumes from that step.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BrandedCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$confirm_branded_calling_authorizer_email_request = new \Zernio\Model\ConfirmBrandedCallingAuthorizerEmailRequest(); // \Zernio\Model\ConfirmBrandedCallingAuthorizerEmailRequest

try {
    $result = $apiInstance->confirmBrandedCallingAuthorizerEmail($id, $confirm_branded_calling_authorizer_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandedCallingApi->confirmBrandedCallingAuthorizerEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **confirm_branded_calling_authorizer_email_request** | [**\Zernio\Model\ConfirmBrandedCallingAuthorizerEmailRequest**](../Model/ConfirmBrandedCallingAuthorizerEmailRequest.md)|  | |

### Return type

[**\Zernio\Model\BrandedCallingIdentity**](../Model/BrandedCallingIdentity.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBrandedCallingEnterprise()`

```php
createBrandedCallingEnterprise($create_branded_calling_enterprise_request): \Zernio\Model\BrandedCallingEnterprise
```

Register a business for Branded Calling

Stores the legal entity behind your caller identities. Nothing is filed with the carrier until the business's first identity passes review. Only businesses registered in the US or Canada qualify (a FEIN or Canadian equivalent is required); any other country returns `422`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BrandedCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_branded_calling_enterprise_request = new \Zernio\Model\CreateBrandedCallingEnterpriseRequest(); // \Zernio\Model\CreateBrandedCallingEnterpriseRequest

try {
    $result = $apiInstance->createBrandedCallingEnterprise($create_branded_calling_enterprise_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandedCallingApi->createBrandedCallingEnterprise: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_branded_calling_enterprise_request** | [**\Zernio\Model\CreateBrandedCallingEnterpriseRequest**](../Model/CreateBrandedCallingEnterpriseRequest.md)|  | |

### Return type

[**\Zernio\Model\BrandedCallingEnterprise**](../Model/BrandedCallingEnterprise.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBrandedCallingIdentity()`

```php
createBrandedCallingIdentity($create_branded_calling_identity_request): \Zernio\Model\BrandedCallingIdentity
```

Create a caller identity

A caller identity is what the callee sees: display name, logo and call reasons, backed by a registered business and three references the carrier vetting team phones. It starts in Zernio review (`requested`). Once approved, the carrier emails the authorizer a 6-digit code; confirm it with the verify-email endpoint and the identity goes into carrier vetting on its own. Track it with `GET` or the `branded_calling.identity.status_updated` webhook.  Billing: $100 per identity per month, the first month charged when the identity is filed with the carrier and not refunded if the carrier rejects it, then monthly while the identity exists. Branded calls add $0.10 each.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BrandedCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_branded_calling_identity_request = new \Zernio\Model\CreateBrandedCallingIdentityRequest(); // \Zernio\Model\CreateBrandedCallingIdentityRequest

try {
    $result = $apiInstance->createBrandedCallingIdentity($create_branded_calling_identity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandedCallingApi->createBrandedCallingIdentity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_branded_calling_identity_request** | [**\Zernio\Model\CreateBrandedCallingIdentityRequest**](../Model/CreateBrandedCallingIdentityRequest.md)|  | |

### Return type

[**\Zernio\Model\BrandedCallingIdentity**](../Model/BrandedCallingIdentity.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBrandedCallingEnterprise()`

```php
deleteBrandedCallingEnterprise($id): \Zernio\Model\DeleteBrandedCallingEnterprise200Response
```

Delete a registered business

Refused while the business still has caller identities (delete those first).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BrandedCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteBrandedCallingEnterprise($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandedCallingApi->deleteBrandedCallingEnterprise: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Zernio\Model\DeleteBrandedCallingEnterprise200Response**](../Model/DeleteBrandedCallingEnterprise200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBrandedCallingIdentity()`

```php
deleteBrandedCallingIdentity($id): \Zernio\Model\DeleteBrandedCallingEnterprise200Response
```

Delete a caller identity

Detaches its numbers and removes the identity at the carrier, which ends the monthly fee. Refused while an infringement claim is open.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BrandedCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteBrandedCallingIdentity($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandedCallingApi->deleteBrandedCallingIdentity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Zernio\Model\DeleteBrandedCallingEnterprise200Response**](../Model/DeleteBrandedCallingEnterprise200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `detachBrandedCallingNumbers()`

```php
detachBrandedCallingNumbers($id, $detach_branded_calling_numbers_request): \Zernio\Model\DetachBrandedCallingNumbers200Response
```

Detach numbers from an identity

Deregisters the numbers at the carrier and frees them for another identity. Up to 100 per call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BrandedCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$detach_branded_calling_numbers_request = new \Zernio\Model\DetachBrandedCallingNumbersRequest(); // \Zernio\Model\DetachBrandedCallingNumbersRequest

try {
    $result = $apiInstance->detachBrandedCallingNumbers($id, $detach_branded_calling_numbers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandedCallingApi->detachBrandedCallingNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **detach_branded_calling_numbers_request** | [**\Zernio\Model\DetachBrandedCallingNumbersRequest**](../Model/DetachBrandedCallingNumbersRequest.md)|  | |

### Return type

[**\Zernio\Model\DetachBrandedCallingNumbers200Response**](../Model/DetachBrandedCallingNumbers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBrandedCallingEnterprise()`

```php
getBrandedCallingEnterprise($id): \Zernio\Model\BrandedCallingEnterprise
```

Get a registered business

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BrandedCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBrandedCallingEnterprise($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandedCallingApi->getBrandedCallingEnterprise: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Zernio\Model\BrandedCallingEnterprise**](../Model/BrandedCallingEnterprise.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBrandedCallingIdentity()`

```php
getBrandedCallingIdentity($id): \Zernio\Model\BrandedCallingIdentity
```

Get a caller identity

Poll this for review and vetting progress, or subscribe to `branded_calling.identity.status_updated`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BrandedCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBrandedCallingIdentity($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandedCallingApi->getBrandedCallingIdentity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Zernio\Model\BrandedCallingIdentity**](../Model/BrandedCallingIdentity.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBrandedCallingCallReasons()`

```php
listBrandedCallingCallReasons(): \Zernio\Model\ListBrandedCallingCallReasons200Response
```

List pre-approved call reasons

The carrier catalogue of call reasons that pass vetting automatically. Any other wording is allowed on an identity but is vetted by hand.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BrandedCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listBrandedCallingCallReasons();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandedCallingApi->listBrandedCallingCallReasons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\ListBrandedCallingCallReasons200Response**](../Model/ListBrandedCallingCallReasons200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBrandedCallingEnterprises()`

```php
listBrandedCallingEnterprises(): \Zernio\Model\ListBrandedCallingEnterprises200Response
```

List registered businesses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BrandedCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listBrandedCallingEnterprises();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandedCallingApi->listBrandedCallingEnterprises: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\ListBrandedCallingEnterprises200Response**](../Model/ListBrandedCallingEnterprises200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBrandedCallingIdentities()`

```php
listBrandedCallingIdentities(): \Zernio\Model\ListBrandedCallingIdentities200Response
```

List caller identities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BrandedCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listBrandedCallingIdentities();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandedCallingApi->listBrandedCallingIdentities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\ListBrandedCallingIdentities200Response**](../Model/ListBrandedCallingIdentities200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBrandedCallingIdentityNumbers()`

```php
listBrandedCallingIdentityNumbers($id): \Zernio\Model\ListBrandedCallingIdentityNumbers200Response
```

List the numbers on a caller identity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BrandedCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listBrandedCallingIdentityNumbers($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandedCallingApi->listBrandedCallingIdentityNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Zernio\Model\ListBrandedCallingIdentityNumbers200Response**](../Model/ListBrandedCallingIdentityNumbers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendBrandedCallingAuthorizerCode()`

```php
resendBrandedCallingAuthorizerCode($id): \Zernio\Model\ResendBrandedCallingAuthorizerCode200Response
```

Resend the authorizer's code

Emails the authorizer a fresh 6-digit code (the previous one stops working). Only while the identity is `pending_email_verification`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BrandedCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->resendBrandedCallingAuthorizerCode($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandedCallingApi->resendBrandedCallingAuthorizerCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Zernio\Model\ResendBrandedCallingAuthorizerCode200Response**](../Model/ResendBrandedCallingAuthorizerCode200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBrandedCallingIdentity()`

```php
updateBrandedCallingIdentity($id, $update_branded_calling_identity_request): \Zernio\Model\BrandedCallingIdentity
```

Edit or resubmit a caller identity

Allowed while the identity is `requested`, `changes_requested` or `rejected`. Answering a change request (send `reviewAnswers` keyed by point id, and any edited fields) puts it back in review. On a carrier rejection the edits are applied at the carrier and the identity is resubmitted straight away.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\BrandedCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_branded_calling_identity_request = new \Zernio\Model\UpdateBrandedCallingIdentityRequest(); // \Zernio\Model\UpdateBrandedCallingIdentityRequest

try {
    $result = $apiInstance->updateBrandedCallingIdentity($id, $update_branded_calling_identity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandedCallingApi->updateBrandedCallingIdentity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_branded_calling_identity_request** | [**\Zernio\Model\UpdateBrandedCallingIdentityRequest**](../Model/UpdateBrandedCallingIdentityRequest.md)|  | |

### Return type

[**\Zernio\Model\BrandedCallingIdentity**](../Model/BrandedCallingIdentity.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
