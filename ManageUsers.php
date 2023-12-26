<!DOCTYPE html>
<html lang="en">
<html>

<head>
	<title>Manage Users</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="css/manageusers.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha1256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
	</script>
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/manage_users.js"></script>
</head>

<body>
	<?php include 'header.php'; ?>
	<main>
		<h1 class="slideInDown animated">Information of users</h1>
		<div class="form-style-5 slideInDown animated">
			<div class="alert">
				<label id="alert"></label>
			</div>
			<form>
				<fieldset>
					<legend><span class="number">1</span> User Fingerprint ID:</legend>
					<label>Fingerprint ID</label>
					<input type="number" name="fingerid" id="fingerid" placeholder="User Fingerprint ID...">
					<div class="Finger-button">
						<button type="button" name="fingerid_add" class="fingerid_add">Add Fingerprint ID</button>
					</div>
				</fieldset>
				<fieldset>
					<legend><span class="number">2</span> User Info</legend>
					<input type="text" name="name" id="name" placeholder="User Name...">
					<input type="text" name="number" id="number" placeholder="Student Code...">
					<input type="email" name="email" id="email" placeholder="Class...">
				</fieldset>
				<fieldset>
					<legend><span class="number">3</span> Additional Info</legend>
					<label>
						Time In:
						<input type="time" name="timein" id="timein">
						<input type="radio" name="gender" class="gender" value="Female">Female
						<input type="radio" name="gender" class="gender" value="Male" checked="checked">Male
					</label>
					<div class="User-button">
						<button type="button" name="user_add" class="user_add">Add User</button>
						<button type="button" name="user_upd" class="user_upd">Update User</button>
						<button type="button" name="user_rmo" class="user_rmo">Remove User</button>
					</div>
				</fieldset>
			</form>
		</div>
		<div class="section">
			<!--User table-->
			<div class="tbl-header slideInRight animated">
				<table cellpadding="0" cellspacing="0" border="0">
					<thead>
						<tr>
							<th>Finger .ID</th>
							<th>Name</th>
							<th>Gender</th>
							<th>Class</th>
							<th>Number</th>
							<th>Date</th>
							<th>Time in</th>
						</tr>
					</thead>
				</table>
			</div>
			<div class="tbl-content slideInRight animated">
				<table cellpadding="0" cellspacing="0" border="0">
					<div id="manage_users"></div>
			</div>
		</div>

	</main>
</body>

</html>