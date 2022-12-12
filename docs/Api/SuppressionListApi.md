# EgoiClient\SuppressionListApi

All URIs are relative to https://api.egoiapp.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSuppressionList()**](SuppressionListApi.md#createSuppressionList) | **POST** /suppression-list | Add to suppression list |
| [**deleteSuppressionList()**](SuppressionListApi.md#deleteSuppressionList) | **DELETE** /suppression-list/{suppression_id} | Delete from suppression list |
| [**getAllSuppressionList()**](SuppressionListApi.md#getAllSuppressionList) | **GET** /suppression-list | Get the suppression list |


## `createSuppressionList()`

```php
createSuppressionList($create_suppression_list_request): \EgoiClient\EgoiModel\AcceptedResponse
```

Add to suppression list

Adds a collection of values to the suppression list

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
$create_suppression_list_request = new \EgoiClient\EgoiModel\CreateSuppressionListRequest(); // \EgoiClient\EgoiModel\CreateSuppressionListRequest | Parameters for the request

try {
    $result = $apiInstance->createSuppressionList($create_suppression_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppressionListApi->createSuppressionList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_suppression_list_request** | [**\EgoiClient\EgoiModel\CreateSuppressionListRequest**](../Model/CreateSuppressionListRequest.md)| Parameters for the request | |

### Return type

[**\EgoiClient\EgoiModel\AcceptedResponse**](../Model/AcceptedResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSuppressionList()`

```php
deleteSuppressionList($suppression_id)
```

Delete from suppression list

Deletes a suppression list value given its ID if it's creation method was ´manual´

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
$suppression_id = 56; // int | ID of Suppression List

try {
    $apiInstance->deleteSuppressionList($suppression_id);
} catch (Exception $e) {
    echo 'Exception when calling SuppressionListApi->deleteSuppressionList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **suppression_id** | **int**| ID of Suppression List | |

### Return type

void (empty response body)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllSuppressionList()`

```php
getAllSuppressionList($type, $method, $value, $campaign_hash, $created_min, $created_max, $offset, $limit, $order, $order_by): \EgoiClient\EgoiModel\SuppressionListItems
```

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
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Suppression type | [optional] |
| **method** | **string**| Suppression method | [optional] |
| **value** | **string**| Reference attribute to value suppression list | [optional] |
| **campaign_hash** | **string**| Reference attribute to campaign id | [optional] |
| **created_min** | **\DateTime**| Created initial date | [optional] |
| **created_max** | **\DateTime**| Created finish | [optional] |
| **offset** | **int**| Element offset (starting at zero for the first element) | [optional] |
| **limit** | **int**| Number of items to return | [optional] [default to 10] |
| **order** | **string**| Type of order | [optional] [default to &#39;desc&#39;] |
| **order_by** | **string**| Reference attribute to order the suppression list | [optional] [default to &#39;id&#39;] |

### Return type

[**\EgoiClient\EgoiModel\SuppressionListItems**](../Model/SuppressionListItems.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
