<?php
/**
 * ContactStatsEmailStats
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
 * ContactStatsEmailStats Class Doc Comment
 *
 * @category Class
 * @description Email stats of the contact
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContactStatsEmailStats implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContactStats_email_stats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sent' => 'int',
        'opens' => 'int',
        'clicks' => 'int',
        'soft_bounces' => 'int',
        'hard_bounces' => 'int',
        'forwards' => 'int',
        'conversions' => 'int',
        'social_actions' => 'int',
        'last_send_date' => '\DateTime',
        'last_open_date' => '\DateTime',
        'last_click_date' => '\DateTime',
        'last_open_country' => 'string',
        'last_open_region' => 'string',
        'last_open_city' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sent' => null,
        'opens' => null,
        'clicks' => null,
        'soft_bounces' => null,
        'hard_bounces' => null,
        'forwards' => null,
        'conversions' => null,
        'social_actions' => null,
        'last_send_date' => 'date-time',
        'last_open_date' => 'date-time',
        'last_click_date' => 'date-time',
        'last_open_country' => null,
        'last_open_region' => null,
        'last_open_city' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sent' => false,
		'opens' => false,
		'clicks' => false,
		'soft_bounces' => false,
		'hard_bounces' => false,
		'forwards' => false,
		'conversions' => false,
		'social_actions' => false,
		'last_send_date' => true,
		'last_open_date' => true,
		'last_click_date' => true,
		'last_open_country' => true,
		'last_open_region' => true,
		'last_open_city' => true
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
        'sent' => 'sent',
        'opens' => 'opens',
        'clicks' => 'clicks',
        'soft_bounces' => 'soft_bounces',
        'hard_bounces' => 'hard_bounces',
        'forwards' => 'forwards',
        'conversions' => 'conversions',
        'social_actions' => 'social_actions',
        'last_send_date' => 'last_send_date',
        'last_open_date' => 'last_open_date',
        'last_click_date' => 'last_click_date',
        'last_open_country' => 'last_open_country',
        'last_open_region' => 'last_open_region',
        'last_open_city' => 'last_open_city'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sent' => 'setSent',
        'opens' => 'setOpens',
        'clicks' => 'setClicks',
        'soft_bounces' => 'setSoftBounces',
        'hard_bounces' => 'setHardBounces',
        'forwards' => 'setForwards',
        'conversions' => 'setConversions',
        'social_actions' => 'setSocialActions',
        'last_send_date' => 'setLastSendDate',
        'last_open_date' => 'setLastOpenDate',
        'last_click_date' => 'setLastClickDate',
        'last_open_country' => 'setLastOpenCountry',
        'last_open_region' => 'setLastOpenRegion',
        'last_open_city' => 'setLastOpenCity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sent' => 'getSent',
        'opens' => 'getOpens',
        'clicks' => 'getClicks',
        'soft_bounces' => 'getSoftBounces',
        'hard_bounces' => 'getHardBounces',
        'forwards' => 'getForwards',
        'conversions' => 'getConversions',
        'social_actions' => 'getSocialActions',
        'last_send_date' => 'getLastSendDate',
        'last_open_date' => 'getLastOpenDate',
        'last_click_date' => 'getLastClickDate',
        'last_open_country' => 'getLastOpenCountry',
        'last_open_region' => 'getLastOpenRegion',
        'last_open_city' => 'getLastOpenCity'
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
        $this->setIfExists('sent', $data ?? [], null);
        $this->setIfExists('opens', $data ?? [], null);
        $this->setIfExists('clicks', $data ?? [], null);
        $this->setIfExists('soft_bounces', $data ?? [], null);
        $this->setIfExists('hard_bounces', $data ?? [], null);
        $this->setIfExists('forwards', $data ?? [], null);
        $this->setIfExists('conversions', $data ?? [], null);
        $this->setIfExists('social_actions', $data ?? [], null);
        $this->setIfExists('last_send_date', $data ?? [], null);
        $this->setIfExists('last_open_date', $data ?? [], null);
        $this->setIfExists('last_click_date', $data ?? [], null);
        $this->setIfExists('last_open_country', $data ?? [], null);
        $this->setIfExists('last_open_region', $data ?? [], null);
        $this->setIfExists('last_open_city', $data ?? [], null);
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
     * Gets sent
     *
     * @return int|null
     */
    public function getSent()
    {
        return $this->container['sent'];
    }

    /**
     * Sets sent
     *
     * @param int|null $sent Emails sent to the contact
     *
     * @return self
     */
    public function setSent($sent)
    {

        if (is_null($sent)) {
            throw new \InvalidArgumentException('non-nullable sent cannot be null');
        }

        $this->container['sent'] = $sent;

        return $this;
    }

    /**
     * Gets opens
     *
     * @return int|null
     */
    public function getOpens()
    {
        return $this->container['opens'];
    }

    /**
     * Sets opens
     *
     * @param int|null $opens Emails opened by the contact
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
     * @return int|null
     */
    public function getClicks()
    {
        return $this->container['clicks'];
    }

    /**
     * Sets clicks
     *
     * @param int|null $clicks Total number of clicks made by the contact
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
     * Gets soft_bounces
     *
     * @return int|null
     */
    public function getSoftBounces()
    {
        return $this->container['soft_bounces'];
    }

    /**
     * Sets soft_bounces
     *
     * @param int|null $soft_bounces Soft bounces for the contact
     *
     * @return self
     */
    public function setSoftBounces($soft_bounces)
    {

        if (is_null($soft_bounces)) {
            throw new \InvalidArgumentException('non-nullable soft_bounces cannot be null');
        }

        $this->container['soft_bounces'] = $soft_bounces;

        return $this;
    }

    /**
     * Gets hard_bounces
     *
     * @return int|null
     */
    public function getHardBounces()
    {
        return $this->container['hard_bounces'];
    }

    /**
     * Sets hard_bounces
     *
     * @param int|null $hard_bounces Hard bounces for the contact
     *
     * @return self
     */
    public function setHardBounces($hard_bounces)
    {

        if (is_null($hard_bounces)) {
            throw new \InvalidArgumentException('non-nullable hard_bounces cannot be null');
        }

        $this->container['hard_bounces'] = $hard_bounces;

        return $this;
    }

    /**
     * Gets forwards
     *
     * @return int|null
     */
    public function getForwards()
    {
        return $this->container['forwards'];
    }

    /**
     * Sets forwards
     *
     * @param int|null $forwards Emails forwarded by the contact
     *
     * @return self
     */
    public function setForwards($forwards)
    {

        if (is_null($forwards)) {
            throw new \InvalidArgumentException('non-nullable forwards cannot be null');
        }

        $this->container['forwards'] = $forwards;

        return $this;
    }

    /**
     * Gets conversions
     *
     * @return int|null
     */
    public function getConversions()
    {
        return $this->container['conversions'];
    }

    /**
     * Sets conversions
     *
     * @param int|null $conversions Total of conversions
     *
     * @return self
     */
    public function setConversions($conversions)
    {

        if (is_null($conversions)) {
            throw new \InvalidArgumentException('non-nullable conversions cannot be null');
        }

        $this->container['conversions'] = $conversions;

        return $this;
    }

    /**
     * Gets social_actions
     *
     * @return int|null
     */
    public function getSocialActions()
    {
        return $this->container['social_actions'];
    }

    /**
     * Sets social_actions
     *
     * @param int|null $social_actions Total of social actions for the contact
     *
     * @return self
     */
    public function setSocialActions($social_actions)
    {

        if (is_null($social_actions)) {
            throw new \InvalidArgumentException('non-nullable social_actions cannot be null');
        }

        $this->container['social_actions'] = $social_actions;

        return $this;
    }

    /**
     * Gets last_send_date
     *
     * @return \DateTime|null
     */
    public function getLastSendDate()
    {
        return $this->container['last_send_date'];
    }

    /**
     * Sets last_send_date
     *
     * @param \DateTime|null $last_send_date Date of the last email sent to the contact
     *
     * @return self
     */
    public function setLastSendDate($last_send_date)
    {

        if (is_null($last_send_date)) {
            array_push($this->openAPINullablesSetToNull, 'last_send_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_send_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['last_send_date'] = $last_send_date;

        return $this;
    }

    /**
     * Gets last_open_date
     *
     * @return \DateTime|null
     */
    public function getLastOpenDate()
    {
        return $this->container['last_open_date'];
    }

    /**
     * Sets last_open_date
     *
     * @param \DateTime|null $last_open_date Date of the last email open of the contact
     *
     * @return self
     */
    public function setLastOpenDate($last_open_date)
    {

        if (is_null($last_open_date)) {
            array_push($this->openAPINullablesSetToNull, 'last_open_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_open_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['last_open_date'] = $last_open_date;

        return $this;
    }

    /**
     * Gets last_click_date
     *
     * @return \DateTime|null
     */
    public function getLastClickDate()
    {
        return $this->container['last_click_date'];
    }

    /**
     * Sets last_click_date
     *
     * @param \DateTime|null $last_click_date Date of the last email click of the contact
     *
     * @return self
     */
    public function setLastClickDate($last_click_date)
    {

        if (is_null($last_click_date)) {
            array_push($this->openAPINullablesSetToNull, 'last_click_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_click_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['last_click_date'] = $last_click_date;

        return $this;
    }

    /**
     * Gets last_open_country
     *
     * @return string|null
     */
    public function getLastOpenCountry()
    {
        return $this->container['last_open_country'];
    }

    /**
     * Sets last_open_country
     *
     * @param string|null $last_open_country Country where the last email for that contact was opened
     *
     * @return self
     */
    public function setLastOpenCountry($last_open_country)
    {

        if (is_null($last_open_country)) {
            array_push($this->openAPINullablesSetToNull, 'last_open_country');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_open_country', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['last_open_country'] = $last_open_country;

        return $this;
    }

    /**
     * Gets last_open_region
     *
     * @return string|null
     */
    public function getLastOpenRegion()
    {
        return $this->container['last_open_region'];
    }

    /**
     * Sets last_open_region
     *
     * @param string|null $last_open_region Region where the last email for that contact was opened
     *
     * @return self
     */
    public function setLastOpenRegion($last_open_region)
    {

        if (is_null($last_open_region)) {
            array_push($this->openAPINullablesSetToNull, 'last_open_region');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_open_region', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['last_open_region'] = $last_open_region;

        return $this;
    }

    /**
     * Gets last_open_city
     *
     * @return string|null
     */
    public function getLastOpenCity()
    {
        return $this->container['last_open_city'];
    }

    /**
     * Sets last_open_city
     *
     * @param string|null $last_open_city City where the last email for that contact was opened
     *
     * @return self
     */
    public function setLastOpenCity($last_open_city)
    {

        if (is_null($last_open_city)) {
            array_push($this->openAPINullablesSetToNull, 'last_open_city');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_open_city', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['last_open_city'] = $last_open_city;

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


