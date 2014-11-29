<?php
session_start();
include "../etc/config.php";
session_destroy();
header("location:$BASE_URL");
?>