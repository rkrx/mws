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
 * MarketplaceWebServiceOrders_Model_InvoiceData
 * 
 * Properties:
 * <ul>
 * 
 * <li>InvoiceRequirement: string</li>
 * <li>BuyerSelectedInvoiceCategory: string</li>
 * <li>InvoiceTitle: string</li>
 * <li>InvoiceInformation: string</li>
 *
 * </ul>
 */
 class MarketplaceWebServiceOrders_Model_InvoiceData extends MarketplaceWebServiceOrders_Model
 {
    public function __construct($data = null)
    {
        $this->_fields = [
            'InvoiceRequirement' => ['FieldValue' => null, 'FieldType' => 'string'],
            'BuyerSelectedInvoiceCategory' => ['FieldValue' => null, 'FieldType' => 'string'],
            'InvoiceTitle' => ['FieldValue' => null, 'FieldType' => 'string'],
            'InvoiceInformation' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the InvoiceRequirement property.
     *
     * @return string
     */
    public function getInvoiceRequirement()
    {
        return $this->_fields['InvoiceRequirement']['FieldValue'];
    }

    /**
     * Set the value of the InvoiceRequirement property.
     *
     * @param string $value
     * @return $this
     */
    public function setInvoiceRequirement($value)
    {
        $this->_fields['InvoiceRequirement']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InvoiceRequirement is set.
     *
     * @return bool `true` if InvoiceRequirement is set.
     */
    public function isSetInvoiceRequirement()
    {
        return ($this->_fields['InvoiceRequirement']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of InvoiceRequirement, return this.
     *
     * @param string $value
     * @return $this
     */
    public function withInvoiceRequirement($value)
    {
        $this->setInvoiceRequirement($value);
        return $this;
    }

    /**
     * Get the value of the BuyerSelectedInvoiceCategory property.
     *
     * @return string
     */
    public function getBuyerSelectedInvoiceCategory()
    {
        return $this->_fields['BuyerSelectedInvoiceCategory']['FieldValue'];
    }

    /**
     * Set the value of the BuyerSelectedInvoiceCategory property.
     *
     * @param string $value
     * @return $this
     */
    public function setBuyerSelectedInvoiceCategory($value)
    {
        $this->_fields['BuyerSelectedInvoiceCategory']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if BuyerSelectedInvoiceCategory is set.
     *
     * @return bool `true` if BuyerSelectedInvoiceCategory is set.
     */
    public function isSetBuyerSelectedInvoiceCategory()
    {
        return ($this->_fields['BuyerSelectedInvoiceCategory']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of BuyerSelectedInvoiceCategory, return this.
     *
     * @param string $value
     * @return $this
     */
    public function withBuyerSelectedInvoiceCategory($value)
    {
        $this->setBuyerSelectedInvoiceCategory($value);
        return $this;
    }

    /**
     * Get the value of the InvoiceTitle property.
     *
     * @return string InvoiceTitle.
     */
    public function getInvoiceTitle()
    {
        return $this->_fields['InvoiceTitle']['FieldValue'];
    }

    /**
     * Set the value of the InvoiceTitle property.
     *
     * @param string invoiceTitle
     * @return $this
     */
    public function setInvoiceTitle($value)
    {
        $this->_fields['InvoiceTitle']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InvoiceTitle is set.
     *
     * @return bool `true` if InvoiceTitle is set.
     */
    public function isSetInvoiceTitle()
    {
        return ($this->_fields['InvoiceTitle']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of InvoiceTitle, return this.
     *
     * @param string $value
     * @return $this
     */
    public function withInvoiceTitle($value)
    {
        $this->setInvoiceTitle($value);
        return $this;
    }

    /**
     * Get the value of the InvoiceInformation property.
     *
     * @return string InvoiceInformation.
     */
    public function getInvoiceInformation()
    {
        return $this->_fields['InvoiceInformation']['FieldValue'];
    }

    /**
     * Set the value of the InvoiceInformation property.
     *
     * @param string $value
     * @return $this
     */
    public function setInvoiceInformation($value)
    {
        $this->_fields['InvoiceInformation']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InvoiceInformation is set.
     *
     * @return bool `true` if InvoiceInformation is set.
     */
    public function isSetInvoiceInformation()
    {
        return ($this->_fields['InvoiceInformation']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of InvoiceInformation, return this.
     *
     * @param string $value
     * @return $this
     */
    public function withInvoiceInformation($value)
    {
        $this->setInvoiceInformation($value);
        return $this;
    }
}
