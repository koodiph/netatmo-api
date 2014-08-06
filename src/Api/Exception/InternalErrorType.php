<?php

namespace Netatmo\API\PHP\Api\Exception;

class InternalErrorType extends ClientException
{
    function __construct($message)
    {
        parent::__construct(0, $message, INTERNAL_ERROR_TYPE);
    }
}
