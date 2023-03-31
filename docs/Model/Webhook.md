# # Webhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**webhook_id** | **int** |  | [optional] [readonly]
**list_id** | **int** |  |
**url** | **string** | Url to send the webhook &lt;a href&#x3D;&#39;/usecases/webhooks/&#39; target&#x3D;&#39;_blank&#39;&gt;[Go to webhooks documentation]&lt;/a&gt;:  *       Note: Only &#39;http&#39; or &#39;https&#39; protocols are supported. |
**actions** | [**\EgoiClient\EgoiModel\WebhookActionSchema[]**](WebhookActionSchema.md) | Action that will trigger the webhook |
**fields** | **string[]** | Array of contact field IDs to be displayed in the webhook | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
