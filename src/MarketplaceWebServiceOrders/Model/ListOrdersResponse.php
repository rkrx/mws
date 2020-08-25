<?php
/*******************************************************************************
 * Copyright 2009-2018 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Orders
 * @version  2013-09-01
 * Library Version: 2018-10-31
 * Generated: Mon Oct 22 22:40:38 UTC 2018
 */

/**
 *  @see MarketplaceWebServiceOrders_Model
 */

require_once __DIR__ . '/../Model.php';


/**
 * MarketplaceWebServiceOrders_Model_ListOrdersResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ListOrdersResult: MarketplaceWebServiceOrders_Model_ListOrdersResult</li>
 * <li>ResponseMetadata: MarketplaceWebServiceOrders_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MarketplaceWebServiceOrders_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */
 class MarketplaceWebServiceOrders_Model_ListOrdersResponse extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
        $this->_fields = [
            'ListOrdersResult' => [
                'FieldValue' => null,
                'FieldType' => 'MarketplaceWebServiceOrders_Model_ListOrdersResult'
            ],
            'ResponseMetadata' => [
                'FieldValue' => null,
                'FieldType' => 'MarketplaceWebServiceOrders_Model_ResponseMetadata'
            ],
            'ResponseHeaderMetadata' => [
                'FieldValue' => null,
                'FieldType' => 'MarketplaceWebServiceOrders_Model_ResponseHeaderMetadata'
            ],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the ListOrdersResult property.
     *
     * @return MarketplaceWebServiceOrders_Model_ListOrdersResult
     */
    public function getListOrdersResult()
    {
        return $this->_fields['ListOrdersResult']['FieldValue'];
    }

    /**
     * Set the value of the ListOrdersResult property.
     *
     * @param MarketplaceWebServiceOrders_Model_ListOrdersResult listOrdersResult
     * @return $this
     */
    public function setListOrdersResult($value)
    {
        $this->_fields['ListOrdersResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListOrdersResult is set.
     *
     * @return bool `true` if ListOrdersResult is set.
     */
    public function isSetListOrdersResult()
    {
        return $this->_fields['ListOrdersResult']['FieldValue'] !== null;
    }

    /**
     * Set the value of ListOrdersResult, return this.
     *
     * @param MarketplaceWebServiceOrders_Model_ListOrdersResult $value
     * @return $this
     */
    public function withListOrdersResult($value)
    {
        $this->setListOrdersResult($value);
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return MarketplaceWebServiceOrders_Model_ResponseMetadata
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param MarketplaceWebServiceOrders_Model_ResponseMetadata $value
     * @return $this
     */
    public function setResponseMetadata(MarketplaceWebServiceOrders_Model_ResponseMetadata $value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return bool `true` if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'] !== null;
    }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param MarketplaceWebServiceOrders_Model_ResponseMetadata $value
     * @return $this
     */
    public function withResponseMetadata(MarketplaceWebServiceOrders_Model_ResponseMetadata $value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return MarketplaceWebServiceOrders_Model_ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param MarketplaceWebServiceOrders_Model_ResponseHeaderMetadata responseHeaderMetadata
     * @return $this
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return bool `true` if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'] !== null;
    }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return $this
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }
    
    /**
     * Construct MarketplaceWebServiceOrders_Model_ListOrdersResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return MarketplaceWebServiceOrders_Model_ListOrdersResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListOrdersResponse']");
        if ($response->length === 1) {
            return new MarketplaceWebServiceOrders_Model_ListOrdersResponse($response->item(0));
        }
        throw new RuntimeException ('Unable to construct MarketplaceWebServiceOrders_Model_ListOrdersResponse from provided XML. '.
                                    'Make sure that ListOrdersResponse is a root element');
    }
    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = '<ListOrdersResponse xmlns="https://mws.amazonservices.com/Orders/2013-09-01">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</ListOrdersResponse>';
        return $xml;
    }
}
