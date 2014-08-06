#!/usr/bin/php
<?php

/**
 * Authentication to Netatmo Server with the user credentials grant
 */

namespace Netatmo\API\PHP\Example\Cli\Client;

use Netatmo\API\PHP\Api\Client;
use Netatmo\API\PHP\Api\Helper;
use Netatmo\API\PHP\Api\Exception\Client AS ClientException;
use Netatmo\API\PHP\Common;
use Netatmo\API\PHP\Example\Config;


$scope = NAScopes::SCOPE_READ_STATION;

$client = new NAApiClient(array(
    'client_id'     => $client_id,
    'client_secret' => $client_secret,
    'username'      => $test_username,
    'password'      => $test_password,
    'scope'         => $scope,
));
$helper = new NAApiHelper($client);

try {
    $tokens = $client->getAccessToken();
} catch(Api\Exception\NAClientException $ex) {
    echo "An error happend while trying to retrieve your tokens\n";
    exit(-1);
}

// Retrieve User Info :
$user = $helper->api("getuser", "POST");
echo ("-------------\n");
echo ("- User Info -\n");
echo ("-------------\n");
echo ("OK\n");
echo ("---------------\n");
echo ("- Device List -\n");
echo ("---------------\n");
$devicelist = $helper->simplifyDeviceList();
echo ("OK\n");
echo ("-----------------\n");
echo ("- Last Measures -\n");
echo ("-----------------\n");
$mesures = $helper->getLastMeasures();
print_r($mesures);
echo ("OK\n");
echo ("---------------------\n");
echo ("- Last Day Measures -\n");
echo ("---------------------\n");
$mesures = $helper->getAllMeasures(mktime() - 86400);
print_r($mesures);
echo ("OK\n");
