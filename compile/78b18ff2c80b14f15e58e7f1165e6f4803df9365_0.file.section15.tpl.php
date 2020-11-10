<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-07 12:20:38
  from 'C:\Users\Hosein\Desktop\smarty\template\section15.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa69116624515_96487595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78b18ff2c80b14f15e58e7f1165e6f4803df9365' => 
    array (
      0 => 'C:\\Users\\Hosein\\Desktop\\smarty\\template\\section15.tpl',
      1 => 1603862602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa69116624515_96487595 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-xs-35 mtm-4" >
    <div class="col-xs-36 mtm3-in">
        <span class="mtm3-titr">مطبوعات</span>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section15']->value, 'news');
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_0_saved = $_smarty_tpl->tpl_vars['news'];
?>
        <?php if ($_smarty_tpl->tpl_vars['news']->first) {?>
            <div class="col-xs-36 mtm4-in text-center">

                <a href="#"><figure>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['section15']->value['img'];?>
" alt="" style="width: 100%; height: 216px;margin-bottom: 10px;">
                        <figcaption><?php echo $_smarty_tpl->tpl_vars['section15']->value['titr'];?>
</figcaption>

                    </figure></a>


            </div>
        <?php }?>

    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div><?php }
}
