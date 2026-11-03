# # AdFunnelCounts

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**landing_page_views** | **int** | Landing page views: the visitor actually loaded the destination, unlike a link click. Meta &#x60;landing_page_view&#x60;. | [optional]
**content_views** | **int** | Content views (Meta &#x60;ViewContent&#x60; pixel event). | [optional]
**searches** | **int** | On-site searches (Meta &#x60;Search&#x60; pixel event). | [optional]
**wishlist_adds** | **int** | Adds to wishlist (Meta &#x60;AddToWishlist&#x60; pixel event). | [optional]
**cart_adds** | **int** | Adds to cart (Meta &#x60;AddToCart&#x60; pixel event). | [optional]
**checkouts_initiated** | **int** | Checkouts started (Meta &#x60;InitiateCheckout&#x60; pixel event). | [optional]
**payment_info_adds** | **int** | Payment details added at checkout (Meta &#x60;AddPaymentInfo&#x60; pixel event). | [optional]
**purchases** | **int** | Purchases. Pair with &#x60;purchaseValue&#x60; for revenue.  **Meta** reports one purchase under several action types, so this takes the FIRST present, in this order, never a sum: &#x60;offsite_conversion.fb_pixel_purchase&#x60;, &#x60;omni_purchase&#x60;, &#x60;app_custom_event.fb_mobile_purchase&#x60;, &#x60;onsite_conversion.purchase&#x60;, &#x60;purchase&#x60;.  It always counts purchases, whatever the ad set optimizes for. &#x60;conversions&#x60; instead follows the ad set&#39;s optimization event (PURCHASE when none is named), so the two can differ on any other goal.  **TikTok:** app purchases (&#x60;purchase&#x60;), else website complete payments (&#x60;complete_payment&#x60;), else Place an Order (&#x60;place_order&#x60;). | [optional]
**leads** | **int** | Leads, from either the website pixel or an instant form, whichever the ad uses. | [optional]
**registrations_completed** | **int** | Completed registrations (Meta &#x60;CompleteRegistration&#x60; pixel event). | [optional]
**app_installs** | **int** | Mobile app installs attributed to the ad. | [optional]
**messaging_conversations_started** | **int** | Messaging conversations started within 7 days, the headline metric for click-to-WhatsApp and click-to-Messenger ads. | [optional]
**messaging_first_replies** | **int** | Messaging threads where the person sent a first reply. | [optional]
**schedules** | **int** | Booked appointments (Meta &#x60;Schedule&#x60; pixel event). Pair with &#x60;spend&#x60; for cost per booked meeting.  **Meta** reports Schedule in its &#x60;conversions&#x60; insight field, never in &#x60;actions&#x60;. This takes the FIRST present of &#x60;offsite_conversion.fb_pixel_schedule&#x60;, &#x60;omni_schedule&#x60;, &#x60;app_custom_event.fb_mobile_schedule&#x60;, &#x60;onsite_conversion.schedule&#x60;, &#x60;schedule&#x60;, &#x60;schedule_total&#x60;, &#x60;schedule_mobile_app&#x60;, &#x60;schedule_website&#x60;, &#x60;schedule_offline&#x60;. With none of those, a single &#x60;offsite_schedule_add_&lt;dataset&gt;&#x60; key counts. Two such keys (two datasets) leave it at 0, since one booking can reach both.  Added 2026-11-03. Days synced before then read 0 until re-fetched: each sync restates the last 30 days. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
