<?php
/* Smarty version 3.1.46, created on 2024-08-17 02:47:44
  from 'C:\xampp\htdocs\PatientsManagment\templates\add_patient.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_66bff330931397_68950013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19ec88f608e1de7a49ee61d36cc36792e395c82e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PatientsManagment\\templates\\add_patient.tpl',
      1 => 1723855288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66bff330931397_68950013 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Ajouter un Patient</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row" >
                <div class="col-md-12" >
                    <div class="card card-primary">
                        <div class="card-header" style="background-color: #02a499;">
                            <h3 class="card-title">Informations du Patient</h3>
                        </div>
                        <form action="add_patient.php" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Entrez le nom du patient" required>
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Entrez le numéro de mobile" required>
                                </div>
                                <div class="form-group">
                                    <label for="appointment_date">Date du Rendez-vous</label>
                                    <input type="datetime-local" class="form-control" id="appointment_date" name="appointment_date" required>
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
"><?php echo $_smarty_tpl->tpl_vars['doctor']->value['name'];?>
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
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" style="background-color: #02a499;">Ajouter le Patient</button>
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
