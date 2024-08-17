<?php
/* Smarty version 3.1.46, created on 2024-08-17 01:49:05
  from 'C:\xampp\htdocs\PatientsManagment\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_66bfe5718d9df7_77170321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ead8c40a35af5943c67248fe35b8a42b91fa4651' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PatientsManagment\\templates\\header.tpl',
      1 => 1723852035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bfe5718d9df7_77170321 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Management System</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="../assets/custom_css/search_doctors_bar.css">  
    <link rel="stylesheet" href="../assets/custom_css/side_bar_effects.css">  


</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <aside class="main-sidebar" style="background-color: #02A499;">
            <a href="index.php" class="brand-link">
                <img src="../assets/img/logo.png" alt="MediCore Logo" style="height: 100px; width: auto;">
            </a>

            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item mb-2">
                            <a href="index.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt" style="color: #ffffff;"></i>
                                <p style="color: #ffffff;">Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-injured" style="color: #ffffff;"></i>
                                <p style="color: #ffffff;">Patient Details</p>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-md" style="color: #ffffff;"></i>
                                <p style="color: #ffffff;">Doctor Details</p>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-money-check-alt" style="color: #ffffff;"></i>
                                <p style="color: #ffffff;">Payment Details</p>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tv" style="color: #ffffff;"></i>
                                <p style="color: #ffffff;">E-Channeling</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
</aside>
<?php }
}
