<?php
/* Smarty version 3.1.46, created on 2024-08-17 01:50:08
  from 'C:\xampp\htdocs\PatientsManagment\templates\components\actions_buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_66bfe5b0100334_23659534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fe2e9b8ec2b3ac58a212c5914be522bbaaeba6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PatientsManagment\\templates\\components\\actions_buttons.tpl',
      1 => 1723852205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bfe5b0100334_23659534 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row" style="max-width:100%">
    <div class="col-lg-4 col-12 mb-3">
        <a href="add_patient.php" class="btn btn-light btn-block" style="background-color: #e3f7fe; padding: 40px; border-radius: 15px;">
            <div class="d-flex align-items-center justify-content-center">
                <img src="../assets/img/admit_patient_icon.png" alt="Admit New Patient" style="height: 50px; margin-right: 15px;">
                <div>
                    <strong style="color: #007bff;">ADMIT NEW</strong><br>
                    <span style="color: #007bff;">PATIENT</span>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-4 col-12 mb-3">
        <a href="#" class="btn btn-light btn-block" style="background-color: #e3f7fe; padding: 40px; border-radius: 15px;">
            <div class="d-flex align-items-center justify-content-center">
                <img src="../assets/img/emergency_room_icon.png" alt="Emergency Room" style="height: 50px; margin-right: 15px;">
                <div>
                    <strong style="color: #007bff;">EMERGENCY</strong><br>
                    <span style="color: #007bff;">ROOM</span>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-4 col-12 mb-3">
        <a href="#" class="btn btn-light btn-block" style="background-color: #e3f7fe; padding: 40px; border-radius: 15px;">
            <div class="d-flex align-items-center justify-content-center">
                <img src="../assets/img/pharmacy_details_icon.png" alt="Pharmacy Details" style="height: 50px; margin-right: 15px;">
                <div>
                    <strong style="color: #02A499;">PHARMACY</strong><br>
                    <span style="color: #02A499;">DETAILS</span>
                </div>
            </div>
        </a>
    </div>
</div>
<?php }
}
