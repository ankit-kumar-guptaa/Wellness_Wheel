<?php
// Get current page name
$current_page = basename($_SERVER['PHP_SELF']);
?>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="logo.png" alt="WellnessWheel Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'service.php') ? 'active' : ''; ?>" href="service.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'career.php') ? 'active' : ''; ?>" href="career.php">Careers</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a href="index.php#appointment" class="btn btn-custom">
                            <i class="fas fa-calendar-check btn-icon"></i> Book Now
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>