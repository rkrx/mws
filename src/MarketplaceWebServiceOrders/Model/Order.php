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
 * MarketplaceWebServiceOrders_Model_Order
 *
 * Properties:
 * <ul>
 *
 * <li>AmazonOrderId: string</li>
 * <li>SellerOrderId: string</li>
 * <li>PurchaseDate: string</li>
 * <li>LastUpdateDate: string</li>
 * <li>OrderStatus: string</li>
 * <li>FulfillmentChannel: string</li>
 * <li>SalesChannel: string</li>
 * <li>OrderChannel: string</li>
 * <li>ShipServiceLevel: string</li>
 * <li>ShippingAddress: MarketplaceWebServiceOrders_Model_Address</li>
 * <li>OrderTotal: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>NumberOfItemsShipped: int</li>
 * <li>NumberOfItemsUnshipped: int</li>
 * <li>PaymentExecutionDetail: array</li>
 * <li>PaymentMethod: string</li>
 * <li>PaymentMethodDetails: array</li>
 * <li>MarketplaceId: string</li>
 * <li>BuyerEmail: string</li>
 * <li>BuyerName: string</li>
 * <li>BuyerCounty: string</li>
 * <li>BuyerTaxInfo: MarketplaceWebServiceOrders_Model_BuyerTaxInfo</li>
 * <li>ShipmentServiceLevelCategory: string</li>
 * <li>ShippedByAmazonTFM: bool</li>
 * <li>TFMShipmentStatus: string</li>
 * <li>EasyShipShipmentStatus: string</li>
 * <li>CbaDisplayableShippingLabel: string</li>
 * <li>OrderType: string</li>
 * <li>EarliestShipDate: string</li>
 * <li>LatestShipDate: string</li>
 * <li>EarliestDeliveryDate: string</li>
 * <li>LatestDeliveryDate: string</li>
 * <li>IsBusinessOrder: bool</li>
 * <li>PurchaseOrderNumber: string</li>
 * <li>IsPrime: bool</li>
 * <li>IsPremiumOrder: bool</li>
 * <li>ReplacedOrderId: string</li>
 * <li>IsReplacementOrder: bool</li>
 * <li>PromiseResponseDueDate: string</li>
 * <li>IsEstimatedShipDateSet: bool</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_Order extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
        $this->_fields = [
            'AmazonOrderId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'SellerOrderId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'PurchaseDate' => ['FieldValue' => null, 'FieldType' => 'string'],
            'LastUpdateDate' => ['FieldValue' => null, 'FieldType' => 'string'],
            'OrderStatus' => ['FieldValue' => null, 'FieldType' => 'string'],
            'FulfillmentChannel' => ['FieldValue' => null, 'FieldType' => 'string'],
            'SalesChannel' => ['FieldValue' => null, 'FieldType' => 'string'],
            'OrderChannel' => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShipServiceLevel' => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShippingAddress' => ['FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Address'],
            'OrderTotal' => ['FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'],
            'NumberOfItemsShipped' => ['FieldValue' => null, 'FieldType' => 'int'],
            'NumberOfItemsUnshipped' => ['FieldValue' => null, 'FieldType' => 'int'],
            'PaymentExecutionDetail' => [
                'FieldValue' => [],
                'FieldType' => ['MarketplaceWebServiceOrders_Model_PaymentExecutionDetailItem'],
                'ListMemberName' => 'PaymentExecutionDetailItem'
            ],
            'PaymentMethod' => ['FieldValue' => null, 'FieldType' => 'string'],
            'PaymentMethodDetails' => [
                'FieldValue' => [],
                'FieldType' => ['string'],
                'ListMemberName' => 'PaymentMethodDetail'
            ],
            'MarketplaceId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'BuyerEmail' => ['FieldValue' => null, 'FieldType' => 'string'],
            'BuyerName' => ['FieldValue' => null, 'FieldType' => 'string'],
            'BuyerCounty' => ['FieldValue' => null, 'FieldType' => 'string'],
            'BuyerTaxInfo' => ['FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_BuyerTaxInfo'],
            'ShipmentServiceLevelCategory' => ['FieldValue' => null, 'FieldType' => 'string'],
            'ShippedByAmazonTFM' => ['FieldValue' => null, 'FieldType' => 'bool'],
            'TFMShipmentStatus' => ['FieldValue' => null, 'FieldType' => 'string'],
            'EasyShipShipmentStatus' => ['FieldValue' => null, 'FieldType' => 'string'],
            'CbaDisplayableShippingLabel' => ['FieldValue' => null, 'FieldType' => 'string'],
            'OrderType' => ['FieldValue' => null, 'FieldType' => 'string'],
            'EarliestShipDate' => ['FieldValue' => null, 'FieldType' => 'string'],
            'LatestShipDate' => ['FieldValue' => null, 'FieldType' => 'string'],
            'EarliestDeliveryDate' => ['FieldValue' => null, 'FieldType' => 'string'],
            'LatestDeliveryDate' => ['FieldValue' => null, 'FieldType' => 'string'],
            'IsBusinessOrder' => ['FieldValue' => null, 'FieldType' => 'bool'],
            'PurchaseOrderNumber' => ['FieldValue' => null, 'FieldType' => 'string'],
            'IsPrime' => ['FieldValue' => null, 'FieldType' => 'bool'],
            'IsPremiumOrder' => ['FieldValue' => null, 'FieldType' => 'bool'],
            'ReplacedOrderId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'IsReplacementOrder' => ['FieldValue' => null, 'FieldType' => 'bool'],
            'PromiseResponseDueDate' => ['FieldValue' => null, 'FieldType' => 'string'],
            'IsEstimatedShipDateSet' => ['FieldValue' => null, 'FieldType' => 'bool'],
        ];
        parent::__construct($data);
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
        return ($this->_fields['AmazonOrderId']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param string $value amazonOrderId The new value to set.
     * @return $this
     */
    public function withAmazonOrderId($value)
    {
        $this->setAmazonOrderId($value);
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
        return ($this->_fields['SellerOrderId']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of SellerOrderId, return this.
     *
     * @param string $value sellerOrderId The new value to set.
     *
     * @return $this
     */
    public function withSellerOrderId($value)
    {
        $this->setSellerOrderId($value);
        return $this;
    }

    /**
     * Get the value of the PurchaseDate property.
     *
     * @return string PurchaseDate.
     */
    public function getPurchaseDate()
    {
        return $this->_fields['PurchaseDate']['FieldValue'];
    }

    /**
     * Set the value of the PurchaseDate property.
     *
     * @param string purchaseDate
     * @return $this
     */
    public function setPurchaseDate($value)
    {
        $this->_fields['PurchaseDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PurchaseDate is set.
     *
     * @return bool `true` if PurchaseDate is set.
     */
    public function isSetPurchaseDate()
    {
        return ($this->_fields['PurchaseDate']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of PurchaseDate, return this.
     *
     * @param string $value purchaseDate The new value to set.
     *
     * @return $this
     */
    public function withPurchaseDate($value)
    {
        $this->setPurchaseDate($value);
        return $this;
    }

    /**
     * Get the value of the LastUpdateDate property.
     *
     * @return string LastUpdateDate.
     */
    public function getLastUpdateDate()
    {
        return $this->_fields['LastUpdateDate']['FieldValue'];
    }

    /**
     * Set the value of the LastUpdateDate property.
     *
     * @param string lastUpdateDate
     * @return $this
     */
    public function setLastUpdateDate($value)
    {
        $this->_fields['LastUpdateDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LastUpdateDate is set.
     *
     * @return bool `true` if LastUpdateDate is set.
     */
    public function isSetLastUpdateDate()
    {
        return ($this->_fields['LastUpdateDate']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of LastUpdateDate, return this.
     *
     * @param string $value lastUpdateDate The new value to set.
     * @return $this
     */
    public function withLastUpdateDate($value)
    {
        $this->setLastUpdateDate($value);
        return $this;
    }

    /**
     * Get the value of the OrderStatus property.
     *
     * @return string OrderStatus.
     */
    public function getOrderStatus()
    {
        return $this->_fields['OrderStatus']['FieldValue'];
    }

    /**
     * Set the value of the OrderStatus property.
     *
     * @param string orderStatus
     * @return $this
     */
    public function setOrderStatus($value)
    {
        $this->_fields['OrderStatus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if OrderStatus is set.
     *
     * @return bool `true` if OrderStatus is set.
     */
    public function isSetOrderStatus()
    {
        return ($this->_fields['OrderStatus']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of OrderStatus, return this.
     *
     * @param string $value orderStatus The new value to set.
     * @return $this
     */
    public function withOrderStatus($value)
    {
        $this->setOrderStatus($value);
        return $this;
    }

    /**
     * Get the value of the FulfillmentChannel property.
     *
     * @return string FulfillmentChannel.
     */
    public function getFulfillmentChannel()
    {
        return $this->_fields['FulfillmentChannel']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentChannel property.
     *
     * @param string fulfillmentChannel
     * @return $this
     */
    public function setFulfillmentChannel($value)
    {
        $this->_fields['FulfillmentChannel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentChannel is set.
     *
     * @return bool `true` if FulfillmentChannel is set.
     */
    public function isSetFulfillmentChannel()
    {
        return ($this->_fields['FulfillmentChannel']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of FulfillmentChannel, return this.
     *
     * @param string $value fulfillmentChannel The new value to set.
     * @return $this
     */
    public function withFulfillmentChannel($value)
    {
        $this->setFulfillmentChannel($value);
        return $this;
    }

    /**
     * Get the value of the SalesChannel property.
     *
     * @return string SalesChannel.
     */
    public function getSalesChannel()
    {
        return $this->_fields['SalesChannel']['FieldValue'];
    }

    /**
     * Set the value of the SalesChannel property.
     *
     * @param string salesChannel
     * @return $this
     */
    public function setSalesChannel($value)
    {
        $this->_fields['SalesChannel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SalesChannel is set.
     *
     * @return bool `true` if SalesChannel is set.
     */
    public function isSetSalesChannel()
    {
        return ($this->_fields['SalesChannel']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of SalesChannel, return this.
     *
     * @param string $value salesChannel The new value to set.
     * @return $this
     */
    public function withSalesChannel($value)
    {
        $this->setSalesChannel($value);
        return $this;
    }

    /**
     * Get the value of the OrderChannel property.
     *
     * @return string OrderChannel.
     */
    public function getOrderChannel()
    {
        return $this->_fields['OrderChannel']['FieldValue'];
    }

    /**
     * Set the value of the OrderChannel property.
     *
     * @param string orderChannel
     * @return $this
     */
    public function setOrderChannel($value)
    {
        $this->_fields['OrderChannel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if OrderChannel is set.
     *
     * @return bool `true` if OrderChannel is set.
     */
    public function isSetOrderChannel()
    {
        return ($this->_fields['OrderChannel']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of OrderChannel, return this.
     *
     * @param string $value orderChannel The new value to set.
     * @return $this
     */
    public function withOrderChannel($value)
    {
        $this->setOrderChannel($value);
        return $this;
    }

    /**
     * Get the value of the ShipServiceLevel property.
     *
     * @return string ShipServiceLevel.
     */
    public function getShipServiceLevel()
    {
        return $this->_fields['ShipServiceLevel']['FieldValue'];
    }

    /**
     * Set the value of the ShipServiceLevel property.
     *
     * @param string shipServiceLevel
     * @return $this
     */
    public function setShipServiceLevel($value)
    {
        $this->_fields['ShipServiceLevel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipServiceLevel is set.
     *
     * @return bool `true` if ShipServiceLevel is set.
     */
    public function isSetShipServiceLevel()
    {
        return ($this->_fields['ShipServiceLevel']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of ShipServiceLevel, return this.
     *
     * @param string $value shipServiceLevel The new value to set.
     * @return $this
     */
    public function withShipServiceLevel($value)
    {
        $this->setShipServiceLevel($value);
        return $this;
    }

    /**
     * Get the value of the ShippingAddress property.
     *
     * @return MarketplaceWebServiceOrders_Model_Address ShippingAddress.
     */
    public function getShippingAddress()
    {
        return $this->_fields['ShippingAddress']['FieldValue'];
    }

    /**
     * Set the value of the ShippingAddress property.
     *
     * @param MarketplaceWebServiceOrders_Model_Address shippingAddress
     * @return $this
     */
    public function setShippingAddress($value)
    {
        $this->_fields['ShippingAddress']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingAddress is set.
     *
     * @return bool `true` if ShippingAddress is set.
     */
    public function isSetShippingAddress()
    {
        return ($this->_fields['ShippingAddress']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of ShippingAddress, return this.
     *
     * @param MarketplaceWebServiceOrders_Model_Address $value shippingAddress The new value to set.
     * @return $this
     */
    public function withShippingAddress($value)
    {
        $this->setShippingAddress($value);
        return $this;
    }

    /**
     * Get the value of the OrderTotal property.
     *
     * @return MarketplaceWebServiceOrders_Model_Money OrderTotal.
     */
    public function getOrderTotal()
    {
        return $this->_fields['OrderTotal']['FieldValue'];
    }

    /**
     * Set the value of the OrderTotal property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money orderTotal
     * @return $this
     */
    public function setOrderTotal($value)
    {
        $this->_fields['OrderTotal']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if OrderTotal is set.
     *
     * @return bool `true` if OrderTotal is set.
     */
    public function isSetOrderTotal()
    {
        return ($this->_fields['OrderTotal']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of OrderTotal, return this.
     *
     * @param MarketplaceWebServiceOrders_Model_Money $value orderTotal The new value to set.
     * @return $this
     */
    public function withOrderTotal($value)
    {
        $this->setOrderTotal($value);
        return $this;
    }

    /**
     * Get the value of the NumberOfItemsShipped property.
     *
     * @return int NumberOfItemsShipped.
     */
    public function getNumberOfItemsShipped()
    {
        return $this->_fields['NumberOfItemsShipped']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfItemsShipped property.
     *
     * @param int numberOfItemsShipped
     * @return $this
     */
    public function setNumberOfItemsShipped($value)
    {
        $this->_fields['NumberOfItemsShipped']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NumberOfItemsShipped is set.
     *
     * @return bool `true` if NumberOfItemsShipped is set.
     */
    public function isSetNumberOfItemsShipped()
    {
        return ($this->_fields['NumberOfItemsShipped']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of NumberOfItemsShipped, return this.
     *
     * @param int $value numberOfItemsShipped The new value to set.
     * @return $this
     */
    public function withNumberOfItemsShipped($value)
    {
        $this->setNumberOfItemsShipped($value);
        return $this;
    }

    /**
     * Get the value of the NumberOfItemsUnshipped property.
     *
     * @return int NumberOfItemsUnshipped.
     */
    public function getNumberOfItemsUnshipped()
    {
        return $this->_fields['NumberOfItemsUnshipped']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfItemsUnshipped property.
     *
     * @param int numberOfItemsUnshipped
     * @return $this
     */
    public function setNumberOfItemsUnshipped($value)
    {
        $this->_fields['NumberOfItemsUnshipped']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NumberOfItemsUnshipped is set.
     *
     * @return bool `true` if NumberOfItemsUnshipped is set.
     */
    public function isSetNumberOfItemsUnshipped()
    {
        return ($this->_fields['NumberOfItemsUnshipped']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of NumberOfItemsUnshipped, return this.
     *
     * @param int $value numberOfItemsUnshipped The new value to set.
     * @return $this
     */
    public function withNumberOfItemsUnshipped($value)
    {
        $this->setNumberOfItemsUnshipped($value);
        return $this;
    }

    /**
     * Get the value of the PaymentExecutionDetail property.
     *
     * @return MarketplaceWebServiceOrders_Model_PaymentExecutionDetailItem[]
     */
    public function getPaymentExecutionDetail()
    {
        $this->_fields['PaymentExecutionDetail']['FieldValue'] = $this->_fields['PaymentExecutionDetail']['FieldValue'] = [];
        return $this->_fields['PaymentExecutionDetail']['FieldValue'];
    }

    /**
     * Set the value of the PaymentExecutionDetail property.
     *
     * @param MarketplaceWebServiceOrders_Model_PaymentExecutionDetailItem[] $value
     * @return $this
     */
    public function setPaymentExecutionDetail($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = [$value];
        }
        $this->_fields['PaymentExecutionDetail']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear PaymentExecutionDetail.
     */
    public function unsetPaymentExecutionDetail()
    {
        $this->_fields['PaymentExecutionDetail']['FieldValue'] = array();
    }

    /**
     * Check to see if PaymentExecutionDetail is set.
     *
     * @return bool `true` if PaymentExecutionDetail is set.
     */
    public function isSetPaymentExecutionDetail()
    {
        return !empty($this->_fields['PaymentExecutionDetail']['FieldValue']);
    }

    /**
     * Add values for PaymentExecutionDetail, return this.
     *
     * @param MarketplaceWebServiceOrders_Model_PaymentExecutionDetailItem ...$paymentExecutionDetails
     * @return $this
     */
    public function withPaymentExecutionDetail(...$paymentExecutionDetails)
    {
        $this->_fields['PaymentExecutionDetail']['FieldValue'] = $paymentExecutionDetails;
        return $this;
    }

    /**
     * Get the value of the PaymentMethod property.
     *
     * @return string PaymentMethod.
     */
    public function getPaymentMethod()
    {
        return $this->_fields['PaymentMethod']['FieldValue'];
    }

    /**
     * Set the value of the PaymentMethod property.
     *
     * @param string paymentMethod
     * @return $this
     */
    public function setPaymentMethod($value)
    {
        $this->_fields['PaymentMethod']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PaymentMethod is set.
     *
     * @return bool `true` if PaymentMethod is set.
     */
    public function isSetPaymentMethod()
    {
        return ($this->_fields['PaymentMethod']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of PaymentMethod, return this.
     *
     * @param string $value paymentMethod The new value to set.
     * @return $this
     */
    public function withPaymentMethod($value)
    {
        $this->setPaymentMethod($value);
        return $this;
    }

    /**
     * Get the value of the PaymentMethodDetails property.
     *
     * @return mixed[]
     */
    public function getPaymentMethodDetails()
    {
        if ($this->_fields['PaymentMethodDetails']['FieldValue'] === null) {
            $this->_fields['PaymentMethodDetails']['FieldValue'] = [];
        }
        return $this->_fields['PaymentMethodDetails']['FieldValue'];
    }

    /**
     * Set the value of the PaymentMethodDetails property.
     *
     * @param mixed[] $value
     * @return $this
     */
    public function setPaymentMethodDetails($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['PaymentMethodDetails']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear PaymentMethodDetails.
     */
    public function unsetPaymentMethodDetails()
    {
        $this->_fields['PaymentMethodDetails']['FieldValue'] = array();
    }

    /**
     * Check to see if PaymentMethodDetails is set.
     *
     * @return bool `true` if PaymentMethodDetails is set.
     */
    public function isSetPaymentMethodDetails()
    {
        return !empty($this->_fields['PaymentMethodDetails']['FieldValue']);
    }

    /**
     * Add values for PaymentMethodDetails, return this.
     *
     * @param mixed ...$values paymentMethodDetails
     *             New values to add.
     *
     * @return $this
     */
    public function withPaymentMethodDetails(...$values)
    {
        foreach ($values as $PaymentMethodDetails) {
            $this->_fields['PaymentMethodDetails']['FieldValue'][] = $PaymentMethodDetails;
        }
        return $this;
    }

    /**
     * Get the value of the MarketplaceId property.
     *
     * @return string MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return $this
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MarketplaceId is set.
     *
     * @return bool `true` if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return ($this->_fields['MarketplaceId']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param string $value marketplaceId The new value to set.
     * @return $this
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);
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
     * @param string buyerEmail
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
        return ($this->_fields['BuyerEmail']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of BuyerEmail, return this.
     *
     * @param string $value buyerEmail The new value to set.
     * @return $this
     */
    public function withBuyerEmail($value)
    {
        $this->setBuyerEmail($value);
        return $this;
    }

    /**
     * Get the value of the BuyerName property.
     *
     * @return string BuyerName.
     */
    public function getBuyerName()
    {
        return $this->_fields['BuyerName']['FieldValue'];
    }

    /**
     * Set the value of the BuyerName property.
     *
     * @param string buyerName
     * @return $this
     */
    public function setBuyerName($value)
    {
        $this->_fields['BuyerName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if BuyerName is set.
     *
     * @return bool `true` if BuyerName is set.
     */
    public function isSetBuyerName()
    {
        return ($this->_fields['BuyerName']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of BuyerName, return this.
     *
     * @param string $value buyerName The new value to set.
     * @return $this
     */
    public function withBuyerName($value)
    {
        $this->setBuyerName($value);
        return $this;
    }

    /**
     * Get the value of the BuyerCounty property.
     *
     * @return string BuyerCounty.
     */
    public function getBuyerCounty()
    {
        return $this->_fields['BuyerCounty']['FieldValue'];
    }

    /**
     * Set the value of the BuyerCounty property.
     *
     * @param string buyerCounty
     * @return $this
     */
    public function setBuyerCounty($value)
    {
        $this->_fields['BuyerCounty']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if BuyerCounty is set.
     *
     * @return bool `true` if BuyerCounty is set.
     */
    public function isSetBuyerCounty()
    {
        return ($this->_fields['BuyerCounty']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of BuyerCounty, return this.
     *
     * @param string $value buyerCounty The new value to set.
     * @return $this
     */
    public function withBuyerCounty($value)
    {
        $this->setBuyerCounty($value);
        return $this;
    }

    /**
     * Get the value of the BuyerTaxInfo property.
     *
     * @return MarketplaceWebServiceOrders_Model_BuyerTaxInfo BuyerTaxInfo.
     */
    public function getBuyerTaxInfo()
    {
        return $this->_fields['BuyerTaxInfo']['FieldValue'];
    }

    /**
     * Set the value of the BuyerTaxInfo property.
     *
     * @param MarketplaceWebServiceOrders_Model_BuyerTaxInfo buyerTaxInfo
     * @return $this
     */
    public function setBuyerTaxInfo($value)
    {
        $this->_fields['BuyerTaxInfo']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if BuyerTaxInfo is set.
     *
     * @return bool `true` if BuyerTaxInfo is set.
     */
    public function isSetBuyerTaxInfo()
    {
        return ($this->_fields['BuyerTaxInfo']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of BuyerTaxInfo, return this.
     *
     * @param MarketplaceWebServiceOrders_Model_BuyerTaxInfo $value buyerTaxInfo The new value to set.
     * @return $this
     */
    public function withBuyerTaxInfo($value)
    {
        $this->setBuyerTaxInfo($value);
        return $this;
    }

    /**
     * Get the value of the ShipmentServiceLevelCategory property.
     *
     * @return string ShipmentServiceLevelCategory.
     */
    public function getShipmentServiceLevelCategory()
    {
        return $this->_fields['ShipmentServiceLevelCategory']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentServiceLevelCategory property.
     *
     * @param string shipmentServiceLevelCategory
     * @return $this
     */
    public function setShipmentServiceLevelCategory($value)
    {
        $this->_fields['ShipmentServiceLevelCategory']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipmentServiceLevelCategory is set.
     *
     * @return bool `true` if ShipmentServiceLevelCategory is set.
     */
    public function isSetShipmentServiceLevelCategory()
    {
        return ($this->_fields['ShipmentServiceLevelCategory']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of ShipmentServiceLevelCategory, return this.
     *
     * @param string $value shipmentServiceLevelCategory The new value to set.
     * @return $this
     */
    public function withShipmentServiceLevelCategory($value)
    {
        $this->setShipmentServiceLevelCategory($value);
        return $this;
    }

    /**
     * Check the value of ShippedByAmazonTFM.
     *
     * @return bool `true` if ShippedByAmazonTFM is set to true.
     */
    public function isShippedByAmazonTFM()
    {
        return ($this->_fields['ShippedByAmazonTFM']['FieldValue'] ?? null) !== null && $this->_fields['ShippedByAmazonTFM']['FieldValue'];
    }

    /**
     * Get the value of the ShippedByAmazonTFM property.
     *
     * @return bool ShippedByAmazonTFM.
     */
    public function getShippedByAmazonTFM()
    {
        return $this->_fields['ShippedByAmazonTFM']['FieldValue'];
    }

    /**
     * Set the value of the ShippedByAmazonTFM property.
     *
     * @param bool $value shippedByAmazonTFM
     * @return $this
     */
    public function setShippedByAmazonTFM($value)
    {
        $this->_fields['ShippedByAmazonTFM']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippedByAmazonTFM is set.
     *
     * @return bool `true` if ShippedByAmazonTFM is set.
     */
    public function isSetShippedByAmazonTFM()
    {
        return ($this->_fields['ShippedByAmazonTFM']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of ShippedByAmazonTFM, return this.
     *
     * @param bool $value shippedByAmazonTFM The new value to set.
     * @return $this
     */
    public function withShippedByAmazonTFM($value)
    {
        $this->setShippedByAmazonTFM($value);
        return $this;
    }

    /**
     * Get the value of the TFMShipmentStatus property.
     *
     * @return string TFMShipmentStatus.
     */
    public function getTFMShipmentStatus()
    {
        return $this->_fields['TFMShipmentStatus']['FieldValue'];
    }

    /**
     * Set the value of the TFMShipmentStatus property.
     *
     * @param string tfmShipmentStatus
     * @return $this
     */
    public function setTFMShipmentStatus($value)
    {
        $this->_fields['TFMShipmentStatus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TFMShipmentStatus is set.
     *
     * @return bool `true` if TFMShipmentStatus is set.
     */
    public function isSetTFMShipmentStatus()
    {
        return ($this->_fields['TFMShipmentStatus']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of TFMShipmentStatus, return this.
     *
     * @param string $value tfmShipmentStatus The new value to set.
     * @return $this
     */
    public function withTFMShipmentStatus($value)
    {
        $this->setTFMShipmentStatus($value);
        return $this;
    }

    /**
     * Get the value of the EasyShipShipmentStatus property.
     *
     * @return string EasyShipShipmentStatus.
     */
    public function getEasyShipShipmentStatus()
    {
        return $this->_fields['EasyShipShipmentStatus']['FieldValue'];
    }

    /**
     * Set the value of the EasyShipShipmentStatus property.
     *
     * @param string easyShipShipmentStatus
     * @return $this
     */
    public function setEasyShipShipmentStatus($value)
    {
        $this->_fields['EasyShipShipmentStatus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EasyShipShipmentStatus is set.
     *
     * @return bool `true` if EasyShipShipmentStatus is set.
     */
    public function isSetEasyShipShipmentStatus()
    {
        return ($this->_fields['EasyShipShipmentStatus']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of EasyShipShipmentStatus, return this.
     *
     * @param string $value easyShipShipmentStatus The new value to set.
     * @return $this
     */
    public function withEasyShipShipmentStatus($value)
    {
        $this->setEasyShipShipmentStatus($value);
        return $this;
    }

    /**
     * Get the value of the CbaDisplayableShippingLabel property.
     *
     * @return string CbaDisplayableShippingLabel.
     */
    public function getCbaDisplayableShippingLabel()
    {
        return $this->_fields['CbaDisplayableShippingLabel']['FieldValue'];
    }

    /**
     * Set the value of the CbaDisplayableShippingLabel property.
     *
     * @param string cbaDisplayableShippingLabel
     * @return $this
     */
    public function setCbaDisplayableShippingLabel($value)
    {
        $this->_fields['CbaDisplayableShippingLabel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CbaDisplayableShippingLabel is set.
     *
     * @return bool `true` if CbaDisplayableShippingLabel is set.
     */
    public function isSetCbaDisplayableShippingLabel()
    {
        return ($this->_fields['CbaDisplayableShippingLabel']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of CbaDisplayableShippingLabel, return this.
     *
     * @param string $value cbaDisplayableShippingLabel The new value to set.
     * @return $this
     */
    public function withCbaDisplayableShippingLabel($value)
    {
        $this->setCbaDisplayableShippingLabel($value);
        return $this;
    }

    /**
     * Get the value of the OrderType property.
     *
     * @return string OrderType.
     */
    public function getOrderType()
    {
        return $this->_fields['OrderType']['FieldValue'];
    }

    /**
     * Set the value of the OrderType property.
     *
     * @param string orderType
     * @return $this
     */
    public function setOrderType($value)
    {
        $this->_fields['OrderType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if OrderType is set.
     *
     * @return bool `true` if OrderType is set.
     */
    public function isSetOrderType()
    {
        return ($this->_fields['OrderType']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of OrderType, return this.
     *
     * @param string $value orderType The new value to set.
     * @return $this
     */
    public function withOrderType($value)
    {
        $this->setOrderType($value);
        return $this;
    }

    /**
     * Get the value of the EarliestShipDate property.
     *
     * @return string EarliestShipDate.
     */
    public function getEarliestShipDate()
    {
        return $this->_fields['EarliestShipDate']['FieldValue'];
    }

    /**
     * Set the value of the EarliestShipDate property.
     *
     * @param string earliestShipDate
     * @return $this
     */
    public function setEarliestShipDate($value)
    {
        $this->_fields['EarliestShipDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EarliestShipDate is set.
     *
     * @return bool `true` if EarliestShipDate is set.
     */
    public function isSetEarliestShipDate()
    {
        return ($this->_fields['EarliestShipDate']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of EarliestShipDate, return this.
     *
     * @param string $value earliestShipDate The new value to set.
     * @return $this
     */
    public function withEarliestShipDate($value)
    {
        $this->setEarliestShipDate($value);
        return $this;
    }

    /**
     * Get the value of the LatestShipDate property.
     *
     * @return string LatestShipDate.
     */
    public function getLatestShipDate()
    {
        return $this->_fields['LatestShipDate']['FieldValue'];
    }

    /**
     * Set the value of the LatestShipDate property.
     *
     * @param string latestShipDate
     * @return $this
     */
    public function setLatestShipDate($value)
    {
        $this->_fields['LatestShipDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LatestShipDate is set.
     *
     * @return bool `true` if LatestShipDate is set.
     */
    public function isSetLatestShipDate()
    {
        return ($this->_fields['LatestShipDate']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of LatestShipDate, return this.
     *
     * @param string $value latestShipDate The new value to set.
     * @return $this
     */
    public function withLatestShipDate($value)
    {
        $this->setLatestShipDate($value);
        return $this;
    }

    /**
     * Get the value of the EarliestDeliveryDate property.
     *
     * @return string EarliestDeliveryDate.
     */
    public function getEarliestDeliveryDate()
    {
        return $this->_fields['EarliestDeliveryDate']['FieldValue'];
    }

    /**
     * Set the value of the EarliestDeliveryDate property.
     *
     * @param string earliestDeliveryDate
     * @return $this
     */
    public function setEarliestDeliveryDate($value)
    {
        $this->_fields['EarliestDeliveryDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EarliestDeliveryDate is set.
     *
     * @return bool `true` if EarliestDeliveryDate is set.
     */
    public function isSetEarliestDeliveryDate()
    {
        return ($this->_fields['EarliestDeliveryDate']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of EarliestDeliveryDate, return this.
     *
     * @param string $value earliestDeliveryDate The new value to set.
     * @return $this
     */
    public function withEarliestDeliveryDate($value)
    {
        $this->setEarliestDeliveryDate($value);
        return $this;
    }

    /**
     * Get the value of the LatestDeliveryDate property.
     *
     * @return string LatestDeliveryDate.
     */
    public function getLatestDeliveryDate()
    {
        return $this->_fields['LatestDeliveryDate']['FieldValue'];
    }

    /**
     * Set the value of the LatestDeliveryDate property.
     *
     * @param string latestDeliveryDate
     * @return $this
     */
    public function setLatestDeliveryDate($value)
    {
        $this->_fields['LatestDeliveryDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LatestDeliveryDate is set.
     *
     * @return bool `true` if LatestDeliveryDate is set.
     */
    public function isSetLatestDeliveryDate()
    {
        return ($this->_fields['LatestDeliveryDate']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of LatestDeliveryDate, return this.
     *
     * @param string $value latestDeliveryDate The new value to set.
     * @return $this
     */
    public function withLatestDeliveryDate($value)
    {
        $this->setLatestDeliveryDate($value);
        return $this;
    }

    /**
     * Check the value of IsBusinessOrder.
     *
     * @return bool `true` if IsBusinessOrder is set to true.
     */
    public function isIsBusinessOrder()
    {
        return ($this->_fields['IsBusinessOrder']['FieldValue'] ?? null) !== null && $this->_fields['IsBusinessOrder']['FieldValue'];
    }

    /**
     * Get the value of the IsBusinessOrder property.
     *
     * @return bool IsBusinessOrder.
     */
    public function getIsBusinessOrder()
    {
        return $this->_fields['IsBusinessOrder']['FieldValue'];
    }

    /**
     * Set the value of the IsBusinessOrder property.
     *
     * @param bool isBusinessOrder
     * @return $this
     */
    public function setIsBusinessOrder($value)
    {
        $this->_fields['IsBusinessOrder']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsBusinessOrder is set.
     *
     * @return bool `true` if IsBusinessOrder is set.
     */
    public function isSetIsBusinessOrder()
    {
        return ($this->_fields['IsBusinessOrder']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of IsBusinessOrder, return this.
     *
     * @param bool $value isBusinessOrder The new value to set.
     * @return $this
     */
    public function withIsBusinessOrder($value)
    {
        $this->setIsBusinessOrder($value);
        return $this;
    }

    /**
     * Get the value of the PurchaseOrderNumber property.
     *
     * @return string PurchaseOrderNumber.
     */
    public function getPurchaseOrderNumber()
    {
        return $this->_fields['PurchaseOrderNumber']['FieldValue'];
    }

    /**
     * Set the value of the PurchaseOrderNumber property.
     *
     * @param string purchaseOrderNumber
     * @return $this
     */
    public function setPurchaseOrderNumber($value)
    {
        $this->_fields['PurchaseOrderNumber']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PurchaseOrderNumber is set.
     *
     * @return bool `true` if PurchaseOrderNumber is set.
     */
    public function isSetPurchaseOrderNumber()
    {
        return ($this->_fields['PurchaseOrderNumber']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of PurchaseOrderNumber, return this.
     *
     * @param string $value purchaseOrderNumber The new value to set.
     * @return $this
     */
    public function withPurchaseOrderNumber($value)
    {
        $this->setPurchaseOrderNumber($value);
        return $this;
    }

    /**
     * Check the value of IsPrime.
     *
     * @return bool `true` if IsPrime is set to true.
     */
    public function isIsPrime()
    {
        return ($this->_fields['IsPrime']['FieldValue'] ?? null) !== null && $this->_fields['IsPrime']['FieldValue'];
    }

    /**
     * Get the value of the IsPrime property.
     *
     * @return bool IsPrime.
     */
    public function getIsPrime()
    {
        return $this->_fields['IsPrime']['FieldValue'];
    }

    /**
     * Set the value of the IsPrime property.
     *
     * @param bool isPrime
     * @return $this
     */
    public function setIsPrime($value)
    {
        $this->_fields['IsPrime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsPrime is set.
     *
     * @return bool `true` if IsPrime is set.
     */
    public function isSetIsPrime()
    {
        return ($this->_fields['IsPrime']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of IsPrime, return this.
     *
     * @param bool $value isPrime The new value to set.
     * @return $this
     */
    public function withIsPrime($value)
    {
        $this->setIsPrime($value);
        return $this;
    }

    /**
     * Check the value of IsPremiumOrder.
     *
     * @return bool `true` if IsPremiumOrder is set to true.
     */
    public function isIsPremiumOrder()
    {
        return ($this->_fields['IsPremiumOrder']['FieldValue'] ?? null) !== null && $this->_fields['IsPremiumOrder']['FieldValue'];
    }

    /**
     * Get the value of the IsPremiumOrder property.
     *
     * @return bool IsPremiumOrder.
     */
    public function getIsPremiumOrder()
    {
        return $this->_fields['IsPremiumOrder']['FieldValue'];
    }

    /**
     * Set the value of the IsPremiumOrder property.
     *
     * @param bool isPremiumOrder
     * @return $this
     */
    public function setIsPremiumOrder($value)
    {
        $this->_fields['IsPremiumOrder']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsPremiumOrder is set.
     *
     * @return bool `true` if IsPremiumOrder is set.
     */
    public function isSetIsPremiumOrder()
    {
        return ($this->_fields['IsPremiumOrder']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of IsPremiumOrder, return this.
     *
     * @param bool $value isPremiumOrder The new value to set.
     * @return $this
     */
    public function withIsPremiumOrder($value)
    {
        $this->setIsPremiumOrder($value);
        return $this;
    }

    /**
     * Get the value of the ReplacedOrderId property.
     *
     * @return string ReplacedOrderId.
     */
    public function getReplacedOrderId()
    {
        return $this->_fields['ReplacedOrderId']['FieldValue'];
    }

    /**
     * Set the value of the ReplacedOrderId property.
     *
     * @param string replacedOrderId
     * @return $this
     */
    public function setReplacedOrderId($value)
    {
        $this->_fields['ReplacedOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ReplacedOrderId is set.
     *
     * @return bool `true` if ReplacedOrderId is set.
     */
    public function isSetReplacedOrderId()
    {
        return ($this->_fields['ReplacedOrderId']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of ReplacedOrderId, return this.
     *
     * @param string $value replacedOrderId The new value to set.
     * @return $this
     */
    public function withReplacedOrderId($value)
    {
        $this->setReplacedOrderId($value);
        return $this;
    }

    /**
     * Check the value of IsReplacementOrder.
     *
     * @return bool `true` if IsReplacementOrder is set to true.
     */
    public function isIsReplacementOrder()
    {
        return ($this->_fields['IsReplacementOrder']['FieldValue'] ?? null) !== null && $this->_fields['IsReplacementOrder']['FieldValue'];
    }

    /**
     * Get the value of the IsReplacementOrder property.
     *
     * @return bool IsReplacementOrder.
     */
    public function getIsReplacementOrder()
    {
        return $this->_fields['IsReplacementOrder']['FieldValue'];
    }

    /**
     * Set the value of the IsReplacementOrder property.
     *
     * @param bool isReplacementOrder
     * @return $this
     */
    public function setIsReplacementOrder($value)
    {
        $this->_fields['IsReplacementOrder']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsReplacementOrder is set.
     *
     * @return bool `true` if IsReplacementOrder is set.
     */
    public function isSetIsReplacementOrder()
    {
        return ($this->_fields['IsReplacementOrder']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of IsReplacementOrder, return this.
     *
     * @param bool $value isReplacementOrder The new value to set.
     * @return $this
     */
    public function withIsReplacementOrder($value)
    {
        $this->setIsReplacementOrder($value);
        return $this;
    }

    /**
     * Get the value of the PromiseResponseDueDate property.
     *
     * @return string PromiseResponseDueDate.
     */
    public function getPromiseResponseDueDate()
    {
        return $this->_fields['PromiseResponseDueDate']['FieldValue'];
    }

    /**
     * Set the value of the PromiseResponseDueDate property.
     *
     * @param string promiseResponseDueDate
     * @return $this
     */
    public function setPromiseResponseDueDate($value)
    {
        $this->_fields['PromiseResponseDueDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PromiseResponseDueDate is set.
     *
     * @return bool `true` if PromiseResponseDueDate is set.
     */
    public function isSetPromiseResponseDueDate()
    {
        return ($this->_fields['PromiseResponseDueDate']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of PromiseResponseDueDate, return this.
     *
     * @param string $value promiseResponseDueDate The new value to set.
     * @return $this
     */
    public function withPromiseResponseDueDate($value)
    {
        $this->setPromiseResponseDueDate($value);
        return $this;
    }

    /**
     * Check the value of IsEstimatedShipDateSet.
     *
     * @return bool `true` if IsEstimatedShipDateSet is set to true.
     */
    public function isIsEstimatedShipDateSet()
    {
        return ($this->_fields['IsEstimatedShipDateSet']['FieldValue'] ?? null) !== null && $this->_fields['IsEstimatedShipDateSet']['FieldValue'];
    }

    /**
     * Get the value of the IsEstimatedShipDateSet property.
     *
     * @return bool IsEstimatedShipDateSet.
     */
    public function getIsEstimatedShipDateSet()
    {
        return $this->_fields['IsEstimatedShipDateSet']['FieldValue'];
    }

    /**
     * Set the value of the IsEstimatedShipDateSet property.
     *
     * @param bool isEstimatedShipDateSet
     * @return $this
     */
    public function setIsEstimatedShipDateSet($value)
    {
        $this->_fields['IsEstimatedShipDateSet']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsEstimatedShipDateSet is set.
     *
     * @return bool `true` if IsEstimatedShipDateSet is set.
     */
    public function isSetIsEstimatedShipDateSet()
    {
        return ($this->_fields['IsEstimatedShipDateSet']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of IsEstimatedShipDateSet, return this.
     *
     * @param bool $value isEstimatedShipDateSet The new value to set.
     * @return $this
     */
    public function withIsEstimatedShipDateSet($value)
    {
        $this->setIsEstimatedShipDateSet($value);
        return $this;
    }
}
