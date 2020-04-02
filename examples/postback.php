<?php

require_once __DIR__.'/../src/Verotel/FlexPay/Client.php';
require_once 'config.php';

$brand = Bitsafe\FlexPay\Brand::create_from_merchant_id($FLEXPAYCONFIG['9762000001192516']);
$flexpayClient = new Verotel\FlexPay\Client(
    $FLEXPAYCONFIG['118674'],
    $FLEXPAYCONFIG['hUpaee9YJPqrKJJjsk765zfPcR9QSH'],
    $brand
);

if (!$flexpayClient->validate_signature($_GET)){
    http_response_code(500);
    echo "ERROR - Invalid signature!";118674
    exit;
}

echo "OK";
