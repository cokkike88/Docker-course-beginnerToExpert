<?php
/* Smarty version 3.1.33, created on 2019-11-12 20:05:49
  from '/var/www/html/themes/classic/templates/customer/_partials/block-address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcb028dddc9b2_84660626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a94b4abf2e2fd39d97fbfb3b8ca4579f167900' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/_partials/block-address.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcb028dddc9b2_84660626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1044202075dcb028ddc5986_05185799', 'address_block_item');
?>

<?php }
/* {block 'address_block_item_actions'} */
class Block_3852177435dcb028ddce917_17702882 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="address-footer">
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','id'=>$_smarty_tpl->tpl_vars['address']->value['id']),$_smarty_tpl ) );?>
" data-link-action="edit-address">
          <i class="material-icons">&#xE254;</i>
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        </a>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','id'=>$_smarty_tpl->tpl_vars['address']->value['id'],'params'=>array('delete'=>1,'token'=>$_smarty_tpl->tpl_vars['token']->value)),$_smarty_tpl ) );?>
" data-link-action="delete-address">
          <i class="material-icons">&#xE872;</i>
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        </a>
      </div>
    <?php
}
}
/* {/block 'address_block_item_actions'} */
/* {block 'address_block_item'} */
class Block_1044202075dcb028ddc5986_05185799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'address_block_item' => 
  array (
    0 => 'Block_1044202075dcb028ddc5986_05185799',
  ),
  'address_block_item_actions' => 
  array (
    0 => 'Block_3852177435dcb028ddce917_17702882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article id="address-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="address" data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="address-body">
      <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['alias'], ENT_QUOTES, 'UTF-8');?>
</h4>
      <address><?php echo $_smarty_tpl->tpl_vars['address']->value['formatted'];?>
</address>
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3852177435dcb028ddce917_17702882', 'address_block_item_actions', $this->tplIndex);
?>

  </article>
<?php
}
}
/* {/block 'address_block_item'} */
}
