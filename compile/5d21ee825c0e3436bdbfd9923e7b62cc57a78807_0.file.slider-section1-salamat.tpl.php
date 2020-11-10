<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-16 11:26:48
  from 'D:\share\smarty\template\slider-section1-salamat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f89837872a5c6_63850099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d21ee825c0e3436bdbfd9923e7b62cc57a78807' => 
    array (
      0 => 'D:\\share\\smarty\\template\\slider-section1-salamat.tpl',
      1 => 1604256332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f89837872a5c6_63850099 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-xs-36  salamat_slider" >
        <div class="owl-carousel owl-theme">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section1']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>


            <div class="item">
                <div class="col-xs-36">
                    <img src="img/sa1.jpg" alt="">
                </div>
                <div class="col-xs-36 s-matn-pad">
                    <div class="s-rutitr">
                        <?php echo $_smarty_tpl->tpl_vars['news']->value['rutitr'];?>

                    </div>
                    <div class="s-titr">
                        <a href="">
                            <?php echo $_smarty_tpl->tpl_vars['news']->value['titr'];?>

                        </a>
                    </div>
                    <div class="s-sub">
                        <?php echo $_smarty_tpl->tpl_vars['news']->value['subtitle'];?>

                    </div>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>

    </div>
</div><?php }
}
