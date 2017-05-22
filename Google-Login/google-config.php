<?php
include_once 'src/google/Google_Client.php';
include_once 'src/google/contrib/Google_Oauth2Service.php';


$clientId = '193014254316-73upq0vlv8c21t9bi65h3crvvni3hef5.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'Wv2CK3zpqA89rbUVsKlXzxSX'; //Google client secret
$gRedirectURL = 'http://www.mytest.me/Google-Login/google-login.php'; //Callback URL
// header('Location:'.filter_var($gRedirectURL,FILTER_SANITIZE_URL));

$gClient = new Google_Client();
$gClient->setApplicationName('Web client 1');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($gRedirectURL);
$gClient->setAccessType('online');
$gClient->setApprovalPrompt('auto') ;
$google_oauthV2 = new Google_Oauth2Service($gClient);
$gloginUrl = $gClient->createAuthUrl();
?>
