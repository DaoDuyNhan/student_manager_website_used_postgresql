<?php
session_start();
include_once $_SESSION['BASE_PATH']."/models/user/model_user.php";

if ( isset ($_POST['changepassword']) )
{
  // Check password
  if ( $_SESSION['password'] == $_POST['oldpassword']){
    // Check new password is match with confirm password
    if( $_POST['newpassword'] == $_POST['confirmnewpassword'] ){
      $model_user = new User;
      $model_user->changepassword_user($_SESSION['username'], $_POST['newpassword']);
      // Check change password is success.
      $row = pg_fetch_array( $model_user->get_info_user_by_username($_SESSION['username']) );
      if ( $row['password'] == $_POST['newpassword'] ){
        $_SESSION['password'] = $row['password'];
        $sucess_changepassword = "Chúc mừng bạn đã thay đổi mật khẩu thành công!";
        include_once $_SESSION['BASE_PATH']."/changepassword.html";
      } else {
        $error_changepassword = "Có lỗi khi đổi mật khẩu của bạn, hãy thử lại!";
        include_once $_SESSION['BASE_PATH']."/changepassword.html";
      }
    } else {
      $error_changepassword = "Hai mật khẩu mới không giống nhau!";
      include_once $_SESSION['BASE_PATH']."/changepassword.html";
    }
  } else {
    $error_changepassword = "Mật khẩu cũ không đúng!";
    include_once $_SESSION['BASE_PATH']."/changepassword.html";
  }
} else {
  include_once $_SESSION['BASE_PATH']."/changepassword.html";
}

?>