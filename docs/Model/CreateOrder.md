# # CreateOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_total** | **float** | Ecommerce cart total | [optional]
**order_id** | **string** | Order ID is any non-empty unique string |
**cart_id** | **string** | Cart ID that originated this order | [optional]
**order_date** | **\DateTime** | Date and hour of the order | [optional]
**order_status** | **string** | Status of the order | [optional] [default to 'unknown']
**contact** | [**\EgoiClient\EgoiModel\Contact1**](Contact1.md) |  | [optional]
**products** | [**\EgoiClient\EgoiModel\OrderProduct[]**](OrderProduct.md) | List of products | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
