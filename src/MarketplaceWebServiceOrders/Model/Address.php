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
 * MarketplaceWebServiceOrders_Model_Address
 *
 * Properties:
 * <ul>
 *
 * <li>Name: string</li>
 * <li>AddressLine1: string</li>
 * <li>AddressLine2: string</li>
 * <li>AddressLine3: string</li>
 * <li>City: string</li>
 * <li>County: string</li>
 * <li>District: string</li>
 * <li>StateOrRegion: string</li>
 * <li>Municipality: string</li>
 * <li>PostalCode: string</li>
 * <li>CountryCode: string</li>
 * <li>Phone: string</li>
 * <li>AddressType: string</li>
 *
 * </ul>
 */

class MarketplaceWebServiceOrders_Model_Address extends MarketplaceWebServiceOrders_Model
{
    public function __construct($data = null)
    {
        $this->_fields = [
            'Name' => ['FieldValue' => null, 'FieldType' => 'string'],
            'AddressLine1' => ['FieldValue' => null, 'FieldType' => 'string'],
            'AddressLine2' => ['FieldValue' => null, 'FieldType' => 'string'],
            'AddressLine3' => ['FieldValue' => null, 'FieldType' => 'string'],
            'City' => ['FieldValue' => null, 'FieldType' => 'string'],
            'County' => ['FieldValue' => null, 'FieldType' => 'string'],
            'District' => ['FieldValue' => null, 'FieldType' => 'string'],
            'StateOrRegion' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Municipality' => ['FieldValue' => null, 'FieldType' => 'string'],
            'PostalCode' => ['FieldValue' => null, 'FieldType' => 'string'],
            'CountryCode' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Phone' => ['FieldValue' => null, 'FieldType' => 'string'],
            'AddressType' => ['FieldValue' => null, 'FieldType' => 'string'],
        ];
        
        parent::__construct($data);
    }

    /**
     * Get the value of the Name property.
     *
     * @return string Name.
     */
    public function getName()
    {
        return $this->_fields['Name']['FieldValue'];
    }

