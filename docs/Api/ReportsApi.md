# EgoiClient\ReportsApi

All URIs are relative to https://api.egoiapp.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEmailReport()**](ReportsApi.md#getEmailReport) | **GET** /reports/email/{campaign_hash} | Get email report |
| [**getSMSReport()**](ReportsApi.md#getSMSReport) | **GET** /reports/sms/{campaign_hash} | Get sms report |
| [**getVoiceReport()**](ReportsApi.md#getVoiceReport) | **GET** /reports/voice/{campaign_hash} | Get voice report |
| [**getWebPushReport()**](ReportsApi.md#getWebPushReport) | **GET** /reports/web-push/{campaign_hash} | Get webpush report |


## `getEmailReport()`

```php
getEmailReport($campaign_hash, $date, $weekday, $hour, $location, $domain, $url, $reader): \EgoiClient\EgoiModel\EmailReport
```

Get email report

Returns email report given the campaign hash

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$date = true; // bool | True to show date stats
$weekday = true; // bool | True to show weekday stats
$hour = true; // bool | True to show hour stats
$location = true; // bool | True to show location stats
$domain = true; // bool | True to show Domain stats
$url = true; // bool | True to show Url stats
$reader = true; // bool | True to show Reader stats

try {
    $result = $apiInstance->getEmailReport($campaign_hash, $date, $weekday, $hour, $location, $domain, $url, $reader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getEmailReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_hash** | **string**| ID of the Campaign | |
| **date** | **bool**| True to show date stats | [optional] [default to true] |
| **weekday** | **bool**| True to show weekday stats | [optional] [default to true] |
| **hour** | **bool**| True to show hour stats | [optional] [default to true] |
| **location** | **bool**| True to show location stats | [optional] [default to true] |
| **domain** | **bool**| True to show Domain stats | [optional] [default to true] |
| **url** | **bool**| True to show Url stats | [optional] [default to true] |
| **reader** | **bool**| True to show Reader stats | [optional] [default to true] |

### Return type

[**\EgoiClient\EgoiModel\EmailReport**](../Model/EmailReport.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSMSReport()`

```php
getSMSReport($campaign_hash, $networks): \EgoiClient\EgoiModel\PhoneReport
```

Get sms report

Returns sms report given the campaign hash

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$networks = true; // bool | True to show network stats

try {
    $result = $apiInstance->getSMSReport($campaign_hash, $networks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getSMSReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_hash** | **string**| ID of the Campaign | |
| **networks** | **bool**| True to show network stats | [optional] [default to true] |

### Return type

[**\EgoiClient\EgoiModel\PhoneReport**](../Model/PhoneReport.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoiceReport()`

```php
getVoiceReport($campaign_hash, $networks): \EgoiClient\EgoiModel\PhoneReport
```

Get voice report

Returns voice report given the campaign hash

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$networks = true; // bool | True to show network stats

try {
    $result = $apiInstance->getVoiceReport($campaign_hash, $networks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getVoiceReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_hash** | **string**| ID of the Campaign | |
| **networks** | **bool**| True to show network stats | [optional] [default to true] |

### Return type

[**\EgoiClient\EgoiModel\PhoneReport**](../Model/PhoneReport.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebPushReport()`

```php
getWebPushReport($campaign_hash, $devices, $operating_systems, $browsers, $url): \EgoiClient\EgoiModel\WebPushReport
```

Get webpush report

Returns webpush report given the campaign hash

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$devices = true; // bool | True to show device stats
$operating_systems = true; // bool | True to show operating systems stats
$browsers = true; // bool | True to show browser stats
$url = true; // bool | True to show url stats

try {
    $result = $apiInstance->getWebPushReport($campaign_hash, $devices, $operating_systems, $browsers, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getWebPushReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_hash** | **string**| ID of the Campaign | |
| **devices** | **bool**| True to show device stats | [optional] [default to true] |
| **operating_systems** | **bool**| True to show operating systems stats | [optional] [default to true] |
| **browsers** | **bool**| True to show browser stats | [optional] [default to true] |
| **url** | **bool**| True to show url stats | [optional] [default to true] |

### Return type

[**\EgoiClient\EgoiModel\WebPushReport**](../Model/WebPushReport.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
