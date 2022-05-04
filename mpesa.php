<!DOCTYPE html>
<html lang="en">

<?php
//call the head tag
include 'head.php';
?>
<body>

<?php
$page = 'payments';
include "header.php";
?>

<?php
$success = $error = "";
date_default_timezone_set("Africa/Nairobi");
$timestamp = date("Y-m-d, H:i:s");
//process form data when received
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $reference = trim($_POST["reference"]);
    $reference = mysqli_real_escape_string($conn, $reference);

    $sqlINV = "INSERT INTO payments (reference) values ('$reference')";
    if (mysqli_query($conn, $sqlINV)) {

        $success = "Submitted successfully";
    } else {
        $error = "An error occurred: " . mysqli_error($conn);
    }
} else {
//    $error = "wert";
}
?>

<main id="main">
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container-fluid">
            <div class="section-title">
                <h2>Apply now</h2>
            </div>
            <div class="row">

                <div class="col-lg-4 align-items-stretch position-relative video-box"
                     style='background-image: url("assets/img/lipanampesa.jpg");'>
                </div>

                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-stretch">

                    <div class="content">
                        <h3>Secure online payment verification</strong></h3>

                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="text" name="reference" class="form-control" id="name"
                                           placeholder="Enter MPESA Reference Code"
                                           required>
                                </div>
                            </div>
                            <br>
                            <?php include 'admin/success-error-message.php'; ?>
                            <br>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Why Us Section -->


</main><!-- End #main -->

<?php
include "footer.php";
?>

</body>

</html>