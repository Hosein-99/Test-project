<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-04 20:52:19
  from 'D:\share\smarty\template\section14_15_16.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa314839b58a4_53434823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6daa5c7d4559befa86fd2140468e403a5bc6e431' => 
    array (
      0 => 'D:\\share\\smarty\\template\\section14_15_16.tpl',
      1 => 1603821143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa314839b58a4_53434823 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-xs-36 mtm-2">

    <li class="p1"><span id="page1">برگزیده ها  </span> </li>
    <li class="mtm2-khat"></li>
    <li class="p2"><span id="page2">آخرین اخبار</span></li>

</div>
<div class="col-xs-36" id="page-1">
    <div class="page-1">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section14']->value, 'news');
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_14_saved = $_smarty_tpl->tpl_vars['news'];
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
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_14_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



    </div>
</div>
<div class="col-xs-36" id="page-2">
    <div class="page-2">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section14']->value, 'news');
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_15_saved = $_smarty_tpl->tpl_vars['news'];
?>
            <?php if ($_smarty_tpl->tpl_vars['news']->index == 5) {?>
                <?php break 1;?>
            <?php }?>
            <div class="page-2-in">
                <a href="#" >
                    <i class="fa fa-square fa-xs  " aria-hidden="true"></i>
                    <span>
                                          <?php echo $_smarty_tpl->tpl_vars['news']->value['titr'];?>

                                        </span>


                </a>
            </div>
        <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_15_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



    </div>


</div>
<div class="col-xs-35 mtm-3" >
    <div class="col-xs-36 mtm3-in">
        <span class="mtm3-titr">برچسب های منتخب</span>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
    </div>
</div>
<div class="col-xs-35 mtm-4" >
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
$__foreach_news_16_saved = $_smarty_tpl->tpl_vars['news'];
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
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_16_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
<div class="col-xs-35 mtm-5" >
    <div class="col-xs-36 mtm-2">

        <li class="p1"><span id="page3">پربازدید ها  </span> </li>
        <li class="mtm2-khat"></li>
        <li class="p2"><span id="page4">پر بحث ها</span></li>

    </div>
    <div class="col-xs-36" id="page-3">
        <div class="page-3">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section16']->value, 'news');
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_17_saved = $_smarty_tpl->tpl_vars['news'];
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
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_17_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


        </div>
    </div>
    <div class="col-xs-36" id="page-4">
        <div class="page-4">

        </div>
    </div>
</div><?php }
}
