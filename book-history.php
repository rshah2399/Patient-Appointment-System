<?php

include 'includes/config.php';
include 'includes/links.php';
?>
<div style="background-color='white'" class="privacy">
	<div class="container">

		<a href="/wdl_project/"><button class="btn btn-primary">BACK TO HOME</button></a>

		<h3>My Booking History</h3>
		<p>
			<table class="table" width="100%">
				<tr align="center">
					<th>#</th>
					<th>Name</th>
					<th>Phone</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Appointment Date</th>
					<th>Appointment Time</th>
					<th>View Reports</th>
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


				// Perform queries
				$query = mysqli_query($con, "SELECT * FROM appointment WHERE email='$uemail'");

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
							<td><?php echo "<a target='_blank' href='" . htmlentities($result['report']) . "'/>view report</a>"; ?></td>
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