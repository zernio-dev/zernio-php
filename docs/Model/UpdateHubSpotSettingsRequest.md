# # UpdateHubSpotSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sync_contacts** | **bool** | Create a HubSpot contact for an inbox contact that matches none by email or phone. A match is linked as it is and never updated. | [optional]
**log_messages** | **bool** | Log inbound and outbound inbox messages on the contact&#39;s HubSpot timeline. | [optional]
**log_delivery_status** | **bool** | Add the delivery status of each outgoing WhatsApp, SMS or RCS message to its timeline entry and update it as the message is delivered, read or fails. A failure shows the reason and its code. Only applies while &#x60;logMessages&#x60; is on. | [optional]
**contact_defaults** | **array<string,string>** | Values for contact properties your portal requires on create, keyed by HubSpot internal name (lowercase letters, digits, underscores), for example &#x60;{\&quot;lifecyclestage\&quot;: \&quot;lead\&quot;}&#x60;. Replaces the whole map; send &#x60;{}&#x60; to clear it. Clears &#x60;syncIssue&#x60; until the next contact create tells whether the portal accepts them. | [optional]
**report_deals** | **bool** | Send each deal that becomes closed won as a Purchase to the profile&#39;s event destinations, about every 15 minutes. Requires the portal to have granted &#x60;crm.objects.deals.read&#x60;; otherwise 400. Deals closed before it was turned on are not sent. | [optional]
**use_deals_as_results** | **bool** | Count each closed-won deal as a sale with its amount on the ad campaign that brought its contact, in &#x60;GET /v1/ads/campaign-results&#x60; and ad rules. Requires &#x60;crm.objects.deals.read&#x60;; otherwise 400. Turning it on fills in the deals of the last 90 days, never sent to the ad platforms. | [optional]
**qualified_leads** | [**\Zernio\Model\UpdateHubSpotSettingsRequestQualifiedLeads**](UpdateHubSpotSettingsRequestQualifiedLeads.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
