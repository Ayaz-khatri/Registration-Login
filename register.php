<?php 
  include('logics/init-session.php'); // start session if it's not already started
	include('logics/check-loggedin-user.php'); // check if user is already login
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Register</title>
  <?php include('includes/head-contents.php'); ?>
</head>

<body>

  <?php include('includes/navbar.php'); ?>
  <?php include('includes/messages.php'); ?>


  <div class="container col-xl-10 col-xxl-8 px-4 py-1">
    <div class="row align-items-start g-lg-5 py-5">
      <div class="col-lg-6 text-center text-lg-start">
        <img src="images/register.png" class="img-fluid d-none d-md-block mx-auto" alt="Register">
      </div>
      <div class="col-md-10 mx-auto col-lg-6">
        <form class="p-4 p-md-5 border rounded-3 bg-white box needs-validation" onsubmit="return validateForm()" novalidate action="logics/register-user.php" method="POST">
          <h3 class="display-6 fw-bold lh-1 mb-3">Register</h3>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingName" name="username" placeholder="Jhon Doe" required>
            <label for="floatingName">Username</label>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="name@example.com" required>
            <label for="floatingEmail">Email</label>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Correct email format is required.</div>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required oninput=" checkPasswordsMatch(); checkPasswordStrength();">
            <label for="floatingPassword" class="w-100">Password<i class="fa-regular text-secondary fa-eye eyeButton ms-3" id="eyeButton" onclick="togglePassword();"></i></label>
            
            <!--Password Strength Progress Bar -->
            <div class="progress mt-2" style="height: 5px; cursor:help;" id="progressBarDiv" title="Password must have at least one small alphabet, one capital alphabet, one special character, one number, and be at least 8 characters long." data-bs-toggle="tooltip">
              <div class="progress-bar" role="progressbar" id="passwordStrengthBar" style="width: 0%;"></div>
            </div>
            <small id="passwordStrengthMessage" class="form-text text-muted" style="display:none;"></small>
            <!--Password Strength Progress Bar ended -->
            
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">You need at least strong password.</div>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingConfirmPassword" name="confirmPassword" placeholder="Confirm Password" required oninput="checkPasswordsMatch(); resetValidation();">
            <label for="floatingConfirmPassword">Confirm Password</label>
            <div class="valid-feedback">Passwords matched.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <input type="submit" class="w-100 btn btn-lg btn-danger" value="Register" name="submit">
          <div class="text-center my-3">
            Already have an account? <a href="login.php" class="link">Login</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php include('includes/footer.php'); ?>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/check-passwords-match.js"></script>
  <script src="js/toggle-password.js"></script>
  <script src="js/check-password-strength.js"></script>
  <script src="js/validate-register-form.js"></script>
  <script src="js/reset-register-form-validation.js"></script>
</body>

</html>