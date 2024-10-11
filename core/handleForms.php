<?php require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertEmployeeBtn'])) {
    $first_name = trim($_POST['firstname']);
    $last_name = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $phone_number = trim($_POST['phonenumber']);
    $position = trim($_POST['position']);
    $department = trim($_POST['department']);
    $gender = trim($_POST['gender']);

	if (!empty($first_name) && !empty($last_name) && !empty($email) && !empty($phone_number)
    && !empty($position)  && !empty($department)  && !empty($gender)) {
			$query = insertNewEmployee($pdo, $first_name, $last_name, $email, $phone_number, $position, $department, $gender);

		if ($query) {
			header("Location: ../index.php");
		} else {
			echo "Data insert failed";
		}
	} else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editEmployeeBtn'])) {
	$employee_id = $_GET['employee_id'];
	$first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $phone_number = trim($_POST['phone_number']);
    $position = trim($_POST['position']);
    $department = trim($_POST['department']);
    $gender = trim($_POST['gender']);

	if (!empty($first_name) && !empty($first_name) && !empty($email) && !empty($phone_number)
    && !empty($position)  && !empty($department)  && !empty($gender)) {

		$query = updateData($pdo, $employee_id, $first_name, $last_name, $email, $phone_number, $position, $department, $gender);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	} else {
		echo "Make sure that no fields are empty";
	}

}



if (isset($_POST['deleteEmployeeBtn'])) {

	$query = deleteData($pdo, $_GET['employee_id']);

	if ($query) {
		header("Location: ../index.php");
	} else {
		echo "Delete failed";
	}
}

