<?php
/**
 * AdvancedReportsApi
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
 * AdvancedReportsApi Class Doc Comment
 *
 * @category Class
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdvancedReportsApi
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
        'generateByModelReport' => [
            'application/json',
        ],
        'generateContactActivityReport' => [
            'application/json',
        ],
        'generateEmailBouncesReport' => [
            'application/json',
        ],
        'generateEmailClicksByContactReport' => [
            'application/json',
        ],
        'generateEmailClicksByUrlReport' => [
            'application/json',
        ],
        'generateEmailEventsReport' => [
            'application/json',
        ],
        'generateEmailUnsubscriptionsReport' => [
            'application/json',
        ],
        'generateFormAnswersReport' => [
            'application/json',
        ],
        'generateSendsReport' => [
            'application/json',
        ],
        'generateSmsBouncesReport' => [
            'application/json',
        ],
        'generateSmsEventsReport' => [
            'application/json',
        ],
        'generateSubscriptionsReport' => [
            'application/json',
        ],
        'generateUnsubscriptionsReport' => [
            'application/json',
        ],
        'getAllAdvancedReports' => [
            'application/json',
        ],
        'getAllAdvancedReportsModels' => [
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
     * Operation generateByModelReport
     *
     * Generate report by model
     *
     * @param  \EgoiClient\EgoiModel\GenerateByModelReport $generate_by_model_report Parameters for the report by model Id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateByModelReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function generateByModelReport($generate_by_model_report, string $contentType = self::contentTypes['generateByModelReport'][0])
    {
        list($response) = $this->generateByModelReportWithHttpInfo($generate_by_model_report, $contentType);
        return $response;
    }

    /**
     * Operation generateByModelReportWithHttpInfo
     *
     * Generate report by model
     *
     * @param  \EgoiClient\EgoiModel\GenerateByModelReport $generate_by_model_report Parameters for the report by model Id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateByModelReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateByModelReportWithHttpInfo($generate_by_model_report, string $contentType = self::contentTypes['generateByModelReport'][0])
    {
        $request = $this->generateByModelReportRequest($generate_by_model_report, $contentType);

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
                case 202:
                    if ('\EgoiClient\EgoiModel\AcceptedResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\AcceptedResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\AcceptedResponse', []),
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

            $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\AcceptedResponse',
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
     * Operation generateByModelReportAsync
     *
     * Generate report by model
     *
     * @param  \EgoiClient\EgoiModel\GenerateByModelReport $generate_by_model_report Parameters for the report by model Id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateByModelReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateByModelReportAsync($generate_by_model_report, string $contentType = self::contentTypes['generateByModelReport'][0])
    {
        return $this->generateByModelReportAsyncWithHttpInfo($generate_by_model_report, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateByModelReportAsyncWithHttpInfo
     *
     * Generate report by model
     *
     * @param  \EgoiClient\EgoiModel\GenerateByModelReport $generate_by_model_report Parameters for the report by model Id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateByModelReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateByModelReportAsyncWithHttpInfo($generate_by_model_report, string $contentType = self::contentTypes['generateByModelReport'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
        $request = $this->generateByModelReportRequest($generate_by_model_report, $contentType);

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
     * Create request for operation 'generateByModelReport'
     *
     * @param  \EgoiClient\EgoiModel\GenerateByModelReport $generate_by_model_report Parameters for the report by model Id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateByModelReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function generateByModelReportRequest($generate_by_model_report, string $contentType = self::contentTypes['generateByModelReport'][0])
    {

        // verify the required parameter 'generate_by_model_report' is set
        if ($generate_by_model_report === null || (is_array($generate_by_model_report) && count($generate_by_model_report) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $generate_by_model_report when calling generateByModelReport'
            );
        }


        $resourcePath = '/reports/advanced/model';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($generate_by_model_report)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($generate_by_model_report));
            } else {
                $httpBody = $generate_by_model_report;
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
     * Operation generateContactActivityReport
     *
     * Generate contact activity report
     *
     * @param  \EgoiClient\EgoiModel\GenerateContactActivityReport $generate_contact_activity_report Parameters for the contact activity report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateContactActivityReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function generateContactActivityReport($generate_contact_activity_report, string $contentType = self::contentTypes['generateContactActivityReport'][0])
    {
        list($response) = $this->generateContactActivityReportWithHttpInfo($generate_contact_activity_report, $contentType);
        return $response;
    }

    /**
     * Operation generateContactActivityReportWithHttpInfo
     *
     * Generate contact activity report
     *
     * @param  \EgoiClient\EgoiModel\GenerateContactActivityReport $generate_contact_activity_report Parameters for the contact activity report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateContactActivityReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateContactActivityReportWithHttpInfo($generate_contact_activity_report, string $contentType = self::contentTypes['generateContactActivityReport'][0])
    {
        $request = $this->generateContactActivityReportRequest($generate_contact_activity_report, $contentType);

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
                case 202:
                    if ('\EgoiClient\EgoiModel\AcceptedResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\AcceptedResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\AcceptedResponse', []),
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

            $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\AcceptedResponse',
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
     * Operation generateContactActivityReportAsync
     *
     * Generate contact activity report
     *
     * @param  \EgoiClient\EgoiModel\GenerateContactActivityReport $generate_contact_activity_report Parameters for the contact activity report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateContactActivityReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateContactActivityReportAsync($generate_contact_activity_report, string $contentType = self::contentTypes['generateContactActivityReport'][0])
    {
        return $this->generateContactActivityReportAsyncWithHttpInfo($generate_contact_activity_report, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateContactActivityReportAsyncWithHttpInfo
     *
     * Generate contact activity report
     *
     * @param  \EgoiClient\EgoiModel\GenerateContactActivityReport $generate_contact_activity_report Parameters for the contact activity report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateContactActivityReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateContactActivityReportAsyncWithHttpInfo($generate_contact_activity_report, string $contentType = self::contentTypes['generateContactActivityReport'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
        $request = $this->generateContactActivityReportRequest($generate_contact_activity_report, $contentType);

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
     * Create request for operation 'generateContactActivityReport'
     *
     * @param  \EgoiClient\EgoiModel\GenerateContactActivityReport $generate_contact_activity_report Parameters for the contact activity report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateContactActivityReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function generateContactActivityReportRequest($generate_contact_activity_report, string $contentType = self::contentTypes['generateContactActivityReport'][0])
    {

        // verify the required parameter 'generate_contact_activity_report' is set
        if ($generate_contact_activity_report === null || (is_array($generate_contact_activity_report) && count($generate_contact_activity_report) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $generate_contact_activity_report when calling generateContactActivityReport'
            );
        }


        $resourcePath = '/reports/advanced/contact-activity';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($generate_contact_activity_report)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($generate_contact_activity_report));
            } else {
                $httpBody = $generate_contact_activity_report;
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
     * Operation generateEmailBouncesReport
     *
     * Generate email bounces report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailBouncesReport $generate_email_bounces_report Parameters for the email bounces report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailBouncesReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function generateEmailBouncesReport($generate_email_bounces_report, string $contentType = self::contentTypes['generateEmailBouncesReport'][0])
    {
        list($response) = $this->generateEmailBouncesReportWithHttpInfo($generate_email_bounces_report, $contentType);
        return $response;
    }

    /**
     * Operation generateEmailBouncesReportWithHttpInfo
     *
     * Generate email bounces report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailBouncesReport $generate_email_bounces_report Parameters for the email bounces report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailBouncesReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateEmailBouncesReportWithHttpInfo($generate_email_bounces_report, string $contentType = self::contentTypes['generateEmailBouncesReport'][0])
    {
        $request = $this->generateEmailBouncesReportRequest($generate_email_bounces_report, $contentType);

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
                case 202:
                    if ('\EgoiClient\EgoiModel\AcceptedResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\AcceptedResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\AcceptedResponse', []),
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

            $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\AcceptedResponse',
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
     * Operation generateEmailBouncesReportAsync
     *
     * Generate email bounces report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailBouncesReport $generate_email_bounces_report Parameters for the email bounces report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailBouncesReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateEmailBouncesReportAsync($generate_email_bounces_report, string $contentType = self::contentTypes['generateEmailBouncesReport'][0])
    {
        return $this->generateEmailBouncesReportAsyncWithHttpInfo($generate_email_bounces_report, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateEmailBouncesReportAsyncWithHttpInfo
     *
     * Generate email bounces report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailBouncesReport $generate_email_bounces_report Parameters for the email bounces report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailBouncesReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateEmailBouncesReportAsyncWithHttpInfo($generate_email_bounces_report, string $contentType = self::contentTypes['generateEmailBouncesReport'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
        $request = $this->generateEmailBouncesReportRequest($generate_email_bounces_report, $contentType);

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
     * Create request for operation 'generateEmailBouncesReport'
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailBouncesReport $generate_email_bounces_report Parameters for the email bounces report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailBouncesReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function generateEmailBouncesReportRequest($generate_email_bounces_report, string $contentType = self::contentTypes['generateEmailBouncesReport'][0])
    {

        // verify the required parameter 'generate_email_bounces_report' is set
        if ($generate_email_bounces_report === null || (is_array($generate_email_bounces_report) && count($generate_email_bounces_report) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $generate_email_bounces_report when calling generateEmailBouncesReport'
            );
        }


        $resourcePath = '/reports/advanced/email-bounces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($generate_email_bounces_report)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($generate_email_bounces_report));
            } else {
                $httpBody = $generate_email_bounces_report;
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
     * Operation generateEmailClicksByContactReport
     *
     * Generate email clicks by contact report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailClicksByContactReport $generate_email_clicks_by_contact_report Parameters for the email clicks by contact report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailClicksByContactReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function generateEmailClicksByContactReport($generate_email_clicks_by_contact_report, string $contentType = self::contentTypes['generateEmailClicksByContactReport'][0])
    {
        list($response) = $this->generateEmailClicksByContactReportWithHttpInfo($generate_email_clicks_by_contact_report, $contentType);
        return $response;
    }

    /**
     * Operation generateEmailClicksByContactReportWithHttpInfo
     *
     * Generate email clicks by contact report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailClicksByContactReport $generate_email_clicks_by_contact_report Parameters for the email clicks by contact report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailClicksByContactReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateEmailClicksByContactReportWithHttpInfo($generate_email_clicks_by_contact_report, string $contentType = self::contentTypes['generateEmailClicksByContactReport'][0])
    {
        $request = $this->generateEmailClicksByContactReportRequest($generate_email_clicks_by_contact_report, $contentType);

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
                case 202:
                    if ('\EgoiClient\EgoiModel\AcceptedResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\AcceptedResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\AcceptedResponse', []),
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

            $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\AcceptedResponse',
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
     * Operation generateEmailClicksByContactReportAsync
     *
     * Generate email clicks by contact report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailClicksByContactReport $generate_email_clicks_by_contact_report Parameters for the email clicks by contact report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailClicksByContactReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateEmailClicksByContactReportAsync($generate_email_clicks_by_contact_report, string $contentType = self::contentTypes['generateEmailClicksByContactReport'][0])
    {
        return $this->generateEmailClicksByContactReportAsyncWithHttpInfo($generate_email_clicks_by_contact_report, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateEmailClicksByContactReportAsyncWithHttpInfo
     *
     * Generate email clicks by contact report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailClicksByContactReport $generate_email_clicks_by_contact_report Parameters for the email clicks by contact report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailClicksByContactReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateEmailClicksByContactReportAsyncWithHttpInfo($generate_email_clicks_by_contact_report, string $contentType = self::contentTypes['generateEmailClicksByContactReport'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
        $request = $this->generateEmailClicksByContactReportRequest($generate_email_clicks_by_contact_report, $contentType);

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
     * Create request for operation 'generateEmailClicksByContactReport'
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailClicksByContactReport $generate_email_clicks_by_contact_report Parameters for the email clicks by contact report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailClicksByContactReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function generateEmailClicksByContactReportRequest($generate_email_clicks_by_contact_report, string $contentType = self::contentTypes['generateEmailClicksByContactReport'][0])
    {

        // verify the required parameter 'generate_email_clicks_by_contact_report' is set
        if ($generate_email_clicks_by_contact_report === null || (is_array($generate_email_clicks_by_contact_report) && count($generate_email_clicks_by_contact_report) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $generate_email_clicks_by_contact_report when calling generateEmailClicksByContactReport'
            );
        }


        $resourcePath = '/reports/advanced/email-clicks-by-contact';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($generate_email_clicks_by_contact_report)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($generate_email_clicks_by_contact_report));
            } else {
                $httpBody = $generate_email_clicks_by_contact_report;
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
     * Operation generateEmailClicksByUrlReport
     *
     * Generate email clicks by URL report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailClicksByUrlReport $generate_email_clicks_by_url_report Parameters for the email clicks by URL report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailClicksByUrlReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function generateEmailClicksByUrlReport($generate_email_clicks_by_url_report, string $contentType = self::contentTypes['generateEmailClicksByUrlReport'][0])
    {
        list($response) = $this->generateEmailClicksByUrlReportWithHttpInfo($generate_email_clicks_by_url_report, $contentType);
        return $response;
    }

    /**
     * Operation generateEmailClicksByUrlReportWithHttpInfo
     *
     * Generate email clicks by URL report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailClicksByUrlReport $generate_email_clicks_by_url_report Parameters for the email clicks by URL report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailClicksByUrlReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateEmailClicksByUrlReportWithHttpInfo($generate_email_clicks_by_url_report, string $contentType = self::contentTypes['generateEmailClicksByUrlReport'][0])
    {
        $request = $this->generateEmailClicksByUrlReportRequest($generate_email_clicks_by_url_report, $contentType);

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
                case 202:
                    if ('\EgoiClient\EgoiModel\AcceptedResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\AcceptedResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\AcceptedResponse', []),
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

            $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\AcceptedResponse',
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
     * Operation generateEmailClicksByUrlReportAsync
     *
     * Generate email clicks by URL report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailClicksByUrlReport $generate_email_clicks_by_url_report Parameters for the email clicks by URL report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailClicksByUrlReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateEmailClicksByUrlReportAsync($generate_email_clicks_by_url_report, string $contentType = self::contentTypes['generateEmailClicksByUrlReport'][0])
    {
        return $this->generateEmailClicksByUrlReportAsyncWithHttpInfo($generate_email_clicks_by_url_report, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateEmailClicksByUrlReportAsyncWithHttpInfo
     *
     * Generate email clicks by URL report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailClicksByUrlReport $generate_email_clicks_by_url_report Parameters for the email clicks by URL report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailClicksByUrlReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateEmailClicksByUrlReportAsyncWithHttpInfo($generate_email_clicks_by_url_report, string $contentType = self::contentTypes['generateEmailClicksByUrlReport'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
        $request = $this->generateEmailClicksByUrlReportRequest($generate_email_clicks_by_url_report, $contentType);

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
     * Create request for operation 'generateEmailClicksByUrlReport'
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailClicksByUrlReport $generate_email_clicks_by_url_report Parameters for the email clicks by URL report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailClicksByUrlReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function generateEmailClicksByUrlReportRequest($generate_email_clicks_by_url_report, string $contentType = self::contentTypes['generateEmailClicksByUrlReport'][0])
    {

        // verify the required parameter 'generate_email_clicks_by_url_report' is set
        if ($generate_email_clicks_by_url_report === null || (is_array($generate_email_clicks_by_url_report) && count($generate_email_clicks_by_url_report) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $generate_email_clicks_by_url_report when calling generateEmailClicksByUrlReport'
            );
        }


        $resourcePath = '/reports/advanced/email-clicks-by-url';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($generate_email_clicks_by_url_report)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($generate_email_clicks_by_url_report));
            } else {
                $httpBody = $generate_email_clicks_by_url_report;
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
     * Operation generateEmailEventsReport
     *
     * Generate email events report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailEventsReport $generate_email_events_report Parameters for the email events report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailEventsReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function generateEmailEventsReport($generate_email_events_report, string $contentType = self::contentTypes['generateEmailEventsReport'][0])
    {
        list($response) = $this->generateEmailEventsReportWithHttpInfo($generate_email_events_report, $contentType);
        return $response;
    }

    /**
     * Operation generateEmailEventsReportWithHttpInfo
     *
     * Generate email events report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailEventsReport $generate_email_events_report Parameters for the email events report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailEventsReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateEmailEventsReportWithHttpInfo($generate_email_events_report, string $contentType = self::contentTypes['generateEmailEventsReport'][0])
    {
        $request = $this->generateEmailEventsReportRequest($generate_email_events_report, $contentType);

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
                case 202:
                    if ('\EgoiClient\EgoiModel\AcceptedResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\AcceptedResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\AcceptedResponse', []),
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

            $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\AcceptedResponse',
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
     * Operation generateEmailEventsReportAsync
     *
     * Generate email events report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailEventsReport $generate_email_events_report Parameters for the email events report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailEventsReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateEmailEventsReportAsync($generate_email_events_report, string $contentType = self::contentTypes['generateEmailEventsReport'][0])
    {
        return $this->generateEmailEventsReportAsyncWithHttpInfo($generate_email_events_report, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateEmailEventsReportAsyncWithHttpInfo
     *
     * Generate email events report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailEventsReport $generate_email_events_report Parameters for the email events report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailEventsReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateEmailEventsReportAsyncWithHttpInfo($generate_email_events_report, string $contentType = self::contentTypes['generateEmailEventsReport'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
        $request = $this->generateEmailEventsReportRequest($generate_email_events_report, $contentType);

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
     * Create request for operation 'generateEmailEventsReport'
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailEventsReport $generate_email_events_report Parameters for the email events report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailEventsReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function generateEmailEventsReportRequest($generate_email_events_report, string $contentType = self::contentTypes['generateEmailEventsReport'][0])
    {

        // verify the required parameter 'generate_email_events_report' is set
        if ($generate_email_events_report === null || (is_array($generate_email_events_report) && count($generate_email_events_report) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $generate_email_events_report when calling generateEmailEventsReport'
            );
        }


        $resourcePath = '/reports/advanced/email-events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($generate_email_events_report)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($generate_email_events_report));
            } else {
                $httpBody = $generate_email_events_report;
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
     * Operation generateEmailUnsubscriptionsReport
     *
     * Generate email unsubscriptions report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailUnsubscriptionsReport $generate_email_unsubscriptions_report Parameters for the email unsubscriptions report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailUnsubscriptionsReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function generateEmailUnsubscriptionsReport($generate_email_unsubscriptions_report, string $contentType = self::contentTypes['generateEmailUnsubscriptionsReport'][0])
    {
        list($response) = $this->generateEmailUnsubscriptionsReportWithHttpInfo($generate_email_unsubscriptions_report, $contentType);
        return $response;
    }

    /**
     * Operation generateEmailUnsubscriptionsReportWithHttpInfo
     *
     * Generate email unsubscriptions report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailUnsubscriptionsReport $generate_email_unsubscriptions_report Parameters for the email unsubscriptions report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailUnsubscriptionsReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateEmailUnsubscriptionsReportWithHttpInfo($generate_email_unsubscriptions_report, string $contentType = self::contentTypes['generateEmailUnsubscriptionsReport'][0])
    {
        $request = $this->generateEmailUnsubscriptionsReportRequest($generate_email_unsubscriptions_report, $contentType);

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
                case 202:
                    if ('\EgoiClient\EgoiModel\AcceptedResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\AcceptedResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\AcceptedResponse', []),
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

            $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\AcceptedResponse',
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
     * Operation generateEmailUnsubscriptionsReportAsync
     *
     * Generate email unsubscriptions report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailUnsubscriptionsReport $generate_email_unsubscriptions_report Parameters for the email unsubscriptions report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailUnsubscriptionsReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateEmailUnsubscriptionsReportAsync($generate_email_unsubscriptions_report, string $contentType = self::contentTypes['generateEmailUnsubscriptionsReport'][0])
    {
        return $this->generateEmailUnsubscriptionsReportAsyncWithHttpInfo($generate_email_unsubscriptions_report, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateEmailUnsubscriptionsReportAsyncWithHttpInfo
     *
     * Generate email unsubscriptions report
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailUnsubscriptionsReport $generate_email_unsubscriptions_report Parameters for the email unsubscriptions report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailUnsubscriptionsReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateEmailUnsubscriptionsReportAsyncWithHttpInfo($generate_email_unsubscriptions_report, string $contentType = self::contentTypes['generateEmailUnsubscriptionsReport'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
        $request = $this->generateEmailUnsubscriptionsReportRequest($generate_email_unsubscriptions_report, $contentType);

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
     * Create request for operation 'generateEmailUnsubscriptionsReport'
     *
     * @param  \EgoiClient\EgoiModel\GenerateEmailUnsubscriptionsReport $generate_email_unsubscriptions_report Parameters for the email unsubscriptions report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateEmailUnsubscriptionsReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function generateEmailUnsubscriptionsReportRequest($generate_email_unsubscriptions_report, string $contentType = self::contentTypes['generateEmailUnsubscriptionsReport'][0])
    {

        // verify the required parameter 'generate_email_unsubscriptions_report' is set
        if ($generate_email_unsubscriptions_report === null || (is_array($generate_email_unsubscriptions_report) && count($generate_email_unsubscriptions_report) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $generate_email_unsubscriptions_report when calling generateEmailUnsubscriptionsReport'
            );
        }


        $resourcePath = '/reports/advanced/email-unsubscriptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($generate_email_unsubscriptions_report)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($generate_email_unsubscriptions_report));
            } else {
                $httpBody = $generate_email_unsubscriptions_report;
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
     * Operation generateFormAnswersReport
     *
     * Generate form answers report
     *
     * @param  \EgoiClient\EgoiModel\GenerateFormAnswersReport $generate_form_answers_report Parameters for the form answers report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateFormAnswersReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function generateFormAnswersReport($generate_form_answers_report, string $contentType = self::contentTypes['generateFormAnswersReport'][0])
    {
        list($response) = $this->generateFormAnswersReportWithHttpInfo($generate_form_answers_report, $contentType);
        return $response;
    }

    /**
     * Operation generateFormAnswersReportWithHttpInfo
     *
     * Generate form answers report
     *
     * @param  \EgoiClient\EgoiModel\GenerateFormAnswersReport $generate_form_answers_report Parameters for the form answers report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateFormAnswersReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateFormAnswersReportWithHttpInfo($generate_form_answers_report, string $contentType = self::contentTypes['generateFormAnswersReport'][0])
    {
        $request = $this->generateFormAnswersReportRequest($generate_form_answers_report, $contentType);

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
                case 202:
                    if ('\EgoiClient\EgoiModel\AcceptedResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\AcceptedResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\AcceptedResponse', []),
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

            $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\AcceptedResponse',
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
     * Operation generateFormAnswersReportAsync
     *
     * Generate form answers report
     *
     * @param  \EgoiClient\EgoiModel\GenerateFormAnswersReport $generate_form_answers_report Parameters for the form answers report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateFormAnswersReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateFormAnswersReportAsync($generate_form_answers_report, string $contentType = self::contentTypes['generateFormAnswersReport'][0])
    {
        return $this->generateFormAnswersReportAsyncWithHttpInfo($generate_form_answers_report, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateFormAnswersReportAsyncWithHttpInfo
     *
     * Generate form answers report
     *
     * @param  \EgoiClient\EgoiModel\GenerateFormAnswersReport $generate_form_answers_report Parameters for the form answers report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateFormAnswersReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateFormAnswersReportAsyncWithHttpInfo($generate_form_answers_report, string $contentType = self::contentTypes['generateFormAnswersReport'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
        $request = $this->generateFormAnswersReportRequest($generate_form_answers_report, $contentType);

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
     * Create request for operation 'generateFormAnswersReport'
     *
     * @param  \EgoiClient\EgoiModel\GenerateFormAnswersReport $generate_form_answers_report Parameters for the form answers report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateFormAnswersReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function generateFormAnswersReportRequest($generate_form_answers_report, string $contentType = self::contentTypes['generateFormAnswersReport'][0])
    {

        // verify the required parameter 'generate_form_answers_report' is set
        if ($generate_form_answers_report === null || (is_array($generate_form_answers_report) && count($generate_form_answers_report) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $generate_form_answers_report when calling generateFormAnswersReport'
            );
        }


        $resourcePath = '/reports/advanced/form-answers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($generate_form_answers_report)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($generate_form_answers_report));
            } else {
                $httpBody = $generate_form_answers_report;
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
     * Operation generateSendsReport
     *
     * Generate sends report
     *
     * @param  \EgoiClient\EgoiModel\GenerateSendsReport $generate_sends_report Parameters for the sends report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSendsReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function generateSendsReport($generate_sends_report, string $contentType = self::contentTypes['generateSendsReport'][0])
    {
        list($response) = $this->generateSendsReportWithHttpInfo($generate_sends_report, $contentType);
        return $response;
    }

    /**
     * Operation generateSendsReportWithHttpInfo
     *
     * Generate sends report
     *
     * @param  \EgoiClient\EgoiModel\GenerateSendsReport $generate_sends_report Parameters for the sends report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSendsReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateSendsReportWithHttpInfo($generate_sends_report, string $contentType = self::contentTypes['generateSendsReport'][0])
    {
        $request = $this->generateSendsReportRequest($generate_sends_report, $contentType);

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
                case 202:
                    if ('\EgoiClient\EgoiModel\AcceptedResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\AcceptedResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\AcceptedResponse', []),
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

            $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\AcceptedResponse',
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
     * Operation generateSendsReportAsync
     *
     * Generate sends report
     *
     * @param  \EgoiClient\EgoiModel\GenerateSendsReport $generate_sends_report Parameters for the sends report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSendsReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateSendsReportAsync($generate_sends_report, string $contentType = self::contentTypes['generateSendsReport'][0])
    {
        return $this->generateSendsReportAsyncWithHttpInfo($generate_sends_report, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateSendsReportAsyncWithHttpInfo
     *
     * Generate sends report
     *
     * @param  \EgoiClient\EgoiModel\GenerateSendsReport $generate_sends_report Parameters for the sends report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSendsReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateSendsReportAsyncWithHttpInfo($generate_sends_report, string $contentType = self::contentTypes['generateSendsReport'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
        $request = $this->generateSendsReportRequest($generate_sends_report, $contentType);

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
     * Create request for operation 'generateSendsReport'
     *
     * @param  \EgoiClient\EgoiModel\GenerateSendsReport $generate_sends_report Parameters for the sends report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSendsReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function generateSendsReportRequest($generate_sends_report, string $contentType = self::contentTypes['generateSendsReport'][0])
    {

        // verify the required parameter 'generate_sends_report' is set
        if ($generate_sends_report === null || (is_array($generate_sends_report) && count($generate_sends_report) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $generate_sends_report when calling generateSendsReport'
            );
        }


        $resourcePath = '/reports/advanced/sends';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($generate_sends_report)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($generate_sends_report));
            } else {
                $httpBody = $generate_sends_report;
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
     * Operation generateSmsBouncesReport
     *
     * Generate SMS bounces report
     *
     * @param  \EgoiClient\EgoiModel\GenerateSmsBouncesReport $generate_sms_bounces_report Parameters for the SMS bounces report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSmsBouncesReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function generateSmsBouncesReport($generate_sms_bounces_report, string $contentType = self::contentTypes['generateSmsBouncesReport'][0])
    {
        list($response) = $this->generateSmsBouncesReportWithHttpInfo($generate_sms_bounces_report, $contentType);
        return $response;
    }

    /**
     * Operation generateSmsBouncesReportWithHttpInfo
     *
     * Generate SMS bounces report
     *
     * @param  \EgoiClient\EgoiModel\GenerateSmsBouncesReport $generate_sms_bounces_report Parameters for the SMS bounces report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSmsBouncesReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateSmsBouncesReportWithHttpInfo($generate_sms_bounces_report, string $contentType = self::contentTypes['generateSmsBouncesReport'][0])
    {
        $request = $this->generateSmsBouncesReportRequest($generate_sms_bounces_report, $contentType);

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
                case 202:
                    if ('\EgoiClient\EgoiModel\AcceptedResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\AcceptedResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\AcceptedResponse', []),
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

            $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\AcceptedResponse',
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
     * Operation generateSmsBouncesReportAsync
     *
     * Generate SMS bounces report
     *
     * @param  \EgoiClient\EgoiModel\GenerateSmsBouncesReport $generate_sms_bounces_report Parameters for the SMS bounces report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSmsBouncesReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateSmsBouncesReportAsync($generate_sms_bounces_report, string $contentType = self::contentTypes['generateSmsBouncesReport'][0])
    {
        return $this->generateSmsBouncesReportAsyncWithHttpInfo($generate_sms_bounces_report, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateSmsBouncesReportAsyncWithHttpInfo
     *
     * Generate SMS bounces report
     *
     * @param  \EgoiClient\EgoiModel\GenerateSmsBouncesReport $generate_sms_bounces_report Parameters for the SMS bounces report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSmsBouncesReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateSmsBouncesReportAsyncWithHttpInfo($generate_sms_bounces_report, string $contentType = self::contentTypes['generateSmsBouncesReport'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
        $request = $this->generateSmsBouncesReportRequest($generate_sms_bounces_report, $contentType);

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
     * Create request for operation 'generateSmsBouncesReport'
     *
     * @param  \EgoiClient\EgoiModel\GenerateSmsBouncesReport $generate_sms_bounces_report Parameters for the SMS bounces report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSmsBouncesReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function generateSmsBouncesReportRequest($generate_sms_bounces_report, string $contentType = self::contentTypes['generateSmsBouncesReport'][0])
    {

        // verify the required parameter 'generate_sms_bounces_report' is set
        if ($generate_sms_bounces_report === null || (is_array($generate_sms_bounces_report) && count($generate_sms_bounces_report) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $generate_sms_bounces_report when calling generateSmsBouncesReport'
            );
        }


        $resourcePath = '/reports/advanced/sms-bounces';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($generate_sms_bounces_report)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($generate_sms_bounces_report));
            } else {
                $httpBody = $generate_sms_bounces_report;
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
     * Operation generateSmsEventsReport
     *
     * Generate SMS events report
     *
     * @param  \EgoiClient\EgoiModel\GenerateSmsEventsReport $generate_sms_events_report Parameters for the SMS events report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSmsEventsReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function generateSmsEventsReport($generate_sms_events_report, string $contentType = self::contentTypes['generateSmsEventsReport'][0])
    {
        list($response) = $this->generateSmsEventsReportWithHttpInfo($generate_sms_events_report, $contentType);
        return $response;
    }

    /**
     * Operation generateSmsEventsReportWithHttpInfo
     *
     * Generate SMS events report
     *
     * @param  \EgoiClient\EgoiModel\GenerateSmsEventsReport $generate_sms_events_report Parameters for the SMS events report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSmsEventsReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateSmsEventsReportWithHttpInfo($generate_sms_events_report, string $contentType = self::contentTypes['generateSmsEventsReport'][0])
    {
        $request = $this->generateSmsEventsReportRequest($generate_sms_events_report, $contentType);

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
                case 202:
                    if ('\EgoiClient\EgoiModel\AcceptedResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\AcceptedResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\AcceptedResponse', []),
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

            $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\AcceptedResponse',
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
     * Operation generateSmsEventsReportAsync
     *
     * Generate SMS events report
     *
     * @param  \EgoiClient\EgoiModel\GenerateSmsEventsReport $generate_sms_events_report Parameters for the SMS events report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSmsEventsReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateSmsEventsReportAsync($generate_sms_events_report, string $contentType = self::contentTypes['generateSmsEventsReport'][0])
    {
        return $this->generateSmsEventsReportAsyncWithHttpInfo($generate_sms_events_report, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateSmsEventsReportAsyncWithHttpInfo
     *
     * Generate SMS events report
     *
     * @param  \EgoiClient\EgoiModel\GenerateSmsEventsReport $generate_sms_events_report Parameters for the SMS events report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSmsEventsReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateSmsEventsReportAsyncWithHttpInfo($generate_sms_events_report, string $contentType = self::contentTypes['generateSmsEventsReport'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
        $request = $this->generateSmsEventsReportRequest($generate_sms_events_report, $contentType);

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
     * Create request for operation 'generateSmsEventsReport'
     *
     * @param  \EgoiClient\EgoiModel\GenerateSmsEventsReport $generate_sms_events_report Parameters for the SMS events report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSmsEventsReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function generateSmsEventsReportRequest($generate_sms_events_report, string $contentType = self::contentTypes['generateSmsEventsReport'][0])
    {

        // verify the required parameter 'generate_sms_events_report' is set
        if ($generate_sms_events_report === null || (is_array($generate_sms_events_report) && count($generate_sms_events_report) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $generate_sms_events_report when calling generateSmsEventsReport'
            );
        }


        $resourcePath = '/reports/advanced/sms-events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($generate_sms_events_report)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($generate_sms_events_report));
            } else {
                $httpBody = $generate_sms_events_report;
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
     * Operation generateSubscriptionsReport
     *
     * Generate subscriptions report
     *
     * @param  \EgoiClient\EgoiModel\GenerateSubscriptionsReport $generate_subscriptions_report Parameters for the subscriptions report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSubscriptionsReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function generateSubscriptionsReport($generate_subscriptions_report, string $contentType = self::contentTypes['generateSubscriptionsReport'][0])
    {
        list($response) = $this->generateSubscriptionsReportWithHttpInfo($generate_subscriptions_report, $contentType);
        return $response;
    }

    /**
     * Operation generateSubscriptionsReportWithHttpInfo
     *
     * Generate subscriptions report
     *
     * @param  \EgoiClient\EgoiModel\GenerateSubscriptionsReport $generate_subscriptions_report Parameters for the subscriptions report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSubscriptionsReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateSubscriptionsReportWithHttpInfo($generate_subscriptions_report, string $contentType = self::contentTypes['generateSubscriptionsReport'][0])
    {
        $request = $this->generateSubscriptionsReportRequest($generate_subscriptions_report, $contentType);

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
                case 202:
                    if ('\EgoiClient\EgoiModel\AcceptedResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\AcceptedResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\AcceptedResponse', []),
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

            $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\AcceptedResponse',
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
     * Operation generateSubscriptionsReportAsync
     *
     * Generate subscriptions report
     *
     * @param  \EgoiClient\EgoiModel\GenerateSubscriptionsReport $generate_subscriptions_report Parameters for the subscriptions report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSubscriptionsReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateSubscriptionsReportAsync($generate_subscriptions_report, string $contentType = self::contentTypes['generateSubscriptionsReport'][0])
    {
        return $this->generateSubscriptionsReportAsyncWithHttpInfo($generate_subscriptions_report, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateSubscriptionsReportAsyncWithHttpInfo
     *
     * Generate subscriptions report
     *
     * @param  \EgoiClient\EgoiModel\GenerateSubscriptionsReport $generate_subscriptions_report Parameters for the subscriptions report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSubscriptionsReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateSubscriptionsReportAsyncWithHttpInfo($generate_subscriptions_report, string $contentType = self::contentTypes['generateSubscriptionsReport'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
        $request = $this->generateSubscriptionsReportRequest($generate_subscriptions_report, $contentType);

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
     * Create request for operation 'generateSubscriptionsReport'
     *
     * @param  \EgoiClient\EgoiModel\GenerateSubscriptionsReport $generate_subscriptions_report Parameters for the subscriptions report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateSubscriptionsReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function generateSubscriptionsReportRequest($generate_subscriptions_report, string $contentType = self::contentTypes['generateSubscriptionsReport'][0])
    {

        // verify the required parameter 'generate_subscriptions_report' is set
        if ($generate_subscriptions_report === null || (is_array($generate_subscriptions_report) && count($generate_subscriptions_report) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $generate_subscriptions_report when calling generateSubscriptionsReport'
            );
        }


        $resourcePath = '/reports/advanced/subscriptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($generate_subscriptions_report)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($generate_subscriptions_report));
            } else {
                $httpBody = $generate_subscriptions_report;
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
     * Operation generateUnsubscriptionsReport
     *
     * Generate unsubscriptions report
     *
     * @param  \EgoiClient\EgoiModel\GenerateUnsubscriptionsReport $generate_unsubscriptions_report Parameters for the unsubscriptions report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateUnsubscriptionsReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function generateUnsubscriptionsReport($generate_unsubscriptions_report, string $contentType = self::contentTypes['generateUnsubscriptionsReport'][0])
    {
        list($response) = $this->generateUnsubscriptionsReportWithHttpInfo($generate_unsubscriptions_report, $contentType);
        return $response;
    }

    /**
     * Operation generateUnsubscriptionsReportWithHttpInfo
     *
     * Generate unsubscriptions report
     *
     * @param  \EgoiClient\EgoiModel\GenerateUnsubscriptionsReport $generate_unsubscriptions_report Parameters for the unsubscriptions report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateUnsubscriptionsReport'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\AcceptedResponse|\EgoiClient\EgoiModel\BadRequest|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateUnsubscriptionsReportWithHttpInfo($generate_unsubscriptions_report, string $contentType = self::contentTypes['generateUnsubscriptionsReport'][0])
    {
        $request = $this->generateUnsubscriptionsReportRequest($generate_unsubscriptions_report, $contentType);

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
                case 202:
                    if ('\EgoiClient\EgoiModel\AcceptedResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\AcceptedResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\AcceptedResponse', []),
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

            $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EgoiClient\EgoiModel\AcceptedResponse',
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
     * Operation generateUnsubscriptionsReportAsync
     *
     * Generate unsubscriptions report
     *
     * @param  \EgoiClient\EgoiModel\GenerateUnsubscriptionsReport $generate_unsubscriptions_report Parameters for the unsubscriptions report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateUnsubscriptionsReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateUnsubscriptionsReportAsync($generate_unsubscriptions_report, string $contentType = self::contentTypes['generateUnsubscriptionsReport'][0])
    {
        return $this->generateUnsubscriptionsReportAsyncWithHttpInfo($generate_unsubscriptions_report, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateUnsubscriptionsReportAsyncWithHttpInfo
     *
     * Generate unsubscriptions report
     *
     * @param  \EgoiClient\EgoiModel\GenerateUnsubscriptionsReport $generate_unsubscriptions_report Parameters for the unsubscriptions report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateUnsubscriptionsReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateUnsubscriptionsReportAsyncWithHttpInfo($generate_unsubscriptions_report, string $contentType = self::contentTypes['generateUnsubscriptionsReport'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\AcceptedResponse';
        $request = $this->generateUnsubscriptionsReportRequest($generate_unsubscriptions_report, $contentType);

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
     * Create request for operation 'generateUnsubscriptionsReport'
     *
     * @param  \EgoiClient\EgoiModel\GenerateUnsubscriptionsReport $generate_unsubscriptions_report Parameters for the unsubscriptions report (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['generateUnsubscriptionsReport'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function generateUnsubscriptionsReportRequest($generate_unsubscriptions_report, string $contentType = self::contentTypes['generateUnsubscriptionsReport'][0])
    {

        // verify the required parameter 'generate_unsubscriptions_report' is set
        if ($generate_unsubscriptions_report === null || (is_array($generate_unsubscriptions_report) && count($generate_unsubscriptions_report) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $generate_unsubscriptions_report when calling generateUnsubscriptionsReport'
            );
        }


        $resourcePath = '/reports/advanced/unsubscriptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($generate_unsubscriptions_report)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($generate_unsubscriptions_report));
            } else {
                $httpBody = $generate_unsubscriptions_report;
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
     * Operation getAllAdvancedReports
     *
     * Get all advanced reports
     *
     * @param  string $status Advanced report status (optional)
     * @param  string $title Advanced report title (optional)
     * @param  \DateTime $created_min Created initial date (optional)
     * @param  \DateTime $created_max Created finish (optional)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 10)
     * @param  string $order Type of order (optional, default to 'desc')
     * @param  string $order_by Reference attribute to order the advanced reports (optional, default to 'advanced_report_id')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllAdvancedReports'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\AdvancedReportsCollection|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function getAllAdvancedReports($status = null, $title = null, $created_min = null, $created_max = null, $offset = null, $limit = 10, $order = 'desc', $order_by = 'advanced_report_id', string $contentType = self::contentTypes['getAllAdvancedReports'][0])
    {
        list($response) = $this->getAllAdvancedReportsWithHttpInfo($status, $title, $created_min, $created_max, $offset, $limit, $order, $order_by, $contentType);
        return $response;
    }

    /**
     * Operation getAllAdvancedReportsWithHttpInfo
     *
     * Get all advanced reports
     *
     * @param  string $status Advanced report status (optional)
     * @param  string $title Advanced report title (optional)
     * @param  \DateTime $created_min Created initial date (optional)
     * @param  \DateTime $created_max Created finish (optional)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 10)
     * @param  string $order Type of order (optional, default to 'desc')
     * @param  string $order_by Reference attribute to order the advanced reports (optional, default to 'advanced_report_id')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllAdvancedReports'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\AdvancedReportsCollection|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllAdvancedReportsWithHttpInfo($status = null, $title = null, $created_min = null, $created_max = null, $offset = null, $limit = 10, $order = 'desc', $order_by = 'advanced_report_id', string $contentType = self::contentTypes['getAllAdvancedReports'][0])
    {
        $request = $this->getAllAdvancedReportsRequest($status, $title, $created_min, $created_max, $offset, $limit, $order, $order_by, $contentType);

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
                    if ('\EgoiClient\EgoiModel\AdvancedReportsCollection' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\AdvancedReportsCollection' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\AdvancedReportsCollection', []),
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

            $returnType = '\EgoiClient\EgoiModel\AdvancedReportsCollection';
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
                        '\EgoiClient\EgoiModel\AdvancedReportsCollection',
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
     * Operation getAllAdvancedReportsAsync
     *
     * Get all advanced reports
     *
     * @param  string $status Advanced report status (optional)
     * @param  string $title Advanced report title (optional)
     * @param  \DateTime $created_min Created initial date (optional)
     * @param  \DateTime $created_max Created finish (optional)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 10)
     * @param  string $order Type of order (optional, default to 'desc')
     * @param  string $order_by Reference attribute to order the advanced reports (optional, default to 'advanced_report_id')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllAdvancedReports'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllAdvancedReportsAsync($status = null, $title = null, $created_min = null, $created_max = null, $offset = null, $limit = 10, $order = 'desc', $order_by = 'advanced_report_id', string $contentType = self::contentTypes['getAllAdvancedReports'][0])
    {
        return $this->getAllAdvancedReportsAsyncWithHttpInfo($status, $title, $created_min, $created_max, $offset, $limit, $order, $order_by, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllAdvancedReportsAsyncWithHttpInfo
     *
     * Get all advanced reports
     *
     * @param  string $status Advanced report status (optional)
     * @param  string $title Advanced report title (optional)
     * @param  \DateTime $created_min Created initial date (optional)
     * @param  \DateTime $created_max Created finish (optional)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 10)
     * @param  string $order Type of order (optional, default to 'desc')
     * @param  string $order_by Reference attribute to order the advanced reports (optional, default to 'advanced_report_id')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllAdvancedReports'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllAdvancedReportsAsyncWithHttpInfo($status = null, $title = null, $created_min = null, $created_max = null, $offset = null, $limit = 10, $order = 'desc', $order_by = 'advanced_report_id', string $contentType = self::contentTypes['getAllAdvancedReports'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\AdvancedReportsCollection';
        $request = $this->getAllAdvancedReportsRequest($status, $title, $created_min, $created_max, $offset, $limit, $order, $order_by, $contentType);

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
     * Create request for operation 'getAllAdvancedReports'
     *
     * @param  string $status Advanced report status (optional)
     * @param  string $title Advanced report title (optional)
     * @param  \DateTime $created_min Created initial date (optional)
     * @param  \DateTime $created_max Created finish (optional)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 10)
     * @param  string $order Type of order (optional, default to 'desc')
     * @param  string $order_by Reference attribute to order the advanced reports (optional, default to 'advanced_report_id')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllAdvancedReports'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAllAdvancedReportsRequest($status = null, $title = null, $created_min = null, $created_max = null, $offset = null, $limit = 10, $order = 'desc', $order_by = 'advanced_report_id', string $contentType = self::contentTypes['getAllAdvancedReports'][0])
    {





        if ($offset !== null && $offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling AdvancedReportsApi.getAllAdvancedReports, must be bigger than or equal to 0.');
        }
        
        if ($limit !== null && $limit > 1000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling AdvancedReportsApi.getAllAdvancedReports, must be smaller than or equal to 1000.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling AdvancedReportsApi.getAllAdvancedReports, must be bigger than or equal to 1.');
        }
        



        $resourcePath = '/reports/advanced';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
            $title,
            'title', // param base name
            'string', // openApiType
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
     * Operation getAllAdvancedReportsModels
     *
     * Get all advanced reports models
     *
     * @param  string $title Advanced report model title (optional)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 10)
     * @param  string $order Type of order (optional, default to 'desc')
     * @param  string $order_by Reference attribute to order the advanced reports (optional, default to 'model_id')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllAdvancedReportsModels'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EgoiClient\EgoiModel\AdvancedReportsModelsCollection|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable
     */
    public function getAllAdvancedReportsModels($title = null, $offset = null, $limit = 10, $order = 'desc', $order_by = 'model_id', string $contentType = self::contentTypes['getAllAdvancedReportsModels'][0])
    {
        list($response) = $this->getAllAdvancedReportsModelsWithHttpInfo($title, $offset, $limit, $order, $order_by, $contentType);
        return $response;
    }

    /**
     * Operation getAllAdvancedReportsModelsWithHttpInfo
     *
     * Get all advanced reports models
     *
     * @param  string $title Advanced report model title (optional)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 10)
     * @param  string $order Type of order (optional, default to 'desc')
     * @param  string $order_by Reference attribute to order the advanced reports (optional, default to 'model_id')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllAdvancedReportsModels'] to see the possible values for this operation
     *
     * @throws \EgoiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EgoiClient\EgoiModel\AdvancedReportsModelsCollection|\EgoiClient\EgoiModel\Unauthorized|\EgoiClient\EgoiModel\Forbidden|\EgoiClient\EgoiModel\RequestTimeout|\EgoiClient\EgoiModel\UnprocessableEntity|\EgoiClient\EgoiModel\TooManyRequests|\EgoiClient\EgoiModel\InternalServerError|\EgoiClient\EgoiModel\ServiceUnavailable, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllAdvancedReportsModelsWithHttpInfo($title = null, $offset = null, $limit = 10, $order = 'desc', $order_by = 'model_id', string $contentType = self::contentTypes['getAllAdvancedReportsModels'][0])
    {
        $request = $this->getAllAdvancedReportsModelsRequest($title, $offset, $limit, $order, $order_by, $contentType);

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
                    if ('\EgoiClient\EgoiModel\AdvancedReportsModelsCollection' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\EgoiClient\EgoiModel\AdvancedReportsModelsCollection' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EgoiClient\EgoiModel\AdvancedReportsModelsCollection', []),
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

            $returnType = '\EgoiClient\EgoiModel\AdvancedReportsModelsCollection';
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
                        '\EgoiClient\EgoiModel\AdvancedReportsModelsCollection',
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
     * Operation getAllAdvancedReportsModelsAsync
     *
     * Get all advanced reports models
     *
     * @param  string $title Advanced report model title (optional)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 10)
     * @param  string $order Type of order (optional, default to 'desc')
     * @param  string $order_by Reference attribute to order the advanced reports (optional, default to 'model_id')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllAdvancedReportsModels'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllAdvancedReportsModelsAsync($title = null, $offset = null, $limit = 10, $order = 'desc', $order_by = 'model_id', string $contentType = self::contentTypes['getAllAdvancedReportsModels'][0])
    {
        return $this->getAllAdvancedReportsModelsAsyncWithHttpInfo($title, $offset, $limit, $order, $order_by, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllAdvancedReportsModelsAsyncWithHttpInfo
     *
     * Get all advanced reports models
     *
     * @param  string $title Advanced report model title (optional)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 10)
     * @param  string $order Type of order (optional, default to 'desc')
     * @param  string $order_by Reference attribute to order the advanced reports (optional, default to 'model_id')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllAdvancedReportsModels'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllAdvancedReportsModelsAsyncWithHttpInfo($title = null, $offset = null, $limit = 10, $order = 'desc', $order_by = 'model_id', string $contentType = self::contentTypes['getAllAdvancedReportsModels'][0])
    {
        $returnType = '\EgoiClient\EgoiModel\AdvancedReportsModelsCollection';
        $request = $this->getAllAdvancedReportsModelsRequest($title, $offset, $limit, $order, $order_by, $contentType);

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
     * Create request for operation 'getAllAdvancedReportsModels'
     *
     * @param  string $title Advanced report model title (optional)
     * @param  int $offset Element offset (starting at zero for the first element) (optional)
     * @param  int $limit Number of items to return (optional, default to 10)
     * @param  string $order Type of order (optional, default to 'desc')
     * @param  string $order_by Reference attribute to order the advanced reports (optional, default to 'model_id')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllAdvancedReportsModels'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAllAdvancedReportsModelsRequest($title = null, $offset = null, $limit = 10, $order = 'desc', $order_by = 'model_id', string $contentType = self::contentTypes['getAllAdvancedReportsModels'][0])
    {


        if ($offset !== null && $offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling AdvancedReportsApi.getAllAdvancedReportsModels, must be bigger than or equal to 0.');
        }
        
        if ($limit !== null && $limit > 1000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling AdvancedReportsApi.getAllAdvancedReportsModels, must be smaller than or equal to 1000.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling AdvancedReportsApi.getAllAdvancedReportsModels, must be bigger than or equal to 1.');
        }
        



        $resourcePath = '/reports/advanced/models';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $title,
            'title', // param base name
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
