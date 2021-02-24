<?php

namespace Samuraee\EasyCurl;

/**
 * EasyCurl cURL Exceptions class
 */
class CurlException extends Exception
{
    /**
     * @param resource $curlHandler
     */
    public function __construct($curlHandler)
    {
        parent::__construct(curl_error($curlHandler), curl_errno($curlHandler));
    }
}
