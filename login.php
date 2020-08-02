<?php
require_once 'vendor/autoload.php';
require_once 'base.php';

$client = initGoogleClient();


echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
