# # CommerceOrderVisit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**occurred_at** | **\DateTime** | Null on WooCommerce, which records the session start without a timezone. | [optional]
**landing_url** | **string** | The first page of the session, with its query string. | [optional]
**referrer_url** | **string** |  | [optional]
**source** | **string** | Where the visit came from, as the platform names it. | [optional]
**source_type** | **string** | Shopify marketing tactic (e.g. SOCIAL, AD, SEARCH) or WooCommerce source type (utm, organic, referral, typein, admin). | [optional]
**utm** | [**\Zernio\Model\CommerceOrderVisitUtm**](CommerceOrderVisitUtm.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
