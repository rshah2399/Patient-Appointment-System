<?php
include 'includes/config.php';
include 'includes/links.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Booking History - HealthCare</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #1f2937;
            color: #e5e7eb;
        }
        .btn-primary {
            background-color: #4f46e5;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #6366f1;
        }
    </style>
</head>
<body>
    <div class="max-w-7xl mx-auto px-4 py-12">
        <a href="index.php" class="inline-block btn-primary text-white px-4 py-2 rounded-lg mb-6">Back to Home</a>
        <h3 class="text-2xl font-bold text-white mb-6">My Booking History</h3>
        
        <div class="bg-gray-800 shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full">
                <thead class="bg-indigo-600 text-white">
                    <tr>
                        <th class="py-3 px-4">#</th>
                        <th class="py-3 px-4">Name</th>
                        <th class="py-3 px-4">Phone</th>
                        <th class="py-3 px-4">Gender</th>
                        <th class="py-3 px-4">Email</th>
                        <th class="py-3 px-4">Date</th>
                        <th class="py-3 px-4">Time</th>
                        <th class="py-3 px-4">Reports</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    error_reporting(0);
                    $uemail = $_SESSION['login'];
                    $cnt = 1;
                    $con = mysqli_connect("localhost", "root", "", "patient_system");
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
                    $query = mysqli_query($con, "SELECT * FROM appointment WHERE email='$uemail'");
                    if (mysqli_num_rows($query)) {
                        foreach ($query as $result) { ?>
                            <tr class="border-b border-gray-700">
                                <td class="py-3 px-4"><?php echo htmlentities($cnt); ?></td>
                                <td class="py-3 px-4"><?php echo htmlentities($result['name']); ?></td>
                                <td class="py-3 px-4"><?php echo htmlentities($result['phone']); ?></td>
                                <td class="py-3 px-4"><?php echo htmlentities($result['gender']); ?></td>
                                <td class="py-3 px-4"><?php echo htmlentities($result['email']); ?></td>
                                <td class="py-3 px-4"><?php echo htmlentities($result['date']); ?></td>
                                <td class="py-3 px-4"><?php echo htmlentities($result['time']); ?></td>
                                <td class="py-3 px-4"><a href="<?php echo htmlentities($result['report']); ?>" target="_blank" class="text-indigo-400 hover:underline">View Report</a></td>
                            </tr>
                    <?php $cnt = $cnt + 1; } } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>