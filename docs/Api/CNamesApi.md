# EgoiClient\CNamesApi

All URIs are relative to https://api.egoiapp.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCName()**](CNamesApi.md#createCName) | **POST** /cnames | Create cname |
| [**getAllCNames()**](CNamesApi.md#getAllCNames) | **GET** /cnames | Get All CNames |


## `createCName()`

```php
createCName($c_name_post): \EgoiClient\EgoiModel\CName
```

Create cname

Creates a cnames

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\CNamesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$c_name_post = new \EgoiClient\EgoiModel\CNamePost(); // \EgoiClient\EgoiModel\CNamePost | Parameters for the cname

try {
    $result = $apiInstance->createCName($c_name_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CNamesApi->createCName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **c_name_post** | [**\EgoiClient\EgoiModel\CNamePost**](../Model/CNamePost.md)| Parameters for the cname | |

### Return type

[**\EgoiClient\EgoiModel\CName**](../Model/CName.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllCNames()`

```php
getAllCNames(): \EgoiClient\EgoiModel\CNamesCollection
```

Get All CNames

Returns all cnames

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\CNamesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllCNames();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CNamesApi->getAllCNames: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\EgoiClient\EgoiModel\CNamesCollection**](../Model/CNamesCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
