<?php
  error_reporting(0);
  include 'config.php';
 
  if(isset($_POST['appoint'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $date = $_POST['sdate'];
    $time = $_POST['stime'];

    $query = "INSERT INTO appointment (name, phone, gender, email, date, time) VALUES('$name', '$ph_no','$gender', '$email', '$date', '$time')";
    if(mysqli_query($con,$query)){
       echo "<script>alert('Appointment Booked successfully');</script>";
    }else {
      echo "<script>alert('Failed to book');</script>";
    }
  }
?>  
<div class="modal fade" id="modalRegisterForm3" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Book An Appointment</h4>
      </div>
      <form name="appoint" method="post">
        <div class="modal-body mx-3">
          <div class="md-form mb-3">
            <label data-error="wrong" data-success="right" for="orangeForm-name" required>Full Name: </label>
            <input type="text" id="orangeForm-name" class="form-control validate" name="name" required="">
          </div>
          <div class="md-form mb-3">
            <label data-error="wrong" data-success="right" for="orangeForm-text">Mobile Number: </label>
            <input type="text" id="orangeForm-text" class="form-control validate" name="mobile" required="">
          </div>
          <div class="md-form mb-3">
            <label data-error="wrong" data-success="right" for="orangeForm-gender">Gender: </label>
            <input type="radio" id="orangeForm-gender" class="form-control validate" name="gender" value="male" checked>Male
            <input type="radio" id="orangeForm-gender" class="form-control validate" name="gender" value="female">Female
            <input type="radio" id="orangeForm-gender" class="form-control validate" name="gender" value="others">Others 
          </div>
          <div class="md-form mb-3">
            <label data-error="wrong" data-success="right" for="orangeForm-email">Email Address: </label>
            <input type="email" id="orangeForm-email" class="form-control validate" name="email" required="">
          </div>
          <div class="md-form mb-3">
            <label data-error="wrong" data-success="right" for="orangeForm-date">Select Date: </label>
            <input type="date" id="orangeForm-date" class="form-control validate" name="sdate" required="">
          </div>
          <div class="md-form mb-3">
            <label data-error="wrong" data-success="right" for="orangeForm-time">Select Time: </label>
            <select id="orangeForm-time" class="form-control validate" name="stime" required="">
            <option value="9:00">9:00</option><option value="9:30">9:30</option><option value="10:00">10:00</option><option value="10:30">10:30</option>
            <option value="11:00">11:00</option><option value="11:30">11:30</option><option value="12:00">12:00</option><option value="12:30">12:30</option>
            <option value="13:00">13:00</option><option value="13:30">13:30</option><option value="14:00">14:00</option><option value="14:30">14:30</option>
            </select>
          </div>
          <div style:color="red">
            *All fields are mandatory
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <input type="submit" name="appoint" id="appoint" class="btn btn-dark" value="BOOK NOW">
        </div>
      </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    $(function(){
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();

        var minDate= year + '-' + month + '-' + day;

        $('#orangeForm-date').attr('min', minDate);
    });
</script>