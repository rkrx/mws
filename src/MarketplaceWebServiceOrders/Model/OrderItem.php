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
 * MarketplaceWebServiceOrders_Model_OrderItem
 * 
 * Properties:
 * <ul>
 * 
 * <li>ASIN: string</li>
 * <li>SellerSKU: string</li>
 * <li>OrderItemId: string</li>
 * <li>Title: string</li>
 * <li>QuantityOrdered: int</li>
 * <li>QuantityShipped: int</li>
 * <li>ProductInfo: MarketplaceWebServiceOrders_Model_ProductInfoDetail</li>
 * <li>PointsGranted: MarketplaceWebServiceOrders_Model_PointsGrantedDetail</li>
 * <li>ItemPrice: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>ShippingPrice: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>GiftWrapPrice: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>ItemTax: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>ShippingTax: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>GiftWrapTax: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>ShippingDiscount: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>ShippingDiscountTax: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>PromotionDiscount: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>PromotionDiscountTax: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>PromotionIds: array</li>
 * <li>CODFee: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>CODFeeDiscount: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>IsGift: bool</li>
 * <li>GiftMessageText: string</li>
 * <li>GiftWrapLevel: string</li>
 * <li>InvoiceData: MarketplaceWebServiceOrders_Model_InvoiceData</li>
 * <li>ConditionNote: string</li>
 * <li>ConditionId: string</li>
 * <li>ConditionSubtypeId: string</li>
 * <li>ScheduledDeliveryStartDate: string</li>
 * <li>ScheduledDeliveryEndDate: string</li>
 * <li>PriceDesignation: string</li>
 * <li>BuyerCustomizedInfo: MarketplaceWebServiceOrders_Model_BuyerCustomizedInfoDetail</li>
 * <li>TaxCollection: MarketplaceWebServiceOrders_Model_TaxCollection</li>
 * <li>SerialNumberRequired: bool</li>
 * <li>IsTransparency: bool</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_OrderItem extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ASIN' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'),
    'OrderItemId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Title' => array('FieldValue' => null, 'FieldType' => 'string'),
    'QuantityOrdered' => array('FieldValue' => null, 'FieldType' => 'int'),
    'QuantityShipped' => array('FieldValue' => null, 'FieldType' => 'int'),
    'ProductInfo' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_ProductInfoDetail'),
    'PointsGranted' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_PointsGrantedDetail'),
    'ItemPrice' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
    'ShippingPrice' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
    'GiftWrapPrice' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
    'ItemTax' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
    'ShippingTax' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
    'GiftWrapTax' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
    'ShippingDiscount' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
    'ShippingDiscountTax' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
    'PromotionDiscount' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
    'PromotionDiscountTax' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
    'PromotionIds' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'PromotionId'),
    'CODFee' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
    'CODFeeDiscount' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
    'IsGift' => array('FieldValue' => null, 'FieldType' => 'bool'),
    'GiftMessageText' => array('FieldValue' => null, 'FieldType' => 'string'),
    'GiftWrapLevel' => array('FieldValue' => null, 'FieldType' => 'string'),
    'InvoiceData' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_InvoiceData'),
    'ConditionNote' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ConditionId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ConditionSubtypeId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ScheduledDeliveryStartDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ScheduledDeliveryEndDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'PriceDesignation' => array('FieldValue' => null, 'FieldType' => 'string'),
    'BuyerCustomizedInfo' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_BuyerCustomizedInfoDetail'),
    'TaxCollection' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_TaxCollection'),
    'SerialNumberRequired' => array('FieldValue' => null, 'FieldType' => 'bool'),
    'IsTransparency' => array('FieldValue' => null, 'FieldType' => 'bool'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ASIN property.
     *
     * @return string ASIN.
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @return $this
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ASIN is set.
     *
     * @return bool `true` if ASIN is set.
     */
    public function isSetASIN()
    {
        return $this->_fields['ASIN']['FieldValue'] !== null;
    }

    /**
     * Set the value of ASIN, return this.
     *
     * @param asin
     *             The new value to set.
     *
     * @return $this
     */
    public function withASIN($value)
    {
        $this->setASIN($value);
        return $this;
    }

    /**
     * Get the value of the SellerSKU property.
     *
     * @return string SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return $this
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerSKU is set.
     *
     * @return bool `true` if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
        return ($this->_fields['SellerSKU']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of SellerSKU, return this.
     *
     * @param sellerSKU
     *             The new value to set.
     *
     * @return $this
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);
        return $this;
    }

    /**
     * Get the value of the OrderItemId property.
     *
     * @return string OrderItemId.
     */
    public function getOrderItemId()
    {
        return $this->_fields['OrderItemId']['FieldValue'];
    }

    /**
     * Set the value of the OrderItemId property.
     *
     * @param string orderItemId
     * @return $this
     */
    public function setOrderItemId($value)
    {
        $this->_fields['OrderItemId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if OrderItemId is set.
     *
     * @return bool `true` if OrderItemId is set.
     */
    public function isSetOrderItemId()
    {
        return ($this->_fields['OrderItemId']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of OrderItemId, return this.
     *
     * @param orderItemId
     *             The new value to set.
     *
     * @return $this
     */
    public function withOrderItemId($value)
    {
        $this->setOrderItemId($value);
        return $this;
    }

    /**
     * Get the value of the Title property.
     *
     * @return string Title.
     */
    public function getTitle()
    {
        return $this->_fields['Title']['FieldValue'];
    }

    /**
     * Set the value of the Title property.
     *
     * @param string title
     * @return $this
     */
    public function setTitle($value)
    {
        $this->_fields['Title']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Title is set.
     *
     * @return bool `true` if Title is set.
     */
    public function isSetTitle()
    {
        return ($this->_fields['Title']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of Title, return this.
     *
     * @param title
     *             The new value to set.
     *
     * @return $this
     */
    public function withTitle($value)
    {
        $this->setTitle($value);
        return $this;
    }

    /**
     * Get the value of the QuantityOrdered property.
     *
     * @return int QuantityOrdered.
     */
    public function getQuantityOrdered()
    {
        return $this->_fields['QuantityOrdered']['FieldValue'];
    }

    /**
     * Set the value of the QuantityOrdered property.
     *
     * @param int quantityOrdered
     * @return $this
     */
    public function setQuantityOrdered($value)
    {
        $this->_fields['QuantityOrdered']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if QuantityOrdered is set.
     *
     * @return bool `true` if QuantityOrdered is set.
     */
    public function isSetQuantityOrdered()
    {
        return ($this->_fields['QuantityOrdered']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of QuantityOrdered, return this.
     *
     * @param quantityOrdered
     *             The new value to set.
     *
     * @return $this
     */
    public function withQuantityOrdered($value)
    {
        $this->setQuantityOrdered($value);
        return $this;
    }

    /**
     * Get the value of the QuantityShipped property.
     *
     * @return int QuantityShipped.
     */
    public function getQuantityShipped()
    {
        return $this->_fields['QuantityShipped']['FieldValue'];
    }

    /**
     * Set the value of the QuantityShipped property.
     *
     * @param int quantityShipped
     * @return $this
     */
    public function setQuantityShipped($value)
    {
        $this->_fields['QuantityShipped']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if QuantityShipped is set.
     *
     * @return bool `true` if QuantityShipped is set.
     */
    public function isSetQuantityShipped()
    {
        return ($this->_fields['QuantityShipped']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of QuantityShipped, return this.
     *
     * @param quantityShipped
     *             The new value to set.
     *
     * @return $this
     */
    public function withQuantityShipped($value)
    {
        $this->setQuantityShipped($value);
        return $this;
    }

    /**
     * Get the value of the ProductInfo property.
     *
     * @return ProductInfoDetail ProductInfo.
     */
    public function getProductInfo()
    {
        return $this->_fields['ProductInfo']['FieldValue'];
    }

    /**
     * Set the value of the ProductInfo property.
     *
     * @param MarketplaceWebServiceOrders_Model_ProductInfoDetail productInfo
     * @return $this
     */
    public function setProductInfo($value)
    {
        $this->_fields['ProductInfo']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ProductInfo is set.
     *
     * @return bool `true` if ProductInfo is set.
     */
    public function isSetProductInfo()
    {
        return ($this->_fields['ProductInfo']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of ProductInfo, return this.
     *
     * @param productInfo
     *             The new value to set.
     *
     * @return $this
     */
    public function withProductInfo($value)
    {
        $this->setProductInfo($value);
        return $this;
    }

    /**
     * Get the value of the PointsGranted property.
     *
     * @return PointsGrantedDetail PointsGranted.
     */
    public function getPointsGranted()
    {
        return $this->_fields['PointsGranted']['FieldValue'];
    }

    /**
     * Set the value of the PointsGranted property.
     *
     * @param MarketplaceWebServiceOrders_Model_PointsGrantedDetail pointsGranted
     * @return $this
     */
    public function setPointsGranted($value)
    {
        $this->_fields['PointsGranted']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PointsGranted is set.
     *
     * @return bool `true` if PointsGranted is set.
     */
    public function isSetPointsGranted()
    {
        return ($this->_fields['PointsGranted']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of PointsGranted, return this.
     *
     * @param pointsGranted
     *             The new value to set.
     *
     * @return $this
     */
    public function withPointsGranted($value)
    {
        $this->setPointsGranted($value);
        return $this;
    }

    /**
     * Get the value of the ItemPrice property.
     *
     * @return Money ItemPrice.
     */
    public function getItemPrice()
    {
        return $this->_fields['ItemPrice']['FieldValue'];
    }

    /**
     * Set the value of the ItemPrice property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money itemPrice
     * @return $this
     */
    public function setItemPrice($value)
    {
        $this->_fields['ItemPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ItemPrice is set.
     *
     * @return bool `true` if ItemPrice is set.
     */
    public function isSetItemPrice()
    {
        return ($this->_fields['ItemPrice']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of ItemPrice, return this.
     *
     * @param itemPrice
     *             The new value to set.
     *
     * @return $this
     */
    public function withItemPrice($value)
    {
        $this->setItemPrice($value);
        return $this;
    }

    /**
     * Get the value of the ShippingPrice property.
     *
     * @return Money ShippingPrice.
     */
    public function getShippingPrice()
    {
        return $this->_fields['ShippingPrice']['FieldValue'];
    }

    /**
     * Set the value of the ShippingPrice property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money shippingPrice
     * @return $this
     */
    public function setShippingPrice($value)
    {
        $this->_fields['ShippingPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingPrice is set.
     *
     * @return bool `true` if ShippingPrice is set.
     */
    public function isSetShippingPrice()
    {
        return ($this->_fields['ShippingPrice']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of ShippingPrice, return this.
     *
     * @param shippingPrice
     *             The new value to set.
     *
     * @return $this
     */
    public function withShippingPrice($value)
    {
        $this->setShippingPrice($value);
        return $this;
    }

    /**
     * Get the value of the GiftWrapPrice property.
     *
     * @return Money GiftWrapPrice.
     */
    public function getGiftWrapPrice()
    {
        return $this->_fields['GiftWrapPrice']['FieldValue'];
    }

    /**
     * Set the value of the GiftWrapPrice property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money giftWrapPrice
     * @return $this
     */
    public function setGiftWrapPrice($value)
    {
        $this->_fields['GiftWrapPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GiftWrapPrice is set.
     *
     * @return bool `true` if GiftWrapPrice is set.
     */
    public function isSetGiftWrapPrice()
    {
        return ($this->_fields['GiftWrapPrice']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of GiftWrapPrice, return this.
     *
     * @param giftWrapPrice
     *             The new value to set.
     *
     * @return $this
     */
    public function withGiftWrapPrice($value)
    {
        $this->setGiftWrapPrice($value);
        return $this;
    }

    /**
     * Get the value of the ItemTax property.
     *
     * @return Money ItemTax.
     */
    public function getItemTax()
    {
        return $this->_fields['ItemTax']['FieldValue'];
    }

    /**
     * Set the value of the ItemTax property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money itemTax
     * @return $this
     */
    public function setItemTax($value)
    {
        $this->_fields['ItemTax']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ItemTax is set.
     *
     * @return bool `true` if ItemTax is set.
     */
    public function isSetItemTax()
    {
        return ($this->_fields['ItemTax']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of ItemTax, return this.
     *
     * @param itemTax
     *             The new value to set.
     *
     * @return $this
     */
    public function withItemTax($value)
    {
        $this->setItemTax($value);
        return $this;
    }

    /**
     * Get the value of the ShippingTax property.
     *
     * @return Money ShippingTax.
     */
    public function getShippingTax()
    {
        return $this->_fields['ShippingTax']['FieldValue'];
    }

    /**
     * Set the value of the ShippingTax property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money shippingTax
     * @return $this
     */
    public function setShippingTax($value)
    {
        $this->_fields['ShippingTax']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingTax is set.
     *
     * @return bool `true` if ShippingTax is set.
     */
    public function isSetShippingTax()
    {
        return ($this->_fields['ShippingTax']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of ShippingTax, return this.
     *
     * @param shippingTax
     *             The new value to set.
     *
     * @return $this
     */
    public function withShippingTax($value)
    {
        $this->setShippingTax($value);
        return $this;
    }

    /**
     * Get the value of the GiftWrapTax property.
     *
     * @return Money GiftWrapTax.
     */
    public function getGiftWrapTax()
    {
        return $this->_fields['GiftWrapTax']['FieldValue'];
    }

    /**
     * Set the value of the GiftWrapTax property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money giftWrapTax
     * @return $this
     */
    public function setGiftWrapTax($value)
    {
        $this->_fields['GiftWrapTax']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GiftWrapTax is set.
     *
     * @return bool `true` if GiftWrapTax is set.
     */
    public function isSetGiftWrapTax()
    {
        return ($this->_fields['GiftWrapTax']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of GiftWrapTax, return this.
     *
     * @param giftWrapTax
     *             The new value to set.
     *
     * @return $this
     */
    public function withGiftWrapTax($value)
    {
        $this->setGiftWrapTax($value);
        return $this;
    }

    /**
     * Get the value of the ShippingDiscount property.
     *
     * @return Money ShippingDiscount.
     */
    public function getShippingDiscount()
    {
        return $this->_fields['ShippingDiscount']['FieldValue'];
    }

    /**
     * Set the value of the ShippingDiscount property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money shippingDiscount
     * @return $this
     */
    public function setShippingDiscount($value)
    {
        $this->_fields['ShippingDiscount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingDiscount is set.
     *
     * @return bool `true` if ShippingDiscount is set.
     */
    public function isSetShippingDiscount()
    {
        return ($this->_fields['ShippingDiscount']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of ShippingDiscount, return this.
     *
     * @param shippingDiscount
     *             The new value to set.
     *
     * @return $this
     */
    public function withShippingDiscount($value)
    {
        $this->setShippingDiscount($value);
        return $this;
    }

    /**
     * Get the value of the ShippingDiscountTax property.
     *
     * @return Money ShippingDiscountTax.
     */
    public function getShippingDiscountTax()
    {
        return $this->_fields['ShippingDiscountTax']['FieldValue'];
    }

    /**
     * Set the value of the ShippingDiscountTax property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money shippingDiscountTax
     * @return $this
     */
    public function setShippingDiscountTax($value)
    {
        $this->_fields['ShippingDiscountTax']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingDiscountTax is set.
     *
     * @return bool `true` if ShippingDiscountTax is set.
     */
    public function isSetShippingDiscountTax()
    {
        return ($this->_fields['ShippingDiscountTax']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of ShippingDiscountTax, return this.
     *
     * @param shippingDiscountTax
     *             The new value to set.
     *
     * @return $this
     */
    public function withShippingDiscountTax($value)
    {
        $this->setShippingDiscountTax($value);
        return $this;
    }

    /**
     * Get the value of the PromotionDiscount property.
     *
     * @return Money PromotionDiscount.
     */
    public function getPromotionDiscount()
    {
        return $this->_fields['PromotionDiscount']['FieldValue'];
    }

    /**
     * Set the value of the PromotionDiscount property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money promotionDiscount
     * @return $this
     */
    public function setPromotionDiscount($value)
    {
        $this->_fields['PromotionDiscount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PromotionDiscount is set.
     *
     * @return bool `true` if PromotionDiscount is set.
     */
    public function isSetPromotionDiscount()
    {
        return ($this->_fields['PromotionDiscount']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of PromotionDiscount, return this.
     *
     * @param promotionDiscount
     *             The new value to set.
     *
     * @return $this
     */
    public function withPromotionDiscount($value)
    {
        $this->setPromotionDiscount($value);
        return $this;
    }

    /**
     * Get the value of the PromotionDiscountTax property.
     *
     * @return Money PromotionDiscountTax.
     */
    public function getPromotionDiscountTax()
    {
        return $this->_fields['PromotionDiscountTax']['FieldValue'];
    }

    /**
     * Set the value of the PromotionDiscountTax property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money promotionDiscountTax
     * @return $this
     */
    public function setPromotionDiscountTax($value)
    {
        $this->_fields['PromotionDiscountTax']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PromotionDiscountTax is set.
     *
     * @return bool `true` if PromotionDiscountTax is set.
     */
    public function isSetPromotionDiscountTax()
    {
        return ($this->_fields['PromotionDiscountTax']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of PromotionDiscountTax, return this.
     *
     * @param promotionDiscountTax
     *             The new value to set.
     *
     * @return $this
     */
    public function withPromotionDiscountTax($value)
    {
        $this->setPromotionDiscountTax($value);
        return $this;
    }

    /**
     * Get the value of the PromotionIds property.
     *
     * @return string[] PromotionIds.
     */
    public function getPromotionIds()
    {
        if ($this->_fields['PromotionIds']['FieldValue'] == null)
        {
            $this->_fields['PromotionIds']['FieldValue'] = array();
        }
        return $this->_fields['PromotionIds']['FieldValue'];
    }

    /**
     * Set the value of the PromotionIds property.
     *
     * @param array promotionIds
     * @return $this
     */
    public function setPromotionIds($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['PromotionIds']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear PromotionIds.
     */
    public function unsetPromotionIds()
    {
        $this->_fields['PromotionIds']['FieldValue'] = array();
    }

    /**
     * Check to see if PromotionIds is set.
     *
     * @return bool `true` if PromotionIds is set.
     */
    public function isSetPromotionIds()
    {
                return !empty($this->_fields['PromotionIds']['FieldValue']);
            }

    /**
     * Add values for PromotionIds, return this.
     *
     * @param promotionIds
     *             New values to add.
     *
     * @return $this
     */
    public function withPromotionIds()
    {
        foreach (func_get_args() as $PromotionIds)
        {
            $this->_fields['PromotionIds']['FieldValue'][] = $PromotionIds;
        }
        return $this;
    }

    /**
     * Get the value of the CODFee property.
     *
     * @return Money CODFee.
     */
    public function getCODFee()
    {
        return $this->_fields['CODFee']['FieldValue'];
    }

    /**
     * Set the value of the CODFee property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money codFee
     * @return $this
     */
    public function setCODFee($value)
    {
        $this->_fields['CODFee']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CODFee is set.
     *
     * @return bool `true` if CODFee is set.
     */
    public function isSetCODFee()
    {
        return ($this->_fields['CODFee']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of CODFee, return this.
     *
     * @param codFee
     *             The new value to set.
     *
     * @return $this
     */
    public function withCODFee($value)
    {
        $this->setCODFee($value);
        return $this;
    }

    /**
     * Get the value of the CODFeeDiscount property.
     *
     * @return Money CODFeeDiscount.
     */
    public function getCODFeeDiscount()
    {
        return $this->_fields['CODFeeDiscount']['FieldValue'];
    }

    /**
     * Set the value of the CODFeeDiscount property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money codFeeDiscount
     * @return $this
     */
    public function setCODFeeDiscount($value)
    {
        $this->_fields['CODFeeDiscount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CODFeeDiscount is set.
     *
     * @return bool `true` if CODFeeDiscount is set.
     */
    public function isSetCODFeeDiscount()
    {
        return ($this->_fields['CODFeeDiscount']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of CODFeeDiscount, return this.
     *
     * @param codFeeDiscount
     *             The new value to set.
     *
     * @return $this
     */
    public function withCODFeeDiscount($value)
    {
        $this->setCODFeeDiscount($value);
        return $this;
    }

    /**
     * Check the value of IsGift.
     *
     * @return bool `true` if IsGift is set to true.
     */
    public function isIsGift()
    {
        return ($this->_fields['IsGift']['FieldValue'] ?? null) !== null && $this->_fields['IsGift']['FieldValue'];
    }

    /**
     * Get the value of the IsGift property.
     *
     * @return Boolean IsGift.
     */
    public function getIsGift()
    {
        return $this->_fields['IsGift']['FieldValue'];
    }

    /**
     * Set the value of the IsGift property.
     *
     * @param bool isGift
     * @return $this
     */
    public function setIsGift($value)
    {
        $this->_fields['IsGift']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsGift is set.
     *
     * @return bool `true` if IsGift is set.
     */
    public function isSetIsGift()
    {
        return ($this->_fields['IsGift']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of IsGift, return this.
     *
     * @param isGift
     *             The new value to set.
     *
     * @return $this
     */
    public function withIsGift($value)
    {
        $this->setIsGift($value);
        return $this;
    }

    /**
     * Get the value of the GiftMessageText property.
     *
     * @return string GiftMessageText.
     */
    public function getGiftMessageText()
    {
        return $this->_fields['GiftMessageText']['FieldValue'];
    }

    /**
     * Set the value of the GiftMessageText property.
     *
     * @param string giftMessageText
     * @return $this
     */
    public function setGiftMessageText($value)
    {
        $this->_fields['GiftMessageText']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GiftMessageText is set.
     *
     * @return bool `true` if GiftMessageText is set.
     */
    public function isSetGiftMessageText()
    {
        return ($this->_fields['GiftMessageText']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of GiftMessageText, return this.
     *
     * @param giftMessageText
     *             The new value to set.
     *
     * @return $this
     */
    public function withGiftMessageText($value)
    {
        $this->setGiftMessageText($value);
        return $this;
    }

    /**
     * Get the value of the GiftWrapLevel property.
     *
     * @return string GiftWrapLevel.
     */
    public function getGiftWrapLevel()
    {
        return $this->_fields['GiftWrapLevel']['FieldValue'];
    }

    /**
     * Set the value of the GiftWrapLevel property.
     *
     * @param string giftWrapLevel
     * @return $this
     */
    public function setGiftWrapLevel($value)
    {
        $this->_fields['GiftWrapLevel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GiftWrapLevel is set.
     *
     * @return bool `true` if GiftWrapLevel is set.
     */
    public function isSetGiftWrapLevel()
    {
        return ($this->_fields['GiftWrapLevel']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of GiftWrapLevel, return this.
     *
     * @param giftWrapLevel
     *             The new value to set.
     *
     * @return $this
     */
    public function withGiftWrapLevel($value)
    {
        $this->setGiftWrapLevel($value);
        return $this;
    }

    /**
     * Get the value of the InvoiceData property.
     *
     * @return InvoiceData InvoiceData.
     */
    public function getInvoiceData()
    {
        return $this->_fields['InvoiceData']['FieldValue'];
    }

    /**
     * Set the value of the InvoiceData property.
     *
     * @param MarketplaceWebServiceOrders_Model_InvoiceData invoiceData
     * @return $this
     */
    public function setInvoiceData($value)
    {
        $this->_fields['InvoiceData']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InvoiceData is set.
     *
     * @return bool `true` if InvoiceData is set.
     */
    public function isSetInvoiceData()
    {
        return ($this->_fields['InvoiceData']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of InvoiceData, return this.
     *
     * @param invoiceData
     *             The new value to set.
     *
     * @return $this
     */
    public function withInvoiceData($value)
    {
        $this->setInvoiceData($value);
        return $this;
    }

    /**
     * Get the value of the ConditionNote property.
     *
     * @return string ConditionNote.
     */
    public function getConditionNote()
    {
        return $this->_fields['ConditionNote']['FieldValue'];
    }

    /**
     * Set the value of the ConditionNote property.
     *
     * @param string conditionNote
     * @return $this
     */
    public function setConditionNote($value)
    {
        $this->_fields['ConditionNote']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ConditionNote is set.
     *
     * @return bool `true` if ConditionNote is set.
     */
    public function isSetConditionNote()
    {
        return ($this->_fields['ConditionNote']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of ConditionNote, return this.
     *
     * @param conditionNote
     *             The new value to set.
     *
     * @return $this
     */
    public function withConditionNote($value)
    {
        $this->setConditionNote($value);
        return $this;
    }

    /**
     * Get the value of the ConditionId property.
     *
     * @return string ConditionId.
     */
    public function getConditionId()
    {
        return $this->_fields['ConditionId']['FieldValue'];
    }

    /**
     * Set the value of the ConditionId property.
     *
     * @param string conditionId
     * @return $this
     */
    public function setConditionId($value)
    {
        $this->_fields['ConditionId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ConditionId is set.
     *
     * @return bool `true` if ConditionId is set.
     */
    public function isSetConditionId()
    {
        return ($this->_fields['ConditionId']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of ConditionId, return this.
     *
     * @param conditionId
     *             The new value to set.
     *
     * @return $this
     */
    public function withConditionId($value)
    {
        $this->setConditionId($value);
        return $this;
    }

    /**
     * Get the value of the ConditionSubtypeId property.
     *
     * @return string ConditionSubtypeId.
     */
    public function getConditionSubtypeId()
    {
        return $this->_fields['ConditionSubtypeId']['FieldValue'];
    }

    /**
     * Set the value of the ConditionSubtypeId property.
     *
     * @param string conditionSubtypeId
     * @return $this
     */
    public function setConditionSubtypeId($value)
    {
        $this->_fields['ConditionSubtypeId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ConditionSubtypeId is set.
     *
     * @return bool `true` if ConditionSubtypeId is set.
     */
    public function isSetConditionSubtypeId()
    {
        return ($this->_fields['ConditionSubtypeId']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of ConditionSubtypeId, return this.
     *
     * @param conditionSubtypeId
     *             The new value to set.
     *
     * @return $this
     */
    public function withConditionSubtypeId($value)
    {
        $this->setConditionSubtypeId($value);
        return $this;
    }

    /**
     * Get the value of the ScheduledDeliveryStartDate property.
     *
     * @return string ScheduledDeliveryStartDate.
     */
    public function getScheduledDeliveryStartDate()
    {
        return $this->_fields['ScheduledDeliveryStartDate']['FieldValue'];
    }

    /**
     * Set the value of the ScheduledDeliveryStartDate property.
     *
     * @param string scheduledDeliveryStartDate
     * @return $this
     */
    public function setScheduledDeliveryStartDate($value)
    {
        $this->_fields['ScheduledDeliveryStartDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ScheduledDeliveryStartDate is set.
     *
     * @return bool `true` if ScheduledDeliveryStartDate is set.
     */
    public function isSetScheduledDeliveryStartDate()
    {
        return ($this->_fields['ScheduledDeliveryStartDate']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of ScheduledDeliveryStartDate, return this.
     *
     * @param scheduledDeliveryStartDate
     *             The new value to set.
     *
     * @return $this
     */
    public function withScheduledDeliveryStartDate($value)
    {
        $this->setScheduledDeliveryStartDate($value);
        return $this;
    }

    /**
     * Get the value of the ScheduledDeliveryEndDate property.
     *
     * @return string ScheduledDeliveryEndDate.
     */
    public function getScheduledDeliveryEndDate()
    {
        return $this->_fields['ScheduledDeliveryEndDate']['FieldValue'];
    }

    /**
     * Set the value of the ScheduledDeliveryEndDate property.
     *
     * @param string scheduledDeliveryEndDate
     * @return $this
     */
    public function setScheduledDeliveryEndDate($value)
    {
        $this->_fields['ScheduledDeliveryEndDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ScheduledDeliveryEndDate is set.
     *
     * @return bool `true` if ScheduledDeliveryEndDate is set.
     */
    public function isSetScheduledDeliveryEndDate()
    {
        return ($this->_fields['ScheduledDeliveryEndDate']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of ScheduledDeliveryEndDate, return this.
     *
     * @param scheduledDeliveryEndDate
     *             The new value to set.
     *
     * @return $this
     */
    public function withScheduledDeliveryEndDate($value)
    {
        $this->setScheduledDeliveryEndDate($value);
        return $this;
    }

    /**
     * Get the value of the PriceDesignation property.
     *
     * @return string PriceDesignation.
     */
    public function getPriceDesignation()
    {
        return $this->_fields['PriceDesignation']['FieldValue'];
    }

    /**
     * Set the value of the PriceDesignation property.
     *
     * @param string priceDesignation
     * @return $this
     */
    public function setPriceDesignation($value)
    {
        $this->_fields['PriceDesignation']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PriceDesignation is set.
     *
     * @return bool `true` if PriceDesignation is set.
     */
    public function isSetPriceDesignation()
    {
        return ($this->_fields['PriceDesignation']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of PriceDesignation, return this.
     *
     * @param priceDesignation
     *             The new value to set.
     *
     * @return $this
     */
    public function withPriceDesignation($value)
    {
        $this->setPriceDesignation($value);
        return $this;
    }

    /**
     * Get the value of the BuyerCustomizedInfo property.
     *
     * @return BuyerCustomizedInfoDetail BuyerCustomizedInfo.
     */
    public function getBuyerCustomizedInfo()
    {
        return $this->_fields['BuyerCustomizedInfo']['FieldValue'];
    }

    /**
     * Set the value of the BuyerCustomizedInfo property.
     *
     * @param MarketplaceWebServiceOrders_Model_BuyerCustomizedInfoDetail buyerCustomizedInfo
     * @return $this
     */
    public function setBuyerCustomizedInfo($value)
    {
        $this->_fields['BuyerCustomizedInfo']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if BuyerCustomizedInfo is set.
     *
     * @return bool `true` if BuyerCustomizedInfo is set.
     */
    public function isSetBuyerCustomizedInfo()
    {
        return ($this->_fields['BuyerCustomizedInfo']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of BuyerCustomizedInfo, return this.
     *
     * @param buyerCustomizedInfo
     *             The new value to set.
     *
     * @return $this
     */
    public function withBuyerCustomizedInfo($value)
    {
        $this->setBuyerCustomizedInfo($value);
        return $this;
    }

    /**
     * Get the value of the TaxCollection property.
     *
     * @return TaxCollection TaxCollection.
     */
    public function getTaxCollection()
    {
        return $this->_fields['TaxCollection']['FieldValue'];
    }

    /**
     * Set the value of the TaxCollection property.
     *
     * @param MarketplaceWebServiceOrders_Model_TaxCollection taxCollection
     * @return $this
     */
    public function setTaxCollection($value)
    {
        $this->_fields['TaxCollection']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TaxCollection is set.
     *
     * @return bool `true` if TaxCollection is set.
     */
    public function isSetTaxCollection()
    {
        return ($this->_fields['TaxCollection']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of TaxCollection, return this.
     *
     * @param taxCollection
     *             The new value to set.
     *
     * @return $this
     */
    public function withTaxCollection($value)
    {
        $this->setTaxCollection($value);
        return $this;
    }

    /**
     * Check the value of SerialNumberRequired.
     *
     * @return bool `true` if SerialNumberRequired is set to true.
     */
    public function isSerialNumberRequired()
    {
        return ($this->_fields['SerialNumberRequired']['FieldValue'] ?? null) !== null && $this->_fields['SerialNumberRequired']['FieldValue'];
    }

    /**
     * Get the value of the SerialNumberRequired property.
     *
     * @return Boolean SerialNumberRequired.
     */
    public function getSerialNumberRequired()
    {
        return $this->_fields['SerialNumberRequired']['FieldValue'];
    }

    /**
     * Set the value of the SerialNumberRequired property.
     *
     * @param bool serialNumberRequired
     * @return $this
     */
    public function setSerialNumberRequired($value)
    {
        $this->_fields['SerialNumberRequired']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SerialNumberRequired is set.
     *
     * @return bool `true` if SerialNumberRequired is set.
     */
    public function isSetSerialNumberRequired()
    {
        return ($this->_fields['SerialNumberRequired']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of SerialNumberRequired, return this.
     *
     * @param serialNumberRequired
     *             The new value to set.
     *
     * @return $this
     */
    public function withSerialNumberRequired($value)
    {
        $this->setSerialNumberRequired($value);
        return $this;
    }

    /**
     * Check the value of IsTransparency.
     *
     * @return bool `true` if IsTransparency is set to true.
     */
    public function isIsTransparency()
    {
        return ($this->_fields['IsTransparency']['FieldValue'] ?? null) !== null && $this->_fields['IsTransparency']['FieldValue'];
    }

    /**
     * Get the value of the IsTransparency property.
     *
     * @return Boolean IsTransparency.
     */
    public function getIsTransparency()
    {
        return $this->_fields['IsTransparency']['FieldValue'];
    }

    /**
     * Set the value of the IsTransparency property.
     *
     * @param bool isTransparency
     * @return $this
     */
    public function setIsTransparency($value)
    {
        $this->_fields['IsTransparency']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsTransparency is set.
     *
     * @return bool `true` if IsTransparency is set.
     */
    public function isSetIsTransparency()
    {
        return ($this->_fields['IsTransparency']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of IsTransparency, return this.
     *
     * @param isTransparency
     *             The new value to set.
     *
     * @return $this
     */
    public function withIsTransparency($value)
    {
        $this->setIsTransparency($value);
        return $this;
    }

}
