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
 * MarketplaceWebServiceOrders_Model_GetOrderRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>AmazonOrderId: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_GetOrderRequest extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
        $this->_fields = [
            'SellerId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'MWSAuthToken' => ['FieldValue' => null, 'FieldType' => 'string'],
            'AmazonOrderId' => ['FieldValue' => [], 'FieldType' => ['string'], 'ListMemberName' => 'Id'],
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
     * @param string $value sellerId
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
        return ($this->_fields['SellerId']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of SellerId, return this.
     *
     * @param string $value The new value to set.
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
     * @return string MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string $value
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
        return ($this->_fields['MWSAuthToken']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param string $value The new value to set.
     * @return $this
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);
        return $this;
    }

    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return string[] AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $this->_fields['AmazonOrderId']['FieldValue'] ?? [];
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param array $value
     * @return $this
     */
    public function setAmazonOrderId($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear AmazonOrderId.
     */
    public function unsetAmazonOrderId()
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = [];
    }

    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return bool `true` if AmazonOrderId is set.
     */
    public function isSetAmazonOrderId()
    {
        return !empty($this->_fields['AmazonOrderId']['FieldValue']);
    }

    /**
     * Add values for AmazonOrderId, return this.
     *
     * @param string ...$amazonOrderId
     * @return $this
     */
    public function withAmazonOrderId(...$amazonOrderId)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $amazonOrderId;
        return $this;
    }
}
