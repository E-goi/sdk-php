<?php
/**
 * ContactInsideBase
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
 * ContactInsideBase Class Doc Comment
 *
 * @category Class
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContactInsideBase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContactInsideBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contact_id' => 'string',
        'status' => 'string',
        'consent' => 'string',
        'consent_date' => '\DateTime',
        'subscription_method' => 'string',
        'subscription_date' => '\DateTime',
        'subscription_form' => 'int',
        'unsubscription_method' => 'string',
        'unsubscription_reason' => 'string',
        'unsubscription_observation' => 'string',
        'unsubscription_date' => '\DateTime',
        'change_date' => '\DateTime',
        'first_name' => 'string',
        'last_name' => 'string',
        'birth_date' => '\DateTime',
        'language' => '\EgoiClient\EgoiModel\Language',
        'email' => 'string',
        'email_status' => 'string',
        'cellphone' => 'string',
        'cellphone_status' => 'string',
        'phone' => 'string',
        'phone_status' => 'string',
        'push_token_android' => '\EgoiClient\EgoiModel\ContactBaseWithStatusNoRemovedFieldsSchemaBasePushTokenAndroidInner[]',
        'push_token_ios' => '\EgoiClient\EgoiModel\ContactBaseWithStatusNoRemovedFieldsSchemaBasePushTokenIosInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contact_id' => null,
        'status' => null,
        'consent' => null,
        'consent_date' => 'date-time',
        'subscription_method' => null,
        'subscription_date' => 'date-time',
        'subscription_form' => null,
        'unsubscription_method' => null,
        'unsubscription_reason' => null,
        'unsubscription_observation' => null,
        'unsubscription_date' => 'date-time',
        'change_date' => 'date',
        'first_name' => null,
        'last_name' => null,
        'birth_date' => 'date',
        'language' => null,
        'email' => null,
        'email_status' => null,
        'cellphone' => null,
        'cellphone_status' => null,
        'phone' => null,
        'phone_status' => null,
        'push_token_android' => null,
        'push_token_ios' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'contact_id' => false,
		'status' => false,
		'consent' => false,
		'consent_date' => false,
		'subscription_method' => false,
		'subscription_date' => false,
		'subscription_form' => false,
		'unsubscription_method' => false,
		'unsubscription_reason' => false,
		'unsubscription_observation' => false,
		'unsubscription_date' => false,
		'change_date' => false,
		'first_name' => false,
		'last_name' => false,
		'birth_date' => false,
		'language' => false,
		'email' => false,
		'email_status' => false,
		'cellphone' => false,
		'cellphone_status' => false,
		'phone' => false,
		'phone_status' => false,
		'push_token_android' => false,
		'push_token_ios' => false
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
        'contact_id' => 'contact_id',
        'status' => 'status',
        'consent' => 'consent',
        'consent_date' => 'consent_date',
        'subscription_method' => 'subscription_method',
        'subscription_date' => 'subscription_date',
        'subscription_form' => 'subscription_form',
        'unsubscription_method' => 'unsubscription_method',
        'unsubscription_reason' => 'unsubscription_reason',
        'unsubscription_observation' => 'unsubscription_observation',
        'unsubscription_date' => 'unsubscription_date',
        'change_date' => 'change_date',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'birth_date' => 'birth_date',
        'language' => 'language',
        'email' => 'email',
        'email_status' => 'email_status',
        'cellphone' => 'cellphone',
        'cellphone_status' => 'cellphone_status',
        'phone' => 'phone',
        'phone_status' => 'phone_status',
        'push_token_android' => 'push_token_android',
        'push_token_ios' => 'push_token_ios'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_id' => 'setContactId',
        'status' => 'setStatus',
        'consent' => 'setConsent',
        'consent_date' => 'setConsentDate',
        'subscription_method' => 'setSubscriptionMethod',
        'subscription_date' => 'setSubscriptionDate',
        'subscription_form' => 'setSubscriptionForm',
        'unsubscription_method' => 'setUnsubscriptionMethod',
        'unsubscription_reason' => 'setUnsubscriptionReason',
        'unsubscription_observation' => 'setUnsubscriptionObservation',
        'unsubscription_date' => 'setUnsubscriptionDate',
        'change_date' => 'setChangeDate',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'birth_date' => 'setBirthDate',
        'language' => 'setLanguage',
        'email' => 'setEmail',
        'email_status' => 'setEmailStatus',
        'cellphone' => 'setCellphone',
        'cellphone_status' => 'setCellphoneStatus',
        'phone' => 'setPhone',
        'phone_status' => 'setPhoneStatus',
        'push_token_android' => 'setPushTokenAndroid',
        'push_token_ios' => 'setPushTokenIos'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_id' => 'getContactId',
        'status' => 'getStatus',
        'consent' => 'getConsent',
        'consent_date' => 'getConsentDate',
        'subscription_method' => 'getSubscriptionMethod',
        'subscription_date' => 'getSubscriptionDate',
        'subscription_form' => 'getSubscriptionForm',
        'unsubscription_method' => 'getUnsubscriptionMethod',
        'unsubscription_reason' => 'getUnsubscriptionReason',
        'unsubscription_observation' => 'getUnsubscriptionObservation',
        'unsubscription_date' => 'getUnsubscriptionDate',
        'change_date' => 'getChangeDate',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'birth_date' => 'getBirthDate',
        'language' => 'getLanguage',
        'email' => 'getEmail',
        'email_status' => 'getEmailStatus',
        'cellphone' => 'getCellphone',
        'cellphone_status' => 'getCellphoneStatus',
        'phone' => 'getPhone',
        'phone_status' => 'getPhoneStatus',
        'push_token_android' => 'getPushTokenAndroid',
        'push_token_ios' => 'getPushTokenIos'
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

    public const STATUS_ACTIVE = 'active';
    public const STATUS_INACTIVE = 'inactive';
    public const STATUS_REMOVED = 'removed';
    public const STATUS_UNCONFIRMED = 'unconfirmed';
    public const CONSENT_ANY = 'any';
    public const CONSENT_CONSENT = 'consent';
    public const CONSENT_CONTRACT = 'contract';
    public const CONSENT_LEGITIMATE_INTEREST = 'legitimate_interest';
    public const CONSENT_NONE = 'none';
    public const CONSENT_PROTECT_VITAL_INTERESTS = 'protect_vital_interests';
    public const CONSENT_PUBLIC_INTERESTS = 'public_interests';
    public const CONSENT_REQUIRED_BY_LAW = 'required_by_law';
    public const CONSENT_WITHDRAWN = 'withdrawn';
    public const SUBSCRIPTION_METHOD_MANUAL = 'manual';
    public const SUBSCRIPTION_METHOD_FORM = 'form';
    public const SUBSCRIPTION_METHOD_IMPORTED = 'imported';
    public const SUBSCRIPTION_METHOD_REFERRAL = 'referral';
    public const SUBSCRIPTION_METHOD_API = 'api';
    public const UNSUBSCRIPTION_METHOD_MANUAL = 'manual';
    public const UNSUBSCRIPTION_METHOD_FORM = 'form';
    public const UNSUBSCRIPTION_METHOD_UNSUBSCRIBE_LINK = 'unsubscribe_link';
    public const UNSUBSCRIPTION_METHOD_BOUNCE = 'bounce';
    public const UNSUBSCRIPTION_METHOD_API = 'api';
    public const UNSUBSCRIPTION_METHOD_EMPTY = '';
    public const UNSUBSCRIPTION_REASON_NOT_INTERESTED = 'not_interested';
    public const UNSUBSCRIPTION_REASON_LACK_OF_TIME = 'lack_of_time';
    public const UNSUBSCRIPTION_REASON_EMAIL_ADDRESS_CHANGE = 'email_address_change';
    public const UNSUBSCRIPTION_REASON_SPAM = 'spam';
    public const UNSUBSCRIPTION_REASON_OTHER = 'other';
    public const UNSUBSCRIPTION_REASON_EMPTY = '';
    public const EMAIL_STATUS_ACTIVE = 'active';
    public const EMAIL_STATUS_INACTIVE = 'inactive';
    public const CELLPHONE_STATUS_ACTIVE = 'active';
    public const CELLPHONE_STATUS_INACTIVE = 'inactive';
    public const PHONE_STATUS_ACTIVE = 'active';
    public const PHONE_STATUS_INACTIVE = 'inactive';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
            self::STATUS_REMOVED,
            self::STATUS_UNCONFIRMED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConsentAllowableValues()
    {
        return [
            self::CONSENT_ANY,
            self::CONSENT_CONSENT,
            self::CONSENT_CONTRACT,
            self::CONSENT_LEGITIMATE_INTEREST,
            self::CONSENT_NONE,
            self::CONSENT_PROTECT_VITAL_INTERESTS,
            self::CONSENT_PUBLIC_INTERESTS,
            self::CONSENT_REQUIRED_BY_LAW,
            self::CONSENT_WITHDRAWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubscriptionMethodAllowableValues()
    {
        return [
            self::SUBSCRIPTION_METHOD_MANUAL,
            self::SUBSCRIPTION_METHOD_FORM,
            self::SUBSCRIPTION_METHOD_IMPORTED,
            self::SUBSCRIPTION_METHOD_REFERRAL,
            self::SUBSCRIPTION_METHOD_API,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnsubscriptionMethodAllowableValues()
    {
        return [
            self::UNSUBSCRIPTION_METHOD_MANUAL,
            self::UNSUBSCRIPTION_METHOD_FORM,
            self::UNSUBSCRIPTION_METHOD_UNSUBSCRIBE_LINK,
            self::UNSUBSCRIPTION_METHOD_BOUNCE,
            self::UNSUBSCRIPTION_METHOD_API,
            self::UNSUBSCRIPTION_METHOD_EMPTY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnsubscriptionReasonAllowableValues()
    {
        return [
            self::UNSUBSCRIPTION_REASON_NOT_INTERESTED,
            self::UNSUBSCRIPTION_REASON_LACK_OF_TIME,
            self::UNSUBSCRIPTION_REASON_EMAIL_ADDRESS_CHANGE,
            self::UNSUBSCRIPTION_REASON_SPAM,
            self::UNSUBSCRIPTION_REASON_OTHER,
            self::UNSUBSCRIPTION_REASON_EMPTY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEmailStatusAllowableValues()
    {
        return [
            self::EMAIL_STATUS_ACTIVE,
            self::EMAIL_STATUS_INACTIVE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCellphoneStatusAllowableValues()
    {
        return [
            self::CELLPHONE_STATUS_ACTIVE,
            self::CELLPHONE_STATUS_INACTIVE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPhoneStatusAllowableValues()
    {
        return [
            self::PHONE_STATUS_ACTIVE,
            self::PHONE_STATUS_INACTIVE,
        ];
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
        $this->setIfExists('contact_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], 'active');
        $this->setIfExists('consent', $data ?? [], 'consent');
        $this->setIfExists('consent_date', $data ?? [], null);
        $this->setIfExists('subscription_method', $data ?? [], null);
        $this->setIfExists('subscription_date', $data ?? [], null);
        $this->setIfExists('subscription_form', $data ?? [], null);
        $this->setIfExists('unsubscription_method', $data ?? [], null);
        $this->setIfExists('unsubscription_reason', $data ?? [], null);
        $this->setIfExists('unsubscription_observation', $data ?? [], null);
        $this->setIfExists('unsubscription_date', $data ?? [], null);
        $this->setIfExists('change_date', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('birth_date', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('email_status', $data ?? [], 'active');
        $this->setIfExists('cellphone', $data ?? [], null);
        $this->setIfExists('cellphone_status', $data ?? [], 'active');
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('phone_status', $data ?? [], 'active');
        $this->setIfExists('push_token_android', $data ?? [], null);
        $this->setIfExists('push_token_ios', $data ?? [], null);
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

        if (!is_null($this->container['contact_id']) && !preg_match("/[a-fA-F\\d]{10}/", $this->container['contact_id'])) {
            $invalidProperties[] = "invalid value for 'contact_id', must be conform to the pattern /[a-fA-F\\d]{10}/.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getConsentAllowableValues();
        if (!is_null($this->container['consent']) && !in_array($this->container['consent'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'consent', must be one of '%s'",
                $this->container['consent'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSubscriptionMethodAllowableValues();
        if (!is_null($this->container['subscription_method']) && !in_array($this->container['subscription_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'subscription_method', must be one of '%s'",
                $this->container['subscription_method'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['subscription_form']) && ($this->container['subscription_form'] < 0)) {
            $invalidProperties[] = "invalid value for 'subscription_form', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getUnsubscriptionMethodAllowableValues();
        if (!is_null($this->container['unsubscription_method']) && !in_array($this->container['unsubscription_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'unsubscription_method', must be one of '%s'",
                $this->container['unsubscription_method'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getUnsubscriptionReasonAllowableValues();
        if (!is_null($this->container['unsubscription_reason']) && !in_array($this->container['unsubscription_reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'unsubscription_reason', must be one of '%s'",
                $this->container['unsubscription_reason'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEmailStatusAllowableValues();
        if (!is_null($this->container['email_status']) && !in_array($this->container['email_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'email_status', must be one of '%s'",
                $this->container['email_status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCellphoneStatusAllowableValues();
        if (!is_null($this->container['cellphone_status']) && !in_array($this->container['cellphone_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cellphone_status', must be one of '%s'",
                $this->container['cellphone_status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPhoneStatusAllowableValues();
        if (!is_null($this->container['phone_status']) && !in_array($this->container['phone_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'phone_status', must be one of '%s'",
                $this->container['phone_status'],
                implode("', '", $allowedValues)
            );
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
     * Gets contact_id
     *
     * @return string|null
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param string|null $contact_id contact_id
     *
     * @return self
     */
    public function setContactId($contact_id)
    {

        if (!is_null($contact_id) && (!preg_match("/[a-fA-F\\d]{10}/", $contact_id))) {
            throw new \InvalidArgumentException("invalid value for \$contact_id when calling ContactInsideBase., must conform to the pattern /[a-fA-F\\d]{10}/.");
        }


        if (is_null($contact_id)) {
            throw new \InvalidArgumentException('non-nullable contact_id cannot be null');
        }

        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status of the contact
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets consent
     *
     * @return string|null
     */
    public function getConsent()
    {
        return $this->container['consent'];
    }

    /**
     * Sets consent
     *
     * @param string|null $consent Contact consent
     *
     * @return self
     */
    public function setConsent($consent)
    {
        $allowedValues = $this->getConsentAllowableValues();
        if (!is_null($consent) && !in_array($consent, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'consent', must be one of '%s'",
                    $consent,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($consent)) {
            throw new \InvalidArgumentException('non-nullable consent cannot be null');
        }

        $this->container['consent'] = $consent;

        return $this;
    }

    /**
     * Gets consent_date
     *
     * @return \DateTime|null
     */
    public function getConsentDate()
    {
        return $this->container['consent_date'];
    }

    /**
     * Sets consent_date
     *
     * @param \DateTime|null $consent_date Date and hour of the contact consent
     *
     * @return self
     */
    public function setConsentDate($consent_date)
    {

        if (is_null($consent_date)) {
            throw new \InvalidArgumentException('non-nullable consent_date cannot be null');
        }

        $this->container['consent_date'] = $consent_date;

        return $this;
    }

    /**
     * Gets subscription_method
     *
     * @return string|null
     */
    public function getSubscriptionMethod()
    {
        return $this->container['subscription_method'];
    }

    /**
     * Sets subscription_method
     *
     * @param string|null $subscription_method Contact subscription method
     *
     * @return self
     */
    public function setSubscriptionMethod($subscription_method)
    {
        $allowedValues = $this->getSubscriptionMethodAllowableValues();
        if (!is_null($subscription_method) && !in_array($subscription_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'subscription_method', must be one of '%s'",
                    $subscription_method,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($subscription_method)) {
            throw new \InvalidArgumentException('non-nullable subscription_method cannot be null');
        }

        $this->container['subscription_method'] = $subscription_method;

        return $this;
    }

    /**
     * Gets subscription_date
     *
     * @return \DateTime|null
     */
    public function getSubscriptionDate()
    {
        return $this->container['subscription_date'];
    }

    /**
     * Sets subscription_date
     *
     * @param \DateTime|null $subscription_date Date and hour of the contact subscription
     *
     * @return self
     */
    public function setSubscriptionDate($subscription_date)
    {

        if (is_null($subscription_date)) {
            throw new \InvalidArgumentException('non-nullable subscription_date cannot be null');
        }

        $this->container['subscription_date'] = $subscription_date;

        return $this;
    }

    /**
     * Gets subscription_form
     *
     * @return int|null
     */
    public function getSubscriptionForm()
    {
        return $this->container['subscription_form'];
    }

    /**
     * Sets subscription_form
     *
     * @param int|null $subscription_form Contact subscription form
     *
     * @return self
     */
    public function setSubscriptionForm($subscription_form)
    {

        if (!is_null($subscription_form) && ($subscription_form < 0)) {
            throw new \InvalidArgumentException('invalid value for $subscription_form when calling ContactInsideBase., must be bigger than or equal to 0.');
        }


        if (is_null($subscription_form)) {
            throw new \InvalidArgumentException('non-nullable subscription_form cannot be null');
        }

        $this->container['subscription_form'] = $subscription_form;

        return $this;
    }

    /**
     * Gets unsubscription_method
     *
     * @return string|null
     */
    public function getUnsubscriptionMethod()
    {
        return $this->container['unsubscription_method'];
    }

    /**
     * Sets unsubscription_method
     *
     * @param string|null $unsubscription_method Contact unsubscription method
     *
     * @return self
     */
    public function setUnsubscriptionMethod($unsubscription_method)
    {
        $allowedValues = $this->getUnsubscriptionMethodAllowableValues();
        if (!is_null($unsubscription_method) && !in_array($unsubscription_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'unsubscription_method', must be one of '%s'",
                    $unsubscription_method,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($unsubscription_method)) {
            throw new \InvalidArgumentException('non-nullable unsubscription_method cannot be null');
        }

        $this->container['unsubscription_method'] = $unsubscription_method;

        return $this;
    }

    /**
     * Gets unsubscription_reason
     *
     * @return string|null
     */
    public function getUnsubscriptionReason()
    {
        return $this->container['unsubscription_reason'];
    }

    /**
     * Sets unsubscription_reason
     *
     * @param string|null $unsubscription_reason Contact unsubscription reason
     *
     * @return self
     */
    public function setUnsubscriptionReason($unsubscription_reason)
    {
        $allowedValues = $this->getUnsubscriptionReasonAllowableValues();
        if (!is_null($unsubscription_reason) && !in_array($unsubscription_reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'unsubscription_reason', must be one of '%s'",
                    $unsubscription_reason,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($unsubscription_reason)) {
            throw new \InvalidArgumentException('non-nullable unsubscription_reason cannot be null');
        }

        $this->container['unsubscription_reason'] = $unsubscription_reason;

        return $this;
    }

    /**
     * Gets unsubscription_observation
     *
     * @return string|null
     */
    public function getUnsubscriptionObservation()
    {
        return $this->container['unsubscription_observation'];
    }

    /**
     * Sets unsubscription_observation
     *
     * @param string|null $unsubscription_observation Contact unsubscription observation
     *
     * @return self
     */
    public function setUnsubscriptionObservation($unsubscription_observation)
    {

        if (is_null($unsubscription_observation)) {
            throw new \InvalidArgumentException('non-nullable unsubscription_observation cannot be null');
        }

        $this->container['unsubscription_observation'] = $unsubscription_observation;

        return $this;
    }

    /**
     * Gets unsubscription_date
     *
     * @return \DateTime|null
     */
    public function getUnsubscriptionDate()
    {
        return $this->container['unsubscription_date'];
    }

    /**
     * Sets unsubscription_date
     *
     * @param \DateTime|null $unsubscription_date Contact unsubscription date
     *
     * @return self
     */
    public function setUnsubscriptionDate($unsubscription_date)
    {

        if (is_null($unsubscription_date)) {
            throw new \InvalidArgumentException('non-nullable unsubscription_date cannot be null');
        }

        $this->container['unsubscription_date'] = $unsubscription_date;

        return $this;
    }

    /**
     * Gets change_date
     *
     * @return \DateTime|null
     */
    public function getChangeDate()
    {
        return $this->container['change_date'];
    }

    /**
     * Sets change_date
     *
     * @param \DateTime|null $change_date Last modification date of the contact
     *
     * @return self
     */
    public function setChangeDate($change_date)
    {

        if (is_null($change_date)) {
            throw new \InvalidArgumentException('non-nullable change_date cannot be null');
        }

        $this->container['change_date'] = $change_date;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name First name of the contact
     *
     * @return self
     */
    public function setFirstName($first_name)
    {

        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name Last name of the contact
     *
     * @return self
     */
    public function setLastName($last_name)
    {

        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return \DateTime|null
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param \DateTime|null $birth_date Birth date of the contact
     *
     * @return self
     */
    public function setBirthDate($birth_date)
    {

        if (is_null($birth_date)) {
            throw new \InvalidArgumentException('non-nullable birth_date cannot be null');
        }

        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \EgoiClient\EgoiModel\Language|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \EgoiClient\EgoiModel\Language|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {

        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }

        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Email of the contact
     *
     * @return self
     */
    public function setEmail($email)
    {

        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets email_status
     *
     * @return string|null
     */
    public function getEmailStatus()
    {
        return $this->container['email_status'];
    }

    /**
     * Sets email_status
     *
     * @param string|null $email_status Email channel status
     *
     * @return self
     */
    public function setEmailStatus($email_status)
    {
        $allowedValues = $this->getEmailStatusAllowableValues();
        if (!is_null($email_status) && !in_array($email_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'email_status', must be one of '%s'",
                    $email_status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($email_status)) {
            throw new \InvalidArgumentException('non-nullable email_status cannot be null');
        }

        $this->container['email_status'] = $email_status;

        return $this;
    }

    /**
     * Gets cellphone
     *
     * @return string|null
     */
    public function getCellphone()
    {
        return $this->container['cellphone'];
    }

    /**
     * Sets cellphone
     *
     * @param string|null $cellphone Cellphone of the contact
     *
     * @return self
     */
    public function setCellphone($cellphone)
    {

        if (is_null($cellphone)) {
            throw new \InvalidArgumentException('non-nullable cellphone cannot be null');
        }

        $this->container['cellphone'] = $cellphone;

        return $this;
    }

    /**
     * Gets cellphone_status
     *
     * @return string|null
     */
    public function getCellphoneStatus()
    {
        return $this->container['cellphone_status'];
    }

    /**
     * Sets cellphone_status
     *
     * @param string|null $cellphone_status Cellphone channel status
     *
     * @return self
     */
    public function setCellphoneStatus($cellphone_status)
    {
        $allowedValues = $this->getCellphoneStatusAllowableValues();
        if (!is_null($cellphone_status) && !in_array($cellphone_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cellphone_status', must be one of '%s'",
                    $cellphone_status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($cellphone_status)) {
            throw new \InvalidArgumentException('non-nullable cellphone_status cannot be null');
        }

        $this->container['cellphone_status'] = $cellphone_status;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Phone of the contact
     *
     * @return self
     */
    public function setPhone($phone)
    {

        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets phone_status
     *
     * @return string|null
     */
    public function getPhoneStatus()
    {
        return $this->container['phone_status'];
    }

    /**
     * Sets phone_status
     *
     * @param string|null $phone_status Phone channel status
     *
     * @return self
     */
    public function setPhoneStatus($phone_status)
    {
        $allowedValues = $this->getPhoneStatusAllowableValues();
        if (!is_null($phone_status) && !in_array($phone_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'phone_status', must be one of '%s'",
                    $phone_status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($phone_status)) {
            throw new \InvalidArgumentException('non-nullable phone_status cannot be null');
        }

        $this->container['phone_status'] = $phone_status;

        return $this;
    }

    /**
     * Gets push_token_android
     *
     * @return \EgoiClient\EgoiModel\ContactBaseWithStatusNoRemovedFieldsSchemaBasePushTokenAndroidInner[]|null
     */
    public function getPushTokenAndroid()
    {
        return $this->container['push_token_android'];
    }

    /**
     * Sets push_token_android
     *
     * @param \EgoiClient\EgoiModel\ContactBaseWithStatusNoRemovedFieldsSchemaBasePushTokenAndroidInner[]|null $push_token_android Android push token of the contact
     *
     * @return self
     */
    public function setPushTokenAndroid($push_token_android)
    {

        if (is_null($push_token_android)) {
            throw new \InvalidArgumentException('non-nullable push_token_android cannot be null');
        }

        $this->container['push_token_android'] = $push_token_android;

        return $this;
    }

    /**
     * Gets push_token_ios
     *
     * @return \EgoiClient\EgoiModel\ContactBaseWithStatusNoRemovedFieldsSchemaBasePushTokenIosInner[]|null
     */
    public function getPushTokenIos()
    {
        return $this->container['push_token_ios'];
    }

    /**
     * Sets push_token_ios
     *
     * @param \EgoiClient\EgoiModel\ContactBaseWithStatusNoRemovedFieldsSchemaBasePushTokenIosInner[]|null $push_token_ios IOS push token of the contact
     *
     * @return self
     */
    public function setPushTokenIos($push_token_ios)
    {

        if (is_null($push_token_ios)) {
            throw new \InvalidArgumentException('non-nullable push_token_ios cannot be null');
        }

        $this->container['push_token_ios'] = $push_token_ios;

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


