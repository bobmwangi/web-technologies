<!DOCTYPE html>
<html lang="en">

<?php
//call the head tag
include 'head.php';
?>

<body>

<?php
$page = 'academics';
include "header.php";

$ReadRD = "SELECT * FROM departments WHERE id= '1'";
$resRD = mysqli_query($conn, $ReadRD);

while ($rowRD = mysqli_fetch_assoc($resRD)) {
    $it = $rowRD['it'];
    $computing = $rowRD['computing'];
}
?>

<main id="main">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-title">
                <h2>Departments</h2>
                <p>SCIT is comprosed two departments</p>
            </div>

            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <i class="bi bi-device-ssd"></i>
                        <h4><a href="#">Department of IT</a></h4>
                        <p><?php echo $it; ?></p>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-laptop"></i>
                        <h4><a href="#">Department of Computing</a></h4>
                        <p><?php echo $computing; ?></p>
                    </div>
                </div>
            </div>
            <div class="section-title">
                <h2>Programmes</h2>
                <p>We have post diploma, undergraduate and postgraduate</p>
            </div>
            <div class="row">
                <?php
                $ReadPr1 = "SELECT * FROM programmes WHERE programme_type !='short course' ORDER BY programme_type ASC";
                $resPr1 = mysqli_query($conn, $ReadPr1);

                while ($rowPr1 = mysqli_fetch_assoc($resPr1)) {
                    $type = $rowPr1['programme_type'];
                    $pname = $rowPr1['programme_name'];
                    $pdesc = $rowPr1['programme_description'];

                    ?>
                    <div class="col-md-3 d-flex align-items-stretch">
                        <div class="icon-box">
                            <h4 style="margin-left: 0"><?php echo $pname ?></h4>
                            <p style="margin-left: 0"><?php echo $pdesc ?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="section-title">
                <h2>Short Courses</h2>
                <p>We have partnered with several tech companies to offer certification based course</p>
            </div>

            <div class="row">
                <?php
                $ReadPr2 = "SELECT * FROM programmes WHERE programme_type ='short course' ORDER BY programme_type ASC";
                $resPr2 = mysqli_query($conn, $ReadPr2);

                while ($rowPr2 = mysqli_fetch_assoc($resPr2)) {
                    $type2 = $rowPr2['programme_type'];
                    $pname2= $rowPr2['programme_name'];
                    $pdesc2 = $rowPr2['programme_description'];

                    ?>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="icon-box">
                            <h4 style="margin-left: 0"><?php echo $pname2 ?></h4>
                            <p style="margin-left: 0"><?php echo $pdesc2 ?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

        </div>
    </section><!-- End Services Section -->

</main><!-- End #main -->

<?php
include "footer.php";
?>

</body>

</html>