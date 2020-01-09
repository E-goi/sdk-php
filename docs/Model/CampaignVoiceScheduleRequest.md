# # CampaignVoiceScheduleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schedule_date** | [**\DateTime**](\DateTime.md) | The date and time | [optional] 
**list_id** | **int** |  | 
**segments** | [**\EgoiClient\EgoiModel\OSegmentsActionSend**](OSegmentsActionSend.md) |  | 
**notify** | **int[]** | Array of IDs of the users to notify | [optional] 
**destination_field** | **string** | Destination field of this campaign | 
**limit_contacts** | [**\EgoiClient\EgoiModel\OLimitContactsActionSend**](OLimitContactsActionSend.md) |  | [optional] 
**limit_hour** | [**\EgoiClient\EgoiModel\LimitHourActionSendLimitHour**](LimitHourActionSendLimitHour.md) |  | [optional] 
**limit_speed** | **int** | Speed limit to send the campaign | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


