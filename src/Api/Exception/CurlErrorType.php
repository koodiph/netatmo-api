<?php

namespace Netatmo\API\PHP\Api\Exception;

class CurlErrorType extends ClientException
{
    function __construct($code, $message)
    {
        parent::__construct($code, $message, CURL_ERROR_TYPE);
    }
}

