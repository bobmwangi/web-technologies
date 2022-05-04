<!-- ======= Top Bar ======= -->
<div id="topbar" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">scit@jkuat.ac.ke</a>
            <i class="bi bi-phone-fill phone-icon"></i> +254 067-5870001
        </div>
        <div class="cta d-none d-md-block">
            <a href="apply.php" class="scrollto">Apply now</a>
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

        <!--      <h1 class="logo"><a href="index.html">SCIT</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href=index.php class="logo"><img src="assets/img/scitlogo.png" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link <?php if ($page=='home') {
                        echo "active";
                    } ?>" href="index.php">Home</a></li>
                <li><a class="nav-link <?php if ($page=='about') {
                        echo "active";
                    } ?>" href="about.php">About</a></li>
                <li><a class="nav-link <?php if ($page=='academics') {
                        echo "active";
                    } ?>" href="academics.php">Academics</a></li>
                <li><a class="nav-link <?php if ($page=='staff') {
                        echo "active";
                    } ?>" href="staff.php">Staff</a></li>
                <li><a class="nav-link <?php if ($page=='apply') {
                        echo "active";
                    } ?>" href="apply.php">Apply now</a></li>
                <li><a class="nav-link <?php if ($page=='payments') {
                        echo "active";
                    } ?>" href="payments.php">Payments</a></li>
                <li><a class="nav-link <?php if ($page=='contacts') {
                        echo "active";
                    } ?>" href="contacts.php">Contacts</a></li>
                <li><a target="_blank" href="admin">Admin Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
