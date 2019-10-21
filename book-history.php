<?php

include 'includes/config.php';
?>
<div class="privacy">
	<div class="container">
		<h3>My Booking History</h3>
		<p>
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
				$uemail = $_SESSION['login'];
				$cnt = 1;
				$con = mysqli_connect("localhost", "root", "", "patient_system");
				// Check connection
				if (mysqli_connect_errno()) {
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				//$sql = "SELECT * FROM appointment";
				$sql = "SELECT * FROM appointment WHERE email='$uemail'";

				// Perform queries
				if ($con) {
					$query = mysqli_query($con, $sql);
					echo "db connection successful";
				} else {
					echo "dberror";
				}

				if (mysqli_num_rows($query)) {
					foreach ($query as $result) {	?>
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
		</p>
		</form>
	</div>
</div>
</body>

</html>