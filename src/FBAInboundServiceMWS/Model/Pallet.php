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
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2014-09-30
 * Generated: Fri Nov 21 18:21:09 GMT 2014
 */

/**
 * FBAInboundServiceMWS_Model_Pallet
 *
 * Properties:
 * <ul>
 *
 * <li>Dimensions: FBAInboundServiceMWS_Model_Dimensions</li>
 * <li>Weight: FBAInboundServiceMWS_Model_Weight</li>
 * <li>IsStacked: bool</li>
 *
 * </ul>
 */
class FBAInboundServiceMWS_Model_Pallet extends FBAInboundServiceMWS_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'Dimensions' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_Dimensions'),
            'Weight' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_Weight'),
            'IsStacked' => array('FieldValue' => null, 'FieldType' => 'bool'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Dimensions property.
     *
     * @return FBAInboundServiceMWS_Model_Dimensions Dimensions.
     */
    public function getDimensions()
    {
        return $this->_fields['Dimensions']['FieldValue'];
    }

    /**
     * Set the value of the Dimensions property.
     *
     * @param FBAInboundServiceMWS_Model_Dimensions $value dimensions
     * @return $this This instance
     */
    public function setDimensions($value)
    {
        $this->_fields['Dimensions']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Dimensions is set.
     *
     * @return bool if Dimensions is set.
     */
    public function isSetDimensions()
    {
        return !is_null($this->_fields['Dimensions']['FieldValue']);
    }

    /**
     * Set the value of Dimensions, return this.
     *
     * @param dimensions
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withDimensions($value)
    {
        $this->setDimensions($value);
        return $this;
    }

    /**
     * Get the value of the Weight property.
     *
     * @return FBAInboundServiceMWS_Model_Weight Weight.
     */
    public function getWeight()
    {
        return $this->_fields['Weight']['FieldValue'];
    }

    /**
     * Set the value of the Weight property.
     *
     * @param FBAInboundServiceMWS_Model_Weight $value weight
     * @return $this This instance
     */
    public function setWeight($value)
    {
        $this->_fields['Weight']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Weight is set.
     *
     * @return bool if Weight is set.
     */
    public function isSetWeight()
    {
        return !is_null($this->_fields['Weight']['FieldValue']);
    }

    /**
     * Set the value of Weight, return this.
     *
     * @param weight
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withWeight($value)
    {
        $this->setWeight($value);
        return $this;
    }

    /**
     * Check the value of IsStacked.
     *
     * @return bool if IsStacked is set to true.
     */
    public function isIsStacked()
    {
        return $this->_fields['IsStacked']['FieldValue'] ?? false;
    }

    /**
     * Get the value of the IsStacked property.
     *
     * @return boolean IsStacked.
     */
    public function getIsStacked()
    {
        return $this->_fields['IsStacked']['FieldValue'];
    }

    /**
     * Set the value of the IsStacked property.
     *
     * @param bool $value isStacked
     * @return $this This instance
     */
    public function setIsStacked($value)
    {
        $this->_fields['IsStacked']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsStacked is set.
     *
     * @return bool if IsStacked is set.
     */
    public function isSetIsStacked()
    {
        return !is_null($this->_fields['IsStacked']['FieldValue']);
    }

    /**
     * Set the value of IsStacked, return this.
     *
     * @param isStacked
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withIsStacked($value)
    {
        $this->setIsStacked($value);
        return $this;
    }

}
