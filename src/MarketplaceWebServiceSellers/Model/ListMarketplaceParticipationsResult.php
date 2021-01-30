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
 * MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsResult
 *
 * Properties:
 * <ul>
 *
 * <li>NextToken: string</li>
 * <li>ListParticipations: MarketplaceWebServiceSellers_Model_ListParticipations</li>
 * <li>ListMarketplaces: MarketplaceWebServiceSellers_Model_ListMarketplaces</li>
 *
 * </ul>
 */
class MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsResult extends MarketplaceWebServiceSellers_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ListParticipations' => array(
                'FieldValue' => null,
                'FieldType' => 'MarketplaceWebServiceSellers_Model_ListParticipations'
            ),
            'ListMarketplaces' => array(
                'FieldValue' => null,
                'FieldType' => 'MarketplaceWebServiceSellers_Model_ListMarketplaces'
            ),
        );
        parent::__construct($data);
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

    /**
     * Get the value of the ListParticipations property.
     *
     * @return MarketplaceWebServiceSellers_Model_ListParticipations ListParticipations.
     */
    public function getListParticipations()
    {
        return $this->_fields['ListParticipations']['FieldValue'];
    }

    /**
     * Set the value of the ListParticipations property.
     *
     * @param MarketplaceWebServiceSellers_Model_ListParticipations $value listParticipations
     * @return $this This instance
     */
    public function setListParticipations($value)
    {
        $this->_fields['ListParticipations']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListParticipations is set.
     *
     * @return bool if ListParticipations is set.
     */
    public function isSetListParticipations()
    {
        return !is_null($this->_fields['ListParticipations']['FieldValue']);
    }

    /**
     * Set the value of ListParticipations, return this.
     *
     * @param listParticipations
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withListParticipations($value)
    {
        $this->setListParticipations($value);
        return $this;
    }

    /**
     * Get the value of the ListMarketplaces property.
     *
     * @return MarketplaceWebServiceSellers_Model_ListMarketplaces ListMarketplaces.
     */
    public function getListMarketplaces()
    {
        return $this->_fields['ListMarketplaces']['FieldValue'];
    }

    /**
     * Set the value of the ListMarketplaces property.
     *
     * @param MarketplaceWebServiceSellers_Model_ListMarketplaces $value listMarketplaces
     * @return $this This instance
     */
    public function setListMarketplaces($value)
    {
        $this->_fields['ListMarketplaces']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListMarketplaces is set.
     *
     * @return bool if ListMarketplaces is set.
     */
    public function isSetListMarketplaces()
    {
        return !is_null($this->_fields['ListMarketplaces']['FieldValue']);
    }

    /**
     * Set the value of ListMarketplaces, return this.
     *
     * @param listMarketplaces
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withListMarketplaces($value)
    {
        $this->setListMarketplaces($value);
        return $this;
    }

}
