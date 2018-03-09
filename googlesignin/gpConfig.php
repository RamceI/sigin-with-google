<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '141451955414-ln5poni4ssff3rsudosppkahfpofvd7s.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'SliWa9R_Ksusbz61XGwtYhBy'; //Google client secret
$redirectURL = 'http://localhost/googlesignin/index.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('http://localhost/googlesignin/gpConfig.php');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);

	//header('Location:index.php');
?>