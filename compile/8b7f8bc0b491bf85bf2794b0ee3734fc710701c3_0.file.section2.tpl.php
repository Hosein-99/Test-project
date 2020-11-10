<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-04 20:52:19
  from 'D:\share\smarty\template\section2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa314831c9958_53847509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b7f8bc0b491bf85bf2794b0ee3734fc710701c3' => 
    array (
      0 => 'D:\\share\\smarty\\template\\section2.tpl',
      1 => 1603284237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa314831c9958_53847509 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-xs-36 col-sm-35 text-center mright-mid">

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
    </div>


</div><?php }
}
