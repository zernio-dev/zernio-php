# # FacebookPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content_type** | **string** | Set to &#39;story&#39; for Page Stories (24h ephemeral) or &#39;reel&#39; for Reels (short vertical video). Defaults to feed post if omitted. | [optional]
**title** | **string** | Reel title (only for contentType&#x3D;reel). Separate from the caption/content field. | [optional]
**first_comment** | **string** | Optional first comment to post immediately after publishing (feed posts and reels, not stories). Skipped when facebookSettings.draft is true. | [optional]
**is_ai_generated** | **bool** | When true, Facebook shows its AI-disclosure label on the post. Forwarded as is_ai_generated on Reels (contentType&#x3D;reel) and video Stories (contentType&#x3D;story with a video). Meta documents no such parameter for feed posts, feed videos or photo Stories, so the flag is accepted with a warning and no label there. | [optional] [default to false]
**page_id** | **string** | Target Facebook Page ID for multi-page posting. If omitted, uses the default page. Use GET /v1/accounts/{id}/facebook-page to list pages. | [optional]
**geo_restriction** | [**\Zernio\Model\GeoRestriction**](GeoRestriction.md) |  | [optional]
**collaborators** | **string[]** | Facebook Page IDs (numeric, up to 10 unique) to invite as collaborators. Reels only (contentType&#x3D;reel), sent after the Reel is published, never for drafts. Each Page must accept. Meta allows 10 invites per Page per 24 hours; rejected invites are listed in failedCollaborators. Other values are ignored with a warning. | [optional]
**failed_collaborators** | [**\Zernio\Model\FacebookPlatformDataFailedCollaboratorsInner[]**](FacebookPlatformDataFailedCollaboratorsInner.md) | Output only. Collaborator invites Facebook rejected after the Reel was published. The Reel itself stays published. | [optional]
**facebook_settings** | [**\Zernio\Model\FacebookSettings**](FacebookSettings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
