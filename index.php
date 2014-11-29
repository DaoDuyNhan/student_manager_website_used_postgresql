<?php
session_start();
include "./etc/config.php";
$_SESSION['BASE_PATH'] = $BASE_PATH;
$_SESSION['BASE_URL'] = $BASE_URL;

if( isset ($_SESSION['username']) ){
    header( "Location:".$_SESSION['BASE_URL']."/controllers/user_loginsucess.php");
} else {
  header("Location:".$_SESSION['BASE_URL']."/controllers/user_login.php");
}
?>
