# EgoiClient\SmartSmsApi

All URIs are relative to *https://api.egoiapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**actionSendSmartSms**](SmartSmsApi.md#actionSendSmartSms) | **POST** /campaigns/smart-sms/{campaign_hash}/actions/send | Send smart sms message
[**createSmartSmsCampaign**](SmartSmsApi.md#createSmartSmsCampaign) | **POST** /campaigns/smart-sms | Create new smart sms campaign
[**patchSmartSmsCampaign**](SmartSmsApi.md#patchSmartSmsCampaign) | **PATCH** /campaigns/smart-sms/{campaign_hash} | Update a specific smart sms campaign



## actionSendSmartSms

> \EgoiClient\EgoiModel\AcceptedResponse actionSendSmartSms($campaign_hash, $campaign_sms_send_request)

Send smart sms message

Deploys and sends a smart sms message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\SmartSmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$campaign_sms_send_request = new \EgoiClient\EgoiModel\CampaignSmsSendRequest(); // \EgoiClient\EgoiModel\CampaignSmsSendRequest | Parameters for the 'send sms' action

try {
    $result = $apiInstance->actionSendSmartSms($campaign_hash, $campaign_sms_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartSmsApi->actionSendSmartSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |
 **campaign_sms_send_request** | [**\EgoiClient\EgoiModel\CampaignSmsSendRequest**](../Model/CampaignSmsSendRequest.md)| Parameters for the &#39;send sms&#39; action |

### Return type

[**\EgoiClient\EgoiModel\AcceptedResponse**](../Model/AcceptedResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createSmartSmsCampaign

> \EgoiClient\EgoiModel\HashcodeCampaign createSmartSmsCampaign($smart_sms_campaign)

Create new smart sms campaign

Creates a new smart sms campaign.                         **DISCLAIMER:** A URL will be added at the end of your SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\SmartSmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smart_sms_campaign = new \EgoiClient\EgoiModel\SmartSmsCampaign(); // \EgoiClient\EgoiModel\SmartSmsCampaign | Parameters for the Smart Sms Campaign

try {
    $result = $apiInstance->createSmartSmsCampaign($smart_sms_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartSmsApi->createSmartSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smart_sms_campaign** | [**\EgoiClient\EgoiModel\SmartSmsCampaign**](../Model/SmartSmsCampaign.md)| Parameters for the Smart Sms Campaign |

### Return type

[**\EgoiClient\EgoiModel\HashcodeCampaign**](../Model/HashcodeCampaign.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patchSmartSmsCampaign

> \EgoiClient\EgoiModel\HashcodeCampaign patchSmartSmsCampaign($campaign_hash, $smart_sms_campaign_patch_request)

Update a specific smart sms campaign

Update smart sms campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\SmartSmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$smart_sms_campaign_patch_request = new \EgoiClient\EgoiModel\SmartSmsCampaignPatchRequest(); // \EgoiClient\EgoiModel\SmartSmsCampaignPatchRequest | Parameters for the Smart Sms Campaign

try {
    $result = $apiInstance->patchSmartSmsCampaign($campaign_hash, $smart_sms_campaign_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartSmsApi->patchSmartSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |
 **smart_sms_campaign_patch_request** | [**\EgoiClient\EgoiModel\SmartSmsCampaignPatchRequest**](../Model/SmartSmsCampaignPatchRequest.md)| Parameters for the Smart Sms Campaign |

### Return type

[**\EgoiClient\EgoiModel\HashcodeCampaign**](../Model/HashcodeCampaign.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

