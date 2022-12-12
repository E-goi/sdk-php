# EgoiClient\SmsApi

All URIs are relative to https://api.egoiapp.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**actionSendSms()**](SmsApi.md#actionSendSms) | **POST** /campaigns/sms/{campaign_hash}/actions/send | Send sms message |
| [**createSmsCampaign()**](SmsApi.md#createSmsCampaign) | **POST** /campaigns/sms | Create new sms campaign |
| [**patchSmsCampaign()**](SmsApi.md#patchSmsCampaign) | **PATCH** /campaigns/sms/{campaign_hash} | Update a specific sms campaign |


## `actionSendSms()`

```php
actionSendSms($campaign_hash, $campaign_sms_send_request): \EgoiClient\EgoiModel\AcceptedResponse
```

Send sms message

Deploys and sends an sms message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$campaign_sms_send_request = new \EgoiClient\EgoiModel\CampaignSmsSendRequest(); // \EgoiClient\EgoiModel\CampaignSmsSendRequest | Parameters for the 'send sms' action

try {
    $result = $apiInstance->actionSendSms($campaign_hash, $campaign_sms_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->actionSendSms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_hash** | **string**| ID of the Campaign | |
| **campaign_sms_send_request** | [**\EgoiClient\EgoiModel\CampaignSmsSendRequest**](../Model/CampaignSmsSendRequest.md)| Parameters for the &#39;send sms&#39; action | |

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

## `createSmsCampaign()`

```php
createSmsCampaign($sms_campaign): \EgoiClient\EgoiModel\HashcodeCampaign
```

Create new sms campaign

Create a new sms campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_campaign = new \EgoiClient\EgoiModel\SmsCampaign(); // \EgoiClient\EgoiModel\SmsCampaign | Parameters for the Sms Campaign

try {
    $result = $apiInstance->createSmsCampaign($sms_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->createSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_campaign** | [**\EgoiClient\EgoiModel\SmsCampaign**](../Model/SmsCampaign.md)| Parameters for the Sms Campaign | |

### Return type

[**\EgoiClient\EgoiModel\HashcodeCampaign**](../Model/HashcodeCampaign.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchSmsCampaign()`

```php
patchSmsCampaign($campaign_hash, $sms_campaign_patch_request): \EgoiClient\EgoiModel\HashcodeCampaign
```

Update a specific sms campaign

Update sms campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$sms_campaign_patch_request = new \EgoiClient\EgoiModel\SmsCampaignPatchRequest(); // \EgoiClient\EgoiModel\SmsCampaignPatchRequest | Parameters for the Sms Campaign

try {
    $result = $apiInstance->patchSmsCampaign($campaign_hash, $sms_campaign_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->patchSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_hash** | **string**| ID of the Campaign | |
| **sms_campaign_patch_request** | [**\EgoiClient\EgoiModel\SmsCampaignPatchRequest**](../Model/SmsCampaignPatchRequest.md)| Parameters for the Sms Campaign | |

### Return type

[**\EgoiClient\EgoiModel\HashcodeCampaign**](../Model/HashcodeCampaign.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
