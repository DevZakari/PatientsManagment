<?php
// Inclure l'autoloader de Composer
require '../vendor/autoload.php';

// Connexion à la base de données
$mysqli = new mysqli("localhost", "root", "", "patients_management");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Créer une instance de Smarty
$smarty = new Smarty();

// Configurer les dossiers pour les templates, les templates compilés, et le cache
$smarty->setTemplateDir('../templates/');
$smarty->setCompileDir('../templates_c/');
$smarty->setCacheDir('../cache/');
$smarty->setConfigDir('../configs/');

// Récupérer les patients depuis la base de données
$result = $mysqli->query("
    SELECT 
        patients.*, 
        doctors.name AS doctor_name, 
        doctors.department AS doctor_department, 
        doctors.image AS doctor_image
    FROM 
        patients
    JOIN 
        doctors ON patients.doctor_id = doctors.id
");

$patients = array();
while($row = $result->fetch_assoc()) {
    $patients[] = $row;
}

// Assigner les patients à Smarty
$smarty->assign('patients', $patients);


// Récupérer les docteurs disponibles depuis la base de données
$doctors_result = $mysqli->query("SELECT name, department, image FROM doctors");

$doctors = array();
while($row = $doctors_result->fetch_assoc()) {
    $doctors[] = $row;
}

// Assigner les docteurs à Smarty
$smarty->assign('doctors', $doctors);

// Récupérer le nombre total de patients
$totalPatientsQuery = "SELECT COUNT(*) as total FROM patients";
$totalPatientsResult = $mysqli->query($totalPatientsQuery);
$totalPatients = $totalPatientsResult->fetch_assoc()['total'];
$smarty->assign('totalPatients', $totalPatients);



// Afficher le template index.tpl
$smarty->display('index.tpl');

// Fermer la connexion à la base de données
$mysqli->close();
