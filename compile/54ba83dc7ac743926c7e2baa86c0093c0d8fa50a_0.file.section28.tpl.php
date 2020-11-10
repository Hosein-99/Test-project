<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 20:44:35
  from 'C:\Users\Hosein\Desktop\smarty\template\section28.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa5b5b3c03088_19848358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54ba83dc7ac743926c7e2baa86c0093c0d8fa50a' => 
    array (
      0 => 'C:\\Users\\Hosein\\Desktop\\smarty\\template\\section28.tpl',
      1 => 1603328306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa5b5b3c03088_19848358 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-xs-36 col-sm-9 text-right mbm" >
    <div class="col-xs-36 text-right mbm-h" >
        <span style="border-bottom: 4px solid red; padding-bottom: 0 ;"><?php echo $_smarty_tpl->tpl_vars['section28']->value['header'];?>
</span>
    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section28']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'newst');
$_smarty_tpl->tpl_vars['newst']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['newst']->value) {
$_smarty_tpl->tpl_vars['newst']->index++;
$__foreach_newst_30_saved = $_smarty_tpl->tpl_vars['newst'];
?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['section28']->value['header'];
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['newst']->value == $_prefixVariable1) {?>
                <?php continue 1;?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['newst']->index == 0) {?>
                <div class="col-xs-36 mbm-i">
                    <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['newst']->value['img'];?>
" alt="" style="width: 100%;"></a>
                </div>

                <div class="col-xs-36 mbm-li" >
                    <a href=""><span><?php echo $_smarty_tpl->tpl_vars['newst']->value['title'];?>
</span></a>

                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['newst']->index == 1) {?>
                <div class="col-xs-36 mbm-li-b">
                    <i class="fa fa-square" aria-hidden="true"></i>
                    <a href=""><span> <?php echo $_smarty_tpl->tpl_vars['newst']->value['title'];?>
</span></a>
                </div>
            <?php }?>


        <?php
$_smarty_tpl->tpl_vars['newst'] = $__foreach_newst_30_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


</div><?php }
}
