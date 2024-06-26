<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/relay.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.AddRelayDeviceRequest</code>
 */
class AddRelayDeviceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Relay DevEUI (EUI64).
     *
     * Generated from protobuf field <code>string relay_dev_eui = 1;</code>
     */
    protected $relay_dev_eui = '';
    /**
     * Device DevEUI (EUI64).
     *
     * Generated from protobuf field <code>string device_dev_eui = 2;</code>
     */
    protected $device_dev_eui = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $relay_dev_eui
     *           Relay DevEUI (EUI64).
     *     @type string $device_dev_eui
     *           Device DevEUI (EUI64).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\Relay::initOnce();
        parent::__construct($data);
    }

    /**
     * Relay DevEUI (EUI64).
     *
     * Generated from protobuf field <code>string relay_dev_eui = 1;</code>
     * @return string
     */
    public function getRelayDevEui()
    {
        return $this->relay_dev_eui;
    }

    /**
     * Relay DevEUI (EUI64).
     *
     * Generated from protobuf field <code>string relay_dev_eui = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRelayDevEui($var)
    {
        GPBUtil::checkString($var, True);
        $this->relay_dev_eui = $var;

        return $this;
    }

    /**
     * Device DevEUI (EUI64).
     *
     * Generated from protobuf field <code>string device_dev_eui = 2;</code>
     * @return string
     */
    public function getDeviceDevEui()
    {
        return $this->device_dev_eui;
    }

    /**
     * Device DevEUI (EUI64).
     *
     * Generated from protobuf field <code>string device_dev_eui = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceDevEui($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_dev_eui = $var;

        return $this;
    }

}
