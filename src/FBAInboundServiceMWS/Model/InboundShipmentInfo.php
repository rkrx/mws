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
 * FBAInboundServiceMWS_Model_InboundShipmentInfo
 *
 * Properties:
 * <ul>
 *
 * <li>ShipmentId: string</li>
 * <li>ShipmentName: string</li>
 * <li>ShipFromAddress: FBAInboundServiceMWS_Model_Address</li>
 * <li>DestinationFulfillmentCenterId: string</li>
 * <li>ShipmentStatus: string</li>
 * <li>LabelPrepType: string</li>
 * <li>AreCasesRequired: bool</li>
 *
 * </ul>
 */
class FBAInboundServiceMWS_Model_InboundShipmentInfo extends FBAInboundServiceMWS_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'ShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ShipmentName' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ShipFromAddress' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_Address'),
            'DestinationFulfillmentCenterId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ShipmentStatus' => array('FieldValue' => null, 'FieldType' => 'string'),
            'LabelPrepType' => array('FieldValue' => null, 'FieldType' => 'string'),
            'AreCasesRequired' => array('FieldValue' => null, 'FieldType' => 'bool'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ShipmentId property.
     *
     * @return String ShipmentId.
     */
    public function getShipmentId()
    {
        return $this->_fields['ShipmentId']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentId property.
     *
     * @param string $value shipmentId
     * @return $this This instance
     */
    public function setShipmentId($value)
    {
        $this->_fields['ShipmentId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipmentId is set.
     *
     * @return bool if ShipmentId is set.
     */
    public function isSetShipmentId()
    {
        return !is_null($this->_fields['ShipmentId']['FieldValue']);
    }

    /**
     * Set the value of ShipmentId, return this.
     *
     * @param shipmentId
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withShipmentId($value)
    {
        $this->setShipmentId($value);
        return $this;
    }

    /**
     * Get the value of the ShipmentName property.
     *
     * @return String ShipmentName.
     */
    public function getShipmentName()
    {
        return $this->_fields['ShipmentName']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentName property.
     *
     * @param string $value shipmentName
     * @return $this This instance
     */
    public function setShipmentName($value)
    {
        $this->_fields['ShipmentName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipmentName is set.
     *
     * @return bool if ShipmentName is set.
     */
    public function isSetShipmentName()
    {
        return !is_null($this->_fields['ShipmentName']['FieldValue']);
    }

    /**
     * Set the value of ShipmentName, return this.
     *
     * @param shipmentName
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withShipmentName($value)
    {
        $this->setShipmentName($value);
        return $this;
    }

    /**
     * Get the value of the ShipFromAddress property.
     *
     * @return FBAInboundServiceMWS_Model_Address ShipFromAddress.
     */
    public function getShipFromAddress()
    {
        return $this->_fields['ShipFromAddress']['FieldValue'];
    }

    /**
     * Set the value of the ShipFromAddress property.
     *
     * @param FBAInboundServiceMWS_Model_Address $value shipFromAddress
     * @return $this This instance
     */
    public function setShipFromAddress($value)
    {
        $this->_fields['ShipFromAddress']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipFromAddress is set.
     *
     * @return bool if ShipFromAddress is set.
     */
    public function isSetShipFromAddress()
    {
        return !is_null($this->_fields['ShipFromAddress']['FieldValue']);
    }

    /**
     * Set the value of ShipFromAddress, return this.
     *
     * @param shipFromAddress
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withShipFromAddress($value)
    {
        $this->setShipFromAddress($value);
        return $this;
    }

    /**
     * Get the value of the DestinationFulfillmentCenterId property.
     *
     * @return String DestinationFulfillmentCenterId.
     */
    public function getDestinationFulfillmentCenterId()
    {
        return $this->_fields['DestinationFulfillmentCenterId']['FieldValue'];
    }

    /**
     * Set the value of the DestinationFulfillmentCenterId property.
     *
     * @param string $value destinationFulfillmentCenterId
     * @return $this This instance
     */
    public function setDestinationFulfillmentCenterId($value)
    {
        $this->_fields['DestinationFulfillmentCenterId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DestinationFulfillmentCenterId is set.
     *
     * @return bool if DestinationFulfillmentCenterId is set.
     */
    public function isSetDestinationFulfillmentCenterId()
    {
        return !is_null($this->_fields['DestinationFulfillmentCenterId']['FieldValue']);
    }

    /**
     * Set the value of DestinationFulfillmentCenterId, return this.
     *
     * @param destinationFulfillmentCenterId
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withDestinationFulfillmentCenterId($value)
    {
        $this->setDestinationFulfillmentCenterId($value);
        return $this;
    }

    /**
     * Get the value of the ShipmentStatus property.
     *
     * @return String ShipmentStatus.
     */
    public function getShipmentStatus()
    {
        return $this->_fields['ShipmentStatus']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentStatus property.
     *
     * @param string $value shipmentStatus
     * @return $this This instance
     */
    public function setShipmentStatus($value)
    {
        $this->_fields['ShipmentStatus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipmentStatus is set.
     *
     * @return bool if ShipmentStatus is set.
     */
    public function isSetShipmentStatus()
    {
        return !is_null($this->_fields['ShipmentStatus']['FieldValue']);
    }

    /**
     * Set the value of ShipmentStatus, return this.
     *
     * @param shipmentStatus
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withShipmentStatus($value)
    {
        $this->setShipmentStatus($value);
        return $this;
    }

    /**
     * Get the value of the LabelPrepType property.
     *
     * @return String LabelPrepType.
     */
    public function getLabelPrepType()
    {
        return $this->_fields['LabelPrepType']['FieldValue'];
    }

    /**
     * Set the value of the LabelPrepType property.
     *
     * @param string $value labelPrepType
     * @return $this This instance
     */
    public function setLabelPrepType($value)
    {
        $this->_fields['LabelPrepType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LabelPrepType is set.
     *
     * @return bool if LabelPrepType is set.
     */
    public function isSetLabelPrepType()
    {
        return !is_null($this->_fields['LabelPrepType']['FieldValue']);
    }

    /**
     * Set the value of LabelPrepType, return this.
     *
     * @param labelPrepType
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withLabelPrepType($value)
    {
        $this->setLabelPrepType($value);
        return $this;
    }

    /**
     * Check the value of AreCasesRequired.
     *
     * @return bool if AreCasesRequired is set to true.
     */
    public function isAreCasesRequired()
    {
        return !is_null($this->_fields['AreCasesRequired']['FieldValue']) && $this->_fields['AreCasesRequired']['FieldValue'];
    }

    /**
     * Get the value of the AreCasesRequired property.
     *
     * @return Boolean AreCasesRequired.
     */
    public function getAreCasesRequired()
    {
        return $this->_fields['AreCasesRequired']['FieldValue'];
    }

    /**
     * Set the value of the AreCasesRequired property.
     *
     * @param bool $value areCasesRequired
     * @return $this This instance
     */
    public function setAreCasesRequired($value)
    {
        $this->_fields['AreCasesRequired']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AreCasesRequired is set.
     *
     * @return bool if AreCasesRequired is set.
     */
    public function isSetAreCasesRequired()
    {
        return !is_null($this->_fields['AreCasesRequired']['FieldValue']);
    }

    /**
     * Set the value of AreCasesRequired, return this.
     *
     * @param areCasesRequired
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withAreCasesRequired($value)
    {
        $this->setAreCasesRequired($value);
        return $this;
    }

}
