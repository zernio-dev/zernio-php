# # PlatformTargetAccountId

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**profile_id** | [**\Late\Model\SocialAccountProfileId**](SocialAccountProfileId.md) |  | [optional]
**username** | **string** |  | [optional]
**display_name** | **string** |  | [optional]
**profile_picture** | **string** | URL to the account&#39;s profile picture on the platform. May be null if the platform does not provide one. | [optional]
**profile_url** | **string** | Full profile URL for the connected account on its platform. | [optional]
**is_active** | **bool** |  | [optional]
**followers_count** | **float** | Follower count (only included if user has analytics add-on) | [optional]
**followers_last_updated** | **\DateTime** | Last time follower count was updated (only included if user has analytics add-on) | [optional]
**parent_account_id** | **string** | Reference to the parent posting SocialAccount. Set for ads accounts that share or derive from a posting account&#39;s OAuth token. null for standalone ads (Google Ads) and all posting accounts. | [optional]
**enabled** | **bool** | Whether the user explicitly activated this account. false means the account was created as a side effect (e.g., posting account auto-created when user connected ads first). Posting UI and scheduler ignore accounts with enabled: false. | [optional]
**metadata** | **object** | Platform-specific metadata. Fields vary by platform. For WhatsApp accounts, includes: - qualityRating: Phone number quality rating from Meta (GREEN, YELLOW, RED, or UNKNOWN) - nameStatus: Display name review status (APPROVED, PENDING_REVIEW, DECLINED, or NONE). Messages cannot be sent until the display name is approved by Meta. - messagingLimitTier: Maximum unique business-initiated conversations per 24h rolling window (TIER_250, TIER_1K, TIER_10K, TIER_100K, or TIER_UNLIMITED). Scales automatically as quality rating improves. - verifiedName: Meta-verified business display name - displayPhoneNumber: Formatted phone number (e.g., \&quot;+1 555-123-4567\&quot;) - wabaId: WhatsApp Business Account ID - phoneNumberId: Meta phone number ID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
