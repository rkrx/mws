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
 * @package  Marketplace Web Service Sellers
 * @version  2011-07-01
 * Library Version: 2014-10-20
 * Generated: Fri Oct 17 18:34:06 GMT 2014
 */

/**
 * MarketplaceWebServiceSellers_Model_ListMarketplaces
 *
 * Properties:
 * <ul>
 *
 * <li>Marketplace: array</li>
 *
 * </ul>
 */
class MarketplaceWebServiceSellers_Model_ListMarketplaces extends MarketplaceWebServiceSellers_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'Marketplace' => array(
                'FieldValue' => array(),
                'FieldType' => array('MarketplaceWebServiceSellers_Model_Marketplace')
            ),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Marketplace property.
     *
     * @return MarketplaceWebServiceSellers_Model_Marketplace[] Marketplace.
     */
    public function getMarketplace()
    {
        if ($this->_fields['Marketplace']['FieldValue'] == null) {
            $this->_fields['Marketplace']['FieldValue'] = array();
        }
        return $this->_fields['Marketplace']['FieldValue'];
    }

    /**
     * Set the value of the Marketplace property.
     *
     * @param array $value marketplace
     * @return $this This instance
     */
    public function setMarketplace($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['Marketplace']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear Marketplace.
     */
    public function unsetMarketplace()
    {
        $this->_fields['Marketplace']['FieldValue'] = array();
    }

    /**
     * Check to see if Marketplace is set.
     *
     * @return bool if Marketplace is set.
     */
    public function isSetMarketplace()
    {
        return !empty($this->_fields['Marketplace']['FieldValue']);
    }

    /**
     * Add values for Marketplace, return this.
     *
     * @param marketplace
     *             New values to add.
     *
     * @return $this This instance.
     */
    public function withMarketplace()
    {
        foreach (func_get_args() as $Marketplace) {
            $this->_fields['Marketplace']['FieldValue'][] = $Marketplace;
        }
        return $this;
    }

}
