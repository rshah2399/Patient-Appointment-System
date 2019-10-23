<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<?php

if (isset($_POST['add'])) {
    $report = $_POST['report'];
    echo $report;
    $quereport = "INSERT INTO appointment (report) VALUES('$result')";
    if (mysqli_query($con, $quereport)) {
        echo "<script>alert('Report Added successfully');</script>";
    } else {
        echo "<script>alert('Failed to add report');</script>";
    }
}
?>
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


<table border="1" width="100%">
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
        echo "first";
    }


    if (empty($_POST['dateinput'])) {
        $sql = "SELECT * FROM appointment WHERE name='$name'";
        echo "second";
    }

    echo "after";


    // Perform queries
    if ($con) {
        $query = mysqli_query($con, $sql);
        echo "db connection successful";
    } else {
        echo "dberror";
    }
    if (isset($_POST['rep'])) {
        $name = $_POST['nameinput'];
        $date = $_POST['dateinput'];
        $report = $_POST['report'];
        $aid = $_POST['aid'];
        $quereport = "UPDATE appointment set report = '$report' where a_id='$aid'";
        if (mysqli_query($con, $quereport)) {
            echo "<script>alert('Report Added successfully');</script>";
        } else {
            echo "<script>alert('Failed to add report / Report already exists');</script>";
        }
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
                <td><?php echo htmlentities($result['report']); ?></td>
            </tr>
    <?php $cnt = $cnt + 1;
        }
    } ?>
</table>
<br>
<form name="rep" method="post">
    <p>
        <label for="aid">Enter Appointment Id :</label>
        <input type="number" name="aid" id="aid"><br>
    </p>
    <textarea name="report" id="report" cols="30" rows="5"></textarea>
    <button class="btn btn-success" name="rep" id="rep">Add Report</button>
</form>