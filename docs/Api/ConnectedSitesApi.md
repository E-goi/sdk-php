# EgoiClient\ConnectedSitesApi

All URIs are relative to https://api.egoiapp.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createConnectedSites()**](ConnectedSitesApi.md#createConnectedSites) | **POST** /connectedsites | Creates a Connected Site |
| [**deleteConnectedSites()**](ConnectedSitesApi.md#deleteConnectedSites) | **DELETE** /connectedsites/{domain} | Deletes a Connected Site |
| [**getAllConnectedSites()**](ConnectedSitesApi.md#getAllConnectedSites) | **GET** /connectedsites | Get all Connected Sites |
| [**getConnectedSites()**](ConnectedSitesApi.md#getConnectedSites) | **GET** /connectedsites/{domain} | Get a Connected Site |


## `createConnectedSites()`

```php
createConnectedSites($connected_sites_domain): \EgoiClient\EgoiModel\ConnectedSitesDomainDetail
```

Creates a Connected Site

Creates a domain usable in Connected Sites

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ConnectedSitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connected_sites_domain = new \EgoiClient\EgoiModel\ConnectedSitesDomain(); // \EgoiClient\EgoiModel\ConnectedSitesDomain | Parameters for new Connected Site

try {
    $result = $apiInstance->createConnectedSites($connected_sites_domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectedSitesApi->createConnectedSites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connected_sites_domain** | [**\EgoiClient\EgoiModel\ConnectedSitesDomain**](../Model/ConnectedSitesDomain.md)| Parameters for new Connected Site | |

### Return type

[**\EgoiClient\EgoiModel\ConnectedSitesDomainDetail**](../Model/ConnectedSitesDomainDetail.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteConnectedSites()`

```php
deleteConnectedSites($domain)
```

Deletes a Connected Site

Deletes a domain from Connected Sites

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ConnectedSitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Domain

try {
    $apiInstance->deleteConnectedSites($domain);
} catch (Exception $e) {
    echo 'Exception when calling ConnectedSitesApi->deleteConnectedSites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain | |

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

## `getAllConnectedSites()`

```php
getAllConnectedSites(): \EgoiClient\EgoiModel\DomainCollection
```

Get all Connected Sites

Returns all domains usable in Connected Sites

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ConnectedSitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllConnectedSites();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectedSitesApi->getAllConnectedSites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\EgoiClient\EgoiModel\DomainCollection**](../Model/DomainCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConnectedSites()`

```php
getConnectedSites($domain): \EgoiClient\EgoiModel\ConnectedSitesDomainDetail
```

Get a Connected Site

Returns domain info in Connected Sites

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ConnectedSitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Domain

try {
    $result = $apiInstance->getConnectedSites($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectedSitesApi->getConnectedSites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain | |

### Return type

[**\EgoiClient\EgoiModel\ConnectedSitesDomainDetail**](../Model/ConnectedSitesDomainDetail.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
