<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<div class="container mt-3">
    <div class="row">
        <div class="col-10">
            <h1>ADMIN DASHBOARD</h1>
        </div>
        <div class="col-2">
            <a href="/wdl_project/index.php"><button class="btn btn-primary">LOGOUT</button></a>
        </div>
    </div>

    <div class="row">
        <form method="POST" action="admin.php">
            <div style="display: flex; justify-content: center; align-items: center;">
                <div class="form-group">
                    <label for="dateinput">Date</label>
                    <input type="date" name="dateinput" class="form-control" id="dateinput" placeholder="Date">
                </div>

                <div class="form-group ml-3">
                    <label for="dateinput">Name</label>
                    <input type="text" name="nameinput" class="form-control" id="nameinput" placeholder="Name">
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>

    <div id="weather-temp"></div>
</div>


<table class="table" width="100%">
    <tr align="center">
        <th>#</th>
        <th>Appointment ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Appointment Date</th>
        <th>Appointment Time</th>
        <th>Add Report</th>
    </tr>
    <?php
    session_start();
    error_reporting(0);
    $uemail = $_SESSION['login'];
    $cnt = 1;
    $con = mysqli_connect("localhost", "root", "", "patient_system");
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $name = $_POST['nameinput'];
    $date = $_POST['dateinput'];


    //$sql = "SELECT * FROM appointment";
    $sql = "SELECT * FROM appointment WHERE name='$name' AND date='$date'";
    if (empty($_POST['nameinput'])) {
        $sql = "SELECT * FROM appointment WHERE date='$date'";
    }


    if (empty($_POST['dateinput'])) {
        $sql = "SELECT * FROM appointment WHERE name='$name'";
    }

    // Perform queries
    if ($con) {
        $query = mysqli_query($con, $sql);
        echo "db connection successful";
    } else {
        echo "dberror";
    }

    if (isset($_POST['rep'])) {
        echo $_FILES["report"];

        $report = $_FILES["report"]["name"];

        // Check if teacher has requested to create a post
        $fileExt = explode('.', $report);
        $fileActualExt = strtolower(end($fileExt));
        //$fileNameNew = $report . "."  . $fileActualExt;
        $fileNameNew = $report;
        $hostPath = "C:/xampp/htdocs/";
        $filePath = "wdl_project/uploads/" . $fileNameNew;
        $tmpName = $_FILES["report"]["tmp_name"];
        $fileDestination = $hostPath . $filePath;

        echo $fileDestination;

        move_uploaded_file($tmpName, $fileDestination);

        $saveUrl = "uploads/" . $fileNameNew;

        echo $report;
        $name = $_POST['nameinput'];
        $date = $_POST['dateinput'];
        $aid = $_POST['aid'];
        $quereport = "UPDATE appointment set report = '$saveUrl' where a_id='$aid'";
        if (mysqli_query($con, $quereport)) {
            echo "success";
        } else { }
    }

    if (mysqli_num_rows($query)) {
        foreach ($query as $result) {    ?>
            <tr align="center">
                <td><?php echo htmlentities($cnt); ?></td>
                <td><?php echo htmlentities($result['a_id']); ?></td>
                <td><?php echo htmlentities($result['name']); ?></td>
                <td><?php echo htmlentities($result['phone']); ?></a></td>
                <td><?php echo htmlentities($result['gender']); ?></td>
                <td><?php echo htmlentities($result['email']); ?></td>
                <td><?php echo htmlentities($result['date']); ?></td>
                <td><?php echo htmlentities($result['time']); ?></td>
                <td><?php echo "<a target='_blank' href='../" . htmlentities($result['report']) . "'/>view report</a>"; ?></td>
            </tr>
    <?php $cnt = $cnt + 1;
        }
    } ?>
</table>
<br>
<div class="container">
    <div class="card" style="width: 400px;">
        <div class="card-header">
            <h3>Add report:</h3>
        </div>
        <div class="card-body">

            <form name="rep" method="post" enctype="multipart/form-data">
                <p>
                    <label for="aid">Enter Appointment Id :</label><br>
                    <input type="number" name="aid" id="aid"><br>
                </p>
                <input name="report" id="report" type="file" placeholder="select report"><br><br>
                <button class="btn btn-success" name="rep" id="rep">Add Report</button>
            </form>
        </div>
    </div>
</div>