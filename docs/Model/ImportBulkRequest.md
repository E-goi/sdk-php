# # ImportBulkRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**compare_field** | **string** | Field ID which will be mapped for comparison to prevent duplicates. If it is an extra field,                         append the prefix &#39;extra_&#39; to it (e. g. &#39;extra_1&#39;) | 
**replace_existing_contacts** | **bool** | False to add new contacts only, true to replace existing contacts | [optional] [default to false]
**send_autoresponder** | **bool** | True to send each imported contact the autoresponder sequence you have previously set up for                         sign-ups in this mailing list | [optional] [default to false]
**contacts** | [**\EgoiClient\EgoiModel\Contact[]**](Contact.md) | Array of contacts to import | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


