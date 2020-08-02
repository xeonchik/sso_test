<?php
require_once 'vendor/autoload.php';

require_once 'base.php';

$client = initGoogleClient();


// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    $_SESSION['access_token'] = $token['access_token'];
    $_SESSION['id_token'] = $token['id_token'];
    $_SESSION['expires'] = time() + $token['expires_in'];
}
?>