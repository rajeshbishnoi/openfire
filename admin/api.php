<?php
include "vendor/autoload.php";

// Create the Openfire Rest api object
$api = new Gidkom\OpenFireRestApi\OpenFireRestApi;

// Set the required config parameters
$api->secret = "X7K0TWG16qh8dQ5d";
$api->host = "bhuvan-gurukul.nrsc.gov.in";
$api->port = "9090";  // default 9090

// Optional parameters (showing default values)

$api->useSSL = false;
$api->plugin = "/plugins/restapi/v1";  // plugin 

?>