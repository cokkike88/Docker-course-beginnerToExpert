<?php
/* Smarty version 3.1.33, created on 2019-11-12 20:05:49
  from '/var/www/html/themes/classic/templates/customer/order-return.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcb028dcb5de9_90129217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb6ffa7cd48f65ad5ee18464a57e987e471d76b6' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/order-return.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcb028dcb5de9_90129217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6033086835dcb028dc60817_74541360', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4514325165dcb028dc63279_84374736', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_6033086835dcb028dc60817_74541360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_6033086835dcb028dc60817_74541360',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h1 class="h1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Return details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h1>
<?php
}
}
/* {/block 'page_title'} */
/* {block 'order_return_infos'} */
class Block_20333637185dcb028dc63eb5_92992111 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="order-return-infos" class="card">
      <div class="card-block">
        <p>
          <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%number% on %date%','d'=>'Shop.Theme.Customeraccount','sprintf'=>array('%number%'=>$_smarty_tpl->tpl_vars['return']->value['return_number'],'%date%'=>$_smarty_tpl->tpl_vars['return']->value['return_date'])),$_smarty_tpl ) );?>

          </strong>
        </p>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We have logged your return request.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</p>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your package must be returned to us within %number% days of receiving your order.','d'=>'Shop.Theme.Customeraccount','sprintf'=>array('%number%'=>$_smarty_tpl->tpl_vars['configuration']->value['number_of_days_for_return'])),$_smarty_tpl ) );?>
</p>
        <p>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The current status of your merchandise return is: [1] %status% [/1]','d'=>'Shop.Theme.Customeraccount','sprintf'=>array('[1]'=>'<strong>','[/1]'=>'</strong>','%status%'=>$_smarty_tpl->tpl_vars['return']->value['state_name'])),$_smarty_tpl ) );?>

        </p>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of items to be returned:','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</p>
        <table class="table table-striped table-bordered">
          <thead class="thead-default">
            <tr>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</th>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
            </tr>
          </thead>
          <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
            <tr>
              <td>
                <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_name'], ENT_QUOTES, 'UTF-8');?>
</strong>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['product_reference']) {?>
                  <br />
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_reference'], ENT_QUOTES, 'UTF-8');?>

                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizations'], 'customization');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
?>
                    <div class="customization">
                      <a href="#" data-toggle="modal" data-target="#product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                    </div>
                    <div class="modal fade customization-modal" id="product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
                          </div>
                          <div class="modal-body">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['fields'], 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                              <div class="product-customization-line row">
                                <div class="col-sm-3 col-xs-4 label">
                                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

                                </div>
                                <div class="col-sm-9 col-xs-8 value">
                                  <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
                                    <?php if ((int)$_smarty_tpl->tpl_vars['field']->value['id_module']) {?>
                                      <?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>

                                    <?php } else { ?>
                                      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>

                                    <?php }?>
                                  <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?>
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
">
                                  <?php }?>
                                </div>
                              </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
              </td>
              <td>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_quantity'], ENT_QUOTES, 'UTF-8');?>

              </td>
            </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </div>
    </div>
  <?php
}
}
/* {/block 'order_return_infos'} */
/* {block 'page_content'} */
class Block_4514325165dcb028dc63279_84374736 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_4514325165dcb028dc63279_84374736',
  ),
  'order_return_infos' => 
  array (
    0 => 'Block_20333637185dcb028dc63eb5_92992111',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20333637185dcb028dc63eb5_92992111', 'order_return_infos', $this->tplIndex);
?>


  <?php if ($_smarty_tpl->tpl_vars['return']->value['state'] == 2) {?>
    <section class="card">
      <div class="card-block">
        <h3 class="card-title h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reminder','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h3>
        <p class="card-text">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All merchandise must be returned in its original packaging and in its original state.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
<br>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please print out the [1]returns form[/1] and include it with your package.','d'=>'Shop.Theme.Customeraccount','sprintf'=>array('[1]'=>(('<a href="').($_smarty_tpl->tpl_vars['return']->value['print_url'])).('">'),'[/1]'=>'</a>')),$_smarty_tpl ) );?>

          <br>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please check the [1]returns form[/1] for the correct address.','d'=>'Shop.Theme.Customeraccount','sprintf'=>array('[1]'=>(('<a href="').($_smarty_tpl->tpl_vars['return']->value['print_url'])).('">'),'[/1]'=>'</a>')),$_smarty_tpl ) );?>

        </p>
        <p class="card-text">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When we receive your package, we will notify you by email. We will then begin processing order reimbursement.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
<br>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please let us know if you have any questions.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

          </a><br>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If the conditions of return listed above are not respected, we reserve the right to refuse your package and/or reimbursement.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </p>
      </div>
    </section>
  <?php }
}
}
/* {/block 'page_content'} */
}
