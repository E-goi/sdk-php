# # CampaignSmsScheduleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schedule_date** | [**\DateTime**](\DateTime.md) | The date and time | [optional] 
**list_id** | **int** |  | 
**destination_field** | **string** | SMS campaign destination field. Must be &#39;cellphone&#39; or the other field ID of type                                 cellphone | 
**segments** | [**\EgoiClient\EgoiModel\SmsSegmentsActionSend**](SmsSegmentsActionSend.md) |  | 
**notify** | **int[]** | Array of IDs of the users to notify | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


