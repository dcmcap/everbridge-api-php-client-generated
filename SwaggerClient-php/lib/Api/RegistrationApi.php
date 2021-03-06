<?php
/**
 * RegistrationApi
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
 * RegistrationApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RegistrationApi
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
     * Operation sendRegistrationEmailUsingPOST
     *
     * To send the registration email for given contact id or external id.
     *
     * @param  string $authorization Basic Authorization header (required)
     * @param  int $organization_id The ID of the organization containing the contacts (required)
     * @param  string[] $ids The ID(s) or externalId(s) of the contact. (required)
     * @param  string $registration_type The email registration type. (required)
     * @param  string $id_type Whether to send by contact id or contact externalId. (optional, default to contactId)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\RestfulBatchOperationResult
     */
    public function sendRegistrationEmailUsingPOST($authorization, $organization_id, $ids, $registration_type, $id_type = 'contactId')
    {
        list($response) = $this->sendRegistrationEmailUsingPOSTWithHttpInfo($authorization, $organization_id, $ids, $registration_type, $id_type);
        return $response;
    }

    /**
     * Operation sendRegistrationEmailUsingPOSTWithHttpInfo
     *
     * To send the registration email for given contact id or external id.
     *
     * @param  string $authorization Basic Authorization header (required)
     * @param  int $organization_id The ID of the organization containing the contacts (required)
     * @param  string[] $ids The ID(s) or externalId(s) of the contact. (required)
     * @param  string $registration_type The email registration type. (required)
     * @param  string $id_type Whether to send by contact id or contact externalId. (optional, default to contactId)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\RestfulBatchOperationResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendRegistrationEmailUsingPOSTWithHttpInfo($authorization, $organization_id, $ids, $registration_type, $id_type = 'contactId')
    {
        $returnType = '\Swagger\Client\Model\RestfulBatchOperationResult';
        $request = $this->sendRegistrationEmailUsingPOSTRequest($authorization, $organization_id, $ids, $registration_type, $id_type);

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
                        '\Swagger\Client\Model\RestfulBatchOperationResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sendRegistrationEmailUsingPOSTAsync
     *
     * To send the registration email for given contact id or external id.
     *
     * @param  string $authorization Basic Authorization header (required)
     * @param  int $organization_id The ID of the organization containing the contacts (required)
     * @param  string[] $ids The ID(s) or externalId(s) of the contact. (required)
     * @param  string $registration_type The email registration type. (required)
     * @param  string $id_type Whether to send by contact id or contact externalId. (optional, default to contactId)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendRegistrationEmailUsingPOSTAsync($authorization, $organization_id, $ids, $registration_type, $id_type = 'contactId')
    {
        return $this->sendRegistrationEmailUsingPOSTAsyncWithHttpInfo($authorization, $organization_id, $ids, $registration_type, $id_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendRegistrationEmailUsingPOSTAsyncWithHttpInfo
     *
     * To send the registration email for given contact id or external id.
     *
     * @param  string $authorization Basic Authorization header (required)
     * @param  int $organization_id The ID of the organization containing the contacts (required)
     * @param  string[] $ids The ID(s) or externalId(s) of the contact. (required)
     * @param  string $registration_type The email registration type. (required)
     * @param  string $id_type Whether to send by contact id or contact externalId. (optional, default to contactId)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendRegistrationEmailUsingPOSTAsyncWithHttpInfo($authorization, $organization_id, $ids, $registration_type, $id_type = 'contactId')
    {
        $returnType = '\Swagger\Client\Model\RestfulBatchOperationResult';
        $request = $this->sendRegistrationEmailUsingPOSTRequest($authorization, $organization_id, $ids, $registration_type, $id_type);

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
     * Create request for operation 'sendRegistrationEmailUsingPOST'
     *
     * @param  string $authorization Basic Authorization header (required)
     * @param  int $organization_id The ID of the organization containing the contacts (required)
     * @param  string[] $ids The ID(s) or externalId(s) of the contact. (required)
     * @param  string $registration_type The email registration type. (required)
     * @param  string $id_type Whether to send by contact id or contact externalId. (optional, default to contactId)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sendRegistrationEmailUsingPOSTRequest($authorization, $organization_id, $ids, $registration_type, $id_type = 'contactId')
    {
        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling sendRegistrationEmailUsingPOST'
            );
        }
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling sendRegistrationEmailUsingPOST'
            );
        }
        // verify the required parameter 'ids' is set
        if ($ids === null || (is_array($ids) && count($ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ids when calling sendRegistrationEmailUsingPOST'
            );
        }
        // verify the required parameter 'registration_type' is set
        if ($registration_type === null || (is_array($registration_type) && count($registration_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registration_type when calling sendRegistrationEmailUsingPOST'
            );
        }

        $resourcePath = '/registration/contacts/{organizationId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($registration_type !== null) {
            $queryParams['registrationType'] = ObjectSerializer::toQueryValue($registration_type);
        }
        // query params
        if ($id_type !== null) {
            $queryParams['idType'] = ObjectSerializer::toQueryValue($id_type);
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
        if (isset($ids)) {
            $_tempBody = $ids;
        }

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
            'POST',
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
