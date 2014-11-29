<?php
include "$BASE_PATH/etc/config_database_server/config_database_server.php";

/* <==== Start: Connect to database server ====> */
/*
User two variable:
   - string_connect:
   - string_connect_failed:
*/
$string_connect = "host=$DB_SERVER user=$DB_USERNAME password=$DB_PASSWORD dbname=$DB_NAME";
$string_connect_failed = "Cannot connect to database server! Please check your connection!";
$connect_database_server = pg_connect($string_connect) or die ($string_connect_failed);
/* <==== End: Connect to database server ====> */

?>
