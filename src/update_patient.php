<?php
require '../vendor/autoload.php';

$mysqli = new mysqli("localhost", "root", "", "patients_management");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $appointment_date = $_POST['appointment_date'];
    $doctor = $_POST['doctor'];
    $department = $_POST['department'];

    $stmt = $mysqli->prepare("UPDATE patients SET name = ?, mobile = ?, appointment_date = ?, doctor = ?, department = ? WHERE id = ?");
    $stmt->bind_param("sssssi", $name, $mobile, $appointment_date, $doctor, $department, $id);
    $stmt->execute();

    $stmt->close();
    $mysqli->close();

    header("Location: index.php");
    exit();
}
?>
