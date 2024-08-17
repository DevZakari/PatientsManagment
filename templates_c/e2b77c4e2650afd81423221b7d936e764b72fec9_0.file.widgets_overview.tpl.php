<?php
/* Smarty version 3.1.46, created on 2024-08-17 01:30:49
  from 'C:\xampp\htdocs\PatientsManagment\templates\components\widgets_overview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_66bfe129c96c99_63380867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2b77c4e2650afd81423221b7d936e764b72fec9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PatientsManagment\\templates\\components\\widgets_overview.tpl',
      1 => 1723842150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bfe129c96c99_63380867 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-lg-6 col-12">
        <div class="info-box">
            <span class="info-box-icon elevation-1" style="background-color: #E1FFFD;">
                <i class="fas fa-calendar-alt" style="color: #000000;"></i>
            </span>
            <div class="info-box-content">
                <span class="info-box-number">140</span>
                <span class="info-box-text">Total Appointments</span>

            </div>
        </div>
    </div>
    <div class="col-lg-6 col-12">
        <div class="info-box">
            <span class="info-box-icon  elevation-1" style="background-color: #E1FFFD;"><i class="fas fa-user-md"
                    style="color: #000000;"></i></span>
            <div class="info-box-content">
                <span class="info-box-number"><?php echo $_smarty_tpl->tpl_vars['totalPatients']->value;?>
</span>
                <span class="info-box-text">Total Patients</span>

            </div>
        </div>
    </div>
    <div class="col-lg-6 col-12">
        <div class="info-box">
            <span class="info-box-icon elevation-1" style="background-color: #E1FFFD;">
                <i class="fas fa-times-circle" style="color: #000000;"></i>
            </span>
            <div class="info-box-content">
                <span class="info-box-number">70</span>
                <span class="info-box-text">Total Cancellations</span>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-12">
        <div class="info-box">
            <span class="info-box-icon  elevation-1" style="background-color: #E1FFFD;"><i class="fas fa-chart-line"
                    style="color: #000000;"></i></span>
            <div class="info-box-content">
                <span class="info-box-number">120</span>

                <span class="info-box-text">Total Avg per Doctor</span>
            </div>
        </div>
    </div>
</div><?php }
}
