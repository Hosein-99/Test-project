<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-16 11:26:48
  from 'D:\share\smarty\template\section14.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f898378805953_92420432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '024f3f1e12fa0a6f1c57982464722bc5c419a78b' => 
    array (
      0 => 'D:\\share\\smarty\\template\\section14.tpl',
      1 => 1604253973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f898378805953_92420432 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-xs-35" style="margin-bottom: 15px">
    <div class="col-xs-36 mtm-2">

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
$__foreach_news_9_saved = $_smarty_tpl->tpl_vars['news'];
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
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_9_saved;
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
$__foreach_news_10_saved = $_smarty_tpl->tpl_vars['news'];
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
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_10_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



        </div>


    </div>
</div>
<?php }
}
