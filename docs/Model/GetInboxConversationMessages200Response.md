# # GetInboxConversationMessages200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** |  | [optional]
**pagination** | [**\Zernio\Model\GetInboxConversationMessages200ResponsePagination**](GetInboxConversationMessages200ResponsePagination.md) |  | [optional]
**sort_order_applied** | **string** | Sort order actually applied to the returned page. May differ from the requested &#x60;sortOrder&#x60; for Twitter, Facebook and Bluesky (always &#x60;desc&#x60; regardless of request). | [optional]
**messages** | [**\Zernio\Model\GetInboxConversationMessages200ResponseMessagesInner[]**](GetInboxConversationMessages200ResponseMessagesInner.md) |  | [optional]
**last_updated** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
