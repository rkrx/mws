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
 * MarketplaceWebServiceOrders_Model_ListOrderItemsResult
 * 
 * Properties:
 * <ul>
 *     <li>NextToken: string</li>
 *     <li>AmazonOrderId: string</li>
 *     <li>OrderItems: array</li>
 * </ul>
 */
 class MarketplaceWebServiceOrders_Model_ListOrderItemsResult extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
        $this->_fields = [
            'NextToken' => ['FieldValue' => null, 'FieldType' => 'string'],
            'AmazonOrderId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'OrderItems' => ['FieldValue' => [], 'FieldType' => ['MarketplaceWebServiceOrders_Model_OrderItem'], 'ListMemberName' => 'OrderItem'],
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
     * Get the value of the AmazonOrderId property.
     *
     * @return string AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @return $this
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return bool `true` if AmazonOrderId is set.
     */
    public function isSetAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'] !== null;
    }

    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param string $value
     * @return $this
     */
    public function withAmazonOrderId($value)
    {
        $this->setAmazonOrderId($value);
        return $this;
    }

    /**
     * Get the value of the OrderItems property.
     *
     * @return MarketplaceWebServiceOrders_Model_OrderItem[] OrderItems.
     */
    public function getOrderItems()
    {
        if ($this->_fields['OrderItems']['FieldValue'] === null) {
            $this->_fields['OrderItems']['FieldValue'] = [];
        }
        return $this->_fields['OrderItems']['FieldValue'];
    }

    /**
     * Set the value of the OrderItems property.
     *
     * @param array orderItems
     * @return $this
     */
    public function setOrderItems($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['OrderItems']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear OrderItems.
     */
    public function unsetOrderItems()
    {
        $this->_fields['OrderItems']['FieldValue'] = [];
    }

    /**
     * Check to see if OrderItems is set.
     *
     * @return bool `true` if OrderItems is set.
     */
    public function isSetOrderItems()
    {
        return !empty($this->_fields['OrderItems']['FieldValue']);
    }

    /**
     * Add values for OrderItems, return this.
     *
     * @param MarketplaceWebServiceOrders_Model_OrderItem ...$orderItems
     * @return $this
     */
    public function withOrderItems(...$orderItems)
    {
        $this->_fields['OrderItems']['FieldValue'][] = $orderItems;
        return $this;
    }
}
