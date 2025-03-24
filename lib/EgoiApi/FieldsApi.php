<?php
/**
 * FieldsApi
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
 * FieldsApi Class Doc Comment
 *
 * @category Class
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldsApi
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
        'createExtraField' => [
            'application/json',
        ],
        'createFieldOption' => [
            'application/json',
        ],
        'deleteExtraField' => [
            'application/json',
        ],
        'deleteFieldOption' => [
            'application/json',
        ],
        'getAllFieldOptions' => [
            'application/json',
        ],
        'getAllFields' => [
            'application/json',
        ],
        'patchBaseField' => [
            'application/json',
        ],
        'patchExtraField' => [
            'application/json',
        ],
        'updateFieldOption' => [
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
     * Operation createExtraField
     *
     * Create extra field
     *
     * @param  int $list_id ID of the List (required)
     * @param  \EgoiClient\EgoiModel\Field $field Parameters for the extra field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createExtraField'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\Field|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function createExtraField($list_id, $field, string $contentType = self::contentTypes['createExtraField'][0])
    {
        list($response) = $this->createExtraFieldWithHttpInfo($list_id, $field, $contentType);
        return $response;
    }

    /**
     * Operation createExtraFieldWithHttpInfo
     *
     * Create extra field
     *
     * @param  int $list_id ID of the List (required)
     * @param  \EgoiClient\EgoiModel\Field $field Parameters for the extra field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createExtraField'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\Field|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function createExtraFieldWithHttpInfo($list_id, $field, string $contentType = self::contentTypes['createExtraField'][0])
    {
        $request = $this->createExtraFieldRequest($list_id, $field, $contentType);

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
                case 201:
                    if ('\EgoiClient\EgoiModel\Field' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\Field' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\Field', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\EgoiClient\EgoiModel\BadRequest' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\BadRequest' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\BadRequest', []),
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

            $returnType = '\EgoiClient\EgoiModel\Field';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\Field',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\BadRequest',
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
     * Operation createExtraFieldAsync
     *
     * Create extra field
     *
     * @param  int $list_id ID of the List (required)
     * @param  \EgoiClient\EgoiModel\Field $field Parameters for the extra field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createExtraField'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createExtraFieldAsync($list_id, $field, string $contentType = self::contentTypes['createExtraField'][0])
    {
        return $this->createExtraFieldAsyncWithHttpInfo($list_id, $field, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createExtraFieldAsyncWithHttpInfo
     *
     * Create extra field
     *
     * @param  int $list_id ID of the List (required)
     * @param  \EgoiClient\EgoiModel\Field $field Parameters for the extra field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createExtraField'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createExtraFieldAsyncWithHttpInfo($list_id, $field, string $contentType = self::contentTypes['createExtraField'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\Field';
        $request = $this->createExtraFieldRequest($list_id, $field, $contentType);

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
     * Create request for operation 'createExtraField'
     *
     * @param  int $list_id ID of the List (required)
     * @param  \EgoiClient\EgoiModel\Field $field Parameters for the extra field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createExtraField'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createExtraFieldRequest($list_id, $field, string $contentType = self::contentTypes['createExtraField'][0])
    {

        // verify the required parameter 'list_id' is set
        if ($list_id === null || (is_array($list_id) && count($list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $list_id when calling createExtraField'
            );
        }
        if ($list_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$list_id" when calling FieldsApi.createExtraField, must be bigger than or equal to 1.');
        }
        
        // verify the required parameter 'field' is set
        if ($field === null || (is_array($field) && count($field) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $field when calling createExtraField'
            );
        }


        $resourcePath = '/lists/{list_id}/fields/extra';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($list_id !== null) {
            $resourcePath = str_replace(
                '{' . 'list_id' . '}',
                ObjectSerializer::toPathValue($list_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($field)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($field));
            } else {
                $httpBody = $field;
            }
        } elseif (count($formParams) > 0) {
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createFieldOption
     *
     * Create new field option
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  \EgoiClient\EgoiModel\FieldOptionPost $field_option_post Parameters for the field option (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createFieldOption'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\FieldOption|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\NotFound|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function createFieldOption($list_id, $field_id, $field_option_post, string $contentType = self::contentTypes['createFieldOption'][0])
    {
        list($response) = $this->createFieldOptionWithHttpInfo($list_id, $field_id, $field_option_post, $contentType);
        return $response;
    }

    /**
     * Operation createFieldOptionWithHttpInfo
     *
     * Create new field option
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  \EgoiClient\EgoiModel\FieldOptionPost $field_option_post Parameters for the field option (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createFieldOption'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\FieldOption|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\NotFound|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function createFieldOptionWithHttpInfo($list_id, $field_id, $field_option_post, string $contentType = self::contentTypes['createFieldOption'][0])
    {
        $request = $this->createFieldOptionRequest($list_id, $field_id, $field_option_post, $contentType);

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
                case 201:
                    if ('\EgoiClient\EgoiModel\FieldOption' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\FieldOption' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\FieldOption', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\EgoiClient\EgoiModel\BadRequest' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\BadRequest' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\BadRequest', []),
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
                case 404:
                    if ('\EgoiClient\EgoiModel\NotFound' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\NotFound' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\NotFound', []),
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

            $returnType = '\EgoiClient\EgoiModel\FieldOption';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\FieldOption',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\BadRequest',
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
     * Operation createFieldOptionAsync
     *
     * Create new field option
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  \EgoiClient\EgoiModel\FieldOptionPost $field_option_post Parameters for the field option (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createFieldOption'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFieldOptionAsync($list_id, $field_id, $field_option_post, string $contentType = self::contentTypes['createFieldOption'][0])
    {
        return $this->createFieldOptionAsyncWithHttpInfo($list_id, $field_id, $field_option_post, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createFieldOptionAsyncWithHttpInfo
     *
     * Create new field option
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  \EgoiClient\EgoiModel\FieldOptionPost $field_option_post Parameters for the field option (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createFieldOption'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFieldOptionAsyncWithHttpInfo($list_id, $field_id, $field_option_post, string $contentType = self::contentTypes['createFieldOption'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\FieldOption';
        $request = $this->createFieldOptionRequest($list_id, $field_id, $field_option_post, $contentType);

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
     * Create request for operation 'createFieldOption'
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  \EgoiClient\EgoiModel\FieldOptionPost $field_option_post Parameters for the field option (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createFieldOption'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createFieldOptionRequest($list_id, $field_id, $field_option_post, string $contentType = self::contentTypes['createFieldOption'][0])
    {

        // verify the required parameter 'list_id' is set
        if ($list_id === null || (is_array($list_id) && count($list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $list_id when calling createFieldOption'
            );
        }
        if ($list_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$list_id" when calling FieldsApi.createFieldOption, must be bigger than or equal to 1.');
        }
        
        // verify the required parameter 'field_id' is set
        if ($field_id === null || (is_array($field_id) && count($field_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $field_id when calling createFieldOption'
            );
        }
        if ($field_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$field_id" when calling FieldsApi.createFieldOption, must be bigger than or equal to 1.');
        }
        
        // verify the required parameter 'field_option_post' is set
        if ($field_option_post === null || (is_array($field_option_post) && count($field_option_post) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $field_option_post when calling createFieldOption'
            );
        }


        $resourcePath = '/lists/{list_id}/fields/extra/{field_id}/options';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($list_id !== null) {
            $resourcePath = str_replace(
                '{' . 'list_id' . '}',
                ObjectSerializer::toPathValue($list_id),
                $resourcePath
            );
        }
        // path params
        if ($field_id !== null) {
            $resourcePath = str_replace(
                '{' . 'field_id' . '}',
                ObjectSerializer::toPathValue($field_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($field_option_post)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($field_option_post));
            } else {
                $httpBody = $field_option_post;
            }
        } elseif (count($formParams) > 0) {
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteExtraField
     *
     * Remove extra field
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteExtraField'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteExtraField($list_id, $field_id, string $contentType = self::contentTypes['deleteExtraField'][0])
    {
        $this->deleteExtraFieldWithHttpInfo($list_id, $field_id, $contentType);
    }

    /**
     * Operation deleteExtraFieldWithHttpInfo
     *
     * Remove extra field
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteExtraField'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteExtraFieldWithHttpInfo($list_id, $field_id, string $contentType = self::contentTypes['deleteExtraField'][0])
    {
        $request = $this->deleteExtraFieldRequest($list_id, $field_id, $contentType);

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
                        '\EgoiClient\EgoiModel\DeleteFieldsConflict',
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
     * Operation deleteExtraFieldAsync
     *
     * Remove extra field
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteExtraField'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteExtraFieldAsync($list_id, $field_id, string $contentType = self::contentTypes['deleteExtraField'][0])
    {
        return $this->deleteExtraFieldAsyncWithHttpInfo($list_id, $field_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteExtraFieldAsyncWithHttpInfo
     *
     * Remove extra field
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteExtraField'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteExtraFieldAsyncWithHttpInfo($list_id, $field_id, string $contentType = self::contentTypes['deleteExtraField'][0])
    {
        $returnType = '';
        $request = $this->deleteExtraFieldRequest($list_id, $field_id, $contentType);

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
     * Create request for operation 'deleteExtraField'
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteExtraField'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteExtraFieldRequest($list_id, $field_id, string $contentType = self::contentTypes['deleteExtraField'][0])
    {

        // verify the required parameter 'list_id' is set
        if ($list_id === null || (is_array($list_id) && count($list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $list_id when calling deleteExtraField'
            );
        }
        if ($list_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$list_id" when calling FieldsApi.deleteExtraField, must be bigger than or equal to 1.');
        }
        
        // verify the required parameter 'field_id' is set
        if ($field_id === null || (is_array($field_id) && count($field_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $field_id when calling deleteExtraField'
            );
        }
        if ($field_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$field_id" when calling FieldsApi.deleteExtraField, must be bigger than or equal to 1.');
        }
        

        $resourcePath = '/lists/{list_id}/fields/extra/{field_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($list_id !== null) {
            $resourcePath = str_replace(
                '{' . 'list_id' . '}',
                ObjectSerializer::toPathValue($list_id),
                $resourcePath
            );
        }
        // path params
        if ($field_id !== null) {
            $resourcePath = str_replace(
                '{' . 'field_id' . '}',
                ObjectSerializer::toPathValue($field_id),
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
     * Operation deleteFieldOption
     *
     * Deletes an option
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  int $option_id ID of the field option (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteFieldOption'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteFieldOption($list_id, $field_id, $option_id, string $contentType = self::contentTypes['deleteFieldOption'][0])
    {
        $this->deleteFieldOptionWithHttpInfo($list_id, $field_id, $option_id, $contentType);
    }

    /**
     * Operation deleteFieldOptionWithHttpInfo
     *
     * Deletes an option
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  int $option_id ID of the field option (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteFieldOption'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteFieldOptionWithHttpInfo($list_id, $field_id, $option_id, string $contentType = self::contentTypes['deleteFieldOption'][0])
    {
        $request = $this->deleteFieldOptionRequest($list_id, $field_id, $option_id, $contentType);

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
     * Operation deleteFieldOptionAsync
     *
     * Deletes an option
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  int $option_id ID of the field option (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteFieldOption'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFieldOptionAsync($list_id, $field_id, $option_id, string $contentType = self::contentTypes['deleteFieldOption'][0])
    {
        return $this->deleteFieldOptionAsyncWithHttpInfo($list_id, $field_id, $option_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteFieldOptionAsyncWithHttpInfo
     *
     * Deletes an option
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  int $option_id ID of the field option (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteFieldOption'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFieldOptionAsyncWithHttpInfo($list_id, $field_id, $option_id, string $contentType = self::contentTypes['deleteFieldOption'][0])
    {
        $returnType = '';
        $request = $this->deleteFieldOptionRequest($list_id, $field_id, $option_id, $contentType);

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
     * Create request for operation 'deleteFieldOption'
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  int $option_id ID of the field option (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteFieldOption'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteFieldOptionRequest($list_id, $field_id, $option_id, string $contentType = self::contentTypes['deleteFieldOption'][0])
    {

        // verify the required parameter 'list_id' is set
        if ($list_id === null || (is_array($list_id) && count($list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $list_id when calling deleteFieldOption'
            );
        }
        if ($list_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$list_id" when calling FieldsApi.deleteFieldOption, must be bigger than or equal to 1.');
        }
        
        // verify the required parameter 'field_id' is set
        if ($field_id === null || (is_array($field_id) && count($field_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $field_id when calling deleteFieldOption'
            );
        }
        if ($field_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$field_id" when calling FieldsApi.deleteFieldOption, must be bigger than or equal to 1.');
        }
        
        // verify the required parameter 'option_id' is set
        if ($option_id === null || (is_array($option_id) && count($option_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $option_id when calling deleteFieldOption'
            );
        }
        if ($option_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$option_id" when calling FieldsApi.deleteFieldOption, must be bigger than or equal to 1.');
        }
        

        $resourcePath = '/lists/{list_id}/fields/extra/{field_id}/options/{option_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($list_id !== null) {
            $resourcePath = str_replace(
                '{' . 'list_id' . '}',
                ObjectSerializer::toPathValue($list_id),
                $resourcePath
            );
        }
        // path params
        if ($field_id !== null) {
            $resourcePath = str_replace(
                '{' . 'field_id' . '}',
                ObjectSerializer::toPathValue($field_id),
                $resourcePath
            );
        }
        // path params
        if ($option_id !== null) {
            $resourcePath = str_replace(
                '{' . 'option_id' . '}',
                ObjectSerializer::toPathValue($option_id),
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
     * Operation getAllFieldOptions
     *
     * Get all field options
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllFieldOptions'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\FieldOptionsCollection|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\NotFound|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function getAllFieldOptions($list_id, $field_id, string $contentType = self::contentTypes['getAllFieldOptions'][0])
    {
        list($response) = $this->getAllFieldOptionsWithHttpInfo($list_id, $field_id, $contentType);
        return $response;
    }

    /**
     * Operation getAllFieldOptionsWithHttpInfo
     *
     * Get all field options
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllFieldOptions'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\FieldOptionsCollection|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\NotFound|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllFieldOptionsWithHttpInfo($list_id, $field_id, string $contentType = self::contentTypes['getAllFieldOptions'][0])
    {
        $request = $this->getAllFieldOptionsRequest($list_id, $field_id, $contentType);

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
                    if ('\EgoiClient\EgoiModel\FieldOptionsCollection' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\FieldOptionsCollection' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\FieldOptionsCollection', []),
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
                case 404:
                    if ('\EgoiClient\EgoiModel\NotFound' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\NotFound' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\NotFound', []),
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

            $returnType = '\EgoiClient\EgoiModel\FieldOptionsCollection';
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
                        '\EgoiClient\EgoiModel\FieldOptionsCollection',
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
     * Operation getAllFieldOptionsAsync
     *
     * Get all field options
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllFieldOptions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllFieldOptionsAsync($list_id, $field_id, string $contentType = self::contentTypes['getAllFieldOptions'][0])
    {
        return $this->getAllFieldOptionsAsyncWithHttpInfo($list_id, $field_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllFieldOptionsAsyncWithHttpInfo
     *
     * Get all field options
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllFieldOptions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllFieldOptionsAsyncWithHttpInfo($list_id, $field_id, string $contentType = self::contentTypes['getAllFieldOptions'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\FieldOptionsCollection';
        $request = $this->getAllFieldOptionsRequest($list_id, $field_id, $contentType);

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
     * Create request for operation 'getAllFieldOptions'
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllFieldOptions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAllFieldOptionsRequest($list_id, $field_id, string $contentType = self::contentTypes['getAllFieldOptions'][0])
    {

        // verify the required parameter 'list_id' is set
        if ($list_id === null || (is_array($list_id) && count($list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $list_id when calling getAllFieldOptions'
            );
        }
        if ($list_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$list_id" when calling FieldsApi.getAllFieldOptions, must be bigger than or equal to 1.');
        }
        
        // verify the required parameter 'field_id' is set
        if ($field_id === null || (is_array($field_id) && count($field_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $field_id when calling getAllFieldOptions'
            );
        }
        if ($field_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$field_id" when calling FieldsApi.getAllFieldOptions, must be bigger than or equal to 1.');
        }
        

        $resourcePath = '/lists/{list_id}/fields/extra/{field_id}/options';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($list_id !== null) {
            $resourcePath = str_replace(
                '{' . 'list_id' . '}',
                ObjectSerializer::toPathValue($list_id),
                $resourcePath
            );
        }
        // path params
        if ($field_id !== null) {
            $resourcePath = str_replace(
                '{' . 'field_id' . '}',
                ObjectSerializer::toPathValue($field_id),
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
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAllFields
     *
     * Get all fields
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllFields'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\ComplexField[]|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function getAllFields($list_id, $offset = null, $limit = 10, string $contentType = self::contentTypes['getAllFields'][0])
    {
        list($response) = $this->getAllFieldsWithHttpInfo($list_id, $offset, $limit, $contentType);
        return $response;
    }

    /**
     * Operation getAllFieldsWithHttpInfo
     *
     * Get all fields
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllFields'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\ComplexField[]|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllFieldsWithHttpInfo($list_id, $offset = null, $limit = 10, string $contentType = self::contentTypes['getAllFields'][0])
    {
        $request = $this->getAllFieldsRequest($list_id, $offset, $limit, $contentType);

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
                    if ('\EgoiClient\EgoiModel\ComplexField[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\ComplexField[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\ComplexField[]', []),
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

            $returnType = '\EgoiClient\EgoiModel\ComplexField[]';
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
                        '\EgoiClient\EgoiModel\ComplexField[]',
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
     * Operation getAllFieldsAsync
     *
     * Get all fields
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllFields'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllFieldsAsync($list_id, $offset = null, $limit = 10, string $contentType = self::contentTypes['getAllFields'][0])
    {
        return $this->getAllFieldsAsyncWithHttpInfo($list_id, $offset, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllFieldsAsyncWithHttpInfo
     *
     * Get all fields
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllFields'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllFieldsAsyncWithHttpInfo($list_id, $offset = null, $limit = 10, string $contentType = self::contentTypes['getAllFields'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\ComplexField[]';
        $request = $this->getAllFieldsRequest($list_id, $offset, $limit, $contentType);

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
     * Create request for operation 'getAllFields'
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllFields'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAllFieldsRequest($list_id, $offset = null, $limit = 10, string $contentType = self::contentTypes['getAllFields'][0])
    {

        // verify the required parameter 'list_id' is set
        if ($list_id === null || (is_array($list_id) && count($list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $list_id when calling getAllFields'
            );
        }
        if ($list_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$list_id" when calling FieldsApi.getAllFields, must be bigger than or equal to 1.');
        }
        
        if ($offset !== null && $offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling FieldsApi.getAllFields, must be bigger than or equal to 0.');
        }
        
        if ($limit !== null && $limit > 1000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling FieldsApi.getAllFields, must be smaller than or equal to 1000.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling FieldsApi.getAllFields, must be bigger than or equal to 1.');
        }
        

        $resourcePath = '/lists/{list_id}/fields';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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


        // path params
        if ($list_id !== null) {
            $resourcePath = str_replace(
                '{' . 'list_id' . '}',
                ObjectSerializer::toPathValue($list_id),
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
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation patchBaseField
     *
     * Update base field
     *
     * @param  int $list_id ID of the List (required)
     * @param  string $field_id ID of the base field (required)
     * @param  \EgoiClient\EgoiModel\PatchRequestBaseField $patch_request_base_field Parameters for the extra field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchBaseField'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\Field|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\NotFound|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function patchBaseField($list_id, $field_id, $patch_request_base_field, string $contentType = self::contentTypes['patchBaseField'][0])
    {
        list($response) = $this->patchBaseFieldWithHttpInfo($list_id, $field_id, $patch_request_base_field, $contentType);
        return $response;
    }

    /**
     * Operation patchBaseFieldWithHttpInfo
     *
     * Update base field
     *
     * @param  int $list_id ID of the List (required)
     * @param  string $field_id ID of the base field (required)
     * @param  \EgoiClient\EgoiModel\PatchRequestBaseField $patch_request_base_field Parameters for the extra field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchBaseField'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\Field|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\NotFound|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchBaseFieldWithHttpInfo($list_id, $field_id, $patch_request_base_field, string $contentType = self::contentTypes['patchBaseField'][0])
    {
        $request = $this->patchBaseFieldRequest($list_id, $field_id, $patch_request_base_field, $contentType);

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
                    if ('\EgoiClient\EgoiModel\Field' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\Field' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\Field', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\EgoiClient\EgoiModel\BadRequest' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\BadRequest' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\BadRequest', []),
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
                case 404:
                    if ('\EgoiClient\EgoiModel\NotFound' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\NotFound' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\NotFound', []),
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

            $returnType = '\EgoiClient\EgoiModel\Field';
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
                        '\EgoiClient\EgoiModel\Field',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\BadRequest',
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
     * Operation patchBaseFieldAsync
     *
     * Update base field
     *
     * @param  int $list_id ID of the List (required)
     * @param  string $field_id ID of the base field (required)
     * @param  \EgoiClient\EgoiModel\PatchRequestBaseField $patch_request_base_field Parameters for the extra field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchBaseField'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchBaseFieldAsync($list_id, $field_id, $patch_request_base_field, string $contentType = self::contentTypes['patchBaseField'][0])
    {
        return $this->patchBaseFieldAsyncWithHttpInfo($list_id, $field_id, $patch_request_base_field, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation patchBaseFieldAsyncWithHttpInfo
     *
     * Update base field
     *
     * @param  int $list_id ID of the List (required)
     * @param  string $field_id ID of the base field (required)
     * @param  \EgoiClient\EgoiModel\PatchRequestBaseField $patch_request_base_field Parameters for the extra field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchBaseField'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchBaseFieldAsyncWithHttpInfo($list_id, $field_id, $patch_request_base_field, string $contentType = self::contentTypes['patchBaseField'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\Field';
        $request = $this->patchBaseFieldRequest($list_id, $field_id, $patch_request_base_field, $contentType);

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
     * Create request for operation 'patchBaseField'
     *
     * @param  int $list_id ID of the List (required)
     * @param  string $field_id ID of the base field (required)
     * @param  \EgoiClient\EgoiModel\PatchRequestBaseField $patch_request_base_field Parameters for the extra field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchBaseField'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function patchBaseFieldRequest($list_id, $field_id, $patch_request_base_field, string $contentType = self::contentTypes['patchBaseField'][0])
    {

        // verify the required parameter 'list_id' is set
        if ($list_id === null || (is_array($list_id) && count($list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $list_id when calling patchBaseField'
            );
        }
        if ($list_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$list_id" when calling FieldsApi.patchBaseField, must be bigger than or equal to 1.');
        }
        
        // verify the required parameter 'field_id' is set
        if ($field_id === null || (is_array($field_id) && count($field_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $field_id when calling patchBaseField'
            );
        }

        // verify the required parameter 'patch_request_base_field' is set
        if ($patch_request_base_field === null || (is_array($patch_request_base_field) && count($patch_request_base_field) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $patch_request_base_field when calling patchBaseField'
            );
        }


        $resourcePath = '/lists/{list_id}/fields/base/{field_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($list_id !== null) {
            $resourcePath = str_replace(
                '{' . 'list_id' . '}',
                ObjectSerializer::toPathValue($list_id),
                $resourcePath
            );
        }
        // path params
        if ($field_id !== null) {
            $resourcePath = str_replace(
                '{' . 'field_id' . '}',
                ObjectSerializer::toPathValue($field_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($patch_request_base_field)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($patch_request_base_field));
            } else {
                $httpBody = $patch_request_base_field;
            }
        } elseif (count($formParams) > 0) {
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
            'PATCH',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation patchExtraField
     *
     * Update extra field
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  \EgoiClient\EgoiModel\PatchRequestField $patch_request_field Parameters for the extra field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchExtraField'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\Field|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\NotFound|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function patchExtraField($list_id, $field_id, $patch_request_field, string $contentType = self::contentTypes['patchExtraField'][0])
    {
        list($response) = $this->patchExtraFieldWithHttpInfo($list_id, $field_id, $patch_request_field, $contentType);
        return $response;
    }

    /**
     * Operation patchExtraFieldWithHttpInfo
     *
     * Update extra field
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  \EgoiClient\EgoiModel\PatchRequestField $patch_request_field Parameters for the extra field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchExtraField'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\Field|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\NotFound|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchExtraFieldWithHttpInfo($list_id, $field_id, $patch_request_field, string $contentType = self::contentTypes['patchExtraField'][0])
    {
        $request = $this->patchExtraFieldRequest($list_id, $field_id, $patch_request_field, $contentType);

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
                    if ('\EgoiClient\EgoiModel\Field' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\Field' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\Field', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\EgoiClient\EgoiModel\BadRequest' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\BadRequest' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\BadRequest', []),
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
                case 404:
                    if ('\EgoiClient\EgoiModel\NotFound' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\NotFound' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\NotFound', []),
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

            $returnType = '\EgoiClient\EgoiModel\Field';
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
                        '\EgoiClient\EgoiModel\Field',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\BadRequest',
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
     * Operation patchExtraFieldAsync
     *
     * Update extra field
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  \EgoiClient\EgoiModel\PatchRequestField $patch_request_field Parameters for the extra field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchExtraField'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchExtraFieldAsync($list_id, $field_id, $patch_request_field, string $contentType = self::contentTypes['patchExtraField'][0])
    {
        return $this->patchExtraFieldAsyncWithHttpInfo($list_id, $field_id, $patch_request_field, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation patchExtraFieldAsyncWithHttpInfo
     *
     * Update extra field
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  \EgoiClient\EgoiModel\PatchRequestField $patch_request_field Parameters for the extra field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchExtraField'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchExtraFieldAsyncWithHttpInfo($list_id, $field_id, $patch_request_field, string $contentType = self::contentTypes['patchExtraField'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\Field';
        $request = $this->patchExtraFieldRequest($list_id, $field_id, $patch_request_field, $contentType);

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
     * Create request for operation 'patchExtraField'
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  \EgoiClient\EgoiModel\PatchRequestField $patch_request_field Parameters for the extra field (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchExtraField'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function patchExtraFieldRequest($list_id, $field_id, $patch_request_field, string $contentType = self::contentTypes['patchExtraField'][0])
    {

        // verify the required parameter 'list_id' is set
        if ($list_id === null || (is_array($list_id) && count($list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $list_id when calling patchExtraField'
            );
        }
        if ($list_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$list_id" when calling FieldsApi.patchExtraField, must be bigger than or equal to 1.');
        }
        
        // verify the required parameter 'field_id' is set
        if ($field_id === null || (is_array($field_id) && count($field_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $field_id when calling patchExtraField'
            );
        }
        if ($field_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$field_id" when calling FieldsApi.patchExtraField, must be bigger than or equal to 1.');
        }
        
        // verify the required parameter 'patch_request_field' is set
        if ($patch_request_field === null || (is_array($patch_request_field) && count($patch_request_field) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $patch_request_field when calling patchExtraField'
            );
        }


        $resourcePath = '/lists/{list_id}/fields/extra/{field_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($list_id !== null) {
            $resourcePath = str_replace(
                '{' . 'list_id' . '}',
                ObjectSerializer::toPathValue($list_id),
                $resourcePath
            );
        }
        // path params
        if ($field_id !== null) {
            $resourcePath = str_replace(
                '{' . 'field_id' . '}',
                ObjectSerializer::toPathValue($field_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($patch_request_field)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($patch_request_field));
            } else {
                $httpBody = $patch_request_field;
            }
        } elseif (count($formParams) > 0) {
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
            'PATCH',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateFieldOption
     *
     * Update field option
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  int $option_id ID of the field option (required)
     * @param  \EgoiClient\EgoiModel\FieldOptionPost $field_option_post Parameters for the field option (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateFieldOption'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\FieldOption|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\NotFound|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function updateFieldOption($list_id, $field_id, $option_id, $field_option_post, string $contentType = self::contentTypes['updateFieldOption'][0])
    {
        list($response) = $this->updateFieldOptionWithHttpInfo($list_id, $field_id, $option_id, $field_option_post, $contentType);
        return $response;
    }

    /**
     * Operation updateFieldOptionWithHttpInfo
     *
     * Update field option
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  int $option_id ID of the field option (required)
     * @param  \EgoiClient\EgoiModel\FieldOptionPost $field_option_post Parameters for the field option (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateFieldOption'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\FieldOption|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\NotFound|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateFieldOptionWithHttpInfo($list_id, $field_id, $option_id, $field_option_post, string $contentType = self::contentTypes['updateFieldOption'][0])
    {
        $request = $this->updateFieldOptionRequest($list_id, $field_id, $option_id, $field_option_post, $contentType);

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
                    if ('\EgoiClient\EgoiModel\FieldOption' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\FieldOption' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\FieldOption', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\EgoiClient\EgoiModel\BadRequest' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\BadRequest' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\BadRequest', []),
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
                case 404:
                    if ('\EgoiClient\EgoiModel\NotFound' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\NotFound' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\NotFound', []),
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

            $returnType = '\EgoiClient\EgoiModel\FieldOption';
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
                        '\EgoiClient\EgoiModel\FieldOption',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\BadRequest',
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
     * Operation updateFieldOptionAsync
     *
     * Update field option
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  int $option_id ID of the field option (required)
     * @param  \EgoiClient\EgoiModel\FieldOptionPost $field_option_post Parameters for the field option (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateFieldOption'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateFieldOptionAsync($list_id, $field_id, $option_id, $field_option_post, string $contentType = self::contentTypes['updateFieldOption'][0])
    {
        return $this->updateFieldOptionAsyncWithHttpInfo($list_id, $field_id, $option_id, $field_option_post, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateFieldOptionAsyncWithHttpInfo
     *
     * Update field option
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  int $option_id ID of the field option (required)
     * @param  \EgoiClient\EgoiModel\FieldOptionPost $field_option_post Parameters for the field option (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateFieldOption'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateFieldOptionAsyncWithHttpInfo($list_id, $field_id, $option_id, $field_option_post, string $contentType = self::contentTypes['updateFieldOption'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\FieldOption';
        $request = $this->updateFieldOptionRequest($list_id, $field_id, $option_id, $field_option_post, $contentType);

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
     * Create request for operation 'updateFieldOption'
     *
     * @param  int $list_id ID of the List (required)
     * @param  int $field_id ID of the Field (required)
     * @param  int $option_id ID of the field option (required)
     * @param  \EgoiClient\EgoiModel\FieldOptionPost $field_option_post Parameters for the field option (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateFieldOption'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateFieldOptionRequest($list_id, $field_id, $option_id, $field_option_post, string $contentType = self::contentTypes['updateFieldOption'][0])
    {

        // verify the required parameter 'list_id' is set
        if ($list_id === null || (is_array($list_id) && count($list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $list_id when calling updateFieldOption'
            );
        }
        if ($list_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$list_id" when calling FieldsApi.updateFieldOption, must be bigger than or equal to 1.');
        }
        
        // verify the required parameter 'field_id' is set
        if ($field_id === null || (is_array($field_id) && count($field_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $field_id when calling updateFieldOption'
            );
        }
        if ($field_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$field_id" when calling FieldsApi.updateFieldOption, must be bigger than or equal to 1.');
        }
        
        // verify the required parameter 'option_id' is set
        if ($option_id === null || (is_array($option_id) && count($option_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $option_id when calling updateFieldOption'
            );
        }
        if ($option_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$option_id" when calling FieldsApi.updateFieldOption, must be bigger than or equal to 1.');
        }
        
        // verify the required parameter 'field_option_post' is set
        if ($field_option_post === null || (is_array($field_option_post) && count($field_option_post) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $field_option_post when calling updateFieldOption'
            );
        }


        $resourcePath = '/lists/{list_id}/fields/extra/{field_id}/options/{option_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($list_id !== null) {
            $resourcePath = str_replace(
                '{' . 'list_id' . '}',
                ObjectSerializer::toPathValue($list_id),
                $resourcePath
            );
        }
        // path params
        if ($field_id !== null) {
            $resourcePath = str_replace(
                '{' . 'field_id' . '}',
                ObjectSerializer::toPathValue($field_id),
                $resourcePath
            );
        }
        // path params
        if ($option_id !== null) {
            $resourcePath = str_replace(
                '{' . 'option_id' . '}',
                ObjectSerializer::toPathValue($option_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($field_option_post)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($field_option_post));
            } else {
                $httpBody = $field_option_post;
            }
        } elseif (count($formParams) > 0) {
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
            'PATCH',
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
