<!DOCTYPE html>
<html lang="en">

<?php
//call the head tag
include 'head.php';
?>

<body>

<?php
$page = 'about';
include "header.php";

$ReadRD = "SELECT * FROM about_page WHERE id= '1'";
$resRD = mysqli_query($conn, $ReadRD);

while ($rowRD = mysqli_fetch_assoc($resRD)) {
    $id = $rowRD['id'];
    $msg_director = $rowRD['message_from_director'];
    $q1 = $rowRD['question_1'];
    $q2 = $rowRD['question_2'];
    $q3 = $rowRD['question_3'];
    $a1 = $rowRD['answer_1'];
    $a2 = $rowRD['answer_2'];
    $a3 = $rowRD['answer_3'];
}
?>

<main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>About Us</h2>
                <p>The School of Computing and Information Technology is a school in the College of Pure and Applied
                    Sciences</p>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <div class="pic"><img src="assets/img/complab.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        <?php echo $msg_director; ?>
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="faq-list">
                <ul>
                    <li>
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                                                       data-bs-target="#faq-list-1"><?php echo $q1; ?><i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p><?php echo $a1; ?></p>
                        </div>
                    </li>

                    <li>
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                                                       data-bs-target="#faq-list-2" class="collapsed"><?php echo $q2; ?><i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p><?php echo $a2; ?></p>
                        </div>
                    </li>

                    <li>
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                                                       data-bs-target="#faq-list-3" class="collapsed"><?php echo $q3; ?><i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p><?php echo $a3; ?></p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->


</main><!-- End #main -->

<?php
include "footer.php";
?>

</body>

</html>