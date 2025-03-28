<?php
include 'config.php';
if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT email,password FROM users WHERE email='$email' and password='$password'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['login'] = $_POST['email'];
    } else {
        echo "<script>alert('Invalid Details');</script>";
    }
}
?>

<div class="modal fade" id="modalRegisterForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-gray-800 text-gray-200">
            <div class="modal-header bg-indigo-600 text-white">
                <h4 class="modal-title w-100 font-bold">Sign In</h4>
            </div>
            <form name="signin" method="post" class="p-6">
                <div class="space-y-4">
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
                    <input type="submit" name="signin" value="Sign In" class="w-full bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-500">
                </div>
            </form>
        </div>
    </div>
</div>