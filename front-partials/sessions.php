<?php
include('config/constants.php');
$user_check=$_SESSION['user'];
$ses_sql=mysqli_query($conn,"SELECT id,user FROM users where user='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['user'];
$loggedin_id=$row['id'];
if(!isset($loggedin_session) || $loggedin_session==NULL) {
 echo "Go back";
 header('location:'.SITEURL.'index.php');
}
?>