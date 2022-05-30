<?php

define('APP_ID','428383645405725');
define('APP_SECRET','ce53d04857e9be189b49a0e772fdd3b8');
define('APP_VERSION','V2.5');
define('FB_ BASE_URL','http://localhost/cat/facebook_login/');
if (!session_id()) {
    session_start();
}
require_once(_dir_.'/facebook_login/vendor/autoload.php')

$fb = new facebook\facebool([
'APP_ID'=>APP_ID,
'APP_SECRET'=>APP_SECRET,
    'default_graph_version'=>APP_VERSION,
]);
$fb_helper = $fb->getRedirectLoginHelp();
try{
    if(isset($_SESSION['facebook_access_token']))
    {$accessToken = $_SESSION['facebook_access_token']};
    else {
        $accessToken-$fb_helper->getAccessToken();
    }
}
catch(facebookResponseException $e){
    echo 'facebook API Error'.$e->getMessage();
    exit;
}
catch(facebookSDKException $e){
    echo 'facebook sdk error:'. $e->getMessage();
    exit;
}



?>