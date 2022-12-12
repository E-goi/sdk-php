# # CampaignSmartSmsScheduleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schedule_date** | **\DateTime** | The date and time | [optional]
**list_id** | **int** |  |
**destination_field** | **string** | Smart SMS campaign destination field. Must be &#39;cellphone&#39; or the other field ID of type                                 cellphone |
**segments** | [**\EgoiClient\EgoiModel\SmartSmsSegmentsActionSend**](SmartSmsSegmentsActionSend.md) |  |
**limit_hour** | [**\EgoiClient\EgoiModel\LimitHourActionSendLimitHour**](LimitHourActionSendLimitHour.md) |  | [optional]
**notify** | **int[]** | Array of IDs of the users to notify | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
