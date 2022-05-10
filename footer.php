<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://jkuat.ac.ke">JKUAT Main
                                Website</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://www.icta.go.ke/">ICT
                                Authority</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://helb.co.ke">HELB</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://cisco.com">CISCO</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://microsoft.com">Microsoft</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        Jomo Kenyatta University of Agriculture and Technology,<br>
                        Off Thika Rd, Juja, Thika <br>
                        Address: P.O. Box 62000 – 00200 Nairobi<br>
                        <strong>Phone:</strong> +254 067-5870001-5,<br>
                        <strong>Email:</strong> info@jkuat.ac.ke<br>
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 footer-info">
                    <h3>About The Department of SCIT</h3>
                    <?php
                    $Read111 = "SELECT * FROM about_page WHERE id= '1'";
                    $res111 = mysqli_query($conn, $Read111);

                    while ($row111 = mysqli_fetch_assoc($res111)) {
                        $msg_director1 = $row111['message_from_director'];
                    }
                    ?>
                    <p><?php echo $msg_director1; ?></p>
                    <div class="social-links mt-3">
                        <a href="https://twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="https://fb.com" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="https://instagram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="https://linkedin.com" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>KenyaWeb Technologies</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by Kelvin Mwangi
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>