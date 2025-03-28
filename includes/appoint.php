<?php
session_start();
error_reporting(0);
include 'config.php';

if (isset($_POST['appoint'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $date = $_POST['sdate'];
    $time = $_POST['stime'];

    $query = "INSERT INTO appointment (name, phone, gender, email, date, time) VALUES('$name', '$mobile','$gender', '$email', '$date', '$time')";
    if (mysqli_query($con, $query)) {
        echo "<script>alert('Appointment Booked successfully');</script>";
    } else {
        echo "<script>alert('Failed to book');</script>";
    }
}
?>

<div class="modal fade" id="modalRegisterForm3" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-gray-800 text-gray-200">
            <div class="modal-header bg-indigo-600 text-white">
                <h4 class="modal-title w-100 font-bold">Book Appointment</h4>
            </div>
            <form name="appoint" method="post" class="p-6">
                <div class="space-y-4">
                    <div>
                        <label class="block text-gray-300">Full Name</label>
                        <input type="text" name="name" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-300">Mobile Number</label>
                        <input type="text" name="mobile" pattern="[789][0-9]{9}" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-300">Gender</label>
                        <div class="flex space-x-4">
                            <label class="text-gray-300"><input type="radio" name="gender" value="male" checked class="text-indigo-500"> Male</label>
                            <label class="text-gray-300"><input type="radio" name="gender" value="female" class="text-indigo-500"> Female</label>
                            <label class="text-gray-300"><input type="radio" name="gender" value="others" class="text-indigo-500"> Other</label>
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-300">Email Address</label>
                        <input type="email" name="email" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-300">Select Date</label>
                        <input type="date" name="sdate" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-300">Select Time</label>
                        <select name="stime" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                            <option value="9:00">9:00</option>
                            <option value="9:30">9:30</option>
                            <option value="10:00">10:00</option>
                            <option value="10:30">10:30</option>
                            <option value="11:00">11:00</option>
                            <option value="11:30">11:30</option>
                            <option value="12:00">12:00</option>
                            <option value="12:30">12:30</option>
                            <option value="13:00">13:00</option>
                            <option value="13:30">13:30</option>
                            <option value="14:00">14:00</option>
                            <option value="14:30">14:30</option>
                        </select>
                    </div>
                </div>
                <div class="mt-6">
                    <input type="submit" name="appoint" value="Book Now" class="w-full bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-500">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
$(function() {
    var dtToday = new Date();
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if (month < 10) month = '0' + month.toString();
    if (day < 10) day = '0' + day.toString();
    var minDate = year + '-' + month + '-' + day;
    $('input[name="sdate"]').attr('min', minDate);
});
</script>