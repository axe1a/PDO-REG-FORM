<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<?php $btnLabel = "Save changes" ?>
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
		}
	</style>
</head>
<body>
	<?php $getEmployeeById = getEmployeeById($pdo, $_GET['employee_id']); ?>
	<form action="core/handleForms.php?employee_id=<?php echo $_GET['employee_id']; ?>" method="POST">
		<p>
			<label for="first_name">First Name</label> 
			<input type="text" name="first_name" value="<?php echo $getEmployeeById['first_name']; ?>">
		</p>
		<p>
			<label for="last_name">Last Name</label> 
			<input type="text" name="last_name" value="<?php echo $getEmployeeById['last_name']; ?>">
		</p>
		<p>
			<label for="email">Email</label>
			<input type="text" name="email" value="<?php echo $getEmployeeById['email']; ?>">
		</p>
		<p>
			<label for="phone_number">Phone Number</label>
			<input type="text" name="phone_number" value="<?php echo $getEmployeeById['phone_number']; ?>">
		</p>
		<p>
			<label for="position">Position</label>
			<input type="text" name="position" value="<?php echo $getEmployeeById['position']; ?>">
		</p>
		<p>
			<label for="department">Department</label>
			<input type="text" name="department" value="<?php echo $getEmployeeById['department']; ?>"></p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $getEmployeeById['gender']; ?>">
		</p>
        <p>
            <input type="submit" name="editEmployeeBtn" value="<?php echo $btnLabel ?>">
        </p>
	</form>
</body>
</html>
