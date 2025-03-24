<?php
/**
 * EmailEventsCampaignFields
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
 * EmailEventsCampaignFields Class Doc Comment
 *
 * @category Class
 * @description Campaign fields to include in the report
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmailEventsCampaignFields implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailEventsCampaignFields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'internal_name' => 'bool',
        'campaign_hash' => 'bool',
        'send_date' => 'bool',
        'group' => 'bool',
        'channel' => 'bool',
        'type' => 'bool',
        'url' => 'bool',
        'sender' => 'bool',
        'city' => 'bool',
        'country' => 'bool',
        'region' => 'bool',
        'program' => 'bool',
        'os' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'internal_name' => null,
        'campaign_hash' => null,
        'send_date' => null,
        'group' => null,
        'channel' => null,
        'type' => null,
        'url' => null,
        'sender' => null,
        'city' => null,
        'country' => null,
        'region' => null,
        'program' => null,
        'os' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'internal_name' => false,
		'campaign_hash' => false,
		'send_date' => false,
		'group' => false,
		'channel' => false,
		'type' => false,
		'url' => false,
		'sender' => false,
		'city' => false,
		'country' => false,
		'region' => false,
		'program' => false,
		'os' => false
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
        'internal_name' => 'internal_name',
        'campaign_hash' => 'campaign_hash',
        'send_date' => 'send_date',
        'group' => 'group',
        'channel' => 'channel',
        'type' => 'type',
        'url' => 'url',
        'sender' => 'sender',
        'city' => 'city',
        'country' => 'country',
        'region' => 'region',
        'program' => 'program',
        'os' => 'os'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'internal_name' => 'setInternalName',
        'campaign_hash' => 'setCampaignHash',
        'send_date' => 'setSendDate',
        'group' => 'setGroup',
        'channel' => 'setChannel',
        'type' => 'setType',
        'url' => 'setUrl',
        'sender' => 'setSender',
        'city' => 'setCity',
        'country' => 'setCountry',
        'region' => 'setRegion',
        'program' => 'setProgram',
        'os' => 'setOs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'internal_name' => 'getInternalName',
        'campaign_hash' => 'getCampaignHash',
        'send_date' => 'getSendDate',
        'group' => 'getGroup',
        'channel' => 'getChannel',
        'type' => 'getType',
        'url' => 'getUrl',
        'sender' => 'getSender',
        'city' => 'getCity',
        'country' => 'getCountry',
        'region' => 'getRegion',
        'program' => 'getProgram',
        'os' => 'getOs'
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
        $this->setIfExists('internal_name', $data ?? [], null);
        $this->setIfExists('campaign_hash', $data ?? [], null);
        $this->setIfExists('send_date', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('channel', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('program', $data ?? [], null);
        $this->setIfExists('os', $data ?? [], null);
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

        if ($this->container['internal_name'] === null) {
            $invalidProperties[] = "'internal_name' can't be null";
        }
        if ($this->container['campaign_hash'] === null) {
            $invalidProperties[] = "'campaign_hash' can't be null";
        }
        if ($this->container['send_date'] === null) {
            $invalidProperties[] = "'send_date' can't be null";
        }
        if ($this->container['group'] === null) {
            $invalidProperties[] = "'group' can't be null";
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
     * Gets internal_name
     *
     * @return bool
     */
    public function getInternalName()
    {
        return $this->container['internal_name'];
    }

    /**
     * Sets internal_name
     *
     * @param bool $internal_name True to include the internal name of the campaign, false otherwise
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
     * Gets campaign_hash
     *
     * @return bool
     */
    public function getCampaignHash()
    {
        return $this->container['campaign_hash'];
    }

    /**
     * Sets campaign_hash
     *
     * @param bool $campaign_hash True to include the hash of the campaign, false otherwise
     *
     * @return self
     */
    public function setCampaignHash($campaign_hash)
    {

        if (is_null($campaign_hash)) {
            throw new \InvalidArgumentException('non-nullable campaign_hash cannot be null');
        }

        $this->container['campaign_hash'] = $campaign_hash;

        return $this;
    }

    /**
     * Gets send_date
     *
     * @return bool
     */
    public function getSendDate()
    {
        return $this->container['send_date'];
    }

    /**
     * Sets send_date
     *
     * @param bool $send_date True to include the send date of the campaign, false otherwise
     *
     * @return self
     */
    public function setSendDate($send_date)
    {

        if (is_null($send_date)) {
            throw new \InvalidArgumentException('non-nullable send_date cannot be null');
        }

        $this->container['send_date'] = $send_date;

        return $this;
    }

    /**
     * Gets group
     *
     * @return bool
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param bool $group True to include the group of the campaign, false otherwise
     *
     * @return self
     */
    public function setGroup($group)
    {

        if (is_null($group)) {
            throw new \InvalidArgumentException('non-nullable group cannot be null');
        }

        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return bool|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param bool|null $channel True to include the channel of the campaign, false otherwise
     *
     * @return self
     */
    public function setChannel($channel)
    {

        if (is_null($channel)) {
            throw new \InvalidArgumentException('non-nullable channel cannot be null');
        }

        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets type
     *
     * @return bool|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param bool|null $type True to include the type of the campaign, false otherwise
     *
     * @return self
     */
    public function setType($type)
    {

        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets url
     *
     * @return bool|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param bool|null $url True to include the URL of the campaign, false otherwise
     *
     * @return self
     */
    public function setUrl($url)
    {

        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return bool|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param bool|null $sender True to include the sender of the campaign, false otherwise
     *
     * @return self
     */
    public function setSender($sender)
    {

        if (is_null($sender)) {
            throw new \InvalidArgumentException('non-nullable sender cannot be null');
        }

        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets city
     *
     * @return bool|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param bool|null $city True to include city information, false otherwise (deprecated)
     *
     * @return self
     */
    public function setCity($city)
    {

        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return bool|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param bool|null $country True to include country information, false otherwise (deprecated)
     *
     * @return self
     */
    public function setCountry($country)
    {

        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets region
     *
     * @return bool|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param bool|null $region True to include region information, false otherwise (deprecated)
     *
     * @return self
     */
    public function setRegion($region)
    {

        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }

        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets program
     *
     * @return bool|null
     */
    public function getProgram()
    {
        return $this->container['program'];
    }

    /**
     * Sets program
     *
     * @param bool|null $program True to include device program information, false otherwise (deprecated)
     *
     * @return self
     */
    public function setProgram($program)
    {

        if (is_null($program)) {
            throw new \InvalidArgumentException('non-nullable program cannot be null');
        }

        $this->container['program'] = $program;

        return $this;
    }

    /**
     * Gets os
     *
     * @return bool|null
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param bool|null $os True to include operating system information, false otherwise (deprecated)
     *
     * @return self
     */
    public function setOs($os)
    {

        if (is_null($os)) {
            throw new \InvalidArgumentException('non-nullable os cannot be null');
        }

        $this->container['os'] = $os;

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


