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
 * @package  FBA Outbound Service MWS
 * @version  2010-10-01
 * Library Version: 2014-10-20
 * Generated: Thu Oct 30 16:36:58 GMT 2014
 */

/**
 * FBAOutboundServiceMWS_Model_ListAllFulfillmentOrdersByNextTokenResult
 *
 * Properties:
 * <ul>
 *
 * <li>NextToken: string</li>
 * <li>FulfillmentOrders: FBAOutboundServiceMWS_Model_FulfillmentOrderList</li>
 *
 * </ul>
 */
class FBAOutboundServiceMWS_Model_ListAllFulfillmentOrdersByNextTokenResult extends FBAOutboundServiceMWS_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
            'FulfillmentOrders' => array(
                'FieldValue' => null,
                'FieldType' => 'FBAOutboundServiceMWS_Model_FulfillmentOrderList'
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
     * Get the value of the FulfillmentOrders property.
     *
     * @return FBAOutboundServiceMWS_Model_FulfillmentOrderList FulfillmentOrders.
     */
    public function getFulfillmentOrders()
    {
        return $this->_fields['FulfillmentOrders']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentOrders property.
     *
     * @param FBAOutboundServiceMWS_Model_FulfillmentOrderList $value fulfillmentOrders
     * @return $this This instance
     */
    public function setFulfillmentOrders($value)
    {
        $this->_fields['FulfillmentOrders']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentOrders is set.
     *
     * @return bool if FulfillmentOrders is set.
     */
    public function isSetFulfillmentOrders()
    {
        return !is_null($this->_fields['FulfillmentOrders']['FieldValue']);
    }

    /**
     * Set the value of FulfillmentOrders, return this.
     *
     * @param fulfillmentOrders
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withFulfillmentOrders($value)
    {
        $this->setFulfillmentOrders($value);
        return $this;
    }

}
