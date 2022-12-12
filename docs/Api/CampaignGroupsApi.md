# EgoiClient\CampaignGroupsApi

All URIs are relative to https://api.egoiapp.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCampaignGroup()**](CampaignGroupsApi.md#createCampaignGroup) | **POST** /campaign-groups | Create new campaign group |
| [**deleteCampaignGroup()**](CampaignGroupsApi.md#deleteCampaignGroup) | **DELETE** /campaign-groups/{group_id} | Remove Campaign Group |
| [**getAllCampaignGroups()**](CampaignGroupsApi.md#getAllCampaignGroups) | **GET** /campaign-groups | Get all campaign groups |
| [**updateCampaignGroup()**](CampaignGroupsApi.md#updateCampaignGroup) | **PUT** /campaign-groups/{group_id} | Update a specific campaign group |


## `createCampaignGroup()`

```php
createCampaignGroup($campaign_group_post): \EgoiClient\EgoiModel\CampaignGroup
```

Create new campaign group

Create a new campaign group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\CampaignGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_group_post = new \EgoiClient\EgoiModel\CampaignGroupPost(); // \EgoiClient\EgoiModel\CampaignGroupPost | Parameters for the Campaign Group

try {
    $result = $apiInstance->createCampaignGroup($campaign_group_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignGroupsApi->createCampaignGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_group_post** | [**\EgoiClient\EgoiModel\CampaignGroupPost**](../Model/CampaignGroupPost.md)| Parameters for the Campaign Group | |

### Return type

[**\EgoiClient\EgoiModel\CampaignGroup**](../Model/CampaignGroup.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCampaignGroup()`

```php
deleteCampaignGroup($group_id)
```

Remove Campaign Group

Remove campaign group information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\CampaignGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | ID of the Campaign Group

try {
    $apiInstance->deleteCampaignGroup($group_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignGroupsApi->deleteCampaignGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of the Campaign Group | |

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

## `getAllCampaignGroups()`

```php
getAllCampaignGroups($group_id, $name, $limit, $offset): \EgoiClient\EgoiModel\CampaignGroupCollection
```

Get all campaign groups

Returns all campaign groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\CampaignGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | Reference attribute to campaign group id
$name = 'name_example'; // string | Reference attribute to campaign group id
$limit = 10; // int | Number of items to return
$offset = 56; // int | Element offset (starting at zero for the first element)

try {
    $result = $apiInstance->getAllCampaignGroups($group_id, $name, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignGroupsApi->getAllCampaignGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| Reference attribute to campaign group id | [optional] |
| **name** | **string**| Reference attribute to campaign group id | [optional] |
| **limit** | **int**| Number of items to return | [optional] [default to 10] |
| **offset** | **int**| Element offset (starting at zero for the first element) | [optional] |

### Return type

[**\EgoiClient\EgoiModel\CampaignGroupCollection**](../Model/CampaignGroupCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCampaignGroup()`

```php
updateCampaignGroup($group_id, $campaign_group_post): \EgoiClient\EgoiModel\CampaignGroup
```

Update a specific campaign group

Update a campaign group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\CampaignGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | ID of the Campaign Group
$campaign_group_post = new \EgoiClient\EgoiModel\CampaignGroupPost(); // \EgoiClient\EgoiModel\CampaignGroupPost | Parameters for the Campaign Group

try {
    $result = $apiInstance->updateCampaignGroup($group_id, $campaign_group_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignGroupsApi->updateCampaignGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of the Campaign Group | |
| **campaign_group_post** | [**\EgoiClient\EgoiModel\CampaignGroupPost**](../Model/CampaignGroupPost.md)| Parameters for the Campaign Group | |

### Return type

[**\EgoiClient\EgoiModel\CampaignGroup**](../Model/CampaignGroup.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
