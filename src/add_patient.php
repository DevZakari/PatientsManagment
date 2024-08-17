<?php
// Inclure l'autoloader de Composer
require '../vendor/autoload.php';

// Connexion à la base de données
$mysqli = new mysqli("localhost", "root", "", "patients_management");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Gestion de l'ajout du patient
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $appointment_date = $_POST['appointment_date'];
    $doctor_id = $_POST['doctor_id'];

    // Utiliser une image statique pour tous les patients
    //$image = 'https://media.istockphoto.com/id/1171169099/fr/photo/homme-avec-les-bras-crois%C3%A9s-disolement-sur-le-fond-gris.jpg?s=612x612&w=0&k=20&c=csQeB3utGtrGeb3WmdSxRYXaJvUy_xqlhbOIZxclcGA=';

     // Gestion de l'upload de l'image
     $image = '';
     if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
         $target_dir = "../uploads/";
         $image = basename($_FILES["image"]["name"]);
         $target_file = $target_dir . $image;
         
         // Vérifier si le fichier est une image réelle
         $check = getimagesize($_FILES["image"]["tmp_name"]);
         if($check !== false) {
             // Déplacer l'image téléchargée vers le répertoire de destination
             if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                 $image = "uploads/" . $image;
             } else {
                 echo "Sorry, there was an error uploading your file.";
             }
         } else {
             echo "File is not an image.";
         }
     }

    // Insérer le patient dans la base de données
    $stmt = $mysqli->prepare("INSERT INTO patients (name, mobile, appointment_date, doctor_id, image) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $name, $mobile, $appointment_date, $doctor_id, $image);
    $stmt->execute();
    $stmt->close();

    // Rediriger vers la page principale
    header("Location: index.php");
    exit();
}

// Créer une instance de Smarty
$smarty = new Smarty();

// Configurer les dossiers pour les templates, les templates compilés, et le cache
$smarty->setTemplateDir('../templates/');
$smarty->setCompileDir('../templates_c/');
$smarty->setCacheDir('../cache/');
$smarty->setConfigDir('../configs/');

// Récupérer les docteurs pour remplir la liste déroulante
$doctors_result = $mysqli->query("SELECT id, name, department FROM doctors");
$doctors = array();
while($row = $doctors_result->fetch_assoc()) {
    $doctors[] = $row;
}

// Assigner les docteurs à Smarty
$smarty->assign('doctors', $doctors);

// Afficher le template add_patient.tpl
$smarty->display('add_patient.tpl');

// Fermer la connexion à la base de données
$mysqli->close();
