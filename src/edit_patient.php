<?php
require '../vendor/autoload.php';

$mysqli = new mysqli("localhost", "root", "", "patients_management");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Vérifier si un ID de patient est passé
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Récupérer les informations du patient
    $stmt = $mysqli->prepare("SELECT * FROM patients WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $patient = $result->fetch_assoc();
    $stmt->close();

    // Si le formulaire est soumis, mettre à jour les informations du patient
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $appointment_date = $_POST['appointment_date'];
        $doctor_id = $_POST['doctor_id'];

        // Gestion de l'upload de la nouvelle image
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            echo "Fichier uploadé avec succès. <br>";

            $target_dir = "../uploads/";
            $new_image = uniqid() . '-' . basename($_FILES["image"]["name"]);
            $target_file = $target_dir . $new_image;
            
            // Vérifier si le fichier est une image réelle
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    echo "Fichier déplacé avec succès dans " . $target_file . "<br>";

                    $image = "uploads/" . $new_image;
                } else {
                    echo "Erreur lors du déplacement du fichier.<br>";
                }
            } else {
                echo "Le fichier n'est pas une image.<br>";
            }
        } else {
            echo "Aucune nouvelle image n'a été uploadée. <br>";
            $image = $patient['image'];
        }

        // Définir le patient_id à partir de l'ID récupéré
        $patient_id = $id;

        // Préparer la requête d'update
        $stmt = $mysqli->prepare("UPDATE patients SET name = ?, mobile = ?, appointment_date = ?, doctor_id = ?, image = ? WHERE id = ?");
        if (!$stmt) {
            die("Erreur de préparation de la requête : " . $mysqli->error);
        }

        // Associer les paramètres
        if (!$stmt->bind_param("sssisi", $name, $mobile, $appointment_date, $doctor_id, $image, $patient_id)) {
            die("Erreur lors de l'association des paramètres : " . $stmt->error);
        }

        // Exécuter la requête
        if (!$stmt->execute()) {
            die("Erreur lors de l'exécution de la requête : " . $stmt->error);
        } else {
            echo "Modification effectuée avec succès.<br>";
        }

        // Rediriger vers la page principale (tu peux décommenter cette ligne après débogage)
        header("Location: index.php");
        exit();
    }

    // Récupérer les docteurs pour remplir la liste déroulante
    $doctors_result = $mysqli->query("SELECT id, name, department FROM doctors");
    $doctors = array();
    while($row = $doctors_result->fetch_assoc()) {
        $doctors[] = $row;
    }

    // Créer une instance de Smarty
    $smarty = new Smarty();

    // Configurer les dossiers pour les templates, les templates compilés, et le cache
    $smarty->setTemplateDir('../templates/');
    $smarty->setCompileDir('../templates_c/');
    $smarty->setCacheDir('../cache/');
    $smarty->setConfigDir('../configs/');

    // Assigner les informations du patient et les docteurs à Smarty
    $smarty->assign('patient', $patient);
    $smarty->assign('doctors', $doctors);

    // Afficher le template edit_patient.tpl
    $smarty->display('edit_patient.tpl');
}

// Fermer la connexion à la base de données
$mysqli->close();

?>
