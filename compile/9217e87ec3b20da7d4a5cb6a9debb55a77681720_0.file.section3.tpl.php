<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-04 20:52:19
  from 'D:\share\smarty\template\section3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa314838f9d50_81730244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9217e87ec3b20da7d4a5cb6a9debb55a77681720' => 
    array (
      0 => 'D:\\share\\smarty\\template\\section3.tpl',
      1 => 1603285652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa314838f9d50_81730244 (Smarty_Internal_Template $_smarty_tpl) {
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
