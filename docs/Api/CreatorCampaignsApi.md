# Zernio\CreatorCampaignsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateCreatorCampaign()**](CreatorCampaignsApi.md#activateCreatorCampaign) | **POST** /v1/creator-campaigns/{campaignId}/activate | Activate creator campaign |
| [**approveCampaignDraft()**](CreatorCampaignsApi.md#approveCampaignDraft) | **POST** /v1/creator-campaigns/{campaignId}/drafts/{draftId}/approve | Approve campaign draft |
| [**approveCampaignParticipant()**](CreatorCampaignsApi.md#approveCampaignParticipant) | **POST** /v1/creator-campaigns/{campaignId}/participants/{participantId}/approve | Approve pending campaign participant |
| [**approveCampaignSample()**](CreatorCampaignsApi.md#approveCampaignSample) | **POST** /v1/creator-campaigns/{campaignId}/samples/{sampleId}/approve | Approve campaign sample request |
| [**approveCampaignSubmission()**](CreatorCampaignsApi.md#approveCampaignSubmission) | **POST** /v1/creator-campaigns/{campaignId}/submissions/{submissionId}/approve | Approve campaign submission |
| [**closeCreatorCampaign()**](CreatorCampaignsApi.md#closeCreatorCampaign) | **POST** /v1/creator-campaigns/{campaignId}/close | Close creator campaign |
| [**createCampaignAdjustment()**](CreatorCampaignsApi.md#createCampaignAdjustment) | **POST** /v1/creator-campaigns/{campaignId}/adjustments | Create campaign adjustment |
| [**createCampaignInviteLink()**](CreatorCampaignsApi.md#createCampaignInviteLink) | **POST** /v1/creator-campaigns/{campaignId}/invite-link | Create campaign invite link |
| [**createCampaignParticipant()**](CreatorCampaignsApi.md#createCampaignParticipant) | **POST** /v1/creator-campaigns/{campaignId}/participants | Invite campaign participant |
| [**createCampaignPayoutBatch()**](CreatorCampaignsApi.md#createCampaignPayoutBatch) | **POST** /v1/creator-campaigns/{campaignId}/payout-batches | Pay creators with one card payment |
| [**createCreatorCampaign()**](CreatorCampaignsApi.md#createCreatorCampaign) | **POST** /v1/creator-campaigns | Create creator campaign |
| [**declineCampaignSample()**](CreatorCampaignsApi.md#declineCampaignSample) | **POST** /v1/creator-campaigns/{campaignId}/samples/{sampleId}/decline | Decline campaign sample request |
| [**denyCampaignParticipant()**](CreatorCampaignsApi.md#denyCampaignParticipant) | **POST** /v1/creator-campaigns/{campaignId}/participants/{participantId}/deny | Deny pending campaign participant |
| [**getCampaignAdResults()**](CreatorCampaignsApi.md#getCampaignAdResults) | **GET** /v1/creator-campaigns/{campaignId}/ad-results | Get campaign ad results |
| [**getCampaignDraft()**](CreatorCampaignsApi.md#getCampaignDraft) | **GET** /v1/creator-campaigns/{campaignId}/drafts/{draftId} | Get campaign draft |
| [**getCampaignParticipant()**](CreatorCampaignsApi.md#getCampaignParticipant) | **GET** /v1/creator-campaigns/{campaignId}/participants/{participantId} | Get campaign participant |
| [**getCampaignReport()**](CreatorCampaignsApi.md#getCampaignReport) | **GET** /v1/creator-campaigns/{campaignId}/report | Get campaign report |
| [**getCampaignSubmission()**](CreatorCampaignsApi.md#getCampaignSubmission) | **GET** /v1/creator-campaigns/{campaignId}/submissions/{submissionId} | Get campaign submission |
| [**getCreatorCampaign()**](CreatorCampaignsApi.md#getCreatorCampaign) | **GET** /v1/creator-campaigns/{campaignId} | Get creator campaign |
| [**launchCampaignAds()**](CreatorCampaignsApi.md#launchCampaignAds) | **POST** /v1/creator-campaigns/{campaignId}/ads/launch | Launch campaign posts as ads |
| [**listCampaignDrafts()**](CreatorCampaignsApi.md#listCampaignDrafts) | **GET** /v1/creator-campaigns/{campaignId}/drafts | List campaign drafts |
| [**listCampaignLedger()**](CreatorCampaignsApi.md#listCampaignLedger) | **GET** /v1/creator-campaigns/{campaignId}/ledger | List campaign ledger |
| [**listCampaignOrders()**](CreatorCampaignsApi.md#listCampaignOrders) | **GET** /v1/creator-campaigns/{campaignId}/orders | List campaign orders |
| [**listCampaignParticipants()**](CreatorCampaignsApi.md#listCampaignParticipants) | **GET** /v1/creator-campaigns/{campaignId}/participants | List campaign participants |
| [**listCampaignPayables()**](CreatorCampaignsApi.md#listCampaignPayables) | **GET** /v1/creator-campaigns/{campaignId}/payables | List campaign payables |
| [**listCampaignPayoutBatches()**](CreatorCampaignsApi.md#listCampaignPayoutBatches) | **GET** /v1/creator-campaigns/{campaignId}/payout-batches | List payout batches |
| [**listCampaignSamples()**](CreatorCampaignsApi.md#listCampaignSamples) | **GET** /v1/creator-campaigns/{campaignId}/samples | List campaign sample requests |
| [**listCampaignSubmissions()**](CreatorCampaignsApi.md#listCampaignSubmissions) | **GET** /v1/creator-campaigns/{campaignId}/submissions | List campaign submissions |
| [**listCreatorCampaigns()**](CreatorCampaignsApi.md#listCreatorCampaigns) | **GET** /v1/creator-campaigns | List creator campaigns |
| [**moveCampaignParticipant()**](CreatorCampaignsApi.md#moveCampaignParticipant) | **POST** /v1/creator-campaigns/{campaignId}/participants/{participantId}/move | Move participant to another campaign |
| [**pauseCreatorCampaign()**](CreatorCampaignsApi.md#pauseCreatorCampaign) | **POST** /v1/creator-campaigns/{campaignId}/pause | Pause creator campaign |
| [**previewCampaignPayoutBatch()**](CreatorCampaignsApi.md#previewCampaignPayoutBatch) | **POST** /v1/creator-campaigns/{campaignId}/payout-batches/preview | Preview a payout batch |
| [**raiseCreatorCampaignBudget()**](CreatorCampaignsApi.md#raiseCreatorCampaignBudget) | **POST** /v1/creator-campaigns/{campaignId}/budget | Raise creator campaign budget |
| [**reinstateCampaignParticipant()**](CreatorCampaignsApi.md#reinstateCampaignParticipant) | **POST** /v1/creator-campaigns/{campaignId}/participants/{participantId}/reinstate | Reinstate campaign participant |
| [**rejectCampaignDraft()**](CreatorCampaignsApi.md#rejectCampaignDraft) | **POST** /v1/creator-campaigns/{campaignId}/drafts/{draftId}/reject | Reject campaign draft |
| [**rejectCampaignSubmission()**](CreatorCampaignsApi.md#rejectCampaignSubmission) | **POST** /v1/creator-campaigns/{campaignId}/submissions/{submissionId}/reject | Reject campaign submission |
| [**removeCampaignParticipant()**](CreatorCampaignsApi.md#removeCampaignParticipant) | **POST** /v1/creator-campaigns/{campaignId}/participants/{participantId}/remove | Remove campaign participant |
| [**reopenCampaignSubmission()**](CreatorCampaignsApi.md#reopenCampaignSubmission) | **POST** /v1/creator-campaigns/{campaignId}/submissions/{submissionId}/reopen | Reopen campaign submission |
| [**requestCampaignDraftRevision()**](CreatorCampaignsApi.md#requestCampaignDraftRevision) | **POST** /v1/creator-campaigns/{campaignId}/drafts/{draftId}/request-revision | Request changes on a campaign draft |
| [**resendCampaignParticipantInvite()**](CreatorCampaignsApi.md#resendCampaignParticipantInvite) | **POST** /v1/creator-campaigns/{campaignId}/participants/{participantId}/resend-invite | Resend campaign participant invite |
| [**settleCampaignParticipant()**](CreatorCampaignsApi.md#settleCampaignParticipant) | **POST** /v1/creator-campaigns/{campaignId}/participants/{participantId}/settle | Settle campaign participant |
| [**shipCampaignSample()**](CreatorCampaignsApi.md#shipCampaignSample) | **POST** /v1/creator-campaigns/{campaignId}/samples/{sampleId}/ship | Mark campaign sample shipped |
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

## `approveCampaignDraft()`

```php
approveCampaignDraft($campaign_id, $draft_id, $idempotency_key): \Zernio\Model\ApproveCampaignDraft200Response
```

Approve campaign draft

Approves a `submitted` draft version, emails the creator and fires `campaign_draft.approved`. The creator can then publish it and submit the live post with this `draftId`; each approved draft backs one post only.  Each version is decided once: a version that is no longer `submitted` answers 409.

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
$draft_id = 'draft_id_example'; // string | Draft version ID.
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->approveCampaignDraft($campaign_id, $draft_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->approveCampaignDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **draft_id** | **string**| Draft version ID. | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

### Return type

[**\Zernio\Model\ApproveCampaignDraft200Response**](../Model/ApproveCampaignDraft200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `approveCampaignParticipant()`

```php
approveCampaignParticipant($campaign_id, $participant_id, $idempotency_key): \Zernio\Model\GetCampaignParticipant200Response
```

Approve pending campaign participant

Lets a `pending` creator into the campaign: they become `active`, `joinedAt` is set, the creator is emailed and `campaign_participant.approved` fires (not `campaign_participant.joined`).  A creator is `pending` when they joined through the open link of a campaign with `joinApproval: manual`. Personal invites are never held.  ### Creator limit  Pending creators do not count toward `caps.maxParticipants`; the limit is checked here instead. A full campaign refuses the approval with 403 `feature_not_available` and the creator stays `pending`.  ### Errors  - 403 `feature_not_available`: the campaign reached `caps.maxParticipants`. - 409 `invalid_resource_state`: the participant is not `pending`, or the campaign is closed.

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
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->approveCampaignParticipant($campaign_id, $participant_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->approveCampaignParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **participant_id** | **string**| Participant ID. | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

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

## `approveCampaignSample()`

```php
approveCampaignSample($campaign_id, $sample_id, $idempotency_key): \Zernio\Model\ApproveCampaignSample200Response
```

Approve campaign sample request

Approves a `pending` sample request. Zernio creates a 100%-off, single-use discount code (`SAMPLE-XXXXXXXX`) limited to the requested product in the campaign's store (Shopify or WooCommerce), returns it as `discountCode`, emails it to the creator and fires `campaign_sample.approved`. The creator redeems it at checkout.  The code is created before the request changes, so when the store refuses (missing discount permission, an unsupported store, a store error) its error is returned and the request stays `pending`. The approval also starts the `sampleContentDueDays` clock behind `contentDueAt` and `contentOwed`.  ### Errors  - 400 `platform_not_supported`: the store cannot create discounts. - 403: the store has not granted the permission discounts need. - 409 `invalid_resource_state`: the request is not `pending`. - 502 `platform_api_error`: the store is unavailable.

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
$sample_id = 'sample_id_example'; // string | Sample request ID.
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->approveCampaignSample($campaign_id, $sample_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->approveCampaignSample: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **sample_id** | **string**| Sample request ID. | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

### Return type

[**\Zernio\Model\ApproveCampaignSample200Response**](../Model/ApproveCampaignSample200Response.md)

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

Approves a `tracking` or `pending_review` submission of an active campaign and fires `campaign_submission.approved`.  The Zernio dashboard offers Approve only on `pending_review` (a post that needs a decision) and waits for `tracking` posts to get there. The API accepts `tracking` so an integration can approve early.  ### Earnings  - What the post earned so far moves to owed and is held for the campaign's `holdDays`. - Later earnings post straight to owed. - A per-post campaign pays `perApprovedPostCents` here.  ### Errors  - 409: the submission is in any other state. - 409 (`invalid_resource_state`, \"This post is already approved in another campaign of yours.\"): the same post was approved in another of your campaigns, so one post never earns twice.

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
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

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
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

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

Closes an `active` or `paused` campaign for good and fires `creator_campaign.closed`. Open tracking windows are cancelled.  A pool campaign is split among participants at this moment by their approved eligible views. Closing a pool campaign therefore answers 409 while any post still awaits review.  A campaign also closes by itself once `endsAt` passed and every tracking window had its final read.

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
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

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
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

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

Invites one creator and returns their personal invite URL.  Send the URL to the creator. On that page they connect their accounts (read-only), submit posts and see their earnings.  ### Invite rules  - The URL is returned only here; inviting again creates no second link. - A creator is matched by email within your workspace, so the same person keeps one identity across your campaigns.  ### Errors  - 409: the creator is already in the campaign, or the campaign is closed. - 403 `feature_not_available`: `caps.maxParticipants` is reached.

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
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

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
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

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

Pays exactly what is owed to the creators of a `treasury` campaign by charging the billing owner's saved card, with no redirect. Payouts are never paid from your balance.  ### How it works  1. Every payable creator who finished payout setup (or only `participantIds`, minus `excludeParticipantIds`) is held in `settling`. 2. The saved card (the default one, or `paymentMethodId`) pays one invoice while the payer is present: the payouts, plus the fee (4%, 50 cents minimum per payout) and the VAT on the fee where it applies. 3. Card payments are held 7 days against chargebacks (`releasesAt`). Then each creator gets a transfer funded by the charge, and the batch ends `paid` or `partially_failed`.  Zernio collects the payouts and pays each creator on your behalf and in your name, so the payouts carry no VAT.  A creator whose payouts were disabled before the hold ended is skipped and stays payable. A charge refunded or disputed during the hold pays nobody: every amount is payable again.  Preview the charge with `POST /v1/creator-campaigns/{campaignId}/payout-batches/preview`.  ### 3D Secure  `payment.status: requires_action` means the bank asked the payer to confirm. Complete it with Stripe.js `handleNextAction({ clientSecret })`, then call `POST /v1/payout-batches/{batchId}/confirm`.  One left unfinished is cancelled after 30 minutes and every amount is payable again. Cancel it sooner with `POST /v1/payout-batches/{batchId}/cancel`.  ### Limits and errors  - 402 `payment_required`: no saved card. Nothing is held. - 402 `card_declined`: the bank's reason; every amount is payable again. - 402: card payouts are limited to $10,000.00 gross per rolling 30 days by default. Over it the call answers \"Over your instant payout limit for the last 30 days. Contact support to raise it.\" - 402: your balance is negative after a dispute or refund. - 400: nothing payable (\"Nothing is payable.\"). - 400 `invalid_billing_address`: Stripe cannot place your billing address, so it cannot tax the fee. Nothing is held. - 429 `payment_attempts_limited`: five card payments were declined in 24 hours. Nothing is held and nothing reaches the bank until `Retry-After` runs out.  ### Access and retries  Needs an owner, admin or billing admin, signed in or through a full-access key they created.  Send an `Idempotency-Key` so a retry never opens a second batch.

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
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.
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
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |
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
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

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
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

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

## `declineCampaignSample()`

```php
declineCampaignSample($campaign_id, $sample_id, $decline_campaign_sample_request, $idempotency_key): \Zernio\Model\ApproveCampaignSample200Response
```

Decline campaign sample request

Declines a `pending` sample request with a reason, emails the creator and fires `campaign_sample.declined`. The creator can ask for the same product again. Any other status answers 409.

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
$sample_id = 'sample_id_example'; // string | Sample request ID.
$decline_campaign_sample_request = new \Zernio\Model\DeclineCampaignSampleRequest(); // \Zernio\Model\DeclineCampaignSampleRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->declineCampaignSample($campaign_id, $sample_id, $decline_campaign_sample_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->declineCampaignSample: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **sample_id** | **string**| Sample request ID. | |
| **decline_campaign_sample_request** | [**\Zernio\Model\DeclineCampaignSampleRequest**](../Model/DeclineCampaignSampleRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

### Return type

[**\Zernio\Model\ApproveCampaignSample200Response**](../Model/ApproveCampaignSample200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `denyCampaignParticipant()`

```php
denyCampaignParticipant($campaign_id, $participant_id, $idempotency_key): \Zernio\Model\GetCampaignParticipant200Response
```

Deny pending campaign participant

Turns a `pending` creator away: they become `denied`, the creator is emailed and `campaign_participant.denied` fires. A denied creator cannot submit posts, drafts or sample requests. Any status other than `pending` answers 409.

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
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->denyCampaignParticipant($campaign_id, $participant_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->denyCampaignParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **participant_id** | **string**| Participant ID. | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

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

## `getCampaignAdResults()`

```php
getCampaignAdResults($campaign_id, $rank_by, $from, $to): \Zernio\Model\GetCampaignAdResults200Response
```

Get campaign ad results

What the campaign's posts did as ads: totals, each post with its ads and launches, and the creators ranked by `rankBy`.  An ad counts for a post when it was launched from the post, or when it runs the post (a boosted post, the Instagram media it shows, or a TikTok Spark item).  Figures come from the ads' daily metrics; money is in the campaign currency, and ads billed in another currency are left out of money figures.

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
$rank_by = 'spend'; // string | How `creators` is ranked.
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | First day counted (YYYY-MM-DD, UTC). Omit to count from the first day of data.
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Last day counted (YYYY-MM-DD, UTC). Omit to count through the latest day of data.

try {
    $result = $apiInstance->getCampaignAdResults($campaign_id, $rank_by, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->getCampaignAdResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **rank_by** | **string**| How &#x60;creators&#x60; is ranked. | [optional] [default to &#39;spend&#39;] |
| **from** | **\DateTime**| First day counted (YYYY-MM-DD, UTC). Omit to count from the first day of data. | [optional] |
| **to** | **\DateTime**| Last day counted (YYYY-MM-DD, UTC). Omit to count through the latest day of data. | [optional] |

### Return type

[**\Zernio\Model\GetCampaignAdResults200Response**](../Model/GetCampaignAdResults200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignDraft()`

```php
getCampaignDraft($campaign_id, $draft_id): \Zernio\Model\GetCampaignDraft200Response
```

Get campaign draft

Returns one draft version and every version of its chain (`versions`, newest first, including this one), each with its review comments.

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
$draft_id = 'draft_id_example'; // string | Draft version ID.

try {
    $result = $apiInstance->getCampaignDraft($campaign_id, $draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->getCampaignDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **draft_id** | **string**| Draft version ID. | |

### Return type

[**\Zernio\Model\GetCampaignDraft200Response**](../Model/GetCampaignDraft200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
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

## `launchCampaignAds()`

```php
launchCampaignAds($campaign_id, $launch_campaign_ads_request, $idempotency_key): \Zernio\Model\LaunchCampaignAds200Response
```

Launch campaign posts as ads

Runs approved posts of an active campaign as ads, each post on its own: a post that cannot run is reported in `results` and never stops the rest.  A post already launched (or launching) into the same placement is reported as `already_launched` or `in_progress` and never gets a second ad, so a retry is safe.  ### What each post becomes  - **Meta, `identity: brand`**: a new ad from the post media in the existing ad set `adSetId`, under the brand's Page. - **Meta, `identity: creator`**: a Partnership Ad of the Instagram post under the creator's handle. Partnership Ads are a limited release while Meta reviews the permission they need (`capabilities.partnershipAds` in `GET /v1/creator-campaigns/{campaignId}/ad-results`); without it these posts fail with a message to launch them with brand identity. Facebook posts only run with brand identity. - **TikTok** (`identity: creator` only): a Spark Ad of the creator's post in its own ad group with `dailyBudget`, inside the existing campaign `existingCampaignId`. Needs the Spark code the creator pasted on their campaign page (`hasSparkCode` on the submission).  One launch runs on one network: posts from the other network fail with a message to launch them separately. Needs ads access (403 `ads_addon_required`) and room in the managed ads allowance (403 `ads_allowance_exceeded`).

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
$launch_campaign_ads_request = new \Zernio\Model\LaunchCampaignAdsRequest(); // \Zernio\Model\LaunchCampaignAdsRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->launchCampaignAds($campaign_id, $launch_campaign_ads_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->launchCampaignAds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **launch_campaign_ads_request** | [**\Zernio\Model\LaunchCampaignAdsRequest**](../Model/LaunchCampaignAdsRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

### Return type

[**\Zernio\Model\LaunchCampaignAds200Response**](../Model/LaunchCampaignAds200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCampaignDrafts()`

```php
listCampaignDrafts($campaign_id, $status, $participant_id, $limit, $skip): \Zernio\Model\ListCampaignDrafts200Response
```

List campaign drafts

Lists the drafts creators uploaded for review on a campaign with `requireDraftApproval`, newest first.  Each draft is a chain of versions: a revision is a new version in the same `chainId`. Only the latest version of each chain is listed, so `status` is the chain's current state and `total` counts chains. Earlier versions come with `GET /v1/creator-campaigns/{campaignId}/drafts/{draftId}`.

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
$status = 'status_example'; // string | Only drafts whose latest version is in this status. `submitted` is the review queue.
$participant_id = 'participant_id_example'; // string | Only drafts of this participant.
$limit = 50; // int
$skip = 0; // int

try {
    $result = $apiInstance->listCampaignDrafts($campaign_id, $status, $participant_id, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->listCampaignDrafts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **status** | **string**| Only drafts whose latest version is in this status. &#x60;submitted&#x60; is the review queue. | [optional] |
| **participant_id** | **string**| Only drafts of this participant. | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListCampaignDrafts200Response**](../Model/ListCampaignDrafts200Response.md)

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

Lists ledger entries, newest first.  Without `participantId` it lists every entry of the campaign:  - earnings drawn from the budget (accruals, per-post payments, pool shares, adjustments) - the approvals, hold releases and settlements that move money between its participants' buckets - their reversals  Pass `participantId` to narrow the list to one participant's entries.

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

## `listCampaignOrders()`

```php
listCampaignOrders($campaign_id, $participant_id, $status, $limit, $skip): \Zernio\Model\ListCampaignOrders200Response
```

List campaign orders

Lists the store orders a commission or smart retainer campaign credited to its creators, newest first, and every active creator's discount code and tracking link.  An order is `pending` while the store is still attributing it (Shopify does so for a few minutes after checkout), `matched` once it is credited to a creator and `unmatched` when it never was. Commission is approved `holdDays` after the order was placed.

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
$participant_id = 'participant_id_example'; // string | Only this creator's orders.
$status = 'status_example'; // string
$limit = 50; // int
$skip = 0; // int

try {
    $result = $apiInstance->listCampaignOrders($campaign_id, $participant_id, $status, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->listCampaignOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **participant_id** | **string**| Only this creator&#39;s orders. | [optional] |
| **status** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListCampaignOrders200Response**](../Model/ListCampaignOrders200Response.md)

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

## `listCampaignSamples()`

```php
listCampaignSamples($campaign_id, $status, $participant_id, $limit, $skip): \Zernio\Model\ListCampaignSamples200Response
```

List campaign sample requests

Lists the free product samples creators asked for, newest first. `contentOwed` marks an approved or shipped sample whose creator submitted no post in the `sampleContentDueDays` since the approval.

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
$status = 'status_example'; // string | Only requests in this status. `pending` is the review queue.
$participant_id = 'participant_id_example'; // string | Only requests of this participant.
$limit = 50; // int
$skip = 0; // int

try {
    $result = $apiInstance->listCampaignSamples($campaign_id, $status, $participant_id, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->listCampaignSamples: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **status** | **string**| Only requests in this status. &#x60;pending&#x60; is the review queue. | [optional] |
| **participant_id** | **string**| Only requests of this participant. | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Zernio\Model\ListCampaignSamples200Response**](../Model/ListCampaignSamples200Response.md)

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

## `moveCampaignParticipant()`

```php
moveCampaignParticipant($campaign_id, $participant_id, $move_campaign_participant_request): \Zernio\Model\MoveCampaignParticipant200Response
```

Move participant to another campaign

Moves a creator invited or joined into the wrong campaign to another campaign of the same owner. The participant keeps its id, status and portal link, which now opens the target.  Posts that fit the target (platform accepted, published after it started) move with it. Undecided posts that do not fit are rejected in this campaign with the reason; decided ones stay.  Answers 409 when the target is closed or full, the creator is already in it, the participant was removed, or any money touched the participation (ledger entries, a payout batch or a transfer). Money never moves between campaigns.  Fires `campaign_participant.removed` here and, for a creator who joined, `campaign_participant.joined` on the target.

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
$campaign_id = 'campaign_id_example'; // string | Campaign the participant is in now.
$participant_id = 'participant_id_example'; // string | Participant ID.
$move_campaign_participant_request = new \Zernio\Model\MoveCampaignParticipantRequest(); // \Zernio\Model\MoveCampaignParticipantRequest

try {
    $result = $apiInstance->moveCampaignParticipant($campaign_id, $participant_id, $move_campaign_participant_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->moveCampaignParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign the participant is in now. | |
| **participant_id** | **string**| Participant ID. | |
| **move_campaign_participant_request** | [**\Zernio\Model\MoveCampaignParticipantRequest**](../Model/MoveCampaignParticipantRequest.md)|  | |

### Return type

[**\Zernio\Model\MoveCampaignParticipant200Response**](../Model/MoveCampaignParticipant200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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

## `previewCampaignPayoutBatch()`

```php
previewCampaignPayoutBatch($campaign_id, $preview_campaign_payout_batch_request): \Zernio\Model\PreviewCampaignPayoutBatch200Response
```

Preview a payout batch

What `POST /v1/creator-campaigns/{campaignId}/payout-batches` with the same body would charge your card now. Holds and charges nothing.  The payouts carry no VAT. `taxCents` is the VAT on Zernio's fee where it applies, from Stripe Tax for your billing address: 21% in Spain, your country's rate for EU consumers, reverse charged (`reverseCharge: true`, no VAT) for EU businesses whose VAT id VIES confirms, none outside the EU.  Creators who have not finished payout setup are left out, as paying would.

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
$preview_campaign_payout_batch_request = new \Zernio\Model\PreviewCampaignPayoutBatchRequest(); // \Zernio\Model\PreviewCampaignPayoutBatchRequest

try {
    $result = $apiInstance->previewCampaignPayoutBatch($campaign_id, $preview_campaign_payout_batch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->previewCampaignPayoutBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **preview_campaign_payout_batch_request** | [**\Zernio\Model\PreviewCampaignPayoutBatchRequest**](../Model/PreviewCampaignPayoutBatchRequest.md)|  | |

### Return type

[**\Zernio\Model\PreviewCampaignPayoutBatch200Response**](../Model/PreviewCampaignPayoutBatch200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `raiseCreatorCampaignBudget()`

```php
raiseCreatorCampaignBudget($campaign_id, $raise_creator_campaign_budget_request, $idempotency_key): \Zernio\Model\CreateCreatorCampaign201Response
```

Raise creator campaign budget

Raises the budget of a campaign that is `draft`, `active` or `paused`.  Only the budget changes. The pay terms stay as creators joined them, which `PATCH` refuses to change once the campaign is live.  - The new `budgetCents` must be above the current budget, otherwise 400 `invalid_field_value`. - When it is also above what the campaign has spent, `budgetExhaustedAt` is cleared and earnings that stopped at the old budget resume. - A closed campaign answers 409 `invalid_resource_state`.

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
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

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
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

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

## `rejectCampaignDraft()`

```php
rejectCampaignDraft($campaign_id, $draft_id, $reject_campaign_draft_request, $idempotency_key): \Zernio\Model\ApproveCampaignDraft200Response
```

Reject campaign draft

Rejects a `submitted` draft version for good, emails the creator and fires `campaign_draft.rejected`. The reason is stored as `reviewNote`. A rejected draft takes no new version and backs no post.  Each version is decided once: a version that is no longer `submitted` answers 409.

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
$draft_id = 'draft_id_example'; // string | Draft version ID.
$reject_campaign_draft_request = new \Zernio\Model\RejectCampaignDraftRequest(); // \Zernio\Model\RejectCampaignDraftRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->rejectCampaignDraft($campaign_id, $draft_id, $reject_campaign_draft_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->rejectCampaignDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **draft_id** | **string**| Draft version ID. | |
| **reject_campaign_draft_request** | [**\Zernio\Model\RejectCampaignDraftRequest**](../Model/RejectCampaignDraftRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

### Return type

[**\Zernio\Model\ApproveCampaignDraft200Response**](../Model/ApproveCampaignDraft200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

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
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

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

Removes the participant from the campaign. Their earnings stay in the ledger. Removing an `invited` participant revokes their invite: the link stops working. Removing an already removed participant returns it unchanged.

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

Puts a rejected submission back to `pending_review` so it can be decided again. No webhook fires.  Its tracking window resumes, so it works only while that window has not ended.  ### When it can't be reopened  - The tracking window has ended: 409 `invalid_resource_state` (\"This post's tracking window has ended.\"). - A post that earned money which was already paid out cannot be reopened. - A post of a closed campaign cannot be reopened. - Any status other than rejected or `pending_review` answers 409.  Reopening a submission that is already `pending_review` returns it unchanged.

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
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

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
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

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

## `requestCampaignDraftRevision()`

```php
requestCampaignDraftRevision($campaign_id, $draft_id, $request_campaign_draft_revision_request, $idempotency_key): \Zernio\Model\ApproveCampaignDraft200Response
```

Request changes on a campaign draft

Marks a `submitted` draft version `revision_requested`, emails the creator and fires `campaign_draft.revision_requested`. The creator answers with one new version (`revisionOf` set to this version).  Send a `note`, at least one entry in `comments`, or both; neither answers 400 `missing_required_field`. A comment with `atMs` is pinned to that moment of the video.  Each version is decided once: a version that is no longer `submitted` answers 409.

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
$draft_id = 'draft_id_example'; // string | Draft version ID.
$request_campaign_draft_revision_request = new \Zernio\Model\RequestCampaignDraftRevisionRequest(); // \Zernio\Model\RequestCampaignDraftRevisionRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->requestCampaignDraftRevision($campaign_id, $draft_id, $request_campaign_draft_revision_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->requestCampaignDraftRevision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **draft_id** | **string**| Draft version ID. | |
| **request_campaign_draft_revision_request** | [**\Zernio\Model\RequestCampaignDraftRevisionRequest**](../Model/RequestCampaignDraftRevisionRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

### Return type

[**\Zernio\Model\ApproveCampaignDraft200Response**](../Model/ApproveCampaignDraft200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendCampaignParticipantInvite()`

```php
resendCampaignParticipantInvite($campaign_id, $participant_id, $idempotency_key): \Zernio\Model\GetCampaignParticipant200Response
```

Resend campaign participant invite

Emails an `invited` participant their personal invite link again. The link does not change, so a link you already sent keeps working. The email counts toward the daily invite email cap of your workspace.  Answers 409 when the participant has already joined, was suspended or removed, has no email, or the campaign is closed.

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
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

try {
    $result = $apiInstance->resendCampaignParticipantInvite($campaign_id, $participant_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->resendCampaignParticipantInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **participant_id** | **string**| Participant ID. | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

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

## `settleCampaignParticipant()`

```php
settleCampaignParticipant($campaign_id, $participant_id, $settle_campaign_participant_request, $idempotency_key): \Zernio\Model\SettleCampaignParticipant201Response
```

Settle campaign participant

Records a payout of the participant's payable balance and fires `campaign_payout.settled`. No money moves through Zernio.  Omit `amountCents` to settle the whole payable balance. An amount above it answers 400, and nothing payable answers 409. Send an `Idempotency-Key` so a retry never records the payout twice.  ### Settlement modes  - `none` settlement: records a payout you made elsewhere. - `external` settlement: pay from your own rails when `campaign_payout.payable` fires, then call this with your payout id in `externalReference` (required in this mode). - `treasury` settlement: send `recordOnly: true` to record a payout you made yourself (the webhook then carries `recorded: true`). Without it the call answers 409: Zernio pays creators of these campaigns by card with `POST /v1/creator-campaigns/{campaignId}/payout-batches`, never from your balance.

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
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.

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
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |

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

## `shipCampaignSample()`

```php
shipCampaignSample($campaign_id, $sample_id, $idempotency_key, $ship_campaign_sample_request): \Zernio\Model\ApproveCampaignSample200Response
```

Mark campaign sample shipped

Records that you sent an `approved` sample yourself, with an optional tracking link, emails the creator and fires `campaign_sample.shipped`. No store call or money is involved. Any other status answers 409.

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
$sample_id = 'sample_id_example'; // string | Sample request ID.
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago.
$ship_campaign_sample_request = new \Zernio\Model\ShipCampaignSampleRequest(); // \Zernio\Model\ShipCampaignSampleRequest | Optional: no body marks the sample shipped without a tracking link.

try {
    $result = $apiInstance->shipCampaignSample($campaign_id, $sample_id, $idempotency_key, $ship_campaign_sample_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatorCampaignsApi->shipCampaignSample: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign ID. | |
| **sample_id** | **string**| Sample request ID. | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.  On the Ads create, boost and duplicate endpoints, a same-body retry runs again once the cut-off request started more than 15 minutes ago. | [optional] |
| **ship_campaign_sample_request** | [**\Zernio\Model\ShipCampaignSampleRequest**](../Model/ShipCampaignSampleRequest.md)| Optional: no body marks the sample shipped without a tracking link. | [optional] |

### Return type

[**\Zernio\Model\ApproveCampaignSample200Response**](../Model/ApproveCampaignSample200Response.md)

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
