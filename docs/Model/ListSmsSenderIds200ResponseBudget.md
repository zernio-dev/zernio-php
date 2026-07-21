# # ListSmsSenderIds200ResponseBudget

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cap** | **int** | Daily message cap (raisable via &#x60;/v1/sms/sender-ids/limit-request&#x60;). | [optional]
**used_today** | **int** | Messages already counted against today&#39;s cap. | [optional]
**level** | **int** | Cap tier (Level 1 &#x3D; 500/day). | [optional]
**pending_request** | [**\Zernio\Model\ListSmsSenderIds200ResponseBudgetPendingRequest**](ListSmsSenderIds200ResponseBudgetPendingRequest.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
