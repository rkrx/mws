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
 * MarketplaceWebServiceOrders_Model_GetServiceStatusResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Status: string</li>
 * <li>Timestamp: string</li>
 * <li>MessageId: string</li>
 * <li>Messages: array</li>
 *
 * </ul>
 */
 class MarketplaceWebServiceOrders_Model_GetServiceStatusResult extends MarketplaceWebServiceOrders_Model
 {
    public function __construct($data = null)
    {
        $this->_fields = [
            'Status' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Timestamp' => ['FieldValue' => null, 'FieldType' => 'string'],
            'MessageId' => ['FieldValue' => null, 'FieldType' => 'string'],
            'Messages' => [
                'FieldValue' => [],
                'FieldType' => ['MarketplaceWebServiceOrders_Model_Message'],
                'ListMemberName' => 'Message'
            ],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the Status property.
     *
     * @return string Status.
     */
    public function getStatus()
    {
        return $this->_fields['Status']['FieldValue'];
    }

    /**
     * Set the value of the Status property.
     *
     * @param string status
     * @return $this
     */
    public function setStatus($value)
    {
        $this->_fields['Status']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Status is set.
     *
     * @return bool `true` if Status is set.
     */
    public function isSetStatus()
    {
        return ($this->_fields['Status']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of Status, return this.
     *
     * @param bool $value
     * @return $this
     */
    public function withStatus($value)
    {
        $this->setStatus($value);
        return $this;
    }

    /**
     * Get the value of the Timestamp property.
     *
     * @return string Timestamp.
     */
    public function getTimestamp()
    {
        return $this->_fields['Timestamp']['FieldValue'];
    }

    /**
     * Set the value of the Timestamp property.
     *
     * @param string $value
     * @return $this
     */
    public function setTimestamp($value)
    {
        $this->_fields['Timestamp']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Timestamp is set.
     *
     * @return bool `true` if Timestamp is set.
     */
    public function isSetTimestamp()
    {
        return ($this->_fields['Timestamp']['FieldValue'] ?? null) !== null;
    }

    /**
     * Set the value of Timestamp, return this.
     *
     * @param string $value
     * @return $this
     */
    public function withTimestamp($value)
    {
        $this->setTimestamp($value);
        return $this;
    }

    /**
     * Get the value of the MessageId property.
     *
     * @return string MessageId.
     */
    public function getMessageId()
    {
        return $this->_fields['MessageId']['FieldValue'];
    }

    /**
     * Set the value of the MessageId property.
     *
     * @param string messageId
     * @return $this
     */
    public function setMessageId($value)
    {
        $this->_fields['MessageId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MessageId is set.
     *
     * @return bool `true` if MessageId is set.
     */
    public function isSetMessageId()
    {
        return $this->_fields['MessageId']['FieldValue'] !== null;
    }

    /**
     * Set the value of MessageId, return this.
     *
     * @param string $value
     * @return $this
     */
    public function withMessageId($value)
    {
        $this->setMessageId($value);
        return $this;
    }

    /**
     * Get the value of the Messages property.
     *
     * @return MarketplaceWebServiceOrders_Model_Message[] Messages.
     */
    public function getMessages()
    {
        if ($this->_fields['Messages']['FieldValue'] === null) {
            $this->_fields['Messages']['FieldValue'] = [];
        }
        return $this->_fields['Messages']['FieldValue'];
    }

    /**
     * Set the value of the Messages property.
     *
     * @param array messages
     * @return $this
     */
    public function setMessages($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['Messages']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear Messages.
     */
    public function unsetMessages()
    {
        $this->_fields['Messages']['FieldValue'] = array();
    }

    /**
     * Check to see if Messages is set.
     *
     * @return bool `true` if Messages is set.
     */
    public function isSetMessages()
    {
                return !empty($this->_fields['Messages']['FieldValue']);
            }

    /**
     * Add values for Messages, return this.
     *
     * @param string ...$messages
     * @return $this
     */
    public function withMessages(...$messages)
    {
        $this->_fields['Messages']['FieldValue'] = $messages;
        return $this;
    }

}
