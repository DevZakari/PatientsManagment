<?php
/* Smarty version 3.1.46, created on 2024-08-16 20:24:09
  from 'C:\xampp\htdocs\PatientsManagment\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_66bf9949c3da66_02173490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bef03e98a4ab6d09e5c43235ce89eba5863d9384' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PatientsManagment\\templates\\index.tpl',
      1 => 1723832649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:components/title.tpl' => 1,
    'file:components/patient_list.tpl' => 1,
    'file:components/actions_buttons.tpl' => 1,
    'file:components/widgets_overview.tpl' => 1,
    'file:components/available_doctors.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66bf9949c3da66_02173490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content-wrapper">
    <?php $_smarty_tpl->_subTemplateRender('file:components/title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">

                    <?php $_smarty_tpl->_subTemplateRender('file:components/patient_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:components/actions_buttons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>

                <div class="col-md-5">
                    <?php $_smarty_tpl->_subTemplateRender('file:components/widgets_overview.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:components/available_doctors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>

            
        </div>
    </section>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
