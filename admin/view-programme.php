<?php
include "head.php";
?>
<body>
<div class="main-wrapper">

    <?php
    include 'sidenav.php';
    ?>

    <div class="page-wrapper">

        <?php
        include 'top-navbar.php';
        ?>

        <div class="page-content">
            <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                <div>
                    <h4 class="mb-3 mb-md-0">Programme details</h4>
                </div>
                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="programmes.php">Programmes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Programmes details</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 grid-margin stretch-card">
                    <?php
                    if (isset($_GET['id']) && !empty($_GET['id'])) {
                        $id = $_GET["id"];
                        include 'get-programme-details.php';
                    }
                    ?>
                </div>
            </div>
            <?php
            include "footer.php";
            ?>

        </div>
    </div>

    <?php
    include 'pagejs.php';
    ?>
</body>
</html>