    /**
     * Set the value of the Name property.
     *
     * @param string $value name
     * @return $this This instance
     */
    public function setName($value)
    {
        $this->_fields['Name']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Name is set.
     *
     * @return bool `true` if Name is set.
     */
    public function isSetName()
    {
        return $this->_fields['Name']['FieldValue'] !== null;
    }

    /**
     * Set the value of Name, return this.
     *
     * @param string $value The new value to set.
     * @return $this
     */
    public function withName($value)
    {
        $this->setName($value);
        return $this;
    }

    /**
     * Get the value of the AddressLine1 property.
     *
     * @return string AddressLine1.
     */
    public function getAddressLine1()
    {
        return $this->_fields['AddressLine1']['FieldValue'];
    }

    /**
     * Set the value of the AddressLine1 property.
     *
     * @param string $value addressLine1
     * @return $this This instance
     */
    public function setAddressLine1($value)
    {
        $this->_fields['AddressLine1']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AddressLine1 is set.
     *
     * @return bool `true` if AddressLine1 is set.
     */
    public function isSetAddressLine1()
    {
        return $this->_fields['AddressLine1']['FieldValue'] !== null;
    }

    /**
     * Set the value of AddressLine1, return this.
     *
     * @param mixed $value addressLine1 The new value to set.
     * @return $this
     */
    public function withAddressLine1($value)
    {
        $this->setAddressLine1($value);
        return $this;
    }

    /**
     * Get the value of the AddressLine2 property.
     *
     * @return string AddressLine2.
     */
    public function getAddressLine2()
    {
        return $this->_fields['AddressLine2']['FieldValue'];
    }

    /**
     * Set the value of the AddressLine2 property.
     *
     * @param string $value addressLine2
     * @return $this
     */
    public function setAddressLine2($value)
    {
        $this->_fields['AddressLine2']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AddressLine2 is set.
     *
     * @return bool `true` if AddressLine2 is set.
     */
    public function isSetAddressLine2()
    {
        return $this->_fields['AddressLine2']['FieldValue'] !== null;
    }

    /**
     * Set the value of AddressLine2, return this.
     *
     * @param mixed $value The new value to set.
     * @return $this
     */
    public function withAddressLine2($value)
    {
        $this->setAddressLine2($value);
        return $this;
    }

    /**
     * Get the value of the AddressLine3 property.
     *
     * @return string AddressLine3.
     */
    public function getAddressLine3()
    {
        return $this->_fields['AddressLine3']['FieldValue'];
    }

    /**
     * Set the value of the AddressLine3 property.
     *
     * @param string addressLine3
     * @return $this
     */
    public function setAddressLine3($value)
    {
        $this->_fields['AddressLine3']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AddressLine3 is set.
     *
     * @return bool `true` if AddressLine3 is set.
     */
    public function isSetAddressLine3()
    {
        return $this->_fields['AddressLine3']['FieldValue'] !== null;
    }

    /**
     * Set the value of AddressLine3, return this.
     *
     * @param mixed $value The new value to set.
     * @return $this
     */
    public function withAddressLine3($value)
    {
        $this->setAddressLine3($value);
        return $this;
    }

    /**
     * Get the value of the City property.
     *
     * @return string City.
     */
    public function getCity()
    {
        return $this->_fields['City']['FieldValue'];
    }

    /**
     * Set the value of the City property.
     *
     * @param string city
     * @return $this
     */
    public function setCity($value)
    {
        $this->_fields['City']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if City is set.
     *
     * @return bool `true` if City is set.
     */
    public function isSetCity()
    {
        return $this->_fields['City']['FieldValue'] !== null;
    }

    /**
     * Set the value of City, return this.
     *
     * @param string $value The new value to set.
     * @return $this
     */
    public function withCity($value)
    {
        $this->setCity($value);
        return $this;
    }

    /**
     * Get the value of the County property.
     *
     * @return string County.
     */
    public function getCounty()
    {
        return $this->_fields['County']['FieldValue'];
    }

    /**
     * Set the value of the County property.
     *
     * @param string county
     * @return $this
     */
    public function setCounty($value)
    {
        $this->_fields['County']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if County is set.
     *
     * @return bool `true` if County is set.
     */
    public function isSetCounty()
    {
        return $this->_fields['County']['FieldValue'] !== null;
    }

    /**
     * Set the value of County, return this.
     *
     * @param mixed $value
     * @return $this
     */
    public function withCounty($value)
    {
        $this->setCounty($value);
        return $this;
    }

    /**
     * Get the value of the District property.
     *
     * @return string District.
     */
    public function getDistrict()
    {
        return $this->_fields['District']['FieldValue'];
    }

    /**
     * Set the value of the District property.
     *
     * @param string $value district
     * @return $this
     */
    public function setDistrict($value)
    {
        $this->_fields['District']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if District is set.
     *
     * @return bool `true` if District is set.
     */
    public function isSetDistrict()
    {
        return ($this->_fields['District']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of District, return this.
     *
     * @param mixed $value
     * @return $this
     */
    public function withDistrict($value)
    {
        $this->setDistrict($value);
        return $this;
    }

    /**
     * Get the value of the StateOrRegion property.
     *
     * @return string StateOrRegion.
     */
    public function getStateOrRegion()
    {
        return $this->_fields['StateOrRegion']['FieldValue'];
    }

    /**
     * Set the value of the StateOrRegion property.
     *
     * @param string $value
     * @return $this instance
     */
    public function setStateOrRegion($value)
    {
        $this->_fields['StateOrRegion']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if StateOrRegion is set.
     *
     * @return bool `true` if StateOrRegion is set.
     */
    public function isSetStateOrRegion()
    {
        return ($this->_fields['StateOrRegion']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of StateOrRegion, return this.
     *
     * @param mixed $value
     * @return $this
     */
    public function withStateOrRegion($value)
    {
        $this->setStateOrRegion($value);
        return $this;
    }

    /**
     * Get the value of the Municipality property.
     *
     * @return string Municipality.
     */
    public function getMunicipality()
    {
        return $this->_fields['Municipality']['FieldValue'];
    }

    /**
     * Set the value of the Municipality property.
     *
     * @param string $value
     * @return $this
     */
    public function setMunicipality($value)
    {
        $this->_fields['Municipality']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Municipality is set.
     *
     * @return bool `true` if Municipality is set.
     */
    public function isSetMunicipality()
    {
        return ($this->_fields['Municipality']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of Municipality, return this.
     *
     * @param string $value The new value to set.
     * @return $this
     */
    public function withMunicipality($value)
    {
        $this->setMunicipality($value);
        return $this;
    }

    /**
     * Get the value of the PostalCode property.
     *
     * @return string PostalCode.
     */
    public function getPostalCode()
    {
        return $this->_fields['PostalCode']['FieldValue'];
    }

    /**
     * Set the value of the PostalCode property.
     *
     * @param string postalCode
     * @return $this
     */
    public function setPostalCode($value)
    {
        $this->_fields['PostalCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PostalCode is set.
     *
     * @return bool `true` if PostalCode is set.
     */
    public function isSetPostalCode()
    {
        return ($this->_fields['PostalCode']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of PostalCode, return this.
     *
     * @param string $value The new value to set.
     * @return $this
     */
    public function withPostalCode($value)
    {
        $this->setPostalCode($value);
        return $this;
    }

    /**
     * Get the value of the CountryCode property.
     *
     * @return string CountryCode.
     */
    public function getCountryCode()
    {
        return $this->_fields['CountryCode']['FieldValue'];
    }

    /**
     * Set the value of the CountryCode property.
     *
     * @param string $value
     * @return $this
     */
    public function setCountryCode($value)
    {
        $this->_fields['CountryCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CountryCode is set.
     *
     * @return bool `true` if CountryCode is set.
     */
    public function isSetCountryCode()
    {
        return ($this->_fields['CountryCode']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of CountryCode, return this.
     *
     * @param string $value The new value to set.
     * @return $this
     */
    public function withCountryCode($value)
    {
        $this->setCountryCode($value);
        return $this;
    }

    /**
     * Get the value of the Phone property.
     *
     * @return string Phone.
     */
    public function getPhone()
    {
        return $this->_fields['Phone']['FieldValue'];
    }

    /**
     * Set the value of the Phone property.
     *
     * @param string phone
     * @return $this
     */
    public function setPhone($value)
    {
        $this->_fields['Phone']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Phone is set.
     *
     * @return bool `true` if Phone is set.
     */
    public function isSetPhone()
    {
        return ($this->_fields['Phone']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of Phone, return this.
     *
     * @param string $value The new value to set.
     * @return $this
     */
    public function withPhone($value)
    {
        $this->setPhone($value);
        return $this;
    }

    /**
     * Get the value of the AddressType property.
     *
     * @return string
     */
    public function getAddressType()
    {
        return $this->_fields['AddressType']['FieldValue'];
    }

    /**
     * Set the value of the AddressType property.
     *
     * @param string $value
     * @return $this
     */
    public function setAddressType($value)
    {
        $this->_fields['AddressType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AddressType is set.
     *
     * @return bool `true` if AddressType is set.
     */
    public function isSetAddressType()
    {
        return ($this->_fields['AddressType']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of AddressType, return this.
     *
     * @param string $value The new value to set.
     * @return $this
     */
    public function withAddressType($value)
    {
        $this->setAddressType($value);
        return $this;
    }
}
