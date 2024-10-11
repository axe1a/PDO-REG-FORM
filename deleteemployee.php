<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

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
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
	</style>
</head>
<body> <!-- gusto ko dark red color kasi kaya ko :P -->
	<h1 style="color: #db0034">Are you sure you want to delete this data?</h1>
	<?php $getEmployeeById = getEmployeeById($pdo, $_GET['employee_id']); ?>
	<form action="core/handleForms.php?employee_id=<?php echo $_GET['employee_id']; ?>" method="POST">

		<div class="container" style="border-style: solid; border-color:#db0034;
		font-family: 'Arial'; font-weight: bold;">
			<p>First Name: <?php echo $getEmployeeById['first_name']; ?></p>
			<p>Last Name: <?php echo $getEmployeeById['last_name']; ?></p>
			<p>Email: <?php echo $getEmployeeById['email']; ?></p>
			<p>Phone Number: <?php echo $getEmployeeById['phone_number']; ?></p>
			<p>Position: <?php echo $getEmployeeById['position']; ?></p>
			<p>Department: <?php echo $getEmployeeById['department']; ?></p>
			<p>Gender: <?php echo $getEmployeeById['gender']; ?></p>
			<input type="submit" name="deleteEmployeeBtn" value="Delete"> 
		</div>
	</form>
</body>
</html>