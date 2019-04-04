<?php
/**
 * TransactionBatchesApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Flex API
 *
 * Simple PAN tokenization service
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Api;

use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\Configuration;
use \CyberSource\ObjectSerializer;

/**
 * TransactionBatchesApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionBatchesApi
{
    /**
     * API Client
     *
     * @var \CyberSource\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CyberSource\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CyberSource\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \CyberSource\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CyberSource\ApiClient $apiClient set the API client
     *
     * @return TransactionBatchesApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getTransactionBatchId
     *
     * Get individual batch file
     *
     * @param string $id The batch id assigned for the template. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV1TransactionBatchesIdGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransactionBatchId($id)
    {
        list($response, $statusCode, $httpHeader) = $this->getTransactionBatchIdWithHttpInfo($id);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getTransactionBatchIdWithHttpInfo
     *
     * Get individual batch file
     *
     * @param string $id The batch id assigned for the template. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV1TransactionBatchesIdGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransactionBatchIdWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getTransactionBatchId');
        }
        // parse inputs
        $resourcePath = "/pts/v1/transaction-batches/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PtsV1TransactionBatchesIdGet200Response',
                '/pts/v1/transaction-batches/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PtsV1TransactionBatchesIdGet200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV1TransactionBatchesIdGet200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV1TransactionBatchesGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV1TransactionBatchesGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV1TransactionBatchesGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV1TransactionBatchesGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV1TransactionBatchesGet500Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTransactionBatches
     *
     * Get a list of batch files
     *
     * @param \DateTime $startTime Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZZ (required)
     * @param \DateTime $endTime Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZZ (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV1TransactionBatchesGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransactionBatches($startTime, $endTime)
    {
        list($response, $statusCode, $httpHeader) = $this->getTransactionBatchesWithHttpInfo($startTime, $endTime);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getTransactionBatchesWithHttpInfo
     *
     * Get a list of batch files
     *
     * @param \DateTime $startTime Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZZ (required)
     * @param \DateTime $endTime Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZZ (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV1TransactionBatchesGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransactionBatchesWithHttpInfo($startTime, $endTime)
    {
        // verify the required parameter 'startTime' is set
        if ($startTime === null) {
            throw new \InvalidArgumentException('Missing the required parameter $startTime when calling getTransactionBatches');
        }
        // verify the required parameter 'endTime' is set
        if ($endTime === null) {
            throw new \InvalidArgumentException('Missing the required parameter $endTime when calling getTransactionBatches');
        }
        // parse inputs
        $resourcePath = "/pts/v1/transaction-batches";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // query params
        if ($startTime !== null) {
            $queryParams['startTime'] = $this->apiClient->getSerializer()->toQueryValue($startTime);
        }
        // query params
        if ($endTime !== null) {
            $queryParams['endTime'] = $this->apiClient->getSerializer()->toQueryValue($endTime);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PtsV1TransactionBatchesGet200Response',
                '/pts/v1/transaction-batches'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PtsV1TransactionBatchesGet200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV1TransactionBatchesGet200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV1TransactionBatchesGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV1TransactionBatchesGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV1TransactionBatchesGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV1TransactionBatchesGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV1TransactionBatchesGet500Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
