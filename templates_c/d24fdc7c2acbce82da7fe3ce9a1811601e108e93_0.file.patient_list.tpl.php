<?php
/* Smarty version 3.1.46, created on 2024-08-17 03:16:08
  from 'C:\xampp\htdocs\PatientsManagment\templates\components\patient_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_66bff9d8b329d9_76567707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd24fdc7c2acbce82da7fe3ce9a1811601e108e93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PatientsManagment\\templates\\components\\patient_list.tpl',
      1 => 1723857359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bff9d8b329d9_76567707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\PatientsManagment\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="card">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="input-group input-group">
                    <input type="text" class="form-control" id="search-input" placeholder="Search here">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-md-center">
                <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-filter"></i> Filters
                </button>
                <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-download"></i> Download
                </button>
            </div>

            <div class="col-md-4 ">
                <div class="d-inline">
                    <button class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                    <span>Page 1 of 2</span>
                    <button class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap" id="patients-table">
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>MOB</th>
                    <th>date</th>
                    <th>Doctor</th>
                    <th>DEPARTMENT</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['patients']->value, 'patient');
$_smarty_tpl->tpl_vars['patient']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['patient']->value) {
$_smarty_tpl->tpl_vars['patient']->do_else = false;
?>
                    <tr class="patient-row">
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['patient']->value['image']) {?>
                                <img src="../<?php echo $_smarty_tpl->tpl_vars['patient']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['patient']->value['name'];?>
"
                                    style="height: 50px; width: 50px; border-radius: 50%;">
                            <?php } else { ?>
                                <img src="../assets/img/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['patient']->value['name'];?>
"
                                    style="height: 50px; width: 50px; border-radius: 50%;">
                            <?php }?>
                        </td>
                        <td style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['patient']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['mobile'];?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['patient']->value['appointment_date'],"%d/%m/%Y %H:%M");?>
</td>
                        <td style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['patient']->value['doctor_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['doctor_department'];?>
</td>
                        <td>
                            <a href="edit_patient.php?id=<?php echo $_smarty_tpl->tpl_vars['patient']->value['id'];?>
" class="btn btn-sm btn-warning">Modifier</a>
                            <a href="delete_patient.php?id=<?php echo $_smarty_tpl->tpl_vars['patient']->value['id'];?>
" class="btn btn-sm btn-danger"
                                onclick="return confirm('Voulez-vous vraiment supprimer ce patient ?');">Supprimer</a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
</div><?php }
}
