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
 * FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsResponse
 *
 * Properties:
 * <ul>
 *
 * <li>GetPackageTrackingDetailsResult: FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsResult</li>
 * <li>ResponseMetadata: FBAOutboundServiceMWS_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: FBAOutboundServiceMWS_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsResponse extends FBAOutboundServiceMWS_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'GetPackageTrackingDetailsResult' => array(
                'FieldValue' => null,
                'FieldType' => 'FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsResult'
            ),
            'ResponseMetadata' => array(
                'FieldValue' => null,
                'FieldType' => 'FBAOutboundServiceMWS_Model_ResponseMetadata'
            ),
            'ResponseHeaderMetadata' => array(
                'FieldValue' => null,
                'FieldType' => 'FBAOutboundServiceMWS_Model_ResponseHeaderMetadata'
            ),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the GetPackageTrackingDetailsResult property.
     *
     * @return FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsResult GetPackageTrackingDetailsResult.
     */
    public function getGetPackageTrackingDetailsResult()
    {
        return $this->_fields['GetPackageTrackingDetailsResult']['FieldValue'];
    }

    /**
     * Set the value of the GetPackageTrackingDetailsResult property.
     *
     * @param FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsResult $value getPackageTrackingDetailsResult
     * @return $this This instance
     */
    public function setGetPackageTrackingDetailsResult($value)
    {
        $this->_fields['GetPackageTrackingDetailsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetPackageTrackingDetailsResult is set.
     *
     * @return bool if GetPackageTrackingDetailsResult is set.
     */
    public function isSetGetPackageTrackingDetailsResult()
    {
        return !is_null($this->_fields['GetPackageTrackingDetailsResult']['FieldValue']);
    }

    /**
     * Set the value of GetPackageTrackingDetailsResult, return this.
     *
     * @param getPackageTrackingDetailsResult
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withGetPackageTrackingDetailsResult($value)
    {
        $this->setGetPackageTrackingDetailsResult($value);
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return FBAOutboundServiceMWS_Model_ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param FBAOutboundServiceMWS_Model_ResponseMetadata $value responseMetadata
     * @return $this This instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return bool if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return FBAOutboundServiceMWS_Model_ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param FBAOutboundServiceMWS_Model_ResponseHeaderMetadata $value responseHeaderMetadata
     * @return $this This instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return bool if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
        return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }

    /**
     * Construct FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     * @return FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsResponse
     * @throws Exception
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetPackageTrackingDetailsResponse']");
        if ($response->length == 1) {
            return new FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsResponse from provided XML. 
                                  Make sure that GetPackageTrackingDetailsResponse is a root element");
        }
    }

    /**
     * XML Representation for this object
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<GetPackageTrackingDetailsResponse xmlns=\"http://mws.amazonaws.com/FulfillmentOutboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetPackageTrackingDetailsResponse>";
        return $xml;
    }

}
