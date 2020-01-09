# EgoiClient\VoiceApi

All URIs are relative to *https://api.egoiapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**actionSendVoice**](VoiceApi.md#actionSendVoice) | **POST** /campaigns/voice/{campaign_hash}/actions/send | Send voice message
[**createVoiceCampaign**](VoiceApi.md#createVoiceCampaign) | **POST** /campaigns/voice | Create new voice campaign
[**patchVoiceCampaign**](VoiceApi.md#patchVoiceCampaign) | **PATCH** /campaigns/voice/{campaign_hash} | Update a specific voice campaign



## actionSendVoice

> \EgoiClient\EgoiModel\AcceptedResponse actionSendVoice($campaign_hash, $campaign_voice_send_request)

Send voice message

Deploys and sends an voice message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$campaign_voice_send_request = {"schedule_date":"2019-04-01 12:30:23","list_id":1,"segments":{"type":"none"},"notify":[0],"destination_field":"cellphone","limit_contacts":{"type":"percent","value":10},"limit_hour":{"hour_start":"01:00","hour_end":"04:00"},"limit_speed":1}; // \EgoiClient\EgoiModel\CampaignVoiceSendRequest | Parameters for the 'send voice' action

try {
    $result = $apiInstance->actionSendVoice($campaign_hash, $campaign_voice_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->actionSendVoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |
 **campaign_voice_send_request** | [**\EgoiClient\EgoiModel\CampaignVoiceSendRequest**](../Model/CampaignVoiceSendRequest.md)| Parameters for the &#39;send voice&#39; action |

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


## createVoiceCampaign

> \EgoiClient\EgoiModel\CampaignHash createVoiceCampaign($voice_campaign)

Create new voice campaign

Create a new voice campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voice_campaign = new \EgoiClient\EgoiModel\VoiceCampaign(); // \EgoiClient\EgoiModel\VoiceCampaign | Parameters for the Voice Campaign

try {
    $result = $apiInstance->createVoiceCampaign($voice_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->createVoiceCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voice_campaign** | [**\EgoiClient\EgoiModel\VoiceCampaign**](../Model/VoiceCampaign.md)| Parameters for the Voice Campaign |

### Return type

[**\EgoiClient\EgoiModel\CampaignHash**](../Model/CampaignHash.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patchVoiceCampaign

> \EgoiClient\EgoiModel\CampaignHash patchVoiceCampaign($campaign_hash, $voice_patch_campaign)

Update a specific voice campaign

Update a voice campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\VoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign
$voice_patch_campaign = new \EgoiClient\EgoiModel\VoicePatchCampaign(); // \EgoiClient\EgoiModel\VoicePatchCampaign | Parameters for the Voice Campaign

try {
    $result = $apiInstance->patchVoiceCampaign($campaign_hash, $voice_patch_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceApi->patchVoiceCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |
 **voice_patch_campaign** | [**\EgoiClient\EgoiModel\VoicePatchCampaign**](../Model/VoicePatchCampaign.md)| Parameters for the Voice Campaign |

### Return type

[**\EgoiClient\EgoiModel\CampaignHash**](../Model/CampaignHash.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

