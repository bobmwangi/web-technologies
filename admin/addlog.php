<?php
require_once 'get-ipaddress.php';
date_default_timezone_set("Africa/Nairobi");
$_timestamp = date("j M Y, H:i:s");
$_datestamp = date("Y-m-d");
$ipAddress = getIp();

$sqlll = "INSERT INTO logs (user, user_id, action, ip_source, datestamp, timestamp) values
        ('$_user','$_userid', '$_action', '$ipAddress', '$_datestamp', '$_timestamp')";
if (mysqli_query($conn, $sqlll)) {

} else {
}