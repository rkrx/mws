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
 * FBAInboundServiceMWS_Model_NonPartneredSmallParcelDataInput
 *
 * Properties:
 * <ul>
 *
 * <li>CarrierName: string</li>
 * <li>PackageList: FBAInboundServiceMWS_Model_NonPartneredSmallParcelPackageInputList</li>
 *
 * </ul>
 */
class FBAInboundServiceMWS_Model_NonPartneredSmallParcelDataInput extends FBAInboundServiceMWS_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'CarrierName' => array('FieldValue' => null, 'FieldType' => 'string'),
            'PackageList' => array(
                'FieldValue' => null,
                'FieldType' => 'FBAInboundServiceMWS_Model_NonPartneredSmallParcelPackageInputList'
            ),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the CarrierName property.
     *
     * @return String CarrierName.
     */
    public function getCarrierName()
    {
        return $this->_fields['CarrierName']['FieldValue'];
    }

    /**
     * Set the value of the CarrierName property.
     *
     * @param string $value carrierName
     * @return $this This instance
     */
    public function setCarrierName($value)
    {
        $this->_fields['CarrierName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CarrierName is set.
     *
     * @return bool if CarrierName is set.
     */
    public function isSetCarrierName()
    {
        return !is_null($this->_fields['CarrierName']['FieldValue']);
    }

    /**
     * Set the value of CarrierName, return this.
     *
     * @param carrierName
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withCarrierName($value)
    {
        $this->setCarrierName($value);
        return $this;
    }

    /**
     * Get the value of the PackageList property.
     *
     * @return FBAInboundServiceMWS_Model_NonPartneredSmallParcelPackageInputList PackageList.
     */
    public function getPackageList()
    {
        return $this->_fields['PackageList']['FieldValue'];
    }

    /**
     * Set the value of the PackageList property.
     *
     * @param FBAInboundServiceMWS_Model_NonPartneredSmallParcelPackageInputList $value packageList
     * @return $this This instance
     */
    public function setPackageList($value)
    {
        $this->_fields['PackageList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PackageList is set.
     *
     * @return bool if PackageList is set.
     */
    public function isSetPackageList()
    {
        return !is_null($this->_fields['PackageList']['FieldValue']);
    }

    /**
     * Set the value of PackageList, return this.
     *
     * @param packageList
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withPackageList($value)
    {
        $this->setPackageList($value);
        return $this;
    }

}
