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
 * MarketplaceWebServiceProducts_Model_LowestOfferListingType
 *
 * Properties:
 * <ul>
 *
 * <li>Qualifiers: MarketplaceWebServiceProducts_Model_QualifiersType</li>
 * <li>NumberOfOfferListingsConsidered: int</li>
 * <li>SellerFeedbackCount: int</li>
 * <li>Price: MarketplaceWebServiceProducts_Model_PriceType</li>
 * <li>MultipleOffersAtLowestPrice: string</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProducts_Model_LowestOfferListingType extends MarketplaceWebServiceProducts_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'Qualifiers' => array(
                'FieldValue' => null,
                'FieldType' => 'MarketplaceWebServiceProducts_Model_QualifiersType'
            ),
            'NumberOfOfferListingsConsidered' => array('FieldValue' => null, 'FieldType' => 'int'),
            'SellerFeedbackCount' => array('FieldValue' => null, 'FieldType' => 'int'),
            'Price' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_PriceType'),
            'MultipleOffersAtLowestPrice' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Qualifiers property.
     *
     * @return MarketplaceWebServiceProducts_Model_QualifiersType Qualifiers.
     */
    public function getQualifiers()
    {
        return $this->_fields['Qualifiers']['FieldValue'];
    }

    /**
     * Set the value of the Qualifiers property.
     *
     * @param MarketplaceWebServiceProducts_Model_QualifiersType $value qualifiers
     * @return $this This instance
     */
    public function setQualifiers($value)
    {
        $this->_fields['Qualifiers']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Qualifiers is set.
     *
     * @return bool if Qualifiers is set.
     */
    public function isSetQualifiers()
    {
        return !is_null($this->_fields['Qualifiers']['FieldValue']);
    }

    /**
     * Set the value of Qualifiers, return this.
     *
     * @param qualifiers
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withQualifiers($value)
    {
        $this->setQualifiers($value);
        return $this;
    }

    /**
     * Get the value of the NumberOfOfferListingsConsidered property.
     *
     * @return Integer NumberOfOfferListingsConsidered.
     */
    public function getNumberOfOfferListingsConsidered()
    {
        return $this->_fields['NumberOfOfferListingsConsidered']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfOfferListingsConsidered property.
     *
     * @param int $value numberOfOfferListingsConsidered
     * @return $this This instance
     */
    public function setNumberOfOfferListingsConsidered($value)
    {
        $this->_fields['NumberOfOfferListingsConsidered']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NumberOfOfferListingsConsidered is set.
     *
     * @return bool if NumberOfOfferListingsConsidered is set.
     */
    public function isSetNumberOfOfferListingsConsidered()
    {
        return !is_null($this->_fields['NumberOfOfferListingsConsidered']['FieldValue']);
    }

    /**
     * Set the value of NumberOfOfferListingsConsidered, return this.
     *
     * @param numberOfOfferListingsConsidered
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withNumberOfOfferListingsConsidered($value)
    {
        $this->setNumberOfOfferListingsConsidered($value);
        return $this;
    }

    /**
     * Get the value of the SellerFeedbackCount property.
     *
     * @return int SellerFeedbackCount.
     */
    public function getSellerFeedbackCount()
    {
        return $this->_fields['SellerFeedbackCount']['FieldValue'];
    }

    /**
     * Set the value of the SellerFeedbackCount property.
     *
     * @param int $value sellerFeedbackCount
     * @return $this This instance
     */
    public function setSellerFeedbackCount($value)
    {
        $this->_fields['SellerFeedbackCount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerFeedbackCount is set.
     *
     * @return bool if SellerFeedbackCount is set.
     */
    public function isSetSellerFeedbackCount()
    {
        return !is_null($this->_fields['SellerFeedbackCount']['FieldValue']);
    }

    /**
     * Set the value of SellerFeedbackCount, return this.
     *
     * @param sellerFeedbackCount
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withSellerFeedbackCount($value)
    {
        $this->setSellerFeedbackCount($value);
        return $this;
    }

    /**
     * Get the value of the Price property.
     *
     * @return MarketplaceWebServiceProducts_Model_PriceType Price.
     */
    public function getPrice()
    {
        return $this->_fields['Price']['FieldValue'];
    }

    /**
     * Set the value of the Price property.
     *
     * @param MarketplaceWebServiceProducts_Model_PriceType $value price
     * @return $this This instance
     */
    public function setPrice($value)
    {
        $this->_fields['Price']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Price is set.
     *
     * @return bool if Price is set.
     */
    public function isSetPrice()
    {
        return !is_null($this->_fields['Price']['FieldValue']);
    }

    /**
     * Set the value of Price, return this.
     *
     * @param price
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withPrice($value)
    {
        $this->setPrice($value);
        return $this;
    }

    /**
     * Get the value of the MultipleOffersAtLowestPrice property.
     *
     * @return String MultipleOffersAtLowestPrice.
     */
    public function getMultipleOffersAtLowestPrice()
    {
        return $this->_fields['MultipleOffersAtLowestPrice']['FieldValue'];
    }

    /**
     * Set the value of the MultipleOffersAtLowestPrice property.
     *
     * @param string $value multipleOffersAtLowestPrice
     * @return $this This instance
     */
    public function setMultipleOffersAtLowestPrice($value)
    {
        $this->_fields['MultipleOffersAtLowestPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MultipleOffersAtLowestPrice is set.
     *
     * @return bool if MultipleOffersAtLowestPrice is set.
     */
    public function isSetMultipleOffersAtLowestPrice()
    {
        return !is_null($this->_fields['MultipleOffersAtLowestPrice']['FieldValue']);
    }

    /**
     * Set the value of MultipleOffersAtLowestPrice, return this.
     *
     * @param multipleOffersAtLowestPrice
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withMultipleOffersAtLowestPrice($value)
    {
        $this->setMultipleOffersAtLowestPrice($value);
        return $this;
    }

}
