<?php
require '../vendor/autoload.php';

$mysqli = new mysqli("localhost", "root", "", "patients_management");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Supprimer le patient
    $stmt = $mysqli->prepare("DELETE FROM patients WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    // Rediriger vers la page principale
    header("Location: index.php");
    exit();
}

$mysqli->close();
?>
