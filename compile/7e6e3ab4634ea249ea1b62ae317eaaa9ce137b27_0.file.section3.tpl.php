<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 20:44:31
  from 'C:\Users\Hosein\Desktop\smarty\template\section3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa5b5afd4eab3_76240220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e6e3ab4634ea249ea1b62ae317eaaa9ce137b27' => 
    array (
      0 => 'C:\\Users\\Hosein\\Desktop\\smarty\\template\\section3.tpl',
      1 => 1603327054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa5b5afd4eab3_76240220 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-xs-36 col-sm-24 mright-top-left text-justify" >
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section3']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>

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
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>




</div><?php }
}
