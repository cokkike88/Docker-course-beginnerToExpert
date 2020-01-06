<?php
/* Smarty version 3.1.33, created on 2019-11-12 20:05:54
  from '/var/www/html/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcb0292dee9d9_59035244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '278a541ceb684082876b371e84d2312e06e828ff' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcb0292dee9d9_59035244 (Smarty_Internal_Template $_smarty_tpl) {
?>

<a class="btn btn-default _blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf',true,array(),array('submitAction'=>'generateOrderSlipPDF','id_order_slip'=>intval($_smarty_tpl->tpl_vars['order_slip']->value->id))),'html','UTF-8' ));?>
">
	<i class="icon-file-text"></i>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download credit slip','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>

</a>

<?php }
}
