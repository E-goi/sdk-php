# # CampaignVoiceScheduleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schedule_date** | **\DateTime** | The date and time | [optional]
**list_id** | **int** |  |
**destination_field** | **string** | Destination field of this campaign |
**unique_contacts_only** | **bool** | True to send the campaign only to unique contacts | [optional] [default to false]
**segments** | [**\EgoiClient\EgoiModel\OSegmentsActionSend**](OSegmentsActionSend.md) |  |
**notify** | **int[]** | Array of IDs of the users to notify | [optional]
**limit_contacts** | [**\EgoiClient\EgoiModel\OLimitContactsActionSend**](OLimitContactsActionSend.md) |  | [optional]
**limit_hour** | [**\EgoiClient\EgoiModel\LimitHourActionSendLimitHour**](LimitHourActionSendLimitHour.md) |  | [optional]
**limit_speed** | **int** | Speed limit to send the campaign | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
