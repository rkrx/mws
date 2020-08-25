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
 * MarketplaceWebServiceOrders_Model_GetOrderResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Orders: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_GetOrderResult extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
        $this->_fields = [
            'Orders' => [
                'FieldValue' => [],
                'FieldType' => ['MarketplaceWebServiceOrders_Model_Order'],
                'ListMemberName' => 'Order'
            ],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Orders property.
     *
     * @return MarketplaceWebServiceOrders_Model_Order[]
     */
    public function getOrders()
    {
        $this->_fields['Orders']['FieldValue'] = $this->_fields['Orders']['FieldValue'] ?? [];
        return $this->_fields['Orders']['FieldValue'];
    }

    /**
     * Set the value of the Orders property.
     *
     * @param array $value
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
        $this->_fields['Orders']['FieldValue'] = [];
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
     *
     * @return $this
     */
    public function withOrders(...$orders)
    {
        $this->_fields['Orders']['FieldValue'] = $orders;
        return $this;
    }

}
