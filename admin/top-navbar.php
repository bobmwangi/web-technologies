<!-- partial:partials/_navbar.html -->
<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">
        <form class="search-form">
            <h5><?php echo "Hi $admin_uname,"; ?></h5>
        </form>
        <ul class="navbar-nav">
            <li class="nav-item dropdown nav-profile">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="user"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="profileDropdown">
                    <div class="dropdown-header d-flex flex-column align-items-center">
                        <div class="figure mb-3">
                            <i data-feather="user"></i>
                        </div>
                        <div class="info text-center">
                            <p class="name font-weight-bold mb-0"><?php echo $admin_uname; ?></p>
                            <p class="email text-muted mb-3"><?php echo $admin_uemail; ?></p>
                        </div>
                    </div>
                    <div class="dropdown-body">
                        <ul class="profile-nav p-0 pt-3">
                            <li class="nav-item">
                                <a href="profile.php" class="nav-link">
                                    <i data-feather="user"></i>
                                    <span>My account</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a type="button" data-toggle="modal" data-target="#logoutmodal" class="nav-link">
                                    <i data-feather="log-out"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- partial -->