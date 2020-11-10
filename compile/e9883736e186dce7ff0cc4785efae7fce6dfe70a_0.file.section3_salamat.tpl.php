<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-16 11:26:48
  from 'D:\share\smarty\template\section3_salamat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8983787b1f09_70405787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9883736e186dce7ff0cc4785efae7fce6dfe70a' => 
    array (
      0 => 'D:\\share\\smarty\\template\\section3_salamat.tpl',
      1 => 1604256943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8983787b1f09_70405787 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-xs-36  mright-top-left text-justify" >
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section3']->value, 'news');
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->index++;
$__foreach_news_8_saved = $_smarty_tpl->tpl_vars['news'];
?>
        <?php if ($_smarty_tpl->tpl_vars['news']->index == 10) {?>
            <?php break 1;?>
        <?php }?>
        <div class="col-xs-36  mrt-l">
            <a href="#">
                <img class="mrtl-pic" src="<?php echo $_smarty_tpl->tpl_vars['news']->value['img'];?>
" alt="">
            </a>
            <div class="mrtl-padd"></div>
            <div class="mrtl-ptitr">
                <a href="#"><?php echo $_smarty_tpl->tpl_vars['news']->value['rutitr'];?>
</a>
            </div>
            <div class="mrtl-titr">
                <i class="fa fa-caret-left " aria-hidden="true"></i>
                <a href="#"><?php echo $_smarty_tpl->tpl_vars['news']->value['titr'];?>
</a>
            </div>
            <div class="mrtl-matn">
                <p><?php echo $_smarty_tpl->tpl_vars['news']->value['subtitle'];?>
</p>
            </div>
        </div>

    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_8_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>




</div><?php }
}
