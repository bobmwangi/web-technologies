<!DOCTYPE html>
<html lang="en">

<?php
//call the head tag
include 'head.php';
?>

<body>

<?php
$page = 'contacts';
include "header.php";
?>

<main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact Us</h2>
            </div>

            <div class="row mt-1 d-flex justify-content-end">

                <div class="col-lg-5">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Post:</h4>
                            <p>JKUAT,<br>Off Thika Rd, Juja, Thika</p>
                            <p>P.O. Box 62000 – 00200 Nairobi</p>
                        </div>
                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@jkuat.ac.ke</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+254 067-5870001-5</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div>
                        <iframe style="border:0; width: 100%; height: 350px;"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15956.379064105238!2d37.0117169!3d-1.0911971!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbefd8e40071d3352!2sJomo%20Kenyatta%20University%20Of%20Agriculture%20And%20Technology!5e0!3m2!1sen!2ske!4v1651572629671!5m2!1sen!2ske"
                                frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<?php
include "footer.php";
?>

</body>

</html>