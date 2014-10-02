<?php

namespace Netatmo\API\PHP\Api\Exception;

use Netatmo\API\PHP\Common\ErrorType;

class JsonErrorTypeException extends ClientException
{
    function __construct($code, $message)
    {
        parent::__construct($code, $message, ErrorType::JSON_ERROR_TYPE);
    }
}
