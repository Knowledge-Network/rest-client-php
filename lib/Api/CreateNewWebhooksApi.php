<?php
/**
 * CreateNewWebhooksApi
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
 * CreateNewWebhooksApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateNewWebhooksApi
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
     * @return CreateNewWebhooksApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createWebhook
     *
     * Create a Webhook
     *
     * DISCLAIMER : Cybersource may allow Customer to access, use, and/or test a Cybersource product or service that may still be in development or has not been market-tested ("Beta Product") solely for the purpose of evaluating the functionality or marketability of the Beta Product (a "Beta Evaluation"). Notwithstanding any language to the contrary, the following terms shall apply with respect to Customer's participation in any Beta Evaluation (and the Beta Product(s)) accessed thereunder): The Parties will enter into a separate form agreement detailing the scope of the Beta Evaluation, requirements, pricing, the length of the beta evaluation period ("Beta Product Form"). Beta Products are not, and may not become, Transaction Services and have not yet been publicly released and are offered for the sole purpose of internal testing and non-commercial evaluation. Customer's use of the Beta Product shall be solely for the purpose of conducting the Beta Evaluation. Customer accepts all risks arising out of the access and use of the Beta Products. Cybersource may, in its sole discretion, at any time, terminate or discontinue the Beta Evaluation. Customer acknowledges and agrees that any Beta Product may still be in development and that Beta Product is provided "AS IS" and may not perform at the level of a commercially available service, may not operate as expected and may be modified prior to release. CYBERSOURCE SHALL NOT BE RESPONSIBLE OR LIABLE UNDER ANY CONTRACT, TORT (INCLUDING NEGLIGENCE), OR OTHERWISE RELATING TO A BETA PRODUCT OR THE BETA EVALUATION (A) FOR LOSS OR INACCURACY OF DATA OR COST OF PROCUREMENT OF SUBSTITUTE GOODS, SERVICES OR TECHNOLOGY, (B) ANY CLAIM, LOSSES, DAMAGES, OR CAUSE OF ACTION ARISING IN CONNECTION WITH THE BETA PRODUCT; OR (C) FOR ANY INDIRECT, INCIDENTAL OR CONSEQUENTIAL DAMAGES INCLUDING, BUT NOT LIMITED TO, LOSS OF REVENUES AND LOSS OF PROFITS.
     * @param \CyberSource\Model\CreateWebhook $createWebhook The webhook payload (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2013, HTTP status code, HTTP response headers (array of strings)
     */
    public function createWebhook($createWebhook = null)
    {
        self::$logger->info('CALL TO METHOD createWebhook STARTED');
        list($response, $statusCode, $httpHeader) = $this->createWebhookWithHttpInfo($createWebhook);
        self::$logger->info('CALL TO METHOD createWebhook ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation createWebhookWithHttpInfo
     *
     * Create a Webhook
     *
     * @param \CyberSource\Model\CreateWebhook $createWebhook The webhook payload (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2013, HTTP status code, HTTP response headers (array of strings)
     */
    public function createWebhookWithHttpInfo($createWebhook = null)
    {
        // parse inputs
        $resourcePath = "/notification-subscriptions/v1/webhooks";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // body params
        $_tempBody = null;
        if (isset($createWebhook)) {
            $_tempBody = $createWebhook;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $_tempBody = $sdkTracker->insertDeveloperIdTracker($_tempBody, end(explode('\\', '\CyberSource\Model\CreateWebhook')), $this->apiClient->merchantConfig->getRunEnvironment());

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

        self::$logger->debug("Return Type : \CyberSource\Model\InlineResponse2013");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse2013',
                '/notification-subscriptions/v1/webhooks'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse2013', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse2013', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation findProductToSubscribe
     *
     * Find Products You Can Subscribe To
     *
     * DISCLAIMER : Cybersource may allow Customer to access, use, and/or test a Cybersource product or service that may still be in development or has not been market-tested ("Beta Product") solely for the purpose of evaluating the functionality or marketability of the Beta Product (a "Beta Evaluation"). Notwithstanding any language to the contrary, the following terms shall apply with respect to Customer's participation in any Beta Evaluation (and the Beta Product(s)) accessed thereunder): The Parties will enter into a separate form agreement detailing the scope of the Beta Evaluation, requirements, pricing, the length of the beta evaluation period ("Beta Product Form"). Beta Products are not, and may not become, Transaction Services and have not yet been publicly released and are offered for the sole purpose of internal testing and non-commercial evaluation. Customer's use of the Beta Product shall be solely for the purpose of conducting the Beta Evaluation. Customer accepts all risks arising out of the access and use of the Beta Products. Cybersource may, in its sole discretion, at any time, terminate or discontinue the Beta Evaluation. Customer acknowledges and agrees that any Beta Product may still be in development and that Beta Product is provided "AS IS" and may not perform at the level of a commercially available service, may not operate as expected and may be modified prior to release. CYBERSOURCE SHALL NOT BE RESPONSIBLE OR LIABLE UNDER ANY CONTRACT, TORT (INCLUDING NEGLIGENCE), OR OTHERWISE RELATING TO A BETA PRODUCT OR THE BETA EVALUATION (A) FOR LOSS OR INACCURACY OF DATA OR COST OF PROCUREMENT OF SUBSTITUTE GOODS, SERVICES OR TECHNOLOGY, (B) ANY CLAIM, LOSSES, DAMAGES, OR CAUSE OF ACTION ARISING IN CONNECTION WITH THE BETA PRODUCT; OR (C) FOR ANY INDIRECT, INCIDENTAL OR CONSEQUENTIAL DAMAGES INCLUDING, BUT NOT LIMITED TO, LOSS OF REVENUES AND LOSS OF PROFITS.
     * @param string $organizationId The Organization Identifier. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2003[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findProductToSubscribe($organizationId)
    {
        self::$logger->info('CALL TO METHOD findProductToSubscribe STARTED');
        list($response, $statusCode, $httpHeader) = $this->findProductToSubscribeWithHttpInfo($organizationId);
        self::$logger->info('CALL TO METHOD findProductToSubscribe ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation findProductToSubscribeWithHttpInfo
     *
     * Find Products You Can Subscribe To
     *
     * @param string $organizationId The Organization Identifier. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2003[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findProductToSubscribeWithHttpInfo($organizationId)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $organizationId when calling findProductToSubscribe");
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling findProductToSubscribe');
        }
        // parse inputs
        $resourcePath = "/notification-subscriptions/v1/products/{organizationId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($organizationId !== null) {
            $resourcePath = str_replace(
                "{" . "organizationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($organizationId),
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

        self::$logger->debug("Return Type : \CyberSource\Model\InlineResponse2003[]");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse2003[]',
                '/notification-subscriptions/v1/products/{organizationId}'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse2003[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse2003[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation saveSymEgressKey
     *
     * Create Webhook Security Keys
     *
     * DISCLAIMER : Cybersource may allow Customer to access, use, and/or test a Cybersource product or service that may still be in development or has not been market-tested ("Beta Product") solely for the purpose of evaluating the functionality or marketability of the Beta Product (a "Beta Evaluation"). Notwithstanding any language to the contrary, the following terms shall apply with respect to Customer's participation in any Beta Evaluation (and the Beta Product(s)) accessed thereunder): The Parties will enter into a separate form agreement detailing the scope of the Beta Evaluation, requirements, pricing, the length of the beta evaluation period ("Beta Product Form"). Beta Products are not, and may not become, Transaction Services and have not yet been publicly released and are offered for the sole purpose of internal testing and non-commercial evaluation. Customer's use of the Beta Product shall be solely for the purpose of conducting the Beta Evaluation. Customer accepts all risks arising out of the access and use of the Beta Products. Cybersource may, in its sole discretion, at any time, terminate or discontinue the Beta Evaluation. Customer acknowledges and agrees that any Beta Product may still be in development and that Beta Product is provided "AS IS" and may not perform at the level of a commercially available service, may not operate as expected and may be modified prior to release. CYBERSOURCE SHALL NOT BE RESPONSIBLE OR LIABLE UNDER ANY CONTRACT, TORT (INCLUDING NEGLIGENCE), OR OTHERWISE RELATING TO A BETA PRODUCT OR THE BETA EVALUATION (A) FOR LOSS OR INACCURACY OF DATA OR COST OF PROCUREMENT OF SUBSTITUTE GOODS, SERVICES OR TECHNOLOGY, (B) ANY CLAIM, LOSSES, DAMAGES, OR CAUSE OF ACTION ARISING IN CONNECTION WITH THE BETA PRODUCT; OR (C) FOR ANY INDIRECT, INCIDENTAL OR CONSEQUENTIAL DAMAGES INCLUDING, BUT NOT LIMITED TO, LOSS OF REVENUES AND LOSS OF PROFITS.
     * @param string $vCSenderOrganizationId Sender organization id (required)
     * @param string $vCPermissions Encoded user permissions returned by the CGK, for the entity user who initiated the boarding (required)
     * @param string $vCCorrelationId A globally unique id associated with your request (optional)
     * @param \CyberSource\Model\SaveSymEgressKey $saveSymEgressKey Provide egress Symmetric key information to save (create or store or refresh) (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2012, HTTP status code, HTTP response headers (array of strings)
     */
    public function saveSymEgressKey($vCSenderOrganizationId, $vCPermissions, $vCCorrelationId = null, $saveSymEgressKey = null)
    {
        self::$logger->info('CALL TO METHOD saveSymEgressKey STARTED');
        list($response, $statusCode, $httpHeader) = $this->saveSymEgressKeyWithHttpInfo($vCSenderOrganizationId, $vCPermissions, $vCCorrelationId, $saveSymEgressKey);
        self::$logger->info('CALL TO METHOD saveSymEgressKey ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation saveSymEgressKeyWithHttpInfo
     *
     * Create Webhook Security Keys
     *
     * @param string $vCSenderOrganizationId Sender organization id (required)
     * @param string $vCPermissions Encoded user permissions returned by the CGK, for the entity user who initiated the boarding (required)
     * @param string $vCCorrelationId A globally unique id associated with your request (optional)
     * @param \CyberSource\Model\SaveSymEgressKey $saveSymEgressKey Provide egress Symmetric key information to save (create or store or refresh) (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2012, HTTP status code, HTTP response headers (array of strings)
     */
    public function saveSymEgressKeyWithHttpInfo($vCSenderOrganizationId, $vCPermissions, $vCCorrelationId = null, $saveSymEgressKey = null)
    {
        // verify the required parameter 'vCSenderOrganizationId' is set
        if ($vCSenderOrganizationId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $vCSenderOrganizationId when calling saveSymEgressKey");
            throw new \InvalidArgumentException('Missing the required parameter $vCSenderOrganizationId when calling saveSymEgressKey');
        }
        if ((strlen($vCSenderOrganizationId) > 100)) {
            self::$logger->error("InvalidArgumentException : Invalid length for \"$vCSenderOrganizationId\" when calling CreateNewWebhooksApi.saveSymEgressKey, must be smaller than or equal to 100.");
            throw new \InvalidArgumentException('Invalid length for "$vCSenderOrganizationId" when calling CreateNewWebhooksApi.saveSymEgressKey, must be smaller than or equal to 100.');
        }
        if ((strlen($vCSenderOrganizationId) < 2)) {
            self::$logger->error("InvalidArgumentException : Invalid length for \"$vCSenderOrganizationId\" when calling CreateNewWebhooksApi.saveSymEgressKey, must be bigger than or equal to 2.");
            throw new \InvalidArgumentException('Invalid length for "$vCSenderOrganizationId" when calling CreateNewWebhooksApi.saveSymEgressKey, must be bigger than or equal to 2.');
        }
        if (!preg_match("/^[A-Za-z0-9\\-_]+$/", $vCSenderOrganizationId)) {
            self::$logger->error("InvalidArgumentException : Invalid value for \"vCSenderOrganizationId\" when calling CreateNewWebhooksApi.saveSymEgressKey, must conform to the pattern /^[A-Za-z0-9\\-_]+$/.");
            throw new \InvalidArgumentException('Invalid value for \"vCSenderOrganizationId\" when calling CreateNewWebhooksApi.saveSymEgressKey, must conform to the pattern /^[A-Za-z0-9\\-_]+$/.');
        }

        // verify the required parameter 'vCPermissions' is set
        if ($vCPermissions === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $vCPermissions when calling saveSymEgressKey");
            throw new \InvalidArgumentException('Missing the required parameter $vCPermissions when calling saveSymEgressKey');
        }
        if (!is_null($vCCorrelationId) && (strlen($vCCorrelationId) > 100)) {
            self::$logger->error("InvalidArgumentException : Invalid length for \"$vCCorrelationId\" when calling CreateNewWebhooksApi.saveSymEgressKey, must be smaller than or equal to 100.");
            throw new \InvalidArgumentException('Invalid length for "$vCCorrelationId" when calling CreateNewWebhooksApi.saveSymEgressKey, must be smaller than or equal to 100.');
        }
        if (!is_null($vCCorrelationId) && (strlen($vCCorrelationId) < 2)) {
            self::$logger->error("InvalidArgumentException : Invalid length for \"$vCCorrelationId\" when calling CreateNewWebhooksApi.saveSymEgressKey, must be bigger than or equal to 2.");
            throw new \InvalidArgumentException('Invalid length for "$vCCorrelationId" when calling CreateNewWebhooksApi.saveSymEgressKey, must be bigger than or equal to 2.');
        }
        if (!is_null($vCCorrelationId) && !preg_match("/^[A-Za-z0-9\\.\\-_:]+$/", $vCCorrelationId)) {
            self::$logger->error("InvalidArgumentException : Invalid value for \"vCCorrelationId\" when calling CreateNewWebhooksApi.saveSymEgressKey, must conform to the pattern /^[A-Za-z0-9\\.\\-_:]+$/.");
            throw new \InvalidArgumentException('Invalid value for \"vCCorrelationId\" when calling CreateNewWebhooksApi.saveSymEgressKey, must conform to the pattern /^[A-Za-z0-9\\.\\-_:]+$/.');
        }

        // parse inputs
        $resourcePath = "/kms/egress/v2/keys-sym";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($vCCorrelationId !== null) {
            $headerParams['v-c-correlation-id'] = $this->apiClient->getSerializer()->toHeaderValue($vCCorrelationId);
        }
        // header params
        if ($vCSenderOrganizationId !== null) {
            $headerParams['v-c-sender-organization-id'] = $this->apiClient->getSerializer()->toHeaderValue($vCSenderOrganizationId);
        }
        // header params
        if ($vCPermissions !== null) {
            $headerParams['v-c-permissions'] = $this->apiClient->getSerializer()->toHeaderValue($vCPermissions);
        }
        // body params
        $_tempBody = null;
        if (isset($saveSymEgressKey)) {
            $_tempBody = $saveSymEgressKey;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $_tempBody = $sdkTracker->insertDeveloperIdTracker($_tempBody, end(explode('\\', '\CyberSource\Model\SaveSymEgressKey')), $this->apiClient->merchantConfig->getRunEnvironment());

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

        self::$logger->debug("Return Type : \CyberSource\Model\InlineResponse2012");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse2012',
                '/kms/egress/v2/keys-sym'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse2012', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse2012', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }
}
