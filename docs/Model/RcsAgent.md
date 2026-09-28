# # RcsAgent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**profile_id** | **string** |  | [optional]
**account_id** | **string** | The rcs inbox account, created once the agent exists with the carriers. | [optional]
**country** | **string** | Launch market (ISO 3166-1 alpha-2). US agents run through the carriers automatically; other markets are filed by our team and skip the testing and launch_review steps (send the launch request while the agent is still in review). | [optional]
**status** | **string** |  | [optional]
**display_name** | **string** |  | [optional]
**use_case** | **string** |  | [optional]
**profile** | [**\Zernio\Model\RcsAgentProfile**](RcsAgentProfile.md) |  | [optional]
**brand** | [**\Zernio\Model\RcsBrand**](RcsBrand.md) |  | [optional]
**launch_request** | [**\Zernio\Model\RcsLaunchRequest**](RcsLaunchRequest.md) |  | [optional]
**carrier_approvals** | [**\Zernio\Model\RcsCarrierApproval[]**](RcsCarrierApproval.md) |  | [optional]
**test_devices** | [**\Zernio\Model\RcsTestDevice[]**](RcsTestDevice.md) |  | [optional]
**sms_fallback_from** | **string** |  | [optional]
**review_note** | **string** | Our note while status is changes_requested. | [optional]
**decline_reason** | **string** |  | [optional]
**requested_at** | **\DateTime** |  | [optional]
**submitted_at** | **\DateTime** |  | [optional]
**live_at** | **\DateTime** |  | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
