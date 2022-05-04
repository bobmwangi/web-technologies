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

<main id="main">
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">

            <div class="section-title">
                <h2>Payments</h2>
                <p>We accept Bank deposits via KCB Bank, Thika Branch, A/C: 0441564648960</p>
                <p>We also accept Mpesa: Paybill: 145145<br>Acc: Your Reg. No.</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="box">
                        <h3>Application Fee</h3>
                        <h4><sup>Ksh.</sup>2,000</h4>
                        <ul>
                            <li>One off</li>
                            <li>Payable via Mpesa/ Bank</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="mpesa.php" class="btn-buy">Pay Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="box">
                        <h3>Diploma</h3>
                        <h4><sup>$</sup>35,000<span> / semester</span></h4>
                        <ul>
                            <li>Tuition</li>
                            <li>Computing</li>
                            <li>Library</li>
                            <li>Exams</li>
                            <li>Accommodation</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Pay Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                    <div class="box featured">
                        <h3>Bachelor's</h3>
                        <h4><sup>Ksh.</sup>75,000<span> / semester</span></h4>
                        <ul>
                            <li>Tuition</li>
                            <li>Computing</li>
                            <li>Library</li>
                            <li>Exams</li>
                            <li>Accommodation</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="mpesa.php" class="btn-buy">Pay Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="box">
                        <span class="advanced">BPS</span>
                        <h3>Postgraduate</h3>
                        <h4><sup>Ksh.</sup>125,000<span> / semester</span></h4>
                        <ul>
                            <li>Tuition</li>
                            <li>Computing</li>
                            <li>Library</li>
                            <li>Exams</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="mpesa.php" class="btn-buy">Pay Now</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->

</main><!-- End #main -->

<?php
include "footer.php";
?>

</body>

</html>