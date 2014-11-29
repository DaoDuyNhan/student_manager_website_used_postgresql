<?php
include "$BASE_PATH/models/connect_to_database_server.php";
class User{
  /* <==== Start: Get infomation of user by username ====> */
  public function get_info_user_by_username( $username ){
           $query = "select * from \"user\" where username = '$username';";
           return pg_query($query);
         }
  /* <==== End: Get infomation of user by username ====> */
  
  /* <==== Start: Change password of user ====> */
  public function changepassword_user ( $username, $newpassword ){
           $query = "update \"user\" set \"password\" = '$newpassword' where \"username\" = '$username';";
           return pg_query($query);
         }
  /* <==== End: Change password of user ====> */

  /* <==== Start: Get common infomation user by username ====> */
  public function get_common_info_by_username ( $username  ){
           $query = "select * from \"user\" where \"username\" = '$username';";
           return pg_query($query);
         }
}
?>
