# # CreateAdAudienceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Account ID on the target ad platform. |
**ad_account_id** | **string** | Platform ad account ID. Must start with act_ for Meta; bare platform id for others (Google customer id, X/TikTok/LinkedIn/Pinterest account id). |
**name** | **string** |  |
**description** | **string** |  | [optional]
**type** | **string** |  |
**match_rules** | [**\Zernio\Model\UploadedOrDerivedAudienceMatchRulesInner[]**](UploadedOrDerivedAudienceMatchRulesInner.md) | Required for website_retargeting audiences (LinkedIn only). Each rule is a URL pattern; a member who visits any matching page enters the segment. Needs the LinkedIn Insight Tag installed on the customer&#39;s site; the segment only starts filling once the tag reports visits.  The response&#39;s &#x60;platformAudienceId&#x60; is the LinkedIn adSegment id, valid for downstream use. These segments appear in GET /v1/ads/audiences with  &#x60;type: website_retargeting&#x60; once LinkedIn has finished building them. | [optional]
**source_type** | **string** | Required for engagement audiences (LinkedIn only): what members engaged with: a video/leadgen/single-image ad campaign, a Company Page or an Event page. | [optional]
**trigger** | **string** | Required for engagement audiences. The action, validated by LinkedIn against &#x60;sourceType&#x60;. Common values: VIDEO_ADS FIRST_QUARTILE / MIDPOINT / THIRD_QUARTILE / FULL_COMPLETE; LEAD_GEN_FORMS VIEW_FORM / LEAD_FORM_SUBMIT; ORGANIZATION_PAGES VIEW / CTA_CLICK; EVENT_PAGES RSVPED / VIDEO_VIEWED / ENGAGEMENT / CLICK. | [optional]
**lookback_days** | **int** | Required for engagement audiences. Rolling window. | [optional]
**engagement_sources** | **string[]** | Required for engagement audiences. Campaign URNs for the ad source types, organization URNs for pages and events. LinkedIn creates one rule per source, all sharing the same trigger and lookbackDays. | [optional]
**companies** | [**\Zernio\Model\UploadedOrDerivedAudienceCompaniesInner[]**](UploadedOrDerivedAudienceCompaniesInner.md) | Required for company_list audiences (LinkedIn only): plain-text company rows for account targeting. Each row needs at least one identifier. Not hashed, LinkedIn matches these against its own company graph. LinkedIn recommends 1,000+ companies for a usable match rate and takes up to 48h to process the list. Replace the list later with POST /v1/ads/audiences/{audienceId}/companies. | [optional]
**pixel_id** | **string** | Required for website audiences | [optional]
**retention_days** | **int** | Required for website (max 180) and meta_engagement (max 365) audiences. | [optional]
**engagement_source** | **string** | Required for meta_engagement audiences (Meta only): what people engaged with. &#x60;page&#x60; &#x3D; a Facebook Page, &#x60;instagram&#x60; &#x3D; an IG professional account, &#x60;video&#x60; &#x3D; a video. | [optional]
**source_id** | **string** | Required for meta_engagement: the Page / IG account / video id. | [optional]
**event** | **string** | meta_engagement only. The engagement event; defaults per source (page → page_engaged, instagram → ig_business_profile_all, video → video_watched). Ignored when &#x60;rule&#x60; is provided. | [optional]
**source_audience_id** | **string** | Required for lookalike audiences | [optional]
**country** | **string** | 2-letter code, required for lookalike audiences | [optional]
**ratio** | **float** | Required for lookalike audiences | [optional]
**url_contains** | **string** | website only. Narrows the audience from all visitors to visitors of URLs containing this substring. Ignored when &#x60;rule&#x60; is supplied. | [optional]
**rule** | **object** | Optional raw Meta rule, replacing the one we build. Omit it for all visitors of &#x60;pixelId&#x60;, or use &#x60;urlContains&#x60; for the common page-match case.  For &#x60;website&#x60; this is Meta&#39;s Flexible Audience Rule and is VALIDATED before we call Meta: every entry in &#x60;inclusions.rules&#x60; (and &#x60;exclusions.rules&#x60;) must carry &#x60;event_sources&#x60;, &#x60;retention_seconds&#x60; AND &#x60;filter&#x60;. Meta rejects a rule missing any of the three with code 100 / subcode 1713098 (\&quot;Invalid rule JSON format\&quot;), so a bad shape is a 400 here instead. The pre-2018 flat shapes (&#x60;{url: ...}&#x60;, &#x60;{event: ...}&#x60;) are not accepted by Meta at all (subcode 1870029).  Example, visitors of /checkout in the last 30 days: &#x60;{\&quot;inclusions\&quot;:{\&quot;operator\&quot;:\&quot;or\&quot;,\&quot;rules\&quot;:[{\&quot;event_sources\&quot;:[{\&quot;id\&quot;:\&quot;&lt;pixelId&gt;\&quot;,\&quot;type\&quot;:\&quot;pixel\&quot;}],\&quot;retention_seconds\&quot;:2592000,\&quot;filter\&quot;:{\&quot;operator\&quot;:\&quot;and\&quot;,\&quot;filters\&quot;:[{\&quot;field\&quot;:\&quot;url\&quot;,\&quot;operator\&quot;:\&quot;i_contains\&quot;,\&quot;value\&quot;:\&quot;/checkout\&quot;}]}}]}}&#x60;  Note Meta DERIVES &#x60;retention_days&#x60; from &#x60;retention_seconds&#x60; and stores &#x60;event_sources[].id&#x60; as a number, so a rule read back will not be byte-identical to the one you sent.  For &#x60;meta_engagement&#x60; the rule is forwarded verbatim and NOT validated: that type has two dialects (the &#x60;video&#x60; source uses a legacy flat array), so no single schema covers both. | [optional]
**customer_file_source** | **string** | Data source declaration for GDPR compliance (customer_list only) | [optional]
**spec** | [**\ZernioModelTargetingSpec**](\ZernioModelTargetingSpec.md) | The targeting spec to store. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
