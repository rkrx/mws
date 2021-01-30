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
 * @package  FBA Inventory Service MWS
 * @version  2010-10-01
 * Library Version: 2014-10-20
 * Generated: Fri Oct 17 17:54:00 GMT 2014
 */

/**
 * FBAInventoryServiceMWS_Model_ListInventorySupplyByNextTokenRequest
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>Marketplace: string</li>
 * <li>SupplyRegion: string</li>
 * <li>NextToken: string</li>
 *
 * </ul>
 */
class FBAInventoryServiceMWS_Model_ListInventorySupplyByNextTokenRequest extends FBAInventoryServiceMWS_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'),
            'SupplyRegion' => array('FieldValue' => null, 'FieldType' => 'string'),
            'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string $value sellerId
     * @return $this This instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return bool if SellerId is set.
     */
    public function isSetSellerId()
    {
        return !is_null($this->_fields['SellerId']['FieldValue']);
    }

    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
        return $this;
    }

    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return String MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string $value mwsAuthToken
     * @return $this This instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return bool if MWSAuthToken is set.
     */
    public function isSetMWSAuthToken()
    {
        return !is_null($this->_fields['MWSAuthToken']['FieldValue']);
    }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param mwsAuthToken
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);
        return $this;
    }

    /**
     * Get the value of the Marketplace property.
     *
     * @return String Marketplace.
     */
    public function getMarketplace()
    {
        return $this->_fields['Marketplace']['FieldValue'];
    }

    /**
     * Set the value of the Marketplace property.
     *
     * @param string $value marketplace
     * @return $this This instance
     */
    public function setMarketplace($value)
    {
        $this->_fields['Marketplace']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Marketplace is set.
     *
     * @return bool if Marketplace is set.
     */
    public function isSetMarketplace()
    {
        return !is_null($this->_fields['Marketplace']['FieldValue']);
    }

    /**
     * Set the value of Marketplace, return this.
     *
     * @param marketplace
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withMarketplace($value)
    {
        $this->setMarketplace($value);
        return $this;
    }

    /**
     * Get the value of the SupplyRegion property.
     *
     * @return String SupplyRegion.
     */
    public function getSupplyRegion()
    {
        return $this->_fields['SupplyRegion']['FieldValue'];
    }

    /**
     * Set the value of the SupplyRegion property.
     *
     * @param string $value supplyRegion
     * @return $this This instance
     */
    public function setSupplyRegion($value)
    {
        $this->_fields['SupplyRegion']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SupplyRegion is set.
     *
     * @return bool if SupplyRegion is set.
     */
    public function isSetSupplyRegion()
    {
        return !is_null($this->_fields['SupplyRegion']['FieldValue']);
    }

    /**
     * Set the value of SupplyRegion, return this.
     *
     * @param supplyRegion
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withSupplyRegion($value)
    {
        $this->setSupplyRegion($value);
        return $this;
    }

    /**
     * Get the value of the NextToken property.
     *
     * @return String NextToken.
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of the NextToken property.
     *
     * @param string $value nextToken
     * @return $this This instance
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NextToken is set.
     *
     * @return bool if NextToken is set.
     */
    public function isSetNextToken()
    {
        return !is_null($this->_fields['NextToken']['FieldValue']);
    }

    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }

}
