<?php
/**
 * CampaignsApi
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

namespace EgoiClient\EgoiApi;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use EgoiClient\ApiException;
use EgoiClient\Configuration;
use EgoiClient\HeaderSelector;
use EgoiClient\ObjectSerializer;

/**
 * CampaignsApi Class Doc Comment
 *
 * @category Class
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'deleteCampaigns' => [
            'application/json',
        ],
        'getAllCampaigns' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation deleteCampaigns
     *
     * Remove Campaign
     *
     * @param  string $campaign_hash Hash of the Campaign (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteCampaigns'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteCampaigns($campaign_hash, string $contentType = self::contentTypes['deleteCampaigns'][0])
    {
        $this->deleteCampaignsWithHttpInfo($campaign_hash, $contentType);
    }

    /**
     * Operation deleteCampaignsWithHttpInfo
     *
     * Remove Campaign
     *
     * @param  string $campaign_hash Hash of the Campaign (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteCampaigns'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCampaignsWithHttpInfo($campaign_hash, string $contentType = self::contentTypes['deleteCampaigns'][0])
    {
        $request = $this->deleteCampaignsRequest($campaign_hash, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\Unauthorized',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\Forbidden',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\NotFound',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 408:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\RequestTimeout',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\DeleteCampaignsConflict',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\TooManyRequests',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\InternalServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\ServiceUnavailable',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteCampaignsAsync
     *
     * Remove Campaign
     *
     * @param  string $campaign_hash Hash of the Campaign (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteCampaigns'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCampaignsAsync($campaign_hash, string $contentType = self::contentTypes['deleteCampaigns'][0])
    {
        return $this->deleteCampaignsAsyncWithHttpInfo($campaign_hash, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteCampaignsAsyncWithHttpInfo
     *
     * Remove Campaign
     *
     * @param  string $campaign_hash Hash of the Campaign (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteCampaigns'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCampaignsAsyncWithHttpInfo($campaign_hash, string $contentType = self::contentTypes['deleteCampaigns'][0])
    {
        $returnType = '';
        $request = $this->deleteCampaignsRequest($campaign_hash, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteCampaigns'
     *
     * @param  string $campaign_hash Hash of the Campaign (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteCampaigns'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteCampaignsRequest($campaign_hash, string $contentType = self::contentTypes['deleteCampaigns'][0])
    {

        // verify the required parameter 'campaign_hash' is set
        if ($campaign_hash === null || (is_array($campaign_hash) && count($campaign_hash) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaign_hash when calling deleteCampaigns'
            );
        }
        if (!preg_match("/[a-zA-Z0-9_-]*/", $campaign_hash)) {
            throw new \InvalidArgumentException("invalid value for \"campaign_hash\" when calling CampaignsApi.deleteCampaigns, must conform to the pattern /[a-zA-Z0-9_-]*/.");
        }
        

        $resourcePath = '/campaigns/{campaign_hash}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($campaign_hash !== null) {
            $resourcePath = str_replace(
                '{' . 'campaign_hash' . '}',
                ObjectSerializer::toPathValue($campaign_hash),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Apikey');
        if ($apiKey !== null) {
            $headers['Apikey'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAllCampaigns
     *
     * Get all Campaigns
     *
     * @param  string $channel Channel of the campaign (optional)
     * @param  string $campaign_hash Hash of the campaign (optional)
     * @param  int $list_id ID of the list where the campaign belongs (optional)
     * @param  string $status Status of the campaign (optional)
     * @param  string $internal_name Internal name of the campaign (optional)
     * @param  int $created_by ID of the user who created the campaign (optional)
     * @param  int $group_id ID of the group where the campaign belongs (optional)
     * @param  \DateTime $created_min Created initial date (optional)
     * @param  \DateTime $created_max Created finish (optional)
     * @param  \DateTime $updated_min Updated initial (optional)
     * @param  \DateTime $updated_max Updated finish (optional)
     * @param  \DateTime $start_date_min Start date initial (optional)
     * @param  \DateTime $start_date_max Start date finish (optional)
     * @param  \DateTime $end_date_min End Date initial (optional)
     * @param  \DateTime $end_date_max End Date finish (optional)
     * @param  \DateTime $schedule_date_min Schedule Date initial (optional)
     * @param  \DateTime $schedule_date_max Schedule Date finish (optional)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 100)
     * @param  string $order Type of order (optional, default to 'desc')
     * @param  string $order_by Reference attribute to order campaigns (optional, default to 'created')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllCampaigns'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\CampaignsCollection|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function getAllCampaigns($channel = null, $campaign_hash = null, $list_id = null, $status = null, $internal_name = null, $created_by = null, $group_id = null, $created_min = null, $created_max = null, $updated_min = null, $updated_max = null, $start_date_min = null, $start_date_max = null, $end_date_min = null, $end_date_max = null, $schedule_date_min = null, $schedule_date_max = null, $offset = null, $limit = 100, $order = 'desc', $order_by = 'created', string $contentType = self::contentTypes['getAllCampaigns'][0])
    {
        list($response) = $this->getAllCampaignsWithHttpInfo($channel, $campaign_hash, $list_id, $status, $internal_name, $created_by, $group_id, $created_min, $created_max, $updated_min, $updated_max, $start_date_min, $start_date_max, $end_date_min, $end_date_max, $schedule_date_min, $schedule_date_max, $offset, $limit, $order, $order_by, $contentType);
        return $response;
    }

    /**
     * Operation getAllCampaignsWithHttpInfo
     *
     * Get all Campaigns
     *
     * @param  string $channel Channel of the campaign (optional)
     * @param  string $campaign_hash Hash of the campaign (optional)
     * @param  int $list_id ID of the list where the campaign belongs (optional)
     * @param  string $status Status of the campaign (optional)
     * @param  string $internal_name Internal name of the campaign (optional)
     * @param  int $created_by ID of the user who created the campaign (optional)
     * @param  int $group_id ID of the group where the campaign belongs (optional)
     * @param  \DateTime $created_min Created initial date (optional)
     * @param  \DateTime $created_max Created finish (optional)
     * @param  \DateTime $updated_min Updated initial (optional)
     * @param  \DateTime $updated_max Updated finish (optional)
     * @param  \DateTime $start_date_min Start date initial (optional)
     * @param  \DateTime $start_date_max Start date finish (optional)
     * @param  \DateTime $end_date_min End Date initial (optional)
     * @param  \DateTime $end_date_max End Date finish (optional)
     * @param  \DateTime $schedule_date_min Schedule Date initial (optional)
     * @param  \DateTime $schedule_date_max Schedule Date finish (optional)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 100)
     * @param  string $order Type of order (optional, default to 'desc')
     * @param  string $order_by Reference attribute to order campaigns (optional, default to 'created')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllCampaigns'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\CampaignsCollection|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllCampaignsWithHttpInfo($channel = null, $campaign_hash = null, $list_id = null, $status = null, $internal_name = null, $created_by = null, $group_id = null, $created_min = null, $created_max = null, $updated_min = null, $updated_max = null, $start_date_min = null, $start_date_max = null, $end_date_min = null, $end_date_max = null, $schedule_date_min = null, $schedule_date_max = null, $offset = null, $limit = 100, $order = 'desc', $order_by = 'created', string $contentType = self::contentTypes['getAllCampaigns'][0])
    {
        $request = $this->getAllCampaignsRequest($channel, $campaign_hash, $list_id, $status, $internal_name, $created_by, $group_id, $created_min, $created_max, $updated_min, $updated_max, $start_date_min, $start_date_max, $end_date_min, $end_date_max, $schedule_date_min, $schedule_date_max, $offset, $limit, $order, $order_by, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\EgoiClient\EgoiModel\CampaignsCollection' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\CampaignsCollection' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\CampaignsCollection', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\EgoiClient\EgoiModel\Unauthorized' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\Unauthorized' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\Unauthorized', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\EgoiClient\EgoiModel\Forbidden' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\Forbidden' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\Forbidden', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 408:
                    if ('\EgoiClient\EgoiModel\RequestTimeout' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\RequestTimeout' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\RequestTimeout', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\EgoiClient\EgoiModel\UnprocessableEntity' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\UnprocessableEntity' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\UnprocessableEntity', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\EgoiClient\EgoiModel\TooManyRequests' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\TooManyRequests' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\TooManyRequests', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\EgoiClient\EgoiModel\InternalServerError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\InternalServerError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\InternalServerError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\EgoiClient\EgoiModel\ServiceUnavailable' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\ServiceUnavailable' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\ServiceUnavailable', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\EgoiClient\EgoiModel\CampaignsCollection';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\CampaignsCollection',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\Unauthorized',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\Forbidden',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 408:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\RequestTimeout',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\UnprocessableEntity',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\TooManyRequests',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\InternalServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\ServiceUnavailable',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAllCampaignsAsync
     *
     * Get all Campaigns
     *
     * @param  string $channel Channel of the campaign (optional)
     * @param  string $campaign_hash Hash of the campaign (optional)
     * @param  int $list_id ID of the list where the campaign belongs (optional)
     * @param  string $status Status of the campaign (optional)
     * @param  string $internal_name Internal name of the campaign (optional)
     * @param  int $created_by ID of the user who created the campaign (optional)
     * @param  int $group_id ID of the group where the campaign belongs (optional)
     * @param  \DateTime $created_min Created initial date (optional)
     * @param  \DateTime $created_max Created finish (optional)
     * @param  \DateTime $updated_min Updated initial (optional)
     * @param  \DateTime $updated_max Updated finish (optional)
     * @param  \DateTime $start_date_min Start date initial (optional)
     * @param  \DateTime $start_date_max Start date finish (optional)
     * @param  \DateTime $end_date_min End Date initial (optional)
     * @param  \DateTime $end_date_max End Date finish (optional)
     * @param  \DateTime $schedule_date_min Schedule Date initial (optional)
     * @param  \DateTime $schedule_date_max Schedule Date finish (optional)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 100)
     * @param  string $order Type of order (optional, default to 'desc')
     * @param  string $order_by Reference attribute to order campaigns (optional, default to 'created')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllCampaigns'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllCampaignsAsync($channel = null, $campaign_hash = null, $list_id = null, $status = null, $internal_name = null, $created_by = null, $group_id = null, $created_min = null, $created_max = null, $updated_min = null, $updated_max = null, $start_date_min = null, $start_date_max = null, $end_date_min = null, $end_date_max = null, $schedule_date_min = null, $schedule_date_max = null, $offset = null, $limit = 100, $order = 'desc', $order_by = 'created', string $contentType = self::contentTypes['getAllCampaigns'][0])
    {
        return $this->getAllCampaignsAsyncWithHttpInfo($channel, $campaign_hash, $list_id, $status, $internal_name, $created_by, $group_id, $created_min, $created_max, $updated_min, $updated_max, $start_date_min, $start_date_max, $end_date_min, $end_date_max, $schedule_date_min, $schedule_date_max, $offset, $limit, $order, $order_by, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllCampaignsAsyncWithHttpInfo
     *
     * Get all Campaigns
     *
     * @param  string $channel Channel of the campaign (optional)
     * @param  string $campaign_hash Hash of the campaign (optional)
     * @param  int $list_id ID of the list where the campaign belongs (optional)
     * @param  string $status Status of the campaign (optional)
     * @param  string $internal_name Internal name of the campaign (optional)
     * @param  int $created_by ID of the user who created the campaign (optional)
     * @param  int $group_id ID of the group where the campaign belongs (optional)
     * @param  \DateTime $created_min Created initial date (optional)
     * @param  \DateTime $created_max Created finish (optional)
     * @param  \DateTime $updated_min Updated initial (optional)
     * @param  \DateTime $updated_max Updated finish (optional)
     * @param  \DateTime $start_date_min Start date initial (optional)
     * @param  \DateTime $start_date_max Start date finish (optional)
     * @param  \DateTime $end_date_min End Date initial (optional)
     * @param  \DateTime $end_date_max End Date finish (optional)
     * @param  \DateTime $schedule_date_min Schedule Date initial (optional)
     * @param  \DateTime $schedule_date_max Schedule Date finish (optional)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 100)
     * @param  string $order Type of order (optional, default to 'desc')
     * @param  string $order_by Reference attribute to order campaigns (optional, default to 'created')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllCampaigns'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllCampaignsAsyncWithHttpInfo($channel = null, $campaign_hash = null, $list_id = null, $status = null, $internal_name = null, $created_by = null, $group_id = null, $created_min = null, $created_max = null, $updated_min = null, $updated_max = null, $start_date_min = null, $start_date_max = null, $end_date_min = null, $end_date_max = null, $schedule_date_min = null, $schedule_date_max = null, $offset = null, $limit = 100, $order = 'desc', $order_by = 'created', string $contentType = self::contentTypes['getAllCampaigns'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\CampaignsCollection';
        $request = $this->getAllCampaignsRequest($channel, $campaign_hash, $list_id, $status, $internal_name, $created_by, $group_id, $created_min, $created_max, $updated_min, $updated_max, $start_date_min, $start_date_max, $end_date_min, $end_date_max, $schedule_date_min, $schedule_date_max, $offset, $limit, $order, $order_by, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAllCampaigns'
     *
     * @param  string $channel Channel of the campaign (optional)
     * @param  string $campaign_hash Hash of the campaign (optional)
     * @param  int $list_id ID of the list where the campaign belongs (optional)
     * @param  string $status Status of the campaign (optional)
     * @param  string $internal_name Internal name of the campaign (optional)
     * @param  int $created_by ID of the user who created the campaign (optional)
     * @param  int $group_id ID of the group where the campaign belongs (optional)
     * @param  \DateTime $created_min Created initial date (optional)
     * @param  \DateTime $created_max Created finish (optional)
     * @param  \DateTime $updated_min Updated initial (optional)
     * @param  \DateTime $updated_max Updated finish (optional)
     * @param  \DateTime $start_date_min Start date initial (optional)
     * @param  \DateTime $start_date_max Start date finish (optional)
     * @param  \DateTime $end_date_min End Date initial (optional)
     * @param  \DateTime $end_date_max End Date finish (optional)
     * @param  \DateTime $schedule_date_min Schedule Date initial (optional)
     * @param  \DateTime $schedule_date_max Schedule Date finish (optional)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 100)
     * @param  string $order Type of order (optional, default to 'desc')
     * @param  string $order_by Reference attribute to order campaigns (optional, default to 'created')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllCampaigns'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAllCampaignsRequest($channel = null, $campaign_hash = null, $list_id = null, $status = null, $internal_name = null, $created_by = null, $group_id = null, $created_min = null, $created_max = null, $updated_min = null, $updated_max = null, $start_date_min = null, $start_date_max = null, $end_date_min = null, $end_date_max = null, $schedule_date_min = null, $schedule_date_max = null, $offset = null, $limit = 100, $order = 'desc', $order_by = 'created', string $contentType = self::contentTypes['getAllCampaigns'][0])
    {


















        if ($offset !== null && $offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling CampaignsApi.getAllCampaigns, must be bigger than or equal to 0.');
        }
        
        if ($limit !== null && $limit > 1000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling CampaignsApi.getAllCampaigns, must be smaller than or equal to 1000.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling CampaignsApi.getAllCampaigns, must be bigger than or equal to 1.');
        }
        



        $resourcePath = '/campaigns';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $channel,
            'channel', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $campaign_hash,
            'campaign_hash', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $list_id,
            'list_id', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $status,
            'status', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $internal_name,
            'internal_name', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_by,
            'created_by', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $group_id,
            'group_id', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_min,
            'created_min', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_max,
            'created_max', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $updated_min,
            'updated_min', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $updated_max,
            'updated_max', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $start_date_min,
            'start_date_min', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $start_date_max,
            'start_date_max', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $end_date_min,
            'end_date_min', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $end_date_max,
            'end_date_max', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $schedule_date_min,
            'schedule_date_min', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $schedule_date_max,
            'schedule_date_max', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order,
            'order', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order_by,
            'order_by', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Apikey');
        if ($apiKey !== null) {
            $headers['Apikey'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
