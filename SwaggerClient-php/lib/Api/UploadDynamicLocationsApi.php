<?php
/**
 * UploadDynamicLocationsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rest Api
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.x
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * UploadDynamicLocationsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UploadDynamicLocationsApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation queryUploadDynamicLocationsUsingGET1
     *
     * Retrieve all upload dynamicLocations for an uploadBatch
     *
     * @param  string $authorization Basic Authorization header (required)
     * @param  int $organization_id The ID of the organization containing the uploads (required)
     * @param  int $upload_batch_id The ID of the uploadBatch (required)
     * @param  string $upload_record_status Whether to search by Success or WithError or Failed. (optional, default to Success)
     * @param  int $page_number The page number of uploadDynamicLocations to return. (optional, default to 1)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\UploadDynamicLocationWrapperCollectionResult
     */
    public function queryUploadDynamicLocationsUsingGET1($authorization, $organization_id, $upload_batch_id, $upload_record_status = 'Success', $page_number = '1')
    {
        list($response) = $this->queryUploadDynamicLocationsUsingGET1WithHttpInfo($authorization, $organization_id, $upload_batch_id, $upload_record_status, $page_number);
        return $response;
    }

    /**
     * Operation queryUploadDynamicLocationsUsingGET1WithHttpInfo
     *
     * Retrieve all upload dynamicLocations for an uploadBatch
     *
     * @param  string $authorization Basic Authorization header (required)
     * @param  int $organization_id The ID of the organization containing the uploads (required)
     * @param  int $upload_batch_id The ID of the uploadBatch (required)
     * @param  string $upload_record_status Whether to search by Success or WithError or Failed. (optional, default to Success)
     * @param  int $page_number The page number of uploadDynamicLocations to return. (optional, default to 1)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\UploadDynamicLocationWrapperCollectionResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function queryUploadDynamicLocationsUsingGET1WithHttpInfo($authorization, $organization_id, $upload_batch_id, $upload_record_status = 'Success', $page_number = '1')
    {
        $returnType = '\Swagger\Client\Model\UploadDynamicLocationWrapperCollectionResult';
        $request = $this->queryUploadDynamicLocationsUsingGET1Request($authorization, $organization_id, $upload_batch_id, $upload_record_status, $page_number);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\Swagger\Client\Model\UploadDynamicLocationWrapperCollectionResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation queryUploadDynamicLocationsUsingGET1Async
     *
     * Retrieve all upload dynamicLocations for an uploadBatch
     *
     * @param  string $authorization Basic Authorization header (required)
     * @param  int $organization_id The ID of the organization containing the uploads (required)
     * @param  int $upload_batch_id The ID of the uploadBatch (required)
     * @param  string $upload_record_status Whether to search by Success or WithError or Failed. (optional, default to Success)
     * @param  int $page_number The page number of uploadDynamicLocations to return. (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function queryUploadDynamicLocationsUsingGET1Async($authorization, $organization_id, $upload_batch_id, $upload_record_status = 'Success', $page_number = '1')
    {
        return $this->queryUploadDynamicLocationsUsingGET1AsyncWithHttpInfo($authorization, $organization_id, $upload_batch_id, $upload_record_status, $page_number)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation queryUploadDynamicLocationsUsingGET1AsyncWithHttpInfo
     *
     * Retrieve all upload dynamicLocations for an uploadBatch
     *
     * @param  string $authorization Basic Authorization header (required)
     * @param  int $organization_id The ID of the organization containing the uploads (required)
     * @param  int $upload_batch_id The ID of the uploadBatch (required)
     * @param  string $upload_record_status Whether to search by Success or WithError or Failed. (optional, default to Success)
     * @param  int $page_number The page number of uploadDynamicLocations to return. (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function queryUploadDynamicLocationsUsingGET1AsyncWithHttpInfo($authorization, $organization_id, $upload_batch_id, $upload_record_status = 'Success', $page_number = '1')
    {
        $returnType = '\Swagger\Client\Model\UploadDynamicLocationWrapperCollectionResult';
        $request = $this->queryUploadDynamicLocationsUsingGET1Request($authorization, $organization_id, $upload_batch_id, $upload_record_status, $page_number);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'queryUploadDynamicLocationsUsingGET1'
     *
     * @param  string $authorization Basic Authorization header (required)
     * @param  int $organization_id The ID of the organization containing the uploads (required)
     * @param  int $upload_batch_id The ID of the uploadBatch (required)
     * @param  string $upload_record_status Whether to search by Success or WithError or Failed. (optional, default to Success)
     * @param  int $page_number The page number of uploadDynamicLocations to return. (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function queryUploadDynamicLocationsUsingGET1Request($authorization, $organization_id, $upload_batch_id, $upload_record_status = 'Success', $page_number = '1')
    {
        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling queryUploadDynamicLocationsUsingGET1'
            );
        }
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling queryUploadDynamicLocationsUsingGET1'
            );
        }
        // verify the required parameter 'upload_batch_id' is set
        if ($upload_batch_id === null || (is_array($upload_batch_id) && count($upload_batch_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $upload_batch_id when calling queryUploadDynamicLocationsUsingGET1'
            );
        }

        $resourcePath = '/uploadDynamicLocations/{organizationId}/{uploadBatchId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($upload_record_status !== null) {
            $queryParams['uploadRecordStatus'] = ObjectSerializer::toQueryValue($upload_record_status);
        }
        // query params
        if ($page_number !== null) {
            $queryParams['pageNumber'] = ObjectSerializer::toQueryValue($page_number);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }

        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'organizationId' . '}',
                ObjectSerializer::toPathValue($organization_id),
                $resourcePath
            );
        }
        // path params
        if ($upload_batch_id !== null) {
            $resourcePath = str_replace(
                '{' . 'uploadBatchId' . '}',
                ObjectSerializer::toPathValue($upload_batch_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
