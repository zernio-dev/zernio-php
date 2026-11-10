# Zernio\WebhookEventsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**onAccountAdsInitialSyncCompleted()**](WebhookEventsApi.md#onAccountAdsInitialSyncCompleted) | **POST** /account.ads.initial_sync_completed | Ads initial sync completed event |
| [**onAccountAdsSyncFailed()**](WebhookEventsApi.md#onAccountAdsSyncFailed) | **POST** /account.ads.sync_failed | Ads sync failed event |
| [**onAccountAdsSyncRecovered()**](WebhookEventsApi.md#onAccountAdsSyncRecovered) | **POST** /account.ads.sync_recovered | Ads sync recovered event |
| [**onAccountConnected()**](WebhookEventsApi.md#onAccountConnected) | **POST** /account.connected | Account connected event |
| [**onAccountDisconnected()**](WebhookEventsApi.md#onAccountDisconnected) | **POST** /account.disconnected | Account disconnected event |
| [**onAccountPermissionsChanged()**](WebhookEventsApi.md#onAccountPermissionsChanged) | **POST** /account.permissions_changed | Account permissions changed event |
| [**onAccountRateLimited()**](WebhookEventsApi.md#onAccountRateLimited) | **POST** /account.rate_limited | Mailbox sending cooldown started |
| [**onAdAccountStatusChanged()**](WebhookEventsApi.md#onAdAccountStatusChanged) | **POST** /ad_account.status_changed | Ad account status changed event |
| [**onAdCreated()**](WebhookEventsApi.md#onAdCreated) | **POST** /ad.created | Ad created event |
| [**onAdDeliveryIssue()**](WebhookEventsApi.md#onAdDeliveryIssue) | **POST** /ad.delivery_issue | Ad delivery issue event |
| [**onAdReviewApproved()**](WebhookEventsApi.md#onAdReviewApproved) | **POST** /ad.review.approved | Ad review approved event |
| [**onAdReviewRejected()**](WebhookEventsApi.md#onAdReviewRejected) | **POST** /ad.review.rejected | Ad review rejected event |
| [**onAdRuleTriggered()**](WebhookEventsApi.md#onAdRuleTriggered) | **POST** /ad_rule.triggered | Ad rule triggered event |
| [**onAdSetCreated()**](WebhookEventsApi.md#onAdSetCreated) | **POST** /ad_set.created | Ad set created event |
| [**onAdSetUpdated()**](WebhookEventsApi.md#onAdSetUpdated) | **POST** /ad_set.updated | Ad set updated event |
| [**onAdStatusChanged()**](WebhookEventsApi.md#onAdStatusChanged) | **POST** /ad.status_changed | Ad status changed event |
| [**onAdUpdated()**](WebhookEventsApi.md#onAdUpdated) | **POST** /ad.updated | Ad updated event |
| [**onAdVideoProcessed()**](WebhookEventsApi.md#onAdVideoProcessed) | **POST** /ad.video.processed | Ad video processed event |
| [**onAnalyticsSynced()**](WebhookEventsApi.md#onAnalyticsSynced) | **POST** /analytics.synced | Analytics synced event |
| [**onApiChangelogPublished()**](WebhookEventsApi.md#onApiChangelogPublished) | **POST** /api.changelog.published | API changelog entry published event |
| [**onAutomationActionApplied()**](WebhookEventsApi.md#onAutomationActionApplied) | **POST** /automation.action.applied | Automation action applied event |
| [**onAutomationActionFailed()**](WebhookEventsApi.md#onAutomationActionFailed) | **POST** /automation.action.failed | Automation action failed event |
| [**onAutomationActionUnknown()**](WebhookEventsApi.md#onAutomationActionUnknown) | **POST** /automation.action.unknown | Automation action unknown event |
| [**onAutomationAlertEscalated()**](WebhookEventsApi.md#onAutomationAlertEscalated) | **POST** /automation.alert.escalated | Automation alert escalated event |
| [**onAutomationAlertOpened()**](WebhookEventsApi.md#onAutomationAlertOpened) | **POST** /automation.alert.opened | Automation alert opened event |
| [**onAutomationAlertResolved()**](WebhookEventsApi.md#onAutomationAlertResolved) | **POST** /automation.alert.resolved | Automation alert resolved event |
| [**onAutomationCheckCompleted()**](WebhookEventsApi.md#onAutomationCheckCompleted) | **POST** /automation.check.completed | Automation check completed event |
| [**onBalanceCharged()**](WebhookEventsApi.md#onBalanceCharged) | **POST** /balance.charged | Balance charged event |
| [**onBalanceEmpty()**](WebhookEventsApi.md#onBalanceEmpty) | **POST** /balance.empty | Balance empty event |
| [**onBalanceLow()**](WebhookEventsApi.md#onBalanceLow) | **POST** /balance.low | Balance low event |
| [**onBrandedCallingIdentityActionRequired()**](WebhookEventsApi.md#onBrandedCallingIdentityActionRequired) | **POST** /branded_calling.identity.action_required | Caller identity action required event |
| [**onBrandedCallingIdentityStatusUpdated()**](WebhookEventsApi.md#onBrandedCallingIdentityStatusUpdated) | **POST** /branded_calling.identity.status_updated | Caller identity status updated event |
| [**onBrandedCallingNumberStatusUpdated()**](WebhookEventsApi.md#onBrandedCallingNumberStatusUpdated) | **POST** /branded_calling.number.status_updated | Branded number status updated event |
| [**onCalendarEventCreated()**](WebhookEventsApi.md#onCalendarEventCreated) | **POST** /calendar.event.created | Calendar event created |
| [**onCalendarEventDeleted()**](WebhookEventsApi.md#onCalendarEventDeleted) | **POST** /calendar.event.deleted | Calendar event deleted |
| [**onCalendarEventUpdated()**](WebhookEventsApi.md#onCalendarEventUpdated) | **POST** /calendar.event.updated | Calendar event updated |
| [**onCallEnded()**](WebhookEventsApi.md#onCallEnded) | **POST** /call.ended | Call ended event |
| [**onCallFailed()**](WebhookEventsApi.md#onCallFailed) | **POST** /call.failed | Call failed event |
| [**onCallPermissionRequest()**](WebhookEventsApi.md#onCallPermissionRequest) | **POST** /call.permission_request | Call permission request reply event |
| [**onCallReceived()**](WebhookEventsApi.md#onCallReceived) | **POST** /call.received | Call received event |
| [**onCampaignBudgetDepleted()**](WebhookEventsApi.md#onCampaignBudgetDepleted) | **POST** /campaign.budget.depleted | Campaign budget depleted event |
| [**onCampaignCreated()**](WebhookEventsApi.md#onCampaignCreated) | **POST** /campaign.created | Campaign created event |
| [**onCampaignParticipantJoined()**](WebhookEventsApi.md#onCampaignParticipantJoined) | **POST** /campaign_participant.joined | Campaign participant joined event |
| [**onCampaignParticipantRemoved()**](WebhookEventsApi.md#onCampaignParticipantRemoved) | **POST** /campaign_participant.removed | Campaign participant removed event |
| [**onCampaignParticipantSuspended()**](WebhookEventsApi.md#onCampaignParticipantSuspended) | **POST** /campaign_participant.suspended | Campaign participant suspended event |
| [**onCampaignPayoutFailed()**](WebhookEventsApi.md#onCampaignPayoutFailed) | **POST** /campaign_payout.failed | Campaign payout failed event |
| [**onCampaignPayoutPayable()**](WebhookEventsApi.md#onCampaignPayoutPayable) | **POST** /campaign_payout.payable | Campaign payout payable event |
| [**onCampaignPayoutSettled()**](WebhookEventsApi.md#onCampaignPayoutSettled) | **POST** /campaign_payout.settled | Campaign payout settled event |
| [**onCampaignSubmissionApproved()**](WebhookEventsApi.md#onCampaignSubmissionApproved) | **POST** /campaign_submission.approved | Campaign submission approved event |
| [**onCampaignSubmissionFlagged()**](WebhookEventsApi.md#onCampaignSubmissionFlagged) | **POST** /campaign_submission.flagged | Campaign submission flagged event |
| [**onCampaignSubmissionPendingReview()**](WebhookEventsApi.md#onCampaignSubmissionPendingReview) | **POST** /campaign_submission.pending_review | Campaign submission pending review event |
| [**onCampaignSubmissionReceived()**](WebhookEventsApi.md#onCampaignSubmissionReceived) | **POST** /campaign_submission.received | Campaign submission received event |
| [**onCampaignSubmissionRejected()**](WebhookEventsApi.md#onCampaignSubmissionRejected) | **POST** /campaign_submission.rejected | Campaign submission rejected event |
| [**onCampaignUpdated()**](WebhookEventsApi.md#onCampaignUpdated) | **POST** /campaign.updated | Campaign updated event |
| [**onCommentReceived()**](WebhookEventsApi.md#onCommentReceived) | **POST** /comment.received | Comment received event |
| [**onCommerceOrderCreated()**](WebhookEventsApi.md#onCommerceOrderCreated) | **POST** /commerce.order.created | Commerce order created event |
| [**onCommerceOrderRefunded()**](WebhookEventsApi.md#onCommerceOrderRefunded) | **POST** /commerce.order.refunded | Commerce order refunded event |
| [**onCommerceOrderUpdated()**](WebhookEventsApi.md#onCommerceOrderUpdated) | **POST** /commerce.order.updated | Commerce order updated event |
| [**onCommerceProductCreated()**](WebhookEventsApi.md#onCommerceProductCreated) | **POST** /commerce.product.created | Commerce product created event |
| [**onCommerceProductDeleted()**](WebhookEventsApi.md#onCommerceProductDeleted) | **POST** /commerce.product.deleted | Commerce product deleted event |
| [**onCommerceProductUpdated()**](WebhookEventsApi.md#onCommerceProductUpdated) | **POST** /commerce.product.updated | Commerce product updated event |
| [**onContactDeleted()**](WebhookEventsApi.md#onContactDeleted) | **POST** /contact.deleted | Contact deleted |
| [**onContactFieldChanged()**](WebhookEventsApi.md#onContactFieldChanged) | **POST** /contact.field_changed | Contact field changed event |
| [**onContactTagAdded()**](WebhookEventsApi.md#onContactTagAdded) | **POST** /contact.tag_added | Contact tag added event |
| [**onContactTagRemoved()**](WebhookEventsApi.md#onContactTagRemoved) | **POST** /contact.tag_removed | Contact tag removed event |
| [**onContactUpdated()**](WebhookEventsApi.md#onContactUpdated) | **POST** /contact.updated | Contact updated |
| [**onConversationControlChanged()**](WebhookEventsApi.md#onConversationControlChanged) | **POST** /conversation.control_changed | Conversation control changed event |
| [**onConversationStarted()**](WebhookEventsApi.md#onConversationStarted) | **POST** /conversation.started | Conversation started event |
| [**onCreatorCampaignBudgetExhausted()**](WebhookEventsApi.md#onCreatorCampaignBudgetExhausted) | **POST** /creator_campaign.budget_exhausted | Creator campaign budget exhausted event |
| [**onCreatorCampaignClosed()**](WebhookEventsApi.md#onCreatorCampaignClosed) | **POST** /creator_campaign.closed | Creator campaign closed event |
| [**onEmailLinkClicked()**](WebhookEventsApi.md#onEmailLinkClicked) | **POST** /email.link_clicked | Email link clicked |
| [**onEmailOpened()**](WebhookEventsApi.md#onEmailOpened) | **POST** /email.opened | Email opened |
| [**onEmailSendFailed()**](WebhookEventsApi.md#onEmailSendFailed) | **POST** /email.send_failed | Scheduled email failed |
| [**onEmailThreadReplied()**](WebhookEventsApi.md#onEmailThreadReplied) | **POST** /email.thread_replied | Email thread replied |
| [**onFileCreated()**](WebhookEventsApi.md#onFileCreated) | **POST** /file.created | File created |
| [**onFileDeleted()**](WebhookEventsApi.md#onFileDeleted) | **POST** /file.deleted | File deleted |
| [**onFilePicked()**](WebhookEventsApi.md#onFilePicked) | **POST** /file.picked | Files picked |
| [**onFileUpdated()**](WebhookEventsApi.md#onFileUpdated) | **POST** /file.updated | File updated |
| [**onLeadReceived()**](WebhookEventsApi.md#onLeadReceived) | **POST** /lead.received | Lead received event |
| [**onMessageDeleted()**](WebhookEventsApi.md#onMessageDeleted) | **POST** /message.deleted | Message deleted event |
| [**onMessageDelivered()**](WebhookEventsApi.md#onMessageDelivered) | **POST** /message.delivered | Message delivered event |
| [**onMessageEdited()**](WebhookEventsApi.md#onMessageEdited) | **POST** /message.edited | Message edited event |
| [**onMessageFailed()**](WebhookEventsApi.md#onMessageFailed) | **POST** /message.failed | Message delivery failed event |
| [**onMessagePlayed()**](WebhookEventsApi.md#onMessagePlayed) | **POST** /message.played | Message played event |
| [**onMessageRead()**](WebhookEventsApi.md#onMessageRead) | **POST** /message.read | Message read event |
| [**onMessageReceived()**](WebhookEventsApi.md#onMessageReceived) | **POST** /message.received | Message received event |
| [**onMessageSent()**](WebhookEventsApi.md#onMessageSent) | **POST** /message.sent | Message sent event |
| [**onPhoneNumberStockAvailable()**](WebhookEventsApi.md#onPhoneNumberStockAvailable) | **POST** /phone_number.stock_available | Phone-number stock available event |
| [**onPostAuthenticityChanged()**](WebhookEventsApi.md#onPostAuthenticityChanged) | **POST** /post.authenticity_changed | Post authenticity changed event |
| [**onPostCancelled()**](WebhookEventsApi.md#onPostCancelled) | **POST** /post.cancelled | Post cancelled event |
| [**onPostExternalCreated()**](WebhookEventsApi.md#onPostExternalCreated) | **POST** /post.external.created | External post created event |
| [**onPostExternalDeleted()**](WebhookEventsApi.md#onPostExternalDeleted) | **POST** /post.external.deleted | External post deleted event |
| [**onPostExternalUpdated()**](WebhookEventsApi.md#onPostExternalUpdated) | **POST** /post.external.updated | External post updated event |
| [**onPostFailed()**](WebhookEventsApi.md#onPostFailed) | **POST** /post.failed | Post failed event |
| [**onPostPartial()**](WebhookEventsApi.md#onPostPartial) | **POST** /post.partial | Post partial event |
| [**onPostPlatformDeleted()**](WebhookEventsApi.md#onPostPlatformDeleted) | **POST** /post.platform.deleted | Post platform deleted event |
| [**onPostPlatformFailed()**](WebhookEventsApi.md#onPostPlatformFailed) | **POST** /post.platform.failed | Post platform failed event |
| [**onPostPlatformPublished()**](WebhookEventsApi.md#onPostPlatformPublished) | **POST** /post.platform.published | Post platform published event |
| [**onPostPublished()**](WebhookEventsApi.md#onPostPublished) | **POST** /post.published | Post published event |
| [**onPostRecycled()**](WebhookEventsApi.md#onPostRecycled) | **POST** /post.recycled | Post recycled event |
| [**onPostScheduled()**](WebhookEventsApi.md#onPostScheduled) | **POST** /post.scheduled | Post scheduled event |
| [**onPostTikTokUrlResolved()**](WebhookEventsApi.md#onPostTikTokUrlResolved) | **POST** /post.tiktok.url_resolved | TikTok post URL resolved event |
| [**onPostTrackingCompleted()**](WebhookEventsApi.md#onPostTrackingCompleted) | **POST** /post.tracking_completed | Post tracking completed event |
| [**onRcsAgentStatusUpdated()**](WebhookEventsApi.md#onRcsAgentStatusUpdated) | **POST** /rcs.agent.status_updated | RCS agent status updated event |
| [**onReactionReceived()**](WebhookEventsApi.md#onReactionReceived) | **POST** /reaction.received | Reaction received event |
| [**onReferralReceived()**](WebhookEventsApi.md#onReferralReceived) | **POST** /referral.received | Referral received event |
| [**onReviewDeleted()**](WebhookEventsApi.md#onReviewDeleted) | **POST** /review.deleted | Review deleted event |
| [**onReviewNew()**](WebhookEventsApi.md#onReviewNew) | **POST** /review.new | Review new event |
| [**onReviewRestored()**](WebhookEventsApi.md#onReviewRestored) | **POST** /review.restored | Review restored event |
| [**onReviewUpdated()**](WebhookEventsApi.md#onReviewUpdated) | **POST** /review.updated | Review updated event |
| [**onSequenceEnrolled()**](WebhookEventsApi.md#onSequenceEnrolled) | **POST** /sequence.enrolled | Sequence enrolled event |
| [**onSequenceExited()**](WebhookEventsApi.md#onSequenceExited) | **POST** /sequence.exited | Sequence exited event |
| [**onSmsRegistrationActionRequired()**](WebhookEventsApi.md#onSmsRegistrationActionRequired) | **POST** /sms.registration.action_required | SMS registration action required event |
| [**onSmsRegistrationStatusUpdated()**](WebhookEventsApi.md#onSmsRegistrationStatusUpdated) | **POST** /sms.registration.status_updated | SMS registration status updated event |
| [**onSupportRunCompleted()**](WebhookEventsApi.md#onSupportRunCompleted) | **POST** /support.run.completed | Support Assistant finished event |
| [**onSupportRunFailed()**](WebhookEventsApi.md#onSupportRunFailed) | **POST** /support.run.failed | Support Assistant failed event |
| [**onVerificationApproved()**](WebhookEventsApi.md#onVerificationApproved) | **POST** /verification.approved | Verification approved event |
| [**onVerificationFailed()**](WebhookEventsApi.md#onVerificationFailed) | **POST** /verification.failed | Verification failed event |
| [**onWebhookTest()**](WebhookEventsApi.md#onWebhookTest) | **POST** /webhook.test | Webhook test event |
| [**onWhatsAppAccountAlertReceived()**](WebhookEventsApi.md#onWhatsAppAccountAlertReceived) | **POST** /whatsapp.account.alert_received | WhatsApp account alert received |
| [**onWhatsAppAccountNameStatusUpdated()**](WebhookEventsApi.md#onWhatsAppAccountNameStatusUpdated) | **POST** /whatsapp.account.name_status_updated | WhatsApp display-name review outcome event |
| [**onWhatsAppAccountQualityUpdated()**](WebhookEventsApi.md#onWhatsAppAccountQualityUpdated) | **POST** /whatsapp.account.quality_updated | WhatsApp quality rating or messaging limit changed |
| [**onWhatsAppAccountStatusUpdated()**](WebhookEventsApi.md#onWhatsAppAccountStatusUpdated) | **POST** /whatsapp.account.status_updated | WhatsApp Business Account restricted or reinstated |
| [**onWhatsAppAutomaticEvent()**](WebhookEventsApi.md#onWhatsAppAutomaticEvent) | **POST** /whatsapp.automatic_event | WhatsApp automatic event detected |
| [**onWhatsAppContactIdentityChanged()**](WebhookEventsApi.md#onWhatsAppContactIdentityChanged) | **POST** /whatsapp.contact.identity_changed | WhatsApp contact identity changed event |
| [**onWhatsAppNumberActionRequired()**](WebhookEventsApi.md#onWhatsAppNumberActionRequired) | **POST** /whatsapp.number.action_required | WhatsApp number action required event |
| [**onWhatsAppNumberActivated()**](WebhookEventsApi.md#onWhatsAppNumberActivated) | **POST** /whatsapp.number.activated | WhatsApp number activated event |
| [**onWhatsAppNumberDeclined()**](WebhookEventsApi.md#onWhatsAppNumberDeclined) | **POST** /whatsapp.number.declined | WhatsApp number declined event |
| [**onWhatsAppNumberKycSubmitted()**](WebhookEventsApi.md#onWhatsAppNumberKycSubmitted) | **POST** /whatsapp.number.kyc_submitted | WhatsApp number KYC submitted event |
| [**onWhatsAppNumberReactivated()**](WebhookEventsApi.md#onWhatsAppNumberReactivated) | **POST** /whatsapp.number.reactivated | WhatsApp number reactivated event |
| [**onWhatsAppNumberReleased()**](WebhookEventsApi.md#onWhatsAppNumberReleased) | **POST** /whatsapp.number.released | WhatsApp number released event |
| [**onWhatsAppNumberSuspended()**](WebhookEventsApi.md#onWhatsAppNumberSuspended) | **POST** /whatsapp.number.suspended | WhatsApp number suspended event |
| [**onWhatsAppNumberVerificationRequired()**](WebhookEventsApi.md#onWhatsAppNumberVerificationRequired) | **POST** /whatsapp.number.verification_required | WhatsApp number verification-required event |
| [**onWhatsAppTemplateCategoryUpdated()**](WebhookEventsApi.md#onWhatsAppTemplateCategoryUpdated) | **POST** /whatsapp.template.category_updated | WhatsApp template category updated event |
| [**onWhatsAppTemplateStatusUpdated()**](WebhookEventsApi.md#onWhatsAppTemplateStatusUpdated) | **POST** /whatsapp.template.status_updated | WhatsApp template status updated event |
| [**onWorkflowRunCompleted()**](WebhookEventsApi.md#onWorkflowRunCompleted) | **POST** /workflow.run.completed | Workflow run completed event |
| [**onWorkflowRunFailed()**](WebhookEventsApi.md#onWorkflowRunFailed) | **POST** /workflow.run.failed | Workflow run failed event |
| [**onWorkflowRunStarted()**](WebhookEventsApi.md#onWorkflowRunStarted) | **POST** /workflow.run.started | Workflow run started event |


## `onAccountAdsInitialSyncCompleted()`

```php
onAccountAdsInitialSyncCompleted($webhook_payload_account_ads_initial_sync_completed)
```

Ads initial sync completed event

The initial sync, ad-account discovery plus a 90-day ad backfill, completed for an ads-enabled account.  ### When it fires  Fires once per ads-enabled account. `sync` reports whether the backfill succeeded fully or partially, and how many ads were synced versus failed.  ### Scoped connects  When scoping was applied at connect time, `account.platformAdAccountId` echoes the chosen ad account when the scope is exactly one. `account.platformAdAccountIds` lists every `act_*` synced.  ### On failure  When `sync.status` is `\"failure\"`, the payload adds `sync.error` (raw platform error, about 2 KB), `sync.errorCode` and `sync.errorSubcode` when parseable, and `sync.errorCategory`.  ### Error categories  `sync.errorCategory` is `token_invalid`, `permission_denied`, `no_ad_accounts`, `rate_limited`, `discovery_failed` or `unknown`. New values may be added; existing ones are stable.  ### Retrying  Reconnecting re-queues the backfill and the event fires again. It fixes `token_invalid`, `permission_denied` and `rate_limited`; `no_ad_accounts` needs an ad account on the grant first.  ### When a retry is skipped  Zernio skips the re-queue only when a backfill already completed with at least one ad, or one started less than 20 minutes ago.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_account_ads_initial_sync_completed = {"id":"00000000-0000-4000-8000-000000000000","event":"account.ads.initial_sync_completed","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"metaads","username":"sample_brand","displayName":"Sample Brand","platformUserId":"10000000000000001","profilePicture":"https://example.com/sample-avatar.jpg","platformAdAccountIds":["act_1234567890"]},"sync":{"status":"success","totalAds":42,"synced":42,"failed":0},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAccountAdsInitialSyncCompleted

try {
    $apiInstance->onAccountAdsInitialSyncCompleted($webhook_payload_account_ads_initial_sync_completed);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAccountAdsInitialSyncCompleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_account_ads_initial_sync_completed** | [**\Zernio\Model\WebhookPayloadAccountAdsInitialSyncCompleted**](../Model/WebhookPayloadAccountAdsInitialSyncCompleted.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAccountAdsSyncFailed()`

```php
onAccountAdsSyncFailed($webhook_payload_account_ads_sync_failed)
```

Ads sync failed event

An ad account's ads stopped syncing: no success for 24 hours, or every live ad at the retry cap.  ### When it fires  An hourly check covers every ad account with live ads on a connected account, on any ads platform. Fires once per ad account until `account.ads.sync_recovered`.  ### Stale metrics  Metrics for the ad account are stale in between. Use this signal to flag the numbers in your UI rather than to poll.  ### Payload notes  `adAccount.platformAdAccountId` names the ad account (`act_*` on Meta). `account.accountId` names its connection, so one connection with several ad accounts reports each separately.  ### Sync fields  `sync.lastSuccessfulSyncAt` is the last good sync and `sync.failureCount` the consecutive failed attempts.  ### Error categories  Branch on `sync.errorCategory`: `ad_account_not_listed` (access removed or platform change; check permissions, reconnect), `sync_error` (see `sync.error`) or `stale` (no error recorded; retries usually clear it). New values may be added.  ### When it does not fire  A disconnected connection gets `account.disconnected` instead, and no recovery event follows. An ad account that never synced successfully, or whose last good sync is over 3 days old, is not announced.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_account_ads_sync_failed = {"id":"00000000-0000-4000-8000-000000000000","event":"account.ads.sync_failed","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"metaads","username":"sample_brand","displayName":"Sample Brand"},"adAccount":{"platformAdAccountId":"act_1234567890","name":"Sample Ad Account"},"sync":{"lastSuccessfulSyncAt":"2026-01-14T10:00:00.000Z","failureCount":3,"errorCategory":"sync_error","error":"(#17) User request limit reached"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAccountAdsSyncFailed

try {
    $apiInstance->onAccountAdsSyncFailed($webhook_payload_account_ads_sync_failed);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAccountAdsSyncFailed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_account_ads_sync_failed** | [**\Zernio\Model\WebhookPayloadAccountAdsSyncFailed**](../Model/WebhookPayloadAccountAdsSyncFailed.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAccountAdsSyncRecovered()`

```php
onAccountAdsSyncRecovered($webhook_payload_account_ads_sync_recovered)
```

Ads sync recovered event

An ad account previously reported by `account.ads.sync_failed` synced successfully again.  ### When it fires  Fires once when a sync succeeds again, found by an hourly check.  ### Payload notes  `sync.failingSince` is the last successful sync before the failure started.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_account_ads_sync_recovered = {"id":"00000000-0000-4000-8000-000000000000","event":"account.ads.sync_recovered","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"metaads","username":"sample_brand","displayName":"Sample Brand"},"adAccount":{"platformAdAccountId":"act_1234567890","name":"Sample Ad Account"},"sync":{"lastSuccessfulSyncAt":"2026-01-15T10:00:00.000Z","failingSince":"2026-01-14T10:00:00.000Z"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAccountAdsSyncRecovered

try {
    $apiInstance->onAccountAdsSyncRecovered($webhook_payload_account_ads_sync_recovered);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAccountAdsSyncRecovered: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_account_ads_sync_recovered** | [**\Zernio\Model\WebhookPayloadAccountAdsSyncRecovered**](../Model/WebhookPayloadAccountAdsSyncRecovered.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAccountConnected()`

```php
onAccountConnected($webhook_payload_account_connected)
```

Account connected event

An account was connected to a profile, through OAuth or credentials.  ### Repeat events  Reconnecting an account you already hold fires it again with the same `accountId`, since the connect flow upserts per profile and platform. Key your upsert on `accountId`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_account_connected = {"id":"00000000-0000-4000-8000-000000000000","event":"account.connected","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"instagram","username":"sample_brand","displayName":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAccountConnected

try {
    $apiInstance->onAccountConnected($webhook_payload_account_connected);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAccountConnected: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_account_connected** | [**\Zernio\Model\WebhookPayloadAccountConnected**](../Model/WebhookPayloadAccountConnected.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAccountDisconnected()`

```php
onAccountDisconnected($webhook_payload_account_disconnected)
```

Account disconnected event

A connected account stopped working or was removed.  ### Intentional  Removed on purpose, such as `DELETE /v1/accounts/{id}` or a switch to the Free plan. Kept 1 hour (`gracePeriodEndsAt`), then deleted with no further event. Reconnecting within the hour restores the same `accountId`.  ### Unintentional  The connection broke (token expired or revoked, access lost). The account stays inactive until reconnected, keeping its `accountId`. Removing it instead sends a second event with `intentional`.  ### Immediate paths  An API removal emits at once with `disconnectionType: \"intentional\"`. A phone-side WhatsApp disconnect emits within seconds of Meta's notification, with `unintentional`.  ### WhatsApp reason  `reason` carries Meta's explanation. Deliberate: `BUSINESS_DOWNGRADE`, `CHANGE_NUMBER`, `USER_RE_REGISTERED`. Idle number dropped by Meta: `PRIMARY_INACTIVITY` after about 14 days, `COMPANION_INACTIVITY` after about 30.  ### Expired or revoked grants  A publish or analytics sync getting a definitive auth error deactivates the account. Publish tries a token refresh first, so the event means the refresh failed too. `reason` carries the platform's message.  ### Reconnection flags  A dead token on an ads or blog call flags the account, and the posting account sharing its token (`needsReconnection: true`). Each flagged account emits once; a later deactivation emits again, then not until reconnected.  ### Lead forms while disconnected  While a Facebook Page is flagged or deactivated, `GET /v1/ads/lead-forms/{formId}/leads` answers `409` with `code: \"account_disconnected\"`.  ### Reconciliation  Anything else (a number deleted in WhatsApp Manager, a channel Meta silently stops serving) is caught by periodic reconciliation, not a notification. It lags minutes to about a day.  ### Do not rely on its absence  Meta's notifications are best-effort. For WhatsApp, poll `GET /v1/whatsapp/number-info` or account health, which runs a live Meta link probe.  ### Subscribing  A webhook only receives the events it lists, so add `account.disconnected` explicitly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_account_disconnected = {"id":"00000000-0000-4000-8000-000000000000","event":"account.disconnected","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"instagram","username":"sample_brand","displayName":"Sample Brand","disconnectionType":"unintentional","reason":"Token expired or revoked"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAccountDisconnected

try {
    $apiInstance->onAccountDisconnected($webhook_payload_account_disconnected);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAccountDisconnected: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_account_disconnected** | [**\Zernio\Model\WebhookPayloadAccountDisconnected**](../Model/WebhookPayloadAccountDisconnected.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAccountPermissionsChanged()`

```php
onAccountPermissionsChanged($webhook_payload_account_permissions_changed)
```

Account permissions changed event

A publish on an account connected through your own OAuth app failed for a missing permission.  ### Behaviour  The account stays connected and its token still works. `account.missingScopeAreas` accumulates the affected areas, today `posting`. Each area sends one event, however many posts fail afterwards.  ### When it does not fire  Accounts not connected through your own OAuth app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_account_permissions_changed = {"id":"00000000-0000-4000-8000-000000000000","event":"account.permissions_changed","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"instagram","username":"sample_brand","displayName":"Sample Brand","oauthAppId":"6a7adc04d0fe733d1a1bed90","missingScopeAreas":["posting"],"reason":"Missing required TikTok permissions: video.publish"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAccountPermissionsChanged

try {
    $apiInstance->onAccountPermissionsChanged($webhook_payload_account_permissions_changed);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAccountPermissionsChanged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_account_permissions_changed** | [**\Zernio\Model\WebhookPayloadAccountPermissionsChanged**](../Model/WebhookPayloadAccountPermissionsChanged.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAccountRateLimited()`

```php
onAccountRateLimited($webhook_payload_account_rate_limited)
```

Mailbox sending cooldown started

A Google or Microsoft mailbox was paused after sending one body to over 50 recipients in an hour.  ### Payload notes  `account.reason` says why and `account.resetsAt` says when sending resumes. Sends answer 429 until then. A later trigger can also start a cooldown.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_account_rate_limited = {"id":"00000000-0000-4000-8000-000000000000","event":"account.rate_limited","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"google","username":"jane@example.com","displayName":"Jane Doe","reason":"recipient_burst","cooldownMinutes":10,"resetsAt":"2026-01-15T10:00:00.000Z"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAccountRateLimited

try {
    $apiInstance->onAccountRateLimited($webhook_payload_account_rate_limited);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAccountRateLimited: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_account_rate_limited** | [**\Zernio\Model\WebhookPayloadAccountRateLimited**](../Model/WebhookPayloadAccountRateLimited.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAdAccountStatusChanged()`

```php
onAdAccountStatusChanged($webhook_payload_ad_account_status_changed)
```

Ad account status changed event

An ad account Zernio already tracked became `active`, `restricted`, `disabled` or `closed`.  ### When it fires  Fires when ad account discovery sees a tracked ad account change status, at most once per account per 24 hours. Covers Meta, Google, TikTok and X.  ### Status values  `restricted` needs something settled first (unpaid Meta balance, risk review, TikTok limit or pending verification, X review). `disabled` means the platform disabled or rejected it; `closed` means closed or pending closure.  ### Payload notes  `status.current` and `status.previous` use one vocabulary on every network. `status.raw` is the platform's own value, for example Meta's `account_status` code `2`.  ### When it does not fire  An account seen for the first time, an account Zernio has not seen in the last 48 hours, or a platform status Zernio does not recognize.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_ad_account_status_changed = {"id":"00000000-0000-4000-8000-000000000000","event":"ad_account.status_changed","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"metaads","username":"sample_brand","displayName":"Sample Brand"},"adAccount":{"platformAdAccountId":"act_1234567890","name":"Sample Ad Account"},"status":{"previous":"active","current":"disabled","raw":"2"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAdAccountStatusChanged

try {
    $apiInstance->onAdAccountStatusChanged($webhook_payload_ad_account_status_changed);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAdAccountStatusChanged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_ad_account_status_changed** | [**\Zernio\Model\WebhookPayloadAdAccountStatusChanged**](../Model/WebhookPayloadAdAccountStatusChanged.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAdCreated()`

```php
onAdCreated($webhook_payload_ad_created)
```

Ad created event

An ad was created through Zernio (`source: \"zernio\"`) or detected by the sync (`source: \"platform\"`).  ### When it fires  Fires once the ad's campaign and ad set are recorded. A detected ad arrives up to one sync interval late; Meta ads entering review usually arrive within minutes.  ### When it does not fire  History loaded when an account connects, and ads created more than 7 days ago, are never announced.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_ad_created = {"id":"00000000-0000-4000-8000-000000000000","event":"ad.created","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"metaads","username":"sample_brand","displayName":"Sample Brand"},"adObject":{"level":"AD","platformId":"120200000000000001","platformAdAccountId":"act_1234567890","adId":"507f1f77bcf86cd799439026","name":"Spring promo","campaign":{"platformCampaignId":"120200000000000010","name":"Spring campaign"},"adSet":{"platformAdSetId":"120200000000000020","name":"Spring audience"}},"source":"zernio","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAdCreated

try {
    $apiInstance->onAdCreated($webhook_payload_ad_created);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAdCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_ad_created** | [**\Zernio\Model\WebhookPayloadAdCreated**](../Model/WebhookPayloadAdCreated.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAdDeliveryIssue()`

```php
onAdDeliveryIssue($webhook_payload_ad_delivery_issue)
```

Ad delivery issue event

An ad Zernio already tracked moved into the platform's error state and stopped delivering.  ### What triggers it  Meta `WITH_ISSUES` (payment, policy or account problems), TikTok account punishment or missing balance, or any platform status Zernio does not recognize yet (check `issue.raw`).  ### When it fires  Fires at most once per ad per 24 hours. Ads seen for the first time by a sync never fire it.  ### Payload notes  `issue.raw` is the platform's status string. On Meta, `issue.reasons` carries Meta's messages for the campaign; other networks send none, so it is empty.  ### Platform notes  On Meta the same problem can also arrive as `ad.status_changed` with `WITH_ISSUES`, straight from Meta's webhook and usually sooner. Pick one of the two to act on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_ad_delivery_issue = {"id":"00000000-0000-4000-8000-000000000000","event":"ad.delivery_issue","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"metaads","username":"sample_brand","displayName":"Sample Brand"},"adObject":{"level":"AD","platformId":"120200000000000001","platformAdAccountId":"act_1234567890","adId":"507f1f77bcf86cd799439026","name":"Spring promo"},"issue":{"raw":"WITH_ISSUES","reasons":[{"message":"Your payment method was declined. Update it to resume delivery."}]},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAdDeliveryIssue

try {
    $apiInstance->onAdDeliveryIssue($webhook_payload_ad_delivery_issue);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAdDeliveryIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_ad_delivery_issue** | [**\Zernio\Model\WebhookPayloadAdDeliveryIssue**](../Model/WebhookPayloadAdDeliveryIssue.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAdReviewApproved()`

```php
onAdReviewApproved($webhook_payload_ad_review)
```

Ad review approved event

An ad Zernio already tracked passed platform review, or a rejected ad was approved on appeal.  ### When it fires  Fires within one sync cycle of the platform's decision, not instantly; on Meta the review poll usually reports sooner. Each outcome is delivered at most once per ad per 24 hours.  ### When it does not fire  Ads seen for the first time by a sync never fire it, including history loaded at connect. On Meta, Google, TikTok and Reddit an ad that leaves review while paused sends no `approved`.  ### Platform notes  Covers every ad network Zernio syncs, with one payload shape. On X, Pinterest and LinkedIn the review is read apart from delivery status, so an ad leaving review while paused still sends `approved`.  ### Payload notes  `review.raw` is the platform's own status string. `adObject.adId` is the Zernio ad id, ready for `GET /v1/ads/{adId}`. Deduplicate on the event `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_ad_review = {"id":"00000000-0000-4000-8000-000000000000","event":"ad.review.approved","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"metaads","username":"sample_brand","displayName":"Sample Brand"},"adObject":{"level":"AD","platformId":"120200000000000001","platformAdAccountId":"act_1234567890","adId":"507f1f77bcf86cd799439026","name":"Spring promo"},"review":{"status":"approved","raw":"ACTIVE","reasons":[]},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAdReview

try {
    $apiInstance->onAdReviewApproved($webhook_payload_ad_review);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAdReviewApproved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_ad_review** | [**\Zernio\Model\WebhookPayloadAdReview**](../Model/WebhookPayloadAdReview.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAdReviewRejected()`

```php
onAdReviewRejected($webhook_payload_ad_review)
```

Ad review rejected event

The platform rejected an ad Zernio already tracked; `review.reasons` carries its reason when it gives one.  ### When it fires  Fires within one sync cycle of the platform's decision, not instantly; on Meta the review poll usually reports sooner. Each outcome is delivered at most once per ad per 24 hours.  ### When it does not fire  Ads seen for the first time by a sync never fire it, including history loaded at connect.  ### Platform notes  Covers every ad network Zernio syncs. Pinterest, LinkedIn and Reddit send their own reasons, X sends none, and most other networks return a generic message.  ### Payload notes  `review.raw` is the platform's own status string. Show `review.reasons` rather than branching on it. `adObject.adId` is the Zernio ad id. Deduplicate on the event `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_ad_review = {"id":"00000000-0000-4000-8000-000000000000","event":"ad.review.rejected","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"metaads","username":"sample_brand","displayName":"Sample Brand"},"adObject":{"level":"AD","platformId":"120200000000000001","platformAdAccountId":"act_1234567890","adId":"507f1f77bcf86cd799439026","name":"Spring promo"},"review":{"status":"rejected","raw":"DISAPPROVED","reasons":[{"message":"Your ad wasn't approved because it doesn't follow our Advertising Policies."}]},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAdReview

try {
    $apiInstance->onAdReviewRejected($webhook_payload_ad_review);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAdReviewRejected: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_ad_review** | [**\Zernio\Model\WebhookPayloadAdReview**](../Model/WebhookPayloadAdReview.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAdRuleTriggered()`

```php
onAdRuleTriggered($webhook_payload_ad_rule_triggered)
```

Ad rule triggered event

A scheduled run of an ad rule with a `notify` action found campaigns or ad sets meeting every condition.  ### When it fires  Each object is announced at most once per rule cooldown. A run where every object is still in cooldown sends nothing.  ### Failed actions  An object whose action `failed` gets no cooldown, so the next run retries it and reports it again.  ### Payload notes  `objects` lists only the objects the run acted on. `objects[].conditions` repeats every condition of the rule with `actual`, the value the object reached.  ### Actions  `objects[].actions` says what the rule did: `done`, `skipped` (with a `reason` such as `already_paused` or `at_limit`) or `failed`. On `adjust_budget` it carries `previousDailyBudget` and `newDailyBudget`; empty on a notify-only rule.  ### Run context  `run.today` and `run.timezone` give the ad account's calendar date the windows used. `run.timezoneAssumed` is `true` when UTC was assumed. `run.currency` is the currency of money metrics, or `null` when unknown.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_ad_rule_triggered = {"id":"00000000-0000-4000-8000-000000000000","event":"ad_rule.triggered","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"metaads","username":"sample_brand","displayName":"Sample Brand"},"rule":{"id":"507f1f77bcf86cd799439027","name":"Pause watch: CPA over 40","level":"adset","platformAdAccountId":"act_1234567890"},"run":{"id":"507f1f77bcf86cd799439028","ranAt":"2026-01-15T10:00:00.000Z","today":"2026-01-15","timezone":"Europe/Madrid","timezoneAssumed":false,"currency":"EUR"},"objects":[{"platformId":"120210000000000002","name":"Prospecting, broad","platformCampaignId":"120210000000000001","conditions":[{"metric":"cpa","window":"last_3d","op":">","value":40,"actual":52.75}],"actions":[{"type":"pause","status":"done","reason":null,"previousDailyBudget":null,"newDailyBudget":null,"previousName":null,"newName":null,"previousBidAmount":null,"newBidAmount":null,"targetMetric":null,"previousTarget":null,"newTarget":null}]}],"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAdRuleTriggered

try {
    $apiInstance->onAdRuleTriggered($webhook_payload_ad_rule_triggered);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAdRuleTriggered: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_ad_rule_triggered** | [**\Zernio\Model\WebhookPayloadAdRuleTriggered**](../Model/WebhookPayloadAdRuleTriggered.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAdSetCreated()`

```php
onAdSetCreated($webhook_payload_ad_set_created)
```

Ad set created event

An ad set was created through Zernio (`source: \"zernio\"`) or detected by the sync (`source: \"platform\"`).  ### When it fires  Fires once the ad set row is recorded, so `GET /v1/ads/ad-sets/{adSetId}` finds it. A detected ad set arrives up to one sync interval late.  ### Payload notes  `adObject.campaign` is the campaign the ad set belongs to, or null when the platform has none.  ### When it does not fire  History loaded when an account connects, and ad sets created more than 7 days ago, are never announced.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_ad_set_created = {"id":"00000000-0000-4000-8000-000000000000","event":"ad_set.created","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"metaads","username":"sample_brand","displayName":"Sample Brand"},"adObject":{"level":"AD_SET","platformId":"120200000000000020","platformAdAccountId":"act_1234567890","name":"Spring audience","campaign":{"platformCampaignId":"120200000000000010","name":"Spring campaign"}},"source":"zernio","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAdSetCreated

try {
    $apiInstance->onAdSetCreated($webhook_payload_ad_set_created);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAdSetCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_ad_set_created** | [**\Zernio\Model\WebhookPayloadAdSetCreated**](../Model/WebhookPayloadAdSetCreated.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAdSetUpdated()`

```php
onAdSetUpdated($webhook_payload_ad_set_updated)
```

Ad set updated event

An ad set was edited through Zernio (`source: \"zernio\"`), or outside Zernio and detected by the sync (`source: \"platform\"`).  ### When it fires  Fires after the platform and Zernio both accepted the edit. Outside edits arrive up to one sync interval late, and only to the user whose sync saw them.  ### Deduplication  Events are not deduplicated, so every edit is announced. Use the event `id` to drop repeats.  ### Payload notes  `changes` lists the edited fields: `name`, `status` (the ad set's own on/off switch), `budget`, `bid`, `schedule`, `targeting` or `settings`. Ignore unknown values. It never carries old or new values, so read the ad set.  ### What the sync detects  From the sync, `changes` covers only `name` and `status`. Status is not detected on Reddit.  ### When it does not fire  History loaded when an account connects is never announced. Budget and targeting edits made through `PUT /v1/ads/{adId}` arrive as `ad.updated`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_ad_set_updated = {"id":"00000000-0000-4000-8000-000000000000","event":"ad_set.updated","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"metaads","username":"sample_brand","displayName":"Sample Brand"},"adObject":{"level":"AD_SET","platformId":"120200000000000020","platformAdAccountId":"act_1234567890","name":"Spring audience","campaign":{"platformCampaignId":"120200000000000010","name":"Spring campaign"}},"changes":["name","budget"],"source":"zernio","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAdSetUpdated

try {
    $apiInstance->onAdSetUpdated($webhook_payload_ad_set_updated);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAdSetUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_ad_set_updated** | [**\Zernio\Model\WebhookPayloadAdSetUpdated**](../Model/WebhookPayloadAdSetUpdated.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAdStatusChanged()`

```php
onAdStatusChanged($webhook_payload_ad_status_changed)
```

Ad status changed event

A campaign, ad set or ad on a connected Meta ad account (`metaads`) changed status.  ### Sources  Two Meta `ad_account` fields feed it: `in_process_ad_objects` (finished processing, `status.raw` is Meta's `status_name`) and `with_issues_ad_objects` (`status.raw` is `WITH_ISSUES`, `error` filled from Meta).  ### Payload notes  `adObject.level` is `CAMPAIGN`, `AD_SET` or `AD`; creative-level events are not forwarded. Branch on `status.raw`. Use `error.code` as the stable discriminator, since `error.summary` and `error.message` are localized to the owner's Meta locale.  ### The error block  `error` is present on most `WITH_ISSUES` events but can be absent, and never appears on any other status. Null-check it before reading `error.code`.  ### Fan-out  Matching is keyed on `adObject.platformAdAccountId`. When several connected `metaads` accounts point at the same Meta ad account, each receives its own delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_ad_status_changed = {"id":"00000000-0000-4000-8000-000000000000","event":"ad.status_changed","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"metaads","username":"sample_brand","displayName":"Sample Brand"},"adObject":{"level":"AD","platformId":"120200000000000001","platformAdAccountId":"act_1234567890"},"status":{"raw":"WITH_ISSUES"},"error":{"code":"1487390","summary":"Ad disapproved","message":"Your ad wasn't approved because it doesn't follow our Advertising Policies."},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAdStatusChanged

try {
    $apiInstance->onAdStatusChanged($webhook_payload_ad_status_changed);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAdStatusChanged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_ad_status_changed** | [**\Zernio\Model\WebhookPayloadAdStatusChanged**](../Model/WebhookPayloadAdStatusChanged.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAdUpdated()`

```php
onAdUpdated($webhook_payload_ad_updated)
```

Ad updated event

An ad was edited through Zernio (`source: \"zernio\"`), or outside Zernio and detected by the sync (`source: \"platform\"`).  ### When it fires  Fires once, to the owner of the edited ad. Outside edits arrive up to one sync interval late. Every edit is announced, so use the event `id` to drop repeats.  ### Payload notes  `changes` lists the edited fields: `name`, `status` (the ad's own on/off switch), `budget`, `targeting` or `creative`. Ignore unknown values; new ones can be added.  ### Reading the change  The event never carries old or new values, so read the ad. `platformId` can change when a LinkedIn creative is replaced, while `adId` stays stable.  ### When it does not fire  From the sync, `changes` covers only `name` and `status`. Budget, bid, schedule and targeting edits made outside Zernio, tracking tag edits and history loaded at connect are not announced. Ad rule changes arrive as `ad_rule.triggered`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_ad_updated = {"id":"00000000-0000-4000-8000-000000000000","event":"ad.updated","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"metaads","username":"sample_brand","displayName":"Sample Brand"},"adObject":{"level":"AD","platformId":"120200000000000001","platformAdAccountId":"act_1234567890","adId":"507f1f77bcf86cd799439026","name":"Spring promo","campaign":{"platformCampaignId":"120200000000000010","name":"Spring campaign"},"adSet":{"platformAdSetId":"120200000000000020","name":"Spring audience"}},"changes":["name","creative"],"source":"zernio","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAdUpdated

try {
    $apiInstance->onAdUpdated($webhook_payload_ad_updated);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAdUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_ad_updated** | [**\Zernio\Model\WebhookPayloadAdUpdated**](../Model/WebhookPayloadAdUpdated.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAdVideoProcessed()`

```php
onAdVideoProcessed($webhook_payload_ad_video_processed)
```

Ad video processed event

Meta finished processing a video uploaded with `async: true` on `POST /v1/ads/videos`.  ### Payload notes  `video.status` is `ready` (reference it as `video.id` on the create endpoints) or `error`, with `video.error` carrying the reason.  ### When it fires  Fires once per upload, when the video leaves `processing`. Zernio polls every 10 seconds for about 13 minutes; after that no event is sent, so read `GET /v1/ads/videos/{videoId}` for long videos.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_ad_video_processed = {"id":"00000000-0000-4000-8000-000000000000","event":"ad.video.processed","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"metaads","username":"sample_brand","displayName":"Sample Brand"},"video":{"id":"507f1f77bcf86cd799439023","platformAdAccountId":"act_1234567890","status":"ready","error":null,"thumbnailUrl":"https://example.com/sample-thumbnail.jpg"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAdVideoProcessed

try {
    $apiInstance->onAdVideoProcessed($webhook_payload_ad_video_processed);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAdVideoProcessed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_ad_video_processed** | [**\Zernio\Model\WebhookPayloadAdVideoProcessed**](../Model/WebhookPayloadAdVideoProcessed.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAnalyticsSynced()`

```php
onAnalyticsSynced($webhook_payload_analytics_synced)
```

Analytics synced event

One connected account's analytics sync cycle completed successfully.  ### Payload notes  It is a trigger: no metrics and no cursor. On receipt, call `GET /v1/analytics/delta` with your own last `nextCursor` to read what changed across every account.  ### When it fires  Per account, per successful sync cycle, roughly hourly. It does not fire for a failed or skipped cycle, an inactive or disconnected account, or a platform without analytics sync.  ### Empty page  The feed is a materialized view, so an immediate read can return an empty `data` array. Re-poll with the same cursor. Advancing on an empty page can lose changes permanently.  ### Use a dedicated endpoint  Volume is about one event per account per hour. The consecutive-failure count is shared by every event on an endpoint, so an outage here can disable it and silence events like `post.published`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_analytics_synced = {"id":"00000000-0000-4000-8000-000000000000","event":"analytics.synced","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"instagram","username":"sample_brand"},"sync":{"syncedAt":"2026-01-15T10:00:00.000Z","postsUpdated":12},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAnalyticsSynced

try {
    $apiInstance->onAnalyticsSynced($webhook_payload_analytics_synced);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAnalyticsSynced: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_analytics_synced** | [**\Zernio\Model\WebhookPayloadAnalyticsSynced**](../Model/WebhookPayloadAnalyticsSynced.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onApiChangelogPublished()`

```php
onApiChangelogPublished($webhook_payload_api_changelog_published)
```

API changelog entry published event

An entry was published to the API changelog when a change to the OpenAPI spec went live.  ### Who receives it  It belongs to no profile or account. Every active endpoint subscribed to it receives it; endpoints scoped with `profileIds` or `accountIds` do not. One subscription per integration is enough.  ### Payload notes  `entry.type`, `entry.message` (the announcement), `entry.url`, `entry.specVersion`, `entry.impact` (`action_required`, `additive` or `none`) and `entry.changes` (the spec diff as data).  ### How to act  Automate on `impact`, `changes` and `type`; read `message` for the reason. `GET /v1/changelog` lists entries newest first, to back-fill after downtime.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_api_changelog_published = {"id":"00000000-0000-4000-8000-000000000000","event":"api.changelog.published","timestamp":"2026-01-15T10:00:00Z","entry":{"id":"chg_sample123","type":"new_feature","impact":"additive","platforms":["general"],"title":"Sample feature","summary":"A sample changelog entry.","message":"Sample changelog entry.","publishedAt":"2026-01-15T10:00:00.000Z","specVersion":null,"url":"https://docs.zernio.com/changelog","changes":{"endpoints":{"added":[],"removed":[],"modified":[]},"schemas":{"added":[],"removed":[],"modified":[]}}}}; // \Zernio\Model\WebhookPayloadApiChangelogPublished

try {
    $apiInstance->onApiChangelogPublished($webhook_payload_api_changelog_published);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onApiChangelogPublished: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_api_changelog_published** | [**\Zernio\Model\WebhookPayloadApiChangelogPublished**](../Model/WebhookPayloadApiChangelogPublished.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAutomationActionApplied()`

```php
onAutomationActionApplied($webhook_payload_automation_action)
```

Automation action applied event

An automation changed something, such as an ad set paused or a budget raised.  ### Payload notes  `previous` and `target` carry the value before and the value set. Each action sends one event; dedupe on `id`, which stays the same if the event is sent again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_automation_action = {"id":"00000000-0000-4000-8000-000000000000","event":"automation.action.applied","timestamp":"2026-01-15T10:00:00Z","automation":{"id":"507f1f77bcf86cd799439027","kind":"ad_rule"},"accountId":"507f1f77bcf86cd799439011","checkId":"507f1f77bcf86cd799439028","action":{"id":"507f1f77bcf86cd799439030","subjectId":"120210000000000002","type":"adjust_budget","status":"applied","reason":null,"previous":{"dailyBudget":40},"target":{"dailyBudget":48},"actedAt":"2026-01-15T10:00:00.000Z"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAutomationAction

try {
    $apiInstance->onAutomationActionApplied($webhook_payload_automation_action);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAutomationActionApplied: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_automation_action** | [**\Zernio\Model\WebhookPayloadAutomationAction**](../Model/WebhookPayloadAutomationAction.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAutomationActionFailed()`

```php
onAutomationActionFailed($webhook_payload_automation_action)
```

Automation action failed event

An automation change failed or was refused; `reason` says why.  ### Skipped changes  A change refused before any platform call has `status: skipped`, for example no live ads or a budget at its limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_automation_action = {"id":"00000000-0000-4000-8000-000000000000","event":"automation.action.failed","timestamp":"2026-01-15T10:00:00Z","automation":{"id":"507f1f77bcf86cd799439027","kind":"ad_rule"},"accountId":"507f1f77bcf86cd799439011","checkId":"507f1f77bcf86cd799439028","action":{"id":"507f1f77bcf86cd799439030","subjectId":"120210000000000002","type":"adjust_budget","status":"failed","reason":"The platform refused the budget: below the minimum daily budget.","previous":{"dailyBudget":40},"target":{"dailyBudget":48},"actedAt":"2026-01-15T10:00:00.000Z"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAutomationAction

try {
    $apiInstance->onAutomationActionFailed($webhook_payload_automation_action);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAutomationActionFailed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_automation_action** | [**\Zernio\Model\WebhookPayloadAutomationAction**](../Model/WebhookPayloadAutomationAction.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAutomationActionUnknown()`

```php
onAutomationActionUnknown($webhook_payload_automation_action)
```

Automation action unknown event

The platform did not answer, so it is unknown whether the automation's change happened.  ### What happens next  The next check reads the object back and sends `applied` or `failed`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_automation_action = {"id":"00000000-0000-4000-8000-000000000000","event":"automation.action.unknown","timestamp":"2026-01-15T10:00:00Z","automation":{"id":"507f1f77bcf86cd799439027","kind":"ad_rule"},"accountId":"507f1f77bcf86cd799439011","checkId":"507f1f77bcf86cd799439028","action":{"id":"507f1f77bcf86cd799439030","subjectId":"120210000000000002","type":"adjust_budget","status":"unknown","reason":"The platform did not answer in time.","previous":{"dailyBudget":40},"target":{"dailyBudget":48},"actedAt":"2026-01-15T10:00:00.000Z"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAutomationAction

try {
    $apiInstance->onAutomationActionUnknown($webhook_payload_automation_action);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAutomationActionUnknown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_automation_action** | [**\Zernio\Model\WebhookPayloadAutomationAction**](../Model/WebhookPayloadAutomationAction.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAutomationAlertEscalated()`

```php
onAutomationAlertEscalated($webhook_payload_automation_alert)
```

Automation alert escalated event

An open alert's `critical` conditions held.  ### When it fires  Sent once per episode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_automation_alert = {"id":"00000000-0000-4000-8000-000000000000","event":"automation.alert.escalated","timestamp":"2026-01-15T10:00:00Z","automation":{"id":"507f1f77bcf86cd799439027","kind":"ad_rule"},"accountId":"507f1f77bcf86cd799439011","checkId":"507f1f77bcf86cd799439028","alert":{"id":"507f1f77bcf86cd799439030","subjectId":"120210000000000002","severity":"critical","reason":null},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAutomationAlert

try {
    $apiInstance->onAutomationAlertEscalated($webhook_payload_automation_alert);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAutomationAlertEscalated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_automation_alert** | [**\Zernio\Model\WebhookPayloadAutomationAlert**](../Model/WebhookPayloadAutomationAlert.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAutomationAlertOpened()`

```php
onAutomationAlertOpened($webhook_payload_automation_alert)
```

Automation alert opened event

An object matched the rule's conditions for `confirmChecks` runs in a row and its action was recorded.  ### When it fires  Sent once per episode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_automation_alert = {"id":"00000000-0000-4000-8000-000000000000","event":"automation.alert.opened","timestamp":"2026-01-15T10:00:00Z","automation":{"id":"507f1f77bcf86cd799439027","kind":"ad_rule"},"accountId":"507f1f77bcf86cd799439011","checkId":"507f1f77bcf86cd799439028","alert":{"id":"507f1f77bcf86cd799439030","subjectId":"120210000000000002","severity":"warning","reason":null},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAutomationAlert

try {
    $apiInstance->onAutomationAlertOpened($webhook_payload_automation_alert);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAutomationAlertOpened: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_automation_alert** | [**\Zernio\Model\WebhookPayloadAutomationAlert**](../Model/WebhookPayloadAutomationAlert.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAutomationAlertResolved()`

```php
onAutomationAlertResolved($webhook_payload_automation_alert)
```

Automation alert resolved event

An open alert ended; `reason` says which way.  ### Reasons  Its conditions cleared, a pause or reactivation applied, the rule changed, or nothing checked the object for 7 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_automation_alert = {"id":"00000000-0000-4000-8000-000000000000","event":"automation.alert.resolved","timestamp":"2026-01-15T10:00:00Z","automation":{"id":"507f1f77bcf86cd799439027","kind":"ad_rule"},"accountId":"507f1f77bcf86cd799439011","checkId":"507f1f77bcf86cd799439028","alert":{"id":"507f1f77bcf86cd799439030","subjectId":"120210000000000002","severity":"critical","reason":"condition_cleared"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAutomationAlert

try {
    $apiInstance->onAutomationAlertResolved($webhook_payload_automation_alert);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAutomationAlertResolved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_automation_alert** | [**\Zernio\Model\WebhookPayloadAutomationAlert**](../Model/WebhookPayloadAutomationAlert.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAutomationCheckCompleted()`

```php
onAutomationCheckCompleted($webhook_payload_automation_check_completed)
```

Automation check completed event

One scheduled check of an automation finished, including checks where nothing matched.  ### Payload notes  `automation.kind` names the product: `ad_rule` today, more as other automations move onto the same engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_automation_check_completed = {"id":"00000000-0000-4000-8000-000000000000","event":"automation.check.completed","timestamp":"2026-01-15T10:00:00Z","automation":{"id":"507f1f77bcf86cd799439027","kind":"ad_rule"},"accountId":"507f1f77bcf86cd799439011","check":{"id":"507f1f77bcf86cd799439028","slot":"2026-01-15T10:00:00.000Z","outcome":"triggered","subjectsEvaluated":12,"actionsCount":1,"error":null},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadAutomationCheckCompleted

try {
    $apiInstance->onAutomationCheckCompleted($webhook_payload_automation_check_completed);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAutomationCheckCompleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_automation_check_completed** | [**\Zernio\Model\WebhookPayloadAutomationCheckCompleted**](../Model/WebhookPayloadAutomationCheckCompleted.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onBalanceCharged()`

```php
onBalanceCharged($webhook_payload_balance_charged)
```

Balance charged event

Balance billing only. Funds were added to the balance by card: by someone (`trigger: manual`) or by the auto top-up rule (`trigger: auto_top_up`).  ### When it fires  Once per card payment into the balance, when it is credited. Stripe emails the billing owner its receipt for the charge.  ### Payload notes  `topup.amountCents` was added to the balance; the card was charged `topup.chargedCents`, which is that plus `topup.taxCents` (VAT, 0 when none applies). The invoice and receipt are at `GET /v1/balance/top-ups/{topupId}/invoice` and `/receipt`.  ### Who receives it  The billing owner's endpoints, like `balance.low`. Restricted keys need the `money` resource group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_balance_charged = {"id":"00000000-0000-4000-8000-000000000000","event":"balance.charged","timestamp":"2026-01-15T10:00:00Z","topup":{"id":"6650a1b2c3d4e5f6a7b8c9d0","trigger":"auto_top_up","amountCents":2000,"taxCents":420,"chargedCents":2420,"currency":"usd","card":{"brand":"visa","last4":"4242"}},"balance":{"spendableCents":2000}}; // \Zernio\Model\WebhookPayloadBalanceCharged

try {
    $apiInstance->onBalanceCharged($webhook_payload_balance_charged);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onBalanceCharged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_balance_charged** | [**\Zernio\Model\WebhookPayloadBalanceCharged**](../Model/WebhookPayloadBalanceCharged.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onBalanceEmpty()`

```php
onBalanceEmpty($webhook_payload_balance_empty)
```

Balance empty event

Balance billing only. The balance reached $0 and no auto top-up covered it (auto top-up off, the card declined, or the monthly limit reached), so new pay-per-use (SMS, calls, numbers, X and the rest) answers 402 with `code` until the balance is funded.  ### When it fires  Once per time the balance runs out, within about a minute of the usage that emptied it. Funding the balance and running out again fires it again.  ### Who receives it  The billing owner's endpoints, like `balance.low`. Restricted keys need the `money` resource group.  ### How to act  Send the user to `fundingUrl`, or, for `usage_limit_reached`, raise `monthlyLimitCents` with `PATCH /v1/balance/auto-recharge`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_balance_empty = {"id":"00000000-0000-4000-8000-000000000000","event":"balance.empty","timestamp":"2026-01-15T10:00:00Z","balance":{"spendableCents":0},"code":"insufficient_balance","fundingUrl":"https://zernio.com/dashboard/billing?funding=1"}; // \Zernio\Model\WebhookPayloadBalanceEmpty

try {
    $apiInstance->onBalanceEmpty($webhook_payload_balance_empty);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onBalanceEmpty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_balance_empty** | [**\Zernio\Model\WebhookPayloadBalanceEmpty**](../Model/WebhookPayloadBalanceEmpty.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onBalanceLow()`

```php
onBalanceLow($webhook_payload_balance_low)
```

Balance low event

Balance billing only. The balance dropped below the low-balance alert set on auto top-up (`alertBelowCents` on `GET /v1/balance/auto-recharge`).  ### When it fires  Once per drop below the threshold; a balance back at or above it re-arms the next one. It does not fire when an auto top-up is already covering the drop, and never when no alert is set.  ### Who receives it  It belongs to the billing owner, not to a profile or account: endpoints scoped with `profileIds` or `accountIds` do not receive it. Restricted keys need the `money` resource group.  ### How to act  Send the user to `fundingUrl` (Billing with the Add funds drawer open), or add funds through the API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_balance_low = {"id":"00000000-0000-4000-8000-000000000000","event":"balance.low","timestamp":"2026-01-15T10:00:00Z","balance":{"spendableCents":420,"alertBelowCents":500},"fundingUrl":"https://zernio.com/dashboard/billing?funding=1"}; // \Zernio\Model\WebhookPayloadBalanceLow

try {
    $apiInstance->onBalanceLow($webhook_payload_balance_low);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onBalanceLow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_balance_low** | [**\Zernio\Model\WebhookPayloadBalanceLow**](../Model/WebhookPayloadBalanceLow.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onBrandedCallingIdentityActionRequired()`

```php
onBrandedCallingIdentityActionRequired($on_branded_calling_identity_action_required_request)
```

Caller identity action required event

A Branded Calling caller identity is waiting on you; `reason` says what.  ### When it fires  Every `action_required` is paired with a `status_updated`.  ### Reasons  - `changes_requested`: answer the review with `PATCH`. - `email_code`: confirm the code the carrier emailed the authorizer. - `rejected`: fix and `PATCH`. - `expired`: resubmit.  ### Infringement claim  `infringement_claim`: a third party filed a trademark or impersonation claim and the carrier suspended the identity. Calls show a plain number and the monthly fee pauses until it is resolved.  Reply to our email with evidence that the name and logo are yours. If the claim is upheld, the identity is rejected for good.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$on_branded_calling_identity_action_required_request = {"id":"00000000-0000-4000-8000-000000000000","event":"branded_calling.identity.action_required","timestamp":"2026-01-15T10:00:00Z","identity":{"id":"507f1f77bcf86cd79943901c","displayName":"Sample Brand","status":"changes_requested"},"reason":"changes_requested","message":"The authorizer email domain must match the business website."}; // \Zernio\Model\OnBrandedCallingIdentityActionRequiredRequest

try {
    $apiInstance->onBrandedCallingIdentityActionRequired($on_branded_calling_identity_action_required_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onBrandedCallingIdentityActionRequired: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_branded_calling_identity_action_required_request** | [**\Zernio\Model\OnBrandedCallingIdentityActionRequiredRequest**](../Model/OnBrandedCallingIdentityActionRequiredRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onBrandedCallingIdentityStatusUpdated()`

```php
onBrandedCallingIdentityStatusUpdated($on_branded_calling_identity_status_updated_request)
```

Caller identity status updated event

A Branded Calling caller identity changed status.  ### When it fires  Fires once per transition of the identity's `status`, the value `GET /v1/branded-calling/identities/{id}` returns. Never on a re-check that found nothing new.  ### Statuses  `requested`, `changes_requested`, `rejected` (`reason` says why), `pending_email_verification`, `in_review`, `verified` (live for a year, attach numbers), `suspended` (infringement claim open), `expired`, `permanently_rejected`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$on_branded_calling_identity_status_updated_request = {"id":"00000000-0000-4000-8000-000000000000","event":"branded_calling.identity.status_updated","timestamp":"2026-01-15T10:00:00Z","identity":{"id":"507f1f77bcf86cd79943901c","displayName":"Sample Brand","status":"verified"},"status":"verified"}; // \Zernio\Model\OnBrandedCallingIdentityStatusUpdatedRequest

try {
    $apiInstance->onBrandedCallingIdentityStatusUpdated($on_branded_calling_identity_status_updated_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onBrandedCallingIdentityStatusUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_branded_calling_identity_status_updated_request** | [**\Zernio\Model\OnBrandedCallingIdentityStatusUpdatedRequest**](../Model/OnBrandedCallingIdentityStatusUpdatedRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onBrandedCallingNumberStatusUpdated()`

```php
onBrandedCallingNumberStatusUpdated($on_branded_calling_number_status_updated_request)
```

Branded number status updated event

A number attached to a Branded Calling identity changed vetting status.  ### When it fires  Only starts once the identity is `verified` and you attached numbers. A batch is vetted as a unit; each number reports its own status.  ### Statuses  `submitted`, `in_review`, `verified` (calls from it show the identity), `unsuccessful` (refused; detach and re-add to retry), `suspended`, `expired`, `permanently_rejected` (can never be branded again).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$on_branded_calling_number_status_updated_request = {"id":"00000000-0000-4000-8000-000000000000","event":"branded_calling.number.status_updated","timestamp":"2026-01-15T10:00:00Z","identity":{"id":"507f1f77bcf86cd79943901c","displayName":"Sample Brand"},"number":{"phoneNumberId":"507f1f77bcf86cd79943901a","phoneNumber":"+15555550100","status":"verified"}}; // \Zernio\Model\OnBrandedCallingNumberStatusUpdatedRequest

try {
    $apiInstance->onBrandedCallingNumberStatusUpdated($on_branded_calling_number_status_updated_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onBrandedCallingNumberStatusUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_branded_calling_number_status_updated_request** | [**\Zernio\Model\OnBrandedCallingNumberStatusUpdatedRequest**](../Model/OnBrandedCallingNumberStatusUpdatedRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCalendarEventCreated()`

```php
onCalendarEventCreated($webhook_payload_calendar_event)
```

Calendar event created

An event was added to the primary calendar of a connected mailbox, by the user, an invitation or the API.  ### Platform notes  On Microsoft the change is pushed seconds after it happens.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_calendar_event = {"id":"00000000-0000-4000-8000-000000000000","event":"calendar.event.created","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"google","username":"jane@example.com","displayName":"Jane Doe"},"calendarEvent":{"id":"7kq3v2m1n0abcdefghijklmnop","changeType":"created"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCalendarEvent

try {
    $apiInstance->onCalendarEventCreated($webhook_payload_calendar_event);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCalendarEventCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_calendar_event** | [**\Zernio\Model\WebhookPayloadCalendarEvent**](../Model/WebhookPayloadCalendarEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCalendarEventDeleted()`

```php
onCalendarEventDeleted($webhook_payload_calendar_event)
```

Calendar event deleted

An event was deleted from the primary calendar.  ### Platform notes  On Google, a cancelled event counts as deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_calendar_event = {"id":"00000000-0000-4000-8000-000000000000","event":"calendar.event.deleted","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"google","username":"jane@example.com","displayName":"Jane Doe"},"calendarEvent":{"id":"7kq3v2m1n0abcdefghijklmnop","changeType":"deleted"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCalendarEvent

try {
    $apiInstance->onCalendarEventDeleted($webhook_payload_calendar_event);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCalendarEventDeleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_calendar_event** | [**\Zernio\Model\WebhookPayloadCalendarEvent**](../Model/WebhookPayloadCalendarEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCalendarEventUpdated()`

```php
onCalendarEventUpdated($webhook_payload_calendar_event)
```

Calendar event updated

An event on the primary calendar changed: its time, details or participants' answers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_calendar_event = {"id":"00000000-0000-4000-8000-000000000000","event":"calendar.event.updated","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"google","username":"jane@example.com","displayName":"Jane Doe"},"calendarEvent":{"id":"7kq3v2m1n0abcdefghijklmnop","changeType":"updated"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCalendarEvent

try {
    $apiInstance->onCalendarEventUpdated($webhook_payload_calendar_event);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCalendarEventUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_calendar_event** | [**\Zernio\Model\WebhookPayloadCalendarEvent**](../Model/WebhookPayloadCalendarEvent.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCallEnded()`

```php
onCallEnded($webhook_payload_call_ended)
```

Call ended event

A phone or WhatsApp call ended; carries duration, end reason and a zero-markup cost breakdown.  ### Payload notes  `durationSeconds`; `endReason` is `hangup`, `no_answer`, `rejected` or `error`; `call.billing` holds Meta cost, Telnyx cost, recording surcharge and total. Costs are pass-through, with no margin.  ### When it fires  Unanswered, busy and rejected calls end here too. Branch on `endReason`; `call.failed` is for hard errors.  ### Recordings  With recording enabled, the payload carries `recordingUrl`, a signed URL expiring at `recordingExpiresAt`. Fetch a fresh one with `GET /v1/calls/{id}/recording` and `call.id`.  ### Missed-call follow-up  Check for `endReason: \"no_answer\"`, then text the caller over the linked `conversationId`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_call_ended = {"id":"00000000-0000-4000-8000-000000000000","event":"call.ended","timestamp":"2026-01-15T10:00:00Z","call":{"id":"507f1f77bcf86cd799439017","metaCallId":"wacid.SAMPLE1234567890","accountId":"507f1f77bcf86cd799439011","phoneNumberId":"100000000000001","direction":"inbound","from":"+15555550123","to":"+15555550100","contactId":"507f1f77bcf86cd799439016","conversationId":"507f1f77bcf86cd799439014","startedAt":"2026-01-14T10:00:00.000Z","endedAt":"2026-01-15T10:00:00.000Z","durationSeconds":125,"endReason":"hangup","hangupCause":"normal_clearing","sipHangupCause":"200","isVoicemail":false,"callErrors":[],"billing":{"metaCostUSD":0.01,"telnyxCostUSD":0.02,"recordingCostUSD":0,"billableCostUSD":0.02,"totalCostUSD":0.03}},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"whatsapp","username":"+15555550100","displayName":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCallEnded

try {
    $apiInstance->onCallEnded($webhook_payload_call_ended);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCallEnded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_call_ended** | [**\Zernio\Model\WebhookPayloadCallEnded**](../Model/WebhookPayloadCallEnded.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCallFailed()`

```php
onCallFailed($webhook_payload_call_failed)
```

Call failed event

A call failed with a hard error before or during bridging, for example the destination rejected the SIP INVITE.  ### Payload notes  Carries the upstream error `code` and `message`, for example when Meta rejected the connect or Telnyx returned an error.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_call_failed = {"id":"00000000-0000-4000-8000-000000000000","event":"call.failed","timestamp":"2026-01-15T10:00:00Z","call":{"id":"507f1f77bcf86cd799439017","metaCallId":"wacid.SAMPLE1234567890","accountId":"507f1f77bcf86cd799439011","phoneNumberId":"100000000000001","direction":"inbound","from":"+15555550123","to":"+15555550100","contactId":"507f1f77bcf86cd799439016","conversationId":"507f1f77bcf86cd799439014","failedAt":"2026-01-15T10:00:00.000Z","error":{"code":138006,"message":"Call failed: recipient unreachable"}},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"whatsapp","username":"+15555550100","displayName":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCallFailed

try {
    $apiInstance->onCallFailed($webhook_payload_call_failed);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCallFailed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_call_failed** | [**\Zernio\Model\WebhookPayloadCallFailed**](../Model/WebhookPayloadCallFailed.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCallPermissionRequest()`

```php
onCallPermissionRequest($webhook_payload_call_permission_request)
```

Call permission request reply event

A WhatsApp user accepted or rejected your call-permission request.  ### When it fires  Independent of any call: it reports a reply to a permission prompt. Meta permits a business-initiated call only after the consumer taps Allow, and the accept can land days before the call.  ### Payload notes  `response` is `accept` or `reject`. Also carries the user's number, whether the grant is permanent, and the expiry when it is not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_call_permission_request = {"id":"00000000-0000-4000-8000-000000000000","event":"call.permission_request","timestamp":"2026-01-15T10:00:00Z","permission":{"from":"+15555550123","response":"accept","isPermanent":false,"expirationTimestamp":"2026-01-22T10:00:00.000Z","responseSource":"user_action"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"whatsapp","username":"+15555550100","displayName":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCallPermissionRequest

try {
    $apiInstance->onCallPermissionRequest($webhook_payload_call_permission_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCallPermissionRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_call_permission_request** | [**\Zernio\Model\WebhookPayloadCallPermissionRequest**](../Model/WebhookPayloadCallPermissionRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCallReceived()`

```php
onCallReceived($webhook_payload_call_received)
```

Call received event

An inbound phone or WhatsApp call reached your number, or an outbound WhatsApp call was placed.  ### When it fires  Fires at ring time, before anyone answers; an unanswered call still emits it, then `call.ended` with `endReason: \"no_answer\"`. Outbound WhatsApp calls fire at origination with `direction: \"outbound\"`. Outbound phone calls never emit it.  ### Payload notes  Carries the Zernio call id, the caller and business numbers, the destination snapshot (`forwardTo`), and `contactId` and `conversationId` to message the caller with the regular send endpoints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_call_received = {"id":"00000000-0000-4000-8000-000000000000","event":"call.received","timestamp":"2026-01-15T10:00:00Z","call":{"id":"507f1f77bcf86cd799439017","metaCallId":"wacid.SAMPLE1234567890","accountId":"507f1f77bcf86cd799439011","phoneNumberId":"100000000000001","direction":"inbound","from":"+15555550123","to":"+15555550100","contactId":"507f1f77bcf86cd799439016","conversationId":"507f1f77bcf86cd799439014","startedAt":"2026-01-15T10:00:00.000Z"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"whatsapp","username":"+15555550100","displayName":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCallReceived

try {
    $apiInstance->onCallReceived($webhook_payload_call_received);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCallReceived: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_call_received** | [**\Zernio\Model\WebhookPayloadCallReceived**](../Model/WebhookPayloadCallReceived.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCampaignBudgetDepleted()`

```php
onCampaignBudgetDepleted($webhook_payload_campaign_budget_depleted)
```

Campaign budget depleted event

A campaign Zernio already tracked ran out of budget. TikTok only.  ### When it fires  Fires once per campaign when its budget runs out, at most once per 6 hours, so a daily budget that runs out again the next day is announced again.  ### When it does not fire  Ads seen for the first time by a sync never fire it.  ### Platform notes  Only TikTok reports this on the ad. Meta and Google keep such ads `ACTIVE`, so they never fire it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_campaign_budget_depleted = {"id":"00000000-0000-4000-8000-000000000000","event":"campaign.budget.depleted","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"tiktokads","username":"sample_brand","displayName":"Sample Brand"},"adObject":{"level":"CAMPAIGN","platformId":"1800000000000001","platformAdAccountId":"7000000000000000001","name":"Autumn launch"},"budget":{"raw":"AD_STATUS_CAMPAIGN_EXCEED"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCampaignBudgetDepleted

try {
    $apiInstance->onCampaignBudgetDepleted($webhook_payload_campaign_budget_depleted);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCampaignBudgetDepleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_campaign_budget_depleted** | [**\Zernio\Model\WebhookPayloadCampaignBudgetDepleted**](../Model/WebhookPayloadCampaignBudgetDepleted.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCampaignCreated()`

```php
onCampaignCreated($webhook_payload_campaign_created)
```

Campaign created event

A campaign was created through Zernio (`source: \"zernio\"`) or detected by the sync (`source: \"platform\"`).  ### When it fires  Fires once the campaign row is recorded. A detected campaign arrives up to one sync interval late.  ### When it does not fire  History loaded when an account connects, and campaigns created more than 7 days ago, are never announced.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_campaign_created = {"id":"00000000-0000-4000-8000-000000000000","event":"campaign.created","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"metaads","username":"sample_brand","displayName":"Sample Brand"},"adObject":{"level":"CAMPAIGN","platformId":"120200000000000010","platformAdAccountId":"act_1234567890","name":"Spring campaign"},"source":"zernio","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCampaignCreated

try {
    $apiInstance->onCampaignCreated($webhook_payload_campaign_created);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCampaignCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_campaign_created** | [**\Zernio\Model\WebhookPayloadCampaignCreated**](../Model/WebhookPayloadCampaignCreated.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCampaignParticipantJoined()`

```php
onCampaignParticipantJoined($webhook_payload_campaign_participant)
```

Campaign participant joined event

A creator joined a campaign from their invite link or the open link.  ### When it fires  It fires once per participant, and `participant.joinedAt` says when.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_campaign_participant = {"id":"00000000-0000-4000-8000-000000000000","event":"campaign_participant.joined","timestamp":"2026-01-15T10:00:00Z","campaign":{"id":"507f1f77bcf86cd799439029","name":"Launch clips"},"participant":{"id":"507f1f77bcf86cd79943902a","status":"active","joinedAt":"2026-01-15T10:00:00.000Z"},"creator":{"id":"507f1f77bcf86cd79943902b","displayName":"Cleo"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCampaignParticipant

try {
    $apiInstance->onCampaignParticipantJoined($webhook_payload_campaign_participant);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCampaignParticipantJoined: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_campaign_participant** | [**\Zernio\Model\WebhookPayloadCampaignParticipant**](../Model/WebhookPayloadCampaignParticipant.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCampaignParticipantRemoved()`

```php
onCampaignParticipantRemoved($webhook_payload_campaign_participant)
```

Campaign participant removed event

You removed a participant from the campaign.  ### When it does not fire  Removing a participant twice fires the event once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_campaign_participant = {"id":"00000000-0000-4000-8000-000000000000","event":"campaign_participant.removed","timestamp":"2026-01-15T10:00:00Z","campaign":{"id":"507f1f77bcf86cd799439029","name":"Launch clips"},"participant":{"id":"507f1f77bcf86cd79943902a","status":"removed","joinedAt":"2026-01-15T10:00:00.000Z"},"creator":{"id":"507f1f77bcf86cd79943902b","displayName":"Cleo"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCampaignParticipant

try {
    $apiInstance->onCampaignParticipantRemoved($webhook_payload_campaign_participant);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCampaignParticipantRemoved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_campaign_participant** | [**\Zernio\Model\WebhookPayloadCampaignParticipant**](../Model/WebhookPayloadCampaignParticipant.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCampaignParticipantSuspended()`

```php
onCampaignParticipantSuspended($webhook_payload_campaign_participant)
```

Campaign participant suspended event

You suspended a participant.  ### Effect  They can no longer connect accounts or submit posts to this campaign. Posts they already submitted keep earning until you reject them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_campaign_participant = {"id":"00000000-0000-4000-8000-000000000000","event":"campaign_participant.suspended","timestamp":"2026-01-15T10:00:00Z","campaign":{"id":"507f1f77bcf86cd799439029","name":"Launch clips"},"participant":{"id":"507f1f77bcf86cd79943902a","status":"suspended","joinedAt":"2026-01-15T10:00:00.000Z"},"creator":{"id":"507f1f77bcf86cd79943902b","displayName":"Cleo"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCampaignParticipant

try {
    $apiInstance->onCampaignParticipantSuspended($webhook_payload_campaign_participant);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCampaignParticipantSuspended: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_campaign_participant** | [**\Zernio\Model\WebhookPayloadCampaignParticipant**](../Model/WebhookPayloadCampaignParticipant.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCampaignPayoutFailed()`

```php
onCampaignPayoutFailed($webhook_payload_campaign_payout)
```

Campaign payout failed event

A payout through Zernio did not reach the creator.  ### When it fires  Stripe refused it, it stayed unconfirmed for 24 hours, or it was reversed. The amount is payable again, minus anything a rejection claws back.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_campaign_payout = {"id":"00000000-0000-4000-8000-000000000000","event":"campaign_payout.failed","timestamp":"2026-01-15T10:00:00Z","campaign":{"id":"507f1f77bcf86cd799439029","name":"Launch clips","settlement":"treasury"},"participant":{"id":"507f1f77bcf86cd79943902a"},"creator":{"id":"507f1f77bcf86cd79943902b","displayName":"Cleo"},"payout":{"payableCents":4800,"failure":{"transferId":"507f1f77bcf86cd79943902e","amountCents":4800,"reason":"reversed"}},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCampaignPayout

try {
    $apiInstance->onCampaignPayoutFailed($webhook_payload_campaign_payout);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCampaignPayoutFailed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_campaign_payout** | [**\Zernio\Model\WebhookPayloadCampaignPayout**](../Model/WebhookPayloadCampaignPayout.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCampaignPayoutPayable()`

```php
onCampaignPayoutPayable($webhook_payload_campaign_payout)
```

Campaign payout payable event

A participant's held earnings matured and became payable.  ### Payload notes  `payout.payableCents` is the participant's whole payable balance, the amount to pay when you pay from your own rails.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_campaign_payout = {"id":"00000000-0000-4000-8000-000000000000","event":"campaign_payout.payable","timestamp":"2026-01-15T10:00:00Z","campaign":{"id":"507f1f77bcf86cd799439029","name":"Launch clips","settlement":"external"},"participant":{"id":"507f1f77bcf86cd79943902a"},"creator":{"id":"507f1f77bcf86cd79943902b","displayName":"Cleo"},"payout":{"payableCents":4800},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCampaignPayout

try {
    $apiInstance->onCampaignPayoutPayable($webhook_payload_campaign_payout);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCampaignPayoutPayable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_campaign_payout** | [**\Zernio\Model\WebhookPayloadCampaignPayout**](../Model/WebhookPayloadCampaignPayout.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCampaignPayoutSettled()`

```php
onCampaignPayoutSettled($webhook_payload_campaign_payout)
```

Campaign payout settled event

A payout to a participant was recorded.  ### Payload notes  `payout.settlement` holds the amount and the reference. `recorded` is true when the money moved outside Zernio.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_campaign_payout = {"id":"00000000-0000-4000-8000-000000000000","event":"campaign_payout.settled","timestamp":"2026-01-15T10:00:00Z","campaign":{"id":"507f1f77bcf86cd799439029","name":"Launch clips","settlement":"external"},"participant":{"id":"507f1f77bcf86cd79943902a"},"creator":{"id":"507f1f77bcf86cd79943902b","displayName":"Cleo"},"payout":{"payableCents":0,"settlement":{"entryId":"507f1f77bcf86cd79943902d","amountCents":4800,"externalReference":"po_8f3a2","recorded":true}},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCampaignPayout

try {
    $apiInstance->onCampaignPayoutSettled($webhook_payload_campaign_payout);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCampaignPayoutSettled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_campaign_payout** | [**\Zernio\Model\WebhookPayloadCampaignPayout**](../Model/WebhookPayloadCampaignPayout.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCampaignSubmissionApproved()`

```php
onCampaignSubmissionApproved($webhook_payload_campaign_submission)
```

Campaign submission approved event

You approved a submission.  ### Earnings  What the submission earned so far moves to owed with the campaign hold. Later earnings post straight to owed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_campaign_submission = {"id":"00000000-0000-4000-8000-000000000000","event":"campaign_submission.approved","timestamp":"2026-01-15T10:00:00Z","campaign":{"id":"507f1f77bcf86cd799439029","name":"Launch clips"},"participant":{"id":"507f1f77bcf86cd79943902a"},"creator":{"id":"507f1f77bcf86cd79943902b","displayName":"Cleo"},"submission":{"id":"507f1f77bcf86cd79943902c","platform":"tiktok","platformPostId":"7300000000000000001","platformPostUrl":"https://www.tiktok.com/@cleo/video/7300000000000000001","status":"approved","viewsAtSubmission":120,"viewsEligible":4800,"engagementsLatest":310,"viewsPaid":0,"flags":[]},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCampaignSubmission

try {
    $apiInstance->onCampaignSubmissionApproved($webhook_payload_campaign_submission);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCampaignSubmissionApproved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_campaign_submission** | [**\Zernio\Model\WebhookPayloadCampaignSubmission**](../Model/WebhookPayloadCampaignSubmission.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCampaignSubmissionFlagged()`

```php
onCampaignSubmissionFlagged($webhook_payload_campaign_submission)
```

Campaign submission flagged event

A submission gained a fraud flag it did not carry before, at submission or on a later sync.  ### Flags  Flags include `duplicate_post`, `view_spike`, `low_authenticity` and `x_read_cap` (the campaign's X read budget is spent). `submission.flags` lists every flag it carries. Zernio never rejects on its own; the decision is yours.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_campaign_submission = {"id":"00000000-0000-4000-8000-000000000000","event":"campaign_submission.flagged","timestamp":"2026-01-15T10:00:00Z","campaign":{"id":"507f1f77bcf86cd799439029","name":"Launch clips"},"participant":{"id":"507f1f77bcf86cd79943902a"},"creator":{"id":"507f1f77bcf86cd79943902b","displayName":"Cleo"},"submission":{"id":"507f1f77bcf86cd79943902c","platform":"tiktok","platformPostId":"7300000000000000001","platformPostUrl":"https://www.tiktok.com/@cleo/video/7300000000000000001","status":"tracking","viewsAtSubmission":120,"viewsEligible":4800,"engagementsLatest":310,"viewsPaid":0,"flags":[{"code":"duplicate_post","detail":"This post was already submitted to another campaign"}]},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCampaignSubmission

try {
    $apiInstance->onCampaignSubmissionFlagged($webhook_payload_campaign_submission);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCampaignSubmissionFlagged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_campaign_submission** | [**\Zernio\Model\WebhookPayloadCampaignSubmission**](../Model/WebhookPayloadCampaignSubmission.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCampaignSubmissionPendingReview()`

```php
onCampaignSubmissionPendingReview($webhook_payload_campaign_submission)
```

Campaign submission pending review event

A submission is ready for your review.  ### When it fires  A CPM submission reached `minViewsToEarn`, a pool submission reached `minViewsToQualify`, and per post submissions arrive here after their first accrual.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_campaign_submission = {"id":"00000000-0000-4000-8000-000000000000","event":"campaign_submission.pending_review","timestamp":"2026-01-15T10:00:00Z","campaign":{"id":"507f1f77bcf86cd799439029","name":"Launch clips"},"participant":{"id":"507f1f77bcf86cd79943902a"},"creator":{"id":"507f1f77bcf86cd79943902b","displayName":"Cleo"},"submission":{"id":"507f1f77bcf86cd79943902c","platform":"tiktok","platformPostId":"7300000000000000001","platformPostUrl":"https://www.tiktok.com/@cleo/video/7300000000000000001","status":"pending_review","viewsAtSubmission":120,"viewsEligible":4800,"engagementsLatest":310,"viewsPaid":0,"flags":[]},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCampaignSubmission

try {
    $apiInstance->onCampaignSubmissionPendingReview($webhook_payload_campaign_submission);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCampaignSubmissionPendingReview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_campaign_submission** | [**\Zernio\Model\WebhookPayloadCampaignSubmission**](../Model/WebhookPayloadCampaignSubmission.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCampaignSubmissionReceived()`

```php
onCampaignSubmissionReceived($webhook_payload_campaign_submission)
```

Campaign submission received event

A creator submitted a post to a campaign, Zernio opened its tracking window and took the first view sample.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_campaign_submission = {"id":"00000000-0000-4000-8000-000000000000","event":"campaign_submission.received","timestamp":"2026-01-15T10:00:00Z","campaign":{"id":"507f1f77bcf86cd799439029","name":"Launch clips"},"participant":{"id":"507f1f77bcf86cd79943902a"},"creator":{"id":"507f1f77bcf86cd79943902b","displayName":"Cleo"},"submission":{"id":"507f1f77bcf86cd79943902c","platform":"tiktok","platformPostId":"7300000000000000001","platformPostUrl":"https://www.tiktok.com/@cleo/video/7300000000000000001","status":"tracking","viewsAtSubmission":120,"viewsEligible":4800,"engagementsLatest":310,"viewsPaid":0,"flags":[]},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCampaignSubmission

try {
    $apiInstance->onCampaignSubmissionReceived($webhook_payload_campaign_submission);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCampaignSubmissionReceived: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_campaign_submission** | [**\Zernio\Model\WebhookPayloadCampaignSubmission**](../Model/WebhookPayloadCampaignSubmission.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCampaignSubmissionRejected()`

```php
onCampaignSubmissionRejected($webhook_payload_campaign_submission)
```

Campaign submission rejected event

You rejected a submission and its tracking window was cancelled.  ### Earnings  Its unsettled earnings go back to the campaign budget.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_campaign_submission = {"id":"00000000-0000-4000-8000-000000000000","event":"campaign_submission.rejected","timestamp":"2026-01-15T10:00:00Z","campaign":{"id":"507f1f77bcf86cd799439029","name":"Launch clips"},"participant":{"id":"507f1f77bcf86cd79943902a"},"creator":{"id":"507f1f77bcf86cd79943902b","displayName":"Cleo"},"submission":{"id":"507f1f77bcf86cd79943902c","platform":"tiktok","platformPostId":"7300000000000000001","platformPostUrl":"https://www.tiktok.com/@cleo/video/7300000000000000001","status":"rejected","viewsAtSubmission":120,"viewsEligible":4800,"engagementsLatest":310,"viewsPaid":0,"flags":[]},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCampaignSubmission

try {
    $apiInstance->onCampaignSubmissionRejected($webhook_payload_campaign_submission);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCampaignSubmissionRejected: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_campaign_submission** | [**\Zernio\Model\WebhookPayloadCampaignSubmission**](../Model/WebhookPayloadCampaignSubmission.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCampaignUpdated()`

```php
onCampaignUpdated($webhook_payload_campaign_updated)
```

Campaign updated event

A campaign was edited through Zernio (`source: \"zernio\"`), or outside Zernio and detected by the sync (`source: \"platform\"`).  ### When it fires  Fires after the platform and Zernio both accepted the edit. Outside edits arrive up to one sync interval late, and only to the user whose sync saw them.  ### Deduplication  Events are not deduplicated, so every edit is announced. Use the event `id` to drop repeats.  ### Payload notes  `changes` lists the edited fields: `name`, `status` (the campaign's own on/off switch), `budget`, `bid` or `settings`. Ignore unknown values. It never carries old or new values, so read the campaign.  ### What the sync detects  From the sync, `changes` covers only `name`, `status` and `schedule`. Schedule is detected only on Google, LinkedIn, Pinterest and OpenAI Ads.  ### When it does not fire  Budget edits made outside Zernio and history loaded at connect are not announced. Ad set edits arrive as `ad_set.updated`. Ad rule changes arrive as `ad_rule.triggered`.  ### Google sub-resources  Edits to ad schedule, targeting, negative keywords, conversion goals, assets, asset groups and listing group filters are not announced.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_campaign_updated = {"id":"00000000-0000-4000-8000-000000000000","event":"campaign.updated","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"metaads","username":"sample_brand","displayName":"Sample Brand"},"adObject":{"level":"CAMPAIGN","platformId":"120200000000000010","platformAdAccountId":"act_1234567890","name":"Spring campaign"},"changes":["name","budget"],"source":"zernio","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCampaignUpdated

try {
    $apiInstance->onCampaignUpdated($webhook_payload_campaign_updated);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCampaignUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_campaign_updated** | [**\Zernio\Model\WebhookPayloadCampaignUpdated**](../Model/WebhookPayloadCampaignUpdated.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCommentReceived()`

```php
onCommentReceived($webhook_payload_comment)
```

Comment received event

A new comment arrived on a tracked post.  ### Platform notes  Delivered for Instagram, Facebook, Threads, YouTube, LinkedIn, Bluesky, Reddit and TikTok. X/Twitter does not fire it. TikTok needs an account connected through the TikTok for Business app.  ### Delivery timing  Instagram, Facebook, Threads and TikTok arrive in real time from the platform's webhook. The rest are poll-driven, so delivery is not instant.  ### Live comments  On Instagram, `comment.isLive: true` marks a comment made during a live broadcast. The key is absent on every other comment.  ### Ads  `comment.ad` is present only on comments made on paid content, so `if (comment.ad)` filters ad-driven comments.  ### Ad fields  Instagram carries `ad.id` and `ad.title`. Facebook carries `ad.promotionStatus`: `active` for boosted organic posts, `ineligible` for dark post creatives.  ### Instagram author profile  Comments may carry `comment.author.instagramProfile` (`isFollower`, `isFollowing`, `followerCount`, `isVerified`). An absent object means unknown, never \"not a follower\".  ### Why the profile is often absent  Meta reveals the follow relationship only for people who have messaged the account, and commenting does not grant that consent. The object is absent for most first-time commenters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_comment = {"id":"00000000-0000-4000-8000-000000000000","event":"comment.received","timestamp":"2026-01-15T10:00:00Z","comment":{"id":"17800000000000001","postId":"507f1f77bcf86cd799439013","platformPostId":"17900000000000001","platform":"instagram","text":"Love this! 😍","author":{"id":"17841400000000001","username":"sample_customer","isOwnAccount":false},"createdAt":"2026-01-15T10:00:00.000Z","isReply":false,"parentCommentId":null},"post":{"id":"507f1f77bcf86cd799439013","platformPostId":"17900000000000001","content":"Our spring collection is live!","imageUrl":null,"permalink":"https://www.instagram.com/p/SAMPLE123/"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"instagram","username":"sample_brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadComment

try {
    $apiInstance->onCommentReceived($webhook_payload_comment);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCommentReceived: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_comment** | [**\Zernio\Model\WebhookPayloadComment**](../Model/WebhookPayloadComment.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCommerceOrderCreated()`

```php
onCommerceOrderCreated($webhook_payload_commerce_order)
```

Commerce order created event

An order was placed in the store.  ### Payload notes  `resource.status` is its normalized state at that moment. Read the order with `GET /v1/commerce/orders/{orderId}?accountId=...`. Fires once per Zernio account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_commerce_order = {"id":"00000000-0000-4000-8000-000000000000","event":"commerce.order.created","timestamp":"2026-01-15T10:00:00Z","store":{"accountId":"507f1f77bcf86cd799439011","platform":"shopify","shopId":"sample-store.myshopify.com"},"resource":{"type":"order","id":"5000000000001","status":"awaiting_fulfillment","platformStatus":"UNFULFILLED"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCommerceOrder

try {
    $apiInstance->onCommerceOrderCreated($webhook_payload_commerce_order);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCommerceOrderCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_commerce_order** | [**\Zernio\Model\WebhookPayloadCommerceOrder**](../Model/WebhookPayloadCommerceOrder.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCommerceOrderRefunded()`

```php
onCommerceOrderRefunded($webhook_payload_commerce_order)
```

Commerce order refunded event

A refund was issued on an order.  ### Payload notes  `resource.id` is the order id, not the refund id. `resource.status` and `resource.platformStatus` are `null`. A `commerce.order.updated` usually follows for the same change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_commerce_order = {"id":"00000000-0000-4000-8000-000000000000","event":"commerce.order.refunded","timestamp":"2026-01-15T10:00:00Z","store":{"accountId":"507f1f77bcf86cd799439011","platform":"shopify","shopId":"sample-store.myshopify.com"},"resource":{"type":"order","id":"5000000000001","status":null,"platformStatus":null},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCommerceOrder

try {
    $apiInstance->onCommerceOrderRefunded($webhook_payload_commerce_order);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCommerceOrderRefunded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_commerce_order** | [**\Zernio\Model\WebhookPayloadCommerceOrder**](../Model/WebhookPayloadCommerceOrder.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCommerceOrderUpdated()`

```php
onCommerceOrderUpdated($webhook_payload_commerce_order)
```

Commerce order updated event

An order changed in the store, such as payment, fulfilment, cancellation or edits.  ### Payload notes  `resource.status` is the new state. Refunds also fire it. Fires once per Zernio account connected to the store.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_commerce_order = {"id":"00000000-0000-4000-8000-000000000000","event":"commerce.order.updated","timestamp":"2026-01-15T10:00:00Z","store":{"accountId":"507f1f77bcf86cd799439011","platform":"shopify","shopId":"sample-store.myshopify.com"},"resource":{"type":"order","id":"5000000000001","status":"in_transit","platformStatus":"FULFILLED"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCommerceOrder

try {
    $apiInstance->onCommerceOrderUpdated($webhook_payload_commerce_order);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCommerceOrderUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_commerce_order** | [**\Zernio\Model\WebhookPayloadCommerceOrder**](../Model/WebhookPayloadCommerceOrder.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCommerceProductCreated()`

```php
onCommerceProductCreated($webhook_payload_commerce_product)
```

Commerce product created event

A product was created in a connected Shopify store or WooCommerce site.  ### Payload notes  `resource.id` is the store's product id. Read the product with `GET /v1/commerce/products/{productId}?accountId=...`. Fires once per Zernio account connected to the store.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_commerce_product = {"id":"00000000-0000-4000-8000-000000000000","event":"commerce.product.created","timestamp":"2026-01-15T10:00:00Z","store":{"accountId":"507f1f77bcf86cd799439011","platform":"shopify","shopId":"sample-store.myshopify.com"},"resource":{"type":"product","id":"gid://shopify/Product/1000000000001","status":"active","platformStatus":"ACTIVE"}}; // \Zernio\Model\WebhookPayloadCommerceProduct

try {
    $apiInstance->onCommerceProductCreated($webhook_payload_commerce_product);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCommerceProductCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_commerce_product** | [**\Zernio\Model\WebhookPayloadCommerceProduct**](../Model/WebhookPayloadCommerceProduct.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCommerceProductDeleted()`

```php
onCommerceProductDeleted($webhook_payload_commerce_product)
```

Commerce product deleted event

A product was deleted in the store.  ### Payload notes  `resource.status` and `resource.platformStatus` are `null`. Fires once per Zernio account connected to the store.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_commerce_product = {"id":"00000000-0000-4000-8000-000000000000","event":"commerce.product.deleted","timestamp":"2026-01-15T10:00:00Z","store":{"accountId":"507f1f77bcf86cd799439011","platform":"shopify","shopId":"sample-store.myshopify.com"},"resource":{"type":"product","id":"gid://shopify/Product/1000000000001","status":null,"platformStatus":null}}; // \Zernio\Model\WebhookPayloadCommerceProduct

try {
    $apiInstance->onCommerceProductDeleted($webhook_payload_commerce_product);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCommerceProductDeleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_commerce_product** | [**\Zernio\Model\WebhookPayloadCommerceProduct**](../Model/WebhookPayloadCommerceProduct.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCommerceProductUpdated()`

```php
onCommerceProductUpdated($webhook_payload_commerce_product)
```

Commerce product updated event

A product changed in the store, or WooCommerce restored it from the trash.  ### Payload notes  Fields, status, variants or prices changed; read the product for what. There is no restored event. Fires once per Zernio account connected to the store.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_commerce_product = {"id":"00000000-0000-4000-8000-000000000000","event":"commerce.product.updated","timestamp":"2026-01-15T10:00:00Z","store":{"accountId":"507f1f77bcf86cd799439011","platform":"shopify","shopId":"sample-store.myshopify.com"},"resource":{"type":"product","id":"gid://shopify/Product/1000000000001","status":"active","platformStatus":"ACTIVE"}}; // \Zernio\Model\WebhookPayloadCommerceProduct

try {
    $apiInstance->onCommerceProductUpdated($webhook_payload_commerce_product);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCommerceProductUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_commerce_product** | [**\Zernio\Model\WebhookPayloadCommerceProduct**](../Model/WebhookPayloadCommerceProduct.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onContactDeleted()`

```php
onContactDeleted($webhook_payload_contact)
```

Contact deleted

A contact was deleted in Google Contacts or Outlook.  ### Effect  Zernio removes its email channel for that account; the contact stays when other channels remain. It arrives up to a day after the change, from the daily sync.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_contact = {"id":"00000000-0000-4000-8000-000000000000","event":"contact.deleted","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"google","username":"jane@example.com","displayName":"Jane Doe"},"contact":{"id":"507f1f77bcf86cd799439016","changeType":"deleted"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadContact

try {
    $apiInstance->onContactDeleted($webhook_payload_contact);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onContactDeleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_contact** | [**\Zernio\Model\WebhookPayloadContact**](../Model/WebhookPayloadContact.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onContactFieldChanged()`

```php
onContactFieldChanged($webhook_payload_contact_field_changed)
```

Contact field changed event

A contact custom field changed value; `field` is the field slug.  ### When it fires  Once per custom field whose value a write changed. Writing the current value fires nothing.  ### Payload notes  `previousValue` is `null` when the field was not set. `value` is `null` when it was removed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_contact_field_changed = {"id":"00000000-0000-4000-8000-000000000000","event":"contact.field_changed","timestamp":"2026-01-15T10:00:00Z","contact":{"id":"507f1f77bcf86cd799439016"},"field":"plan","previousValue":"free","value":"pro","source":"workflow","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadContactFieldChanged

try {
    $apiInstance->onContactFieldChanged($webhook_payload_contact_field_changed);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onContactFieldChanged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_contact_field_changed** | [**\Zernio\Model\WebhookPayloadContactFieldChanged**](../Model/WebhookPayloadContactFieldChanged.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onContactTagAdded()`

```php
onContactTagAdded($webhook_payload_contact_tag)
```

Contact tag added event

A tag was added to a contact by the API, a workflow `add_tag` node or a comment-automation click.  ### When it fires  Once per tag a write actually added. Re-adding a tag the contact already has fires nothing.  ### When it does not fire  Creating a contact with tags fires nothing. Only changes to an existing contact do.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_contact_tag = {"id":"00000000-0000-4000-8000-000000000000","event":"contact.tag_added","timestamp":"2026-01-15T10:00:00Z","contact":{"id":"507f1f77bcf86cd799439016"},"tag":"vip","source":"api","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadContactTag

try {
    $apiInstance->onContactTagAdded($webhook_payload_contact_tag);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onContactTagAdded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_contact_tag** | [**\Zernio\Model\WebhookPayloadContactTag**](../Model/WebhookPayloadContactTag.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onContactTagRemoved()`

```php
onContactTagRemoved($webhook_payload_contact_tag)
```

Contact tag removed event

A tag was removed from a contact.  ### When it fires  Once per tag a write actually removed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_contact_tag = {"id":"00000000-0000-4000-8000-000000000000","event":"contact.tag_removed","timestamp":"2026-01-15T10:00:00Z","contact":{"id":"507f1f77bcf86cd799439016"},"tag":"vip","source":"api","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadContactTag

try {
    $apiInstance->onContactTagRemoved($webhook_payload_contact_tag);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onContactTagRemoved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_contact_tag** | [**\Zernio\Model\WebhookPayloadContactTag**](../Model/WebhookPayloadContactTag.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onContactUpdated()`

```php
onContactUpdated($webhook_payload_contact)
```

Contact updated

A contact sync added or changed a contact; `contact.id` is the Zernio contact id.  ### When it fires  It fires from the daily sync of a Google Contacts or Outlook account, so up to a day after the change. It also fires when a WhatsApp coexistence address book adds or renames a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_contact = {"id":"00000000-0000-4000-8000-000000000000","event":"contact.updated","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"google","username":"jane@example.com","displayName":"Jane Doe"},"contact":{"id":"507f1f77bcf86cd799439016","changeType":"updated"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadContact

try {
    $apiInstance->onContactUpdated($webhook_payload_contact);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onContactUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_contact** | [**\Zernio\Model\WebhookPayloadContact**](../Model/WebhookPayloadContact.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onConversationControlChanged()`

```php
onConversationControlChanged($webhook_payload_conversation_control_changed)
```

Conversation control changed event

Control of a conversation moved under Meta's handover protocol (`messaging_handovers`).  ### Owner values  `control.owner` is `ai_agent` (Meta Business Agent, WhatsApp), `app` (you) or `other` (a WhatsApp partner app, or a receiver such as Page Inbox on Messenger and Instagram).  ### Control fields  `control.previousOwner` is `null` when no handover touched the thread. `control.ownerAppId` is the new owner's Meta app id when named (Page Inbox is `263902037430900`). `control.metadata` is the transferring app's note, verbatim.  ### WhatsApp  Meta Business Agent took the conversation, handed it to you, or another partner app took it. While `ai_agent` owns it, its replies arrive on `message.sent` with `source: \"meta_business_agent\"`.  ### Taking control on WhatsApp  Sending any message through the inbox takes control back. To hand it to the agent without sending, call `POST /v1/inbox/conversations/{conversationId}/thread-control` with `action: \"release\"`.  ### Facebook and Instagram  Another app on the Page passed the thread to you, or took or received it. While you are not the owner, sends answer `409` `not_thread_owner`.  ### Taking control on Facebook and Instagram  Call `POST /v1/inbox/conversations/{conversationId}/thread-control` with `action: \"take\"`, or `\"request\"` to ask the owner to pass it. Both answer 400 `platform_not_supported` on Instagram Login connections.  ### When it does not fire  A repeat report of the same owner fires nothing. A `request` changes nothing until the owner passes the thread.  ### Standby messages  While another app owns the conversation, inbound messages arrive on `message.received` with `metadata.standby: true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_conversation_control_changed = {"id":"00000000-0000-4000-8000-000000000000","event":"conversation.control_changed","timestamp":"2026-01-15T10:00:00Z","conversation":{"id":"507f1f77bcf86cd799439014","platformConversationId":"t_10000000000000001","participantId":"17841400000000001","participantName":"Sample Customer","participantUsername":"sample_customer","participantPicture":"https://example.com/sample-avatar.jpg","status":"active","contactId":"507f1f77bcf86cd799439016","platform":"instagram"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"instagram","username":"sample_brand","displayName":"Sample Brand"},"control":{"owner":"app","previousOwner":"other","ownerAppId":"100000000000002"},"changedAt":"2026-01-15T10:00:00.000Z","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadConversationControlChanged

try {
    $apiInstance->onConversationControlChanged($webhook_payload_conversation_control_changed);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onConversationControlChanged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_conversation_control_changed** | [**\Zernio\Model\WebhookPayloadConversationControlChanged**](../Model/WebhookPayloadConversationControlChanged.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onConversationStarted()`

```php
onConversationStarted($webhook_payload_conversation_started)
```

Conversation started event

A new conversation began between a connected account and a contact, in either direction, on any DM platform.  ### When it fires  Once per conversation, the first time it appears. Covers Instagram, Messenger, WhatsApp, Telegram, X, Reddit, Bluesky, TikTok, SMS, RCS, iMessage, Slack and email.  ### When it does not fire  DM history replayed when an Instagram or Facebook account connects never fires it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_conversation_started = {"id":"00000000-0000-4000-8000-000000000000","event":"conversation.started","timestamp":"2026-01-15T10:00:00Z","conversation":{"id":"507f1f77bcf86cd799439014","platformConversationId":"t_10000000000000001","participantId":"17841400000000001","participantName":"Sample Customer","participantUsername":"sample_customer","participantPicture":"https://example.com/sample-avatar.jpg","status":"active","contactId":"507f1f77bcf86cd799439016","platform":"instagram","metadata":{"meta_ad_id":"120210000000000001","meta_ad_ref":"spring-campaign","meta_ad_source":"ADS","meta_ad_type":"OPEN_THREAD","meta_ad_title":"Spring sale","meta_ad_captured_at":"2026-01-15T10:00:00.000Z"},"adAttribution":{"adId":"120210000000000001","name":"Spring sale carousel","synced":true,"campaignId":"120210000000000100","campaignName":"Spring leads","adSetId":"120210000000000200","adSetName":"Spain 25-44","adAccountId":"act_1234567890","adAccountName":"Sample Ad Account","platformPostId":null,"isExternal":true}},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"instagram","username":"sample_brand","displayName":"Sample Brand"},"startedAt":"2026-01-15T10:00:00.000Z","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadConversationStarted

try {
    $apiInstance->onConversationStarted($webhook_payload_conversation_started);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onConversationStarted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_conversation_started** | [**\Zernio\Model\WebhookPayloadConversationStarted**](../Model/WebhookPayloadConversationStarted.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCreatorCampaignBudgetExhausted()`

```php
onCreatorCampaignBudgetExhausted($webhook_payload_creator_campaign)
```

Creator campaign budget exhausted event

A campaign's earnings reached its budget.  ### When it fires  Nothing more accrues until budget is freed. It fires once per campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_creator_campaign = {"id":"00000000-0000-4000-8000-000000000000","event":"creator_campaign.budget_exhausted","timestamp":"2026-01-15T10:00:00Z","campaign":{"id":"507f1f77bcf86cd799439029","name":"Launch clips","budgetCents":100000,"budgetExhaustedAt":"2026-01-15T10:00:00.000Z"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCreatorCampaign

try {
    $apiInstance->onCreatorCampaignBudgetExhausted($webhook_payload_creator_campaign);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCreatorCampaignBudgetExhausted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_creator_campaign** | [**\Zernio\Model\WebhookPayloadCreatorCampaign**](../Model/WebhookPayloadCreatorCampaign.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCreatorCampaignClosed()`

```php
onCreatorCampaignClosed($webhook_payload_creator_campaign)
```

Creator campaign closed event

A campaign closed, either because you closed it or because `endsAt` passed.  ### When it fires  After `endsAt`, the campaign closes once every tracking window had its final read. A pool campaign is split among participants at this moment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_creator_campaign = {"id":"00000000-0000-4000-8000-000000000000","event":"creator_campaign.closed","timestamp":"2026-01-15T10:00:00Z","campaign":{"id":"507f1f77bcf86cd799439029","name":"Launch clips","budgetCents":100000,"closedAt":"2026-01-15T10:00:00.000Z"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadCreatorCampaign

try {
    $apiInstance->onCreatorCampaignClosed($webhook_payload_creator_campaign);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCreatorCampaignClosed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_creator_campaign** | [**\Zernio\Model\WebhookPayloadCreatorCampaign**](../Model/WebhookPayloadCreatorCampaign.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onEmailLinkClicked()`

```php
onEmailLinkClicked($webhook_payload_email_link_clicked)
```

Email link clicked

A recipient followed a link of a message sent with `trackLinks: true`. Every http(s) link in the html was rewritten to a Zernio redirect that records the click and sends the reader on to `click.url`.  Security scanners in corporate mail gateways sometimes follow links on delivery, which reports as a click.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_email_link_clicked = {"id":"00000000-0000-4000-8000-000000000000","event":"email.link_clicked","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"google","username":"jane@example.com","displayName":"Jane Doe"},"email":{"messageId":"18c2f3a4b5d6e7f8","threadId":"18c2f3a4b5d6e7f0","trackingId":"Xk2m9QpL4vR8sT1wY6zA3bC5","metadata":{"campaign":"onboarding"}},"click":{"url":"https://example.com/pricing","linkIndex":0,"clickedAt":"2026-01-15T10:00:00.000Z","count":1},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadEmailLinkClicked

try {
    $apiInstance->onEmailLinkClicked($webhook_payload_email_link_clicked);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onEmailLinkClicked: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_email_link_clicked** | [**\Zernio\Model\WebhookPayloadEmailLinkClicked**](../Model/WebhookPayloadEmailLinkClicked.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onEmailOpened()`

```php
onEmailOpened($webhook_payload_email_opened)
```

Email opened

A mail client loaded the open pixel of a message sent with `trackOpens: true`.  Opens are a signal, not proof of reading:  - Gmail and Apple Mail fetch images through their own proxies, some as soon as the mail arrives. - Clients that block images never report an open. - The sender viewing the message in their own Sent folder counts too.  Repeat fetches within 10 seconds raise `count` without firing again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_email_opened = {"id":"00000000-0000-4000-8000-000000000000","event":"email.opened","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"google","username":"jane@example.com","displayName":"Jane Doe"},"email":{"messageId":"18c2f3a4b5d6e7f8","threadId":"18c2f3a4b5d6e7f0","trackingId":"Xk2m9QpL4vR8sT1wY6zA3bC5","metadata":{"campaign":"onboarding"}},"open":{"openedAt":"2026-01-15T10:00:00.000Z","firstOpenedAt":"2026-01-14T10:00:00.000Z","count":2},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadEmailOpened

try {
    $apiInstance->onEmailOpened($webhook_payload_email_opened);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onEmailOpened: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_email_opened** | [**\Zernio\Model\WebhookPayloadEmailOpened**](../Model/WebhookPayloadEmailOpened.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onEmailSendFailed()`

```php
onEmailSendFailed($webhook_payload_email_send_failed)
```

Scheduled email failed

A send scheduled with `scheduledFor` could not leave at its time. Nothing reached the recipients. `error` says why, for example the mailbox was disconnected, the daily send cap was reached or the provider refused the mail. The send stays listed with `status: failed`; schedule it again to retry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_email_send_failed = {"id":"00000000-0000-4000-8000-000000000000","event":"email.send_failed","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"google","username":"jane@example.com","displayName":"Jane Doe"},"scheduledEmail":{"id":"507f1f77bcf86cd79943902f","scheduledFor":"2026-01-14T10:00:00.000Z","error":"Daily send limit of 200 reached for this mailbox. Resets at 2026-01-15T00:00:00.000Z.","metadata":{"campaign":"onboarding"}},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadEmailSendFailed

try {
    $apiInstance->onEmailSendFailed($webhook_payload_email_send_failed);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onEmailSendFailed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_email_send_failed** | [**\Zernio\Model\WebhookPayloadEmailSendFailed**](../Model/WebhookPayloadEmailSendFailed.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onEmailThreadReplied()`

```php
onEmailThreadReplied($webhook_payload_email_thread_replied)
```

Email thread replied

Mail from someone other than the mailbox arrived in the thread of a message sent with `trackReplies: true`. Works on text and html sends. Auto-replies and bounce reports in the thread count as replies.  The reply also arrives as `message.received` with its full content.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_email_thread_replied = {"id":"00000000-0000-4000-8000-000000000000","event":"email.thread_replied","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"google","username":"jane@example.com","displayName":"Jane Doe"},"email":{"messageId":"18c2f3a4b5d6e7f8","threadId":"18c2f3a4b5d6e7f0","trackingId":"Xk2m9QpL4vR8sT1wY6zA3bC5","metadata":{"campaign":"onboarding"}},"reply":{"messageId":"18c2f3a4b5d6e7f9","from":{"email":"alex@example.com","name":"Alex Smith"},"receivedAt":"2026-01-15T10:00:00.000Z","count":1},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadEmailThreadReplied

try {
    $apiInstance->onEmailThreadReplied($webhook_payload_email_thread_replied);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onEmailThreadReplied: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_email_thread_replied** | [**\Zernio\Model\WebhookPayloadEmailThreadReplied**](../Model/WebhookPayloadEmailThreadReplied.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onFileCreated()`

```php
onFileCreated($webhook_payload_file)
```

File created

A file the account can reach was created in Google Drive or OneDrive.  ### Platform notes  A folder counts as a file. The event is pushed seconds after the change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_file = {"id":"00000000-0000-4000-8000-000000000000","event":"file.created","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"google","username":"jane@example.com","displayName":"Jane Doe"},"file":{"id":"1AbCdEfGhIjKlMnOpQrStUvWxYz0123456","changeType":"created"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadFile

try {
    $apiInstance->onFileCreated($webhook_payload_file);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onFileCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_file** | [**\Zernio\Model\WebhookPayloadFile**](../Model/WebhookPayloadFile.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onFileDeleted()`

```php
onFileDeleted($webhook_payload_file)
```

File deleted

A file the account could reach was deleted or moved to the trash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_file = {"id":"00000000-0000-4000-8000-000000000000","event":"file.deleted","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"google","username":"jane@example.com","displayName":"Jane Doe"},"file":{"id":"1AbCdEfGhIjKlMnOpQrStUvWxYz0123456","changeType":"deleted"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadFile

try {
    $apiInstance->onFileDeleted($webhook_payload_file);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onFileDeleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_file** | [**\Zernio\Model\WebhookPayloadFile**](../Model/WebhookPayloadFile.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onFilePicked()`

```php
onFilePicked($webhook_payload_file_picked)
```

Files picked

The user picked files in a picker session; `picker.files` lists each one's `id`, `name`, `mimeType` and `kind`.  ### When it fires  It fires when the user finishes a hosted picker session (`POST /v1/files/picker-sessions`) and picks at least one file. Not sent on cancel. The files are readable from then on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_file_picked = {"id":"00000000-0000-4000-8000-000000000000","event":"file.picked","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"google","username":"jane@example.com","displayName":"Jane Doe"},"picker":{"sessionId":"ps_9f8e7d6c5b4a39281706f5e4","files":[{"id":"1AbCdEfGhIjKlMnOpQrStUvWxYz0123456","name":"Q3 report.pdf","mimeType":"application/pdf","kind":"file"}]},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadFilePicked

try {
    $apiInstance->onFilePicked($webhook_payload_file_picked);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onFilePicked: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_file_picked** | [**\Zernio\Model\WebhookPayloadFilePicked**](../Model/WebhookPayloadFilePicked.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onFileUpdated()`

```php
onFileUpdated($webhook_payload_file)
```

File updated

A file the account can reach was changed, renamed or moved.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_file = {"id":"00000000-0000-4000-8000-000000000000","event":"file.updated","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"google","username":"jane@example.com","displayName":"Jane Doe"},"file":{"id":"1AbCdEfGhIjKlMnOpQrStUvWxYz0123456","changeType":"updated"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadFile

try {
    $apiInstance->onFileUpdated($webhook_payload_file);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onFileUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_file** | [**\Zernio\Model\WebhookPayloadFile**](../Model/WebhookPayloadFile.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onLeadReceived()`

```php
onLeadReceived($webhook_payload_lead)
```

Lead received event

A new lead was submitted against a Meta Lead Gen (Instant) form (ingested via the Page `leadgen` webhook), a Google Ads lead form or a LinkedIn Lead Gen Form (both read every 15 minutes). `lead.platform` names the network.  Leads older than 7 days when Zernio first reads them are stored without this event.  ### Payload notes  `lead.fields` maps question key to answer; multiple-choice values are the option key (for example `k1`), not the display label.  ### Provenance  `lead.formId`, `lead.adId` and `lead.campaignId` give provenance. `lead.adId` is null for organic or test leads.  ### Consents  `lead.consents` lists the answer to every custom disclaimer checkbox, for example `{ \"checkboxKey\": \"call_consent\", \"isChecked\": true }`. Route call and SMS consent into your CRM from it. Empty when the form has no checkboxes.  ### Checkbox keys  When no key was set on the checkbox, Meta derives `checkboxKey` from its text, so match on the full key. `GET /v1/ads/leads` and `GET /v1/ads/lead-forms/{formId}/leads` return the same array.  ### Deduplication  Deduplicate on `lead.leadgenId` (Meta's lead id) or the event `id`.  ### Routing  `account.profileId` names the Zernio profile of the Facebook account that received the lead, for multi-tenant routing. Always present, `null` only when no profile is on record.  ### Requires ads enabled  Needs ads enabled on the team. Zernio asks for `leads_retrieval` at Facebook consent only then; without it Meta refuses the Page's `leadgen` subscription. Accounts connected earlier need a reconnect.  ### Lost subscription  A Page can lose its `leadgen` subscription while other events keep arriving. `leadgen: false` (with a `warning`) on the Page's webhook subscription means leads are not reaching Zernio; re-subscribe the Page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_lead = {"id":"00000000-0000-4000-8000-000000000000","event":"lead.received","timestamp":"2026-01-15T10:00:00Z","lead":{"id":"507f1f77bcf86cd799439018","platform":"meta","leadgenId":"1000000000000001","formId":"1000000000000002","formName":"Spring promo form","adId":"120200000000000001","adsetId":"120200000000000002","campaignId":"120200000000000003","fields":{"full_name":"Sample Lead","email":"lead@example.com"},"consents":[{"checkboxKey":"call_consent","isChecked":true},{"checkboxKey":"sms_rcs_consent","isChecked":false}],"isOrganic":false,"createdAt":"2026-01-15T10:00:00.000Z"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"facebook","profileId":"507f1f77bcf86cd799439012"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadLead

try {
    $apiInstance->onLeadReceived($webhook_payload_lead);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onLeadReceived: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_lead** | [**\Zernio\Model\WebhookPayloadLead**](../Model/WebhookPayloadLead.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onMessageDeleted()`

```php
onMessageDeleted($webhook_payload_message_deleted)
```

Message deleted event

A sender deleted (unsent) a message on Instagram or WhatsApp.  ### Platform notes  Instagram reports incoming unsends. WhatsApp reports both directions, including business deletions through the Cloud API or a Coexistence app. `message.direction` tells them apart.  ### Payload notes  The payload keeps the pre-delete `text` and `attachments` for moderation, compliance or archival. The Zernio dashboard does not show this content.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_message_deleted = {"id":"00000000-0000-4000-8000-000000000000","event":"message.deleted","timestamp":"2026-01-15T10:00:00Z","message":{"id":"507f1f77bcf86cd799439015","conversationId":"507f1f77bcf86cd799439014","platform":"instagram","platformMessageId":"aWdfZAG1zYW1wbGVfbWVzc2FnZQ","direction":"incoming","text":"Hi! Is this still available?","attachments":[],"sender":{"id":"17841400000000001","name":"Sample Customer","username":"sample_customer"},"sentAt":"2026-01-15T10:00:00.000Z","isRead":false},"deletedAt":"2026-01-15T10:00:00.000Z","conversation":{"id":"507f1f77bcf86cd799439014","platformConversationId":"t_10000000000000001","participantId":"17841400000000001","participantName":"Sample Customer","participantUsername":"sample_customer","participantPicture":"https://example.com/sample-avatar.jpg","status":"active","contactId":"507f1f77bcf86cd799439016"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"instagram","username":"sample_brand","displayName":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadMessageDeleted

try {
    $apiInstance->onMessageDeleted($webhook_payload_message_deleted);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onMessageDeleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_message_deleted** | [**\Zernio\Model\WebhookPayloadMessageDeleted**](../Model/WebhookPayloadMessageDeleted.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onMessageDelivered()`

```php
onMessageDelivered($webhook_payload_message_delivery_status)
```

Message delivered event

An outgoing message was delivered to the recipient on WhatsApp, Facebook Messenger, SMS, RCS or iMessage.  ### Platform notes  On WhatsApp, `pricing` and `billingConversation` carry Meta's billing context for the message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_message_delivery_status = {"id":"00000000-0000-4000-8000-000000000000","event":"message.delivered","timestamp":"2026-01-15T10:00:00Z","message":{"id":"507f1f77bcf86cd799439015","conversationId":"507f1f77bcf86cd799439014","platform":"instagram","platformMessageId":"aWdfZAG1zYW1wbGVfbWVzc2FnZQ","direction":"outgoing","text":"Yes, it is! Want me to reserve one for you?","attachments":[],"sender":{"id":"17841400000000000","name":"Sample Brand","username":"sample_brand"},"sentAt":"2026-01-15T10:00:00.000Z","isRead":true},"statusAt":"2026-01-15T10:00:00.000Z","conversation":{"id":"507f1f77bcf86cd799439014","platformConversationId":"t_10000000000000001","participantId":"17841400000000001","participantName":"Sample Customer","participantUsername":"sample_customer","participantPicture":"https://example.com/sample-avatar.jpg","status":"active","contactId":"507f1f77bcf86cd799439016"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"instagram","username":"sample_brand","displayName":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadMessageDeliveryStatus

try {
    $apiInstance->onMessageDelivered($webhook_payload_message_delivery_status);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onMessageDelivered: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_message_delivery_status** | [**\Zernio\Model\WebhookPayloadMessageDeliveryStatus**](../Model/WebhookPayloadMessageDeliveryStatus.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onMessageEdited()`

```php
onMessageEdited($webhook_payload_message_edited)
```

Message edited event

A sender edited a previously sent message on Instagram, Facebook Messenger, Telegram or WhatsApp.  ### Payload notes  `editHistory` holds every prior version, oldest first. `message.text` is the latest version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_message_edited = {"id":"00000000-0000-4000-8000-000000000000","event":"message.edited","timestamp":"2026-01-15T10:00:00Z","message":{"id":"507f1f77bcf86cd799439015","conversationId":"507f1f77bcf86cd799439014","platform":"instagram","platformMessageId":"aWdfZAG1zYW1wbGVfbWVzc2FnZQ","direction":"incoming","text":"Hi! Is this still available in blue?","attachments":[],"sender":{"id":"17841400000000001","name":"Sample Customer","username":"sample_customer"},"sentAt":"2026-01-15T10:00:00.000Z","isRead":false},"editHistory":[{"text":"Hi! Is this still available?","attachments":[],"editedAt":"2026-01-14T10:00:00.000Z"}],"editCount":1,"editedAt":"2026-01-15T10:00:00.000Z","conversation":{"id":"507f1f77bcf86cd799439014","platformConversationId":"t_10000000000000001","participantId":"17841400000000001","participantName":"Sample Customer","participantUsername":"sample_customer","participantPicture":"https://example.com/sample-avatar.jpg","status":"active","contactId":"507f1f77bcf86cd799439016"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"instagram","username":"sample_brand","displayName":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadMessageEdited

try {
    $apiInstance->onMessageEdited($webhook_payload_message_edited);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onMessageEdited: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_message_edited** | [**\Zernio\Model\WebhookPayloadMessageEdited**](../Model/WebhookPayloadMessageEdited.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onMessageFailed()`

```php
onMessageFailed($webhook_payload_message_delivery_status)
```

Message delivery failed event

An outgoing message failed to deliver on WhatsApp, SMS, RCS or iMessage.  ### Payload notes  `error` carries `code`, `title` and `message` from the platform, for example `131026` for an unreachable WhatsApp recipient. On SMS it carries the carrier's error code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_message_delivery_status = {"id":"00000000-0000-4000-8000-000000000000","event":"message.failed","timestamp":"2026-01-15T10:00:00Z","message":{"id":"507f1f77bcf86cd799439015","conversationId":"507f1f77bcf86cd799439014","platform":"whatsapp","platformMessageId":"wamid.SAMPLE1234567890","direction":"outgoing","text":"Yes, it is! Want me to reserve one for you?","attachments":[],"sender":{"id":"17841400000000000","name":"Sample Brand","username":"sample_brand"},"sentAt":"2026-01-15T10:00:00.000Z","isRead":true},"statusAt":"2026-01-15T10:00:00.000Z","error":{"code":131047,"title":"Re-engagement message","message":"Message failed to send because more than 24 hours have passed since the customer last replied to this number.","explanation":null},"conversation":{"id":"507f1f77bcf86cd799439014","platformConversationId":"t_10000000000000001","participantId":"17841400000000001","participantName":"Sample Customer","participantUsername":"sample_customer","participantPicture":"https://example.com/sample-avatar.jpg","status":"active","contactId":"507f1f77bcf86cd799439016"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"whatsapp","username":"+15555550100","displayName":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadMessageDeliveryStatus

try {
    $apiInstance->onMessageFailed($webhook_payload_message_delivery_status);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onMessageFailed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_message_delivery_status** | [**\Zernio\Model\WebhookPayloadMessageDeliveryStatus**](../Model/WebhookPayloadMessageDeliveryStatus.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onMessagePlayed()`

```php
onMessagePlayed($webhook_payload_message_delivery_status)
```

Message played event

A WhatsApp recipient played a voice message you sent, reported the first time they play it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_message_delivery_status = {"id":"00000000-0000-4000-8000-000000000000","event":"message.played","timestamp":"2026-01-15T10:00:00Z","message":{"id":"507f1f77bcf86cd799439015","conversationId":"507f1f77bcf86cd799439014","platform":"whatsapp","platformMessageId":"wamid.SAMPLE1234567890","direction":"outgoing","text":"Yes, it is! Want me to reserve one for you?","attachments":[],"sender":{"id":"17841400000000000","name":"Sample Brand","username":"sample_brand"},"sentAt":"2026-01-15T10:00:00.000Z","isRead":true},"statusAt":"2026-01-15T10:00:00.000Z","conversation":{"id":"507f1f77bcf86cd799439014","platformConversationId":"t_10000000000000001","participantId":"17841400000000001","participantName":"Sample Customer","participantUsername":"sample_customer","participantPicture":"https://example.com/sample-avatar.jpg","status":"active","contactId":"507f1f77bcf86cd799439016"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"whatsapp","username":"+15555550100","displayName":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadMessageDeliveryStatus

try {
    $apiInstance->onMessagePlayed($webhook_payload_message_delivery_status);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onMessagePlayed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_message_delivery_status** | [**\Zernio\Model\WebhookPayloadMessageDeliveryStatus**](../Model/WebhookPayloadMessageDeliveryStatus.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onMessageRead()`

```php
onMessageRead($webhook_payload_message_delivery_status)
```

Message read event

An outgoing message was read by the recipient on WhatsApp, Facebook Messenger, Instagram or RCS.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_message_delivery_status = {"id":"00000000-0000-4000-8000-000000000000","event":"message.read","timestamp":"2026-01-15T10:00:00Z","message":{"id":"507f1f77bcf86cd799439015","conversationId":"507f1f77bcf86cd799439014","platform":"instagram","platformMessageId":"aWdfZAG1zYW1wbGVfbWVzc2FnZQ","direction":"outgoing","text":"Yes, it is! Want me to reserve one for you?","attachments":[],"sender":{"id":"17841400000000000","name":"Sample Brand","username":"sample_brand"},"sentAt":"2026-01-15T10:00:00.000Z","isRead":true},"statusAt":"2026-01-15T10:00:00.000Z","conversation":{"id":"507f1f77bcf86cd799439014","platformConversationId":"t_10000000000000001","participantId":"17841400000000001","participantName":"Sample Customer","participantUsername":"sample_customer","participantPicture":"https://example.com/sample-avatar.jpg","status":"active","contactId":"507f1f77bcf86cd799439016"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"instagram","username":"sample_brand","displayName":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadMessageDeliveryStatus

try {
    $apiInstance->onMessageRead($webhook_payload_message_delivery_status);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onMessageRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_message_delivery_status** | [**\Zernio\Model\WebhookPayloadMessageDeliveryStatus**](../Model/WebhookPayloadMessageDeliveryStatus.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onMessageReceived()`

```php
onMessageReceived($webhook_payload_message)
```

Message received event

A new message arrived in the inbox; `message.text`, `message.attachments[]` and `message.sender` describe it.  ### Standby  While another app owns the conversation it carries `metadata.standby: true`. Zernio runs no workflow or keyword automation on it. A bot must skip standby messages, or on WhatsApp it takes the conversation from the agent.  ### Interactive replies  Button and list taps, flow responses and orders arrive under `metadata` (`interactiveType`, `interactiveId`, `flowResponseData`, `order`). Only a referral that arrives without a message becomes `referral.received`.  ### Platform notes  New email from Google and Microsoft mailboxes arrives as this event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_message = {"id":"00000000-0000-4000-8000-000000000000","event":"message.received","timestamp":"2026-01-15T10:00:00Z","message":{"id":"507f1f77bcf86cd799439015","conversationId":"507f1f77bcf86cd799439014","platform":"instagram","platformMessageId":"aWdfZAG1zYW1wbGVfbWVzc2FnZQ","direction":"incoming","text":"Hi! Is this still available?","attachments":[],"sender":{"id":"17841400000000001","name":"Sample Customer","username":"sample_customer"},"sentAt":"2026-01-15T10:00:00.000Z","isRead":false,"sentVia":null,"automationId":null,"workflowId":null,"executionId":null,"broadcastId":null,"sequenceId":null},"conversation":{"id":"507f1f77bcf86cd799439014","platformConversationId":"t_10000000000000001","participantId":"17841400000000001","participantName":"Sample Customer","participantUsername":"sample_customer","participantPicture":"https://example.com/sample-avatar.jpg","status":"active","contactId":"507f1f77bcf86cd799439016"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"instagram","username":"sample_brand","displayName":"Sample Brand"},"metadata":{"referral":{"ref":"spring-campaign","ad_id":"120210000000000001","source":"ADS","type":"OPEN_THREAD","ads_context_data":{"ad_title":"Spring sale","photo_url":"https://example.com/sample-ad.jpg"}},"ad":{"adId":"120210000000000001","name":"Spring sale carousel","synced":true,"campaignId":"120210000000000100","campaignName":"Spring leads","adSetId":"120210000000000200","adSetName":"Spain 25-44","adAccountId":"act_1234567890","adAccountName":"Sample Ad Account","platformPostId":null,"isExternal":true}},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadMessage

try {
    $apiInstance->onMessageReceived($webhook_payload_message);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onMessageReceived: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_message** | [**\Zernio\Model\WebhookPayloadMessage**](../Model/WebhookPayloadMessage.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onMessageSent()`

```php
onMessageSent($webhook_payload_message_sent)
```

Message sent event

A message was sent through the API, the dashboard, or the WhatsApp Business app on Coexistence numbers.  ### Sender  `message.sentVia` is one of `human`, `api`, `broadcast`, `sequence`, `workflow`, `comment_automation` or `bulk-api`. It is `null` for sends from the platform's own app and for older messages; treat `null` as unknown, never as human.  ### Attribution keys  `automationId`, `workflowId`, `executionId`, `broadcastId` and `sequenceId` are always present. Each is `null` unless that kind of sender produced the message.  ### Quote replies  A quote-reply sent through the API carries `metadata.quotedMessageId`. One sent from the WhatsApp Business or Instagram app does not.  ### Platform notes  On Instagram and Facebook the attribution can be missing when Meta's echo of a send reaches Zernio before the send is recorded. On WhatsApp, Meta Business Agent replies carry `source: \"meta_business_agent\"`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_message_sent = {"id":"00000000-0000-4000-8000-000000000000","event":"message.sent","timestamp":"2026-01-15T10:00:00Z","message":{"id":"507f1f77bcf86cd799439015","conversationId":"507f1f77bcf86cd799439014","platform":"instagram","platformMessageId":"aWdfZAG1zYW1wbGVfbWVzc2FnZQ","direction":"outgoing","text":"Yes, it is! Want me to reserve one for you?","attachments":[],"sender":{"id":"17841400000000000","name":"Sample Brand","username":"sample_brand"},"sentAt":"2026-01-15T10:00:00.000Z","isRead":true,"sentVia":"api","automationId":null,"workflowId":null,"executionId":null,"broadcastId":null,"sequenceId":null},"conversation":{"id":"507f1f77bcf86cd799439014","platformConversationId":"t_10000000000000001","participantId":"17841400000000001","participantName":"Sample Customer","participantUsername":"sample_customer","participantPicture":"https://example.com/sample-avatar.jpg","status":"active","contactId":"507f1f77bcf86cd799439016"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"instagram","username":"sample_brand","displayName":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadMessageSent

try {
    $apiInstance->onMessageSent($webhook_payload_message_sent);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onMessageSent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_message_sent** | [**\Zernio\Model\WebhookPayloadMessageSent**](../Model/WebhookPayloadMessageSent.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPhoneNumberStockAvailable()`

```php
onPhoneNumberStockAvailable($webhook_payload_phone_number_stock_available)
```

Phone-number stock available event

A country you watch has deliverable phone numbers again; fires once per watch.  ### When it fires  Fired by the 6-hourly stock sweep, before you own a number in that country. The watch (`POST /v1/phone-numbers/stock-watches`) is then consumed.  ### Payload notes  `stock.country` is the watched country. `stock.types[]` lists each number type in stock with its `availableCount` at sweep time. Numbers are first come, first served; buy with `POST /v1/phone-numbers/purchase`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_phone_number_stock_available = {"id":"00000000-0000-4000-8000-000000000000","event":"phone_number.stock_available","timestamp":"2026-01-15T10:00:00Z","stock":{"country":"GB","types":[{"numberType":"mobile","availableCount":25}]}}; // \Zernio\Model\WebhookPayloadPhoneNumberStockAvailable

try {
    $apiInstance->onPhoneNumberStockAvailable($webhook_payload_phone_number_stock_available);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPhoneNumberStockAvailable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_phone_number_stock_available** | [**\Zernio\Model\WebhookPayloadPhoneNumberStockAvailable**](../Model/WebhookPayloadPhoneNumberStockAvailable.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostAuthenticityChanged()`

```php
onPostAuthenticityChanged($webhook_payload_post_authenticity_changed)
```

Post authenticity changed event

A tracked post's authenticity score crossed 40, in either direction.  ### When it fires  Only while the tracking window is open. A post's first score never fires it.  ### Payload notes  Carries `score`, `previousScore`, `confidence` and `reasons`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post_authenticity_changed = {"id":"00000000-0000-4000-8000-000000000000","event":"post.authenticity_changed","timestamp":"2026-01-15T10:00:00Z","post":{"id":"507f1f77bcf86cd799439013","platform":"instagram","platformPostId":"17900000000000001","accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012"},"authenticity":{"score":32,"previousScore":58,"confidence":0.8,"reasons":[{"code":"flat_engagement","weight":-26}],"version":"v1","computedAt":"2026-01-15T10:00:00.000Z"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadPostAuthenticityChanged

try {
    $apiInstance->onPostAuthenticityChanged($webhook_payload_post_authenticity_changed);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostAuthenticityChanged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post_authenticity_changed** | [**\Zernio\Model\WebhookPayloadPostAuthenticityChanged**](../Model/WebhookPayloadPostAuthenticityChanged.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostCancelled()`

```php
onPostCancelled($webhook_payload_post)
```

Post cancelled event

A scheduled post was cancelled because its account was disconnected, and nothing published.  ### When it fires  A multi-platform post fires it only once every platform entry is cancelled. If a platform already published, the rollup is `post.partial` instead.  ### When it does not fire  `DELETE /v1/posts/{postId}` removes the post without sending this event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post = {"id":"00000000-0000-4000-8000-000000000000","event":"post.cancelled","timestamp":"2026-01-15T10:00:00Z","post":{"id":"507f1f77bcf86cd799439013","content":"Our spring collection is live!","status":"cancelled","scheduledFor":"2026-01-15T10:00:00.000Z","platforms":[{"platform":"instagram","status":"published","accountId":"507f1f77bcf86cd799439011","platformPostId":"17900000000000001","publishedUrl":"https://www.instagram.com/p/SAMPLE123/"}],"metadata":{"externalId":"sample-123"}},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadPost

try {
    $apiInstance->onPostCancelled($webhook_payload_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostCancelled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post** | [**\Zernio\Model\WebhookPayloadPost**](../Model/WebhookPayloadPost.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostExternalCreated()`

```php
onPostExternalCreated($webhook_payload_external_post)
```

External post created event

A post authored natively on the platform, outside Zernio, was detected for the first time.  ### When it fires  Detected by a background sync roughly hourly, not in real time. Example: a Google Business Profile post created in the Google interface.  ### Payload notes  `post.source` is always `\"external\"` and `post.id` is the platform-native post id.  ### First sync backfill  On a freshly connected account, every existing native post fires it once. Treat it as an idempotent upsert keyed on `post.id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_external_post = {"id":"00000000-0000-4000-8000-000000000000","event":"post.external.created","timestamp":"2026-01-15T10:00:00Z","post":{"id":"localPosts/1234567890","platform":"googlebusiness","accountId":"507f1f77bcf86cd799439011","url":"https://local.google.com/place?id=SAMPLE","content":"Open late this Friday!","mediaType":"image","mediaItems":[{"type":"image","url":"https://example.com/sample.jpg"}],"thumbnailUrl":null,"publishedAt":"2026-01-15T10:00:00.000Z","source":"external"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"googlebusiness","username":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadExternalPost

try {
    $apiInstance->onPostExternalCreated($webhook_payload_external_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostExternalCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_external_post** | [**\Zernio\Model\WebhookPayloadExternalPost**](../Model/WebhookPayloadExternalPost.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostExternalDeleted()`

```php
onPostExternalDeleted($webhook_payload_external_post)
```

External post deleted event

A tracked native post was removed from the platform.  ### Payload notes  `post.deletedAt` is the detection time.  ### Detection limits  Coverage is bounded to the most recent posts the platform listing returns, so very old deletions may go undetected.  ### When it does not fire  Detection diffs against posts a prior sync already indexed. An account with no indexed post never emits it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_external_post = {"id":"00000000-0000-4000-8000-000000000000","event":"post.external.deleted","timestamp":"2026-01-15T10:00:00Z","post":{"id":"localPosts/1234567890","platform":"googlebusiness","accountId":"507f1f77bcf86cd799439011","url":"https://local.google.com/place?id=SAMPLE","content":"Open late this Friday!","mediaType":"image","mediaItems":[{"type":"image","url":"https://example.com/sample.jpg"}],"thumbnailUrl":null,"publishedAt":"2026-01-15T10:00:00.000Z","source":"external","deletedAt":"2026-01-15T10:00:00.000Z"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"googlebusiness","username":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadExternalPost

try {
    $apiInstance->onPostExternalDeleted($webhook_payload_external_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostExternalDeleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_external_post** | [**\Zernio\Model\WebhookPayloadExternalPost**](../Model/WebhookPayloadExternalPost.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostExternalUpdated()`

```php
onPostExternalUpdated($webhook_payload_external_post)
```

External post updated event

A tracked native post's text or media changed on the platform.  ### How edits are detected  Zernio compares text and media structure and, where available, the platform's own edit timestamp. A media-URL-only refresh (rotated CDN URLs) does not fire it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_external_post = {"id":"00000000-0000-4000-8000-000000000000","event":"post.external.updated","timestamp":"2026-01-15T10:00:00Z","post":{"id":"localPosts/1234567890","platform":"googlebusiness","accountId":"507f1f77bcf86cd799439011","url":"https://local.google.com/place?id=SAMPLE","content":"Open late this Friday!","mediaType":"image","mediaItems":[{"type":"image","url":"https://example.com/sample.jpg"}],"thumbnailUrl":null,"publishedAt":"2026-01-15T10:00:00.000Z","source":"external"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"googlebusiness","username":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadExternalPost

try {
    $apiInstance->onPostExternalUpdated($webhook_payload_external_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostExternalUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_external_post** | [**\Zernio\Model\WebhookPayloadExternalPost**](../Model/WebhookPayloadExternalPost.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostFailed()`

```php
onPostFailed($webhook_payload_post)
```

Post failed event

A post failed on every target platform.  ### When it fires  Once per publishing job, after every platform target ends. Exactly one of `post.published`, `post.partial` or `post.failed` fires.  ### Payload notes  Each `platforms[]` entry carries `error`, `errorCategory` and `errorSource`, the same taxonomy as `platforms[]` on Get post. Branch on `errorCategory`, not on the message text.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post = {"id":"00000000-0000-4000-8000-000000000000","event":"post.failed","timestamp":"2026-01-15T10:00:00Z","post":{"id":"507f1f77bcf86cd799439013","content":"Our spring collection is live!","status":"failed","scheduledFor":"2026-01-15T10:00:00.000Z","platforms":[{"platform":"instagram","status":"failed","accountId":"507f1f77bcf86cd799439011","error":"Media could not be downloaded from the provided URL","errorCategory":"user_content","errorSource":"user"}]},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadPost

try {
    $apiInstance->onPostFailed($webhook_payload_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostFailed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post** | [**\Zernio\Model\WebhookPayloadPost**](../Model/WebhookPayloadPost.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostPartial()`

```php
onPostPartial($webhook_payload_post)
```

Post partial event

A post published on some platforms and failed on others.  ### When it fires  Once per publishing job, after every platform target ends. Exactly one of `post.published`, `post.partial` or `post.failed` fires.  ### Payload notes  Read `platforms[].status` to tell them apart. Failed entries carry `error`, `errorCategory` and `errorSource`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post = {"id":"00000000-0000-4000-8000-000000000000","event":"post.partial","timestamp":"2026-01-15T10:00:00Z","post":{"id":"507f1f77bcf86cd799439013","content":"Our spring collection is live!","status":"partial","scheduledFor":"2026-01-15T10:00:00.000Z","platforms":[{"platform":"instagram","status":"published","accountId":"507f1f77bcf86cd799439011","platformPostId":"17900000000000001","publishedUrl":"https://www.instagram.com/p/SAMPLE123/"}],"metadata":{"externalId":"sample-123"}},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadPost

try {
    $apiInstance->onPostPartial($webhook_payload_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostPartial: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post** | [**\Zernio\Model\WebhookPayloadPost**](../Model/WebhookPayloadPost.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostPlatformDeleted()`

```php
onPostPlatformDeleted($webhook_payload_post_platform)
```

Post platform deleted event

A published platform target was deleted on the platform.  ### When it fires  Detected by a background sync roughly hourly, once per platform target. Platforms push no deletion notice, so it can trail the rollup by days.  ### Payload notes  `platform.status` is `deleted`. `platform.deletedAt` is the detection time, not the moment of deletion.  ### Detection limits  Detection is listing-based: coverage is bounded to the posts the listing returns, and rare false positives happen. The event is not retracted when the post reappears. Re-check before deleting.  ### When it does not fire  Detection diffs against posts a prior sync already indexed. An account with no indexed post never emits it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post_platform = {"id":"00000000-0000-4000-8000-000000000000","event":"post.platform.deleted","timestamp":"2026-01-15T10:00:00Z","post":{"id":"507f1f77bcf86cd799439013","content":"Our spring collection is live!","status":"published","scheduledFor":"2026-01-15T10:00:00.000Z","platforms":[{"platform":"instagram","status":"published","accountId":"507f1f77bcf86cd799439011","platformPostId":"17900000000000001","publishedUrl":"https://www.instagram.com/p/SAMPLE123/"}],"metadata":{"externalId":"sample-123"}},"platform":{"name":"instagram","status":"deleted","platformPostId":"17900000000000001","publishedUrl":"https://www.instagram.com/p/SAMPLE123/","deletedAt":"2026-01-15T10:00:00.000Z"},"account":{"accountId":"507f1f77bcf86cd799439011","platform":"instagram","username":"sample_brand","displayName":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadPostPlatform

try {
    $apiInstance->onPostPlatformDeleted($webhook_payload_post_platform);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostPlatformDeleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post_platform** | [**\Zernio\Model\WebhookPayloadPostPlatform**](../Model/WebhookPayloadPostPlatform.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostPlatformFailed()`

```php
onPostPlatformFailed($webhook_payload_post_platform)
```

Post platform failed event

One platform target failed permanently.  ### When it fires  Only on permanent failure; retryable errors stay silent. The rollup (`post.failed` or `post.partial`) fires separately once every platform ends.  ### After a publish  It can fire for a target that already emitted `post.platform.published`, if background reconciliation finds the publish never completed.  ### Payload notes  `platform.error` carries the platform's message. `platform.errorCategory` and `platform.errorSource` classify it, so a reconnect (`auth_expired`) separates from a content fix (`user_content`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post_platform = {"id":"00000000-0000-4000-8000-000000000000","event":"post.platform.failed","timestamp":"2026-01-15T10:00:00Z","post":{"id":"507f1f77bcf86cd799439013","content":"Our spring collection is live!","status":"failed","scheduledFor":"2026-01-15T10:00:00.000Z","platforms":[{"platform":"instagram","status":"failed","accountId":"507f1f77bcf86cd799439011","error":"Media could not be downloaded from the provided URL","errorCategory":"user_content","errorSource":"user"}]},"platform":{"name":"instagram","status":"failed","error":"Media could not be downloaded from the provided URL","errorCategory":"user_content","errorSource":"user"},"account":{"accountId":"507f1f77bcf86cd799439011","platform":"instagram","username":"sample_brand","displayName":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadPostPlatform

try {
    $apiInstance->onPostPlatformFailed($webhook_payload_post_platform);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostPlatformFailed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post_platform** | [**\Zernio\Model\WebhookPayloadPostPlatform**](../Model/WebhookPayloadPostPlatform.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostPlatformPublished()`

```php
onPostPlatformPublished($webhook_payload_post_platform)
```

Post platform published event

One platform target finished publishing, without waiting for the other targets.  ### When it fires  Once per platform target, as soon as it finishes. A cross-post to 2 accounts on the same platform produces 2 events. Use `post.published` for the post-level rollup.  ### Payload notes  `platform` carries the platform post id and URL. `account` identifies the connected account.  ### Later reconciliation  If a target later fails background reconciliation, `post.platform.failed` fires for the same target afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post_platform = {"id":"00000000-0000-4000-8000-000000000000","event":"post.platform.published","timestamp":"2026-01-15T10:00:00Z","post":{"id":"507f1f77bcf86cd799439013","content":"Our spring collection is live!","status":"published","scheduledFor":"2026-01-15T10:00:00.000Z","platforms":[{"platform":"instagram","status":"published","accountId":"507f1f77bcf86cd799439011","platformPostId":"17900000000000001","publishedUrl":"https://www.instagram.com/p/SAMPLE123/"}],"metadata":{"externalId":"sample-123"}},"platform":{"name":"instagram","status":"published","platformPostId":"17900000000000001","publishedUrl":"https://www.instagram.com/p/SAMPLE123/"},"account":{"accountId":"507f1f77bcf86cd799439011","platform":"instagram","username":"sample_brand","displayName":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadPostPlatform

try {
    $apiInstance->onPostPlatformPublished($webhook_payload_post_platform);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostPlatformPublished: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post_platform** | [**\Zernio\Model\WebhookPayloadPostPlatform**](../Model/WebhookPayloadPostPlatform.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostPublished()`

```php
onPostPublished($webhook_payload_post)
```

Post published event

Every platform target of a post published.  ### When it fires  Once per publishing job, after every platform target ends. Exactly one of `post.published`, `post.partial` or `post.failed` fires.  ### Payload notes  Each `platforms[]` entry carries the `platformPostId` and `publishedUrl`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post = {"id":"00000000-0000-4000-8000-000000000000","event":"post.published","timestamp":"2026-01-15T10:00:00Z","post":{"id":"507f1f77bcf86cd799439013","content":"Our spring collection is live!","status":"published","scheduledFor":"2026-01-15T10:00:00.000Z","platforms":[{"platform":"instagram","status":"published","accountId":"507f1f77bcf86cd799439011","platformPostId":"17900000000000001","publishedUrl":"https://www.instagram.com/p/SAMPLE123/"}],"metadata":{"externalId":"sample-123"}},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadPost

try {
    $apiInstance->onPostPublished($webhook_payload_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostPublished: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post** | [**\Zernio\Model\WebhookPayloadPost**](../Model/WebhookPayloadPost.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostRecycled()`

```php
onPostRecycled($webhook_payload_post)
```

Post recycled event

A recycling schedule cloned a published post for republishing.  ### Payload notes  `post.id` is the new clone's id. The clone emits its own `post.scheduled`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post = {"id":"00000000-0000-4000-8000-000000000000","event":"post.recycled","timestamp":"2026-01-15T10:00:00Z","post":{"id":"507f1f77bcf86cd799439013","content":"Our spring collection is live!","status":"scheduled","scheduledFor":"2026-01-15T10:00:00.000Z","platforms":[{"platform":"instagram","status":"published","accountId":"507f1f77bcf86cd799439011","platformPostId":"17900000000000001","publishedUrl":"https://www.instagram.com/p/SAMPLE123/"}],"metadata":{"externalId":"sample-123"}},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadPost

try {
    $apiInstance->onPostRecycled($webhook_payload_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostRecycled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post** | [**\Zernio\Model\WebhookPayloadPost**](../Model/WebhookPayloadPost.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostScheduled()`

```php
onPostScheduled($webhook_payload_post)
```

Post scheduled event

A post entered the scheduled state.  ### When it fires  Created with a schedule (with `publishNow`, accepted and queued), promoted from draft, added to a queue, retried after failing, or created as a recycled clone.  ### Approval and repeats  A post saved with `requiresApproval: true` fires it on approval, not at creation. One post can emit it more than once.  ### When it does not fire  Editing or moving an already-scheduled post to another time does not fire it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post = {"id":"00000000-0000-4000-8000-000000000000","event":"post.scheduled","timestamp":"2026-01-15T10:00:00Z","post":{"id":"507f1f77bcf86cd799439013","content":"Our spring collection is live!","status":"scheduled","scheduledFor":"2026-01-15T10:00:00.000Z","platforms":[{"platform":"instagram","status":"pending","accountId":"507f1f77bcf86cd799439011"}],"metadata":{"externalId":"sample-123"}},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadPost

try {
    $apiInstance->onPostScheduled($webhook_payload_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostScheduled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post** | [**\Zernio\Model\WebhookPayloadPost**](../Model/WebhookPayloadPost.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostTikTokUrlResolved()`

```php
onPostTikTokUrlResolved($webhook_payload_post_platform)
```

TikTok post URL resolved event

A published TikTok post's public URL became available.  ### When it fires  TikTok exposes the video id asynchronously, often minutes after upload, so `post.published` can carry an empty `publishedUrl`. Fires at most once per platform target. For a draft, it fires when the creator posts the draft publicly from the TikTok app.  ### Payload notes  Delivers `platform.publishedUrl` and the resolved `platform.platformPostId`. Same shape as `post.platform.published`.  ### When it does not fire  Private posts, which have no public URL, and drafts the creator never posts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post_platform = {"id":"00000000-0000-4000-8000-000000000000","event":"post.tiktok.url_resolved","timestamp":"2026-01-15T10:00:00Z","post":{"id":"507f1f77bcf86cd799439013","content":"Our spring collection is live!","status":"published","scheduledFor":"2026-01-15T10:00:00.000Z","platforms":[{"platform":"instagram","status":"published","accountId":"507f1f77bcf86cd799439011","platformPostId":"17900000000000001","publishedUrl":"https://www.instagram.com/p/SAMPLE123/"}],"metadata":{"externalId":"sample-123"}},"platform":{"name":"tiktok","status":"published","platformPostId":"7300000000000000001","publishedUrl":"https://www.tiktok.com/@sample_brand/video/7300000000000000001"},"account":{"accountId":"507f1f77bcf86cd799439011","platform":"tiktok","username":"sample_brand","displayName":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadPostPlatform

try {
    $apiInstance->onPostTikTokUrlResolved($webhook_payload_post_platform);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostTikTokUrlResolved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post_platform** | [**\Zernio\Model\WebhookPayloadPostPlatform**](../Model/WebhookPayloadPostPlatform.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostTrackingCompleted()`

```php
onPostTrackingCompleted($webhook_payload_post_tracking_completed)
```

Post tracking completed event

A post's tracking window ended and its final analytics read finished.  ### When it fires  Once per window. A cancelled window never fires it.  ### Payload notes  `final` holds the closing metrics, or is null when no sample could be read. When the post was deleted, it is the last sample held, if any.  ### Completion reasons  `window.completionReason` is `final_read` (the read succeeded), `unreachable` (the sync failed or no sample exists) or `post_deleted` (the post is gone).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post_tracking_completed = {"id":"00000000-0000-4000-8000-000000000000","event":"post.tracking_completed","timestamp":"2026-01-15T10:00:00Z","post":{"id":"507f1f77bcf86cd799439013","platform":"instagram","platformPostId":"17900000000000001","accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012"},"window":{"id":"507f1f77bcf86cd799439013","startsAt":"2026-01-14T10:00:00.000Z","endsAt":"2026-01-15T10:00:00.000Z","finalReadAt":"2026-01-15T10:00:00.000Z","completionReason":"final_read"},"final":{"views":12400,"likes":830,"comments":41,"shares":17,"saves":96,"syncedAt":"2026-01-15T10:00:00.000Z"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadPostTrackingCompleted

try {
    $apiInstance->onPostTrackingCompleted($webhook_payload_post_tracking_completed);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostTrackingCompleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post_tracking_completed** | [**\Zernio\Model\WebhookPayloadPostTrackingCompleted**](../Model/WebhookPayloadPostTrackingCompleted.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onRcsAgentStatusUpdated()`

```php
onRcsAgentStatusUpdated($on_rcs_agent_status_updated_request)
```

RCS agent status updated event

An RCS agent moved into a new customer-visible status; `status` is the new one.  ### Statuses  `changes_requested` (note in `reason`), `brand_vetting`, `agent_review`, `testing`, `launch_review`, `launching`, `live`, `rejected` (`reason` says why), `deactivated`. In `testing`, add test phones, then file the launch; a `reason` means it bounced.  ### When it fires  Fires once per move into a status. `requested` sends nothing. Overlapping status checks never send the same status twice in a row.  ### Payload notes  `agent.profileId` is the owning profile. `agent.accountId` is `null` when the agent has no linked account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$on_rcs_agent_status_updated_request = {"id":"00000000-0000-4000-8000-000000000000","event":"rcs.agent.status_updated","timestamp":"2026-01-15T10:00:00Z","agent":{"id":"507f1f77bcf86cd79943901d","displayName":"Sample Brand","profileId":"507f1f77bcf86cd799439012","accountId":"507f1f77bcf86cd799439011"},"status":"live","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\OnRcsAgentStatusUpdatedRequest

try {
    $apiInstance->onRcsAgentStatusUpdated($on_rcs_agent_status_updated_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onRcsAgentStatusUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_rcs_agent_status_updated_request** | [**\Zernio\Model\OnRcsAgentStatusUpdatedRequest**](../Model/OnRcsAgentStatusUpdatedRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onReactionReceived()`

```php
onReactionReceived($webhook_payload_reaction)
```

Reaction received event

A participant added or removed an emoji reaction on a message on Instagram, Facebook, WhatsApp, Telegram, Slack or TikTok.  ### Payload notes  Sent as its own event, never as `message.received`. `reaction.action` is `added` or `removed`. `reaction.platformMessageId` is always present; `reaction.messageId` is the Zernio id when resolvable.  ### Removals  On WhatsApp, Instagram and Facebook removals, `reaction.emoji` is an empty string because the platform does not say which emoji went away. Match on `platformMessageId` to clear a mirrored reaction.  ### TikTok  A like or emoji reaction on a DM arrives only as this event, never as an empty `message.received`. `platformMessageId` is the TikTok id of the liked message. AI emoji reactions can have an empty `emoji`.  ### Telegram  The bot must be an administrator in the chat. Telegram does not send reactions in private chats to bots.  ### Accounts connected before August 2026  Instagram and Facebook accounts connected before August 2026 do not receive this event until their webhook subscription is refreshed. Reconnect them, or re-subscribe a Facebook Page without a reconnect.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_reaction = {"id":"00000000-0000-4000-8000-000000000000","event":"reaction.received","timestamp":"2026-01-15T10:00:00Z","reaction":{"emoji":"👍","action":"added","messageId":"507f1f77bcf86cd799439015","platformMessageId":"aWdfZAG1zYW1wbGVfbWVzc2FnZQ","sender":{"id":"17841400000000001","name":"Sample Customer","username":"sample_customer"},"reactedAt":"2026-01-15T10:00:00.000Z"},"conversation":{"id":"507f1f77bcf86cd799439014","platformConversationId":"t_10000000000000001","participantId":"17841400000000001","participantName":"Sample Customer","participantUsername":"sample_customer","participantPicture":"https://example.com/sample-avatar.jpg","status":"active","contactId":"507f1f77bcf86cd799439016"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"instagram","username":"sample_brand","displayName":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadReaction

try {
    $apiInstance->onReactionReceived($webhook_payload_reaction);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onReactionReceived: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_reaction** | [**\Zernio\Model\WebhookPayloadReaction**](../Model/WebhookPayloadReaction.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onReferralReceived()`

```php
onReferralReceived($webhook_payload_referral)
```

Referral received event

Someone opened an existing Instagram or Messenger thread through an ig.me or m.me `ref` link or returning ad click.  ### Payload notes  Meta's referral object is forwarded verbatim: `ref` and `source` for links, `ad_id` and `ads_context_data` for ad clicks.  ### When it does not fire  A referral that rides an inbound message arrives on `message.received` under `metadata.referral` instead. The two never fire for the same click.  ### Stored referral  The first referral captured on a conversation is also persisted on it (`metadata` on `GET /v1/inbox/conversations`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_referral = {"id":"00000000-0000-4000-8000-000000000000","event":"referral.received","timestamp":"2026-01-15T10:00:00Z","referral":{"ref":"spring-campaign","source":"SHORTLINK","type":"OPEN_THREAD"},"sender":{"id":"17841400000000001","name":"Sample Customer","username":"sample_customer"},"conversation":{"id":"507f1f77bcf86cd799439014","platformConversationId":"t_10000000000000001","participantId":"17841400000000001","participantName":"Sample Customer","participantUsername":"sample_customer","participantPicture":"https://example.com/sample-avatar.jpg","status":"active","contactId":"507f1f77bcf86cd799439016"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"instagram","username":"sample_brand","displayName":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadReferral

try {
    $apiInstance->onReferralReceived($webhook_payload_referral);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onReferralReceived: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_referral** | [**\Zernio\Model\WebhookPayloadReferral**](../Model/WebhookPayloadReferral.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onReviewDeleted()`

```php
onReviewDeleted($webhook_payload_review_deleted)
```

Review deleted event

Google Business Profile stopped returning a review, for example after its spam filter removed it.  ### When it fires  Zernio detects it by polling, so it usually fires 6 to 12 hours after the review disappears. Only locations covered by a webhook subscribed to `review.deleted` or `review.restored` are checked.  ### Restores  If the review comes back, `review.restored` fires, so a hidden then restored review produces `review.deleted` then `review.restored`. A `review.updated` can arrive for a deleted review; the next check restores it.  ### Payload notes  `review.id` is the full review name, the same value `review.new` sent. It may arrive for a review id you never received `review.new` for, so ignore ids you do not know.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_review_deleted = {"id":"00000000-0000-4000-8000-000000000000","event":"review.deleted","timestamp":"2026-01-15T10:00:00Z","review":{"id":"AbFvOqSample123","platform":"googlebusiness","rating":5,"createdAt":"2026-01-15T10:00:00.000Z","lastSeenAt":"2026-01-15T10:00:00.000Z"},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"googlebusiness","username":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadReviewDeleted

try {
    $apiInstance->onReviewDeleted($webhook_payload_review_deleted);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onReviewDeleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_review_deleted** | [**\Zernio\Model\WebhookPayloadReviewDeleted**](../Model/WebhookPayloadReviewDeleted.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onReviewNew()`

```php
onReviewNew($webhook_payload_review_new)
```

Review new event

A new review was posted on a connected Google Business Profile account, in real time through Pub/Sub.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_review_new = {"id":"00000000-0000-4000-8000-000000000000","event":"review.new","timestamp":"2026-01-15T10:00:00Z","review":{"id":"AbFvOqSample123","platform":"googlebusiness","rating":5,"text":"Great service, would come back!","reviewer":{"id":null,"name":"Sample Reviewer","profileImage":null},"createdAt":"2026-01-15T10:00:00.000Z","hasReply":false},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"googlebusiness","username":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadReviewNew

try {
    $apiInstance->onReviewNew($webhook_payload_review_new);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onReviewNew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_review_new** | [**\Zernio\Model\WebhookPayloadReviewNew**](../Model/WebhookPayloadReviewNew.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onReviewRestored()`

```php
onReviewRestored($webhook_payload_review_restored)
```

Review restored event

Google returned a review previously reported by `review.deleted`; the payload has the same shape as `review.new`.  ### When it fires  It may reach a webhook that subscribed after the deletion, so ignore ids you do not know.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_review_restored = {"id":"00000000-0000-4000-8000-000000000000","event":"review.restored","timestamp":"2026-01-15T10:00:00Z","review":{"id":"AbFvOqSample123","platform":"googlebusiness","rating":5,"text":"Great service, would come back!","reviewer":{"id":null,"name":"Sample Reviewer","profileImage":null},"createdAt":"2026-01-15T10:00:00.000Z","hasReply":false},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"googlebusiness","username":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadReviewRestored

try {
    $apiInstance->onReviewRestored($webhook_payload_review_restored);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onReviewRestored: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_review_restored** | [**\Zernio\Model\WebhookPayloadReviewRestored**](../Model/WebhookPayloadReviewRestored.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onReviewUpdated()`

```php
onReviewUpdated($webhook_payload_review_updated)
```

Review updated event

A Google Business Profile review changed: the reviewer edited it, or its reply was added, edited or removed.  ### Reply through the API  A reply sent through the Zernio API fires the event immediately. The periodic check then reports it again with the full review payload, so expect a second delivery.  ### Replies written in Google  Google sends no notification for replies written in its interface. The periodic check detects them, usually within 6 hours for reviews updated in the last 30 days, about 7 days for older.  ### Checks  Only teams with a webhook subscribed to `review.updated` are checked. A removed reply, through the API or in Google, fires from the periodic check with `review.hasReply` set to `false`.  ### Payload notes  Same shape as `review.new`. When a reply is present, `review.hasReply` is `true` and `review.reply` is populated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_review_updated = {"id":"00000000-0000-4000-8000-000000000000","event":"review.updated","timestamp":"2026-01-15T10:00:00Z","review":{"id":"AbFvOqSample123","platform":"googlebusiness","rating":4,"text":"Great service, would come back!","reviewer":{"id":null,"name":"Sample Reviewer","profileImage":null},"createdAt":"2026-01-15T10:00:00.000Z","hasReply":true,"reply":{"text":"Thanks for visiting!","createdAt":"2026-01-15T10:00:00.000Z"}},"account":{"id":"507f1f77bcf86cd799439011","accountId":"507f1f77bcf86cd799439011","platform":"googlebusiness","username":"Sample Brand"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadReviewUpdated

try {
    $apiInstance->onReviewUpdated($webhook_payload_review_updated);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onReviewUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_review_updated** | [**\Zernio\Model\WebhookPayloadReviewUpdated**](../Model/WebhookPayloadReviewUpdated.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onSequenceEnrolled()`

```php
onSequenceEnrolled($webhook_payload_sequence_enrollment)
```

Sequence enrolled event

A contact was enrolled in a sequence, through the API or a workflow `enroll_sequence` node.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_sequence_enrollment = {"id":"00000000-0000-4000-8000-000000000000","event":"sequence.enrolled","timestamp":"2026-01-15T10:00:00Z","sequence":{"id":"507f1f77bcf86cd79943901e","name":"Onboarding drip"},"contact":{"id":"507f1f77bcf86cd799439016"},"enrollment":{"id":"507f1f77bcf86cd79943901f"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadSequenceEnrollment

try {
    $apiInstance->onSequenceEnrolled($webhook_payload_sequence_enrollment);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onSequenceEnrolled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_sequence_enrollment** | [**\Zernio\Model\WebhookPayloadSequenceEnrollment**](../Model/WebhookPayloadSequenceEnrollment.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onSequenceExited()`

```php
onSequenceExited($webhook_payload_sequence_enrollment)
```

Sequence exited event

A contact left a sequence; `exitReason` says why.  ### Exit reasons  - `completed`: the last step was sent. - `replied` - `manual`: unenrolled through the API. - `failed`: the step kept failing to send. - `unsubscribed`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_sequence_enrollment = {"id":"00000000-0000-4000-8000-000000000000","event":"sequence.exited","timestamp":"2026-01-15T10:00:00Z","sequence":{"id":"507f1f77bcf86cd79943901e","name":"Onboarding drip"},"contact":{"id":"507f1f77bcf86cd799439016"},"enrollment":{"id":"507f1f77bcf86cd79943901f"},"exitReason":"replied","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadSequenceEnrollment

try {
    $apiInstance->onSequenceExited($webhook_payload_sequence_enrollment);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onSequenceExited: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_sequence_enrollment** | [**\Zernio\Model\WebhookPayloadSequenceEnrollment**](../Model/WebhookPayloadSequenceEnrollment.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onSmsRegistrationActionRequired()`

```php
onSmsRegistrationActionRequired($on_sms_registration_action_required_request)
```

SMS registration action required event

An SMS registration is waiting on its owner; `reason` says why.  ### Reasons  - `changes_requested`: answer `message` via `POST /v1/sms/registrations/{id}/respond`. - `otp_required`: submit the texted code via `POST /v1/sms/registrations/{id}/verify-otp`; no `message`. - `carrier_info_required`: expires after 7 days.  ### When it fires  Fires once per new request and once per OTP or carrier request, not on follow-up messages. A carrier rejection alone does not fire it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$on_sms_registration_action_required_request = {"id":"00000000-0000-4000-8000-000000000000","event":"sms.registration.action_required","timestamp":"2026-01-15T10:00:00Z","registration":{"id":"507f1f77bcf86cd79943901b","type":"standard_10dlc","displayName":"Sample Brand","status":"changes_requested","profileId":"507f1f77bcf86cd799439012"},"reason":"changes_requested","message":"Please add a privacy policy link to your opt-in flow.","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\OnSmsRegistrationActionRequiredRequest

try {
    $apiInstance->onSmsRegistrationActionRequired($on_sms_registration_action_required_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onSmsRegistrationActionRequired: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_sms_registration_action_required_request** | [**\Zernio\Model\OnSmsRegistrationActionRequiredRequest**](../Model/OnSmsRegistrationActionRequiredRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onSmsRegistrationStatusUpdated()`

```php
onSmsRegistrationStatusUpdated($on_sms_registration_status_updated_request)
```

SMS registration status updated event

An SMS registration changed status; `status` is the new one.  ### Statuses  - `changes_requested`: answers needed. - `requested`: submitted, resubmitted, or your answers are back in review. - `pending`: with the carriers. - `approved`: live, attach numbers. - `rejected`: `reason` is the carriers' words. - `deactivated`  ### Rejections  A carrier rejection needs nothing from you. Zernio handles the fix and resends it, so the status returns to `pending`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$on_sms_registration_status_updated_request = {"id":"00000000-0000-4000-8000-000000000000","event":"sms.registration.status_updated","timestamp":"2026-01-15T10:00:00Z","registration":{"id":"507f1f77bcf86cd79943901b","type":"standard_10dlc","displayName":"Sample Brand","status":"approved","profileId":"507f1f77bcf86cd799439012"},"status":"approved","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\OnSmsRegistrationStatusUpdatedRequest

try {
    $apiInstance->onSmsRegistrationStatusUpdated($on_sms_registration_status_updated_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onSmsRegistrationStatusUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_sms_registration_status_updated_request** | [**\Zernio\Model\OnSmsRegistrationStatusUpdatedRequest**](../Model/OnSmsRegistrationStatusUpdatedRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onSupportRunCompleted()`

```php
onSupportRunCompleted($webhook_payload_support_run)
```

Support Assistant finished event

A support run finished with an answer, or handed the question to a person.  ### Payload notes  `run.status` is `completed`, or `needs_human` when Ana handed the question to a person. `run.answer` holds the answer; `run.stopReason` says why it stopped (`answered` or `human_review`, among others).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_support_run = {"id":"00000000-0000-4000-8000-000000000000","event":"support.run.completed","timestamp":"2026-01-15T10:00:00Z","run":{"runId":"507f1f77bcf86cd799439024","threadId":"507f1f77bcf86cd799439025","status":"completed","stopReason":"answered","question":"Why did my Instagram post fail to publish?","answer":"Your Instagram account needs to be reconnected.","diagnosis":{"category":"account_connection","cause":"The Instagram access token expired.","fixSteps":["Reconnect the Instagram account."],"docsLinks":[],"whoMustAct":"integrator"},"usage":{"inputTokens":1200,"outputTokens":180,"cacheReadTokens":0,"cacheWriteTokens":0},"costUsd":0.02,"maxCostUsd":1,"createdAt":"2026-01-14T10:00:00.000Z","startedAt":"2026-01-14T10:00:00.000Z","finishedAt":"2026-01-15T10:00:00.000Z","supportTicket":null}}; // \Zernio\Model\WebhookPayloadSupportRun

try {
    $apiInstance->onSupportRunCompleted($webhook_payload_support_run);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onSupportRunCompleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_support_run** | [**\Zernio\Model\WebhookPayloadSupportRun**](../Model/WebhookPayloadSupportRun.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onSupportRunFailed()`

```php
onSupportRunFailed($webhook_payload_support_run)
```

Support Assistant failed event

A support run failed or expired, and is not billed.  ### Payload notes  `run.status` is `failed` and `run.answer` is `null`. `run.stopReason` is `expired` when the run never finished. `run.costUsd` is 0.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_support_run = {"id":"00000000-0000-4000-8000-000000000000","event":"support.run.failed","timestamp":"2026-01-15T10:00:00Z","run":{"runId":"507f1f77bcf86cd799439024","threadId":"507f1f77bcf86cd799439025","status":"failed","stopReason":"error","question":"Why did my Instagram post fail to publish?","answer":null,"diagnosis":null,"usage":{"inputTokens":1200,"outputTokens":180,"cacheReadTokens":0,"cacheWriteTokens":0},"costUsd":0.02,"maxCostUsd":1,"createdAt":"2026-01-14T10:00:00.000Z","startedAt":"2026-01-14T10:00:00.000Z","finishedAt":"2026-01-15T10:00:00.000Z","supportTicket":null}}; // \Zernio\Model\WebhookPayloadSupportRun

try {
    $apiInstance->onSupportRunFailed($webhook_payload_support_run);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onSupportRunFailed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_support_run** | [**\Zernio\Model\WebhookPayloadSupportRun**](../Model/WebhookPayloadSupportRun.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onVerificationApproved()`

```php
onVerificationApproved($on_verification_approved_request)
```

Verification approved event

The recipient submitted the right verification code.  ### Payload notes  Carries `verification.verificationId`, `verification.channel` (`sms`) and `verification.to`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$on_verification_approved_request = {"id":"00000000-0000-4000-8000-000000000000","event":"verification.approved","timestamp":"2026-01-15T10:00:00Z","verification":{"verificationId":"507f1f77bcf86cd799439022","channel":"sms","to":"+15555550123"}}; // \Zernio\Model\OnVerificationApprovedRequest

try {
    $apiInstance->onVerificationApproved($on_verification_approved_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onVerificationApproved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_verification_approved_request** | [**\Zernio\Model\OnVerificationApprovedRequest**](../Model/OnVerificationApprovedRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onVerificationFailed()`

```php
onVerificationFailed($on_verification_failed_request)
```

Verification failed event

A verification ran out of attempts without a correct code.  ### Payload notes  `reason` is `max_attempts_reached`. Carries the same `verification` fields as `verification.approved`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$on_verification_failed_request = {"id":"00000000-0000-4000-8000-000000000000","event":"verification.failed","timestamp":"2026-01-15T10:00:00Z","verification":{"verificationId":"507f1f77bcf86cd799439022","channel":"sms","to":"+15555550123"},"reason":"max_attempts_reached"}; // \Zernio\Model\OnVerificationFailedRequest

try {
    $apiInstance->onVerificationFailed($on_verification_failed_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onVerificationFailed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_verification_failed_request** | [**\Zernio\Model\OnVerificationFailedRequest**](../Model/OnVerificationFailedRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWebhookTest()`

```php
onWebhookTest($webhook_payload_test)
```

Webhook test event

Zernio sent a test event to an endpoint.  ### When it fires  Sent when you call Test webhook or press test in the dashboard, whatever events the endpoint subscribes to. Sent once, synchronously, and never retried.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_test = {"id":"00000000-0000-4000-8000-000000000000","event":"webhook.test","message":"This is a test webhook from Zernio","timestamp":"2026-01-15T10:00:00Z"}; // \Zernio\Model\WebhookPayloadTest

try {
    $apiInstance->onWebhookTest($webhook_payload_test);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWebhookTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_test** | [**\Zernio\Model\WebhookPayloadTest**](../Model/WebhookPayloadTest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWhatsAppAccountAlertReceived()`

```php
onWhatsAppAccountAlertReceived($webhook_payload_whats_app_account_alert_received)
```

WhatsApp account alert received

Meta sent an account alert for a connected WhatsApp Business Account.  ### Payload notes  Forwards Meta's `account_alerts` as is. `alert.severity` is `CRITICAL`, `WARNING` or `INFORMATIONAL`; `alert.type` is Meta's alert type; `alert.description` is the text.  ### Who receives it  An alert about one number goes to that number's account. A business-level alert goes to every connected number on the WABA.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_whats_app_account_alert_received = {"id":"00000000-0000-4000-8000-000000000000","event":"whatsapp.account.alert_received","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"whatsapp","username":"+15555550100","displayName":"Sample Brand"},"alert":{"entityType":"WABA","entityId":"100000000000003","severity":"WARNING","status":"ACTIVE","type":"OBA_APPROVED","description":"Your account is approved for the Official Business Account badge."},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadWhatsAppAccountAlertReceived

try {
    $apiInstance->onWhatsAppAccountAlertReceived($webhook_payload_whats_app_account_alert_received);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppAccountAlertReceived: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_whats_app_account_alert_received** | [**\Zernio\Model\WebhookPayloadWhatsAppAccountAlertReceived**](../Model/WebhookPayloadWhatsAppAccountAlertReceived.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWhatsAppAccountNameStatusUpdated()`

```php
onWhatsAppAccountNameStatusUpdated($webhook_payload_whats_app_account_name_status_updated)
```

WhatsApp display-name review outcome event

Meta finished reviewing a WhatsApp display-name change on a connected number.  ### When it fires  Fires only on a review outcome, forwarded from Meta's `phone_number_name_update` field. A name applied without review (`AVAILABLE_WITHOUT_REVIEW`) produces no event.  ### Payload notes  Branch on `name.status` (`APPROVED`, `DECLINED`, `PENDING_REVIEW`). Meta's `REJECTED` maps to `DECLINED` and `DEFERRED` to `PENDING_REVIEW`, because the review is still open. `name.requestedName` and `name.rejectionReason` are Meta's values or null.  ### Delivery  Delivery is at-least-once; dedupe on `(account.accountId, name.status, name.requestedName)`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_whats_app_account_name_status_updated = {"id":"00000000-0000-4000-8000-000000000000","event":"whatsapp.account.name_status_updated","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"whatsapp","username":"+15555550100","displayName":"Sample Brand"},"name":{"status":"APPROVED","requestedName":"Sample Brand","rejectionReason":null,"displayPhoneNumber":"+15555550100"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadWhatsAppAccountNameStatusUpdated

try {
    $apiInstance->onWhatsAppAccountNameStatusUpdated($webhook_payload_whats_app_account_name_status_updated);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppAccountNameStatusUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_whats_app_account_name_status_updated** | [**\Zernio\Model\WebhookPayloadWhatsAppAccountNameStatusUpdated**](../Model/WebhookPayloadWhatsAppAccountNameStatusUpdated.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWhatsAppAccountQualityUpdated()`

```php
onWhatsAppAccountQualityUpdated($webhook_payload_whats_app_account_quality_updated)
```

WhatsApp quality rating or messaging limit changed

A connected number's quality rating or messaging limit tier changed.  ### When it fires  Fires only when the rating or tier differs from the value Zernio held. A tier change Meta applies to the whole business portfolio fires once per connected number.  ### Payload notes  `quality.source` says which Meta signal reported it. Compare `quality.previousQualityRating` with `quality.qualityRating`, and the previous and current messaging limit tier. `quality.qualityRating` is Meta's live value (`GREEN`, `YELLOW`, `RED`).  ### Delivery  Delivery is at-least-once; dedupe on the event `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_whats_app_account_quality_updated = {"id":"00000000-0000-4000-8000-000000000000","event":"whatsapp.account.quality_updated","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"whatsapp","username":"+15555550100","displayName":"Sample Brand"},"quality":{"source":"phone_number_quality_update","metaEvent":"FLAGGED","qualityRating":"YELLOW","previousQualityRating":"GREEN","messagingLimitTier":"TIER_1K","previousMessagingLimitTier":"TIER_1K","displayPhoneNumber":"+15555550100"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadWhatsAppAccountQualityUpdated

try {
    $apiInstance->onWhatsAppAccountQualityUpdated($webhook_payload_whats_app_account_quality_updated);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppAccountQualityUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_whats_app_account_quality_updated** | [**\Zernio\Model\WebhookPayloadWhatsAppAccountQualityUpdated**](../Model/WebhookPayloadWhatsAppAccountQualityUpdated.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWhatsAppAccountStatusUpdated()`

```php
onWhatsAppAccountStatusUpdated($webhook_payload_whats_app_account_status_updated)
```

WhatsApp Business Account restricted or reinstated

Meta restricted, disabled, deleted or reinstated a connected WhatsApp Business Account, or flagged a violation on it.  ### When it fires  Mirrors Meta's `account_update` events. They apply to the whole WhatsApp Business Account, so every connected number on it receives one event.  ### Payload notes  Branch on `status.status` (`restricted` or `active`) and `status.metaEvent`. `status.restrictions` lists what Meta restricted (for example `RESTRICTED_BIZ_INITIATED_MESSAGING`) and when each lifts. The same status is on the account as `platformStatus`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_whats_app_account_status_updated = {"id":"00000000-0000-4000-8000-000000000000","event":"whatsapp.account.status_updated","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"whatsapp","username":"+15555550100","displayName":"Sample Brand"},"status":{"status":"restricted","metaEvent":"ACCOUNT_RESTRICTION","reason":null,"violationType":"SCAM","restrictions":[{"type":"RESTRICTED_ADD_PHONE_NUMBER_ACTION","expiresAt":"2026-01-22T10:00:00.000Z"}],"banState":null,"banDate":null},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadWhatsAppAccountStatusUpdated

try {
    $apiInstance->onWhatsAppAccountStatusUpdated($webhook_payload_whats_app_account_status_updated);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppAccountStatusUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_whats_app_account_status_updated** | [**\Zernio\Model\WebhookPayloadWhatsAppAccountStatusUpdated**](../Model/WebhookPayloadWhatsAppAccountStatusUpdated.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWhatsAppAutomaticEvent()`

```php
onWhatsAppAutomaticEvent($on_whats_app_automatic_event_request)
```

WhatsApp automatic event detected

Meta's automatic event identification detected a lead or purchase in a Click-to-WhatsApp conversation.  ### Payload notes  Branch on `eventName` (`LeadSubmitted` or `Purchase`). `Purchase` may carry the detected amount in `customData` (`currency`, `value`). It carries the `ctwaClid`.  ### Conversions API match key  Meta omits the clid on a minority of referrals, most often WhatsApp Status placements; this event can supply it. Zernio writes it onto the conversation, so `POST /v1/whatsapp/conversions` becomes usable for it.  ### Availability  Detection is not available for EU, UK and JP businesses. Elsewhere the owner opts in during Embedded Signup. An endpoint subscribed on a number whose owner did not opt in receives nothing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$on_whats_app_automatic_event_request = {"id":"00000000-0000-4000-8000-000000000000","event":"whatsapp.automatic_event","timestamp":"2026-01-15T10:00:00Z","accountId":"507f1f77bcf86cd799439011","conversationId":"507f1f77bcf86cd799439014","platformMessageId":"wamid.SAMPLE1234567890","eventName":"Purchase","ctwaClid":"ARAkSAMPLEctwaClid","customData":{"currency":"USD","value":49.99},"detectedAt":"2026-01-15T10:00:00.000Z","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\OnWhatsAppAutomaticEventRequest

try {
    $apiInstance->onWhatsAppAutomaticEvent($on_whats_app_automatic_event_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppAutomaticEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_whats_app_automatic_event_request** | [**\Zernio\Model\OnWhatsAppAutomaticEventRequest**](../Model/OnWhatsAppAutomaticEventRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWhatsAppContactIdentityChanged()`

```php
onWhatsAppContactIdentityChanged($webhook_payload_whats_app_contact_identity_changed)
```

WhatsApp contact identity changed event

A WhatsApp user changed phone number or Meta regenerated their business-scoped user id (BSUID).  ### When it fires  Fires when Meta reports the user under a new phone number (`reason: \"user_changed_number\"`) or a new BSUID (`user_changed_user_id`, `user_identity_changed` or `user_id_update`).  ### Payload notes  `previous` and `current` carry the phone number, BSUID, parent BSUID and username. Use them to re-key records stored against the old value.  ### Already applied  Zernio has already moved the inbox conversation and the contact when the event arrives. `conversationId` and `contactId` point at them, or are null when there was none.  ### Delivery  Delivery is at-least-once; dedupe on the event `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_whats_app_contact_identity_changed = {"id":"00000000-0000-4000-8000-000000000000","event":"whatsapp.contact.identity_changed","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"whatsapp","username":"+15555550100","displayName":"Sample Brand"},"reason":"user_changed_number","previous":{"phoneNumber":"+15555550123","businessScopedUserId":null,"parentBusinessScopedUserId":null,"whatsappUsername":null},"current":{"phoneNumber":"+15555550124","businessScopedUserId":null,"parentBusinessScopedUserId":null,"whatsappUsername":null},"contactId":"507f1f77bcf86cd799439016","conversationId":"507f1f77bcf86cd799439014","changedAt":"2026-01-15T10:00:00.000Z","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadWhatsAppContactIdentityChanged

try {
    $apiInstance->onWhatsAppContactIdentityChanged($webhook_payload_whats_app_contact_identity_changed);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppContactIdentityChanged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_whats_app_contact_identity_changed** | [**\Zernio\Model\WebhookPayloadWhatsAppContactIdentityChanged**](../Model/WebhookPayloadWhatsAppContactIdentityChanged.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWhatsAppNumberActionRequired()`

```php
onWhatsAppNumberActionRequired($on_whats_app_number_action_required_request)
```

WhatsApp number action required event

The regulator asked for more information on a placed number order; nothing was rejected.  ### When it fires  The order stays pending, and the number stays `pending_regulatory`, until you provide the information. The status does not change.  ### Payload notes  `reason` carries the regulator's request verbatim when available. `requirements` lists every requirement with the reviewer's current verdict; the `declined` ones are what to fix, keyed by `requirementId`. Verdicts describe the review at `reviewedAt`.  ### How to resolve  Provide the missing details from the dashboard's phone-numbers page, or re-submit the fields through the remediation endpoint. The review resumes automatically.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$on_whats_app_number_action_required_request = {"id":"00000000-0000-4000-8000-000000000000","event":"whatsapp.number.action_required","timestamp":"2026-01-15T10:00:00Z","number":{"id":"507f1f77bcf86cd79943901a","phoneNumber":"+15555550100","country":"US","profileId":"507f1f77bcf86cd799439012"},"reason":"Please upload a proof of address issued within the last 3 months.","requirements":[{"requirementId":"req_sample_address","label":"Proof of address","status":"declined"}],"reviewedAt":"2026-01-15T10:00:00.000Z","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\OnWhatsAppNumberActionRequiredRequest

try {
    $apiInstance->onWhatsAppNumberActionRequired($on_whats_app_number_action_required_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppNumberActionRequired: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_whats_app_number_action_required_request** | [**\Zernio\Model\OnWhatsAppNumberActionRequiredRequest**](../Model/OnWhatsAppNumberActionRequiredRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWhatsAppNumberActivated()`

```php
onWhatsAppNumberActivated($on_whats_app_number_activated_request)
```

WhatsApp number activated event

A number you provisioned through Zernio finished setup and is ready to connect.  ### When it fires  Regulated (non-US) numbers can take 1 to 3 business days after the order is approved. In instant-provisioning countries this is the first event, with no review states before it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$on_whats_app_number_activated_request = {"id":"00000000-0000-4000-8000-000000000000","event":"whatsapp.number.activated","timestamp":"2026-01-15T10:00:00Z","number":{"id":"507f1f77bcf86cd79943901a","phoneNumber":"+15555550100","country":"US","profileId":"507f1f77bcf86cd799439012"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\OnWhatsAppNumberActivatedRequest

try {
    $apiInstance->onWhatsAppNumberActivated($on_whats_app_number_activated_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppNumberActivated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_whats_app_number_activated_request** | [**\Zernio\Model\OnWhatsAppNumberActivatedRequest**](../Model/OnWhatsAppNumberActivatedRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWhatsAppNumberDeclined()`

```php
onWhatsAppNumberDeclined($on_whats_app_number_declined_request)
```

WhatsApp number declined event

A regulated number order was declined in regulatory review and no number was activated.  ### Payload notes  `reason` carries the reviewer's rejection reason when available. You are never billed for a declined number.  ### Remediation  Resubmit corrected details and the number returns to `pending_regulatory`. It is the same number, with no new billing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$on_whats_app_number_declined_request = {"id":"00000000-0000-4000-8000-000000000000","event":"whatsapp.number.declined","timestamp":"2026-01-15T10:00:00Z","number":{"id":"507f1f77bcf86cd79943901a","phoneNumber":"+15555550100","country":"US","profileId":"507f1f77bcf86cd799439012"},"reason":"The proof of address does not match the business address.","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\OnWhatsAppNumberDeclinedRequest

try {
    $apiInstance->onWhatsAppNumberDeclined($on_whats_app_number_declined_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppNumberDeclined: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_whats_app_number_declined_request** | [**\Zernio\Model\OnWhatsAppNumberDeclinedRequest**](../Model/OnWhatsAppNumberDeclinedRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWhatsAppNumberKycSubmitted()`

```php
onWhatsAppNumberKycSubmitted($on_whats_app_number_kyc_submitted_request)
```

WhatsApp number KYC submitted event

An end customer completed a hosted KYC share link and the number entered regulatory review.  ### When it fires  Fires only for hosted share links (`POST /v1/phone-numbers/kyc/share`). When you submit KYC over the API, no event fires.  ### What follows  The number is `pending_regulatory` under your account. `whatsapp.number.activated` or `whatsapp.number.declined` follows once the provider rules on it. Update your own UI from this event instead of polling.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$on_whats_app_number_kyc_submitted_request = {"id":"00000000-0000-4000-8000-000000000000","event":"whatsapp.number.kyc_submitted","timestamp":"2026-01-15T10:00:00Z","number":{"id":"507f1f77bcf86cd79943901a","phoneNumber":"+15555550100","country":"US","profileId":"507f1f77bcf86cd799439012"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\OnWhatsAppNumberKycSubmittedRequest

try {
    $apiInstance->onWhatsAppNumberKycSubmitted($on_whats_app_number_kyc_submitted_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppNumberKycSubmitted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_whats_app_number_kyc_submitted_request** | [**\Zernio\Model\OnWhatsAppNumberKycSubmittedRequest**](../Model/OnWhatsAppNumberKycSubmittedRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWhatsAppNumberReactivated()`

```php
onWhatsAppNumberReactivated($on_whats_app_number_reactivated_request)
```

WhatsApp number reactivated event

A suspended number was reactivated, for example after the payment recovered, and is usable again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$on_whats_app_number_reactivated_request = {"id":"00000000-0000-4000-8000-000000000000","event":"whatsapp.number.reactivated","timestamp":"2026-01-15T10:00:00Z","number":{"id":"507f1f77bcf86cd79943901a","phoneNumber":"+15555550100","country":"US","profileId":"507f1f77bcf86cd799439012"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\OnWhatsAppNumberReactivatedRequest

try {
    $apiInstance->onWhatsAppNumberReactivated($on_whats_app_number_reactivated_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppNumberReactivated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_whats_app_number_reactivated_request** | [**\Zernio\Model\OnWhatsAppNumberReactivatedRequest**](../Model/OnWhatsAppNumberReactivatedRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWhatsAppNumberReleased()`

```php
onWhatsAppNumberReleased($on_whats_app_number_released_request)
```

WhatsApp number released event

A number was released and is no longer usable.  ### Payload notes  Released by you, a billing cleanup or an admin. `reason` is a value such as `user_requested` or `cleanup_suspended`. This is the only terminal status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$on_whats_app_number_released_request = {"id":"00000000-0000-4000-8000-000000000000","event":"whatsapp.number.released","timestamp":"2026-01-15T10:00:00Z","number":{"id":"507f1f77bcf86cd79943901a","phoneNumber":"+15555550100","country":"US","profileId":"507f1f77bcf86cd799439012"},"reason":"user_requested","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\OnWhatsAppNumberReleasedRequest

try {
    $apiInstance->onWhatsAppNumberReleased($on_whats_app_number_released_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppNumberReleased: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_whats_app_number_released_request** | [**\Zernio\Model\OnWhatsAppNumberReleasedRequest**](../Model/OnWhatsAppNumberReleasedRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWhatsAppNumberSuspended()`

```php
onWhatsAppNumberSuspended($on_whats_app_number_suspended_request)
```

WhatsApp number suspended event

An active number was suspended, for example after a failed payment.  ### Payload notes  `reason` is a value such as `payment_failed` or `subscription_ended`. The number stops working until the issue is resolved, then `whatsapp.number.reactivated` follows.  ### When it does not recover  A suspension left unresolved ends in release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$on_whats_app_number_suspended_request = {"id":"00000000-0000-4000-8000-000000000000","event":"whatsapp.number.suspended","timestamp":"2026-01-15T10:00:00Z","number":{"id":"507f1f77bcf86cd79943901a","phoneNumber":"+15555550100","country":"US","profileId":"507f1f77bcf86cd799439012"},"reason":"payment_failed","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\OnWhatsAppNumberSuspendedRequest

try {
    $apiInstance->onWhatsAppNumberSuspended($on_whats_app_number_suspended_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppNumberSuspended: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_whats_app_number_suspended_request** | [**\Zernio\Model\OnWhatsAppNumberSuspendedRequest**](../Model/OnWhatsAppNumberSuspendedRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWhatsAppNumberVerificationRequired()`

```php
onWhatsAppNumberVerificationRequired($on_whats_app_number_verification_required_request)
```

WhatsApp number verification-required event

A regulated number requires the end user to complete an identity check.  ### Payload notes  `verificationUrl` is a one-time link to forward to the person whose ID is on file, for example for Australian mobile numbers. The order completes once they pass. The number stays `pending_regulatory`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$on_whats_app_number_verification_required_request = {"id":"00000000-0000-4000-8000-000000000000","event":"whatsapp.number.verification_required","timestamp":"2026-01-15T10:00:00Z","number":{"id":"507f1f77bcf86cd79943901a","phoneNumber":"+15555550100","country":"US","profileId":"507f1f77bcf86cd799439012"},"verificationUrl":"https://example.com/verify/sample","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\OnWhatsAppNumberVerificationRequiredRequest

try {
    $apiInstance->onWhatsAppNumberVerificationRequired($on_whats_app_number_verification_required_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppNumberVerificationRequired: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_whats_app_number_verification_required_request** | [**\Zernio\Model\OnWhatsAppNumberVerificationRequiredRequest**](../Model/OnWhatsAppNumberVerificationRequiredRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWhatsAppTemplateCategoryUpdated()`

```php
onWhatsAppTemplateCategoryUpdated($webhook_payload_whats_app_template_category_updated)
```

WhatsApp template category updated event

Meta reclassified a WhatsApp template's category, first as a 24-hour advance notice and again when applied.  ### When it fires  Sent with `template.changeType: \"scheduled\"` for Meta's 24-hour advance notice, and again with `\"applied\"` when the change takes effect.  ### Payload notes  `template.category` is always the category right now. Meta clears a custom delivery window when it recategorises a template, so read `message_send_ttl_seconds` back after an `applied` change.  ### Platform notes  Forwarded from Meta's `template_category_update` field. The category decides Meta's per-delivery rate and the delivery window the template can carry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_whats_app_template_category_updated = {"id":"00000000-0000-4000-8000-000000000000","event":"whatsapp.template.category_updated","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"whatsapp","username":"+15555550100","displayName":"Sample Brand"},"template":{"templateId":"1000000000000003","name":"order_confirmation","language":"en_US","changeType":"applied","category":"MARKETING","previousCategory":"UTILITY"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadWhatsAppTemplateCategoryUpdated

try {
    $apiInstance->onWhatsAppTemplateCategoryUpdated($webhook_payload_whats_app_template_category_updated);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppTemplateCategoryUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_whats_app_template_category_updated** | [**\Zernio\Model\WebhookPayloadWhatsAppTemplateCategoryUpdated**](../Model/WebhookPayloadWhatsAppTemplateCategoryUpdated.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWhatsAppTemplateStatusUpdated()`

```php
onWhatsAppTemplateStatusUpdated($webhook_payload_whats_app_template_status_updated)
```

WhatsApp template status updated event

Meta finished reviewing or re-reviewing a WhatsApp Business template on a connected WABA.  ### Payload notes  Branch on `template.status` (`APPROVED`, `REJECTED`, `PENDING`, `PAUSED`, `DISABLED`, `IN_APPEAL`, `PENDING_DELETION`). `template.reason` is Meta's free-form reason or `\"NONE\"`.  ### Platform notes  Forwarded from Meta's `message_template_status_update` field. Meta includes neither the previous status nor the template's category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_whats_app_template_status_updated = {"id":"00000000-0000-4000-8000-000000000000","event":"whatsapp.template.status_updated","timestamp":"2026-01-15T10:00:00Z","account":{"accountId":"507f1f77bcf86cd799439011","profileId":"507f1f77bcf86cd799439012","platform":"whatsapp","username":"+15555550100","displayName":"Sample Brand"},"template":{"templateId":"1000000000000003","name":"order_confirmation","language":"en_US","status":"APPROVED","reason":"NONE"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadWhatsAppTemplateStatusUpdated

try {
    $apiInstance->onWhatsAppTemplateStatusUpdated($webhook_payload_whats_app_template_status_updated);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppTemplateStatusUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_whats_app_template_status_updated** | [**\Zernio\Model\WebhookPayloadWhatsAppTemplateStatusUpdated**](../Model/WebhookPayloadWhatsAppTemplateStatusUpdated.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWorkflowRunCompleted()`

```php
onWorkflowRunCompleted($webhook_payload_workflow_run)
```

Workflow run completed event

A workflow run ended, with `execution.status` `completed`, or `exited` when it ended on purpose before its last node.  ### Exits  An exit is a handoff, or a button that switched the contact to another workflow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_workflow_run = {"id":"00000000-0000-4000-8000-000000000000","event":"workflow.run.completed","timestamp":"2026-01-15T10:00:00Z","workflow":{"id":"507f1f77bcf86cd799439020","name":"Welcome flow"},"conversation":{"id":"507f1f77bcf86cd799439014"},"contact":{"id":"507f1f77bcf86cd799439016"},"trigger":{"type":"keyword","text":"hello"},"execution":{"id":"507f1f77bcf86cd799439021","status":"completed"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadWorkflowRun

try {
    $apiInstance->onWorkflowRunCompleted($webhook_payload_workflow_run);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWorkflowRunCompleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_workflow_run** | [**\Zernio\Model\WebhookPayloadWorkflowRun**](../Model/WebhookPayloadWorkflowRun.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWorkflowRunFailed()`

```php
onWorkflowRunFailed($webhook_payload_workflow_run)
```

Workflow run failed event

A workflow run failed; `error` names the node that failed and why.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_workflow_run = {"id":"00000000-0000-4000-8000-000000000000","event":"workflow.run.failed","timestamp":"2026-01-15T10:00:00Z","workflow":{"id":"507f1f77bcf86cd799439020","name":"Welcome flow"},"conversation":{"id":"507f1f77bcf86cd799439014"},"contact":{"id":"507f1f77bcf86cd799439016"},"trigger":{"type":"keyword","text":"hello"},"execution":{"id":"507f1f77bcf86cd799439021","status":"failed"},"error":"The message could not be sent: the 24-hour messaging window is closed.","profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadWorkflowRun

try {
    $apiInstance->onWorkflowRunFailed($webhook_payload_workflow_run);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWorkflowRunFailed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_workflow_run** | [**\Zernio\Model\WebhookPayloadWorkflowRun**](../Model/WebhookPayloadWorkflowRun.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWorkflowRunStarted()`

```php
onWorkflowRunStarted($webhook_payload_workflow_run)
```

Workflow run started event

A workflow run started for a conversation; `trigger.type` is the trigger node's type.  ### Payload notes  `trigger.text` is the inbound message that started the run, when there was one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_workflow_run = {"id":"00000000-0000-4000-8000-000000000000","event":"workflow.run.started","timestamp":"2026-01-15T10:00:00Z","workflow":{"id":"507f1f77bcf86cd799439020","name":"Welcome flow"},"conversation":{"id":"507f1f77bcf86cd799439014"},"contact":{"id":"507f1f77bcf86cd799439016"},"trigger":{"type":"keyword","text":"hello"},"execution":{"id":"507f1f77bcf86cd799439021","status":"running"},"profiles":[{"id":"507f1f77bcf86cd799439012","externalId":"cus_8f3a2"}]}; // \Zernio\Model\WebhookPayloadWorkflowRun

try {
    $apiInstance->onWorkflowRunStarted($webhook_payload_workflow_run);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWorkflowRunStarted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_workflow_run** | [**\Zernio\Model\WebhookPayloadWorkflowRun**](../Model/WebhookPayloadWorkflowRun.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
