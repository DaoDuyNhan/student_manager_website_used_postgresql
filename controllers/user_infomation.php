<?php
session_start();
include $_SESSION['BASE_PATH']."/models/user/model_user.php";

$common_infomation = new User();
$common_info = pg_fetch_array($common_infomation->get_common_info_by_username($_SESSION['username']));
$student_id = $common_info['username'];
$student_name = $common_info['fullname'];
$student_birth = $common_info['birth'];
$student_course = $common_info['course'];
$student_class = $common_info['class'];
$student_training_system = $common_info['training_system'];
$student_level_school = $common_info['level_school'];
include $_SESSION['BASE_PATH']."/user_infomation.html";
?>