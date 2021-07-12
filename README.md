![E-goi](https://www.e-goi.com/wp-content/themes/egoi2019/imgs/svg/logo-egoi.svg)

Almost anything you can do in E-goi, you can do with our API.

The API describes each available method. Learn about parameters, errors, and how to format your requests. That means you can easily call on E-goi actions for your integration.
**API** Full documentation at https://developers.e-goi.com/api/v3/

If you find a bug or something worth fixing, create an issue.

### Changelog
#### 1.1.1RC1
## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/E-goi/sdk-php.git"
    }
  ],
  "require": {
    "E-goi/sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: Apikey
$config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EgoiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');


$apiInstance = new EgoiClient\Api\AdvancedReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_email_bounces_report = new \EgoiClient\EgoiModel\GenerateEmailBouncesReport(); // \EgoiClient\EgoiModel\GenerateEmailBouncesReport | Parameters for the email bounces report

try {
    $result = $apiInstance->generateEmailBouncesReport($generate_email_bounces_report);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedReportsApi->generateEmailBouncesReport: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.egoiapp.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdvancedReportsApi* | [**generateEmailBouncesReport**](docs/Api/AdvancedReportsApi.md#generateemailbouncesreport) | **POST** /reports/advanced/email-bounces | Generate email bounces report
*AdvancedReportsApi* | [**generateEmailClicksByContactReport**](docs/Api/AdvancedReportsApi.md#generateemailclicksbycontactreport) | **POST** /reports/advanced/email-clicks-by-contact | Generate email clicks by contact report
*AdvancedReportsApi* | [**generateEmailClicksByUrlReport**](docs/Api/AdvancedReportsApi.md#generateemailclicksbyurlreport) | **POST** /reports/advanced/email-clicks-by-url | Generate email clicks by URL report
*AdvancedReportsApi* | [**generateEmailEventsReport**](docs/Api/AdvancedReportsApi.md#generateemaileventsreport) | **POST** /reports/advanced/email-events | Generate email events report
*AdvancedReportsApi* | [**generateEmailSmsReport**](docs/Api/AdvancedReportsApi.md#generateemailsmsreport) | **POST** /reports/advanced/sms-bounces | Generate SMS bounces report
*AdvancedReportsApi* | [**generateEmailUnsubscriptionsReport**](docs/Api/AdvancedReportsApi.md#generateemailunsubscriptionsreport) | **POST** /reports/advanced/email-unsubscriptions | Generate email unsubscriptions report
*AdvancedReportsApi* | [**generateFormAnswersReport**](docs/Api/AdvancedReportsApi.md#generateformanswersreport) | **POST** /reports/advanced/form-answers | Generate form answers report
*AdvancedReportsApi* | [**generateSendsReport**](docs/Api/AdvancedReportsApi.md#generatesendsreport) | **POST** /reports/advanced/sends | Generate sends report
*AdvancedReportsApi* | [**generateSmsEventsReport**](docs/Api/AdvancedReportsApi.md#generatesmseventsreport) | **POST** /reports/advanced/sms-events | Generate SMS events report
*AdvancedReportsApi* | [**generateSubscriptionsReport**](docs/Api/AdvancedReportsApi.md#generatesubscriptionsreport) | **POST** /reports/advanced/subscriptions | Generate subscriptions report
*AdvancedReportsApi* | [**generateUnsubscriptionsReport**](docs/Api/AdvancedReportsApi.md#generateunsubscriptionsreport) | **POST** /reports/advanced/unsubscriptions | Generate unsubscriptions report
*AdvancedReportsApi* | [**getAllAdvancedReports**](docs/Api/AdvancedReportsApi.md#getalladvancedreports) | **GET** /reports/advanced | Get all advanced reports
*AutomationsApi* | [**deleteAutomation**](docs/Api/AutomationsApi.md#deleteautomation) | **DELETE** /automations/{automation_id} | Remove automation
*AutomationsApi* | [**getAllAutomations**](docs/Api/AutomationsApi.md#getallautomations) | **GET** /automations | Get all automations
*CNamesApi* | [**createCName**](docs/Api/CNamesApi.md#createcname) | **POST** /cnames | Create cname
*CNamesApi* | [**getAllCNames**](docs/Api/CNamesApi.md#getallcnames) | **GET** /cnames | Get All CNames
*CampaignGroupsApi* | [**createCampaignGroup**](docs/Api/CampaignGroupsApi.md#createcampaigngroup) | **POST** /campaign-groups | Create new campaign group
*CampaignGroupsApi* | [**deleteCampaignGroup**](docs/Api/CampaignGroupsApi.md#deletecampaigngroup) | **DELETE** /campaign-groups/{group_id} | Remove Campaign Group
*CampaignGroupsApi* | [**getAllCampaignGroups**](docs/Api/CampaignGroupsApi.md#getallcampaigngroups) | **GET** /campaign-groups | Get all campaign groups
*CampaignGroupsApi* | [**updateCampaignGroup**](docs/Api/CampaignGroupsApi.md#updatecampaigngroup) | **PUT** /campaign-groups/{group_id} | Update a specific campaign group
*CampaignsApi* | [**deleteCampaigns**](docs/Api/CampaignsApi.md#deletecampaigns) | **DELETE** /campaigns/{campaign_hash} | Remove Campaign
*CampaignsApi* | [**getAllCampaigns**](docs/Api/CampaignsApi.md#getallcampaigns) | **GET** /campaigns | Get all Campaigns
*ContactsApi* | [**actionActivateContacts**](docs/Api/ContactsApi.md#actionactivatecontacts) | **POST** /lists/{list_id}/contacts/actions/activate | Activate contacts
*ContactsApi* | [**actionAttachTag**](docs/Api/ContactsApi.md#actionattachtag) | **POST** /lists/{list_id}/contacts/actions/attach-tag | Attach tag to contact
*ContactsApi* | [**actionDeactivateContacts**](docs/Api/ContactsApi.md#actiondeactivatecontacts) | **POST** /lists/{list_id}/contacts/actions/deactivate | Deactivate contacts
*ContactsApi* | [**actionDetachTag**](docs/Api/ContactsApi.md#actiondetachtag) | **POST** /lists/{list_id}/contacts/actions/detach-tag | Detach tag to contact
*ContactsApi* | [**actionExportContacts**](docs/Api/ContactsApi.md#actionexportcontacts) | **POST** /lists/{list_id}/contacts/actions/export | Exports a list of contacts
*ContactsApi* | [**actionForgetContacts**](docs/Api/ContactsApi.md#actionforgetcontacts) | **POST** /lists/{list_id}/contacts/actions/forget | Forget contacts
*ContactsApi* | [**actionImportBulk**](docs/Api/ContactsApi.md#actionimportbulk) | **POST** /lists/{list_id}/contacts/actions/import-bulk | Import collection of contacts
*ContactsApi* | [**actionStartAutomation**](docs/Api/ContactsApi.md#actionstartautomation) | **POST** /lists/{list_id}/contacts/actions/start-automation | Start automation
*ContactsApi* | [**actionUnsubscribeContact**](docs/Api/ContactsApi.md#actionunsubscribecontact) | **POST** /lists/{list_id}/contacts/actions/unsubscribe | Unsubscribes contacts
*ContactsApi* | [**createContact**](docs/Api/ContactsApi.md#createcontact) | **POST** /lists/{list_id}/contacts | Create new contact
*ContactsApi* | [**getAllContactActivities**](docs/Api/ContactsApi.md#getallcontactactivities) | **GET** /lists/{list_id}/contacts/{contact_id}/activities | Get all contact activities
*ContactsApi* | [**getAllContacts**](docs/Api/ContactsApi.md#getallcontacts) | **GET** /lists/{list_id}/contacts | Get all contacts
*ContactsApi* | [**getAllContactsBySegment**](docs/Api/ContactsApi.md#getallcontactsbysegment) | **GET** /lists/{list_id}/contacts/segment/{segment_id} | Get all contacts by Segment Id
*ContactsApi* | [**getContact**](docs/Api/ContactsApi.md#getcontact) | **GET** /lists/{list_id}/contacts/{contact_id} | Get contact
*ContactsApi* | [**patchContact**](docs/Api/ContactsApi.md#patchcontact) | **PATCH** /lists/{list_id}/contacts/{contact_id} | Update a specific contact
*ContactsApi* | [**searchContacts**](docs/Api/ContactsApi.md#searchcontacts) | **GET** /contacts/search | Search contact
*EcommerceApi* | [**createCart**](docs/Api/EcommerceApi.md#createcart) | **POST** /{domain}/carts | Create cart
*EcommerceApi* | [**createCatalog**](docs/Api/EcommerceApi.md#createcatalog) | **POST** /catalogs | Create new catalog
*EcommerceApi* | [**createOrder**](docs/Api/EcommerceApi.md#createorder) | **POST** /{domain}/orders | Create order
*EcommerceApi* | [**createProduct**](docs/Api/EcommerceApi.md#createproduct) | **POST** /catalogs/{catalog_id}/products | Create new product
*EcommerceApi* | [**deleteCatalog**](docs/Api/EcommerceApi.md#deletecatalog) | **DELETE** /catalogs/{catalog_id} | Remove catalog
*EcommerceApi* | [**deleteProduct**](docs/Api/EcommerceApi.md#deleteproduct) | **DELETE** /catalogs/{catalog_id}/products/{product_identifier} | Remove product
*EcommerceApi* | [**getAllCatalogs**](docs/Api/EcommerceApi.md#getallcatalogs) | **GET** /catalogs | Get all catalogs
*EcommerceApi* | [**getAllProducts**](docs/Api/EcommerceApi.md#getallproducts) | **GET** /catalogs/{catalog_id}/products | Get all products
*EcommerceApi* | [**getProduct**](docs/Api/EcommerceApi.md#getproduct) | **GET** /catalogs/{catalog_id}/products/{product_identifier} | Get product
*EcommerceApi* | [**importProducts**](docs/Api/EcommerceApi.md#importproducts) | **POST** /catalogs/{catalog_id}/products/actions/import | Import products
*EcommerceApi* | [**updateProduct**](docs/Api/EcommerceApi.md#updateproduct) | **PATCH** /catalogs/{catalog_id}/products/{product_identifier} | Update product
*EcommerceActivityApi* | [**importOrdersBulk**](docs/Api/EcommerceActivityApi.md#importordersbulk) | **POST** /lists/{list_id}/orders | Orders import bulk request
*EmailApi* | [**actionEnableEmailRss**](docs/Api/EmailApi.md#actionenableemailrss) | **POST** /campaigns/email/rss/{campaign_hash}/actions/enable | Enables a rss email campaign
*EmailApi* | [**actionSendEmail**](docs/Api/EmailApi.md#actionsendemail) | **POST** /campaigns/email/{campaign_hash}/actions/send | Send email message
*EmailApi* | [**createEmailCampaign**](docs/Api/EmailApi.md#createemailcampaign) | **POST** /campaigns/email | Create new email campaign
*EmailApi* | [**createEmailRssCampaign**](docs/Api/EmailApi.md#createemailrsscampaign) | **POST** /campaigns/email/rss | Create new email rss campaign
*EmailApi* | [**patchEmailCampaign**](docs/Api/EmailApi.md#patchemailcampaign) | **PATCH** /campaigns/email/{campaign_hash} | Update a specific email campaign
*FieldsApi* | [**createExtraField**](docs/Api/FieldsApi.md#createextrafield) | **POST** /lists/{list_id}/fields/extra | Create extra field
*FieldsApi* | [**createFieldOption**](docs/Api/FieldsApi.md#createfieldoption) | **POST** /lists/{list_id}/fields/extra/{field_id}/options | Create new field option
*FieldsApi* | [**deleteExtraField**](docs/Api/FieldsApi.md#deleteextrafield) | **DELETE** /lists/{list_id}/fields/extra/{field_id} | Remove extra field
*FieldsApi* | [**deleteFieldOption**](docs/Api/FieldsApi.md#deletefieldoption) | **DELETE** /lists/{list_id}/fields/extra/{field_id}/options/{option_id} | Deletes an option
*FieldsApi* | [**getAllFieldOptions**](docs/Api/FieldsApi.md#getallfieldoptions) | **GET** /lists/{list_id}/fields/extra/{field_id}/options | Get all field options
*FieldsApi* | [**getAllFields**](docs/Api/FieldsApi.md#getallfields) | **GET** /lists/{list_id}/fields | Get all fields
*FieldsApi* | [**patchBaseField**](docs/Api/FieldsApi.md#patchbasefield) | **PATCH** /lists/{list_id}/fields/base/{field_id} | Update base field
*FieldsApi* | [**patchExtraField**](docs/Api/FieldsApi.md#patchextrafield) | **PATCH** /lists/{list_id}/fields/extra/{field_id} | Update extra field
*FieldsApi* | [**updateFieldOption**](docs/Api/FieldsApi.md#updatefieldoption) | **PATCH** /lists/{list_id}/fields/extra/{field_id}/options/{option_id} | Update field option
*ListsApi* | [**createList**](docs/Api/ListsApi.md#createlist) | **POST** /lists | Create new list
*ListsApi* | [**deleteList**](docs/Api/ListsApi.md#deletelist) | **DELETE** /lists/{list_id} | Remove list
*ListsApi* | [**getAllLists**](docs/Api/ListsApi.md#getalllists) | **GET** /lists | Get all lists
*ListsApi* | [**updateList**](docs/Api/ListsApi.md#updatelist) | **PATCH** /lists/{list_id} | Update a specific list
*MyAccountApi* | [**enableTe**](docs/Api/MyAccountApi.md#enablete) | **POST** /my-account/actions/enable-te | Enable Track&amp;Engage
*MyAccountApi* | [**getMyAccount**](docs/Api/MyAccountApi.md#getmyaccount) | **GET** /my-account | Get My Account Info
*OperationsApi* | [**actionApproveOperation**](docs/Api/OperationsApi.md#actionapproveoperation) | **POST** /operations/actions/approve | Approve operation
*OperationsApi* | [**actionCancelOperation**](docs/Api/OperationsApi.md#actioncanceloperation) | **POST** /operations/actions/cancel | Cancel operation
*OperationsApi* | [**actionPauseOperation**](docs/Api/OperationsApi.md#actionpauseoperation) | **POST** /operations/actions/pause | Pause operation
*OperationsApi* | [**actionResumeOperation**](docs/Api/OperationsApi.md#actionresumeoperation) | **POST** /operations/actions/resume | Resume operation
*OperationsApi* | [**getAllOperations**](docs/Api/OperationsApi.md#getalloperations) | **GET** /operations | Get all queued operations
*PingApi* | [**ping**](docs/Api/PingApi.md#ping) | **POST** /ping | Pings the API
*PushApi* | [**actionSendPush**](docs/Api/PushApi.md#actionsendpush) | **POST** /campaigns/push/{campaign_hash}/actions/send | Send push message
*PushApi* | [**createPushCampaign**](docs/Api/PushApi.md#createpushcampaign) | **POST** /campaigns/push | Create new push campaign
*PushApi* | [**getPushApp**](docs/Api/PushApi.md#getpushapp) | **GET** /push/apps/{app_id} | Get a Push application from E-goi
*PushApi* | [**getPushApps**](docs/Api/PushApi.md#getpushapps) | **GET** /push/apps | Get all Push applications from E-goi
*PushApi* | [**patchPushCampaign**](docs/Api/PushApi.md#patchpushcampaign) | **PATCH** /campaigns/push/{campaign_hash} | Update a specific push campaign
*PushApi* | [**registerPushEvent**](docs/Api/PushApi.md#registerpushevent) | **POST** /push/apps/{app_id}/event | Registers an event from the push notification.
*PushApi* | [**registerPushToken**](docs/Api/PushApi.md#registerpushtoken) | **POST** /push/apps/{app_id}/token | Registers a Firebase token
*ReportsApi* | [**getSMSReport**](docs/Api/ReportsApi.md#getsmsreport) | **GET** /reports/sms/{campaign_hash} | Get sms report
*ReportsApi* | [**getVoiceReport**](docs/Api/ReportsApi.md#getvoicereport) | **GET** /reports/voice/{campaign_hash} | Get voice report
*ReportsApi* | [**getWebPushReport**](docs/Api/ReportsApi.md#getwebpushreport) | **GET** /reports/web-push/{campaign_hash} | Get webpush report
*SegmentsApi* | [**deleteSegment**](docs/Api/SegmentsApi.md#deletesegment) | **DELETE** /lists/{list_id}/segments/{segment_id} | Remove segment
*SegmentsApi* | [**getAllSegments**](docs/Api/SegmentsApi.md#getallsegments) | **GET** /lists/{list_id}/segments | Get all segments
*SendersApi* | [**createCellphoneSender**](docs/Api/SendersApi.md#createcellphonesender) | **POST** /senders/cellphone | Create cellphone sender
*SendersApi* | [**createEmailSender**](docs/Api/SendersApi.md#createemailsender) | **POST** /senders/email | Create email sender
*SendersApi* | [**createPhoneSender**](docs/Api/SendersApi.md#createphonesender) | **POST** /senders/phone | Create phone sender
*SendersApi* | [**deleteCellphoneSender**](docs/Api/SendersApi.md#deletecellphonesender) | **DELETE** /senders/cellphone/{sender_id} | Remove cellphone sender
*SendersApi* | [**deleteEmailSender**](docs/Api/SendersApi.md#deleteemailsender) | **DELETE** /senders/email/{sender_id} | Remove email sender
*SendersApi* | [**deletePhoneSender**](docs/Api/SendersApi.md#deletephonesender) | **DELETE** /senders/phone/{sender_id} | Remove phone sender
*SendersApi* | [**getAllCellphoneSenders**](docs/Api/SendersApi.md#getallcellphonesenders) | **GET** /senders/cellphone | Get all cellphone senders
*SendersApi* | [**getAllEmailSenders**](docs/Api/SendersApi.md#getallemailsenders) | **GET** /senders/email | Get all email senders
*SendersApi* | [**getAllPhoneSenders**](docs/Api/SendersApi.md#getallphonesenders) | **GET** /senders/phone | Get all phone senders
*SendersApi* | [**putEmailSender**](docs/Api/SendersApi.md#putemailsender) | **PUT** /senders/email/{sender_id} | Update email sender
*SmartSmsApi* | [**actionSendSmartSms**](docs/Api/SmartSmsApi.md#actionsendsmartsms) | **POST** /campaigns/smart-sms/{campaign_hash}/actions/send | Send smart sms message
*SmartSmsApi* | [**createSmartSmsCampaign**](docs/Api/SmartSmsApi.md#createsmartsmscampaign) | **POST** /campaigns/smart-sms | Create new smart sms campaign
*SmartSmsApi* | [**patchSmartSmsCampaign**](docs/Api/SmartSmsApi.md#patchsmartsmscampaign) | **PATCH** /campaigns/smart-sms/{campaign_hash} | Update a specific smart sms campaign
*SmsApi* | [**actionSendSms**](docs/Api/SmsApi.md#actionsendsms) | **POST** /campaigns/sms/{campaign_hash}/actions/send | Send sms message
*SmsApi* | [**createSmsCampaign**](docs/Api/SmsApi.md#createsmscampaign) | **POST** /campaigns/sms | Create new sms campaign
*SmsApi* | [**patchSmsCampaign**](docs/Api/SmsApi.md#patchsmscampaign) | **PATCH** /campaigns/sms/{campaign_hash} | Update a specific sms campaign
*SuppressionListApi* | [**getAllSuppressionList**](docs/Api/SuppressionListApi.md#getallsuppressionlist) | **GET** /suppression-list | Get the suppression list
*TagsApi* | [**createTag**](docs/Api/TagsApi.md#createtag) | **POST** /tags | Create new tag
*TagsApi* | [**deleteTag**](docs/Api/TagsApi.md#deletetag) | **DELETE** /tags/{tag_id} | Remove tag
*TagsApi* | [**getAllTags**](docs/Api/TagsApi.md#getalltags) | **GET** /tags | Get all tags
*TagsApi* | [**updateTag**](docs/Api/TagsApi.md#updatetag) | **PUT** /tags/{tag_id} | Update a specific tag
*TrackEngageApi* | [**getAllDomains**](docs/Api/TrackEngageApi.md#getalldomains) | **GET** /trackengage/domains | Get all domains
*TrackEngageApi* | [**getAllGoals**](docs/Api/TrackEngageApi.md#getallgoals) | **GET** /trackengage/goals | Get all goals
*UsersApi* | [**deleteUser**](docs/Api/UsersApi.md#deleteuser) | **DELETE** /users/{user_id} | Remove user
*UsersApi* | [**getAllUsers**](docs/Api/UsersApi.md#getallusers) | **GET** /users | Get all users
*UtilitiesApi* | [**getAllCountries**](docs/Api/UtilitiesApi.md#getallcountries) | **GET** /utilities/countries | Get all countries
*VoiceApi* | [**actionSendVoice**](docs/Api/VoiceApi.md#actionsendvoice) | **POST** /campaigns/voice/{campaign_hash}/actions/send | Send voice message
*VoiceApi* | [**createVoiceCampaign**](docs/Api/VoiceApi.md#createvoicecampaign) | **POST** /campaigns/voice | Create new voice campaign
*VoiceApi* | [**patchVoiceCampaign**](docs/Api/VoiceApi.md#patchvoicecampaign) | **PATCH** /campaigns/voice/{campaign_hash} | Update a specific voice campaign
*WebHooksApi* | [**createWebhook**](docs/Api/WebHooksApi.md#createwebhook) | **POST** /webhooks | Create new webhook
*WebHooksApi* | [**deleteWebhook**](docs/Api/WebHooksApi.md#deletewebhook) | **DELETE** /webhooks/{webhook_id} | Remove webhook
*WebHooksApi* | [**getAllWebhooks**](docs/Api/WebHooksApi.md#getallwebhooks) | **GET** /webhooks | Get all webhooks
*WebpushApi* | [**actionEnableWebPushRss**](docs/Api/WebpushApi.md#actionenablewebpushrss) | **POST** /campaigns/webpush/rss/{campaign_hash}/actions/enable | Enable a rss webpush campaign
*WebpushApi* | [**actionSendWebPush**](docs/Api/WebpushApi.md#actionsendwebpush) | **POST** /campaigns/web-push/{campaign_hash}/actions/send | Send webpush message
*WebpushApi* | [**createWebPushCampaign**](docs/Api/WebpushApi.md#createwebpushcampaign) | **POST** /campaigns/web-push | Create new webpush campaign
*WebpushApi* | [**createWebPushRssCampaign**](docs/Api/WebpushApi.md#createwebpushrsscampaign) | **POST** /campaigns/webpush/rss | Create new webpush rss campaign
*WebpushApi* | [**createWebpushSite**](docs/Api/WebpushApi.md#createwebpushsite) | **POST** /webpush/sites | Creates a webpush site
*WebpushApi* | [**getAllWebPushSites**](docs/Api/WebpushApi.md#getallwebpushsites) | **GET** /webpush/sites | Get all webpush sites
*WebpushApi* | [**patchWebPushCampaign**](docs/Api/WebpushApi.md#patchwebpushcampaign) | **PATCH** /campaigns/web-push/{campaign_hash} | Update a specific webpush campaign


## Documentation For Models

 - [AbstractCampaignSendRequest](docs/Model/AbstractCampaignSendRequest.md)
 - [AbstractCampaignSendRequestSegments](docs/Model/AbstractCampaignSendRequestSegments.md)
 - [AbstractCampaignTemplate](docs/Model/AbstractCampaignTemplate.md)
 - [AbstractCellphoneSender](docs/Model/AbstractCellphoneSender.md)
 - [AbstractCellphoneSenderAllOf](docs/Model/AbstractCellphoneSenderAllOf.md)
 - [AbstractSegment](docs/Model/AbstractSegment.md)
 - [AbstractSendEmail](docs/Model/AbstractSendEmail.md)
 - [AbstractSendVoice](docs/Model/AbstractSendVoice.md)
 - [AbstractSendVoiceAllOf](docs/Model/AbstractSendVoiceAllOf.md)
 - [AcceptedResponse](docs/Model/AcceptedResponse.md)
 - [ActivateContactsAll](docs/Model/ActivateContactsAll.md)
 - [ActivateContactsMany](docs/Model/ActivateContactsMany.md)
 - [ActivateContactsRequest](docs/Model/ActivateContactsRequest.md)
 - [ActivityCollection](docs/Model/ActivityCollection.md)
 - [AdvancedReport](docs/Model/AdvancedReport.md)
 - [AdvancedReportCampaignsObject](docs/Model/AdvancedReportCampaignsObject.md)
 - [AdvancedReportEmailBouncesColumns](docs/Model/AdvancedReportEmailBouncesColumns.md)
 - [AdvancedReportEmailBouncesOptions](docs/Model/AdvancedReportEmailBouncesOptions.md)
 - [AdvancedReportEmailClicksByContactColumns](docs/Model/AdvancedReportEmailClicksByContactColumns.md)
 - [AdvancedReportEmailClicksByContactOptions](docs/Model/AdvancedReportEmailClicksByContactOptions.md)
 - [AdvancedReportEmailClicksByUrlColumns](docs/Model/AdvancedReportEmailClicksByUrlColumns.md)
 - [AdvancedReportEmailClicksByUrlOptions](docs/Model/AdvancedReportEmailClicksByUrlOptions.md)
 - [AdvancedReportEmailEventsColumns](docs/Model/AdvancedReportEmailEventsColumns.md)
 - [AdvancedReportEmailEventsOptions](docs/Model/AdvancedReportEmailEventsOptions.md)
 - [AdvancedReportEmailUnsubscriptionsColumns](docs/Model/AdvancedReportEmailUnsubscriptionsColumns.md)
 - [AdvancedReportEmailUnsubscriptionsOptions](docs/Model/AdvancedReportEmailUnsubscriptionsOptions.md)
 - [AdvancedReportRange](docs/Model/AdvancedReportRange.md)
 - [AdvancedReportSendsColumns](docs/Model/AdvancedReportSendsColumns.md)
 - [AdvancedReportSendsOptions](docs/Model/AdvancedReportSendsOptions.md)
 - [AdvancedReportSmsBouncesColumns](docs/Model/AdvancedReportSmsBouncesColumns.md)
 - [AdvancedReportSmsBouncesOptions](docs/Model/AdvancedReportSmsBouncesOptions.md)
 - [AdvancedReportSmsEventsColumns](docs/Model/AdvancedReportSmsEventsColumns.md)
 - [AdvancedReportSmsEventsOptions](docs/Model/AdvancedReportSmsEventsOptions.md)
 - [AdvancedReportSubscriptionsColumns](docs/Model/AdvancedReportSubscriptionsColumns.md)
 - [AdvancedReportSubscriptionsOptions](docs/Model/AdvancedReportSubscriptionsOptions.md)
 - [AdvancedReportUnsubscriptionsColumns](docs/Model/AdvancedReportUnsubscriptionsColumns.md)
 - [AdvancedReportUnsubscriptionsOptions](docs/Model/AdvancedReportUnsubscriptionsOptions.md)
 - [AdvancedReportsCollection](docs/Model/AdvancedReportsCollection.md)
 - [AlphanumericCellphoneSender](docs/Model/AlphanumericCellphoneSender.md)
 - [AlphanumericCellphoneSenderAllOf](docs/Model/AlphanumericCellphoneSenderAllOf.md)
 - [AppStructure](docs/Model/AppStructure.md)
 - [AppStructureList](docs/Model/AppStructureList.md)
 - [AttachTagRequest](docs/Model/AttachTagRequest.md)
 - [AttachTagRequestOneOf](docs/Model/AttachTagRequestOneOf.md)
 - [AttachTagRequestOneOf1](docs/Model/AttachTagRequestOneOf1.md)
 - [AttachTagResponse](docs/Model/AttachTagResponse.md)
 - [AutomaticSegment](docs/Model/AutomaticSegment.md)
 - [AutomaticSegmentAllOf](docs/Model/AutomaticSegmentAllOf.md)
 - [Automation](docs/Model/Automation.md)
 - [AutomationAllOf](docs/Model/AutomationAllOf.md)
 - [AutomationCollection](docs/Model/AutomationCollection.md)
 - [BadRequest](docs/Model/BadRequest.md)
 - [BalanceInfo](docs/Model/BalanceInfo.md)
 - [BalanceInfoBalanceInfo](docs/Model/BalanceInfoBalanceInfo.md)
 - [BaseConflict](docs/Model/BaseConflict.md)
 - [BasicProduct](docs/Model/BasicProduct.md)
 - [BasicSender](docs/Model/BasicSender.md)
 - [BillingInfo](docs/Model/BillingInfo.md)
 - [BillingInfoAllOf](docs/Model/BillingInfoAllOf.md)
 - [BillingInfoAllOfBillingInfo](docs/Model/BillingInfoAllOfBillingInfo.md)
 - [BillingInfoAllOfBillingInfoCountry](docs/Model/BillingInfoAllOfBillingInfoCountry.md)
 - [BulkActionResponse](docs/Model/BulkActionResponse.md)
 - [CName](docs/Model/CName.md)
 - [CNamesCollection](docs/Model/CNamesCollection.md)
 - [Campaign](docs/Model/Campaign.md)
 - [CampaignEmailBaseContent](docs/Model/CampaignEmailBaseContent.md)
 - [CampaignEmailContent](docs/Model/CampaignEmailContent.md)
 - [CampaignEmailContentFile](docs/Model/CampaignEmailContentFile.md)
 - [CampaignEmailContentFileAllOf](docs/Model/CampaignEmailContentFileAllOf.md)
 - [CampaignEmailContentHtml](docs/Model/CampaignEmailContentHtml.md)
 - [CampaignEmailContentHtmlAllOf](docs/Model/CampaignEmailContentHtmlAllOf.md)
 - [CampaignEmailContentHtmlPatch](docs/Model/CampaignEmailContentHtmlPatch.md)
 - [CampaignEmailContentHtmlPatchAllOf](docs/Model/CampaignEmailContentHtmlPatchAllOf.md)
 - [CampaignEmailContentTemplate](docs/Model/CampaignEmailContentTemplate.md)
 - [CampaignEmailContentTemplateAllOf](docs/Model/CampaignEmailContentTemplateAllOf.md)
 - [CampaignEmailContentWebPage](docs/Model/CampaignEmailContentWebPage.md)
 - [CampaignEmailContentWebPageAllOf](docs/Model/CampaignEmailContentWebPageAllOf.md)
 - [CampaignEmailRssContent](docs/Model/CampaignEmailRssContent.md)
 - [CampaignEmailRssContentHtml](docs/Model/CampaignEmailRssContentHtml.md)
 - [CampaignEmailRssContentHtmlAllOf](docs/Model/CampaignEmailRssContentHtmlAllOf.md)
 - [CampaignEmailScheduleRequest](docs/Model/CampaignEmailScheduleRequest.md)
 - [CampaignEmailScheduleRequestAllOf](docs/Model/CampaignEmailScheduleRequestAllOf.md)
 - [CampaignEmailSendNowRequest](docs/Model/CampaignEmailSendNowRequest.md)
 - [CampaignEmailSendRequest](docs/Model/CampaignEmailSendRequest.md)
 - [CampaignGroup](docs/Model/CampaignGroup.md)
 - [CampaignGroupAllOf](docs/Model/CampaignGroupAllOf.md)
 - [CampaignGroupCollection](docs/Model/CampaignGroupCollection.md)
 - [CampaignHash](docs/Model/CampaignHash.md)
 - [CampaignPushContent](docs/Model/CampaignPushContent.md)
 - [CampaignPushContentTemplate](docs/Model/CampaignPushContentTemplate.md)
 - [CampaignPushContentText](docs/Model/CampaignPushContentText.md)
 - [CampaignPushScheduleRequest](docs/Model/CampaignPushScheduleRequest.md)
 - [CampaignPushSendRequest](docs/Model/CampaignPushSendRequest.md)
 - [CampaignScheduleDate](docs/Model/CampaignScheduleDate.md)
 - [CampaignSentLast30Days](docs/Model/CampaignSentLast30Days.md)
 - [CampaignSentLast30DaysErrors](docs/Model/CampaignSentLast30DaysErrors.md)
 - [CampaignSmartSmsHtml](docs/Model/CampaignSmartSmsHtml.md)
 - [CampaignSmartSmsImport](docs/Model/CampaignSmartSmsImport.md)
 - [CampaignSmartSmsOptions](docs/Model/CampaignSmartSmsOptions.md)
 - [CampaignSmartSmsPageContent](docs/Model/CampaignSmartSmsPageContent.md)
 - [CampaignSmartSmsRedirect](docs/Model/CampaignSmartSmsRedirect.md)
 - [CampaignSmartSmsScheduleRequest](docs/Model/CampaignSmartSmsScheduleRequest.md)
 - [CampaignSmartSmsSendRequest](docs/Model/CampaignSmartSmsSendRequest.md)
 - [CampaignSmsContent](docs/Model/CampaignSmsContent.md)
 - [CampaignSmsContentTemplate](docs/Model/CampaignSmsContentTemplate.md)
 - [CampaignSmsContentText](docs/Model/CampaignSmsContentText.md)
 - [CampaignSmsOptions](docs/Model/CampaignSmsOptions.md)
 - [CampaignSmsScheduleRequest](docs/Model/CampaignSmsScheduleRequest.md)
 - [CampaignSmsSendRequest](docs/Model/CampaignSmsSendRequest.md)
 - [CampaignVoiceScheduleRequest](docs/Model/CampaignVoiceScheduleRequest.md)
 - [CampaignVoiceSendRequest](docs/Model/CampaignVoiceSendRequest.md)
 - [CampaignWebPushScheduleRequest](docs/Model/CampaignWebPushScheduleRequest.md)
 - [CampaignWebPushSendRequest](docs/Model/CampaignWebPushSendRequest.md)
 - [CampaignsCollection](docs/Model/CampaignsCollection.md)
 - [Cart](docs/Model/Cart.md)
 - [CartPatchRequest](docs/Model/CartPatchRequest.md)
 - [Catalog](docs/Model/Catalog.md)
 - [CatalogCollection](docs/Model/CatalogCollection.md)
 - [CatalogPostRequest](docs/Model/CatalogPostRequest.md)
 - [CellphoneSender](docs/Model/CellphoneSender.md)
 - [CellphoneSenderCollection](docs/Model/CellphoneSenderCollection.md)
 - [CnameExists](docs/Model/CnameExists.md)
 - [CnameExistsErrors](docs/Model/CnameExistsErrors.md)
 - [ComplexContact](docs/Model/ComplexContact.md)
 - [ComplexContactAllOf](docs/Model/ComplexContactAllOf.md)
 - [ComplexContactAllOfEmailStats](docs/Model/ComplexContactAllOfEmailStats.md)
 - [ComplexContactAllOfPushStats](docs/Model/ComplexContactAllOfPushStats.md)
 - [ComplexContactAllOfSmsStats](docs/Model/ComplexContactAllOfSmsStats.md)
 - [ComplexContactAllOfVoiceStats](docs/Model/ComplexContactAllOfVoiceStats.md)
 - [ComplexContactAllOfWebpushStats](docs/Model/ComplexContactAllOfWebpushStats.md)
 - [ComplexField](docs/Model/ComplexField.md)
 - [ComplexFieldAllOf](docs/Model/ComplexFieldAllOf.md)
 - [ComplexList](docs/Model/ComplexList.md)
 - [ComplexListAllOf](docs/Model/ComplexListAllOf.md)
 - [ComplexListAllOfStats](docs/Model/ComplexListAllOfStats.md)
 - [ComplexUser](docs/Model/ComplexUser.md)
 - [ComplexUserAllOf](docs/Model/ComplexUserAllOf.md)
 - [Conflict](docs/Model/Conflict.md)
 - [ConflictAllOf](docs/Model/ConflictAllOf.md)
 - [Contact](docs/Model/Contact.md)
 - [ContactActivity](docs/Model/ContactActivity.md)
 - [ContactActivityAbstractActionsWithData](docs/Model/ContactActivityAbstractActionsWithData.md)
 - [ContactActivityClick](docs/Model/ContactActivityClick.md)
 - [ContactActivityClickAllOf](docs/Model/ContactActivityClickAllOf.md)
 - [ContactActivityClickAllOfActionData](docs/Model/ContactActivityClickAllOfActionData.md)
 - [ContactBaseExtra](docs/Model/ContactBaseExtra.md)
 - [ContactBaseExtraBulk](docs/Model/ContactBaseExtraBulk.md)
 - [ContactBaseExtraFull](docs/Model/ContactBaseExtraFull.md)
 - [ContactBaseFieldsBulkSchema](docs/Model/ContactBaseFieldsBulkSchema.md)
 - [ContactBaseFieldsSchema](docs/Model/ContactBaseFieldsSchema.md)
 - [ContactBaseFieldsWithIdSchema](docs/Model/ContactBaseFieldsWithIdSchema.md)
 - [ContactBaseStatusExtra](docs/Model/ContactBaseStatusExtra.md)
 - [ContactBaseStatusExtraBulk](docs/Model/ContactBaseStatusExtraBulk.md)
 - [ContactBaseWithStatusFieldsBulkSchema](docs/Model/ContactBaseWithStatusFieldsBulkSchema.md)
 - [ContactBaseWithStatusFieldsSchema](docs/Model/ContactBaseWithStatusFieldsSchema.md)
 - [ContactBaseWithStatusFieldsSchemaBase](docs/Model/ContactBaseWithStatusFieldsSchemaBase.md)
 - [ContactBaseWithStatusFieldsSchemaBasePushTokenAndroid](docs/Model/ContactBaseWithStatusFieldsSchemaBasePushTokenAndroid.md)
 - [ContactBaseWithStatusFieldsSchemaBasePushTokenIos](docs/Model/ContactBaseWithStatusFieldsSchemaBasePushTokenIos.md)
 - [ContactBulk](docs/Model/ContactBulk.md)
 - [ContactCollection](docs/Model/ContactCollection.md)
 - [ContactExportRequest](docs/Model/ContactExportRequest.md)
 - [ContactExtraFieldCellphone](docs/Model/ContactExtraFieldCellphone.md)
 - [ContactExtraFieldCellphoneBulk](docs/Model/ContactExtraFieldCellphoneBulk.md)
 - [ContactExtraFieldDate](docs/Model/ContactExtraFieldDate.md)
 - [ContactExtraFieldEmail](docs/Model/ContactExtraFieldEmail.md)
 - [ContactExtraFieldEmailBulk](docs/Model/ContactExtraFieldEmailBulk.md)
 - [ContactExtraFieldNumber](docs/Model/ContactExtraFieldNumber.md)
 - [ContactExtraFieldOptions](docs/Model/ContactExtraFieldOptions.md)
 - [ContactExtraFieldPhone](docs/Model/ContactExtraFieldPhone.md)
 - [ContactExtraFieldPhoneBulk](docs/Model/ContactExtraFieldPhoneBulk.md)
 - [ContactExtraFieldText](docs/Model/ContactExtraFieldText.md)
 - [ContactExtraFields](docs/Model/ContactExtraFields.md)
 - [ContactExtraFieldsBulk](docs/Model/ContactExtraFieldsBulk.md)
 - [ContactExtraFieldsBulkSchema](docs/Model/ContactExtraFieldsBulkSchema.md)
 - [ContactExtraFieldsSchema](docs/Model/ContactExtraFieldsSchema.md)
 - [ContactForgetRequest](docs/Model/ContactForgetRequest.md)
 - [ContactInsideBase](docs/Model/ContactInsideBase.md)
 - [ContactInsideBaseBulk](docs/Model/ContactInsideBaseBulk.md)
 - [ContactInsideBaseWithId](docs/Model/ContactInsideBaseWithId.md)
 - [ContactOtherActivity](docs/Model/ContactOtherActivity.md)
 - [ContactSearchResponse](docs/Model/ContactSearchResponse.md)
 - [ContactStatusFieldsBulkSchema](docs/Model/ContactStatusFieldsBulkSchema.md)
 - [ContactStatusFieldsSchema](docs/Model/ContactStatusFieldsSchema.md)
 - [ContactTags](docs/Model/ContactTags.md)
 - [ContactTagsBulk](docs/Model/ContactTagsBulk.md)
 - [ContentVoice](docs/Model/ContentVoice.md)
 - [ContentVoiceAudio](docs/Model/ContentVoiceAudio.md)
 - [ContentVoicePatch](docs/Model/ContentVoicePatch.md)
 - [ContentVoiceTemplate](docs/Model/ContentVoiceTemplate.md)
 - [Country](docs/Model/Country.md)
 - [CountryCollection](docs/Model/CountryCollection.md)
 - [CreateCartResponse](docs/Model/CreateCartResponse.md)
 - [CreateContactResponse](docs/Model/CreateContactResponse.md)
 - [CreateOrder](docs/Model/CreateOrder.md)
 - [CreateOrderResponse](docs/Model/CreateOrderResponse.md)
 - [DeactivateContactsAll](docs/Model/DeactivateContactsAll.md)
 - [DeactivateContactsMany](docs/Model/DeactivateContactsMany.md)
 - [DeactivateContactsRequest](docs/Model/DeactivateContactsRequest.md)
 - [DeleteCampaignsConflict](docs/Model/DeleteCampaignsConflict.md)
 - [DeleteFieldsConflict](docs/Model/DeleteFieldsConflict.md)
 - [DeleteListsConflict](docs/Model/DeleteListsConflict.md)
 - [DeleteListsConflictsErrors](docs/Model/DeleteListsConflictsErrors.md)
 - [DeleteSegmentsConflict](docs/Model/DeleteSegmentsConflict.md)
 - [DeleteSegmentsConflictsErrors](docs/Model/DeleteSegmentsConflictsErrors.md)
 - [Domain](docs/Model/Domain.md)
 - [DomainAlreadyDefined](docs/Model/DomainAlreadyDefined.md)
 - [DomainAlreadyDefinedErrors](docs/Model/DomainAlreadyDefinedErrors.md)
 - [DomainCollection](docs/Model/DomainCollection.md)
 - [DomainListRequired](docs/Model/DomainListRequired.md)
 - [DomainListRequiredErrors](docs/Model/DomainListRequiredErrors.md)
 - [EmailBouncesCampaignFields](docs/Model/EmailBouncesCampaignFields.md)
 - [EmailBouncesListStatsFields](docs/Model/EmailBouncesListStatsFields.md)
 - [EmailCampaignCreate](docs/Model/EmailCampaignCreate.md)
 - [EmailCampaignPatch](docs/Model/EmailCampaignPatch.md)
 - [EmailCampaignTemplate](docs/Model/EmailCampaignTemplate.md)
 - [EmailCampaignTemplateAllOf](docs/Model/EmailCampaignTemplateAllOf.md)
 - [EmailCampaignTemplateAllOfReplyToData](docs/Model/EmailCampaignTemplateAllOfReplyToData.md)
 - [EmailCampaignTemplateAllOfSenderData](docs/Model/EmailCampaignTemplateAllOfSenderData.md)
 - [EmailClicksByContactCampaignFields](docs/Model/EmailClicksByContactCampaignFields.md)
 - [EmailClicksByContactListStatsFields](docs/Model/EmailClicksByContactListStatsFields.md)
 - [EmailClicksByUrlCampaignFields](docs/Model/EmailClicksByUrlCampaignFields.md)
 - [EmailClicksByUrlListStatsFields](docs/Model/EmailClicksByUrlListStatsFields.md)
 - [EmailEventsCampaignFields](docs/Model/EmailEventsCampaignFields.md)
 - [EmailEventsListStatsFields](docs/Model/EmailEventsListStatsFields.md)
 - [EmailRssCampaignCreate](docs/Model/EmailRssCampaignCreate.md)
 - [EmailSendSegment](docs/Model/EmailSendSegment.md)
 - [EmailSender](docs/Model/EmailSender.md)
 - [EmailSenderAllOf](docs/Model/EmailSenderAllOf.md)
 - [EmailSenderCollection](docs/Model/EmailSenderCollection.md)
 - [EmailSenderPutRequest](docs/Model/EmailSenderPutRequest.md)
 - [EmailUnsubscriptionsCampaignFields](docs/Model/EmailUnsubscriptionsCampaignFields.md)
 - [EmailUnsubscriptionsListStatsFields](docs/Model/EmailUnsubscriptionsListStatsFields.md)
 - [EnableTeConflict](docs/Model/EnableTeConflict.md)
 - [EnableTeConflictsErrors](docs/Model/EnableTeConflictsErrors.md)
 - [ExportContactsWebhookData](docs/Model/ExportContactsWebhookData.md)
 - [Field](docs/Model/Field.md)
 - [FieldCollection](docs/Model/FieldCollection.md)
 - [FieldInUse](docs/Model/FieldInUse.md)
 - [FieldInUseErrors](docs/Model/FieldInUseErrors.md)
 - [FieldInUseErrorsFieldInUseData](docs/Model/FieldInUseErrorsFieldInUseData.md)
 - [FieldOption](docs/Model/FieldOption.md)
 - [FieldOptionsCollection](docs/Model/FieldOptionsCollection.md)
 - [Forbidden](docs/Model/Forbidden.md)
 - [Form](docs/Model/Form.md)
 - [GeneralInfo](docs/Model/GeneralInfo.md)
 - [GeneralInfoAllOf](docs/Model/GeneralInfoAllOf.md)
 - [GeneralInfoAllOfGeneralInfo](docs/Model/GeneralInfoAllOfGeneralInfo.md)
 - [GenerateEmailBouncesReport](docs/Model/GenerateEmailBouncesReport.md)
 - [GenerateEmailClicksByContactReport](docs/Model/GenerateEmailClicksByContactReport.md)
 - [GenerateEmailClicksByUrlReport](docs/Model/GenerateEmailClicksByUrlReport.md)
 - [GenerateEmailEventsReport](docs/Model/GenerateEmailEventsReport.md)
 - [GenerateEmailUnsubscriptionsReport](docs/Model/GenerateEmailUnsubscriptionsReport.md)
 - [GenerateFormAnswersReport](docs/Model/GenerateFormAnswersReport.md)
 - [GenerateSendsReport](docs/Model/GenerateSendsReport.md)
 - [GenerateSmsBouncesReport](docs/Model/GenerateSmsBouncesReport.md)
 - [GenerateSmsEventsReport](docs/Model/GenerateSmsEventsReport.md)
 - [GenerateSubscriptionsReport](docs/Model/GenerateSubscriptionsReport.md)
 - [GenerateUnsubscriptionsReport](docs/Model/GenerateUnsubscriptionsReport.md)
 - [Goal](docs/Model/Goal.md)
 - [GoalAutommaticInfo](docs/Model/GoalAutommaticInfo.md)
 - [GoalCollection](docs/Model/GoalCollection.md)
 - [GoalInfo](docs/Model/GoalInfo.md)
 - [GoalManualInfo](docs/Model/GoalManualInfo.md)
 - [GoalTimeInfo](docs/Model/GoalTimeInfo.md)
 - [HasAutomations](docs/Model/HasAutomations.md)
 - [HasAutomationsErrors](docs/Model/HasAutomationsErrors.md)
 - [HasCampaignsLastThirtyDays](docs/Model/HasCampaignsLastThirtyDays.md)
 - [HasCampaignsLastThirtyDaysErrors](docs/Model/HasCampaignsLastThirtyDaysErrors.md)
 - [HasPushApp](docs/Model/HasPushApp.md)
 - [HasPushAppErrors](docs/Model/HasPushAppErrors.md)
 - [HasQueuedCampaigns](docs/Model/HasQueuedCampaigns.md)
 - [HasQueuedCampaignsErrors](docs/Model/HasQueuedCampaignsErrors.md)
 - [HasQueuedOperations](docs/Model/HasQueuedOperations.md)
 - [HasQueuedOperationsErrors](docs/Model/HasQueuedOperationsErrors.md)
 - [HasWebPushSite](docs/Model/HasWebPushSite.md)
 - [HasWebPushSiteErrors](docs/Model/HasWebPushSiteErrors.md)
 - [HashcodeCampaign](docs/Model/HashcodeCampaign.md)
 - [HeaderFooter](docs/Model/HeaderFooter.md)
 - [HeaderFooterFooterLinks](docs/Model/HeaderFooterFooterLinks.md)
 - [HeaderFooterHeaderLinks](docs/Model/HeaderFooterHeaderLinks.md)
 - [HeaderFooterTemplate](docs/Model/HeaderFooterTemplate.md)
 - [ImportBulkRequest](docs/Model/ImportBulkRequest.md)
 - [ImportOrdersBulkBulkRequest](docs/Model/ImportOrdersBulkBulkRequest.md)
 - [ImportOrdersBulkBulkRequestItems](docs/Model/ImportOrdersBulkBulkRequestItems.md)
 - [InlineObject](docs/Model/InlineObject.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InternalServerError](docs/Model/InternalServerError.md)
 - [InvalidSegmentType](docs/Model/InvalidSegmentType.md)
 - [InvalidSegmentTypeErrors](docs/Model/InvalidSegmentTypeErrors.md)
 - [Language](docs/Model/Language.md)
 - [LimitContactsActionSend](docs/Model/LimitContactsActionSend.md)
 - [LimitContactsPercentActionSend](docs/Model/LimitContactsPercentActionSend.md)
 - [LimitContactsValueActionSend](docs/Model/LimitContactsValueActionSend.md)
 - [LimitHourActionSend](docs/Model/LimitHourActionSend.md)
 - [LimitHourActionSendLimitHour](docs/Model/LimitHourActionSendLimitHour.md)
 - [LimitSpeedActionSend](docs/Model/LimitSpeedActionSend.md)
 - [ListCollection](docs/Model/ListCollection.md)
 - [ListCollection1](docs/Model/ListCollection1.md)
 - [ListLimitReached](docs/Model/ListLimitReached.md)
 - [ListLimitReachedErrors](docs/Model/ListLimitReachedErrors.md)
 - [MessageWebPush](docs/Model/MessageWebPush.md)
 - [MessageWebPushPost](docs/Model/MessageWebPushPost.md)
 - [MessageWebPushRss](docs/Model/MessageWebPushRss.md)
 - [ModelList](docs/Model/ModelList.md)
 - [ModuleInfo](docs/Model/ModuleInfo.md)
 - [ModuleInfoModuleInfo](docs/Model/ModuleInfoModuleInfo.md)
 - [ModuleInfoModuleInfoTe](docs/Model/ModuleInfoModuleInfoTe.md)
 - [MyAccount](docs/Model/MyAccount.md)
 - [NameAlreadyExists](docs/Model/NameAlreadyExists.md)
 - [NameAlreadyExistsErrors](docs/Model/NameAlreadyExistsErrors.md)
 - [NotFound](docs/Model/NotFound.md)
 - [NotifyUserIdArrayActionSend](docs/Model/NotifyUserIdArrayActionSend.md)
 - [Now](docs/Model/Now.md)
 - [NumericCellphoneSender](docs/Model/NumericCellphoneSender.md)
 - [NumericCellphoneSenderAllOf](docs/Model/NumericCellphoneSenderAllOf.md)
 - [OLimitContactsActionSend](docs/Model/OLimitContactsActionSend.md)
 - [OSegmentsActionSend](docs/Model/OSegmentsActionSend.md)
 - [OSegmentsWithoutContactActionSend](docs/Model/OSegmentsWithoutContactActionSend.md)
 - [Operation](docs/Model/Operation.md)
 - [OperationActionRequest](docs/Model/OperationActionRequest.md)
 - [OperationActionResponse](docs/Model/OperationActionResponse.md)
 - [OperationActionResponseError](docs/Model/OperationActionResponseError.md)
 - [OperationOperationData](docs/Model/OperationOperationData.md)
 - [OperationsCollection](docs/Model/OperationsCollection.md)
 - [Order](docs/Model/Order.md)
 - [OrderPatchRequest](docs/Model/OrderPatchRequest.md)
 - [Overall](docs/Model/Overall.md)
 - [OverallOverall](docs/Model/OverallOverall.md)
 - [PatchRequestBaseField](docs/Model/PatchRequestBaseField.md)
 - [PatchRequestField](docs/Model/PatchRequestField.md)
 - [PatchRequestList](docs/Model/PatchRequestList.md)
 - [PhoneCampaignTemplate](docs/Model/PhoneCampaignTemplate.md)
 - [PhoneCampaignTemplateAllOf](docs/Model/PhoneCampaignTemplateAllOf.md)
 - [PhoneReport](docs/Model/PhoneReport.md)
 - [PhoneReportAllOf](docs/Model/PhoneReportAllOf.md)
 - [PhoneReportAllOfNetworks](docs/Model/PhoneReportAllOfNetworks.md)
 - [PhoneSender](docs/Model/PhoneSender.md)
 - [PhoneSenderAllOf](docs/Model/PhoneSenderAllOf.md)
 - [PhoneSenderCollection](docs/Model/PhoneSenderCollection.md)
 - [Ping](docs/Model/Ping.md)
 - [PlanInfo](docs/Model/PlanInfo.md)
 - [PlanInfoPlanInfo](docs/Model/PlanInfoPlanInfo.md)
 - [PostCNameConflict](docs/Model/PostCNameConflict.md)
 - [PostContactsConflict](docs/Model/PostContactsConflict.md)
 - [PostListsConflict](docs/Model/PostListsConflict.md)
 - [PostProductsConflict](docs/Model/PostProductsConflict.md)
 - [PostRequestList](docs/Model/PostRequestList.md)
 - [PostWebpushSiteConflict](docs/Model/PostWebpushSiteConflict.md)
 - [Product](docs/Model/Product.md)
 - [ProductAllOf](docs/Model/ProductAllOf.md)
 - [ProductAlreadyExists](docs/Model/ProductAlreadyExists.md)
 - [ProductAlreadyExistsErrors](docs/Model/ProductAlreadyExistsErrors.md)
 - [ProductBulkRequest](docs/Model/ProductBulkRequest.md)
 - [ProductCollection](docs/Model/ProductCollection.md)
 - [ProductCustomAttributes](docs/Model/ProductCustomAttributes.md)
 - [ProductPatchRequest](docs/Model/ProductPatchRequest.md)
 - [ProductPatchRequestRelatedProducts](docs/Model/ProductPatchRequestRelatedProducts.md)
 - [ProductPostRequest](docs/Model/ProductPostRequest.md)
 - [PushCampaignPatchRequest](docs/Model/PushCampaignPatchRequest.md)
 - [PushCampaignPatchRequestContent](docs/Model/PushCampaignPatchRequestContent.md)
 - [PushCampaignPostRequest](docs/Model/PushCampaignPostRequest.md)
 - [PushCampaignPostRequestActions](docs/Model/PushCampaignPostRequestActions.md)
 - [PushCampaignPostRequestGeoOptions](docs/Model/PushCampaignPostRequestGeoOptions.md)
 - [PushCampaignPostRequestNotificationOptions](docs/Model/PushCampaignPostRequestNotificationOptions.md)
 - [PushEvent](docs/Model/PushEvent.md)
 - [PushNotificationSoundSchema](docs/Model/PushNotificationSoundSchema.md)
 - [PushNotificationSoundSchemaDefault](docs/Model/PushNotificationSoundSchemaDefault.md)
 - [PushNotificationSoundSchemaNone](docs/Model/PushNotificationSoundSchemaNone.md)
 - [PushNotificationSoundSchemaUrl](docs/Model/PushNotificationSoundSchemaUrl.md)
 - [PushReport](docs/Model/PushReport.md)
 - [PushReportAllOf](docs/Model/PushReportAllOf.md)
 - [PushResponse](docs/Model/PushResponse.md)
 - [PushToken](docs/Model/PushToken.md)
 - [PushTokenTwoStepsData](docs/Model/PushTokenTwoStepsData.md)
 - [PushVersions](docs/Model/PushVersions.md)
 - [PushVersionsVersions](docs/Model/PushVersionsVersions.md)
 - [RemoveRequest](docs/Model/RemoveRequest.md)
 - [RemoveResponse](docs/Model/RemoveResponse.md)
 - [RemoveResponseErrors](docs/Model/RemoveResponseErrors.md)
 - [ReportCampaignsAll](docs/Model/ReportCampaignsAll.md)
 - [ReportCampaignsGroup](docs/Model/ReportCampaignsGroup.md)
 - [ReportCampaignsLast](docs/Model/ReportCampaignsLast.md)
 - [ReportCampaignsSpecific](docs/Model/ReportCampaignsSpecific.md)
 - [RequestItemsUnsubscribe](docs/Model/RequestItemsUnsubscribe.md)
 - [RequestItemsUnsubscribeAllOf](docs/Model/RequestItemsUnsubscribeAllOf.md)
 - [RequestTimeout](docs/Model/RequestTimeout.md)
 - [SavedSegment](docs/Model/SavedSegment.md)
 - [SavedSegmentAllOf](docs/Model/SavedSegmentAllOf.md)
 - [SavedSegmentAllOf1](docs/Model/SavedSegmentAllOf1.md)
 - [SavedSegmentAllOfSegmentFilter](docs/Model/SavedSegmentAllOfSegmentFilter.md)
 - [SavedSegmentAllOfSegmentFilterSegmentFilterArray](docs/Model/SavedSegmentAllOfSegmentFilterSegmentFilterArray.md)
 - [Segment](docs/Model/Segment.md)
 - [SegmentCollection](docs/Model/SegmentCollection.md)
 - [SegmentsActionSend](docs/Model/SegmentsActionSend.md)
 - [SegmentsWithoutContactActionSend](docs/Model/SegmentsWithoutContactActionSend.md)
 - [SendContact](docs/Model/SendContact.md)
 - [SendContactCellphone](docs/Model/SendContactCellphone.md)
 - [SendEmailContact](docs/Model/SendEmailContact.md)
 - [SendEmailContactAllOf](docs/Model/SendEmailContactAllOf.md)
 - [SendNone](docs/Model/SendNone.md)
 - [SendPush](docs/Model/SendPush.md)
 - [SendPushAllOf](docs/Model/SendPushAllOf.md)
 - [SendSegment](docs/Model/SendSegment.md)
 - [SendSmartSms](docs/Model/SendSmartSms.md)
 - [SendSmartSmsAllOf](docs/Model/SendSmartSmsAllOf.md)
 - [SendSmartSmsAllOf1](docs/Model/SendSmartSmsAllOf1.md)
 - [SendSmartSmsAllOf2](docs/Model/SendSmartSmsAllOf2.md)
 - [SendSms](docs/Model/SendSms.md)
 - [SendSmsAllOf](docs/Model/SendSmsAllOf.md)
 - [SendSmsAllOf1](docs/Model/SendSmsAllOf1.md)
 - [SendWebPush](docs/Model/SendWebPush.md)
 - [SendWebPushAllOf](docs/Model/SendWebPushAllOf.md)
 - [SendsCampaignFields](docs/Model/SendsCampaignFields.md)
 - [ServiceUnavailable](docs/Model/ServiceUnavailable.md)
 - [SingleCartObject](docs/Model/SingleCartObject.md)
 - [SingleOrderObject](docs/Model/SingleOrderObject.md)
 - [SmartSmsCampaign](docs/Model/SmartSmsCampaign.md)
 - [SmartSmsCampaignCampaignContent](docs/Model/SmartSmsCampaignCampaignContent.md)
 - [SmartSmsCampaignPatchRequest](docs/Model/SmartSmsCampaignPatchRequest.md)
 - [SmartSmsCampaignPatchRequestCampaignContent](docs/Model/SmartSmsCampaignPatchRequestCampaignContent.md)
 - [SmartSmsCampaignPatchRequestPageContent](docs/Model/SmartSmsCampaignPatchRequestPageContent.md)
 - [SmartSmsSegmentsActionSend](docs/Model/SmartSmsSegmentsActionSend.md)
 - [SmsBouncesCampaignFields](docs/Model/SmsBouncesCampaignFields.md)
 - [SmsBouncesListStatsFields](docs/Model/SmsBouncesListStatsFields.md)
 - [SmsCampaign](docs/Model/SmsCampaign.md)
 - [SmsCampaignPatchRequest](docs/Model/SmsCampaignPatchRequest.md)
 - [SmsCampaignPatchRequestContent](docs/Model/SmsCampaignPatchRequestContent.md)
 - [SmsCampaignTemplate](docs/Model/SmsCampaignTemplate.md)
 - [SmsCampaignTemplateAllOf](docs/Model/SmsCampaignTemplateAllOf.md)
 - [SmsEventsCampaignFields](docs/Model/SmsEventsCampaignFields.md)
 - [SmsEventsListStatsFields](docs/Model/SmsEventsListStatsFields.md)
 - [SmsSegmentsActionSend](docs/Model/SmsSegmentsActionSend.md)
 - [StartAutomationRequest](docs/Model/StartAutomationRequest.md)
 - [StartAutomationResponse](docs/Model/StartAutomationResponse.md)
 - [SubscriptionsListStatsFields](docs/Model/SubscriptionsListStatsFields.md)
 - [SuppressionList](docs/Model/SuppressionList.md)
 - [SuppressionListItems](docs/Model/SuppressionListItems.md)
 - [Tag](docs/Model/Tag.md)
 - [TagCollection](docs/Model/TagCollection.md)
 - [TagCollection1](docs/Model/TagCollection1.md)
 - [TagRequest](docs/Model/TagRequest.md)
 - [TagSegment](docs/Model/TagSegment.md)
 - [TagSegmentAllOf](docs/Model/TagSegmentAllOf.md)
 - [TeResponse](docs/Model/TeResponse.md)
 - [TeResponseAllOf](docs/Model/TeResponseAllOf.md)
 - [TooManyRequests](docs/Model/TooManyRequests.md)
 - [Unauthorized](docs/Model/Unauthorized.md)
 - [UniqueFieldInUse](docs/Model/UniqueFieldInUse.md)
 - [UniqueFieldInUseErrors](docs/Model/UniqueFieldInUseErrors.md)
 - [UnprocessableEntity](docs/Model/UnprocessableEntity.md)
 - [UnsubscriptionObject](docs/Model/UnsubscriptionObject.md)
 - [UnsubscriptionsListStatsFields](docs/Model/UnsubscriptionsListStatsFields.md)
 - [UsedInAutomations](docs/Model/UsedInAutomations.md)
 - [UsedInAutomationsErrors](docs/Model/UsedInAutomationsErrors.md)
 - [UsedInRecurringMessages](docs/Model/UsedInRecurringMessages.md)
 - [UsedInRecurringMessagesErrors](docs/Model/UsedInRecurringMessagesErrors.md)
 - [User](docs/Model/User.md)
 - [UserAllOf](docs/Model/UserAllOf.md)
 - [UserCollection](docs/Model/UserCollection.md)
 - [UserPostRequest](docs/Model/UserPostRequest.md)
 - [UserPostRequestAllOf](docs/Model/UserPostRequestAllOf.md)
 - [VoiceCampaign](docs/Model/VoiceCampaign.md)
 - [VoiceCampaignAllOf](docs/Model/VoiceCampaignAllOf.md)
 - [VoiceCampaignTemplate](docs/Model/VoiceCampaignTemplate.md)
 - [VoiceCampaignTemplateAllOf](docs/Model/VoiceCampaignTemplateAllOf.md)
 - [VoicePatchCampaign](docs/Model/VoicePatchCampaign.md)
 - [VoicePatchCampaignAllOf](docs/Model/VoicePatchCampaignAllOf.md)
 - [WebPushCampaign](docs/Model/WebPushCampaign.md)
 - [WebPushPatchCampaign](docs/Model/WebPushPatchCampaign.md)
 - [WebPushReport](docs/Model/WebPushReport.md)
 - [WebPushReportBrowsers](docs/Model/WebPushReportBrowsers.md)
 - [WebPushReportOperatingSystems](docs/Model/WebPushReportOperatingSystems.md)
 - [WebPushRssCampaign](docs/Model/WebPushRssCampaign.md)
 - [WebPushSite](docs/Model/WebPushSite.md)
 - [WebPushStats](docs/Model/WebPushStats.md)
 - [Webhook](docs/Model/Webhook.md)
 - [WebhookActionSchema](docs/Model/WebhookActionSchema.md)


## Documentation For Authorization



## Apikey


- **Type**: API key
- **API key parameter name**: Apikey
- **Location**: HTTP header



## Author



