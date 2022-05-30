<?php 
require "../config.php";

if (isset($_SESSION['access_token'])){
 echo '<h1>loged in</h1>';
}
else{
    echo '<h1>not loged in</h1>';
}
