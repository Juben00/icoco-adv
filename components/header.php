<header id="header" class="header d-flex align-items-center fixed-top px-4">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <img src="./assets/img/icoco_black_ico.png" alt="" class="">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <?php
        if (isset($_SESSION['user'])) {
            echo '               
                <div class="dropdown">
                    <div class="profile-icon" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false" aria-label="User profile menu">'
                . htmlspecialchars($_SESSION['user']['first_name'][0]) . // Prevent XSS
                '</div>
                    <ul class="dropdown-menu shadow" aria-labelledby="profileDropdown">
                        <li><a id="profileLink" data-url="profile.php" class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Host Application</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Log out</a></li>
                    </ul>
                </div>';
        } else {
            // Display the "Get Started" button
            echo '<a class="btn-getstarted" id="getStartedBtn">Get Started</a>';
        }
        ?>
    </div>

</header>