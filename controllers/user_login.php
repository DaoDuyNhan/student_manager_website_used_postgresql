<?php
session_start();
include_once "../etc/config.php";
include_once "$BASE_PATH/models/user/model_user.php";
/* <==== Check is login? ====> */
/* If user is login => goto homepage
   else => login
*/
if( isset($_SESSION['username']) ){
  echo "Casi gi the nay";
header( "$BASE_PATH/controllers/user_loginsucess.php");
} else {

  /* <==== Start: Process login ====> */
  /* When submit is set, check username and password.
     If the are null, send a error mesage!
     Else, continue process to login. 
  */

  if( isset( $_POST['submit'] ) ) {
    // Check username and password
    if( $_POST['username'] != '' && $_POST['password'] != ''){
      /* Check user name and password, if they are true, send a message login Success else send a error */
      $model_user = new User;
      $r = pg_num_rows( $model_user->get_info_user_by_username($_POST['username']));
      if( $r != 0){
        // Check password
        $row = pg_fetch_array( $model_user->get_info_user_by_username($_POST['username']) );
        if( $row['password'] == $_POST['password']){
          $_SESSION['username'] = $row['username'];
          $_SESSION['password'] = $row['password'];
          $_SESSION['fullname'] = $row['fullname'];
          header("Location:$BASE_URL"."controllers/user_loginsucess.php");
        } else {
          $error_login = "Mật khẩu không đúng!";
          /* Include view */
          include_once "$BASE_PATH/login.html";
          //header( "location:$BASE_URL/controllers/user_login.php");
        }
      } else {
        $error_login = "Tài khoản không hợp lệ!";
        /* Include view */
        include_once "$BASE_PATH/login.html";
        //header( "location:$BASE_URL/controllers/user_login.php");
      }
    } else {
      $error_login = "Bạn hãy nhập tài khoản và mật khẩu!";
      /* Include view */
      include_once "$BASE_PATH/login.html";
      //header( "location:$BASE_URL/controllers/user_login.php");
    }
  } else {
    /* Include view */
    include_once "$BASE_PATH/login.html";
    //header( "location:$BASE_URL/controllers/user_login.php");
  }
}
  /* <==== End: Process login ====> */
?>
