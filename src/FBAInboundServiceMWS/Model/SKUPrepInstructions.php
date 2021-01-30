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
 * FBAInboundServiceMWS_Model_SKUPrepInstructions
 *
 * Properties:
 * <ul>
 *
 * <li>SellerSKU: string</li>
 * <li>ASIN: string</li>
 * <li>BarcodeInstruction: string</li>
 * <li>PrepGuidance: string</li>
 * <li>PrepInstructionList: FBAInboundServiceMWS_Model_PrepInstructionList</li>
 *
 * </ul>
 */
class FBAInboundServiceMWS_Model_SKUPrepInstructions extends FBAInboundServiceMWS_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ASIN' => array('FieldValue' => null, 'FieldType' => 'string'),
            'BarcodeInstruction' => array('FieldValue' => null, 'FieldType' => 'string'),
            'PrepGuidance' => array('FieldValue' => null, 'FieldType' => 'string'),
            'PrepInstructionList' => array(
                'FieldValue' => null,
                'FieldType' => 'FBAInboundServiceMWS_Model_PrepInstructionList'
            ),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerSKU property.
     *
     * @return String SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of the SellerSKU property.
     *
     * @param string $value sellerSKU
     * @return $this This instance
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerSKU is set.
     *
     * @return bool if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
        return !is_null($this->_fields['SellerSKU']['FieldValue']);
    }

    /**
     * Set the value of SellerSKU, return this.
     *
     * @param sellerSKU
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);
        return $this;
    }

    /**
     * Get the value of the ASIN property.
     *
     * @return String ASIN.
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Set the value of the ASIN property.
     *
     * @param string $value asin
     * @return $this This instance
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ASIN is set.
     *
     * @return bool if ASIN is set.
     */
    public function isSetASIN()
    {
        return !is_null($this->_fields['ASIN']['FieldValue']);
    }

    /**
     * Set the value of ASIN, return this.
     *
     * @param asin
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withASIN($value)
    {
        $this->setASIN($value);
        return $this;
    }

    /**
     * Get the value of the BarcodeInstruction property.
     *
     * @return String BarcodeInstruction.
     */
    public function getBarcodeInstruction()
    {
        return $this->_fields['BarcodeInstruction']['FieldValue'];
    }

    /**
     * Set the value of the BarcodeInstruction property.
     *
     * @param string $value barcodeInstruction
     * @return $this This instance
     */
    public function setBarcodeInstruction($value)
    {
        $this->_fields['BarcodeInstruction']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if BarcodeInstruction is set.
     *
     * @return bool if BarcodeInstruction is set.
     */
    public function isSetBarcodeInstruction()
    {
        return !is_null($this->_fields['BarcodeInstruction']['FieldValue']);
    }

    /**
     * Set the value of BarcodeInstruction, return this.
     *
     * @param barcodeInstruction
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withBarcodeInstruction($value)
    {
        $this->setBarcodeInstruction($value);
        return $this;
    }

    /**
     * Get the value of the PrepGuidance property.
     *
     * @return String PrepGuidance.
     */
    public function getPrepGuidance()
    {
        return $this->_fields['PrepGuidance']['FieldValue'];
    }

    /**
     * Set the value of the PrepGuidance property.
     *
     * @param string $value prepGuidance
     * @return $this This instance
     */
    public function setPrepGuidance($value)
    {
        $this->_fields['PrepGuidance']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PrepGuidance is set.
     *
     * @return bool if PrepGuidance is set.
     */
    public function isSetPrepGuidance()
    {
        return !is_null($this->_fields['PrepGuidance']['FieldValue']);
    }

    /**
     * Set the value of PrepGuidance, return this.
     *
     * @param prepGuidance
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withPrepGuidance($value)
    {
        $this->setPrepGuidance($value);
        return $this;
    }

    /**
     * Get the value of the PrepInstructionList property.
     *
     * @return FBAInboundServiceMWS_Model_PrepInstructionList PrepInstructionList.
     */
    public function getPrepInstructionList()
    {
        return $this->_fields['PrepInstructionList']['FieldValue'];
    }

    /**
     * Set the value of the PrepInstructionList property.
     *
     * @param FBAInboundServiceMWS_Model_PrepInstructionList $value prepInstructionList
     * @return $this This instance
     */
    public function setPrepInstructionList($value)
    {
        $this->_fields['PrepInstructionList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PrepInstructionList is set.
     *
     * @return bool if PrepInstructionList is set.
     */
    public function isSetPrepInstructionList()
    {
        return !is_null($this->_fields['PrepInstructionList']['FieldValue']);
    }

    /**
     * Set the value of PrepInstructionList, return this.
     *
     * @param prepInstructionList
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withPrepInstructionList($value)
    {
        $this->setPrepInstructionList($value);
        return $this;
    }

}
