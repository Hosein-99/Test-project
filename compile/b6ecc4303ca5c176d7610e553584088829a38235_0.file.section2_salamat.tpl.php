<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-16 11:26:48
  from 'D:\share\smarty\template\section2_salamat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f89837876fed7_37317108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6ecc4303ca5c176d7610e553584088829a38235' => 
    array (
      0 => 'D:\\share\\smarty\\template\\section2_salamat.tpl',
      1 => 1604253168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f89837876fed7_37317108 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-xs-36 text-center mright-mid">

        <div class="row" style="margin-right: 2%;">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section2']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
                <div class="col-xs-17 col-ms-8 col-xs-offset-1 mrm-pics" >
                    <h3>

                        <a href="col-xs-36">
                            <figure>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['news']->value['img'];?>
" alt="" class="mrm-pic"  >
                                <figcaption class="fig-c" ><?php echo $_smarty_tpl->tpl_vars['news']->value['titr'];?>
 </figcaption>
                            </figure>
                        </a>
                    </h3>

                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


        </div>
    </div><?php }
}
