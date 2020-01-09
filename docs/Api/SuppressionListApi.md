# EgoiClient\SuppressionListApi

All URIs are relative to *https://api.egoiapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllSuppressionList**](SuppressionListApi.md#getAllSuppressionList) | **GET** /suppression-list | Get the suppression list



## getAllSuppressionList

> \EgoiClient\EgoiModel\SuppressionListItems getAllSuppressionList($type, $method, $value, $campaign_hash, $created_min, $created_max, $offset, $limit, $order, $order_by)

Get the suppression list

Returns the suppression list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\SuppressionListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Suppression type
$method = 'method_example'; // string | Suppression method
$value = 'value_example'; // string | Reference attribute to value suppression list
$campaign_hash = 'campaign_hash_example'; // string | Reference attribute to campaign id
$created_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Created initial date
$created_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Created finish
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$order = 'desc'; // string | Type of order
$order_by = 'id'; // string | Reference attribute to order the suppression list

try {
    $result = $apiInstance->getAllSuppressionList($type, $method, $value, $campaign_hash, $created_min, $created_max, $offset, $limit, $order, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppressionListApi->getAllSuppressionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Suppression type | [optional]
 **method** | **string**| Suppression method | [optional]
 **value** | **string**| Reference attribute to value suppression list | [optional]
 **campaign_hash** | **string**| Reference attribute to campaign id | [optional]
 **created_min** | **\DateTime**| Created initial date | [optional]
 **created_max** | **\DateTime**| Created finish | [optional]
 **offset** | **int**| Element offset (starting at zero for the first element) | [optional]
 **limit** | **int**| Number of items to return | [optional] [default to 10]
 **order** | **string**| Type of order | [optional] [default to &#39;desc&#39;]
 **order_by** | **string**| Reference attribute to order the suppression list | [optional] [default to &#39;id&#39;]

### Return type

[**\EgoiClient\EgoiModel\SuppressionListItems**](../Model/SuppressionListItems.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

