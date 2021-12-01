<?php
/**
 * ProfilesApi
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
 * ProfilesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProfilesApi
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
     * Operation getProfileByIdUsingGET
     *
     * Retrieve a Profile by id within an organization
     *
     * @param  string $credentials Basic Authorization header (required)
     * @param  int $organization_id The id of the organization containing the Profile (required)
     * @param  string $profile_id The id of the Profile (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function getProfileByIdUsingGET($credentials, $organization_id, $profile_id)
    {
        list($response) = $this->getProfileByIdUsingGETWithHttpInfo($credentials, $organization_id, $profile_id);
        return $response;
    }

    /**
     * Operation getProfileByIdUsingGETWithHttpInfo
     *
     * Retrieve a Profile by id within an organization
     *
     * @param  string $credentials Basic Authorization header (required)
     * @param  int $organization_id The id of the organization containing the Profile (required)
     * @param  string $profile_id The id of the Profile (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProfileByIdUsingGETWithHttpInfo($credentials, $organization_id, $profile_id)
    {
        $returnType = 'object';
        $request = $this->getProfileByIdUsingGETRequest($credentials, $organization_id, $profile_id);

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
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProfileByIdUsingGETAsync
     *
     * Retrieve a Profile by id within an organization
     *
     * @param  string $credentials Basic Authorization header (required)
     * @param  int $organization_id The id of the organization containing the Profile (required)
     * @param  string $profile_id The id of the Profile (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProfileByIdUsingGETAsync($credentials, $organization_id, $profile_id)
    {
        return $this->getProfileByIdUsingGETAsyncWithHttpInfo($credentials, $organization_id, $profile_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProfileByIdUsingGETAsyncWithHttpInfo
     *
     * Retrieve a Profile by id within an organization
     *
     * @param  string $credentials Basic Authorization header (required)
     * @param  int $organization_id The id of the organization containing the Profile (required)
     * @param  string $profile_id The id of the Profile (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProfileByIdUsingGETAsyncWithHttpInfo($credentials, $organization_id, $profile_id)
    {
        $returnType = 'object';
        $request = $this->getProfileByIdUsingGETRequest($credentials, $organization_id, $profile_id);

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
     * Create request for operation 'getProfileByIdUsingGET'
     *
     * @param  string $credentials Basic Authorization header (required)
     * @param  int $organization_id The id of the organization containing the Profile (required)
     * @param  string $profile_id The id of the Profile (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getProfileByIdUsingGETRequest($credentials, $organization_id, $profile_id)
    {
        // verify the required parameter 'credentials' is set
        if ($credentials === null || (is_array($credentials) && count($credentials) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credentials when calling getProfileByIdUsingGET'
            );
        }
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling getProfileByIdUsingGET'
            );
        }
        // verify the required parameter 'profile_id' is set
        if ($profile_id === null || (is_array($profile_id) && count($profile_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $profile_id when calling getProfileByIdUsingGET'
            );
        }

        $resourcePath = '/profiles/{organizationId}/{profileId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($credentials !== null) {
            $headerParams['credentials'] = ObjectSerializer::toHeaderValue($credentials);
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
        if ($profile_id !== null) {
            $resourcePath = str_replace(
                '{' . 'profileId' . '}',
                ObjectSerializer::toPathValue($profile_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
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
     * Operation getProfilesUsingGET
     *
     * Retrieve a list of Profiles within an organization
     *
     * @param  string $authorization Basic Authorization header (required)
     * @param  int $organization_id The id of the organization containing the Profile (required)
     * @param  string $sort Comma delimited list of fields to sort by.&lt;p&gt; +/- can precede the field Name to indicate direction (ascending/descending).&lt;/p&gt;&lt;p&gt; + is the default direction&lt;/p&gt;&lt;p&gt; Ex. sort&#x3D;name,-createdDate sorts by name ascending and createdDate descending &lt;/p&gt; (optional)
     * @param  int $page_size The number of records per page to be included in the response (optional)
     * @param  int $page_no The page to be returned. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function getProfilesUsingGET($authorization, $organization_id, $sort = null, $page_size = null, $page_no = null)
    {
        list($response) = $this->getProfilesUsingGETWithHttpInfo($authorization, $organization_id, $sort, $page_size, $page_no);
        return $response;
    }

    /**
     * Operation getProfilesUsingGETWithHttpInfo
     *
     * Retrieve a list of Profiles within an organization
     *
     * @param  string $authorization Basic Authorization header (required)
     * @param  int $organization_id The id of the organization containing the Profile (required)
     * @param  string $sort Comma delimited list of fields to sort by.&lt;p&gt; +/- can precede the field Name to indicate direction (ascending/descending).&lt;/p&gt;&lt;p&gt; + is the default direction&lt;/p&gt;&lt;p&gt; Ex. sort&#x3D;name,-createdDate sorts by name ascending and createdDate descending &lt;/p&gt; (optional)
     * @param  int $page_size The number of records per page to be included in the response (optional)
     * @param  int $page_no The page to be returned. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProfilesUsingGETWithHttpInfo($authorization, $organization_id, $sort = null, $page_size = null, $page_no = null)
    {
        $returnType = 'object';
        $request = $this->getProfilesUsingGETRequest($authorization, $organization_id, $sort, $page_size, $page_no);

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
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProfilesUsingGETAsync
     *
     * Retrieve a list of Profiles within an organization
     *
     * @param  string $authorization Basic Authorization header (required)
     * @param  int $organization_id The id of the organization containing the Profile (required)
     * @param  string $sort Comma delimited list of fields to sort by.&lt;p&gt; +/- can precede the field Name to indicate direction (ascending/descending).&lt;/p&gt;&lt;p&gt; + is the default direction&lt;/p&gt;&lt;p&gt; Ex. sort&#x3D;name,-createdDate sorts by name ascending and createdDate descending &lt;/p&gt; (optional)
     * @param  int $page_size The number of records per page to be included in the response (optional)
     * @param  int $page_no The page to be returned. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProfilesUsingGETAsync($authorization, $organization_id, $sort = null, $page_size = null, $page_no = null)
    {
        return $this->getProfilesUsingGETAsyncWithHttpInfo($authorization, $organization_id, $sort, $page_size, $page_no)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProfilesUsingGETAsyncWithHttpInfo
     *
     * Retrieve a list of Profiles within an organization
     *
     * @param  string $authorization Basic Authorization header (required)
     * @param  int $organization_id The id of the organization containing the Profile (required)
     * @param  string $sort Comma delimited list of fields to sort by.&lt;p&gt; +/- can precede the field Name to indicate direction (ascending/descending).&lt;/p&gt;&lt;p&gt; + is the default direction&lt;/p&gt;&lt;p&gt; Ex. sort&#x3D;name,-createdDate sorts by name ascending and createdDate descending &lt;/p&gt; (optional)
     * @param  int $page_size The number of records per page to be included in the response (optional)
     * @param  int $page_no The page to be returned. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProfilesUsingGETAsyncWithHttpInfo($authorization, $organization_id, $sort = null, $page_size = null, $page_no = null)
    {
        $returnType = 'object';
        $request = $this->getProfilesUsingGETRequest($authorization, $organization_id, $sort, $page_size, $page_no);

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
     * Create request for operation 'getProfilesUsingGET'
     *
     * @param  string $authorization Basic Authorization header (required)
     * @param  int $organization_id The id of the organization containing the Profile (required)
     * @param  string $sort Comma delimited list of fields to sort by.&lt;p&gt; +/- can precede the field Name to indicate direction (ascending/descending).&lt;/p&gt;&lt;p&gt; + is the default direction&lt;/p&gt;&lt;p&gt; Ex. sort&#x3D;name,-createdDate sorts by name ascending and createdDate descending &lt;/p&gt; (optional)
     * @param  int $page_size The number of records per page to be included in the response (optional)
     * @param  int $page_no The page to be returned. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getProfilesUsingGETRequest($authorization, $organization_id, $sort = null, $page_size = null, $page_no = null)
    {
        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling getProfilesUsingGET'
            );
        }
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling getProfilesUsingGET'
            );
        }

        $resourcePath = '/profiles/{organizationId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($page_size);
        }
        // query params
        if ($page_no !== null) {
            $queryParams['pageNo'] = ObjectSerializer::toQueryValue($page_no);
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

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
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