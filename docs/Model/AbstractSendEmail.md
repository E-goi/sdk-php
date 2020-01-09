# # AbstractSendEmail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**list_id** | **int** |  | 
**segments** | [**\EgoiClient\EgoiModel\EmailSendSegment**](EmailSendSegment.md) |  | 
**notify** | **int[]** | Array of IDs of the users to notify | [optional] 
**destination_field** | **string** | Destination field of this campaign, which must be an email field (email or extra field id).                         If not sent, defaults to the general email field | [optional] 
**unique_contacts_only** | **bool** | True to send the campaign only to unique contacts | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


