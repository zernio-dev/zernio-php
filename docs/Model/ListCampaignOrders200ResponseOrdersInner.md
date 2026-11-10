# # ListCampaignOrders200ResponseOrdersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**platform_order_id** | **string** | The order id on the store, as in &#x60;GET /v1/commerce/orders/{orderId}&#x60;. |
**order_number** | **string** |  |
**status** | **string** |  |
**participant_id** | **string** |  |
**creator_name** | **string** |  |
**creator_avatar_url** | **string** | The creator&#39;s profile picture. Same source as a participant&#39;s &#x60;creator.avatarUrl&#x60;. |
**matched_by** | **string** |  |
**discount_code** | **string** |  |
**currency** | **string** |  |
**sales_cents** | **int** |  |
**refunded_cents** | **int** |  |
**commission_cents** | **int** | Commission the order holds now, net of refunds. |
**order_created_at** | **\DateTime** |  |
**approved_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
