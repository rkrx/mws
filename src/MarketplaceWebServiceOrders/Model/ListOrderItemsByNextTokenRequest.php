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
 * MarketplaceWebServiceOrders_Model_ListOrderItemsByNextTokenRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>NextToken: string</li>
 *
 * </ul>
 */
 class MarketplaceWebServiceOrders_Model_ListOrderItemsByNextTokenRequest extends MarketplaceWebServiceOrders_Model
 {
    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken' => ['FieldValue' => null, 'FieldType' => 'string'],
            'NextToken' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerId property.
     *
     * @return string SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return $this
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return bool `true` if SellerId is set.
     */
    public function isSetSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'] !== null;
    }

    /**
     * Set the value of SellerId, return this.
     *
     * @param string $value
     * @return $this
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
        return $this;
    }

    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return string
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @return $this
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return bool `true` if MWSAuthToken is set.
     */
    public function isSetMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'] !== null;
    }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param string $value
     * @return $this
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);
        return $this;
    }

    /**
     * Get the value of the NextToken property.
     *
     * @return string NextToken.
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @return $this
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NextToken is set.
     *
     * @return bool `true` if NextToken is set.
     */
    public function isSetNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'] !== null;
    }

    /**
     * Set the value of NextToken, return this.
     *
     * @param string $value
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }
}
