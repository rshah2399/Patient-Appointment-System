<?php
error_reporting(0);
include 'config.php';
if(isset($_POST['register'])){

$username = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name, phone, email, password) VALUES('$username', '$mobile', '$email', '$password')";
if(mysqli_query($con,$sql)){
echo "<script>alert('Registration done successfully');</script>";
}else {
echo "<script>alert('Already an account with same details');</script>";
}
}

?>

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
      </div>
      <form name="signup" method="post">
        <div class="modal-body mx-3">
          <div class="md-form mb-3">
            <input type="text" id="orangeForm-name" class="form-control validate" name="name" required="">
            <label data-error="wrong" data-success="right" for="orangeForm-name" required>Your name</label>
          </div>
          <div class="md-form mb-3">
            <input type="text" id="orangeForm-text" class="form-control validate" name="mobile" required="">
            <label data-error="wrong" data-success="right" for="orangeForm-text">Your Mobile Number</label>
          </div>
          <div class="md-form mb-3">
            <input type="email" id="orangeForm-email" class="form-control validate" name="email" required="">
            <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
          </div>
          <div class="md-form mb-3">
            <input type="password" id="orangeForm-pass" class="form-control validate" name="password" required="">
            <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <input type="submit" name="register" id="register" class="btn btn-dark" value="CREATE ACCOUNT">
        </div>
      </form>
    </div>
  </div>
</div>