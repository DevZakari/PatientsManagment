# Healthcare Management System

## Table des Matières
- [Introduction](#introduction)
- [Fonctionnalités](#fonctionnalités)
- [Structure du Projet](#structure-du-projet)
- [Technologies Utilisées](#technologies-utilisées)
- [Installation](#installation)
- [Configuration](#configuration)

## Introduction
Ce projet est un système de gestion des soins de santé qui permet de gérer les patients, les rendez-vous, les médecins et les paiements. Il est conçu pour simplifier la gestion des opérations dans un cadre médical, en fournissant des interfaces claires et un flux de travail efficace pour les utilisateurs finaux.

## Fonctionnalités
- **Gestion des Patients** : Ajouter, éditer, et supprimer les informations des patients.
- **Barre de Recherche Dynamique** : Recherche en temps réel des patients et des médecins.
- **Interface Responsive** : Interface utilisateur optimisée pour tous les appareils (ordinateurs, tablettes, smartphones).

## Structure du Projet
Voici la structure des principaux dossiers et fichiers du projet :

```plaintext
PatientsManagment/
│
├── assets/                     # Contient les fichiers statiques (CSS, JS, images)
│   ├── custom_css/             # Fichiers CSS personnalisés
│   ├── img/                    # Images du projet
│   ├── plugins/                # Plugins et bibliothèques externes (Bootstrap, FontAwesome)
│   └── dist/                   # Fichiers de distribution d'AdminLTE 
    └── uploads/                # Répertoire pour stocker les images uploadées

├── templates/                  # Contient les fichiers de templates Smarty
│   ├── header.tpl              # En-tête commune
│   ├── footer.tpl              # Pied de page commun
│   ├── index.tpl               # Page d'accueil
│   ├── add_patient.tpl         # Formulaire d'ajout de patient
│   ├── edit_patient.tpl        # Formulaire de modification de patient
│   └── ...                     # Autres templates
│
├── src/                        # Contient les fichiers PHP principaux
│   ├── index.php               # Page d'accueil (affichage des statistiques et de la liste des patients)
│   ├── add_patient.php         # Gestion de l'ajout de patients
│   ├── edit_patient.php        # Gestion de la modification des patients
│   ├── delete_patient.php      # Gestion de la suppression des patients
│   └── ...                     # Autres scripts PHP
│
├── vendor/                     # Dépendances gérées par Composer
│
├── composer.json               # Fichier de configuration Composer
├── .gitignore                  # Fichiers et dossiers à ignorer par Git
└── README.md                   # Documentation du projet


## Technologies Utilisées : 

    PHP 7.4 : Langage principal pour le back-end.
    Smarty : Moteur de templates pour séparer la logique de présentation.
    MySQL : Base de données pour stocker les informations des patients, rendez-vous, etc.
    Bootstrap 4 : Framework CSS pour une interface utilisateur responsive.
    AdminLTE : Template d'interface utilisateur basé sur Bootstrap.
    JavaScript : Pour la gestion des interactions dynamiques (barre de recherche, etc.).

## Installation : 

    Prérequis
    PHP 7.4 ou supérieur
    MySQL 
    Serveur Apache (XAMP)
    Composer : Gestionnaire de dépendances PHP


Étapes d'Installation : 

1- Cloner le dépôt :

    git clone https://github.com/DevZakari/PatientsManagment.git

2- Installer les dépendances :

    cd PatientManagment
    composer install

3- Configurer la base de données :

    Créez une base de données MySQL pour l'application : 
        patients_management

    Créer les tables : 
        doctors (id,name,department,image)
        patients (id,name,mobile,appointement_date,image, #doctor_id)    
        
4- Configurer le serveur local :

    Placez le projet dans le dossier htdocs (XAMPP) ou www (WAMP).
    Assurez-vous que le serveur est en cours d'exécution et que PHP et MySQL sont configurés.    

