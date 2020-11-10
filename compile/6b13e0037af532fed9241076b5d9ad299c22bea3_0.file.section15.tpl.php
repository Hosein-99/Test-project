<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-16 11:26:48
  from 'D:\share\smarty\template\section15.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8983788adc64_31171845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b13e0037af532fed9241076b5d9ad299c22bea3' => 
    array (
      0 => 'D:\\share\\smarty\\template\\section15.tpl',
      1 => 1603821200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8983788adc64_31171845 (Smarty_Internal_Template $_smarty_tpl) {
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
$__foreach_news_11_saved = $_smarty_tpl->tpl_vars['news'];
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
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_11_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div><?php }
}
