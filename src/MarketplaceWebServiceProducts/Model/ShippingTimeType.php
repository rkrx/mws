<?php
/*******************************************************************************
 * Copyright 2009-2014 Amazon Services. All Rights Reserved.
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
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2014-10-20
 * Generated: Fri Oct 17 17:59:56 GMT 2014
 */

/**
 * MarketplaceWebServiceProducts_Model_ShippingTimeType
 *
 * Properties:
 * <ul>
 *
 * <li>Max: string</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProducts_Model_ShippingTimeType extends MarketplaceWebServiceProducts_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'Max' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Max property.
     *
     * @return String Max.
     */
    public function getMax()
    {
        return $this->_fields['Max']['FieldValue'];
    }

    /**
     * Set the value of the Max property.
     *
     * @param string $value max
     * @return $this This instance
     */
    public function setMax($value)
    {
        $this->_fields['Max']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Max is set.
     *
     * @return bool if Max is set.
     */
    public function isSetMax()
    {
        return !is_null($this->_fields['Max']['FieldValue']);
    }

    /**
     * Set the value of Max, return this.
     *
     * @param max
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withMax($value)
    {
        $this->setMax($value);
        return $this;
    }

}
