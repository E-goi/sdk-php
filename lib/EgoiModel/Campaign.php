<?php
/**
 * Campaign
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
 * Campaign Class Doc Comment
 *
 * @category Class
 * @description Campaign schema
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Campaign implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Campaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'campaign_hash' => 'string',
        'status' => 'string',
        'thumbnail' => 'string',
        'channel' => 'string',
        'internal_name' => 'string',
        'list_id' => 'int',
        'title' => 'string',
        'created_by' => 'int',
        'group_id' => 'int',
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'schedule_date' => '\EgoiClient\EgoiModel\CampaignScheduleDate',
        'processed_messages' => 'int',
        'automation_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'campaign_hash' => null,
        'status' => null,
        'thumbnail' => null,
        'channel' => null,
        'internal_name' => null,
        'list_id' => null,
        'title' => null,
        'created_by' => null,
        'group_id' => null,
        'created' => null,
        'updated' => null,
        'start_date' => null,
        'end_date' => null,
        'schedule_date' => null,
        'processed_messages' => null,
        'automation_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'campaign_hash' => false,
		'status' => false,
		'thumbnail' => false,
		'channel' => false,
		'internal_name' => false,
		'list_id' => false,
		'title' => false,
		'created_by' => false,
		'group_id' => false,
		'created' => false,
		'updated' => false,
		'start_date' => false,
		'end_date' => false,
		'schedule_date' => false,
		'processed_messages' => false,
		'automation_id' => false
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
        'id' => 'id',
        'campaign_hash' => 'campaign_hash',
        'status' => 'status',
        'thumbnail' => 'thumbnail',
        'channel' => 'channel',
        'internal_name' => 'internal_name',
        'list_id' => 'list_id',
        'title' => 'title',
        'created_by' => 'created_by',
        'group_id' => 'group_id',
        'created' => 'created',
        'updated' => 'updated',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'schedule_date' => 'schedule_date',
        'processed_messages' => 'processed_messages',
        'automation_id' => 'automation_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'campaign_hash' => 'setCampaignHash',
        'status' => 'setStatus',
        'thumbnail' => 'setThumbnail',
        'channel' => 'setChannel',
        'internal_name' => 'setInternalName',
        'list_id' => 'setListId',
        'title' => 'setTitle',
        'created_by' => 'setCreatedBy',
        'group_id' => 'setGroupId',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'schedule_date' => 'setScheduleDate',
        'processed_messages' => 'setProcessedMessages',
        'automation_id' => 'setAutomationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'campaign_hash' => 'getCampaignHash',
        'status' => 'getStatus',
        'thumbnail' => 'getThumbnail',
        'channel' => 'getChannel',
        'internal_name' => 'getInternalName',
        'list_id' => 'getListId',
        'title' => 'getTitle',
        'created_by' => 'getCreatedBy',
        'group_id' => 'getGroupId',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'schedule_date' => 'getScheduleDate',
        'processed_messages' => 'getProcessedMessages',
        'automation_id' => 'getAutomationId'
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

    public const STATUS_DRAFT = 'draft';
    public const STATUS_CANCELED = 'canceled';
    public const STATUS_QUEUED = 'queued';
    public const STATUS_PAUSED = 'paused';
    public const STATUS_SENDING = 'sending';
    public const STATUS_SENT = 'sent';
    public const CHANNEL_EMAIL = 'email';
    public const CHANNEL_PUSH = 'push';
    public const CHANNEL_SMS = 'sms';
    public const CHANNEL_SMART_SMS = 'smart_sms';
    public const CHANNEL_VOICE = 'voice';
    public const CHANNEL_WEB_PUSH = 'web_push';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_CANCELED,
            self::STATUS_QUEUED,
            self::STATUS_PAUSED,
            self::STATUS_SENDING,
            self::STATUS_SENT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChannelAllowableValues()
    {
        return [
            self::CHANNEL_EMAIL,
            self::CHANNEL_PUSH,
            self::CHANNEL_SMS,
            self::CHANNEL_SMART_SMS,
            self::CHANNEL_VOICE,
            self::CHANNEL_WEB_PUSH,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('campaign_hash', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('thumbnail', $data ?? [], null);
        $this->setIfExists('channel', $data ?? [], null);
        $this->setIfExists('internal_name', $data ?? [], null);
        $this->setIfExists('list_id', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('group_id', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('updated', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('schedule_date', $data ?? [], null);
        $this->setIfExists('processed_messages', $data ?? [], null);
        $this->setIfExists('automation_id', $data ?? [], null);
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

        if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['campaign_hash']) && !preg_match("/[a-zA-Z0-9_-]*/", $this->container['campaign_hash'])) {
            $invalidProperties[] = "invalid value for 'campaign_hash', must be conform to the pattern /[a-zA-Z0-9_-]*/.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getChannelAllowableValues();
        if (!is_null($this->container['channel']) && !in_array($this->container['channel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'channel', must be one of '%s'",
                $this->container['channel'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['list_id']) && ($this->container['list_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'list_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['created_by']) && ($this->container['created_by'] < 1)) {
            $invalidProperties[] = "invalid value for 'created_by', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['group_id']) && ($this->container['group_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'group_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['processed_messages']) && ($this->container['processed_messages'] < 0)) {
            $invalidProperties[] = "invalid value for 'processed_messages', must be bigger than or equal to 0.";
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && ($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling Campaign., must be bigger than or equal to 1.');
        }


        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets campaign_hash
     *
     * @return string|null
     */
    public function getCampaignHash()
    {
        return $this->container['campaign_hash'];
    }

    /**
     * Sets campaign_hash
     *
     * @param string|null $campaign_hash campaign_hash
     *
     * @return self
     */
    public function setCampaignHash($campaign_hash)
    {

        if (!is_null($campaign_hash) && (!preg_match("/[a-zA-Z0-9_-]*/", $campaign_hash))) {
            throw new \InvalidArgumentException("invalid value for \$campaign_hash when calling Campaign., must conform to the pattern /[a-zA-Z0-9_-]*/.");
        }


        if (is_null($campaign_hash)) {
            throw new \InvalidArgumentException('non-nullable campaign_hash cannot be null');
        }

        $this->container['campaign_hash'] = $campaign_hash;

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
     * @param string|null $status Status of the campaign
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
     * Gets thumbnail
     *
     * @return string|null
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     *
     * @param string|null $thumbnail Thumbnail of the campaign
     *
     * @return self
     */
    public function setThumbnail($thumbnail)
    {

        if (is_null($thumbnail)) {
            throw new \InvalidArgumentException('non-nullable thumbnail cannot be null');
        }

        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return string|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string|null $channel Channel of the campaign
     *
     * @return self
     */
    public function setChannel($channel)
    {
        $allowedValues = $this->getChannelAllowableValues();
        if (!is_null($channel) && !in_array($channel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'channel', must be one of '%s'",
                    $channel,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($channel)) {
            throw new \InvalidArgumentException('non-nullable channel cannot be null');
        }

        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets internal_name
     *
     * @return string|null
     */
    public function getInternalName()
    {
        return $this->container['internal_name'];
    }

    /**
     * Sets internal_name
     *
     * @param string|null $internal_name Internal name of the campaign
     *
     * @return self
     */
    public function setInternalName($internal_name)
    {

        if (is_null($internal_name)) {
            throw new \InvalidArgumentException('non-nullable internal_name cannot be null');
        }

        $this->container['internal_name'] = $internal_name;

        return $this;
    }

    /**
     * Gets list_id
     *
     * @return int|null
     */
    public function getListId()
    {
        return $this->container['list_id'];
    }

    /**
     * Sets list_id
     *
     * @param int|null $list_id list_id
     *
     * @return self
     */
    public function setListId($list_id)
    {

        if (!is_null($list_id) && ($list_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $list_id when calling Campaign., must be bigger than or equal to 1.');
        }


        if (is_null($list_id)) {
            throw new \InvalidArgumentException('non-nullable list_id cannot be null');
        }

        $this->container['list_id'] = $list_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Subject of the campaign
     *
     * @return self
     */
    public function setTitle($title)
    {

        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return int|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param int|null $created_by created_by
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {

        if (!is_null($created_by) && ($created_by < 1)) {
            throw new \InvalidArgumentException('invalid value for $created_by when calling Campaign., must be bigger than or equal to 1.');
        }


        if (is_null($created_by)) {
            throw new \InvalidArgumentException('non-nullable created_by cannot be null');
        }

        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return int|null
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param int|null $group_id group_id
     *
     * @return self
     */
    public function setGroupId($group_id)
    {

        if (!is_null($group_id) && ($group_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $group_id when calling Campaign., must be bigger than or equal to 1.');
        }


        if (is_null($group_id)) {
            throw new \InvalidArgumentException('non-nullable group_id cannot be null');
        }

        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created created
     *
     * @return self
     */
    public function setCreated($created)
    {

        if (is_null($created)) {
            throw new \InvalidArgumentException('non-nullable created cannot be null');
        }

        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime|null
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime|null $updated updated
     *
     * @return self
     */
    public function setUpdated($updated)
    {

        if (is_null($updated)) {
            throw new \InvalidArgumentException('non-nullable updated cannot be null');
        }

        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date start_date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {

        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }

        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date end_date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {

        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }

        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets schedule_date
     *
     * @return \EgoiClient\EgoiModel\CampaignScheduleDate|null
     */
    public function getScheduleDate()
    {
        return $this->container['schedule_date'];
    }

    /**
     * Sets schedule_date
     *
     * @param \EgoiClient\EgoiModel\CampaignScheduleDate|null $schedule_date schedule_date
     *
     * @return self
     */
    public function setScheduleDate($schedule_date)
    {

        if (is_null($schedule_date)) {
            throw new \InvalidArgumentException('non-nullable schedule_date cannot be null');
        }

        $this->container['schedule_date'] = $schedule_date;

        return $this;
    }

    /**
     * Gets processed_messages
     *
     * @return int|null
     */
    public function getProcessedMessages()
    {
        return $this->container['processed_messages'];
    }

    /**
     * Sets processed_messages
     *
     * @param int|null $processed_messages Total number of processed messages
     *
     * @return self
     */
    public function setProcessedMessages($processed_messages)
    {

        if (!is_null($processed_messages) && ($processed_messages < 0)) {
            throw new \InvalidArgumentException('invalid value for $processed_messages when calling Campaign., must be bigger than or equal to 0.');
        }


        if (is_null($processed_messages)) {
            throw new \InvalidArgumentException('non-nullable processed_messages cannot be null');
        }

        $this->container['processed_messages'] = $processed_messages;

        return $this;
    }

    /**
     * Gets automation_id
     *
     * @return int|null
     */
    public function getAutomationId()
    {
        return $this->container['automation_id'];
    }

    /**
     * Sets automation_id
     *
     * @param int|null $automation_id The automation id of the campaign
     *
     * @return self
     */
    public function setAutomationId($automation_id)
    {

        if (is_null($automation_id)) {
            throw new \InvalidArgumentException('non-nullable automation_id cannot be null');
        }

        $this->container['automation_id'] = $automation_id;

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


