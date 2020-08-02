<?php

require_once 'vendor/autoload.php';
require_once 'base.php';

$client = initGoogleClient();

if (!isset($_SESSION['access_token'])) {
    header('Location: /login.php');
    exit;
}

$client->setAccessToken($_SESSION['access_token']);

// get profile info
$google_oauth = new Google_Service_Oauth2($client);
$google_account_info = $google_oauth->userinfo->get();

print_r($google_account_info);
print_r($_SESSION);