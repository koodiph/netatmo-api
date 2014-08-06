<?php

namespace Netatmo\API\PHP\Api\Exception;

class NotLoggedErrorType extends ClientException
{
    function __construct($code, $message)
    {
        parent::__construct($code, $message, NOT_LOGGED_ERROR_TYPE);
    }
}
