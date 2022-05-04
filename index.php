<!DOCTYPE html>
<html lang="en">

<?php
//call the head tag
include 'head.php';
?>

<body>

<?php
$page = 'home';
include "header.php";
?>
<!-- ======= Sliders ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>to SCIT</span></h2>
                <p class="animate__animated animate__fadeInUp">The go-to School of Computing and Information
                    Technology</p>
                <a href="about.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Short Courses</h2>
                <p class="animate__animated animate__fadeInUp">Get to do short courses to boost your skill level in
                    IT.</p>
                <a href="academics.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                    More</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Upcoming IT Conference</h2>
                <p class="animate__animated animate__fadeInUp">Call for Abstracts. The deadline is 30 April 2022</p>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Bespoke Courses</a></h4>
                        <p class="description">We offer a custom tailored courses to fit in the 21st Centuty</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                     data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-user"></i></div>
                        <h4 class="title"><a href="">Qualified faculty</a></h4>
                        <p class="description">Get trained by world-reknown lecturers</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                     data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Practical skills</a></h4>
                        <p class="description">A state-of-the-art computer lab for practical classes</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                     data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-layer"></i></div>
                        <h4 class="title"><a href="">Mentorship</a></h4>
                        <p class="description">Each student is assigned a mentor to help them in their careers</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Icon Boxes Section -->

    <!-- ======= Our programmes ======= -->
    <section id="services" class="services" style="padding: 10px 0 30px 0 ">
        <div class="container">
            <div class="section-title">
                <h2>Our programmes</h2>
                <p>We have several programmes classified under.</p>
            </div>

            <div class="row">
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="icon-box">
                        <i class="bi bi-star"></i>
                        <h4>Diploma</h4>
                        <p>2-year programme leading to award of Diploma Certificate</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-book"></i>
                        <h4>Undergraduate</h4>
                        <p>A 4-year course leading to award of Bachelor's Degree</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-asterisk"></i>
                        <h4>Postgraduate</h4>
                        <p>Offering a Master's/ Doctorate degree in your field of interest</p>
                    </div>
                </div>
            </div>
            <div class="section-title">
                <a href="academics.php" class="btn-learn-more">Learn More</a>
            </div>
        </div>
    </section><!-- End programmes Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="row" data-aos="zoom-in">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Join us at SCIT</h3>
                    <p>We offer a seamless portal for online application for any of our courses. Ensure you have a
                        scanned copy of your latest certificates and National ID/ Passport.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="apply.php">Get started and apply</a>
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about" style="padding: 50px 0;">
        <div class="container">

            <div class="section-title">
                <h2>Message from the director</h2>
                <blockquote>Dr. A. N. Other, Ph.D</blockquote>
            </div>

            <div class="row content">
                <div class="col-lg-4">
                    <div class="pic"><img src="assets/img/gustavo.png" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-8">
                    <?php
                    $Read1 = "SELECT * FROM about_page WHERE id= '1'";
                    $res1 = mysqli_query($conn, $Read1);

                    while ($row1 = mysqli_fetch_assoc($res1)) {
                        $msg_director = $row1['message_from_director'];
                    }
                    ?>
                    <p><?php echo $msg_director; ?></p>
                    <a href="about.php" class="btn-learn-more">Learn More</a>
                </div>
            </div>

        </div>
    </section><!-- End Director msg -->

    <!-- ======= Our news ======= -->
    <section id="services" class="services" style="padding: 10px 0 30px 0 ">
        <div class="container">
            <div class="section-title">
                <h2>Latest News/ Campus Events</h2>
            </div>
            <div class="row">
                <?php
                $Read2 = "SELECT * FROM news ORDER BY id DESC LIMIT 4";
                $res2 = mysqli_query($conn, $Read2);

                while ($row2 = mysqli_fetch_assoc($res2)) {
                    $id2 = $row2['id'];
                    $title2 = $row2['title'];
                    $desc2 = $row2['description'];
                    ?>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" style="padding: 20px">
                            <h4 style="margin-left: 0"><a
                                        href="<?php echo "view-news.php?id=$id2" ?>"><?php echo $title2; ?></a></h4>
                            <p style="margin-left: 0"><?php echo $desc2; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section><!-- End News -->


</main><!-- End #main -->

<?php
include "footer.php";
?>

</body>

</html>