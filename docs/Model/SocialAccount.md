# # SocialAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  |
**platform** | **string** |  |
**profile_id** | [**\Zernio\Model\SocialAccountProfileId**](SocialAccountProfileId.md) |  |
**username** | **string** |  | [optional]
**display_name** | **string** |  | [optional]
**profile_picture** | **string** | URL to the account&#39;s profile picture on the platform. May be null if the platform does not provide one. | [optional]
**profile_url** | **string** | Full profile URL for the connected account on its platform. | [optional]
**is_active** | **bool** |  |
**needs_reconnection** | **bool** | The platform definitively reported the stored OAuth token as dead. While true, GET /v1/connect/{platform}/ads returns a fresh authUrl (implicit force&#x3D;true) instead of alreadyConnected, so re-running the connect flow recovers the account. Cleared automatically when the account is re-authorized. | [optional]
**followers_count** | **float** | Follower count (only included if user has analytics add-on) | [optional]
**followers_last_updated** | **\DateTime** | Last time follower count was updated (only included if user has analytics add-on) | [optional]
**parent_account_id** | **string** | Reference to the parent posting SocialAccount. Set for ads accounts that share or derive from a posting account&#39;s OAuth token. null for standalone ads (Google Ads) and all posting accounts. Meta ads business-login accounts also have no parent. | [optional]
**enabled** | **bool** | Whether the user explicitly activated this account. false means the account was created as a side effect (e.g., posting account auto-created when user connected ads first). Such accounts are hidden from this list, cannot be posted to (&#x60;ACCOUNT_NOT_ENABLED_FOR_POSTING&#x60;), and are not billed as connected accounts. | [optional]
**metadata** | **object** | Platform-specific metadata. Fields vary by platform. For WhatsApp accounts, includes: - qualityRating: Phone number quality rating from Meta (GREEN, YELLOW, RED, or UNKNOWN) - nameStatus: Display name review status (APPROVED, PENDING_REVIEW, DECLINED, or NONE). A declined or pending display name does not by itself block sending; sendability is reported separately via health_status (can_send_message). - messagingLimitTier: Maximum unique business-initiated conversations per 24h rolling window (TIER_250, TIER_1K, TIER_10K, TIER_100K, or TIER_UNLIMITED). Scales automatically as quality rating improves. - verifiedName: Meta-verified business display name - displayPhoneNumber: Formatted phone number (e.g., \&quot;+1 555-123-4567\&quot;) - wabaId: WhatsApp Business Account ID - phoneNumberId: Meta phone number ID  For Meta ads business-login accounts: - tokenType: system-user - businessId: The owning Business Manager ID when there is one owner; null for multiple owners. - businessIds: Owning Business Manager IDs discovered from granted ad accounts. - grantedAdAccountIds: Ad-account IDs granted to the token. - adAccountBusinesses: Map from ad-account ID to its owning business ID or null. - availablePages: Granted Page IDs and names. No Page tokens are exposed. - selectedPageId: The Page selected for creatives and lead forms, or null. - scopedAdAccountIds: Existing sync scope preserved on reconnect. Non-expiring tokens have no tokenExpiresAt field. Parent posting reconnects do not replace this token.  For LinkedIn accounts, profileData carries the profile details refreshed on each daily snapshot: - profileData.bio: The member&#39;s headline for personal accounts, or the organization description for organization accounts. null when the member has not set one. - profileData.extraData.vanityName: The member&#39;s profile slug, i.e. the /in/{vanityName} segment of profileUrl. Personal accounts only; an organization&#39;s own slug is in metadata.organizationInfo.vanityName. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
