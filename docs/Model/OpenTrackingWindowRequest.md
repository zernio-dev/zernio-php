# # OpenTrackingWindowRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**post_id** | **string** | Id of an external post. Required unless &#x60;accountId&#x60; and &#x60;url&#x60; are both sent. | [optional]
**account_id** | **string** | Connected account the post belongs to. Send together with &#x60;url&#x60;. | [optional]
**url** | **string** | Public URL of the post on the platform. Send together with &#x60;accountId&#x60;. | [optional]
**tracking_days** | **int** | How many days the window stays open. | [optional] [default to 30]
**requested_by** | **string** | Free-form label for who asked for the window. It is stored and returned as given. | [optional] [default to 'api']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
