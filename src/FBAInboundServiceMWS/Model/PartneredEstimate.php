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
 * FBAInboundServiceMWS_Model_PartneredEstimate
 *
 * Properties:
 * <ul>
 *
 * <li>Amount: FBAInboundServiceMWS_Model_Amount</li>
 * <li>ConfirmDeadline: string</li>
 * <li>VoidDeadline: string</li>
 *
 * </ul>
 */
class FBAInboundServiceMWS_Model_PartneredEstimate extends FBAInboundServiceMWS_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'Amount' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_Amount'),
            'ConfirmDeadline' => array('FieldValue' => null, 'FieldType' => 'string'),
            'VoidDeadline' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Amount property.
     *
     * @return FBAInboundServiceMWS_Model_Amount Amount.
     */
    public function getAmount()
    {
        return $this->_fields['Amount']['FieldValue'];
    }

    /**
     * Set the value of the Amount property.
     *
     * @param FBAInboundServiceMWS_Model_Amount $value amount
     * @return $this This instance
     */
    public function setAmount($value)
    {
        $this->_fields['Amount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Amount is set.
     *
     * @return bool if Amount is set.
     */
    public function isSetAmount()
    {
        return !is_null($this->_fields['Amount']['FieldValue']);
    }

    /**
     * Set the value of Amount, return this.
     *
     * @param amount
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withAmount($value)
    {
        $this->setAmount($value);
        return $this;
    }

    /**
     * Get the value of the ConfirmDeadline property.
     *
     * @return String ConfirmDeadline.
     */
    public function getConfirmDeadline()
    {
        return $this->_fields['ConfirmDeadline']['FieldValue'];
    }

    /**
     * Set the value of the ConfirmDeadline property.
     *
     * @param string $value confirmDeadline
     * @return $this This instance
     */
    public function setConfirmDeadline($value)
    {
        $this->_fields['ConfirmDeadline']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ConfirmDeadline is set.
     *
     * @return bool if ConfirmDeadline is set.
     */
    public function isSetConfirmDeadline()
    {
        return !is_null($this->_fields['ConfirmDeadline']['FieldValue']);
    }

    /**
     * Set the value of ConfirmDeadline, return this.
     *
     * @param confirmDeadline
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withConfirmDeadline($value)
    {
        $this->setConfirmDeadline($value);
        return $this;
    }

    /**
     * Get the value of the VoidDeadline property.
     *
     * @return String VoidDeadline.
     */
    public function getVoidDeadline()
    {
        return $this->_fields['VoidDeadline']['FieldValue'];
    }

    /**
     * Set the value of the VoidDeadline property.
     *
     * @param string $value voidDeadline
     * @return $this This instance
     */
    public function setVoidDeadline($value)
    {
        $this->_fields['VoidDeadline']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if VoidDeadline is set.
     *
     * @return bool if VoidDeadline is set.
     */
    public function isSetVoidDeadline()
    {
        return !is_null($this->_fields['VoidDeadline']['FieldValue']);
    }

    /**
     * Set the value of VoidDeadline, return this.
     *
     * @param voidDeadline
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withVoidDeadline($value)
    {
        $this->setVoidDeadline($value);
        return $this;
    }

}
