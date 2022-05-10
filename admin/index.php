<?php
session_start();

require('config.php');

$email = $loginError = "";
date_default_timezone_set("Africa/Nairobi");
$timestamp = date("j M, Y, H:i");

if (isset($_POST['email']) and isset($_POST['password'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $password = md5($password);


    $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);

    //If the posted values are equal to the database values, then session will be created for the user.
    if ($count == 1) {

        //get user id
        $userid = "";
        while ($roww = mysqli_fetch_assoc($result)) {
            $userid = $roww['id'];
            $accountstatus = $roww['status'];
        }
        if ($accountstatus == 'active') {
            //log action
            $_user = $email;
            $_userid = $userid;
            $_action = 'logged in';
            require 'addlog.php';

            //start update last active
            $sqlll1 = "UPDATE admin SET last_active='$timestamp' WHERE email = '$email'";
            if (mysqli_query($conn, $sqlll1)) {
            } else {
            }
            //end update last active

            $_SESSION['admin_email'] = $email;
            header('Location: home.php');
        } else {
            $loginError = 'Access denied.';
        }
    } else {
        //If the login credentials doesn't match, show an error message.
        $loginError = "Invalid credentials. Please try again.";

        //log action
        $_user = $email;
        $_userid = "";
        $_action = 'log in attempted';
        require 'addlog.php';
    }

}
if (isset($_SESSION['admin_email'])) {
    header("Location: home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $sqllll = "SELECT * FROM profile WHERE id='1'";
    $resultttt = mysqli_query($conn, $sqllll);
    $companyname = '';
    while ($rowwww = $resultttt->fetch_array()) {
        $companyname = $rowwww["company_name"];

    }

    ?>

    <title><?php echo $companyname; ?></title>
    <link rel="stylesheet" href="assets/vendors/core/core.css">
    <link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.png"/>
</head>
<body>
<div class="main-wrapper">
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">
            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-8 col-xl-6 mx-auto">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-10 pl-md-0 mx-auto">
                                <div class="auth-form-wrapper px-4 py-5">
                                    <div class="text-center">
                                        <p class="noble-ui-logo d-block mb-2">
                                            <span>Admin </span><?php echo $companyname; ?>
                                        </p>
                                        <img src="assets/login/person.svg" class="img-lg img-fluid"/>
                                        <hr>
                                    </div>
                                    <h5 class="text-muted font-weight-normal mb-4">Log in to your account.</h5>
                                    <form action="" method="POST" class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address (admin)</label>
                                            <input type="text" name="email" value="<?php echo $email; ?>"
                                                   class="form-control" id="exampleInputEmail1"
                                                   placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password (admin)</label>
                                            <input type="password" name="password" class="form-control"
                                                   id="exampleInputPassword1"
                                                   autocomplete="current-password" placeholder="Password">
                                        </div>
                                        <?php if (!empty($loginError)) { ?>
                                            <div class="alert alert-danger"
                                                 role="alert"><?php echo $loginError; ?></div>
                                            <?php
                                        }
                                        ?>
                                        <div class="mt-3">
                                            <input type="submit" value="Login" name="submit"
                                                   class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">
                                        </div>
                                        <a href="resetpassword.php" class="d-block mt-3 text-right">Forgot password</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/vendors/core/core.js"></script>
<script src="assets/vendors/feather-icons/feather.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>