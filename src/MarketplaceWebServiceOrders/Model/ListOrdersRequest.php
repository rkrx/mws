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
 * MarketplaceWebServiceOrders_Model_ListOrdersRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>CreatedAfter: string</li>
 * <li>CreatedBefore: string</li>
 * <li>LastUpdatedAfter: string</li>
 * <li>LastUpdatedBefore: string</li>
 * <li>OrderStatus: array</li>
 * <li>MarketplaceId: array</li>
 * <li>FulfillmentChannel: array</li>
 * <li>PaymentMethod: array</li>
 * <li>BuyerEmail: string</li>
 * <li>SellerOrderId: string</li>
 * <li>MaxResultsPerPage: int</li>
 * <li>TFMShipmentStatus: array</li>
 * <li>EasyShipShipmentStatus: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_ListOrdersRequest extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'),
    'CreatedAfter' => array('FieldValue' => null, 'FieldType' => 'string'),
    'CreatedBefore' => array('FieldValue' => null, 'FieldType' => 'string'),
    'LastUpdatedAfter' => array('FieldValue' => null, 'FieldType' => 'string'),
    'LastUpdatedBefore' => array('FieldValue' => null, 'FieldType' => 'string'),
    'OrderStatus' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'Status'),
    'MarketplaceId' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'Id'),
    'FulfillmentChannel' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'Channel'),
    'PaymentMethod' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'Method'),
    'BuyerEmail' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SellerOrderId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MaxResultsPerPage' => array('FieldValue' => null, 'FieldType' => 'int'),
    'TFMShipmentStatus' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'Status'),
    'EasyShipShipmentStatus' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'Status'),
    );
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
     * Get the value of the CreatedAfter property.
     *
     * @return string CreatedAfter.
     */
    public function getCreatedAfter()
    {
        return $this->_fields['CreatedAfter']['FieldValue'];
    }

    /**
     * Set the value of the CreatedAfter property.
     *
     * @param string $value
     * @return $this
     */
    public function setCreatedAfter($value)
    {
        $this->_fields['CreatedAfter']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CreatedAfter is set.
     *
     * @return bool `true` if CreatedAfter is set.
     */
    public function isSetCreatedAfter()
    {
        return $this->_fields['CreatedAfter']['FieldValue'] !== null;
    }

    /**
     * Set the value of CreatedAfter, return this.
     *
     * @param string $value
     * @return $this
     */
    public function withCreatedAfter($value)
    {
        $this->setCreatedAfter($value);
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
     * @param string $value
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
     * Get the value of the LastUpdatedAfter property.
     *
     * @return string LastUpdatedAfter.
     */
    public function getLastUpdatedAfter()
    {
        return $this->_fields['LastUpdatedAfter']['FieldValue'];
    }

    /**
     * Set the value of the LastUpdatedAfter property.
     *
     * @param string $value
     * @return $this
     */
    public function setLastUpdatedAfter($value)
    {
        $this->_fields['LastUpdatedAfter']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LastUpdatedAfter is set.
     *
     * @return bool `true` if LastUpdatedAfter is set.
     */
    public function isSetLastUpdatedAfter()
    {
        return $this->_fields['LastUpdatedAfter']['FieldValue'] !== null;
    }

    /**
     * Set the value of LastUpdatedAfter, return this.
     *
     * @param string $value
     * @return $this
     */
    public function withLastUpdatedAfter($value)
    {
        $this->setLastUpdatedAfter($value);
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
     * @param string $value
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
     * Get the value of the OrderStatus property.
     *
     * @return string[] OrderStatus.
     */
    public function getOrderStatus()
    {
        if ($this->_fields['OrderStatus']['FieldValue'] === null) {
            $this->_fields['OrderStatus']['FieldValue'] = [];
        }
        return $this->_fields['OrderStatus']['FieldValue'];
    }

    /**
     * Set the value of the OrderStatus property.
     *
     * @param array|string $value
     * @return $this
     */
    public function setOrderStatus($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['OrderStatus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear OrderStatus.
     */
    public function unsetOrderStatus()
    {
        $this->_fields['OrderStatus']['FieldValue'] = [];
    }

    /**
     * Check to see if OrderStatus is set.
     *
     * @return bool `true` if OrderStatus is set.
     */
    public function isSetOrderStatus()
    {
        return !empty($this->_fields['OrderStatus']['FieldValue']);
    }

    /**
     * Add values for OrderStatus, return this.
     *
     * @param string ...$orderStatus
     * @return $this
     */
    public function withOrderStatus(...$orderStatus)
    {
        $this->_fields['OrderStatus']['FieldValue'][] = $orderStatus;
        return $this;
    }

    /**
     * Get the value of the MarketplaceId property.
     *
     * @return string[] MarketplaceId.
     */
    public function getMarketplaceId()
    {
        if ($this->_fields['MarketplaceId']['FieldValue'] === null) {
            $this->_fields['MarketplaceId']['FieldValue'] = [];
        }
        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceId property.
     *
     * @param array|string $value
     * @return $this
     */
    public function setMarketplaceId($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear MarketplaceId.
     */
    public function unsetMarketplaceId()
    {
        $this->_fields['MarketplaceId']['FieldValue'] = array();
    }

    /**
     * Check to see if MarketplaceId is set.
     *
     * @return bool `true` if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return !empty($this->_fields['MarketplaceId']['FieldValue']);
    }
    
     /**
      * Add values for MarketplaceId, return this.
      *
      * @param string ...$marketplaceId
      * @return $this
      */
    public function withMarketplaceId(...$marketplaceId)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $marketplaceId;
        return $this;
    }

    /**
     * Get the value of the FulfillmentChannel property.
     *
     * @return string[] FulfillmentChannel.
     */
    public function getFulfillmentChannel()
    {
        if ($this->_fields['FulfillmentChannel']['FieldValue'] === null) {
            $this->_fields['FulfillmentChannel']['FieldValue'] = [];
        }
        return $this->_fields['FulfillmentChannel']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentChannel property.
     *
     * @param array|string $value
     * @return $this
     */
    public function setFulfillmentChannel($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['FulfillmentChannel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear FulfillmentChannel.
     */
    public function unsetFulfillmentChannel()
    {
        $this->_fields['FulfillmentChannel']['FieldValue'] = array();
    }

    /**
     * Check to see if FulfillmentChannel is set.
     *
     * @return bool `true` if FulfillmentChannel is set.
     */
    public function isSetFulfillmentChannel()
    {
        return !empty($this->_fields['FulfillmentChannel']['FieldValue']);
    }

    /**
     * Add values for FulfillmentChannel, return this.
     *
     * @param string ...$fulfillmentChannel
     * @return $this
     */
    public function withFulfillmentChannel(...$fulfillmentChannel)
    {
        $this->_fields['FulfillmentChannel']['FieldValue'] = $fulfillmentChannel;
        return $this;
    }

    /**
     * Get the value of the PaymentMethod property.
     *
     * @return string[] PaymentMethod.
     */
    public function getPaymentMethod()
    {
        if ($this->_fields['PaymentMethod']['FieldValue'] === null) {
            $this->_fields['PaymentMethod']['FieldValue'] = [];
        }
        return $this->_fields['PaymentMethod']['FieldValue'];
    }

    /**
     * Set the value of the PaymentMethod property.
     *
     * @param array|string paymentMethod
     * @return $this
     */
    public function setPaymentMethod($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['PaymentMethod']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear PaymentMethod.
     */
    public function unsetPaymentMethod()
    {
        $this->_fields['PaymentMethod']['FieldValue'] = [];
    }

    /**
     * Check to see if PaymentMethod is set.
     *
     * @return bool `true` if PaymentMethod is set.
     */
    public function isSetPaymentMethod()
    {
        return !empty($this->_fields['PaymentMethod']['FieldValue']);
    }

    /**
     * Add values for PaymentMethod, return this.
     *
     * @param string ...$paymentMethod
     * @return $this
     */
    public function withPaymentMethod(...$paymentMethod)
    {
        $this->_fields['PaymentMethod']['FieldValue'] = $paymentMethod;
        return $this;
    }

    /**
     * Get the value of the BuyerEmail property.
     *
     * @return string BuyerEmail.
     */
    public function getBuyerEmail()
    {
        return $this->_fields['BuyerEmail']['FieldValue'];
    }

    /**
     * Set the value of the BuyerEmail property.
     *
     * @param string $value
     * @return $this
     */
    public function setBuyerEmail($value)
    {
        $this->_fields['BuyerEmail']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if BuyerEmail is set.
     *
     * @return bool `true` if BuyerEmail is set.
     */
    public function isSetBuyerEmail()
    {
        return $this->_fields['BuyerEmail']['FieldValue'] !== null;
    }

    /**
     * Set the value of BuyerEmail, return this.
     *
     * @param string $value
     * @return $this
     */
    public function withBuyerEmail($value)
    {
        $this->setBuyerEmail($value);
        return $this;
    }

    /**
     * Get the value of the SellerOrderId property.
     *
     * @return string SellerOrderId.
     */
    public function getSellerOrderId()
    {
        return $this->_fields['SellerOrderId']['FieldValue'];
    }

    /**
     * Set the value of the SellerOrderId property.
     *
     * @param string sellerOrderId
     * @return $this
     */
    public function setSellerOrderId($value)
    {
        $this->_fields['SellerOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerOrderId is set.
     *
     * @return bool `true` if SellerOrderId is set.
     */
    public function isSetSellerOrderId()
    {
                return $this->_fields['SellerOrderId']['FieldValue'] !== null;
            }

    /**
     * Set the value of SellerOrderId, return this.
     *
     * @param string $value
     * @return $this
     */
    public function withSellerOrderId($value)
    {
        $this->setSellerOrderId($value);
        return $this;
    }

    /**
     * Get the value of the MaxResultsPerPage property.
     *
     * @return int MaxResultsPerPage.
     */
    public function getMaxResultsPerPage()
    {
        return $this->_fields['MaxResultsPerPage']['FieldValue'];
    }

    /**
     * Set the value of the MaxResultsPerPage property.
     *
     * @param int maxResultsPerPage
     * @return $this
     */
    public function setMaxResultsPerPage($value)
    {
        $this->_fields['MaxResultsPerPage']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MaxResultsPerPage is set.
     *
     * @return bool `true` if MaxResultsPerPage is set.
     */
    public function isSetMaxResultsPerPage()
    {
        return $this->_fields['MaxResultsPerPage']['FieldValue'] !== null;
    }

    /**
     * Set the value of MaxResultsPerPage, return this.
     *
     * @param int $value
     * @return $this
     */
    public function withMaxResultsPerPage($value)
    {
        $this->setMaxResultsPerPage($value);
        return $this;
    }

    /**
     * Get the value of the TFMShipmentStatus property.
     *
     * @return string[] TFMShipmentStatus.
     */
    public function getTFMShipmentStatus()
    {
        if ($this->_fields['TFMShipmentStatus']['FieldValue'] === null) {
            $this->_fields['TFMShipmentStatus']['FieldValue'] = [];
        }
        return $this->_fields['TFMShipmentStatus']['FieldValue'];
    }

    /**
     * Set the value of the TFMShipmentStatus property.
     *
     * @param array|string $value
     * @return $this
     */
    public function setTFMShipmentStatus($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['TFMShipmentStatus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear TFMShipmentStatus.
     */
    public function unsetTFMShipmentStatus()
    {
        $this->_fields['TFMShipmentStatus']['FieldValue'] = array();
    }

    /**
     * Check to see if TFMShipmentStatus is set.
     *
     * @return bool `true` if TFMShipmentStatus is set.
     */
    public function isSetTFMShipmentStatus()
    {
        return !empty($this->_fields['TFMShipmentStatus']['FieldValue']);
    }

    /**
     * Add values for TFMShipmentStatus, return this.
     *
     * @param string ...$tfmShipmentStatus
     * @return $this
     */
    public function withTFMShipmentStatus(...$tfmShipmentStatus)
    {
        $this->_fields['TFMShipmentStatus']['FieldValue'][] = $tfmShipmentStatus;
        return $this;
    }

    /**
     * Get the value of the EasyShipShipmentStatus property.
     *
     * @return string[] EasyShipShipmentStatus.
     */
    public function getEasyShipShipmentStatus()
    {
        if ($this->_fields['EasyShipShipmentStatus']['FieldValue'] === null) {
            $this->_fields['EasyShipShipmentStatus']['FieldValue'] = [];
        }
        return $this->_fields['EasyShipShipmentStatus']['FieldValue'];
    }

    /**
     * Set the value of the EasyShipShipmentStatus property.
     *
     * @param array|string $value
     * @return $this
     */
    public function setEasyShipShipmentStatus($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['EasyShipShipmentStatus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear EasyShipShipmentStatus.
     */
    public function unsetEasyShipShipmentStatus()
    {
        $this->_fields['EasyShipShipmentStatus']['FieldValue'] = [];
    }

    /**
     * Check to see if EasyShipShipmentStatus is set.
     *
     * @return bool `true` if EasyShipShipmentStatus is set.
     */
    public function isSetEasyShipShipmentStatus()
    {
        return !empty($this->_fields['EasyShipShipmentStatus']['FieldValue']);
    }

    /**
     * Add values for EasyShipShipmentStatus, return this.
     *
     * @param string ...$easyShipShipmentStatus
     * @return $this
     */
    public function withEasyShipShipmentStatus(...$easyShipShipmentStatus)
    {
        $this->_fields['EasyShipShipmentStatus']['FieldValue'] = $easyShipShipmentStatus;
        return $this;
    }
}
