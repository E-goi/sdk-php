# # ImportOrdersBulkBulkRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Ecommerce order id | 
**contact_id** | **string** | Contact ID is any non-empty unique string identifying the user (such as an email address or e-goi uid) | [optional] 
**revenue** | **float** | Ecommerce order revenue | 
**store_url** | **string** | Ecommerce store url | 
**date** | [**\DateTime**](\DateTime.md) | Ecommerce order date (For technical reasons, all orders synchronized will have the date of synchronization.) | 
**items** | [**\EgoiClient\EgoiModel\ImportOrdersBulkBulkRequestItems[]**](ImportOrdersBulkBulkRequestItems.md) | Array of ordered products | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


