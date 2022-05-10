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
                <h4 class="mb-3 mb-md-0">Sliders</h4>
                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sliders</li>
                    </ol>
                </nav>
            </div>
            <?php
            include 'get-sliders.php';
            ?>

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