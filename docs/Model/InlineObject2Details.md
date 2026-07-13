# # InlineObject2Details

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**free_tier_account_limit** | **int** | How many accounts the free tier allows. Only set when reason&#x3D;free_tier_exceeded. | [optional]
**current_account_count** | **int** | How many accounts the team currently has connected. Set when reason&#x3D;free_tier_exceeded or reason&#x3D;enterprise_required. | [optional]
**has_payment_method** | **bool** | Whether the team currently has a card on file in Stripe. Set when reason&#x3D;free_tier_exceeded or reason&#x3D;twitter_passthrough. | [optional]
**effective_account_limit** | **int** | The negotiated connected-account cap from the team&#39;s enterprise contract. Self-service teams have no cap and never receive this reason. Only set when reason&#x3D;enterprise_required. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
