<?php
/**
 * BatchesApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
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
use \CyberSource\Logging\LogFactory as LogFactory;

/**
 * BatchesApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BatchesApi
{
    private static $logger = null;
    
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

        if (self::$logger === null) {
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class()), $apiClient->merchantConfig->getLogConfiguration());
        }
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
     * @return BatchesApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getBatchReport
     *
     * Retrieve a Batch Report
     *
     * @param string $batchId Unique identification number assigned to the submitted request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2007, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBatchReport($batchId)
    {
        self::$logger->info('CALL TO METHOD getBatchReport STARTED');
        list($response, $statusCode, $httpHeader) = $this->getBatchReportWithHttpInfo($batchId);
        self::$logger->info('CALL TO METHOD getBatchReport ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getBatchReportWithHttpInfo
     *
     * Retrieve a Batch Report
     *
     * @param string $batchId Unique identification number assigned to the submitted request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2007, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBatchReportWithHttpInfo($batchId)
    {
        // verify the required parameter 'batchId' is set
        if ($batchId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $batchId when calling getBatchReport");
            throw new \InvalidArgumentException('Missing the required parameter $batchId when calling getBatchReport');
        }
        if (($batchId > 32)) {
            self::$logger->error("InvalidArgumentException : Invalid value for \"$batchId\" when calling BatchesApi.getBatchReport, must be smaller than or equal to 32.");
            throw new \InvalidArgumentException('Invalid value for "$batchId" when calling BatchesApi.getBatchReport, must be smaller than or equal to 32.');
        }
        if (($batchId < 16)) {
            self::$logger->error("InvalidArgumentException : Invalid value for \"$batchId\" when calling BatchesApi.getBatchReport, must be bigger than or equal to 16.");
            throw new \InvalidArgumentException('Invalid value for "$batchId" when calling BatchesApi.getBatchReport, must be bigger than or equal to 16.');
        }

        // parse inputs
        $resourcePath = "/accountupdater/v1/batches/{batchId}/report";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($batchId !== null) {
            $resourcePath = str_replace(
                "{" . "batchId" . "}",
                $this->apiClient->getSerializer()->toPathValue($batchId),
                $resourcePath
            );
        }
        if ('GET' == 'POST') {
            $_tempBody = '{}';
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : GET $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\InlineResponse2007");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse2007',
                '/accountupdater/v1/batches/{batchId}/report'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse2007', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse2007', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse401', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation getBatchStatus
     *
     * Retrieve a Batch Status
     *
     * @param string $batchId Unique identification number assigned to the submitted request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2006, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBatchStatus($batchId)
    {
        self::$logger->info('CALL TO METHOD getBatchStatus STARTED');
        list($response, $statusCode, $httpHeader) = $this->getBatchStatusWithHttpInfo($batchId);
        self::$logger->info('CALL TO METHOD getBatchStatus ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getBatchStatusWithHttpInfo
     *
     * Retrieve a Batch Status
     *
     * @param string $batchId Unique identification number assigned to the submitted request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2006, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBatchStatusWithHttpInfo($batchId)
    {
        // verify the required parameter 'batchId' is set
        if ($batchId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $batchId when calling getBatchStatus");
            throw new \InvalidArgumentException('Missing the required parameter $batchId when calling getBatchStatus');
        }
        if (($batchId > 32)) {
            self::$logger->error("InvalidArgumentException : Invalid value for \"$batchId\" when calling BatchesApi.getBatchStatus, must be smaller than or equal to 32.");
            throw new \InvalidArgumentException('Invalid value for "$batchId" when calling BatchesApi.getBatchStatus, must be smaller than or equal to 32.');
        }
        if (($batchId < 16)) {
            self::$logger->error("InvalidArgumentException : Invalid value for \"$batchId\" when calling BatchesApi.getBatchStatus, must be bigger than or equal to 16.");
            throw new \InvalidArgumentException('Invalid value for "$batchId" when calling BatchesApi.getBatchStatus, must be bigger than or equal to 16.');
        }

        // parse inputs
        $resourcePath = "/accountupdater/v1/batches/{batchId}/status";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($batchId !== null) {
            $resourcePath = str_replace(
                "{" . "batchId" . "}",
                $this->apiClient->getSerializer()->toPathValue($batchId),
                $resourcePath
            );
        }
        if ('GET' == 'POST') {
            $_tempBody = '{}';
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : GET $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\InlineResponse2006");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse2006',
                '/accountupdater/v1/batches/{batchId}/status'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse2006', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse2006', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse401', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation getBatchesList
     *
     * List Batches
     *
     * @param int $offset Starting record in zero-based dataset that should be returned as the first object in the array. (optional, default to 0)
     * @param int $limit The maximum number that can be returned in the array starting from the offset record in zero-based dataset. (optional, default to 20)
     * @param string $fromDate ISO-8601 format: yyyyMMddTHHmmssZ (optional)
     * @param string $toDate ISO-8601 format: yyyyMMddTHHmmssZ (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBatchesList($offset = '0', $limit = '20', $fromDate = null, $toDate = null)
    {
        self::$logger->info('CALL TO METHOD getBatchesList STARTED');
        list($response, $statusCode, $httpHeader) = $this->getBatchesListWithHttpInfo($offset, $limit, $fromDate, $toDate);
        self::$logger->info('CALL TO METHOD getBatchesList ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getBatchesListWithHttpInfo
     *
     * List Batches
     *
     * @param int $offset Starting record in zero-based dataset that should be returned as the first object in the array. (optional, default to 0)
     * @param int $limit The maximum number that can be returned in the array starting from the offset record in zero-based dataset. (optional, default to 20)
     * @param string $fromDate ISO-8601 format: yyyyMMddTHHmmssZ (optional)
     * @param string $toDate ISO-8601 format: yyyyMMddTHHmmssZ (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBatchesListWithHttpInfo($offset = '0', $limit = '20', $fromDate = null, $toDate = null)
    {
        if (!is_null($offset) && ($offset < 0)) {
            self::$logger->error("InvalidArgumentException : Invalid value for \"$offset\" when calling BatchesApi.getBatchesList, must be bigger than or equal to 0.");
            throw new \InvalidArgumentException('Invalid value for "$offset" when calling BatchesApi.getBatchesList, must be bigger than or equal to 0.');
        }

        if (!is_null($limit) && ($limit > 500)) {
            self::$logger->error("InvalidArgumentException : Invalid value for \"$limit\" when calling BatchesApi.getBatchesList, must be smaller than or equal to 500.");
            throw new \InvalidArgumentException('Invalid value for "$limit" when calling BatchesApi.getBatchesList, must be smaller than or equal to 500.');
        }
        if (!is_null($limit) && ($limit < 1)) {
            self::$logger->error("InvalidArgumentException : Invalid value for \"$limit\" when calling BatchesApi.getBatchesList, must be bigger than or equal to 1.");
            throw new \InvalidArgumentException('Invalid value for "$limit" when calling BatchesApi.getBatchesList, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/accountupdater/v1/batches";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($fromDate !== null) {
            $queryParams['fromDate'] = $this->apiClient->getSerializer()->toQueryValue($fromDate);
        }
        // query params
        if ($toDate !== null) {
            $queryParams['toDate'] = $this->apiClient->getSerializer()->toQueryValue($toDate);
        }
        if ('GET' == 'POST') {
            $_tempBody = '{}';
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : GET $resourcePath");
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\InlineResponse2005");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse2005',
                '/accountupdater/v1/batches'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse2005', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse2005', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse401', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse401', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation postBatch
     *
     * Create a Batch
     *
     * @param \CyberSource\Model\Body $body  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse202, HTTP status code, HTTP response headers (array of strings)
     */
    public function postBatch($body)
    {
        self::$logger->info('CALL TO METHOD postBatch STARTED');
        list($response, $statusCode, $httpHeader) = $this->postBatchWithHttpInfo($body);
        self::$logger->info('CALL TO METHOD postBatch ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation postBatchWithHttpInfo
     *
     * Create a Batch
     *
     * @param \CyberSource\Model\Body $body  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse202, HTTP status code, HTTP response headers (array of strings)
     */
    public function postBatchWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $body when calling postBatch");
            throw new \InvalidArgumentException('Missing the required parameter $body when calling postBatch');
        }
        // parse inputs
        $resourcePath = "/accountupdater/v1/batches";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $_tempBody = $sdkTracker->insertDeveloperIdTracker($_tempBody, end(explode('\\', '\CyberSource\Model\Body')), $this->apiClient->merchantConfig->getRunEnvironment());

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : POST $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\InlineResponse202");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse202',
                '/accountupdater/v1/batches'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse202', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 202:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse202', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse401', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse401', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse401', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse401', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }
}
