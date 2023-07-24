<?php
include('includes/config.php');
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark box">
  <div class="container-fluid mx-4 my-1">
    <a class="navbar-brand fw-bold" href="index.php">
      <img src="images/logo.png" style="width: 32px;" alt="logo" class="me-2">
      <?php
        echo WEBSITE_NAME; // website name can be changed from config.php file in includes folder 
      ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav w-100 ">
        <span class="border-end me-2"></span>
        <li class="nav-item">
          <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active fw-bold' : '' ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($current_page == 'about.php') ? 'active fw-bold' : '' ?>" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($current_page == 'contact.php') ? 'active fw-bold' : '' ?>" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item color-white ms-md-auto btn badge <?php echo ($current_page == 'login.php') ? 'btn-danger' : 'btn-outline-danger' ?>">
          <a class="nav-link login-btn <?php echo ($current_page == 'login.php') ? 'active' : '' ?>" href="login.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>