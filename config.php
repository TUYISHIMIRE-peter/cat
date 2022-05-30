<?php

use Facebook\Facebook;

session_start();
require "facebook_login/vendor/autoload.php";


$fb = new \Facebook\Facebook([
  'app_id' => '428383645405725',
  'app_secret' => 'ce53d04857e9be189b49a0e772fdd3b8',
  'default_graph_version' => 'v2.10',
]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("http://localhost/cat/facebook_login/dashboard.php");

try {
    
    $accessToken = $helper->getAccessToken();

    if(isset($accessToken)) {
        $_SESSION['access_token'] = (string) $accessToken;
    }


} catch (Exception $e) {
    print $e->getTraceAsString();
}
