<?php
/**
 * ContactActivityActivitiesFields
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketing API
 *
 * # Introduction Welcome to the E-goi Marketing API! <br><br>This API enables you to integrate, automate, and manage all the marketing functionalities offered by E-goi. With it, you can interact with contact lists, send email campaigns, SMS, push notifications, and much more. <br><br>Our API is designed to simplify integration in a straightforward, efficient, and secure way, meeting the needs of developers and businesses looking to optimize their digital marketing operations. <br><br>Explore the documentation to discover all the possibilities and start creating integrations that drive your marketing results. # Getting Started  E-goi can be integrated with many environments and programming languages via our REST API. We've created a developer focused portal to give your organization a clear and quick overview of how to integrate with E-goi. The developer portal focuses on scenarios for integration and flow of events. We recommend familiarizing yourself with all of the content in the developer portal, before start using our rest API.  The E-goi  APIv3 is served over HTTPS. To ensure data privacy, unencrypted HTTP is not supported.  Request data is passed to the API by POSTing JSON objects to the API endpoints with the appropriate parameters.      BaseURL = api.egoiapp.com  # RESTful Services This API supports 5 HTTP methods:  * <b>GET</b>: The HTTP GET method is used to **read** (or retrieve) a representation of a resource. * <b>POST</b>: The POST verb is most-often utilized to **create** new resources. * <b>PATCH</b>: PATCH is used for **modify** capabilities. The PATCH request only needs to contain the changes to the resource, not the complete resource * <b>PUT</b>: PUT is most-often utilized for **update** capabilities, PUT-ing to a known resource URI with the request body containing the newly-updated representation of the original resource. * <b>DELETE</b>: DELETE is pretty easy to understand. It is used to **delete** a resource identified by a URI.  # Transport Layer Security (TLS) Transport Layer Security (TLS) is a widely used authentication and encryption protocol that establishes a secure communications channel for data-in-transit while ensuring that the client and server can validate one another.<br> Our API requires TLS 1.2 or TLS 1.3. We recommend <b>TLS 1.3</b>.<br><br> <b>TLS 1.3 ciphers</b> * TLS_AES_256_GCM_SHA384 (0x1302) ECDH x25519 (eq. 3072 bits RSA) FS * TLS_CHACHA20_POLY1305_SHA256 (0x1303) ECDH x25519 (eq. 3072 bits RSA) FS * TLS_AES_128_GCM_SHA256 (0x1301) ECDH x25519 (eq. 3072 bits RSA) FS  <b>TLS 1.2 ciphers</b> * TLS_ECDHE_RSA_WITH_AES_256_GCM_SHA384 (0xc030) ECDH x25519 (eq. 3072 bits RSA) FS * TLS_ECDHE_RSA_WITH_AES_128_GCM_SHA256 (0xc02f) ECDH x25519 (eq. 3072 bits RSA) FS * TLS_DHE_RSA_WITH_AES_256_GCM_SHA384 (0x9f) DH 4096 bits FS * TLS_DHE_RSA_WITH_AES_128_GCM_SHA256 (0x9e) DH 4096 bits FS  # Rate Limits Rate limits are used to control the amount of traffic that is allowed to flow between the client and the server.<br> This is done to prevent abuse and ensure that the API is available to all users.<br> The rate limits are applied to ensure the stability and security of our API and are based on the number of requests made in a given time period.<br> If the rate limit is exceeded, the API will return a 429 status code and the request will be rejected.<br> Each API response includes headers providing real-time rate limit information: * **X-RateLimit-Limit**: The maximum number of requests that the consumer is permitted to make in a given time period. * **X-RateLimit-Remaining**: The number of requests remaining in the current rate limit window. * **X-RateLimit-Reset**: The remaining time in seconds until the rate limit window resets.  # Account Limit The account limit is a rate limit that is applied to the account as a whole.<br> This limit is applied to all requests made by the account, regardless of the client making the request.<br> The account limit is applied to ensure that the account does not exceed the maximum number of requests allowed in a given time period. Each account has an overall usage limit per hour. If the account limit is exceeded, the API will return a 429 status code and the request will be rejected.<br> Each API response includes headers providing real-time rate limit information: * **X-Account-Limit**: The maximum number of requests that the account is permitted to make in a given time period. * **X-Account-Remaining**: The number of requests remaining in the current rate limit window. * **X-Account-Reset**: The remaining time in seconds until the rate limit window resets.   # Authentication  We use a custom authentication method, you will need a apikey that you can find in your account settings. Below you will see a curl example to get your account information:     #!/bin/bash     curl -X GET 'https://api.egoiapp.com/my-account' \\     -H 'accept: application/json' \\     -H 'Apikey: <YOUR_APY_KEY>'  Here you can see a curl Post example with authentication:     #!/bin/bash     curl -X POST 'http://api.egoiapp.com/tags' \\     -H 'accept: application/json' \\     -H 'Apikey: <YOUR_APY_KEY>' \\     -H 'Content-Type: application/json' \\     -d '{`name`:`Your custom tag`,`color`:`#FFFFFF`}'  # SDK Get started quickly with E-goi with our integration tools. Our SDK is a modern open source library that makes it easy to integrate your application with E-goi services.  * <a href='https://github.com/E-goi/sdk-java'>Java</a>  * <a href='https://github.com/E-goi/sdk-php'>PHP</a>  * <a href='https://github.com/E-goi/sdk-python'>Python</a>  * <a href='https://github.com/E-goi/sdk-ruby'>Ruby</a>  * <a href='https://github.com/E-goi/sdk-javascript'>Javascript</a>  * <a href='https://github.com/E-goi/sdk-csharp'>C#</a>  # Stream Limits Stream limits are security mesures we have to make sure our API have a fair use policy, for this reason, any request that creates or modifies data (**POST**, **PATCH** and **PUT**) is limited to a maximum of **20MB** of content length. If you arrive to this limit in one of your request, you'll receive a HTTP code **413 (Request Entity Too Large)** and the request will be ignored. To avoid this error in importation's requests, it's advised the request's division in batches that have each one less than 20MB.  # Timeouts Timeouts set a maximum waiting time on a request's response. Our API, sets a default timeout for each request and when breached, you'll receive an HTTP **408 (Request Timeout)** error code. You should take into consideration that response times can vary widely based on the complexity of the request, amount of data being analyzed, and the load on the system and workspace at the time of the query. When dealing with such errors, you should first attempt to reduce the complexity and amount of data under analysis, and only then, if problems are still occurring ask for support.  For all these reasons, the default timeout for each request is **10 Seconds** and any request that creates or modifies data (**POST**, **PATCH** and **PUT**) will have a timeout of **60 Seconds**. Specific timeouts may exist for specific requests, these can be found in the request's documentation.  # Callbacks A callback is an asynchronous API request that originates from the API server and is sent to the client in response to a previous request sent by that client.  The API will make a **POST** request to the address defined in the URL with the information regarding the event of interest and share data related to that event.  <a href='/usecases/callbacks/' target='_blank'>[Go to callbacks documentation]</a>  ***Note:*** Only http or https protocols are supported in the Url parameter.  <security-definitions/>
 *
 * The version of the OpenAPI document: V3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EgoiClient\EgoiModel;

use \ArrayAccess;
use \EgoiClient\ObjectSerializer;

/**
 * ContactActivityActivitiesFields Class Doc Comment
 *
 * @category Class
 * @description List of contacts activities to include in the report
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContactActivityActivitiesFields implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContactActivityActivitiesFields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'opens' => 'bool',
        'clicks' => 'bool',
        'recommends' => 'bool',
        'conversion' => 'bool',
        'email_send' => 'bool',
        'sms_send' => 'bool',
        'sms_report' => 'bool',
        'voice_send' => 'bool',
        'voice_report' => 'bool',
        'invitation_send' => 'bool',
        'invitation_open' => 'bool',
        'unsubscribe' => 'bool',
        'email_soft_bounce' => 'bool',
        'email_hard_bounce' => 'bool',
        'subscription' => 'bool',
        'resubscription' => 'bool',
        'unsubscribe_reason' => 'bool',
        'facebook_like' => 'bool',
        'social_share' => 'bool',
        'unsubscribe_manual' => 'bool',
        'double_optin' => 'bool',
        'email_spam_complaint' => 'bool',
        'email_field_disable' => 'bool',
        'cellphone_field_disable' => 'bool',
        'phone_field_disable' => 'bool',
        'unsubscribe_api' => 'bool',
        'email_field_enable' => 'bool',
        'cellphone_field_enable' => 'bool',
        'phone_field_enable' => 'bool',
        'edit_subscription' => 'bool',
        'automation_event' => 'bool',
        'push_send' => 'bool',
        'push_delivered' => 'bool',
        'push_error' => 'bool',
        'push_received' => 'bool',
        'push_open' => 'bool',
        'push_canceled' => 'bool',
        'push_unsubscription' => 'bool',
        'reply_to_email' => 'bool',
        'web_push_send' => 'bool',
        'web_push_delivered' => 'bool',
        'web_push_open' => 'bool',
        'web_push_bounce' => 'bool',
        'web_push_click' => 'bool',
        'web_push_subscription' => 'bool',
        'web_push_unsubscription' => 'bool',
        'forget_subscription' => 'bool',
        'change_consent' => 'bool',
        'double_optin_resend' => 'bool',
        'double_optedit' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'opens' => null,
        'clicks' => null,
        'recommends' => null,
        'conversion' => null,
        'email_send' => null,
        'sms_send' => null,
        'sms_report' => null,
        'voice_send' => null,
        'voice_report' => null,
        'invitation_send' => null,
        'invitation_open' => null,
        'unsubscribe' => null,
        'email_soft_bounce' => null,
        'email_hard_bounce' => null,
        'subscription' => null,
        'resubscription' => null,
        'unsubscribe_reason' => null,
        'facebook_like' => null,
        'social_share' => null,
        'unsubscribe_manual' => null,
        'double_optin' => null,
        'email_spam_complaint' => null,
        'email_field_disable' => null,
        'cellphone_field_disable' => null,
        'phone_field_disable' => null,
        'unsubscribe_api' => null,
        'email_field_enable' => null,
        'cellphone_field_enable' => null,
        'phone_field_enable' => null,
        'edit_subscription' => null,
        'automation_event' => null,
        'push_send' => null,
        'push_delivered' => null,
        'push_error' => null,
        'push_received' => null,
        'push_open' => null,
        'push_canceled' => null,
        'push_unsubscription' => null,
        'reply_to_email' => null,
        'web_push_send' => null,
        'web_push_delivered' => null,
        'web_push_open' => null,
        'web_push_bounce' => null,
        'web_push_click' => null,
        'web_push_subscription' => null,
        'web_push_unsubscription' => null,
        'forget_subscription' => null,
        'change_consent' => null,
        'double_optin_resend' => null,
        'double_optedit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'opens' => false,
		'clicks' => false,
		'recommends' => false,
		'conversion' => false,
		'email_send' => false,
		'sms_send' => false,
		'sms_report' => false,
		'voice_send' => false,
		'voice_report' => false,
		'invitation_send' => false,
		'invitation_open' => false,
		'unsubscribe' => false,
		'email_soft_bounce' => false,
		'email_hard_bounce' => false,
		'subscription' => false,
		'resubscription' => false,
		'unsubscribe_reason' => false,
		'facebook_like' => false,
		'social_share' => false,
		'unsubscribe_manual' => false,
		'double_optin' => false,
		'email_spam_complaint' => false,
		'email_field_disable' => false,
		'cellphone_field_disable' => false,
		'phone_field_disable' => false,
		'unsubscribe_api' => false,
		'email_field_enable' => false,
		'cellphone_field_enable' => false,
		'phone_field_enable' => false,
		'edit_subscription' => false,
		'automation_event' => false,
		'push_send' => false,
		'push_delivered' => false,
		'push_error' => false,
		'push_received' => false,
		'push_open' => false,
		'push_canceled' => false,
		'push_unsubscription' => false,
		'reply_to_email' => false,
		'web_push_send' => false,
		'web_push_delivered' => false,
		'web_push_open' => false,
		'web_push_bounce' => false,
		'web_push_click' => false,
		'web_push_subscription' => false,
		'web_push_unsubscription' => false,
		'forget_subscription' => false,
		'change_consent' => false,
		'double_optin_resend' => false,
		'double_optedit' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'opens' => 'opens',
        'clicks' => 'clicks',
        'recommends' => 'recommends',
        'conversion' => 'conversion',
        'email_send' => 'email_send',
        'sms_send' => 'sms_send',
        'sms_report' => 'sms_report',
        'voice_send' => 'voice_send',
        'voice_report' => 'voice_report',
        'invitation_send' => 'invitation_send',
        'invitation_open' => 'invitation_open',
        'unsubscribe' => 'unsubscribe',
        'email_soft_bounce' => 'email_soft_bounce',
        'email_hard_bounce' => 'email_hard_bounce',
        'subscription' => 'subscription',
        'resubscription' => 'resubscription',
        'unsubscribe_reason' => 'unsubscribe_reason',
        'facebook_like' => 'facebook_like',
        'social_share' => 'social_share',
        'unsubscribe_manual' => 'unsubscribe_manual',
        'double_optin' => 'double_optin',
        'email_spam_complaint' => 'email_spam_complaint',
        'email_field_disable' => 'email_field_disable',
        'cellphone_field_disable' => 'cellphone_field_disable',
        'phone_field_disable' => 'phone_field_disable',
        'unsubscribe_api' => 'unsubscribe_api',
        'email_field_enable' => 'email_field_enable',
        'cellphone_field_enable' => 'cellphone_field_enable',
        'phone_field_enable' => 'phone_field_enable',
        'edit_subscription' => 'edit_subscription',
        'automation_event' => 'automation_event',
        'push_send' => 'push_send',
        'push_delivered' => 'push_delivered',
        'push_error' => 'push_error',
        'push_received' => 'push_received',
        'push_open' => 'push_open',
        'push_canceled' => 'push_canceled',
        'push_unsubscription' => 'push_unsubscription',
        'reply_to_email' => 'reply_to_email',
        'web_push_send' => 'web_push_send',
        'web_push_delivered' => 'web_push_delivered',
        'web_push_open' => 'web_push_open',
        'web_push_bounce' => 'web_push_bounce',
        'web_push_click' => 'web_push_click',
        'web_push_subscription' => 'web_push_subscription',
        'web_push_unsubscription' => 'web_push_unsubscription',
        'forget_subscription' => 'forget_subscription',
        'change_consent' => 'change_consent',
        'double_optin_resend' => 'double_optin_resend',
        'double_optedit' => 'double_optedit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'opens' => 'setOpens',
        'clicks' => 'setClicks',
        'recommends' => 'setRecommends',
        'conversion' => 'setConversion',
        'email_send' => 'setEmailSend',
        'sms_send' => 'setSmsSend',
        'sms_report' => 'setSmsReport',
        'voice_send' => 'setVoiceSend',
        'voice_report' => 'setVoiceReport',
        'invitation_send' => 'setInvitationSend',
        'invitation_open' => 'setInvitationOpen',
        'unsubscribe' => 'setUnsubscribe',
        'email_soft_bounce' => 'setEmailSoftBounce',
        'email_hard_bounce' => 'setEmailHardBounce',
        'subscription' => 'setSubscription',
        'resubscription' => 'setResubscription',
        'unsubscribe_reason' => 'setUnsubscribeReason',
        'facebook_like' => 'setFacebookLike',
        'social_share' => 'setSocialShare',
        'unsubscribe_manual' => 'setUnsubscribeManual',
        'double_optin' => 'setDoubleOptin',
        'email_spam_complaint' => 'setEmailSpamComplaint',
        'email_field_disable' => 'setEmailFieldDisable',
        'cellphone_field_disable' => 'setCellphoneFieldDisable',
        'phone_field_disable' => 'setPhoneFieldDisable',
        'unsubscribe_api' => 'setUnsubscribeApi',
        'email_field_enable' => 'setEmailFieldEnable',
        'cellphone_field_enable' => 'setCellphoneFieldEnable',
        'phone_field_enable' => 'setPhoneFieldEnable',
        'edit_subscription' => 'setEditSubscription',
        'automation_event' => 'setAutomationEvent',
        'push_send' => 'setPushSend',
        'push_delivered' => 'setPushDelivered',
        'push_error' => 'setPushError',
        'push_received' => 'setPushReceived',
        'push_open' => 'setPushOpen',
        'push_canceled' => 'setPushCanceled',
        'push_unsubscription' => 'setPushUnsubscription',
        'reply_to_email' => 'setReplyToEmail',
        'web_push_send' => 'setWebPushSend',
        'web_push_delivered' => 'setWebPushDelivered',
        'web_push_open' => 'setWebPushOpen',
        'web_push_bounce' => 'setWebPushBounce',
        'web_push_click' => 'setWebPushClick',
        'web_push_subscription' => 'setWebPushSubscription',
        'web_push_unsubscription' => 'setWebPushUnsubscription',
        'forget_subscription' => 'setForgetSubscription',
        'change_consent' => 'setChangeConsent',
        'double_optin_resend' => 'setDoubleOptinResend',
        'double_optedit' => 'setDoubleOptedit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'opens' => 'getOpens',
        'clicks' => 'getClicks',
        'recommends' => 'getRecommends',
        'conversion' => 'getConversion',
        'email_send' => 'getEmailSend',
        'sms_send' => 'getSmsSend',
        'sms_report' => 'getSmsReport',
        'voice_send' => 'getVoiceSend',
        'voice_report' => 'getVoiceReport',
        'invitation_send' => 'getInvitationSend',
        'invitation_open' => 'getInvitationOpen',
        'unsubscribe' => 'getUnsubscribe',
        'email_soft_bounce' => 'getEmailSoftBounce',
        'email_hard_bounce' => 'getEmailHardBounce',
        'subscription' => 'getSubscription',
        'resubscription' => 'getResubscription',
        'unsubscribe_reason' => 'getUnsubscribeReason',
        'facebook_like' => 'getFacebookLike',
        'social_share' => 'getSocialShare',
        'unsubscribe_manual' => 'getUnsubscribeManual',
        'double_optin' => 'getDoubleOptin',
        'email_spam_complaint' => 'getEmailSpamComplaint',
        'email_field_disable' => 'getEmailFieldDisable',
        'cellphone_field_disable' => 'getCellphoneFieldDisable',
        'phone_field_disable' => 'getPhoneFieldDisable',
        'unsubscribe_api' => 'getUnsubscribeApi',
        'email_field_enable' => 'getEmailFieldEnable',
        'cellphone_field_enable' => 'getCellphoneFieldEnable',
        'phone_field_enable' => 'getPhoneFieldEnable',
        'edit_subscription' => 'getEditSubscription',
        'automation_event' => 'getAutomationEvent',
        'push_send' => 'getPushSend',
        'push_delivered' => 'getPushDelivered',
        'push_error' => 'getPushError',
        'push_received' => 'getPushReceived',
        'push_open' => 'getPushOpen',
        'push_canceled' => 'getPushCanceled',
        'push_unsubscription' => 'getPushUnsubscription',
        'reply_to_email' => 'getReplyToEmail',
        'web_push_send' => 'getWebPushSend',
        'web_push_delivered' => 'getWebPushDelivered',
        'web_push_open' => 'getWebPushOpen',
        'web_push_bounce' => 'getWebPushBounce',
        'web_push_click' => 'getWebPushClick',
        'web_push_subscription' => 'getWebPushSubscription',
        'web_push_unsubscription' => 'getWebPushUnsubscription',
        'forget_subscription' => 'getForgetSubscription',
        'change_consent' => 'getChangeConsent',
        'double_optin_resend' => 'getDoubleOptinResend',
        'double_optedit' => 'getDoubleOptedit'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('opens', $data ?? [], null);
        $this->setIfExists('clicks', $data ?? [], null);
        $this->setIfExists('recommends', $data ?? [], null);
        $this->setIfExists('conversion', $data ?? [], null);
        $this->setIfExists('email_send', $data ?? [], null);
        $this->setIfExists('sms_send', $data ?? [], null);
        $this->setIfExists('sms_report', $data ?? [], null);
        $this->setIfExists('voice_send', $data ?? [], null);
        $this->setIfExists('voice_report', $data ?? [], null);
        $this->setIfExists('invitation_send', $data ?? [], null);
        $this->setIfExists('invitation_open', $data ?? [], null);
        $this->setIfExists('unsubscribe', $data ?? [], null);
        $this->setIfExists('email_soft_bounce', $data ?? [], null);
        $this->setIfExists('email_hard_bounce', $data ?? [], null);
        $this->setIfExists('subscription', $data ?? [], null);
        $this->setIfExists('resubscription', $data ?? [], null);
        $this->setIfExists('unsubscribe_reason', $data ?? [], null);
        $this->setIfExists('facebook_like', $data ?? [], null);
        $this->setIfExists('social_share', $data ?? [], null);
        $this->setIfExists('unsubscribe_manual', $data ?? [], null);
        $this->setIfExists('double_optin', $data ?? [], null);
        $this->setIfExists('email_spam_complaint', $data ?? [], null);
        $this->setIfExists('email_field_disable', $data ?? [], null);
        $this->setIfExists('cellphone_field_disable', $data ?? [], null);
        $this->setIfExists('phone_field_disable', $data ?? [], null);
        $this->setIfExists('unsubscribe_api', $data ?? [], null);
        $this->setIfExists('email_field_enable', $data ?? [], null);
        $this->setIfExists('cellphone_field_enable', $data ?? [], null);
        $this->setIfExists('phone_field_enable', $data ?? [], null);
        $this->setIfExists('edit_subscription', $data ?? [], null);
        $this->setIfExists('automation_event', $data ?? [], null);
        $this->setIfExists('push_send', $data ?? [], null);
        $this->setIfExists('push_delivered', $data ?? [], null);
        $this->setIfExists('push_error', $data ?? [], null);
        $this->setIfExists('push_received', $data ?? [], null);
        $this->setIfExists('push_open', $data ?? [], null);
        $this->setIfExists('push_canceled', $data ?? [], null);
        $this->setIfExists('push_unsubscription', $data ?? [], null);
        $this->setIfExists('reply_to_email', $data ?? [], null);
        $this->setIfExists('web_push_send', $data ?? [], null);
        $this->setIfExists('web_push_delivered', $data ?? [], null);
        $this->setIfExists('web_push_open', $data ?? [], null);
        $this->setIfExists('web_push_bounce', $data ?? [], null);
        $this->setIfExists('web_push_click', $data ?? [], null);
        $this->setIfExists('web_push_subscription', $data ?? [], null);
        $this->setIfExists('web_push_unsubscription', $data ?? [], null);
        $this->setIfExists('forget_subscription', $data ?? [], null);
        $this->setIfExists('change_consent', $data ?? [], null);
        $this->setIfExists('double_optin_resend', $data ?? [], null);
        $this->setIfExists('double_optedit', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['opens'] === null) {
            $invalidProperties[] = "'opens' can't be null";
        }
        if ($this->container['clicks'] === null) {
            $invalidProperties[] = "'clicks' can't be null";
        }
        if ($this->container['recommends'] === null) {
            $invalidProperties[] = "'recommends' can't be null";
        }
        if ($this->container['conversion'] === null) {
            $invalidProperties[] = "'conversion' can't be null";
        }
        if ($this->container['email_send'] === null) {
            $invalidProperties[] = "'email_send' can't be null";
        }
        if ($this->container['sms_send'] === null) {
            $invalidProperties[] = "'sms_send' can't be null";
        }
        if ($this->container['sms_report'] === null) {
            $invalidProperties[] = "'sms_report' can't be null";
        }
        if ($this->container['voice_send'] === null) {
            $invalidProperties[] = "'voice_send' can't be null";
        }
        if ($this->container['voice_report'] === null) {
            $invalidProperties[] = "'voice_report' can't be null";
        }
        if ($this->container['invitation_send'] === null) {
            $invalidProperties[] = "'invitation_send' can't be null";
        }
        if ($this->container['invitation_open'] === null) {
            $invalidProperties[] = "'invitation_open' can't be null";
        }
        if ($this->container['unsubscribe'] === null) {
            $invalidProperties[] = "'unsubscribe' can't be null";
        }
        if ($this->container['email_soft_bounce'] === null) {
            $invalidProperties[] = "'email_soft_bounce' can't be null";
        }
        if ($this->container['email_hard_bounce'] === null) {
            $invalidProperties[] = "'email_hard_bounce' can't be null";
        }
        if ($this->container['subscription'] === null) {
            $invalidProperties[] = "'subscription' can't be null";
        }
        if ($this->container['resubscription'] === null) {
            $invalidProperties[] = "'resubscription' can't be null";
        }
        if ($this->container['unsubscribe_reason'] === null) {
            $invalidProperties[] = "'unsubscribe_reason' can't be null";
        }
        if ($this->container['facebook_like'] === null) {
            $invalidProperties[] = "'facebook_like' can't be null";
        }
        if ($this->container['social_share'] === null) {
            $invalidProperties[] = "'social_share' can't be null";
        }
        if ($this->container['unsubscribe_manual'] === null) {
            $invalidProperties[] = "'unsubscribe_manual' can't be null";
        }
        if ($this->container['double_optin'] === null) {
            $invalidProperties[] = "'double_optin' can't be null";
        }
        if ($this->container['email_spam_complaint'] === null) {
            $invalidProperties[] = "'email_spam_complaint' can't be null";
        }
        if ($this->container['email_field_disable'] === null) {
            $invalidProperties[] = "'email_field_disable' can't be null";
        }
        if ($this->container['cellphone_field_disable'] === null) {
            $invalidProperties[] = "'cellphone_field_disable' can't be null";
        }
        if ($this->container['phone_field_disable'] === null) {
            $invalidProperties[] = "'phone_field_disable' can't be null";
        }
        if ($this->container['unsubscribe_api'] === null) {
            $invalidProperties[] = "'unsubscribe_api' can't be null";
        }
        if ($this->container['email_field_enable'] === null) {
            $invalidProperties[] = "'email_field_enable' can't be null";
        }
        if ($this->container['cellphone_field_enable'] === null) {
            $invalidProperties[] = "'cellphone_field_enable' can't be null";
        }
        if ($this->container['phone_field_enable'] === null) {
            $invalidProperties[] = "'phone_field_enable' can't be null";
        }
        if ($this->container['edit_subscription'] === null) {
            $invalidProperties[] = "'edit_subscription' can't be null";
        }
        if ($this->container['automation_event'] === null) {
            $invalidProperties[] = "'automation_event' can't be null";
        }
        if ($this->container['push_send'] === null) {
            $invalidProperties[] = "'push_send' can't be null";
        }
        if ($this->container['push_delivered'] === null) {
            $invalidProperties[] = "'push_delivered' can't be null";
        }
        if ($this->container['push_error'] === null) {
            $invalidProperties[] = "'push_error' can't be null";
        }
        if ($this->container['push_received'] === null) {
            $invalidProperties[] = "'push_received' can't be null";
        }
        if ($this->container['push_open'] === null) {
            $invalidProperties[] = "'push_open' can't be null";
        }
        if ($this->container['push_canceled'] === null) {
            $invalidProperties[] = "'push_canceled' can't be null";
        }
        if ($this->container['push_unsubscription'] === null) {
            $invalidProperties[] = "'push_unsubscription' can't be null";
        }
        if ($this->container['reply_to_email'] === null) {
            $invalidProperties[] = "'reply_to_email' can't be null";
        }
        if ($this->container['web_push_send'] === null) {
            $invalidProperties[] = "'web_push_send' can't be null";
        }
        if ($this->container['web_push_delivered'] === null) {
            $invalidProperties[] = "'web_push_delivered' can't be null";
        }
        if ($this->container['web_push_open'] === null) {
            $invalidProperties[] = "'web_push_open' can't be null";
        }
        if ($this->container['web_push_bounce'] === null) {
            $invalidProperties[] = "'web_push_bounce' can't be null";
        }
        if ($this->container['web_push_click'] === null) {
            $invalidProperties[] = "'web_push_click' can't be null";
        }
        if ($this->container['web_push_subscription'] === null) {
            $invalidProperties[] = "'web_push_subscription' can't be null";
        }
        if ($this->container['web_push_unsubscription'] === null) {
            $invalidProperties[] = "'web_push_unsubscription' can't be null";
        }
        if ($this->container['forget_subscription'] === null) {
            $invalidProperties[] = "'forget_subscription' can't be null";
        }
        if ($this->container['change_consent'] === null) {
            $invalidProperties[] = "'change_consent' can't be null";
        }
        if ($this->container['double_optin_resend'] === null) {
            $invalidProperties[] = "'double_optin_resend' can't be null";
        }
        if ($this->container['double_optedit'] === null) {
            $invalidProperties[] = "'double_optedit' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets opens
     *
     * @return bool
     */
    public function getOpens()
    {
        return $this->container['opens'];
    }

    /**
     * Sets opens
     *
     * @param bool $opens True to include opens, false otherwise
     *
     * @return self
     */
    public function setOpens($opens)
    {

        if (is_null($opens)) {
            throw new \InvalidArgumentException('non-nullable opens cannot be null');
        }

        $this->container['opens'] = $opens;

        return $this;
    }

    /**
     * Gets clicks
     *
     * @return bool
     */
    public function getClicks()
    {
        return $this->container['clicks'];
    }

    /**
     * Sets clicks
     *
     * @param bool $clicks True to include clicks, false otherwise
     *
     * @return self
     */
    public function setClicks($clicks)
    {

        if (is_null($clicks)) {
            throw new \InvalidArgumentException('non-nullable clicks cannot be null');
        }

        $this->container['clicks'] = $clicks;

        return $this;
    }

    /**
     * Gets recommends
     *
     * @return bool
     */
    public function getRecommends()
    {
        return $this->container['recommends'];
    }

    /**
     * Sets recommends
     *
     * @param bool $recommends True to include recommends, false otherwise
     *
     * @return self
     */
    public function setRecommends($recommends)
    {

        if (is_null($recommends)) {
            throw new \InvalidArgumentException('non-nullable recommends cannot be null');
        }

        $this->container['recommends'] = $recommends;

        return $this;
    }

    /**
     * Gets conversion
     *
     * @return bool
     */
    public function getConversion()
    {
        return $this->container['conversion'];
    }

    /**
     * Sets conversion
     *
     * @param bool $conversion True to include convertions, false otherwise
     *
     * @return self
     */
    public function setConversion($conversion)
    {

        if (is_null($conversion)) {
            throw new \InvalidArgumentException('non-nullable conversion cannot be null');
        }

        $this->container['conversion'] = $conversion;

        return $this;
    }

    /**
     * Gets email_send
     *
     * @return bool
     */
    public function getEmailSend()
    {
        return $this->container['email_send'];
    }

    /**
     * Sets email_send
     *
     * @param bool $email_send True to include email sends, false otherwise
     *
     * @return self
     */
    public function setEmailSend($email_send)
    {

        if (is_null($email_send)) {
            throw new \InvalidArgumentException('non-nullable email_send cannot be null');
        }

        $this->container['email_send'] = $email_send;

        return $this;
    }

    /**
     * Gets sms_send
     *
     * @return bool
     */
    public function getSmsSend()
    {
        return $this->container['sms_send'];
    }

    /**
     * Sets sms_send
     *
     * @param bool $sms_send True to include sms sends, false otherwise
     *
     * @return self
     */
    public function setSmsSend($sms_send)
    {

        if (is_null($sms_send)) {
            throw new \InvalidArgumentException('non-nullable sms_send cannot be null');
        }

        $this->container['sms_send'] = $sms_send;

        return $this;
    }

    /**
     * Gets sms_report
     *
     * @return bool
     */
    public function getSmsReport()
    {
        return $this->container['sms_report'];
    }

    /**
     * Sets sms_report
     *
     * @param bool $sms_report True to include sms report, false otherwise
     *
     * @return self
     */
    public function setSmsReport($sms_report)
    {

        if (is_null($sms_report)) {
            throw new \InvalidArgumentException('non-nullable sms_report cannot be null');
        }

        $this->container['sms_report'] = $sms_report;

        return $this;
    }

    /**
     * Gets voice_send
     *
     * @return bool
     */
    public function getVoiceSend()
    {
        return $this->container['voice_send'];
    }

    /**
     * Sets voice_send
     *
     * @param bool $voice_send True to include voice sends, false otherwise
     *
     * @return self
     */
    public function setVoiceSend($voice_send)
    {

        if (is_null($voice_send)) {
            throw new \InvalidArgumentException('non-nullable voice_send cannot be null');
        }

        $this->container['voice_send'] = $voice_send;

        return $this;
    }

    /**
     * Gets voice_report
     *
     * @return bool
     */
    public function getVoiceReport()
    {
        return $this->container['voice_report'];
    }

    /**
     * Sets voice_report
     *
     * @param bool $voice_report True to include voice report, false otherwise
     *
     * @return self
     */
    public function setVoiceReport($voice_report)
    {

        if (is_null($voice_report)) {
            throw new \InvalidArgumentException('non-nullable voice_report cannot be null');
        }

        $this->container['voice_report'] = $voice_report;

        return $this;
    }

    /**
     * Gets invitation_send
     *
     * @return bool
     */
    public function getInvitationSend()
    {
        return $this->container['invitation_send'];
    }

    /**
     * Sets invitation_send
     *
     * @param bool $invitation_send True to include invitation sends, false otherwise
     *
     * @return self
     */
    public function setInvitationSend($invitation_send)
    {

        if (is_null($invitation_send)) {
            throw new \InvalidArgumentException('non-nullable invitation_send cannot be null');
        }

        $this->container['invitation_send'] = $invitation_send;

        return $this;
    }

    /**
     * Gets invitation_open
     *
     * @return bool
     */
    public function getInvitationOpen()
    {
        return $this->container['invitation_open'];
    }

    /**
     * Sets invitation_open
     *
     * @param bool $invitation_open True to include invitation opens, false otherwise
     *
     * @return self
     */
    public function setInvitationOpen($invitation_open)
    {

        if (is_null($invitation_open)) {
            throw new \InvalidArgumentException('non-nullable invitation_open cannot be null');
        }

        $this->container['invitation_open'] = $invitation_open;

        return $this;
    }

    /**
     * Gets unsubscribe
     *
     * @return bool
     */
    public function getUnsubscribe()
    {
        return $this->container['unsubscribe'];
    }

    /**
     * Sets unsubscribe
     *
     * @param bool $unsubscribe True to include unsubscriptions, false otherwise
     *
     * @return self
     */
    public function setUnsubscribe($unsubscribe)
    {

        if (is_null($unsubscribe)) {
            throw new \InvalidArgumentException('non-nullable unsubscribe cannot be null');
        }

        $this->container['unsubscribe'] = $unsubscribe;

        return $this;
    }

    /**
     * Gets email_soft_bounce
     *
     * @return bool
     */
    public function getEmailSoftBounce()
    {
        return $this->container['email_soft_bounce'];
    }

    /**
     * Sets email_soft_bounce
     *
     * @param bool $email_soft_bounce True to include email soft bounces, false otherwise
     *
     * @return self
     */
    public function setEmailSoftBounce($email_soft_bounce)
    {

        if (is_null($email_soft_bounce)) {
            throw new \InvalidArgumentException('non-nullable email_soft_bounce cannot be null');
        }

        $this->container['email_soft_bounce'] = $email_soft_bounce;

        return $this;
    }

    /**
     * Gets email_hard_bounce
     *
     * @return bool
     */
    public function getEmailHardBounce()
    {
        return $this->container['email_hard_bounce'];
    }

    /**
     * Sets email_hard_bounce
     *
     * @param bool $email_hard_bounce True to include email hard bounces, false otherwise
     *
     * @return self
     */
    public function setEmailHardBounce($email_hard_bounce)
    {

        if (is_null($email_hard_bounce)) {
            throw new \InvalidArgumentException('non-nullable email_hard_bounce cannot be null');
        }

        $this->container['email_hard_bounce'] = $email_hard_bounce;

        return $this;
    }

    /**
     * Gets subscription
     *
     * @return bool
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param bool $subscription True to include subscriptions, false otherwise
     *
     * @return self
     */
    public function setSubscription($subscription)
    {

        if (is_null($subscription)) {
            throw new \InvalidArgumentException('non-nullable subscription cannot be null');
        }

        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets resubscription
     *
     * @return bool
     */
    public function getResubscription()
    {
        return $this->container['resubscription'];
    }

    /**
     * Sets resubscription
     *
     * @param bool $resubscription True to include re-subscriptions, false otherwise
     *
     * @return self
     */
    public function setResubscription($resubscription)
    {

        if (is_null($resubscription)) {
            throw new \InvalidArgumentException('non-nullable resubscription cannot be null');
        }

        $this->container['resubscription'] = $resubscription;

        return $this;
    }

    /**
     * Gets unsubscribe_reason
     *
     * @return bool
     */
    public function getUnsubscribeReason()
    {
        return $this->container['unsubscribe_reason'];
    }

    /**
     * Sets unsubscribe_reason
     *
     * @param bool $unsubscribe_reason True to include unsubscription reason, false otherwise
     *
     * @return self
     */
    public function setUnsubscribeReason($unsubscribe_reason)
    {

        if (is_null($unsubscribe_reason)) {
            throw new \InvalidArgumentException('non-nullable unsubscribe_reason cannot be null');
        }

        $this->container['unsubscribe_reason'] = $unsubscribe_reason;

        return $this;
    }

    /**
     * Gets facebook_like
     *
     * @return bool
     */
    public function getFacebookLike()
    {
        return $this->container['facebook_like'];
    }

    /**
     * Sets facebook_like
     *
     * @param bool $facebook_like True to include facebook likes, false otherwise
     *
     * @return self
     */
    public function setFacebookLike($facebook_like)
    {

        if (is_null($facebook_like)) {
            throw new \InvalidArgumentException('non-nullable facebook_like cannot be null');
        }

        $this->container['facebook_like'] = $facebook_like;

        return $this;
    }

    /**
     * Gets social_share
     *
     * @return bool
     */
    public function getSocialShare()
    {
        return $this->container['social_share'];
    }

    /**
     * Sets social_share
     *
     * @param bool $social_share True to include social shares, false otherwise
     *
     * @return self
     */
    public function setSocialShare($social_share)
    {

        if (is_null($social_share)) {
            throw new \InvalidArgumentException('non-nullable social_share cannot be null');
        }

        $this->container['social_share'] = $social_share;

        return $this;
    }

    /**
     * Gets unsubscribe_manual
     *
     * @return bool
     */
    public function getUnsubscribeManual()
    {
        return $this->container['unsubscribe_manual'];
    }

    /**
     * Sets unsubscribe_manual
     *
     * @param bool $unsubscribe_manual True to include manual unsubscriptions, false otherwise
     *
     * @return self
     */
    public function setUnsubscribeManual($unsubscribe_manual)
    {

        if (is_null($unsubscribe_manual)) {
            throw new \InvalidArgumentException('non-nullable unsubscribe_manual cannot be null');
        }

        $this->container['unsubscribe_manual'] = $unsubscribe_manual;

        return $this;
    }

    /**
     * Gets double_optin
     *
     * @return bool
     */
    public function getDoubleOptin()
    {
        return $this->container['double_optin'];
    }

    /**
     * Sets double_optin
     *
     * @param bool $double_optin True to include double optins, false otherwise
     *
     * @return self
     */
    public function setDoubleOptin($double_optin)
    {

        if (is_null($double_optin)) {
            throw new \InvalidArgumentException('non-nullable double_optin cannot be null');
        }

        $this->container['double_optin'] = $double_optin;

        return $this;
    }

    /**
     * Gets email_spam_complaint
     *
     * @return bool
     */
    public function getEmailSpamComplaint()
    {
        return $this->container['email_spam_complaint'];
    }

    /**
     * Sets email_spam_complaint
     *
     * @param bool $email_spam_complaint True to include spam complaints, false otherwise
     *
     * @return self
     */
    public function setEmailSpamComplaint($email_spam_complaint)
    {

        if (is_null($email_spam_complaint)) {
            throw new \InvalidArgumentException('non-nullable email_spam_complaint cannot be null');
        }

        $this->container['email_spam_complaint'] = $email_spam_complaint;

        return $this;
    }

    /**
     * Gets email_field_disable
     *
     * @return bool
     */
    public function getEmailFieldDisable()
    {
        return $this->container['email_field_disable'];
    }

    /**
     * Sets email_field_disable
     *
     * @param bool $email_field_disable True to include email field disable, false otherwise
     *
     * @return self
     */
    public function setEmailFieldDisable($email_field_disable)
    {

        if (is_null($email_field_disable)) {
            throw new \InvalidArgumentException('non-nullable email_field_disable cannot be null');
        }

        $this->container['email_field_disable'] = $email_field_disable;

        return $this;
    }

    /**
     * Gets cellphone_field_disable
     *
     * @return bool
     */
    public function getCellphoneFieldDisable()
    {
        return $this->container['cellphone_field_disable'];
    }

    /**
     * Sets cellphone_field_disable
     *
     * @param bool $cellphone_field_disable True to include cellphone field disable, false otherwise
     *
     * @return self
     */
    public function setCellphoneFieldDisable($cellphone_field_disable)
    {

        if (is_null($cellphone_field_disable)) {
            throw new \InvalidArgumentException('non-nullable cellphone_field_disable cannot be null');
        }

        $this->container['cellphone_field_disable'] = $cellphone_field_disable;

        return $this;
    }

    /**
     * Gets phone_field_disable
     *
     * @return bool
     */
    public function getPhoneFieldDisable()
    {
        return $this->container['phone_field_disable'];
    }

    /**
     * Sets phone_field_disable
     *
     * @param bool $phone_field_disable True to include phone field disable, false otherwise
     *
     * @return self
     */
    public function setPhoneFieldDisable($phone_field_disable)
    {

        if (is_null($phone_field_disable)) {
            throw new \InvalidArgumentException('non-nullable phone_field_disable cannot be null');
        }

        $this->container['phone_field_disable'] = $phone_field_disable;

        return $this;
    }

    /**
     * Gets unsubscribe_api
     *
     * @return bool
     */
    public function getUnsubscribeApi()
    {
        return $this->container['unsubscribe_api'];
    }

    /**
     * Sets unsubscribe_api
     *
     * @param bool $unsubscribe_api True to include api unsubscriptions, false otherwise
     *
     * @return self
     */
    public function setUnsubscribeApi($unsubscribe_api)
    {

        if (is_null($unsubscribe_api)) {
            throw new \InvalidArgumentException('non-nullable unsubscribe_api cannot be null');
        }

        $this->container['unsubscribe_api'] = $unsubscribe_api;

        return $this;
    }

    /**
     * Gets email_field_enable
     *
     * @return bool
     */
    public function getEmailFieldEnable()
    {
        return $this->container['email_field_enable'];
    }

    /**
     * Sets email_field_enable
     *
     * @param bool $email_field_enable True to include email field enable, false otherwise
     *
     * @return self
     */
    public function setEmailFieldEnable($email_field_enable)
    {

        if (is_null($email_field_enable)) {
            throw new \InvalidArgumentException('non-nullable email_field_enable cannot be null');
        }

        $this->container['email_field_enable'] = $email_field_enable;

        return $this;
    }

    /**
     * Gets cellphone_field_enable
     *
     * @return bool
     */
    public function getCellphoneFieldEnable()
    {
        return $this->container['cellphone_field_enable'];
    }

    /**
     * Sets cellphone_field_enable
     *
     * @param bool $cellphone_field_enable True to include cellphone field enable, false otherwise
     *
     * @return self
     */
    public function setCellphoneFieldEnable($cellphone_field_enable)
    {

        if (is_null($cellphone_field_enable)) {
            throw new \InvalidArgumentException('non-nullable cellphone_field_enable cannot be null');
        }

        $this->container['cellphone_field_enable'] = $cellphone_field_enable;

        return $this;
    }

    /**
     * Gets phone_field_enable
     *
     * @return bool
     */
    public function getPhoneFieldEnable()
    {
        return $this->container['phone_field_enable'];
    }

    /**
     * Sets phone_field_enable
     *
     * @param bool $phone_field_enable True to include phone field enable, false otherwise
     *
     * @return self
     */
    public function setPhoneFieldEnable($phone_field_enable)
    {

        if (is_null($phone_field_enable)) {
            throw new \InvalidArgumentException('non-nullable phone_field_enable cannot be null');
        }

        $this->container['phone_field_enable'] = $phone_field_enable;

        return $this;
    }

    /**
     * Gets edit_subscription
     *
     * @return bool
     */
    public function getEditSubscription()
    {
        return $this->container['edit_subscription'];
    }

    /**
     * Sets edit_subscription
     *
     * @param bool $edit_subscription True to include edit subscriptions, false otherwise
     *
     * @return self
     */
    public function setEditSubscription($edit_subscription)
    {

        if (is_null($edit_subscription)) {
            throw new \InvalidArgumentException('non-nullable edit_subscription cannot be null');
        }

        $this->container['edit_subscription'] = $edit_subscription;

        return $this;
    }

    /**
     * Gets automation_event
     *
     * @return bool
     */
    public function getAutomationEvent()
    {
        return $this->container['automation_event'];
    }

    /**
     * Sets automation_event
     *
     * @param bool $automation_event True to include automation events, false otherwise
     *
     * @return self
     */
    public function setAutomationEvent($automation_event)
    {

        if (is_null($automation_event)) {
            throw new \InvalidArgumentException('non-nullable automation_event cannot be null');
        }

        $this->container['automation_event'] = $automation_event;

        return $this;
    }

    /**
     * Gets push_send
     *
     * @return bool
     */
    public function getPushSend()
    {
        return $this->container['push_send'];
    }

    /**
     * Sets push_send
     *
     * @param bool $push_send True to include push events, false otherwise
     *
     * @return self
     */
    public function setPushSend($push_send)
    {

        if (is_null($push_send)) {
            throw new \InvalidArgumentException('non-nullable push_send cannot be null');
        }

        $this->container['push_send'] = $push_send;

        return $this;
    }

    /**
     * Gets push_delivered
     *
     * @return bool
     */
    public function getPushDelivered()
    {
        return $this->container['push_delivered'];
    }

    /**
     * Sets push_delivered
     *
     * @param bool $push_delivered True to include push delivered, false otherwise
     *
     * @return self
     */
    public function setPushDelivered($push_delivered)
    {

        if (is_null($push_delivered)) {
            throw new \InvalidArgumentException('non-nullable push_delivered cannot be null');
        }

        $this->container['push_delivered'] = $push_delivered;

        return $this;
    }

    /**
     * Gets push_error
     *
     * @return bool
     */
    public function getPushError()
    {
        return $this->container['push_error'];
    }

    /**
     * Sets push_error
     *
     * @param bool $push_error True to include push error, false otherwise
     *
     * @return self
     */
    public function setPushError($push_error)
    {

        if (is_null($push_error)) {
            throw new \InvalidArgumentException('non-nullable push_error cannot be null');
        }

        $this->container['push_error'] = $push_error;

        return $this;
    }

    /**
     * Gets push_received
     *
     * @return bool
     */
    public function getPushReceived()
    {
        return $this->container['push_received'];
    }

    /**
     * Sets push_received
     *
     * @param bool $push_received True to include push received, false otherwise
     *
     * @return self
     */
    public function setPushReceived($push_received)
    {

        if (is_null($push_received)) {
            throw new \InvalidArgumentException('non-nullable push_received cannot be null');
        }

        $this->container['push_received'] = $push_received;

        return $this;
    }

    /**
     * Gets push_open
     *
     * @return bool
     */
    public function getPushOpen()
    {
        return $this->container['push_open'];
    }

    /**
     * Sets push_open
     *
     * @param bool $push_open True to include push open, false otherwise
     *
     * @return self
     */
    public function setPushOpen($push_open)
    {

        if (is_null($push_open)) {
            throw new \InvalidArgumentException('non-nullable push_open cannot be null');
        }

        $this->container['push_open'] = $push_open;

        return $this;
    }

    /**
     * Gets push_canceled
     *
     * @return bool
     */
    public function getPushCanceled()
    {
        return $this->container['push_canceled'];
    }

    /**
     * Sets push_canceled
     *
     * @param bool $push_canceled True to include push canceled, false otherwise
     *
     * @return self
     */
    public function setPushCanceled($push_canceled)
    {

        if (is_null($push_canceled)) {
            throw new \InvalidArgumentException('non-nullable push_canceled cannot be null');
        }

        $this->container['push_canceled'] = $push_canceled;

        return $this;
    }

    /**
     * Gets push_unsubscription
     *
     * @return bool
     */
    public function getPushUnsubscription()
    {
        return $this->container['push_unsubscription'];
    }

    /**
     * Sets push_unsubscription
     *
     * @param bool $push_unsubscription True to include push unsubscriptions, false otherwise
     *
     * @return self
     */
    public function setPushUnsubscription($push_unsubscription)
    {

        if (is_null($push_unsubscription)) {
            throw new \InvalidArgumentException('non-nullable push_unsubscription cannot be null');
        }

        $this->container['push_unsubscription'] = $push_unsubscription;

        return $this;
    }

    /**
     * Gets reply_to_email
     *
     * @return bool
     */
    public function getReplyToEmail()
    {
        return $this->container['reply_to_email'];
    }

    /**
     * Sets reply_to_email
     *
     * @param bool $reply_to_email True to include reply to email, false otherwise
     *
     * @return self
     */
    public function setReplyToEmail($reply_to_email)
    {

        if (is_null($reply_to_email)) {
            throw new \InvalidArgumentException('non-nullable reply_to_email cannot be null');
        }

        $this->container['reply_to_email'] = $reply_to_email;

        return $this;
    }

    /**
     * Gets web_push_send
     *
     * @return bool
     */
    public function getWebPushSend()
    {
        return $this->container['web_push_send'];
    }

    /**
     * Sets web_push_send
     *
     * @param bool $web_push_send True to include web push send, false otherwise
     *
     * @return self
     */
    public function setWebPushSend($web_push_send)
    {

        if (is_null($web_push_send)) {
            throw new \InvalidArgumentException('non-nullable web_push_send cannot be null');
        }

        $this->container['web_push_send'] = $web_push_send;

        return $this;
    }

    /**
     * Gets web_push_delivered
     *
     * @return bool
     */
    public function getWebPushDelivered()
    {
        return $this->container['web_push_delivered'];
    }

    /**
     * Sets web_push_delivered
     *
     * @param bool $web_push_delivered True to include web push delivered, false otherwise
     *
     * @return self
     */
    public function setWebPushDelivered($web_push_delivered)
    {

        if (is_null($web_push_delivered)) {
            throw new \InvalidArgumentException('non-nullable web_push_delivered cannot be null');
        }

        $this->container['web_push_delivered'] = $web_push_delivered;

        return $this;
    }

    /**
     * Gets web_push_open
     *
     * @return bool
     */
    public function getWebPushOpen()
    {
        return $this->container['web_push_open'];
    }

    /**
     * Sets web_push_open
     *
     * @param bool $web_push_open True to include web push open, false otherwise
     *
     * @return self
     */
    public function setWebPushOpen($web_push_open)
    {

        if (is_null($web_push_open)) {
            throw new \InvalidArgumentException('non-nullable web_push_open cannot be null');
        }

        $this->container['web_push_open'] = $web_push_open;

        return $this;
    }

    /**
     * Gets web_push_bounce
     *
     * @return bool
     */
    public function getWebPushBounce()
    {
        return $this->container['web_push_bounce'];
    }

    /**
     * Sets web_push_bounce
     *
     * @param bool $web_push_bounce True to include web push bounces, false otherwise
     *
     * @return self
     */
    public function setWebPushBounce($web_push_bounce)
    {

        if (is_null($web_push_bounce)) {
            throw new \InvalidArgumentException('non-nullable web_push_bounce cannot be null');
        }

        $this->container['web_push_bounce'] = $web_push_bounce;

        return $this;
    }

    /**
     * Gets web_push_click
     *
     * @return bool
     */
    public function getWebPushClick()
    {
        return $this->container['web_push_click'];
    }

    /**
     * Sets web_push_click
     *
     * @param bool $web_push_click True to include web push clicks, false otherwise
     *
     * @return self
     */
    public function setWebPushClick($web_push_click)
    {

        if (is_null($web_push_click)) {
            throw new \InvalidArgumentException('non-nullable web_push_click cannot be null');
        }

        $this->container['web_push_click'] = $web_push_click;

        return $this;
    }

    /**
     * Gets web_push_subscription
     *
     * @return bool
     */
    public function getWebPushSubscription()
    {
        return $this->container['web_push_subscription'];
    }

    /**
     * Sets web_push_subscription
     *
     * @param bool $web_push_subscription True to include web push subscriptions, false otherwise
     *
     * @return self
     */
    public function setWebPushSubscription($web_push_subscription)
    {

        if (is_null($web_push_subscription)) {
            throw new \InvalidArgumentException('non-nullable web_push_subscription cannot be null');
        }

        $this->container['web_push_subscription'] = $web_push_subscription;

        return $this;
    }

    /**
     * Gets web_push_unsubscription
     *
     * @return bool
     */
    public function getWebPushUnsubscription()
    {
        return $this->container['web_push_unsubscription'];
    }

    /**
     * Sets web_push_unsubscription
     *
     * @param bool $web_push_unsubscription True to include web push unsubscriptions, false otherwise
     *
     * @return self
     */
    public function setWebPushUnsubscription($web_push_unsubscription)
    {

        if (is_null($web_push_unsubscription)) {
            throw new \InvalidArgumentException('non-nullable web_push_unsubscription cannot be null');
        }

        $this->container['web_push_unsubscription'] = $web_push_unsubscription;

        return $this;
    }

    /**
     * Gets forget_subscription
     *
     * @return bool
     */
    public function getForgetSubscription()
    {
        return $this->container['forget_subscription'];
    }

    /**
     * Sets forget_subscription
     *
     * @param bool $forget_subscription True to include forget subscriptions, false otherwise
     *
     * @return self
     */
    public function setForgetSubscription($forget_subscription)
    {

        if (is_null($forget_subscription)) {
            throw new \InvalidArgumentException('non-nullable forget_subscription cannot be null');
        }

        $this->container['forget_subscription'] = $forget_subscription;

        return $this;
    }

    /**
     * Gets change_consent
     *
     * @return bool
     */
    public function getChangeConsent()
    {
        return $this->container['change_consent'];
    }

    /**
     * Sets change_consent
     *
     * @param bool $change_consent True to include consent change, false otherwise
     *
     * @return self
     */
    public function setChangeConsent($change_consent)
    {

        if (is_null($change_consent)) {
            throw new \InvalidArgumentException('non-nullable change_consent cannot be null');
        }

        $this->container['change_consent'] = $change_consent;

        return $this;
    }

    /**
     * Gets double_optin_resend
     *
     * @return bool
     */
    public function getDoubleOptinResend()
    {
        return $this->container['double_optin_resend'];
    }

    /**
     * Sets double_optin_resend
     *
     * @param bool $double_optin_resend True to include optin resends, false otherwise
     *
     * @return self
     */
    public function setDoubleOptinResend($double_optin_resend)
    {

        if (is_null($double_optin_resend)) {
            throw new \InvalidArgumentException('non-nullable double_optin_resend cannot be null');
        }

        $this->container['double_optin_resend'] = $double_optin_resend;

        return $this;
    }

    /**
     * Gets double_optedit
     *
     * @return bool
     */
    public function getDoubleOptedit()
    {
        return $this->container['double_optedit'];
    }

    /**
     * Sets double_optedit
     *
     * @param bool $double_optedit True to include double optedit, false otherwise
     *
     * @return self
     */
    public function setDoubleOptedit($double_optedit)
    {

        if (is_null($double_optedit)) {
            throw new \InvalidArgumentException('non-nullable double_optedit cannot be null');
        }

        $this->container['double_optedit'] = $double_optedit;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


