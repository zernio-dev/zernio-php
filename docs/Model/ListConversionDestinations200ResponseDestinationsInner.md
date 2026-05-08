# # ListConversionDestinations200ResponseDestinationsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Destination identifier. Meta: pixel ID. Google: conversion action resource name. LinkedIn: numeric conversion rule ID. | [optional]
**name** | **string** |  | [optional]
**type** | **string** | Present when the platform locks event type to the destination (Google conversion actions, LinkedIn conversion rules). | [optional]
**status** | **string** |  | [optional]
**ad_account_id** | **string** | Set by adapters whose destinations are scoped to a specific ad account (LinkedIn). Pass back on subsequent CRUD calls. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
