<?php
    include 'signin.php';
    include 'signup.php';
    include 'appoint.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/456cedca5b.js"></script>
    <script src="ss.js"></script>

    <title>Patient Appointment System</title>
</head>
<body>
	
    <nav class="navbar navbar-dark navbar-expand-md py-0 fixed-top" id="mainNavbar">
        <a href="#" class="navbar-brand"><i class="fas fa-user-md"></i><strong>  HealthCare</strong></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav">
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
            <ul class="navbar-nav justify-content-end">
                <?php
                session_start();
                if($_SESSION['login']){?>
                    <li class="tol"><strong>Welcome :</strong></li>
                    <li class="sig">
                       <?php echo htmlentities($_SESSION['login']);?>
                    </li>
                    <li class="sigi nav-item">
                        <a href="logout.php" class="nav-link"><strong>/ Logout</strong></a>
                    </li>
                    <div class="clearfix"></div>
                <?php } else {?>
                    <li class="sig nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#modalRegisterForm"><strong>Sign Up </strong></a>
                    </li>
                    <li class="sigi nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#modalRegisterForm2"><strong>/ Sign In</strong></a>
                    </li>
                    <div class="clearfix"></div>
                <?php }?>
    
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
                <img src="img/moc3.jfif" alt="" class="img-fluid">            
            </div>
        </div>     
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1 content">
                <img src="img/moc1.jfif" alt="" class="img-fluid">            
            </div>
            <div class="col-md-6 text-center order-1 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                        <h2>Simplify patient arrival and decrease reception workload</h2>
                        <img src="img/lollipop.png" alt="" height="60px" width="60px">
                        <p class="lead">Allow patients to quickly and autonomously let you know they’ve arrived with self-service check-in kiosks. Modules synchronize with your EMR, reduce lines at reception, and free up staff’s time.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                        <h2>Optimize your organization’s performance and provide a better patient experience.</h2>
                        <img src="img/lollipop.png" alt="" height="60px" width="60px">
                        <p class="lead">HealthCare gives administration more time for patients and gives patients improved healthcare access. Plus, it avoids training costs for new employees with task automation and EMR integration</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 content">
                <img src="img/moc3.jfif" alt="" class="img-fluid">            
            </div>
        </div>
    </section>
    <section class="container-fluid px-0">
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
                    <img src="https://www.petalmd.com/hubfs/_PetalMD_Sept2018/Images/petalbooking-feature1-EN.png" alt="" height="600px" width="600px" class="img-fluid">            
                </div>
            </div>     
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1 content">
                    <img src="https://www.petalmd.com/hubfs/_PetalMD_Sept2018/Images/petalbooking-tour/petalbooking-feature3-EN.png" alt="" height="600px" width="600px" class="img-fluid">            
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
                    <img src="img/bpe.jpg" alt="" height="80%" width="80%" class="img-fluid">            
                </div>
            </div>
        </section>    
        <section class="container-fluid px-0">
            <p>
                <h1 id="three" class="d-none d-lg-block mt-5 text-center">Contact Us</h1>
            </p>
            <hr>
            <div class="text-center">
                <h4 style="color:#f498b8">Toll Free Number : 123-456789</h4>
                <h4 style="color:#f498b8">Clinic Address: </h4>
                <p>Flat No.103, 1st Floor, B,</p>
                <p>Raj Niketan Building,</p>
                <p>SV Rd, Santacruz West,</p>
                <p>Mumbai, Maharashtra 400054</p>        
            </div>
        </section>
        <!-- <section class="container-fluid px-0">
            <p>
                <h1 id="four" class="d-none d-lg-block mt-5 text-center">Book An Appointment</h1>
            </p>
            <hr>
            <form method="post" name="appform" id="appform" class="text-center">   
                <fieldset>
                    <p>
                        <label>Full Name:  </label>
                        <input type="text" name="fname" placeholder="John Smith"><br>
                    </p>
                    <p>
                        <label>Phone Number:  </label>
                        <input type="phone" name="phone"><br>
                    </p>
                    <p>
                        <label>Gender:  </label>
                        <input type="radio" name="gender" value="male" checked>  <span>MALE</span>  
                        <input type="radio" name="gender" value="female">  <span>FEMALE</span>
                        <input type="radio" name="gender" value="Others">  <span>OTHERS</span>  
                    <br>
                    </p>
                    <p> 
                        <label>Email:  </label>
                        <input type="Email" name="email" placeholder="adhys@gmail.com"><br>
                    </p>
                    <p>
                        <label>Select Date:  </label>
                        <input id="txtDate" type="date" name="sdate"/><br>
                    </p>
                    <p>
                        <label>Select Time:  </label>
                        <input type="time" name="stime"><br>
                    </p>
                    <p id="att">*All fields are mandatory</p>
                    <button type="button" class="btn btn-success">Submit</button>     -->
                </fieldset>
            </form>
        </section>       
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $(function () {
            $(document).scroll(function(){
                var $nav = $("#mainNavbar");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });
        // $(function(){
        //     var dtToday = new Date();
    
        //     var month = dtToday.getMonth() + 1;
        //     var day = dtToday.getDate();
        //     var year = dtToday.getFullYear();
        //     if(month < 10)
        //         month = '0' + month.toString();
        //     if(day < 10)
        //         day = '0' + day.toString();
    
        //     var minDate= year + '-' + month + '-' + day;
    
        //     $('#txtDate').attr('min', minDate);
        // });
    </script>
</body>
</html>