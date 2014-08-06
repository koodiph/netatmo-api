<?php

namespace Netatmo\API\PHP\Api\Exception;

class NAInternalErrorType extends NAClientException
{
    function __construct($message)
    {
        parent::__construct(0, $message, INTERNAL_ERROR_TYPE);
    }
}
