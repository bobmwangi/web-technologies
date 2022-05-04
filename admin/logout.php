<?php
//session_start();
require 'session.php';
//log action
$_user = $admiinemail;
$_userid = $admin_uid;
$_action = 'logged out';
require 'addlog.php';

session_destroy();
header("Location: index.php");
?>