<?php
/* Smarty version 3.1.46, created on 2024-08-17 01:45:26
  from 'C:\xampp\htdocs\PatientsManagment\templates\components\available_doctors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_66bfe49697af31_64491481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '735658b62ec483874ba0948d4c73fb9642a61af9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PatientsManagment\\templates\\components\\available_doctors.tpl',
      1 => 1723851925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bfe49697af31_64491481 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header">
        <h3 class="card-title" style="font-size: 30px; font-weight: bold">Available Doctors</h3>
        <div class="input-group input-group-sm mt-2" style="max-width: 300px;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="search-icon"><i class="fas fa-search"></i></span>
            </div>
            <input type="text" class="form-control search-input" id="search-doctors" placeholder="Search here"
                aria-describedby="search-icon">
        </div>
    </div>

    <div class="card-body">
        <div class="row" id="doctors-list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doctors']->value, 'doctor');
$_smarty_tpl->tpl_vars['doctor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['doctor']->value) {
$_smarty_tpl->tpl_vars['doctor']->do_else = false;
?>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center mb-4 doctor-item">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['name'];?>
"
                        style="height: 100px; width: 100px; border-radius: 50%;">
                    <p class="mt-2"><strong><?php echo $_smarty_tpl->tpl_vars['doctor']->value['name'];?>
</strong><br><?php echo $_smarty_tpl->tpl_vars['doctor']->value['department'];?>
</p>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div><?php }
}
