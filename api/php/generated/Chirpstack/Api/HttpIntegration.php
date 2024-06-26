<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/application.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.HttpIntegration</code>
 */
class HttpIntegration extends \Google\Protobuf\Internal\Message
{
    /**
     * Application ID (UUID).
     *
     * Generated from protobuf field <code>string application_id = 1;</code>
     */
    protected $application_id = '';
    /**
     * HTTP headers to set when making requests.
     *
     * Generated from protobuf field <code>map<string, string> headers = 2;</code>
     */
    private $headers;
    /**
     * Payload encoding.
     *
     * Generated from protobuf field <code>.api.Encoding encoding = 3;</code>
     */
    protected $encoding = 0;
    /**
     * Event endpoint URL.
     * The HTTP integration will POST all events to this enpoint. The request
     * will contain a query parameters "event" containing the type of the
     * event.
     *
     * Generated from protobuf field <code>string event_endpoint_url = 4;</code>
     */
    protected $event_endpoint_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $application_id
     *           Application ID (UUID).
     *     @type array|\Google\Protobuf\Internal\MapField $headers
     *           HTTP headers to set when making requests.
     *     @type int $encoding
     *           Payload encoding.
     *     @type string $event_endpoint_url
     *           Event endpoint URL.
     *           The HTTP integration will POST all events to this enpoint. The request
     *           will contain a query parameters "event" containing the type of the
     *           event.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\Application::initOnce();
        parent::__construct($data);
    }

    /**
     * Application ID (UUID).
     *
     * Generated from protobuf field <code>string application_id = 1;</code>
     * @return string
     */
    public function getApplicationId()
    {
        return $this->application_id;
    }

    /**
     * Application ID (UUID).
     *
     * Generated from protobuf field <code>string application_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setApplicationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->application_id = $var;

        return $this;
    }

    /**
     * HTTP headers to set when making requests.
     *
     * Generated from protobuf field <code>map<string, string> headers = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * HTTP headers to set when making requests.
     *
     * Generated from protobuf field <code>map<string, string> headers = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setHeaders($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->headers = $arr;

        return $this;
    }

    /**
     * Payload encoding.
     *
     * Generated from protobuf field <code>.api.Encoding encoding = 3;</code>
     * @return int
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Payload encoding.
     *
     * Generated from protobuf field <code>.api.Encoding encoding = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEncoding($var)
    {
        GPBUtil::checkEnum($var, \Chirpstack\Api\Encoding::class);
        $this->encoding = $var;

        return $this;
    }

    /**
     * Event endpoint URL.
     * The HTTP integration will POST all events to this enpoint. The request
     * will contain a query parameters "event" containing the type of the
     * event.
     *
     * Generated from protobuf field <code>string event_endpoint_url = 4;</code>
     * @return string
     */
    public function getEventEndpointUrl()
    {
        return $this->event_endpoint_url;
    }

    /**
     * Event endpoint URL.
     * The HTTP integration will POST all events to this enpoint. The request
     * will contain a query parameters "event" containing the type of the
     * event.
     *
     * Generated from protobuf field <code>string event_endpoint_url = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEventEndpointUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_endpoint_url = $var;

        return $this;
    }

}
