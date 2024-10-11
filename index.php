<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<?php $btnLabel = "Submit" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1em;
			height: 2em;
			width: 250px;
		}
		table, th, td {
		  border:1px solid black;
          padding: 5px;
		}
	</style>
</head>
<body>
	<h3>Welcome to CyberSec Employee Database.</h3>
    <h4>Fill out the form to be recognized by the system.</h4>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstname">First Name</label> <input type="text" name="firstname"></p>
		<p><label for="lastname">Last Name</label> <input type="text" name="lastname"></p>
		<p><label for="email">Email</label> <input type="text" name="email"></p>
		<p><label for="phonenumber">Phone Number</label> <input type="text" name="phonenumber"></p>
		<p><label for="position">Position</label> <input type="text" name="position"></p>
		<p><label for="department">Department</label> <input type="text" name="department"></p>
		<p><label for="gender">Gender</label> <input type="text" name="gender"></p>
		<p><input type="submit" name="insertEmployeeBtn" value="<?php echo $btnLabel ?>">
		</p>
	</form>

	<table style="width:80%; margin-top: 50px;">
	  <tr>
	    <th>Employee ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Email</th>
	    <th>Phone Number</th>
	    <th>Position</th>
	    <th>Department</th>
	    <th>Gender</th>
	    <th>Edit/Delete Details</th>
	  </tr>

	  <?php $seeAllEmployees = seeAllEmployees($pdo); ?>
	  <?php foreach ($seeAllEmployees as $row) { ?>
	  <tr>
	  	<td><?php echo $row['employee_id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['email']; ?></td>
	  	<td><?php echo $row['phone_number']; ?></td>
	  	<td><?php echo $row['position']; ?></td>
	  	<td><?php echo $row['department']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td style="text-align:center;">
	  		<a href="editemployee.php?employee_id=<?php echo $row['employee_id'];?>">Edit</a>
            |
	  		<a href="deleteemployee.php?employee_id=<?php echo $row['employee_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>