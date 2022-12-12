# EgoiClient\ContactsApi

All URIs are relative to https://api.egoiapp.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**actionActivateContacts()**](ContactsApi.md#actionActivateContacts) | **POST** /lists/{list_id}/contacts/actions/activate | Activate contacts |
| [**actionAttachTag()**](ContactsApi.md#actionAttachTag) | **POST** /lists/{list_id}/contacts/actions/attach-tag | Attach tag to contact |
| [**actionDeactivateContacts()**](ContactsApi.md#actionDeactivateContacts) | **POST** /lists/{list_id}/contacts/actions/deactivate | Deactivate contacts |
| [**actionDetachTag()**](ContactsApi.md#actionDetachTag) | **POST** /lists/{list_id}/contacts/actions/detach-tag | Detach tag to contact |
| [**actionExportContacts()**](ContactsApi.md#actionExportContacts) | **POST** /lists/{list_id}/contacts/actions/export | Exports a list of contacts |
| [**actionForgetContacts()**](ContactsApi.md#actionForgetContacts) | **POST** /lists/{list_id}/contacts/actions/forget | Forget contacts |
| [**actionImportBulk()**](ContactsApi.md#actionImportBulk) | **POST** /lists/{list_id}/contacts/actions/import-bulk | Import collection of contacts |
| [**actionStartAutomation()**](ContactsApi.md#actionStartAutomation) | **POST** /lists/{list_id}/contacts/actions/start-automation | Start automation |
| [**actionUnsubscribeContact()**](ContactsApi.md#actionUnsubscribeContact) | **POST** /lists/{list_id}/contacts/actions/unsubscribe | Unsubscribes contacts |
| [**actionUpdateContacts()**](ContactsApi.md#actionUpdateContacts) | **POST** /lists/{list_id}/contacts/actions/update | Updates contacts |
| [**createContact()**](ContactsApi.md#createContact) | **POST** /lists/{list_id}/contacts | Create new contact |
| [**getAllContactActivities()**](ContactsApi.md#getAllContactActivities) | **GET** /lists/{list_id}/contacts/{contact_id}/activities | Get all contact activities |
| [**getAllContacts()**](ContactsApi.md#getAllContacts) | **GET** /lists/{list_id}/contacts | Get all contacts |
| [**getAllContactsBySegment()**](ContactsApi.md#getAllContactsBySegment) | **GET** /lists/{list_id}/contacts/segment/{segment_id} | Get all contacts by Segment Id |
| [**getContact()**](ContactsApi.md#getContact) | **GET** /lists/{list_id}/contacts/{contact_id} | Get contact |
| [**patchContact()**](ContactsApi.md#patchContact) | **PATCH** /lists/{list_id}/contacts/{contact_id} | Update a specific contact |
| [**searchContacts()**](ContactsApi.md#searchContacts) | **GET** /contacts/search | Search contact |


## `actionActivateContacts()`

```php
actionActivateContacts($list_id, $activate_contacts_request): \EgoiClient\EgoiModel\AcceptedResponse
```

Activate contacts

Activates a collection of contacts (does not apply to removed contacts)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$activate_contacts_request = new \EgoiClient\EgoiModel\ActivateContactsRequest(); // \EgoiClient\EgoiModel\ActivateContactsRequest | Parameters for the request

try {
    $result = $apiInstance->actionActivateContacts($list_id, $activate_contacts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->actionActivateContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **activate_contacts_request** | [**\EgoiClient\EgoiModel\ActivateContactsRequest**](../Model/ActivateContactsRequest.md)| Parameters for the request | |

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

## `actionAttachTag()`

```php
actionAttachTag($list_id, $attach_tag_request): \EgoiClient\EgoiModel\AcceptedResponse
```

Attach tag to contact

Attaches a tag to the provided contacts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$attach_tag_request = new \EgoiClient\EgoiModel\AttachTagRequest(); // \EgoiClient\EgoiModel\AttachTagRequest | Parameters for the Tag

try {
    $result = $apiInstance->actionAttachTag($list_id, $attach_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->actionAttachTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **attach_tag_request** | [**\EgoiClient\EgoiModel\AttachTagRequest**](../Model/AttachTagRequest.md)| Parameters for the Tag | |

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

## `actionDeactivateContacts()`

```php
actionDeactivateContacts($list_id, $deactivate_contacts_request): \EgoiClient\EgoiModel\AcceptedResponse
```

Deactivate contacts

Deactivates a collection of contacts (does not apply to removed contacts)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$deactivate_contacts_request = new \EgoiClient\EgoiModel\DeactivateContactsRequest(); // \EgoiClient\EgoiModel\DeactivateContactsRequest | Parameters for the request

try {
    $result = $apiInstance->actionDeactivateContacts($list_id, $deactivate_contacts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->actionDeactivateContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **deactivate_contacts_request** | [**\EgoiClient\EgoiModel\DeactivateContactsRequest**](../Model/DeactivateContactsRequest.md)| Parameters for the request | |

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

## `actionDetachTag()`

```php
actionDetachTag($list_id, $detach_tag_request): \EgoiClient\EgoiModel\AcceptedResponse
```

Detach tag to contact

Detach a tag to the provided contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$detach_tag_request = new \EgoiClient\EgoiModel\DetachTagRequest(); // \EgoiClient\EgoiModel\DetachTagRequest | Parameters for the Tag

try {
    $result = $apiInstance->actionDetachTag($list_id, $detach_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->actionDetachTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **detach_tag_request** | [**\EgoiClient\EgoiModel\DetachTagRequest**](../Model/DetachTagRequest.md)| Parameters for the Tag | |

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

## `actionExportContacts()`

```php
actionExportContacts($list_id, $contact_export_request): \EgoiClient\EgoiModel\AcceptedResponse
```

Exports a list of contacts

Exports a list of contacts to the desired callback url

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$contact_export_request = new \EgoiClient\EgoiModel\ContactExportRequest(); // \EgoiClient\EgoiModel\ContactExportRequest | Parameters for export

try {
    $result = $apiInstance->actionExportContacts($list_id, $contact_export_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->actionExportContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **contact_export_request** | [**\EgoiClient\EgoiModel\ContactExportRequest**](../Model/ContactExportRequest.md)| Parameters for export | |

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

## `actionForgetContacts()`

```php
actionForgetContacts($list_id, $contact_forget_request): \EgoiClient\EgoiModel\AcceptedResponse
```

Forget contacts

Forgets a list of contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$contact_forget_request = new \EgoiClient\EgoiModel\ContactForgetRequest(); // \EgoiClient\EgoiModel\ContactForgetRequest | Parameters for the action

try {
    $result = $apiInstance->actionForgetContacts($list_id, $contact_forget_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->actionForgetContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **contact_forget_request** | [**\EgoiClient\EgoiModel\ContactForgetRequest**](../Model/ContactForgetRequest.md)| Parameters for the action | |

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

## `actionImportBulk()`

```php
actionImportBulk($list_id, $import_bulk_file_request): \EgoiClient\EgoiModel\AcceptedResponse
```

Import collection of contacts

Imports a collection of contacts </br>      **DISCLAIMER:** stream limits applied. [view here](#section/Stream-Limits 'Stream Limits')<br> ***Notes:***<br>Minimum of 2 contacts to use this method. [Use Create new contact method instead](#operation/createContact 'Create new contact')<br>It defaults to ***Bulk object*** import.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$import_bulk_file_request = new \EgoiClient\EgoiModel\ImportBulkFileRequest(); // \EgoiClient\EgoiModel\ImportBulkFileRequest | Parameters for the bulk import

try {
    $result = $apiInstance->actionImportBulk($list_id, $import_bulk_file_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->actionImportBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **import_bulk_file_request** | [**\EgoiClient\EgoiModel\ImportBulkFileRequest**](../Model/ImportBulkFileRequest.md)| Parameters for the bulk import | |

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

## `actionStartAutomation()`

```php
actionStartAutomation($list_id, $start_automation_request): \EgoiClient\EgoiModel\StartAutomationResponse
```

Start automation

Start automation to the provided contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$start_automation_request = new \EgoiClient\EgoiModel\StartAutomationRequest(); // \EgoiClient\EgoiModel\StartAutomationRequest | Parameters for the operation to start automation

try {
    $result = $apiInstance->actionStartAutomation($list_id, $start_automation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->actionStartAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **start_automation_request** | [**\EgoiClient\EgoiModel\StartAutomationRequest**](../Model/StartAutomationRequest.md)| Parameters for the operation to start automation | |

### Return type

[**\EgoiClient\EgoiModel\StartAutomationResponse**](../Model/StartAutomationResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionUnsubscribeContact()`

```php
actionUnsubscribeContact($list_id, $remove_request): \EgoiClient\EgoiModel\RemoveResponse
```

Unsubscribes contacts

Unsubscribes contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$remove_request = new \EgoiClient\EgoiModel\RemoveRequest(); // \EgoiClient\EgoiModel\RemoveRequest | Parameters for the contact to unsubscribe

try {
    $result = $apiInstance->actionUnsubscribeContact($list_id, $remove_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->actionUnsubscribeContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **remove_request** | [**\EgoiClient\EgoiModel\RemoveRequest**](../Model/RemoveRequest.md)| Parameters for the contact to unsubscribe | |

### Return type

[**\EgoiClient\EgoiModel\RemoveResponse**](../Model/RemoveResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionUpdateContacts()`

```php
actionUpdateContacts($list_id, $update_contacts_request): \EgoiClient\EgoiModel\AcceptedResponse
```

Updates contacts

Updates a collection of contacts (does not apply to removed contacts).      Note that all contacts will be updated with the same values and the existance of unique fields in the payload will trigger a 409 Conflict response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$update_contacts_request = new \EgoiClient\EgoiModel\UpdateContactsRequest(); // \EgoiClient\EgoiModel\UpdateContactsRequest | Parameters for the request

try {
    $result = $apiInstance->actionUpdateContacts($list_id, $update_contacts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->actionUpdateContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **update_contacts_request** | [**\EgoiClient\EgoiModel\UpdateContactsRequest**](../Model/UpdateContactsRequest.md)| Parameters for the request | |

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

## `createContact()`

```php
createContact($list_id, $contact_base_extra_post): \EgoiClient\EgoiModel\CreateContactResponse
```

Create new contact

Create a new contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the list where the contact belongs
$contact_base_extra_post = new \EgoiClient\EgoiModel\ContactBaseExtraPost(); // \EgoiClient\EgoiModel\ContactBaseExtraPost | Parameters for the Contact

try {
    $result = $apiInstance->createContact($list_id, $contact_base_extra_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the list where the contact belongs | |
| **contact_base_extra_post** | [**\EgoiClient\EgoiModel\ContactBaseExtraPost**](../Model/ContactBaseExtraPost.md)| Parameters for the Contact | |

### Return type

[**\EgoiClient\EgoiModel\CreateContactResponse**](../Model/CreateContactResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllContactActivities()`

```php
getAllContactActivities($contact_id, $list_id, $offset, $limit, $date_min, $date_max): \EgoiClient\EgoiModel\ActivityCollection
```

Get all contact activities

Returns all contact activities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | ID of the Contact
$list_id = 56; // int | ID of the List
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$date_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$date_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date

try {
    $result = $apiInstance->getAllContactActivities($contact_id, $list_id, $offset, $limit, $date_min, $date_max);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getAllContactActivities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| ID of the Contact | |
| **list_id** | **int**| ID of the List | |
| **offset** | **int**| Element offset (starting at zero for the first element) | [optional] |
| **limit** | **int**| Number of items to return | [optional] [default to 10] |
| **date_min** | **\DateTime**| Start date | [optional] |
| **date_max** | **\DateTime**| End date | [optional] |

### Return type

[**\EgoiClient\EgoiModel\ActivityCollection**](../Model/ActivityCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllContacts()`

```php
getAllContacts($list_id, $offset, $limit, $first_name, $last_name, $email, $email_status, $cellphone, $cellphone_status, $phone, $phone_status, $birth_date, $language, $extra_field_id): \EgoiClient\EgoiModel\ContactCollection
```

Get all contacts

Returns all contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$first_name = 'first_name_example'; // string | First name of the contacts to return
$last_name = 'last_name_example'; // string | Last name of the contacts to return
$email = 'email_example'; // string | Email of the contacts to return
$email_status = True; // bool | EmailStatus of the contacts to return
$cellphone = 'cellphone_example'; // string | Cellphone of the contacts to return
$cellphone_status = True; // bool | CellphoneStatus of the contacts to return
$phone = 'phone_example'; // string | Phone of the contacts to return
$phone_status = True; // bool | PhoneStatus of the contacts to return
$birth_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Birth date of the contacts to return
$language = 'language_example'; // string | Language date of the contacts to return
$extra_field_id = array('key' => new \EgoiClient\EgoiModel\GetAllContactsExtraFieldIdParameter()); // GetAllContactsExtraFieldIdParameter | Extra field of contacts<div><span class='sc-cJSrbW cWGDGi'> Example: </span> <span class='sc-uJMKN cTkJKI'> 'extra_field_id[field_id]=value' </span></div>

try {
    $result = $apiInstance->getAllContacts($list_id, $offset, $limit, $first_name, $last_name, $email, $email_status, $cellphone, $cellphone_status, $phone, $phone_status, $birth_date, $language, $extra_field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getAllContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **offset** | **int**| Element offset (starting at zero for the first element) | [optional] |
| **limit** | **int**| Number of items to return | [optional] [default to 10] |
| **first_name** | **string**| First name of the contacts to return | [optional] |
| **last_name** | **string**| Last name of the contacts to return | [optional] |
| **email** | **string**| Email of the contacts to return | [optional] |
| **email_status** | **bool**| EmailStatus of the contacts to return | [optional] |
| **cellphone** | **string**| Cellphone of the contacts to return | [optional] |
| **cellphone_status** | **bool**| CellphoneStatus of the contacts to return | [optional] |
| **phone** | **string**| Phone of the contacts to return | [optional] |
| **phone_status** | **bool**| PhoneStatus of the contacts to return | [optional] |
| **birth_date** | [**\DateTime**](../Model/.md)| Birth date of the contacts to return | [optional] |
| **language** | **string**| Language date of the contacts to return | [optional] |
| **extra_field_id** | [**GetAllContactsExtraFieldIdParameter**](../Model/.md)| Extra field of contacts&lt;div&gt;&lt;span class&#x3D;&#39;sc-cJSrbW cWGDGi&#39;&gt; Example: &lt;/span&gt; &lt;span class&#x3D;&#39;sc-uJMKN cTkJKI&#39;&gt; &#39;extra_field_id[field_id]&#x3D;value&#39; &lt;/span&gt;&lt;/div&gt; | [optional] |

### Return type

[**\EgoiClient\EgoiModel\ContactCollection**](../Model/ContactCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllContactsBySegment()`

```php
getAllContactsBySegment($list_id, $segment_id, $offset, $limit, $show_removed): \EgoiClient\EgoiModel\ContactCollection
```

Get all contacts by Segment Id

Returns all contacts filtered by Segment Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the List
$segment_id = 'segment_id_example'; // string | ID of the Segment
$offset = 56; // int | Element offset (starting at zero for the first element)
$limit = 10; // int | Number of items to return
$show_removed = false; // bool | Show removed contacts

try {
    $result = $apiInstance->getAllContactsBySegment($list_id, $segment_id, $offset, $limit, $show_removed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getAllContactsBySegment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the List | |
| **segment_id** | **string**| ID of the Segment | |
| **offset** | **int**| Element offset (starting at zero for the first element) | [optional] |
| **limit** | **int**| Number of items to return | [optional] [default to 10] |
| **show_removed** | **bool**| Show removed contacts | [optional] [default to false] |

### Return type

[**\EgoiClient\EgoiModel\ContactCollection**](../Model/ContactCollection.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContact()`

```php
getContact($contact_id, $list_id): \EgoiClient\EgoiModel\ComplexContact
```

Get contact

Returns contact information given its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | ID of the Contact
$list_id = 56; // int | ID of the List

try {
    $result = $apiInstance->getContact($contact_id, $list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| ID of the Contact | |
| **list_id** | **int**| ID of the List | |

### Return type

[**\EgoiClient\EgoiModel\ComplexContact**](../Model/ComplexContact.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchContact()`

```php
patchContact($contact_id, $list_id, $contact_base_status_extra_no_removed): \EgoiClient\EgoiModel\CreateContactResponse
```

Update a specific contact

Update contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | ID of the Contact
$list_id = 56; // int | ID of the List
$contact_base_status_extra_no_removed = new \EgoiClient\EgoiModel\ContactBaseStatusExtraNoRemoved(); // \EgoiClient\EgoiModel\ContactBaseStatusExtraNoRemoved | Parameters for the contact

try {
    $result = $apiInstance->patchContact($contact_id, $list_id, $contact_base_status_extra_no_removed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->patchContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| ID of the Contact | |
| **list_id** | **int**| ID of the List | |
| **contact_base_status_extra_no_removed** | [**\EgoiClient\EgoiModel\ContactBaseStatusExtraNoRemoved**](../Model/ContactBaseStatusExtraNoRemoved.md)| Parameters for the contact | |

### Return type

[**\EgoiClient\EgoiModel\CreateContactResponse**](../Model/CreateContactResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchContacts()`

```php
searchContacts($contact, $type): \EgoiClient\EgoiModel\SearchContacts200Response
```

Search contact

Searches a contact across all lists and returns a collection of contacts found

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact = 'contact_example'; // string | Contact to search
$type = 'email'; // string | Type of contact to search (defaults to 'email')

try {
    $result = $apiInstance->searchContacts($contact, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->searchContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact** | **string**| Contact to search | |
| **type** | **string**| Type of contact to search (defaults to &#39;email&#39;) | [optional] [default to &#39;email&#39;] |

### Return type

[**\EgoiClient\EgoiModel\SearchContacts200Response**](../Model/SearchContacts200Response.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
