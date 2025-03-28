<?php
include 'includes/links.php';
include 'includes/signin.php';
include 'includes/signup.php';
include 'includes/appoint.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthCare - Patient Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #1f2937;
            color: #e5e7eb;
        }
        .hover-scale {
            transition: transform 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.05);
        }
        .navbar-link:hover {
            color: #a5b4fc;
        }
        .btn-primary {
            background-color: #4f46e5;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #6366f1;
        }
        .feature-card {
            border: 1px solid #4f46e5; /* Indigo border for cards */
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="bg-gray-900 shadow-lg fixed w-full z-10">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-indigo-400">HealthCare</a>
            <div class="space-x-6 flex items-center">
                <a href="#home" class="text-gray-300 navbar-link">Home</a>
                <a href="#about" class="text-gray-300 navbar-link">About</a>
                <a href="#contact" class="text-gray-300 navbar-link">Contact</a>
                <!-- <a href="/admin/admin.php" class="text-gray-300 navbar-link">Admin</a> -->
                
                <?php if ($_SESSION['login']) { ?>
                    <a href="book-history.php" class="text-indigo-400 hover:text-indigo-300">My Bookings</a>
                    <span class="text-gray-400">Welcome, <?php echo htmlentities($_SESSION['login']); ?></span>
                    <a href="logout.php" class="text-red-400 hover:text-red-300">Logout</a>
                <?php } else { ?>
                    <button class="text-indigo-400 hover:text-indigo-300" data-toggle="modal" data-target="#modalRegisterForm">Sign Up</button>
                    <button class="btn-primary text-white px-4 py-2 rounded-lg" data-toggle="modal" data-target="#modalRegisterForm2">Sign In</button>
                <?php } ?>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-24 pb-16 bg-gradient-to-r from-gray-800 to-indigo-900">
        <div class="max-w-7xl mx-auto px-4 flex items-center justify-between">
            <div class="w-1/2 pr-8">
                <h1 class="text-4xl font-bold text-white mb-4">We Care About Your Health</h1>
                <p class="text-lg text-gray-300 mb-6">Book appointments easily and manage your healthcare needs with our modern platform.</p>
                <button class="btn-primary text-white px-6 py-3 rounded-lg font-semibold" data-toggle="modal" data-target="#modalRegisterForm3">Book Appointment</button>
            </div>
            <div class="w-1/2 flex justify-end mt-10">
                <img src="img/904.jpg" alt="Healthcare" class="rounded-lg shadow-lg hover-scale w-3/4">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="home" class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-800 p-6 rounded-lg shadow-md hover-scale feature-card">
                    <h2 class="text-xl font-semibold text-indigo-400 mb-2">Seamless Booking</h2>
                    <p class="text-gray-300">Book appointments online with real-time syncing to avoid double bookings.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-md hover-scale feature-card">
                    <h2 class="text-xl font-semibold text-indigo-400 mb-2">Easy Check-in</h2>
                    <p class="text-gray-300">Self-service check-in kiosks to reduce reception workload.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-md hover-scale feature-card">
                    <h2 class="text-xl font-semibold text-indigo-400 mb-2">Better Experience</h2>
                    <p class="text-gray-300">Optimized performance and improved healthcare access for all.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-3xl font-bold text-center text-white mb-12">About Us</h1>
            <div class="flex flex-col md:flex-row items-center gap-8">
                <img src="img/book.png" alt="Booking" class="w-1/2 rounded-lg shadow-md hover-scale">
                <div>
                    <h2 class="text-2xl font-semibold text-indigo-400 mb-4">Our Mission</h2>
                    <p class="text-gray-300">We aim to simplify healthcare access by providing a seamless booking experience and efficient patient management tools.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-3xl font-bold text-white mb-8">Contact Us</h1>
            <p class="text-lg text-gray-300 mb-2">Toll Free: 123-456789</p>
            <p class="text-lg text-gray-300">Lorem ipsum</p>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>