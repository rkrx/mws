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
 * MarketplaceWebServiceOrders_Model_ListOrdersResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>NextToken: string</li>
 * <li>CreatedBefore: string</li>
 * <li>LastUpdatedBefore: string</li>
 * <li>Orders: array</li>
 *
 * </ul>
 */
 class MarketplaceWebServiceOrders_Model_ListOrdersResult extends MarketplaceWebServiceOrders_Model
 {
    public function __construct($data = null)
    {
        $this->_fields = [
            'NextToken' => ['FieldValue' => null, 'FieldType' => 'string'],
            'CreatedBefore' => ['FieldValue' => null, 'FieldType' => 'string'],
            'LastUpdatedBefore' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Orders' => [
                'FieldValue' => [],
                'FieldType' => ['MarketplaceWebServiceOrders_Model_Order'],
                'ListMemberName' => 'Order'
            ],
        ];
        parent::__construct($data);
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

    /**
     * Get the value of the CreatedBefore property.
     *
     * @return string
     */
    public function getCreatedBefore()
    {
        return $this->_fields['CreatedBefore']['FieldValue'];
    }

    /**
     * Set the value of the CreatedBefore property.
     *
     * @param string createdBefore
     * @return $this
     */
    public function setCreatedBefore($value)
    {
        $this->_fields['CreatedBefore']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CreatedBefore is set.
     *
     * @return bool `true` if CreatedBefore is set.
     */
    public function isSetCreatedBefore()
    {
        return $this->_fields['CreatedBefore']['FieldValue'] !== null;
    }

    /**
     * Set the value of CreatedBefore, return this.
     *
     * @param string $value
     * @return $this
     */
    public function withCreatedBefore($value)
    {
        $this->setCreatedBefore($value);
        return $this;
    }

    /**
     * Get the value of the LastUpdatedBefore property.
     *
     * @return string LastUpdatedBefore.
     */
    public function getLastUpdatedBefore()
    {
        return $this->_fields['LastUpdatedBefore']['FieldValue'];
    }

    /**
     * Set the value of the LastUpdatedBefore property.
     *
     * @param string lastUpdatedBefore
     * @return $this
     */
    public function setLastUpdatedBefore($value)
    {
        $this->_fields['LastUpdatedBefore']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LastUpdatedBefore is set.
     *
     * @return bool `true` if LastUpdatedBefore is set.
     */
    public function isSetLastUpdatedBefore()
    {
        return $this->_fields['LastUpdatedBefore']['FieldValue'] !== null;
    }

    /**
     * Set the value of LastUpdatedBefore, return this.
     *
     * @param string $value
     * @return $this
     */
    public function withLastUpdatedBefore($value)
    {
        $this->setLastUpdatedBefore($value);
        return $this;
    }

    /**
     * Get the value of the Orders property.
     *
     * @return MarketplaceWebServiceOrders_Model_Order[] Orders.
     */
    public function getOrders()
    {
        if ($this->_fields['Orders']['FieldValue'] === null) {
            $this->_fields['Orders']['FieldValue'] = [];
        }
        return $this->_fields['Orders']['FieldValue'];
    }

    /**
     * Set the value of the Orders property.
     *
     * @param MarketplaceWebServiceOrders_Model_Order[]|MarketplaceWebServiceOrders_Model_Order $value
     * @return $this
     */
    public function setOrders($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['Orders']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear Orders.
     */
    public function unsetOrders()
    {
        $this->_fields['Orders']['FieldValue'] = array();
    }

    /**
     * Check to see if Orders is set.
     *
     * @return bool `true` if Orders is set.
     */
    public function isSetOrders()
    {
        return !empty($this->_fields['Orders']['FieldValue']);
    }

    /**
     * Add values for Orders, return this.
     *
     * @param MarketplaceWebServiceOrders_Model_Order ...$orders
     * @return $this
     */
    public function withOrders(...$orders)
    {
        $this->_fields['Orders']['FieldValue'] = $orders;
        return $this;
    }
}
