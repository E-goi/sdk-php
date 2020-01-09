# EgoiClient\CampaignsApi

All URIs are relative to *https://api.egoiapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCampaigns**](CampaignsApi.md#deleteCampaigns) | **DELETE** /campaigns/{campaign_hash} | Remove Campaign
[**getAllCampaigns**](CampaignsApi.md#getAllCampaigns) | **GET** /campaigns | Get all Campaigns



## deleteCampaigns

> deleteCampaigns($campaign_hash)

Remove Campaign

Remove campaign information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_hash = 'campaign_hash_example'; // string | ID of the Campaign

try {
    $apiInstance->deleteCampaigns($campaign_hash);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->deleteCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_hash** | **string**| ID of the Campaign |

### Return type

void (empty response body)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAllCampaigns

> \EgoiClient\EgoiModel\CampaignsCollection getAllCampaigns($channel, $campaign_hash, $list_id, $status, $internal_name, $created_by, $group_id, $created_min, $created_max, $updated_min, $updated_max, $start_date_min, $start_date_max, $end_date_min, $end_date_max, $schedule_date_min, $schedule_date_max, $offset, $limit, $order, $order_by)

Get all Campaigns

Returns all campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = 'channel_example'; // string | Channel of the campaign
$campaign_hash = 'campaign_hash_example'; // string | Hash of the campaign
$list_id = 56; // int | ID of the list where the campaign belongs
$status = 'status_example'; // string | Status of the campaign
$internal_name = 'internal_name_example'; // string | Internal name of the campaign
$created_by = 56; // int | ID of the user who created the campaign
$group_id = 56; // int | ID of the group where the campaign belongs
$created_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Created initial date
$created_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Created finish
$updated_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Updated initial
$updated_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Updated finish
$start_date_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date initial
$start_date_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date finish
$end_date_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End Date initial
$end_date_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End Date finish
$schedule_date_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Schedule Date initial
$schedule_date_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Schedule Date finish
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$order = 'desc'; // string | Type of order
$order_by = 'created'; // string | Reference attribute to order campaigns

try {
    $result = $apiInstance->getAllCampaigns($channel, $campaign_hash, $list_id, $status, $internal_name, $created_by, $group_id, $created_min, $created_max, $updated_min, $updated_max, $start_date_min, $start_date_max, $end_date_min, $end_date_max, $schedule_date_min, $schedule_date_max, $offset, $limit, $order, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getAllCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **string**| Channel of the campaign | [optional]
 **campaign_hash** | **string**| Hash of the campaign | [optional]
 **list_id** | **int**| ID of the list where the campaign belongs | [optional]
 **status** | **string**| Status of the campaign | [optional]
 **internal_name** | **string**| Internal name of the campaign | [optional]
 **created_by** | **int**| ID of the user who created the campaign | [optional]
 **group_id** | **int**| ID of the group where the campaign belongs | [optional]
 **created_min** | **\DateTime**| Created initial date | [optional]
 **created_max** | **\DateTime**| Created finish | [optional]
 **updated_min** | **\DateTime**| Updated initial | [optional]
 **updated_max** | **\DateTime**| Updated finish | [optional]
 **start_date_min** | **\DateTime**| Start date initial | [optional]
 **start_date_max** | **\DateTime**| Start date finish | [optional]
 **end_date_min** | **\DateTime**| End Date initial | [optional]
 **end_date_max** | **\DateTime**| End Date finish | [optional]
 **schedule_date_min** | **\DateTime**| Schedule Date initial | [optional]
 **schedule_date_max** | **\DateTime**| Schedule Date finish | [optional]
 **offset** | **int**| Element offset (starting at zero for the first element) | [optional]
 **limit** | **int**| Number of items to return | [optional] [default to 10]
 **order** | **string**| Type of order | [optional] [default to &#39;desc&#39;]
 **order_by** | **string**| Reference attribute to order campaigns | [optional] [default to &#39;created&#39;]

### Return type

[**\EgoiClient\EgoiModel\CampaignsCollection**](../Model/CampaignsCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

