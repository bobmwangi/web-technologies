<?php
session_start();
include 'config.php';

date_default_timezone_set("Africa/Nairobi");
$timestamp = date("Y-m-d, H:i:s");
$timestamp3 = date("Y-m-d, H_i_s");
$timestamp_filename = date("d_m_Y-H_i_s~");
$timestamp2 = date("Y-m-d");
$datestamp = date("Y-m-d");

if ($_SESSION['admin_email']) {
    //if session exists,
    $admin_uemail = $_SESSION['admin_email'];

    $sqllll = "SELECT * FROM admin WHERE email='$admin_uemail'";
    if ($resultttt = $conn->query($sqllll)) {
        if ($resultttt->num_rows > 0) {

            while ($rowwww = $resultttt->fetch_array()) {
                $admin_uname = $rowwww["name"];
                $admin_uid = $rowwww["id"];
                $admiinlevel = $rowwww["admin_level"];
                $admiinemail = $rowwww["email"];
                $admiinlastactive = $rowwww["last_active"];

                $startdate = $rowwww["filter_startdate"];
                $enddate = $rowwww["filter_enddate"];
            }
        }
    }

} else {
    // // redirects if session doesnt exist
    header("location:index.php");
}

?>