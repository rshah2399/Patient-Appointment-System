<?php
error_reporting(0);
include 'config.php';
if (isset($_POST['register'])) {
    $username = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, phone, email, password) VALUES('$username', '$mobile', '$email', '$password')";
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Registration done successfully');</script>";
    } else {
        echo "<script>alert('Already an account with same details');</script>";
    }
}
?>

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-gray-800 text-gray-200">
            <div class="modal-header bg-indigo-600 text-white">
                <h4 class="modal-title w-100 font-bold">Sign Up</h4>
            </div>
            <form id="signupform" name="signup" method="post" class="p-6">
                <div class="space-y-4">
                    <div>
                        <label class="block text-gray-300">Your Name</label>
                        <input type="text" name="name" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-300">Mobile Number</label>
                        <input type="text" name="mobile" pattern="[789][0-9]{9}" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-300">Email Address</label>
                        <input type="email" name="email" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-300">Password</label>
                        <input type="password" name="password" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                </div>
                <div class="mt-6">
                    <input type="submit" name="register" value="Create Account" class="w-full bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-500">
                </div>
            </form>
        </div>
    </div>
</div>