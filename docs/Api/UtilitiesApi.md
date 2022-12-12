# EgoiClient\UtilitiesApi

All URIs are relative to https://api.egoiapp.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllCountries()**](UtilitiesApi.md#getAllCountries) | **GET** /utilities/countries | Get all countries |


## `getAllCountries()`

```php
getAllCountries($phone): \EgoiClient\EgoiModel\CountryCollection
```

Get all countries

Returns all countries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string | Phone number without country code to get all countries which can use that phone number

try {
    $result = $apiInstance->getAllCountries($phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->getAllCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**| Phone number without country code to get all countries which can use that phone number | [optional] |

### Return type

[**\EgoiClient\EgoiModel\CountryCollection**](../Model/CountryCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
