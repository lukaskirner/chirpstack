<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/device.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.EnqueueDeviceQueueItemRequest</code>
 */
class EnqueueDeviceQueueItemRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.api.DeviceQueueItem queue_item = 1;</code>
     */
    protected $queue_item = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Chirpstack\Api\DeviceQueueItem $queue_item
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.api.DeviceQueueItem queue_item = 1;</code>
     * @return \Chirpstack\Api\DeviceQueueItem|null
     */
    public function getQueueItem()
    {
        return $this->queue_item;
    }

    public function hasQueueItem()
    {
        return isset($this->queue_item);
    }

    public function clearQueueItem()
    {
        unset($this->queue_item);
    }

    /**
     * Generated from protobuf field <code>.api.DeviceQueueItem queue_item = 1;</code>
     * @param \Chirpstack\Api\DeviceQueueItem $var
     * @return $this
     */
    public function setQueueItem($var)
    {
        GPBUtil::checkMessage($var, \Chirpstack\Api\DeviceQueueItem::class);
        $this->queue_item = $var;

        return $this;
    }

}
