<?php

namespace Netatmo\API\PHP\Api\Exception;

class JsonErrorType extends ClientException
{
    function __construct($code, $message)
    {
        parent::__construct($code, $message, JSON_ERROR_TYPE);
    }
}
