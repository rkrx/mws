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
 * MarketplaceWebServiceOrders_Model_Message
 * 
 * Properties:
 * <ul>
 * 
 * <li>Locale: string</li>
 * <li>Text: string</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_Message extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Locale' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Text' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Locale property.
     *
     * @return string Locale.
     */
    public function getLocale()
    {
        return $this->_fields['Locale']['FieldValue'];
    }

    /**
     * Set the value of the Locale property.
     *
     * @param string locale
     * @return $this
     */
    public function setLocale($value)
    {
        $this->_fields['Locale']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Locale is set.
     *
     * @return bool `true` if Locale is set.
     */
    public function isSetLocale()
    {
        return ($this->_fields['Locale']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of Locale, return this.
     *
     * @param string $value The new value to set.
     * @return $this
     */
    public function withLocale($value)
    {
        $this->setLocale($value);
        return $this;
    }

    /**
     * Get the value of the Text property.
     *
     * @return string Text.
     */
    public function getText()
    {
        return $this->_fields['Text']['FieldValue'];
    }

    /**
     * Set the value of the Text property.
     *
     * @param string text
     * @return $this
     */
    public function setText($value)
    {
        $this->_fields['Text']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Text is set.
     *
     * @return bool `true` if Text is set.
     */
    public function isSetText()
    {
        return ($this->_fields['Text']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of Text, return this.
     *
     * @param string $value The new value to set.
     * @return $this
     */
    public function withText($value)
    {
        $this->setText($value);
        return $this;
    }
}
