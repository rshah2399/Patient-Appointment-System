<?php
include 'includes/links.php';
include 'includes/signin.php';
include 'includes/signup.php';
include 'includes/appoint.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Patient Appointment System</title>
</head>

<body>

    <nav class="navbar navbar-dark navbar-expand-md py-0 fixed-top" id="mainNavbar">
        <a href="#" class="navbar-brand"><i class="fas fa-user-md"></i><strong> HealthCare</strong></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="container navbar-nav">
                <li class="nav-item">
                    <a href="#one" class="nav-link"><strong>Home</strong></a>
                </li>
                <li class="nav-item">
                    <a href="#two" class="nav-link"><strong>About Us</strong></a>
                </li>
                <li class="nav-item">
                    <a href="#three" class="nav-link"><strong>Contact Us</strong></a>
                </li>
            </ul>
            <ul class="container navbar-nav justify-content-end">
                <?php
                session_start();
                /* if ($_SESSION['type'] == "admin") {
                    echo "admin";
                    echo "<li class='prnt'><a href='/wdl_project/admin/admin.php'>Admin</a></li>";
                } */
                //echo "after admin";
                if ($_SESSION['login']) { ?>
                    <li><a class="book-hist" href="book-history.php">My Booking History</a></li>
                    <li><strong>Welcome :</strong></li>
                    <li class="sig">
                        <?php echo htmlentities($_SESSION['login']); ?>
                    </li>
                    <li class="sigi nav-item">
                        <a href="logout.php" class="nav-link"><strong>/ Logout</strong></a>
                    </li>
                    <div class="clearfix"></div>
                <?php } else { ?>
                    <li class="sig nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#modalRegisterForm"><strong>Sign Up </strong></a>
                    </li>
                    <li class="sigi nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#modalRegisterForm2"><strong>/ Sign In</strong></a>
                    </li>
                    <div class="clearfix"></div>
                <?php } ?>

            </ul>
        </div>
    </nav>
    <div class="container-fluid px-0">
        <div class="row align-items-center">
            <div class="col text-center">
                <img src="img/904.jpg" alt="" style="width:100%">
                <div class="bottom-right">
                    <h2 style="color: brown"><i class="fas fa-quote-left"></i> WE CARE ABOUT YOUR HEALTH <i class="fas fa-quote-right"></i></h2>
                    <button type="button" class="btn btn-outline-success" style="color:#595959">
                        <a href="#" data-toggle="modal" data-target="#modalRegisterForm3"><strong>Book Appointment</strong></a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <section class="container-fluid px-0">
        <hr class="pg-end">
        <p>
            <h1 id="one" class="d-none d-lg-block mt-5 text-center">Home</h1>
        </p>
        <hr>
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0 ">
                        <h2>Allow patients to book online seamlessly</h2>
                        <p class="lead">Give patients the opportunity to book an appointment on your website and sync the online portal with your EMR, reducing double booking. Manage and customize each physician availabilities on all booking channels.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 content">
                <!-- <img src="img/moc3.jfif" alt="" class="img-fluid">             -->
            </div>
        </div>
        <hr>
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1 content">
                <!-- <img src="img/moc1.jfif" alt="" class="img-fluid">             -->
            </div>
            <div class="col-md-6 text-center order-1 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                        <h2>Simplify patient arrival and decrease reception workload</h2>
                        <p class="lead">Allow patients to quickly and autonomously let you know they’ve arrived with self-service check-in kiosks. Modules synchronize with your EMR, reduce lines at reception, and free up staff’s time.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                        <h2>Optimize your organization’s performance and provide a better patient experience.</h2>
                        <p class="lead">HealthCare gives administration more time for patients and gives patients improved healthcare access. Plus, it avoids training costs for new employees with task automation and EMR integration</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 content">
                <!-- <img src="img/moc3.jfif" alt="" class="img-fluid">             -->
            </div>
        </div>
    </section>
    <section class="container-fluid px-0">
        <hr class="pg-end">
        <p>
            <h1 id="two" class="d-none d-lg-block mt-5 text-center">About Us</h1>
        </p>
        <hr>
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0 ">
                        <h2>Allow patients to book online seamlessly</h2>
                        <p class="lead">Give patients the opportunity to book an appointment on your website and sync the online portal with your EMR, reducing double booking. Manage and customize each physician availabilities on all booking channels.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 content">
                <img src="img/book.png" class="im" alt="" height="500px" width="500px" class="img-fluid">
            </div>
        </div>
        <hr>
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1 content">
                <img src="img/recp.png" class="im" alt="" height="500px" width="500px" class="img-fluid">
            </div>
            <div class="col-md-6 text-center order-1 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                        <h2>Simplify patient arrival and decrease reception workload</h2>
                        <p class="lead">Allow patients to quickly and autonomously let you know they’ve arrived with self-service check-in kiosks. Modules synchronize with your EMR, reduce lines at reception, and free up staff’s time.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                        <h2>Optimize your organization’s performance and provide a better patient experience.</h2>
                        <p class="lead">HealthCare gives administration more time for patients and gives patients improved healthcare access. Plus, it avoids training costs for new employees with task automation and EMR integration</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 content">
                <img src="img/better.jpg" class="im" alt="" height="500px" width="500px" class="img-fluid">
            </div>
        </div>
    </section>
    <section class="container-fluid px-0">
        <hr class="pg-end">
        <p>
            <h1 id="three" class="d-none d-lg-block mt-5 text-center">Contact Us</h1>
        </p>
        <hr>
        <div class="text-center blurb">
            <h2>Toll Free Number : </h2>
            <p class="lead">123-456789</p>
            <hr>
            <h2>Clinic Address: </h2>
            <p class="lead">Flat No.103, 1st Floor, B,</p>
            <p class="lead">Raj Niketan Building,</p>
            <p class="lead">SV Rd, Santacruz West,</p>
            <p class="lead">Mumbai, Maharashtra 400054</p>
        </div>
    </section>

    <script>
        $(function() {
            $(document).scroll(function() {
                var $nav = $("#mainNavbar");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });
    </script>
</body>

</html>