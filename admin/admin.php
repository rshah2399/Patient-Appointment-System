<?php

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<div class="container mt-3">
    <div class="row">
        <div class="col-10">
            <h1>ADMIN DASHBOARD</h1>
        </div>
        <div class="col-2">
            <button class="btn btn-primary">LOGOUT</button>
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
        <th>Name</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Appointment Date</th>
        <th>Appointment Time</th>
    </tr>
    <?php
    session_start();
    error_reporting(0);
    $cnt = 1;
    echo "ye chal";
    if (isset($_POST['nameinput']) and isset($_POST['dateinput'])) {
        echo "exec";
        $name = $_POST['nameinput'];
        $date = $_POST['dateinput'];
        echo $name;
        
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $con = mysqli_connect("localhost", "root", "", "patient_system");

        $query = mysqli_query($con, "SELECT * FROM appointment WHERE name='$name' AND date='$date'");
        echo $query;
    }

    if (mysqli_num_rows($query)) {
        foreach ($query as $result) {    ?>
            <tr align="center">
                <td><?php echo htmlentities($cnt); ?></td>
                <td><?php echo htmlentities($result['name']); ?></td>
                <td><?php echo htmlentities($result['phone']); ?></a></td>
                <td><?php echo htmlentities($result['gender']); ?></td>
                <td><?php echo htmlentities($result['email']); ?></td>
                <td><?php echo htmlentities($result['date']); ?></td>
                <td><?php echo htmlentities($result['time']); ?></td>
            </tr>
    <?php $cnt = $cnt + 1;
        }
    } ?>
</table>