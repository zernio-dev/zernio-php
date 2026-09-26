# # ListConversionDestinations200ResponseDestinationsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Destination identifier. Meta: pixel ID. Google: conversion action resource name. LinkedIn: numeric conversion rule ID. OpenAI Ads: pixel wire id. | [optional]
**name** | **string** |  | [optional]
**type** | **string** | Present when the platform locks event type to the destination (Google conversion actions, LinkedIn conversion rules). | [optional]
**status** | **string** |  | [optional]
**ad_account_id** | **string** | Set by adapters whose destinations are scoped to a specific ad account (LinkedIn). Pass back on subsequent CRUD calls. | [optional]
**conversion_events** | [**\Zernio\Model\ListConversionDestinations200ResponseDestinationsInnerConversionEventsInner[]**](ListConversionDestinations200ResponseDestinationsInnerConversionEventsInner.md) | OpenAI Ads only: the conversion event settings wired to this pixel. Pass one&#39;s &#x60;id&#x60;, &#x60;eventType&#x60; or &#x60;name&#x60; as &#x60;promotedObject.customEventType&#x60; on a &#x60;goal: conversions&#x60; create (POST /v1/ads/create or POST /v1/ads/campaigns) to optimize for it. Without it, the account&#39;s most recently created &#x60;optimizable&#x60; event is used; when none is, the create returns 400. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
