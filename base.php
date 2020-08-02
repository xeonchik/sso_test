<?php

require_once 'vendor/autoload.php';

function initGoogleClient() : Google_Client
{
    // init configuration
    $clientID = '984379121479-vloa4e8006eruplvvn81mqk307scabik.apps.googleusercontent.com';
    $clientSecret = 'kNXvc426ApM6MMMKrXc6FqRu';
    $redirectUri = 'http://localhost:8000/redirect.php';

// create Client Request to access Google API
    $client = new Google_Client();
    $client->setClientId($clientID);
    $client->setClientSecret($clientSecret);
    $client->setRedirectUri($redirectUri);
    $client->addScope("email");
    $client->addScope("profile");

    return $client;
}

session_start();