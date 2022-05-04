<!DOCTYPE html>
<html lang="en">

<?php
//call the head tag
include 'head.php';
?>

<body>

<?php
$page = 'apply';
include "header.php";
?>

<main id="main">
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container-fluid">
            <div class="section-title">
                <h2>Apply now</h2>
            </div>
            <div class="row">

                <div class="col-lg-5 align-items-stretch position-relative video-box"
                     style='background-image: url("assets/img/jkuatcc.jpg");'>
                </div>

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
                    <?php
                    $success = $error = "";
                    date_default_timezone_set("Africa/Nairobi");
                    $timestamp = date("Y-m-d, H:i:s");
                    //process form data when received
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        $name = trim($_POST["name"]);
                        $name = mysqli_real_escape_string($conn, $name);

                        $email = trim($_POST["email"]);
                        $email = mysqli_real_escape_string($conn, $email);

                        $phone = trim($_POST["phone"]);
                        $phone = mysqli_real_escape_string($conn, $phone);

                        $idno = trim($_POST["idno"]);
                        $idno = mysqli_real_escape_string($conn, $idno);

                        $nationality = trim($_POST["nationality"]);
                        $nationality = mysqli_real_escape_string($conn, $nationality);

                        $course = trim($_POST["course"]);
                        $course = mysqli_real_escape_string($conn, $course);

                        $education = trim($_POST["educationlevel"]);
                        $education = mysqli_real_escape_string($conn, $education);

                        $sqlINV = "INSERT INTO applications (name, email, phone, national_id, education_level, nationality, course_applied, date_of_application )
values ('$name','$email', '$phone', '$idno', '$education','$nationality', '$course', '$timestamp')";
                        if (mysqli_query($conn, $sqlINV)) {

                            $last_id = $conn->insert_id;
                            $success = "Application submitted successfuly";
                            echo "<meta http-equiv='refresh' content='1'>";
                        } else {
                            $error = "An error occurred: " . mysqli_error($conn);
                        }
                    }
                    ?>
                    <div class="content">
                        <h3>Apply online by filling this form</h3>
                        <p>Secure online application</p>

                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label class="form-label">Full name</label>
                                    <input type="text" name="name" class="form-control"
                                           placeholder="Your full name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email"
                                           placeholder="Your email" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label class="form-label">Phone no.</label>
                                    <input type="text" class="form-control" name="phone"
                                           placeholder="Your phone number" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label class="form-label">National ID/ passport</label>
                                    <input type="text" class="form-control" name="idno"
                                           placeholder="Your Nat. ID. No/ Passport" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label class="form-label">Nationality</label>
                                    <input type="text" class="form-control" name="nationality"
                                           placeholder="Your nationality" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label class="form-label">Highest education level</label>
                                    <input type="text" class="form-control" name="educationlevel"
                                           placeholder="Your education level" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label class="form-label">Course applying for</label>
                                    <select name="course" class="form-control">
                                        <option value="Bsc. Information Technology">Bsc. Information Technology</option>
                                        <option value="Bsc. Computer Science">Bsc. Computer Science</option>
                                        <option value="Bsc. Computer Science & Mathematics">Bsc. Computer Science &
                                            Mathematics
                                        </option>
                                        <option value="Dip. Information Technology">Dip. Information Technology</option>
                                        <option value="Msc. Software Engineering">Msc. Software Engineering</option>
                                        <option value="Ph.D. Computer Science">Ph.D. Computer Science</option>
                                    </select>
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