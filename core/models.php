<?php require_once 'dbConfig.php';

function insertNewEmployee($pdo, $first_name, $last_name, $email, $phone_number,
    $position, $department, $gender) {
    $sql = "INSERT INTO employee (first_name, last_name, email,
        phone_number, position, department, gender)
        VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $email, $phone_number, $position, $department, $gender]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllEmployees($pdo) {
	$sql = "SELECT * FROM employee";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getEmployeeByID($pdo, $employee_id) {
	$sql = "SELECT * FROM employee WHERE employee_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$employee_id])) {
		return $stmt->fetch();
	}
}

function updateData($pdo, $employee_id, $first_name, $last_name, $email, $phone_number, $position, $department, $gender) {

	$sql = "UPDATE employee 
				SET first_name = ?, 
					last_name = ?, 
					email = ?, 
					phone_number = ?, 
					position = ?, 
					department = ?, 
					gender = ? 
			WHERE employee_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$first_name, $last_name, $email, $phone_number, $position, $department, $gender, $employee_id]);

	if ($executeQuery) {
		return true;
	}
}

function deleteData($pdo, $employee_id) {

	$sql = "DELETE FROM employee WHERE employee_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$employee_id]);

	if ($executeQuery) {
		return true;
	}

}

