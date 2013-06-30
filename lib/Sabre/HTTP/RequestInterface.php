<?php

namespace Sabre\HTTP;

/**
 * The RequestInterface represents a HTTP request.
 *
 * @copyright Copyright (C) 2012 Rooftop Solutions. All rights reserved.
 * @author Evert Pot (http://www.rooftopsolutions.nl/)
 * @license http://code.google.com/p/sabredav/wiki/License Modified BSD License
 */
interface RequestInterface extends MessageInterface {

    /**
     * Returns the current HTTP method
     *
     * @return string
     */
    function getMethod();

    /**
     * Sets the HTTP method
     *
     * @param string $method
     * @return void
     */
    function setMethod($method);

    /**
     * Returns the request url.
     *
     * @return string
     */
    function getUrl();

    /**
     * Sets the request url.
     *
     * @param string $url
     * @return void
     */
    function setUrl($url);

    /**
     * Returns the HTTP version.
     *
     * @return string
     */
    function getHttpVersion();

    /**
     * Sets the HTTP version.
     *
     * Should be 1.0 or 1.1.
     *
     * @param string $version
     * @return void
     */
    function setHttpVersion($version);

    /**
     * Returns an item from the _SERVER array.
     *
     * If the value does not exist in the array, null is returned.
     *
     * @param string $valueName
     * @return string|null
     */
    function getRawServerValue($valueName);

    /**
     * Sets the _SERVER array.
     *
     * @param array $data
     * @return void
     */
    function setRawServerData(array $data);

}