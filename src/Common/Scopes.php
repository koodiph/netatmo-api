<?php

namespace Netatmo\API\PHP\Common;

class NAScopes
{
    const SCOPE_READ_STATION = 'read_station';
    const SCOPE_READ_THERM   = 'read_thermostat';
    const SCOPE_WRITE_THERM  = 'write_thermostat';

    static $validScopes = array(
        NAScopes::SCOPE_READ_STATION,
        NAScopes::SCOPE_WRITE_STATION,
        NAScopes::SCOPE_READ_THERM,
        NAScopes::SCOPE_WRITE_THERM,
    );
}
