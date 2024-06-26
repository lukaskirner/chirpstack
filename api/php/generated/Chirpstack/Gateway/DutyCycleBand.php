<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gw/gw.proto

namespace Chirpstack\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gw.DutyCycleBand</code>
 */
class DutyCycleBand extends \Google\Protobuf\Internal\Message
{
    /**
     * Band name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Min frequency for this band.
     *
     * Generated from protobuf field <code>uint32 frequency_min = 2;</code>
     */
    protected $frequency_min = 0;
    /**
     * Max frequency for this band.
     *
     * Generated from protobuf field <code>uint32 frequency_max = 3;</code>
     */
    protected $frequency_max = 0;
    /**
     * Max. allowed load.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration load_max = 4;</code>
     */
    protected $load_max = null;
    /**
     * Tracked load (within the window of the regionlation).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration load_tracked = 5;</code>
     */
    protected $load_tracked = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Band name.
     *     @type int $frequency_min
     *           Min frequency for this band.
     *     @type int $frequency_max
     *           Max frequency for this band.
     *     @type \Google\Protobuf\Duration $load_max
     *           Max. allowed load.
     *     @type \Google\Protobuf\Duration $load_tracked
     *           Tracked load (within the window of the regionlation).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Gateway\Gw::initOnce();
        parent::__construct($data);
    }

    /**
     * Band name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Band name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Min frequency for this band.
     *
     * Generated from protobuf field <code>uint32 frequency_min = 2;</code>
     * @return int
     */
    public function getFrequencyMin()
    {
        return $this->frequency_min;
    }

    /**
     * Min frequency for this band.
     *
     * Generated from protobuf field <code>uint32 frequency_min = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFrequencyMin($var)
    {
        GPBUtil::checkUint32($var);
        $this->frequency_min = $var;

        return $this;
    }

    /**
     * Max frequency for this band.
     *
     * Generated from protobuf field <code>uint32 frequency_max = 3;</code>
     * @return int
     */
    public function getFrequencyMax()
    {
        return $this->frequency_max;
    }

    /**
     * Max frequency for this band.
     *
     * Generated from protobuf field <code>uint32 frequency_max = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFrequencyMax($var)
    {
        GPBUtil::checkUint32($var);
        $this->frequency_max = $var;

        return $this;
    }

    /**
     * Max. allowed load.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration load_max = 4;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getLoadMax()
    {
        return $this->load_max;
    }

    public function hasLoadMax()
    {
        return isset($this->load_max);
    }

    public function clearLoadMax()
    {
        unset($this->load_max);
    }

    /**
     * Max. allowed load.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration load_max = 4;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLoadMax($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->load_max = $var;

        return $this;
    }

    /**
     * Tracked load (within the window of the regionlation).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration load_tracked = 5;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getLoadTracked()
    {
        return $this->load_tracked;
    }

    public function hasLoadTracked()
    {
        return isset($this->load_tracked);
    }

    public function clearLoadTracked()
    {
        unset($this->load_tracked);
    }

    /**
     * Tracked load (within the window of the regionlation).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration load_tracked = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLoadTracked($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->load_tracked = $var;

        return $this;
    }

}
