<?php
/* Smarty version 3.1.46, created on 2024-08-17 03:22:57
  from 'C:\xampp\htdocs\PatientsManagment\templates\edit_patient.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_66bffb71043799_42562413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fc04e662cbcc4e4e227c26635b6aa4789f79662' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PatientsManagment\\templates\\edit_patient.tpl',
      1 => 1723857644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66bffb71043799_42562413 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\PatientsManagment\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Modifier un Patient</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header" style="background-color: #02a499;">
                            <h3 class="card-title">Modifier les Informations du Patient</h3>
                        </div>
                        <form action="edit_patient.php?id=<?php echo $_smarty_tpl->tpl_vars['patient']->value['id'];?>
" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['patient']->value['name'];?>
" required>
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $_smarty_tpl->tpl_vars['patient']->value['mobile'];?>
" required>
                                </div>
                                <div class="form-group">
                                    <label for="appointment_date">Date du Rendez-vous</label>
                                    <input type="datetime-local" class="form-control" id="appointment_date" name="appointment_date" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['patient']->value['appointment_date'],'Y-m-d\TH:i');?>
" required>
                                </div>
                                <div class="form-group">
                                    <label for="doctor_id">Docteur</label>
                                    <select class="form-control" id="doctor_id" name="doctor_id" required>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doctors']->value, 'doctor');
$_smarty_tpl->tpl_vars['doctor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['doctor']->value) {
$_smarty_tpl->tpl_vars['doctor']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['doctor']->value['id'] == $_smarty_tpl->tpl_vars['patient']->value['doctor_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['doctor']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['doctor']->value['department'];?>
)</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image du Patient</label>
                                    <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                                    <img src="../<?php echo $_smarty_tpl->tpl_vars['patient']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['patient']->value['name'];?>
" style="height: 50px; width: 50px; border-radius: 50%; margin-top: 10px;">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" style="background-color: #02a499;">Enregistrer les Modifications</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
