# # CampaignSmsSendRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**list_id** | **int** |  |
**destination_field** | **string** | SMS campaign destination field. Must be &#39;cellphone&#39; or the other field ID of type                                 cellphone |
**segments** | [**\EgoiClient\EgoiModel\SmsSegmentsActionSend**](SmsSegmentsActionSend.md) |  |
**notify** | **int[]** | Array of IDs of the users to notify | [optional]
**schedule_date** | **\DateTime** | The date and time | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
