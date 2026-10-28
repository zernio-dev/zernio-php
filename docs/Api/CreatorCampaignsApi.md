# Zernio\CreatorCampaignsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateCreatorCampaign()**](CreatorCampaignsApi.md#activateCreatorCampaign) | **POST** /v1/creator-campaigns/{campaignId}/activate | Activate creator campaign |
| [**approveCampaignSubmission()**](CreatorCampaignsApi.md#approveCampaignSubmission) | **POST** /v1/creator-campaigns/{campaignId}/submissions/{submissionId}/approve | Approve campaign submission |
| [**closeCreatorCampaign()**](CreatorCampaignsApi.md#closeCreatorCampaign) | **POST** /v1/creator-campaigns/{campaignId}/close | Close creator campaign |
| [**createCampaignAdjustment()**](CreatorCampaignsApi.md#createCampaignAdjustment) | **POST** /v1/creator-campaigns/{campaignId}/adjustments | Create campaign adjustment |
| [**createCampaignInviteLink()**](CreatorCampaignsApi.md#createCampaignInviteLink) | **POST** /v1/creator-campaigns/{campaignId}/invite-link | Create campaign invite link |
| [**createCampaignParticipant()**](CreatorCampaignsApi.md#createCampaignParticipant) | **POST** /v1/creator-campaigns/{campaignId}/participants | Invite campaign participant |
| [**createCampaignPayoutBatch()**](CreatorCampaignsApi.md#createCampaignPayoutBatch) | **POST** /v1/creator-campaigns/{campaignId}/payout-batches | Pay creators with one card payment |
| [**createCreatorCampaign()**](CreatorCampaignsApi.md#createCreatorCampaign) | **POST** /v1/creator-campaigns | Create creator campaign |
| [**getCampaignParticipant()**](CreatorCampaignsApi.md#getCampaignParticipant) | **GET** /v1/creator-campaigns/{campaignId}/participants/{participantId} | Get campaign participant |
| [**getCampaignReport()**](CreatorCampaignsApi.md#getCampaignReport) | **GET** /v1/creator-campaigns/{campaignId}/report | Get campaign report |
| [**getCampaignSubmission()**](CreatorCampaignsApi.md#getCampaignSubmission) | **GET** /v1/creator-campaigns/{campaignId}/submissions/{submissionId} | Get campaign submission |
| [**getCreatorCampaign()**](CreatorCampaignsApi.md#getCreatorCampaign) | **GET** /v1/creator-campaigns/{campaignId} | Get creator campaign |
| [**listCampaignLedger()**](CreatorCampaignsApi.md#listCampaignLedger) | **GET** /v1/creator-campaigns/{campaignId}/ledger | List campaign ledger |
| [**listCampaignParticipants()**](CreatorCampaignsApi.md#listCampaignParticipants) | **GET** /v1/creator-campaigns/{campaignId}/participants | List campaign participants |
| [**listCampaignPayables()**](CreatorCampaignsApi.md#listCampaignPayables) | **GET** /v1/creator-campaigns/{campaignId}/payables | List campaign payables |
| [**listCampaignPayoutBatches()**](CreatorCampaignsApi.md#listCampaignPayoutBatches) | **GET** /v1/creator-campaigns/{campaignId}/payout-batches | List payout batches |
| [**listCampaignSubmissions()**](CreatorCampaignsApi.md#listCampaignSubmissions) | **GET** /v1/creator-campaigns/{campaignId}/submissions | List campaign submissions |
| [**listCreatorCampaigns()**](CreatorCampaignsApi.md#listCreatorCampaigns) | **GET** /v1/creator-campaigns | List creator campaigns |
| [**pauseCreatorCampaign()**](CreatorCampaignsApi.md#pauseCreatorCampaign) | **POST** /v1/creator-campaigns/{campaignId}/pause | Pause creator campaign |
| [**raiseCreatorCampaignBudget()**](CreatorCampaignsApi.md#raiseCreatorCampaignBudget) | **POST** /v1/creator-campaigns/{campaignId}/budget | Raise creator campaign budget |
| [**reinstateCampaignParticipant()**](CreatorCampaignsApi.md#reinstateCampaignParticipant) | **POST** /v1/creator-campaigns/{campaignId}/participants/{participantId}/reinstate | Reinstate campaign participant |
| [**rejectCampaignSubmission()**](CreatorCampaignsApi.md#rejectCampaignSubmission) | **POST** /v1/creator-campaigns/{campaignId}/submissions/{submissionId}/reject | Reject campaign submission |
| [**removeCampaignParticipant()**](CreatorCampaignsApi.md#removeCampaignParticipant) | **POST** /v1/creator-campaigns/{campaignId}/participants/{participantId}/remove | Remove campaign participant |
| [**reopenCampaignSubmission()**](CreatorCampaignsApi.md#reopenCampaignSubmission) | **POST** /v1/creator-campaigns/{campaignId}/submissions/{submissionId}/reopen | Reopen campaign submission |
| [**settleCampaignParticipant()**](CreatorCampaignsApi.md#settleCampaignParticipant) | **POST** /v1/creator-campaigns/{campaignId}/participants/{participantId}/settle | Settle campaign participant |
| [**suspendCampaignParticipant()**](CreatorCampaignsApi.md#suspendCampaignParticipant) | **POST** /v1/creator-campaigns/{campaignId}/participants/{participantId}/suspend | Suspend campaign participant |
| [**updateCreatorCampaign()**](CreatorCampaignsApi.md#updateCreatorCampaign) | **PATCH** /v1/creator-campaigns/{campaignId} | Update creator campaign |


## `activateCreatorCampaign()`

```php
activateCreatorCampaign($campaign_id): \Zernio\Model\CreateCreatorCampaign201Response
```

Activate creator campaign

Moves a `draft` or `paused` campaign to `active`, where creators can join and submit posts and tracked views accrue earnings. Needs at least one platform and a budget above zero; any other starting state answers 409.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.

try {
    $result = $apiInstance->activateCreatorCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->activateCreatorCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |

### Return type

[**\Zernio\Model\CreateCreatorCampaign201Response**](../Model/CreateCreatorCampaign201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `approveCampaignSubmission()`

```php
approveCampaignSubmission($campaign_id, $submission_id, $idempotency_key): \Zernio\Model\ApproveCampaignSubmission200Response
```

Approve campaign submission

Approves a `tracking` or `pending_review` submission of an active campaign and fires `campaign_submission.approved`. The Zernio dashboard offers Approve only on `pending_review` (a post that needs a decision) and waits for `tracking` posts to get there; the API accepts `tracking` so an integration can approve early. What the post earned so far moves to owed and is held for the campaign's `holdDays`; later earnings post straight to owed. A per-post campaign pays `perApprovedPostCents` here. Any other state answers 409. The same post approved in another of your campaigns also answers 409 (`invalid_resource_state`, \"This post is already approved in another campaign of yours.\"), so one post never earns twice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$submission_id = 'submission_id_example'; // string | Submission ID.
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.

try {
    $result = $apiInstance->approveCampaignSubmission($campaign_id, $submission_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->approveCampaignSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **submission_id** | **string**| Submission ID. | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours. | [optional] |

### Return type

[**\Zernio\Model\ApproveCampaignSubmission200Response**](../Model/ApproveCampaignSubmission200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `closeCreatorCampaign()`

```php
closeCreatorCampaign($campaign_id): \Zernio\Model\CreateCreatorCampaign201Response
```

Close creator campaign

Closes an `active` or `paused` campaign for good and fires `creator_campaign.closed`. Open tracking windows are cancelled. A pool campaign is split among participants at this moment by their approved eligible views, so closing a pool campaign answers 409 while any post still awaits review. A campaign also closes by itself once `endsAt` passed and every tracking window had its final read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.

try {
    $result = $apiInstance->closeCreatorCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->closeCreatorCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |

### Return type

[**\Zernio\Model\CreateCreatorCampaign201Response**](../Model/CreateCreatorCampaign201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCampaignAdjustment()`

```php
createCampaignAdjustment($campaign_id, $create_campaign_adjustment_request, $idempotency_key): \Zernio\Model\CreateCampaignAdjustment201Response
```

Create campaign adjustment

Posts a manual adjustment to a participant's payable balance against the campaign budget: a positive amount credits the participant (a bonus), a negative one claws back. `cause` is kept on the ledger entry. A claw-back larger than the payable balance answers 409.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$create_campaign_adjustment_request = new \Zernio\Model\CreateCampaignAdjustmentRequest(); // \Zernio\Model\CreateCampaignAdjustmentRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.

try {
    $result = $apiInstance->createCampaignAdjustment($campaign_id, $create_campaign_adjustment_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->createCampaignAdjustment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **create_campaign_adjustment_request** | [**\Zernio\Model\CreateCampaignAdjustmentRequest**](../Model/CreateCampaignAdjustmentRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours. | [optional] |

### Return type

[**\Zernio\Model\CreateCampaignAdjustment201Response**](../Model/CreateCampaignAdjustment201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCampaignInviteLink()`

```php
createCampaignInviteLink($campaign_id): \Zernio\Model\CreateCampaignInviteLink201Response
```

Create campaign invite link

Creates the campaign's open invite link: anyone with it can join as a participant (up to `caps.maxParticipants`). Creating a new link revokes the previous one. The URL is returned only here. Answers 409 on a closed campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.

try {
    $result = $apiInstance->createCampaignInviteLink($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->createCampaignInviteLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |

### Return type

[**\Zernio\Model\CreateCampaignInviteLink201Response**](../Model/CreateCampaignInviteLink201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCampaignParticipant()`

```php
createCampaignParticipant($campaign_id, $create_campaign_participant_request, $idempotency_key): \Zernio\Model\CreateCampaignParticipant201Response
```

Invite campaign participant

Invites one creator and returns their personal invite URL. Send it to the creator: on that page they connect their accounts (read-only), submit posts and see their earnings. The URL is returned only here; inviting again creates no second link (409 for a creator already in the campaign). A creator is matched by email within your workspace, so the same person keeps one identity across your campaigns.  Answers 409 on a closed campaign and 403 `feature_not_available` once `caps.maxParticipants` is reached.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$create_campaign_participant_request = new \Zernio\Model\CreateCampaignParticipantRequest(); // \Zernio\Model\CreateCampaignParticipantRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.

try {
    $result = $apiInstance->createCampaignParticipant($campaign_id, $create_campaign_participant_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->createCampaignParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **create_campaign_participant_request** | [**\Zernio\Model\CreateCampaignParticipantRequest**](../Model/CreateCampaignParticipantRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours. | [optional] |

### Return type

[**\Zernio\Model\CreateCampaignParticipant201Response**](../Model/CreateCampaignParticipant201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCampaignPayoutBatch()`

```php
createCampaignPayoutBatch($campaign_id, $idempotency_key, $create_campaign_payout_batch_request): \Zernio\Model\CreateCampaignPayoutBatch201Response
```

Pay creators with one card payment

Pays exactly what is owed: every payable creator of a `treasury` campaign who finished payout setup (or only `participantIds`, minus `excludeParticipantIds`) is held in `settling`, and the response carries a Stripe Checkout `url` for the total plus the fee (4% per creator, 50 cent minimum). Once the card payment completes, each creator gets a transfer funded by that charge and the batch ends `paid` or `partially_failed`. A creator whose payouts were disabled before the payment landed is skipped and stays payable. If the Checkout expires unpaid (24 hours), every amount is payable again.  Card payouts are limited to $2,000.00 gross per rolling 30 days by default; over it the call answers 402 (\"Over your instant payout limit. Top up your balance to pay more this month, or contact support to raise the limit.\"). Nothing payable answers 400 (\"Nothing is payable.\"). Needs an owner, admin or billing admin, signed in or through a full-access key they created. Send an `Idempotency-Key` so a retry never opens a second batch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.
$create_campaign_payout_batch_request = new \Zernio\Model\CreateCampaignPayoutBatchRequest(); // \Zernio\Model\CreateCampaignPayoutBatchRequest

try {
    $result = $apiInstance->createCampaignPayoutBatch($campaign_id, $idempotency_key, $create_campaign_payout_batch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->createCampaignPayoutBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours. | [optional] |
| **create_campaign_payout_batch_request** | [**\Zernio\Model\CreateCampaignPayoutBatchRequest**](../Model/CreateCampaignPayoutBatchRequest.md)|  | [optional] |

### Return type

[**\Zernio\Model\CreateCampaignPayoutBatch201Response**](../Model/CreateCampaignPayoutBatch201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCreatorCampaign()`

```php
createCreatorCampaign($create_creator_campaign_request, $idempotency_key): \Zernio\Model\CreateCreatorCampaign201Response
```

Create creator campaign

Creates a campaign in `draft`. Creators are paid for verified performance of the posts they submit: Zernio tracks each post through a tracking window, scores its authenticity and records every earning in a ledger. Activate the campaign to start accepting submissions.  Creator campaigns run on usage-based billing; a workspace not on it gets 403 `feature_not_available`. `profileId` must be a profile this key can reach, otherwise 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_creator_campaign_request = new \Zernio\Model\CreateCreatorCampaignRequest(); // \Zernio\Model\CreateCreatorCampaignRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.

try {
    $result = $apiInstance->createCreatorCampaign($create_creator_campaign_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->createCreatorCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_creator_campaign_request** | [**\Zernio\Model\CreateCreatorCampaignRequest**](../Model/CreateCreatorCampaignRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours. | [optional] |

### Return type

[**\Zernio\Model\CreateCreatorCampaign201Response**](../Model/CreateCreatorCampaign201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignParticipant()`

```php
getCampaignParticipant($campaign_id, $participant_id): \Zernio\Model\GetCampaignParticipant200Response
```

Get campaign participant

Returns one participant with connected accounts, balances by state, flags and submission counts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$participant_id = 'participant_id_example'; // string | Participant ID.

try {
    $result = $apiInstance->getCampaignParticipant($campaign_id, $participant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->getCampaignParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **participant_id** | **string**| Participant ID. | |

### Return type

[**\Zernio\Model\GetCampaignParticipant200Response**](../Model/GetCampaignParticipant200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignReport()`

```php
getCampaignReport($campaign_id): \Zernio\Model\GetCampaignReport200Response
```

Get campaign report

Returns spend against budget, views, submission counts, the top ten participants by earnings and the authenticity score distribution.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.

try {
    $result = $apiInstance->getCampaignReport($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->getCampaignReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |

### Return type

[**\Zernio\Model\GetCampaignReport200Response**](../Model/GetCampaignReport200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignSubmission()`

```php
getCampaignSubmission($campaign_id, $submission_id): \Zernio\Model\GetCampaignSubmission200Response
```

Get campaign submission

Returns one submission with its per-sync samples (views, likes, comments, shares, saves).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$submission_id = 'submission_id_example'; // string | Submission ID.

try {
    $result = $apiInstance->getCampaignSubmission($campaign_id, $submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->getCampaignSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **submission_id** | **string**| Submission ID. | |

### Return type

[**\Zernio\Model\GetCampaignSubmission200Response**](../Model/GetCampaignSubmission200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreatorCampaign()`

```php
getCreatorCampaign($campaign_id): \Zernio\Model\CreateCreatorCampaign201Response
```

Get creator campaign

Returns the campaign with its budget consumption, participant count and submission counts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.

try {
    $result = $apiInstance->getCreatorCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->getCreatorCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |

### Return type

[**\Zernio\Model\CreateCreatorCampaign201Response**](../Model/CreateCreatorCampaign201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCampaignLedger()`

```php
listCampaignLedger($campaign_id, $participant_id, $kind, $limit, $skip): \Zernio\Model\ListCampaignLedger200Response
```

List campaign ledger

Lists ledger entries, newest first. Without `participantId` it lists every entry of the campaign: earnings drawn from the budget (accruals, per-post payments, pool shares, adjustments), the approvals, hold releases and settlements that move money between its participants' buckets, and their reversals. Pass `participantId` to narrow the list to one participant's entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$participant_id = 'participant_id_example'; // string | List only this participant's entries.
$kind = 'kind_example'; // string
$limit = 50; // int
$skip = 0; // int

try {
    $result = $apiInstance->listCampaignLedger($campaign_id, $participant_id, $kind, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->listCampaignLedger: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **participant_id** | **string**| List only this participant&#39;s entries. | [optional] |
| **kind** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListCampaignLedger200Response**](../Model/ListCampaignLedger200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCampaignParticipants()`

```php
listCampaignParticipants($campaign_id, $status, $limit, $skip): \Zernio\Model\ListCampaignParticipants200Response
```

List campaign participants

Lists the campaign's participants with their balances, flags and submission counts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$status = 'status_example'; // string
$limit = 50; // int
$skip = 0; // int

try {
    $result = $apiInstance->listCampaignParticipants($campaign_id, $status, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->listCampaignParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **status** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListCampaignParticipants200Response**](../Model/ListCampaignParticipants200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCampaignPayables()`

```php
listCampaignPayables($campaign_id): \Zernio\Model\ListCampaignPayables200Response
```

List campaign payables

Lists every participant with a payable balance (earnings past their hold), with the ledger entries behind it. Pay these, then record each payout with the settle endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.

try {
    $result = $apiInstance->listCampaignPayables($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->listCampaignPayables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |

### Return type

[**\Zernio\Model\ListCampaignPayables200Response**](../Model/ListCampaignPayables200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCampaignPayoutBatches()`

```php
listCampaignPayoutBatches($campaign_id, $limit, $skip): \Zernio\Model\ListCampaignPayoutBatches200Response
```

List payout batches

The campaign's payout batches, newest first, with each creator's item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$limit = 20; // int
$skip = 0; // int

try {
    $result = $apiInstance->listCampaignPayoutBatches($campaign_id, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->listCampaignPayoutBatches: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **limit** | **int**|  | [optional] [default to 20] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListCampaignPayoutBatches200Response**](../Model/ListCampaignPayoutBatches200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCampaignSubmissions()`

```php
listCampaignSubmissions($campaign_id, $status, $participant_id, $flag, $platform, $min_score, $max_score, $q, $sort, $order, $limit, $skip): \Zernio\Model\ListCampaignSubmissions200Response
```

List campaign submissions

Lists submitted posts with views, earnings, authenticity score and flags. Filter by status, participant, flag, platform or score range to build a review queue, for example `status=pending_review`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$status = 'status_example'; // string
$participant_id = 'participant_id_example'; // string
$flag = 'flag_example'; // string
$platform = 'platform_example'; // string
$min_score = 56; // int
$max_score = 56; // int
$q = 'q_example'; // string | Only submissions whose creator name or post link contains this text, ignoring case.
$sort = 'submittedAt'; // string | What to sort by. Posts with no value to sort by (not read yet, not scored) come last in either direction.
$order = 'desc'; // string
$limit = 50; // int
$skip = 0; // int

try {
    $result = $apiInstance->listCampaignSubmissions($campaign_id, $status, $participant_id, $flag, $platform, $min_score, $max_score, $q, $sort, $order, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->listCampaignSubmissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **status** | **string**|  | [optional] |
| **participant_id** | **string**|  | [optional] |
| **flag** | **string**|  | [optional] |
| **platform** | **string**|  | [optional] |
| **min_score** | **int**|  | [optional] |
| **max_score** | **int**|  | [optional] |
| **q** | **string**| Only submissions whose creator name or post link contains this text, ignoring case. | [optional] |
| **sort** | **string**| What to sort by. Posts with no value to sort by (not read yet, not scored) come last in either direction. | [optional] [default to &#39;submittedAt&#39;] |
| **order** | **string**|  | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListCampaignSubmissions200Response**](../Model/ListCampaignSubmissions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCreatorCampaigns()`

```php
listCreatorCampaigns($status, $profile_id, $q, $limit, $skip): \Zernio\Model\ListCreatorCampaigns200Response
```

List creator campaigns

Lists the team's campaigns in the profiles this key can reach, newest first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string
$profile_id = 'profile_id_example'; // string | Only campaigns in this profile.
$q = 'q_example'; // string | Only campaigns whose name or brand name contains this text, ignoring case.
$limit = 50; // int
$skip = 0; // int

try {
    $result = $apiInstance->listCreatorCampaigns($status, $profile_id, $q, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->listCreatorCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **string**|  | [optional] |
| **profile_id** | **string**| Only campaigns in this profile. | [optional] |
| **q** | **string**| Only campaigns whose name or brand name contains this text, ignoring case. | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListCreatorCampaigns200Response**](../Model/ListCreatorCampaigns200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pauseCreatorCampaign()`

```php
pauseCreatorCampaign($campaign_id): \Zernio\Model\CreateCreatorCampaign201Response
```

Pause creator campaign

Moves an `active` campaign to `paused`: no new submissions, and approvals answer 409 until the campaign is activated again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.

try {
    $result = $apiInstance->pauseCreatorCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->pauseCreatorCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |

### Return type

[**\Zernio\Model\CreateCreatorCampaign201Response**](../Model/CreateCreatorCampaign201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `raiseCreatorCampaignBudget()`

```php
raiseCreatorCampaignBudget($campaign_id, $raise_creator_campaign_budget_request, $idempotency_key): \Zernio\Model\CreateCreatorCampaign201Response
```

Raise creator campaign budget

Raises the budget of a campaign that is `draft`, `active` or `paused`. Only the budget changes; the pay terms stay as creators joined them, which `PATCH` refuses to change once the campaign is live. The new `budgetCents` must be above the current budget, otherwise 400 `invalid_field_value`. When it is also above what the campaign has spent, `budgetExhaustedAt` is cleared and earnings that stopped at the old budget resume. A closed campaign answers 409 `invalid_resource_state`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$raise_creator_campaign_budget_request = new \Zernio\Model\RaiseCreatorCampaignBudgetRequest(); // \Zernio\Model\RaiseCreatorCampaignBudgetRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.

try {
    $result = $apiInstance->raiseCreatorCampaignBudget($campaign_id, $raise_creator_campaign_budget_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->raiseCreatorCampaignBudget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **raise_creator_campaign_budget_request** | [**\Zernio\Model\RaiseCreatorCampaignBudgetRequest**](../Model/RaiseCreatorCampaignBudgetRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours. | [optional] |

### Return type

[**\Zernio\Model\CreateCreatorCampaign201Response**](../Model/CreateCreatorCampaign201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reinstateCampaignParticipant()`

```php
reinstateCampaignParticipant($campaign_id, $participant_id): \Zernio\Model\GetCampaignParticipant200Response
```

Reinstate campaign participant

Reinstates a `suspended` participant: they can submit posts again. Any other status answers 409; a removed participant stays removed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$participant_id = 'participant_id_example'; // string | Participant ID.

try {
    $result = $apiInstance->reinstateCampaignParticipant($campaign_id, $participant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->reinstateCampaignParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **participant_id** | **string**| Participant ID. | |

### Return type

[**\Zernio\Model\GetCampaignParticipant200Response**](../Model/GetCampaignParticipant200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectCampaignSubmission()`

```php
rejectCampaignSubmission($campaign_id, $submission_id, $reject_campaign_submission_request, $idempotency_key): \Zernio\Model\ApproveCampaignSubmission200Response
```

Reject campaign submission

Rejects a submission (also one already approved) and fires `campaign_submission.rejected`. Its tracking window is cancelled and its unsettled earnings return to the campaign budget. Rejecting a rejected submission returns it unchanged; an expired or withdrawn one answers 409.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$submission_id = 'submission_id_example'; // string | Submission ID.
$reject_campaign_submission_request = new \Zernio\Model\RejectCampaignSubmissionRequest(); // \Zernio\Model\RejectCampaignSubmissionRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.

try {
    $result = $apiInstance->rejectCampaignSubmission($campaign_id, $submission_id, $reject_campaign_submission_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->rejectCampaignSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **submission_id** | **string**| Submission ID. | |
| **reject_campaign_submission_request** | [**\Zernio\Model\RejectCampaignSubmissionRequest**](../Model/RejectCampaignSubmissionRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours. | [optional] |

### Return type

[**\Zernio\Model\ApproveCampaignSubmission200Response**](../Model/ApproveCampaignSubmission200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeCampaignParticipant()`

```php
removeCampaignParticipant($campaign_id, $participant_id): \Zernio\Model\GetCampaignParticipant200Response
```

Remove campaign participant

Removes the participant from the campaign. Their earnings stay in the ledger. Removing an already removed participant returns it unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$participant_id = 'participant_id_example'; // string | Participant ID.

try {
    $result = $apiInstance->removeCampaignParticipant($campaign_id, $participant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->removeCampaignParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **participant_id** | **string**| Participant ID. | |

### Return type

[**\Zernio\Model\GetCampaignParticipant200Response**](../Model/GetCampaignParticipant200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reopenCampaignSubmission()`

```php
reopenCampaignSubmission($campaign_id, $submission_id, $idempotency_key): \Zernio\Model\ApproveCampaignSubmission200Response
```

Reopen campaign submission

Puts a rejected submission back to `pending_review` so it can be decided again. Its tracking window resumes, so it works only while that window has not ended; otherwise 409 `invalid_resource_state` (\"This post's tracking window has ended.\"). A post that earned money which was already paid out cannot be reopened, and neither can a post of a closed campaign. Reopening a submission that is already `pending_review` returns it unchanged; any other status answers 409. No webhook fires.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$submission_id = 'submission_id_example'; // string | Submission ID.
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.

try {
    $result = $apiInstance->reopenCampaignSubmission($campaign_id, $submission_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->reopenCampaignSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **submission_id** | **string**| Submission ID. | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours. | [optional] |

### Return type

[**\Zernio\Model\ApproveCampaignSubmission200Response**](../Model/ApproveCampaignSubmission200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settleCampaignParticipant()`

```php
settleCampaignParticipant($campaign_id, $participant_id, $settle_campaign_participant_request, $idempotency_key): \Zernio\Model\SettleCampaignParticipant201Response
```

Settle campaign participant

Records a payout of the participant's payable balance and fires `campaign_payout.settled`. Omit `amountCents` to settle the whole payable balance; an amount above it answers 400, and nothing payable answers 409.  - `none` settlement: records a payout you made elsewhere. - `external` settlement: pay from your own rails when `campaign_payout.payable` fires, then   call this with your payout id in `externalReference` (required in this mode). - `treasury` settlement: transfers the amount from your Zernio balance to the creator's   connected Stripe account, then records it with the Stripe transfer id as `externalReference`.   The transfer fee (4%, $0.50 minimum) is added on top: the creator receives the full amount   and your balance is debited `totalCents`. The creator must have finished payout setup from   their campaign page (409 otherwise), and a balance that does not cover the amount plus the   fee answers 402. While Stripe confirms the transfer the amount sits in the participant's   `settling` balance: a reject in that window cannot reverse it. If Stripe refuses the transfer   the amount returns to payable; if Stripe does not answer, the amount stays in `settling` and   the next settle call for this participant finishes that payout first (even with nothing   payable left). A retry asking for a different `amountCents` than the payout in progress   answers 409 with the amount in progress, and a settle while another request is still   waiting on Stripe for the same payout answers 409 (\"This payout is being sent to Stripe   right now. Try again in a minute.\"). A payout Stripe has not confirmed after 24 hours answers   409 (\"This payout is being confirmed with Stripe. Try again after the next reconciliation   (within 24 hours).\") until the daily reconciliation finishes it: settled if Stripe made the   transfer, returned to payable if it did not.   Set `recordOnly: true` to record a payout you made yourself instead of moving money through   the treasury (the webhook then carries `recorded: true`).   A treasury payout needs an owner, admin or billing admin, signed in or through a full-access   key they created (403 otherwise); recording with `recordOnly` does not. A creator held by an unfinished   payout batch answers 409 (\"This creator is in a card payout that is not finished yet.\").  Send an `Idempotency-Key` so a retry never records the payout twice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$participant_id = 'participant_id_example'; // string | Participant ID.
$settle_campaign_participant_request = new \Zernio\Model\SettleCampaignParticipantRequest(); // \Zernio\Model\SettleCampaignParticipantRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.

try {
    $result = $apiInstance->settleCampaignParticipant($campaign_id, $participant_id, $settle_campaign_participant_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->settleCampaignParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **participant_id** | **string**| Participant ID. | |
| **settle_campaign_participant_request** | [**\Zernio\Model\SettleCampaignParticipantRequest**](../Model/SettleCampaignParticipantRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours. | [optional] |

### Return type

[**\Zernio\Model\SettleCampaignParticipant201Response**](../Model/SettleCampaignParticipant201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `suspendCampaignParticipant()`

```php
suspendCampaignParticipant($campaign_id, $participant_id): \Zernio\Model\GetCampaignParticipant200Response
```

Suspend campaign participant

Suspends an `active` participant: they can no longer submit posts. Any other status answers 409.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$participant_id = 'participant_id_example'; // string | Participant ID.

try {
    $result = $apiInstance->suspendCampaignParticipant($campaign_id, $participant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->suspendCampaignParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **participant_id** | **string**| Participant ID. | |

### Return type

[**\Zernio\Model\GetCampaignParticipant200Response**](../Model/GetCampaignParticipant200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCreatorCampaign()`

```php
updateCreatorCampaign($campaign_id, $update_creator_campaign_request): \Zernio\Model\CreateCreatorCampaign201Response
```

Update creator campaign

Updates any subset of the campaign's settings. `economics` (and with it the campaign type) can only change while the campaign is a draft; afterwards that answers 409, and a live campaign's budget is raised with `POST /v1/creator-campaigns/{campaignId}/budget`. An empty body answers 400.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CreatorCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$update_creator_campaign_request = new \Zernio\Model\UpdateCreatorCampaignRequest(); // \Zernio\Model\UpdateCreatorCampaignRequest

try {
    $result = $apiInstance->updateCreatorCampaign($campaign_id, $update_creator_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->updateCreatorCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **update_creator_campaign_request** | [**\Zernio\Model\UpdateCreatorCampaignRequest**](../Model/UpdateCreatorCampaignRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCreatorCampaign201Response**](../Model/CreateCreatorCampaign201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
