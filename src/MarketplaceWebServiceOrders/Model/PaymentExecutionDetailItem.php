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
 * MarketplaceWebServiceOrders_Model_PaymentExecutionDetailItem
 * 
 * Properties:
 * <ul>
 * 
 * <li>Payment: MarketplaceWebServiceOrders_Model_Money</li>
 * <li>PaymentMethod: string</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_PaymentExecutionDetailItem extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Payment' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceOrders_Model_Money'),
    'PaymentMethod' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Payment property.
     *
     * @return MarketplaceWebServiceOrders_Model_Money Payment.
     */
    public function getPayment()
    {
        return $this->_fields['Payment']['FieldValue'];
    }

    /**
     * Set the value of the Payment property.
     *
     * @param MarketplaceWebServiceOrders_Model_Money payment
     * @return $this
     */
    public function setPayment($value)
    {
        $this->_fields['Payment']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Payment is set.
     *
     * @return bool `true` if Payment is set.
     */
    public function isSetPayment()
    {
        return ($this->_fields['Payment']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of Payment, return this.
     *
     * @param MarketplaceWebServiceOrders_Model_Money $value payment The new value to set.
     * @return $this
     */
    public function withPayment($value)
    {
        $this->setPayment($value);
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
}
