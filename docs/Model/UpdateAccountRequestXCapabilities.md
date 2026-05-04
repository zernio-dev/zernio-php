# # UpdateAccountRequestXCapabilities

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**analytics** | **bool** | Enable periodic analytics reads (impressions, likes, etc.) for this X account. Each X API call is metered as &#x60;posts_read&#x60; and billed pass-through (~$0.005/call at the time of writing — actual rate depends on X&#39;s pricing tier). | [optional]
**inbox** | **bool** | Enable DM polling and inbox sync for this X account. DM reads are metered as &#x60;dm_event_read&#x60; (~$0.010/call) and DM sends as &#x60;dm_interaction_create&#x60; (~$0.015/call), both billed pass-through. DM sends fire only on user-initiated actions; reads/polling fire only when this flag is true. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
