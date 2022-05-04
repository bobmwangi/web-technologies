<!DOCTYPE html>
<html lang="en">

<?php
//call the head tag
include 'head.php';
?>

<body>

<?php
$page = 'staff';
include "header.php";
?>

<main id="main">
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Our faculty</h2>
                <p>We have a diverse team of lecturers, technicians and administrators to take you through your
                    studies.</p>
            </div>

            <div class="row">
                <?php
                $Read2 = "SELECT * FROM staff";
                $res2 = mysqli_query($conn, $Read2);

                while ($row2 = mysqli_fetch_assoc($res2)) {
                    $id2 = $row2['id'];
                    $name2 = $row2['name'];
                    $title2 = $row2['title'];
                    $desc2 = $row2['description'];
                    $img2 = $row2['image'];
                    ?>
                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="<?php echo "$img2"; ?>" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4><?php echo "$name2"; ?></h4>
                                <span><?php echo "$title2"; ?></span>
                                <p><?php echo "$desc2"; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

        </div>
    </section><!-- End Team Section -->

</main><!-- End #main -->

<?php
include "footer.php";
?>

</body>

</html>