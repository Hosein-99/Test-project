<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-04 20:58:58
  from 'D:\share\smarty\template\section16.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa3161241d122_77627649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06df0418e6e4fde86032d2de7700511f973dc37b' => 
    array (
      0 => 'D:\\share\\smarty\\template\\section16.tpl',
      1 => 1603917138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa3161241d122_77627649 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-xs-35 mtm-5" >
    <div class="col-xs-36 mtm-2">

        <li class="p1"><span id="page3">پربازدید ها  </span> </li>
        <li class="mtm2-khat"></li>
        <li class="p2"><span id="page4">پر بحث ها</span></li>

    </div>
    <div class="col-xs-36" id="page-3">
        <div class="page-3">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section16']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
                <div class="page-1-in text-right">
                    <i class="fa fa-square fa-xs  " aria-hidden="true"></i>
                    <a href="#" >

                                        <span>
                                           <?php echo $_smarty_tpl->tpl_vars['news']->value['titr'];?>

                                        </span>


                    </a>

                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <div class="wrapper"></div>
        </div>
    </div>
    <div class="col-xs-36" id="page-4">
        <div class="page-4">

        </div>
    </div>
</div><?php }
}
